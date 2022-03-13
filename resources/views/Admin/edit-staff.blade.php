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
    <link href="/assets/plugins/summernote/summernote.css" rel="stylesheet">
    <!-- morris chart -->
    <link href="/assets/plugins/morris/morris.css" rel="stylesheet" type="text/css"/>
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="/assets/plugins/material/material.min.css">
    <link rel="stylesheet" href="/assets/css/material_style.css">
    <!-- animation -->
    <link href="/assets/css/pages/animate_page.css" rel="stylesheet">
    <!-- Template Styles -->
    <link href="/assets/css/plugins.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/responsive.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/theme-color.css" rel="stylesheet" type="text/css"/>
    <!-- favicon -->
    <link rel="shortcut icon" href="/assets/img/favicon.ico"/>
</head>
<!-- END HEAD -->
<body
    class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
<div class="page-wrapper">
    <!-- start page container -->
    <div class="page-container">
        <!-- start page content -->
        <div class="page-content">
            <div class="row">
                <div class="card-box">
                    <div class="card-head">
                        <header>Basic Information</header>
                        <button id="panel-button"
                                class="mdl-button mdl-js-button mdl-button--icon pull-right"
                                data-upgraded=",MaterialButton">
                            <i class="material-icons">more_vert</i>
                        </button>
                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                            data-mdl-for="panel-button">
                            <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
                            <li class="mdl-menu__item"><i class="material-icons">print</i>Another action</li>
                            <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else here
                            </li>
                        </ul>
                    </div>
                    <form action="/admin/edit/staff">
                        <input type="hidden" name="id" value="{{$member->id}}">
                        <div class="card-body row">
                            <div class="col-lg-6 p-t-20">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="text" value="{{$member->FirstName}}" name="FirstName"
                                           id="txtFirstName">
                                    <label class="mdl-textfield__label">First Name</label>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-20">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="text" value="{{$member->LastName}}"
                                           id="txtLasttName" name="LastName">
                                    <label class="mdl-textfield__label">Last Name</label>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-20">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="email" id="txtemail"
                                           value="{{$member->Email}}" name="Email">
                                    <label class="mdl-textfield__label">Email</label>
                                    <span class="mdl-textfield__error">Enter Valid Email Address!</span>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-20">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="text" id="date"
                                           value="{{$member->JoiningDate}}" name="JoiningDate">
                                    <label class="mdl-textfield__label">Joining Date</label>
                                </div>
                            </div>
                            {{--                            <div class="col-lg-6 p-t-20">--}}
                            {{--                                <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">--}}
                            {{--                                    <input class = "mdl-textfield__input" type = "password" id = "txtPwd" value="{{$member->password}}">--}}
                            {{--                                    <label class = "mdl-textfield__label" >Password</label>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="col-lg-6 p-t-20">--}}
                            {{--                                <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">--}}
                            {{--                                    <input class = "mdl-textfield__input" type = "password" id = "txtConfirmPwd" value="{{$member->password}}}">--}}
                            {{--                                    <label class = "mdl-textfield__label" >Confirm Password</label>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            <div class="col-lg-6 p-t-20">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="text" id="designation"
                                           value="{{$member->Role}}" name="Designation">
                                    <label class="mdl-textfield__label">Designation</label>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-20">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                    <input class="mdl-textfield__input" type="text" id="sample2"
                                           value="{{$member->Gender}}" readonly tabIndex="-1" name="Gender">
                                    <label for="sample2" class="pull-right margin-0">
                                        <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                    </label>
                                    <label for="sample2" class="mdl-textfield__label">Gender</label>
                                    <ul data-mdl-for="sample2" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                        <li class="mdl-menu__item" data-val="DE">Male</li>
                                        <li class="mdl-menu__item" data-val="BY">Female</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-20">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="text"
                                           value="{{$member->MobileNumber}}"
                                           pattern="-?[0-9]*(\.[0-9]+)?" id="text5" name="MobileNumber">
                                    <label class="mdl-textfield__label" for="text5">Mobile Number</label>
                                    <span class="mdl-textfield__error">Number required!</span>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-20">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="text" id="dateOfBirth"
                                           value="{{$member->DOB}}" name="DOB">
                                    <label class="mdl-textfield__label">Birth Date</label>
                                </div>
                            </div>
                            <div class="col-lg-12 p-t-20">
                                <div class="mdl-textfield mdl-js-textfield txt-full-width">
						                     <input class="mdl-textfield__input" rows="4"
                                                       id="text7" name="Address" value="{{$member->Address}}">
                                    <label class="mdl-textfield__label" for="text7">Address</label>
                                </div>
                            </div>

                            <div class="col-lg-12 p-t-20">
                                <div class="mdl-textfield mdl-js-textfield txt-full-width">
						                     <input class="mdl-textfield__input" rows="4"
                                                       id="education" name="Education" value="{{$member->Education}}">
                                    <label class="mdl-textfield__label" for="text7">Education</label>
                                </div>
                            </div>
                            <div class="col-lg-12 p-t-20 text-center">
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
                                <li class="media"><img class="media-object" src="assets/img/user/user3.jpg" width="35"
                                                       height="35" alt="...">
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
                                <li class="media"><img class="media-object" src="assets/img/user/user5.jpg" width="35"
                                                       height="35" alt="...">
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
                                <li class="media"><img class="media-object" src="assets/img/user/user2.jpg" width="35"
                                                       height="35" alt="...">
                                    <i class="busy dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Sarah Smith</h5>
                                        <div class="media-heading-sub">Anaesthetics</div>
                                    </div>
                                </li>
                                <li class="media"><img class="media-object" src="assets/img/user/user7.jpg" width="35"
                                                       height="35" alt="...">
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
                                <li class="media"><img class="media-object" src="assets/img/user/user8.jpg" width="35"
                                                       height="35" alt="...">
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
                                <li class="media"><img class="media-object" src="assets/img/user/user10.jpg" width="35"
                                                       height="35" alt="...">
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
                                        <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a>
                                        <span class="datetime">9:10</span>
                                        <span class="body-out"> could you send me menu icons ? </span>
                                    </div>
                                </div>
                                <div class="post in">
                                    <img class="avatar" alt="" src="assets/img/user/user5.jpg"/>
                                    <div class="message">
                                        <span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a>
                                        <span class="datetime">9:10</span>
                                        <span class="body"> please give me 10 minutes. </span>
                                    </div>
                                </div>
                                <div class="post out">
                                    <img class="avatar" alt="" src="assets/img/dp.jpg"/>
                                    <div class="message">
                                        <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a>
                                        <span class="datetime">9:11</span>
                                        <span class="body-out"> ok fine :) </span>
                                    </div>
                                </div>
                                <div class="post in">
                                    <img class="avatar" alt="" src="assets/img/user/user5.jpg"/>
                                    <div class="message">
                                        <span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a>
                                        <span class="datetime">9:22</span>
                                        <span class="body">Sorry for
													the delay. i sent mail to you. let me know if it is ok or not.</span>
                                    </div>
                                </div>
                                <div class="post out">
                                    <img class="avatar" alt="" src="assets/img/dp.jpg"/>
                                    <div class="message">
                                        <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a>
                                        <span class="datetime">9:26</span>
                                        <span class="body-out"> it is perfect! :) </span>
                                    </div>
                                </div>
                                <div class="post out">
                                    <img class="avatar" alt="" src="assets/img/dp.jpg"/>
                                    <div class="message">
                                        <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a>
                                        <span class="datetime">9:26</span>
                                        <span class="body-out"> Great! Thanks. </span>
                                    </div>
                                </div>
                                <div class="post in">
                                    <img class="avatar" alt="" src="assets/img/user/user5.jpg"/>
                                    <div class="message">
                                        <span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a>
                                        <span class="datetime">9:27</span>
                                        <span class="body"> it is my pleasure :) </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form action="/admin/addStaff">
                            <div class="card-body row">
                                <div class="col-lg-6 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="text" id="txtFirstName"
                                               name="FirstName">
                                        <label class="mdl-textfield__label">First Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="text" id="txtLasttName"
                                               name="LastName">
                                        <label class="mdl-textfield__label">Last Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="email" id="txtemail" name="Email"
                                               value="{{$member->Email}}">
                                        <label class="mdl-textfield__label">Email</label>
                                        <span class="mdl-textfield__error">Enter Valid Email Address!</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="text" id="date" name="JoiningDate">
                                        <label class="mdl-textfield__label">Joining Date</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="password" id="txtPwd" name="Password">
                                        <label class="mdl-textfield__label">Password</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="password" id="txtConfirmPwd">
                                        <label class="mdl-textfield__label">Confirm Password</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="text" id="designation"
                                               name="Designation">
                                        <label class="mdl-textfield__label">Designation</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                        <input class="mdl-textfield__input" type="text" id="sample2" value="" readonly
                                               tabIndex="-1" name="Gender">
                                        <label for="sample2" class="pull-right margin-0">
                                            <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                        </label>
                                        <label for="sample2" class="mdl-textfield__label">Gender</label>
                                        <ul data-mdl-for="sample2" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                            <li class="mdl-menu__item" data-val="DE">Male</li>
                                            <li class="mdl-menu__item" data-val="BY">Female</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="text"
                                               pattern="-?[0-9]*(\.[0-9]+)?" id="text5" name="MobileNumber">
                                        <label class="mdl-textfield__label" for="text5">Mobile Number</label>
                                        <span class="mdl-textfield__error">Number required!</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="text" id="dateOfBirth" name="DOB">
                                        <label class="mdl-textfield__label">Birth Date</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 p-t-20">
                                    <div class="mdl-textfield mdl-js-textfield txt-full-width">
                                        <input type="text" class="mdl-textfield__input" rows="4"
                                               id="text7" name="Address">
                                        <label class="mdl-textfield__label" for="text7">Address</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 p-t-20">
                                    <div class="mdl-textfield mdl-js-textfield txt-full-width">
                                        <input type="text" class="mdl-textfield__input" rows="4"
                                               id="education" name="Education">
                                        <label class="mdl-textfield__label" for="text7">Education</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 p-t-20 text-center">
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
                                    <select class="sidebar-pos-option form-control input-inline input-sm input-small ">
                                        <option value="left" selected="selected">Left</option>
                                        <option value="right">Right</option>
                                    </select>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-text">Header</div>
                                <div class="setting-set">
                                    <select class="page-header-option form-control input-inline input-sm input-small ">
                                        <option value="fixed" selected="selected">Fixed</option>
                                        <option value="default">Default</option>
                                    </select>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-text">Sidebar Menu</div>
                                <div class="setting-set">
                                    <select class="sidebar-menu-option form-control input-inline input-sm input-small ">
                                        <option value="accordion" selected="selected">Accordion</option>
                                        <option value="hover">Hover</option>
                                    </select>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-text">Footer</div>
                                <div class="setting-set">
                                    <select class="page-footer-option form-control input-inline input-sm input-small ">
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
<script src="/assets/plugins/jquery/jquery.min.js"></script>
<script src="/assets/plugins/popper/popper.min.js"></script>
<script src="/assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
<script src="/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- bootstrap -->
<script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="/assets/js/pages/sparkline/sparkline-data.js"></script>
<!-- Common js-->
<script src="/assets/js/app.js"></script>
<script src="/assets/js/layout.js"></script>
<script src="/assets/js/theme-color.js"></script>
<!-- material -->
<script src="/assets/plugins/material/material.min.js"></script>
<!-- animation -->
<script src="/assets/js/pages/ui/animations.js"></script>
<!-- morris chart -->
<script src="/assets/plugins/morris/morris.min.js"></script>
<script src="/assets/plugins/morris/raphael-min.js"></script>
<script src="/assets/js/pages/chart/morris/morris_home_data.js"></script>
<!-- end js include path -->
</body>
</html>
