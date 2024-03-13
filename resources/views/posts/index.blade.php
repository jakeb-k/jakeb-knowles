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
            
            <img src="images/profile.webp" alt="profile-pic"/>
         
        </div>
    </div> 
</div>


    
    
<div class="aContainer">
    <div class="aboutImg">
        <img src="images/jakey.webp">
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
            <div class="typewriter">
                <h1> CODE  ·  CREATE  ·  CONQUER </h1>
            </div>
           
            <p> 
                As a natural-born coder, my fascination with technology was ignited the moment I saw 'Hello World' echo in the terminal, setting me on an unyielding path in software development. 
                With a Bachelor of Information Technology from Griffith University and hands-on experience in developing 
                cutting-edge projects like Aussie PicklePro and Nomster, I've honed a diverse skill set across full-stack 
                development. My expertise spans from JavaScript, Angular, and React to Laravel, Python, and various database 
                technologies. Beyond technical prowess, my ability to lead teams, adapt to new challenges, and drive 
                innovation positions me as a dynamic force ready to contribute to groundbreaking projects in the tech landscape.
            </p>
        </div>
    </div>
</div> 

<div class="line"><div class="pulse"></div></div>

<div class="project-cont">
    <h1>
        <span id="project-title-1">Websites</span>
    </h1>
    <div class="project-row-1">
        @foreach($webPosts as $w)
            <a class="project-link" href="{{url('project/'.$w->name)}}"> 
                <div class="project-box">
                    <img src="{{url('images/logos/'.$w->logo)}}" /> 
                    <p>
                        {{str_replace("_"," ", $w->name);}}
                    </p>
                </div>
            </a>
        @endforeach
    </div>
    <h1>
       <span id="project-title-2">Mobile Apps</span> 
    </h1>
    <div class="project-row-2">
        @foreach($mobilePosts as $m)
            <a class="project-link" href="{{url('project/'.$m->name)}}"> 
                <div class="project-box">
                    <img src="{{url('images/logos/'.$m->logo)}}" /> 
                    <p>
                        {{str_replace("_"," ", $m->name);}}
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
        @error('name')
            <span class="help-block">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label class="contact-label" for="email">Email:</label>
        <input type="text" name="email" id="email" />
        @error('email')
            <span class="help-block">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label class="contact-label" for="note">Message:</label>
        <textarea name="note" id="note"></textarea>
        @error('note')
            <span class="help-block">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
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
$(function() {
    const box1 = document.querySelector('.nameTitle');
    const box2 = document.querySelector('.profilePic');
    const typewriteDiv = document.querySelector('.typewriter');
    const h1Element = typewriteDiv ? typewriteDiv.querySelector('h1') : null;
    const aboutDiv1 = document.querySelector('.aboutImg');
    const aboutDiv2 = document.querySelector('#aboutContent');
    const contactForm = document.querySelector('#contact');
    const title1 = document.querySelector('#project-title-1');
    const title2 = document.querySelector('#project-title-2');
    const row1 = document.querySelector('.project-row-1');
    const row2 = document.querySelector('.project-row-2');

    // Function to start initial animations
    function startAnimation() {
        box1.style.animation = 'flyInFromLeft 2s ease-in-out forwards';
        box2.style.animation = 'flyInFromRight 2s ease-in-out forwards';
        // Delay the SCSS animations to start after the initial animations
        setTimeout(activateSCSSAnimations, 2000); // Adjust time as needed
    }

    // Function to activate SCSS animations
    function activateSCSSAnimations() {
        document.querySelectorAll('.fade, .fade2, .flash').forEach(el => {
            el.style.animationPlayState = 'running';
        });
    }

    // General observer callback function
    function observerCallback(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = entry.target;
                switch(target) {
                    case typewriteDiv:
                        h1Element.classList.add('type');
                        aboutDiv1.style.animation = 'opacityChange 2s linear';
                        aboutDiv1.style.opacity = '1';
                        aboutDiv2.style.animation = 'flyUpFromBottom 0.5s linear forwards';
                        break;
                    case contactForm:
                        target.style.animation = 'flyUpFromBottom 0.7s ease-in forwards';
                        target.style.opacity = '1';
                        break;
                    case title1:
                        row1.style.animation = 'slideFromLeft 1s linear';
                        break;
                    case title2:
                        row2.style.animation = 'slideFromRight 1s linear';
                        break;
                }
                observer.unobserve(target);
            }
        });
    }

    // Setup observers
    const options = { threshold: [0.7, 0.3] }; // Use array to handle different thresholds
    const observer = new IntersectionObserver(observerCallback, options);

    // Start observing elements
    if (typewriteDiv) observer.observe(typewriteDiv);
    if (contactForm) observer.observe(contactForm);
    if (title1) observer.observe(title1);
    if (title2) observer.observe(title2);

    window.addEventListener('load', startAnimation);
});



</script>



@endsection
