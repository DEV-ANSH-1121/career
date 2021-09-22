@extends('includes.postlogin.main')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- /.control-sidebar -->
      <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><span><img src="{{asset('images/counselling.png')}}"  style="margin-right: 10px;width: 30px;" alt="counselling"></span>Master Table</h1>
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
    <div class="progrestest">
     <section class="content">
          <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                          <div class="card">
                   <div class="card-header">
                
                <div class="header-content">
                 <div class="row">
                   <div class="col-md-9">
                       <h3 class="progressreport"><i class="far fa-file"></i>Master Table</h3>
                       
                   </div>
                   <div class="col-md-3">
                        <select class="form-control select2" id="mastertable_t" style="width: 100%;">
                                 <option selected="selected">Master table</option>
                            <option value="aut">Authontic</option>
                            <option value="cont">Contact</option>
                             <option value="count">Country</option>
                             <option value="state">State</option>
                             <option value="dist">District</option>
                             <option value="linkk">Link group</option>
                             <option value="linkk2">Links</option>
                             <option value="pin_0">PIN code</option>
                             <option value="buy_0">Buy</option>
                             <option value="contesttype">Contest Type</option>
                             <option value="contestt">Contest</option>
                                  
                                </select>
                   </div>
                </div>
                </div>
            </div>
            <!---Authentic----->
              <div class="card-body master authentic" id="aut">
                <div class="row">
                   <div class="col-md-12">
                       <h3 class="progressreport text-center"><i class="far fa-file"></i>Authentic</h3>
                       
                   </div>
                </div>
                 <form class="study_lesson">
                      <div class="row">
                          <div class="col-md-3">
                               <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Provider">
                              </div>
                         </div>
                           <div class="col-md-3">
                               <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="APL">
                              </div>
                           </div>
                           <div class="col-md-3">
                               <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="User">
                              </div>
                           </div>
                           <div class="col-md-3">
                               <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Passsword">
                              </div>
                           </div>
               
                     <div class="col-md-12 text-center">
                        <button class="check ">Submit<span><i class="fas fa-arrow-right"></i></span></button>
                     </div>
                 
                </div>
              </form>
                <table id="mastertable0" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>S.No</th>
                    <th><span style="margin-right:5px;"></span>Provider</th>
                    <th><span style="margin-right:5px;"></span>APL</th>
                    <th><span style="margin-right:5px;"></span>User</th>
                    <th><span style="margin-right:5px;"></span>Password</th>
                     
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
                            <a href="#" data-toggle="dropdown" class="dot" aria-haspopup="true" aria-expanded="false"><i class="nav-icon fas fa-ellipsis-h"></i>&nbsp;<i class="fas fa-chevron-down"></i></a>
                           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item dro" href="#">Edit<i class="nav-icon fas fa-edit"></i></a>
                                
                                
                              </div>
                          </span>
                      </div>
                       </div>
                        </div>
                    </td>
                    <td></td>
                    <td></td>
                    <td>
                      
                    </td>
                    <td></td>
                    
                  </tr>
                 
                  </tbody>
                  
                </table>
            
              </div>

              <!---Authentic End----->
              <!----Contact---->
                <div class="card-body master contact_" id="cont">
                <div class="row">
                   <div class="col-md-12">
                       <h3 class="progressreport text-center"><i class="far fa-file"></i>Contact</h3>
                       
                   </div>
                </div>
                 <form class="study_lesson">
                      <div class="row justify-content-center">
                          <div class="col-md-3">
                               <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Contact">
                              </div>
                         </div>
                          
                     <div class="col-md-3 text-center">
                        <button class="check ">Submit<span><i class="fas fa-arrow-right"></i></span></button>
                     </div>
                 
                </div>
              </form>
                <table id="mastertable1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>S.No</th>
                    <th><span style="margin-right:5px;"></span>Contact</th>
                    
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
                            <a href="#" data-toggle="dropdown" class="dot" aria-haspopup="true" aria-expanded="false"><i class="nav-icon fas fa-ellipsis-h"></i>&nbsp;<i class="fas fa-chevron-down"></i></a>
                           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item dro" href="#">Edit<i class="nav-icon fas fa-edit"></i></a>
                                
                                
                              </div>
                          </span>
                      </div>
                       </div>
                        </div>
                    </td>
                    <td></td>
                    
                  </tr>
                 
                  </tbody>
                  
                </table>
            
              </div>
              <!----Contect end--->
              <!----Country---->
               <div class="card-body master country" id="count">
                <div class="row">
                   <div class="col-md-12">
                       <h3 class="progressreport text-center"><i class="far fa-file"></i>Country</h3>
                       
                   </div>
                </div>
                 <form class="study_lesson">
                      <div class="row justify-content-center">
                          <div class="col-md-3">
                               <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Country">
                              </div>
                         </div>
                          
                     <div class="col-md-3 text-center">
                        <button class="check ">Submit<span><i class="fas fa-arrow-right"></i></span></button>
                     </div>
                 
                </div>
              </form>
                <table id="mastertable1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>S.No</th>
                    <th><span style="margin-right:5px;"></span>Country</th>
                    
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
                            <a href="#" data-toggle="dropdown" class="dot" aria-haspopup="true" aria-expanded="false"><i class="nav-icon fas fa-ellipsis-h"></i>&nbsp;<i class="fas fa-chevron-down"></i></a>
                           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item dro" href="#">Edit<i class="nav-icon fas fa-edit"></i></a>
                                
                                
                              </div>
                          </span>
                      </div>
                       </div>
                        </div>
                    </td>
                    <td></td>
                    
                  </tr>
                 
                  </tbody>
                  
                </table>
            
              </div>
              <!---country end--->
                 <!----Status---->
                 <div class="card-body master statu" id="state">
                <div class="row">
                   <div class="col-md-12">
                       <h3 class="progressreport text-center"><i class="far fa-file"></i>Status</h3>
                       
                   </div>
                </div>
                 <form class="study_lesson">
                      <div class="row justify-content-center">
                          <div class="col-md-3">
                               <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Status">
                              </div>
                         </div>
                          
                     <div class="col-md-3 text-center">
                        <button class="check ">Submit<span><i class="fas fa-arrow-right"></i></span></button>
                     </div>
                 
                </div>
              </form>
                <table id="mastertable2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>S.No</th>
                    <th><span style="margin-right:5px;"></span>Status</th>
                    
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
                            <a href="#" data-toggle="dropdown" class="dot" aria-haspopup="true" aria-expanded="false"><i class="nav-icon fas fa-ellipsis-h"></i>&nbsp;<i class="fas fa-chevron-down"></i></a>
                           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item dro" href="#">Edit<i class="nav-icon fas fa-edit"></i></a>
                                
                                
                              </div>
                          </span>
                      </div>
                       </div>
                        </div>
                    </td>
                    <td></td>
                    
                  </tr>
                 
                  </tbody>
                  
                </table>
            
              </div>
              <!--Status end---->
              <!---District---->
                  <div class="card-body master district" id="dist">
                <div class="row">
                   <div class="col-md-12">
                       <h3 class="progressreport text-center"><i class="far fa-file"></i>District</h3>
                       
                   </div>
                </div>
                 <form class="study_lesson">
                      <div class="row justify-content-center">
                        
                         <div class="col-md-4">
                            <div class="form-group">
                              <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">Country</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                              </select>
                            </div>
                         </div>
                           <div class="col-md-4">
                            <div class="form-group">
                              <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">State</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                              </select>
                            </div>
                         </div>
                           <div class="col-md-4">
                               <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="District">
                              </div>
                         </div>
                     <div class="col-md-12 text-center">
                        <button class="check ">Submit<span><i class="fas fa-arrow-right"></i></span></button>
                     </div>
                 
                </div>
              </form>
                <table id="mastertable3" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>S.No</th>
                    <th><span style="margin-right:5px;"></span>Country</th>
                    <th><span style="margin-right:5px;"></span>State</th>
                    <th><span style="margin-right:5px;"></span>District</th>
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
                            <a href="#" data-toggle="dropdown" class="dot" aria-haspopup="true" aria-expanded="false"><i class="nav-icon fas fa-ellipsis-h"></i>&nbsp;<i class="fas fa-chevron-down"></i></a>
                           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item dro" href="#">Edit<i class="nav-icon fas fa-edit"></i></a>
                                
                                
                              </div>
                          </span>
                      </div>
                       </div>
                        </div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                 
                  </tbody>
                  
                </table>
            
              </div>
              <!----District end--->
               <!---Link group---->
             <div class="card-body master linkgroup" id="linkk">
                <div class="row">
                   <div class="col-md-12">
                       <h3 class="progressreport text-center"><i class="far fa-file"></i>Link Group</h3>
                       
                   </div>
                </div>
                 <form class="study_lesson">
                      <div class="row justify-content-center">
                           <div class="col-md-4">
                               <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Link Group">
                              </div>
                         </div>
                         <div class="col-md-4">
                               <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Url">
                              </div>
                         </div>
                     <div class="col-md-4">
                        <button class="check ">Submit<span><i class="fas fa-arrow-right"></i></span></button>
                     </div>
                 
                </div>
              </form>
                <table id="mastertable4" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>S.No</th>
                    <th><span style="margin-right:5px;"></span>Country</th>
                    <th><span style="margin-right:5px;"></span>State</th>
                    <th><span style="margin-right:5px;"></span>District</th>
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
                            <a href="#" data-toggle="dropdown" class="dot" aria-haspopup="true" aria-expanded="false"><i class="nav-icon fas fa-ellipsis-h"></i>&nbsp;<i class="fas fa-chevron-down"></i></a>
                           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item dro" href="#">Edit<i class="nav-icon fas fa-edit"></i></a>
                                
                                
                              </div>
                          </span>
                      </div>
                       </div>
                        </div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                 
                  </tbody>
                  
                </table>
            
              </div>

              <!---link group end---->
               <!---links---->
                 <div class="card-body master link" id="linkk2">
                <div class="row">
                   <div class="col-md-12">
                       <h3 class="progressreport text-center"><i class="far fa-file"></i>Links</h3>
                       
                   </div>
                </div>
                 <form class="study_lesson">
                      <div class="row justify-content-center">
                        <div class="col-md-4">
                             <div class="form-group">
                              <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">Link Group</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                              </select>
                            </div>
                        </div>
                           <div class="col-md-4">
                               <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Url">
                              </div>
                         </div>
                         <div class="col-md-4">
                               <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Link">
                              </div>
                         </div>
                         <div class="col-md-4">
                               <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Link PHP">
                              </div>
                         </div>
                         <div class="col-md-4">
                               <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Link Order">
                              </div>
                         </div>
                     <div class="col-md-4">
                        <button class="check ">Submit<span><i class="fas fa-arrow-right"></i></span></button>
                     </div>
                 
                </div>
              </form>
               <table id="mastertable5" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>S.No</th>
                    <th><span style="margin-right:5px;"></span>Link Group</th>
                    <th><span style="margin-right:5px;"></span>Link Order</th>
                    <th><span style="margin-right:5px;"></span>Link</th>
                    <th><span style="margin-right:5px;"></span>Url</th>
                    <th><span style="margin-right:5px;"></span>Link PHP</th>
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
                            <a href="#" data-toggle="dropdown" class="dot" aria-haspopup="true" aria-expanded="false"><i class="nav-icon fas fa-ellipsis-h"></i>&nbsp;<i class="fas fa-chevron-down"></i></a>
                           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item dro" href="#">Edit<i class="nav-icon fas fa-edit"></i></a>
                                
                                
                              </div>
                          </span>
                      </div>
                       </div>
                        </div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                 
                  </tbody>
                  
                </table>
              </div>


              <!---links end--->
                  <!---Pincode--->
                   <div class="card-body master pincode" id="pin_0">
                <div class="row">
                   <div class="col-md-12">
                       <h3 class="progressreport text-center"><i class="far fa-file"></i>PIN Code</h3>
                       
                   </div>
                </div>
                 <form class="study_lesson">
                      <div class="row justify-content-center">
                        <div class="col-md-4">
                             <div class="form-group">
                              <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">Country</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                              </select>
                            </div>
                        </div>
                           <div class="col-md-4">
                               <div class="form-group">
                              <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">State</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                              </select>
                            </div>
                         </div>
                         <div class="col-md-4">
                               <div class="form-group">
                              <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">District</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                              </select>
                            </div>
                         </div>
                         <div class="col-md-4">
                               <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Postal">
                              </div>
                         </div>
                         <div class="col-md-4">
                               <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Pin Code">
                              </div>
                         </div>
                     <div class="col-md-4">
                        <button class="check ">Submit<span><i class="fas fa-arrow-right"></i></span></button>
                     </div>
                 
                </div>
              </form>
               <table id="mastertable6" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>S.No</th>
                    <th><span style="margin-right:5px;"></span>Country</th>
                    <th><span style="margin-right:5px;"></span>State</th>
                    <th><span style="margin-right:5px;"></span>District</th>
                    <th><span style="margin-right:5px;"></span>Postal</th>
                    <th><span style="margin-right:5px;"></span>PIN code</th>
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
                            <a href="#" data-toggle="dropdown" class="dot" aria-haspopup="true" aria-expanded="false"><i class="nav-icon fas fa-ellipsis-h"></i>&nbsp;<i class="fas fa-chevron-down"></i></a>
                           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item dro" href="#">Edit<i class="nav-icon fas fa-edit"></i></a>
                                
                                
                              </div>
                          </span>
                      </div>
                       </div>
                        </div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                 
                  </tbody>
                  
                </table>
              </div>

              <!----pincodeend---->
               <!---Buy--->
                   <div class="card-body master buy" id="buy_0">
                <div class="row">
                   <div class="col-md-12">
                       <h3 class="progressreport text-center"><i class="far fa-file"></i>Buy</h3>
                       
                   </div>
                </div>
                 <form class="study_lesson">
                      <div class="row justify-content-center">
                       
                         <div class="col-md-4">
                               <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Buy">
                              </div>
                         </div>
                         <div class="col-md-4">
                               <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Price">
                              </div>
                         </div>
                          <div class="col-md-4">
                               <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Tax">
                              </div>
                         </div>
                          <div class="col-md-4">
                               <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Link">
                              </div>
                         </div>
                         <div class="col-md-4">
                               <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Valid Days">
                              </div>
                         </div>
                     <div class="col-md-4">
                        <button class="check ">Submit<span><i class="fas fa-arrow-right"></i></span></button>
                     </div>
                 
                </div>
              </form>
               <table id="mastertable7" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>S.No</th>
                    <th><span style="margin-right:5px;"></span>Buy</th>
                    <th><span style="margin-right:5px;"></span>Price</th>
                    <th><span style="margin-right:5px;"></span>Tax</th>
                    <th><span style="margin-right:5px;"></span>Link</th>
                    <th><span style="margin-right:5px;"></span>Valid Days</th>
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
                            <a href="#" data-toggle="dropdown" class="dot" aria-haspopup="true" aria-expanded="false"><i class="nav-icon fas fa-ellipsis-h"></i>&nbsp;<i class="fas fa-chevron-down"></i></a>
                           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item dro" href="#">Edit<i class="nav-icon fas fa-edit"></i></a>
                                
                                
                              </div>
                          </span>
                      </div>
                       </div>
                        </div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                 
                  </tbody>
                  
                </table>
              </div>
              <!--Buy end--->
               <!---contest type--->
                               <div class="card-body master" id="contesttype">
                <div class="row">
                   <div class="col-md-12">
                       <h3 class="progressreport text-center"><i class="far fa-file"></i>Contest Type</h3>
                       
                   </div>
                </div>
                 <form class="study_lesson">
                      <div class="row justify-content-center">
                       
                         <div class="col-md-4">
                               <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Contest Type">
                              </div>
                         </div>
                         
                     <div class="col-md-4">
                        <button class="check ">Submit<span><i class="fas fa-arrow-right"></i></span></button>
                     </div>
                 
                </div>
              </form>
               <table id="mastertable8" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>S.No</th>
                    <th><span style="margin-right:5px;"></span>Contest Type</th>
                    
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
                            <a href="#" data-toggle="dropdown" class="dot" aria-haspopup="true" aria-expanded="false"><i class="nav-icon fas fa-ellipsis-h"></i>&nbsp;<i class="fas fa-chevron-down"></i></a>
                           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item dro" href="#">Edit<i class="nav-icon fas fa-edit"></i></a>
                                
                                
                              </div>
                          </span>
                      </div>
                       </div>
                        </div>
                    </td>
                    <td></td>
                    
                  </tr>
                 
                  </tbody>
                  
                </table>
              </div>
              <!----contest type end--->
              <div class="card-body master" id="contestt">
                  <div class="row">
                   <div class="col-md-12">
                       <h3 class="progressreport text-center"><i class="far fa-file"></i>Contest</h3>
                       
                   </div>
                </div>
                <form class="study_lesson">
                      <div class="row justify-content-center">
                       
                         <div class="col-md-4">
                               <div class="form-group">
                                <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">Contest Type</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                              </select>
                              </div>
                         </div>
                         <div class="col-md-4">
                               <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Contest">
                              </div>
                         </div>
                         
                     <div class="col-md-4">
                        <button class="check ">Submit<span><i class="fas fa-arrow-right"></i></span></button>
                     </div>
                 
                </div>
              </form>
              <table id="mastertable9" class="table table-bordered table-hover">
                         <thead>
                  <tr>
                    <th>S.No</th>
                    <th><span style="margin-right:5px;"></span>Contest Type</th>
                    <th><span style="margin-right:5px;"></span>Contest</th>
                  </tr>
                  </thead>
                   <tbody>
                           <tr>
                               <td>
                                    <div class="s_number">
                       
                                         <div class="bottom_">
                                           <span class="span_icon">
                                              <p>1.</p>
                                            <a href="#" data-toggle="dropdown" class="dot" aria-haspopup="true" aria-expanded="false"><i class="nav-icon fas fa-ellipsis-h"></i>&nbsp;<i class="fas fa-chevron-down"></i></a>
                                           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item dro" href="#">Edit<i class="nav-icon fas fa-edit"></i></a>
                                                
                                                
                                              </div>
                                          </span>
                                          <div>
                                          </div>
                                      </div>
                                  </div>
                               </td>
                               <td></td>
                               <td></td>
                           </tr>
                   </tbody>
              </table>
              </div>

        </div>
               </div>
          
              </div>
             </div>
             </section>
          </div>  
</div>
<!-- /.content-wrapper -->

@endsection
@section('script')
<script>
  $(function () {
   
    $('#mastertable0,#mastertable1,#mastertable2,#mastertable3,#mastertable4,#mastertable5,#mastertable6,#mastertable7,#mastertable8,#mastertable9').DataTable({
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
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
      $('.select2').on('select2:select',function(e){
        function savedata(){
   console.log('hill');
 }
      })
    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

  $('#reservationdate5').datetimepicker({
        format: 'L'
    });
  $('#reservationdate6').datetimepicker({
        format: 'L'
    });
   $('#reportdate').datetimepicker({ icons: { time: 'far fa-clock' } });
   $('#reportdate1').datetimepicker({ icons: { time: 'far fa-clock' } });
    
  })
  
  
</script>

<script>

 $(document).ready(function() {
   $('#mastertable_t').on('change',function() {
     $('.master').hide();
     $('#' + $(this).val()).fadeIn(700);
   }).change();
 })
</script>

@endsection