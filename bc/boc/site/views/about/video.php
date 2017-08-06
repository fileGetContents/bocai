<!DOCTYPE html>
<head>
    <?php include_once VIEWS . 'inc/head.php'; ?>
</head>

<html>
<body>
<div class="main">
    <?php include_once VIEWS . 'inc/header.php'; ?>
    <?php include_once VIEWS . 'inc/about_nav.php'; ?>
    <div class="video">
        <div class="title js-m f-cb">
            <span class="fl"><img width="100%" src="<?php echo static_file('web/img/index_line1_left.png'); ?>"></span>
            <div class="tits">
                <div class="t">宣传视频</div>
                <div class="t1">Promote video</div>
            </div>
            <span class="fr"><img width="100%" src="<?php echo static_file('web/img/index_line1_right.png'); ?>"></span>
        </div>
        <div class="content">
            <div class="list">
                <ul>
                    <?php foreach ($video as $v) { ?>
                        <li class="get_video" photo="<?php echo $v['files']; ?>">
                            <div class="pic">
                                <?php if (is_null($v["thumb"])) { ?>
                                    <img width="100%" src="<?php echo static_file('web/img/news_pic2.jpg'); ?>">
                                <?php } else { ?>
                                    <img width="100%" src="<?php echo 11; ?>" alt="">
                                <?php } ?>
                                <i></i>
                            </div>
                            <p><?php echo $v['title']; ?></p>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <?php include_once VIEWS . 'inc/footer.php'; ?>
</div>
<div class="v"></div>
<?php
echo static_file('web/js/main.js');
?>
<script>
    $(function () {
        $('.header .header-new .nav a').eq(1).addClass('on');
        $('.mnav a').eq(4).addClass('on');
        var w = $('.list ul li .pic').width();
        $('.list ul li .pic').css('height', w * (397 / 529));

        $(window).resize(function () {
            w = $('.list ul li .pic').width();
            $('.list ul li .pic').css('height', w * (397 / 529));
        });

        $('.get_video').click(function () {
            var photo = parseInt($(this).attr("photo"));
            if (!isNaN(photo)) {
                var video = "<?php echo site_url(); ?>/ajax/ajax_video/" + photo;
                $('.v').load(video, function () {
                    $(".v").show();
                });
            } else {
                alert("没有相关视频");
            }
        });
    })
</script>
</body>
</html>