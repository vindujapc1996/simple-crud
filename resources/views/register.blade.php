@extends('index')
@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{!!session('success')!!}}
</div>
@endif
<div class="container" style="width:25%; border:1px solid black;">
    <div class="row">
        <form action="{{route('registerdata')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <h2>register data</h2>
            <div class="form-group">
                <label for="name">name:</label>
                <input type="text" name="name">
            </div>
            <div class="form-group">
                <label for="email">email:</label>
                <input type="text" name="email">
            </div>
            <div class="form-group">
                <label for="contact">contact:</label>
                <input type="text" name="contact">
            </div>
            <div class="form-group">
                <label for="place">place:</label>
                <input type="text" name="place">
            </div>
            <div class="class">
                <label for="image">image:</label>
                <input type="file" name="image" >
            </div>
            <input type="submit" name="submit" class="btn btn-primary">
        </form>
    </div>
</div>
@endsection