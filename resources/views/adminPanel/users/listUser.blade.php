@extends('layouts.app')
@section('content')
<div class="table "style="position: relative;color: white;text-align: center">
    <table style="width: 100%">
        <thead>
        <tr>
            <th style="width: 15%">نام</th>
            <th style="width: 10%"> نام کاربری</th>
            <th style="width: 10%">تلفن</th>
            <th style="width: 25%">ایمیل</th>
            <th >ویرایش</th>
            <th>حذف</th>
        </tr>
        </thead>
        @foreach($users as $user)
            <tbody>
            <tr>
                <td style="width: 15%">{{$user->name}}</td>
                <td style="width: 10%">{{$user->userName}}</td>
                <td style="width: 10%">{{$user->phone}}</td>
                <td style="width: 25%;word-break: break-all">{{$user->email}}</td>
                <td>
                    <a href="{{route('editUser',$user->id)}}" style="color: #0dcaf0;text-decoration: none"><button class="btn btn-success">update</button></a>
                </td>
                <td>
                    <form action="{{route('deleteUser',$user->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger ">Delete</button>
                    </form>
                </td>

            </tr>
            </tbody>
        @endforeach
    </table>
</div>
@endsection
