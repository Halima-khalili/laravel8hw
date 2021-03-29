@extends('layout.index')
@section('title')
    News
@endsection
@section('content')
    <div class="container">
        <div style="margin-top: 50px" class="d-flex justify-content-between">
            <div>
                <a href="{{ url('registerPost') }}" class="btn btn-danger mx-5">Create</a>
            </div>
            @if (Session::get('logout'))
                <div class="results">
                    <div class="alert alert-success">
                        {{ Session::get('logout') }}
                    </div>
                </div>
            @endif
            @if (Session::get('success'))
                <div class="results">
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                </div>
            @endif
            @if (!session()->has('LoggedUser'))
                <div>
                    <a href="{{ url('login') }}" class="btn btn-primary">Login</a>
                    <a href="{{ url('register') }}" class="btn btn-primary mr-5 ">Register</a>
                </div>
            @else
                <div>
                    <a href="{{ url('logout') }}" class="btn btn-primary mr-5">Logout</a>
                </div>
            @endif
        </div>
        <div class="d-flex flex-wrap">
                <table class="table table-hover" style="margin-top:50px">
                    <thead>
                        <th>Title</th>
                        <th>Content</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                            <td>{{ $post->title }}</td>
                                <td>{{ $post->content }}</td>
                                <td>
                                    <a href={{ "editPost/".$post->id }} class="btn btn-dark">Edit</a>
                                    <a href={{ "deletePost/".$post->id }} class="btn btn-dark">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
@endsection