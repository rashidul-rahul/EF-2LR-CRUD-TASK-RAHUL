@extends('layouts.main')

@section('content')
<section class="card">
    <div class="card-header">
        <div class="card-title">All Post</div>
    </div>
    <div class="card-body">
        @foreach($blogs as $blog)
            <div class="col-lg-8">
                <h3>Title: {{ $blog->title }}</h3>
                <br>
                <p>Description: {{ $blog->description }}</p>
                <br>
                <p>Date: {{ $blog->created_at }}</p>
            </div>
            <hr>
        @endforeach
    </div>
</section>
@endsection