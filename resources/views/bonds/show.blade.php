@extends('app')
@section('content')
    <h1>Bond </h1>
    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Bond Type</td>
                <td><?php echo ($bond['bondtype']); ?></td>
            </tr>
            <tr>
                <td>Bond Name</td>
                <td><?php echo ($bond['description']); ?></td>
            </tr>
            
            <tr>
                <td>Purchase Price </td>
                <td><?php echo ($bond['investedvalue']); ?></td>
            </tr>
            <tr>
                <td>Date Purchased</td>
                <td><?php echo ($bond['percentage']); ?></td>
            </tr>
            </tbody>
        </table>
    </div>
@stop
