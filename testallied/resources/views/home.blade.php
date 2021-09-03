@extends('layouts.app')

@section('content')

    <h2 class="row justify-content-center" style="margin-top: 2em;"> Profile</h2><br>

    {{-- profile page code --}}
    <div class="container">
        <div class="main-body">

            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                    class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4>{{ Auth::user()->name }}</h4>
                                    <p class="text-secondary mb-1">{{ Auth::user()->email }}</p>
                                    <button class="btn btn-primary">Follow</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-3">
                        <a href="/checkout" class="btn btn-success mx-auto" style="width:100%;background-color:green;">
                            Payments
                            Details </a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0"> Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ Auth::user()->name }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ Auth::user()->email }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Mobile Number</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ Auth::user()->number }}
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ Auth::user()->address }}
                                </div>
                            </div>
                            <hr>

                            <div class="row d-flex flex-column align-items-center text-center">
                                <div class="col-sm-12 ">

                                    {{-- <h6 class="mb-0"> <a href="/courseinfo/{{ Auth::user()->id}}">All Registered 
                                        Courses</a></h6><br> --}}
                                    <h6 class="mb-0"> <a href="{{ url('courseinfo') }}">All Registered
                                            Courses</a></h6><br>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{-- @foreach ($course as $item)
                                            <ul style="display:inline-block;">
                                                <li style="border: 1px solid black;width:10em;">                                                
                                                   <a href="/courseinfo/{{Auth::user()->id}}">{{ $item->course }} </a>
                                                </li>
                                            </ul>
                                        @endforeach --}}
                                </div>
                            </div>
                            <hr>
                            <div class="row d-flex flex-column align-items-center text-center">
                                <div class="col-sm-12 ">
                                    <a href="/edit/{{ Auth::user()->id }}" class="mx-auto" style="width:20%;"> <i
                                            class="fa fa-gear" style="font-size:32px">ProfileSettings</i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
   

@if($course == 0)
    <div class="container" style="margin-top:5em;">
        <h2>You have not registered any course</h2> <br>
        <form action="" method="post">
            @csrf
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

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <br>
    </div>
@endif
</div>
</div>


@endsection
