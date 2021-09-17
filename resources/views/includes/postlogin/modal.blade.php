<!-------ADD USER------>

<div class="modal fade" id="modalLoginForm1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                      aria-hidden="true">
                      <div class="modal-dialog modal-dialog1" role="document">
                        <div class="modal-content">
                          <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold"><span><i class="fas fa-user-plus"></i></span>&nbsp;&nbsp;Add student</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body p-3">
                           <div class="row">
                                <div class="col-md-12">
                              <div class="md-form mb-3 field">
                             
                                <span><i class="fa fa-envelope"></i></span><input type="email" class=" input-text form-control" name="email" id="email" placeholder="Email" required="">
                            </div>
                                </div>
                               
                           </div>
                            <div class="row">
                                <div class="col-md-12">
                              <div class="md-form mb-3 field">
                             
                                <span><i class="fa fa-phone-square"></i></span><input type="text" class=" input-text form-control" placeholder="Mobile" name="mobile" id="mobile" autocomplete="off" pattern="^[0-9]{10}$" maxlength="10" required="">
                            </div>
                                </div>
                           
                           </div>
                           <div class="row">
                                <div class="col-md-12">
                              <div class="md-form mb-3 field">
                             
                                 <span><i class="fa fa-user"></i></span><input type="text" class=" input-text form-control" name="name" id="name" placeholder="Full Name" required="">
                            </div>
                                </div>
                                
                           </div>
                            <div class="row">
                               
                                <div class="col-md-6 mb-3">
                                      <select class="form-control" name="usertype" id="usertype">
                                          <option value="">User Type</option>
                                            <option value="S">Student</option>
                                            <option value="C">Counsellor</option>
                                            <option value="J">Jobseeker</option>
                                            
                                </select> 
                                </div>
                                 <div class="col-md-6">
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
                                
                           </div>
                               <div class="row">
                                
                                <div class="col-md-6 mb-3">
                                     
                                        <select class="form-control" name="usertype" id="usertype">
                                          <option value="">Reference Self</option>
                                          <option value="">Refer Self</option>
                                          
                                </select>
                                </div>
                                <div class="col-md-6">
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

<!-------------ADD USER END----------->