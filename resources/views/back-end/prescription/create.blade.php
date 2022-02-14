@extends('back-end.layouts.master')
@section('brad-title','Prescription')
@section('content')
    <div class="breadcrumb-area d-flex justify-content-between">
        <h4 class="h4 text-bold">Prescription</h4>
        <a href="{{route('prescription.index')}}" class="btn btn-primary btn-sm float-end"> Prescription List
        </a>
    </div>

    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <form action="{{route('prescription.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="doctor_id" class=" ">Doctor Name</label>
                            <div class="">
                                <select class="form-control form-control-sm" name="doctor_id" id="patient_id">
                                    <option value="" disabled selected>--Select Doctor Name --</option>
                                    @forelse($doc as $d)
                                        <option value="{{$d->id}}">{{$d->name}}-({{$d->serial_no}})</option>
                                    @empty
                                        <option>-- No Patient Found --</option>
                                    @endforelse
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="patient_id" class=" ">Patient Name</label>
                            <div class="">
                                <select class="form-control form-control-sm" name="in_patient_id" id="patient_id">
                                    <option value="" disabled selected>--Select Patient Name --</option>
                                    @forelse($ip as $p)
                                        <option value="{{$p->id}}">{{$p->name}}-({{$p->serial_no}})</option>
                                    @empty
                                        <option>-- No Patient Found --</option>
                                    @endforelse
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="patient_id" class=" ">Patient Age</label>
                            <div class="">
                                <input type="number" name="age" class="form-control form-control-sm">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="patient_id" class=" ">Date</label>
                            <div class="">
                                <input type="date" name="date" class="form-control form-control-sm">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Diagnosis List</label>
                            <table class="table table-striped table-bordered">
                                <tr>

                                    <input type="hidden" name="row_no" id="row_no" value=1>

                                    <td>
                                        <input type="text" name="diagnosis_name[]" class="form-control form-control-sm">
                                    </td>
                                    <td>
                                        <input type="text" name="instructions[]" class="form-control form-control-sm">
                                    </td>
                                    <td>
                                        <button class='btn btn-success btn-sm add_field' type="button"><i
                                                class="bx bxs-plus-square"></i></button>
                                    </td>
                                </tr>
                            </table>
                            <div class="input_field"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            const maxField = 10;
            const warpper = $('.input_field');
            const addField = $('.add_field');
            var i = 1;
            addField.click(function () {
                if (i < maxField) {
                    i++;
                    warpper.append('' +
                        '<table>' +
                        '<tr>' +
                        '<td>' +
                        '<input type="text" name="diagnosis_name[]" class="form-control form-control-sm">' +
                        '</td>' +
                        '<td>' +
                        '<input type="text" name="instructions[]" class="form-control form-control-sm">' +
                        '</td>' +
                        '<td>' +
                        '<button class="btn btn-danger btn-sm remove_field" type="button"><i class="bx bxs-trash"></i>' +
                        '</button>' +
                        '</td>' +
                        '</tr>' +
                        '</table>');
                }
            });
        })
    </script>
@endsection

