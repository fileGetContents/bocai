<ul class="f-cb" id="masonry">
    <?php foreach ($product as $value) { ?>
        <li class="js-m">
            <a href="<?php echo site_url('product/info/'.$value['id']); ?>">
                <div class="pic"><img width="100%" src="<?php echo static_file('web/img/product_pic1.jpg'); ?>"></div>
                <div class="conn">
                    <div class="t"><?php echo $value['title'] ;?></div>
                    <div class="t1"><?php echo $value['intro'] ;?></div>
                    <div class="more">more</div>
                </div>
            </a>
        </li>
    <?php } ?>
</ul>