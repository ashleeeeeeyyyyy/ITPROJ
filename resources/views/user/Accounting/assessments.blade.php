<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Accounting Office — Assessments</title>
    <link rel="icon" href="img/btc-g.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/accounting/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('css/accounting/reservation.css')}}">
    <link rel="stylesheet" href="{{asset('css/accounting/assessments.css')}}">
    <script src="{{asset('lib/accounting/jquery.min.js')}}"></script>
    <script src="{{asset('js/accounting/jquery.sticky.js')}}"></script>
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
            <li>
                    <a href="dashboard.html" data-toggle="tooltip" data-placement="right" title="Dashboard">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-tachometer-alt icon"></i>&nbsp&nbsp&nbsp&nbsp Dashboard</a>
                </li>
                <li  class="active">
                    <a href="Assessments.html" data-toggle="tooltip" data-placement="right" title="Assessments">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-receipt icon"></i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAssessments</a>
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
  
  <div class="col-lg-12">
    <div class="form-row">
      <ul class="nav nav-pills mb-3 mx-auto pills-tab" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link" id="pills-unassessed-tab" data-toggle="pill" href="#pills-unassessed" role="tab" aria-controls="pills-unassessed" aria-selected="false"><i class="fas fa-user individual"></i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspUnassessed</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-assessed-tab" data-toggle="pill" href="#pills-assessed" role="tab" aria-controls="pills-assessed" aria-selected="false"><i class="fas fa-users individual"></i>&nbsp&nbsp&nbsp&nbsp&nbspAssessed</a>
              </li>
      </ul>
    </div>
    <div class="tab-pane fade" id="pills-unassessed" role="tabpanel" aria-labelledby="pills-individual-tab">
            <div class="card-deck" id="confCard">
                    
                    <div class="card border-primary mb-3" style="max-width: 18rem;" id="cardUnassessed">
                        <div class="card-header" id="cardHead-unassessed">Amado, Joe T.</div>
                        <div class="card-body text-primary">
                        <p class="card-text">Type: Individual</p>
                        <p class="card-text">Contact: 09165445638</p>
                        <p class="card-text">Category: Non-DepEd</p>
                        <p class="card-text">No. of Person: 55</p>
                        <p class="card-text">Date of Arrival: March 13, 2019 </p>
                        <p class="card-text">Date of Departure: March 15, 2019</p>
                        <p class="card-text">Total: Php 3,545.00</p>
                        <a href="#myModal"  data-toggle="modal" data-target="#myModal">Other Details</a>
                          
                                       <!-- Modal -->
                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog modal-lg">

                                    <!-- Modal content-->
                                    <div class="modal-content modal-lg" >
                                      <div class="modal-header" id="infoHead" >
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Facilities, Services and Charges</h4>
                                       
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
                        </div>
                          <div class="confBttns">
                         
                          <a href="#charges" class="btn btn-primary"  data-toggle="modal" data-target="#charges" id="crossBtn">Charges</a>
                                   

                        <a href="#" class="btn btn-primary" id="checkBtn">Checkout</a>
                        </div>
                      </div>

                      <div class="card border-primary mb-3" style="max-width: 18rem;" id="cardUnassessed">
                        <div class="card-header" id="cardHead-unassessed">Amado, Joe T.</div>
                        <div class="card-body text-primary">
                        <p class="card-text">Type: Individual</p>
                        <p class="card-text">Contact: 09165445638</p>
                        <p class="card-text">Category: Non-DepEd</p>
                        <p class="card-text">No. of Person: 55</p>
                        <p class="card-text">Date of Arrival: March 13, 2019 </p>
                        <p class="card-text">Date of Departure: March 15, 2019</p>
                        <p class="card-text">Total: Php 3,545.00</p>
                        <a href="#myModal"  data-toggle="modal" data-target="#myModal">Other Details</a>
                          
                                                 <!-- Modal -->
                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog modal-lg">

                                    <!-- Modal content-->
                                    <div class="modal-content modal-lg" >
                                      <div class="modal-header" id="infoHead" >
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Facilities, Services and Charges</h4>
                                       
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
                        </div>
                          <div class="confBttns">
                         
                          <a href="#charges" class="btn btn-primary"  data-toggle="modal" data-target="#charges" id="crossBtn">Charges</a>
                            
                                        <!-- Modal -->
                                        <div class="modal fade" id="charges" role="dialog">
                                          <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content" id="try">
                                              <div class="modal-header" id="headerCharges">
                                                <h4 class="modal-title">Charges</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              </div>
                                              <div class="modal-body" id="bodyCharges"> 
                                                <div class="container">
                                                    <div class="table-title">
                                                        <div class="row">
                                                            <div class="col-sm-4" id="addNew">
                                                                <button type="button" class="btn btn-info add-new" ><i class="fa fa-plus"></i> Add New</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  <div class="table-wrapper">
                                                    
                                                      <table class="table table-bordered" id="chargesMain">
                                                          <thead>
                                                              <tr>
                                                                  <th>Item</th>
                                                                  <th>Quantity</th>
                                                                  <th>Price</th>
                                                                  <th>Actions</th>
                                                              </tr>
                                                          </thead>
                                                          <tbody id="chargesBody">
                                                              <tr>
                                                                  <td>Flower Vase</td>
                                                                  <td>1</td>
                                                                  <td>350</td>
                                                                  <td>
                                                                      <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                                                      <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                                                      <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                                                  </td>
                                                              </tr>
                                                              <tr>
                                                                  <td>Water Glass</td>
                                                                  <td>3</td>
                                                                  <td>50</td>
                                                                  <td>
                                                                      <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                                                      <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                                                      <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                                                  </td>
                                                              </tr>
                                                              <tr>
                                                                  <td>Mirro</td>
                                                                  <td>1</td>
                                                                  <td>750</td>
                                                                  <td>
                                                                      <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                                                      <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                                                      <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                                                  </td>
                                                              </tr>      
                                                          </tbody>
                                                      </table>
                                                  </div>
                                              </div>       



                                              
                                              </div>
                                              <div class="modal-footer">
                                                
                                                  <a href="#" class="btn btn-primary"id="crossBtn">Cancel</a>
                                                <a href="#" class="btn btn-primary" id="checkBtn">Update</a>
                                                
                                                
                                              </div>

                                            </div>
                                            
                                          </div>
                                        </div> 
                        <a href="#" class="btn btn-primary" id="checkBtn">Checkout</a>
                        </div>
                      </div>

                      <div class="card border-primary mb-3" style="max-width: 18rem;" id="cardUnassessed">
                        <div class="card-header" id="cardHead-unassessed">Amado, Joe T.</div>
                        <div class="card-body text-primary">
                        <p class="card-text">Type: Individual</p>
                        <p class="card-text">Contact: 09165445638</p>
                        <p class="card-text">Category: Non-DepEd</p>
                        <p class="card-text">No. of Person: 55</p>
                        <p class="card-text">Date of Arrival: March 13, 2019 </p>
                        <p class="card-text">Date of Departure: March 15, 2019</p>
                        <p class="card-text">Total: Php 3,545.00</p>
                        <a href="#myModal"  data-toggle="modal" data-target="#myModal" id="chaPass">Other Details</a>
                          
                                                <!-- Modal -->
                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog modal-lg">

                                    <!-- Modal content-->
                                    <div class="modal-content modal-lg" >
                                      <div class="modal-header" id="infoHead" >
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Facilities, Services and Charges</h4>
                                       
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
                        </div>
                          <div class="confBttns">
                              <a href="#charges" class="btn btn-primary"  data-toggle="modal" data-target="#charges" id="crossBtn">Charges</a>
                            
                             
                          
                        <a href="#" class="btn btn-primary" id="checkBtn">Checkout</a>
                        </div>
                      </div>

                      <div class="card border-primary mb-3" style="max-width: 18rem;" id="cardUnassessed">
                        <div class="card-header" id="cardHead-unassessed">Zy, Joe T.</div>
                        <div class="card-body text-primary">
                        <p class="card-text">Type: Individual</p>
                        <p class="card-text">Contact: 09165445638</p>
                        <p class="card-text">Category: Non-DepEd</p>
                        <p class="card-text">No. of Person: 55</p>
                        <p class="card-text">Date of Arrival: March 13, 2019 </p>
                        <p class="card-text">Date of Departure: March 15, 2019</p>
                        <p class="card-text">Total: Php 3,545.00</p>
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
                          <div class="confBttns">
                            <a href="#charges" class="btn btn-primary"  data-toggle="modal" data-target="#charges" id="crossBtn">Charges</a>
                            
                                      
                        <a href="#" class="btn btn-primary" id="checkBtn">Checkout</a>
                        </div>
                      </div>
