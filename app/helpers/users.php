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


/* Update Passwords Details */
if (isset($_POST['Update_Auth_Details'])) {
    $login_id = mysqli_real_escape_string($mysqli, $_SESSION['login_id']);
    $login_email = mysqli_real_escape_string($mysqli, $_POST['login_email']);
    $new_password = sha1(md5(mysqli_real_escape_string($mysqli, $_POST['new_password'])));
    $confirm_password = sha1(md5(mysqli_real_escape_string($mysqli, $_POST['confirm_password'])));

    /* Check If Passwords Match */
    if ($confirm_password != $new_password) {
        $err = "Please enter matching passwords";
    } else {
        /* Change Passwords */
        $update_auth = "UPDATE login SET login_email = '{$login_email}', login_password = '{$confirm_password}'
        WHERE login_id = '{$login_id}'";

        if (mysqli_query($mysqli, $update_auth)) {
            $success = "Passwords updated";
        } else {
            $err =  "Failed, please try again";
        }
    }
}


/* Add Doctir */
if (isset($_POST['Add_Doctor'])) {
    $doctor_name = mysqli_real_escape_string($mysqli, $_POST['doctor_name']);
    $doctor_email = mysqli_real_escape_string($mysqli, $_POST['doctor_email']);
    $doctor_contacts = mysqli_real_escape_string($mysqli, $_POST['doctor_contacts']);
    $doctor_address = mysqli_real_escape_string($mysqli, $_POST['doctor_address']);
    $login_password = sha1(md5(mysqli_real_escape_string($mysqli, $_POST['login_password'])));
    $login_rank = mysqli_real_escape_string($mysqli, $_POST['login_rank']);

    /* Persist Login */
    $duplication_checker = "SELECT * FROM login WHERE login_email = '{$doctor_email}'";
    $res = mysqli_query($mysqli, $duplication_checker);
    if (mysqli_num_rows($res) > 0) {
        $err = "An account with this email already exists";
    } else {
        /* Persist */
        $add_officer_auth = "INSERT INTO login (login_email, login_password, login_rank)
         VALUES('{$doctor_email}', '{$login_password}', '{$login_rank}')";

        if (mysqli_query($mysqli, $add_officer_auth)) {
            $officer_login_id = mysqli_real_escape_string($mysqli, mysqli_insert_id($mysqli));

            $add_officer_sql = "INSERT INTO veterinary_doctor (doctor_login_id, doctor_name, doctor_email, doctor_contacts, doctor_address)
            VALUES('{$officer_login_id}', '{$doctor_name}', '{$doctor_email}', '{$doctor_contacts}', '{$doctor_address}')";

            if (mysqli_query($mysqli, $add_officer_sql)) {
                $success = "Account created";
            } else {
                $err = "Failed, please try again";
            }
        } else {
            $err = "Failed, please try again";
        }
    }
}

/* Update Officer */
if (isset($_POST['Update_Officer'])) {
    $doctor_name = mysqli_real_escape_string($mysqli, $_POST['doctor_name']);
    $doctor_email = mysqli_real_escape_string($mysqli, $_POST['doctor_email']);
    $doctor_contacts = mysqli_real_escape_string($mysqli, $_POST['doctor_contacts']);
    $doctor_address = mysqli_real_escape_string($mysqli, $_POST['doctor_address']);
    $login_rank = mysqli_real_escape_string($mysqli, $_POST['login_rank']);
    $doctor_login_id = mysqli_real_escape_string($mysqli, $_POST['doctor_login_id']);

    /* Persit */
    $update_officer = "UPDATE veterinary_doctor SET doctor_name = '{$doctor_name}', doctor_email = '{$doctor_email}',
    doctor_contacts = '{$doctor_contacts}', doctor_address = '{$doctor_address}'
    WHERE doctor_login_id = '{$doctor_login_id}'";

    $login_rank_sql = "UPDATE login SET login_rank = '{$login_rank}' WHERE login_id = '{$doctor_login_id}'";

    if (mysqli_query($mysqli, $update_officer) && mysqli_query($mysqli, $login_rank_sql)) {
        $success = "Details updated";
    } else {
        $err = "Failed, please try again";
    }
}


/* Add Clients */
if (isset($_POST['Add_Client'])) {
    $client_name = mysqli_real_escape_string($mysqli, $_POST['client_name']);
    $client_email = mysqli_real_escape_string($mysqli, $_POST['client_email']);
    $client_contact = mysqli_real_escape_string($mysqli, $_POST['client_contact']);
    $client_address = mysqli_real_escape_string($mysqli, $_POST['client_address']);
    $login_password = sha1(md5(mysqli_real_escape_string($mysqli, $_POST['login_password'])));
    $login_email = mysqli_real_escape_string($mysqli, $_POST['client_email']);
    $login_rank = mysqli_real_escape_string($mysqli, 'Client');

    /* Prevent Duplications */
    $duplication_checker = "SELECT * FROM login WHERE login_email = '{$login_email}'";
    $res = mysqli_query($mysqli, $duplication_checker);
    if (mysqli_num_rows($res) > 0) {
        $err = "An account with this email already exists";
    } else {
        /* Persist */
        $add_donor_auth = "INSERT INTO login (login_email, login_password, login_rank)
        VALUES('{$login_email}', '{$login_password}', '{$login_rank}')";

        if (mysqli_query($mysqli, $add_donor_auth)) {
            /* Get  Login ID */
            $client_login_id = mysqli_real_escape_string($mysqli, mysqli_insert_id($mysqli));

            /* Persist Donor */
            $add_sql = "INSERT INTO client (client_login_id, client_name, client_email, client_contact, client_address)
            VALUES('{$client_login_id}', '{$client_name}', '{$client_email}', '{$client_contact}', '{$client_address}')";

            if (mysqli_query($mysqli, $add_sql)) {
                $success = "Account created";
            } else {
                $err = "Failed, please try again";
            }
        } else {
            $err = "Please try again";
        }
    }
}

/* Update Client */
if (isset($_POST['Update_Client'])) {
    $client_name = mysqli_real_escape_string($mysqli, $_POST['client_name']);
    $client_email = mysqli_real_escape_string($mysqli, $_POST['client_email']);
    $client_contact = mysqli_real_escape_string($mysqli, $_POST['client_contact']);
    $client_address = mysqli_real_escape_string($mysqli, $_POST['client_address']);
    $client_id = mysqli_real_escape_string($mysqli, $_POST['client_id']);

    /* Persist */
    $update_client_sql = "UPDATE  client SET client_name = '{$client_name}', client_email = '{$client_email}',
    client_contact = '{$client_contact}', client_address  = '{$client_address}' WHERE  client_id = '{$client_id}'";

    if (mysqli_query($mysqli, $update_client_sql)) {
        $success = "Client details updated";
    } else {
        $err = "Failed, please try again";
    }
}



/* **************************************************************** */

/* Global Delete User */
if (isset($_POST['Delete_User'])) {
    $login_id = mysqli_real_escape_string($mysqli, $_POST['login_id']);

    /* Persit */
    $delete_donor_sql = "DELETE FROM login WHERE login_id = '{$login_id}'";
    if (mysqli_query($mysqli, $delete_donor_sql)) {
        $success = "Account deleted";
    } else {
        $err = "Failed, please try again";
    }
}
