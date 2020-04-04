@extends('backoffice.app')


@section('stylesheet')
<!-- JQuery DataTable Css -->
<link href="{{ asset('assets/backoffice/')}}/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

<!-- Bootstrap Select Css -->
<link href="{{ asset('assets/backoffice/')}}/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

<style>
    .button-demo .btn{margin-bottom: 0px !important;}
    .button-custom-dt {float: left;margin-right: 5px;}
</style>
@endsection


@section('content')

<div class="container-fluid">

    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card" style="margin-bottom: 0px;">
                    <div class="header">
                        <h2>
                            Update Attribute
                        </h2>                                        
                    </div>

                    @if(session()->has('success'))
                            <h4 class="modal-title" id="defaultModalLabel">
                                {{ session()->get('success') }}
                            </h4>
                        @endif

                    <form action="{{ '/backoffice/attribute/'.$attribute->id }}" method="POST">
                        <!-- @method('PUT')
                        @csrf -->

                        <div class="body">
                            <label for="name_en">Name (ENG)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="name_en" name="name_en" value="{{ $attribute->name_en }}" class="form-control" placeholder="Enter attribute name (eng)">
                                </div>
                                @if($errors->has('name_en'))
                                    <p class="text-danger">{{ $errors->first('name_en') }}</p>
                                @endif
                            </div>

                            <label for="name_bn">Name (BD)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="name_bn" name="name_bn" value="{{ $attribute->name_bn }}" class="form-control" placeholder="Enter attribute name (bd)">
                                </div>
                                @if($errors->has('name_bn'))
                                    <p class="text-danger">{{ $errors->first('name_bn') }}</p>
                                @endif
                            </div>

                            <label for="public_name">Public Name</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="public_name" name="public_name" value="{{ $attribute->public_name }}" class="form-control" placeholder="Enter attribute public name">
                                </div>
                            </div>

                            <label for="attribute_type">Attribute Type</label>
                            <div class="form-group">
                                <select id="attribute_type" class="form-control show-tick" name="attribute_type">
                                    <option value="1">Radio buttons</option>
                                    <option value="2">Color or texture</option>
                                </select>
                                @if($errors->has('attribute_type'))
                                    <p class="text-danger">{{ $errors->first('attribute_type') }}</p>
                                @endif
                            </div>

                            <label for="status">Status</label>
                            <div class="form-group">
                                <select id="status" class="form-control show-tick" name="status">
                                    <option value="1">Active</option>
                                    <option value="0">Disable</option>
                                </select>
                            </div>
                            

                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update</button>

                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection


@section('beforeAdminscript')
<!-- Bootstrap Notify Plugin Js -->
<script src="{{ asset('assets/backoffice/')}}/plugins/bootstrap-notify/bootstrap-notify.js"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="{{ asset('assets/backoffice/')}}/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="{{ asset('assets/backoffice/')}}/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
@endsection


@section('afterAdminscript')
<!-- Jquery DataTable Plugin Custome -->
<script src="{{ asset('assets/backoffice/')}}/js/pages/tables/jquery-datatable.js"></script>
<!-- Modals Custome -->
<script src="{{ asset('assets/backoffice/')}}/js/pages/ui/modals.js"></script>   
@endsection