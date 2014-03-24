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
 
$footerl = 'footer-left';
$footerm = 'footer-middle';
$footerr = 'footer-right';

$hascopyright = (empty($PAGE->theme->settings->copyright)) ? false : $PAGE->theme->settings->copyright;
$hasfootnote = (empty($PAGE->theme->settings->footnote)) ? false : $PAGE->theme->settings->footnote;
$hasfooterleft = (empty($PAGE->layout_options['noblocks']) && $PAGE->blocks->region_has_content('footer-left', $OUTPUT));
$hasfootermiddle = (empty($PAGE->layout_options['noblocks']) && $PAGE->blocks->region_has_content('footer-middle', $OUTPUT));
$hasfooterright = (empty($PAGE->layout_options['noblocks']) && $PAGE->blocks->region_has_content('footer-right', $OUTPUT));

?>
<footer id="page-footer" class="footer">
	<div class="footer-content"> 
		<div class="container">
			<div class="row footerblocks">

		<?php
            		echo $OUTPUT->essential_gourmetblocks($footerl, 'footer-col span4');

            		echo $OUTPUT->essential_gourmetblocks($footerm, 'footer-col span4');

            		echo $OUTPUT->essential_gourmetblocks($footerr, 'footer-col span4');
		?>
 			</div>  
 			<p class="helplink"></p>
 		</div>      
 	</div>
 	
 	<div class="bottom-bar">
 		<div class="container">
 			<div class="row">
	 			<?php if ($hascopyright) {
	 				echo '<small class="copyright span4">&copy; '.date("Y").' '.$hascopyright.'</small>';
	 			} 
	 			
	 			
	 			// If true, displays the heading and available social links; displays nothing if false.
	 			if ($hassocialnetworks) {
	 			?>
	 					<div class="social pull-right span8">
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
	 								<button type="button" ONCLICK="window.location.href='<?php echo $haskype; ?>'" class="socialicon skype">
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
 			</div><!--//row-->
 		</div><!--//container-->
 	</div>	
 	
</footer>
<?php echo $OUTPUT->standard_footer_html(); ?>
	

