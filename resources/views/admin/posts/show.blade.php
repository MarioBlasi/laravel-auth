@extends('layouts.admin')
{{-- @section('title', '' ) --}}

@section('content')


<div class="rounded shadow py-5">
    <div class="row row-cols-1 row-cols-md-2">
        <div class="col">
            <img class="img-fluid" src="{{$post->cover_image}}" alt="{{$post->title}}">
        </div>
        <div class="col">
            <div class="content">
                <h2>{{$post->title}}</h2>
                <p>{{$post->content}}</p>
            </div>
        </div>
    </div>

</div>
   
@endsection