</div> 
            </div>

            <div class="tab-pane fade" id="pills-assessed" role="tabpanel" aria-labelledby="pills-assessed-tab">
              <div class="card-deck" id="confCard">
                      
                      <div class="card border-primary mb-3" style="max-width: 18rem;" id="cardAssessed">
                          <div class="card-header" id="cardHead-assessed">Amado, Joe T.</div>
                          <div class="card-body text-primary">
                          <p class="card-text">Type: Individual</p>
                          <p class="card-text">Contact: 09165445638</p>
                          <p class="card-text">Category: Non-DepEd</p>
                          <p class="card-text">No. of Person: 55</p>
                          <p class="card-text">Date of Arrival: March 13, 2019 </p>
                          <p class="card-text">Date of Departure: March 15, 2019</p>
                          <p class="card-text">Total: Php 3,545.00</p>
                          <a href="#myModal"  data-toggle="modal" data-target="#assessedModal" id="show">Show More</a>
                            
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
                          </div>
                           </div>


                           <div class="card border-primary mb-3" style="max-width: 18rem;" id="cardAssessed">
                              <div class="card-header" id="cardHead-assessed">Amado, Joe T.</div>
                              <div class="card-body text-primary">
                              <p class="card-text">Type: Individual</p>
                              <p class="card-text">Contact: 09165445638</p>
                              <p class="card-text">Category: Non-DepEd</p>
                              <p class="card-text">No. of Person: 55</p>
                              <p class="card-text">Date of Arrival: March 13, 2019 </p>
                              <p class="card-text">Date of Departure: March 15, 2019</p>
                              <p class="card-text">Total: Php 3,545.00</p>
                             
                                
                              <a href="#myModal"  data-toggle="modal" data-target="#assessedModal" id="show">Show More</a>
                            
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
                              </div>
                                
                            </div>
    
                            <div class="card border-primary mb-3" style="max-width: 18rem;" id="cardAssessed">
                              <div class="card-header" id="cardHead-assessed">Amado, Joe T.</div>
                              <div class="card-body text-primary">
                              <p class="card-text">Type: Individual</p>
                              <p class="card-text">Contact: 09165445638</p>
                              <p class="card-text">Category: Non-DepEd</p>
                              <p class="card-text">No. of Person: 55</p>
                              <p class="card-text">Date of Arrival: March 13, 2019 </p>
                              <p class="card-text">Date of Departure: March 15, 2019</p>
                              <p class="card-text">Total: Php 3,545.00</p>
                              <a href="#myModal"  data-toggle="modal" data-target="#assessedModal" id="show">Show More</a>
                            
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
        });9
    </script>

