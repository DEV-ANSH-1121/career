@extends('includes.postlogin.main')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><span><img src="{{url('postlogin/images/counselling.png')}}"  style="margin-right: 10px;width: 30px;" alt="counselling"></span>Email Template</h1>
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
          
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  
                </div>
              <form class="study_lesson">
                      
                                
                               
                                <!-----BY ContactClient------->
                                   <div class="row px-5 itembox contactClient justify-content-center">
                                  
                                   <div class="col-md-6">
                                      <div class="form-group">
                                      
                                      <input type="text" class="form-control" id="" placeholder="Template">
                                    </div>
                                   </div>
                                   <div class="col-md-6">
                                      <div class="form-group">
                                      
                                      <input type="text" class="form-control" id="" placeholder="Subject">
                                    </div>
                                   </div>
                                   
                                   <div class="col-md-12">
                                        <div class="form-group">
                                        
                                        <textarea class="form-control" rows="3" placeholder="Matter ..." ></textarea>
                                      </div>
                                   </div>
                                   <div class="col-md-4">
                                    
                                  <div class="form-group">
                                    <!-- <label for="customFile">Custom File</label> -->

                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="customFile">
                                      <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                  </div>
                                    </div>
                                  <div class="col-sm-8">
                                    
                                  </div>
                                   <div class="col-md-12">
                                     <div class="form-group">
                                      <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                                        <label for="customCheckbox1" class="custom-control-label">Share</label>
                                      </div>
                                      </div>
                                   </div>

                                   <div class="col-md-12">
                                      <button type="button" class="btn btn-primary submit_">Submit</button>
                                   </div>
                               </div>
                               <!-----------BY CONTACTClient END--------->
              </form>
             
                <table id="emailtemplate" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>S.No</th>
                    <th><span style="margin-right:5px;"></span>Template</th>
                    <th><span style="margin-right:5px;"></span>Subject</th>
                    <th><span style="margin-right:5px;"></span>Matter</th>
                    <th><span style="margin-right:5px;"></span>Attach</th>
                    <th><span style="margin-right:5px;"></span>Share</th>
                     
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>
                       <div class="s_number">
                         
                       <div class="bottom_">
                           
                          <div>
                            <span class="span_icon">
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
                    <td>
                       <ul class="preson_detail">
                        <li><a href="#" class="tablelink"><i class="fas fa-check"></i></a></li>
                        <li><a href="#" class="tablelink"><i class="fas fa-times"></i></a></li>
                       </ul>
                      
                    </td>
                    
                    
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
   
    $('#emailtemplate').DataTable({
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