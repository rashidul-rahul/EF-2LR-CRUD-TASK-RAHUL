@extends('layouts.app')

@section('content')
    @if(session('successMsg'))
        <div class="alert alert-success">
                {{ session('successMsg') }}
        </div>
    @endif
    <h2 class="text-center">All Blog List</h2>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Create Date</th>
            <th scope="col" class="text-center">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($blogs as $blog)
            <tr>
                <th scope="row">{{ $blog->id }}</th>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->description }}</td>
                <td>{{ $blog->created_at }}</td>
                <td class="text-center"><button class="btn btn-success" href="{{ route('edit', $blog->id) }}"><i class="far fa-edit"></i></button> |
                    <form class="hidden-form" action="{{ route('delete', $blog->id) }}" id="delete-form-{{ $blog->id }}" method="POST">
                        {!! csrf_field() !!}
                        {{ method_field('delete') }}
                    </form>
                    <button onclick="
                        if(confirm('Are you sure want to delete this blog?')){
                            event.preventDefault();
                            document.getElementById('delete-form-{{ $blog->id }}').submit();
                        }else {
                            event.preventDefault();
                            }
                    " class="btn btn-danger" href="{{ route('delete', $blog->id) }}"><i class="fas fa-trash"></i></button></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $blogs->links() }}
@endsection