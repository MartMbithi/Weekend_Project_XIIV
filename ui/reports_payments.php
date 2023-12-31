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
require_once('../app/config/checklogin.php');
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

        <!--**********************************
            Nav header start
        ***********************************-->
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
            <div class="container-fluid">
                <div class="form-head align-items-center d-flex mb-sm-4 mb-3">
                    <div class="mr-auto">
                        <h2 class="text-black font-w600">Payment Reports</h2>
                        <p class="mb-0">Export payment reports</p>
                    </div>
                </div>

                <!-- row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card border border-danger">
                            <!--  <div class="card-header">
                                <h4 class="card-title">Profile Datatable</h4>
                            </div> -->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <?php if ($_SESSION['login_rank'] == 'Client') { ?>

                                        <table class="report_table display min-w850">
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
                                                    "SELECT * FROM payments p
                                                    INNER JOIN treatments t ON t.treatment_id = p.payment_treatment_id
                                                    INNER JOIN pets pe ON pe.pet_id = t.treatment_pet_id
                                                    INNER JOIN client c ON c.client_id = pe.pet_client_id
                                                    WHERE c.client_login_id = '{$_SESSION['login_id']}'"
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
                                    <?php } else { ?>
                                        <table class="report_table display min-w850">
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
                                    <?php } ?>
                                </div>
                            </div>
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
    <?php require_once('../app/partials/scripts.php'); ?>

</body>

</html>