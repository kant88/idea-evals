@extends('layouts.app')

@section('content')
    <div class="center jumbotron" style="background-color:RGB(0,51,0);">
        <div class="text-center">
            <h1 style="color:white;">Idea-Evaluations</h1>
        </div>
    </div>
    <div class="text-center" class="row">
        <div class="col-md-offset-1 col-md-10 col-md-offset-1">
            {!! Form::model($idea, ['route' => 'confirmNamepost']) !!}
            <div class="form-group">
                {!! Form::label('name', 'クラウドワークス名') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'class' => 'required']) !!}
            </div>
            {!! Form::submit('アイデア評価用のページへ', ['class' => 'btn btn-primary', 'style'=>'margin-top:10px']) !!}
            {!! Form::close() !!}
        </div>
    </div>
   
@endsection