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
        <div class="row">
          <div class="col-12">
            <div class="card">
             
              <!-- /.card-header -->
              <div class="card-body">
                 <div class="row">
                     <div class="col-12">
                        <div class=" test_button  btn_0">
                            <button class="iclass_"><i class="fas fa-user-graduate"></i>Online Class</button>
                            <button class="content_12"><i class="fas fa-book-reader"></i>Study Content</button>
                            
                        </div>
                    </div>
                      
                
                 </div>
              </div>

          </div> 
      </div>
    </div>
  </div>
  </section>
  <section class="content btn_1">
     <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
             
              <!-- /.card-header -->
              <div class="card-body">
                 <div class="row">
                    
                       <div class="col-12 ">
                        <div class="test_button ">
                            <button class="schedule_1"><i class="fas fa-book-reader"></i>Schedule</button>
                            <button class="studentlesson"><i class="fas fa-book-reader"></i>Student</button>
                            
                            
                        </div>
                    </div>
                    <div class="col-12 btn_2">
                        <div class="test_button ">
                            <button class="study"><i class="fas fa-user-graduate"></i>Study</button>
                            <button class="studylesson"><i class="fas fa-book-reader"></i>Study Lesson</button>
                            <button class="studymcq"><i class="fas fa-chalkboard-teacher"></i>Study MQC</button>
                            <button class="studyactivity"><i class="fas fa-universal-access"></i>Study Activity</button>
                            <button class="studyprectical"><i class="fas fa-chart-area"></i>Study Prectical</button>
                            <button class="skillmcq"><i class="fas fa-chart-bar"></i>Skill MQC</button>
                            <button class="skillevaluator"><i class="fas fa-award"></i>Skill Evaluator</button>
                        </div>
                    </div>
                 </div>
              </div>

          </div> 
      </div>
    </div>
  </div>
  </section>
  <section class="content btn_2">
     <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
             
              <!-- /.card-header -->
              <div class="card-body">
                 <div class="row">
                   
                    <div class="col-12 btn_2">
                        <div class="test_button ">
                            <button class="study"><i class="fas fa-user-graduate"></i>Study</button>
                            <button class="studylesson"><i class="fas fa-book-reader"></i>Study Lesson</button>
                            <button class="studymcq"><i class="fas fa-chalkboard-teacher"></i>Study MQC</button>
                            <button class="studyactivity"><i class="fas fa-universal-access"></i>Study Activity</button>
                            <button class="studyprectical"><i class="fas fa-chart-area"></i>Study Prectical</button>
                            <button class="skillmcq"><i class="fas fa-chart-bar"></i>Skill MQC</button>
                            <button class="skillevaluator"><i class="fas fa-award"></i>Skill Evaluator</button>
                        </div>
                    </div>
                 </div>
              </div>

          </div> 
      </div>
    </div>
  </div>
  </section>

   <div class="teacher-sch1">
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
             
              <!-- /.card-header -->
               <div class="card-body">
                 <div class="row">
                  <div class="col-12">
                       <h3 class="progressreport text-center"><i class="fas fa-user-graduate"></i>Study</h3>
                   </div>
                    <div class="col-12">
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
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Marks Total">
                      </div>
                </div>
                   </div>
                     <div class="col-md-3">
                      <div class="form-group">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Marks Correct">
                      </div>
                   </div>
                   </div>
                   <div class="col-md-3">
                      <div class="form-group">
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="Marks Wrong">
                      </div>
                      </div>
                   </div>
                       <div class="col-md-3">
                      <div class="form-group">
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="Total Question">
                      </div>
                      </div>
                   </div>
                     <div class="col-md-3">
                      <div class="form-group">
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="Total Time">
                      </div>
                      </div>
                   </div>
                     <div class="col-md-3">
                      <div class="form-group">
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="Marks Passing">
                      </div>
                      </div>
                   </div>
                   <div class="col-12">
                      <textarea id="summernoteaa">
                        Place <em>some</em> <u>text</u> <strong>here</strong>
                      </textarea>
                   </div>
                   <div class="col-12 py-2">
                        <button class="check">Submit<span><i class="fas fa-arrow-right"></i></span></button>
                     </div>
                </div>
              </form>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Course</th>
                    <th>Subject</th>
                    <th>Marks total</th>
                    <th>Marks pass</th>
                    <th>Marks correct <br>Marks wrong</th>
                    <th>Total question</th>
                    <th>Total time</th>
                    <th>Syllabus</th>
                    <th>Video</th>
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
                    <td>
                       BCA
                    </td>
                    <td>C Language</td>
                    <td>100</td>
                    <td>60</td>
                    <td>12/20</td>
                     <td>20</td>
                     <td>30 min</td>
                     <td>BCA</td>
                     <td><a href="#" class="tablelink"><i class="nav-icon fas fa-video"></i>Video</a></td>
                  </tr>
                  <tr>
                    <td>
                        <div class="s_number">
                       
                       <div class="bottom_">
                           
                          <div>
                            <span class="span_icon">
                              <p>2.</p>
                            <a href="#" data-toggle="dropdown" class="dot" aria-haspopup="true" aria-expanded="false"><i class="nav-icon fas fa-ellipsis-h"></i>&nbsp;<i class="fas fa-chevron-down"></i></a>
                           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item dro" href="#">Edit<i class="nav-icon fas fa-edit"></i></a>
                                
                                
                              </div>
                          </span>
                      </div>
                       </div>
                        </div>
                    </td>
                    <td>
                       BCA
                    </td>
                    <td>C Language</td>
                    <td>100</td>
                    <td>60</td>
                    <td>15/20</td>
                     <td>20</td>
                     <td>30 min</td>
                     <td>BCA</td>
                     <td><a href="#" class="tablelink"><i class="nav-icon fas fa-video"></i>Video</a></td>
                  </tr>
                   
                  </tbody>
                  
                </table>
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

    <!-- Main content -->
   </div>


