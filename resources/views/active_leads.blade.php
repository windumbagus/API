@extends('admin.admin') 

@section('leads-monitoring', 'active')
@section('active-leads', 'active')
{{-- @section('title', 'User Mobile') --}}

@section('content')

<h3 class="box-title">Content Active Leads</h3>

 <div class="box box-primary">
    <div class="box-body">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#PendingFolowUp">Pending Follow Up</a></li>
            <li><a data-toggle="tab" href="#JadwalUlang">Jadwal Ulang</a></li>
        </ul>
        <div class="tab-content">
            {{-- Pending Follow Tab  --}}
            <div id="PendingFolowUp" class="tab-pane fade in active">
                <h3>Pending Follow Up</h3>
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
                </div><br>

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
            <div id="JadwalUlang" class="tab-pane fade">
                <h3>Jadwal Ulang</h3>
                <p>ini Jadwal Ulang</p>
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
