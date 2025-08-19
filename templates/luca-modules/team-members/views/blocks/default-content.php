<?php if (count($data['members'])): ?>

  <div id="<?= $this->block_id; ?>" class="members <?= $data['modifier']; ?>">

    <?php do_action($this->hook('block/before')); ?>

    <div class="row">
      <?php foreach ($data['members'] as $member): ?>
        <div class="col-sm-6 col-lg-4 u-smartClear col-verticalSpacing">
          <?php $this->render('partials/profile-card', $member, ['show_links' => true]); ?>
        </div>
      <?php endforeach; ?>
    </div>

    <?php do_action($this->hook('block/after')); ?>

  </div> <!-- /.members -->

<?php endif; ?>
