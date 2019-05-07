<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Reservation Office — Reservation</title>
		<link rel="icon" href="{{asset('img/reservation/btc-w.png')}}">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<link rel="stylesheet" href="{{asset('css/reservation/reservation.css')}}">
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
					<img src="{{asset('img/reservation/icon.svg')}}" class="rounded mx-auto d-block" alt="User Picture">
					<strong>{{{ Auth::user()->f_name}} {{ Auth::user()->l_name}}</strong><br>
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
						<button type="button" id="sidebarCollapse" class="btn btn-info"> <i class="fas fa-align-left"></i></button>
						<img src="{{asset('img/reservation/btc-w.png')}}" id="logo">
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
				<div class="form-row">
					<ul class="nav nav-pills mb-3 mx-auto pills-tab" id="pills-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link" id="pills-individual-tab" data-toggle="pill" href="#pills-individual" role="tab" aria-controls="pills-individual" aria-selected="false"><i class="fas fa-user individual"></i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspIndividual Reservation</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" id="pills-group-tab" data-toggle="pill" href="#pills-group" role="tab" aria-controls="pills-group" aria-selected="false"><i class="fas fa-users individual"></i>&nbsp&nbsp&nbsp&nbsp&nbspGroup Reservation</a>
						</li>
					</ul>
				</div>

				<!-- Individual Reservation -->
				<div class="tab-pane fade" id="pills-individual" role="tabpanel" aria-labelledby="pills-individual-tab">
					<div class="card card-body">
						<form>
							<!-- Name of Guest -->
							<div class="form-row">
								<h4>Personal Information</h4><br>
							</div>

							<div class="form-row">
								<div class="col-md-4">
									<label for="inputName">Name of Guest</label>
									<input type="text" class="form-control" placeholder="First Name" required>
								</div>

								<div class="col-md-4">
									<label for="inputName"></label><br>
									<input type="text" class="form-control" placeholder="Middle Name">
								</div>

								<div class="col-md-4">
									<label for="inputName"></label>
									<input type="text" class="form-control" placeholder="Last Name">
								</div>
							</div><br>
							
							<!-- Phone Number -->
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputNumber">Cellphone Number</label>
									<input type="tel" class="form-control" id="inputNumber" placeholder="09123456789">
								</div>

								<div class="form-group col-md-6">
									<label for="inputTelephoneNumber">Telephone Number</label>
									<input type="tel" class="form-control" id="inputTelNumber" placeholder="(045) 661-1234">
								</div>
							</div><br>

							<!-- Reservation Information -->
							<div class="form-row">
								<h4>Reservation Information</h4><br>
							</div>

							<div class="form-group">
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="inputDateArrival">Date of Arrival</label>
										<input type="date" class="form-control" id="inputDateArrival" placeholder="">
									</div>

									<div class="form-group col-md-6">
										<label for="inputDateDepart">Date of Departure</label>
										<input type="date" class="form-control" id="inputDateDepart" placeholder="">
									</div>
								</div>

								<div class="form-group"><br>
									<a href="reservation2.html" role="button" class="btn btn-success btn-lg" name="next">Next</a>
								</div>
							</div>
						</form>
					</div>
				</div>

				<div class="tab-pane fade" id="pills-group" role="tabpanel" aria-labelledby="pills-group-tab">
					<div class="card card-body">
						<form>
							<!-- Name of Guest -->
							<div class="form-row">
								<h4>Personal Information</h4><br>
							</div>

							<div class="form-row">
								<div class="col-md-8">
									<label for="inputName">Name of Guest/Group/Organization</label>
									<input type="text" class="form-control" placeholder="" required>
								</div>
							</div><br>

							<!-- Phone Number -->
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputNumber">Office Fax Number</label>
									<input type="tel" class="form-control" id="inputNumber" placeholder="09123456789">
								</div>
								<div class="form-group col-md-6">
									<label for="inputTelephoneNumber">Office Telephone Number</label>
									<input type="tel" class="form-control" id="inputTelNumber" placeholder="(045) 661-1234">
								</div>
							</div><br>

							<!-- Reservation Information -->
							<div class="form-row">
								<h4>Reservation Information</h4><br>
							</div>

							<div class="form-group">
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="inputDateArrival">Date of Arrival</label>
										<input type="date" class="form-control" id="inputDateArrival" placeholder="">
									</div>

									<div class="form-group col-md-6">
										<label for="inputDateDepart">Date of Departure</label>
										<input type="date" class="form-control" id="inputDateDepart" placeholder="">
									</div>

									<div class="form-group"><br>
										<a href="reservation2.html" role="button" class="btn btn-success btn-lg" name="next">Next</a>
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