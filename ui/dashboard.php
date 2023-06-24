<?php
/*
 *   Crafted On Sun May 21 2023
 *   Author Martin Mbithi (martin@devlan.co.ke)
 *   
 *   www.devlan.co.ke
 *   hello@devlan.co.ke
 *
 *
 *   The Devlan Solutions LTD End User License Agreement
 *   Copyright (c) 2022 Devlan Solutions LTD
 *
 *
 *   1. GRANT OF LICENSE 
 *   Devlan Solutions LTD hereby grants to you (an individual) the revocable, personal, non-exclusive, and nontransferable right to
 *   install and activate this system on two separated computers solely for your personal and non-commercial use,
 *   unless you have purchased a commercial license from Devlan Solutions LTD. Sharing this Software with other individuals, 
 *   or allowing other individuals to view the contents of this Software, is in violation of this license.
 *   You may not make the Software available on a network, or in any way provide the Software to multiple users
 *   unless you have first purchased at least a multi-user license from Devlan Solutions LTD.
 *
 *   2. COPYRIGHT 
 *   The Software is owned by Devlan Solutions LTD and protected by copyright law and international copyright treaties. 
 *   You may not remove or conceal any proprietary notices, labels or marks from the Software.
 *
 *
 *   3. RESTRICTIONS ON USE
 *   You may not, and you may not permit others to
 *   (a) reverse engineer, decompile, decode, decrypt, disassemble, or in any way derive source code from, the Software;
 *   (b) modify, distribute, or create derivative works of the Software;
 *   (c) copy (other than one back-up copy), distribute, publicly display, transmit, sell, rent, lease or 
 *   otherwise exploit the Software. 
 *
 *
 *   4. TERM
 *   This License is effective until terminated. 
 *   You may terminate it at any time by destroying the Software, together with all copies thereof.
 *   This License will also terminate if you fail to comply with any term or condition of this Agreement.
 *   Upon such termination, you agree to destroy the Software, together with all copies thereof.
 *
 *
 *   5. NO OTHER WARRANTIES. 
 *   DEVLAN SOLUTIONS LTD  DOES NOT WARRANT THAT THE SOFTWARE IS ERROR FREE. 
 *   DEVLAN SOLUTIONS LTD SOFTWARE DISCLAIMS ALL OTHER WARRANTIES WITH RESPECT TO THE SOFTWARE, 
 *   EITHER EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO IMPLIED WARRANTIES OF MERCHANTABILITY, 
 *   FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT OF THIRD PARTY RIGHTS. 
 *   SOME JURISDICTIONS DO NOT ALLOW THE EXCLUSION OF IMPLIED WARRANTIES OR LIMITATIONS
 *   ON HOW LONG AN IMPLIED WARRANTY MAY LAST, OR THE EXCLUSION OR LIMITATION OF 
 *   INCIDENTAL OR CONSEQUENTIAL DAMAGES,
 *   SO THE ABOVE LIMITATIONS OR EXCLUSIONS MAY NOT APPLY TO YOU. 
 *   THIS WARRANTY GIVES YOU SPECIFIC LEGAL RIGHTS AND YOU MAY ALSO 
 *   HAVE OTHER RIGHTS WHICH VARY FROM JURISDICTION TO JURISDICTION.
 *
 *
 *   6. SEVERABILITY
 *   In the event of invalidity of any provision of this license, the parties agree that such invalidity shall not
 *   affect the validity of the remaining portions of this license.
 *
 *
 *   7. NO LIABILITY FOR CONSEQUENTIAL DAMAGES IN NO EVENT SHALL DEVLAN SOLUTIONS LTD OR ITS SUPPLIERS BE LIABLE TO YOU FOR ANY
 *   CONSEQUENTIAL, SPECIAL, INCIDENTAL OR INDIRECT DAMAGES OF ANY KIND ARISING OUT OF THE DELIVERY, PERFORMANCE OR 
 *   USE OF THE SOFTWARE, EVEN IF DEVLAN SOLUTIONS LTD HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES
 *   IN NO EVENT WILL DEVLAN SOLUTIONS LTD  LIABILITY FOR ANY CLAIM, WHETHER IN CONTRACT 
 *   TORT OR ANY OTHER THEORY OF LIABILITY, EXCEED THE LICENSE FEE PAID BY YOU, IF ANY.
 *
 */
