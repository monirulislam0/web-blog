@extends('Frontend.assets.layouts')
@section('page_title')
    Registration
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
        <div class="alert alert-{{session('type')}}">{{session('message')}}</div>
    @endif
    <div class="card-body">
        <form action="{{route('user.register')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-group">
                <input type="text" value="{{old('user_name')}}" class="form-control @error('user_name') is-invalid @enderror" placeholder="Your name...." name="user_name">
            </div>
            @error('user-name')
            <div class="alert alert-danger mt-3 p-1">{{$message}}</div>
            @enderror
            <div class="input-group mt-2">
                <input type="email" value="{{old('email')}}""  class="form-control @error('email') is-invalid @enderror" placeholder="Your email" name="email">
            </div>
            @error('email')
            <div class="alert alert-danger mt-3 p-1">{{$message}}</div>
            @enderror
            <div class="input-group mt-2">
                <input type="file" value="{{old('user-name')}} "class="form-control @error('file') is-invalid @enderror" placeholder="Password" name="file">
            </div>
            @error('file')
            <div class="alert alert-danger mt-3 p-1">{{$message}}</div>
            @enderror

            <div class="input-group mt-2">
                <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password">
            </div>
            @error('password')
            <div class="alert alert-danger mt-3 p-1">{{$message}}</div>
            @enderror
            <div class="input-group mt-2">
                <input type="submit" class="form-control btn btn-primary" value="Register now" name="register">
            </div>
        </form>
    </div>
</div>
@endsection
