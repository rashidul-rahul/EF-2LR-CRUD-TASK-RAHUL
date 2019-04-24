@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <p class="card-title text-center">Update Blog</p>
        </div>
        <div class="card-body">
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
            <form action="{{ route('update', $blog->id) }}" method="POST">
                {!! csrf_field() !!}
                {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                <div class="form-group">
                    <label id="title" class="col-md-2 control-label">Blog Titile</label>
                    <div class="col-md-10">
                        <input  type="text" class="form-control" name="title" value="{{ $blog->title }}">
                    </div>
                </div>
                <div class="form-group">
                    <label id="description" class="col-md-2 control-label">Description</label>
                    <div class="col-md-10">
                        <textarea type="text" class="form-control" name="description">{{ $blog->description }}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-10 col-lg-offset-2">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection