@extends('layouts.master')
@section('content')
<div id="splashContainer">
    <div class="nameTitle">
        <button class="titleBtn"><h1> JAKEB KNOWLES</h1></button>
        <div class="subtitle">
            <h3>Full-Stack Developer <i>at your service</i></h3>
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
<div class="sContainer">
    <h1>Projects</h1>
    <h3 class="projIn"> Click / Hover to See More About Each Project! </h3>
    <div id="slideshow">
        @foreach($posts as $p)
        <div class="sBox">
            <img src="{{url('images/logos/'.$p->logo)}}" /> 
            <div class="overlay-1">
                <h3>{{$p->name}}</h3>
                <h5><i>{{$p->techs}}</i></h5>
                <p>{{$p->description}}</p> 
                <a data-toggle="modal" data-target="#exampleModal{{$loop->index}}" style="text-decoration:underline;"> View Pictures </a>
                @if($p->url)
                <br><p>{{$p->url}}</p>
                @endif
                <p ><strong style="font-size:18px; margin-top:50px;"> {{$p->status}}</strong></p>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="line"><div class="pulse"></div></div>
<div class="cContainer">
    <form method="POST" action='{{url("/contact")}}' id="contact">
        {{csrf_field()}}
        <h1>Get In Touch</h1>
        <label for="name">NAME:</label>
        <input type="text" name="name" id="name" />
        <label for="email">EMAIL:</label>
        <input type="text" name="email" id="email" />
        <label for="note">MESSAGE:</label>
        <textarea name="note" id="note"></textarea>
        <button class="submit" type="submit"><span>SUBMIT</span> <img id="subImg" src="{{url('images/penrose_blue.png')}}" /></button>
    </form>
