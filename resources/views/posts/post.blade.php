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
            <img src="https://simpleicons.org/icons/{{ $techSlug }}.svg" alt="{{ $tech }}" />
        @endforeach
    </div>
    <div class="post-content">
        <div class="post-desc">
            <p>{{$post->description}}</p>
        </div>

        <div class="post-imgs"> 
            <div class="images">
            <!-- @for($i = 0; $i < $itemCount; $i++)   
                <img class="mySlides6" src="{{url('images/'.$post->name.'/'.$i.'.PNG')}}" /> 
            @endfor -->
            </div>
            <div class="container">
                <div class="btn"><a href="{{$post->url}}" >View Project</a></div>
            </div>
        </div>

    </div>
</div>
@endsection
