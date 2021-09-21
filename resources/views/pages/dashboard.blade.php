@extends('includes.postlogin.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><span><img src="{{url('postlogin/images/counselling.png')}}"  style="margin-right: 10px;width: 30px;" alt="counselling"></span>Counsellor's Dashboard</h1>
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
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="header-content">
                                <div class="card_content bg-light">
                                    <h5 class="header_heading text-center"><i class="nav-icon fas fa-paper-plane"></i>You'll get <b>Rs 1800/- per student</b> for career assessment, counselling and creating a student’s map.</h5>
                                    <p>If you don’t know the process of conducting psychometric assessments, drawing inferences and creating a career dashboard, then get professional training. Our humble request is not to call HR or the support team as they don’t have the competency to give you training.</p>
                                    <p>P.S. If you have added a student in your CRM and you haven’t created her/his career dashboard OR your work efficiency is less than 10% then you’ll not be able to get more students.</p>
                                </div>
                                <div class="button_header">
                                    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header text-center">
                                                    <h4 class="modal-title w-100 font-weight-bold"><span><i class="fas fa-user-plus"></i></span>&nbsp;&nbsp;Add student</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body p-3">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="md-form mb-3 field">
                                                                <span><i class="fa fa-envelope"></i></span><input type="email" class=" input-text form-control" name="email" id="email" placeholder="Email" required=""><button class="send">Send</button>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <div class="otp inputs">
                                                                <input type="text" name="n1" class="otp-enter active input-text form-control"  maxlength="1"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                                                                <input type="text" name="n2" class="otp-enter input-text form-control" maxlength="1"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                                                                <input type="text" name="n3" class="otp-enter input-text form-control" maxlength="1"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                                                                <input type="text" name="n4" class="otp-enter input-text form-control"  maxlength="1"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 mb-3">
                                                            <div class="otp">
                                                                <button class="Verify Verify_">Verify</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="md-form mb-3 field">
                                                                <span><i class="fa fa-phone-square"></i></span><input type="text" class=" input-text form-control" placeholder="Mobile" name="mobile" id="mobile" autocomplete="off" pattern="^[0-9]{10}$" maxlength="10" required=""><button class="send">Send</button>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <div class="otp input_">
                                                                <input type="text" name="n1" class="otp-enter active input-text form-control"  maxlength="1"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                                                                <input type="text" name="n2" class="otp-enter input-text form-control" maxlength="1"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                                                                <input type="text" name="n3" class="otp-enter input-text form-control" maxlength="1"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                                                                <input type="text" name="n4" class="otp-enter input-text form-control"  maxlength="1"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 mb-3">
                                                            <div class="otp">
                                                                <button class="Verify Verify_">Verify</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="md-form mb-3 field">
                                                                <span><i class="fa fa-user"></i></span><input type="text" class=" input-text form-control" name="name" id="name" placeholder="Full Name" required="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <select class="form-control" name="usertype" id="usertype">
                                                                <option value="">User Type</option>
                                                                <option value="S">Student</option>
                                                                <option value="C">Counsellor</option>
                                                                <option value="J">Jobseeker</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-2">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="md-form mb-3 field">
                                                                <select class="form-control" name="usertype" id="usertype">
                                                                    <option value="">Lead Source</option>
                                                                    <option value="">Call</option>
                                                                    <option value="">Email</option>
                                                                    <option value="">Social Media</option>
                                                                    <option value="">Reference</option>
                                                                    <option value="">Other Source</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <select class="form-control" name="usertype" id="usertype">
                                                                <option value="">Reference Self</option>
                                                                <option value="">Refer by self</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="md-form mb-3 field">
                                                                <span><i class="fa fa-search"></i></span><input type="text" class=" input-text form-control" name="search" id="search" placeholder="Search..." required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer d-flex justify-content-center">
                                                    <button class="btn Verify">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <button data-toggle="modal" data-target="#modalLoginForm" class="button_add"><span><i class="fas fa-user-plus" ></i></span>Add</button>
                                        <a href="{{url('lead')}}"> <button class="button_add"><span><img src="{{url('postlogin/images/leads.png')}}" style="width:20px; margin-right: 10px;" alt="lead"></span>Lead</button></a>
                                        <a href=""><button class="button_add"><span><img src="{{url('postlogin/images/hrm_.png')}}" style="width:20px; margin-right: 10px;" alt="hrm"></span>CRM</button></a>
                                        <a href="{{url('hrm')}}"><button class="button_add"><span><img src="{{url('postlogin/images/hrm_.png')}}" style="width:20px; margin-right: 10px;" alt="hrm"></span>HRM</button></a>
                                        <a href="{{url('report')}}"><button class="button_add"><span><img src="{{url('postlogin/images/report_.png')}}" style="width:20px; margin-right: 10px;" alt="report"></span>Report</button></a>
                                    </div>
                                    <div class="drop_">
                                        <span class="efficiency"><img src="{{url('postlogin/images/eff.png')}}" style="width:20px; margin-right: 10px;" alt="efficiency">Efficiency <span class="pr_">5%</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body " >
                            <table id="example2" class="table table-responsive-sm  table-bordered table-hover" style="position:relative;">
                                <thead>
                                    <tr>
                                        <th class="sorting"><span class="ok_icon"><i class="fas fa-check-double"></i></span>S.No.</th>
                                        <th class="sorting"><span class="ok_icon"><i class="fas fa-user-graduate"></i></span> Student</th>
                                        <th class="sorting"><span><img src="{{url('postlogin/images/parent.png')}}"  style="margin-right: 10px;width: 20px;" alt="parent"></span>Parent</th>
                                        <th class="sorting"><span><img src="{{url('postlogin/images/referr.png')}}"  style="margin-right: 10px;width: 20px;" alt="referred"></span>Referred by</th>
                                        <th class="sorting"><span><img src="{{url('postlogin/images/counselling.png')}}"  style="margin-right: 10px;width: 20px;" alt="counselling"></span>Counselling</th>
                                        <th class="sorting"><span><img src="{{url('postlogin/images/follow.png')}}"  style="margin-right: 10px;width: 20px;" alt="follow"></span>Follow up</th>
                                        <th class="sorting after_">
                                            <span class="st_"><img src="{{url('postlogin/images/status.png')}}" alt="status"  style="margin-right:5px;width: 16px;"></span>
                                            <div class="status_">
                                                <select class="form-control select2" style="width: 100%;">
                                                    <option selected="selected">Status</option>
                                                    <option>Alaska</option>
                                                    <option>California</option>
                                                    <option>Delaware</option>
                                                    <option>Tennessee</option>
                                                    <option>Texas</option>
                                                    <option>Washington</option>
                                                </select>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
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
                                                                <a href="{{route('user.counsellorCall')}}" target="_blank"><button class="list contactbyme itembox1"><i class="fas fa-mobile-alt"></i>Call</button></a> 
                                                                <a href="email_report_by_me.php" target="_blank"><button class="list contactbyme itembox1" ><i class="fas fa-at"></i>Email</button></a> 
                                                                <a href="sms_report_by_me.php" target="_blank"><button class="list contactbyme itembox1"><i class="fas fa-comment-alt"></i>SMS</button></a>
                                                                <a href="whatapp_report_by_me.php" target="_blank"><button class="list itembox1 contactbyme" ><i class="fab fa-whatsapp"></i>WhatsApp</button></a>
                                                                <a href="visit_report_by_me.php" target="_blank">  <button class="list contactbyme itembox1"><i class="fas fa-walking"></i>Visit</button></a>
                                                                <a href="call_report_by_client.php" target="_blank"><button class="list contactbyclient itembox1" ><i class="fas fa-mobile-alt"></i>Call</button></a>
                                                                <a href="email_report_by_client.php" target="_blank"> <button class="list contactbyclient itembox1" ><i class="fas fa-at"></i>Email</button></a>
                                                                <a href="sms_report_by_client.php" target="_blank"><button class="list contactbyclient itembox1" ><i class="fas fa-comment-alt"></i>SMS</button></a>
                                                                <a href="whatapp_report_by_client.php" target="_blank"><button class="list contactbyclient itembox1" ><i class="fab fa-whatsapp"></i>WhatsApp</button></a>
                                                                <a href="visit_report_by_client.php" target="_blank"> <button class="list contactbyclient itembox1" ><i class="fas fa-walking"></i>Visit</button></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="modal-footer">
                                                        </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <td>
                                            <div class="s_number">
                                                <div class="top_">
                                                    <p>1.</p>
                                                    <div class="image image_">
                                                        <img src="https://margdarshak.org/public/uploads/user_img/RP.jpg" class="img-circle elevation-2"  alt="User Image">
                                                    </div>
                                                </div>
                                                <div class="bottom_">
                                                    <span class="span_icon">
                                                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-mobile-alt"></i></a>
                                                    </span>
                                                    <div>
                                                        <span class="span_icon">
                                                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="nav-icon fas fa-ellipsis-h"></i></a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="" >
                                            <div class="student_detail user-panel">
                                                <div class="profile_img">
                                                    <ul class="preson_detail">
                                                        <li>margdrashak</li>
                                                        <li>****ma@mail.com</li>
                                                        <li>+91 ****000000</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                        <td >
                                            <ul class="preson_detail">
                                                <li>margdrashak</li>
                                                <li>****ma@mail.com</li>
                                                <li>gurgaon</li>
                                            </ul>
                                        </td>
                                        <td >
                                            <ul class="preson_detail">
                                                <li>Self/Admin/</li>
                                                <li>****ak@gmail.com</li>
                                                <li>Akash Bhardwaj</li>
                                                <li>****888888</li>
                                            </ul>
                                        </td>
                                        <td >
                                            <ul class="preson_detail">
                                                <li>CAP <a href="#"><img src="{{url('postlogin/images/view.png')}}"  style="float: right;margin-right: 10px;width: 17px;"></a></li>
                                                <li>Assessment <a href="#"><img src="{{url('postlogin/images/view.png')}}"  style="float: right;margin-right: 10px;width: 17px;"></a></li>
                                                <li>Study/iClass <a href="#"><img src="{{url('postlogin/images/view.png')}}"  style="float: right;margin-right: 10px;width: 17px;"></a></li>
                                            </ul>
                                        </td>
                                        <td >
                                            <ul class="preson_detail">
                                                <li>29/06/2021</li>
                                                <li>Delay 5 days</li>
                                                <li>Logs 10</li>
                                            </ul>
                                        </td>
                                        <td >
                                            <ul class="preson_detail">
                                                <li>Completed</li>
                                                <li>Call by me</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >
                                            <div class="s_number">
                                                <div class="top_">
                                                    <p>2.</p>
                                                    <div class="image image_">
                                                        <img src="https://margdarshak.org/public/uploads/user_img/RP.jpg" class="img-circle elevation-2"  alt="User Image">
                                                    </div>
                                                </div>
                                                <div class="bottom_">
                                                    <span class="span_icon">
                                                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-mobile-alt"></i></a>
                                                    </span>
                                                    <div>
                                                        <span class="span_icon">
                                                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="nav-icon fas fa-ellipsis-h"></i></a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="" >
                                            <div class="student_detail user-panel">
                                                <div class="profile_img">
                                                    <ul class="preson_detail">
                                                        <li>margdrashak</li>
                                                        <li>****ma@mail.com</li>
                                                        <li>+91 ****000000</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                        <td >
                                            <ul class="preson_detail">
                                                <li>margdrashak</li>
                                                <li>****ma@mail.com</li>
                                                <li>gurgaon</li>
                                            </ul>
                                        </td>
                                        <td >
                                            <ul class="preson_detail">
                                                <li>Self/Admin/</li>
                                                <li>****ak@gmail.com</li>
                                                <li>Akash Bhardwaj</li>
                                                <li>****999999</li>
                                            </ul>
                                        </td>
                                        <td >
                                            <ul class="preson_detail">
                                                <li>CAP <a href="#"><img src="{{url('postlogin/images/view.png')}}" style="float: right;margin-right: 10px; width: 17px;"></a></li>
                                                <li>Assessment <a href="#"><img src="{{url('postlogin/images/view.png')}}"  style="float: right;margin-right: 10px;width: 17px;"></a></li>
                                                <li>Study/iClass <a href="#"><img src="{{url('postlogin/images/view.png')}}"  style="float: right;margin-right: 10px;width: 17px;"></a></li>
                                            </ul>
                                        </td>
                                        <td >
                                            <ul class="preson_detail">
                                                <li>29/06/2021</li>
                                                <li>Delay 6 days</li>
                                                <li>Logs 10</li>
                                            </ul>
                                        </td>
                                        <td >
                                            <ul class="preson_detail">
                                                <li>Completed</li>
                                                <li>Call by me</li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                </tfoot>
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
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection