@extends('base');

@section('content')

<div class="row">

    <div class="col-md-6">

        <div class="card bg-success">
            <div class="card-header">
                <div class="h3">Active Questions</div>
            </div>
            <div class="card-body">
                @if(count($qs=$questions->get())>0)
                <div class="list-group">
                    @foreach($qs as $q)
                        <a href='{{url("/questions/view/$q->id")}}' class="list-group-item list-group-item-action">
                            {{$q->question}}
                        </a>
                    @endforeach
                </div>
                @else
                    No Active question.
                @endif
            </div>
        </div>

        <br>

        <a href="{{url('/')}}" class="btn btn-info">Students View</a>
    </div>
    <div class="col-md-6">
        <div class="card bg-info text-white">
            <div class="card-header">
                <h3>Create a Question</h3>
            </div>
            <div class="card-body">
                {!! Form::open(['url'=>'/questions', 'method'=>'post']) !!}

                {!! Form::hidden('active', 1) !!}

                <div class="form-group">
                    {!! Form::label('user', 'User Name') !!}
                    {!! Form::text('user', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('question', 'Question') !!}
                    {!! Form::textarea('question', null, ['class'=>'form-control','rows'=>'3']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('lifespan', 'Lifespan(seconds)') !!}
                    {!! Form::number('lifespan', null, ['class'=>'form-control']) !!}
                </div>

                <p>
                    <button class="btn btn-light float-right">Submit New Question</button>
                </p>
                {!! Form::close() !!}
            </div>
        </div>

    </div>

</div>

@endsection
