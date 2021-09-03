@extends('layouts.app')

@section('content')
    <div class="align-items-center text-center" style="margin-top: 4em;">
        <h3> All Registered Courses</h3><br>

        {{-- @foreach ($course as $item)
            <ul style="display:inline-block;">
                <li style="border: 1px solid black;width:20em;">
                    
                    Course : -<a href="/coursedetailspage/{{Auth::user()->id}}"> {{ $item->course }} </a><br>
                   <p>Date and Time : - {{ $item->created_at }}  </p>
                   
                </li> <br>  
                <li style="border: 1px solid black;width:20em;">
                    Author Name : -{{Auth::user()->name}}
                </li>
            </ul>
        @endforeach --}}

        <div class="col-md-8" style="margin-left: auto; margin-right:auto;">
            <div class="card mb-3">
                <div class="card-body">
                    @foreach ($course as $item)
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Course</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <a href="/coursedetailspage/{{ strtolower($item->course)}}">Click {{ $item->course }} </a>
                        </div>
                        
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Author Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{Auth::user()->name}}
                        </div>
                    </div>
                    <hr>
                    
                    @endforeach
                    

                    <div class="row d-flex flex-column align-items-center text-center">

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

                </div>
            </div>


        </div>


     <div>

            {{-- @foreach ($upload as $data)
            <table>
                <tr style="display:inline-block;">
                    <td style="border: 1px solid black;width:10em;">
                        <video width="320" height="240" controls>
                            <source src="{{ asset($data->filename) }}" type="video/mp4">
                        </video>
                        {{$data->filename}}
                    </td>
                    <hr>
                </tr>
            </table>
            @endforeach --}}
       
@endsection
