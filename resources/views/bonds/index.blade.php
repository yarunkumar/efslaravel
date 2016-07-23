@extends('app')

@section('content')
    <h1>Bonds</h1>
    <a href="{{url('/bonds/create')}}" class="btn btn-success">Create Bonds</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Cust No</th>
            <th>Cust Name</th>
            <th>Bond Type</th>
            <th>Description</th>
            <th>Invested Value</th>
            <th>Percentage</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($bonds as $bond)
            <tr>
                <td>{{ $bond->customer->cust_number }}</td>
                <td>{{ $bond->customer->name }}</td>
                <td>{{ $bond->bondtype }}</td>
                <td>{{ $bond->description }}</td>
                <td>{{ $bond->investedvalue }}</td>
                <td>{{ $bond->percentage }}</td>
                <td><a href="{{url('bonds',$bond->id)}}" class="btn btn-primary">Read</a></td>
                <td><a href="{{route('bonds.edit',$bond->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['bonds.destroy', $bond->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection
