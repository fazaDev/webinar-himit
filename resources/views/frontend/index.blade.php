@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-5">
        @foreach($posts as $post)
        <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
            <div class="card card-inverse card-primary ">
                <img class="card-img-top" src="{{ asset('storage/post/' . $post->image) }}">
                <div class="card-body">
                    <h4><a href="{{ route('frontend.show', $post->slug) }}">{{Str::limit($post->title, 20)}}</a></h4>
                    <p>{{Str::limit($post->title, 50)}}</p>
                </div>
                <div class="card-footer">
                    <small>Author : {{$post->author->name}}</small>
                    <!-- <button class="btn btn-info float-right btn-sm">Readmore...</button> -->
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{$posts->links()}}
</div>
@endsection
