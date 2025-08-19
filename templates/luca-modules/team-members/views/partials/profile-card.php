<div class="profileCard js-matchHeight">
  <?php do_action($this->hook('single/before')); ?>

  <div class="profileCard_imageWrap">
    
    <?php if (isset($data['args']['show_links']) && $data['args']['show_links']): ?>
      <a href="<?= $data['permalink']; ?>" class="profileCard_image">
		    <img class="profileCard_image_img" src="<?php if ($data['image']): echo $data['image']['url']; endif;?>" height="150" width="246"/>
      </a>
    <?php else: ?>
      <div class="profileCard_image">
        <img class="profileCard_image_img" src="<?php if ($data['image']): echo $data['image']['url']; endif;?>" height="150" width="246"/>
        <!-- 
        <?php echo json_encode($data['image']); ?>
        -->
      </div>
    <?php endif; ?>
	
  </div> <!-- /.profileCard_imageWrap -->
  
  <div class="profileCard_content">
   
    <h3 class="profileCard_title">

      <?php if (isset($data['args']['show_links']) && $data['args']['show_links']): ?>
        <a href="<?= $data['permalink']; ?>">
      <?php endif; ?>

      <?= $data['title']; ?>

      <?php if (isset($data['args']['show_links']) && $data['args']['show_links']): ?>
        </a>
      <?php endif; ?>

    </h3>
    
    <?php if ($data['position']): ?>
      <div class="profileCard_position"><?=  $data['position']; ?></div>
    <?php endif; ?>
    
    <?php if ($data['phone']): ?>
      <div class="profileCard_phone">
        <?= $data['phone']; ?>
      </div> <!-- /.profileCard_phone -->
    <?php endif; ?>
    
    <div class="profileCard_info">
     
      <?php if ($data['email']): ?>
        <a href="mailto:<?= $data['email']; ?>" class="profileCard_icon">
          <div class="u-scalingSvg">
            <svg class="u-scalingSvg_shape">
              <use xlink:href="#shape-envelope" />
            </svg>
          </div>
        </a>
      <?php endif; ?>
      
      <?php if ($data['linkedin']): ?>
        <a href="<?= $data['linkedin']; ?>" class="profileCard_icon" target="_blank">
          <div class="u-scalingSvg">
            <svg class="u-scalingSvg_shape">
              <use xlink:href="#shape-linkedin" />
            </svg>
          </div>
        </a>
      <?php endif; ?>

      <?php if ($data['twitter']): ?>
        <a class="profileCard_icon" href="<?= $data['twitter']; ?>" target="_blank">
          <div class="u-scalingSvg">
            <svg class="u-scalingSvg_shape">
              <use xlink:href="#shape-twitter" />
            </svg>
          </div>
        </a>
      <?php endif; ?>

      <?php if ($data['facebook']): ?>
        <a class="profileCard_icon" href="<?= $data['facebook']; ?>" target="_blank">
          <div class="u-scalingSvg">
            <svg class="u-scalingSvg_shape">
              <use xlink:href="#shape-facebook" />
            </svg>
          </div>
        </a>
      <?php endif; ?>

      <?php if ($data['google_plus']): ?>
        <a class="profileCard_icon" href="<?= $data['google_plus']; ?>" target="_blank">
          <div class="u-scalingSvg">
            <svg class="u-scalingSvg_shape">
              <use xlink:href="#shape-google" />
            </svg>
          </div>
        </a>
      <?php endif; ?>
      
    </div> <!-- /.profileCard_info -->

    <?php if (isset($data['args']['show_links']) && $data['args']['show_links']): ?>
      <div>
        <a class="profileCard_nav" href="<?= $data['permalink']; ?>">Full profile &raquo;</a>
      </div>
    <?php endif; ?>
    
  </div> <!-- /.profileCard_content -->
  
  <?php do_action($this->hook('single/after')); ?>
</div> <!-- /.profileCard -->
