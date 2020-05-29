# social-collab
**Social Networking**

My name is **Donald** and I am a PHP developer. However, I have never contributed to open source projects or created some myself. I have used open source and edited them for personal use. This is my first open source project, a social networking platform. I have created a really good social network (still creating and never launched, yet), but recently, decided to start fresh from scratch and make it adaptable for open source, allowing such things as plugins, components, etc.

**UPDATE:** Since writing this, I have recently started learning how to use GitHub, thanks to [Lambda School](https://lambdaschool.com).

I would greatly appreciate collaborators and guidance, especially in relation to the file structure. Another drawback I have, I generally only write PHP PDO as that's what I know. I especially would like to find Ajax and JavaScript developers to assist in collaboration as I lack some skills in those areas.

**UPDATE:** Since writing this, I have recently learned some JavaScript and will learn more JavaScript in future courses at [Lambda School](https://lambdaschool.com).

If you notice my files and folders going in an improper direction, please let me know. You can reach me at admin@social-collab.org. I greatly appreciate it. Thanks.

## ADDITIONAL LICENSE REQUIREMENTS: MUST READ

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
* Posting Status (1 to 30 words, no image - 3 posts per day): $10 DC
* Posting Status (31 to 250 words, no image - 3 posts per day): $100 DC
* Posting Status (251 and up words, no image - 3 posts per day): $250 DC
* Posting Status (1 to 30 words, with image - 3 posts per day): $100 DC
* Posting Status (31 to 250 words, with image - 3 posts per day): $1,000 DC
* Posting Status (251 and up words, with image - 3 posts per day): $2,500 DC

## Feature Suggestions

Anyone may edit this section with their ideas.