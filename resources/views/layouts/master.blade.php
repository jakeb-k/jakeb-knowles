<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Based on the Gold Coast, Jakeb Knowles is a young and passionate Software Engineer / Developer / Analyst. Visit to view my work or get in touch!">
        
        <link rel="icon" type="image/x-icon" href="{{url('images/favicon.ico')}}">

        
        <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
        
        <link rel="canonical" href="https://jakebknowles.com" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

       
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       
        <script src='https://www.google.com/recaptcha/api.js' async defer></script>

        <link rel="preload" as="image" href="images/profile.webp" type="image/webp">
        

    </head>
    <script>
$(function () {
    $('.project, .about, .contact, .cta-btn').click(function (e) {
        e.preventDefault(); // Prevent the default anchor behavior

        var target;
        if ($(this).hasClass('project')) {
            target = $("#project-title-1");
        } else if ($(this).hasClass('about')) {
            target = $(".aContainer");
        } else if ($(this).hasClass('contact') || $(this).hasClass('cta-btn')) {
            target = $(".cContainer");
        }

        // Check if the target exists
        if (target.length) {
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 1500);
        } else {
            // Redirect to the home page with a hash indicating the target
            window.location.href = '/#'+ $(this).attr('class').split(' ')[0];

        }
    });
});

// On home page load, check for a hash and execute the scroll if it matches a known target
$(window).on('load', function() {
    var hash = window.location.hash.substring(1); // Get the hash (excluding '#')
    if (hash) {
        var target;
        switch (hash) {
            case 'project':
                target = $('#project-title-1');
                break;
            case 'about':
                target = $('.aContainer');
                break;
            case 'contact':
            case 'cta-btn': // Assuming you want the same target for 'contact' and 'cta-btn'
                target = $('.cContainer');
                break;
        }

        if (target && target.length) {
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 1500);
        }
    }
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

    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $('.nav-bar').addClass('shrunken');
            } else {
                $('.nav-bar').removeClass('shrunken');
            }
        });
    });
    
    </script>
    @if(session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const toast = document.getElementById('success-toast');
                toast.style.display = 'block';

                setTimeout(() => {
                    toast.style.opacity = '0';
                    toast.style.transform = 'translateY(-10px)';
                    setTimeout(() => toast.remove(), 500);
                }, 10000);
            });
        </script>
    @endif
    <body>
    <div id="success-toast" style="
            display:none;
            position: fixed;
            top: 7rem;
            right: 1rem;
            background-color: rgb(40,40,40);
            color: #00BBF9;
            padding: 1rem 1.5rem;
            border-radius: 8px;
            box-shadow: 0 4px 12px #00BBF950;
            z-index: 9999;
            font-family: sans-serif;
            font-weight: bold;
            animation: fadeIn 0.3s ease-in-out;
        ">
            Message sent successfully!
        </div>
        <div id="navBar">
            <div class="nSec">
                <a class="about" href="">About</a>
                <a class="project" href="">Projects</a>
            </div>
            <div class="nTitle">
                <a href="{{url('/')}}"><img src="{{url('images/penrose_blue.png')}}" /> </a>
            </div>
            <div class="nSec">
                <a class="contact" href="">Contact</a>
                <a class="repo" href="https://github.com/jakeb-k">Repositories</a>
            </div>
        </div>
<!-- 
            <div class="nav-bar">
                <div class="nav-name">
                    <h1>Jakeb Knowles</h1>
                </div>
                <div class="nav-links">
                    <a class="contact" href="">Contact</a>
                    <a class="about" href="">About</a>
                    <a class="project" href="">Projects</a>
                </div>
                <div class="nav-icons">
                    
                        <img class="svg-icons" src="{{url('images/icons/linkedin.svg')}}"  />
                        <img class="svg-icons" src="{{url('images/icons/github.svg')}}"  />
                    
                        <img class="svg-icons" src="{{url('images/icons/stackoverflow.svg')}}"  />
                        <img class="svg-icons" src="{{url('images/icons/vimeo.svg')}}"  /> 
                    
                </div>
            </div> -->
       
        @yield('content')

        </script>
        <div class="footerBar">
            <div class="fSec">
                <a class="about" href="">About</a>
                <a class="project" href="">Projects</a>
            </div>
            <div class="fTitle">
                <p> © {{ \Carbon\Carbon::now()->year }} Jakeb Knowles</p> 
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