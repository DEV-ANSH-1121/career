@extends('includes.postlogin.main')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- /.control-sidebar -->
      <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><span><img src="images/counselling.png"  style="margin-right: 10px;width: 30px;" alt="counselling"></span>Master Table</h1>
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
                   <div class="card-header">
                
                <div class="header-content">
                 <div class="row">
                   <div class="col-md-9">
                       <h3 class="progressreport"><i class="far fa-file"></i>Master Table</h3>
                       
                   </div>
                   <div class="col-md-3">
                         <select class="form-control select5" id="mastertable_t" style="width: 100%;">
                            <option selected="selected">Master table</option>
                            <option value="aut">Authontic</option>
                            <option value="cont">Contact</option>
                             <option value="count">Country</option>
                             <option value="state">State</option>
                             <option value="dist">District</option>
                             <option value="linkk">Link group</option>
                             <option value="linkk2">Links</option>
                             <option value="pin_0">PIN code</option>
                             <option value="buy_0">Buy</option>
                             <option value="contesttype">Contest Type</option>
                             <option value="contestt">Contest</option>
                          </select>
                   </div>
                </div>
                </div>
            </div>
        </div>
               </div>
          
              </div>
             </div>
             </section>
          </div>  
</div>
<!-- /.content-wrapper -->

@endsection
@section('script')
<script>
  $(function () {
   
    $('#mastertable0,#mastertable1,#mastertable2,#mastertable3,#mastertable4,#mastertable5,#mastertable6,#mastertable7,#mastertable8,#mastertable9').DataTable({
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
    $('.select5').select2()
      $('.select5').on('select2:select',function(e){
        function savedata(){
   console.log('hill');
 }
      })
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
   $('#reportdate').datetimepicker({ icons: { time: 'far fa-clock' } });
   $('#reportdate1').datetimepicker({ icons: { time: 'far fa-clock' } });
    
  })
  
  
</script>

<script>

 $(document).ready(function() {
   $('#mastertable_t').on('change',function() {
     $('.master').hide();
     $('#' + $(this).val()).fadeIn(700);
   }).change();
 })
</script>

@endsection