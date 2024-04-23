@extends('layout')
@section('title', 'Home Page')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="immigration_education_area">
            <!--Dinh cu -->
            @foreach($categories as $category) 
            <div class="immigration">
                <div class="single_post_content">
                    
                        <h2 id="immigration"><span><a href="{{route('immigration')}}">{{$category->cate_name}}</a></span></h2>
                        @foreach($category->pages as $page)
                            <ul class="sport_nav">
                                <li>
                                    <figure class="bsbig_fig"> <a href="pages/single_page.html" class="featured_img"> <img alt="abc" src="{{$page->img_link}}"></a>
                                    <figcaption> <a href="pages/single_page.html">{{$page->title}}</a> </figcaption>
                                    <p>{{$page->content}}</p>
                                    </figure>
                                </li>
                            </ul>
                        @endforeach                   
                </div>
            </div>
            @endforeach
        </div>
    </div>                 
</div>
@endsection
