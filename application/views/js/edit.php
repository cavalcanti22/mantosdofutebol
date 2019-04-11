<!--   Core JS Files   -->
<script src="<?=base_url()?>assets/admin/vendors/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/admin/vendors/jquery-ui.min.js" type="text/javascript"></script>
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
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
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
    $().ready(function() {
        demo.initMaterialWizard();
    });
</script>

<script>
    $(document).ready(function() {
        //Add blue animated border and remove with condition when focus and blur
        if ($('.fg-line')[0]) {
            $('body').on('focus', '.form-control', function() {
                $(this).closest('.fg-line').addClass('fg-toggled');
            })

            $('body').on('blur', '.form-control', function() {
                var p = $(this).closest('.form-group');
                var i = p.find('.form-control').val();

                if (p.hasClass('fg-float')) {
                    if (i.length == 0) {
                        $(this).closest('.fg-line').removeClass('fg-toggled');
                    }
                } else {
                    $(this).closest('.fg-line').removeClass('fg-toggled');
                }
            });
        }

        //Add blue border for pre-valued fg-flot text feilds
        if ($('.fg-float')[0]) {
            $('.fg-float .form-control').each(function() {
                var i = $(this).val();

                if (!i.length == 0) {
                    $(this).closest('.fg-line').addClass('fg-toggled');
                }

            });
        }


        /*   Form Wizard Functions  */
        /*--------------------------*/
        _handleTabShow = function(tab, navigation, index, wizard) {
            var total = navigation.find('li').length;
            var current = index + 0;
            var percent = (current / (total - 1)) * 100;
            var percentWidth = 100 - (100 / total) + '%';

            navigation.find('li').removeClass('done');
            navigation.find('li.active').prevAll().addClass('done');

            wizard.find('.progress-bar').css({
                width: percent + '%'
            });
            $('.form-wizard-horizontal').find('.progress').css({
                'width': percentWidth
            });
        };

        _updateHorizontalProgressBar = function(tab, navigation, index, wizard) {
            var total = navigation.find('li').length;
            var current = index + 0;
            var percent = (current / (total - 1)) * 100;
            var percentWidth = 100 - (100 / total) + '%';

            wizard.find('.progress-bar').css({
                width: percent + '%'
            });
            wizard.find('.progress').css({
                'width': percentWidth
            });
        };

        /* Form Wizard - Example 1  */
        /*--------------------------*/
        $('#formwizard_simple').bootstrapWizard({
            onTabShow: function(tab, navigation, index) {
                _updateHorizontalProgressBar(tab, navigation, index, $('#formwizard_simple'));
            }
        });

        /* Form Wizard - Example 2  */
        /*--------------------------*/

        $('#formwizard_validation').bootstrapWizard({
            onNext: function(tab, navigation, index) {
                var form = $('#formwizard_validation').find("form");
                var valid = true;

                if (index == 1) {
                    var fname = form.find('#firstname');
                    var lastname = form.find('#lastname');

                    if (!fname.val()) {
                        swal("You must enter your first name!");
                        fname.focus();
                        return false;
                    }

                    if (!lastname.val()) {
                        swal("You must enter your last name!");
                        lastname.focus();
                        return false;
                    }
                }

                if (!valid) {
                    return false;
                }
            },
            onTabShow: function(tab, navigation, index) {
                _updateHorizontalProgressBar(tab, navigation, index, $('#formwizard_validation'));
            }
        });

    });
</script>
