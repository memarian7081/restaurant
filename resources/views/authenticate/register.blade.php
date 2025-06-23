@extends('layouts.app')
@section('content')
    <form action="{{route('storeRegister')}}" method="post" style=";position: relative;color: #0dcaf0;text-align: center;justify-content: center;margin: 5% 1%;">
        @csrf
        <div id="name" >
            <span>نام</span><br>
            <input type="text" class="name" name="name"><br>
            @if($errors->has('name'))
                <div class="text-danger">{{$errors->first('name')}}</div>
            @endif
        </div>

        <div id="userName">
            <span>نام کاربری</span><br>
            <input type="text" class="userName" name="userName"><br>
            @if($errors->has('name'))
                <div class="text-danger">{{$errors->first('name')}}</div>
            @endif
        </div>

        <div id="email">
            <span>ایمیل</span><br>
            <input type="email" class="email" name="email"><br>
            @if($errors->has('name'))
                <div class="text-danger">{{$errors->first('name')}}</div>
            @endif
        </div>
        <div id="phone">
            <span>تلفن</span><br>
            <input type="text" class="phone" name="phone"><br>
            @if($errors->has('name'))
                <div class="text-danger">{{$errors->first('name')}}</div>
            @endif
        </div>
         <div id="password">
             <span>پسورد</span><br>
             <input type="password" class="password" name="password">
         </div>
        <div id="confirm-password">
            <span>تکرار پسورد</span><br>
            <input type="password" class="confirm-password" name="password_confirmation"><br>
            @if($errors->has('name'))
                <div class="text-danger">{{$errors->first('name')}}</div>
            @endif
        </div>
        <div>
            <input type="checkbox" name="remember-token">
        </div>
        <button class="btn btn-primary m-3">ثبت نام</button>
    </form>

@endsection
