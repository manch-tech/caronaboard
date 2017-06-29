module Rides.RideRequest.Styles exposing (Classes(..), className, namespace, styles)

import Common.CssHelpers exposing (..)
import Css exposing (..)
import Css.Namespace
import Testable.Html exposing (Attribute)


namespace : String
namespace =
    "rideRequest"


className : Classes -> Attribute msg
className =
    namespacedClass namespace


type Classes
    = Contact


styles : Stylesheet
styles =
    (stylesheet << Css.Namespace.namespace namespace)
        [ class Contact
            [ fontSize (px 24)
            ]
        ]