<!DOCTYPE html>
<head>
    <?php include_once VIEWS . 'inc/head.php'; ?>

</head>

<html>
<body>
<div class="main">
    <?php include_once VIEWS . 'inc/header.php'; ?>
    <?php include_once VIEWS . 'inc/product_nav.php'; ?>
    <div class="product-info">
        <div class="title js-m f-cb">
            <div class="tits js-m">通联生态屋<span>Ecological house</span></div>
            <div class="home">
                <a href="<?php echo site_url('product'); ?>">产品中心</a>
                <span></span>
                <a href="<?php echo site_url('product/index/'.$mum["id"] ); ?>"><?php echo $mum['title']; ?></a>
                <span></span>
                <a href="<?php echo site_url('product/info/'.$product[0]['id']); ?>"><?php echo $product[0]['title']; ?></a>
            </div>
        </div>
        <div class="content">
            <div class="tits"><?php echo $product[0]['title']; ?></div>
            <div class="list">
                <div class="list-new">
                    <div class="pic-list">
                        <ul class="f-cb">


                            <li><img width="100%" src="<?php echo static_file('web/img/product_pic4.jpg'); ?>"></li>
                            <li><img width="100%" src="<?php echo static_file('web/img/product_pic4.jpg'); ?>"></li>
                            <li><img width="100%" src="<?php echo static_file('web/img/product_pic4.jpg'); ?>"></li>
                            <li><img width="100%" src="<?php echo static_file('web/img/product_pic4.jpg'); ?>"></li>

                        </ul>
                    </div>
                </div>
                <div class="btns"></div>
            </div>
            <div class="con">
                <div class="tit">产品说明：</div>
                <!--                <table>-->
                <!--                    <tr>-->
                <!--                        <td class="t"><span>商品名称</span></td>-->
                <!--                        <td><i>熊猫酒店成都通联仿竹栏杆天府通联仿竹栏杆</i></td>-->
                <!--                    </tr>-->
                <!--                    <tr>-->
                <!--                        <td class="t"><span>产地</span></td>-->
                <!--                        <td><i>成都</i></td>-->
                <!--                    </tr>-->
                <!--                    <tr>-->
                <!--                        <td class="t"><span>规格型号</span></td>-->
                <!--                        <td><i>TL-LG</i></td>-->
                <!--                    </tr>-->
                <!--                    <tr>-->
                <!--                        <td class="t"><span>计价单位</span></td>-->
                <!--                        <td><i>米</i></td>-->
                <!--                    </tr>-->
                <!--                </table>-->
                <!--                <div class="conn">-->
                <!--                    <div class="t">-->
                <!--                        仿木就是木材的仿制品，从表面效果看，它就是我们自然界的木材。它是一种可以替代天然木材的一种新型复合材料。仿木常运用的领域有：市政建设；房产建筑；园林景观。具体细化项目有：仿木栏杆、河堤栏杆、花园栅栏；仿木地板、花架、廊架、亭子、窗套、挂板、指示牌、宣传栏；仿木摆件：花箱、树池、啤酒桶、桌凳、垃圾桶、生态隔离带；仿木用途广泛，因地制宜，可独立，可组合。仿木的发展是响应国家的政策，是中规中矩的，是国家大力推行和倡导的绿色环保节能产品，是大势所趋。仿木的推广使用，保护了有限的森林资源，促进了生态平衡，是造福子孙后代的美差——功德无量。仿木的广泛运用满足了人们对木材的喜爱之情，了却了他们的心愿，达到殊途同归的目的。-->
                <!--                    </div>-->
                <!--                </div>-->

                <?php echo $product[0]['content']; ?>

                <div class="paging f-cb">
                    <a href="<?php echo $pre_page; ?>">上一条</a>
                    <a href="<?php if ($next_page > -1) {
                        echo site_url('product/info/' . $next_page);
                    } else {
                        echo "javascript:;";
                    } ?>">下一条</a>
                    <a href="javascript:;history(-1)">返回</a>
                </div>
            </div>
        </div>
    </div>
    <?php include_once VIEWS . 'inc/footer.php'; ?>
</div>
<?php
echo static_file('web/js/main.js');
?>
<script>
    $(function () {
        $('.header .header-new .nav a').eq(3).addClass('on');
        $('.mnav a').eq(0).addClass('on');
        var ww = $(window).width();
        if (ww > 1024) {
            $('.list').removeClass('on');
        } else {
            $('.list').addClass('on');
        }

        $(window).resize(function () {
            ww = $(window).width();
            if (ww > 1024) {
                $('.list').removeClass('on');
            } else {
                $('.list').addClass('on');
            }

            if (ww < 825) {
                w = $(window).width();
            } else {
                w = $('.list .list-new .pic-list ul li').width();
            }
            $('.list .list-new .pic-list ul li').css('width', w);

        })

        var n = $('.list .list-new .pic-list ul li').length;
        for (var i = 0; i < n; i++) {
            $(".list .btns").append("<span></span>");
        }
        $('.list .btns span').eq(0).addClass('on');
        if (ww < 825) {
            var w = $(window).width();
        } else {
            var w = $('.list .list-new .pic-list ul li').width();
        }
        $('.list .list-new .pic-list ul li').css('width', w);

        $('.list .list-new .pic-list ul').css('width', w * n);

        $('.list .btns span').click(function () {
            var index = $(this).index();
            $('.list .list-new .pic-list ul').animate({marginLeft: -index * w}, 600);
            $(this).addClass('on').siblings().removeClass('on');
        })

        touch.on($(".list.on"), "swipeleft", function () {
            var index = $('.btns span.on').index();
            var last = $('.btns span:last').index();
            if (index == last) {
                index = 0;
            } else {
                index = index + 1;
            }

            $('.list .list-new .pic-list ul').animate({marginLeft: -index * w}, 600);
            $('.list .btns span').eq(index).addClass('on').siblings().removeClass('on');
        })

        touch.on($(".list.on"), "swiperight", function () {
            var index = $('.btns span.on').index();
            var last = $('.btns span:last').index();
            if (index == 0) {
                index = last;
            } else {
                index = index - 1;
            }

            $('.list .list-new .pic-list ul').animate({marginLeft: -index * w}, 600);
            $('.list .btns span').eq(index).addClass('on').siblings().removeClass('on');
        })

    })
</script>
</body>
</html>