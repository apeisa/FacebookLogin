<?php
/*
 * Template file for facebook login
 *
 * This should be copied to /site/templates/ folder if installation script cannot do it
 *
*/

$fb = $this->modules->get("FacebookLogin");
if(!$fb) throw new Wire404Exception('FacebookLogin module is not installed');
echo $fb->execute();

