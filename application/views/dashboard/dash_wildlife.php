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
    <title>dashboard-wildlife</title>
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
</head>

<body>
    <div class="wrapper">

        <?php $this->load->view("dashboard/components/navbar.php"); ?>
        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="offset-2 col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Create</h4>
                                </div>
                                <div class="card-body">
                                    <form action="<?= base_url('dash_wildlife?insert=true') ?>" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="custom-file">
                                                    <input type="file" name="avatar" class="custom-file-input" id="customFile">
                                                    <label class="custom-file-label" for="customFile">Change image 1</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <textarea rows="4" cols="80" class="form-control" name="text">current text</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-fill pull-right">Create</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="offset-2 col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Delete</h4>
                                </div>
                                <div class="card-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Image path</th>
                                                <th scope="col">Title</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data as $item) { ?>
                                                <tr>
                                                    <th scope="row"><?= $item->IDWILDLIFE ?></th>
                                                    <td><img src="<?= base_url($item->IMAGE) ?>" style="width:auto;height:100px;"></td>
                                                    <td><?= $item->TITLE ?></td>
                                                    <td><a type="submit" href="<?= base_url('dash_wildlife?delete=' . $item->IDWILDLIFE) ?>" class="btn btn-danger btn-fill ">Delete</a></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
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