<!-- Pay Modal-->
<div class="modal fade fixed-right" id="pay_<?php echo $rows['treatment_id']; ?>" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <div class="text-center">
                    <h6 class="mb-0 text-bold">Pay for treatment record</h6>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" method="post" enctype="multipart/form-data" role="form">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="">Payment Means</label>
                            <select type="text" required name="payment_means" class="form-control">
                                <option>Cash</option>
                                <option>Mobile Money - Mpesa</option>
                                <option>Bank Transfer</option>
                                <option>Credit / Debit Card</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Payment Amount</label>
                            <input type="hidden" readonly required name="treatment_id" value="<?php echo $rows['treatment_id']; ?>" class="form-control">
                            <input type="number" readonly required name="payment_amount" value="<?php echo $rows['treatment_cost']; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" name="Add_Payment" class="btn btn-outline-danger">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- Edit Modal -->
<div class="modal fade fixed-right" id="edit_<?php echo $rows['treatment_id']; ?>" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <div class="text-center">
                    <h6 class="mb-0 text-bold">Pay for treatment record</h6>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- View  modal-->
<div class="modal fade fixed-right" id="eye_<?php echo $rows['treatment_id']; ?>" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <div class="text-center">
                    <h6 class="mb-0 text-bold">Treatment Record Details</h6>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 align="justify">
                    <?php echo $rows['treatment_details']; ?>
                </h5>
            </div>
        </div>
    </div>
</div>
<!-- End View modal -->

<!-- Delete Modal -->
<div class="modal fade" id="delete_<?php echo $rows['treatment_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form method="POST">
                <div class="modal-body text-center text-danger">
                    <h4>Delete pet treatment details?</h4>
                    <br>
                    <!-- Hide This -->
                    <input type="hidden" name="treatment_id" value="<?php echo $rows['treatment_id']; ?>">
                    <button type="button" class="text-center btn btn-success" data-dismiss="modal">No</button>
                    <button type="submit" name="Delete_Treatment" class="text-center btn btn-danger">Yes, Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal -->