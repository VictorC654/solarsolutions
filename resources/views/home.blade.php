{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--//--}}
{{--@endsection--}}

<!DOCTYPE html>

    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <script src="https://kit.fontawesome.com/653369ca55.js" crossorigin="anonymous"></script>
        <title>{{ config('app.name', 'SolarSolutions') }}</title>
        <style>
            @font-face {
                font-family:logoFont;
                src:url("/fonts/guildof.ttf");
            }
            @font-face {
                font-family:textFont;
                src:url("/fonts/GlacialIndifference-Regular.otf");
            }
            html {
                scroll-behavior: smooth;
            }
            body::-webkit-scrollbar {
                display: none;
            }
            * {
                padding:0;
                margin:0;
                font-family:textFont;
            }
            .first-page {
                height:100vh;
                background-image: linear-gradient(0, rgba(0, 0, 0,0.4), rgba(0, 0, 0, 0.8)),url("/images/home.jpg");
                background-repeat:no-repeat;
            }
            .second-page {
                height:100vh;
            }
            .navbar {
                height:8vh;
                border-bottom:.2em solid white;
                z-index:1;
                display:flex;
                flex-direction: row;
            }
            .navbar .logo {
                display:flex;
                justify-content:left;
                align-items:left;
                font-family:textFont;
                color:#ffc300;
                font-weight:bold;
                margin-left:5em;
                padding:.2em;
                font-size:5vh;
            }
            .navbar .linksContainer {
                display:flex;
                justify-content:center;
                align-items:center;
                font-family:textFont;
                margin-left:30em;
            }
            .navbar a {
                color:white;
                font-size:3vh;
                padding:0 1.5em 0 1.5em;
                cursor:pointer;
            }
            .logo {
                display:flex;
                justify-content:left;
                align-items:left;
                font-family:textFont;
                color:#ffc300;
                font-weight:bold;
                font-size:4vh;
            }
            .icons-container {
                display:flex;
                margin-top:20vh;
                justify-content:center;
                flex-direction:row;
                align-items:center;
            }
            .downArrow {
                display:flex;
                margin-top:4vh;
                justify-content:center;
                align-items:center;
            }
            .downArrow a {
                font-size:3vh;
                transition:.5s all ease;
                color:#dddddd;
                background:transparent;
                cursor:pointer;
            }
            .downArrow a:hover {
                color:white;
                transition:.5s all ease;
            }
            .main-text {
                display:flex;
                margin-top:36vh;
                justify-content:center;
                align-items:center;
                font-family:textFont;
                color:white;
                font-size:8vh;
                letter-spacing:.3vh"
            }
            .secondary-text {
                text-align:center;
                margin-top:.-3vh;
                font-family:textFont;
                color:whitesmoke;
                padding:0 7em 0 7em;
                font-size:4vh;"
            }
            .icons-container .icon {
                display:flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                font-size:4vh;
                padding:0 1em 0 1em;
                color:white;
            }
            .second-page {
                background-color:black;
                display:flex;
                flex-direction:row;
                /*justify-content: center;*/
                /*align-items: center;*/
            }
            .second-page :first-child {
                width:40em;
            }
            .second-page .title {
                color:white;
                font-size:7vh;
                animation: slide-up 2.5s;
            }
            @keyframes slide-up {
                from {
                    opacity:0.2;
                    font-size:3vh;
                    letter-spacing:2vh;
                }
                to {
                    opacity:1;
                    font-size:7vh;
                    letter-spacing:0;
                }
            }
        </style>
    </head>
    <body>
    <div class="first-page">
        <div class="navbar">
            <div class="logo">
                solarsolutions
            </div>
            <div class="linksContainer">
                <a>Home</a>
                <a>Order</a>
                <a>FAQ</a>
            </div>
            </div>
            <div class="main-text">
                An inspiring step forward.
            </div>
            <div class="secondary-text">
                <div class="logo" style="display:inline;">
                    solarsolutions
                </div> is an international firm that <b>creates</b>,
                <b>distributes</b> and <b>installs</b> solar panels, for a
                <b>cleaner</b> and <b>more efficient</b> future.
            </div>
        <div class="icons-container">
            <div class="icon">
                <i class="fa-solid fa-solar-panel"></i><div style="margin-top:.8em;display:inline;font-size:2vh;">
                    futuristic looks
                </div>
            </div>
            <div class="icon">
                <i class="fa-solid fa-bolt-lightning"></i><div style="margin-top:.8em;display:inline;font-size:2vh;">
                    renewable energy
                </div>
            </div>
            <div class="icon">
                <i class="fa-solid fa-seedling"></i> <div style="margin-top:.8em;display:inline;font-size:2vh;">
                    eco friendly
                </div>
            </div>
            <div class="icon">
                <i class="fa-solid fa-hammer"></i> <div style="margin-top:.8em;display:inline;font-size:2vh;">
                    extreme durability
                </div>
            </div>
        </div>
        <div class="downArrow">
            <a class="downArrowButton" href="#second-page">
                <i class="fa-solid fa-caret-down"></i>
            </a>
        </div>
    </div>
    <div class="second-page" id="second-page">

    </div>
    </body>

</html>
