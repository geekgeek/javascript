module Main exposing (main)

import Browser
import Html exposing (Html, button, div, text)
import Html.Events exposing (onClick)


type alias Model =
    { count : Int,
      hello : String
    }


initialModel : Model
initialModel =
    { count = 0,
      hello = "a"
    }


type Msg
    = Increment
    | Decrement
    | Upmuch
    | Dnmuch


update : Msg -> Model -> Model
update msg model =
    case msg of
        Increment ->
            { model | count = model.count + 1 }

        Decrement ->
            { model | count = model.count - 1 }
            
        Upmuch ->
            { model | hello = model.hello ++ "<h1>hello</h1>"}
            
        Dnmuch ->
            { model | hello = model.hello ++ "<h2>c</h2>"}


-- //##########################


-- //#############################

view : Model -> Html Msg
view model =

    div []
        [ button [ onClick Increment ] [ text "+1" ]
        , div [] [ text <| String.fromInt model.count ]
        , button [ onClick Decrement ] [ text "-1" ]

        , button [ onClick Upmuch ] [ text "+b" ]
        , div [] [ text <| model.hello ]
        , button [ onClick Dnmuch ] [ text "+c" ]
        
        ]


main : Program () Model Msg
main =
    Browser.sandbox
        { init = initialModel
        , view = view
        , update = update
        }
