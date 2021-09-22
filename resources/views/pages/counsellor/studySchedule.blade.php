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
              <div class="card-body " >
                 <div class="row">
                     <div class="col-md-6">
                         <h4 class=" schedule-heading"><i class="fas fa-clipboard-list"></i>Create your schedule</h4>
                     </div>
                     <div class="col-md-6">
                         <div class="test_button">
                           <a href="{{url('study-dashboard')}}"><button class="iclass"><span><i class="fas fa-book-open"></i></span>Online Class</button></a>
                           <a href="{{url('study-test')}}"><button class="progress-report"><span class="spinner-border"></span>Progress Report</button></a>
                           <a href="{{url('career-dashboard')}}"><button class="progress-report careerdashboard"><i class="fas fa-long-arrow-alt-left"></i></span>Career Dashboard</button></a>
                         </div>
                     </div>
                 </div>
               <form class="schedule-form">
                      <div class="row">
                     <div class="col-md-6">
                       <div class="form-group">
                          <label><i class="nav-icon fas fa-chalkboard-teacher"></i>Weightage</label>
                          <select class="form-control select2bs4" style="width: 100%;">
                            <option selected="selected">Select Weightage</option>
                            <option>Easy</option>
                            <option>Normal</option>
                            <option>Dificult</option>
                            <option>Very Tough</option>
                            
                          </select>
                        </div>
                     </div>
                     <div class="col-md-6">
                           <div class="form-group">
                          <label><i class="nav-icon fas fa-book-reader"></i>Course</label>
                          <select class="form-control select2bs4" style="width: 100%;">
                            <option selected="selected">Select Course</option>
                            <option>Easy</option>
                            <option>Normal</option>
                            <option>Dificult</option>
                            <option>Very Tough</option>
                            
                          </select>
                        </div>
                     </div>
                       <div class="col-md-6">
                           <div class="form-group">
                          <label><i class="nav-icon fas fa-book-open"></i>Subject</label>
                          <select class="form-control select2bs4" style="width: 100%;">
                            <option selected="selected">Select Subject</option>
                            <option>Easy</option>
                            <option>Normal</option>
                            <option>Dificult</option>
                            <option>Very Tough</option>
                            
                          </select>
                        </div>
                     </div>
                     <div class="col-md-6">
                            <div class="form-group">
                            <label><i class="nav-icon fas fa-book"></i>Lesson</label>
                            <select class="select2bs4" multiple="multiple" data-placeholder="Select a State"
                                    style="width: 100%;">
                              <option>Lesson</option>
                              <option>Alaska</option>
                              <option>California</option>
                              
                            </select>
                          </div>
                     </div>
                     <div class="col-md-6">
                           <div class="form-group">
                          <label><i class="nav-icon fas fa-calendar-alt"></i>Start Date</label>
                            <div class="input-group date" id="reservationdate3" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate3"/>
                                <div class="input-group-append" data-target="#reservationdate3" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                     </div>
                       <div class="col-md-6">
                           <div class="form-group">
                          <label><i class="nav-icon fas fa-calendar-alt"></i>End Date</label>
                            <div class="input-group date" id="reservationdate4" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate4"/>
                                <div class="input-group-append" data-target="#reservationdate4" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                     </div>
                     <div class="col-md-12">
                             <div class="form-group">
                                <label><i class="fas fa-glass-cheers"></i>Holidays</label>
                                   <input type="text" class="form-control date1" placeholder="Pick the multiple date" />
                                <!-- /.input group -->
                              </div>
                     </div>
                     <div class="col-12">
                      <label class="studyday"><i class="nav-icon fas fa-calendar-day"></i>Study Days</label>
                        <div class="form-group clearfix">

                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary1">
                        <label for="checkboxPrimary1">
                          Monday
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary2">
                        <label for="checkboxPrimary2">
                          Tuesday
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary3">
                        <label for="checkboxPrimary3">
                          Wednesday
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary4">
                        <label for="checkboxPrimary4">
                          Thursday
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary5">
                        <label for="checkboxPrimary5">
                          Friday
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary6">
                        <label for="checkboxPrimary6">
                          Saturday
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary7">
                        <label for="checkboxPrimary7">
                          Sunday
                        </label>
                      </div>
                     
                    </div>
                     </div>
                     <div class="col-12 py-2">
                        <button class="check">Submit<span><i class="fas fa-arrow-right"></i></span></button>
                     </div>
                 </div>
               </form>
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
              <div class="card-header">
                <div class="header-heading">
                  <h3 class="card-title"><i class="nav-icon fas fa-chalkboard-teacher"></i>CCP - Certification as Career Professional</h3>
                  <h3 class="card-title"><i class="nav-icon fas fa-book"></i>World of Occupations</h3>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Action</th>
                    <th><span style="margin-right:5px;"><i class="nav-icon fas fa-book"></i></span>Lessons</th>
                    <th><span style="margin-right:5px;"><i class="nav-icon fas fa-calendar-alt"></i></span>Start</th>
                    <th><span style="margin-right:5px;"><i class="nav-icon fas fa-calendar-alt"></i></span>End</th>
                    <th width="10%"><span style="margin-right:5px;"><i class="nav-icon fas fa-calendar-day"></i></span>Study days</th>
                    <th><span style="margin-right:5px;"><i class="far fa-clock"></i></span>Study Time</th>
                    <th><span style="margin-right:5px;"><i class="fas fa-calendar-day"></i></span>Date</th>
                    <th><span style="margin-right:5px;"><i class="fas fa-location-arrow"></i></span>View</th>
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
                                <a class="dropdown-item dro" href="#">Delete<i class="fas fa-trash"></i></a>
                                
                              </div>
                          </span>
                      </div>
                       </div>
                        </div>
                    </td>
                    <td>World of Occupations,
                    </td>
                    <td>09/06/2021</td>
                    <td>20/06/2021</td>
                    <td>Monday,Tuesday,Wednesday,Thursday,<br>Friday,Saturday,Sunday</td>
                    <td>180 Minutes</td>
                    <td>09/06/2021</td>
                    <td><a href="#"><i class="fas fa-eye"></i></a></td>
                    
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
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="sticky-top mb-3">
              <div class="card">                
                <div class="card-body">
                  <!-- the events -->
                  <div id="external-events">
                   
                      <!-- THE CALENDAR -->
                      <div id="calendar"></div>
                   
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
         
            </div>
          </div>
          <!-- /.col -->
          
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

