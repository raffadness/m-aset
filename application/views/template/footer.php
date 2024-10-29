<script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('assets/') ?>vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('assets/') ?>js/demo/chart-area-demo.js"></script>
    <script src="<?= base_url('assets/') ?>js/demo/chart-pie-demo.js"></script>
<!-- jQuery 3 -->
<script src="<?= base_url('assets/') ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('assets/') ?>bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
	$.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url('assets/') ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?= base_url('assets/') ?>bower_components/raphael/raphael.min.js"></script>
<script src="<?= base_url('assets/') ?>bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url('assets/') ?>bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?= base_url('assets/') ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('assets/') ?>bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url('assets/') ?>bower_components/moment/min/moment.min.js"></script>
<script src="<?= base_url('assets/') ?>bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?= base_url('assets/') ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?= base_url('assets/') ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?= base_url('assets/') ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url('assets/') ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/') ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('assets/') ?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/') ?>dist/js/demo.js"></script>
<script src="<?= base_url('assets/') ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/') ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/alert.js"></script>

<?php echo "<script>".$this->session->flashdata('message')."</script>"?> 

<script>
	new DataTable('#example1', {
	scrollCollapse: true,
    scrollY: '50vh',
	lengthMenu: [2, 5, 10, 25],
	displayLength: 10,
	search: {
        return: true
    },
	layout: {
        top6End: {
            buttons: [
                {
					extend: 'pdfHtml5',
					text: '<i class="fa-solid fa-file-pdf"></i> Cetak PDF',
					className: 'btn btn-danger mb-2',
                    title: $('.tbtitle').text(),
                    exportOptions: {
                        columns: function (idx, data, node) {
                            return idx < $('#example1 thead th').length - 1;
                        },
                        modifier: {
                            page: 'current'
                        }
                    },
                    customize: function (doc) {
                        var tableColumnCount = doc.content[1].table.body[0].length;

                        if (tableColumnCount > 6) {
                            doc.pageOrientation = 'landscape';
                        }

                        var columnWidth = (100 / tableColumnCount).toFixed(2) + '%';
                        var widthsArray = Array(tableColumnCount).fill(columnWidth);
                        doc.content[1].table.widths = widthsArray;

                        doc.content[1].table.body.forEach(function(row) {
                            row.forEach(function(cell) {
                                cell.border = [1, 1, 1, 1];
                            });
                        });
                    }
                }
            ]
        },
		
    }	
});
</script>
</body>
</html>
