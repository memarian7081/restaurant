@extends('layouts.app')
@section('content')
    <form action="{{route('storeRegister')}}" method="post" style=";position: relative;color: #0dcaf0;text-align: center;justify-content: center;margin: 5% 1%;">
        @csrf
        <div id="name" >
            <span>نام</span><br>
            <input type="text" class="name" name="name" value="{{old('name')}}"><br>
            @if($errors->has('name'))
                <div class="text-danger">{'{$errors->first('name')}}</div>
            @endif
        </div>

        <div id="userName">
            <span>نام کاربری</span><br>
            <input type="text" class="userName" name="userName" value="{{old('userName')}}"><br>
            @if($errors->has('userName'))
                <div class="text-danger">{{$errors->first('userName')}}</div>
            @endif
        </div>

        <div id="email">
            <span>ایمیل</span><br>
            <input type="email" class="email" name="email" value="{{old('email')}}"><br>
            @if($errors->has('email'))
                <div class="text-danger">{{$errors->first('email')}}</div>
            @endif
        </div>
        <div id="phone">
            <span>تلفن</span><br>
            <input type="text" class="phone" name="phone" value="{{old('phone')}}"><br>
            @if($errors->has('phone'))
                <div class="text-danger">{{$errors->first('phone')}}</div>
            @endif
        </div>
        <div id="role">
            <span>نقش</span><br>
            <select name="role" id="" value="{{old('role')}}">
                <option value="{{"admin"}}">ادمین</option>
                <option value="{{"user"}}">کاربر</option>
                <option value="{{"quest"}}">میهمان</option>
            </select>
            @if($errors->has('role'))
                <div class="text-danger">{{$errors->first('role')}}</div>
            @endif
        </div>
         <div id="password">
             <span>پسورد</span><br>
             <input type="password" class="password" name="password" value="{{old('password')}}">
         </div>
        <div id="confirm-password">
            <span>تکرار پسورد</span><br>
            <input type="password" class="confirm-password" name="password_confirmation" value="{{old('password')}}"><br>
            @if($errors->has('password'))
                <div class="text-danger">{{$errors->first('password')}}</div>
            @endif
        </div>
        <div>
            <input type="checkbox" name="remember_token">
        </div>
        <button class="btn btn-primary m-3">ثبت نام</button>
    </form>

@endsection
