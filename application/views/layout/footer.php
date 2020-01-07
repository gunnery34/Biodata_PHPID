
        <!-- Footer -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        2019 © Veltrix <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->


        <!-- jQuery  -->
        <script src="<?php echo base_url('assets/theme/Veltrix_v2.1/horizontal/') ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url('assets/theme/Veltrix_v2.1/horizontal/') ?>assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url('assets/theme/Veltrix_v2.1/horizontal/') ?>assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url('assets/theme/Veltrix_v2.1/horizontal/') ?>assets/js/waves.min.js"></script>

        <!--Chartist Chart-->
        <script src="<?php echo base_url('assets/theme/Veltrix_v2.1/') ?>plugins/chartist/js/chartist.min.js"></script>
        <script src="<?php echo base_url('assets/theme/Veltrix_v2.1/') ?>plugins/chartist/js/chartist-plugin-tooltip.min.js"></script>

        <!-- peity JS -->
        <script src="<?php echo base_url('assets/theme/Veltrix_v2.1/') ?>plugins/peity-chart/jquery.peity.min.js"></script>

        <script src="<?php echo base_url('assets/theme/Veltrix_v2.1/horizontal/') ?>assets/pages/dashboard.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url('assets/theme/Veltrix_v2.1/horizontal/') ?>assets/js/app.js"></script>

		<?php echo $js_outline; ?>
		<!-- js outline -->

		<script>
			$(document).ready(function() {
				<?php echo $js_inline; ?> // js inline
			})
		</script>

    </body>

</html>