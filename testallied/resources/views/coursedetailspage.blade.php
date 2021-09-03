@extends('layouts.app')

@section('content')
    <div style="margin-top: 3em;" class="align-items-center text-center">
        <h2>Find Your Course Videos</h2>
        <?php
        // echo $course;
        // echo $id;
        // print_r($course[1])

        // this will use for find method
        // echo $user->course->course;
        ?>

        @foreach ($course as $value)
            <ul style="display:inline-block;">
                <li style="border: 1px solid black;width:20em;">
                    {{ $value->course }} <br>

                    {{-- {{ $value->created_at }} --}}

                </li>
                <li style="border: 1px solid black;width:20em;">
                    <video width="320" height="240" controls>
                        <source src="{{ asset($value->filename) }}" type="video/mp4">
                    </video><br>
                    {{-- {{ $value->filename }}: --}}
                </li>
            </ul>
        @endforeach
    </div>


@endsection
