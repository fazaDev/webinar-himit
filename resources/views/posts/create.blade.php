@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Create Post</h3>
                    </div>
                    <div class="col text-right">
                        <a href="#!" class="btn btn-sm btn-primary">Save</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('post.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-title">Title</label>
                                    <input id="input-title" name="title" class="form-control" value="{{ old('title') }}" placeholder="Title..." type="text">
                                    <p class="text-danger">{{ $errors->first('title') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-image">Image</label>
                                    <input type="file" id="input-image" name="image" class="form-control" placeholder="Image Cover">
                                    <p class="text-danger">{{ $errors->first('image') }}</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-country">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="0">Draft</option>
                                        <option value="1">Publish</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Description -->
                    <div class="pl-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Content</label>
                            <textarea rows="4" name="content" class="form-control" value="{{ old('content') }}" placeholder="Cerita tentang hari ini ..."></textarea>
                            <p class="text-danger">{{ $errors->first('content') }}</p>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