</div>





    {{-- MODAL 0 START HERE--}}
  
    <div class="modal fade" id="exampleModal0" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php $images = explode(",",$posts[0]->images); ?>
                <div class="w3-content w3-display-container">
                    @foreach($images as $img)
                        <img class="mySlides0" src="{{url('images/0/'.$img.'.PNG')}}" /> 
                    @endforeach
                    <button class="w3-button w3-display-left" onclick="plusDivs0(-1)">&#10094;</button>
                    <button class="w3-button w3-display-right" onclick="plusDivs0(+1)">&#10095;</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        var slideIndex0 = 1;
        showDivs0(slideIndex0);

        function plusDivs0(n) {
        showDivs0(slideIndex0 += n);
        }

        function showDivs0(n) {
        var i;
        var x = document.getElementsByClassName("mySlides0");
        if (n > x.length) {slideIndex0 = 1}
        if (n < 1) {slideIndex0 = x.length} ;
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex0-1].style.display = "block";
        }
    </script>

    {{-- MODAL 0 END HERE --}}

    {{-- MODAL 1 START HERE--}}
  
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="scale:0.47;margin-top:-250px; font-size:108px; color:#00BBF9;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="font-size:108px; color:#00BBF9;">&times;</span>
                </button>
                <?php $images = explode(",",$posts[1]->images); ?>
                <div class="w3-content w3-display-container">
                    @foreach($images as $img)
                        <img class="mySlides1" src="{{url('images/1/'.$img.'.PNG')}}" /> 
                    @endforeach
                    <button class="w3-button w3-display-left" onclick="plusDivs1(-1)">&#10094;</button>
                    <button class="w3-button w3-display-right" onclick="plusDivs1(+1)" style="max-width:120%;">&#10095;</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        var slideIndex1 = 1;
        showDivs1(slideIndex1);

        function plusDivs1(n) {
        showDivs1(slideIndex1 += n);
        }

        function showDivs1(n) {
        var i;
        var x = document.getElementsByClassName("mySlides1");
        if (n > x.length) {slideIndex1 = 1}
        if (n < 1) {slideIndex1 = x.length} ;
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex1-1].style.display = "block";
        }
    </script>
    

    {{-- MODAL 1 END HERE --}}

    {{-- MODAL 2 START HERE--}}
  
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="scale:0.57;margin-top:-250px;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php $images = explode(",",$posts[2]->images); ?>
                <div class="w3-content w3-display-container">
                    @foreach($images as $img)
                        <img class="mySlides2" src="{{url('images/2/'.$img.'.png')}}" style="scale:0.8;"/> 
                    @endforeach
                    <button class="w3-button w3-display-left" onclick="plusDivs2(-1)">&#10094;</button>
                    <button class="w3-button w3-display-right" onclick="plusDivs2(+1)" style="max-width:120%;">&#10095;</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        var slideIndex2 = 1;
        showDivs2(slideIndex2);

        function plusDivs2(n) {
        showDivs2(slideIndex2 += n);
        }

        function showDivs2(n) {
        var i;
        var x = document.getElementsByClassName("mySlides2");
        if (n > x.length) {slideIndex2 = 1}
        if (n < 1) {slideIndex2 = x.length} ;
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex2-1].style.display = "block";
        }
    </script>
    

    {{-- MODAL 2 END HERE --}}

    {{-- MODAL 3 START HERE--}}
  
    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php $images = explode(",",$posts[3]->images); ?>
                <div class="w3-content w3-display-container">
                    @foreach($images as $img)
                        <img class="mySlides3" src="{{url('images/3/'.$img.'.PNG')}}" /> 
                    @endforeach
                    <button class="w3-button w3-display-left" onclick="plusDivs3(-1)">&#10094;</button>
                    <button class="w3-button w3-display-right" onclick="plusDivs3(+1)" style="max-width:120%;">&#10095;</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        var slideIndex3 = 1;
        showDivs3(slideIndex3);

        function plusDivs3(n) {
        showDivs3(slideIndex3 += n);
        }

        function showDivs3(n) {
        var i;
        var x = document.getElementsByClassName("mySlides3");
        if (n > x.length) {slideIndex3 = 1}
        if (n < 1) {slideIndex3 = x.length} ;
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex3-1].style.display = "block";
        }
    </script>
    

    {{-- MODAL 3 END HERE --}}

    {{-- MODAL 4 START HERE--}}
  
    <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php $images = explode(",",$posts[4]->images); ?>
                <div class="w3-content w3-display-container">
                    @foreach($images as $img)
                        <img class="mySlides4" src="{{url('images/4/'.$img.'.PNG')}}" style="scale:0.8;"/> 
                    @endforeach
                    <button class="w3-button w3-display-left" onclick="plusDivs4(-1)">&#10094;</button>
                    <button class="w3-button w3-display-right" onclick="plusDivs4(+1)" style="max-width:120%;">&#10095;</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        var slideIndex4 = 1;
        showDivs4(slideIndex4);

        function plusDivs4(n) {
        showDivs4(slideIndex4 += n);
        }

        function showDivs4(n) {
        var i;
        var x = document.getElementsByClassName("mySlides4");
        if (n > x.length) {slideIndex4 = 1}
        if (n < 1) {slideIndex4 = x.length} ;
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex4-1].style.display = "block";
        }
    </script>

    {{-- MODAL 4 END HERE --}}

    {{-- MODAL 5 START HERE--}}
  
    <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php $images = explode(",",$posts[4]->images); ?>
                <div class="w3-content w3-display-container">
                    @foreach($images as $img)
                        <img class="mySlides5" src="{{url('images/5/'.$img.'.PNG')}}" /> 
                    @endforeach
                    <button class="w3-button w3-display-left" onclick="plusDivs5(-1)" >&#10094;</button>
                    <button class="w3-button w3-display-right" onclick="plusDivs5(+1)" style="background:#00BBF9;max-width:120%;">&#10095;</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        var slideIndex5 = 1;
        showDivs5(slideIndex5)

        function plusDivs5(n) {
        showDivs5(slideIndex4 += n);
        }

        function showDivs5(n) {
        var i;
        var x = document.getElementsByClassName("mySlides5");
        if (n > x.length) {slideIndex4 = 1}
        if (n < 1) {slideIndex4 = x.length} ;
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex4-1].style.display = "block";
        }
    </script>

    

    {{-- MODAL 5 END HERE --}}


@endsection



                