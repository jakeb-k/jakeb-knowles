@extends('layouts.master')
<title>Jakeb Knowles - Software Engineer</title>

@section('content')
<div id="splashContainer">
    <div class="profileContainer">
        <div class="nameTitle">
            <h3>
                <span class="fade">How's</span>
                <span class="fade">it </span>
                <span class="fade">Going?</span> 
            </h3>
            <h1> 
                <span class="flash"> I'm </span>
                <span class="flash">Jakeb  </span>
            </h1>
            <span class="fade3">
                 <div class="cta-cont">
                <a class="cta-btn" href="#">Contact Now!</a>
            </div>
            </span> 
            <h3 style="margin-top:7%;"> 
            <span class="fade2">Let's </span>
            <span class="fade2">make </span>
            <span class="fade2">something </span>
            <span class="fade2">great! </span>
            </h3>
        </div>
        <div class="profilePic">
            
            <img src="images/profile.jpg" />
         
        </div>
    </div> 
</div>


    
    
<div class="aContainer">
    <div class="aboutImg">
        <img src="images/jakey.jpg">
    </div>
    <div id="aboutContent">       
        <div class="aboutTitle"><h1>About:</h1>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" data-interval=3000>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <h1 style="text-align:center; color:white">Jakeb Knowles</h1>
                </div>
                <div class="carousel-item">
                    <h1 style="text-align:center; color:white">Developer</h1>
                </div>
                <div class="carousel-item">
                    <h1 style="text-align:center; color:white">Analyst</h1>
                </div>
                <div class="carousel-item">
                    <h1 style="text-align:center; color:white">Creator</h1>
                </div>
                <div class="carousel-item">
                    <h1 style="text-align:center; color:white">Dreamer</h1>
                </div>
            </div>
        </div>
    </div>
        <div class="infoBox">
            <h3> CODE  ·  CREATE  ·  CONQUER </h3>
            <p>As a young individual, we are faced with many difficult choices. One such being the big question of 'What are you going to do with your life?' Fortunately for me, I saw <i> Hello World </i> print in the terminal, and it was that moment that changed my life forever. 
Since then I have developed a large range of technical skills to become a full-stack developer, these include: Javascript (Angular, React, Node / Express, Typescript, jQuery) PHP (Laravel), Python (Django, Pandas, NumPy), SQL and NoSQL (SQLite, MySQL, MongoDB) and of course HTML & CSS. </p>
        </div>
    </div>
</div> 

<div class="line"><div class="pulse"></div></div>

<div class="project-cont">
    <h1>Websites</h1>
    <div class="project-row">
        @foreach($webPosts as $w)
            <a class="project-link" href="{{url('project/'.$w->name)}}"> 
                <div class="project-box">
                    <img src="{{url('images/logos/'.$w->logo)}}" /> 
                    <p>
                        {{$w->name}}
                    </p>
                </div>
            </a>
        @endforeach
    </div>
    <h1>Mobile Apps</h1>
    <div class="project-row">
        @foreach($mobilePosts as $m)
            <a class="project-link" href="{{url('project/'.$m->name)}}"> 
                <div class="project-box">
                    <img src="{{url('images/logos/'.$m->logo)}}" /> 
                    <p>
                        {{$m->name}}
                    </p>
                </div>
            </a>
        @endforeach
    </div>
</div>

<div class="line"><div class="pulse"></div></div>

<div class="cContainer">
    <form method="POST" action='{{url("/contact")}}' id="contact">
        {{csrf_field()}}
        <h1>Get In Touch</h1>
        <label class="contact-label" for="name">Name:</label>
        <input type="text" name="name" id="name" />
        <label class="contact-label" for="email">Email:</label>
        <input type="text" name="email" id="email" />
        <label class="contact-label" for="note">Message:</label>
        <textarea name="note" id="note"></textarea>
        <div class="captcha">
            {!! NoCaptcha::display() !!}
            @if ($errors->has('g-recaptcha-response'))
                <span class="help-block">
                    <strong>The captcha field is required!</strong>
                </span>
            @endif
        </div> 
        <button style="margin-top:40px;" class="submit" type="submit">Send Message!</button>
    </form>
</div>
<!-- FLY IN SCRIPT CONTROLLER -->
<script>
$(document).ready(function() {
    let flyInCompleted = false;
    const box1 = document.querySelector('.nameTitle');
    const box2 = document.querySelector('.profilePic');

    function startAnimation() {
        box1.style.animation = 'flyInFromLeft 2s ease-in-out forwards';
        box2.style.animation = 'flyInFromRight 2s ease-in-out forwards';

        setTimeout(() => {
            flyInCompleted = true;
            activateSCSSAnimations();
        }, 2000); // assuming 'flyIn' takes 2 seconds
    }

    function activateSCSSAnimations() {
        if (flyInCompleted) {
            document.querySelectorAll('.fade, .fade2, .flash').forEach(el => {
                // Trigger the CSS animations by reflow/repaint
                el.style.animationPlayState = 'running';
            });
        }
    }

    window.addEventListener('load', startAnimation);
});

</script>



@endsection
