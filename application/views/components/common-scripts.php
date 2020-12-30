<?php if(!isset($jquery_already_included)) { $jquery_already_included = false; } ?>
<?php if(!$jquery_already_included) { ?>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.min.js"></script>
<?php } ?>
<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.cookie.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/mdb.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/global.js"></script>