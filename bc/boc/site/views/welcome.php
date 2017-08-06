<!DOCTYPE html>
<head>
    <?php include_once VIEWS . 'inc/head.php'; ?>
</head>

<html>
<body>
<div class="main">
    <?php include_once VIEWS . 'inc/header.php'; ?>
    <div class="index-banner">
        <ul>


            <li style="background: url('<?php echo static_file('web/img/index_banner.jpg'); ?>') center no-repeat;">
                <div class="con">
                    <div class="tits t">用通联仿木 享低碳生活</div>
                    <div class="tit t">With the tonglian wood to enjoy low-carbon life</div>
                    <div class="line t"></div>
                    <div class="tit2 t">通联，心心想通，心心相联</div>
                    <a href="<?php echo site_url('about'); ?>" class="tit1 t">了解我们</a>
                </div>
            </li>


            <li style="background: url('<?php echo static_file('web/img/index_banner.jpg'); ?>') center no-repeat;">
                <div class="con">
                    <div class="tits t">用通联仿木 享低碳生活</div>
                    <div class="tit t">With the tonglian wood to enjoy low-carbon life</div>
                    <div class="line t"></div>
                    <div class="tit2 t">通联，心心想通，心心相联</div>
                    <a href="<?php echo site_url('about'); ?>" class="tit1 t">了解我们</a>
                </div>
            </li>
            <li style="background: url('<?php echo static_file('web/img/index_banner.jpg'); ?>') center no-repeat;">
                <div class="con">
                    <div class="tits t">用通联仿木 享低碳生活</div>
                    <div class="tit t">With the tonglian wood to enjoy low-carbon life</div>
                    <div class="line t"></div>
                    <div class="tit2 t">通联，心心想通，心心相联</div>
                    <a href="<?php echo site_url('about'); ?>" class="tit1 t">了解我们</a>
                </div>
            </li>
            <li style="background: url('<?php echo static_file('web/img/index_banner.jpg'); ?>') center no-repeat;">
                <div class="con">
                    <div class="tits t">用通联仿木 享低碳生活</div>
                    <div class="tit t">With the tonglian wood to enjoy low-carbon life</div>
                    <div class="line t"></div>
                    <div class="tit2 t">通联，心心想通，心心相联</div>
                    <a href="<?php echo site_url('about'); ?>" class="tit1 t">了解我们</a>
                </div>
            </li>


        </ul>
        <div class="btns"></div>
    </div>
    <div class="index">
        <div class="index-about">
            <div class="title js-m f-cb">
                <span class="fl"><img width="100%"
                                      src="<?php echo static_file('web/img/index_line1_left.png'); ?>"></span>
                <div class="tits">
                    <div class="t">关于通联</div>
                    <div class="t1">about us</div>
                </div>
                <span class="fr"><img width="100%"
                                      src="<?php echo static_file('web/img/index_line1_right.png'); ?>"></span>
            </div>
            <div class="content f-cb">
                <div class="con">
                    <div class="tits js-m">成都通联市政工程有限公司</div>
                    <div class="tit js-m">
                        成都通联市政工程有限公司是设计、生产、施工为一体的“仿木产品”、“仿石”、“GRC构件”专业性公司，全力以赴服务于市政建设、房产建筑、园林景观。公司座落于交通便利的三环路十陵立交旁（十陵镇东洪路中段319号）。生产场地12300.00㎡；历经二十载的磨砺，蕴育出一支97人的团队……
                    </div>
                    <a class="more js-m" href="<?php echo site_url('about'); ?>">more</a>
                    <div class="list js-m">
                        <a href="<?php echo site_url('about/culture'); ?>">
                            <i class="i1"></i>
                            <p>企业文化</p>
                        </a>
                        <a href="<?php echo site_url('about/honor'); ?>">
                            <i class="i2"></i>
                            <p>荣誉资质</p>
                        </a>
                        <a href="<?php echo site_url('about/history'); ?>">
                            <i class="i3"></i>
                            <p>发展历程</p>
                        </a>
                        <a href="<?php echo site_url('about/video'); ?>">
                            <i class="i4"></i>
                            <p>视频宣传</p>
                        </a>
                    </div>
                </div>
                <div class="pic js-m"><img width="100%" src="<?php echo static_file('web/img/index_pic5.png'); ?>">
                </div>
            </div>
        </div>
        <div class="index-product">
            <div class="product-new">
                <div class="title js-m f-cb">
                    <span class="fl"><img width="100%" src="<?php echo static_file('web/img/index_line2_left.png'); ?>"></span>
                    <div class="tits">
                        <div class="t">产品中心</div>
                        <div class="t1">products</div>
                    </div>
                    <span class="fr"><img width="100%"
                                          src="<?php echo static_file('web/img/index_line2_right.png'); ?>"></span>
                </div>
                <div class="txt js-m">
                    我们是设计、生产、施工为一体的“仿木产品、仿石、GRC构件、专业性公司，全力以赴服务于市政建设、房产建筑、园林景观。公司现专注于“仿木产品”、“仿石”、“GRC构件”的开发与创新，不断适应社会、市场之需求。
                </div>
                <div class="list js-m">
                    <ul class="f-cb">

                        <?php $num = 0;
                        foreach ($product as $value) { ?>
                            <li class="<?php if ($num % 2 == 0) {
                                echo "l";
                            } ?>">
                                <a href="<?php echo site_url('product'); ?>">
                                    <div class="pic">
                                        <img width="100%" src="<?php echo static_file('web/img/index_pic1.jpg'); ?>">
                                        <div class="bg"></div>
                                    </div>
                                    <div class="tits">
    									<span>
    										<i>0<?php echo $num + 1; ?></i>
    										<em><?php echo $value['column']; ?></em>
    									</span>
                                    </div>
                                </a>
                            </li>
                            <?php $num++;
                        } ?>


                        <!--                        <li>-->
                        <!--                            <a href="--><?php //echo site_url('product'); ?><!--">-->
                        <!--                                <div class="pic">-->
                        <!--                                    <img width="100%" src="-->
                        <?php //echo static_file('web/img/index_pic2.jpg'); ?><!--">-->
                        <!--                                    <div class="bg"></div>-->
                        <!--                                </div>-->
                        <!--                                <div class="tits">-->
                        <!--    									<span>-->
                        <!--    										<i>02</i>-->
                        <!--    										<em>通联生态屋</em>-->
                        <!--    									</span>-->
                        <!--                                </div>-->
                        <!--                            </a>-->
                        <!--                        </li>-->
                        <!--                        <li class="l">-->
                        <!--                            <a href="--><?php //echo site_url('product'); ?><!--">-->
                        <!--                                <div class="pic">-->
                        <!--                                    <img width="100%" src="-->
                        <?php //echo static_file('web/img/index_pic3.jpg'); ?><!--">-->
                        <!--                                    <div class="bg"></div>-->
                        <!--                                </div>-->
                        <!--                                <div class="tits">-->
                        <!--    									<span>-->
                        <!--    										<i>03</i>-->
                        <!--    										<em>木塑产品</em>-->
                        <!--    									</span>-->
                        <!--                                </div>-->
                        <!--                            </a>-->
                        <!--                        </li>-->
                        <!--                        <li>-->
                        <!--                            <a href="--><?php //echo site_url('product'); ?><!--">-->
                        <!--                                <div class="pic">-->
                        <!--                                    <img width="100%" src="-->
                        <?php //echo static_file('web/img/index_pic4.jpg'); ?><!--">-->
                        <!--                                    <div class="bg"></div>-->
                        <!--                                </div>-->
                        <!--                                <div class="tits">-->
                        <!--    									<span>-->
                        <!--    										<i>04</i>-->
                        <!--    										<em>仿木摆件</em>-->
                        <!--    									</span>-->
                        <!--                                </div>-->
                        <!--                            </a>-->
                        <!--                        </li>-->
                        <!--                        <li class="l">-->
                        <!--                            <a href="--><?php //echo site_url('product'); ?><!--">-->
                        <!--                                <div class="pic">-->
                        <!--                                    <img width="100%" src="-->
                        <?php //echo static_file('web/img/index_pic1.jpg'); ?><!--">-->
                        <!--                                    <div class="bg"></div>-->
                        <!--                                </div>-->
                        <!--                                <div class="tits">-->
                        <!--    									<span>-->
                        <!--    										<i>05</i>-->
                        <!--    										<em>仿木系列</em>-->
                        <!--    									</span>-->
                        <!--                                </div>-->
                        <!--                            </a>-->
                        <!--                        </li>-->
                        <!--                        <li>-->
                        <!--                            <a href="--><?php //echo site_url('product'); ?><!--">-->
                        <!--                                <div class="pic">-->
                        <!--                                    <img width="100%" src="-->
                        <?php //echo static_file('web/img/index_pic2.jpg'); ?><!--">-->
                        <!--                                    <div class="bg"></div>-->
                        <!--                                </div>-->
                        <!--                                <div class="tits">-->
                        <!--    									<span>-->
                        <!--    										<i>06</i>-->
                        <!--    										<em>通联生态屋</em>-->
                        <!--    									</span>-->
                        <!--                                </div>-->
                        <!--                            </a>-->
                        <!--                        </li>-->
                        <!--                        <li class="l">-->
                        <!--                            <a href="--><?php //echo site_url('product'); ?><!--">-->
                        <!--                                <div class="pic">-->
                        <!--                                    <img width="100%" src="-->
                        <?php //echo static_file('web/img/index_pic3.jpg'); ?><!--">-->
                        <!--                                    <div class="bg"></div>-->
                        <!--                                </div>-->
                        <!--                                <div class="tits">-->
                        <!--    									<span>-->
                        <!--    										<i>07</i>-->
                        <!--    										<em>木塑产品</em>-->
                        <!--    									</span>-->
                        <!--                                </div>-->
                        <!--                            </a>-->
                        <!--                        </li>-->
                    </ul>
                    <div class="btns f-cb">
                        <a href="javascript:;" class="prev left"></a>
                        <a href="javascript:;" class="next right"></a>
                        <div class="btns-new"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="index-news">
            <div class="title js-m f-cb">
                <span class="fl"><img width="100%"
                                      src="<?php echo static_file('web/img/index_line2_left.png'); ?>"></span>
                <div class="tits">
                    <div class="t">新闻中心</div>
                    <div class="t1">news</div>
                </div>
                <span class="fr"><img width="100%"
                                      src="<?php echo static_file('web/img/index_line2_right.png'); ?>"></span>
            </div>
            <div class="list">
                <ul class="f-cb">
                    <?php foreach ($news as $value) { ?>
                        <li class="js-m">
                            <a href="<?php echo site_url('news/info/' . $value['id']); ?>">
                                <div class="con">
                                    <div class="tits"><?php echo $value['title']; ?></div>
                                    <div class="tit"><?php echo $value['intro']; ?></div>
                                    <div class="icon"></div>
                                </div>
                                <div class="time"><?php echo date("Y-m-d ", $value['timeline']); ?></div>
                            </a>
                        </li>
                    <?php } ?>
                    <!--                    <li class="js-m">-->
                    <!--                        <a href="--><?php //echo site_url('news/info'); ?><!--">-->
                    <!--                            <div class="con">-->
                    <!--                                <div class="tits">竞选稿——争做领路人</div>-->
                    <!--                                <div class="tit">各位父老乡亲： 大家上午好！ 我是千厢8队的村民——黄祖杰，至今家里还有一亩三分地，我感恩乡土对我的哺育……</div>-->
                    <!--                                <div class="icon"></div>-->
                    <!--                            </div>-->
                    <!--                            <div class="time">2016-12-06</div>-->
                    <!--                        </a>-->
                    <!--                    </li>-->
                    <!--                    <li class="js-m">-->
                    <!--                        <a href="--><?php //echo site_url('news/info'); ?><!--">-->
                    <!--                            <div class="con">-->
                    <!--                                <div class="tits">通联的生态屋</div>-->
                    <!--                                <div class="tit">没有亲眼所见，就不用急着用你的嘴巴来证明。对不知道的事，直接说“不知道”才是最轻松的。</div>-->
                    <!--                                <div class="icon"></div>-->
                    <!--                            </div>-->
                    <!--                            <div class="time">2016-12-06</div>-->
                    <!--                        </a>-->
                    <!--                    </li>-->
                </ul>
            </div>
        </div>
    </div>
    <?php include_once VIEWS . 'inc/footer.php'; ?>
</div>
<?php
echo static_file('web/js/main.js');
?>
<script type="text/javascript">
    $(function () {
        $('.header .header-new .nav a').eq(0).addClass('on');
    })
</script>
</body>
</html>