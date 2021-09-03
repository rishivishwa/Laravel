@extends('layouts.app')

@section('content')
    <style>
        a {
            color: white;
        }


        table {
            width: 70%;
            border-collapse: collapse;
            margin-left: auto;
            margin-right: auto;

        }

        th,
        td {
            padding: 20px;
            text-align: center;
            border: 1px solid black;

        }

        /* tr:nth-child(even) {
                                background-color: coral;
                            } */

    </style>

    <h3 style="margin-top:3em; text-align:center;">Administrator</h3>


    <a href="fileupload" class="btn btn-primary" style="margin-left: 14.5em;">upload video</a>
    <br>
    <br>
    <table>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile Number</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        @foreach ($user as $item)
            <tr>

                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->number }}</td>
                <td>{{ $item->address }}</td>
                <td><b><a href={{ 'delete/' . $item['id'] }} style="color:black;">Remove</a></b></td>

                {{-- <td><img src="" style="height: 70px; width: 70px; border-radius: 50%;"> </td>

                <td>
                    <b><a href='' class="btn btn-secondary">Edit</a></b>
                </td> --}}
            </tr>
        @endforeach
    </table>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
@endsection
