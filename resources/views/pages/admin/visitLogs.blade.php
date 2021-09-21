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
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <!-- <h5 class="modal-title" id="exampleModalLongTitle">Select Contact Mode</h5> -->
                                                        <button type="hidden" style="display:none;" class="list1 hidee"  data-filter="c_button"></button>
                                                        <button class="list1" data-filter="contactbyme"><i class="fas fa-long-arrow-alt-up"></i>Contact by me</button>
                                                        <button class="list2" data-filter="contactbyclient"><i class="fas fa-long-arrow-alt-down"></i>Contact by client</button>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="container">
                                                            <div class="select_mode">
                                                                <!-- <select class="form-control select2" style="width: 50%;">
                                                                    <option selected="selected">Select Contact Mode</option>
                                                                    <option>Contact mode</option>
                                                                    <option>Email by me</option>
                                                                    <option>Call by me</option>
                                                                    <option>SMS by me</option>
                                                                    <option>WhatsApp by me</option>
                                                                    <option>Visit by me</option>
                                                                    <option>Email by client</option>
                                                                    <option>Call by client</option>
                                                                    <option>SMS/WhatsApp by client</option>
                                                                    <option>Visit by client</option>
                                                                    
                                                                    </select> -->
                                                                <button type="hidden"  class="list hidee" ></button>
                                                                <a href="{{route('user.counsellorCall')}}"><button class="list contactbyme itembox1"><i class="fas fa-mobile-alt"></i>Call</button></a> 
                                                                <a href="{{route('user.counsellorEmail')}}"><button class="list contactbyme itembox1" ><i class="fas fa-at"></i>Email</button></a> 
                                                                <a href="{{route('user.counsellorSms')}}"><button class="list contactbyme itembox1"><i class="fas fa-comment-alt"></i>SMS</button></a>
                                                                <a href="{{route('user.counsellorWhatsapp')}}"><button class="list itembox1 contactbyme" ><i class="fab fa-whatsapp"></i>WhatsApp</button></a>
                                                                <a href="{{route('user.counsellorVisit')}}">  <button class="list contactbyme itembox1"><i class="fas fa-walking"></i>Visit</button></a>
                                                                <a href="{{route('user.clientCall')}}"><button class="list contactbyclient itembox1" ><i class="fas fa-mobile-alt"></i>Call</button></a>
                                                                <a href="{{route('user.clientEmail')}}"> <button class="list contactbyclient itembox1" ><i class="fas fa-at"></i>Email</button></a>
                                                                <a href="{{route('user.clientSms')}}"><button class="list contactbyclient itembox1" ><i class="fas fa-comment-alt"></i>SMS</button></a>
                                                                <a href="{{route('user.clientWhatsapp')}}"><button class="list contactbyclient itembox1" ><i class="fab fa-whatsapp"></i>WhatsApp</button></a>
                                                                <a href="{{route('user.clientVisit')}}"> <button class="list contactbyclient itembox1" ><i class="fas fa-walking"></i>Visit</button></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="modal-footer">
                                                        </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-----End popup--->
                                        <button type="button" class="Verify"  data-toggle="modal" data-target="#exampleModalCenter">Back</button>
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
                                            <!-- <label>Status</label> -->
                                            <select class="form-control mb-2" style="width: 100%;">
                                                <option selected="selected">Status</option>
                                                @foreach(\App\Models\MastStatus::get() as $key => $value)
                                                <option value="{{$value->statusID}}">{{$value->status}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <!-- <label>Message</label> -->
                                                <textarea class="form-control" rows="3" placeholder="Remarks ..." ></textarea>
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
                                        <h3 class="progressreport text-center"><i class="far fa-file"></i>Visit Report Dashboard</h3>
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
                                            <th><span style="margin-right:5px;"><i class="fas fa-clipboard-check"></i></span>Remarks</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Date/Time</td>
                                            <td>Date/Time</td>
                                            <td><a href="#" class="tablelink"><i class="fas fa-check"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Date/Time</td>
                                            <td>Date/Time</td>
                                            <td><a href="#" class="tablelink"><i class="fas fa-check"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Date/Time</td>
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