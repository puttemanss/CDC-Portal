<!doctype html>
<html lang="en">

<head>
<title>:: Lucid HR :: Widgets Social</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Lucid Bootstrap 4x Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/color_skins.css">
</head>
<body class="theme-orange">

    <!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="assets/images/logo-icon.svg" width="48" height="48" alt="Lucid"></div>
        <p>Please wait...</p>        
    </div>
</div>
<!-- Overlay For Sidebars -->

<div id="wrapper">

    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-btn">
                <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
            </div>

            <div class="navbar-brand">
                <a href="index.php"><img src="assets/images/logo.svg" alt="Lucid Logo" class="img-responsive logo"></a>                
            </div>
            
            <div class="navbar-right">
                <form id="navbar-search" class="navbar-form search-form">
                    <input value="" class="form-control" placeholder="Search here..." type="text">
                    <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                </form>               

                <div id="navbar-menu">
                    <ul class="nav navbar-nav">                        
                        <li><a href="app-events.php" class="icon-menu d-none d-sm-block d-md-none d-lg-block"><i class="icon-calendar"></i></a></li>
                        <li><a href="app-chat.php" class="icon-menu d-none d-sm-block"><i class="icon-bubbles"></i></a></li>
                        <li><a href="app-inbox.php" class="icon-menu d-none d-sm-block"><i class="icon-envelope"></i><span class="notification-dot"></span></a></li>
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                <i class="icon-bell"></i>
                                <span class="notification-dot"></span>
                            </a>
                            <ul class="dropdown-menu notifications animated shake">
                                <li class="header"><strong>You have 4 new Notifications</strong></li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="icon-info text-warning"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="text">Campaign <strong>Holiday Sale</strong> is nearly reach budget limit.</p>
                                                <span class="timestamp">10:00 AM Today</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>                               
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="icon-like text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="text">Your New Campaign <strong>Holiday Sale</strong> is approved.</p>
                                                <span class="timestamp">11:30 AM Today</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                 <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="icon-pie-chart text-info"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="text">Website visits from Twitter is 27% higher than last week.</p>
                                                <span class="timestamp">04:00 PM Today</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="icon-info text-danger"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="text">Error on website analytics configurations</p>
                                                <span class="timestamp">Yesterday</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="footer"><a href="javascript:void(0);" class="more">See all notifications</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown"><i class="icon-equalizer"></i></a>
                            <ul class="dropdown-menu user-menu menu-icon animated bounceIn">
                                <li class="menu-heading">ACCOUNT SETTINGS</li>
                                <li><a href="javascript:void(0);"><i class="icon-note"></i> <span>Basic</span></a></li>
                                <li><a href="javascript:void(0);"><i class="icon-equalizer"></i> <span>Preferences</span></a></li>
                                <li><a href="javascript:void(0);"><i class="icon-lock"></i> <span>Privacy</span></a></li>
                                <li><a href="javascript:void(0);"><i class="icon-bell"></i> <span>Notifications</span></a></li>
                                <li class="menu-heading">BILLING</li>
                                <li><a href="javascript:void(0);"><i class="icon-credit-card"></i> <span>Payments</span></a></li>
                                <li><a href="javascript:void(0);"><i class="icon-printer"></i> <span>Invoices</span></a></li>                                
                                <li><a href="javascript:void(0);"><i class="icon-refresh"></i> <span>Renewals</span></a></li>
                            </ul>
                        </li>
                        <li><a href="page-login.php" class="icon-menu"><i class="icon-login"></i></a></li>                        
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div id="left-sidebar" class="sidebar">
        <div class="sidebar-scroll">
            <div class="user-account">
                <img src="assets/images/user.png" class="rounded-circle user-photo" alt="User Profile Picture">
                <div class="dropdown">
                    <span>Welcome,</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Jessica Doe</strong></a>                    
                    <ul class="dropdown-menu dropdown-menu-right account animated flipInY">
                        <li><a href="page-profile2.php"><i class="icon-user"></i>My Profile</a></li>
                        <li><a href="app-inbox.php"><i class="icon-envelope-open"></i>Messages</a></li>
                        <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="page-login.php"><i class="icon-power"></i>Logout</a></li>
                    </ul>
                </div>
                <hr>
                <div class="row">
                    <div class="col-4">
                        <h6>5+</h6>
                        <small>Experience</small>                        
                    </div>
                    <div class="col-4">
                        <h6>400+</h6>
                        <small>Employees</small>                        
                    </div>
                    <div class="col-4">                        
                        <h6>80+</h6>
                        <small>Clients</small>
                    </div>
                </div>
            </div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#hr_menu">HR</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#project_menu">Project</a></li>
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#sub_menu"><i class="icon-grid"></i></a></li>                
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i class="icon-settings"></i></a></li>
            </ul>
                
            <!-- Tab panes -->
            <div class="tab-content p-l-0 p-r-0">
                <div class="tab-pane animated fadeIn" id="hr_menu">
                    <nav class="sidebar-nav">
                        <ul class="main-menu metismenu">
                            <li class="active"><a href="index.php"><i class="icon-speedometer"></i><span>HR Dashboard</span></a></li>
                            <li><a href="app-holidays.php"><i class="icon-list"></i>Holidays</a></li>
                            <li><a href="app-events.php"><i class="icon-calendar"></i>Events</a></li>
                            <li><a href="app-activities.php"><i class="icon-badge"></i>Activities</a></li>
                            <li><a href="app-social.php"><i class="icon-globe"></i>HR Social</a></li>
                            <li>
                                <a href="#Employees" class="has-arrow"><i class="icon-users"></i><span>Employees</span></a>
                                <ul>
                                    <li><a href="emp-all.php">All Employees</a></li>
                                    <li><a href="emp-leave.php">Leave Requests</a></li>
                                    <li><a href="emp-attendance.php">Attendance</a></li>
                                    <li><a href="emp-departments.php">Departments</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Accounts" class="has-arrow"><i class="icon-briefcase"></i><span>Accounts</span></a>
                                <ul>
                                    <li><a href="acc-payments.php">Payments</a></li>
                                    <li><a href="acc-expenses.php">Expenses</a></li>
                                    <li><a href="acc-invoices.php">Invoices</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Payroll" class="has-arrow"><i class="icon-credit-card"></i><span>Payroll</span></a>
                                <ul>
                                    <li><a href="payroll-payslip.php">Payslip</a></li>
                                    <li><a href="payroll-salary.php">Employee Salary</a></li>                                    
                                </ul>
                            </li>
                            <li>
                                <a href="#Report" class="has-arrow"><i class="icon-bar-chart"></i><span>Report</span></a>
                                <ul>
                                    <li><a href="report-expense.php">Expense Report</a></li>
                                    <li><a href="report-invoice.php">Invoice Report</a></li>                                    
                                </ul>
                            </li>
                            <li><a href="app-users.php"><i class="icon-user"></i>Users</a></li>
                            <li>
                                <a href="#Authentication" class="has-arrow"><i class="icon-lock"></i><span>Authentication</span></a>
                                <ul>
                                    <li><a href="page-login.php">Login</a></li>
                                    <li><a href="page-register.php">Register</a></li>
                                    <li><a href="page-lockscreen.php">Lockscreen</a></li>
                                    <li><a href="page-forgot-password.php">Forgot Password</a></li>
                                    <li><a href="page-404.php">Page 404</a></li>
                                    <li><a href="page-403.php">Page 403</a></li>
                                    <li><a href="page-500.php">Page 500</a></li>
                                    <li><a href="page-503.php">Page 503</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane animated fadeIn" id="project_menu">
                    <nav class="sidebar-nav">
                        <ul class="main-menu metismenu">
                            <li><a href="index2.php"><i class="icon-speedometer"></i><span>Dashboard</span></a></li>
                            <li><a href="app-inbox.php"><i class="icon-envelope"></i>Inbox App</a></li>
                            <li><a href="app-chat.php"><i class="icon-bubbles"></i>Chat App</a></li>
                            <li>
                                <a href="#Projects" class="has-arrow"><i class="icon-list"></i><span>Projects</span></a>
                                <ul>
                                    <li><a href="project-add.php">Add Projects</a></li>
                                    <li><a href="project-list.php">Projects List</a></li>
                                    <li><a href="project-grid.php">Projects Grid</a></li>
                                    <li><a href="project-detail.php">Projects Detail</a></li>                                    
                                </ul>
                            </li>
                            <li>
                                <a href="#Clients" class="has-arrow"><i class="icon-user"></i><span>Clients</span></a>
                                <ul>
                                    <li><a href="client-add.php">Add Clients</a></li>
                                    <li><a href="client-list.php">Clients List</a></li>
                                    <li><a href="client-detail.php">Clients Detail</a></li>
                                </ul>
                            </li>
                            <li><a href="project-team.php"><i class="icon-users"></i>Team</a></li>
                            <li><a href="app-taskboard.php"><i class="icon-tag"></i>Taskboard</a></li>
                            <li><a href="app-tickets.php"><i class="icon-screen-tablet"></i>Tickets</a></li>
                        </ul>                        
                    </nav>                    
                </div>
                <div class="tab-pane animated fadeIn active" id="sub_menu">
                    <nav class="sidebar-nav">
                        <ul class="main-menu metismenu">
                            <li>
                                <a href="#Blog" class="has-arrow"><i class="icon-globe"></i> <span>Blog</span></a>
                                <ul>                                    
                                    <li><a href="blog-dashboard.php">Dashboard</a></li>
                                    <li><a href="blog-post.php">New Post</a></li>
                                    <li><a href="blog-list.php">Blog List</a></li>
                                    <li><a href="blog-details.php">Blog Detail</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#FileManager" class="has-arrow"><i class="icon-folder"></i> <span>File Manager</span></a>
                                <ul>                                    
                                    <li><a href="file-dashboard.php">Dashboard</a></li>
                                    <li><a href="file-documents.php">Documents</a></li>
                                    <li><a href="file-media.php">Media</a></li>
                                    <li><a href="file-images.php">Images</a></li>
                                </ul>
                            </li>
                            <li class="active">
                                <a href="#Widgets" class="has-arrow"><i class="icon-puzzle"></i><span>Widgets</span></a>
                                <ul>
                                    <li><a href="widgets-statistics.php">Statistics Widgets</a></li>
                                    <li><a href="widgets-data.php">Data Widgets</a></li>
                                    <li><a href="widgets-chart.php">Chart Widgets</a></li>
                                    <li><a href="widgets-weather.php">Weather Widgets</a></li>
                                    <li class="active"><a href="widgets-social.php">Social Widgets</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Pages" class="has-arrow"><i class="icon-docs"></i><span>Extra Pages</span></a>
                                <ul>
                                    <li><a href="page-blank.php">Blank Page</a> </li>
                                    <li><a href="page-profile2.php">Profile</a></li>
                                    <li><a href="page-gallery.php">Image Gallery <span class="badge badge-default float-right">v1</span></a> </li>
                                    <li><a href="page-gallery2.php">Image Gallery <span class="badge badge-warning float-right">v2</span></a> </li>
                                    <li><a href="page-timeline.php">Timeline</a></li>
                                    <li><a href="page-timeline-h.php">Horizontal Timeline</a></li>
                                    <li><a href="page-pricing.php">Pricing</a></li>
                                    <li><a href="page-invoices.php">Invoices</a></li>
                                    <li><a href="page-invoices2.php">Invoices <span class="badge badge-warning float-right">v2</span></a></li>
                                    <li><a href="page-search-results.php">Search Results</a></li>
                                    <li><a href="page-helper-class.php">Helper Classes</a></li>
                                    <li><a href="page-maintenance.php">Maintenance</a></li>
                                    <li><a href="page-testimonials.php">Testimonials</a></li>
                                    <li><a href="page-faq.php">FAQs</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#uiElements" class="has-arrow"><i class="icon-diamond"></i> <span>UI Elements</span></a>
                                <ul>
                                    <li><a href="ui-typography.php">Typography</a></li>
                                    <li><a href="ui-tabs.php">Tabs</a></li>
                                    <li><a href="ui-buttons.php">Buttons</a></li>
                                    <li><a href="ui-bootstrap.php">Bootstrap UI</a></li>
                                    <li><a href="ui-icons.php">Icons</a></li>
                                    <li><a href="ui-notifications.php">Notifications</a></li>
                                    <li><a href="ui-colors.php">Colors</a></li>
                                    <li><a href="ui-dialogs.php">Dialogs</a></li>                                    
                                    <li><a href="ui-list-group.php">List Group</a></li>
                                    <li><a href="ui-media-object.php">Media Object</a></li>
                                    <li><a href="ui-modals.php">Modals</a></li>
                                    <li><a href="ui-nestable.php">Nestable</a></li>
                                    <li><a href="ui-progressbars.php">Progress Bars</a></li>
                                    <li><a href="ui-range-sliders.php">Range Sliders</a></li>
                                    <li><a href="ui-treeview.php">Treeview</a></li>
                                </ul>
                            </li>                            
                            <li>
                                <a href="#forms" class="has-arrow"><i class="icon-pencil"></i> <span>Forms</span></a>
                                <ul>
                                    <li><a href="forms-validation.php">Form Validation</a></li>
                                    <li><a href="forms-advanced.php">Advanced Elements</a></li>
                                    <li><a href="forms-basic.php">Basic Elements</a></li>
                                    <li><a href="forms-wizard.php">Form Wizard</a></li>                                    
                                    <li><a href="forms-dragdropupload.php">Drag &amp; Drop Upload</a></li>                                    
                                    <li><a href="forms-cropping.php">Image Cropping</a></li>
                                    <li><a href="forms-summernote.php">Summernote</a></li>
                                    <li><a href="forms-editors.php">CKEditor</a></li>
                                    <li><a href="forms-markdown.php">Markdown</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Tables" class="has-arrow"><i class="icon-tag"></i> <span>Tables</span></a>
                                <ul>
                                    <li><a href="table-basic.php">Tables Example<span class="badge badge-info float-right">New</span></a> </li>
                                    <li><a href="table-normal.php">Normal Tables</a> </li>
                                    <li><a href="table-jquery-datatable.php">Jquery Datatables</a> </li>
                                    <li><a href="table-editable.php">Editable Tables</a> </li>
                                    <li><a href="table-color.php">Tables Color</a> </li>
                                    <li><a href="table-filter.php">Table Filter <span class="badge badge-info float-right">New</span></a> </li>
                                    <li><a href="table-dragger.php">Table dragger <span class="badge badge-info float-right">New</span></a> </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#charts" class="has-arrow"><i class="icon-bar-chart"></i> <span>Charts</span></a>
                                <ul>
                                    <li><a href="chart-morris.php">Morris</a> </li>
                                    <li><a href="chart-flot.php">Flot</a> </li>
                                    <li><a href="chart-chartjs.php">ChartJS</a> </li>                                    
                                    <li><a href="chart-jquery-knob.php">Jquery Knob</a> </li>                                        
                                    <li><a href="chart-sparkline.php">Sparkline Chart</a></li>
                                    <li><a href="chart-peity.php">Peity</a></li>
                                    <li><a href="chart-c3.php">C3 Charts</a></li>
                                    <li><a href="chart-gauges.php">Gauges</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Maps" class="has-arrow"><i class="icon-map"></i> <span>Maps</span></a>
                                <ul>
                                    <li><a href="map-google.php">Google Map</a></li>
                                    <li><a href="map-yandex.php">Yandex Map</a></li>
                                    <li><a href="map-jvectormap.php">jVector Map</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane animated fadeIn" id="setting">
                    <div class="p-l-15 p-r-15">
                        <h6>Choose Skin</h6>
                        <ul class="choose-skin list-unstyled">
                            <li data-theme="purple">
                                <div class="purple"></div>
                                <span>Purple</span>
                            </li>                   
                            <li data-theme="blue">
                                <div class="blue"></div>
                                <span>Blue</span>
                            </li>
                            <li data-theme="cyan">
                                <div class="cyan"></div>
                                <span>Cyan</span>
                            </li>
                            <li data-theme="green">
                                <div class="green"></div>
                                <span>Green</span>
                            </li>
                            <li data-theme="orange" class="active">
                                <div class="orange"></div>
                                <span>Orange</span>
                            </li>
                            <li data-theme="blush">
                                <div class="blush"></div>
                                <span>Blush</span>
                            </li>
                        </ul>
                        <hr>
                        <h6>General Settings</h6>
                        <ul class="setting-list list-unstyled">
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox">
                                    <span>Report Panel Usag</span>
                                </label>
                            </li>
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox">
                                    <span>Email Redirect</span>
                                </label>
                            </li>
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" checked>
                                    <span>Notifications</span>
                                </label>                      
                            </li>
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" checked>
                                    <span>Auto Updates</span>
                                </label>
                            </li>
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox">
                                    <span>Offline</span>
                                </label>
                            </li>
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" checked>
                                    <span>Location Permission</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>             
            </div>          
        </div>
    </div>

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Widgets Social</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Widgets</li>
                            <li class="breadcrumb-item active">Widgets Social</li>
                        </ul>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <div class="bh_chart hidden-xs">
                            <div class="float-left m-r-15">
                                <small>Visitors</small>
                                <h6 class="mb-0 mt-1"><i class="icon-user"></i> 1,784</h6>
                            </div>
                            <span class="bh_visitors float-right">2,5,1,8,3,6,7,5</span>
                        </div>
                        <div class="bh_chart hidden-sm">
                            <div class="float-left m-r-15">
                                <small>Visits</small>
                                <h6 class="mb-0 mt-1"><i class="icon-globe"></i> 325</h6>
                            </div>
                            <span class="bh_visits float-right">10,8,9,3,5,8,5</span>
                        </div>
                        <div class="bh_chart hidden-sm">
                            <div class="float-left m-r-15">
                                <small>Chats</small>
                                <h6 class="mb-0 mt-1"><i class="icon-bubbles"></i> 13</h6>
                            </div>
                            <span class="bh_chats float-right">1,8,5,6,2,4,3,2</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>New Post</h2>
                        </div>
                        <div class="body">
                            <div class="form-group">
                                <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                            </div>
                            <div class="align-right">
                                <button class="btn btn-warning"><i class="icon-paper-clip text-light"></i></button>
                                <button class="btn btn-warning"><i class="icon-camera text-light"></i></button>
                                <button class="btn btn-primary">Post</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="body text-center">
                            <h5>Twitter</h5>
                            <small>56% Increase</small>
                            <hr>
                            <input type="text" class="knob2" value="66" data-linecap="round" data-width="115" data-height="115" data-thickness="0.2"  data-fgColor="#4CAF50" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="body text-center">
                            <h5>Facebook</h5>
                            <small>87% Increase</small>
                            <hr>
                            <input type="text" class="knob2" value="26" data-linecap="round" data-width="115" data-height="115" data-thickness="0.2"  data-fgColor="#7b69ec" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12">
                    <div class="card member-card">
                        <div class="header bg-info">
                            <h4 class="m-t-10 text-light">Eliana Smith</h4>
                        </div>
                        <div class="member-img">
                            <a href="javascript:void(0);"><img src="assets/images/lg/avatar2.jpg" class="rounded-circle" alt="profile-image"></a>
                        </div>
                        <div class="body">
                            <div class="col-12">
                                <ul class="social-links list-unstyled">
                                    <li><a title="facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                    <li><a title="twitter" href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                    <li><a title="instagram" href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                                <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco,<br> CADGE 94107</p>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-4">
                                    <h5>418</h5>
                                    <small>Followers</small>
                                </div>
                                <div class="col-4">
                                    <h5>205</h5>
                                    <small>Comments</small>
                                </div>
                                <div class="col-4">
                                    <h5>656</h5>
                                    <small>Tweets</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="body w_user">
                            <img class="rounded-circle" src="assets/images/sm/avatar4.jpg" alt="">
                            <div class="wid-u-info">
                                <h5>Fidel Tonn</h5>
                                <p class="text-muted m-b-0">123 6th St. Melbourne, <br>FL 32904</p>                            
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-4">
                                    <h5 class="m-b-0">270</h5>
                                    <small>Followers</small>
                                </div>
                                <div class="col-4">
                                    <h5 class="m-b-0">310</h5>
                                    <small>Following</small>
                                </div>
                                <div class="col-4">
                                    <h5 class="m-b-0">908</h5>
                                    <small>Liks</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="carousel slide google w_feed" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <i class="fa fa-google-plus fa-2x"></i>
                                    <p>18th Feb</p>
                                    <h4>Now Get <span>Up to 70% Off</span><br>on buy</h4>
                                    <div class="m-t-20"><i>- post form WrapTheme</i></div>
                                </div>
                                <div class="carousel-item">
                                    <i class="fa fa-google-plus fa-2x"></i>
                                    <p>28th Mar</p>
                                    <h4>Now Get <span>50% Off</span><br>on buy</h4>
                                    <div class="m-t-20"><i>- post form ThemeMakker</i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card overflowhidden">
                        <div class="body top_counter bg-success">
                            <div class="icon bg-transparent">
                                <img src="assets/images/xs/avatar2.jpg" class="rounded-circle" alt="">
                            </div>
                            <div class="content text-light">
                                <div>Team Leader</div>
                                <h6>Maryam Amiri</h6>
                            </div>
                        </div>
                        <div class="body">
                            <div class="list-group list-widget">
                                <a href="javascript:void(0);" class="list-group-item">
                                    <span class="badge badge-success">654</span>
                                    <i class="fa fa-envelope text-muted"></i>Inbox</a>
                                <a href="javascript:void(0);" class="list-group-item">
                                    <span class="badge badge-info">364</span>
                                    <i class="fa fa-eye text-muted"></i> Profile visits</a>
                                <a href="javascript:void(0);" class="list-group-item">
                                    <span class="badge badge-warning">12</span>
                                    <i class="fa fa-phone text-muted"></i> Call</a>
                                <a href="javascript:void(0);" class="list-group-item">
                                    <span class="badge badge-danger">54</span>
                                    <i class="fa fa-comments-o text-muted"></i> Messages</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Twitter Feed</h2>
                        </div>
                        <div class="body">
                            <form>
                                <div class="form-group">
                                    <textarea rows="4" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                </div>
                                <button class="btn btn-primary">Tweet</button>
                                <a href="javascript:void(0);" class="float-right">13K users active</a>
                            </form>
                            <hr>
                            <ul class="right_chat list-unstyled mb-0">
                                <li class="offline">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">@Isabella <small class="float-right">1 hours ago</small></span>
                                                <span class="message">Contrary to popular belief, Lorem Ipsum is not simply random text</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>
                                <li class="offline">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">@Folisise Chosielie <small class="float-right">45 hours ago</small></span>
                                                <span class="message">There are many variations of passages of Lorem Ipsum available, but the majority</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media mb-0">
                                            <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">@Alexander <small class="float-right">1 day ago</small></span>
                                                <span class="message">It is a long established fact that a reader will be distracted</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>                        
                            </ul>                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card w_social2 overflowhidden">
                            <div class="pw_img">
                            <img class="img-fluid" src="assets/images/auth_bg.jpg" alt="About the image">
                        </div>
                        <div class="pw_content">
                            <div class="pw_header top_counter">
                                <div class="icon bg-transparent">
                                    <img src="assets/images/xs/avatar5.jpg" class="rounded-circle" alt="">
                                </div>
                                <div class="content">
                                    <div>Account </div>
                                    <h6>@Maryam Amiri</h6>
                                </div>
                            </div>
                            <div class="pw_meta">
                                <div class="row">
                                    <div class="col-4">
                                        <h5>18K</h5>
                                        <small>Followers</small>
                                    </div>
                                    <div class="col-4">
                                        <h5>532</h5>
                                        <small>Following</small>
                                    </div>
                                    <div class="col-4">
                                        <h5>656</h5>
                                        <small>Tweets</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="carousel slide twitter w_feed" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <i class="fa fa-twitter fa-2x"></i>
                                    <p>23th Feb</p>
                                    <h4>Now Get <span>Up to 70% Off</span><br>on buy</h4>
                                    <div class="m-t-20"><i>- post form ThemeMakker</i></div>
                                </div>
                                <div class="carousel-item">
                                    <i class="fa fa-twitter fa-2x"></i>
                                    <p>25th Jan</p>
                                    <h4>Now Get <span>50% Off</span><br>on buy</h4>
                                    <div class="m-t-20"><i>- post form WrapTheme</i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="carousel slide facebook w_feed" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <i class="fa fa-facebook fa-2x"></i>
                                    <p>20th Jan</p>
                                    <h4>Now Get <span>50% Off</span><br>on buy</h4>
                                    <div class="m-t-20"><i>- post form Theme</i></div>
                                </div>
                                <div class="carousel-item">
                                    <i class="fa fa-facebook fa-2x"></i>
                                    <p>23th Feb</p>
                                    <h4>Now Get <span>Up to 70% Off</span><br>on buy</h4>
                                    <div class="m-t-20"><i>- post form Theme</i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>Social Media</h2>                            
                        </div>
                        <div class="body">
                            <div class="table-responsive social_media_table">
                                <table class="table table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Media</th>
                                            <th>Name</th>
                                            <th>Like</th>                                                                                
                                            <th>Comments</th>
                                            <th>Share</th>
                                            <th>Members</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class="social_icon linkedin"><i class="fa fa-linkedin"></i></span>
                                            </td>
                                            <td><span class="list-name">Linked In</span>
                                                <span class="text-muted">Florida, United States</span>
                                            </td>
                                            <td>19K</td>
                                            <td>14K</td>
                                            <td>10K</td>
                                            <td>
                                                <span class="badge badge-success">2341</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="social_icon twitter-table"><i class="fa fa-twitter"></i></span>
                                            </td>
                                            <td><span class="list-name">Twitter</span>
                                                <span class="text-muted">Arkansas, United States</span>
                                            </td>
                                            <td>7K</td>
                                            <td>11K</td>
                                            <td>21K</td>
                                            <td>
                                                <span class="badge badge-success">952</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="social_icon facebook"><i class="fa fa-facebook"></i></span>
                                            </td>
                                            <td><span class="list-name">Facebook</span>
                                                <span class="text-muted">Illunois, United States</span>
                                            </td>
                                            <td>15K</td>
                                            <td>18K</td>
                                            <td>8K</td>
                                            <td>
                                                <span class="badge badge-success">6127</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="social_icon google"><i class="fa fa-google-plus"></i></span>
                                            </td>
                                            <td><span class="list-name">Google Plus</span>
                                                <span class="text-muted">Arizona, United States</span>
                                            </td>
                                            <td>15K</td>
                                            <td>18K</td>
                                            <td>154</td>
                                            <td>
                                                <span class="badge badge-success">325</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="social_icon youtube"><i class="fa fa-youtube-play"></i></span>
                                            </td>
                                            <td><span class="list-name">YouTube</span>
                                                <span class="text-muted">Alaska, United States</span>
                                            </td>
                                            <td>15K</td>
                                            <td>18K</td>
                                            <td>200</td>
                                            <td>
                                                <span class="badge badge-success">160</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Followers</h2>
                        </div>
                        <div class="body">                            
                            <ul class="right_chat w_followers list-unstyled mb-0">
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="assets/images/xs/avatar4.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">@Chris Fox</span>
                                                <span class="message">Angular Champ</span>
                                                <span class="badge badge-outline status"></span>                                                
                                            </div>
                                        </div>
                                    </a>
                                    <button type="button" class="btn btn-outline-primary"><i class="icon-plus"></i></button>
                                </li>
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">@Joge Lucky</span>
                                                <span class="message">Sales Lead</span>
                                                <span class="badge badge-outline status"></span>                                                
                                            </div>
                                        </div>
                                    </a>
                                    <button type="button" class="btn btn-outline-primary"><i class="icon-plus"></i></button>
                                </li>
                                <li class="offline">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">@Isabella</span>
                                                <span class="message">CEO, Thememakker</span>
                                                <span class="badge badge-outline status"></span>                                                
                                            </div>
                                        </div>
                                    </a>
                                    <button type="button" class="btn btn-outline-primary"><i class="icon-plus"></i></button>
                                </li>
                                <li class="offline">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">@Folisise Chosielie</span>
                                                <span class="message">PHP Expert</span>
                                                <span class="badge badge-outline status"></span>                                                
                                            </div>
                                        </div>
                                    </a>
                                    <button type="button" class="btn btn-outline-primary"><i class="icon-plus"></i></button>
                                </li>
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">@Alexander</span>
                                                <span class="message">eCommerce Master</span>
                                                <span class="badge badge-outline status"></span>                                                
                                            </div>
                                        </div>
                                    </a>
                                    <button type="button" class="btn btn-outline-primary"><i class="icon-plus"></i></button>
                                </li>
                                <li class="offline">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="assets/images/xs/avatar10.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">@Folisise Chosielie</span>
                                                <span class="message">PHP Expert</span>
                                                <span class="badge badge-outline status"></span>                                                
                                            </div>
                                        </div>
                                    </a>
                                    <button type="button" class="btn btn-outline-primary"><i class="icon-plus"></i></button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix w_social3">
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card facebook-widget">
                        <div class="icon"><i class="fa fa-facebook"></i></div>
                        <div class="content">
                            <div class="text">Like</div>
                            <div class="number">123</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card instagram-widget">
                        <div class="icon"><i class="fa fa-instagram"></i></div>
                        <div class="content">
                            <div class="text">Followers</div>
                            <div class="number">231</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card twitter-widget">
                        <div class="icon"><i class="fa fa-twitter"></i></div>
                        <div class="content">
                            <div class="text">Followers</div>
                            <div class="number">31</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card google-widget">
                        <div class="icon"><i class="fa fa-google"></i></div>
                        <div class="content">
                            <div class="text">Like</div>
                            <div class="number">254</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card linkedin-widget">
                        <div class="icon"><i class="fa fa-linkedin"></i></div>
                        <div class="content">
                            <div class="text">Followers</div>
                            <div class="number">2510</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card behance-widget">
                        <div class="icon"><i class="fa fa-behance"></i></div>
                        <div class="content">
                            <div class="text">Project</div>
                            <div class="number">121</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Stories</h2>
                        </div>
                        <div class="body">                            
                            <ul class="right_chat list-unstyled mb-0">
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="assets/images/xs/avatar6.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Watt Mark</span>
                                                <span class="message">21 hours ago</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="assets/images/xs/avatar7.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Jay Morgan</span>
                                                <span class="message">3 hours ago</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="offline">
                                    <a href="javascript:void(0);">
                                        <div class="media mb-0">
                                            <img class="media-object " src="assets/images/xs/avatar8.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Genelia Perkins</span>
                                                <span class="message">3 hours ago</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="card w_profile">
                        <div class="body">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="profile-image float-md-right"> <img src="assets/images/user.png" alt=""> </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-12">
                                    <h4 class="m-t-0 m-b-0"><strong>Jessica</strong> Doe</h4>
                                    <span class="job_post">Ui UX Designer</span>
                                    <p>795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                                    <p class="social-icon">
                                        <a title="Twitter" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                        <a title="Facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                        <a title="Google-plus" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                        <a title="Behance" href="javascript:void(0);"><i class="fa fa-behance"></i></a>
                                        <a title="Instagram" href="javascript:void(0);"><i class="fa fa-instagram "></i></a>
                                    </p>
                                    <div class="row">
                                        <div class="col-4">
                                            <h5>18K</h5>
                                            <small>Followers</small>
                                        </div>
                                        <div class="col-4">
                                            <h5>532</h5>
                                            <small>Following</small>
                                        </div>
                                        <div class="col-4">
                                            <h5>656</h5>
                                            <small>Tweets</small>
                                        </div>
                                    </div>
                                    <div class="m-t-15">
                                        <button class="btn btn-primary">Follow</button>
                                        <button class="btn btn-success">Message</button>
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

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob-->
<script src="assets/bundles/mainscripts.bundle.js"></script>
<script>
    $(function() {
    "use strict";

    $('.knob2').knob({
        'format' : function (value) {
            return value + '%';
         }
    });
});
</script>
</body>
</html>
