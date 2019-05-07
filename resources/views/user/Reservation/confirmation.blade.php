<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Reservation Office — Confirmation</title>
    <link rel="icon" href="{{asset('img/reservation/btc-w.png')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integri  sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/reservation/confirmation.css')}}">
    <link rel="stylesheet" href="{{asset('css/reservation/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('css/fullcalendar/fullcalendar.css')}}">
    <script src="{{asset('lib/reservation/jquery.min.js')}}"></script>
    <script src="{{asset('js/reservation/jquery.sticky.js')}}"></script>
    <script src="{{asset('lib/reservation/moment.min.js')}}"></script>
    <script src="{{asset('js/reservation/fullcalendar.js')}}"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
  </head>

  <body>
    <div class="wrapper">
      <!-- Sidebar  -->
      <nav id="sidebar">
        <div class="text-center">
          <img src="{{asset('img/reservation/icon.svg')}}" class="rounded mx-auto d-block" alt="User Picture">
          <strong>{{ Auth::user()->f_name}} {{ Auth::user()->l_name}}</strong><br>
          <i>Reservation Office</i>
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
            <a href="reservation.html" data-toggle="tooltip" data-placement="right" title="Reservation">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-plus-circle icon"></i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspReservation</a>
          </li>

          <li class="active">
            <a href="confirmation.html" data-toggle="tooltip" data-placement="right" title="Confirmation">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-check-circle icon"></i>&nbsp&nbsp&nbsp&nbsp&nbsp Confirmation</a>
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
            <img src="{{asset('img/reservation/btc-w.png')}}" id="logo">
          </div>
        </nav>
            
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
 
          <h5>Reservation Confirmation</h5>
          <!-- Cards -->
          <div class="card">
            <div class="card text-white bg-warning">
              <div class="card-header yellow">Y4IT <a href="#"  data-toggle="tooltip" data-placement="right" title="Undo Confirmation"><i class="fas fa-undo-alt"></i></a></div>
              <div class="card-body">
                Type: Individual <br>
                Contact: 09165445638 <br>
                Category: Non-DepEd <br>
                No. of Person: 55 <br>
                Date of Arrival: March 13, 2019 <br>
                Date of Departure: March 15, 2019 <br>
                Total: Php 3,545.00 <br>

                <a href="#myModal"  data-toggle="modal" data-target="#myModal" id="chaPass">Other Details</a>       
                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog">             
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Reserved Facilities and Services</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>

                      <div class="modal-body">
                        <p class="card-text-modal">Facilities:</p>
                        <p class="card-text-indent">Cottage 102</p>
                        <p class="card-text-indent">Cottage 103</p>
                        <p class="card-text-indent">Cottage 104</p>
                        <p class="card-text-indent">Cottage 105</p>
                        <p class="card-text-modal">Services:</p>
                        <p class="card-text-indent">Speaker and Mic</p>
                      </div>
                    </div>
                  </div>
                </div> 
              </div>

              <div class="card-footer">
                <div class="btn-group mx-auto">
                  <button type="button" class="btn btn-danger" name="cancel">Cancel</button>
                  <button type="button" class="btn btn-success" name="confirm">Confirm</button>
                </div>
              </div>
            </div>
          </div>
        </div>
               
        <!-- Reservation List -->
        <p></p>
        <h5>Reservation List</h5>     
          <div class="form-group">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label class="my-1 mr-2" for="filterBy">Filter By:</label>
                <select class="custom-select my-1 mr-sm-2" id="filterBy">
                  <option selected>All</option> 
                  <option value="1">Individual</option>
                  <option value="2">Group</option>
                  <option value="3">Reserved</option>
                  <option value="4">Cancelled</option>
                  <option value="5">Walk-in</option>
                  <option value="6">Call</option>
                  <option value="7">Email</option>
                  <option value="8">DepEd</option>
                  <option value="9">Government</option>
                  <option value="10">Private</option>
                  <option value="11">VIP</option>
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

        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Reservation Number</th>
              <th scope="col">Name / Association</th>
              <th scope="col">Type</th>
              <th scope="col">Mode</th>
              <th scope="col">Affiliation</th>
              <th scope="col">Arrival</th>
              <th scope="col">Departure</th>
              <th scope="col">Status</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <th scope="row">00001</th>
              <td>Ablao, John Mike Salvador</td>
              <td>Individual</td>
              <td>Walk-in</td>
              <td>Government</td>
              <td>April 12, 2018</td>
              <td>April 15, 2018</td>
              <td>Cancelled</td>
            </tr>

            <tr>
              <th scope="row">00002</th>
              <td>Amor, Mica Frias</td> 
              <td>Individual</td>
              <td>Call</td>
              <td>VIP</td>
              <td>January 03, 2019</td>
              <td>January 04, 2019</td>
              <td>Reserved</td>
            </tr>

            <tr>
              <th scope="row">00003</th>
              <td>Baguio City National High School</td>
              <td>Group</td>
              <td>Walk-in</td>
              <td>Government</td>
              <td>May 08, 2018</td>
              <td>May 08, 2018</td>
              <td>Reserved</td>
            </tr>
          </tbody>
        </table>    
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