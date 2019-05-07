<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Accounting Office — Reports</title>
    <link rel="icon" href="{{asset('img/accounting/btc-w.png')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/accounting/reports.css')}}">
    <link rel="stylesheet" href="{{asset('css/accounting/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('css/fullcalendar/fullcalendar.css')}}">
    <script src="{{asset('lib/accoutning/jquery.min.js')}}"></script>
    <script src="{{asset('lib/accounting/moment.min.js')}}"></script>
    <script src="{{asset('js/accounting/fullcalendar.js')}}"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="text-center">
                <img src="{{asset('img/accounting/icon.svg')}}s" class="rounded mx-auto d-block" alt="User Picture">
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
            <li >
                    <a href="dashboard.html" data-toggle="tooltip" data-placement="right" title="Dashboard">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-tachometer-alt icon"></i>&nbsp&nbsp&nbsp&nbsp Dashboard</a>
                </li>
                <li>
                    <a href="assessments.html" data-toggle="tooltip" data-placement="right" title="Assessments">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-receipt icon"></i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAssessments</a>
                </li>
                <li>
                    <a href="MasterList.html" data-toggle="tooltip" data-placement="right" title="MasterList">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-address-book icon"></i>&nbsp&nbsp&nbsp&nbsp&nbsp Master List</a>
                </li>
                <li class="active">
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
               
                <!-- Reservation List -->
                <h5>Reports</h5>

                <form class="nomargin">

                    <div class="form-group">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label class="my-1 mr-2" for="filterBy">Month:</label>
                                <select class="lg custom-select my-1 mr-sm-2" id="filterBy" style="width: 70% !important;">
                                  <option value=""></option>
                                  <option value="1">January</option>
                                  <option value="2">February</option>
                                  <option value="3">March</option>
                                  <option value="4">April</option>
                                  <option value="5">May</option>
                                  <option value="6">June</option>
                                  <option value="7">July</option>
                                  <option value="8">August</option>
                                  <option value="9">September</option>
                                  <option value="10">October</option>
                                  <option value="11">November</option>
                                  <option value="12">December</option>
                                </select>  
                            </div>
                            <div class="form-group col-md-4">
                                <label class="my-1 mr-2" for="filterBy">Year:</label>
                                <select class="lg custom-select my-1 mr-sm-2" id="filterBy" style="width: 70% !important;">
                                  <option value=""></option>
                                  <option value="1">2019</option>
                                  <option value="2">2018</option>
                                  <option value="3">2017</option>
                                  <option value="4">2016</option>
                                  <option value="5">2015</option>
                                  <option value="6">2014</option>
                                  <option value="7">2013</option>
                                  <option value="8">2012</option>
                                  <option value="9">2011</option>
                                  <option value="10">2010</option>
                                </select>  
                            </div>

                            <div class="form-group col-md-4">
                                <div class="bot">
                                    <button type="button" class="btn btn-primary lookup" style="width: 80% !important";><i class="fas fa-search"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lookup</button>
                                </div>
                            </div>

                            </div>
                        </div>
                      </form>
                 
                </div>  
        
        <!-- Page Content  -->
        <div class="card-deck">
                <div class="card">
                  <img class="card-img-top" src="{{asset('img/accounting/btc-g.png')}}" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Accounting Office Statement of Accounts (SOA) Report for March 2019</h5>
                  </div>
                  <div class="confBttns">
                      <a href="#" class="btn btn-primary"id="view">View</a>
                      <a href="#" class="btn btn-primary" id="download">Download</a>
                      </div>
                  <div class="card-footer">
                    <small class="text-muted">Generated last April 01, 2019 at 12:00 am </small>
                  </div>
                </div>
                <div class="card">
                        <img class="card-img-top" src="{{asset('img/accounting/btc-g.png')}}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Accounting Office Statement of Accounts (SOA) Report for February 2019</h5>
                        </div>
                        <div class="confBttns">
                            <a href="#" class="btn btn-primary"id="view">View</a>
                            <a href="#" class="btn btn-primary" id="download">Download</a>
                            </div>
                        <div class="card-footer">
                          
                          <small class="text-muted">Generated last February 28, 2019 at 12:00 am</small>
                        </div>
                      </div>
                      <div class="card">
                            <img class="card-img-top" src="{{asset('img/accounting/btc-g.png')}}" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Accounting Office Statement of Accounts (SOA) Report for January 2019</h5>
                            </div>
                            <div class="confBttns">
                                <a href="#" class="btn btn-primary"id="view">View</a>
                                <a href="#" class="btn btn-primary" id="download">Download</a>
                                </div>
                            <div class="card-footer">
                              <small class="text-muted">Generated last January 31, 2019 at 12:00 am</small>
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