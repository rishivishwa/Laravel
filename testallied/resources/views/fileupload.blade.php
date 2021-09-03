@extends('layouts.app')

@section('content')
    
    {{-- @if (session()->has('status'))
{{session('status')}}
@endif --}}
<div class="col-md-8 mx-auto" style="margin-top:5em;">
    <h2>Upload Video</h2>
    <br>
<form action="" method="POST" enctype="multipart/form-data" >
    @csrf
   
    <input type="file" name="filename" accept="video/*" id="video-upload" class="form-control"><br>
    

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Select Cource</label>
        </div>
        <select name="course" id="cars" class="custom-select">
            <option selected disabled>Choose...</option>
            <option value="Maths">Maths</option>
            <option value="English">English</option>
            <option value="History">History</option>
            <option value="Physics">Physics</option>
        </select>
    </div>

    <button type="submit" class="btn btn-sucess"> Upload</button>
</form>
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
</div>
@endsection
