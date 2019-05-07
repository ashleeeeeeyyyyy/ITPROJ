<!DOCTYPE html>
<html>
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Reservation Office — Reservation</title>
        <link rel="icon" href="{{asset('img/reservation/btc-w.png')}}">
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/reservation/reservation2.css')}}">
        <link rel="stylesheet" href="{{asset('css/reservation/dashboard.css')}}">
        <link rel="stylesheet" href="{{asset('css/fullcalendar/fullcalendar.css')}}">
    	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    	<script src="{{asset('lib/reservation/jquery.min.js')}}"></script>
        <script src="{{asset('lib/reservation/moment.min.js')}}"></script>
        <script src="{{asset('js/reservation/fullcalendar.js')}}"></script>
    </head>

    <body>
        <div class="wrapper">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="text-center">
                    <img src="img/icon.svg" class="rounded mx-auto d-block" alt="User Picture">
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

                    <li class="active">
                        <a href="reservation.html" data-toggle="tooltip" data-placement="right" title="Reservation">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-plus-circle icon"></i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspReservation</a>
                    </li>

                    <li>
                        <a href="confirmation.html" data-toggle="tooltip" data-placement="right" title="Confirmation">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-check-circle icon"></i>&nbsp&nbsp&nbsp&nbsp&nbsp Confirmation</a>
                    </li>

                    <li>
                        <a href="history.html" data-toggle="tooltip" data-placement="right" title="History">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-history icon"></i>&nbsp&nbsp&nbsp&nbsp&nbsp History</a>
                    </li>
                    <li>
                      <a href="{{ url('/login/logout') }}">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-sign-out-alt">  </i>&nbsp&nbsp&nbsp&nbsp&nbsp Logout</a>
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
                        <img src="{[asset('img/reservation/btc-w.png')}}" id="logo">
                    </div>
                </nav>

                <h5>RESERVATION</h5>
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

                <!-- Cards -->
                <!-- Individual Reservation -->
                <div>
                    <div class="card card-body">
                        <form>
                            <!-- Name of Guest -->
                            <div class="form-row">
                                <h4>Facilites</h4><br>
                            </div>

                            <div class="form-row">
                                <ul class="nav nav-pills mb-3 mx-auto pills-tab" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-dormitories-tab" data-toggle="pill" href="#pills-dormitories" role="tab" aria-controls="pills-dormitories" aria-selected="true">Dormitories</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-cottages-tab" data-toggle="pill" href="#pills-cottages" role="tab" aria-controls="pills-cottages" aria-selected="false">Cottages</a>
                                    </li>

                                    <li class="nav-item">
                                      <a class="nav-link" id="pills-guesthouses-tab" data-toggle="pill" href="#pills-guesthouses" role="tab" aria-controls="pills-guesthouses" aria-selected="false">Guesthouses</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-conference-halls-tab" data-toggle="pill" href="#pills-conference-halls" role="tab" aria-controls="pills-conference-halls" aria-selected="false">Conference Halls</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-dining-tab" data-toggle="pill" href="#pills-dining" role="tab" aria-controls="pills-dining" aria-selected="false">Dining / Kitchen</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-others-tab" data-toggle="pill" href="#pills-others" role="tab" aria-controls="pills-others" aria-selected="false">Others</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content" id="pills-tabContent">
                                <!-- Dormitories -->
                                <div class="tab-pane fade show active" id="pills-dormitories" role="tabpanel" aria-labelledby="pills-dormitories-tab">
                                    <div class="center-margin">
                                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <li class="nav-item active">
                                                <a class="nav-link active" id="pills-recto-tab" data-toggle="pill" href="#pills-recto" role="tab" aria-controls="pills-recto" aria-selected="true">Recto Hall</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-sq-tab" data-toggle="pill" href="#pills-sq" role="tab" aria-controls="pills-sq" aria-selected="false">SQ Medical</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-pages-tab" data-toggle="pill" href="#pills-pages" role="tab" aria-controls="pills-pages" aria-selected="false">Pages Hall</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-quirino-tab" data-toggle="pill" href="#pills-quirino" role="tab" aria-controls="pills-quirino" aria-selected="false">Quirino Hall</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-roxas-tab" data-toggle="pill" href="#pills-roxas" role="tab" aria-controls="pills-roxas" aria-selected="false">Roxas Hall</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-hernandez-tab" data-toggle="pill" href="#pills-hernandez" role="tab" aria-controls="pills-hernandez" aria-selected="false">Hernandez Hall</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-escoda-tab" data-toggle="pill" href="#pills-escoda" role="tab" aria-controls="pills-escoda" aria-selected="false">Escoda</a>
                                            </li>
                                        </ul>       
                                    </div>

                                    <!-- Cottages -->
                                    <div class="tab-pane fade" id="pills-recto" role="tabpanel" aria-labelledby="pills-recto-tab">
                                    </div>
                                    <!-- Guesthouses -->
                                    <div class="tab-pane fade" id="pills-sq" role="tabpanel" aria-labelledby="pills-sq-tab">
                                    </div>
                                    <!-- Conference Halls -->
                                    <div class="tab-pane fade" id="pills-pages" role="tabpanel" aria-labelledby="pills-pages-tab">
                                    </div>

                                    <!-- Dining or Kitchen -->
                                    <div class="tab-pane fade" id="pills-quirino" role="tabpanel" aria-labelledby="pills-quirino-tab">
                                    </div>

                                    <!-- Others -->
                                    <div class="tab-pane fade" id="pills-roxas" role="tabpanel" aria-labelledby="pills-roxas-tab">
                                    </div>

                                    <div class="tab-pane fade" id="pills-hernandez" role="tabpanel" aria-labelledby="pills-hernandez-tab">
                                    </div>
                                        
                                    <div class="tab-pane fade" id="pills-escoda" role="tabpanel" aria-labelledby="pills-escoda-tab">
                                    </div>

                                    <button type="submit">Submit</button>
                                </div>

                                <!-- Cottages -->
                                <div class="tab-pane fade" id="pills-cottages" role="tabpanel" aria-labelledby="pills-cottages-tab">
                                </div>

                                <!-- Guesthouses -->
                                <div class="tab-pane fade" id="pills-guesthouses" role="tabpanel" aria-labelledby="pills-guesthouses-tab">
                                </div>

                                <!-- Conference Halls -->
                                <div class="tab-pane fade" id="pills-conference-halls" role="tabpanel" aria-labelledby="pills-conference-halls-tab">
                                </div>

                                <!-- Dining or Kitchen -->
                                <div class="tab-pane fade" id="pills-dining" role="tabpanel" aria-labelledby="pills-dining-tab">
                                </div>

                                <!-- Others -->
                                <div class="tab-pane fade" id="pills-others" role="tabpanel" aria-labelledby="pills-others-tab">
                                </div>
                            </div>
                        </div>
                    </form>
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