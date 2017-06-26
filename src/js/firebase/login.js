var firebase = require("firebase");
var fetchRides = require("./rides").fetchRides;
var tuple = require("./helpers").tuple;

module.exports = function(firebase, database, app) {
  app.ports.checkRegistration.subscribe(function(email) {
    firebase
      .auth()
      .fetchProvidersForEmail(email)
      .then(function(providers) {
        app.ports.checkRegistrationResponse.send(providers.length > 0);
      })
      .catch(function() {
        app.ports.checkRegistrationResponse.send(false);
      });
  });

  app.ports.signIn.subscribe(function(credentials) {
    firebase
      .auth()
      .signInWithEmailAndPassword(credentials.email, credentials.password)
      .then(signInUser)
      .catch(function(error) {
        app.ports.signInResponse.send(tuple(error.message, null));
      });
  });

  app.ports.signOut.subscribe(function() {
    firebase.auth().signOut().then(signOutUser);
  });

  var signInUser = function(user) {
    firebase
      .database()
      .ref("profiles/" + user.uid)
      .once("value", function(profile) {
        localStorage.setItem("profile", JSON.stringify(profile.val()));
        app.ports.signInResponse.send(
          tuple(null, {
            user: { id: user.uid },
            profile: profile.val()
          })
        );
      });
    fetchRides(firebase, database, app);
  };

  var signOutUser = function() {
    localStorage.removeItem("profile");
    app.ports.signOutResponse.send(null);
  };

  firebase.auth().onAuthStateChanged(function() {
    var user = firebase.auth().currentUser;
    if (user) {
      signInUser(user);
    } else {
      signOutUser();
    }
  });

  app.ports.passwordReset.subscribe(function(email) {
    firebase
      .auth()
      .sendPasswordResetEmail(email)
      .then(function() {
        app.ports.passwordResetResponse.send(null);
      })
      .catch(function(error) {
        app.ports.passwordResetResponse.send(error.message);
      });
  });

  app.ports.signUp.subscribe(function(credentials) {
    firebase
      .auth()
      .createUserWithEmailAndPassword(credentials.email, credentials.password)
      .then(function(user) {
        app.ports.signUpResponse.send(tuple(null, true));
      })
      .catch(function(error) {
        app.ports.signUpResponse.send(tuple(error.message, null));
      });
  });

  app.ports.saveProfile.subscribe(function(profile) {
    var currentUser = firebase.auth().currentUser;

    firebase
      .database()
      .ref("profiles/" + currentUser.uid)
      .set(profile)
      .then(function(profileRef) {
        app.ports.profileResponse.send(tuple(null, profile));
      })
      .catch(function(error) {
        app.ports.profileResponse.send(tuple(error.message, null));
      });
  });
};