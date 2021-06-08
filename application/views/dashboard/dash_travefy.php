<!-- 
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>dashboard-travefy</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="icon" href="<?= base_url() ?>icon.ico" />
    <!-- CSS Files -->
    <link href="<?= base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/css/light-bootstrap-dashboard.css" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?= base_url() ?>assets/css/demo.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/css/page/dashboard.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/css/dash_travefy.css?v=0.0.1" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">

        <?php $this->load->view("dashboard/components/navbar.php"); ?>
        <div id="root" class="main-panel">

        </div>
    </div>

</body>

<script src="<?= base_url() ?>assets/js/momentjs/moment.min.js"></script>
<script src="https://unpkg.com/react@16/umd/react.production.min.js" crossorigin></script>
<script src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js" crossorigin></script>
<script src="<?= base_url() ?>react/dist/dashboard/serverUrl.js" type="text/javascript"></script>
<script src="<?= base_url() ?>react/dist/dashboard/travefy/App.js?v=0.0.1" type="text/javascript"></script>
<script src="<?= base_url() ?>react/dist/dashboard/travefy/index.js" type="text/javascript"></script>

<!--   Core JS Files   -->

<link href="<?= base_url() ?>assets/font/montserrat/montserrat.css" rel="stylesheet">
<link href="<?= base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
<script src="<?= base_url() ?>assets/js/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/js/popper.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?= base_url() ?>assets/js/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
<!--  Chartist Plugin  -->
<script src="<?= base_url() ?>assets/js/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?= base_url() ?>assets/js/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="<?= base_url() ?>assets/js/light-bootstrap-dashboard.js " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="<?= base_url() ?>assets/js/demo.js"></script>
<!-- <script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });
</script> -->
<script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>

</html>