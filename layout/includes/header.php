<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * This is built using the Clean template to allow for new theme's using
 * Moodle's new Bootstrap theme engine
 *
 *
 * @package   theme_essential_gourmet
 * @copyright 2013 Julian Ridden
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$hasfacebook    = (empty($PAGE->theme->settings->facebook)) ? false : $PAGE->theme->settings->facebook;
$hastwitter     = (empty($PAGE->theme->settings->twitter)) ? false : $PAGE->theme->settings->twitter;
$hasgoogleplus  = (empty($PAGE->theme->settings->googleplus)) ? false : $PAGE->theme->settings->googleplus;
$haslinkedin    = (empty($PAGE->theme->settings->linkedin)) ? false : $PAGE->theme->settings->linkedin;
$hasyoutube     = (empty($PAGE->theme->settings->youtube)) ? false : $PAGE->theme->settings->youtube;
$hasflickr      = (empty($PAGE->theme->settings->flickr)) ? false : $PAGE->theme->settings->flickr;
$hasvk          = (empty($PAGE->theme->settings->vk)) ? false : $PAGE->theme->settings->vk;
$haspinterest   = (empty($PAGE->theme->settings->pinterest)) ? false : $PAGE->theme->settings->pinterest;
$hasinstagram   = (empty($PAGE->theme->settings->instagram)) ? false : $PAGE->theme->settings->instagram;
$hasskype       = (empty($PAGE->theme->settings->skype)) ? false : $PAGE->theme->settings->skype;
$hasios         = (empty($PAGE->theme->settings->ios)) ? false : $PAGE->theme->settings->ios;
$hasandroid     = (empty($PAGE->theme->settings->android)) ? false : $PAGE->theme->settings->android;
$haswebsite     = (empty($PAGE->theme->settings->website)) ? false : $PAGE->theme->settings->website;

$hastagline = ($SITE->summary);

// If any of the above social networks are true, sets this to true.
$hassocialnetworks = ($hasfacebook || $hastwitter || $hasgoogleplus || $hasflickr || $hasinstagram || $hasvk || $haslinkedin || $haspinterest || $hasskype || $haslinkedin || $haswebsite || $hasyoutube ) ? true : false;
$hasmobileapps = ($hasios || $hasandroid ) ? true : false;
$hasheaderprofilepic = (empty($PAGE->theme->settings->headerprofilepic)) ? false : $PAGE->theme->settings->headerprofilepic;


/* Modified to check for IE 7/8. Switch headers to remove backgound-size CSS (in Custom CSS) functionality if true */
$checkuseragent = '';
if (!empty($_SERVER['HTTP_USER_AGENT'])) {
    $checkuseragent = $_SERVER['HTTP_USER_AGENT'];
}
?>

