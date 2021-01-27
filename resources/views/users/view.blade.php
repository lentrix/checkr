@extends('base')

@section('content')

<div class="row">

<div class="col-md-5">
    <div class="card bg-success text-white">
        <div class="card-header">
            <a href="{{url('/')}}" class="btn btn-light float-right">
                Back Home
            </a>
            <h4>The Question</h4>
        </div>
        <div class="card-body">
            {{$question->question}}
        </div>
    </div>
    <br>
    <hr>
    <div class="card bg-info text-white">
        <div class="card-header">
            <h4>Your Answer</h4>
        </div>
        <div class="card-body">
            {!! Form::open(['url'=>'/answer', 'method'=>'post']) !!}

            {!! Form::hidden('question_id', $question->id) !!}

            <div class="form-group">
                {!! Form::label('lname', "Last Name") !!}
                {!! Form::text('lname', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('fname', "First Name") !!}
                {!! Form::text('fname', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('response', 'Your Answer') !!}
                {!! Form::textarea('response', null, ['class'=>'form-control', 'rows'=>3]) !!}
            </div>
            <p>
                <button class="btn btn-light float-right">Submit Your Answer</button>
            </p>

            {!! Form::close() !!}
        </div>
    </div>
</div>

<div class="col-md-7">
    <div class="card bg-warning">
        <div class="card-header">
            <h4>Responses</h4>
        </div>
        <div class="card-body">
            <ul class="list-group">
                @foreach($question->responses as $resp)

                <li class="list-group-item list-group-item-warning">
                    {{$resp->lname}}, {{$resp->fname}} <span class="badge badge-warning">{{$resp->response}}</span>
                </li>

                @endforeach
            </ul>
        </div>
    </div>
</div>

</div>

@endsection
