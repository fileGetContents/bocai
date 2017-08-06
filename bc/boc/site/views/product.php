<!DOCTYPE html>
<head>
    <?php include_once VIEWS . 'inc/head.php'; ?>
</head>

<html>
<body>
<div class="main">
    <?php include_once VIEWS . 'inc/header.php'; ?>
    <?php include_once VIEWS . 'inc/product_nav.php'; ?>
    <div class="product">
        <div class="title js-m f-cb">
            <div class="tits js-m">通联生态屋<span>Ecological house</span></div>
        </div>
        <div class="content">
            <div class="tits js-m">通联生态屋，我梦想中的家园</div>
            <div class="con">
                <div class="con-new js-m">
                    <div class="t">
                        曾无数次幻想我梦中家园景象?那里有清脆的绿萝，那里有新鲜的空气，那里有温暖的灯光，那里有笔直的梧桐，那里有清脆的鸟鸣...家很小，小得无法盛装其他人，憧憬很大，大到装下整个鸟语花香的自然。家是仅次于母亲怀抱的温暖港湾。它像一束柔热的阳光，可以融化掉心上的冰雪寒霜；像一鸿清澈的溪水，可以洗涤掉繁杂的尘事，回归恬静的心灵；像一褛清风，可以拂去烦恼和忧伤...家是宁静而安详的，温暖而甜蜜的，幸福而和谐的！　
                    </div>
                    <div class="t">
                        有没有那么一个家，可以满足我的小贪心，让我们离自然更贴近些?我希望，不再饱受甲醛的危害；我希望，不再忍受无休止的装修烦恼；我希望，冰冷的墙面不再单调。希望化作动力，通联生态屋应势而生。革新型的环保材料，工厂集约化的生产，多元化个性的设计。装配式安装，宛如一阵清新自然之风，满足了你对家的所有期许，梦幻的，清新的，童话的，华贵的，田园的...<br>森林是我家，家住森林中，通联生态屋，我梦想中的家园，理想已成现实进行中！
                    </div>
                    <div class="t">
                        曾无数次幻想我梦中家园景象?那里有清脆的绿萝，那里有新鲜的空气，那里有温暖的灯光，那里有笔直的梧桐，那里有清脆的鸟鸣...家很小，小得无法盛装其他人，憧憬很大，大到装下整个鸟语花香的自然。家是仅次于母亲怀抱的温暖港湾。它像一束柔热的阳光，可以融化掉心上的冰雪寒霜；像一鸿清澈的溪水，可以洗涤掉繁杂的尘事，回归恬静的心灵；像一褛清风，可以拂去烦恼和忧伤...家是宁静而安详的，温暖而甜蜜的，幸福而和谐的！　
                    </div>
                </div>
                <a href="javascript:;" class="button js-m">加载更多</a>
            </div>
            <div class="tabs js-m" id="col_id">
                <?php
                if (isset($fie)) {
                    foreach ($fie as $value) { ?>
                        <a href="javascript:;" col_id="<?php echo $value['id']; ?>"><?php echo $value['title']; ?></a>
                    <?php }
                }
                ?>
            </div>
            <div class="list">

            </div>
            <a href="javascript:;" class="click-more">more</a>
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

        $('.button').click(function () {
            if (!$(this).hasClass('on')) {
                $(this).addClass('on');
                $(this).parent().find('.con-new').css('height', 'auto');
            }
        });

        $('.tabs a').eq(0).addClass('on');
        var page = 6;
        var col_id = $("#col_id .on").attr("col_id");
        var _url = '<?php  echo site_url() . "/ajax/ajax_product/"; ?>' + col_id + "/" + page;
        $('.list').load(_url, function () {
            var $container = $('#masonry');
            $container.imagesLoaded(function () {
                $container.masonry({
                    itemSelector: '.list ul li',
                    isAnimated: true
                });
            });
            page = page + 6
        });

        $('.tabs a').click(function () {
            if (!$(this).hasClass('on')) {
                $(this).addClass('on').siblings().removeClass('on');
                col_id = $("#col_id .on").attr("col_id");
                page=6;
                $('.list').load('<?php  echo site_url(). "/ajax/ajax_product/"; ?>' + col_id + "/" + page, function () {
                    var $container = $('#masonry');
                    $container.imagesLoaded(function () {
                        $container.masonry({
                            itemSelector: '.list ul li',
                            isAnimated: true
                        });
                    });
                });
            }
        });

        var i = 1;
        $('.click-more').click(function () {
            page = page + 6;
            var Html = $.ajax({
                    url: '<?php  echo site_url() . "/ajax/ajax_product/"; ?>' + col_id + "/" + page,
                    success: function (msg) {
                        var _str = $.parseHTML(msg, document, true);
                        var $container = $('#masonry');
                        $container.imagesLoaded(function () {
                            $container.append(_str);
                            adTimer = setInterval(function () {
                                i++;
                                if (i == 6) {
                                    clearInterval(adTimer);
                                    i = 0;
                                    $container.masonry('appended', _str);
                                }
                            }, 100);
                            page = page + 6
                        });
                    }
                })
                ;
        })
    })
</script>
</body>
</html>