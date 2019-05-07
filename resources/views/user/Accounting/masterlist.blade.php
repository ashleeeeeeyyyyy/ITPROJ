<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Accounting Office — Master List</title>
    <link rel="icon" href="{{asset('img/accounting/btc-w.png')}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/accounting/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('css/accounting/masterlist.css')}}">
    <link rel="stylesheet" href="{{asset('css/accounting/history.css')}}">
    <link rel="stylesheet" href="{{asset('css/fullcalendar/fullcalendar.css')}}" />
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
                <ul class="list-unstyled components">
                    <li>
                        <a href="dashboard.html" data-toggle="tooltip" data-placement="right" title="Dashboard">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-tachometer-alt icon"></i>&nbsp&nbsp&nbsp&nbsp Dashboard</a>
                    </li>
                    <li>
                        <a href="assessments.html"data-toggle="tooltip" data-placement="right" title="Assessments">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-receipt icon"></i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAssessments</a>
                    </li>
                    <li class="active">
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
                <h5>Master List</h5>
                <form class="nomargin">

                    <div class="form-group">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="my-1 mr-2" for="filterBy">Filter By:</label>
                                <select class="lg custom-select my-1 mr-sm-2" id="filterBy">
                                <option selected></option>  
                                  <option value="1">Assessed</option>
                                  <option value="2">Unassessed</option>
                                  <option value="3">Government</option>
                                  <option value="4">VIP</option>
                                  <option value="5">DepEd</option>
                                  <option value="6">Individual</option> 
                                  <option value="7">Group</option>

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
                <table class="table table-hover" >
                        <thead>
                          <tr>
                            <th scope="col">Registration Number</th>
                            <th scope="col">Name / Association</th>
                            <th scope="col">Type</th>
                            <th scope="col">Mode</th>
                            <th scope="col">Affiliation</th>
                            <th scope="col">Arrival</th>
                            <th scope="col">Departure</th>
                            <th scope="col">Status</th>
                            <th scope="col">Info</th>
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
                            <td>Assessed</td>
                            <td>
                                <button type="button"  data-toggle="modal" data-target="#assessedModal" class="iconBtn"><i class="icon fas fa-file"></i></button>
                                  
                                <!-- Modal -->
                                <div class="modal fade" id="assessedModal" role="dialog">
                                      <div class="modal-dialog modal-lg">

                                      <!-- Modal content-->
                                      <div class="modal-content modal-lg" >
                                        <div class="modal-header" id="infoHead" >
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Assessment Information</h4>
                                         
                                        </div>
                                                  <div id="regInfo">
                                                      <p> <a id="label">Registration Number:  </a> 00001</p>
                                                      <p> <a id="label">Name/Association:  </a> Ablao, John Michael Salvador</p>
                                                      <p> <a id="label">Type:  </a>Individual</p>
                                                      <p> <a id="label">Mode:  </a>Walk-in</p>
                                                      <p> <a id="label">Affiliation:  </a> Government</p>
                                                      <p> <a id="label">Arrival:  </a> April 12, 2018</p>
                                                      <p> <a id="label">Departure:  </a>April 15, 2018</p>
                                                      <p> <a id="label">Assessed By:  </a> Quinit, Jorah R.</p>
                                                      <p> <a id="label">Date Assessed:  </a>April 15, 2018 - 3:00 pm</p>
                                                  </div>
                                                  <div class="modal-body" id="info">
                                                  <div class="FacilitiesTable">
                                                        <table class="table table-striped" id="factab">
                                                            <thead>
                                                                <p><a id="tabIdentifier">Facilities</a></p>
                                                              </thead>

                                                                <thead>
                                                                  <tr>
                                                                    <th scope="col">Facility</th>
                                                                    <th scope="col">Capacity</th>
                                                                    <th scope="col">Nights</th>
                                                                    <th scope="col">Days</th>
                                                                    <th scope="col">Rate</th>
                                                                    <th scope="col">Total Amount</th>
                                                                  </tr>
                                                                </thead>
                                                                <tbody>
                                                                  <tr>
                                                                   
                                                                    <th scope="row">Cottage 104</th>
                                                                    <td>8</td>
                                                                    <td>2</td>
                                                                    <td>0</td>
                                                                    <td>4,500</td>
                                                                    <td>9,000</td>
                                                                  </tr>
                                                                  <tr>
                                                                   
                                                                    <th scope="row">Abada Hall</th>
                                                                    <td>100</td>
                                                                    <td>0</td>
                                                                    <td>1</td>
                                                                    <td>3,500</td>
                                                                    <td>3,500</td>
                                                                  </tr>
                                                                  <tr>
                                                                    <th scope="row">Guesthouse 3 (up)</th>
                                                                    <td>6</td>
                                                                    <td>2</td>
                                                                    <td>0</td>
                                                                    <td>1,900</td>
                                                                    <td>5,700</td>
                                                                  </tr>
                                                                  <tr>
                                                                      <th scope="row">Guesthouse 4 (up)</th>
                                                                      <td>6</td>
                                                                      <td>2</td>
                                                                      <td>0</td>
                                                                      <td>1,900</td>
                                                                      <td>5,700</td>
                                                                    </tr>
                                                                  
                                                                </tbody>
                                                              </table>
                                                              <p > <a id="total">Total:  </a> <u>23, 900.00</u> </p>
                                                              </div>
                                                              
                                                                 
                                                            
                                                            <div class="ChargesTable">
                                                              <table class="table table-striped" id="chartab">
                                                                <thead>
                                                                  <p><a id="tabIdentifier">Services/Charges</a></p>
                                                                </thead>

                                                                  <thead>
                                                                    <tr>
                                                                      <th scope="col">Item</th>
                                                                      <th scope="col">Quantity</th>
                                                                      <th scope="col">Time</th>
                                                                      <th scope="col">Cost</th>
                                                                      <th scope="col">Total Amount</th>
                                                                    </tr>
                                                                  </thead>
                                                                  <tbody>
                                                                    <tr>
                                                                     
                                                                      <th scope="row">Flower Vase</th>
                                                                      <td>1</td>
                                                                      <td>0</td>
                                                                      <td>350</td>
                                                                 
                                                                      <td>350</td>
                                                                    </tr>
                                                                    <tr>
                                                                      </tr>
                                                                      </tbody>
                                                                      </table>
                                                                      <p > <a id="total">Total:  </a> <u>350.00</u> </p>
                                                                      </div>

                                                                      <div class="SubTotal">
                                                                          <p > <a id="subtotal">Sub Total:  </a> <u>24, 250.00</u> </p>
                                                                        </div>
                                                              
                                                             </div>
                                                </div>
                                                
                                              </div>
                                            </div> 
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">00002</th>
                            <td>Amor, Mica Frias</td> 
                            <td>Individual</td>
                            <td>Call</td>
                            <td>VIP</td>
                            <td>January 03, 2019</td>
                            <td>January 04, 2019</td>
                            <td>Unassessed</td>
                            <td>
                                <button type="button"  data-toggle="modal" data-target="#unassessedModal" class="iconBtn"><i class="icon fas fa-file"></i></button>
                                  
                                <!-- Modal -->
                                <div class="modal fade" id="unassessedModal" role="dialog">
                                      <div class="modal-dialog modal-lg">

                                      <!-- Modal content-->
                                      <div class="modal-content modal-lg" >
                                        <div class="modal-header" id="infoHead" >
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Assessment Information</h4>
                                          <a href="assessments.html" id="goto">Go to Assessments</a>
                                        </div>
                                        <div id="regInfo">
                                            <p> <a id="label">Registration Number:  </a> 00002</p>
                                            <p> <a id="label">Name/Association:  </a> Ablao, John Michael Salvador</p>
                                            <p> <a id="label">Type:  </a>Individual</p>
                                            <p> <a id="label">Mode:  </a>Walk-in</p>
                                            <p> <a id="label">Affiliation:  </a> Government</p>
                                            <p> <a id="label">Arrival:  </a> April 12, 2018</p>
                                            <p> <a id="label">Departure:  </a>April 15, 2018</p>
                                          
                                        </div>
                                        <div class="modal-body" id="info">
                                        <div class="FacilitiesTable">
                                              <table class="table table-striped" id="factab">
                                                  <thead>
                                                      <p><a id="tabIdentifier">Facilities</a></p>
                                                    </thead>

                                                      <thead>
                                                        <tr>
                                                          <th scope="col">Facility</th>
                                                          <th scope="col">Capacity</th>
                                                          <th scope="col">Nights</th>
                                                          <th scope="col">Days</th>
                                                          <th scope="col">Rate</th>
                                                          <th scope="col">Total Amount</th>
                                                        </tr>
                                                      </thead>
                                                      <tbody>
                                                        <tr>
                                                         
                                                          <th scope="row">Cottage 104</th>
                                                          <td>8</td>
                                                          <td>2</td>
                                                          <td>0</td>
                                                          <td>4,500</td>
                                                          <td>9,000</td>
                                                        </tr>
                                                        <tr>
                                                         
                                                          <th scope="row">Abada Hall</th>
                                                          <td>100</td>
                                                          <td>0</td>
                                                          <td>1</td>
                                                          <td>3,500</td>
                                                          <td>3,500</td>
                                                        </tr>
                                                        <tr>
                                                          <th scope="row">Guesthouse 3 (up)</th>
                                                          <td>6</td>
                                                          <td>2</td>
                                                          <td>0</td>
                                                          <td>1,900</td>
                                                          <td>5,700</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Guesthouse 4 (up)</th>
                                                            <td>6</td>
                                                            <td>2</td>
                                                            <td>0</td>
                                                            <td>1,900</td>
                                                            <td>5,700</td>
                                                          </tr>
                                                        
                                                      </tbody>
                                                    </table>
                                                    <p > <a id="total">Total:  </a> <u>23, 900.00</u> </p>
                                                    </div>
                                                    
                                                       
                                                  
                                                  <div class="ChargesTable">
                                                    <table class="table table-striped" id="chartab">
                                                      <thead>
                                                        <p><a id="tabIdentifier">Services/Charges</a></p>
                                                      </thead>

                                                        <thead>
                                                          <tr>
                                                            <th scope="col">Item</th>
                                                            <th scope="col">Quantity</th>
                                                            <th scope="col">Time</th>
                                                            <th scope="col">Cost</th>
                                                            <th scope="col">Total Amount</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>
                                                           
                                                            <th scope="row">Flower Vase</th>
                                                            <td>1</td>
                                                            <td>0</td>
                                                            <td>350</td>
                                                       
                                                            <td>350</td>
                                                          </tr>
                                                          <tr>
                                                            </tr>
                                                            </tbody>
                                                            </table>
                                                            <p > <a id="total">Total:  </a> <u>350.00</u> </p>
                                                            </div>

                                                            <div class="SubTotal">
                                                                <p > <a id="subtotal">Sub Total:  </a> <u>24, 250.00</u> </p>
                                                              </div>
                                                    
                                                   </div>
                                                </div>
                                                
                                              </div>
                                            </div> 
                         </td>
                          </tr>
                          <tr>
                            <th scope="row">00003</th>
                            <td>Baguio City National High School</td>
                            <td>Group</td>
                            <td>Walk-in</td>
                            <td>Government</td>
                            <td>May 08, 2018</td>
                            <td>May 08, 2018</td>
                            <td>Assessed</td>
                            <td>
                                <button type="button"  data-toggle="modal" data-target="#assessedModal" class="iconBtn"><i class="icon fas fa-file"></i></button>
                                  
                                <!-- Modal -->
                                <div class="modal fade" id="assessedModal" role="dialog">
                                      <div class="modal-dialog modal-lg">

                                      <!-- Modal content-->
                                      <div class="modal-content modal-lg" >
                                        <div class="modal-header" id="infoHead" >
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Assessment Information</h4>
                                         
                                        </div>

                                        <div id="regInfo">
                                            <p> <a id="label">Registration Number:  </a> 00001</p>
                                            <p> <a id="label">Name/Association:  </a> Ablao, John Michael Salvador</p>
                                            <p> <a id="label">Type:  </a>Individual</p>
                                            <p> <a id="label">Mode:  </a>Walk-in</p>
                                            <p> <a id="label">Affiliation:  </a> Government</p>
                                            <p> <a id="label">Arrival:  </a> April 12, 2018</p>
                                            <p> <a id="label">Departure:  </a>April 15, 2018</p>
                                            <p> <a id="label">Assessed By:  </a> Quinit, Jorah R.</p>
                                            <p> <a id="label">Date Assessed:  </a>April 15, 2018 - 3:00 pm</p>
                                        </div>
                                        <div class="modal-body" id="info">
                                        <div class="FacilitiesTable">
                                              <table class="table table-striped" id="factab">
                                                  <thead>
                                                      <p><a id="tabIdentifier">Facilities</a></p>
                                                    </thead>

                                                      <thead>
                                                        <tr>
                                                          <th scope="col">Facility</th>
                                                          <th scope="col">Capacity</th>
                                                          <th scope="col">Nights</th>
                                                          <th scope="col">Days</th>
                                                          <th scope="col">Rate</th>
                                                          <th scope="col">Total Amount</th>
                                                        </tr>
                                                      </thead>
                                                      <tbody>
                                                        <tr>
                                                         
                                                          <th scope="row">Cottage 104</th>
                                                          <td>8</td>
                                                          <td>2</td>
                                                          <td>0</td>
                                                          <td>4,500</td>
                                                          <td>9,000</td>
                                                        </tr>
                                                        <tr>
                                                         
                                                          <th scope="row">Abada Hall</th>
                                                          <td>100</td>
                                                          <td>0</td>
                                                          <td>1</td>
                                                          <td>3,500</td>
                                                          <td>3,500</td>
                                                        </tr>
                                                        <tr>
                                                          <th scope="row">Guesthouse 3 (up)</th>
                                                          <td>6</td>
                                                          <td>2</td>
                                                          <td>0</td>
                                                          <td>1,900</td>
                                                          <td>5,700</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Guesthouse 4 (up)</th>
                                                            <td>6</td>
                                                            <td>2</td>
                                                            <td>0</td>
                                                            <td>1,900</td>
                                                            <td>5,700</td>
                                                          </tr>
                                                        
                                                      </tbody>
                                                    </table>
                                                    <p > <a id="total">Total:  </a> <u>23, 900.00</u> </p>
                                                    </div>
                                                    
                                                       
                                                  
                                                  <div class="ChargesTable">
                                                    <table class="table table-striped" id="chartab">
                                                      <thead>
                                                        <p><a id="tabIdentifier">Services/Charges</a></p>
                                                      </thead>

                                                        <thead>
                                                          <tr>
                                                            <th scope="col">Item</th>
                                                            <th scope="col">Quantity</th>
                                                            <th scope="col">Time</th>
                                                            <th scope="col">Cost</th>
                                                            <th scope="col">Total Amount</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>
                                                           
                                                            <th scope="row">Flower Vase</th>
                                                            <td>1</td>
                                                            <td>0</td>
                                                            <td>350</td>
                                                       
                                                            <td>350</td>
                                                          </tr>
                                                          <tr>
                                                            </tr>
                                                            </tbody>
                                                            </table>
                                                            <p > <a id="total">Total:  </a> <u>350.00</u> </p>
                                                            </div>

                                                            <div class="SubTotal">
                                                                <p > <a id="subtotal">Sub Total:  </a> <u>24, 250.00</u> </p>
                                                              </div>
                                                    
                                                   </div>
                                      </div>
                                      
                                    </div>
                                  </div> 
                            </td>
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