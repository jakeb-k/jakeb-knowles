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
$(document).ready(function() {
    let flyInCompleted = false;
    const box1 = document.querySelector('.nameTitle');
    const box2 = document.querySelector('.profilePic');

    function startAnimation() {
        box1.style.animation = 'flyInFromLeft 2s ease-in-out forwards';
        box2.style.animation = 'flyInFromRight 2s ease-in-out forwards';
        flyInCompleted = true;
        if(flyInCompleted){
            activateSCSSAnimations();
        } // assuming 'flyIn' takes 2 seconds
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

$(document).ready(function() {
    //ABOUT ITEMS
    const typewriteDiv = document.querySelector('.typewriter');
    const h1Element = typewriteDiv.querySelector('h1');
    const aboutDiv1 = document.querySelector('.aboutImg');
    const aboutDiv2 = document.querySelector('#aboutContent');

    const contactForm = document.querySelector('#contact');
    

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                //ABOUT ANIMS
                h1Element.classList.add('type'); 
                aboutDiv1.style.animation = 'opacityChange 2s linear';
                aboutDiv1.style.opacity = '1';
                aboutDiv2.style.animation = 'flyUpFromBottom 0.5s linear forwards';
            
                observer.unobserve(entry.target); // Stop observing once animations are triggered
            }
        });
    }, {
        threshold: 0.7 // Set the threshold to 70% visibility
    });
    const observer2 = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
            
                contactForm.style.animation = 'flyUpFromBottom 0.7s ease-in forwards';
                contactForm.style.opacity = '1';
            

                observer2.unobserve(entry.target); // Stop observing once animations are triggered
            }
        });
    }, {
        threshold: 0.3 // Set the threshold to 70% visibility
    });

    observer.observe(typewriteDiv);
    observer2.observe(contactForm);

 

});

document.addEventListener('DOMContentLoaded', () => {
  // Observing individual titles using their IDs
  const title1 = document.querySelector('#project-title-1');
  const title2 = document.querySelector('#project-title-2');

  const row1 = document.querySelector('.project-row-1');
  const row2 = document.querySelector('.project-row-2');
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.style.animation = `flash 1s ease forwards`;

        // Trigger the corresponding row animation based on the title's ID
        if (entry.target.id === 'project-title-1') {
          row1.style.animation = 'slideFromLeft 1s linear';
        } else if (entry.target.id === 'project-title-2') {
            row2.style.animation = 'slideFromRight 1s linear';
        }

        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.7 });

  // Start observing each title
  if (title1) observer.observe(title1);
  if (title2) observer.observe(title2);
});



</script>



@endsection
