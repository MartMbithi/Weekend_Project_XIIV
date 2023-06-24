<!-- Edit Modal -->
<div class="modal fade fixed-right" id="edit_<?php echo $rows['client_id']; ?>" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <div class="text-center">
                    <h6 class="mb-0 text-bold">Update Vet Doctor Details</h6>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" method="post" enctype="multipart/form-data" role="form">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="">Full names</label>
                            <input type="text" required name="client_name" value="<?php echo $rows['client_name']; ?>" class="form-control">
                            <input type="hidden" required name="client_id" value="<?php echo $rows['client_id']; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Email</label>
                            <input type="email" required name="client_email" value="<?php echo $rows['client_email']; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Contacts</label>
                            <input type="text" required name="client_contact" value="<?php echo $rows['client_contact']; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Address</label>
                            <input type="text" required name="client_address" value="<?php echo $rows['client_address']; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" name="Update_Client" class="btn btn-outline-danger">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- Delete Modal -->
<div class="modal fade" id="delete_<?php echo $rows['client_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form method="POST">
                <div class="modal-body text-center text-danger">
                    <h4>Delete <?php echo $rows['client_name']; ?> details?</h4>
                    <br>
                    <!-- Hide This -->
                    <input type="hidden" name="login_id" value="<?php echo $rows['client_login_id']; ?>">
                    <button type="button" class="text-center btn btn-success" data-dismiss="modal">No</button>
                    <button type="submit" name="Delete_User" class="text-center btn btn-danger">Yes, Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal -->