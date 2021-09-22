@extends('includes.postlogin.main')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><span><img src="{{url('postlogin/images/counselling.png')}}"  style="margin-right: 10px;width: 30px;" alt="counselling"></span>HR Question</h1>
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
                                     
                                   <div class="col-md-4">
                                      <div class="form-group">
                                      <select class="form-control select2" style="width: 100%;">
                                                <option selected="selected">Post</option>
                                                <option>post</option>
                                                <option>post</option>
                                                <option>post</option>
                                                
                                              </select>
                                    </div>
                                   </div>
                                   <div class="col-md-12">
                                        <div class="form-group">
                                        <div class="form-group">
                                        <!-- <label>Message</label> -->
                                         <textarea id="summernote">
                                            Place <em>some</em> <u>text</u> <strong>here</strong>
                                          </textarea>
                                      </div>
                                      </div>
                                   </div>
                                  
                                   <div class="col-md-2">
                                     <div class="form-group">
                                      
                                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Rank">
                                    </div>
                                     </div>
                                   <div class="col-md-10">

                                   </div>
                                   <div class="col-md-12">
                                      <button type="button" class="btn btn-primary submit_">Submit</button>
                                   </div>
                               </div>
                               <!-----------BY CONTACTClient END--------->
              </form>
             
                <table id="hrquestion" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>S.No</th>
                    <th><span style="margin-right:5px;"></span>Post</th>
                    <th><span style="margin-right:5px;"></span>Question</th>
                    <th><span style="margin-right:5px;"></span>Rank</th>
                     
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
   
    $('#hrquestion').DataTable({
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
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
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
@endsection