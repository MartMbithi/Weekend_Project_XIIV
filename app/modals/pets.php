<!-- Add Treatment -->
<div class="modal fade fixed-right" id="treatment_<?php echo $rows['pet_id']; ?>" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <div class="text-center">
                    <h6 class="mb-0 text-bold">Add Pet Treatment Record</h6>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" method="post" enctype="multipart/form-data" role="form">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="">Doctor</label>
                            <input type="hidden" required name="treatment_pet_id" value="<?php echo $rows['pet_id']; ?>" class="form-control">
                            <select type="text" required name="treatment_doctor_id" class="form-control">
                                <option value="">Select doctor</option>
                                <?php
                                $fetch_doctors_sql = mysqli_query(
                                    $mysqli,
                                    "SELECT * FROM veterinary_doctor"
                                );
                                if (mysqli_num_rows($fetch_doctors_sql) > 0) {
                                    while ($docs = mysqli_fetch_array($fetch_doctors_sql)) {
                                ?>
                                        <option value="<?php echo $docs['doctor_id']; ?>"><?php echo $docs['doctor_name']; ?></option>
                                <?php }
                                } ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Date</label>
                            <input type="date" required name="treatment_date" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Cost</label>
                            <input type="text" required name="treatment_cost" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Description</label>
                            <textarea type="text" required name="treatment_details" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" name="Add_Treatment" class="btn btn-outline-danger">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- Edit Modal -->
<div class="modal fade fixed-right" id="edit_<?php echo $rows['pet_id']; ?>" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <div class="text-center">
                    <h6 class="mb-0 text-bold">Update Pets</h6>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" method="post" enctype="multipart/form-data" role="form">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="">Pet name</label>
                            <input type="hidden" required name="pet_id" value="<?php echo $rows['pet_id']; ?>" class="form-control">
                            <input type="text" required name="pet_name" value="<?php echo $rows['pet_name']; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Pet breed</label>
                            <input type="text" required name="pet_breed" value="<?php echo $rows['pet_breed']; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Pet age</label>
                            <input type="text" required name="pet_age" value="<?php echo $rows['pet_age']; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" name="Update_Pet" class="btn btn-outline-danger">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- Delete Modal -->
<div class="modal fade" id="delete_<?php echo $rows['pet_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form method="POST">
                <div class="modal-body text-center text-danger">
                    <h4>Delete pet details?</h4>
                    <br>
                    <!-- Hide This -->
                    <input type="hidden" name="pet_id" value="<?php echo $rows['pet_id']; ?>">
                    <button type="button" class="text-center btn btn-success" data-dismiss="modal">No</button>
                    <button type="submit" name="Delete_Pet" class="text-center btn btn-danger">Yes, Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal -->