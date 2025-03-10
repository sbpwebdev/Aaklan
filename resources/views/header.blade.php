<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" href="favicon.ico" type="image/x-icon') !!}" />
<title>Aaklan</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="{!! asset('plugins/bootstrap/css/bootstrap.min.css') !!}" />

<!-- Plugins css -->
<link rel="stylesheet" href="{!! asset('plugins/summernote/dist/summernote.css') !!}" />
<link rel="stylesheet" href="{!! asset('plugins/fullcalendar/fullcalendar.min.css') !!}" />
<link rel="stylesheet" href="{!! asset('plugins/sweetalert/sweetalert.css') !!}" />

<!-- Core css -->
<link rel="stylesheet" href="{!! asset('css/style.min.css') !!}" />

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body class="font-muli theme-blush">
<!-- Page Loader -->
<!-- <div class="page-loader-wrapper">
    <div class="loader">
    </div>
</div> -->

<div id="main_content">
    <!-- Start Main top header -->
    <div id="header_top" class="header_top">
        <div class="container">
            <div class="hleft">
                <a class="header-brand" href="index.html"><i class="fa fa-graduation-cap brand-logo"></i></a>
                <div class="dropdown">
                    <a href="javascript:void(0)" class="nav-link icon menu_toggle"><i class="fe fe-align-center"></i></a>
                    <a href="page-search.html" class="nav-link icon"><i class="fe fe-search" data-toggle="tooltip" data-placement="right" title="Search..."></i></a>
                    <a href="app-email.html"  class="nav-link icon app_inbox"><i class="fe fe-inbox" data-toggle="tooltip" data-placement="right" title="Inbox"></i></a>
                    <a href="app-filemanager.html"  class="nav-link icon app_file xs-hide"><i class="fe fe-folder" data-toggle="tooltip" data-placement="right" title="File Manager"></i></a>
                    <a href="app-social.html"  class="nav-link icon xs-hide"><i class="fe fe-share-2" data-toggle="tooltip" data-placement="right" title="Social Media"></i></a>
                    <a href="javascript:void(0)" class="nav-link icon theme_btn"><i class="fe fe-feather"></i></a>
                    <a href="javascript:void(0)" class="nav-link icon settingbar"><i class="fe fe-settings"></i></a>
                </div>
            </div>
            <div class="hright">
                <a href="javascript:void(0)" class="nav-link icon right_tab"><i class="fe fe-align-right"></i></a>
                <a href="login.html" class="nav-link icon settingbar"><i class="fe fe-power"></i></a>                
            </div>
        </div>
    </div>
    <!-- Start Rightbar setting panel -->
    <div id="rightsidebar" class="right_sidebar">
        <a href="javascript:void(0)" class="p-3 settingbar float-right"><i class="fa fa-close"></i></a>
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Settings" aria-expanded="true">Settings</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#activity" aria-expanded="false">General Settings</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane vivify fadeIn active" id="Settings" aria-expanded="true">
                <div class="mb-4">
                    <h6 class="font-14 font-weight-bold text-muted">Theme Color</h6>
                    <ul class="choose-skin list-unstyled mb-0">
                        <li data-theme="azure"><div class="azure"></div></li>
                        <li data-theme="indigo"><div class="indigo"></div></li>
                        <li data-theme="purple"><div class="purple"></div></li>
                        <li data-theme="orange"><div class="orange"></div></li>
                        <li data-theme="green"><div class="green"></div></li>
                        <li data-theme="cyan"><div class="cyan"></div></li>
                        <li data-theme="blush" class="active"><div class="blush"></div></li>
                    </ul>
                </div>
                <div class="mb-4">
                    <h6 class="font-14 font-weight-bold text-muted">Font Style</h6>
                    <div class="custom-controls-stacked font_setting">
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-muli" checked="">
                            <span class="custom-control-label">Muli Google Font</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-montserrat">
                            <span class="custom-control-label">Montserrat Google Font</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-poppins">
                            <span class="custom-control-label">Poppins Google Font</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-ptsans">
                            <span class="custom-control-label">PT Sans Google Font</span>
                        </label>
                    </div>
                </div>
                <div>
                    <h6 class="font-14 font-weight-bold mt-4 text-muted">General Settings</h6>
                    <ul class="setting-list list-unstyled mt-1 setting_switch">
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Night Mode</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-darkmode">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Fix Navbar top</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-fixnavbar">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Header Dark</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-pageheader">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Min Sidebar Dark</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-min_sidebar">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Sidebar Dark</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-sidebar">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Icon Color</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-iconcolor">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Gradient Color</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-gradient">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Box Shadow</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-boxshadow">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">RTL Support</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-rtl">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Box Layout</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-boxlayout">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                    </ul>
                </div>
                <hr>
                <div class="form-group">
                    <label class="d-block">Storage <span class="float-right">77%</span></label>
                    <div class="progress progress-sm">
                        <div class="progress-bar" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                    </div>
                    <button type="button" class="btn btn-primary btn-block mt-3">Upgrade Storage</button>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane vivify fadeIn" id="activity" aria-expanded="false">
                <!-- <ul class="new_timeline mt-3">
                    <li>
                        <div class="bullet pink"></div>
                        <div class="time">11:00am</div>
                        <div class="desc">
                            <h3>Attendance</h3>
                            <h4>Computer Class</h4>
                        </div>
                    </li>
                    <li>
                        <div class="bullet pink"></div>
                        <div class="time">11:30am</div>
                        <div class="desc">
                            <h3>Added an interest</h3>
                            <h4>“Volunteer Activities”</h4>
                        </div>
                    </li>
                    <li>
                        <div class="bullet green"></div>
                        <div class="time">12:00pm</div>
                        <div class="desc">
                            <h3>Developer Team</h3>
                            <h4>Hangouts</h4>
                            <ul class="list-unstyled team-info margin-0 p-t-5">                                            
                                <li><img src="{!! asset('images/xs/avatar1.jpg" alt="Avatar"></li>
                                <li><img src="{!! asset('images/xs/avatar2.jpg" alt="Avatar"></li>
                                <li><img src="{!! asset('images/xs/avatar3.jpg" alt="Avatar"></li>
                                <li><img src="{!! asset('images/xs/avatar4.jpg" alt="Avatar"></li>                                            
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="bullet green"></div>
                        <div class="time">2:00pm</div>
                        <div class="desc">
                            <h3>Responded to need</h3>
                            <a href="javascript:void(0)">“In-Kind Opportunity”</a>
                        </div>
                    </li>
                    <li>
                        <div class="bullet orange"></div>
                        <div class="time">1:30pm</div>
                        <div class="desc">
                            <h3>Lunch Break</h3>
                        </div>
                    </li>
                    <li>
                        <div class="bullet green"></div>
                        <div class="time">2:38pm</div>
                        <div class="desc">
                            <h3>Finish</h3>
                            <h4>Go to Home</h4>
                        </div>
                    </li>
                </ul> -->
                <nav class="sidebar-nav">
                    <ul class="metismenu">
                       
                        <li class="{{ Request::is('/grades') ? 'active' : '' }}"><a href="/grades"><i class="fa fa-black-tie"></i><span>Grade</span></a></li>
                        <li class="{{ Request::is('/OrganizationTypes') ? 'active' : '' }}"><a href="/OrganizationTypes"><i class="fa fa-map"></i><span>OrganizationType</span></a></li>
                        <li class="{{ Request::is('/StudentTypes') ? 'active' : '' }}"><a href="/StudentTypes"><i class="fa fa-users"></i><span>StudentType</span></a></li>
                        <li class="{{ Request::is('/StaffTypes') ? 'active' : '' }}"><a href="/StaffTypes"><i class="fa fa-user-circle-o"></i><span>StaffType</span></a></li>
                        <li class="{{ Request::is('/levels') ? 'active' : '' }}"><a href="/levels"><i class="fa fa-list-ul"></i><span>Level</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- Start Theme panel do not add in project -->
    <div class="theme_div">
        <div class="card">
            <div class="card-body">
                <ul class="list-group list-unstyled">
                    <li class="list-group-item mb-2">
                        <p>Light Version</p>
                        <a href="../university/index.html"><img src="{!! asset('images/themes/default.png" class="img-fluid" alt="" /></a>
                    </li>
                    <li class="list-group-item mb-2">
                        <p>Dark Version</p>
                        <a href="../university-dark/index.html"><img src="{!! asset('images/themes/dark.png" class="img-fluid" alt="" /></a>
                    </li>
                    <li class="list-group-item mb-2">
                        <p>RTL Version</p>
                        <a href="../university-rtl/index.html"><img src="{!! asset('images/themes/rtl.png" class="img-fluid" alt="" /></a>
                    </li>
                </ul>
            </div>
        </div>        
    </div>
  
    <!-- Start Main leftbar navigation -->
    <div id="left-sidebar" class="sidebar">
        <h5 class="brand-name">Aaklan<a href="javascript:void(0)" class="menu_option float-right"><i class="icon-grid font-16" data-toggle="tooltip" data-placement="left" title="Grid & List Toggle"></i></a></h5>
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu-uni">Admin</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu-admin">LMS</a></li>
        </ul>
        <div class="tab-content mt-3">
            <div class="tab-pane fade show active" id="menu-uni" role="tabpanel">
                <nav class="sidebar-nav">
                    <ul class="metismenu">
                        <li class="{{ Request::is('admin/home') ? 'active' : '' }}">
                            <a href="/admin/home">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                    
                        <li class="{{ Request::is('organizations*') ? 'active' : '' }}">
                            <a href="/organizations">
                                <i class="fa fa-map"></i>
                                <span>Organization</span>
                            </a>
                        </li>
                        
                        <li class="{{ Request::is('students*') ? 'active' : '' }}">
                            <a href="/students">
                                <i class="fa fa-users"></i>
                                <span>Students</span>
                            </a>
                        </li>
                        
                        <li class="{{ Request::is('staffs*') ? 'active' : '' }}">
                            <a href="/staffs">
                                <i class="fa fa-user-circle-o"></i>
                                <span>Staff</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="tab-pane fade" id="menu-admin" role="tabpanel">
                <!-- <nav class="sidebar-nav">
                    <ul class="metismenu">
                       
                        <li><a href="/grades"><i class="fa fa-black-tie"></i><span>Grade</span></a></li>
                        <li><a href="/OrganizationTypes"><i class="fa fa-map"></i><span>OrganizationType</span></a></li>
                        <li><a href="/StudentTypes"><i class="fa fa-users"></i><span>StudentType</span></a></li>
                        <li><a href="/StaffTypes"><i class="fa fa-user-circle-o"></i><span>StaffType</span></a></li>
                        <li><a href="/levels"><i class="fa fa-list-ul"></i><span>Level</span></a></li>
                    </ul>
                </nav> -->
            </div>
        </div>
    </div>

    <!-- Start project content area -->
