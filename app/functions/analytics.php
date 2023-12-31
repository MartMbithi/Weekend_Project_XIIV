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

$login_rank = mysqli_real_escape_string($mysqli, $_SESSION['login_rank']);
$login_id = mysqli_real_escape_string($mysqli, $_SESSION['login_id']);

if ($login_rank == 'Admin' || $login_rank == 'Doctor') {

    /* Doctors */
    $query = "SELECT COUNT(*) FROM veterinary_doctor";
    $stmt = $mysqli->prepare($query);
    $stmt->execute();
    $stmt->bind_result($docs);
    $stmt->fetch();
    $stmt->close();

    /* Clients */
    $query = "SELECT COUNT(*) FROM client";
    $stmt = $mysqli->prepare($query);
    $stmt->execute();
    $stmt->bind_result($clients);
    $stmt->fetch();
    $stmt->close();

    /* Pets */
    $query = "SELECT COUNT(*) FROM pets";
    $stmt = $mysqli->prepare($query);
    $stmt->execute();
    $stmt->bind_result($pets);
    $stmt->fetch();
    $stmt->close();

    /* Treatments */
    $query = "SELECT COUNT(*) FROM treatments";
    $stmt = $mysqli->prepare($query);
    $stmt->execute();
    $stmt->bind_result($treatments);
    $stmt->fetch();
    $stmt->close();

    /* Paymenets */
    $query = "SELECT SUM(payment_amount) FROM payments";
    $stmt = $mysqli->prepare($query);
    $stmt->execute();
    $stmt->bind_result($payments);
    $stmt->fetch();
    $stmt->close();

    /* Cash  Payment Streams */
    $query = "SELECT SUM(payment_amount) FROM payments WHERE payment_means = 'Cash'";
    $stmt = $mysqli->prepare($query);
    $stmt->execute();
    $stmt->bind_result($row_cash);
    $stmt->fetch();
    $stmt->close();
    if ($row_cash > 0) {
        $cash = $row_cash;
    } else {
        $cash = 0;
    }

    /* Mpesa Payments  */
    $query = "SELECT SUM(payment_amount) FROM payments WHERE payment_means = 'Mobile Money - Mpesa'";
    $stmt = $mysqli->prepare($query);
    $stmt->execute();
    $stmt->bind_result($row_mpesa);
    $stmt->fetch();
    $stmt->close();
    if ($row_mpesa > 0) {
        $mpesa = $row_mpesa;
    } else {
        $mpesa = 0;
    }

    /* Bank Wire Payments */
    $query = "SELECT SUM(payment_amount) FROM payments WHERE payment_means = 'Bank Transfer'";
    $stmt = $mysqli->prepare($query);
    $stmt->execute();
    $stmt->bind_result($row_bank);
    $stmt->fetch();
    $stmt->close();
    if ($row_bank > 0) {
        $bank = $row_bank;
    } else {
        $bank = 0;
    }

    /* Credit / Debit Card */
    $query = "SELECT SUM(payment_amount) FROM payments WHERE payment_means = 'Credit / Debit Card'";
    $stmt = $mysqli->prepare($query);
    $stmt->execute();
    $stmt->bind_result($row_card);
    $stmt->fetch();
    $stmt->close();
    if ($row_card > 0) {
        $card = $row_card;
    } else {
        $card = 0;
    }
} else {
    /* Pets */
    $query = "SELECT COUNT(*) FROM pets p 
    INNER JOIN client c ON c.client_id = p.pet_client_id
    WHERE c.client_login_id = '{$login_id}'";
    $stmt = $mysqli->prepare($query);
    $stmt->execute();
    $stmt->bind_result($pets);
    $stmt->fetch();
    $stmt->close();

    /* Treatments */
    $query = "SELECT COUNT(*) FROM treatments t 
    INNER JOIN pets p ON p.pet_id = t.treatment_pet_id
    INNER JOIN client c ON c.client_id = p.pet_client_id
    WHERE c.client_login_id = '{$login_id}'";
    $stmt = $mysqli->prepare($query);
    $stmt->execute();
    $stmt->bind_result($treatments);
    $stmt->fetch();
    $stmt->close();

    /* Paymenets */
    $query = "SELECT SUM(payment_amount) FROM payments p
    INNER JOIN treatments t ON t.treatment_id = p.payment_treatment_id
    INNER JOIN pets pe ON pe.pet_id = t.treatment_pet_id
    INNER JOIN client c ON c.client_id = pe.pet_client_id
    WHERE c.client_login_id = '{$login_id}'";
    $stmt = $mysqli->prepare($query);
    $stmt->execute();
    $stmt->bind_result($payments);
    $stmt->fetch();
    $stmt->close();
}
