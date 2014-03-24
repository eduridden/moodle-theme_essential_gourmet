<div class="row-fluid" id="middle-blocks">
    <div class="span4">
        <!-- Advert #1 -->
        <div class="service">
            <?php if ($hasmarketing1image) { ?>
            	<img class="img-responsive" src="<?php echo $marketing1image ?>" alt="<?php echo $PAGE->theme->settings->marketing1 ?>">
            <?php } ?>
            <div class="desc">
              <!-- Icon & title. Font Awesome icon used. -->
            <h3><small><a href="<?php echo $PAGE->theme->settings->marketing1buttonurl ?>"><?php echo $PAGE->theme->settings->marketing1 ?></a></small></h3>

            <?php echo $PAGE->theme->settings->marketing1content ?>
            <a class="btn btn-theme" href="<?php echo $PAGE->theme->settings->marketing1buttonurl ?>"><?php echo $PAGE->theme->settings->marketing1buttontext ?></a>
          </div>
        </div>
    </div>

    <div class="span4">
        <!-- Advert #2 -->
        <div class="service">
            <?php if ($hasmarketing2image) { ?>
            	<img class="img-responsive" src="<?php echo $marketing2image ?>" alt="<?php echo $PAGE->theme->settings->marketing2 ?>">
            <?php } ?>
            <div class="desc">
              <!-- Icon & title. -->
            <h3><small><a href="<?php echo $PAGE->theme->settings->marketing2buttonurl ?>"><?php echo $PAGE->theme->settings->marketing2 ?></a></small></h3>

            <?php echo $PAGE->theme->settings->marketing2content ?>
            <a class="btn btn-theme" href="<?php echo $PAGE->theme->settings->marketing2buttonurl ?>"><?php echo $PAGE->theme->settings->marketing2buttontext ?></a>
          </div>
        </div>
    </div>

    <div class="span4">
        <!-- Advert #3 -->
        <div class="service">
            <?php if ($hasmarketing3image) { ?>
            	<img class="img-responsive" src="<?php echo $marketing3image ?>" alt="<?php echo $PAGE->theme->settings->marketing3 ?>">
            <?php } ?>
            <div class="desc">
              <!-- Icon & title.-->
            <h3><small><a href="<?php echo $PAGE->theme->settings->marketing3buttonurl ?>"><?php echo $PAGE->theme->settings->marketing3 ?></a></small></h3>

            <?php echo $PAGE->theme->settings->marketing3content ?>
            <a class="btn btn-theme" href="<?php echo $PAGE->theme->settings->marketing3buttonurl ?>"><?php echo $PAGE->theme->settings->marketing3buttontext ?></a>
          </div>
        </div>
    </div>
</div>
