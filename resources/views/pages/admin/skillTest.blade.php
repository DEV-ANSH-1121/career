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
                                            <div class="col-sm-6 text-center">
                                                <h5 class="pt-2"><i class="fas fa-book"></i> World of Occupations</h5>
                                            </div>
                                            <div class="col-sm-3  text-right">
                                                <div class="lefttime">
                                                    <p>Time Left:</p>
                                                    <span>
                                                        <p>0</p>
                                                        Hr
                                                    </span>
                                                    <span>
                                                        <p>0</p>
                                                        Mins
                                                    </span>
                                                    <span>
                                                        <p>0</p>
                                                        Secs
                                                    </span>
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
                                        <p class="question_text"><span>1.</span>If you like helping people then which one is not possible career.</p>
                                        <ul class="question_option">
                                            <li><input type="radio" name="ques_one"><span>A.</span>Career Advisor</li>
                                            <li><input type="radio" name="ques_one"><span>B.</span>Physician</li>
                                            <li><input type="radio" name="ques_one"><span>C.</span>Athlete</li>
                                            <li><input type="radio" name="ques_one"><span>D.</span>Fire-fighter</li>
                                        </ul>
                                        <a href="#" class="skip_btn">Skip</a>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="text-center bg-danger_ p-2 mb-1"><i class="fas fa-book-open"></i>&nbsp;&nbsp;Question Index</h5>
                                        <table class="question_count">
                                            <tbody>
                                                <tr style="display: flex;flex-wrap: wrap;">
                                                    <td>01</td>
                                                    <td>02</td>
                                                    <td>03</td>
                                                    <td>04</td>
                                                    <td>05</td>
                                                    <td>06</td>
                                                    <td>07</td>
                                                    <td>08</td>
                                                    <td>09</td>
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