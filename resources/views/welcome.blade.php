<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <!-- 
            
         -->
    </head>
    <body>
         @extends('layout')

         @section('content')

            <div class="content">
                <div>
                    Laravel
                </div>

                <!-- <div>
                    <a href="/">Home</a>
                    <a href="about">About us</a>
                    <a href="profile">Profile</a>
                    <a href="service">Services</a>
                    <a href="contact">Contact us</a>
                 </div> -->
            </div>
        </div>

        @endsection
    </body>
</html>
