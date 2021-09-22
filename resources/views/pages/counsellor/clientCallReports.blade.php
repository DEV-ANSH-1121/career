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
                                            <a href="lead.php"> <button class="button_add"><span><img src="{{url('postlogin/images/leads.png')}}" style="width:20px; margin-right: 10px;" alt="lead"></span>Lead</button></a>
                                            <a href="crm.php"><button class="button_add"><span><img src="{{url('postlogin/images/hrm_.png')}}" style="width:20px; margin-right: 10px;" alt="hrm"></span>CRM</button></a>
                                            <a href="hrm.php"><button class="button_add"><span><img src="{{url('postlogin/images/hrm_.png')}}" style="width:20px; margin-right: 10px;" alt="hrm"></span>HRM</button></a>
                                            <a href="report-dashboard.php"><button class="button_add"><span><img src="{{url('postlogin/images/report_.png')}}" style="width:20px; margin-right: 10px;" alt="report"></span>Report</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class=" totaltime_">
                                            <ul>
                                                <li><i class="fas fa-user"></i><span class="houre">FUll Name</span></li>
                                                <li><i class="fas fa-envelope"></i><span class="houre">****a@gmail.com</span></li>
                                                <li><i class="fas fa-phone-square"></i><span class="houre">****920010</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <!--- popup---->
                                        @include('pages.counsellor.includes.contact-button')
                                        <!-----End popup--->
                                        <button type="button" class="Verify float-right contact-ini"  data-toggle="modal" data-target="#exampleModalCenter" data-stid="{{$data['student']->userID}}">Back</button>
                                        <p class="py-2">Cloud Telephony Validity  <span><b>12/08/2021</b></span></p>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- <a href="upload-assignment.php"><button class="float-right uploadassignment"><i class="fas fa-file-upload"></i>Upload Assignment</button></a> -->
                                    </div>
                                </div>
                                <form class="study_lesson">
                                    <!-----BY Contact------->
                                    <div class="row px-5 contact justify-content-center">
                                        <div class="col-md-3">
                                        </div>
                                        <div class="col-sm-3 ">
                                            <div class="input-group mb-3">
                                                <select class="form-control " style="width: 100%;">
                                                    <option selected="selected">Gateway</option>
                                                    <option>GSM Mobile</option>
                                                    <option>SIP Landline</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <button class="Verify">Call</button>
                                        </div>
                                        <div class="col-md-3">
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <textarea class="form-control" rows="1" placeholder="Remarks ..." ></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-control " style="width: 100%;">
                                                <option selected="selected">Status</option>
                                                @foreach(\App\Models\MastStatus::get() as $key => $value)
                                                <option value="{{$value->statusID}}">{{$value->status}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                                                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime" placeholder="Follow Up Date and time:" />
                                                    <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="button" class="btn btn-primary submit_">Submit</button>
                                        </div>
                                    </div>
                                    <!-----------BY CONTACT END--------->
                                </form>
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <h3 class="progressreport text-center"><i class="far fa-file"></i>Client Call Report</h3>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="allreport.php"><button class="Verify">All Report</button></a>
                                    </div>
                                </div>
                                <table id="callbyclient" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="sorting after_">
                                                <div class="status_">
                                                    <select class="form-control select2" style="width: 100%;">
                                                        <option selected="selected">Channel</option>
                                                        <option>All</option>
                                                        <option>Incoming Mobile</option>
                                                        <option>Outgoing Mobile</option>
                                                        <option>Incoming Landline</option>
                                                        <option>Outgoing Landline</option>
                                                        <option>Missed</option>
                                                    </select>
                                                </div>
                                            </th>
                                            <th><span style="margin-right:5px;"><i class="nav-icon fas fa-history"></i></span>Start time</th>
                                            <th><span style="margin-right:5px;"><i class="nav-icon far fa-clock"></i></span>End time</th>
                                            <!-- <th><span style="margin-right:5px;"><i class="nav-icon fas fa-user-tie"></i></span>Client</th> -->
                                            <th><span style="margin-right:5px;"><i class="nav-icon fas fa-stopwatch"></i></span>Call Duration</th>
                                            <th><span style="margin-right:5px;"><i class="nav-icon fas fa-stopwatch"></i></span>Total Duration</th>
                                            <th><span style="margin-right:5px;"><i class="fas fa-clipboard-check"></i></span>Remarks</th>
                                            <th><span style="margin-right:5px;"><i class="nav-icon fas fa-microphone-alt"></i></span>Recording</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="s_number">
                                                    <div class="bottom_">
                                                        <div>
                                                            <span class="span_icon">
                                                                <p>1.</p>
                                                                <div class="colling">
                                                                    <a href="#"><i class="fas fa-arrow-down"></i>&nbsp;<i class="fas fa-mobile-alt"></i></a>
                                                                    <a href="#" style="display:none;"><i class="fas fa-arrow-down"></i>&nbsp;<i class="fas fa-phone-volume"></i></a>
                                                                    <a href="#" style="display:none;"><i class="fas fa-arrow-up"></i>&nbsp;<i class="fas fa-mobile"></i></a>
                                                                    <a href="#" style="display:none;"><i class="fas fa-arrow-up"></i>&nbsp;<i class="fas fa-phone-alt"></i></a>
                                                                    <a href="#" style="display:none;"></i>&nbsp;<i class="fas fa-phone-slash"></i></a>
                                                                </div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Date/Time</td>
                                            <td>Date/Time</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>Remark</td>
                                            <td><a href="#" class="tablelink"><i class="fas fa-microphone"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="s_number">
                                                    <div class="bottom_">
                                                        <div>
                                                            <span class="span_icon">
                                                                <p>1.</p>
                                                                <div class="colling">
                                                                    <a href="#"><i class="fas fa-arrow-down"></i>&nbsp;<i class="fas fa-mobile-alt"></i></a>
                                                                    <a href="#" style="display:none;"><i class="fas fa-arrow-down"></i>&nbsp;<i class="fas fa-phone-volume"></i></a>
                                                                    <a href="#" style="display:none;"><i class="fas fa-arrow-up"></i>&nbsp;<i class="fas fa-mobile"></i></a>
                                                                    <a href="#" style="display:none;"><i class="fas fa-arrow-up"></i>&nbsp;<i class="fas fa-phone-alt"></i></a>
                                                                    <a href="#" style="display:none;"></i>&nbsp;<i class="fas fa-phone-slash"></i></a>
                                                                </div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Date/Time</td>
                                            <td>Date/Time</td>
                                            <td>5</td>
                                            <td>8</td>
                                            <td>Remark</td>
                                            <td><a href="#" class="tablelink"><i class="fas fa-microphone"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="s_number">
                                                    <div class="bottom_">
                                                        <div>
                                                            <span class="span_icon">
                                                                <p>1.</p>
                                                                <div class="colling">
                                                                    <a href="#"><i class="fas fa-arrow-down"></i>&nbsp;<i class="fas fa-mobile-alt"></i></a>
                                                                    <a href="#"><i class="fas fa-arrow-down"></i>&nbsp;<i class="fas fa-phone-volume"></i></a>
                                                                    <a href="#"><i class="fas fa-arrow-up"></i>&nbsp;<i class="fas fa-mobile"></i></a>
                                                                    <a href="#"><i class="fas fa-arrow-up"></i>&nbsp;<i class="fas fa-phone-alt"></i></a>
                                                                    <a href="#"></i>&nbsp;<i class="fas fa-phone-slash"></i></a>
                                                                </div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Date/Time</td>
                                            <td>Date/Time</td>
                                            <td>6</td>
                                            <td>8</td>
                                            <td>Remark</td>
                                            <td><a href="#" class="tablelink"><i class="fas fa-microphone"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="totaltime">
                                    <ul>
                                        <li><i class="far fa-clock"></i>Total Incoming: <span class="houre">2<b>hr</b></span><span class="minute">30<b>min</b></span></li>
                                        <li><i class="far fa-clock"></i>Total Outgoing: <span class="houre">3<b>hr</b></span><span class="minute">20<b>min</b></span></li>
                                        <li><i class="far fa-clock"></i>Grand Total: <span class="houre">5<b>hr</b></span><span class="minute">50<b>min</b></span></li>
                                    </ul>
                                </div>
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
   
    $('#callbyclient').DataTable({
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