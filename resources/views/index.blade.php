@extends('Layouts.master')
@push('head')
    <title> TODO-APP </title>
    
@endpush

@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5">
        <div class="h2">
            All todos
        </div>
        <a href="{{ route('todo.create') }}" class="btn btn-dark btn-md">Add Todo</a>
    </div>
        
    <table class="table table-stripped table-dark">
        <thead>
            <th>Name</th>
            <th>Work</th>
            <th>Due date</th>
            <th>Action</th>
        </thead>   
        <tbody>
            @foreach ($todos as $t)
            <tr>
                <td>{{ $t->name }}</td>
                <td>{{ $t->work }}</td>
                <td>{{ $t->duedate }}</td>
                <td>
                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                    <a href="" class="btn btn-warning btn-sm ">Update</a>

                </td>
            </tr>
                
            @endforeach

        </tbody>
    </table>
        </div> 
    
@endsection