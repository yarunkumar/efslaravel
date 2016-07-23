@extends('app')
@section('content')
    <h1>Create New Bond</h1>
    {!! Form::open(['url' => 'bonds']) !!}

       <div class="form-group">
        {!! Form::select('customer_id', $customers) !!}
    </div>

    <div class="form-group">
        {!! Form::label('bondtype', 'Bond Type:') !!}
        {!! Form::text('bondtype',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::text('description',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('investedvalue', 'Invested Value:') !!}
        {!! Form::text('investedvalue',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('percentage', 'Percentage:') !!}
        {!! Form::text('percentage',null,['class'=>'form-control']) !!}
    </div>
    


    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop
