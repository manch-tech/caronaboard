module Msg exposing (Msg(..))

import GiveRide.Msg as GiveRide
import Layout.Msg as Layout
import Login.Msg as Login
import Notifications.Msg as Notifications
import RideRequest.Msg as RideRequest
import Rides.Msg as Rides
import UrlRouter.Msg as UrlRouter


type Msg
    = MsgForUrlRouter UrlRouter.Msg
    | MsgForLogin Login.Msg
    | MsgForRides Rides.Msg
    | MsgForLayout Layout.Msg
    | MsgForGiveRide GiveRide.Msg
    | MsgForNotifications Notifications.Msg
    | MsgForRideRequest RideRequest.Msg
