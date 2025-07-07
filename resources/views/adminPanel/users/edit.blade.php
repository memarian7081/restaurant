@extends('layouts.app')
@section('content')
    <form action="{{route('updateUser',$user->id)}}" method="post" >
        @csrf
        @method('PUT')
        <label for="name">
            <span>name:</span>
            <input type="text" name="name" value="{{old('name',$user->name)}}">
        </label>
        <label for="userName">
            <span>userName</span>
            <input type="text" name="userName" value="{{old('userName',$user->username)}}">
        </label>
        <label for="phone">
            <span>phone</span>
            <input type="text" name="phone" value="{{old('phone',$user->phone)}}">
        </label>
        <label for="email">
            <span>email</span>
            <input type="email" name="email"  value="{{old('email',$user->email)}}">
        </label>
        <button class="btn btn-success">update</button>
    </form>
@endsection
