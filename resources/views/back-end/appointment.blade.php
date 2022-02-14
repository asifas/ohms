@extends('back-end.layouts.master')

@section('content')
    <div class="breadcrumb-area d-flex justify-content-between">
        <h4 class="h4 text-bold">Add Appointment</h4>
        <a href="{{route('appointment.list')}}" class="btn btn-primary btn-sm float-end" >Appointment List
        </a>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('appointment.post') }}" method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Patient Name</label>
                        <select name="out_patient_id" id="" class="form-control">
                            <option  disabled selected>-- Choose a Patient --</option>
                            @forelse($out_patient as $op)
                                <option value="{{ $op->id }}">{{$op->name}} ({{$op->out_patient_identifier}})</option>
                            @empty
                                <option>No doctor found</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Choose Doctor</label>
                        <select id="inputState" class="form-control" name="doctor_id">
                            <option disabled selected>Choose a doctor</option>
                            @forelse($doctors as $doctor)
                                <option value="{{ $doctor->id }}">{{$doctor->name}}</option>
                            @empty
                                <option>No doctor found</option>
                            @endforelse
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputZip">Slot</label>
                        <input type="time" name="slot" class="form-control" id="inputZip">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputZip">Date</label>
                        <input type="date" name="date" class="form-control" id="inputZip">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
