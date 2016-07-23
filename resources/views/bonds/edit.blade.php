@extends('app')
@section('content')
    <h1>Update Bond</h1>
    {!! Form::model($bond,['method' => 'PATCH','route'=>['bonds.update',$bond->id]]) !!}
       <div class="form-group">
        {!! Form::label('bondtype', 'Bond Type:') !!}
        {!! Form::text('bondtype',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description') !!}
        {!! Form::text('description',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('shares', 'Shares:') !!}
        {!! Form::text('shares',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('investedvalue', 'Invested Value') !!}
        {!! Form::text('investedvalue',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('percentage', ' Percentage:') !!}
        {!! Form::text('percentage',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop
