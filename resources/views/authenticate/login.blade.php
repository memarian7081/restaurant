@extends('layouts.app')
@section('content')
    <form action="{{route('storeLogin')}}" method="post" style="position: relative;text-align: center;justify-content: center;color: #0dcaf0">
        @csrf
        <div id="userName">
            <span>نام کاربری</span><br>
            <input type="text" name="userName"  value="{{old('userName')}}">
            @if($errors->has('userName'))
                <div class="text-danger">{{$errors->first('userName')}}</div>
            @endif
        </div>
        <div id="password">
            <span>پسورد</span><br>
            <input type="password" name="password" value="{{old('password')}}" ><br>
            @if($errors->has('password'))
                <div class="text-danger">{{$errors->first('password')}}</div>
            @endif
        </div>
        <button type="submit" class="btn btn-success">ورود</button>
    </form>
@endsection
