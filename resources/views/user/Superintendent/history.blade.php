<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Superintendent — History</title>
    <link rel="icon" href="{{asset('img/superintendent/btc-w.png')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/superintendent/history.css')}}">
    <link rel="stylesheet" href="{[asset('css/superintendent/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('css/fullcalendar/fullcalendar.css')}}">
    <script src="{{asset('lib/superintendent/jquery.min.js')}}"></script>
    <script src="{{asset('lib//superintendent/moment.min.js')}}"></script>
    <script src="{{asset('js/superintendent/fullcalendar.js')}}"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        
        <nav id="sidebar">
            <div class="text-center">
                <img src="{[asset('img/superintendent/icon.svg')}}" class="rounded mx-auto d-block" alt="User Picture">
                <strong>{{ Auth::user()->f_name}} {{ Auth::user()->l_name}}</strong><br>
                <i>Superintendent</i>
              </div>
        <!-- Small toggle icons -->
        <div class="small-icons">
            <a href="#notifications" data-toggle="modal" data-target="#notifications"><i class="fas fa-bell"></i></a>
            <a href="settings.html"><i class="fas fa-cog"></i></a> 
            <a href="#"><i class="fas fa-sign-out-alt"></i></a>
        </div>
            <ul class="list-unstyled components">
            <li>
                    <a href="dashboard.html" data-toggle="tooltip" data-placement="right" title="Dashboard">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-tachometer-alt icon"></i>&nbsp&nbsp&nbsp&nbsp Dashboard</a>
                </li>
                <li class="active">
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
                    <img src="{{asset('img/superintendent/btc-w.png')}}" id="logo">
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
                <h5>History</h5>
                <form class="nomargin">

                    <div class="form-group">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="my-1 mr-2" for="filterBy">Arrange By:</label>
                                <select class="lg custom-select my-1 mr-sm-2" id="filterBy">
                                  <option value="1">Latest Activity</option>
                                  <option value="2">Oldest Activity</option>
                                  <option value="3">Employee Name</option>
                                  <option value="4">All</option>
                                </select>  
                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-group mb-4">
                                    <input type="text" class="form-control" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                      <button class="btn btn-primary" type="button">Search</button>
                                    </div>
                            </div>            
                            </div>
                        </div>
                      </form>
                 
                </div>        
                   <table class="table table-hover"  class="historyTable" >
                    <thead>
                      <tr>
                        <th scope="col">Employee In-Charge</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Activity Description</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Avansado, Nathaniel R.</td>
                        <td>April 01, 2019</td>
                        <td>2:30 pm</td>
                        <td>Logged out from the system</td>
                      </tr>
                      <tr>
                          <td>Avansado, Nathaniel R.</td>
                          <td>April 01,2019</td>
                          <td>2:00 pm</td>
                          <td>Downloaded Front Desk Accommodation Report for March 2019</td>
                        </tr>
                        <tr>
                            <td>Avansado, Nathaniel R.</td>
                            <td>April 01,2019</td>
                            <td>2:00 pm</td>
                            <td>Downloaded Reservation Office Accmomodation Report for March 2019</td>
                          </tr>
                          <tr>
                              <td>Avansado, Nathaniel R.</td>
                              <td>April 01,2019</td>
                              <td>2:00 pm</td>
                              <td>Downloaded Accounting Office Statement of Accounts (SOA) Report for March 2019</td>
                            </tr>
                      <tr>
                          <td>Avansado, Nathaniel R.</td>
                          <td>April 01, 2019</td>
                          <td>1:43 pm</td>
                          <td>Logged in to the system</td>
                        </tr>
                        <tr>
                        <td>Avansado, Nathaniel R.</td>
                        <td>March 29, 2019</td>
                        <td>11:54 am</td>
                        <td>Logged out from the system</td>
                            </tr>
                        <tr>
                            <td>Avansado, Nathaniel R.</td>
                        <td>March 29, 2019</td>
                        <td>10:43 am</td>
                        <td>Logged in to the system</td>
                            </tr>

                    </tbody>
                  </table>
              
    
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