@extends('includes.postlogin.main')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><span><img src="{{url('postlogin/images/counselling.png')}}"  style="margin-right: 10px;width: 30px;" alt="counselling"></span>Skill Test</h1>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <div class="progrestest teacher-sch9">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="header-content">
                                    <div class="card_content bg-light">
                                        <div class="row">
                                            <div class="col-sm-3 mb-2">
                                                <a href="#" class="back_"><i class="fas fa-arrow-left"></i></a>
                                            </div>
                                            <div class="col-sm-5 text-center">
                                                <h5 class="pt-2"><i class="fas fa-book"></i> World of Occupations</h5>
                                            </div>
                                            <div class="col-sm-4  text-right">
                                                <div class="lefttime">
                                                    <p>Time Left:</p>
                                                    <div id="hours"></div>
                                                    <div id="minutes"></div>
                                                    <div id="seconds"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body bg-light_">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <p class="question_text"><span>1.</span>If you like helping people then which one is not possible career.</p>
                                                <ul class="question_option">
                                                    <li><input type="radio" name="test-923" value="q1" class="c"   onchange="optionselect('923', 'A')" ><span>A.</span>Career Advisor</li>
                                                    <li><input type="radio" name="test-923" value="q1" class="c"  onchange="optionselect('923', 'B')" ><span>B.</span>Physician</li>
                                                    <li><input type="radio" name="test-923" value="q1" class="c"  onchange="optionselect('923', 'C')" ><span>C.</span>Athlete</li>
                                                    <li><input type="radio" name="test-923" value="q1" class="c"  onchange="optionselect('923', 'D')" ><span>D.</span>Fire-fighter</li>
                                                </ul>
                                                <p class="text-left pl-3 pb-5"><a href="javascript:void(0)" class="skip_btn" onclick="optionreset('923')">Skip</a></p>
                                                <input type="text" name="" id="qus_923" value="1" style="opacity:0; filter:alpha(opacity=0);">
                                                <input type="text" name="" id="srn_1" value="1" style="opacity:0; filter:alpha(opacity=0);">
                                            </div>
                                            <div class="col-md-12 ">
                                                <p class="question_text"><span>2.</span>If you like helping people then which one is not possible career.</p>
                                                <ul class="question_option">
                                                    <li><input type="radio" name="test-924" value="q2" class="c"  onchange="optionselect('924', 'A')" ><span>A.</span>Career Advisor</li>
                                                    <li><input type="radio" name="test-924" value="q2" class="c"  onchange="optionselect('924', 'B')" ><span>B.</span>Physician</li>
                                                    <li><input type="radio" name="test-924" value="q2" class="c"  onchange="optionselect('924', 'C')" ><span>C.</span>Athlete</li>
                                                    <li><input type="radio" name="test-924" value="q2" class="c"  onchange="optionselect('924', 'D')" ><span>D.</span>Fire-fighter</li>
                                                </ul>
                                                <p class="text-left pl-3 pb-5"><a class="skip_btn" href="javascript:void(0)" onclick="optionreset('924')">Skip</a></p>
                                                <input type="text" name="" id="qus_924" value="2" style="opacity:0; filter:alpha(opacity=0);">
                                                <input type="text" name="" id="srn_2" value="2" style="opacity:0; filter:alpha(opacity=0);">
                                            </div>
                                            <div class="col-md-12 ">
                                                <p class="question_text"><span>3.</span>If you like helping people then which one is not possible career.</p>
                                                <ul class="question_option">
                                                    <li><input type="radio" name="test-925" value="q3" class="c"  onchange="optionselect('925', 'A')" ><span>A.</span>Career Advisor</li>
                                                    <li><input type="radio" name="test-925" value="q3" class="c"  onchange="optionselect('925', 'B')" ><span>B.</span>Physician</li>
                                                    <li><input type="radio" name="test-925" value="q3" class="c"  onchange="optionselect('925', 'C')" ><span>C.</span>Athlete</li>
                                                    <li><input type="radio" name="test-925" value="q3" class="c"  onchange="optionselect('925', 'D')" ><span>D.</span>Fire-fighter</li>
                                                </ul>
                                                <p class="text-left pl-3 pb-5 "><a class="skip_btn" href="javascript:void(0)" onclick="optionreset('925')">Skip</a></p>
                                                <input type="text" name="" id="qus_925" value="3" style="opacity:0; filter:alpha(opacity=0);">
                                                <input type="text" name="" id="srn_3" value="3" style="opacity:0; filter:alpha(opacity=0);">
                                            </div>
                                            <div class="col-md-12 ">
                                                <p class="question_text"><span>4.</span>If you like helping people then which one is not possible career.</p>
                                                <ul class="question_option">
                                                    <li><input type="radio" name="test-926" value="q4" class="c"  onchange="optionselect('926', 'A')" ><span>A.</span>Career Advisor</li>
                                                    <li><input type="radio" name="test-926" value="q4" class="c" onchange="optionselect('926', 'B')" ><span>B.</span>Physician</li>
                                                    <li><input type="radio" name="test-926" value="q4" class="c"  onchange="optionselect('926', 'C')" ><span>C.</span>Athlete</li>
                                                    <li><input type="radio" name="test-926" value="q4" class="c"  onchange="optionselect('926', 'D')" ><span>D.</span>Fire-fighter</li>
                                                </ul>
                                                <p class="text-left pl-3 pb-5 "><a class="skip_btn" href="javascript:void(0)" onclick="optionreset('926')">Skip</a></p>
                                                <input type="text" name="" id="qus_926" value="4" style="opacity:0; filter:alpha(opacity=0);">
                                                <input type="text" name="" id="srn_4" value="4" style="opacity:0; filter:alpha(opacity=0);">
                                            </div>
                                            <div class="col-md-12 ">
                                                <p class="question_text"><span>5.</span>If you like helping people then which one is not possible career.</p>
                                                <ul class="question_option">
                                                    <li><input type="radio" name="test-927" value="q5" class="c" onchange="optionselect('927', 'A')" ><span>A.</span>Career Advisor</li>
                                                    <li><input type="radio" name="test-927" value="q5" class="c" onchange="optionselect('927', 'B')" ><span>B.</span>Physician</li>
                                                    <li><input type="radio" name="test-927" value="q5" class="c"  onchange="optionselect('927', 'C')" ><span>C.</span>Athlete</li>
                                                    <li><input type="radio" name="test-927" value="q5" class="c"  onchange="optionselect('927', 'D')" ><span>D.</span>Fire-fighter</li>
                                                </ul>
                                                <p class="text-left pl-3 pb-5 "><a class="skip_btn" href="javascript:void(0)" onclick="optionreset('927')">Skip</a></p>
                                                <input type="text" name="" id="qus_927" value="5" style="opacity:0; filter:alpha(opacity=0);">
                                                <input type="text" name="" id="srn_5" value="5" style="opacity:0; filter:alpha(opacity=0);">
                                            </div>
                                            <div class="col-md-12 ">
                                                <p class="question_text"><span>6.</span>If you like helping people then which one is not possible career.</p>
                                                <ul class="question_option">
                                                    <li><input type="radio" name="test-928" value="q6" class="c" onchange="optionselect('928', 'A')" ><span>A.</span>Career Advisor</li>
                                                    <li><input type="radio" name="test-928" value="q6" class="c" onchange="optionselect('928', 'B')" ><span>B.</span>Physician</li>
                                                    <li><input type="radio" name="test-928" value="q6" class="c"  onchange="optionselect('928', 'C')" ><span>C.</span>Athlete</li>
                                                    <li><input type="radio" name="test-928" value="q6" class="c"  onchange="optionselect('928', 'D')" ><span>D.</span>Fire-fighter</li>
                                                </ul>
                                                <p class="text-left pl-3 pb-5 "><a class="skip_btn" href="javascript:void(0)" onclick="optionreset('928')">Skip</a></p>
                                                <input type="text" name="" id="qus_928" value="6" style="opacity:0; filter:alpha(opacity=0);">
                                                <input type="text" name="" id="srn_6" value="6" style="opacity:0; filter:alpha(opacity=0);">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="text-center bg-danger_ p-2 mb-1"><i class="fas fa-book-open"></i>&nbsp;&nbsp;Question Index</h5>
                                        <table class="question_count">
                                            <tbody>
                                                <tr style="display: flex;flex-wrap: wrap;">
                                                    <td id="q1" class="ans">01</td>
                                                    <td id="q2" class="ans">02</td>
                                                    <td id="q3" class="ans">03</td>
                                                    <td id="q4" class="ans">04</td>
                                                    <td id="q5" class="ans">05</td>
                                                    <td id="q6" class="ans">06</td>
                                                    <td id="q7" class="ans">07</td>
                                                    <td id="q8" class="ans">08</td>
                                                    <td id="q9" class="ans">09</td>
                                                    <td id="q10" class="ans">10</td>
                                                    <td id="q11" class="ans">11</td>
                                                    <td id="q12" class="ans">12</td>
                                                    <td id="q13" class="ans">13</td>
                                                    <td id="q14" class="ans">14</td>
                                                    <td id="q15" class="ans">15</td>
                                                    <td id="q16" class="ans">16</td>
                                                    <td id="q17" class="ans">17</td>
                                                    <td id="q18" class="ans">18</td>
                                                    <td id="q19" class="ans">19</td>
                                                    <td id="q20" class="ans">20</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <button type="button" class="Verify">Submit</button>
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
</div>
<!-- /.content-wrapper -->

@endsection