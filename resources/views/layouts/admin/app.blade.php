

<!doctype html>

<html lang="en">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta http-equiv="Content-Language" content="en">

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <title>{{env('APP_NAME')}}</title>

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">

        <meta name="description" content="This is an example dashboard created using build-in elements and components.">

        <!-- Disable tap highlight on IE -->

        <meta name="msapplication-tap-highlight" content="no">

        <!-- <link href="./vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
 
        <link rel="stylesheet" href="{{asset('admin/vendors/@fortawesome/fontawesome-free/css/all.min.css')}}">

        <link rel="stylesheet" href="{{asset('admin/vendors/ionicons-npm/css/ionicons.css')}}">

        <link rel="stylesheet" href="{{asset('admin/vendors/linearicons-master/dist/web-font/style.css')}}">

        <link rel="stylesheet" href="{{asset('admin/vendors/pixeden-stroke-7-icon-master/pe-icon-7-stroke/dist/pe-icon-7-stroke.css')}}">

        <link href="{{asset('admin/styles/css/base.css')}}" rel="stylesheet">
        <style>
        td{
            color:black;
            font-size:16px;
        }
        label{
            color:black;
            font-size:16px;
        }

        .custom-color-black {
            background-color: #0000;

          }
          .custom-color-black-wht {
            background-color: #0000;
            color: #FFF;
            
          }
        </style>

        @yield('header')
        

    </head>

    <body>

        <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">



        <!-- Start of top menu -->

        @include('layouts.admin.topmenu')

          

        <!-- End of top menu -->

        

        <!-- start of setting gear layout button and panel -->



       

           

        <!-- End of setting gear layout button and panel -->

            <div class="app-main">

                <div class="app-sidebar sidebar-shadow">

                    <div class="app-header__logo">

                        <div class="logo-src"></div>

                        <div class="header__pane ms-auto">

                            <div>

                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">

                                    <span class="hamburger-box">

                                        <span class="hamburger-inner"></span>

                                    </span>

                                </button>

                            </div>

                        </div>

                    </div>

                    <div class="app-header__mobile-menu">

                        <div>

                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">

                                <span class="hamburger-box">

                                    <span class="hamburger-inner"></span>

                                </span>

                            </button>

                        </div>

                    </div>

                    <div class="app-header__menu">

                        <span>

                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">

                                <span class="btn-icon-wrapper">

                                    <i class="fa fa-ellipsis-v fa-w-6"></i>

                                </span>

                            </button>

                        </span>

                    </div>

            <!-- Start of Side menu -->

            @include('layouts.admin.leftsidemenu')

                   

            <!-- End of Side menu -->

                </div>

                <div class="app-main__outer">

                    <div class="app-main__inner">

                <!-- Start of top pan -->

                @include('layouts.admin.toppan')

                <!-- End  of top pan -->

                       @yield('content')

                    </div>

                   

                </div>

            </div>

        </div>

        <!-- start of server status panel-->

       

            

        <!-- end of server status panel -->

        <div class="app-drawer-overlay d-none animated fadeIn"></div>

        <!-- plugin dependencies -->

        <script type="text/javascript" src="{{asset('admin/vendors/jquery/dist/jquery.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('admin/vendors/moment/moment.js')}}"></script>

        <script type="text/javascript" src="{{asset('admin/vendors/metismenu/dist/metisMenu.js')}}"></script>

        <script type="text/javascript" src="{{asset('admin/vendors/bootstrap4-toggle/js/bootstrap4-toggle.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('admin/vendors/jquery-circle-progress/dist/circle-progress.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('admin/vendors/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('admin/vendors/toastr/build/toastr.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('admin/vendors/jquery.fancytree/dist/jquery.fancytree-all-deps.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('admin/vendors/apexcharts/dist/apexcharts.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('admin/vendors/bootstrap-table/dist/bootstrap-table.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('admin/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('admin/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('admin/vendors/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('admin/vendors/slick-carousel/slick/slick.min.js')}}"></script>

        <!-- custome.js -->

        <script type="text/javascript" src="{{asset('admin/js/charts/apex-charts.js')}}"></script>

        <script type="text/javascript" src="{{asset('admin/js/circle-progress.js')}}"></script>

        <script type="text/javascript" src="{{asset('admin/js/demo.js')}}"></script>

        <script type="text/javascript" src="{{asset('admin/js/scrollbar.js')}}"></script>

        <script type="text/javascript" src="{{asset('admin/js/toastr.js')}}"></script>

        <script type="text/javascript" src="{{asset('admin/js/treeview.js')}}"></script>

        <script type="text/javascript" src="{{asset('admin/js/form-components/toggle-switch.js')}}"></script>

        <script type="text/javascript" src="{{asset('admin/js/tables.js')}}"></script>

        <script type="text/javascript" src="{{asset('admin/js/carousel-slider.js')}}"></script>

        <script type="text/javascript" src="{{asset('admin/js/app.js')}}"></script>

        @yield('footer')

    </body>

</html>

