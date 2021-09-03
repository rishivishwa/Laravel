@extends('layouts.app')

@section('content')
    <div class="col-md-8 mx-auto" style="margin-top:5em;">
        <form action="{{ Auth::user()->id }}" method="POST">
            @csrf
            <h1>Edit User Profile</h1>
            <br>
            {{-- <input type="hidden" name="id"  value="{{Auth::user()->id }}"> --}}
            <input type="text" value="{{ Auth::user()->name }}" name="name" class="form-control"><br><br>

            <input type="email" value="{{ Auth::user()->email }}" name="email" class="form-control"><br><br>

            <input type="text" value="{{ Auth::user()->address }}" name="address" class="form-control"><br><br>

            <input type="number" value="{{ Auth::user()->number }}" name="number" class="form-control"><br><br>

            <input type="password" value="{{ Auth::user()->password }}" name="password" class="form-control"><br><br>
            <button type="submit" class="btn btn-primary"> Edit </button>
        </form>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
    </div>
@endsection