<header id="page-header" class="header clearfix">
    <div class="top-bar">
        <div class="container">
            <?php
            // If true, displays the heading and available social links; displays nothing if false.
            if ($hassocialnetworks) {
            ?>
            <div class="social span8">
                <ul class="socials unstyled">
                    <?php if ($hasgoogleplus) { ?>
                    <li>
                        <button type="button" ONCLICK="window.location.href='<?php echo $hasgoogleplus; ?>'" class="socialicon googleplus">
                            <i class="fa fa-google-plus"></i>
                            <span class="sr-only">Follow us on Google Plus</span>
                        </button>
                    </li>
                    <?php } ?>

                    <?php if ($hastwitter) { ?>
                    <li>
                        <button type="button" ONCLICK="window.location.href='<?php echo $hastwitter; ?>'" class="socialicon twitter">
                            <i class="fa fa-twitter"></i>
                            <span class="sr-only">Follow us on Twitter</span>
                        </button>
                    </li>
                    <?php } ?>

                    <?php if ($hasfacebook) { ?>
                    <li>
                        <button type="button" ONCLICK="window.location.href='<?php echo $hasfacebook; ?>'" class="socialicon facebook">
                            <i class="fa fa-facebook"></i>
                            <span class="sr-only">Like us on Facebook</span>
                        </button>
                    </li>
                    <?php } ?>

                    <?php if ($haslinkedin) { ?>
                    <li>
                        <button type="button" ONCLICK="window.location.href='<?php echo $haslinkedin; ?>'" class="socialicon linkedin">
                            <i class="fa fa-linkedin"></i>
                            <span class="sr-only">Visit us on LinkedIn</span>
                        </button>
                    </li>
                    <?php } ?>

                    <?php if ($hasyoutube) { ?>
                    <li>
                        <button type="button" ONCLICK="window.location.href='<?php echo $hasyoutube; ?>'" class="socialicon youtube">
                            <i class="fa fa-youtube"></i>
                            <span class="sr-only">Watch us on Youtube</span>
                        </button>
                    </li>
                    <?php } ?>

                    <?php if ($hasflickr) { ?>
                    <li>
                        <button type="button" ONCLICK="window.location.href='<?php echo $hasflickr; ?>'" class="socialicon flickr">
                            <i class="fa fa-flickr"></i>
                            <span class="sr-only">See us on Flickr</span>
                        </button>
                    </li>
                    <?php } ?>

                    <?php if ($haspinterest) { ?>
                    <li>
                        <button type="button" ONCLICK="window.location.href='<?php echo $haspinterest; ?>'" class="socialicon pinterest">
                            <i class="fa fa-pinterest"></i>
                            <span class="sr-only">Pin us on Pinterest</span>
                        </button>
                    </li>
                    <?php } ?>

                    <?php if ($hasinstagram) { ?>
                    <li>
                        <button type="button" ONCLICK="window.location.href='<?php echo $hasinstagram; ?>'" class="socialicon instagram">
                            <i class="fa fa-instagram"></i>
                            <span class="sr-only">Follow us on Instagram</span>
                        </button>
                    </li>
                    <?php } ?>

                    <?php if ($hasvk) { ?>
                    <li>
                        <button type="button" ONCLICK="window.location.href='<?php echo $hasvk; ?>'" class="socialicon vk">
                            <i class="fa fa-vk"></i>
                            <span class="sr-only">Follow us on VK</span>
                        </button>
                    </li>
                    <?php } ?>

                    <?php if ($hasskype) { ?>
                    <li>
                        <button type="button" ONCLICK="window.location.href='<?php echo $hasskype; ?>'" class="socialicon skype">
                            <i class="fa fa-skype"></i>
                            <span class="sr-only">Contact us on Skype</span>
                        </button>
                    </li>
                    <?php } ?>

                    <?php if ($haswebsite) { ?>
                    <li>
                        <button type="button" ONCLICK="window.location.href='<?php echo $haswebsite; ?>'" class="socialicon website">
                            <i class="fa fa-globe"></i>
                            <span class="sr-only">Visit our website</span>
                        </button>
                    </li>
                    <?php } ?>

                </ul>
            </div>
            <?php
            }
            ?>

            <div class="logininfo-container pull-right">
                <?php echo $OUTPUT->login_info(); ?>
            </div>
        </div>
    </div><!--//top-bar-->

    <div class="header-main container">
        <div class="span5">
        <?php if (!$haslogo) { ?>
                <i id="headerlogo" class="fa fa-<?php echo $PAGE->theme->settings->siteicon ?>"></i>
                <h1 id="title" style="line-height: 2em"><?php echo $SITE->shortname; ?></h1>
                <h2 id="subtitle"><?php p(strip_tags(format_text($hastagline, FORMAT_HTML))) ?></h2>
        <?php } else { ?>
            <a class="logo span5" href="<?php echo $CFG->wwwroot; ?>" title="<?php print_string('home'); ?>"></a>
        <?php } ?>
        </div>
        <div class="info span5">
            <div class="header-widget">
            </div>

            <div class="contact pull-right">
                <p class="phone"><i class="fa fa-phone"></i>Call us today 0800 123 4567</p>
                <p class="email"><i class="fa fa-envelope"></i><a href="mailto:enquires@website.com">enquires@website.com</a></p>
            </div><!--//contact-->
        </div><!--//info-->
    </div><!--//header-main-->
</header>
