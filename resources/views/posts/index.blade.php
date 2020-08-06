@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">All Post</h3>
                    </div>
                    <div class="col text-right">
                        <a href="{{route('post.create')}}" class="btn btn-sm btn-primary">Create Post</a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Thumbnail</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Status</th>
                            <th scope="col">Author</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <th scope="row">
                                {{$loop->iteration}}
                            </th>
                            <td>
                                <div class="avatar-group">
                                    <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="{{$post->title}}">
                                        <img alt="Image placeholder" src="{{ asset('storage/post/' . $post->image) }}">
                                    </a>
                                </div>
                            </td>
                            <td>
                                <a href="{{route('frontend.show', $post->slug)}}" target="_blank">{{Str::limit($post->title, 20)}}</a>
                            </td>
                            <td>{!! $post->status_label !!}</td>
                            <td>
                                {{$post->author->name}}
                            </td>
                            <td>
                                <form action="{{ route('post.destroy', $post->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-success btn-sm" href="{{ route('post.edit', $post->id) }}"><span class="btn-inner--icon"><i class="ni ni-check-bold"></i> Edit</span></a>
                                    <button class="btn btn-danger btn-sm"><span class="btn-inner--icon"><i class="ni ni-fat-remove"></i> Hapus</span></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">

                    </div>
                    <div class="col text-right">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
