@extends('layout.index')
@section('title')
    User Update
@endsection
@section('content')
<div class="container">
    <div class="row" style="margin-top:100px">
        <div class="col-md-8 shadow p-5 rounded mx-auto" >
            <form action="{{ route('adminpage.update') }}" method="POST" class="d-flex flex-column">
                @csrf
                    <h1 class="font-weight-bold text-center">Edit your Info</h1>
                    <hr>
                
                @if (Session::get('fail'))
                    <div class="results">
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    </div>
                @endif
                <input type="hidden" name="id" value="{{ $LoggedUserInfo->id }}">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="Enter full name" class="form-control" value="{{ $LoggedUserInfo->name }}">
                    <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" placeholder="Enter email" class="form-control" value="{{ $LoggedUserInfo->email }}">
                    <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Enter password" class="form-control">
                    <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                </div>
                <div class="form-group d-inline-flex mx-auto ">
                    <button type="submit" class="btn px-5 btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection