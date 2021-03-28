@extends('layout.index')
@section('title')
    Register Page
@endsection
@section('content')
<div class="container">
    <div class="row" style="margin-top:100px">
        <div class="col-md-6 shadow p-5 rounded mx-auto">
            <form action="{{ route('admin.create') }}" method="post" class="d-flex flex-column">
                @csrf
                    <h3 class="text-center">Register yourself</h3>
                    <hr>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="Enter FullName" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" placeholder="Enter email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Password</label>
                    <input type="password" name="password" placeholder="Enter password" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-primary">Register</button>
                </div>
                <a href="admin" class="d-inline-flex mx-auto">Already have Acount!</a>
            </form>
        </div>
    </div>
</div>
@endsection