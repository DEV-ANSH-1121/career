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