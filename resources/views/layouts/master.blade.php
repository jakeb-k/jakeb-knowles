<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Based on the Gold Coast, Jakeb Knowles is a young and passionate Software Engineer / Developer / Analyst. Visit to view my work or get in touch!">
        
        <link rel="icon" type="image/x-icon" href="{{url('images/favicon.ico')}}">

        
        <link rel="stylesheet" href="{{asset('css/app.scss')}}" type="text/css">
        <link rel="canonical" href="https://jakebknowles.com" />

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

       
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
       
        <script src='https://www.google.com/recaptcha/api.js' async defer></script>

        
        <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />

    </head>
    <script>
$(function () {
    $('.project, .about, .contact, .btn').click(function (e) {
        e.preventDefault(); // Prevent the default anchor behavior

        var target;
        if ($(this).hasClass('project')) {
            target = $(".sContainer");
        } else if ($(this).hasClass('about')) {
            target = $(".aContainer");
        } else if ($(this).hasClass('contact') ){
            target = $(".cContainer");
        }else if ($(this).hasClass('btn') ){
            target = $(".cContainer");
        }

        $('html, body').stop().animate({
            scrollTop: target.offset().top
        }, 1500);
    });
});

$(document).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
            $('#navBar').addClass('shrunken');
        } else {
            $('#navBar').removeClass('shrunken');
        }
    });
});


    </script>
    <body>
      
            <div id="navBar" class="">
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
       
        @yield('content')

        </script>
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
<script>
   
</script>