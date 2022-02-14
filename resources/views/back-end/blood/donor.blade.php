@extends('back-end.layouts.master')
@section('brad-title','Donor list')
@section('content')
    <div class="breadcrumb-area d-flex justify-content-between">
        <h4 class="h4 text-bold">Donor List</h4>
        <button href="#" class="btn btn-primary btn-sm float-end" data-toggle="modal"
                data-target="#staticBackdrop">Add Donor
        </button>
    </div>
    <table id="dataTableView" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>Sl No.</th>
            <th>Patient Name</th>
            <th>Donor Name</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Phone</th>
            <th>Relation</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @forelse($donor as $d)
            <tr>

                <td>{{$loop->index+1}}</td>
                <td>{{$d->inpatient->name }}</td>
                <td>{{$d->name }}</td>
                <td>{{$d->gender }}</td>
                <td>{{$d->age }}</td>
                <td>{{$d->phone }}</td>
                <td>{{$d->relation }}</td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm"
                       data-toggle="modal"
                       data-target="#staticBackdropEdit"><span class="bx bxs-edit-alt"></span></a>
                    <a href="{{route('donor.destroy',['id' => $d->id])}}" id="staticBackdropEdit"
                       onclick="alert('Are you sure?')" class="btn btn-danger btn-sm"><span
                            class="bx bxs-trash-alt"></span></a>
                </td>
                @empty
                    <td>Sorry! No Bed Category found</td>
            </tr>
        @endforelse
        </tbody>

    </table>

    <!-- Add Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" style="max-width: 60%">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Donor Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="modal-form" action="{{route('donor.store')}}" method="post">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Select Patient</label>
                                        <select name="in_patient_id" id="" class="form-control form-control-sm">
                                            <option value="" selected disabled>-- Select Patient --</option>
                                            @forelse($ip as $p)
                                                <option value="{{$p->id}}">{{ $p->name }}</option>
                                            @empty
                                                <option disabled>-- No In Patient Found--</option>
                                            @endforelse
                                        </select>
                                        <span id="floor_name_error"></span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select name="gender" id="" class="form-control form-control-sm">
                                            <option value="" selected disabled>-- Select Gender --</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        <span id="floor_name_error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control form-control-sm" id="name" name="name">
                                        <span id="floor_name_error"></span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Age</label>
                                        <input type="number" class="form-control form-control-sm" id="name" name="age">
                                        <span id="floor_name_error"></span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Blood Group</label>
                                        <select name="blood_group" class="form-control form-control-sm">
                                            <option value="" selected disabled>-- Select Blood Group --</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                        </select>
                                        <span id="floor_name_error"></span>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="tel" class="form-control form-control-sm" id="name" name="phone">
                                        <span id="floor_name_error"></span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>E-mail</label>
                                        <input type="email" class="form-control form-control-sm" id="name" name="email">
                                        <span id="floor_name_error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <textarea name="address" class="form-control form-control-sm"></textarea>
                                        <span id="floor_name_error"></span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Relation</label>
                                        <textarea name="relation" class="form-control form-control-sm"></textarea>
                                        <span id="floor_name_error"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary submit">Save</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- edit Modal -->
    {{--    <div class="modal fade" id="staticBackdropEdit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropEditLabel" aria-hidden="true">--}}
    {{--        <div class="modal-dialog modal-md" style="max-width: 60%">--}}
    {{--            <div class="modal-content">--}}
    {{--                <div class="modal-header">--}}
    {{--                    <h5 class="modal-title" id="staticBackdropLabel">In Patient Details</h5>--}}
    {{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
    {{--                        <span aria-hidden="true">&times;</span>--}}
    {{--                    </button>--}}
    {{--                </div>--}}
    {{--                <form id="modal-form"  action="{{route('bed.floor')}}" method="post">--}}
    {{--                    @csrf--}}
    {{--                    <div class="modal-content">--}}
    {{--                        <div class="modal-body">--}}
    {{--                            <div class="form-group">--}}
    {{--                                <label>Name</label>--}}
    {{--                                <input type="text" class="form-control" id="floor_name" name="name">--}}
    {{--                                <span id="floor_name_error"></span>--}}
    {{--                            </div>--}}
    {{--                            <div class="form-group">--}}
    {{--                                <label>Description</label>--}}
    {{--                                <textarea class="form-control" id="floor_description" name="des"></textarea>--}}
    {{--                                <span id="floor_description_error"></span>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="modal-footer">--}}
    {{--                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>--}}
    {{--                            <button type="submit" class="btn btn-primary submit">Save</button>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </form>--}}

    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}


@endsection