<div class="page">



<!-- Start Page header -->
<div class="section-body" id="page_top" >
    <div class="container-fluid">
        <div class="page-header">
            <div class="left">                        
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="What you want to find">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button">Search</button>
                    </div>
                </div>
            </div>
            <div class="right">
               
                <div class="notification d-flex">
                  
                   
                    <div class="dropdown d-flex">
                        <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="badge badge-primary nav-unread"></span></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <ul class="list-unstyled feeds_widget">
                                <li>
                                    <div class="feeds-left">
                                        <span class="avatar avatar-blue"><i class="fa fa-check"></i></span>
                                    </div>
                                    <div class="feeds-body ml-3">
                                        <p class="text-muted mb-0">Campaign <strong class="text-blue font-weight-bold">Holiday</strong> is nearly reach budget limit.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="feeds-left">
                                        <span class="avatar avatar-green"><i class="fa fa-user"></i></span>
                                    </div>
                                    <div class="feeds-body ml-3">
                                        <p class="text-muted mb-0">New admission <strong class="text-green font-weight-bold">32</strong> in computer department.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="feeds-left">
                                        <span class="avatar avatar-red"><i class="fa fa-info"></i></span>
                                    </div>
                                    <div class="feeds-body ml-3">
                                        <p class="text-muted mb-0">6th sem result <strong class="text-red font-weight-bold">67%</strong> in computer department.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="feeds-left">
                                        <span class="avatar avatar-azure"><i class="fa fa-thumbs-o-up"></i></span>
                                    </div>
                                    <div class="feeds-body ml-3">
                                        <p class="text-muted mb-0">New Feedback <strong class="text-azure font-weight-bold">53</strong> for university assessment.</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0)" class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
                        </div>
                    </div>
                    <div class="dropdown d-flex">
                        <a href="javascript:void(0)" class="chip ml-3" data-toggle="dropdown">
                            <span class="avatar" style="background-image: url(/images/xs/avatar5.jpg)"></span> George</a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="page-profile.html"><i class="dropdown-icon fe fe-user"></i> Profile</a>
                            <a class="dropdown-item" href="app-setting.html"><i class="dropdown-icon fe fe-settings"></i> Settings</a>
                            <!-- <a class="dropdown-item" href="app-email.html"><span class="float-right"><span class="badge badge-primary">6</span></span><i class="dropdown-icon fe fe-mail"></i> Inbox</a> -->
                            <!-- <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon fe fe-send"></i> Message</a> -->
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon fe fe-help-circle"></i> Need help?</a>
                            <a class="dropdown-item" href="login.html"><i class="dropdown-icon fe fe-log-out"></i> Sign out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>