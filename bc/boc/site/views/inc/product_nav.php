<div class="about-banner" style="background: url('<?php echo static_file('web/img/product_banner.jpg'); ?>') center no-repeat;">
	<div class="con">
		<div class="tits js-m">产品中心</div>
		<div class="line js-m"></div>
		<div class="tit js-m">products</div>
	</div>
	<div class="mnav">

		<?php  foreach ( $col_types_top as $value) {
			?>
			<a href="<?php echo site_url('product/index/'.$value['id']); ?>" class="<?php  if(floor($col_types_id)==$value['id']){echo "on" ;}?>"> <?php echo $value['title'] ?> </a>
			<?php
		} ?>

<!---->
<!--		<a href="--><?php //echo site_url('product'); ?><!--">仿木系列</a>-->
<!--		<a href="--><?php //echo site_url('product'); ?><!--">木塑产品</a>-->
<!--		<a href="--><?php //echo site_url('product'); ?><!--">仿木摆件</a>-->
<!--		<a href="--><?php //echo site_url('product'); ?><!--">仿石系列</a>-->
<!--		<a href="--><?php //echo site_url('product'); ?><!--">雕塑</a>-->
<!--		<a href="--><?php //echo site_url('product'); ?><!--">GRC构件</a>-->
	</div>
</div>