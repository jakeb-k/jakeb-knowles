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

            <img class="post-mob-slide" src="{{url('images/'.$post->name.'/mobile/1.PNG')}}" />
            
            <img class="post-web-slide" src="{{url('images/'.$post->name.'/web/1.PNG')}}" />
            
            <button class="swap-btn" onclick="swapView()">SWAP</button>
                <!-- @for($i = 0; $i < $itemCount; $i++)   
                    <img class="post-img-slide" src="{{url('images/'.$post->name.'/web/'.$i.'.PNG')}}" style="{{ $i == 0 ? 'display: block;' : 'display: none;' }}" />
                @endfor
                <div class="navigation">
                    @for($i = 0; $i < $itemCount; $i++)   
                        <span class="nav-circle" onclick="setCurrentSlide({{ $i }})"></span>
                    @endfor
                </div> -->
          
            
        </div>

        

    </div>
</div>


<script>
    // var slideIndex = 0;
    // var slideInterval; 
    // showSlides();

    // function setCurrentSlide(index) {
    //     slideIndex = index;
    //     showSlides();
    // }

    // function showSlides() {
    //     var i;
    //     var slides = document.getElementsByClassName("post-img-slide");
    //     var dots = document.getElementsByClassName("nav-circle");

    //     for (i = 0; i < slides.length; i++) {
    //         slides[i].style.display = "none";
    //         dots[i].className = dots[i].className.replace(" active", "");
    //     }

    //     slideIndex++;
    //     if (slideIndex > slides.length) { slideIndex = 1 }

    //     slides[slideIndex - 1].style.display = "block";
    //     dots[slideIndex - 1].className += " active";
    //     clearTimeout(slideInterval);
    //     slideInterval = setTimeout(showSlides, 3000);
    // }

    var viewCond = true;
    swapView(); 
    function swapView(){
    var mobileView = $(".post-mob-slide");
    var webView = $(".post-web-slide");

    if(viewCond) {
        mobileView.css('display', 'none');
        webView.css('display', 'block');
    } else {
        mobileView.css('display', 'block');
        webView.css('display', 'none');
    }
    
    viewCond = !viewCond;
}
</script>
@endsection
