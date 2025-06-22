@extends('layouts.app')
@section('content')
    <form action="" method="post" style="display: flex;position: relative;color: #0dcaf0;text-align: center;justify-content: center;margin: 5% 1%">
        <div id="name">
            <span>نام</span><br>
            <input type="text" class="name" name="name">
        </div>
        <div id="userName">
            <input type="text" class="userName" name="userName">
        </div>
    </form>

@endsection
