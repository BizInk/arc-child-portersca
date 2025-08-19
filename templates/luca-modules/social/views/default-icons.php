<div class="socialIcons">

    <div class="socialIcons_layout">

        <?php if ($data['facebook']): ?>
            <a href="<?= $data['facebook']; ?>" class="socialIcons_icon socialIcons_icon-fb" target="_blank">
                <div class="u-scalingSvg">
                    <svg class="u-scalingSvg_shape">
                        <use xlink:href="#shape-facebook"/>
                    </svg>
                    <svg class="u-scalingSvg_shape socialIcons_altIcon">
                        <use xlink:href="#shape-facebook-2"/>
                    </svg>
                </div>
            </a>
        <?php endif; ?>

        <?php if ($data['twitter']): ?>
            <a href="<?= $data['twitter']; ?>" class="socialIcons_icon socialIcons_icon-twitter" target="_blank">
                <div class="u-scalingSvg">
                    <svg class="u-scalingSvg_shape">
                        <use xlink:href="#shape-twitter"/>
                    </svg>
                    <svg class="u-scalingSvg_shape socialIcons_altIcon">
                        <use xlink:href="#shape-twitter-2"/>
                    </svg>
                </div>
            </a>
        <?php endif; ?>

        <?php if ($data['google_plus']): ?>
            <a href="<?= $data['google_plus']; ?>" class="socialIcons_icon socialIcons_icon-google" target="_blank">
                <div class="u-scalingSvg">
                    <svg class="u-scalingSvg_shape">
                        <use xlink:href="#shape-google"/>
                    </svg>
                    <svg class="u-scalingSvg_shape socialIcons_altIcon">
                        <use xlink:href="#shape-google-2" />
                    </svg>
                </div>
            </a>
        <?php endif; ?>

        <?php if ($data['linkedin']): ?>
            <a href="<?= $data['linkedin']; ?>" class="socialIcons_icon socialIcons_icon-linkedin" target="_blank">
                <div class="u-scalingSvg">
                    <svg class="u-scalingSvg_shape">
                        <use xlink:href="#shape-linkedin"/>
                    </svg>
                    <svg class="u-scalingSvg_shape socialIcons_altIcon">
                        <use xlink:href="#shape-linkedin-2" />
                    </svg>
                </div>
            </a>
        <?php endif; ?>

        <?php if ($data['instagram']): ?>
            <a href="<?= $data['instagram']; ?>" class="socialIcons_icon socialIcons_icon-instagram" target="_blank">
                <div class="u-scalingSvg">
                    <svg class="u-scalingSvg_shape">
                        <use xlink:href="#shape-instagram"/>
                    </svg>
                    <svg class="u-scalingSvg_shape socialIcons_altIcon">
                        <use xlink:href="#shape-instagram-2" />
                    </svg>
                </div>
            </a>
        <?php endif; ?>

        <?php if ($data['youtube']): ?>
            <a href="<?= $data['youtube']; ?>" class="socialIcons_icon socialIcons_icon-youtube" target="_blank">
                <div class="u-scalingSvg">
                    <svg class="u-scalingSvg_shape">
                        <use xlink:href="#shape-youtube"/>
                    </svg>
                    <svg class="u-scalingSvg_shape socialIcons_altIcon">
                        <use xlink:href="#shape-youtube-2" />
                    </svg>
                </div>
            </a>
        <?php endif; ?>

    </div>

</div>
