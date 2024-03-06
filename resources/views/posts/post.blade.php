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
            <div class="cta-cont">
                <a class="cta-btn" href="{{$post->url}}">View Project</a>
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
            <a href="{{ route('toggleViewMode') }}" class="btn btn-primary">Swap View</a>


               
            
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
