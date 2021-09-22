@extends('includes.postlogin.main')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><span><img src="{{url('postlogin/images/counselling.png')}}"  style="margin-right: 10px;width: 30px;" alt="counselling"></span>Admin Dashboard</h1>
          </div>
          <div class="col-sm-6">
           <!--  <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student Data</li>
            </ol> -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              
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
                <table id="example2" width="100%" class="table table-responsive-sm  table-bordered table-hover" style="position:relative;">
                   
                  <thead>

                 <tr>
                      <th class="sorting"><span class="ok_icon"><i class="fas fa-check-double"></i></span>User ID</th>
                       <th class="sorting after_">
                                <span class="st_"><img src="{{url('postlogin/images/user.png')}}" alt="status"  style="margin-right:5px;width: 16px;"></span>
                                <div class="status_">
                                 <select class="form-control select2" style="width: 100%;">
                                  <option selected="selected">Users</option>
                                  <option>Student</option>
                                  <option>Consellor</option>
                                  <option>JobSeeker</option>
                                </select>   
                                </div>
                                   </th>
                       
                        <th class="sorting"><span><img src="{{url('postlogin/images/referr.png')}}"  style="margin-right: 10px;width: 20px;" alt="parent"></span>Referrer</th>
                         <th class="sorting"><span><img src="{{url('postlogin/images/adviser.png')}}"  style="margin-right: 10px;width: 20px;" alt="referred"></span>Adviser</th>
                          <th class="sorting"><span><img src="{{url('postlogin/images/team-leader.png')}}"  style="margin-right: 10px;width: 20px;" alt="counselling"></span>Leader</th>
                           <th class="sorting"><span><img src="{{url('postlogin/images/manager.png')}}"  style="margin-right: 10px;width: 20px;" alt="follow"></span>Manager</th>
                            <th class="sorting"><span><img src="{{url('postlogin/images/business.png')}}"  style="margin-right: 10px;width: 20px;" alt="follow"></span>Business</th>
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
                  <button type="hidden"  class="list hidee"  data-filter="SelectContact"></button>
                  <button class="list contactbyme itembox1" data-filter="contact"><i class="fas fa-mobile-alt"></i>Call</button >
                  <button class="list contactbyme itembox1" data-filter="bymail"><i class="fas fa-at"></i>Email</button>
                  <button class="list contactbyme itembox1" data-filter="bysms"><i class="fas fa-comment-alt"></i>SMS</button>
                  <button class="list itembox1 contactbyme" data-filter="bywhatsapp"><i class="fab fa-whatsapp"></i>WhatsApp</button>
                  <button class="list contactbyme itembox1" data-filter="byvisit"><i class="fas fa-walking"></i>Visit</button>
                   <button class="list contactbyclient itembox1" data-filter="contactClient"><i class="fas fa-mobile-alt"></i>Call</button>
                  <button class="list contactbyclient itembox1" data-filter="bymailClient"><i class="fas fa-at"></i>Email</button>
                  <button class="list contactbyclient itembox1" data-filter="bysmsClient"><i class="fas fa-comment-alt"></i>SMS</button>
                  <button class="list contactbyclient itembox1" data-filter="bywhatsappClient"><i class="fab fa-whatsapp"></i>WhatsApp</button>
                  <button class="list contactbyclient itembox1" data-filter="byvisitClient"><i class="fas fa-walking"></i>Visit</button>
                               </div>
                              <form class="form">
                                <!-----BY Contact------->
                                   <div class="row px-5 itembox contact">
                                   <div class="col-md-6">
                                         <div class="input-group mb-3">
                                            <select class="form-control " style="width: 100%;">
                                                <option selected="selected">Purpose</option>
                                                <option>Learning</option>
                                                <option>Learning</option>
                                               
                                                
                                              </select>
                                          </div>
                                   </div>
                                   <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                            <select class="form-control " style="width: 100%;">
                                                <option selected="selected">Gateway</option>
                                                <option>GSM Mobile</option>
                                                <option>SIP Landline</option>
                                               
                                                
                                              </select>
                                      </div>
                                   </div>
                                   <div class="col-12">
                                        <div class="form-group">
                                        <label>Remarks</label>
                                        <textarea class="form-control" rows="3" placeholder="Enter ..." ></textarea>
                                      </div>
                                   </div>
                                   <div class="col-md-6">
                                    <label>Status</label>
                                     <select class="form-control " style="width: 100%;">
                                                <option selected="selected">Status</option>
                                                <option>1</option>
                                                <option>2</option>
                                               
                                                
                                              </select>
                                   </div>
                                   
                                   <div class="col-md-6">
                                     <div class="form-group">
                                        <label>Follow Up Date and time:</label>
                                          <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                                              <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime"/>
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
                                <!-----------BY Mail--------->
                                 <div class="row px-5 itembox bymail">
                                   <div class="col-md-4">
                                         <div class="input-group mb-3">
                                            <select class="form-control " style="width: 100%;">
                                                <option selected="selected">Purpose</option>
                                                <option>Learning</option>
                                                <option>Learning</option>
                                               
                                                
                                              </select>
                                          </div>
                                   </div>
                                   <div class="col-md-4">
                                         <div class="input-group mb-3">
                                            <select class="form-control " style="width: 100%;">
                                                <option selected="selected">Template</option>
                                                <option>Template 1.</option>
                                                <option>Template 2.</option>
                                               
                                                
                                              </select>
                                          </div>
                                   </div>
                                   <div class="col-sm-4">
                                        <div class="input-group mb-3">
                                            <select class="form-control " style="width: 100%;">
                                                <option selected="selected">SMTP</option>
                                                <option>Amazon</option>
                                                <option>Sendgrid</option>
                                                <option>Website</option>
                                                
                                              </select>
                                      </div>
                                   </div>
                                   <div class="col-12">
                                        <div class="form-group">
                                            <!-- <label for="exampleInputEmail1">Subject</label> -->
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Subject">
                                          </div>
                                   </div>
                                   <div class="col-12">
                                        <div class="form-group">
                                        <!-- <label>Message</label> -->
                                         <textarea id="summernote">
                                            Place <em>some</em> <u>text</u> <strong>here</strong>
                                          </textarea>
                                      </div>
                                   </div>
                                   <div class="col-md-6">
                                      <div class="form-group">
                                      <!-- <label for="customFile">Custom File</label> -->
                                      <!--  <label>Attachment</label> -->
                                      <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                      </div>
                                    </div>
                                   </div>
                                   <div class="col-md-6">
                                     <div class="form-group">
                                        <!-- <label>Remarks</label> -->
                                        <textarea class="form-control" rows="1" placeholder="Remarks ..." ></textarea>
                                      </div>
                                   </div>

                                   <div class="col-md-6 ">
                                    <!-- <label>Status</label> -->
                                     <select class="form-control mb-2" style="width: 100%;">
                                                <option selected="selected">Status</option>
                                                <option>1</option>
                                                <option>2</option>
                                               
                                                
                                              </select>
                                   </div>
                                  
                                   <div class="col-md-6">
                                     <div class="form-group ">
                                        <!-- <label>Follow Up Date and time:</label> -->
                                          <div class="input-group date" id="reservationdatetime1" data-target-input="nearest" pla>
                                              <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime1" placeholder="Follow Up Date and time"/>
                                              <div class="input-group-append" data-target="#reservationdatetime1" data-toggle="datetimepicker">
                                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                              </div>
                                          </div>
                                      </div>
                                   </div>
                                   <div class="col-md-12">
                                      <button type="button" class="btn btn-primary submit_">Submit</button>
                                   </div>
                               </div>
                                <!-----------BY Mail END--------->

                                <!-----------BY SMS--------->
                                 <div class="row px-5 itembox bysms">
                                   <div class="col-md-4">
                                         <div class="input-group mb-3">
                                            <select class="form-control " style="width: 100%;">
                                                <option selected="selected">Purpose</option>
                                                <option>Learning</option>
                                                <option>Learning</option>
                                               
                                                
                                              </select>
                                          </div>
                                   </div>
                                   <div class="col-md-4">
                                         <div class="input-group mb-3">
                                            <select class="form-control " style="width: 100%;">
                                                <option selected="selected">Template</option>
                                                <option>Template 1.</option>
                                                <option>Template 2.</option>
                                               
                                                
                                              </select>
                                          </div>
                                   </div>
                                   <div class="col-sm-4">
                                        <div class="input-group mb-3">
                                            <select class="form-control " style="width: 100%;">
                                                <option selected="selected">DLTID</option>
                                                <option>eLearn</option>
                                                <option>Amazon</option>
                                                
                                              </select>
                                      </div>
                                   </div>
                                  
                                   <div class="col-md-6">
                                        <div class="form-group">
                                        <!-- <label>Message</label> -->
                                        <textarea class="form-control" rows="3" placeholder="Message ..." ></textarea>
                                      </div>
                                      <h4 class="char">0 Char</h4>
                                   </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <!-- <label>Message</label> -->
                                        <textarea class="form-control" rows="3" placeholder="Remarks ..." ></textarea>
                                      </div>
                                   </div>
                                  
                                  
                                   <div class="col-md-6">
                                    <!-- <label>Status</label> -->
                                     <select class="form-control mb-2" style="width: 100%;">
                                                <option selected="selected">Status</option>
                                                <option>1</option>
                                                <option>2</option>
                                               
                                                
                                              </select>
                                   </div>
                                  
                                   <div class="col-md-6">
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
                                   <div class="col-md-12">
                                      <button type="button" class="btn btn-primary submit_">Submit</button>
                                   </div>
                               </div>
                               <!----------BY SMS END------>


                                <!-----------BY WHAT'S--------->
                                 <div class="row px-5 itembox bywhatsapp">
                                   <div class="col-md-4">
                                         <div class="input-group mb-3">
                                            <select class="form-control " style="width: 100%;">
                                                <option selected="selected">Purpose</option>
                                                <option>Learning</option>
                                                <option>Learning</option>
                                               
                                                
                                              </select>
                                          </div>
                                   </div>
                                   <div class="col-md-4">
                                         <div class="form-group">
                                        <!-- <label>Message</label> -->
                                        <textarea class="form-control" rows="3" placeholder="Message ..." ></textarea>
                                      </div>
                                   </div>
                                   <div class="col-sm-4">
                                        <div class="form-group">
                                        <!-- <label>Message</label> -->
                                        <textarea class="form-control" rows="3" placeholder="Remarks ..." ></textarea>
                                      </div>
                                   </div>
                                
                                   <div class="col-md-6">
                                    <!-- <label>Status</label> -->
                                     <select class="form-control mb-2" style="width: 100%;">
                                                <option selected="selected">Status</option>
                                                <option>1</option>
                                                <option>2</option>
                                               
                                                
                                              </select>
                                   </div>
                                  
                                   <div class="col-md-6">
                                     <div class="form-group">
                                        <!-- <label>Follow Up Date and time:</label> -->
                                          <div class="input-group date" id="reservationdatetime3" data-target-input="nearest" pla>
                                              <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime3" placeholder="Follow Up Date and time"/>
                                              <div class="input-group-append" data-target="#reservationdatetime3" data-toggle="datetimepicker">
                                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                              </div>
                                          </div>
                                      </div>
                                   </div>
                                   <div class="col-md-12">
                                      <button type="button" class="btn btn-primary submit_">Submit</button>
                                   </div>
                               </div>
                               <!----------BY WHAT'S END------>


                                <!-----------BY VISIT--------->
                                 <div class="row px-5 itembox byvisit">
                                   <div class="col-md-6">
                                         <div class="input-group mb-3">
                                            <select class="form-control " style="width: 100%;">
                                                <option selected="selected">Purpose</option>
                                                <option>Learning</option>
                                                <option>Learning</option>
                                               
                                                
                                              </select>
                                          </div>
                                   </div>
                                   <div class="col-md-6">
                                         <div class="form-group">
                                        <!-- <label>Message</label> -->
                                        <textarea class="form-control" rows="3" placeholder="Remarks ..." ></textarea>
                                      </div>
                                   </div>
                                  
                                
                                   <div class="col-md-6">
                                    <!-- <label>Status</label> -->
                                     <select class="form-control mb-2" style="width: 100%;">
                                                <option selected="selected">Status</option>
                                                <option>1</option>
                                                <option>2</option>
                                               
                                                
                                              </select>
                                   </div>
                                  
                                   <div class="col-md-6">
                                     <div class="form-group">
                                        <!-- <label>Follow Up Date and time:</label> -->
                                          <div class="input-group date" id="reservationdatetime4" data-target-input="nearest" pla>
                                              <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime4" placeholder="Follow Up Date and time"/>
                                              <div class="input-group-append" data-target="#reservationdatetime4" data-toggle="datetimepicker">
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





                                <!-----BY ContactClient------->
                                   <div class="row px-5 itembox contactClient">
                                   <div class="col-md-6">
                                         <div class="input-group mb-3">
                                            <select class="form-control " style="width: 100%;">
                                                <option selected="selected">Purpose</option>
                                                <option>Learning</option>
                                                <option>Learning</option>
                                               
                                                
                                              </select>
                                          </div>
                                   </div>
                                   <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                            <select class="form-control " style="width: 100%;">
                                                <option selected="selected">Gateway</option>
                                                <option>GSM Mobile</option>
                                                <option>SIP Landline</option>
                                               
                                                
                                              </select>
                                      </div>
                                   </div>
                                   <div class="col-12">
                                        <div class="form-group">
                                        <label>Remarks</label>
                                        <textarea class="form-control" rows="3" placeholder="Enter ..." ></textarea>
                                      </div>
                                   </div>
                                   <div class="col-md-6">
                                    <label>Status</label>
                                     <select class="form-control mb-2" style="width: 100%;">
                                                <option selected="selected">Status</option>
                                                <option>1</option>
                                                <option>2</option>
                                               
                                                
                                              </select>
                                   </div>
                                  
                                   <div class="col-md-6">
                                     <div class="form-group">
                                        <label>Follow Up Date and time:</label>
                                          <div class="input-group date" id="reservationdatetime5" data-target-input="nearest">
                                              <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime5"/>
                                              <div class="input-group-append" data-target="#reservationdatetime5" data-toggle="datetimepicker">
                                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                              </div>
                                          </div>
                                      </div>
                                   </div>
                                   <div class="col-md-12">
                                      <button type="button" class="btn btn-primary submit_">Submit</button>
                                   </div>
                               </div>
                               <!-----------BY CONTACTClient END--------->
                                <!-----------BY Mail--------->
                                 <div class="row px-5 itembox bymailClient">
                                   <div class="col-md-4">
                                         <div class="input-group mb-3">
                                            <select class="form-control " style="width: 100%;">
                                                <option selected="selected">Purpose</option>
                                                <option>Learning</option>
                                                <option>Learning</option>
                                               
                                                
                                              </select>
                                          </div>
                                   </div>
                                   <div class="col-md-4">
                                         <div class="input-group mb-3">
                                            <select class="form-control " style="width: 100%;">
                                                <option selected="selected">Template</option>
                                                <option>Template 1.</option>
                                                <option>Template 2.</option>
                                               
                                                
                                              </select>
                                          </div>
                                   </div>
                                   <div class="col-sm-4">
                                        <div class="input-group mb-3">
                                            <select class="form-control " style="width: 100%;">
                                                <option selected="selected">SMTP</option>
                                                <option>Amazon</option>
                                                <option>Sendgrid</option>
                                                <option>Website</option>
                                                
                                              </select>
                                      </div>
                                   </div>
                                   <div class="col-12">
                                        <div class="form-group">
                                            <!-- <label for="exampleInputEmail1">Subject</label> -->
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Subject">
                                          </div>
                                   </div>
                                   <div class="col-12">
                                        <div class="form-group">
                                        <!-- <label>Message</label> -->
                                        <textarea id="summernote1">
                                            Place <em>some</em> <u>text</u> <strong>here</strong>
                                          </textarea>
                                      </div>
                                   </div>
                                   <div class="col-md-6">
                                      <div class="form-group">
                                      <!-- <label for="customFile">Custom File</label> -->
                                      <!--  <label>Attachment</label> -->
                                      <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                      </div>
                                    </div>
                                   </div>
                                   <div class="col-md-6">
                                     <div class="form-group">
                                        <!-- <label>Remarks</label> -->
                                        <textarea class="form-control" rows="1" placeholder="Remarks ..." ></textarea>
                                      </div>
                                   </div>
                                   <div class="col-md-6">
                                    <!-- <label>Status</label> -->
                                     <select class="form-control mb-2" style="width: 100%;">
                                                <option selected="selected">Status</option>
                                                <option>1</option>
                                                <option>2</option>
                                               
                                                
                                              </select>
                                   </div>
                                  
                                   <div class="col-md-6">
                                     <div class="form-group">
                                        <!-- <label>Follow Up Date and time:</label> -->
                                          <div class="input-group date" id="reservationdatetime6" data-target-input="nearest" pla>
                                              <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime6" placeholder="Follow Up Date and time"/>
                                              <div class="input-group-append" data-target="#reservationdatetime6" data-toggle="datetimepicker">
                                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                              </div>
                                          </div>
                                      </div>
                                   </div>
                                   <div class="col-md-12">
                                      <button type="button" class="btn btn-primary submit_">Submit</button>
                                   </div>
                               </div>
                                <!-----------BY MailClient END--------->

                                <!-----------BY SMSClient--------->
                                 <div class="row px-5 itembox bysmsClient">
                                   <div class="col-md-4">
                                         <div class="input-group mb-3">
                                            <select class="form-control " style="width: 100%;">
                                                <option selected="selected">Purpose</option>
                                                <option>Learning</option>
                                                <option>Learning</option>
                                               
                                                
                                              </select>
                                          </div>
                                   </div>
                                   <div class="col-md-4">
                                         <div class="input-group mb-3">
                                            <select class="form-control " style="width: 100%;">
                                                <option selected="selected">Template</option>
                                                <option>Template 1.</option>
                                                <option>Template 2.</option>
                                               
                                                
                                              </select>
                                          </div>
                                   </div>
                                   <div class="col-sm-4">
                                        <div class="input-group mb-3">
                                            <select class="form-control " style="width: 100%;">
                                                <option selected="selected">DLTID</option>
                                                <option>eLearn</option>
                                                <option>Amazon</option>
                                                
                                              </select>
                                      </div>
                                   </div>
                                  
                                   <div class="col-md-6">
                                        <div class="form-group">
                                        <!-- <label>Message</label> -->
                                        <textarea class="form-control" rows="3" placeholder="Message ..." ></textarea>
                                      </div>
                                      <h4 class="char">0 Char</h4>
                                   </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <!-- <label>Message</label> -->
                                        <textarea class="form-control" rows="3" placeholder="Remarks ..." ></textarea>
                                      </div>
                                   </div>
                                  
                                  
                                   <div class="col-md-6">
                                    <!-- <label>Status</label> -->
                                     <select class="form-control mb-2" style="width: 100%;">
                                                <option selected="selected">Status</option>
                                                <option>1</option>
                                                <option>2</option>
                                               
                                                
                                              </select>
                                   </div>
                                  
                                   <div class="col-md-6">
                                     <div class="form-group">
                                        <!-- <label>Follow Up Date and time:</label> -->
                                          <div class="input-group date" id="reservationdatetime7" data-target-input="nearest" pla>
                                              <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime7" placeholder="Follow Up Date and time"/>
                                              <div class="input-group-append" data-target="#reservationdatetime7" data-toggle="datetimepicker">
                                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                              </div>
                                          </div>
                                      </div>
                                   </div>
                                   <div class="col-md-12">
                                      <button type="button" class="btn btn-primary submit_">Submit</button>
                                   </div>
                               </div>
                               <!----------BY SMSClient END------>


                                <!-----------BY WHAT'SClient--------->
                                 <div class="row px-5 itembox bywhatsappClient">
                                   <div class="col-md-4">
                                         <div class="input-group mb-3">
                                            <select class="form-control " style="width: 100%;">
                                                <option selected="selected">Purpose</option>
                                                <option>Learning</option>
                                                <option>Learning</option>
                                               
                                                
                                              </select>
                                          </div>
                                   </div>
                                   <div class="col-md-4">
                                         <div class="form-group">
                                        <!-- <label>Message</label> -->
                                        <textarea class="form-control" rows="3" placeholder="Message ..." ></textarea>
                                      </div>
                                   </div>
                                   <div class="col-sm-4">
                                        <div class="form-group">
                                        <!-- <label>Message</label> -->
                                        <textarea class="form-control" rows="3" placeholder="Remarks ..." ></textarea>
                                      </div>
                                   </div>
                                
                                   <div class="col-md-6">
                                    <!-- <label>Status</label> -->
                                     <select class="form-control mb-2" style="width: 100%;">
                                                <option selected="selected">Status</option>
                                                <option>1</option>
                                                <option>2</option>
                                               
                                                
                                              </select>
                                   </div>
                                  
                                   <div class="col-md-6">
                                     <div class="form-group">
                                        <!-- <label>Follow Up Date and time:</label> -->
                                          <div class="input-group date" id="reservationdatetime8" data-target-input="nearest" pla>
                                              <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime8" placeholder="Follow Up Date and time"/>
                                              <div class="input-group-append" data-target="#reservationdatetime8" data-toggle="datetimepicker">
                                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                              </div>
                                          </div>
                                      </div>
                                   </div>
                                   <div class="col-md-12">
                                      <button type="button" class="btn btn-primary submit_">Submit</button>
                                   </div>
                               </div>
                               <!----------BY WHAT'SClient END------>


                                <!-----------BY VISITClient--------->
                                 <div class="row px-5 itembox byvisitClient">
                                   <div class="col-md-6">
                                         <div class="input-group mb-3">
                                            <select class="form-control " style="width: 100%;">
                                                <option selected="selected">Purpose</option>
                                                <option>Learning</option>
                                                <option>Learning</option>
                                               
                                                
                                              </select>
                                          </div>
                                   </div>
                                   <div class="col-md-6">
                                         <div class="form-group">
                                        <!-- <label>Message</label> -->
                                        <textarea class="form-control" rows="3" placeholder="Remarks ..." ></textarea>
                                      </div>
                                   </div>
                                  
                                
                                   <div class="col-md-6">
                                    <!-- <label>Status</label> -->
                                     <select class="form-control mb-2" style="width: 100%;">
                                                <option selected="selected">Status</option>
                                                <option>1</option>
                                                <option>2</option>
                                               
                                                
                                              </select>
                                   </div>
                                  
                                   <div class="col-md-6">
                                     <div class="form-group">
                                        <!-- <label>Follow Up Date and time:</label> -->
                                          <div class="input-group date" id="reservationdatetime9" data-target-input="nearest" pla>
                                              <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime9" placeholder="Follow Up Date and time"/>
                                              <div class="input-group-append" data-target="#reservationdatetime9" data-toggle="datetimepicker">
                                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                              </div>
                                          </div>
                                      </div>
                                   </div>
                                   <div class="col-md-12">
                                      <button type="button" class="btn btn-primary submit_">Submit</button>
                                   </div>
                               </div>
                               <!----------BY VISITClient END------>
                              </form>
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
                      <div class="student_detail user-panel"><div class="profile_img">
                       
                       <ul class="preson_detail">
                         <li>Name</li>
                         <li>Mobile</li>
                         <li>Email</li>
                         <li>date time</li>
                         <li> <div class="form-group">
                          <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                            <input type="checkbox" class="custom-control-input" id="customSwitch3">
                            <label class="custom-control-label" for="customSwitch3"></label>
                          </div>
                        </div>
                      </li>
                       </ul>
                      </div>
                    </div>
                  </td>
                     <td > 
                      <ul class="preson_detail">
                         <li>Name</li>
                         <li>Mobile</li>
                         <li>Email</li>
                         <li>date time</li>
                         <li> <div class="form-group">
                          <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                            <input type="checkbox" class="custom-control-input" id="customSwitch3">
                            <label class="custom-control-label" for="customSwitch3"></label>
                          </div>
                        </div>
                      </li>
                       </ul>
                     </td>
                    <td >
                     <ul class="preson_detail">
                         <li>Name</li>
                         <li>Mobile</li>
                         <li>Email</li>
                         <li>date time</li>
                         <li> <div class="form-group">
                          <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                            <input type="checkbox" class="custom-control-input" id="customSwitch3">
                            <label class="custom-control-label" for="customSwitch3"></label>
                          </div>
                        </div>
                      </li>
                       </ul>
                     </td>
                    <td >
                       <ul class="preson_detail">
                         <li>Name</li>
                         <li>Mobile</li>
                         <li>Email</li>
                         <li>date time</li>
                         <li> <div class="form-group">
                          <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                            <input type="checkbox" class="custom-control-input" id="customSwitch3">
                            <label class="custom-control-label" for="customSwitch3"></label>
                          </div>
                        </div>
                      </li>
                       </ul>
                    </td>
                   <td >
                       <ul class="preson_detail">
                         <li>Name</li>
                         <li>Mobile</li>
                         <li>Email</li>
                         <li>date time</li>
                         <li> <div class="form-group">
                          <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                            <input type="checkbox" class="custom-control-input" id="customSwitch3">
                            <label class="custom-control-label" for="customSwitch3"></label>
                          </div>
                        </div>
                      </li>
                       </ul>
                    </td>
                      <td >
                      <ul class="preson_detail">
                        <li>Completed</li>
                        <li>Call by me</li>
                        <li>Replied</li>
                      </ul>
                    </td>
                     <td >
                      <ul class="preson_detail">
                        <li>Gurgaon</li>
                        <li>delhi</li>
                        
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