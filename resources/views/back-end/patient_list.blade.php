@extends('back-end.layouts.master')
@section('brad-title','In Patient list')
@section('content')
    <div class="breadcrumb-area d-flex justify-content-between">
        <span class="h4 text-bold ">In Patient List</span>
        <button href="#" class="btn btn-primary btn-sm float-right" data-toggle="modal"
                data-target="#staticBackdrop">Add In Patient
        </button>
    </div>

    <table id="dataTableView" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>

            <th>Sl No.</th>
            <th>Hospital Id.</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Guardian Name</th>
            <th>Guardian Phone</th>
            <th>Doctor Name</th>
            <th>Symptoms</th>
            <th>Admission Date</th>
            <th>Department</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
                @forelse($inp as $ip)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$ip->serial_no}}</td>
                        <td>{{$ip->name}}</td>
                        <td>{{$ip->gender}}</td>
                        <td>{{$ip->g_name}}</td>
                        <td>{{$ip->g_phone}}</td>
                        <td>{{$ip->doctor->name}}</td>
                        <td>{{$ip->symptoms}}</td>
                        <td>{{$ip->admission_date}}</td>
                        <td>{{$ip->doctor->department->name}}</td>


                        <td>
                            <a href="#" class="btn btn-warning btn-sm"><span class="bx bxs-edit-alt"></span></a>
                            <a href="#" class="btn btn-danger btn-sm"><span class="bx bxs-trash-alt"></span></a>
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
                    <h5 class="modal-title" id="staticBackdropLabel">In Patient Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('in.patient.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Patient Name</label>
                            <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp"
                                   placeholder="jason backer">
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col">
                                    <label for="exampleInputEmail1">Doctor Name</label>
                                    <select name="doctor_id" id="bloodGroup" class="form-control form-control-sm">
                                        <option selected disabled> Select a Doctor</option>
                                        @forelse($doc as $d)
                                            <option value="{{$d->id}}">Namw-{{$d->name}} Dept. {{$d->department->name}}</option>
                                        @empty
                                            <option>No Bed Found</option>
                                        @endforelse

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col">
                                    <label for="exampleInputEmail1">Bed No.</label>
                                    <select name="bed_id" id="" class="form-control form-control-sm">
                                        <option selected disabled> Select a Bed</option>
                                        @forelse($bed as $b)
                                            <option value="{{$b->id}}">Bed No-{{$b->name}} Class-{{$b->bed_category->name}} Floor-{{$b->bed_category->floors->name}}</option>
                                        @empty
                                            <option>No Bed Found</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
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
                                        <option selected disabled> Select a Gender</option>
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
                                    <label for="exampleInputEmail1">Admission Date</label>
                                    <input type="date" name="admission_date" oninput="validity.valid||(value='');"
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
                                    <label for="exampleInputEmail1">G Name</label>
                                    <input type="text" name="g_name" oninput="validity.valid||(value='');"
                                           class="form-control" id="name" aria-describedby="nameHelp"
                                           placeholder="jason backer">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">G Phone</label>
                                    <input type="number" name="g_phone" oninput="validity.valid||(value='');"
                                           class="form-control" id="name" aria-describedby="nameHelp"
                                           placeholder="jason backer">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Already register</label>
                                    <select name="old_patient" id="" class="form-control">
                                        <option selected disabled>-- Select One --</option>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">casualty</label>
                                    <input type="text" name="casualty" class="form-control" id="name"
                                           aria-describedby="nameHelp"
                                           placeholder="jason backer">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Reference</label>
                                    <textarea class="form-control form-control-sm" name="reference"
                                              id="exampleFormControlTextarea1" cols="10"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control form-control-sm" name="des"
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

