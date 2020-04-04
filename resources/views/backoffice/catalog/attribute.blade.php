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
<div id="app">

    <div class="container-fluid">
        
        <!-- Material Design Colors -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">            

                    <div class="body">
                        <div class="button-demo js-modal-buttons">
                            <!-- <button type="button" data-color="deep-purple" class="btn bg-deep-purple waves-effect">Add New Attribute</button> -->
                            <button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#newAttribute">Add New Attribute</button>
                            <button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#attributeWiseValue">Add Attribute Wise Value</button>
                        </div>
                    </div>

                </div>

                @if(session()->has('success'))
                    <h4 class="modal-title" id="defaultModalLabel">
                        {{ session()->get('success') }}
                    </h4>
                @endif

            </div>
        </div>
        <!-- #END# Material Design Colors -->
        <!-- Modal Dialogs ================================================================== -->

        <!-- Default Size -->
        <div class="modal fade" id="attributeWiseValue" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <form method="POST" action="{{ action('Backoffice\AttributeController@store') }}">
                        @csrf
                        
                        <div class="modal-header">
                            @if(session()->has('success'))
                                <h4 class="modal-title" id="defaultModalLabel">
                                    {{ session()->get('success') }}
                                </h4>
                            @endif
                        </div>

                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="card" style="margin-bottom: 0px;">
                                            <div class="header">
                                                <h2>
                                                    Add Attribute Wise Value
                                                </h2>                                        
                                            </div>
                                            <div class="body">

                                                <label for="attribute_type">Select Attribute</label>
                                                <div class="form-group">
                                                    <select id="attribute_type" class="form-control show-tick" name="attribute_type">
                                                        <option selected="" disabled="">select</option>
                                                        <option value="1">Radio buttons</option>
                                                        <option value="2">Color or texture</option>
                                                    </select>
                                                    @if($errors->has('attribute_type'))
                                                        <p class="text-danger">{{ $errors->first('attribute_type') }}</p>
                                                    @endif
                                                </div>


                                                <label for="value">Value</label>
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="value" name="value" class="form-control">
                                                    </div>
                                                    @if($errors->has('value'))
                                                        <p class="text-danger">{{ $errors->first('value') }}</p>
                                                    @endif
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">

                            <button type="submit" class="btn btn-link waves-effect">SAVE</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>


        <!-- Add New Attribute -->
        <div class="modal fade" id="newAttribute" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <!-- <form method="POST" action="{{ action('Backoffice\AttributeController@store') }}">
                        @csrf -->
                        
                        <div class="modal-header">
                            @if(session()->has('success'))
                                <h4 class="modal-title" id="defaultModalLabel">
                                    {{ session()->get('success') }}
                                </h4>
                            @endif
                        </div>

                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="card" style="margin-bottom: 0px;">
                                            <div class="header">
                                                <h2>
                                                    Add New Attribute
                                                </h2>                                                                                     
                                            </div>
                                            
                                            <div class="alert alert-success" v-if="success.message">
                                                <strong>@{{ success.message }}</strong>
                                            </div>

                                            <div class="body">
                                                <label for="name_en">Name (ENG)</label>
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="name_en" name="name_en" v-model="newAttribute.name_en" class="form-control">
                                                    </div>
                                                    <p class="text-danger" v-if="errors.name_en">@{{ errors.name_en['0'] }}</p>
                                                </div>

                                                <label for="name_bn">Name (BD)</label>
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="name_bn" name="name_bn" v-model="newAttribute.name_bn" class="form-control">
                                                    </div>
                                                    <p class="text-danger" v-if="errors.name_bn">@{{ errors.name_bn['0'] }}</p>
                                                </div>

                                                <label for="public_name">Public Name</label>
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="public_name" name="public_name" v-model="newAttribute.public_name" class="form-control">
                                                    </div>
                                                </div>
                
                                                <label for="attribute_type">Attribute Type</label>
                                                <div class="form-group">
                                                    <select id="attribute_type" class="form-control show-tick" name="attribute_type" v-model="newAttribute.attribute_type">
                                                        <option selected="" disabled="">select</option>
                                                        <option value="1">Radio buttons</option>
                                                        <option value="2">Color or texture</option>
                                                    </select>
                                                    <p class="text-danger" v-if="errors.attribute_type">@{{ errors.attribute_type['0'] }}</p>
                                                </div>

                                                <label for="status">Status</label>
                                                <div class="form-group">
                                                    <select id="status" class="form-control show-tick" name="status" v-model="newAttribute.status">
                                                        <option selected="" disabled="">select</option>
                                                        <option value="1">Active</option>
                                                        <option value="0">Disable</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" @click="saveAttribute" class="btn btn-link waves-effect">SAVE</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>

                    <!-- </form> -->

                </div>
            </div>
        </div>

        <!-- </div>


    <div class="container-fluid"> -->

        <!-- Attributes -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Attributes
                        </h2>                   
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name (Eng)</th>
                                        <th>Name (Bn)</th>
                                        <th>Public Name</th>
                                        <th>Attribute Type</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            
                                <tbody>

                                    <tr v-for="attribute,key in attributes">
                                        <td>@{{ key+1 }}</td>
                                        <td>@{{ attribute.name_en }}</td>
                                        <td>@{{ attribute.name_bn }}</td>
                                        <td>@{{ attribute.public_name }}</td>
                                        <td v-if="attribute.attribute_type == 1">
                                            Radio Button
                                        </td>
                                        <td v-else>
                                            Color or Texture
                                        </td>
                                        <td v-if="attribute.status == 1">
                                            Enable
                                        </td>
                                        <td v-else>
                                            Disable
                                        </td>
                                        <td>
                                            <div class="demo-google-material-icon"> 
                                                <button type="submit" @click="deleteAttribute(key,attribute.id)" class="material-icons btn bg-red btn-xs waves-effect button-custom-dt">
                                                    delete_forever
                                                </button> 
                                            </div>
                                            <div class="demo-google-material-icon">
                                                <a :data-target="'#updateAttribute' + key+1" data-toggle="modal" class="material-icons btn btn-info btn-xs waves-effect button-custom-dt">
                                                    edit
                                                </a>
                                            </div>

                                            <div class="modal fade" :id="'updateAttribute' + key+1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">                                            
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    
                                                    <div class="modal-header">
                                                        @if(session()->has('success'))
                                                            <h4 class="modal-title" id="defaultModalLabel">
                                                                {{ session()->get('success') }}
                                                            </h4>
                                                        @endif
                                                    </div>

                                                        <div class="modal-body">
                                                            <div class="container-fluid">
                                                                <div class="row clearfix">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="card" style="margin-bottom: 0px;">
                                                                            <div class="header">
                                                                                <h2>
                                                                                    Update Attribute :: @{{ attribute.name_en }}
                                                                                </h2>                                        
                                                                            </div>
                                                                            <div class="body">
                                                                                <label for="name_en">Name (ENG)</label>
                                                                                <div class="form-group">
                                                                                    <div class="form-line">
                                                                                        <input type="text" id="name_en" name="name_en" v-model="attribute.name_en" class="form-control">
                                                                                    </div>                                                                                   
                                                                                </div>

                                                                                <label for="name_bn">Name (BD)</label>
                                                                                <div class="form-group">
                                                                                    <div class="form-line">
                                                                                        <input type="text" id="name_bn" name="name_bn" v-model="attribute.name_bn" class="form-control">
                                                                                    </div>
                                                                                </div>

                                                                                <label for="public_name">Public Name</label>
                                                                                <div class="form-group">
                                                                                    <div class="form-line">
                                                                                        <input type="text" id="public_name" name="public_name" v-model="attribute.public_name" class="form-control">
                                                                                    </div>
                                                                                </div>

                    
                                                    
                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer">

                                                            <button type="submit" class="btn btn-link waves-effect">UPDATE</button>
                                                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </td>                        
                                    </tr>
                                 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Attributes -->

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


