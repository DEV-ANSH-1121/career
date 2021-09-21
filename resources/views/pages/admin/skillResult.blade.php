@extends('includes.postlogin.main')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><span><img src="{{url('postlogin/images/counselling.png')}}"  style="margin-right: 10px;width: 30px;" alt="counselling"></span>Skill Test Results</h1>
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

   <div class="study_test">

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
                       <h3 class="progressreport"><img src="{{url('postlogin/images/exam.png')}}">Skill <span style="margin-left: 5px;">Test name</span></h3>
                   </div>
                </div>
              <div class="table-responsive">
                
                 <table class="table table-hover table-bordered">
                    <thead class="bg-light">
                      <tr>
                        <th scope="col">Date/Time</th>
                        <th scope="col">Time Taken</th>
                        <th scope="col">Correct Answers</th>
                        <th scope="col">Wrong Answers</th>
                        <th scope="col">Total Marks</th>
                        <th scope="col">Marks Obtained</th>
                        <th scope="col">Percentage</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>{{$data['skillResult']->edate}}</td>
                        <td>{{gmdate("H:i:s", $data['skillResult']->testime)}}</td>
                        <td>{{$data['correct']}}</td>
                        <td>{{$data['inCorrect']}}</td>
                        <td>{{$data['skillEvaluator']->marks_total}}</td>
                        <td>{{$data['marks_obtained']}}</td>
                        <td>{{$data['percentage']}} %</td>
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
                       <h3 class="progressreport"><img src="{{url('postlogin/images/test.png')}}">Answer Sheet</h3>
                   </div>
                </div>
              <div class="table-responsive">
                
                 <table class="table table-hover table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">Questions</th>
                        @for($i =  1; $i <= $data['skillEvaluator']->total_question; $i++)
                         <td>{{$i}}</td>
                         @endfor
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">Answers</th>
                        @foreach($data['answersheet'] as $q=>$a)
                            @if($a['answer'] == 'Y')
                                <td><span><i class="fas fa-check"></i></span></td>
                            @elseif($a['answer'] == 'N')
                                <td><span><i class="fas fa-times"></i></span></td>
                            @else
                                <td><span><i class="fas fa-times"></i></span></td>
                            @endif
                        @endforeach
                      </tr>
                      <tr>
                        <th scope="row">Time (in Seconds)</th>
                        @foreach($data['answersheet'] as $q=>$a)
                            <td>
                                @if(isset($a['testime']) && !empty($a['testime']))
                                    {{$a['testime']}}
                                @else
                                    __
                                @endif
                            </td>
                        @endforeach
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
  

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  @endsection