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
    <link href="assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <!--bootstrap -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="assets/plugins/material/material.min.css">
    <link rel="stylesheet" href="assets/css/material_style.css">
    <!-- data tables -->
    <link href="assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet"
          type="text/css"/>
    <!-- animation -->
    <link href="assets/css/pages/animate_page.css" rel="stylesheet">
    <!-- Template Styles -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/plugins.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/theme-color.css" rel="stylesheet" type="text/css"/>
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico"/>
</head>
<!-- END HEAD -->
<body
    class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
<div class="page-wrapper">

    <!-- start page container -->
    <div class="page-container">

        <!-- start page content -->

        <div class="page-content">

            <div class="tab-content tab-space">
                <div class="tab-pane active show" id="tab1">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-box">
                                <div class="card-head">
                                    <button id="panel-button"
                                            class="mdl-button mdl-js-button mdl-button--icon pull-right"
                                            data-upgraded=",MaterialButton">
                                        <i class="material-icons">more_vert</i>
                                    </button>
                                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                        data-mdl-for="panel-button">
                                        <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
                                        </li>
                                        <li class="mdl-menu__item"><i class="material-icons">print</i>Another action
                                        </li>
                                        <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
                                            here
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body ">
                                    <div class="table-scrollable">
                                        <table class="table table-hover table-checkable order-column full-width"
                                               id="example4">
                                            <thead>
                                            <tr>
                                                <th class="center"> Name</th>
                                                <th class="center"> Designation</th>
                                                <th class="center"> Mobile</th>
                                                <th class="center"> Email</th>
                                                <th class="center"> Address</th>
                                                <th class="center">Joining Date</th>
                                                <th class="center"> Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($members as $member)
                                                <tr class="odd gradeX">
                                                    <td class="center">{{$member->FirstName}}
                                                        &nbsp{{$member->LastName}}</td>
                                                    <td class="center">{{$member->Role}}</td>
                                                    <td class="center"><a href="tel:{{$member->MobileNumber}}">
                                                            {{$member->MobileNumber}} </a></td>
                                                    <td class="center"><a href="mailto:{{$member->Email}}">
                                                            {{$member->Email}} </a></td>
                                                    <td class="center">{{$member->Address}}</td>
                                                    <td class="center">{{$member->JoiningDate}}</td>
                                                    <td class="center">
                                                        <a href="/edit/staff/{{$member->id}}"
                                                           class="btn btn-tbl-edit btn-xs">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a href="/delete/staff/{{$member->id}}"
                                                           class="btn btn-tbl-delete btn-xs">
                                                            <i class="fa fa-trash-o "></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab2">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="m-b-20">
                                    <div class="doctor-profile">
                                        <div class="profile-header bg-b-purple">
                                            <div class="user-name">Pooja Patel</div>
                                            <div class="name-center">General Manager</div>
                                        </div>
                                        <img src="assets/img/user/usrbig1.jpg" class="user-img"
                                             alt="">
                                        <p>
                                            A-103, shyam gokul flats, Mahatma Road <br/>Mumbai
                                        </p>
                                        <div>
                                            <p>
                                                <i class="fa fa-phone"></i><a href="tel:(123)456-7890">
                                                    (123)456-7890</a>
                                            </p>
                                        </div>
                                        <div class="profile-userbuttons">
                                            <a href="staff_profile.html"
                                               class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="m-b-20">
                                    <div class="doctor-profile">
                                        <div class="profile-header cyan-bgcolor">
                                            <div class="user-name">Smita Patil</div>
                                            <div class="name-center">Housekeeper</div>
                                        </div>
                                        <img src="assets/img/user/usrbig2.jpg" class="user-img"
                                             alt="">
                                        <p>
                                            45, Krishna Tower, Near Bus Stop, Satellite, <br/>Ahmedabad
                                        </p>
                                        <div>
                                            <p>
                                                <i class="fa fa-phone"></i><a href="tel:(123)456-7890">
                                                    (123)456-7890</a>
                                            </p>
                                        </div>
                                        <div class="profile-userbuttons">
                                            <a href="staff_profile.html"
                                               class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="m-b-20">
                                    <div class="doctor-profile">
                                        <div class="profile-header light-dark-bgcolor">
                                            <div class="user-name">John Smith</div>
                                            <div class="name-center">Cook</div>
                                        </div>
                                        <img src="assets/img/user/usrbig3.jpg" class="user-img"
                                             alt="">
                                        <p>
                                            456, Estern evenue, Courtage area, <br/>New York
                                        </p>
                                        <div>
                                            <p>
                                                <i class="fa fa-phone"></i><a href="tel:(123)456-7890">
                                                    (123)456-7890</a>
                                            </p>
                                        </div>
                                        <div class="profile-userbuttons">
                                            <a href="staff_profile.html"
                                               class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="m-b-20">
                                    <div class="doctor-profile">
                                        <div class="profile-header bg-b-orange">
                                            <div class="user-name">Pooja Patel</div>
                                            <div class="name-center">General Manager</div>
                                        </div>
                                        <img src="assets/img/user/usrbig4.jpg" class="user-img"
                                             alt="">
                                        <p>
                                            A-103, shyam gokul flats, Mahatma Road <br/>Mumbai
                                        </p>
                                        <div>
                                            <p>
                                                <i class="fa fa-phone"></i><a href="tel:(123)456-7890">
                                                    (123)456-7890</a>
                                            </p>
                                        </div>
                                        <div class="profile-userbuttons">
                                            <a href="staff_profile.html"
                                               class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="m-b-20">
                                    <div class="doctor-profile">
                                        <div class="profile-header bg-b-green">
                                            <div class="user-name">Smita Patil</div>
                                            <div class="name-center">Housekeeper</div>
                                        </div>
                                        <img src="assets/img/user/usrbig5.jpg" class="user-img"
                                             alt="">
                                        <p>
                                            45, Krishna Tower, Near Bus Stop, Satellite, <br/>Ahmedabad
                                        </p>
                                        <div>
                                            <p>
                                                <i class="fa fa-phone"></i><a href="tel:(123)456-7890">
                                                    (123)456-7890</a>
                                            </p>
                                        </div>
                                        <div class="profile-userbuttons">
                                            <a href="staff_profile.html"
                                               class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="m-b-20">
                                    <div class="doctor-profile">
                                        <div class="profile-header bg-b-danger">
                                            <div class="user-name">John Smith</div>
                                            <div class="name-center">Cook</div>
                                        </div>
                                        <img src="assets/img/user/usrbig6.jpg" class="user-img"
                                             alt="">
                                        <p>
                                            456, Estern evenue, Courtage area, <br/>New York
                                        </p>
                                        <div>
                                            <p>
                                                <i class="fa fa-phone"></i><a href="tel:(123)456-7890">
                                                    (123)456-7890</a>
                                            </p>
                                        </div>
                                        <div class="profile-userbuttons">
                                            <a href="staff_profile.html"
                                               class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="m-b-20">
                                    <div class="doctor-profile">
                                        <div class="profile-header bg-b-black">
                                            <div class="user-name">Pooja Patel</div>
                                            <div class="name-center">General Manager</div>
                                        </div>
                                        <img src="assets/img/user/usrbig7.jpg" class="user-img"
                                             alt="">
                                        <p>
                                            A-103, shyam gokul flats, Mahatma Road <br/>Mumbai
                                        </p>
                                        <div>
                                            <p>
                                                <i class="fa fa-phone"></i><a href="tel:(123)456-7890">
                                                    (123)456-7890</a>
                                            </p>
                                        </div>
                                        <div class="profile-userbuttons">
                                            <a href="staff_profile.html"
                                               class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="m-b-20">
                                    <div class="doctor-profile">
                                        <div class="profile-header bg-b-yellow">
                                            <div class="user-name">Smita Patil</div>
                                            <div class="name-center">Housekeeper</div>
                                        </div>
                                        <img src="assets/img/user/usrbig8.jpg" class="user-img"
                                             alt="">
                                        <p>
                                            45, Krishna Tower, Near Bus Stop, Satellite, <br/>Ahmedabad
                                        </p>
                                        <div>
                                            <p>
                                                <i class="fa fa-phone"></i><a href="tel:(123)456-7890">
                                                    (123)456-7890</a>
                                            </p>
                                        </div>
                                        <div class="profile-userbuttons">
                                            <a href="staff_profile.html"
                                               class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="m-b-20">
                                    <div class="doctor-profile">
                                        <div class="profile-header bg-b-pink">
                                            <div class="user-name">John Smith</div>
                                            <div class="name-center">Cook</div>
                                        </div>
                                        <img src="assets/img/user/usrbig9.jpg" class="user-img"
                                             alt="">
                                        <p>
                                            456, Estern evenue, Courtage area, <br/>New York
                                        </p>
                                        <div>
                                            <p>
                                                <i class="fa fa-phone"></i><a href="tel:(123)456-7890">
                                                    (123)456-7890</a>
                                            </p>
                                        </div>
                                        <div class="profile-userbuttons">
                                            <a href="staff_profile.html"
                                               class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end page content -->
        <!-- start chat sidebar -->
        <div class="chat-sidebar-container" data-close-on-body-click="false">
            <div class="chat-sidebar">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-toggle="tab">Theme
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#quick_sidebar_tab_2" class="nav-link tab-icon" data-toggle="tab"> Chat
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#quick_sidebar_tab_3" class="nav-link tab-icon" data-toggle="tab"> Settings
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane chat-sidebar-settings in show active animated shake" role="tabpanel"
                         id="quick_sidebar_tab_1">
                        <div class="slimscroll-style">
                            <div class="theme-light-dark">
                                <h6>Sidebar Theme</h6>
                                <button type="button" data-theme="white"
                                        class="btn lightColor btn-outline btn-circle m-b-10 theme-button">Light Sidebar
                                </button>
                                <button type="button" data-theme="dark"
                                        class="btn dark btn-outline btn-circle m-b-10 theme-button">Dark Sidebar
                                </button>
                            </div>
                            <div class="theme-light-dark">
                                <h6>Sidebar Color</h6>
                                <ul class="list-unstyled">
                                    <li class="complete">
                                        <div class="theme-color sidebar-theme">
                                            <a href="#" data-theme="white"><span class="head"></span><span
                                                    class="cont"></span></a>
                                            <a href="#" data-theme="dark"><span class="head"></span><span
                                                    class="cont"></span></a>
                                            <a href="#" data-theme="blue"><span class="head"></span><span
                                                    class="cont"></span></a>
                                            <a href="#" data-theme="indigo"><span class="head"></span><span
                                                    class="cont"></span></a>
                                            <a href="#" data-theme="cyan"><span class="head"></span><span
                                                    class="cont"></span></a>
                                            <a href="#" data-theme="green"><span class="head"></span><span
                                                    class="cont"></span></a>
                                            <a href="#" data-theme="red"><span class="head"></span><span
                                                    class="cont"></span></a>
                                        </div>
                                    </li>
                                </ul>
                                <h6>Header Brand color</h6>
                                <ul class="list-unstyled">
                                    <li class="theme-option">
                                        <div class="theme-color logo-theme">
                                            <a href="#" data-theme="logo-white"><span class="head"></span><span
                                                    class="cont"></span></a>
                                            <a href="#" data-theme="logo-dark"><span class="head"></span><span
                                                    class="cont"></span></a>
                                            <a href="#" data-theme="logo-blue"><span class="head"></span><span
                                                    class="cont"></span></a>
                                            <a href="#" data-theme="logo-indigo"><span class="head"></span><span
                                                    class="cont"></span></a>
                                            <a href="#" data-theme="logo-cyan"><span class="head"></span><span
                                                    class="cont"></span></a>
                                            <a href="#" data-theme="logo-green"><span class="head"></span><span
                                                    class="cont"></span></a>
                                            <a href="#" data-theme="logo-red"><span class="head"></span><span
                                                    class="cont"></span></a>
                                        </div>
                                    </li>
                                </ul>
                                <h6>Header color</h6>
                                <ul class="list-unstyled">
                                    <li class="theme-option">
                                        <div class="theme-color header-theme">
                                            <a href="#" data-theme="header-white"><span class="head"></span><span
                                                    class="cont"></span></a>
                                            <a href="#" data-theme="header-dark"><span class="head"></span><span
                                                    class="cont"></span></a>
                                            <a href="#" data-theme="header-blue"><span class="head"></span><span
                                                    class="cont"></span></a>
                                            <a href="#" data-theme="header-indigo"><span class="head"></span><span
                                                    class="cont"></span></a>
                                            <a href="#" data-theme="header-cyan"><span class="head"></span><span
                                                    class="cont"></span></a>
                                            <a href="#" data-theme="header-green"><span class="head"></span><span
                                                    class="cont"></span></a>
                                            <a href="#" data-theme="header-red"><span class="head"></span><span
                                                    class="cont"></span></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Start Doctor Chat -->
                    <div class="tab-pane chat-sidebar-chat animated slideInRight" id="quick_sidebar_tab_2">
                        <div class="chat-sidebar-list">
                            <div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd"
                                 data-wrapper-class="chat-sidebar-list">
                                <div class="chat-header"><h5 class="list-heading">Online</h5></div>
                                <ul class="media-list list-items">
                                    <li class="media"><img class="media-object" src="assets/img/user/user3.jpg"
                                                           width="35" height="35" alt="...">
                                        <i class="online dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">John Deo</h5>
                                            <div class="media-heading-sub">Spine Surgeon</div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-success">5</span>
                                        </div>
                                        <img class="media-object" src="assets/img/user/user1.jpg" width="35" height="35"
                                             alt="...">
                                        <i class="busy dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">Rajesh</h5>
                                            <div class="media-heading-sub">Director</div>
                                        </div>
                                    </li>
                                    <li class="media"><img class="media-object" src="assets/img/user/user5.jpg"
                                                           width="35" height="35" alt="...">
                                        <i class="away dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">Jacob Ryan</h5>
                                            <div class="media-heading-sub">Ortho Surgeon</div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-danger">8</span>
                                        </div>
                                        <img class="media-object" src="assets/img/user/user4.jpg" width="35" height="35"
                                             alt="...">
                                        <i class="online dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">Kehn Anderson</h5>
                                            <div class="media-heading-sub">CEO</div>
                                        </div>
                                    </li>
                                    <li class="media"><img class="media-object" src="assets/img/user/user2.jpg"
                                                           width="35" height="35" alt="...">
                                        <i class="busy dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">Sarah Smith</h5>
                                            <div class="media-heading-sub">Anaesthetics</div>
                                        </div>
                                    </li>
                                    <li class="media"><img class="media-object" src="assets/img/user/user7.jpg"
                                                           width="35" height="35" alt="...">
                                        <i class="online dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">Vlad Cardella</h5>
                                            <div class="media-heading-sub">Cardiologist</div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="chat-header"><h5 class="list-heading">Offline</h5></div>
                                <ul class="media-list list-items">
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-warning">4</span>
                                        </div>
                                        <img class="media-object" src="assets/img/user/user6.jpg" width="35" height="35"
                                             alt="...">
                                        <i class="offline dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">Jennifer Maklen</h5>
                                            <div class="media-heading-sub">Nurse</div>
                                            <div class="media-heading-small">Last seen 01:20 AM</div>
                                        </div>
                                    </li>
                                    <li class="media"><img class="media-object" src="assets/img/user/user8.jpg"
                                                           width="35" height="35" alt="...">
                                        <i class="offline dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">Lina Smith</h5>
                                            <div class="media-heading-sub">Ortho Surgeon</div>
                                            <div class="media-heading-small">Last seen 11:14 PM</div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-success">9</span>
                                        </div>
                                        <img class="media-object" src="assets/img/user/user9.jpg" width="35" height="35"
                                             alt="...">
                                        <i class="offline dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">Jeff Adam</h5>
                                            <div class="media-heading-sub">Compounder</div>
                                            <div class="media-heading-small">Last seen 3:31 PM</div>
                                        </div>
                                    </li>
                                    <li class="media"><img class="media-object" src="assets/img/user/user10.jpg"
                                                           width="35" height="35" alt="...">
                                        <i class="offline dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">Anjelina Cardella</h5>
                                            <div class="media-heading-sub">Physiotherapist</div>
                                            <div class="media-heading-small">Last seen 7:45 PM</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="chat-sidebar-item">
                            <div class="chat-sidebar-chat-user">
                                <div class="page-quick-sidemenu">
                                    <a href="javascript:;" class="chat-sidebar-back-to-list">
                                        <i class="fa fa-angle-double-left"></i>Back
                                    </a>
                                </div>
                                <div class="chat-sidebar-chat-user-messages">
                                    <div class="post out">
                                        <img class="avatar" alt="" src="assets/img/dp.jpg"/>
                                        <div class="message">
                                            <span class="arrow"></span> <a href="javascript:;" class="name">Kiran
                                                Patel</a> <span class="datetime">9:10</span>
                                            <span class="body-out"> could you send me menu icons ? </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="assets/img/user/user5.jpg"/>
                                        <div class="message">
                                            <span class="arrow"></span> <a href="javascript:;" class="name">Jacob
                                                Ryan</a> <span class="datetime">9:10</span>
                                            <span class="body"> please give me 10 minutes. </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="assets/img/dp.jpg"/>
                                        <div class="message">
                                            <span class="arrow"></span> <a href="javascript:;" class="name">Kiran
                                                Patel</a> <span class="datetime">9:11</span>
                                            <span class="body-out"> ok fine :) </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="assets/img/user/user5.jpg"/>
                                        <div class="message">
                                            <span class="arrow"></span> <a href="javascript:;" class="name">Jacob
                                                Ryan</a> <span class="datetime">9:22</span>
                                            <span class="body">Sorry for
													the delay. i sent mail to you. let me know if it is ok or not.</span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="assets/img/dp.jpg"/>
                                        <div class="message">
                                            <span class="arrow"></span> <a href="javascript:;" class="name">Kiran
                                                Patel</a> <span class="datetime">9:26</span>
                                            <span class="body-out"> it is perfect! :) </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="assets/img/dp.jpg"/>
                                        <div class="message">
                                            <span class="arrow"></span> <a href="javascript:;" class="name">Kiran
                                                Patel</a> <span class="datetime">9:26</span>
                                            <span class="body-out"> Great! Thanks. </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="assets/img/user/user5.jpg"/>
                                        <div class="message">
                                            <span class="arrow"></span> <a href="javascript:;" class="name">Jacob
                                                Ryan</a> <span class="datetime">9:27</span>
                                            <span class="body"> it is my pleasure :) </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-sidebar-chat-user-form">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Type a message here...">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn deepPink-bgcolor">
                                                <i class="fa fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Doctor Chat -->
                    <!-- Start Setting Panel -->
                    <div class="tab-pane chat-sidebar-settings animated slideInUp" id="quick_sidebar_tab_3">
                        <div class="chat-sidebar-settings-list slimscroll-style">
                            <div class="chat-header"><h5 class="list-heading">Layout Settings</h5></div>
                            <div class="chatpane inner-content ">
                                <div class="settings-list">
                                    <div class="setting-item">
                                        <div class="setting-text">Sidebar Position</div>
                                        <div class="setting-set">
                                            <select
                                                class="sidebar-pos-option form-control input-inline input-sm input-small ">
                                                <option value="left" selected="selected">Left</option>
                                                <option value="right">Right</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="setting-item">
                                        <div class="setting-text">Header</div>
                                        <div class="setting-set">
                                            <select
                                                class="page-header-option form-control input-inline input-sm input-small ">
                                                <option value="fixed" selected="selected">Fixed</option>
                                                <option value="default">Default</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="setting-item">
                                        <div class="setting-text">Sidebar Menu</div>
                                        <div class="setting-set">
                                            <select
                                                class="sidebar-menu-option form-control input-inline input-sm input-small ">
                                                <option value="accordion" selected="selected">Accordion</option>
                                                <option value="hover">Hover</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="setting-item">
                                        <div class="setting-text">Footer</div>
                                        <div class="setting-set">
                                            <select
                                                class="page-footer-option form-control input-inline input-sm input-small ">
                                                <option value="fixed">Fixed</option>
                                                <option value="default" selected="selected">Default</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-header"><h5 class="list-heading">Account Settings</h5></div>
                                <div class="settings-list">
                                    <div class="setting-item">
                                        <div class="setting-text">Notifications</div>
                                        <div class="setting-set">
                                            <div class="switch">
                                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                       for="switch-1">
                                                    <input type="checkbox" id="switch-1"
                                                           class="mdl-switch__input" checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="setting-item">
                                        <div class="setting-text">Show Online</div>
                                        <div class="setting-set">
                                            <div class="switch">
                                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                       for="switch-7">
                                                    <input type="checkbox" id="switch-7"
                                                           class="mdl-switch__input" checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="setting-item">
                                        <div class="setting-text">Status</div>
                                        <div class="setting-set">
                                            <div class="switch">
                                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                       for="switch-2">
                                                    <input type="checkbox" id="switch-2"
                                                           class="mdl-switch__input" checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="setting-item">
                                        <div class="setting-text">2 Steps Verification</div>
                                        <div class="setting-set">
                                            <div class="switch">
                                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                       for="switch-3">
                                                    <input type="checkbox" id="switch-3"
                                                           class="mdl-switch__input" checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-header"><h5 class="list-heading">General Settings</h5></div>
                                <div class="settings-list">
                                    <div class="setting-item">
                                        <div class="setting-text">Location</div>
                                        <div class="setting-set">
                                            <div class="switch">
                                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                       for="switch-4">
                                                    <input type="checkbox" id="switch-4"
                                                           class="mdl-switch__input" checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="setting-item">
                                        <div class="setting-text">Save Histry</div>
                                        <div class="setting-set">
                                            <div class="switch">
                                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                       for="switch-5">
                                                    <input type="checkbox" id="switch-5"
                                                           class="mdl-switch__input" checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="setting-item">
                                        <div class="setting-text">Auto Updates</div>
                                        <div class="setting-set">
                                            <div class="switch">
                                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                       for="switch-6">
                                                    <input type="checkbox" id="switch-6"
                                                           class="mdl-switch__input" checked>
                                                </label>
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
        <!-- end chat sidebar -->
    </div>
    <!-- end page container -->

</div>
<!-- start js include path -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/popper/popper.min.js"></script>
<script src="assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- bootstrap -->
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- Common js-->
<script src="assets/js/app.js"></script>
<script src="assets/js/layout.js"></script>
<script src="assets/js/theme-color.js"></script>
<!-- data tables -->
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js"></script>
<script src="assets/js/pages/table/table_data.js"></script>
<!-- Material -->
<script src="assets/plugins/material/material.min.js"></script>
<!-- animation -->
<script src="assets/js/pages/ui/animations.js"></script>
<!-- end js include path -->
</body>
</html>
