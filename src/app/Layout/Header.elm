module Layout.Header exposing (header)

import Testable.Html exposing (Html, img, h1, h2, a, b, text, button, nav, div, ul, li, i)
import Testable.Html.Attributes exposing (id, class, href, src, rel, alt)
import Testable.Html.Events exposing (onClick)
import Msg exposing (Msg(MsgForLogin))
import Login.Msg exposing (Msg(SignOut))
import Common.Icon exposing (icon)


header : Html Msg.Msg
header =
    Testable.Html.header [ class "navbar-fixed" ]
        [ nav []
            [ div [ class "nav-wrapper" ]
                [ a [ class "brand-logo left", href "/" ]
                    [ b [] [ text "Carona" ]
                    , text "Board"
                    ]
                , ul [ class "right" ]
                    [ li []
                        [ a [ href "http://goo.gl/forms/ohEbgkMa9i" ]
                            [ icon "directions_car" ]
                        ]
                    , li []
                        [ a [ class "dropdown-button", href "#" ]
                            [ icon "more_vert"
                            ]
                        ]
                    ]
                ]
            , button [ id "signout-button", onClick (MsgForLogin SignOut) ] [ text "Sair" ]
            ]
        ]