session_start();
require_once('../app/config/config.php');
require_once('../app/functions/analytics.php');
require_once('../app/partials/head.php');
?>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <?php require_once('../app/partials/loader.php'); ?>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <?php require_once('../app/partials/header.php'); ?>

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php require_once('../app/partials/sidebar.php'); ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="row">
                            <div class="col-xl-4  col-sm-4">
                                <div class="card border border-danger">
                                    <div class="card-body">
                                        <div class="media align-items-center">
                                            <div class="media-body mr-3">
                                                <h2 class="fs-34 text-black font-w600"><?php echo $docs; ?></h2>
                                                <span>Vet Doctors</span>
                                            </div>
                                            <i class="text-danger fa fa-user-md fa-3x"></i>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4  col-sm-4">
                                <div class="card border border-danger">
                                    <div class="card-body">
                                        <div class="media align-items-center">
                                            <div class="media-body mr-3">
                                                <h2 class="fs-34 text-black font-w600"><?php echo $clients; ?></h2>
                                                <span>Registered Clients</span>
                                            </div>
                                            <i class="text-danger fa fa-address-book fa-3x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4  col-sm-4">
                                <div class="card border border-danger">
                                    <div class="card-body">
                                        <div class="media align-items-center">
                                            <div class="media-body mr-3">
                                                <h2 class="fs-34 text-black font-w600"><?php echo $pets; ?></h2>
                                                <span>Pets</span>
                                            </div>
                                            <i class="text-danger fa fa-paw fa-3x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4  col-sm-4">
                                <div class="card border border-danger">
                                    <div class="card-body">
                                        <div class="media align-items-center">
                                            <div class="media-body mr-3">
                                                <h2 class="fs-34 text-black font-w600"><?php echo $treatments; ?></h2>
                                                <span>Treatments</span>
                                            </div>
                                            <i class="text-danger fa fa-calendar fa-3x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8  col-sm-8">
                                <div class="card border border-danger">
                                    <div class="card-body">
                                        <div class="media align-items-center">
                                            <div class="media-body mr-3">
                                                <h2 class="fs-34 text-black font-w600">Ksh <?php echo number_format($payments); ?></h2>
                                                <span>Payments</span>
                                            </div>
                                            <i class="text-danger fa fa-money fa-3x"></i>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-xxl-12">
                        <div class="row">
                            <div class="col-xl-12 col-xxl-12 col-md-12">
                                <div class="card">
                                    <div class="card-header border-0 pb-0">
                                        <h4 class="card-title">Treatments Summary</h4>
                                    </div>
                                    <div class="card-body">
                                        <table id="example3" class="display min-w850">
                                            <thead>
                                                <tr>
                                                    <th>Client</th>
                                                    <th>Pet</th>
                                                    <th>Doctor</th>
                                                    <th>Date</th>
                                                    <th>Cost</th>
                                                    <th>Payment Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $fetch_records_sql = mysqli_query(
                                                    $mysqli,
                                                    "SELECT * FROM treatments t
                                                    INNER JOIN pets p ON p.pet_id = t.treatment_pet_id
                                                    INNER JOIN client c ON c.client_id = p.pet_client_id
                                                    INNER JOIN veterinary_doctor vd ON vd.doctor_id = t.treatment_doctor_id"
                                                );
                                                if (mysqli_num_rows($fetch_records_sql) > 0) {
                                                    while ($rows = mysqli_fetch_array($fetch_records_sql)) {
                                                ?>
                                                        <tr>
                                                            <td>
                                                                Names: <?php echo $rows['client_name']; ?> <br>
                                                                Contact: <?php echo $rows['client_contact']; ?>
                                                            </td>
                                                            <td>
                                                                Name:<?php echo $rows['pet_name']; ?><br>
                                                                Breed: <?php echo $rows['pet_breed']; ?>
                                                            </td>
                                                            <td>
                                                                Names: <?php echo $rows['doctor_name']; ?> <br>
                                                                Contact: <?php echo $rows['doctor_contacts']; ?>
                                                            </td>
                                                            <td><?php echo date('d M Y', strtotime($rows['treatment_date'])); ?></td>
                                                            <td>Ksh <?php echo number_format($rows['treatment_cost']); ?></td>
                                                            <td>
                                                                <?php if ($rows['treatment_status'] == 'Paid') { ?>
                                                                    <span class="badge badge-outline-success">
                                                                        <i class="fa fa-check text-success mr-1"></i>
                                                                        Paid
                                                                    </span>
                                                                <?php } else { ?>
                                                                    <span class="badge badge-outline-danger">
                                                                        <i class="fa fa-times text-danger mr-1"></i>
                                                                        Un Paid
                                                                    </span>
                                                                <?php } ?>
                                                            </td>
                                                        </tr>
                                                <?php
                                                    }
                                                } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Revenue Summary -->
                            <div class="col-xl-6 col-xxl-6 col-md-6">
                                <div class="card">
                                    <div class="card-header border-0 pb-0">
                                        <h4 class="card-title">Revenue / Payment Summary</h4>
                                    </div>
                                    <div class="card-body">
                                        <table id="example3" class="display">
                                            <thead>
                                                <tr>
                                                    <th>REF #</th>
                                                    <th>Amount</th>
                                                    <th>Date Paid</th>
                                                    <th>Means</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $fetch_records_sql = mysqli_query(
                                                    $mysqli,
                                                    "SELECT * FROM payments"
                                                );
                                                if (mysqli_num_rows($fetch_records_sql) > 0) {
                                                    while ($rows = mysqli_fetch_array($fetch_records_sql)) {
                                                ?>
                                                        <tr>
                                                            <td><?php echo $rows['payment_ref_code']; ?></td>
                                                            <td>Ksh <?php echo number_format($rows['payment_amount']); ?></td>
                                                            <td><?php echo date('d M Y', strtotime($rows['payment_date'])); ?></td>
                                                            <td><?php echo $rows['payment_means']; ?></td>
                                                        </tr>
                                                <?php
                                                    }
                                                } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Revenue Streams Trend -->
                            <div class="col-xl-6 col-xxl-6 col-md-6">
                                <div class="card">
                                    <div class="card-header border-0 pb-0">
                                        <h4 class="card-title">Revenue Streams Trend</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="donutChart"></div>
                                        <div class="d-flex justify-content-between mt-4">
                                            <div class="pr-2">
                                                <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="20" height="8" rx="4" fill="#214BB8" />
                                                </svg>
                                                <h4 class="fs-18 text-black mb-1 font-w600">Ksh <?php echo number_format($cash); ?></h4>
                                                <span class="fs-14">Cash</span>
                                            </div>
                                            <div class="pr-2">
                                                <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="20" height="8" rx="4" fill="#FE634E" />
                                                </svg>
                                                <h4 class="fs-18 text-black mb-1 font-w600">Ksh <?php echo number_format($mpesa); ?></h4>
                                                <span class="fs-14">Mpesa</span>
                                            </div>
                                            <div class="">
                                                <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="20" height="8" rx="4" fill="#45ADDA" />
                                                </svg>
                                                <h4 class="fs-18 text-black mb-1 font-w600">Ksh <?php echo number_format($bank); ?></h4>
                                                <span class="fs-14">Bank Deposits</span>
                                            </div>
                                            <div class="">
                                                <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="20" height="8" rx="4" fill="#2bc155" />
                                                </svg>
                                                <h4 class="fs-18 text-black mb-1 font-w600">Ksh <?php echo number_format($card); ?></h4>
                                                <span class="fs-14">Debit / Credit Cards</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Trend -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <?php require_once('../app/partials/footer.php'); ?>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <?php require_once('../app/partials/scripts.php'); ?>

</body>

</html>