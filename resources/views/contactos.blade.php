@extends('layouts.app')
@section('content')
    @include('layouts.navbar')
    @include('layouts.contactosViews.encuentranos')
    @include('layouts.contactosViews.siguenos')
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

        /* more styles */
        .bg-badge {
            background: rgb(193, 41, 41);
            background: linear-gradient(90deg, rgba(193, 41, 41, 1) 62%, rgba(128, 38, 38, 1) 100%);
        }

        .social-icon {
            font-size: 7rem; 
            margin: 0 15px; 
            color: #fff; 
        }
        .social-icon:hover {
            color: #000; 
        }

        /* footer style */
        .footer-custom {
            background-color: #000 !important;
            font-size: 20px;
        }
    </style>
@endsection
