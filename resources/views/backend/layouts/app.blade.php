<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@section('tittle') Assan admin @show</title>

    <!-- Bootstrap -->
    <link href="/backend/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--side menu plugin-->
    <link href="/backend/assets/plugins/hoe-nav/hoe.css" rel="stylesheet">
    <!-- icons-->
    <link href="/backend/assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="/backend/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!--template custom css file-->
    <link href="/backend/assets/css/style.css" rel="stylesheet">

    <script src="/backend/assets/js/modernizr.js"></script>

@yield('css')
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body hoe-navigation-type="vertical" hoe-nav-placement="left" theme-layout="wide-layout">

<!--side navigation start-->
<div id="hoeapp-wrapper" class="hoe-hide-lpanel" hoe-device-type="desktop">
    <header id="hoe-header" hoe-lpanel-effect="shrink">
        <div class="hoe-left-header">
            <a href="#"> A<span>SSAN</span></a>
            <span class="hoe-sidebar-toggle"><a href="#"></a></span>
        </div>

        <div class="hoe-right-header" hoe-position-type="relative">
            <span class="hoe-sidebar-toggle"><a href="#"></a></span>
            <ul class="left-navbar">
                <li>
                    <div class="top-search hidden-xs">
                        <form>
                            <input type="text" class="form-control" placeholder="Search here">
                            <i class="ion-search"></i>
                        </form>
                    </div>
                </li>

            </ul>
            <ul class="right-navbar navbar-right">
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"> <i class="ion-ios-bell-outline"></i>
                        <span class="label label-danger">4</span></a>
                    <ul class="dropdown-menu dropdown-menu-scale lg-dropdown notifications">
                        <li><p>You have 3 new notifications <a href="#"> Mark all Read</a></p></li>
                        <li class="unread-notifications">
                            <a href="#">
                                <i class="ion-ios-email-outline pull-right"></i>
                                <span class="line">You have 8 Messages</span>
                                <span class="small-line">3 Minutes ago</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ion-social-twitter-outline pull-right"></i>
                                <span class="line">You have 3 new followers</span>
                                <span class="small-line">8 Minutes ago</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ion-ios-download-outline pull-right"></i>
                                <span class="line">Download Complete</span>
                                <span class="small-line">6 Minutes ago</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"><img src="assets/images/us.png" alt="">
                        English</a>
                    <ul class="dropdown-menu dropdown-menu-scale lang-dropdown">
                        <li><a href="#"><img src="assets/images/us.png" alt=""> English </a></li>
                        <li><a href="#"><img src="assets/images/es.png" alt=""> Spanish </a></li>
                        <li><a href="#"><img src="assets/images/tr.png" alt=""> Turkish </a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"><img src="assets/images/avtar.png" alt=""
                                                                                    width="30" class="img-circle"> Emily
                        Doe</a>
                    <ul class="dropdown-menu dropdown-menu-scale user-dropdown">
                        <li><a href="#"><i class="ion-email-unread"></i> Inbox <span
                                        class="label label-warning">3</span></a></li>
                        <li><a href="#"><i class="ion-person"></i> Profile </a></li>
                        <li><a href="#"><i class="ion-settings"></i> Settings <span
                                        class="label label-primary">3/9</span></a></li>
                        <li><a href="#"><i class="ion-calendar"></i> Calendar </a></li>
                        <li><a href="#"><i class="ion-ios-compose"></i> Tasks </a></li>
                        <li><a href="#"><i class="ion-log-out"></i> Logout </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>
    <div id="hoeapp-container" hoe-color-type="lpanel-bg7" hoe-lpanel-effect="shrink">
        <aside id="hoe-left-panel" hoe-position-type="absolute">

            <ul class="nav panel-list">

                <li class="active">
                    <a href="index.html">
                        <i class="fa fa-home"></i>
                        <span class="menu-text">Dashboard</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="hoe-has-menu">
                    <a href="javascript:void(0)">
                        <i class="fa fa-envelope"></i>
                        <span class="menu-text">Email</span>
                        <span class="selected"></span>
                    </a>
                    <ul class="hoe-sub-menu">
                        <li>
                            <a href="email-inbox.html">
                                <span class="menu-text">Inbox</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li>
                            <a href="email-compose.html">
                                <span class="menu-text">Compose</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li>
                            <a href="email-view.html">
                                <span class="menu-text">Email View</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="hoe-has-menu">
                    <a href="javascript:void(0)">
                        <i class="fa fa-bar-chart-o"></i>
                        <span class="menu-text">Şiir</span>
                        <span class="selected"></span>
                    </a>
                    <ul class="hoe-sub-menu">
                        <li>
                            <a href="/admin/siirlerim">
                                <span class="menu-text">Şiirlerim</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li>
                            <a href="/admin/siir/siir-ekle">
                                <span class="menu-text">Şiir Ekle</span>
                                <span class="selected"></span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="hoe-has-menu">
                    <a href="javascript:void(0)">
                        <i class="fa fa-th-large"></i>
                        <span class="menu-text">Forms</span>
                        <span class="selected"></span>
                    </a>
                    <ul class="hoe-sub-menu">
                        <li>
                            <a href="form-basic.html">
                                <span class="menu-text">Basic elements</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li>
                            <a href="form-file-upload.html">
                                <span class="menu-text">File upload</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li>
                            <a href="form-text-editor.html">
                                <span class="menu-text">Text editor</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="hoe-has-menu">
                    <a href="javascript:void(0)">
                        <i class="fa fa-table"></i>
                        <span class="menu-text">Tables</span>
                        <span class="selected"></span>
                    </a>
                    <ul class="hoe-sub-menu">
                        <li>
                            <a href="table-static.html">
                                <span class="menu-text">Static tables</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li>
                            <a href="table-responsive.html">
                                <span class="menu-text">Responsive Tables</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li>
                            <a href="table-data.html">
                                <span class="menu-text">Data tables</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="calendar.html">
                        <i class="fa fa-calendar"></i>
                        <span class="menu-text">Calendar</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li>
                    <a href="user-profile.html">
                        <i class="fa fa-user"></i>
                        <span class="menu-text">User Profile</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="hoe-has-menu">
                    <a href="javascript:void(0)">
                        <i class="fa fa-envelope"></i>
                        <span class="menu-text">Pages</span>
                        <span class="selected"></span>
                    </a>
                    <ul class="hoe-sub-menu">
                        <li>
                            <a href="page-login.html">
                                <span class="menu-text">Login</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li>
                            <a href="page-register.html">
                                <span class="menu-text">Register</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li>
                            <a href="page-404.html">
                                <span class="menu-text">404</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li>
                            <a href="page-forget-password.html">
                                <span class="menu-text">Forget password</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li>
                            <a href="page-empty.html">
                                <span class="menu-text">Empty page</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="hoe-has-menu">
                    <a href="javascript:void(0)">
                        <i class="fa fa-cogs"></i>
                        <span class="menu-text">UI elements</span>
                        <span class="selected"></span>
                    </a>
                    <ul class="hoe-sub-menu">
                        <li>
                            <a href="ui-buttons.html">
                                <span class="menu-text">Buttons</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li>
                            <a href="ui-typography.html">
                                <span class="menu-text">typography</span>
                                <span class="selected"></span>
                            </a>
                        </li>

                        <li>
                            <a href="ui-tabs.html">
                                <span class="menu-text">Tabs</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li>
                            <a href="ui-alerts.html">
                                <span class="menu-text">Alerts</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li>
                            <a href="ui-tooltip_popovers.html">
                                <span class="menu-text">Tooltips & popovers</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="hoe-has-menu">
                    <a href="javascript:void(0)">
                        <i class="fa fa-map-o"></i>
                        <span class="menu-text">Maps</span>
                        <span class="selected"></span>
                    </a>
                    <ul class="hoe-sub-menu">
                        <li>
                            <a href="map-vector.html">
                                <span class="menu-text">Vector map</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li>
                            <a href="map-google.html">
                                <span class="menu-text">Google map</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="hoe-has-menu">
                    <a href="javascript:void(0)">
                        <i class="ion-ios-filing-outline"></i>
                        <span class="menu-text">Menu Lavel 1</span>
                        <span class="selected"></span>
                    </a>
                    <ul class="hoe-sub-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <span class="menu-text">level 2</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <span class="menu-text">level 2</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li class="hoe-has-menu">
                            <a href="javascript:void(0)">
                                <span class="menu-text">level 2</span>
                                <span class="selected"></span>
                            </a>
                            <ul class="hoe-sub-menu">
                                <li class="hoe-has-menu">
                                    <a href="javascript:void(0)">
                                        <span class="menu-text">level 3</span>
                                        <span class="selected"></span>
                                    </a>
                                    <ul class="hoe-sub-menu">
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="menu-text">level 4</span>
                                                <span class="selected"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="menu-text">level 4</span>
                                                <span class="selected"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <span class="menu-text">level 3</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <span class="menu-text">level 3</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <span class="menu-text">level 3</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </aside><!--aside left menu end-->


        <!--start main content-->

        <section id="main-content">
            @yield('content')
            <!--footer start-->
                <div class="footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <span>&copy; Copyright <?=date('Y'); ?>  Kare-Code Yazılım by Serhat KILIÇ</span>
                        </div>
                    </div>
                </div>
                <!--footer end-->
        </section>
    </div>
</div><!--end wrapper-->


<!--Common plugins-->
<script src="/backend/assets/plugins/jquery/dist/jquery.min.js"></script>
<script src="/backend/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="/backend/assets/plugins/hoe-nav/hoe.js"></script>
<script src="/backend/assets/plugins/pace/pace.min.js"></script>
<script src="/backend/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="/backend/assets/js/app.js"></script>
<!--page scripts-->

@yield('js')
</body>
</html>