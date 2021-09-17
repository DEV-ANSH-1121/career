@extends('includes.postlogin.main')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><span style="margin-right: 10px;"><i class="nav-icon fas fa-users"></i></span>Edit User</h1>
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body pad80px" >
              <div class="row">
                   <div class="col-sm-12 col-md-6 col-lg-6">
                   <div class="form-group">
                  
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">User Type</option>
                    <option class="iii"> User Type</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
               </div> 
               <div class="col-sm-12 col-md-6 col-lg-6">
                     <div class="form-group">
                   
                    <div class="input-group date" id="date" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#date" placeholder="Date of Birth" />
                        <div class="input-group-append" data-target="#date" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
               </div> 
              </div>
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                   <div class="form-group">
                    
                    <input type="text" class="form-control" id="fulname" placeholder="Full Name">
                  </div>
             
              </div>
                 <div class="col-sm-12 col-md-4 col-lg-4">
                  <div class="form-group">
                    
                    <input type="text" class="form-control" id="mobile" placeholder="Mobile">
                  </div>
               </div>
               <div class="col-sm-12 col-md-4 col-lg-4">
                  <div class="form-group">
                    
                    <input type="text" class="form-control" id="omobile" placeholder="Other Mobile">
                  </div>
               </div>
                </div>
                 <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                   <div class="form-group">
                     <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Country</option>
                    <option class="iii"> Country</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                  </div>
             
              </div>
                 <div class="col-sm-12 col-md-4 col-lg-4">
                  <div class="form-group">
                     <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">State</option>
                    <option class="iii"> State</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                  </div>
               </div>
               <div class="col-sm-12 col-md-4 col-lg-4">
                  <div class="form-group">
                     <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Distict</option>
                    <option class="iii"> Distict</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                  </div>
               </div>
                </div>
                     <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-3">
                   <div class="form-group">
                     <input type="text" class="form-control" id="pin" placeholder="Pin Code">
                  </div>
             
              </div>
                 <div class="col-sm-12 col-md-6 col-lg-6">
                  <div class="form-group">
                     <input type="text" class="form-control" id="address" placeholder="Address..">
                  </div>
               </div>
               <div class="col-sm-12 col-md-3 col-lg-3">
                  <div class="form-group">
                     <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Gender</option>
                    <option class="iii"> Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Transgender</option>
                    
                  </select>
                  </div>
               </div>
                </div>
                  <div class="row">
                    <div class="col-sm-10 col-md-4 col-lg-4">
                   <div class="form-group">
                    
                     <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Choose Photograph</label>
                    </div>
                  </div>

             
              </div>
              <div class="col-sm-1">
                <img src="https://margdarshak.org/public/uploads/user_img/RP.jpg" style="width: 60px;border-radius: 50%;margin-bottom: 10px;">
              </div>
                 <div class="col-sm-10 col-md-4 col-lg-4">
                  <div class="form-group">
                   
                      <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Choose Resume</label>
                    </div>
                  </div>
               </div>
                 <div class="col-sm-1">
                <img src="https://th.bing.com/th/id/OIP.asDdZwHWN9ZY4uHa9POfiAHaJq?w=206&h=269&c=7&r=0&o=5&dpr=1.25&pid=1.7" style="width: 60px;margin-bottom: 10px;border: 5px solid #dfd1d1;">
              </div>
                </div>
                <div class="row">
                   <div class="col-12">
                      <button type="button" class="btn Verify">Submit</button>
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
    <!-- /.content -->
  </div>

@endsection

@section('script')
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#date').datetimepicker({
        format: 'L'
    });

    
    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });
    $('#reservationdatetime1').datetimepicker({ icons: { time: 'far fa-clock' } });
    $('#reservationdatetime2').datetimepicker({ icons: { time: 'far fa-clock' } });
    $('#reservationdatetime3').datetimepicker({ icons: { time: 'far fa-clock' } });
    $('#reservationdatetime4').datetimepicker({ icons: { time: 'far fa-clock' } });
    $('#reservationdatetime5').datetimepicker({ icons: { time: 'far fa-clock' } });
    $('#reservationdatetime6').datetimepicker({ icons: { time: 'far fa-clock' } });
    $('#reservationdatetime7').datetimepicker({ icons: { time: 'far fa-clock' } });
    $('#reservationdatetime8').datetimepicker({ icons: { time: 'far fa-clock' } });
    $('#reservationdatetime9').datetimepicker({ icons: { time: 'far fa-clock' } });
    
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>
@endsection

</body>
</html>