</div>
<!-- /.content-wrapper -->

@endsection
@section('script')
<script>
  $(function () {
   
    $('#example2').DataTable({
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
    $('#reservationdate3').datetimepicker({
        format: 'L'
    });
    $('#reservationdate4').datetimepicker({
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
<script>
  $('.date1').datepicker({
   format: 'd-M-yyyy',
    inline: false,
    lang: 'en',
    step: 5,
    multidate: 5,
    closeOnDateSelect: true
});

</script>
<script>
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function ini_events(ele) {
      ele.each(function () {

        // create an Event Object (https://fullcalendar.io/docs/event-object)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    ini_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()

    var Calendar = FullCalendar.Calendar;
    var Draggable = FullCalendar.Draggable;

    var containerEl = document.getElementById('external-events');
    var checkbox = document.getElementById('drop-remove');
    var calendarEl = document.getElementById('calendar');

    // initialize the external events
    // -----------------------------------------------------------------

    new Draggable(containerEl, {
      itemSelector: '.external-event',
      eventData: function(eventEl) {
        return {
          title: eventEl.innerText,
          backgroundColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          borderColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          textColor: window.getComputedStyle( eventEl ,null).getPropertyValue('color'),
        };
      }
    });

    var calendar = new Calendar(calendarEl, {
      headerToolbar: {
        left  : 'prev,next today',
        center: 'title',
        right : 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      themeSystem: 'bootstrap',
      
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function(info) {
        // is the "remove after drop" checkbox checked?
        if (checkbox.checked) {
          // if so, remove the element from the "Draggable Events" list
          info.draggedEl.parentNode.removeChild(info.draggedEl);
        }
      }
    });

    calendar.render();
    // $('#calendar').fullCalendar()

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    // Color chooser button
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      // Save color
      currColor = $(this).css('color')
      // Add color effect to button
      $('#add-new-event').css({
        'background-color': currColor,
        'border-color'    : currColor
      })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      // Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      // Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.text(val)
      $('#external-events').prepend(event)

      // Add draggable funtionality
      ini_events(event)

      // Remove event from text input
      $('#new-event').val('')
    })
  })
</script>
@endsection