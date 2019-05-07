@extends('admin.admin') 


@section('leads-monitoring', 'active')
@section('archive', 'active')
{{-- @section('title', 'User Mobile') --}}

@section('content')

<h3 class="box-title">Content Archive Leads</h3>

 <div class="box box-primary">
    <div class="box-body">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#LeadsIn">Leads In</a></li>
            <li><a data-toggle="tab" href="#Cancelled">Cancelled</a></li>
        </ul>
        <div class="tab-content">
            {{-- Pending Follow Tab  --}}
            <div id="LeadsIn" class="tab-pane fade in active">
                <h3>Leads In</h3>
                {{-- <div class="box"><br>--}}
                <div class="row">
                        <div class="col-sm-7">
                            <input type="search" class="form-control" placeholder="Search by Customer Name ,Leads Source">
                        </div>    
                        <div class="col-sm-5">
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-block btn-info"><i class="fa fa-search"> &nbsp;Search</i></button>
                            </div>
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-block btn-info"><i class="fa fa-undo"> &nbsp;Reset</i></button>
                            </div>
                        </div>
                {{-- </div><br> --}}
                </div><br>

                <div class="row">
                    <div class="col-sm-4">
                        <!-- select -->
                        <div class="form-group">
                            {{-- <label>--Choose Condition--</label> --}}
                            <select class="form-control">
                                <option>Choose Condition</option>
                                <option>Condition 1</option>
                                <option>Condition 2</option>
                                <option>Condition 3</option>
                                <option>Condition 4</option>
                                <option>Condition 5</option>
                            </select>
                        </div>    
                    </div>

                    <div class="col-sm-4">
                        <!-- select -->
                        <div class="form-group">
                            {{-- <label>--Choose Condition--</label> --}}
                            <select class="form-control">
                                <option>Choose Condition</option>
                                <option>Condition 1</option>
                                <option>Condition 2</option>
                                <option>Condition 3</option>
                                <option>Condition 4</option>
                                <option>Condition 5</option>
                            </select>
                        </div>    
                    </div>

                    <div class="col-sm-4">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <button type="button" class="btn btn-block btn-info"><i class="fa fa-search"> &nbsp;Search</i></button>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>

                </div>            

                <table id="example1"class="table table-bordered">
                    <thead>
                    <tr>
                        <th>LEADS</th>
                        <th>NAMA CUSTOMER</th>
                        <th>LEADS SOURCE</th>
                        <th>TGL DITERIMA</th>
                        <th>CABANG</th>
                        <th>PIC</th>
                        <th>ACTION</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>TEST</td>
                            <td>TEST</td>
                            <td>TEST</td>
                            <td>TEST</td>
                            <td>TEST</td>
                            <td>TEST</td>
                            <td>
                            <span>
                                <a href="#" class="view-category btn btn-info btn-sm"><i class="fa fa-align-left"></i></a>
                                <a href="#" class="update-category btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            
            {{-- Jadwal Ulang --}}
            <div id="Cancelled" class="tab-pane fade">
                <h3>Cancelled</h3>
                <p>ini Cancelled</p>
            </div>
        </div>
    </div>
 </div>

 <!-- page script -->
    <script>
        $(function () {
          $('#example1').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
          })

        })
    </script>

@endsection 
