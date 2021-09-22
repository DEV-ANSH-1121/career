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
                                        <p class="py-2">Balance sms <span>0</span></p>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- <a href="upload-assignment.php"><button class="float-right uploadassignment"><i class="fas fa-file-upload"></i>Upload Assignment</button></a> -->
                                    </div>
                                </div>
                                <form class="study_lesson">
                                    <!-----------BY SMS--------->
                                    <div class="row px-5 bysms justify-content-center">
                                        <div class="col-md-3">
                                            <div class="input-group mb-3">
                                                <select class="form-control " style="width: 100%;">
                                                    <option selected="selected">Template</option>
                                                    <option>Template 1.</option>
                                                    <option>Template 2.</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="input-group mb-3">
                                                <select class="form-control " style="width: 100%;">
                                                    <option selected="selected">DLTID</option>
                                                    <option>eLearn</option>
                                                    <option>Amazon</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <!-- <label>Status</label> -->
                                            <select class="form-control mb-2" style="width: 100%;">
                                                <option selected="selected">Status</option>
                                                @foreach(\App\Models\MastStatus::get() as $key => $value)
                                                <option value="{{$value->statusID}}">{{$value->status}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <!-- <label>Follow Up Date and time:</label> -->
                                                <div class="input-group date" id="reservationdatetime2" data-target-input="nearest" >
                                                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime2" placeholder="Follow Up Date and time"/>
                                                    <div class="input-group-append" data-target="#reservationdatetime2" data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <!-- <label>Message</label> -->
                                                <textarea class="form-control count-chars" rows="3" maxlength="500" data-max-chars="500" placeholder="Message ..." ></textarea>
                                                <h4 class="charc">0 Char</h4>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <!-- <label>Message</label> -->
                                                <textarea class="form-control" rows="3" placeholder="Remarks ..." ></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="button" class="btn btn-primary submit_">Submit</button>
                                        </div>
                                    </div>
                                    <!----------BY SMS END------>
                                </form>
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <h3 class="progressreport text-center"><i class="far fa-file"></i>Client SMS Report</h3>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="allreport.php"><button class="Verify">All Report</button></a>
                                    </div>
                                </div>
                                <table id="smsbyclient" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th><span style="margin-right:5px;"><i class="nav-icon fas fa-history"></i></span>Date Time</th>
                                            <th><span style="margin-right:5px;"><i class="fas fa-clipboard-check"></i></span>Remark</th>
                                            <th><span style="margin-right:5px;"><i class="fas fa-eye"></i></span>View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Date/Time</td>
                                            <td>Remark</td>
                                            <td><a href="#" class="tablelink"><i class="fas fa-eye"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Date/Time</td>
                                            <td>Remark</td>
                                            <td><a href="#" class="tablelink"><i class="fas fa-eye"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Date/Time</td>
                                            <td>Remark</td>
                                            <td><a href="#" class="tablelink"><i class="fas fa-eye"></i></a></td>
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
   
    $('#smsbyclient').DataTable({
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