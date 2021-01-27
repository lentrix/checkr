@extends('base')

@section('content')


<div class="row">

    <div class="col-md-5">
        <div class="card bg-success text-white">
            <div class="card-header">
                <h4>The Question</h4>
            </div>
            <div class="card-body">
                {{$question->question}}
            </div>
        </div>
        <br>
        <p>
            <a href="{{url('/backend')}}" class="btn btn-secondary">
                Back
            </a>
        </p>
        <div>
            {!! Form::open(['url'=>'/deactivate', 'method'=>'post']) !!}

            {!! Form::hidden('question_id', $question->id) !!}

            <div class="form-group">
                {!! Form::label('user', 'User Name') !!}
                {!! Form::text('user', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password', 'Password') !!}
                {!! Form::password('password', ['class'=>'form-control']) !!}
            </div>

            <button class="btn btn-danger">Deactivate Question</button>

            {!! Form::close() !!}
        </div>
    </div>

    <div class="col-md-7">
        <div class="card bg-info">
            <div class="card-header">
                <h4>Responses</h4>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach($question->responses as $resp)
                        <li class="list-group-item list-group-item-info">
                            <span class="badge badge-pill badge-success">
                                {{$resp->lname}}, {{$resp->fname}}
                            </span>
                            {{$resp->response}}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
