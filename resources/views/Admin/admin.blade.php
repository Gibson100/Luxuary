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
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md page-full-width header-white ">
<div class="page-wrapper">
    <!-- start header -->
    <div class="page-header navbar navbar-fixed-top">
        <div class="page-header-inner ">
            <!-- logo start -->
            <div class="page-logo">
                <a href="index.html">
                    <img alt="" src="assets/img/logo.jpg" class="rounded" height="38px" width="38px">
                    <span class=" text-warning">Luxuary</span> </a>
            </div>
            <!-- logo end -->

            <form class="search-form-opened border-dark  bg-light" action="#" method="GET">
                <div class="input-group ">
                    <input type="text" class="form-control" placeholder="Search..." name="query">
                    <span class="input-group-btn search-btn ">
                          <a href="javascript:;" class="btn submit">
                             <i class="icon-magnifier text-dark"></i>
                           </a>
                        </span>
                </div>
            </form>


            <!-- start header menu -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">


                    <!-- start manage user dropdown -->
                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <img alt="" class="img-circle " src="assets/img/dp.jpg"/>
                            <span class="username username-hide-on-mobile myclass"> John </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default  ">
                            <li class="divider"></li>
                            <li>
                                <a href="/logout">
                                    <i class="icon-logout text-dark"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                    <!-- end manage user dropdown -->

                </ul>
            </div>
        </div>
        <div class="navbar-custom">
            <div class="hor-menu hidden-sm hidden-xs">
                <ul class="nav navbar-nav ">
                    <li class="mega-menu-dropdown ">
                        <a href="" class="dropdown-toggle myclass"> <i class="material-icons">dashboard</i> Dashboard
                        </a>

                    </li>
                    <li class="mega-menu-dropdown ">
                        <a href="" class="dropdown-toggle myclass"> <i class="material-icons">vpn_key</i> Rooms
                            <i class="fa fa-angle-down"></i>
                            <span class="arrow "></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="mega-menu-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="mega-menu-submenu">
                                                <li class="nav-item">
                                                    <a href="/view-available" class="nav-link ">
                                                        <span class="title">View All Rooms</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="/edit/room" class="nav-link ">
                                                        <span class="title">Edit Room Details</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="mega-menu-dropdown ">
                        <a href="" class="dropdown-toggle myclass"> <i class="material-icons">group</i> Staff
                            <i class="fa fa-angle-down"></i>
                            <span class="arrow "></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="mega-menu-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="mega-menu-submenu">
                                                <li class="nav-item">
                                                    <a href="/addstaff" class="nav-link ">
                                                        <span class="title">Add Staff Details</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="/view-staff" class="nav-link ">
                                                        <span class="title">View All Staffs</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>


                </ul>
            </div>
        </div>
    </div>
    <!-- end header -->
    <!-- start page container -->
    <div class="page-container">
        <!-- start sidebar menu -->
        <div class="sidebar-container">
            <div class="sidemenu-container navbar-collapse collapse fixed-menu">
                <div id="remove-scroll">
                    <ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true"
                        data-slide-speed="200">
                        <li class="sidebar-toggler-wrapper hide">
                            <div class="sidebar-toggler">
                                <span></span>
                            </div>
                        </li>
                        <li class="sidebar-user-panel">
                            <div class="user-panel">
                                <div class="row">
                                    <div class="sidebar-userpic">
                                        <img src="assets/img/dp.jpg" class="img-responsive" alt=""></div>
                                </div>
                                <div class="profile-usertitle">
                                    <div class="sidebar-userpic-name"> John Deo</div>
                                    <div class="profile-usertitle-job"> Manager</div>
                                </div>
                                <div class="sidebar-userpic-btn">

                                    <a class="tooltips" href="login.html" data-placement="top"
                                       data-original-title="Logout">
                                        <i class="material-icons">input</i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="menu-heading">
                            <span>-- Main</span>
                        </li>
                        <li class="nav-item start">
                            <a href="#" class="nav-link nav-toggle">
                                <i class="material-icons">dashboard</i>
                                <span class="title">Dashboard</span>
                                <span class="arrow"></span>
                            </a>

                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link nav-toggle">
                                <i class="material-icons">business_center</i>
                                <span class="title">Booking</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="new_booking.html" class="nav-link ">
                                        <span class="title">New Booking</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="view_booking.html" class="nav-link ">
                                        <span class="title">View Booking</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="edit_booking.html" class="nav-link ">
                                        <span class="title">Edit Booking</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link nav-toggle">
                                <i class="material-icons">vpn_key</i>
                                <span class="title">Rooms</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">

                                <li class="nav-item">
                                    <a href="all_rooms.html" class="nav-link ">
                                        <span class="title">View All Rooms</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="edit_room.html" class="nav-link ">
                                        <span class="title">Edit Room Details</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link nav-toggle">
                                <i class="material-icons">group</i>
                                <span class="title">Staff</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="add_staff.html" class="nav-link ">
                                        <span class="title">Add Staff Details</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="all_staffs.html" class="nav-link ">
                                        <span class="title">View All Staffs</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="edit_staff.html" class="nav-link ">
                                        <span class="title">Edit Staff Details</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link nav-toggle">
                                <i class="material-icons">local_taxi</i>
                                <span class="title">Transportation</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="add_vehicle.html" class="nav-link ">
                                        <span class="title">Add Vehicle Details</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="all_vehicles.html" class="nav-link ">
                                        <span class="title">View All Vehicle</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="edit_vehicle.html" class="nav-link ">
                                        <span class="title">Edit Vehicle Details</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-heading m-t-20">
                            <span>-- Layout, Apps &amp; Widget</span>
                        </li>
                        <li class="nav-item active">
                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">desktop_mac</i>
                                <span class="title">Layout</span> <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="layout_boxed.html" class="nav-link "> <span class="title">Boxed</span>
                                    </a>
                                </li>
                                <li class="nav-item active">
                                    <a href="layout_full_width.html" class="nav-link "> <span
                                            class="title">Full Width</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="layout_collapse.html" class="nav-link "> <span
                                            class="title">Collapse Menu</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="layout_right_sidebar.html" class="nav-link "> <span class="title">Right Sidebar</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="layout_sidebar_hover_menu.html" class="nav-link "> <span class="title">Hover Sidebar Menu</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="layout_mega_menu.html" class="nav-link "> <span
                                            class="title">Mega Menu</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">grain</i>
                                <span class="title">Apps</span> <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="chat.html" class="nav-link "> <span class="title">Chat</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="contact_list.html" class="nav-link "> <span
                                            class="title">Contact List</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="contact_grid.html" class="nav-link "> <span
                                            class="title">Contact Grid</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="gallery.html" class="nav-link "> <span class="title">Gallery</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="support.html" class="nav-link "> <span class="title">Support</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="calendar.html" class="nav-link "> <span class="title">Calendar</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="widget.html" class="nav-link nav-toggle"> <i class="material-icons">widgets</i>
                                <span class="title">Widget</span>
                            </a>
                        </li>
                        <li class="menu-heading m-t-20">
                            <span>-- Elements, Forms &amp; Tables</span>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link nav-toggle">
                                <i class="material-icons">dvr</i>
                                <span class="title">UI Elements</span>
                                <span class="label label-rouded label-menu label-warning">new</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="buttons.html" class="nav-link ">
                                        <span class="title">Buttons</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="alert.html" class="nav-link ">
                                        <span class="title">Alert</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="tabs_accordions_navs.html" class="nav-link ">
                                        <span class="title">Tabs &amp; Accordions</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="typography.html" class="nav-link ">
                                        <span class="title">Typography</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="notification.html" class="nav-link ">
                                        <span class="title">Notifications</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="sweet_alert.html" class="nav-link ">
                                        <span class="title">Sweet Alert</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="panels.html" class="nav-link ">
                                        <span class="title">Panels</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="grid.html" class="nav-link ">
                                        <span class="title">Grids</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="tree.html" class="nav-link ">
                                        <span class="title">Tree View</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="carousel.html" class="nav-link ">
                                        <span class="title">Carousel</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="animation.html" class="nav-link ">
                                        <span class="title">Animations</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link nav-toggle">
                                <i class="material-icons">store</i>
                                <span class="title">Material Elements</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="material_button.html" class="nav-link ">
                                        <span class="title">Buttons</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="material_tab.html" class="nav-link ">
                                        <span class="title">Tabs</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="material_chips.html" class="nav-link ">
                                        <span class="title">Chips</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="material_grid.html" class="nav-link ">
                                        <span class="title">Grid</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="material_form.html" class="nav-link ">
                                        <span class="title">Form</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="material_datepicker.html" class="nav-link ">
                                        <span class="title">DatePicker</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="material_select.html" class="nav-link ">
                                        <span class="title">Select Item</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="material_loading.html" class="nav-link ">
                                        <span class="title">Loading</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="material_menu.html" class="nav-link ">
                                        <span class="title">Menu</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="material_slider.html" class="nav-link ">
                                        <span class="title">Slider</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="material_tables.html" class="nav-link ">
                                        <span class="title">Tables</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="material_toggle.html" class="nav-link ">
                                        <span class="title">Toggle</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="material_badges.html" class="nav-link ">
                                        <span class="title">Badges</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="material-icons">subtitles</i>
                                <span class="title">Forms </span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="layouts_form.html" class="nav-link ">
                                        <span class="title">Form Layout</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="advance_form.html" class="nav-link ">
                                        <span class="title">Advance Component</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="validation_form.html" class="nav-link ">
                                        <span class="title">Form Validation</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="steps.html" class="nav-link ">
                                        <span class="title">Wizard</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="file_upload.html" class="nav-link ">
                                        <span class="title">File Upload</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="editable_form.html" class="nav-link ">
                                        <span class="title">Editor</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="material-icons">list</i>
                                <span class="title">Data Tables</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="basic_table.html" class="nav-link ">
                                        <span class="title">Basic Tables</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="advanced_table.html" class="nav-link ">
                                        <span class="title">Advance Tables</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="editable_table.html" class="nav-link ">
                                        <span class="title">Editable Tables</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="group_table.html" class="nav-link ">
                                        <span class="title">Grouping</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="table_data.html" class="nav-link ">
                                        <span class="title">Tables With Sourced Data</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-heading m-t-20">
                            <span>-- Extra Components</span>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="material-icons">timeline</i>
                                <span class="title">Charts</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="charts_echarts.html" class="nav-link ">
                                        <span class="title">eCharts</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="charts_morris.html" class="nav-link ">
                                        <span class="title">Morris Charts</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="charts_chartjs.html" class="nav-link ">
                                        <span class="title">Chartjs</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="material-icons">map</i>
                                <span class="title">Maps</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="google_maps.html" class="nav-link ">
                                        <span class="title">Google Maps</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="vector_maps.html" class="nav-link ">
                                        <span class="title">Vector Maps</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">album</i>
                                <span class="title">Icons</span> <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="fontawesome_icons.html" class="nav-link "> <span
                                            class="title">Font Awesome</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="simpleline_icons.html" class="nav-link "> <span class="title">Simple Line Icon</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="material_icons.html" class="nav-link "> <span
                                            class="title">Material Icon</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:;" class="nav-link nav-toggle"> <i
                                    class="material-icons">description</i>
                                <span class="title">Extra pages</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="timeline.html" class="nav-link "> <span class="title">Timeline</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="login.html" class="nav-link "> <span class="title">Login</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="sign_up.html" class="nav-link "> <span class="title">Registration</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="user_profile.html" class="nav-link "><span class="title">Profile</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pricing.html" class="nav-link "><span class="title">Pricing</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="contactus.html" class="nav-link "> <span class="title">Contact Us</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="invoice.html" class="nav-link "><span class="title">Invoice</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="faq.html" class="nav-link "><span class="title">Faq</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="page-404.html" class="nav-link "> <span class="title">404 Page</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="page-500.html" class="nav-link "> <span class="title">500 Page</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="blank_page.html" class="nav-link "> <span class="title">Blank Page</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="material-icons">slideshow</i>
                                <span class="title">Multi Level Menu</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <i class="fa fa-university"></i> Item 1
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="javascript:;" class="nav-link nav-toggle">
                                                <i class="fa fa-bell-o"></i> Arrow Toggle
                                                <span class="arrow "></span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li class="nav-item">
                                                    <a href="javascript:;" class="nav-link">
                                                        <i class="fa fa-calculator"></i> Sample Link 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">
                                                        <i class="fa fa-clone"></i> Sample Link 2</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">
                                                        <i class="fa fa-cogs"></i> Sample Link 3</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="fa fa-file-pdf-o"></i> Sample Link 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="fa fa-rss"></i> Sample Link 2</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="fa fa-hdd-o"></i> Sample Link 3</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <i class="fa fa-gavel"></i> Arrow Toggle
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="fa fa-paper-plane"></i> Sample Link 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="fa fa-power-off"></i> Sample Link 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="fa fa-recycle"></i> Sample Link 1
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-volume-up"></i> Item 3 </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end sidebar menu -->
    <!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <ol class="breadcrumb page-breadcrumb pull-left">
                        <li><a class="parent-item" href="index.html">Dashboard</a></i>
                        </li>

                    </ol>

                </div>
            </div>
            <!-- start widget -->
            <div class="state-overview">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="info-box bg-blue">
                            <span class="info-box-icon push-bottom"><i class="material-icons">style</i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Available Rooms</span>
                                <span class="info-box-number">{{$available_rooms}}</span>
                                <div class="progress">
                                    <div class="progress-bar width-60"></div>
                                </div>

                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="info-box bg-orange">
                            <span class="info-box-icon push-bottom"><i class="material-icons">card_travel</i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">New Booking</span>
                                <span class="info-box-number">{{$latest_bookings}}</span>
                                <div class="progress">
                                    <div class="progress-bar width-40"></div>
                                </div>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="info-box bg-purple">
                            <span class="info-box-icon push-bottom"><i class="material-icons">phone_in_talk</i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Inquiry</span>
                                <span class="info-box-number">{{$total_enquiries}}</span>
                                <div class="progress">
                                    <div class="progress-bar width-80"></div>
                                </div>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="info-box bg-success">
                            <span class="info-box-icon push-bottom"><i class="material-icons">monetization_on</i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Total Earning</span>
                                <span class="info-box-number">{{$total_earnings}}</span><span>$</span>
                                <div class="progress">
                                    <div class="progress-bar width-60"></div>
                                </div>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
            </div>
            <!-- end widget -->

            <!-- start Payment Details -->
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card  card-box">
                        <div class="card-head">
                            <header>Booking Details</header>
                            <div class="tools">
                                <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="table-wrap">
                                <div class="table-responsive tblHeightSet small-slimscroll-style">
                                    <table class="table display product-overview mb-30" id="support_table5">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Check In</th>
                                            <th>Check Out</th>
                                            <th>Status</th>
                                            <th>Phone</th>
                                            <th>Room Type</th>
                                            <th>Edit</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($bookings as $booking)
                                            <tr>
                                                <td>{{$booking->id}}</td>
                                                <td>{{$booking->FirstName}}&nbsp&nbsp{{$booking->LastName}}</td>
                                                <td>{{$booking->Arrive}}</td>
                                                <td>{{$booking->Depart}}</td>
                                                <td>
                                                    @if($booking->Status == 'Paid')
                                                        <span
                                                            class="label label-sm label-success">{{$booking->Status}}</span>
                                                    @else
                                                        <span
                                                            class="label label-sm label-danger">{{$booking->Status}}</span>
                                                    @endif
                                                </td>
                                                <td>{{$booking->MobileNumber}}</td>
                                                <td>{{$booking->RoomType}}</td>
                                                <td>
                                                    <a href="/reception/edit/room/{{$booking->id}}"
                                                       class="btn btn-tbl-edit btn-xs">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="/reception/delete/{{$booking->id}}"
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
            <!-- end Payment Details -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card-box ">
                        <div class="card-head">
                            <header>Guest Review</header>
                            <div class="tools">
                                <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <ul class="docListWindow small-slimscroll-style">
                                    @foreach($inquiries as $inquiry)
                                        <li>
                                            <div class="row">
                                                <div class="col-md-8 col-sm-8">
                                                    <div class="details">
                                                        <div class="title">
                                                            <a href="#">{{$inquiry->name}}</a>
                                                            <p class="rating-text">{{$inquiry->message}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 rating-style">
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star_half</i>
                                                    <i class="material-icons">star_border</i>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="full-width text-center p-t-10">
                                    <a href="#" class="btn purple btn-outline btn-circle margin-0">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end page content -->

</div>
<!-- end page container -->

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
