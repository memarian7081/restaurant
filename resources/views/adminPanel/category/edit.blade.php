@extends('layouts.app')
@section('content')
    <form action="{{route('category.update',$categories->id)}}"
          method="POST" enctype="multipart/form-data"
          style="position: relative;
          background-color: #6ea8fe;
          color: #0a0a0a;
          text-align: center;
          width: 50%;margin:5% 25%">
        @csrf
        @method('PATCH')
        <label for="name" style="margin: 5% 0">
            <input type="text" name="name" value="{{old('name',$categories->name)}}">
            <br>
            @if($errors->has('name'))
                <div class="text-danger">{{$errors->first('name')}}</div>
            @endif
        </label><br>
        <label for="image">
            <input type="file" name="image" ><br>
            <img src="{{asset('storage/'.$categories->image)}}" alt="" ><br>
            @if($errors->has('image'))
                <div class="text-danger">{{$errors->first('image')}}</div>
            @endif
        </label><br>
        <label for="discount">
            <input type="text" name="discount" value="{{old('discount',$categories->discount)}}"><br>
            @if($errors->has('discount'))
                <div class="text-danger">{{$errors->first('discount')}}</div>
            @endif
        </label><br>
        <label for="description">
            <textarea name="description">{{old('description',$categories->description)}}</textarea><br>
            @if($errors->has('description'))
                <div class="text-danger">{{$errors->first('description')}}</div>
            @endif
        </label><br>
        <button type="submit" class="btn b btn-success">ویرایش</button>

    </form>
@endsection
