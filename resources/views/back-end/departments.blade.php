@extends('back-end.layouts.master')
@section('brad-title','Create Department')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="h3">Department Form</h3>
        </div>
        <div class="card-body">
            <form action="{{route('department.create')}}" method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="input">Department Name</label>
                        <input type="text" class="form-control" name="name" id="input">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="input">Description</label>
                        <input type="text" class="form-control" name="des" id="input">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
