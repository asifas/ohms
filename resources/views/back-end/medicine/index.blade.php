@extends('back-end.layouts.master')
@section('brad-title','Medicine Category List')
@section('content')
    <div class="breadcrumb-area d-flex justify-content-between">
        <h4 class="h4 text-bold">Medicine List</h4>
        <button href="#" class="btn btn-primary btn-sm float-end" data-toggle="modal"
                data-target="#staticBackdrop">Add Medicine
        </button>
    </div>
    <table id="dataTableView" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>Sl No.</th>
            <th>Name</th>
            <th>Company Name</th>
            <th>Medicine Category</th>
            <th>Generic Name</th>
            <th>Purchase price</th>
            <th>Sale price</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @forelse($medicines as $m)
            <tr>

                <td>{{$loop->index+1}}</td>
                <td>{{$m->name }}</td>
                <td>{{$m->company->name }}</td>
                <td>{{$m->category->name }}</td>
                <td>{{$m->generic_name }}</td>
                <td>{{$m->p_price }}</td>
                <td>{{$m->s_price }}</td>
                <td>{{$m->quantity }}</td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm"
                       data-toggle="modal"
                       data-target="#staticBackdropEdit"><span class="bx bxs-edit-alt"></span></a>
                    <a href="{{route('medicine.destroy',['id' => $m->id])}}" id="staticBackdropEdit"
                       onclick="alert('Are you sure?')" class="btn btn-danger btn-sm"><span
                            class="bx bxs-trash-alt"></span></a>
                </td>
                @empty
                    <td>Sorry! No Medicine found</td>
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
                    <h5 class="modal-title" id="staticBackdropLabel">Add Medicine</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="modal-form" action="{{route('medicine.store')}}" method="post">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row">

                                <div class="col">
                                    <label>Company</label>
                                    <select class="form-control form-control-sm" name="company_id">
                                        <option value="" selected disabled>-- Select Company --</option>
                                        @forelse($com as $c)
                                            <option value="{{$c->id}}">{{$c->name}}</option>
                                        @empty
                                            <option value="">No Company Found</option>
                                        @endforelse
                                        <span id="floor_name_error"></span>
                                    </select>
                                </div>
                                <div class="col">
                                    <label>Company</label>
                                    <select class="form-control form-control-sm" name="medicine_category_id">
                                        <option value="" selected disabled>-- Select Medicine Category --</option>
                                        @forelse($mc as $m)
                                            <option value="{{$m->id}}">{{$m->name}}</option>
                                        @empty
                                            <option value="">No Medicine Category Found</option>
                                        @endforelse
                                        <span id="floor_name_error"></span>
                                    </select>
                                </div>

                            </div>
                            <div class="row">

                                <div class="col">
                                    <label>Purchase Price</label>
                                    <input type="number" class="form-control form-control-sm" name="p_price"/>
                                </div>
                                <div class="col">
                                    <label>Selling Price</label>
                                    <input type="number" class="form-control form-control-sm" name="s_price"/>

                                </div>
                            </div>
                            <div class="row">

                                <div class="col">
                                    <label>Quantity</label>
                                    <input type="number" class="form-control form-control-sm" name="quantity"/>
                                </div>
                                <div class="col">
                                    <label>Expire Date</label>
                                    <input type="datetime-local" class="form-control form-control-sm" name="expiry_date"/>

                                </div>
                            </div>

                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control form-control-sm">
                                <span id="floor_name_error"></span>
                            </div>
                            <div class="form-group">
                                <label>Generic Name</label>
                                <input type="text" name="generic_name" class="form-control form-control-sm">
                                <span id="floor_description_error"></span>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close
                            </button>
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

