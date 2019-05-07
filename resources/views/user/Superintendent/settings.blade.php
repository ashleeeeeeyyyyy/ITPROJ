<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Superintendent — Settings</title>
    <link rel="icon" href="{[asset('img/superintendent/btc-w.png')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/superintendent/settings.css')}}">
    <link rel="stylesheet" href="{[asset('css/superintendent/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('css/fullcalendar/fullcalendar.css')}}">
    <script src="{{asset('lib/superintendent/jquery.min.js')}}"></script>
    <script src="{[asset('js/superintedent/jquery.sticky.js')}}"></script>
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
                    <img src="{{asset('img/superintendent/btc-w.png')}}" id="logo">
                </div>
            </nav>
            <div class="row" id="dashboard"></div>
            <div class="col-lg-12">
                
            <h5>SETTINGS</h5>
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="card-horizontal">
                                    <img class="user-icon" src="{{asset('img/superintendent/btc-g.png')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Henrhod Y. Pis-o</h4>
                                    <p class="card-text">00123654
                                      <br>Superintendent
                                      <div class="row">
                                          <button class="btn btn-primary btn-height" data-toggle="collapse" href="#updatePassword" role="button" aria-expanded="false" aria-controls="individual"> 
                                            <i class="fas fa-lock"></i>&nbsp;&nbsp;Update Password
                                          </button>
                                    </p>
                                    
                                </div>

                                <div class="collapsing" id="updatePassword">
                                   <p> </p>
                                      <form>
                                        <!-- Name of Guest -->
                                        
                                        <form class="form-inline">
                                            <div class="form-group">
                                              <label for="inputPassword6">Current Password</label>
                                              <input type="password" id="inputPassword6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="inputPassword6">New Password</label>
                                                <input type="password" id="inputPassword6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
                                                <small id="passwordHelpInline" class="text-muted">
                                                  Must be 8-20 characters long.
                                                </small>
                                              </div>
                                              <br>
                                              <br>
                                              <div class="form-group">
                                                  <label for="inputPassword6">Confirm New Password</label>
                                                  <input type="password" id="inputPassword6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
                                                  <small id="passwordHelpInline" class="text-muted">
                                                    Must be 8-20 characters long.
                                                  </small>
                                                </div>
                                          </form>
                                          <p></p>
                                        <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal" id="chaPass">Change Password</button>
                          
                                        <!-- Modal -->
                                        <div class="modal fade" id="myModal" role="dialog">
                                          <div class="modal-dialog">
                                          
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h4 class="modal-title">Update Password</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                
                                              </div>
                                              <div class="modal-body">
                                                <p>Are you sure you want to save your new password ?</p>
                                              </div>
                                              <div class="modal-footer">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal" id="cancel">Cancel</button>
                                                  <button type="button" class="btn btn-default" data-dismiss="modal" id="confirm">Save</button>
                                              </div>
                                            </div>
                                            
                                          </div>
                                        </div>   
                              
                                          </div>
                                      </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
        
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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