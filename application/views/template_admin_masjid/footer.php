<!-- footer -->
<!-- ============================================================== -->
<!-- <footer class="footer"> © 2021 Mockup Admin GEOQURBAN | 2021 </footer> -->
<!-- ============================================================== -->
<!-- End footer -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?= base_url('assets/') ?>jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?= base_url('assets/') ?>bootstrap/js/tether.min.js"></script>
<script src="<?= base_url('assets/') ?>bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?= base_url('assets/') ?>js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="<?= base_url('assets/') ?>js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?= base_url('assets/') ?>js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="<?= base_url('assets/') ?>sticky-kit-master/dist/sticky-kit.min.js"></script>
<!--Custom JavaScript -->
<script src="<?= base_url('assets/') ?>js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!-- chartist chart -->
<script src="<?= base_url('assets/') ?>chartist-js/dist/chartist.min.js"></script>
<script src="<?= base_url('assets/') ?>chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
<!--c3 JavaScript -->
<script src="<?= base_url('assets/') ?>d3/d3.min.js"></script>
<script src="<?= base_url('assets/') ?>c3-master/c3.min.js"></script>
<!-- Chart JS -->
<script src="<?= base_url('assets/') ?>js/dashboard1.js"></script>
<!-- google maps api -->
<script src="<?= base_url('assets/') ?>https://maps.google.com/maps/api/js?key=AIzaSyCUBL-6KdclGJ2a_UpmB2LXvq7VOcPT7K4&sensor=true"></script>
<script src="<?= base_url('assets/') ?>gmaps/gmaps.min.js"></script>
<script src="<?= base_url('assets/') ?>gmaps/jquery.gmaps.js"></script>

<script>
    function deleteConfirm(url) {
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
    }
</script>