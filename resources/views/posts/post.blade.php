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
</div>
@endsection
<!-- @for($i = 0; $i < $itemCount; $i++)   
        <img class="mySlides6" src="{{url('images/'.$post->name.'/'.$i.'.PNG')}}" /> 
    @endfor -->