<!----STUDY LESSON----->
   <div class="teacher-sch2">
      <section class="content">
     <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
             
              <!-- /.card-header -->
              <div class="card-body">
                 <div class="row">
                  <div class="col-12">
                       <h3 class="progressreport text-center"><i class="fas fa-book-reader"></i>Study Lesson</h3>
                   </div>
                    <div class="col-12">
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
                   <div class="col-md-3">
                      <div class="form-group">
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="Lesson">
                      </div>
                      </div>
                   </div>
                       <div class="col-md-3">
                      <div class="form-group">
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="Lesson Rank">
                      </div>
                      </div>
                   </div>
                     <div class="col-md-3">
                      <div class="form-group">
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="Study Time">
                      </div>
                      </div>
                   </div>
                     <div class="col-md-3">
                      <div class="form-group">
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="Marks">
                      </div>
                      </div>
                   </div>
                   <div class="col-12">
                      <textarea id="summernoteaa1">
                        Place <em>some</em> <u>text</u> <strong>here</strong>
                      </textarea>
                   </div>
                   <div class="col-md-3 py-2">
                       <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Doc url</label>
                    </div>
                   </div>
                   <div class="col-md-3 py-2">
                     <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile1">
                      <label class="custom-file-label" for="customFile1">Video url</label>
                    </div>
                   </div>
                   <div class="col-md-6 py-2">
                     
                   </div>
                   <div class="col-12 py-2">
                        <button class="check">Submit<span><i class="fas fa-arrow-right"></i></span></button>
                     </div>
                </div>
              </form>
                <table id="example11" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Lesson</th>
                    <th>Rank</th>
                    <th>Study time</th>
                    <th>Marks</th>
                    <th>Information</th>
                    
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
                    <td>
                       Scholarships and Funding
                    </td>
                    <td>2</td>
                    <td>100</td>
                    <td>60</td>
                    <td>Scholarships & Funding for study in India and abroad. Career Awareness Programme (CAP), CAP – Contests. Getting funds from financial institutions.</td>
                     
                  </tr>
                  <tr>
                    <td>
                        <div class="s_number">
                       
                       <div class="bottom_">
                           
                          <div>
                            <span class="span_icon">
                              <p>2.</p>
                            <a href="#" data-toggle="dropdown" class="dot" aria-haspopup="true" aria-expanded="false"><i class="nav-icon fas fa-ellipsis-h"></i>&nbsp;<i class="fas fa-chevron-down"></i></a>
                           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item dro" href="#">Edit<i class="nav-icon fas fa-edit"></i></a>
                                
                                
                              </div>
                          </span>
                      </div>
                       </div>
                        </div>
                    </td>
                    <td>
                       Scholarships and Funding
                    </td>
                    <td>2</td>
                    <td>100</td>
                    <td>60</td>
                    <td>Scholarships & Funding for study in India and abroad. Career Awareness Programme (CAP), CAP – Contests. Getting funds from financial institutions.</td>
                     
                  </tr>
                   
                  </tbody>
                  
                </table>
                    </div>
                 </div>
              </div>
          </div> 
      </div>
    </div>
  </div>
  </section>
  </div>
  <!----STUDY END LESSON----->

    <!----Study Mcq----->
   <div class="teacher-sch3">
      <section class="content">
     <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
             
              <!-- /.card-header -->
              <div class="card-body">
                 <div class="row">
                  <div class="col-12">
                       <h3 class="progressreport text-center"><i class="fas fa-chalkboard-teacher"></i>Study Mcq</h3>
                   </div>
                    <div class="col-12">
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
                   
                   <div class="col-12">
                    <label>Question</label>
                      <textarea id="question">
                        
                      </textarea>
                   </div>
                      <div class="col-12">
                        <label>Option 1.</label>
                      <textarea id="option1">
                        
                      </textarea>
                   </div>
                     <div class="col-12">
                      <label>Option 2.</label>
                      <textarea id="option2">
                        
                      </textarea>
                   </div>
                     <div class="col-12">
                      <label>Option 3.</label>
                      <textarea id="option3">
                        
                      </textarea>
                   </div>
                     <div class="col-12">
                      <label>Option 4.</label>
                      <textarea id="option4">
                        
                      </textarea>
                   </div>
                   <div class="col-12">
                      <label>Detail</label>
                      <textarea id="detail_">
                        
                      </textarea>
                   </div>
                   <div class="col-md-6 py-2">
                     <label>Weightage</label>
                     <div class="form-group" style="display: flex;flex-wrap: wrap;">
                        <div class="custom-control custom-radio mx-2">
                          <input class="custom-control-input" type="radio" id="easy" name="customRadio">
                          <label for="easy" class="custom-control-label">Easy</label>
                        </div>
                        <div class="custom-control custom-radio mx-2">
                          <input class="custom-control-input" type="radio" id="normal" name="customRadio">
                          <label for="normal" class="custom-control-label">Normal</label>
                        </div>
                        <div class="custom-control custom-radio mx-2">
                          <input class="custom-control-input" type="radio" id="difficult" name="customRadio">
                          <label for="difficult" class="custom-control-label">Difficult</label>
                        </div>
                        <div class="custom-control custom-radio mx-2">
                          <input class="custom-control-input" type="radio" id="verytough" name="customRadio">
                          <label for="verytough" class="custom-control-label">Very Tough</label>
                        </div>
                      </div>
                   </div>
                     <div class="col-md-6 py-2">
                       <label>Answer</label>
                       <div class="form-group" style="display: flex;flex-wrap: wrap;">
                        <div class="custom-control custom-radio mx-2">
                          <input class="custom-control-input" type="radio" id="a" name="customRadio">
                          <label for="a" class="custom-control-label">A</label>
                        </div>
                        <div class="custom-control custom-radio mx-2">
                          <input class="custom-control-input" type="radio" id="b" name="customRadio">
                          <label for="b" class="custom-control-label">B</label>
                        </div>
                        <div class="custom-control custom-radio mx-2">
                          <input class="custom-control-input" type="radio" id="c" name="customRadio">
                          <label for="c" class="custom-control-label">C</label>
                        </div>
                        <div class="custom-control custom-radio mx-2">
                          <input class="custom-control-input" type="radio" id="d" name="customRadio">
                          <label for="d" class="custom-control-label">D</label>
                        </div>
                      </div>
                   </div>
                   <div class="col-12 py-2">
                        <button class="check">Submit<span><i class="fas fa-arrow-right"></i></span></button>
                     </div>
                </div>
              </form>
                <table id="example12" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Question</th>
                    <th>Option1</th>
                    <th>Option2</th>
                    <th>Option3</th>
                    <th>Option4</th>
                    <th>Explain</th>
                    <th>Correct</th>
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
                    <td>
                       Example of green jobs are:
                    </td>
                    <td>Renewable Energy Jobs</td>
                    <td>Bicycle repair</td>
                    <td>Organic farmer</td>
                    <td>All the above are true</td>
                    <td></td>
                    <td>C</td>
                     
                  </tr>
                  <tr>
                    <td>
                        <div class="s_number">
                       
                       <div class="bottom_">
                           
                          <div>
                            <span class="span_icon">
                              <p>2.</p>
                            <a href="#" data-toggle="dropdown" class="dot" aria-haspopup="true" aria-expanded="false"><i class="nav-icon fas fa-ellipsis-h"></i>&nbsp;<i class="fas fa-chevron-down"></i></a>
                           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item dro" href="#">Edit<i class="nav-icon fas fa-edit"></i></a>
                                
                                
                              </div>
                          </span>
                      </div>
                       </div>
                        </div>
                    </td>
                    <td>
                       Interviewers observe more
                    </td>
                    <td>the words you use</td>
                    <td>voice quality</td>
                    <td>non-verbal gestures</td>
                    <td>none of the above is true</td>
                    <td></td>
                    <td>c</td>
                     
                  </tr>
                   
                  </tbody>
                  
                </table>
                    </div>
                 </div>
              </div>
          </div> 
      </div>
    </div>
  </div>
  </section>
  </div>
   <!----Study Mcq end----->

   <!-----Study Activity--->
   <div class="teacher-sch4">
      <section class="content">
     <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
             
              <!-- /.card-header -->
              <div class="card-body">
                 <div class="row">
                  <div class="col-12">
                       <h3 class="progressreport text-center"><i class="fas fa-universal-access"></i>Study Activity</h3>
                   </div>
                    <div class="col-12">
                       <form class="study_lesson">
                            <div class="row">
                   <div class="col-md-4">
                      <div class="form-group">
                  <select class="form-control select2bs4" style="width: 100%;">
                    <option selected="selected">Select course</option>
                    <option>BCA</option>
                    <option>MCA</option>
                  </select>
                </div>
                   </div>
                  
                   <div class="col-md-4">
                      <div class="form-group">
                 
                  <select class="form-control select2bs4" style="width: 100%;">
                    <option selected="selected">Select subject</option>
                    <option>Math</option>
                    <option>English</option>
                    
                  </select>
                </div>
                   </div>
                  
                   <div class="col-md-4">
                      <div class="form-group">
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="Activity">
                      </div>
                      </div>
                   </div>
                       <div class="col-md-4">
                      <div class="form-group">
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="Marks total">
                      </div>
                      </div>
                   </div>
                     <div class="col-md-4">
                      <div class="form-group">
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="Marks pass">
                      </div>
                      </div>
                   </div>
                     
                   <div class="col-12">
                      <textarea id="summernoteaa2">
                        Place <em>some</em> <u>text</u> <strong>here</strong>
                      </textarea>
                   </div>
                   <div class="col-md-3 py-2">
                       <div class="custom-file">
                      <input type="file" class="custom-file-input" id="studyActivity">
                      <label class="custom-file-label" for="studyActivity">Doc url</label>
                    </div>
                   </div>
                   <div class="col-md-3 py-2">
                     <div class="custom-file">
                      <input type="file" class="custom-file-input" id="studyActivity1">
                      <label class="custom-file-label" for="studyActivity1">Video url</label>
                    </div>
                   </div>
                   <div class="col-md-6 py-2">
                     
                   </div>
                   <div class="col-12 py-2">
                        <button class="check">Submit<span><i class="fas fa-arrow-right"></i></span></button>
                     </div>
                </div>
              </form>
                <table id="example13" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Activity</th>
                    <th>Marks total</th>
                    <th>Marks pass</th>
                    <th>Doc</th>
                    <th>Video</th>
                     <th>Detail</th>
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
                    <td>
                       Scholarships and Funding
                    </td>
                    <td>2</td>
                    <td>100</td>
                    <td>60</td>
                    <td></td>
                    <td>it cant be calculated like that</td>
                     
                  </tr>
                  <tr>
                    <td>
                        <div class="s_number">
                       
                       <div class="bottom_">
                           
                          <div>
                            <span class="span_icon">
                              <p>2.</p>
                            <a href="#" data-toggle="dropdown" class="dot" aria-haspopup="true" aria-expanded="false"><i class="nav-icon fas fa-ellipsis-h"></i>&nbsp;<i class="fas fa-chevron-down"></i></a>
                           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item dro" href="#">Edit<i class="nav-icon fas fa-edit"></i></a>
                                
                                
                              </div>
                          </span>
                      </div>
                       </div>
                        </div>
                    </td>
                    <td>
                       Scholarships and Funding
                    </td>
                    <td>2</td>
                    <td>100</td>
                    <td>60</td>
                    <td></td>
                    <td>it cant be calculated like that</td>
                     
                  </tr>
                   
                  </tbody>
                  
                </table>
                    </div>
                 </div>
              </div>
          </div> 
      </div>
    </div>
  </div>
  </section>
  </div>
   <!----Study Activity end-->
   <!-----Study Prectical----->
   <div class="teacher-sch5">
      <section class="content">
     <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
             
              <!-- /.card-header -->
              <div class="card-body">
                 <div class="row">
                  <div class="col-12">
                       <h3 class="progressreport text-center"><i class="fas fa-chart-area"></i>Study Practical</h3>
                   </div>
                    <div class="col-12">
                       <form class="study_lesson">
                            <div class="row">
                   <div class="col-md-4">
                      <div class="form-group">
                  <select class="form-control select2bs4" style="width: 100%;">
                    <option selected="selected">Select course</option>
                    <option>BCA</option>
                    <option>MCA</option>
                  </select>
                </div>
                   </div>
                  
                   <div class="col-md-4">
                      <div class="form-group">
                 
                  <select class="form-control select2bs4" style="width: 100%;">
                    <option selected="selected">Select subject</option>
                    <option>Math</option>
                    <option>English</option>
                    
                  </select>
                </div>
                   </div>
                  
                   <div class="col-md-4">
                      <div class="form-group">
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="Practical">
                      </div>
                      </div>
                   </div>
                       <div class="col-md-4">
                      <div class="form-group">
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="Marks total">
                      </div>
                      </div>
                   </div>
                     <div class="col-md-4">
                      <div class="form-group">
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="Marks pass">
                      </div>
                      </div>
                   </div>
                     
                   <div class="col-12">
                      <textarea id="summernoteaa3">
                        Place <em>some</em> <u>text</u> <strong>here</strong>
                      </textarea>
                   </div>
                   <div class="col-md-3 py-2">
                       <div class="custom-file">
                      <input type="file" class="custom-file-input" id="studyPractical">
                      <label class="custom-file-label" for="studyPractical">Doc url</label>
                    </div>
                   </div>
                   <div class="col-md-3 py-2">
                     <div class="custom-file">
                      <input type="file" class="custom-file-input" id="studyPractical1">
                      <label class="custom-file-label" for="studyPractical1">Video url</label>
                    </div>
                   </div>
                   <div class="col-md-6 py-2">
                     
                   </div>
                   <div class="col-12 py-2">
                        <button class="check">Submit<span><i class="fas fa-arrow-right"></i></span></button>
                     </div>
                </div>
              </form>
                <table id="example14" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Practical</th>
                    <th>Marks total</th>
                    <th>Marks pass</th>
                    <th>Doc</th>
                    <th>Video</th>
                     <th>Detail</th>
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
                    <td>
                       2
                    </td>
                    <td>2</td>
                    <td>100</td>
                    <td>60</td>
                    <td></td>
                    <td>it cant be calculated like that</td>
                     
                  </tr>
                  <tr>
                    <td>
                        <div class="s_number">
                       
                       <div class="bottom_">
                           
                          <div>
                            <span class="span_icon">
                              <p>2.</p>
                            <a href="#" data-toggle="dropdown" class="dot" aria-haspopup="true" aria-expanded="false"><i class="nav-icon fas fa-ellipsis-h"></i>&nbsp;<i class="fas fa-chevron-down"></i></a>
                           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item dro" href="#">Edit<i class="nav-icon fas fa-edit"></i></a>
                                
                                
                              </div>
                          </span>
                      </div>
                       </div>
                        </div>
                    </td>
                    <td>
                      1
                    </td>
                    <td>2</td>
                    <td>100</td>
                    <td>60</td>
                    <td></td>
                    <td>it cant be calculated like that</td>
                     
                  </tr>
                   
                  </tbody>
                  
                </table>
                    </div>
                 </div>
              </div>
          </div> 
      </div>
    </div>
  </div>
  </section>
  </div>
   <!-----Study Prectical end--->
   <!----Skill Mcq----->
   <div class="teacher-sch6">
      <section class="content">
     <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
             
              <!-- /.card-header -->
              <div class="card-body">
                 <div class="row">
                  <div class="col-12">
                       <h3 class="progressreport text-center"><i class="fas fa-chart-bar"></i>Skill Mcq</h3>
                   </div>
                    <div class="col-12">
                       <form class="study_lesson">
                            <div class="row">
                         <div class="col-md-6 mx-lg-auto">
                            <div class="form-group">
                        <select class="form-control select2bs4" style="width: 100%;">
                          <option selected="selected">Select Skill</option>
                          <option>BCA</option>
                          <option>MCA</option>
                        </select>
                      </div>
                         </div>
                  
              
                   <div class="col-12">
                    <label>Question</label>
                      <textarea id="question1">
                        
                      </textarea>
                   </div>
                      <div class="col-12">
                        <label>Option 1.</label>
                      <textarea id="option_1">
                        
                      </textarea>
                   </div>
                     <div class="col-12">
                      <label>Option 2.</label>
                      <textarea id="option_2">
                        
                      </textarea>
                   </div>
                     <div class="col-12">
                      <label>Option 3.</label>
                      <textarea id="option_3">
                        
                      </textarea>
                   </div>
                     <div class="col-12">
                      <label>Option 4.</label>
                      <textarea id="option_4">
                        
                      </textarea>
                   </div>
                   <div class="col-12">
                      <label>Detail</label>
                      <textarea id="detail_1">
                        
                      </textarea>
                   </div>
                   <div class="col-md-6 py-2">
                     <label>Weightage</label>
                     <div class="form-group" style="display: flex;flex-wrap: wrap;">
                        <div class="custom-control custom-radio mx-2">
                          <input class="custom-control-input" type="radio" id="easy1" name="customRadio">
                          <label for="easy1" class="custom-control-label">Easy</label>
                        </div>
                        <div class="custom-control custom-radio mx-2">
                          <input class="custom-control-input" type="radio" id="normal1" name="customRadio">
                          <label for="normal1" class="custom-control-label">Normal</label>
                        </div>
                        <div class="custom-control custom-radio mx-2">
                          <input class="custom-control-input" type="radio" id="difficult1" name="customRadio">
                          <label for="difficult1" class="custom-control-label">Difficult</label>
                        </div>
                        <div class="custom-control custom-radio mx-2">
                          <input class="custom-control-input" type="radio" id="verytough1" name="customRadio">
                          <label for="verytough1" class="custom-control-label">Very Tough</label>
                        </div>
                      </div>
                   </div>
                     <div class="col-md-6 py-2">
                       <label>Answer</label>
                       <div class="form-group" style="display: flex;flex-wrap: wrap;">
                        <div class="custom-control custom-radio mx-2">
                          <input class="custom-control-input" type="radio" id="a_1" name="customRadio">
                          <label for="a_1" class="custom-control-label">A</label>
                        </div>
                        <div class="custom-control custom-radio mx-2">
                          <input class="custom-control-input" type="radio" id="b_1" name="customRadio">
                          <label for="b_1" class="custom-control-label">B</label>
                        </div>
                        <div class="custom-control custom-radio mx-2">
                          <input class="custom-control-input" type="radio" id="c_1" name="customRadio">
                          <label for="c_1" class="custom-control-label">C</label>
                        </div>
                        <div class="custom-control custom-radio mx-2">
                          <input class="custom-control-input" type="radio" id="d_1" name="customRadio">
                          <label for="d_1" class="custom-control-label">D</label>
                        </div>
                      </div>
                   </div>
                   <div class="col-12 py-2">
                        <button class="check">Submit<span><i class="fas fa-arrow-right"></i></span></button>
                     </div>
                </div>
              </form>
                <table id="example12" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Question</th>
                    <th>Option1</th>
                    <th>Option2</th>
                    <th>Option3</th>
                    <th>Option4</th>
                    <th>Explain</th>
                    <th>Correct</th>
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
                    <td>
                       Example of green jobs are:
                    </td>
                    <td>Renewable Energy Jobs</td>
                    <td>Bicycle repair</td>
                    <td>Organic farmer</td>
                    <td>All the above are true</td>
                    <td></td>
                    <td>C</td>
                     
                  </tr>
                  <tr>
                    <td>
                        <div class="s_number">
                       
                       <div class="bottom_">
                           
                          <div>
                            <span class="span_icon">
                              <p>2.</p>
                            <a href="#" data-toggle="dropdown" class="dot" aria-haspopup="true" aria-expanded="false"><i class="nav-icon fas fa-ellipsis-h"></i>&nbsp;<i class="fas fa-chevron-down"></i></a>
                           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item dro" href="#">Edit<i class="nav-icon fas fa-edit"></i></a>
                                
                                
                              </div>
                          </span>
                      </div>
                       </div>
                        </div>
                    </td>
                    <td>
                       Interviewers observe more
                    </td>
                    <td>the words you use</td>
                    <td>voice quality</td>
                    <td>non-verbal gestures</td>
                    <td>none of the above is true</td>
                    <td></td>
                    <td>c</td>
                     
                  </tr>
                   
                  </tbody>
                  
                </table>
                    </div>
                 </div>
              </div>
          </div> 
      </div>
    </div>
  </div>
  </section>
  </div>
   <!----Skill Mcq end----->
   <!--Skill Evaluator-->
   <div class="teacher-sch7">
      <section class="content">
     <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
             
              <!-- /.card-header -->
              <div class="card-body">
                 <div class="row">
                  <div class="col-12">
                       <h3 class="progressreport text-center"><i class="fas fa-award"></i>Skill Evaluator</h3>
                   </div>
                    <div class="col-12">
                       <form class="study_lesson">
                            <div class="row">
                      <div class="col-md-3">
                      <div class="form-group">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Skill">
                      </div>
                </div>
                   </div>
                   <div class="col-md-3">
                      <div class="form-group">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Marks Total">
                      </div>
                </div>
                   </div>
                     <div class="col-md-3">
                      <div class="form-group">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Marks Pass">
                      </div>
                </div>
                   </div>
                     <div class="col-md-3">
                      <div class="form-group">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Marks Correct">
                      </div>
                   </div>
                   </div>
                   <div class="col-md-4">
                      <div class="form-group">
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="Marks Wrong">
                      </div>
                      </div>
                   </div>
                       <div class="col-md-4">
                      <div class="form-group">
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="Total Question">
                      </div>
                      </div>
                   </div>
                     <div class="col-md-4">
                      <div class="form-group">
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="Total Time">
                      </div>
                      </div>
                   </div>
                    
                   <div class="col-12">
                      <textarea id="summernoteaa4">
                        Sill Info
                      </textarea>
                   </div>
                   <div class="col-12 py-2">
                        <button class="check">Submit<span><i class="fas fa-arrow-right"></i></span></button>
                     </div>
                </div>
              </form>
                <table id="example10" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Skill</th>
                    <th>Skill Info</th>
                    <th>Marks total</th>
                    <th>Marks pass</th>
                    <th>Marks correct <br>Marks wrong</th>
                    <th>Total question</th>
                    <th>Total time</th>
                    
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
                    <td>
                       BCA
                    </td>
                    <td>C Language</td>
                    <td>100</td>
                    <td>60</td>
                    <td>12/20</td>
                     <td>20</td>
                     <td>30 min</td>
                     
                  </tr>
                  <tr>
                    <td>
                        <div class="s_number">
                       
                       <div class="bottom_">
                           
                          <div>
                            <span class="span_icon">
                              <p>2.</p>
                            <a href="#" data-toggle="dropdown" class="dot" aria-haspopup="true" aria-expanded="false"><i class="nav-icon fas fa-ellipsis-h"></i>&nbsp;<i class="fas fa-chevron-down"></i></a>
                           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item dro" href="#">Edit<i class="nav-icon fas fa-edit"></i></a>
                                
                                
                              </div>
                          </span>
                      </div>
                       </div>
                        </div>
                    </td>
                    <td>
                       BCA
                    </td>
                    <td>C Language</td>
                    <td>100</td>
                    <td>60</td>
                    <td>15/20</td>
                     <td>20</td>
                     <td>30 min</td>
                     
                  </tr>
                   
                  </tbody>
                  
                </table>
                    </div>
                 </div>
              </div>
          </div> 
      </div>
    </div>
  </div>
  </section>
  </div>
   <!---Skill Evaluator End---->
   <!---student--->
