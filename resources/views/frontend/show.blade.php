@extends('layouts.app')

@section('content')
<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
            <div class="blog-post">
                <h2 class="blog-post-title">{{$post->title}}</h2>
                <p class="blog-post-meta">{{$post->created_at}} by <a href="#">{{$post->author->name}}</a></p>
                <img src="{{ asset('storage/post/' . $post->image) }}" class="img-fluid" alt="Responsive image">
                <p>{{$post->content}}</p>
            </div><!-- /.blog-post -->


            <nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
            </nav>

        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
            <div class="p-4 mb-3 bg-light rounded">
                <h4 class="font-italic">About</h4>
                <p class="mb-0">Blogpost webinar himit</p>
            </div>

            <div class="p-4">
                <h4 class="font-italic">Archives</h4>
                <ol class="list-unstyled mb-0">
                    <li><a href="#">Juli 2020</a></li>
                </ol>
            </div>

            <div class="p-4">
                <h4 class="font-italic">Elsewhere</h4>
                <ol class="list-unstyled">
                    <li><a href="#">GitHub</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                </ol>
            </div>
        </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</main><!-- /.container -->
@endsection
