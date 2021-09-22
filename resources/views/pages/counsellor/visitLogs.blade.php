@extends('includes.postlogin.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><span><img src="{{url('postlogin/images/counselling.png')}}"  style="margin-right: 10px;width: 30px;" alt="counselling"></span>Report Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <!--  <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Student Data</li>
                        </ol> -->
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <div class="progrestest teacher-sch9">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="header-content">
                                    <div class="button_header">
                                        <div>
                                            <button data-toggle="modal" data-target="#modalLoginForm" class="button_add"><span><i class="fas fa-user-plus" ></i></span>Add</button>
                                            <a href="{{url('lead')}}"> <button class="button_add"><span><img src="{{url('postlogin/images/leads.png')}}" style="width:20px; margin-right: 10px;" alt="lead"></span>Lead</button></a>
                                            <a href=""><button class="button_add"><span><img src="{{url('postlogin/images/hrm_.png')}}" style="width:20px; margin-right: 10px;" alt="hrm"></span>CRM</button></a>
                                            <a href="{{url('hrm')}}"><button class="button_add"><span><img src="{{url('postlogin/images/hrm_.png')}}" style="width:20px; margin-right: 10px;" alt="hrm"></span>HRM</button></a>
                                            <a href="{{url('report')}}"><button class="button_add"><span><img src="{{url('postlogin/images/report_.png')}}" style="width:20px; margin-right: 10px;" alt="report"></span>Report</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class=" totaltime_">
                                            <ul>
                                                <li><i class="fas fa-user"></i><span class="houre">FUll Name</span></li>
                                                <li><i class="fas fa-envelope"></i><span class="houre">****a@gmail.com</span></li>
                                                <li><i class="fas fa-phone-square"></i><span class="houre">****920010</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <!--- popup---->
                                        @include('pages.counsellor.includes.contact-button')
                                        <!-----End popup--->
                                        <button type="button" class="Verify float-right"  data-toggle="modal" data-target="#exampleModalCenter" class="contact-ini" data-stid="{{$data['student']->userID}}">Back</button>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- <a href="upload-assignment.php"><button class="float-right uploadassignment"><i class="fas fa-file-upload"></i>Upload Assignment</button></a> -->
                                    </div>
                                </div>
                                <form class="study_lesson">
                                    <!-----------BY VISIT--------->
                                    <div class="row px-5 byvisit justify-content-center">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <!-- <label>Follow Up Date and time:</label> -->
                                                <div class="input-group date" id="reservationdatetime4" data-target-input="nearest" pla>
                                                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime4" placeholder="Start Date and time"/>
                                                    <div class="input-group-append" data-target="#reservationdatetime4" data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <!-- <label>Follow Up Date and time:</label> -->
                                                <div class="input-group date" id="reservationdatetime4end" data-target-input="nearest" pla>
                                                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime4end" placeholder="End Date and time"/>
                                                    <div class="input-group-append" data-target="#reservationdatetime4end" data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <!-- <label>Message</label> -->
                                                <textarea class="form-control" rows="3" placeholder="Remarks ..." ></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="customFile" placeholder="Location File">
                                                    <label class="custom-file-label" for="customFile">Location File</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <!-- <label>Status</label> -->
                                            <select class="form-control mb-2" style="width: 100%;">
                                                <option selected="selected">Status</option>
                                                @foreach(\App\Models\MastStatus::get() as $key => $value)
                                                <option value="{{$value->statusID}}">{{$value->status}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <!-- <label>Follow Up Date and time:</label> -->
                                                <div class="input-group date" id="followupdate" data-target-input="nearest" pla>
                                                    <input type="text" class="form-control datetimepicker-input" data-target="#followupdate" placeholder="Follow Up Date"/>
                                                    <div class="input-group-append" data-target="#followupdate" data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="button" class="btn btn-primary submit_">Submit</button>
                                        </div>
                                    </div>
                                    <!----------BY VISIT END------>
                                </form>
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <h3 class="progressreport text-center"><i class="far fa-file"></i>Visit Report</h3>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="allreport.php"><button class="Verify">All Report</button></a>
                                    </div>
                                </div>
                                <table id="visitbyme" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th><span style="margin-right:5px;"><i class="nav-icon fas fa-history"></i></span>Start time</th>
                                            <th><span style="margin-right:5px;"><i class="nav-icon far fa-clock"></i></span>End time</th>
                                            <th><span style="margin-right:5px;"><i class="fas fa-clipboard-check"></i></span>Subject</th>
                                            <th><span style="margin-right:5px;"><i class="fas fa-clipboard-check"></i></span>Remarks</th>
                                            <th><span style="margin-right:5px;"><i class="fas fa-clipboard-check"></i></span>Location</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Date/Time</td>
                                            <td>Date/Time</td><td>Date/Time</td>
                                            <td>Date/Time</td>
                                            <td><a href="#" class="tablelink"><i class="fas fa-check"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Date/Time</td>
                                            <td>Date/Time</td><td>Date/Time</td>
                                            <td>Date/Time</td>
                                            <td><a href="#" class="tablelink"><i class="fas fa-check"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Date/Time</td>
                                            <td>Date/Time</td><td>Date/Time</td>
                                            <td>Date/Time</td>
                                            <td><a href="#" class="tablelink"><i class="fas fa-check"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- Main content -->
    </div>
</div>
<!-- /.content-wrapper -->
@endsection
@section('script')
<script>
  $(function () {
   
    $('#visitbyme').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection