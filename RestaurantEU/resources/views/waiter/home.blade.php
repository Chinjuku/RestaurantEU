@extends('layouts.app')
@section('title', 'Chef')

@section('content')
<div class="container">
    <table>
        <tr>
            <th>reserveid</th>
            <th>name</th>
            <th>people</th>
            <th>phonenum</th>
            <th>time</th>
        </tr>
        @foreach($reservations as $getreserve)
            <tr>
                <td>{{$getreserve->reserveid}}</td>
                <td>{{$getreserve->name}}</td>
                <td>{{$getreserve->people_num}}</td>
                <td>{{$getreserve->phonenum}}</td>
                <td>{{$getreserve->time}}</td>
            </tr>
        @endforeach
    </table>
</div>
@endsection