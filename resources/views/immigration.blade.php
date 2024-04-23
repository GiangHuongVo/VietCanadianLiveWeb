@extends('layout')
@section('title', 'Định cư')
@section('content')
<div class="container flex-grow-1" aria-current="page">
    <div class="row pageContent">
        <div class="immigration_education_area">
           <h2>Định cư</h2>
           <div class="single_post_content">
            @foreach($pages as $page)               
                <h3>{{$page->title}}</h3>
                <hr>
                <p>{{$page->content}}</p>                 
            @endforeach            
           </div>
        </div>
    </div>
</div>
@endsection
    