<?php
/**
 * Responsive Elgg theme [Landing]
 * @author RiverVanRain
 * @package L1
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2
 * @copyright (c) wZm 2k15
 * @link http://wzm.me
**/
header("Content-type: text/html; charset=UTF-8");
$siteurl = elgg_get_site_url();
$site_name = elgg_get_site_entity()->name;
$site_description = elgg_get_config('sitedescription');
$site_email = elgg_get_config('siteemail');
$ts = time ();
$token = generate_action_token ( $ts );
?>
<!DOCTYPE html><html><head><title><?php echo $site_name; ?></title><meta name="description" content="<?php echo $site_description; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="<?php echo elgg_get_site_url(); ?>mod/l1/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo elgg_get_site_url(); ?>mod/l1/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">

<meta name="author" content="RiverVanRain">
<meta property="og:title" content="<?php echo $site_name; ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo elgg_get_site_url(); ?>">
<meta property="og:description" content="<?php echo $site_description; ?>">
<meta property="og:site_name" content="<?php echo $site_name; ?>"></head>
<body><div class="main-header">
<div id="home" class="header">
<div class="top-header">
<div class="container">
<div class="logo">
<img src="<?php echo elgg_get_site_url(); ?>mod/l1/i/logo.png" alt=""></div>



<div id="top" class="callbacks_container"><ul class="rslides" id="slider4"><li>
<div class="tittle-head"><h1></h1>
<div class="learn-button"><a class="slide-btn" href="<?php echo elgg_get_site_url(); ?>login/">Login </a></div></div></li><li>
<div class="tittle-head"><h1>Lorem ipsum dolor</h1><p>Just for you.</p>
<div class="learn-button"><a class="slide-btn" href="<?php echo elgg_get_site_url(); ?>login/">Join Now</a></div></div></li><li>
<div class="tittle-head"><h1>Simple&pure design</h1><p>Just for you.</p><div class="learn-button"><a class="slide-btn" href="<?php echo elgg_get_site_url(); ?>login/">Join Now</a></div></div></li></ul></div>
<div class="clearfix"> </div></div>
<div class="portfolio">
<div class="container">
<div class="potrfolio-head"><h2>Registration is absolutely free!</h2><a class="prt-btn" href="<?php echo elgg_get_site_url(); ?>register/">Sign up now</a></div></div></div>
<div id="contact" class="feedback">
<div class="container"><div class="feed-head"><h3>Contact</h3><p>Get in touch!</p></div>
<div class="feed-contact">
<div class="col-md-8 contact-form">
<form action="<?php echo elgg_get_site_url(); ?>action/contact" method="post">
<input type="hidden" value="<?php echo $token; ?>" name="__elgg_token">
<input type="hidden" value="<?php echo $ts; ?>" name="__elgg_ts">
<input type="text" class="textbox" name="sender_name" required="true" placeholder="Name">
<input type="text" class="textbox" name="sender_email" required="true" placeholder="E-mail">
<textarea name="email_message" required="true" placeholder="Message"></textarea>
<input type="submit" value="Send a message"></form></div>
<div class="col-md-4 address"><h4>SocialBook</h4><p>Vukovarska 58</p><p>51000 Rijeka, Croatia</p><br><p>+1534 432 123</p><p><a href="mailto:<?php echo $site_email; ?>"><?php echo $site_email; ?></a></p>
<div class="footer-icons"><ul class="soc_icons unstyled-list list-inline"><li><a href="https://facebook.com/"><i class="icon_1"></i></a></li><li><a href="https://twitter.com/"><i class="icon_2"></i></a></li><li><a href="https://plus.google.com/"><i class="icon_3"></i></a></li><li><a href="https://instagram.com/"><i class="icon_4"></i></a></li>
<div class="clearfix"></div></ul>
</div></div>
<div class="clearfix"></div></div></div></div>
<div class="footer">
<div class="container">
<div class="logo2">
<img src="<?php echo elgg_get_site_url(); ?>mod/l1/i/logo2.png" alt=""></div>
<div class="copy-right"><p>&copy; <?php echo date('Y'); ?> Copy Right SocialBook</p></div>
<div class="clearfix"></div></div></div>

<a href="#" id="toTop" style="display: block;"> 
<span id="toTopHover" style="opacity: 1;"> </span>
</a>
</body>
</html>