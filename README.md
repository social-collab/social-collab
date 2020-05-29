# social-collab
**Social Networking**

My name is **Donald** and I am a PHP developer. However, I have never contributed to open source projects or created some myself. I have used open source and edited them for personal use. This is my first open source project, a social networking platform. I have created a really good social network (still creating and never launched, yet), but recently, decided to start fresh from scratch and make it adaptable for open source, allowing such things as plugins, components, etc.

**UPDATE:** Since writing this, I have recently started learning how to use GitHub, thanks to [Lambda School](https://lambdaschool.com).

I would greatly appreciate collaborators and guidance, especially in relation to the file structure. Another drawback I have, I generally only write PHP PDO as that's what I know. I especially would like to find Ajax and JavaScript developers to assist in collaboration as I lack some skills in those areas.

**UPDATE:** Since writing this, I have recently learned some JavaScript and will learn more JavaScript in future courses at [Lambda School](https://lambdaschool.com).

If you notice my files and folders going in an improper direction, please let me know. You can reach me at admin@social-collab.org. I greatly appreciate it. Thanks.

## <div align="center"> >> ADDITIONAL LICENSE REQUIREMENTS: MUST READ << </div>

Some features you see below may be unique / original ideas that have never been done before. They will be marked as such. These features may be used solely WITHIN THE SOURCE CODE OF SOCIAL-COLLAB. You may use these features IF you are also using social-collab source code. You may NOT use these features on a separately-built website. Doing so will be considered intellectual-property theft. You furthermore agree not to share these ideas without first showing the third-party this paragraph and [this license](https://github.com/social-collab/social-collab/blob/master/LICENSE).

## Database Login Required

This site is fully functional and dependent on the use of a database. To work on this website (and test), you'll need to setup a php environment or use a host/vps. Change the config.php file in the root to include your database credentials. **DO NOT** make these credentials public. Mask (******) them before pushing to github.

## Password Encryption

The current encryption method is `sha256()`. If you have a better method, feel free to make the changes on your own forked copy and request a merge. I believe `crypto()` with a `salt()` is a better method, consider fixing this.

## Features Already Considered

### Login / Register

* Users can register and login
* Real Name, Email, and Password are required fields
* Confirm Password will be on a second / step 2 page to help reduce spam bots from creating accounts
   * Spam bots usually generate a different password for each page request. Requiring a page 2 for confirm password may prevent some bots from registering.
* IP address will be logged for each new account registration to help identify fake and spam accounts with excessive use of the same IP address.
   * 4 new account creations per day maximum, with a total not to exceed 200 per year. Why 200 total? Public places, such as libraries may exceed this number (legitimately).
* Digital Currency of $500 will be added to each new registered account, after email has been verified. You can read about Digital Currency below.
* Registering will auto login user.
* Email Validation will be sent to user.
   * Does not need to be validated to login.
   * Does need to be validated for certain features, such as receiving email notifications, etc.
   * Email Validation may be required if account is flagged.
* Each login is tracked for several purposes:
   * Website analytics
   * User analytics
   * Digital Currency and Rewards for loyalty
   * Advertising analytics
   * Advertising deliverability
   * Crime reporting and illegal activities or violation of policies

## Digital Currency

Digital Currency is exactly that... digital. It's fake. This is play money people may earn for doing things and tasks around the website. This money can then be used for intangible use around the website.

### Ways to earn Digital Currency

The following ways to earn digital currency and the values are in the brainstorming phase and may change. This may be made customizable by webmasters who use this source code for their own projects.

* New Account Registration: $500 DC
* Daily Login (one time per day): $100 DC
* 7 Consecutive Daily Logins: $500 DC
* 15 Consecutive Daily Logins: $1,500 DC
* 30 Consecutive Daily Logins: $4,500 DC
* 180 Consecutive Daily Logins: $45,000 DC
* 365 Consecutive Daily Logins: $100,000 DC
* Posting Status (1 to 30 words, no image - 3 posts per day): $10 DC each
* Posting Status (31 to 250 words, no image - 3 posts per day): $100 DC each
* Posting Status (251 and up words, no image - 3 posts per day): $250 DC each
* Posting Status (1 to 30 words, with image - 3 posts per day): $100 DC each
* Posting Status (31 to 250 words, with image - 3 posts per day): $1,000 DC each
* Posting Status (251 and up words, with image - 3 posts per day): $2,500 DC each
* Commenting on a Status (10 times per day): $100 DC each
* Liking a Status or Comment (25 times per day): $25 DC each
* Sharing someone else's Status (10 times per day): $100 DC each
* Creating a Business or Group Page AND verifying the Business or Group (5 lifetime total): $10,000 DC each
* Getting first friend: $250 DC
* Every subsequent friend: $25 DC each
* Completing Profile: $2,500 DC each
* Uploading first Profile Image: $1,000 DC
* Uploading subsequent Images: $25 DC each
* Changing theme from Default (1st time): $250 DC
* Adding Family Relationships: $10 DC each
* And more ideas to come...

### Ways to Spend Digital Currency

* Go Viral&copy; 1 - $10,000 DC each
* Go Viral&copy; 2 - $100,000 DC each
* Go Viral&copy; 3 - $250,000 DC each
* Go Viral&copy; 4 - $1,000,000 DC each
    * Go Viral&copy; is a unique and original idea, never done before on Social Media. The use of this must remain within the source code of social-collab. Copyright and License information must remain intact within the code for it's use. Real Money can also be spent on Go Viral, if chosen. This will seem like a promoted post as seen on other social media, but it's slightly different:
        * Go Viral&copy; 1 - $0.99 each
        * Go VIral&copy; 2 - $2.99 each
        * Go Viral&copy; 3 - $7.99 each
        * Go Viral&copy; 4 - $19.99 each
* Causes
    * Causes is an old idea being revived. Users can spend DC for real causes. For example, maybe $150,000 DC will buy one Teddy bear to help the fight against child abuse. When a User spends the DC for their cause, we in turn, will spend real money on that cause. The amounts will vary greatly for each cause. Users earn badges for total amount of DC spent in causes. This makes doing this like a fun game. Causes will be explained in more detail later.

## Normal / Expected Features

* Posting Status Updates
* Commenting on Status Updates
* Replying to Comments
* Liking Posts, Comments, and Replies
* Adding & Deleting Friends
* Blocking Users
* Privacy Settings
* Profile Pages
* Photo Uploading
* Messaging Friends and Other Users
    * Other users can set a privacy setting to disallow non-friends from messaging
* Complete Profile Information (About, relationships, employment, photos, etc.)
* Instant Messaging
    * **Need a developer for this**. My main programming language, PHP, is insufficient for this. Ajax, JavaScript, or some other language recommended over PHP.

## Game Platform

* Playing Games
* Developers can create Games
* Users can earn DC by reaching milestones in games, e.g., reaching level one of this game = $100 DC.

And you guessed it... **I need a developer** for this. I wish to create a platform similar to Facebook where any developer can deploy a game (Developer Central, etc.). I also wish for some games to be created by the developers of this open source in addition to third-parties doing so.

## Admin Dashboard

Admin dashboard will be for admins, webmasters, etc. Admins for example can delete users on the front end, review flagged posts, view analytics, and way more.

## Mx Server

Users will have their own email address, username@domain.com. When a message is received from an external mx server (i.e. mail.google.com), the message will appear in the same place as internal messages, but in a separate tab. I **need a developer** for this.

## Feature Suggestions

Anyone may edit this section with their ideas.

## Looking for Developers

If you fit one of the following criteria, you may contribute as non-paid, open source developer. Those with sufficient experience and/or education can request to become a collaborator on this project. If you don't wish to be a collaborator or don't have sufficient experience, you can fork your own copy and request merges for valuable additions.

1. PHP Developers, preferably laravel (as my experience is PDO-only) and I think laravel would serve purposes better
2. Ajax, JQuery, JSON, and JavaScript Developers
3. C++, Python, and other similar languages for the development of downloadable apps.
    1. Any webmaster that deploys this source code as their own project will have access to delivering these downloadable apps also as their own to their users.
4. Android and iOS Developers for downloadable apps
    1. Any webmaster that deploys this source code as their own project will have access to delivering these downloadable apps also as their own to their users.
5. Browser Plugin Software Engineers for the development of Chrome and Firefox plugins.
    1. Any webmaster that deploys this source code as their own project will have access to delivering these plugins as their own to their users.