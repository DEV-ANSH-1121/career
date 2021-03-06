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
                                    <h5 class="header_heading text-center"><i class="nav-icon fas fa-paper-plane"></i>You can have maximum 6 counsellor in your team</h5>
                                    <p>P.S. If your work efficiency is less than 10% then you’ll not be able to get more students.</p>
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
                                                        <div class="col-md-4 mb-3">
                                                            <div class="otp inputs">
                                                                <input type="text" name="n1" class="otp-enter active input-text form-control" maxlength="1"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                                                                <input type="text" name="n2" class="otp-enter input-text form-control" maxlength="1"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                                                                <input type="text" name="n3" class="otp-enter input-text form-control" maxlength="1"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                                                                <input type="text" name="n4" class="otp-enter input-text form-control" maxlength="1"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
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
                                                        <div class="col-md-4 mb-3">
                                                            <div class="otp input_">
                                                                <input type="text" name="n1" class="otp-enter active input-text form-control" max="9999"  maxlength="1"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                                                                <input type="text" name="n2" class="otp-enter input-text form-control" maxlength="1"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                                                                <input type="text" name="n3" class="otp-enter input-text form-control" maxlength="1"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                                                                <input type="text" name="n4" class="otp-enter input-text form-control" max="9999"  maxlength="1"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
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
                                                                    <option value="">Throw Call</option>
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
                                                                <option value="">Refer Self</option>
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
                                                    <button class="btn ">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <button data-toggle="modal" data-target="#modalLoginForm" class="button_add"><span><i class="fas fa-user-plus" ></i></span>Add</button>
                                        <a href="{{url('lead')}}"><button class="button_add"><span><img src="{{url('postlogin/images/leads.png')}}" style="width:20px; margin-right: 10px;" alt="lead"></span>Lead</button></a>
                                        <a href="{{url('crm')}}"><button class="button_add"><span><img src="{{url('postlogin/images/hrm_.png')}}" style="width:20px; margin-right: 10px;" alt="hrm"></span>CRM</button></a>
                                        <a href=""><button class="button_add"><span><img src="{{url('postlogin/images/hrm_.png')}}" style="width:20px; margin-right: 10px;" alt="hrm"></span>HRM</button></a>
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
                            <div class="row justify-content-right">
                                <div class="col-md-6 py-3">
                                    <!-- /.form-group -->
                                    <!-- /.form-group -->
                                </div>
                                <!-- /.col -->
                                <!-- /.col -->
                            </div>
                            <table id="example2" class="table table-responsive-sm  table-bordered table-hover" style="position:relative;">
                   
                  <thead>

                 <tr>
                                        <th class="sorting"><span class="ok_icon"><i class="fas fa-check-double"></i></span>S.No.</th>
                                        <th class="sorting"><span class="ok_icon"><i class="fas fa-user-graduate"></i></span> Counsellor</th>
                                        <th class="sorting"><span><img src="{{url('postlogin/images/referr.png')}}"  style="margin-right: 10px;width: 20px;" alt="referred"></span>Referred by</th>
                                        <th class="sorting after_">
                                            <span class="st_"><img src="{{url('postlogin/images/location.png')}}" alt="status"  style="margin-right:5px;width: 16px;"></span>
                                            <div class="status_">
                                                <select class="form-control select2" style="width: 100%;">
                                                    <option selected="selected">Location</option>
                                                    <option>Country</option>
                                                    <option>State</option>
                                                    <option>District</option>
                                                    <option>Pin Code</option>
                                                </select>
                                            </div>
                                        </th>
                                        <th class="sorting"><span><img src="{{url('postlogin/images/counselling.png')}}"  style="margin-right: 10px;width: 20px;" alt="counselling"></span>Hiring</th>
                                        <th class="sorting"><span><img src="{{url('postlogin/images/follow.png')}}"  style="margin-right: 10px;width: 20px;" alt="follow"></span>Follow up</th>
                                        <th class="sorting after_">
                                            <span class="st_"><img src="{{url('postlogin/images/status.png')}}" alt="status"  style="margin-right:5px;width: 16px;"></span>
                                            <div class="status_">
                                                <select class="form-control select2" style="width: 100%;">
                                                    <option selected="selected">Status</option>
                                                    @foreach(\App\Models\MastStatus::get() as $key => $value)
                                                    <option value="{{$value->statusID}}">{{$value->status}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data['hrmList'] as $key => $student)
                                        <tr>
                                            @include('pages.counsellor.includes.contact-button')
                                            <td>
                                                <div class="s_number">
                                                    <div class="top_">
                                                        <p>{{$key + 1}}.</p>
                                                        <div class="image image_">
                                                            @if(isset($student->pic) && !empty($student->pic))
                                                            <img src="{{asset($student->pic)}}" class="img-circle elevation-2"  alt="User Image">
                                                            @else
                                                            <img src="https://margdarshak.org/public/uploads/user_img/RP.jpg" class="img-circle elevation-2"  alt="User Image">
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="bottom_">
                                                        <span class="span_icon">
                                                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="contact-ini" data-stid="{{$student->userID}}"><i class="fas fa-mobile-alt"></i></a>
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
                                            <td  style="width:20%">
                                                <div class="student_detail user-panel">
                                                    <div class="profile_img">
                                                        <ul class="preson_detail">
                                                            <li>{{$student->name}}</li>
                                                            <li>{{substr_replace($student->email, "****", 0, 4)}}</li>
                                                            <li>{{substr_replace($student->mobile, "****", 0, 4)}}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                            <td >
                                                <ul class="preson_detail">
                                                    <li> NA </li>
                                                    <li> NA </li>
                                                    <li> NA </li>
                                                </ul>
                                            </td>
                                            <td >
                                                <ul class="preson_detail">
                                                    @if(isset($student->country) && !empty($student->country))
                                                    <li>
                                                        {{$student->userCountry->country}}
                                                    </li>
                                                    @else
                                                    <li> NA </li>
                                                    @endif
                                                    @if(isset($student->state) && !empty($student->state))
                                                    <li>
                                                        {{$student->userState->state}}
                                                    </li>
                                                    @else
                                                    <li> NA </li>
                                                    @endif
                                                    @if(isset($student->district) && !empty($student->district))
                                                    <li>
                                                        {{$student->userDistrict->district}}
                                                    </li>
                                                    @else
                                                    <li> NA </li>
                                                    @endif
                                                    @if(isset($student->pincode) && !empty($student->pincode))
                                                    <li>
                                                        {{$student->pincode}}
                                                    </li>
                                                    @else
                                                    <li> NA </li>
                                                    @endif
                                                </ul>
                                            </td>
                                            <td >
                                                <ul class="preson_detail">
                                                    <li>
                                                        Skills : @if(isset($data['skillResult']->finished) && $data['skillResult']->finished == 'Y')
                                                            <span><i class="fas fa-check"></i></span>   
                                                        @else
                                                            <span><i class="fas fa-times"></i></span>
                                                        @endif
                                                    </li>
                                                    <li>
                                                        Interview : @if(isset($data['hrResult']->finished) && $data['hrResult']->finished == 'Y')
                                                            <span><i class="fas fa-check"></i></span>   
                                                        @else
                                                            <span><i class="fas fa-times"></i></span>
                                                        @endif
                                                    </li>
                                                    <li>Persentation</li>
                                                    <li>Documentation</li>
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
                                        @endforeach
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
@section('script')
<script>
  $(function () {
   
    $('#example2').DataTable({
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