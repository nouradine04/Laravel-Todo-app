@extends('Layouts.master')
@push('head')
    <title> Update TODO </title>
    
@endpush

@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5">
        <div class="h4">
            Update Todo
        </div>
        <a href="" class="btn btn-dark btn-sm">Back</a>
    </div>
        <div class="card">
            <div class="card-body">
                <form method="post" action="">
                    @csrf
                    <label for="" class="form-label mt-4 ">Name</label>
                    <input type="text" name="name" class="form-control">
                    <label for="" class="form-label mt-4 ">Work</label>
                    <input type="text" name="work" class="form-control">
                    <label for="" class="form-label mt-4 ">Due Date</label>
                    <input type="date" name="name" class="form-control">
                    <button class="btn btn-dark mt-4 btn-sm">Add Todo</button>
                </form>
            </div>
        </div>
    </div>


    
@endsection