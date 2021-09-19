@extends('includes.postlogin.main')
@section('head')
<style>
    li[aria-disabled='true'] {
        display: none;
    }
</style>
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><span style="margin-right: 10px;"><i class="nav-icon fas fa-users"></i></span>Update User</h1>
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
            <form method="post" action="{{route('user.storeProfile')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body pad80px" >
                                <div class="row">
                                    <div class="col-sm-12 col-md-3 col-lg-3">
                                        <div class="form-group">
                                            <select class="form-control select2" style="width: 100%;" name="usertype">
                                            <option value="C" @if($user->type == 'C') selected @elseif(old('usertype') == 'C') selected  @endif>Counsellor</option>
                                            <option value="S" @if($user->type == 'S') selected @elseif(old('usertype') == 'C') selected  @endif>Job Seeker</option>
                                            <option value="J" @if($user->type == 'J') selected @elseif(old('usertype') == 'C') selected  @endif>Student</option>
                                            </select>
                                        </div>
                                        @error('usertype')
                                            <br>{{$message}}
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 col-md-3 col-lg-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="fulname" placeholder="Full Name" @if(isset($user->name)) value="{{$user->name}}" @else {{old('name')}} @endif name="name">
                                        </div>
                                        @error('name')
                                            <br>{{$message}}
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 col-md-3 col-lg-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="mobile" placeholder="Mobile"  value="{{$user->mobile}}" disabled="">
                                        </div>
                                        @error('mobile')
                                            <br>{{$message}}
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 col-md-3 col-lg-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="omobile" placeholder="Other Mobile" @if(isset($user->mobileo)) value="{{$user->mobileo}}" @else {{old('mobileo')}} @endif  name="mobileo">
                                        </div>
                                        @error('mobileo')
                                            <br>{{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-3 col-lg-3">
                                        <div class="form-group">
                                            <select class="form-control select2 countrySelect" style="width: 100%;" name="country">
                                                @if(!isset($user->country) || is_null($user->country))
                                                <option class="iii" selected="" value="">Select Country</option>
                                                @endif
                                                @foreach($countries as $country)
                                                <option value="{{$country->countryID}}" @if($country->countryID == $user->country) selected @elseif(old('country') == $country->countryID) selected @endif> {{$country->country}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('country')
                                            <br>{{$message}}
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 col-md-3 col-lg-3">
                                        <div class="form-group">
                                            <select class="form-control select2 stateSelect" name="state" style="width: 100%;">
                                                @if(!isset($user->state) || is_null($user->state))
                                                <option class="iii first-state" selected="" value="">Select State</option>
                                                @else
                                                <option class="iii first-state" value="">Select State</option>
                                                @endif
                                                @foreach($states as $state)
                                                <option class="stateOption" data-country="{{$state->countryID}}" value="{{$state->stateID}}" @if($state->stateID == $user->state) selected @elseif(old('state') == $state->stateID) selected @endif>{{$state->state}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('state')
                                            <br>{{$message}}
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 col-md-3 col-lg-3">
                                        <div class="form-group">
                                            <select class="form-control select2 districtselect" name="district" style="width: 100%;">
                                                @if(!isset($user->district) || is_null($user->district))
                                                <option class="iii" selected="" value="">Select District</option>
                                                @else
                                                <option class="iii first-district" value="">Select District</option>
                                                @endif
                                                @foreach($districts as $district)
                                                <option class="districtOption" data-country="{{$district->countryID}}" data-state="{{$district->stateID}}" value="{{$district->stateID}}" @if($district->districtID == $user->district) selected @elseif(old('district') == $district->districtID) selected @endif>{{$district->district}}</option>
                                                @endforeach
                                            </select>
                                            @error('district')
                                                <br>{{$message}}
                                            @enderror
                                        </div>
                                            
                                    </div>
                                    <div class="col-sm-12 col-md-3 col-lg-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="pincode" placeholder="Enter Your Pin Code"  @if(isset($user->pincode)) value="{{$user->pincode}}" @else {{old('pincode')}} @endif name="pincode">
                                            @error('pincode')
                                                <div style="color:red">{{$message}}</div>
                                            @enderror
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="address" placeholder="Address.."  @if(isset($user->address)) value="{{$user->address}}" @else {{old('address')}} @endif name="address">
                                        </div>
                                        @error('address')
                                            {{$message}}
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 col-md-3 col-lg-3">
                                        <div class="form-group">
                                            <select class="form-control select2" style="width: 100%;" name="gender">
                                                @if(!isset($user->gender) || is_null($user->gender))
                                                <option class="iii" selected="" value="">Select Gender</option>
                                                @endif
                                                <option value="M" @if($user->gender == 'M') selected @elseif(old('gender') == 'M') selected @endif)>Male</option>
                                                <option value="F" @if($user->gender == 'F') selected @elseif(old('gender') == 'F') selected @endif)>Female</option>
                                                <option value="O" @if($user->gender == 'O') selected @elseif(old('gender') == 'O') selected @endif)>Transgender</option>
                                            </select>
                                        </div>
                                        @error('gender')
                                            {{$message}}
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 col-md-3 col-lg-3">
                                        <div class="form-group">
                                            <div class="input-group date" id="dob" data-target-input="nearest">
                                                <input id="dobinput" type="text" class="form-control datetimepicker-input" data-target="#date" placeholder="Date of Birth" name="dob"  @if(isset($user->dob)) value="{{$user->dob}}" @else {{old('dob')}} @endif />
                                                <div class="input-group-append" data-target="#date" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        @error('dob')
                                            {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-10 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile" name="pic">
                                                <label class="custom-file-label" for="customFile">Photograph</label>
                                            </div>
                                        </div>
                                        @error('pic')
                                            {{$message}}
                                        @enderror
                                    </div>
                                    <div class="col-sm-1">
                                        @if(isset(auth()->user()->pic) && !empty(auth()->user()->pic))
                                            <img src="{{asset(auth()->user()->pic)}}" class="img-circle elevation-2" alt="User Image" style="width: 60px;border-radius: 50%;margin-bottom: 10px;">
                                        @else
                                            <img src="https://margdarshak.org/public/uploads/user_img/RP.jpg" style="width: 60px;border-radius: 50%;margin-bottom: 10px;">
                                        @endif
                                    </div>
                                    <div class="col-sm-10 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile" name="resume">
                                                <label class="custom-file-label" for="customFile">Resume</label>
                                            </div>
                                        </div>
                                        @error('resume')
                                            {{$message}}
                                        @enderror
                                    </div>
                                    <div class="col-sm-1">
                                        <img src="https://th.bing.com/th/id/OIP.asDdZwHWN9ZY4uHa9POfiAHaJq?w=206&h=269&c=7&r=0&o=5&dpr=1.25&pid=1.7" style="width: 60px;margin-bottom: 10px;border: 5px solid #dfd1d1;">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="submit" class="btn Verify">
                                    </div>
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
            </form>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
@section('script')
<script type="text/javascript">

    $(document).ready(function(){
        //Date picker
        $('#dob').datetimepicker({
            defaultDate: $('#dobinput').val();
            format: 'L'
        });

        $(".countrySelect").select2()
        .on("select2:select", function (e) {
                var selctcountryselect = $('.countrySelect').find(':selected').val();
                $('.stateSelect').val('');
                $('.stateSelect').trigger('change');
                $('.districtselect').val('');
                $('.districtselect').trigger('change');
                $(".stateOption").each(function(){
                    if($(this).data('country') != selctcountryselect){
                        $(this).prop('disabled',true);
                    }else{
                        $(this).prop('disabled',false);
                    }
                });
                console.log('Selected Country is - '+selctcountryselect);
        });

        $(".stateSelect").select2()
        .on("select2:select", function (e) {
                var selctstateselect = $('.stateSelect').find(':selected').val();
                $('.districtselect').val('');
                $('.districtselect').trigger('change');
                $(".districtOption").each(function(){
                    if($(this).data('state') != selctstateselect){
                        $(this).prop('disabled',true);
                    }else{
                        $(this).prop('disabled',false);
                    }
                });
                console.log('Selected State is - '+selctstateselect);
        });

        $(".districtselect").select2()
        .on("select2:select", function (e) {
                var selctdistrictselect = $('.districtselect').find(':selected').data('state');
                console.log('Selected District is - '+selctdistrictselect);
        });
    });
        
</script>
@endsection