
<script src="{{url('postlogin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{url('postlogin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{url('postlogin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('postlogin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('postlogin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{url('postlogin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{url('postlogin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{url('postlogin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{url('postlogin/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{url('postlogin/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{url('postlogin/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{url('postlogin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{url('postlogin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{url('postlogin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{url('postlogin/plugins/select2/js/select2.full.min.js')}}"></script>

<script src="{{url('postlogin/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>
<!-- InputMask -->
<script src="{{url('postlogin/plugins/moment/moment.min.js')}}"></script>
<script src="{{url('postlogin/plugins/inputmask/jquery.inputmask.min.js')}}"></script>
<!-- fullCalendar 2.2.5 -->
<script src="{{url('postlogin/plugins/fullcalendar/main.js')}}"></script>
<!-- date-range-picker -->
<script src="{{url('postlogin/plugins/daterangepicker/daterangepicker.js')}}"></script>

  <script src="{{url('postlogin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- CodeMirror -->
<script src="{{url('postlogin/plugins/codemirror/codemirror.js')}}"></script>
<script src="{{url('postlogin/plugins/codemirror/mode/css/css.js')}}"></script>
<script src="{{url('postlogin/plugins/codemirror/mode/xml/xml.js')}}"></script>
<script src="{{url('postlogin/plugins/codemirror/mode/htmlmixed/htmlmixed.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Tempusdominus Bootstrap 4 -->
<script src="{{url('postlogin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Bootstrap Switch -->
<script src="{{url('postlogin/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
<!-- BS-Stepper -->
<script src="{{url('postlogin/plugins/bs-stepper/js/bs-stepper.min.js')}}"></script>
<!-- dropzonejs -->
<script src="{{url('postlogin/plugins/dropzone/min/dropzone.min.js')}}"></script>
<!-- jQuery UI -->
<script src="{{url('postlogin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- AdminLTE App -->

<!-- AdminLTE for demo purposes -->

<!-- AdminLTE App -->
<script src="{{url('postlogin/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('postlogin/dist/js/demo.js')}}"></script>
<script src="{{url('postlogin/dist/js/script.js?v=1')}}"></script>


<script src="{{url('postlogin/plugins/chart.js/Chart.min.js')}}"></script>
<script src="{{url('postlogin/dist/js/pages/dashboard3.js')}}"></script>
<script src="{{url('postlogin/dist/js/pages/dashboard2.js')}}"></script>

<!-- jQuery Mapael -->
<script src="{{url('postlogin/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{url('postlogin/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{url('postlogin/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{url('postlogin/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{url('postlogin/plugins/chart.js/Chart.min.js')}}"></script>
<!---3d chart--->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://code.highcharts.com/modules/variable-pie.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
<script src="https://code.highcharts.com/modules/cylinder.js"></script>
<script src="https://code.highcharts.com/modules/funnel3d.js"></script>
<script src="https://code.highcharts.com/modules/pyramid3d.js"></script>

<script src="{{url('postlogin/dist/js/chart-3d.js')}}"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

@yield('script')
@if(Route::current()->getName() != 'user.skillTest')

<script>
  $(function () {
    

    //Initialize Select2 Elements
    $('.select2').select2({
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
    $('#reservationdatetime4').datetimepicker({
      format:'YYYY-MM-DD HH:mm:ss', 
      icons: { time: 'far fa-clock' } 
    });
    $('#reservationdatetime4end').datetimepicker({
      format:'YYYY-MM-DD HH:mm:ss', 
      icons: { time: 'far fa-clock' } 
    });
    $('#followupdate').datetimepicker({
      format:'YYYY-MM-DD HH:mm:ss', 
      icons: { time: 'far fa-clock' } 
    });
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

    // //Colorpicker
    // $('.my-colorpicker1').colorpicker()
    // //color picker with addon
    // $('.my-colorpicker2').colorpicker()

    // $('.my-colorpicker2').on('colorpickerChange', function(event) {
    //   $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    // })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // // BS-Stepper Init
  // document.addEventListener('DOMContentLoaded', function () {
  //   window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  // })

  // // DropzoneJS Demo Code Start
  // Dropzone.autoDiscover = false

  // // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  // var previewNode = document.querySelector("#template")
  // //previewNode.id = ""
  // var previewTemplate = previewNode.parentNode.innerHTML
  // previewNode.parentNode.removeChild(previewNode)

  // var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
  //   url: "/target-url", // Set the url
  //   thumbnailWidth: 80,
  //   thumbnailHeight: 80,
  //   parallelUploads: 20,
  //   previewTemplate: previewTemplate,
  //   autoQueue: false, // Make sure the files aren't queued until manually added
  //   previewsContainer: "#previews", // Define the container to display the previews
  //   clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  // })

  // myDropzone.on("addedfile", function(file) {
  //   // Hookup the start button
  //   file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  // })

  // // Update the total progress bar
  // myDropzone.on("totaluploadprogress", function(progress) {
  //   document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  // })

  // myDropzone.on("sending", function(file) {
  //   // Show the total progress bar when upload starts
  //   document.querySelector("#total-progress").style.opacity = "1"
  //   // And disable the start button
  //   file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  // })

  // // Hide the total progress bar when nothing's uploading anymore
  // myDropzone.on("queuecomplete", function(progress) {
  //   document.querySelector("#total-progress").style.opacity = "0"
  // })

  // // Setup the buttons for all transfers
  // // The "add files" button doesn't need to be setup because the config
  // // `clickable` has already been specified.
  // document.querySelector("#actions .start").onclick = function() {
  //   myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  // }
  // document.querySelector("#actions .cancel").onclick = function() {
  //   myDropzone.removeAllFiles(true)
  // }
  // // DropzoneJS Demo Code End

</script>
<script>
      $(document).ready(function(){
         $('.itembox').hide();
        $('.list').click(function(e) {
          var value = $(this).attr('data-filter');

          if (value !== 'SelectContact') {
           $('.itembox').not('.'+value).hide(1000);
            $('.itembox').filter('.'+value).show(1000);
          }
          else{
            
          }
        })
      })
    </script>
    <script>
      $(document).ready(function(){
         $('.contactbyme').show(1000);
          $('.contactbyclient').hide(1000);
        $('.list2').click(function(e) {
          $('.contactbyclient').show(1000);
           $('.contactbyme').hide(1000);
        });
         $('.list1').click(function(e) {
          $('.contactbyclient').hide(1000);
           $('.contactbyme').show(1000);
        });
         $('.contact-ini').click(function(){
            var stid = $(this).data('stid');
            $('.contact-modal-anchor').each(function(){
                $(this).attr('href',$(this).data('href')+'/'+stid);
            });
            
        })
      });
    </script>
@endif
