<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@yield('title')</title>
    <!-- Favicon-->
    <!-- <link rel="icon" href="favicon.ico" type="image/x-icon"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('theme/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ asset('theme/plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ asset('theme/plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Bootstrap Tagsinput Css -->
    <link href="{{ asset('theme/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet">

    <!-- Bootstrap Spinner Css -->
    <link href="{{ asset('theme/plugins/jquery-spinner/css/bootstrap-spinner.css') }}" rel="stylesheet">

    <!-- Colorpicker Css -->
    <link href="{{ asset('theme/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{ asset('theme/plugins/morrisjs/morris.css') }}" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="{{ asset('theme/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">

    <!-- Custom Css -->
    <link href="{{ asset('theme/css/style.css') }}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('theme/css/themes/all-themes.css') }}" rel="stylesheet" />

    <!-- Dropzone Css -->
    <link href="{{ asset('theme/plugins/dropzone/dropzone.css') }}" rel="stylesheet">

    <!-- Multi Select Css -->
    <link href="{{ asset('theme/plugins/multi-select/css/multi-select.css') }}" rel="stylesheet">

    <!-- Bootstrap Spinner Css -->
    <link href="{{ asset('theme/plugins/jquery-spinner/css/bootstrap-spinner.css') }}" rel="stylesheet">

    <!-- Bootstrap Tagsinput Css -->
    <link href="{{ asset('theme/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="{{ asset('theme/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />

    <!-- noUISlider Css -->
    <link href="{{ asset('theme/plugins/nouislider/nouislider.min.css') }}" rel="stylesheet" />
    
    @stack('css')

</head>

<body class="theme-brown">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    @include('admin.blocks.topbar')
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        @include('admin.blocks.left-sidebar')
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        @include('admin.blocks.right-sidebar')
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        @yield('main')
    </section>
    <!-- Jquery Core Js -->
    <script src="{{ asset('theme/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ asset('theme/plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Bootstrap Notify Plugin Js -->
    <script src="{{ asset('theme/plugins/bootstrap-notify/bootstrap-notify.js') }}"></script>

    <!-- Bootstrap Colorpicker Js -->
    <script src="{{ asset('theme/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script>

    <!-- Input Mask Plugin Js -->
    <script src="{{ asset('theme/plugins/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script>

    <!-- Multi Select Plugin Js -->
    <script src="{{ asset('theme/plugins/multi-select/js/jquery.multi-select.js') }}"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="{{ asset('theme/plugins/jquery-spinner/js/jquery.spinner.js') }}"></script>

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="{{ asset('theme/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>

    <!-- noUISlider Plugin Js -->
    <!-- <script src="{{ asset('theme/plugins/nouislider/nouislider.js') }}"></script> -->

    <!-- Dropzone Plugin Js -->
    <script src="{{ asset('theme/plugins/dropzone/dropzone.js') }}"></script>

    <!-- Input Mask Plugin Js -->
    <script src="{{ asset('theme/plugins/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script>

    <!-- Select Plugin Js -->
    <script src="{{ asset('theme/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{ asset('theme/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('theme/plugins/node-waves/waves.js') }}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{ asset('theme/plugins/jquery-countto/jquery.countTo.js') }}"></script>

    <!-- Morris Plugin Js -->
    <script src="{{ asset('theme/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('theme/plugins/morrisjs/morris.js') }}"></script>

    <!-- ChartJs -->
    <script src="{{ asset('theme/plugins/chartjs/Chart.bundle.js') }}"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="{{ asset('theme/plugins/flot-charts/jquery.flot.js') }}"></script>
    <script src="{{ asset('theme/plugins/flot-charts/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('theme/plugins/flot-charts/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('theme/plugins/flot-charts/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('theme/plugins/flot-charts/jquery.flot.time.js') }}"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="{{ asset('theme/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('theme/js/admin.js') }}"></script>
    <!-- <script src="{{ asset('theme/js/pages/index.js') }}"></script> -->
    <script src="{{ asset('theme/js/pages/tables/jquery-datatable.js') }}"></script>
    <script src="{{ asset('theme/js/pages/ui/notifications.js') }}"></script>
    <!-- <script src="{{ asset('theme/js/pages/forms/advanced-form-elements.js') }}"></script> -->

    <!-- Demo Js -->
    <script src="{{ asset('theme/js/demo.js') }}"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('theme/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('theme/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('theme/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('theme/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('theme/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
    <script src="{{ asset('theme/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ asset('theme/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ asset('theme/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('theme/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>

    <!-- Ckeditor -->
    <script src="{{ asset('theme/plugins/ckeditor/ckeditor.js') }}"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    @stack('js')
    
    </body>

</html>