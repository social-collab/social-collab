<?php

/**
 * Social-Collab - An Open Source Social Networking Platform.
 * @version 1.0
 * @package social-collab
 * @see https://github.com/social-collab/social-collab/ An Open Source for Social Networks GitHub project
 * @author Donald Faulknor (social-collab / original founder / developer) <admin@social-collab.org>
 * @copyright 2020 Donald Faulknor
 * @license https://www.gnu.org/licenses/gpl-3.0.html GNU General Public License 3.0
 * File Name - user-details.php
 * File Path - /user-details.php
 * File Purpose - Stores all details for logged in user
 * File Placement - Place above any html code in the header file
 * @note This program is distributed in the hope that it will be useful - WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE.
 */

// RETRIEVE USER DATA

    if(isset($_SESSION['user_id'])) {
        // User is logged in

        $query = "SELECT * FROM users WHERE id = :id";
        $stmt = $db->prepare($query);
        $stmt->bindValue(':id',$id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $dob = $row['dob'];
        $email = $row['email'];
        $verified = $row['verified']; // not required for login, but email verification is required for email notifications
        $theme_id = $row['theme']; // Sets id value of selected theme. 1 is default (for now);

    } else {
        // User is not logged in
        $theme_id = 1; // Default Theme. Change this if you wish to change default theme. Also, update SQL users.theme default=1

        // CLASSES FOR IF LOGGED OUT
    }

// END RETRIEVE USER DATA

include('theme.php'); // Stores user theme details. Default theme if logged out.