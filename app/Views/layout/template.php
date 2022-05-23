<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>CI4 Appstarter</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?= base_url() ?>/assets/images/favicon.ico">

        <link href="<?= base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url() ?>/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url() ?>/assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body>

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Navigation Bar-->
        <header id="topnav">
            <?= $this->include('layout/topbar') ?>
            <!-- end topbar-main -->

            <!-- MENU Start -->
            <?= $this->include('layout/navbar') ?>
            <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <div class="container-fluid">
                <!-- Content section start -->
                <?= $this->renderSection('content'); ?>
                <!-- Content section end -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


        <!-- Footer -->
        <?= $this->include('layout/footer'); ?>
        <!-- End Footer -->


        <!-- jQuery  -->
        <script src="<?= base_url() ?>/assets/js/jquery.min.js"></script>
        <script src="<?= base_url() ?>/assets/js/popper.min.js"></script>
        <script src="<?= base_url() ?>/assets/js/bootstrap.min.js"></script>
        <script src="<?= base_url() ?>/assets/js/modernizr.min.js"></script>
        <script src="<?= base_url() ?>/assets/js/waves.js"></script>
        <script src="<?= base_url() ?>/assets/js/jquery.slimscroll.js"></script>
        <script src="<?= base_url() ?>/assets/js/jquery.nicescroll.js"></script>
        <script src="<?= base_url() ?>/assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="<?= base_url() ?>/assets/js/app.js"></script>

        <!-- Dashboard js -->
        <script src="<?= base_url() ?>/assets/plugins/skycons/skycons.min.js"></script>
        <script src="<?= base_url() ?>/assets/plugins/raphael/raphael-min.js"></script>
        <script src="<?= base_url() ?>/assets/plugins/morris/morris.min.js"></script>
        
        <script src="<?= base_url() ?>/assets/pages/dashborad.js"></script>
        <script>
            /* BEGIN SVG WEATHER ICON */
            if (typeof Skycons !== 'undefined'){
           var icons = new Skycons(
               {"color": "#fff"},
               {"resizeClear": true}
               ),
                   list  = [
                       "clear-day", "clear-night", "partly-cloudy-day",
                       "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                       "fog"
                   ],
                   i;

               for(i = list.length; i--; )
               icons.set(list[i], list[i]);
               icons.play();
           };

       // scroll

       $(document).ready(function() {
       
       $("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#cecece",boxzoom:true});
       $("#boxscroll2").niceScroll({cursorborder:"",cursorcolor:"#cecece",boxzoom:true}); 
       
       });
       </script>

    </body>
</html>