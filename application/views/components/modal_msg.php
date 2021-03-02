<link href="<?= base_url() ?>assets/css/modal_msg.css" rel="stylesheet">
<div class="modal" id="modal-msg">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">CLOSE</span>
                </button>
            </div>
            <div class="modal-body">
                <p>We are currently making exciting new changes to our Internet presence and the functionality of our website, and creating amazing new posi COVID products for your coming safari to our wonderful country.</p>
                <p>Please note that the website is not fully functional, but we aim for it to be up and running by the end of March 2021.</p>
                <p>Please CLICK ON 'close' to enter the website and have a look around while you wait for us finish our construction work.</p>
                <p>or CONTACT us...</p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        if (getCookie('showModal')) {
            return;
        }
        createCookie('showModal', true);
        $('#modal-msg').modal('show');
    });
</script>