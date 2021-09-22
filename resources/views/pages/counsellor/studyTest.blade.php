@extends('includes.postlogin.main')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><span><img src="{{url('postlogin/images/counselling.png')}}"  style="margin-right: 10px;width: 30px;" alt="counselling"></span>Study Test</h1>
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
        <div class="row">
          <div class="col-12">
            <div class="card">
             
              <!-- /.card-header -->
              <div class="card-body">
                 <div class="row">
                    <div class="col-12">
                        <div class="test_button">
                            <button class="test"><i class="fas fa-play"></i>Test</button>
                            <button class="result"><i class="fas fa-poll"></i>Result</button>
                            <button class="efficiency"><i class="fas fa-users-cog"></i>Efficiency</button>
                            <button class="performance"><i class="fas fa-chart-line"></i>Performance</button>
                            <button class="compare"><i class="fas fa-compress-arrows-alt"></i>Compare</button>
                            <button class="ranking"><i class="fas fa-award"></i>Ranking</button>
                            <a href="{{url('study-dashboard')}}"><button class="iclass"><span><i class="fas fa-book-open"></i></span>Online Class</button></a>
                            <a href="{{url('career-dashboard')}}"><button class="progress-report careerdashboard"><i class="fas fa-long-arrow-alt-left"></i></span>Career Dashboard</button></a>
                        </div>
                    </div>
                 </div>
              </div>
          </div> 
      </div>
    </div>
  </div>
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
                   <div class="col-12">
                       <h3 class="progressreport "><i class="nav-icon fas fa-chart-line"></i>Progress Report</h3>
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-3">
                      <div class="form-group">
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Select course</option>
                    <option>BCA</option>
                    <option>MCA</option>
                  </select>
                </div>
                   </div>
                   <div class="col-md-6">
                     
                   </div>
                   <div class="col-md-3">
                      <div class="form-group">
                 
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Select subject</option>
                    <option>Math</option>
                    <option>English</option>
                    
                  </select>
                </div>
                   </div>
                </div>
                <table id="example2" class="table table-bordered table-hover">
                  <thead class="bg-light">
                  <tr>
                    <th><span style="margin-right:5px;"><i class="nav-icon fas fa-book"></i></span>Lesson</th>
                    <th><span style="margin-right:5px;"><i class="nav-icon fas fa-book-open"></i></span>Give Test</th>
                    <th><span style="margin-right:5px;"><i class="nav-icon fas fa-user-edit"></i></span>Attempts</th>
                    <th><span style="margin-right:5px;"><i class="nav-icon fas fa-medal"></i></span>Average Marks</th>
                    <th><span style="margin-right:5px;"><i class="nav-icon far fa-chart-bar"></i></span>Improve</th>
                  </tr>
                  </thead>
                  <tbody>
                 
                  <tr>
                    <td>World of Occupations</td>
                    <td><a href="#" class="give-test"><i class="nav-icon fas fa-play"></i></a></td>
                    <td>4</td>
                    <td>4.5%</td>
                    <td><a href="#" class="give-test"><i class="nav-icon fas fa-users-cog"></i></a></td>
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
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
             
              <!-- /.card-header -->
             <div class="card-body">
              <div class="row">
                   <div class="col-12">
                       <h3 class="progressreport"><img src="images/exam.png">Test Results</h3>
                   </div>
                </div>
              <div class="table-responsive">
                
                 <table class="table table-hover table-bordered">
                    <thead class="bg-light">
                      <tr>
                        <th scope="col">Date/Time</th>
                        <th scope="col">Course</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Lesson</th>
                        <th scope="col">Time Taken</th>
                        <th scope="col">Total Marks</th>
                        <th scope="col">Marks Obtained</th>
                        <th scope="col">Percentage</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">2021-09-04 00:00:00</th>
                        <td>CCP - Certification as Career Professional</td>
                        <td>World of Occupations</td>
                        <td>World of Occupations</td>
                        <td>50 sec.</td>
                        <td>20</td>
                        <td>50</td>
                        <td>30</td>
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
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
             
              <!-- /.card-header -->
             <div class="card-body">
              <div class="row">
                   <div class="col-12">
                       <h3 class="progressreport"><img src="images/test.png">Your Answer Sheet</h3>
                   </div>
                </div>
              <div class="table-responsive">
                
                 <table class="table table-hover table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">Questions</th>
                         <td>1</td>
                         <td>2</td>
                         <td>3</td>
                         <td>4</td>
                         <td>5</td>
                         <td>6</td>
                         <td>7</td>
                         <td>8</td>
                         <td>9</td>
                         <td>10</td>
                         <td>11</td>
                         <td>12</td>
                         <td>13</td>
                         <td>14</td>
                         <td>15</td>
                         <td>16</td>
                         <td>17</td>
                         <td>18</td>
                         <td>19</td>
                         <td>20</td>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">Answers</th>
                        <td><span><i class="fas fa-check"></i></span></td>
                        <td><span><i class="fas fa-times"></i></span></td>
                        <td><span><i class="fas fa-check"></i></span></td>
                        <td><span><i class="fas fa-times"></i></span></td>
                        <td><span><i class="fas fa-check"></i></span></td>
                        <td><span><i class="fas fa-times"></i></span></td>
                        <td><span><i class="fas fa-check"></i></span></td>
                        <td><span><i class="fas fa-times"></i></span></td>
                        <td><span><i class="fas fa-check"></i></span></td>
                        <td><span><i class="fas fa-times"></i></span></td>
                        <td><span><i class="fas fa-check"></i></span></td>
                        <td><span><i class="fas fa-times"></i></span></td>
                        <td><span><i class="fas fa-check"></i></span></td>
                        <td><span><i class="fas fa-times"></i></span></td>
                        <td><span><i class="fas fa-check"></i></span></td>
                        <td><span><i class="fas fa-times"></i></span></td>
                        <td><span><i class="fas fa-check"></i></span></td>
                        <td><span><i class="fas fa-times"></i></span></td>
                        <td><span><i class="fas fa-check"></i></span></td>
                        <td><span><i class="fas fa-times"></i></span></td>
                        
                      </tr>
                      <tr>
                        <th scope="row">Time (in Seconds)</th>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
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
   </div>
   <!-----Study test result---->
   <div class="study_test1 progrestest">
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
             
              <!-- /.card-header -->
             <div class="card-body">
              <div class="row">
                   <div class="col-12">
                       <h3 class="progressreport"><img src="images/exam.png">All Test Results</h3>
                   </div>
                </div>
                 <div class="row">
                   <div class="col-12">
                       <form>
                           <div class="row">
                               <div class="col-md-4">
                                     <div class="form-group">
                                      
                                      <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Course/Exam</option>
                                        <option>Easy</option>
                                        <option>Normal</option>
                                        <option>Dificult</option>
                                        <option>Very Tough</option>
                                        
                                      </select>
                                    </div>
                               </div>
                               <div class="col-md-4">
                                    <div class="form-group">
                                      
                                      <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Select Subject</option>
                                        <option>Easy</option>
                                        <option>Normal</option>
                                        <option>Dificult</option>
                                        <option>Very Tough</option>
                                        
                                      </select>
                                    </div>
                               </div>
                               <div class="col-md-4">
                                       <div class="form-group">
                                        
                                        <select class="select2" multiple="multiple" data-placeholder="Select a State"
                                                style="width: 100%;">
                                          <option>Lesson</option>
                                          <option>Alaska</option>
                                         
                                        </select>
                                      </div>
                               </div>
                           </div>
                       </form>
                   </div>
                </div>
              <div class="table-responsive">
                
                 <table class="table table-hover table-bordered fontsize_15px">
                    <thead class="bg-light">
                      <tr>
                        <th scope="col"><span style="margin-right:5px;"><i class="nav-icon fas fa-sort-numeric-down-alt"></i></span>Test No</th>
                        <th scope="col"><span style="margin-right:5px;"><i class="nav-icon fas fa-calendar-day"></i></span>Date</th>
                        <th scope="col"><span style="margin-right:5px;"><i class="nav-icon fas fa-question"></i></span>Q Attempted</th>
                        <th scope="col"><span style="margin-right:5px;"><i class="nav-icon fas fa-check-double"></i></span>Right Answer</th>
                        <th scope="col"><span style="margin-right:5px;"><i class="nav-icon fas fa-times"></i></span>Wrong Answer</th>
                        <th scope="col"><span style="margin-right:5px;"><i class="nav-icon far fa-clock"></i></span>Time Taken in Minutes & Seconds</th>
                        <th scope="col"><span style="margin-right:5px;"><i class="nav-icon fas fa-star-half-alt"></i></span>Marks Obtained</th>
                        <th scope="col"><span style="margin-right:5px;"><i class="nav-icon fas fa-percentage"></i></span>Percentage</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1.</th>
                        <td>07/09/2021</td>
                        <td>12</td>
                        <td>15</td>
                        <td>11</td>
                        <td>20 sec.</td>
                        <td>0</td>
                        <td>30%</td>
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
    
   </div>
    <!-----Study End test result---->

     <!-----Study performance---->
   <div class="study_test2 progrestest">
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
             
              <!-- /.card-header -->
             <div class="card-body">
              <div class="row">
                   <div class="col-12">
                       <h3 class="progressreport"><i class="fas fa-chart-line"></i>Performance</h3>
                   </div>
                </div>
                 <div class="row">
                   <div class="col-12">
                       <form>
                           <div class="row">
                               <div class="col-md-4">
                                     <div class="form-group">
                                      
                                      <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Course/Exam</option>
                                        <option>Easy</option>
                                        
                                      </select>
                                    </div>
                               </div>
                             
                           </div>
                       </form>
                   </div>
                </div>
                   
             </div>

               <div class="card-body">
                <div class="row">
                  <!-- /.col -->
                  <div class="col-12">
                    <p class="text-center">
                      <strong>Average Marks in Percentage</strong>
                    </p>

                    <div class="progress-group">
                      Complete Purchase
                      <span class="float-right"><b>80%</b>/100%</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-primary" style="width: 80%"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->

                    <div class="progress-group">
                      Complete Purchase
                      <span class="float-right"><b>75%</b>/100%</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-danger" style="width: 75%"></div>
                      </div>
                    </div>

                    <!-- /.progress-group -->
                    <div class="progress-group">
                      <span class="progress-text">Visit Premium Page</span>
                      <span class="float-right"><b>60%</b>/100%</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-success" style="width: 60%"></div>
                      </div>
                    </div>

                    <!-- /.progress-group -->
                    <div class="progress-group">
                      Send Inquiries
                      <span class="float-right"><b>50%</b>/100%</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-warning" style="width: 50%"></div>
                      </div>
                    </div>
                     <!-- /.progress-group -->
                    <div class="progress-group">
                      Send Inquiries
                      <span class="float-right"><b>30%</b>/100%</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-danger" style="width: 30%"></div>
                      </div>
                    </div>
                     <!-- /.progress-group -->
                    <div class="progress-group">
                      Send Inquiries
                      <span class="float-right"><b>10%</b>/100%</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-warning" style="width: 10%"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->
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
    
   </div>
    <!-----Study end performance---->

     <!-----Study Efficiency---->
   <div class="study_test3 progrestest">
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
             
              <!-- /.card-header -->
             <div class="card-body">
              <div class="row">
                   <div class="col-12">
                       <h3 class="progressreport"><i class="fas fa-chart-line"></i>Subject Progress</h3>
                   </div>
                </div>
                 <div class="row">
                   <div class="col-12">
                       <form>
                           <div class="row">
                               <div class="col-md-6">
                                     <div class="form-group">
                                      
                                      <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Course/Exam</option>
                                        <option>Easy</option>
                                        
                                      </select>
                                    </div>
                               </div>
                                <div class="col-md-6">
                                     <div class="form-group">
                                      
                                      <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Subject</option>
                                        <option>Easy</option>
                                        
                                      </select>
                                    </div>
                               </div>
                           </div>
                       </form>
                   </div>
                </div>
                   
             </div>

                              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                 
                      <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Time view</h3>
                  
                </div>
              </div>
              <div class="card-body">
               
                <!-- /.d-flex -->

                <div class="position-relative mb-4">
                  <canvas id="visitors-chart" height="200"></canvas>
                </div>
