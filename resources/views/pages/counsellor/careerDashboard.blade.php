@extends('includes.postlogin.main')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- /.control-sidebar -->
      <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><span><img src="{{url('postlogin/images/counselling.png')}}"  style="margin-right: 10px;width: 30px;" alt="counselling"></span>Master Table</h1>
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
 <section class="content">
      <div class="container-fluid">
       
               <div class="row py-5">
                     <div class="col-md-6">
                         <h4 class=" schedule-heading"><i class="fas fa-clipboard-list"></i>Create Dashboard</h4>
                     </div>
                     <div class="col-md-6">
                         <div class="test_button">
                           <a href="{{url('study-dashboard')}}"><button class="iclass"><span><i class="fas fa-book-open"></i></span>Online Class</button></a>
                           <a href="{{url('study-test')}}"><button class="progress-report"><span class="spinner-border"></span>Progress Report</button></a>
                         </div>
                     </div>
                 </div>
        <div class="row">

          <!--Smart aim---->
          <div class="col-sm-12 col-md-6">
            <div class="card">
              <div class="card-header bg-success">
                <h5 class="text-center ">SMART Aim</h5>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <!-- /.col -->
                  <div class="col-md-12">
                    <p class="text-center pt-2">
                      <strong>CIVIL SERVICES</strong>
                    </p>

                    <div class="progress-group">
                     Age
                      <span class="float-right"><b>0</b>/35</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-success" style="width: 80%"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->

                    <div class="progress-group">
                      Qualification Step
                      <span class="float-right"><b>3</b>/4</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-warning" style="width: 75%"></div>
                      </div>
                    </div>
                    <p class="text-center pt-2">
                      <strong>RESEARCH/FELLOWSHIPS/DOCTORATE</strong>
                    </p>
                    <!-- /.progress-group -->
                    <div class="progress-group">
                      <span class="progress-text">Age</span>
                      <span class="float-right"><b>0</b>/40</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-success" style="width: 60%"></div>
                      </div>
                    </div>

                    <!-- /.progress-group -->
                    <div class="progress-group">
                      Qualification Step
                      <span class="float-right"><b>2</b>/5</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-warning" style="width: 50%"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->
                    <p class="text-center pt-2">
                      <strong>TEACHER</strong>
                    </p>
                    
                     <div class="progress-group">
                      <span class="progress-text">Age</span>
                      <span class="float-right"><b>0</b>/50</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-success" style="width: 60%"></div>
                      </div>
                    </div>

                    <!-- /.progress-group -->
                    <div class="progress-group">
                      Qualification Step
                      <span class="float-right"><b>5</b>/10</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-warning" style="width: 50%"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 text-right">
                     <a href="career-student-aim.php" class="plus_button">+</a>
                   </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
             
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!---smart end--->
          <!----Qualification--->
                 <div class="col-md-6">
            <div class="card">
              <div class="card-header bg-success">
                <h5 class="text-center ">Education Training Pathway</h5>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                   <div class="col-12">
                 <table id="education" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Education & Training</th>
                    <th>Institute</th>
                    <th>Year</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>B.ed</td>
                    <td>mdu
                    </td>
                    <td>2020</td>
                  </tr>
                    <tr>
                    <td>B.ed</td>
                    <td>mdu
                    </td>
                    <td>2020</td>
                  </tr>
                    <tr>
                    <td>B.ed</td>
                    <td>mdu
                    </td>
                    <td>2020</td>
                  </tr>
                    <tr>
                    <td>B.ed</td>
                    <td>mdu
                    </td>
                    <td>2020</td>
                  </tr>
                    <tr>
                    <td>B.ed</td>
                    <td>mdu
                    </td>
                    <td>2020</td>
                  </tr>
                    <tr>
                    <td>B.ed</td>
                    <td>mdu
                    </td>
                    <td>2020</td>
                  </tr>

                </table>
                   </div>
                   <div class="col-12 text-right">
                     <button class="plus_button">+</button>
                   </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
             
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!--Qualification end----->
          <!---Career Aptitude--->
            <div class="col-md-6">
            <div class="card">
              <div class="card-header bg-success">
                <h5 class="text-center ">Career Aptitude</h5>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                   <div class="col-12">
                <div class="d-flex">
             
                </div>
                <!-- /.d-flex -->

                <figure class="highcharts-figure">
          <div id="container88"></div>
        </figure>

                <div class="d-flex flex-row justify-content-center">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> Career Aptitude
                  </span>
                </div>
                   </div>
                   <div class="col-12 text-right">
                     <button class="plus_button">+</button>
                   </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
             
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!---Career Aptitude end--->
          <!---Work Attitude-->
               <div class="col-md-6">
            <div class="card">
              <div class="card-header bg-success">
                <h5 class="text-center ">Work Attitude</h5>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                   <div class="col-12">
                <div class="d-flex">
             
                </div>
                <!-- /.d-flex -->

                <figure class="highcharts-figure">
          <div id="container"></div>
        </figure>

                <div class="d-flex flex-row justify-content-center">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> Work Attitude
                  </span>
                </div>
                   </div>
                   <div class="col-12 text-right">
                     <button class="plus_button">+</button>
                   </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
             
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!---Work Attitude end--->
          <!--Innate Ability--->
                       <div class="col-md-6">
            <div class="card">
              <div class="card-header bg-success">
                <h5 class="text-center "> Innate Ability</h5>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                   <div class="col-12">
                <div class="d-flex">
             
                </div>
                <!-- /.d-flex -->

              <figure class="highcharts-figure">
        <div id="container0"></div>
       
      </figure>
                <div class="d-flex flex-row justify-content-center">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> Innate Ability
                  </span>
                </div>
                   </div>
                   <div class="col-12 text-right">
                     <button class="plus_button">+</button>
                   </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
             
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!--Innate Ability end--->
          <!--Learning Style-->
                       <div class="col-md-6">
            <div class="card">
              <div class="card-header bg-success">
                <h5 class="text-center "> Learning Style</h5>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                   <div class="col-12">
                <div class="d-flex">
             
                </div>
                <!-- /.d-flex -->

              <figure class="highcharts-figure">
                <div id="container2"></div>
               
              </figure>
                <div class="d-flex flex-row justify-content-center">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> Learning Style
                  </span>
                </div>
                   </div>
                   <div class="col-12 text-right">
                     <button class="plus_button">+</button>
                   </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
             
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!--Learning Style end--->
          <!--Past Performance--->
                          <div class="col-md-6">
            <div class="card">
              <div class="card-header bg-success">
                <h5 class="text-center "> Past Performance</h5>
                
              </div> 
              <div class="row pt-3 px-3">
                 <div class="col-md-6">
                   <button class="chart_button class_btn">Class</button>
                   
                 </div>
                 <div class="col-md-6">
                   
                   <button class="chart_button subject_btn">Subject</button>
                 </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                   <div class="col-12">
                <div class="d-flex">
             
                </div>
                <!-- /.d-flex -->

              <figure class="highcharts-figure">
        <div id="container3"></div>
        <div id="container4"></div>
       
      </figure>
                <div class="d-flex flex-row justify-content-center">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> Past Performance
                  </span>
                </div>
                   </div>
                   <div class="col-12 text-right">
                     <button class="plus_button">+</button>
                   </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
             
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!--Past Performance end-->
          <!----Study progress--->
                            <div class="col-md-6">
            <div class="card">
              <div class="card-header bg-success">
                <h5 class="text-center "> Study progress</h5>
                
              </div> 
            
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                <div class="col-12 text-center">
                <div class="">
                   <h5 class="text-center ">Create
                 your Study Scheduler</h5>
                </div>
                <!-- /.d-flex -->

                </div>
                  <div class="col-12">
                    <div class="imgbox_Scheduler">
                       <img src="images/current-perform.png" width="100%" alt="Study progress">
                    </div>
                  </div> 
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
             
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!--Study progress end--->
          <!---Employability Skills--->
                 <div class="col-md-6">
            <div class="card">
              <div class="card-header bg-success">
                <h5 class="text-center ">Employability Skills</h5>
                
              </div> 
            
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                <div class="col-12 text-center">
                <div class="">
                   <h5 class="text-center ">Test 
                 your Employability Skills</h5>
                </div>
                <!-- /.d-flex -->

                </div>
                  <div class="col-12 text-center">
                    <div class="imgbox_Employability">
                       <img src="images/employ.png" alt="Study progress">
                    </div>
                  </div>
                  <div class="col-12 text-right">
                     <button class="plus_button">+</button>
                   </div> 
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
             
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!--Employability Skills end--->
          <!-----Achievements--->
              <div class="col-md-6">
            <div class="card">
              <div class="card-header bg-success">
                <h5 class="text-center "> Achievements</h5>
                
              </div> 
            
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                <div class="col-md-6">
                 <img src="images/junior.png" width="100%">
                </div>
                 <div class="col-md-6">
                   <img src="images/student.png" width="100%">
                </div>
                 <div class="col-md-6">
                 <img src="images/collage.png" width="100%">
                </div> 
                </div>
                
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
             
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!---Achievements end--->
          <!---Career Graph------->
              <div class="col-md-6">
            <div class="card">
              <div class="card-header bg-success">
                <h5 class="text-center ">Career Graph</h5>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                   <div class="col-12">
                <div class="d-flex">
             
                </div>
                <!-- /.d-flex -->

             
                                <figure class="highcharts-figure">
                <div id="container-speed" class="chart-container">
                  
                </div>
              </figure>
                   </div>
                   <div class="col-12 text-right">
                     <button class="plus_button">+</button>
                   </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
             
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-----Career Graph end--->
          <!---Profile--->
              <div class="col-md-6">
            <div class="card">
              <div class="card-header bg-success">
                <h5 class="text-center ">Profile</h5>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                    <div class="profile_button">
                  <button>Profile</button><button>Position</button><button>Skill</button><button>Education</button><button>Experience</button>
                 </div>
                  </div>
                   <div class="col-12 pt-2">
                 <table id="education0" class="table table-bordered table-hover educat active">
                  <thead>
                  <tr>
                    <th>Profile</th>
                    <td>
                      <div class="top_">
                          <div class="image image_">
                            <img src="https://margdarshak.org/public/uploads/user_img/RP.jpg" class="img-circle elevation-2"  alt="User Image">

                       </div>
                          </div>
                    </td>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <th>DOB</th>
                    <td>1998</td>
                  </tr>
                    <tr>
                  <tr>
                    <th>Name</th>
                    <td>Ram</td>
                  </tr>
                     <tr>
                    <th>Mobile</th>
                   <td>9999999999</td>
                  </tr>
                  <tr>
                    <th>Language</th>
                    <td>hindi</td>
                  </tr>
                </table>
                   <table id="education1" class="table table-bordered table-hover educat">
                  <thead>
                  <tr>
                    <th>Profile</th>
                    <td>
                      <div class="top_">
                          <div class="image image_">
                            <img src="https://margdarshak.org/public/uploads/user_img/RP.jpg" class="img-circle elevation-2"  alt="User Image">

                       </div>
                          </div>
                    </td>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <th>DOB</th>
                    <td>1998</td>
                  </tr>
                    <tr>
                  <tr>
                    <th>Name</th>
                    <td>Ram</td>
                  </tr>
                     
                </table>
                   </div>
                   <div class="col-12 text-right">
                     <button class="plus_button">+</button>
                   </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
             
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!---Profile end-->
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
        
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>

</div>
<!-- /.content-wrapper -->

@endsection
@section('script')
<script>
  $(function () {
   
    $('#education,#education0').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": false,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
  $(function () {
   
    $('#container3').show();
    $('#container4').hide();
    $('.class_btn').click(function(){
         $('#container3').show(500);
            $('#container4').hide(500);

    })
     $('.subject_btn').click(function(){
         $('#container3').hide(500);
            $('#container4').show(500);

    })
  });
</script>

<script>
  var educat = document.querySelectorAll('.educat');
  var buttons = document.querySelectorAll('.profile_button button');
  for (var i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener('click',function() {
      for (var i = 0; i < buttons.length; i++) {
        buttons[i].classList.remove('active');
        this.classList.add('active');
      }
      for (var i = 0; i < educat.length; i++) {
        educat[i].classList.toggle('active');
        
      }

    })
  }
  
  
 </script>
@endsection