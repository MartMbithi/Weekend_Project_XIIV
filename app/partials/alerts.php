<!-- Init Sweet Alerts -->
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