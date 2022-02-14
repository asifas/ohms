@extends('back-end.layouts.master')
@section('brad-title','Out Patient list')
@section('content')
    <div class="breadcrumb-area d-flex justify-content-between">
        <span class="h4 text-bold ">Out Patient List</span>
        <button href="#" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#staticBackdrop">
            Add Out Patient
        </button>
    </div>

    <table id="dataTableView" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>Sl No.</th>
            <th>ID No.</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Age</th>
            <th>BP</th>
            <th>Symptoms</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @forelse($out_patient as $op)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$op->out_patient_identifier}}</td>
                <td>{{$op->name}}</td>
                <td>{{$op->phone}}</td>
                <td>{{$op->age}}</td>
                <td>{{$op->bp}}</td>
                <td>{{$op->symptoms}}</td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm"><span class="bx bxs-edit-alt"></span></a>
                    <a href="{{route('out.patient.destroy',['id'=>$op->id])}}" onclick="alert('Are you sure?')" class="btn btn-danger btn-sm"><span
                            class="bx bxs-trash-alt"></span></a>
                </td>
                @empty
                    <td>Sorry! No Department found</td>
            </tr>
        @endforelse
        </tbody>

    </table>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" style="max-width: 60%">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Out Patient Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('out.patient.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Patient Name</label>
                            <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp"
                                   placeholder="jason backer">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="bloodGroup">Blood Group</label>
                                    <select name="blood_group" id="bloodGroup" class="form-control form-control-sm">
                                        <option selected> Select a Blood Group</option>
                                        <option value="a-">A-</option>
                                        <option value="a+">A+</option>
                                        <option value="b-">B-</option>
                                        <option value="b">B+</option>
                                        <option value="0+">0+</option>
                                        <option value="0-">0-</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="bloodGroup">Gender</label>
                                    <select name="gender" id="bloodGroup" class="form-control form-control-sm">
                                        <option selected> Select a Gender</option>
                                        <option value="0">Male</option>
                                        <option value="1">Female</option>
                                        <option value="2">Other</option>

                                    </select>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Age</label>
                                    <input type="number" name="age" oninput="validity.valid||(value='');"
                                           class="form-control form-control-sm" id="name" aria-describedby="nameHelp"
                                           placeholder="jason backer">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phone</label>
                                    <input type="number" name="phone" min="0"
                                           oninput="validity.valid||(value='');"
                                           class="form-control form-control-sm" id="name" aria-describedby="nameHelp"
                                           placeholder="jason backer">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">BP</label>
                                    <input type="number" name="bp" oninput="validity.valid||(value='');"
                                           class="form-control" id="name" aria-describedby="nameHelp"
                                           placeholder="jason backer">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Height</label>
                                    <input type="number" name="height" oninput="validity.valid||(value='');"
                                           class="form-control" id="name" aria-describedby="nameHelp"
                                           placeholder="jason backer">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Weight</label>
                                    <input type="number" name="weight" oninput="validity.valid||(value='');"
                                           class="form-control" id="name" aria-describedby="nameHelp"
                                           placeholder="jason backer">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Symptons</label>
                                    <input type="text" name="symptoms" class="form-control" id="name"
                                           aria-describedby="nameHelp"
                                           placeholder="jason backer">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control form-control-sm" name="address"
                                              id="exampleFormControlTextarea1" cols="10"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

