@extends('back-end.layouts.master')
@section('brad-title','Doctor list')
@section('content')
    <div class="breadcrumb-area d-flex justify-content-between">
        <h4 class="h4 text-bold ">Doctor List</h4>
        <a href="{{route('doctor.add')}}" class="btn btn-primary btn-sm float-end">Add Doctor</a>
    </div>
    <table id="dataTableView" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>Sl No.</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Degree</th>
            <th>Department</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @forelse($doc as $d)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$d->name}}</td>
                <td>{{$d->email}}</td>
                <td>{{$d->phone}}</td>
                <td>{{$d->address}}</td>
                <td>{{$d->degree}}</td>
                <td>{{$d->department->name}}</td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm"><span class="bx bxs-edit-alt"></span></a>
                    <a href="{{route('doctor.destroy',['id' => $d->id])}}" onclick="alert('Are you sure?')" class="btn btn-danger btn-sm"><span class="bx bxs-trash-alt"></span></a>
                </td>
                @empty
                    <td>Sorry! No Department found</td>
            </tr>
        @endforelse
        </tbody>

    </table>
@endsection

