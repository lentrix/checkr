@if(count($errors)>0)
    <div class="card d-print-none">
        <div class="card-body bg-danger text-white">
            <ul>
                @foreach($errors->all() as $err)
                    <li>{{$err}}</li>
                @endforeach
            </ul>
        </div>
    </div><br>
@elseif($Error = session('Error'))
    <div class="card d-print-none">
        <div class="card-body bg-danger text-white">
            {{$Error}}
        </div>
    </div><br>
@endif
