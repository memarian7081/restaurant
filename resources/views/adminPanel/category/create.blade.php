@extends('layouts.app')
@section('content')
    <form action="{{route('category.store')}}" id="formCreate" method="post" enctype="multipart/form-data" style="position: relative;color: #0dcaf0;justify-content: center;text-align: center">
        @csrf
        <label for="name">
            <span>نام</span><br>
            <input type="text" name="name" ><br>
            @if($errors->has('name'))
                <div class="text-danger">{{$errors->firsty('name')}}</div>
            @endif
        </label><br>
        <label for="image">
            <span>عکس</span><br>
            <input type="file" name="image">
            @if($errors->has('image'))
                <div class="text-danger">{{$errors->first('image')}}}</div>
            @endif
        </label><br>
        <label for="discount">
            <span>تخفیف</span><br>
            <input type="text" name="discount"><br>
            @if($errors->has('discount'))
                <div class="text-danger">{{$errors->firdt('discount')}}</div>
            @endif
        </label><br>
        <label for="description">
            <span>توضیحات</span><br>
            <textarea name="description"></textarea><br>
            @if($errors->has('description'))
                <div class="text-danger">{{$errors->first('description')}}</div>
            @endif
        </label><br>
        <button type="submit" class="btn btn-secondary">ایجاد</button>
    </form>
@endsection