<!-- 
                <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> This Week
                  </span>

                  <span>
                    <i class="fas fa-square text-gray"></i> Last Week
                  </span>
                </div> -->
              </div>
            </div>

                  </div>
                          <div class="col-md-6">
                 
                      <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Mark view</h3>
                  
                </div>
              </div>
              <div class="card-body">
                
                <!-- /.d-flex -->

                <div class="position-relative mb-4">
                  <canvas id="visitors-chart1" height="200"></canvas>
                </div>

                <!-- <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> This Week
                  </span>

                  <span>
                    <i class="fas fa-square text-gray"></i> Last Week
                  </span>
                </div> -->
              </div>
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
      </div>
      <!-- /.container-fluid -->

    </section>
    
   </div>
    <!-----Study end Efficiency---->

    <!-----Study Compare---->
   <div class="study_test4 progrestest">
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
             
              <!-- /.card-header -->
             <div class="card-body">
              <div class="row">
                   <div class="col-12">
                       <h3 class="progressreport"><i class="fas fa-compress-arrows-alt"></i>Competitors</h3>
                   </div>
                </div>
                 <div class="row">
                   <div class="col-12">
                       <form>
                           <div class="row">
                               <div class="col-md-6">
                                     <div class="form-group">
                                      
                                      <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Course/Exam</option>
                                        <option>Easy</option>
                                        
                                      </select>
                                    </div>
                               </div>
                                <div class="col-md-6">
                                     <div class="form-group">
                                      
                                      <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Subject</option>
                                        <option>Easy</option>
                                        
                                      </select>
                                    </div>
                               </div>
                                <div class="col-md-6">
                                     <div class="form-group">
                                      
                                      <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Lesson</option>
                                        <option>Easy</option>
                                        
                                      </select>
                                    </div>
                               </div>
                                <div class="col-md-6">
                                     <div class="form-group">
                                     <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email Or Mobile">
                                    </div>
                               </div>
                               <div class="col-12">
                                   <button class="button_add_"><i class="fas fa-plus"></i>Add</button><span>Max 5</span>
                               </div>
                           </div>
                       </form>
                   </div>
                   
                </div>
                <div class="row py-5 justify-content-center">
                        <div class="col-md-2">
                            <div class="student_select">
                                <span><i class="fas fa-user-graduate"></i></span>
                                <p>Akash Bhardwaj</p>
                                  <div class="icheck-primary d-inline">
                                  <input type="checkbox" id="checkboxPrimary2">
                                  <label for="checkboxPrimary2">
                                    Select
                                  </label>
                                </div>
                            </div>
                        </div>
                           <div class="col-md-2">
                            <div class="student_select">
                                <span><i class="fas fa-user-graduate"></i></span>
                                <p>Akash Bhardwaj</p>
                                  <div class="icheck-primary d-inline">
                                  <input type="checkbox" id="checkboxPrimary3">
                                  <label for="checkboxPrimary3">
                                    Select
                                  </label>
                                </div>
                            </div>
                        </div>
                           <div class="col-md-2">
                            <div class="student_select">
                                <span><i class="fas fa-user-graduate"></i></span>
                                <p>Akash Bhardwaj</p>
                                  <div class="icheck-primary d-inline">
                                  <input type="checkbox" id="checkboxPrimary4">
                                  <label for="checkboxPrimary4">
                                    Select
                                  </label>
                                </div>
                            </div>
                        </div>
                           <div class="col-md-2">
                            <div class="student_select">
                                <span><i class="fas fa-user-graduate"></i></span>
                                <p>Akash Bhardwaj</p>
                                  <div class="icheck-primary d-inline">
                                  <input type="checkbox" id="checkboxPrimary5">
                                  <label for="checkboxPrimary5">
                                    Select
                                  </label>
                                </div>
                            </div>
                        </div>
                           <div class="col-md-2">
                            <div class="student_select">
                                <span><i class="fas fa-user-graduate"></i></span>
                                <p>Akash Bhardwaj</p>
                                  <div class="icheck-primary d-inline">
                                  <input type="checkbox" id="checkboxPrimary6">
                                  <label for="checkboxPrimary6">
                                    Select
                                  </label>
                                </div>
                            </div>
                        </div>

                   </div>
                   <div style="justify-content: center; display: flex;align-items: center;">
                     <button class="com"><i class="fas fa-compress-arrows-alt"></i>Compare</button>
                   </div>
                   
             </div>
                
               <div class="card-body">
                <div class="row">
                  <!-- /.col -->
                  <div class="col-12">
                    <p class="text-center">
                      <strong>Average Marks in Percentage</strong>
                    </p>

                    <div class="progress-group">
                      Akash Bhardwaj
                      <span class="float-right"><b>80%</b>/100%</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-primary" style="width: 80%"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->

                    <div class="progress-group">
                      Akash Bhardwaj
                      <span class="float-right"><b>75%</b>/100%</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-danger" style="width: 75%"></div>
                      </div>
                    </div>

                    <!-- /.progress-group -->
                    <div class="progress-group">
                      <span class="progress-text">Akash Bhardwaj</span>
                      <span class="float-right"><b>60%</b>/100%</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-success" style="width: 60%"></div>
                      </div>
                    </div>

                    <!-- /.progress-group -->
                    <div class="progress-group">
                      Akash Bhardwaj
                      <span class="float-right"><b>50%</b>/100%</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-warning" style="width: 50%"></div>
                      </div>
                    </div>
                     <!-- /.progress-group -->
                    <div class="progress-group">
                      Akash Bhardwaj
                      <span class="float-right"><b>30%</b>/100%</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-danger" style="width: 30%"></div>
                      </div>
                    </div>
                     <!-- /.progress-group -->
                    <div class="progress-group">
                      Akash Bhardwaj
                      <span class="float-right"><b>10%</b>/100%</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-warning" style="width: 10%"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->
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
    
   </div>
    <!-----Study end Compare---->

    <!-----Study Ranking---->
   <div class="study_test5 progrestest">
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
             
              <!-- /.card-header -->
             <div class="card-body">
              <div class="row">
                   <div class="col-12">
                       <h3 class="progressreport"><i class="fas fa-award"></i>Ranking</h3>
                   </div>
                </div>
                 <div class="row">
                   <div class="col-12">
                       <form>
                           <div class="row">
                               <div class="col-md-6">
                                     <div class="form-group">
                                      
                                      <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Course/Exam</option>
                                        <option>Easy</option>
                                        
                                      </select>
                                    </div>
                               </div>
                                <div class="col-md-6">
                                     <div class="form-group">
                                      
                                      <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Subject</option>
                                        <option>Easy</option>
                                        
                                      </select>
                                    </div>
                               </div>
                               
                           </div>
                       </form>
                   </div>
                   
                </div>
                
                   
             </div>
           
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->

    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
             
              <!-- /.card-header -->
             <div class="card-body">
              <div class="row">
                   <div class="col-12">
                       <h3 class="progressreport"><i class="fas fa-award"></i>Your Rank</h3>
                   </div>
                </div>
              <div class="table-responsive">
                
                 <table class="table table-hover table-bordered">
                    <thead class="bg-light">
                      <tr>
                        <th scope="col"><span style="margin-right:5px;"><i class="nav-icon fas fa-globe-europe"></i></span>Country</th>
                        <th scope="col"><span style="margin-right:5px;"><i class="nav-icon fas fa-map-marked-alt"></i></span>State</th>
                        <th scope="col"><span style="margin-right:5px;"><i class="nav-icon fas fa-map-signs"></i></span>District</th>
                        <th scope="col"><span style="margin-right:5px;"><i class="nav-icon fas fa-chart-area"></i></span>Area</th>
                        <th scope="col"><span style="margin-right:5px;"><i class="nav-icon fas fa-user-graduate"></i></span>Class</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">India</th>
                        <td>Delhi</td>
                        <td>Delhi</td>
                        <td>delhi sector 5</td>
                        <td>bca</td>
                        
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

  </div>
