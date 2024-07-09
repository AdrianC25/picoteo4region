@extends('layouts.app')
@section('content')
    @include('layouts.navbar')
    @include('layouts.welcomeViews.banner')
    @include('layouts.welcomeViews.galeria')
    @include('layouts.footer')
@endsection

@section('css')
    @parent
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playwrite+US+Modern:wght@100..400&display=swap');

        html,
        body {
            font-family: "Playwrite US Modern", cursive;
            padding-top: 70px;
            background: url('/img/background.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        /* navbar style */
        .navbar-custom {
            background-color: #000 !important;
            font-size: 20px;
        }

        .nav-rounded {
            border-bottom-right-radius: 50px;
            border-bottom-left-radius: 50px;
        }

        .contact-info {
            display: flex;
            align-items: center;
        }

        .option:hover {
            text-decoration: underline red 3px;
        }

        /* banner style */
        .bg-badge {
            background: rgb(193, 41, 41);
            background: linear-gradient(90deg, rgba(193, 41, 41, 1) 62%, rgba(128, 38, 38, 1) 100%);
        }

        .card-title {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .card-text {
            margin-bottom: 1rem;
            line-height: 1.5;
        }

        .card-text ul {
            padding-left: 0;
            list-style-type: none;
        }

        .card-text ul li {
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
        }

        .icon {
            margin-right: 0.5rem;
            color: #f8d210;
        }

        .imgsize-banner{
            width: 100%;
            height: 65vh;
        }

        .imgsize{
            width: 100%;
            height: 45vh;
        }

        /* footer style */
        .footer-custom {
            background-color: #000 !important;
            font-size: 20px;
        }
    </style>
@endsection
