This module provides simple way to allow facebook login/registration for your site.

It creates a new page called /facebook-login/ (you can move/rename that later),
which does quick facebook login. It also adds facebook_id field to user template,
that is used to match with fb account.

INSTALL INSTRUCTIONS

1. Install the module
2. Copy the facebook-login.php to your /site/templates/ folder
3. Create a new app from Facebook Developers site: https://developers.facebook.com/apps/
4. Edit the module and add Facebook App ID and App Secret
5. Start logging in by visiting the www.yoursite.com/facebook-login/