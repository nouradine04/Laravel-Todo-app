@extends('Layouts.master')
@push('head')
    <title> Create TODO </title>
    
@endpush

@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5">
        <div class="h4">
            Add Todo
        </div>
        <a href="{{ route('todo.index') }}" class="btn btn-dark btn-sm">Back</a>
    </div>
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{ route('todo.store') }}">
                    @csrf
                    <label for="" class="form-label mt-4 ">Name</label>
                    <input type="text" name="name" class="form-control">
                    <div class="text-danger">
                        @error('name')
                            {{ message }}
                        @enderror
                    </div>
                    <label for="" class="form-label mt-4 ">Work</label>
                    <input type="text" name="work" class="form-control">
                    <div class="text-danger">
                        @error('work')
                            {{ message }}
                        @enderror
                    </div>
                    <label for="" class="form-label mt-4 ">Due Date</label>
                    <input type="date" name="duedate" class="form-control">
                    <div class="text-danger">
                        @error('duedate')
                            {{ message }}
                        @enderror
                    </div>
                    <button class="btn btn-dark mt-4 btn-sm">Add Todo</button>
                </form>
            </div>
        </div>
    </div>


    
@endsection