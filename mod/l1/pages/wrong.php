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
$site_name = elgg_get_site_entity()->name;
$site_description = elgg_get_config('sitedescription');
?>
<!DOCTYPE html><html><head><title><?php echo $site_name; ?></title><meta name="description" content="<?php echo $site_description; ?>"><meta name="viewport" content="width=device-width, initial-scale=1"><meta name="mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-capable" content="yes"><link href="<?php echo elgg_get_site_url(); ?>mod/l1/css/style.css" rel="stylesheet" type="text/css" media="all" /><link href="<?php echo elgg_get_site_url(); ?>mod/l1/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"><script src="<?php echo elgg_get_site_url(); ?>mod/l1/js/jquery.min.js"></script><link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic|Open+Sans:300italic,600italic,400,300,600,700' rel='stylesheet' type='text/css'><meta name="author" content="RiverVanRain"><meta property="og:title" content="<?php echo $site_name; ?>"><meta property="og:type" content="website"><meta property="og:url" content="<?php echo elgg_get_site_url(); ?>"><meta property="og:description" content="<?php echo $site_description; ?>"><meta property="og:site_name" content="<?php echo $site_name; ?>"></head><body><div id="about" class="about"><div class="container"><div class="gallery-head text-center"><h3>Oops... something went wrong</h3><form name="redirect"><p>You will be redirected in <input type="text" size="1" name="redirect2"> seconds</p></form><script>
var targetURL="<?php echo elgg_get_site_url(); ?>"
var countdownfrom=5
var currentsecond=document.redirect.redirect2.value = countdownfrom+1
function countredirect(){
if (currentsecond!=1){
currentsecond-=1
document.redirect.redirect2.value=currentsecond
}
else{
window.location=targetURL
return
}
setTimeout("countredirect()",500)
}
countredirect()
</script></div></div></div></body></html>