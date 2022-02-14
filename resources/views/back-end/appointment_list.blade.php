@extends('back-end.layouts.master')
@section('brad-title','Appointment list')
@section('content')
    <div class="breadcrumb-area d-flex justify-content-between">
        <h4 class="h4 text-bold">Appointment List</h4>
        <a href="{{route('appointment')}}" class="btn btn-primary btn-sm float-end" >Appointment Add
        </a>
    </div>
    <div class="">
        <table id="dataTableView" class="table table-striped table-bordered" >
            <thead>
            <tr>
                <th>Sl No.</th>
                <th>ID No.</th>
                <th>Patient Name</th>
                <th>Patient Phone</th>
                <th>Consultant Name</th>
                <th>Dept. Name</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @forelse($appointments as $a)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$a->out_patients->out_patient_identifier }}</td>
                    <td>{{$a->out_patients->name }}</td>
                    <td>{{$a->out_patients->phone }}</td>
                    <td>{{$a->doctors->name }}</td>
                    <td>{{$a->doctors->department->name }}</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm"
                           data-toggle="modal"
                           data-target="#staticBackdropEdit"><span class="bx bxs-edit-alt"></span></a>
                        <a href="{{route('appointment.destroy',['id' => $a->id])}}" id="staticBackdropEdit"
                           onclick="alert('Are you sure?')" class="btn btn-danger btn-sm"><span
                                class="bx bxs-trash-alt"></span></a>
                    </td>
                    @empty
                        <td>Sorry! No Bed Category found</td>
                </tr>
            @endforelse
            </tbody>

        </table>
    </div>
@endsection

