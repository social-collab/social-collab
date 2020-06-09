<?php

/**
 * Social-Collab - An Open Source Social Networking Platform.
 * @version 1.0
 * @package social-collab
 * @see https://github.com/social-collab/social-collab/ An Open Source for Social Networks GitHub project
 * @author Donald Faulknor (social-collab / original founder / developer) <admin@social-collab.org>
 * @copyright 2020 Donald Faulknor
 * @license https://www.gnu.org/licenses/gpl-3.0.html GNU General Public License 3.0
 * File Name - header.php
 * File Path - /header.php
 * File Purpose - Front-End Header
 * File Placement - Place on every page at the top
 * @note This program is distributed in the hope that it will be useful - WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE.
 */

session_start();
require('config.php');
include('user-details.php'); // Includes all user information for the currently logged in user, if logged in.
?>
<!DOCTYPE html>
<html lang="en"> <!-- Dynamically change this if set in user's account -->
    <head>
    <title><?php echo $pageTitle; ?></title> <!-- $pageTitle declared on every page above the inclusion of header.php -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
        <link rel="stylesheet" href="/css/uikit.css?id=<?php echo rand(0,99999); ?>">
        <link rel="stylesheet" href="/styles/style.css">
    </head>

<body id="body uk-width-1-1">
    <?php if(isset($_SESSION['user_id'])) { ?>
        <header>
        <nav>
            <a href="home" class="navLink">Home</a>
            <a href="profile" class="navLink">Profile</a>
            <a href="settings" class="navLink">Settings</a>
        </nav>
        </header>
    <?php 
    } else { ?>
        <img id="logo" src="Social-Collab%20Logo2.png" style="position:fixed; top:6px; left:8px; height:72px; z-index:1200">
        <nav class="uk-navbar uk-navbar-container uk-width-1-1">
            <div class="uk-navbar-left uk-navbar-item uk-width-1-1">
                <button id="openLogin" class="uk-button uk-width-1-6">Login</button>
            </div>
            <?php include('login.php'); } ?>
        </nav>
    <script src="openLogin.js"></script>