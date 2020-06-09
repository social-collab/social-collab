<?php

/**
 * Social-Collab - An Open Source Social Networking Platform.
 * @version 1.0
 * @package social-collab
 * @see https://github.com/social-collab/social-collab/ An Open Source for Social Networks GitHub project
 * @author Donald Faulknor (social-collab / original founder / developer) <admin@social-collab.org>
 * @copyright 2020 Donald Faulknor
 * @license https://www.gnu.org/licenses/gpl-3.0.html GNU General Public License 3.0
 * File Name - theme.php
 * File Path - /theme.php
 * File Purpose - Select Theme of Logged In User or Default Theme
 * File Placement - Place in /user-details.php page
 * @note This program is distributed in the hope that it will be useful - WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE.
 */

// The default theme will be for any logged out user or any user that does not have another theme selected
// The default theme should be comfortable on anyone's eyes. Using mild, but pleasant colors. lightBlue, gray, black, white, etc.
// Plain cursors should be used for default theme. No custom or flashy cursors.
// No flashy animations should be used for default theme. Let user decide on using these.
// WARNING: STROBE-LIKE ANIMATIONS CAN CAUSE SEIZURES IN EPILEPTIC USERS. IF EVER USED, A WARNING SHOULD BE DISPLAYED TO USER BEFORE SELECTING
// THE THEME. END WARNING.

if(isset($_SESSION['user_id'])) {
    // User's Selected Theme Options

    $query = "SELECT * FROM users WHERE user_id = :id";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':id',$id);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $users_theme_id = $row['theme_id'];
    
    $query = "SELECT * FROM themes WHERE id = :theme_id";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':theme_id',$theme_id);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $theme_name = $row['name'];
    $theme_id = $row['id'];
    $theme_color1 = $row['color1'];
    $theme_color2 = $row['color2'];
    $theme_color3 = $row['color3'];
    $theme_image1 = $row['image1'];
    $theme_image2 = $row['image2'];
    $theme_cursor1 = $row['cursor1'];
    $theme_cursor2 = $row['cursor2'];
    // ADD OPTIONS FOR ORDER OF ELEMENTS ON PROFILE PAGE AFTER ALL ELEMENTS ARE DECIDED ON. MOST LIKELY, THIS WILL BE AFTER THE DEVELOPMENT OF THE DEFAULT PROFILE.
    
} else {
    // Website Default Theme Options

    $query = "SELECT * FROM themes WHERE id = :theme_id";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':theme_id',$theme_id);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $theme_name = $row['name'];
    $theme_id = $row['id'];
    $theme_color1 = $row['color1'];
    $theme_color2 = $row['color2'];
    $theme_color3 = $row['color3'];
    $theme_image1 = $row['image1'];
    $theme_image2 = $row['image2'];
    $theme_cursor1 = $row['cursor1'];
    $theme_cursor2 = $row['cursor2'];
    // ADD OPTIONS FOR ORDER OF ELEMENTS ON PROFILE PAGE AFTER ALL ELEMENTS ARE DECIDED ON. MOST LIKELY, THIS WILL BE AFTER THE DEVELOPMENT OF THE DEFAULT PROFILE.
}

// Convert hex to RGB: The conversion is necessary for RGBA
$split_hex_color = str_split( $theme_color1, 2 ); 
$rgb1 = hexdec( $split_hex_color[0] ); 
$rgb2 = hexdec( $split_hex_color[1] ); 
$rgb3 = hexdec( $split_hex_color[2] );

$theme_color1RGB = $rgb1.', '.$rgb2.', '.$rgb3; // Stored as: '255, 255, 255';

$split_hex_color = str_split( $theme_color2, 2 ); 
$rgb1 = hexdec( $split_hex_color[0] ); 
$rgb2 = hexdec( $split_hex_color[1] ); 
$rgb3 = hexdec( $split_hex_color[2] );

$theme_color2RGB = $rgb1.', '.$rgb2.', '.$rgb3; // Stored as: '255, 255, 255';

$split_hex_color = str_split( $theme_color3, 2 ); 
$rgb1 = hexdec( $split_hex_color[0] ); 
$rgb2 = hexdec( $split_hex_color[1] ); 
$rgb3 = hexdec( $split_hex_color[2] );

$theme_color3RGB = $rgb1.', '.$rgb2.', '.$rgb3; // Stored as: '255, 255, 255';

?>

<!-- Assign PHP Variables to CSS Variables -->

<style>

    :root {
        --color1: #<?php echo $theme_color1; ?>;
        --color2: #<?php echo $theme_color2; ?>;
        --color3: #<?php echo $theme_color3; ?>;
        --color1RGB: <?php echo $theme_color1RGB; ?>;
        --color2RGB: <?php echo $theme_color2RGB; ?>;
        --color3RGB: <?php echo $theme_color3RGB; ?>;
        --cursor1: <?php echo $theme_cursor1; ?>;
        --cursor2: <?php echo $theme_cursor2; ?>;
    }

</style>