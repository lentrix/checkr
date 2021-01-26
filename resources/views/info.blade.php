@if($info = session('Info'))

<div class="card d-print-none">
    <div class="card-body bg-success text-white">
        {{$info}}
    </div>
</div>
<br>
@endif
