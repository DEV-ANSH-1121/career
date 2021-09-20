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
                                            @foreach($data['questions'] as $key => $question)
                                            <div class="col-md-12 question_{{($key + 1)}}" id="question_{{($key + 1)}}">
                                                <p class="question_text"><span>{{($key + 1)}} . </span>{{strip_tags(html_entity_decode($question->question))}}</p>
                                                <ul class="question_option">
                                                    <li><input type="radio" name="{{'question_'.$question->mcqID}}" value="A" class="c answer_option"   onchange="optionselect({{$key + 1}}, {{$question->mcqID}}, 'A')" @if($data['skillTest'][$question->mcqID] == 'A') checked @endif><span>A.</span>{{strip_tags(html_entity_decode($question->option1))}}</li>
                                                    <li><input type="radio" name="{{'question_'.$question->mcqID}}" value="B" class="c answer_option"  onchange="optionselect({{$key + 1}}, {{$question->mcqID}}, 'B')" @if($data['skillTest'][$question->mcqID] == 'B') checked @endif><span>B.</span>{{strip_tags(html_entity_decode($question->option2))}}</li>
                                                    <li><input type="radio" name="{{'question_'.$question->mcqID}}" value="C" class="c answer_option"  onchange="optionselect({{$key + 1}}, {{$question->mcqID}}, 'C')" @if($data['skillTest'][$question->mcqID] == 'C') checked @endif><span>C.</span>{{strip_tags(html_entity_decode($question->option3))}}</li>
                                                    <li><input type="radio" name="{{'question_'.$question->mcqID}}" value="D" class="c answer_option"  onchange="optionselect({{$key + 1}}, {{$question->mcqID}}, 'D')" @if($data['skillTest'][$question->mcqID] == 'D') checked @endif><span>D.</span>{{strip_tags(html_entity_decode($question->option4))}}</li>
                                                </ul>
                                                <p class="text-left pl-3 pb-5"><a class="skip_btn" onclick="optionreset({{$key + 1}}, {{$question->mcqID}})">Skip</a></p>
                                                <input type="text" name="" id="qus_923" value="1" style="opacity:0; filter:alpha(opacity=0);">
                                                <input type="text" name="" id="srn_1" value="1" style="opacity:0; filter:alpha(opacity=0);">
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="text-center bg-danger_ p-2 mb-1"><i class="fas fa-book-open"></i>&nbsp;&nbsp;Question Index</h5>
                                        <table class="question_count">
                                            <tbody>
                                                <tr style="display: flex; flex-wrap: wrap;">
                                                    @php $q = 1; @endphp
                                                    @foreach($data['skillTest'] as $qno => $answer)
                                                    <td id="q{{$q}}" class="ans" @if($answer != '') style="background : green" @endif><a  onclick="optionreset({{$q}}, ''">{{$q}}</a></td>
                                                    @php $q += 1; @endphp
                                                    @endforeach
                                                </tr>
                                            </tbody>
                                        </table>
                                        <button type="button" class="Verify " onclick="finalSubmit()">Submit</button>
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
@section('script')
<script type="text/javascript">
    function optionselect(qno,qId,option){
        var aTag = $('.question_'+ (qno+1));
        $('html,body').animate({scrollTop: aTag.offset().top},'fast');
        jQuery.ajax({
            url : jQuery('#baseurl').val() + '/skill/submitSingleAnswer',
            method : 'post',
            data : {
                mcqID : qId,
                answer : option
            },
            success : function(response){

            }
        })
    }

    function optionreset(qno,qid){
        var aTag = $('.question_'+ (qno+1));
        $('html,body').animate({scrollTop: aTag.offset().top},'fast');
        if(qid != ''){
            $('input[name="question_'+qid+'"]').prop('checked', false);
        }
    }

    function finalSubmit(){
        jQuery.ajax({
            url : jQuery('#baseurl').val() + '/skill/finalSubmit',
            method : 'get',
            success : function(response){
                window.location.replace(jQuery('#baseurl').val() + '/skill/skillResult')
            }
        });
    }
    
</script>
@endsection