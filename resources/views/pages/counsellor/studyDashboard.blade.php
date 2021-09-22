@extends('includes.postlogin.main')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><span><img src="{{url('postlogin/images/counselling.png')}}"  style="margin-right: 10px;width: 30px;" alt="counselling"></span>Study Dashboard</h1>
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

   <div class="study_test progrestest">
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
             
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                   <div class="col-md-6">
                       <h3 class="progressreport"><i class="fas fa-user-graduate"></i>Study Dashboard</h3>
                   </div>
                   <div class="col-md-6">
                         <div class="test_button">
                          <a href="{{url('study-schedule')}}"><button class="progress-report"><i class="fas fa-user-graduate"></i>Study Organizer</button></a>
                           <a href="{{url('study-test')}}"><button class="progress-report"><span class="spinner-border"></span>Progress Report</button></a>
                           <a href="{{url('career-dashboard')}}"><button class="progress-report careerdashboard"><i class="fas fa-long-arrow-alt-left"></i></span>Career Dashboard</button></a>
                         </div>
                     </div>
                </div>
              <form class="study_lesson">
                            <div class="row">
                   <div class="col-md-3">
                      <div class="form-group">
                  <select class="form-control select2bs4" style="width: 100%;">
                    <option selected="selected">Select course</option>
                    <option>BCA</option>
                    <option>MCA</option>
                  </select>
                </div>
                   </div>
                  
                   <div class="col-md-3">
                      <div class="form-group">
                 
                  <select class="form-control select2bs4" style="width: 100%;">
                    <option selected="selected">Select subject</option>
                    <option>Math</option>
                    <option>English</option>
                    
                  </select>
                </div>
                   </div>
                     <div class="col-md-3">
                      <div class="form-group">
                 
                  <select class="form-control select2bs4" style="width: 100%;">
                    <option selected="selected">Select unit</option>
                    <option>Math</option>
                    <option>English</option>
                    
                  </select>
                </div>
                   </div>
                     <div class="col-md-3">
                      <div class="form-group">
                 
                  <select class="form-control select2bs4" style="width: 100%;">
                    <option selected="selected">Select language</option>
                    <option>Math</option>
                    <option>English</option>
                    
                  </select>
                </div>
                   </div>
                 
                </div>
              </form>
              <div class="table-responsive">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th><span style="margin-right:5px;"><i class="nav-icon fas fa-book-open"></i></span>Lesson</th>
                    <th><span style="margin-right:5px;"><i class="nav-icon fas fa-user-tie"></i></span>iClass</th>
                    <th><span style="margin-right:5px;"><i class="nav-icon fas fa-file-pdf"></i></span>Content</th>
                    <th><span style="margin-right:5px;"><i class="nav-icon fab fa-youtube"></i></span>Video</th>
                    <th><span style="margin-right:5px;"><i class="nav-icon fas fa-file-upload"></i></span>Assignment</th>
                    <th><span style="margin-right:5px;"><i class="nav-icon fas fa-upload"></i></span>Upload</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>
                       <div class="s_number">
                       
                       <div class="bottom_">
                            <p>1.</p>
                       </div>
                        </div>
                    </td>
                    <td><a href="#" class="tablelink">Join Now</a><p>date&time</p></td>
                    <td><a href="#" class="tablelink"><i class="nav-icon fas fa-file-pdf"></i>PDF</a></td>
                    <td>
                     <a href="#" class="tablelink"><i class="nav-icon fas fa-video"></i>Video</a>
                    </td>
                    <td><a href="#" class="tablelink"><i class="nav-icon fas fa-file-pdf"></i>PDF</a><p>Date/time</p></td>
                    <td>
                      <input type="file" hidden name="upload" id="upload">
                      <label for="upload" class="upload_"><i class="nav-icon fas fa-upload"></i></label>
                    </td>
                    
                  
                  </tr>
               
                  </tbody>
                  
                </table>
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
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

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
   $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });
   
    
  })
  
  
</script>
@endsection