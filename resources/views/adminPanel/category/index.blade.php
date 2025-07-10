@extends('layouts.app')
@section('content')

   <div class="container" style="position: relative;color: #0dcaf0">
       <div class="header">
           <a href="{{route('category.create')}}" style="text-decoration: none;color: #0dcaf0">ایجاد  گروه بندی</a>
       </div>
       <div class="table" style="position: relative;background-color: #0b5ed7;text-align: center ;justify-content: center;">
           <table>
               <thead>
               <tr style="background-color: #0dcaf0;color: white">
                   <th style="width: 10%">نام دسته</th>
                   <th style="width: 10%">عکس</th>
                   <th style="width: 10%">تخفیف</th>
                   <th style="width: 10%">توضیحات</th>
                   <th style="width: 10%">حذف</th>
                   <th style="width: 10%">ویرایش</th>


               </tr>
               </thead>
               <tbody>
               @foreach($categories as $category)
                   <tr style="background-color:#0b5ed7;color: aliceblue">
                       <td style="width: 10%">{{$category->name}}</td>
                       <td style="width: 10%">
                           <img src="{{asset('storage/'.$category->image)}}" alt="">
                       </td>
                       <td style="width: 10%">{{$category->discount}}</td>
                       <td style="width: 10%">{{$category->description}}</td>
                       <td style="width: 10%">
                           <form action="" method="post">
                               @csrf
                               @method('DELETE')
                               <button class="btn btn-danger">Delete</button>
                           </form>
                       </td>
                       <td style="width: 10%">
                           <form action="{{route('category.edit',$category->id)}}" method="post" enctype="multipart/form-data">
                               @csrf
                               <button class="btn btn-success">ویرایش</button>
                           </form>
                       </td>
                   </tr>
               @endforeach
               </tbody>
           </table>
       </div>
   </div>
@endsection