@section('customScript')
<script>
    let app = new Vue({
        el: '#app',

        data: {
            attributes: {},
            newAttribute: {name_en: '', name_bn: '', public_name: '', attribute_type: '', status: ''},
            errors: {},
            success: {},
        },

        mounted() {
            this.getAttribute();
        },

        methods: {
            getAttribute: function() {
                axios.post('/backoffice/getAttribute')
                .then((response) => {
                    console.log(response.data)
                    this.attributes = this.temp = response.data
                })
                .catch((error) => {
                    this.errors = error.response.data.errors
                })
            },

            saveAttribute: function() {
                axios.post('/backoffice/attribute',this.newAttribute)
                .then((response) => {
                    console.log(response)
                    this.newAttribute    =   ''
                    this.success = response.data
                    // this.errors  = ''
                })
                .catch((error) => {
                    this.errors =  error.response.data.errors
                })
            },

            deleteAttribute: function(key,id) {
                if(confirm("Are you sure..?")) {
                    axios.post(`/backoffice/deleteAttribute/${id}`)
                    .then((response)=> {
                        this.attributes.splice(key,1)
                        this.success = response.data
                    })
                    .catch((error) => this.errors = error.response.data.errors)
                }
            },

            updateAttribute: function(id,key) {
                let data = JSON.parse(JSON.stringify(this.$data.modules[key]));
                axios.post(`/updateAttribute/${id}`,data)
                .then((response) => {
                    this.success = response.data
                    this.errors  = ''
                })
                .catch((error) => this.errors = error.response.data.errors)
            },

        },

    });
</script>
@endsection