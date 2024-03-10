@extends('layouts.master')
<title>{{$post->name}}</title>
@section('content')
<div class="post-container">
    <div class="post-header">
        <h1>{{$post->name}}</h1>
    </div>
    <div class="post-techs">
        <?php $techs = explode(',', $post->techs) ?>
        @foreach ($techs as $tech)
            @php
            $techSlug = strtolower(str_replace('.js', 'js', $tech)); // Adjust the name to match Simple Icons slugs
            @endphp
            <div class="tech-logo">
                <img class="logo" src="https://simpleicons.org/icons/{{ $techSlug }}.svg" alt="{{ $tech }}" />
                <span class="tooltip-text">{{$tech}}</span>
            </div>
        @endforeach
    </div>
    <div class="post-content">
        <div class="post-desc">
            <p>{{$post->description}}</p>
            <div class="cta-cont2">
                <a class="cta-btn2" href="{{$post->url}}">View Project</a>
            </div>
        </div>
        <div class="post-imgs"> 
            @if (Session::get('viewMode') == 'web')
                @for($i = 0; $i < $itemCount; $i++) 
                <div class="web-view resizing"  >
                    <img class="post-img-slide" src="{{url('images/'.$post->name.'/web/'.$i.'.PNG')}}" />
                </div>  
                @endfor
                <div class="navigation">
                    @for($i = 0; $i < $itemCount; $i++)   
                        <span class="nav-circle" onclick="setCurrentSlide({{ $i }})"></span>
                    @endfor
                </div>
            @else
                @for($i = 0; $i < $itemCount; $i++)  
                    <div class="mob-view resizing" >
                        <img class="post-img-slide" src="{{url('images/'.$post->name.'/mobile/'.$i.'.PNG')}}"  style="{{ $i == 0 ? 'display: block;' : 'display: none;' }}" />
                    </div> 
                @endfor
                <div class="navigation">
                    @for($i = 0; $i < $itemCount; $i++)   
                        <span class="nav-circle" onclick="setCurrentSlide({{ $i }})"></span>
                    @endfor
                </div>
            @endif
            @if($webExists)
            <a href="{{ route('toggleViewMode') }}" title="Toggle Display">
                <div class="svg-container">
                    <svg version="1.1" id="swap-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 94.35">
                    <g><path class="st0" d="M90.37,26.48h25.48c1.94,0,3.71,0.79,4.97,2.06c1.28,1.28,2.06,3.04,2.06,4.97v53.82 c0,1.94-0.79,3.71-2.06,4.97c-1.28,1.28-3.04,2.06-4.97,2.06H90.37c-1.94,0-3.71-0.79-4.97-2.06c-1.28-1.28-2.06-3.04-2.06-4.97 V33.5c0-1.94,0.79-3.71,2.06-4.97C86.68,27.25,88.43,26.48,90.37,26.48L90.37,26.48z M3.05,0h106.12c1.68,0,3.05,1.37,3.05,3.05 v18.44h-6.48V8.44c0-1.48-1.21-2.7-2.7-2.7H9.17v0c-1.48,0-2.7,1.21-2.7,2.7v52.53c0,1.48,1.21,2.7,2.7,2.7H76.7V76.4H3.05 C1.37,76.4,0,75.03,0,73.35V3.05C0,1.37,1.37,0,3.05,0L3.05,0L3.05,0z M42.27,80.61h27.67c0.07,4.79,2.04,9.07,7.39,12.45H34.89 C39.16,89.96,42.29,86.19,42.27,80.61L42.27,80.61L42.27,80.61z M56.11,66.12c2.16,0,3.92,1.75,3.92,3.92 c0,2.16-1.76,3.92-3.92,3.92c-2.16,0-3.92-1.75-3.92-3.92C52.19,67.88,53.94,66.12,56.11,66.12L56.11,66.12z M103.1,85.72 c1.59,0,2.89,1.28,2.89,2.89c0,1.59-1.28,2.89-2.89,2.89c-1.59,0-2.89-1.28-2.89-2.89C100.21,87.02,101.49,85.72,103.1,85.72 L103.1,85.72z M86.3,83.52h33.61V37.37H86.3V83.52L86.3,83.52z"/></g>
                    </svg>
                </div>
            </a>
           @endif
        </div>
    </div>
</div>


<script>
    var slideIndex = 0;
    var slideInterval; 
    showSlides();

    function setCurrentSlide(index) {
        slideIndex = index;
        showSlides();
    }

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("post-img-slide");
        var dots = document.getElementsByClassName("nav-circle");

        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
            dots[i].className = dots[i].className.replace(" active", "");
        }

        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1 }

        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        clearTimeout(slideInterval);
        slideInterval = setTimeout(showSlides, 3000);
    }


</script>
@endsection
