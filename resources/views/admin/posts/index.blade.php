
@extends('layouts.admin')


@section('content')

  <h1>posts</h1>
  <table class="table">
  <thead>
    <tr>
        <th>Id</th>
        <th>owner</th>
        <th>photo_id</th>
        <th>category_id</th>
        <th>title</th>
        <th>body</th>
        <th>created_at</th>
        <th>updated_at</th>
    </tr>
    </thead>
    <tbody>
    @if($post)
      @foreach($post as $posts)
         <tr>
            <td>{{$posts->id}}</td>
             
             <!-- problem over here in displaying image in show all posts -->
            <!-- <img height="50" src="{{$posts->photo ? $posts->photo->file:'no user photo'}}" alt=""> -->
            <!-- <td><img height="50" src="{{$posts->photo ? $posts->photo->file :'no photo' }}" alt=""></td> -->
     
            <td><a href="{{route('admin.posts.edit',$posts->id)}}">{{$posts->user->name}}</a></td>
            <td>{{$posts->photo_id}}</td>
            <td>{{$posts->category ? $posts->category->name :"uncategories"}}</td>
            <td>{{$posts->title}}</td>
            <td>{{$posts->body}}</td>
            <td>{{$posts->created_at->diffForHumans()}}</td>
            <td>{{$posts->updated_at->diffForHumans()}}</td> 
         </tr>
         @endforeach
         @endif
    </tbody>    
  </table>

@stop