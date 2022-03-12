<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta name="description" content="Responsive Admin Template"/>
    <meta name="author" content="SmartUniversity"/>
    <title>Spice Hotel | Bootstrap 4 Admin Dashboard Template + UI Kit</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css"/>
    <!-- icons -->
    <link href="/assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <!--bootstrap -->
    <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="/assets/plugins/material/material.min.css">
    <link rel="stylesheet" href="/assets/css/material_style.css">
    <!-- data tables -->
    <link href="/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet"
          type="text/css"/>
    <!-- animation -->
    <link href="/assets/css/pages/animate_page.css" rel="stylesheet">
    <!-- Template Styles -->
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/plugins.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/responsive.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/theme-color.css" rel="stylesheet" type="text/css"/>
    <!-- favicon -->
    <link rel="shortcut icon" href="/assets/img/favicon.ico"/>
    <style>
        span {
            color: red !important;
        }
        .uk{
            display: none !important;
        }
    </style>
</head>
<!-- END HEAD -->
<body>
<div>
    <a href="\reception" class="btn-primary">Go back</a>
    <div class="row">
        <div class="col-sm-12 px-lg-5 mt-5">
            <div class="card-box">
                <div class="card-head">
                    <header>Add Room Booking</header>
                </div>
                <form action="/edit/room/">
                    <input type="hidden" name="id" value="{{$id}}">
                    <div class="card-body row">

                            <div class="col-lg-6 p-t-10">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="text" id="txtFirstName"
                                           name="FirstName" value="{{$booking_data->FirstName}}">
                                    <label class="mdl-textfield__label uk">First Name</label>
                                    <span>@error('FirstName') {{$message}} @enderror</span>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-10">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="text" id="txtLasttName"
                                           name="LastName" value="{{$booking_data->LastName}}">
                                    <label class="mdl-textfield__label uk">Last Name</label>
                                    <span>@error('LastName') {{$message}} @enderror</span>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-10">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="email" id="txtemail" name="Email" value="{{$booking_data->Email}}">
                                    <label class="mdl-textfield__label uk">Email</label>
                                    <span>@error('Email') {{$message}} @enderror</span>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-10">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                    <select name="Gender">
                                        <option value="{{$booking_data->Gender}}">{{$booking_data->Gender}}</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    <span>@error('Gender') {{$message}} @enderror</span>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-10">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="text" value="{{$booking_data->MobileNumber}}"
                                           pattern="-?[0-9]*(\.[0-9]+)?" id="text5" name="MobileNumber">
                                    <label class="mdl-textfield__label uk" for="text5">Mobile Number</label>
                                    <span>@error('MobileNumber') {{$message}} @enderror</span>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-10">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="text" id="txtCity" name="City" value="{{$booking_data->city}}">
                                    <label class="mdl-textfield__label uk   ">City</label>
                                    <span>@error('City') {{$message}} @enderror</span>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-20">
                                <div>
                                    <label>Number of Persons</label>
                                    <select name="Number_of_Persons">
                                        <option value="{{$booking_data->no_of_persons}}">{{$booking_data->no_of_persons}}</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    <span>@error('Number_of_Persons') {{$message}} @enderror</span>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-10 mt-3">
                                <div>
                                    <label>Room Type</label>
                                    <select name="RoomType">
                                        <option value="{{$booking_data->RoomType}}">{{$booking_data->RoomType}}</option>
                                        <option value="Single">Single</option>
                                        <option value="Double">Double</option>
                                        <option value="Family">Family</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 p-t-10">
                                <div class="mdl-textfield mdl-js-textfield txt-full-width">
					                     <input class="mdl-textfield__input" rows="1"
                                                   id="text7" name="Address" value="{{$booking_data->Address}}"></input>
                                    <label class="mdl-textfield__label uk" for="text7" style="color: black">{{$booking_data->Address}}</label>
                                    <span>@error('Address') {{$message}} @enderror</span>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-10 mt-4">
                                <div>
                                    <label>Status</label>
                                    <select name="Status">
                                        <option value="{{$booking_data->Status}}">{{$booking_data->Status}}</option>
                                        <option value="Unpaid">Unpaid</option>
                                        <option value="Paid">Paid</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 p-t-10 text-center">
                                <button type="submit"
                                        class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">
                                    Submit
                                </button>
                            </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
<!-- start js include path -->
<script src="/assets/plugins/jquery/jquery.min.js"></script>
<script src="/assets/plugins/popper/popper.min.js"></script>
<script src="/assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
<script src="/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- bootstrap -->
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- Common js-->
<script src="/assets/js/app.js"></script>
<script src="/assets/js/layout.js"></script>
<script src="/assets/js/theme-color.js"></script>
<!-- data tables -->
<script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js"></script>
<script src="/assets/js/pages/table/table_data.js"></script>
<!-- Material -->
<script src="assets/plugins/material/material.min.js"></script>
<!-- animation -->
<script src="assets/js/pages/ui/animations.js"></script>
<!-- end js include path -->
</html>
</body>
