@extends('layouts.app')
@section('title', 'Manager')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    Hello, Manager
                </div>
            </div>
        </div>
    </div>
    <table>
        <tr>
            <th>em_id</th>
            <th>firname</th>
            <th>lname</th>
        </tr>
        @foreach($employees as $item)
            <tr>
                <td>{{$item->employee_id}}</td>
                <td>{{$item->firstname}}</td>
                <td>{{$item->lastname}}</td>
            </tr>
        @endforeach
    </table>
</div>
@endsection