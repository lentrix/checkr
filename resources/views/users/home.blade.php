@extends('base')

@section('content')

<div class="col-md-4 offset-md-4">
    <div class="card bg-success">
        <div class="card-header">
            <h4>Active Questions</h4>
        </div>
        <div class="card-body">
            <div class="list-group">
                @foreach($questions as $q)

                <a href='{{url("/user-view/$q->id")}}'
                        class="list-group-item list-group-item-action list-group-item-success">
                    {{$q->question}}
                </a>

                @endforeach
            </div>
        </div>
    </div>
    <br>
    <a href="{{url('/backend')}}" class="btn btn-info">Backend View</a>
</div>

@endsection