<!-- /.content-wrapper -->

@endsection
@section('script')
<script>
  $(function () {
   
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": false,
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
    $('.select2').select2({
      theme: 'bootstrap4'
    })

   
   
    
  })
  
  
</script>
<script>
   $(document).ready(function(){
         $('.study_test1').hide();
         $('.study_test2').hide();
         $('.study_test3').hide();
         $('.study_test4').hide();
         $('.study_test5').hide();
        $('.test').click(function() {
           $('.study_test').show(500);
           $('.study_test1').hide(500);
           $('.study_test2').hide(500);
           $('.study_test3').hide(500);
           $('.study_test4').hide(500);
           $('.study_test5').hide(500);
        })
        $('.result').click(function(){
          $('.study_test').hide(500);
          $('.study_test1').show(500);
          $('.study_test2').hide(500);
          $('.study_test3').hide(500);
          $('.study_test4').hide(500);
          $('.study_test5').hide(500);
        })
        $('.performance').click(function(){
          $('.study_test').hide(500);
          $('.study_test1').hide(500);
          $('.study_test2').show(500);
          $('.study_test3').hide(500);
          $('.study_test4').hide(500);
          $('.study_test5').hide(500);
        })
          $('.efficiency').click(function(){
          $('.study_test').hide(500);
          $('.study_test1').hide(500);
          $('.study_test2').hide(500);
          $('.study_test3').show(500);
          $('.study_test4').hide(500);
          $('.study_test5').hide(500);
        })
          $('.compare').click(function(){
          $('.study_test').hide(500);
          $('.study_test1').hide(500);
          $('.study_test2').hide(500);
          $('.study_test3').hide(500);
          $('.study_test4').show(500);
          $('.study_test5').hide(500);
        })
           $('.ranking').click(function(){
          $('.study_test').hide(500);
          $('.study_test1').hide(500);
          $('.study_test2').hide(500);
          $('.study_test3').hide(500);
          $('.study_test4').hide(500);
          $('.study_test5').show(500);
        })
        
        
      })

</script>
@endsection