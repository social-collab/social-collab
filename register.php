<?php
    include('website-details.php');
    $pageTitle = $websiteTitle.' Social Network';
    include('header.php');

?>
<!-- <style>
input[type="date"]::-webkit-inner-spin-button,
input[type="date"]::-webkit-calendar-picker-indicator {
    display: none;
    -webkit-appearance: none;
}
</style> -->
<div class="registerLogin-Container" style="width:50%; margin-left:25%; margin-top:48px">
<h2 class="uk-h2 uk-text-center">Register</h2>
    <form style="border:2px solid #<?php echo $theme_color3; ?>; border-radius:8px; padding:12px" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="uk-grid-small" name="register" uk-grid>
        <div class="uk-width-1-2@s uk-padding-remove-left">
            <!-- <span class="uk-form-icon uk-width-1-2@s" uk-icon="icon: user"></span> DOSEN'T WORK! -->
            <input class="uk-input" type="text" name="firstname" placeholder="Firstname" />
        </div>
        <div class="uk-width-1-2@s">
            <!-- <span class="uk-form-icon" uk-icon="icon: user"></span> ICONS DON'T WORK WITH UK-WIDTH -->
            <input class="uk-input" type="text" name="lastname" placeholder="Lastname" />
        </div>
        <div class="uk-width-1-1 uk-padding-remove-left">
            <select class="uk-select" name="gender">
                <option selected disabled>Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
        <label class="uk-form-label uk-text-bold uk-width-1-1" for="dob">Date of Birth</label>
        <div class="uk-width-1-1 uk-padding-remove-left uk-form-inline">
            <!-- <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: calendar"></span> -->
            <input class="uk-input uk-width-1-3" type="date" id="dob">
            <div class="uk-width-1-2 uk-input">Why Do We Ask For This?</div>
        </div>
        <div class="uk-width-1-1 uk-padding-remove-left">
            <input class="uk-input" type="email" name="email" placeholder="Email" />
        </div>
        <div class="uk-width-1-2@s uk-padding-remove-left">
            <input class="uk-input" type="password" name="password" placeholder="Password" />
        </div>
        <div class="uk-width-1-2@s">
            <input class="uk-input" type="password" name="confirmPassword" placeholder="Confirm Password" />
        </div>
        <button class="uk-button uk-width-1-1 uk-padding-remove-left uk-padding-remove-right" type="submit" name="register">Register</button>
    </form>
</div>