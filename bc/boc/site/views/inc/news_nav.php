<div class="about-banner"
     style="background: url('<?php echo static_file('web/img/news_banner.jpg'); ?>') center no-repeat;">
    <div class="con">
        <div class="tits js-m">新闻中心</div>
        <div class="line js-m"></div>
        <div class="tit js-m">News Center</div>
    </div>
    <div class="mnav">

        <?php foreach ($mun as $value) { ?>
            <a  <?php  if($id == $value['id']){ echo "class='on'"; } ?>  href="<?php  echo site_url("news/index/".$value['id']) ?>"><?php echo $value['title']; ?></a>
        <?php } ?>
    </div>
</div>
