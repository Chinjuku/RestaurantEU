
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/customer/reserving" method="POST" class="">
        @csrf
        <input type="text" name="name" placeholder="ชื่อ" value="{{ old('name') }}">
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="text" name="people_num" placeholder="จำนวน" value="{{ old('phone_num') }}">
        @error('people_num')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="text" name="phone_num" placeholder="เบอร์โทร" value="{{ old('phone_num') }}">
        @error('phone_num')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="time" name="time" value="{{ old('time') }}">
        @error('time')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <button type="submit">Submit</button>
    </form>
</body>
</html>