<div class="teacher-sch8">
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
             
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                   <div class="col-12">
                       <h3 class="progressreport text-center"><i class="fas fa-file-upload"></i>Upload Assignment</h3>
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
                   <div class="col-md-4">
                      <div class="form-group">
                        <label>Batch</label>
                          <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                              <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime" placeholder="Date and time" />
                              <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                          </div>
                      </div>
                   </div>
               
                </div>
              </form>
                <table id="example15" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th><span style="margin-right:5px;"><i class="fas fa-clipboard-check"></i></span>S.No
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary">
                        <label for="checkboxPrimary">
                          
                        </label>
                      </div>
                    </th>
                   
                    <th><span style="margin-right:5px;"><i class="nav-icon fas fa-user-edit"></i></span>Student</th>
                    <th><span style="margin-right:5px;"><i class="fas fa-chart-bar"></i></span>Marks</th>
                    <th><span style="margin-right:5px;"><i class="fas fa-chart-line"></i></span>Performance</th>
                    <th><span style="margin-right:5px;"><i class="fas fa-file-upload"></i></span>Assignment</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>
                       <div class="s_number">
                       
                       <div class="bottom_">
                            <p>1.</p>
                          <div>
                            <div class="icheck-primary d-inline">
                              <input type="checkbox" id="checkboxPrimary1">
                              <label for="checkboxPrimary1">
                                
                              </label>
                            </div>
                          <span class="span_icon">
                               <a href="#"><i class="fas fa-mobile-alt"></i></a>
                          </span>
                          </div>
                       </div>
                        </div>
                    </td>
                    <td>
                      <ul class="student_class">
                        <li>Akash Bhardwaj</li>
                        <li>Email</li>
                        <li>Mobile</li>
                      </ul>
                    </td>
                    <td>50%</td>
                    <td>Good</td>
                    <td><a href="#" class="tablelink"><i class="nav-icon fas fa-file-pdf"></i>PDF</a></td>
                  </tr>
                   <tr>
                     <td>
                       <div class="s_number">
                       
                       <div class="bottom_">
                            <p>1.</p>
                          <div>
                            <div class="icheck-primary d-inline">
                              <input type="checkbox" id="checkboxPrimary1">
                              <label for="checkboxPrimary1">
                                
                              </label>
                            </div>
                          <span class="span_icon">
                               <a href="#"><i class="fas fa-mobile-alt"></i></a>
                          </span>
                          </div>
                       </div>
                        </div>
                    </td>
                  
                    <td>
                       <ul class="student_class">
                        <li>Akash Bhardwaj</li>
                        <li>Email</li>
                        <li>Mobile</li>
                      </ul>
                    </td>
                    <td>60%</td>
                    <td>Very Good</td>
                     <td><a href="#" class="tablelink"><i class="nav-icon fas fa-file-pdf"></i>PDF</a></td>
                  </tr>
                   <tr>
                    <td>
                       <div class="s_number">
                       
                       <div class="bottom_">
                            <p>1.</p>
                          <div>
                            <div class="icheck-primary d-inline">
                              <input type="checkbox" id="checkboxPrimary1">
                              <label for="checkboxPrimary1">
                                
                              </label>
                            </div>
                          <span class="span_icon">
                               <a href="#"><i class="fas fa-mobile-alt"></i></a>
                          </span>
                          </div>
                       </div>
                        </div>
                    </td>
                  
                    <td>
                      <ul class="student_class">
                        <li>Akash Bhardwaj</li>
                        <li>Email</li>
                        <li>Mobile</li>
                      </ul>
                    </td>
                    <td>80%</td>
                    <td>Excellent</td>
                    <td><a href="#" class="tablelink"><i class="nav-icon fas fa-file-pdf"></i>PDF</a></td>
                  </tr>
                  
              
                  </tbody>
                  
                </table>
                <div class="assignment_box">
                    <div class="meetlink">
                        <h5>Meet Link</h5>
                        <a href="#"><button><i class="fas fa-envelope"></i>Email</button></a>
                        <a href="#"><button><i class="fas fa-comment-alt"></i>Sms</button></a>
                    </div>
                    <div class="testlink">
                        <h5>Test Link</h5>
                        <a href="#"><button><i class="fas fa-envelope"></i>Email</button></a>
                        <a href="#"><button><i class="fas fa-comment-alt"></i>Sms</button></a>
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

   <!---studentend--->
    <div class="progrestest teacher-sch9">
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
             
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                   <div class="col-md-6">
                       <h3 class="progressreport"><i class="nav-icon fas fa-graduation-cap"></i>Teacher's Schedule</h3>
                       
                   </div>
                   <div class="col-md-6">
                     <!-- <a href="upload-assignment.php"><button class="float-right uploadassignment"><i class="fas fa-file-upload"></i>Upload Assignment</button></a> -->
                   </div>
                </div>
              <form class="study_lesson">
                            <div class="row">
                                <div class="col-md-4">
                      <div class="form-group">
                        <label>Batch</label>
                          <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                              <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime" placeholder="Date and time" />
                              <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                          </div>
                      </div>
                   </div>
                   <div class="col-md-4">
                      <div class="form-group">
                     <label>Start</label>
                    <div class="input-group date" id="reservationdate5" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate5" placeholder="Start Date" />
                        <div class="input-group-append" data-target="#reservationdate5" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                   </div>
                    <div class="col-md-4">
                      <div class="form-group">
                     <label>End</label>
                    <div class="input-group date" id="reservationdate6" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate6" placeholder="End Date" />
                        <div class="input-group-append" data-target="#reservationdate6" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                   </div>
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
                <table id="example15" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>S.No</th>
                    <th><span style="margin-right:5px;"><i class="nav-icon fas fa-book"></i></span>Course</th>
                    <th><span style="margin-right:5px;"><i class="nav-icon fas fa-book-open"></i></span>subject</th>
                    <th><span style="margin-right:5px;"><i class="nav-icon fas fa-swatchbook"></i></span>unit</th>
                    <th><span style="margin-right:5px;"><i class="nav-icon fas fa-language"></i></span>language</th>
                    <th><span style="margin-right:5px;"><i class="fas fa-calendar-day"></i></span>Date and Time</th>
                     <th><span style="margin-right:5px;"><i class="fas fa-calendar-day"></i></span>Start Date</th>
                    <th><span style="margin-right:5px;"><i class="fas fa-calendar-day"></i></span>End Date</th>
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
                    <td>World</td>
                    <td>BCA</td>
                    <td>C language</td>
                    <td>English</td>
                    <td>09/06/2021,09:00 AM</td>
                    <td>07/09/2021</td>
                     <td>09/09/2021</td>
                    
                  </tr>
                   <tr>
                    <td>
                       <div class="s_number">
                       
                       <div class="bottom_">
                           
                          <div>
                            <span class="span_icon">
                              <p>2.</p>
                            <a href="#" data-toggle="dropdown" class="dot" aria-haspopup="true" aria-expanded="false"><i class="nav-icon fas fa-ellipsis-h"></i>&nbsp;<i class="fas fa-chevron-down"></i></a>
                           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item dro" href="#">Edit<i class="nav-icon fas fa-edit"></i></a>
                                
                                
                              </div>
                          </span>
                      </div>
                       </div>
                        </div>
                    </td>
                    <td>World</td>
                    <td>BCA</td>
                    <td>C language</td>
                    <td>Hindi</td>
                    <td>09/06/2021,11:00 AM</td>
                    <td>07/09/2021</td>
                     <td>09/09/2021</td>
                    
                    
                  </tr>
                   <tr>
                    <td>
                       <div class="s_number">
                       
                       <div class="bottom_">
                           
                          <div>
                            <span class="span_icon">
                              <p>3.</p>
                            <a href="#" data-toggle="dropdown" class="dot" aria-haspopup="true" aria-expanded="false"><i class="nav-icon fas fa-ellipsis-h"></i>&nbsp;<i class="fas fa-chevron-down"></i></a>
                           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item dro" href="#">Edit<i class="nav-icon fas fa-edit"></i></a>
                                
                                
                              </div>
                          </span>
                      </div>
                       </div>
                        </div>
                    </td>
                    <td>World</td>
                    <td>BCA</td>
                    <td>C language</td>
                    <td>Hindi</td>
                    <td>09/06/2021,03:00 PM</td>
                    <td>07/09/2021</td>
                     <td>09/09/2021</td>
                    
                    
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