<script type="text/javascript">
  $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
      var actions = $("#chargesMain td:last-child").html();
      // Append table with add row form on add new button click
      $(".add-new").click(function(){
          $(this).attr("disabled", "disabled");
          var index = $("table #chargesBody tr:last-child").index();
          var row = '<tr>' +
              '<td><input type="text" class="form-control" name="item" id="item"></td>' +
              '<td><input type="text" class="form-control" name="quantity" id="quantity"></td>' +
              '<td><input type="text" class="form-control" name="price" id="price"></td>' +
              '<td>' + actions + '</td>' +
          '</tr>';
          $("#chargesMain").append(row);    
          $("table #chargesBody tr").eq(index + 1).find(".add, .edit").toggle();
          $('[data-toggle="tooltip"]').tooltip();
      });
      // Add row on add button click
      $(document).on("click", ".add", function(){
          var empty = false;
          var input = $(this).parents("tr").find('input[type="text"]');
          input.each(function(){
              if(!$(this).val()){
                  $(this).addClass("error");
                  empty = true;
              } else{
                  $(this).removeClass("error");
              }
          });
          $(this).parents("tr").find(".error").first().focus();
          if(!empty){
              input.each(function(){
                  $(this).parent("td").html($(this).val());
              });     
              $(this).parents("tr").find(".add, .edit").toggle();
              $(".add-new").removeAttr("disabled");
          }   
      });
      // Edit row on edit button click
      $(document).on("click", ".edit", function(){    
          $(this).parents("tr").find("td:not(:last-child)").each(function(){
              $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
          });   
          $(this).parents("tr").find(".add, .edit").toggle();
          $(".add-new").attr("disabled", "disabled");
      });
      // Delete row on delete button click
      $(document).on("click", ".delete", function(){
          $(this).parents("tr").remove();
          $(".add-new").removeAttr("disabled");
      });
  });
  </script>
      

</body>

</html>