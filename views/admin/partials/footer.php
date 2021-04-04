

</div>

<!-- Footer -->
<footer class="u-footer d-md-flex align-items-md-center text-center text-md-left text-muted text-muted">
    <p class="h5 mb-2 mb-md-0">developed by <a class="link-muted" href="../../index.html" target="_blank">Kenneth Ekandem</a></p>

    <p class="h5 mb-0 ml-auto">
        &copy; <?= date("Y"); ?> <a class="link-muted" href="<?= config::base(); ?>" target="_blank"><?= config::name(); ?></a>. All Rights Reserved.
    </p>
</footer>
<!-- End Footer -->
</div>
</main>

<!-- Global Vendor -->
<script src="assets/admin/vendor/jquery/dist/jquery.min.js"></script>
<script src="assets/admin/vendor/jquery-migrate/jquery-migrate.min.js"></script>
<script src="assets/admin/vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="assets/admin/vendor/bootstrap/bootstrap.min.js"></script>

<!--Datatable-->
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

<!-- include summernote js -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


<!-- Plugins -->
<script src="assets/admin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/admin/vendor/chart.js/dist/Chart.min.js"></script>

<!-- Initialization  -->
<script src="assets/admin/js/sidebar-nav.js"></script>
<script src="assets/admin/js/main.js"></script>
<script src="assets/admin/js/dashboard-page-scripts.js"></script>

<script>
    $(document).ready(function() {
        // Datatable
        $('#datatable').DataTable();

        // Summernote
        $('#summernote').summernote();
    } );
</script>
</body>
</html>