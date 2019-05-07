<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Accounting Office — Dashboard</title>
        <link rel="icon" href="{{asset('img/accounting/btc-w.png')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/accounting/dashboard.css')}}">
        <link rel="stylesheet" href="{{asset('css/fullcalendar/fullcalendar.css')}}" />
        <script src="{{asset('lib/accoutning/jquery.min.js')}}"></script>
        <script src="{{asset('js/accounting/jquery.sticky.js')}}"></script>
        <script src="{{asset('lib/accounting/moment.min.js')}}"></script>
        <script src="{{asset('js/accounting/fullcalendar.js')}}"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
        <script>
        $(document).ready(function() {
            var calendar = $('#calendar').fullCalendar({
             editable:true,
             themeSystem: 'bootstrap4',
             aspectRatio: 2,
             themeButtonIcons : {
            prev: 'circle-triangle-w',
            next: 'circle-triangle-e',
            prevYear: 'seek-prev',
            nextYear: 'seek-next'
            },
             header:{
              left:'prev,next today',
              center:'title',
              right:'month,agendaWeek,agendaDay'
             },
             events: 'load.php',
             selectable:true,
             selectHelper:true,
             select: function(start, end, allDay)
             {
              var title = prompt("Enter Event Title");
              if(title)
              {
               var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
               var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
               $.ajax({
                url:"insert.php",
                type:"POST",
                data:{title:title, start:start, end:end},
                success:function()
                {
                 calendar.fullCalendar('refetchEvents');
                 alert("Added Successfully");
                }
               })
              }
             },
             editable:true,
             eventResize:function(event)
             {
              var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
              var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
              var title = event.title;
              var id = event.id;
              $.ajax({
               url:"update.php",
               type:"POST",
               data:{title:title, start:start, end:end, id:id},
               success:function(){
                calendar.fullCalendar('refetchEvents');
                alert('Event Update');
               }
              })
             },
         
             eventDrop:function(event)
             {
              var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
              var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
              var title = event.title;
              var id = event.id;
              $.ajax({
               url:"update.php",
               type:"POST",
               data:{title:title, start:start, end:end, id:id},
               success:function()
               {
                calendar.fullCalendar('refetchEvents');
                alert("Event Updated");
               }
              });
             },
         
             eventClick:function(event)
             {
              if(confirm("Are you sure you want to remove it?"))
              {
               var id = event.id;
               $.ajax({
                url:"delete.php",
                type:"POST",
                data:{id:id},
                success:function()
                {
                 calendar.fullCalendar('refetchEvents');
                 alert("Event Removed");
                }
               })
              }
             },
         
            });
           });
            
           </script>
    </head>
<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        
        <nav id="sidebar">
            <div class="text-center">
                <img src="{{asset('img/accounting/icon.svg')}}" class="rounded mx-auto d-block" alt="User Picture">
                <strong>{{ Auth::user()->f_name}} {{ Auth::user()->l_name}}</strong><br>
                <i>Accounting Office</i>
              </div>
        <!-- Small toggle icons -->
        <div class="small-icons">
          <a href="#notifications" data-toggle="modal" data-target="#notifications"><i class="fas fa-bell"></i></a>
          <a href="settings.html"><i class="fas fa-cog"></i></a> 
          <a href="#"><i class="fas fa-sign-out-alt"></i></a>
        </div>
            <ul class="list-unstyled components">
            <li class="active">
                    <a href="dashboard.html" data-toggle="tooltip" data-placement="right" title="Dashboard">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-tachometer-alt icon"></i>&nbsp&nbsp&nbsp&nbsp Dashboard</a>
                </li>
                <li>
                    <a href="assessments.html" data-toggle="tooltip" data-placement="right" title="Assessments">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-receipt icon"></i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAssessments</a>
                </li>
                <li>
                    <a href="MasterList.html" data-toggle="tooltip" data-placement="right" title="MasterList">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-address-book icon"></i>&nbsp&nbsp&nbsp&nbsp&nbsp Master List</a>
                </li>
                <li>
                    <a href="reports.html" data-toggle="tooltip" data-placement="right" title="Reports">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-file-alt icon"></i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Reports</a>
                </li>
                <li>
                    <a href="history.html" data-toggle="tooltip" data-placement="right" title="History">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-history icon"></i>&nbsp&nbsp&nbsp&nbsp&nbsp History</a>
                </li>
                <li>
                    <a href="{{ url('/login/logout') }}">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-sign-out-alt"></i>&nbsp&nbsp&nbsp&nbsp&nbsp Logout</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <img src="{{asset('img/accounting/btc-w.png')}}" id="logo">
                </div>
            </nav>
            <div class="row" id="dashboard"></div>
                <div class="col-lg-12">
                    
                <h5>DASHBOARD</h5>
                                    <!-- Modal -->
<div class="modal fade" id="notifications" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Notifications</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
      </div>
    </div>
  </div>

                <!-- Calendar -->
                <div class="calendar">
                  <div id="calendar">
                  </div>
                </div>
                

                <!-- Cards -->
                <p></p>
                <h5>Assessments</h5>
                <div class="card-deck" id="assessmentCard" >
                  
                    <div class="card text-white bg-warning mb-3" id="unassessedCard"> 
                        <div class="card-header" id="uheader">Unassessed</div>
                        <div class="card-body occupied">
                          <div class="total">20</div>
                           
                        </div>
                        </div>
                    
                        <div class="card text-white bg-success mb-3" id="assessedCard">
                        <div class="card-header" id="aheader">Assessed</div>
                            <div class="card-body vacant">
                          <div class="total">10</div>
                         
                        </div>
                    </div>
                </div>

                <!-- Search Bar -->
                

                <!-- Facilities -->
              
                <form class="form-inline">
                    <label class="my-1 mr-2" for="filterBy">Filter By:</label>
                    <select class="custom-select my-1 mr-sm-2" id="filterBy">
                        <option selected value="1">Unassessed</option>
                      <option value="2">Assessed</option>
                      <option value="3">All</option>
                    </select>
                   
                        <input type="text" class="form-control" placeholder="Assessment Information" aria-label="search for facilities" aria-describedby="basic-addon2" id="search">
                        <div class="input-group-append">
                          <button class="btn btn-primary" type="button" id="searchBtn">Search</button>
                        </div>
               
                  </form>

                  
                <!-- Facilities -->
                  <div class="card-deck">
                    <div class="card">
                      <img class="card-img-top" src="{{asset('img/accounting/icon.svg')}}" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                      </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="{{asset('img/accounting/icon.svg')}}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                        </div>
                      </div>
                      <div class="card">
                        <img class="card-img-top" src="{{asset('img/accounting/icon.svg')}}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                        </div>
                      </div>
                    <div class="card">
                      <img class="card-img-top" src="{{asset('img/accounting/icon.svg')}}" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top" src="{{asset('img/accounting/icon.svg')}}" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                      </div>
                    </div>
                  </div>
                <!-- Facilities -->

                </div>
            </div>
        </div>
        </div>

    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $('#content').toggleClass('active');
                $('[data-toggle="tooltip"]').tooltip();
                
            });
        });
    </script>
</body>

</html>