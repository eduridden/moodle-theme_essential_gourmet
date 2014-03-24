    <div id="promo-slider" class="slider flexslider <?php echo $hideonphone ?>">
        <ul class="slides">

    <?php if ($hasslide1) { ?>
        <li>
            <?php if ($hasslide1url) { ?>
                <a href="<?php echo $slide1url ?>">
            <?php } ?>
            
            <?php if ($hasslide1image) { ?>
            <img src="<?php echo $slide1image ?>" alt="<?php echo $slide1 ?>">
            <?php } ?>
            
            <?php if ($hasslide1url) { ?>
                </a>
            <?php } ?>
            
            <p class="flex-caption">
                <span class="main"><?php echo $slide1 ?></span>
                <?php if ($hasslide1caption) { ?>
                <br>
                <span class="secondary clearfix"><?php echo $slide1caption ?></span>
                <?php } ?>
            </p>
        </li>
    <?php } ?>
    

    <?php if ($hasslide2) { ?>
        <li>
            <?php if ($hasslide2url) { ?>
                <a href="<?php echo $slide2url ?>">
            <?php } ?>
            
            <?php if ($hasslide2image) { ?>
            <img src="<?php echo $slide2image ?>" alt="<?php echo $slide2 ?>">
            <?php } ?>
            
            <?php if ($hasslide2url) { ?>
                </a>
            <?php } ?>
            
            <p class="flex-caption">
                <span class="main"><?php echo $slide2 ?></span>
                <?php if ($hasslide2caption) { ?>
                <br>
                <span class="secondary clearfix"><?php echo $slide2caption ?></span>
                <?php } ?>
            </p>
        </li>
    <?php } ?>
    
    <?php if ($hasslide3) { ?>
        <li>
            <?php if ($hasslide3url) { ?>
                <a href="<?php echo $slide3url ?>">
            <?php } ?>
            
            <?php if ($hasslide3image) { ?>
            <img src="<?php echo $slide3image ?>" alt="<?php echo $slide3 ?>">
            <?php } ?>
            
            <?php if ($hasslide3url) { ?>
                </a>
            <?php } ?>
            
            <p class="flex-caption">
                <span class="main"><?php echo $slide3 ?></span>
                <?php if ($hasslide3caption) { ?>
                <br>
                <span class="secondary clearfix"><?php echo $slide3caption ?></span>
                <?php } ?>
            </p>
        </li>
    <?php } ?>
    
    <?php if ($hasslide4) { ?>
        <li>
            <?php if ($hasslide4url) { ?>
                <a href="<?php echo $slide4url ?>">
            <?php } ?>
            
            <?php if ($hasslide4image) { ?>
            <img src="<?php echo $slide4image ?>" alt="<?php echo $slide4 ?>">
            <?php } ?>
            
            <?php if ($hasslide4url) { ?>
                </a>
            <?php } ?>
            
            <p class="flex-caption">
                <span class="main"><?php echo $slide4 ?></span>
                <?php if ($hasslide4caption) { ?>
                <br>
                <span class="secondary clearfix"><?php echo $slide4caption ?></span>
                <?php } ?>
            </p>
        </li>
    <?php } ?>
    
    
        </ul>
    </div>