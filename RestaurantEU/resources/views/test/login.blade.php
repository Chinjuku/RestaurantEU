@extends('/auth/layout')
@section('content1')
    <h1>Login Form</h1>
    <form action="/login" class="flex flex-col" method="GET">
        @csrf
        <label for="">Email</label>
        <input class="border border-black" type="text" name="email" value="{{old('email')}}" />
        @error('email')
            <span class="text-red-600">{{$message}}</span>
        @enderror
        <label for="">Create your Password</label>
        <input class="border border-black" type="password" name="password" value="{{old('password')}}" />
        @error('password')
            <span class="text-red-600">{{$message}}</span>
        @enderror
        <button type="submit">Submit</button>
    </form>
@endsection