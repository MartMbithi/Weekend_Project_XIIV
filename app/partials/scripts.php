<script src="../public/vendor/global/global.min.js"></script>
<script src="../public/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="../public/js/custom.min.js"></script>
<script src="../public/js/deznav-init.js"></script>

<!-- Datatable -->
<script src="../public/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="../public/js/plugins-init/datatables.init.js"></script>
<!-- Toastr -->
<script src="../public/vendor/sweetalert2/sweetalert2.min.js"></script>
<script src="../public/vendor/toastr/toastr.min.js"></script>

<!-- Init Alerts -->
<?php if (isset($success)) { ?>
    <!-- Pop Success Alert -->
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-left',
            showConfirmButton: false,
            timer: 3000
        });
        Toast.fire({
            type: 'success',
            title: '<?php echo $success; ?>',
        })
    </script>

<?php }
if (isset($err)) { ?>
    <script>
        /* Pop Error Message */
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-right',
            showConfirmButton: false,
            timer: 3000
        });
        Toast.fire({
            type: 'error',
            title: '<?php echo $err; ?>',
        })
    </script>

<?php }
if (isset($info)) { ?>
    <script>
        /* Pop Warning  */
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-right',
            showConfirmButton: false,
            timer: 3000
        });
        Toast.fire({
            type: 'info',
            title: '<?php echo $info; ?>',
        })
    </script>

<?php }
?>