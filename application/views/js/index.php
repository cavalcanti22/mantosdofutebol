<!--   Core JS Files   -->
<script src="<?=base_url()?>assets/admin/vendors/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/admin/vendors/jquery-ui-1.12.0/jquery-ui.js"></script>
<script src="<?=base_url()?>assets/admin/vendors/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/admin/vendors/material.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/admin/vendors/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="<?=base_url()?>assets/admin/vendors/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="<?=base_url()?>assets/admin/vendors/moment.min.js"></script>
<!--  Charts Plugin -->
<script src="<?=base_url()?>assets/admin/vendors/chartist.min.js"></script>
<!--  Plugin for the Wizard -->
<script src="<?=base_url()?>assets/admin/vendors/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="<?=base_url()?>assets/admin/vendors/bootstrap-notify.js"></script>
<!-- DateTimePicker Plugin -->
<script src="<?=base_url()?>assets/admin/vendors/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="<?=base_url()?>assets/admin/vendors/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="<?=base_url()?>assets/admin/vendors/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<!-- Select Plugin -->
<script src="<?=base_url()?>assets/admin/vendors/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="<?=base_url()?>assets/admin/vendors/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="<?=base_url()?>assets/admin/vendors/sweetalert2.js"></script>
<!--    Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="<?=base_url()?>assets/admin/vendors/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="<?=base_url()?>assets/admin/vendors/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="<?=base_url()?>assets/admin/vendors/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="<?=base_url()?>assets/admin/js/turbo.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?=base_url()?>assets/admin/js/demo.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
        $('#datatables').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Procurar",
            }

        });


        var table = $('#datatables').DataTable();

        // Edit record
        table.on('click', '.edit', function() {
            $tr = $(this).closest('tr');

            var data = table.row($tr).data();
            alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
        });

        // Delete a record
        table.on('click', '.remove', function(e) {
            $tr = $(this).closest('tr');
            table.row($tr).remove().draw();
            e.preventDefault();
        });

        //Like record
        table.on('click', '.like', function() {
            alert('You clicked on Like button');
        });

        $('.card .material-datatables label').addClass('form-group');
    });
</script>