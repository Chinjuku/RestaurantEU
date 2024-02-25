<div class="d-flex justify-content-center flex-column align-items-center">
    <div wire:loading>
        @include('loading')
    </div>
    
    <table>
        <tr>
            <th>reserveid</th>
            <th>name</th>
            <th>people</th>
            <th>phonenum</th>
            <th>time</th>
        </tr>
        @foreach($reservations as $item)
        <tr>
            <td>{{$item->reserveid}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->people_num}}</td>
            <td>{{$item->phonenum}}</td>
            <td>{{$item->time}}</td>
        </tr>
        @endforeach
    </table>
    <div wire:click>
        {{$reservations->links()}}
    </div>
    
</div>
