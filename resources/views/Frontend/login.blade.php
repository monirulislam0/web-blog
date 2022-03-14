@extends('Frontend.assets.layouts')
@section('page_title')
Login
@endsection

@section('content')


<br>
<div class="card mb-4">

    <div class="card-header">Registration Form</div>
    @if($errors->any())

        <div class="alert alert-danger mt-3">
            <ul>
                @foreach ( $errors->all() as $error )
                <li> {{$error}}</li>
                @endforeach
            </ul>

        </div>


    @endif
    @if(session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif
    <div class="card-body">
        <form action="{{route('user.login')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-group">
                <input type="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" placeholder="Your email...." name="email">
            </div>
            @error('user-name')
            <div class="alert alert-danger mt-3 p-1">{{$message}}</div>
            @enderror
            <div class="input-group mt-2">
                <input type="password" value="{{old('password')}}""  class="form-control @error('password') is-invalid @enderror" placeholder="Your password" name="password">
            </div>
            @error('email')
            <div class="alert alert-danger mt-3 p-1">{{$message}}</div>
            @enderror

            <div class="input-group mt-2">
                <input type="submit" class="form-control btn btn-primary" value="Sign In" name="login">
            </div>
        </form>
    </div>
</div>

@endsection
