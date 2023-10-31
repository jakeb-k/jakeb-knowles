<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="description" content="Based on the Gold Coast, Jakeb Knowles is a young and passionate Software Engineer / Developer / Analyst. Visit to view my work or get in touch!">
        <link rel="icon" type="image/x-icon" href="{{url('images/favicon.ico')}}">

        <!-- Fonts -->
        
        <link rel="stylesheet" href="{{asset('css/app.scss')}}" type="text/css">
        
       
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    </head>
    <script>
        $(function () {
            $('.project') .click(function () {
            $('html, body') .animate ({
                scrollTop: $(".aContainer").offset().top + $(".aContainer")[0].scrollHeight
                }, 1500);
                return false;
            })
        });
         $(function () {
            $('.about') .click(function () {
            $('html, body') .animate ({
                scrollTop: $("#splashContainer").offset().top + $("#splashContainer")[0].scrollHeight
                }, 1500);
                return false;
            })
        });
        $(function () {
            $('.contact') .click(function () {
            $('html, body') .animate ({
                scrollTop: $(".sContainer").offset().top + $(".sContainer")[0].scrollHeight
                }, 1500);
                return false;
            })
        });
    </script>
    <body>
        <div id="headCont">
            <div class="navBar">
                <div class="nSec">
                    <a class="about" href="">About</a>
                    <a class="project" href="">Projects</a>
                </div>
                <div class="nTitle">
                    <h3><img src="{{url('images/penrose_blue.png')}}" /> </h3>
                </div>
                <div class="nSec">
                    <a class="contact" href="">Contact</a>
                    <a class="repo" href="https://github.com/jakeb-k">Repositories</a>
                </div>
            </div>
        </div>
        @yield('content')
        
        <div class="footerBar">
            <div class="fSec">
                <a class="about" href="">About</a>
                <a class="project" href="">Projects</a>
            </div>
            <div class="fTitle">
                <p> ©  2023 Jakeb Knowles</p> 
            </div>
            <div class="fSec">
                <a class="contact" href="">Contact</a>
                <a href="https://github.com/jakeb-k">Repositories</a>
            </div>
        </div>
    </body>
</html>