@extends('index')
@section('content')
<div class="container">
    <div class="row">
        <form action="{{route('update',$customer->customer_id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            
        <div class="form-group">
            <label for="name">name</label>
            <input type="text" name="name" value="{{$customer->name}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="text" name="email" value="{{$customer->email}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="contact">contact</label>
            <input type="number" name="contact" value="{{$customer->contact}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="place">place</label>
            <input type="text" name="place" value="{{$customer->place}}" class="form-control">
        </div>
        <input type="submit" class="btn btn-primary" name="submit" value="update">
        </form>
    </div>
</div>
@endsection