</div>
<!-- /.content-wrapper -->

@endsection
@section('script')
<script>
  $(function () {
   
    $('#example2,#example11,#example10,#example12,#example13,#example14,#example15').DataTable({
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
   $('#summernoteaa').summernote()
   $('#summernoteaa1').summernote()
   $('#summernoteaa2').summernote()
   $('#summernoteaa3').summernote()
   $('#summernoteaa4').summernote()
   $('#question').summernote()
   $('#option1').summernote()
   $('#option2').summernote()
   $('#option3').summernote()
   $('#option4').summernote()
   $('#detail_').summernote()
   $('#question1').summernote()
   $('#option_1').summernote()
   $('#option_2').summernote()
   $('#option_3').summernote()
   $('#option_4').summernote()
   $('#detail_1').summernote()
   
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

<script type="text/javascript">
  $(document).ready(function(){
         $('.teacher-sch1').hide();
         $('.teacher-sch2').hide();
         $('.teacher-sch3').hide();
         $('.teacher-sch4').hide();
         $('.teacher-sch5').hide();
         $('.teacher-sch6').hide();
         $('.teacher-sch7').hide();
           $('.teacher-sch8').hide();

        $('.study').click(function() {
           $('.teacher-sch1').show(500);
            $('.teacher-sch2').hide(500);
            $('.teacher-sch3').hide(500);
            $('.teacher-sch4').hide(500);
            $('.teacher-sch5').hide(500);
             $('.teacher-sch6').hide(500);
             $('.teacher-sch7').hide(500);
             $('.teacher-sch8').hide(500);
          $('.teacher-sch9').hide(500);
        })
        $('.studylesson').click(function() {
          $('.teacher-sch2').show(500);
          $('.teacher-sch1').hide(500);
          $('.teacher-sch3').hide(500);
          $('.teacher-sch4').hide(500);
          $('.teacher-sch5').hide(500);
           $('.teacher-sch6').hide(500);
           $('.teacher-sch7').hide(500);
            $('.teacher-sch8').hide(500);
          $('.teacher-sch9').hide(500);
        })
        $('.studymcq').click(function() {
          $('.teacher-sch2').hide(500);
          $('.teacher-sch1').hide(500);
          $('.teacher-sch3').show(500);
          $('.teacher-sch4').hide(500);
          $('.teacher-sch5').hide(500);
           $('.teacher-sch6').hide(500);
           $('.teacher-sch7').hide(500);
            $('.teacher-sch8').hide(500);
          $('.teacher-sch9').hide(500);
        })
        $('.studyactivity').click(function() {
          $('.teacher-sch2').hide(500);
          $('.teacher-sch1').hide(500);
          $('.teacher-sch3').hide(500);
          $('.teacher-sch4').show(500);
          $('.teacher-sch5').hide(500);
           $('.teacher-sch6').hide(500);
           $('.teacher-sch7').hide(500);
            $('.teacher-sch8').hide(500);
          $('.teacher-sch9').hide(500);
        })
        $('.studyprectical').click(function() {
          $('.teacher-sch2').hide(500);
          $('.teacher-sch1').hide(500);
          $('.teacher-sch3').hide(500);
          $('.teacher-sch4').hide(500);
          $('.teacher-sch5').show(500);
           $('.teacher-sch6').hide(500);
           $('.teacher-sch7').hide(500);
            $('.teacher-sch8').hide(500);
          $('.teacher-sch9').hide(500);
        })
         $('.skillmcq').click(function() {
          $('.teacher-sch2').hide(500);
          $('.teacher-sch1').hide(500);
          $('.teacher-sch3').hide(500);
          $('.teacher-sch4').hide(500);
          $('.teacher-sch5').hide(500);
           $('.teacher-sch6').show(500);
           $('.teacher-sch7').hide(500);
            $('.teacher-sch8').hide(500);
          $('.teacher-sch9').hide(500);
        })
         $('.skillevaluator').click(function() {
          $('.teacher-sch2').hide(500);
          $('.teacher-sch1').hide(500);
          $('.teacher-sch3').hide(500);
          $('.teacher-sch4').hide(500);
          $('.teacher-sch5').hide(500);
           $('.teacher-sch6').hide(500);
           $('.teacher-sch7').show(500);
            $('.teacher-sch8').hide(500);
          $('.teacher-sch9').hide(500);
        })
         
         $('.studentlesson').click(function() {
           $('.teacher-sch2').hide(500);
          $('.teacher-sch1').hide(500);
          $('.teacher-sch3').hide(500);
          $('.teacher-sch4').hide(500);
          $('.teacher-sch5').hide(500);
           $('.teacher-sch6').hide(500);
           $('.teacher-sch7').hide(500);
          $('.teacher-sch8').show(500);
          $('.teacher-sch9').hide(500);
           
        })
         $('.schedule_1').click(function() {
           $('.teacher-sch2').hide(500);
          $('.teacher-sch1').hide(500);
          $('.teacher-sch3').hide(500);
          $('.teacher-sch4').hide(500);
          $('.teacher-sch5').hide(500);
           $('.teacher-sch6').hide(500);
           $('.teacher-sch7').hide(500);
          $('.teacher-sch8').hide(500);
          $('.teacher-sch9').show(500);
           
        })
       
      })

</script>
<script>
  $(document).ready(function(){
         $('.btn_1').hide();
          $('.btn_2').hide();
$('.iclass_').click(function() {
          $('.btn_1').show(500);
            $('.btn_2').hide(500);
        })
       $('.content_12').click(function() {
          $('.btn_2').show(500);
          $('.btn_1').hide();
         
        })
       

})



</script>
@endsection