@extends('layout')
@section('title', 'Tin cụ thể')
@section('content')
<div class="container flex-grow-1" aria-current="page">
    <div class="row pageContent">
        @include('include.new_detail')
    </div>
</div>
@endsection