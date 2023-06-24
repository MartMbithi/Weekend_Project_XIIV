<!-- Edit Modal -->
<div class="modal fade fixed-right" id="edit_<?php echo $rows['doctor_id']; ?>" role="dialog" aria-hidden="true">
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
                        <div class="form-group col-md-6">
                            <label for="">Full names</label>
                            <input type="hidden" required name="doctor_login_id" value="<?php echo $rows['doctor_login_id']; ?>" class="form-control">
                            <input type="text" required name="doctor_name" value="<?php echo $rows['doctor_name']; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Contacts</label>
                            <input type="text" required name="doctor_contacts" value="<?php echo $rows['doctor_contacts']; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Email</label>
                            <input type="text" required name="doctor_email" value="<?php echo $rows['doctor_email']; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Access Level</label>
                            <select type="text" required name="login_rank" value="<?php echo $rows['login_rank']; ?>" class="form-control">
                                <?php if ($rows['login_rank'] == 'Admin') { ?>
                                    <option value="Admin">System Admin</option>
                                    <option value="Doctor">Doctor</option>
                                <?php } else { ?>
                                    <option value="Doctor">Doctor</option>
                                    <option value="Admin">Admin</option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Adddress</label>
                            <input type="text" required name="doctor_address" value="<?php echo $rows['doctor_address']; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" name="Update_Officer" class="btn btn-outline-danger">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- Delete Modal -->
<div class="modal fade" id="delete_<?php echo $rows['doctor_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form method="POST">
                <div class="modal-body text-center text-danger">
                    <h4>Delete <?php echo $rows['doctor_name']; ?> details?</h4>
                    <br>
                    <!-- Hide This -->
                    <input type="hidden" name="doctor_login_id" value="<?php echo $rows['doctor_login_id']; ?>">
                    <button type="button" class="text-center btn btn-success" data-dismiss="modal">No</button>
                    <button type="submit" name="Delete_Doctor" class="text-center btn btn-danger">Yes, Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal -->