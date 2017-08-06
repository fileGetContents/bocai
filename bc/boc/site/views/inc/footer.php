<div class="footer" id="footer">
    <div class="button"><span>在线留言</span></div>
    <div class="footer-new">
        <div class="foott f-cb">
            <input type="text" hidden="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                   value="<?php echo $this->security->get_csrf_token_name(); ?>">
            <div class="table">
                <div class="title">message</div>
                <div class="table-new">
                    <div class="t f-cb">
                        <div class="t-new left">
                            <div class="tt"><span>Name</span>您的名字</div>
                            <input type="text" class="text" name="username">
                        </div>
                        <div class="t-new right">
                            <div class="tt"><span>Phone</span>您的电话</div>
                            <input type="text" class="text" name="telphone">
                        </div>
                    </div>
                    <div class="t1">
                        <div class="tits"><span>Content</span>把您的需求和想法告诉我们</div>
                        <textarea class="txt" name="content"></textarea>
                    </div>
                    <input type="submit" class="submit" value="提交" name="sendpost"/>
                </div>
            </div>

            <div class="con">
                <div class="tits">全国统一服务热线：</div>
                <div class="tit">4006-5555-70</div>
                <div class="tit1">办公地址<span>成都市龙潭工业园成宏路18号钢铁领域B座1206室</span></div>
                <div class="tit1">厂区地址<span>成都：成都市龙泉驿区十陵镇来龙村东洪路中段319号<br>淮口：成都市金堂淮口镇成阿工业园区现代大道<br>峨眉：峨眉山七里坪<br>林芝：西藏林芝地区来林县仲萨村</span>
                </div>
                <div class="tit2">
                    电话：<span>028-84720078 88884488 4006555570 13808062262</span><br>传真：<span>028-84725578</span><br>邮箱：<span>cdtonglian@126.com</span>
                </div>
            </div>
        </div>
        <div class="line">
            <i class="i1"></i>
            <i class="i2"></i>
        </div>
        <div class="foottt f-cb">
            <div class="tits"><span>Copyright © 2017</span> 成都通联市政工程有限公司 <a target="_blank" title="网站建设"
                                                                            href="http://www.cdbocweb.com/" class="t-c">网站建设</a>：<a
                    target="_blank" title="网站建设" href="http://www.cdbocweb.com/" class="t-c">博采网络</a></div>
            <div class="link js-noclick">
                <div class="tits"><span>Links</span></div>
                <ul class="">

                    <?php foreach($href as $value){
                        ?>
                        <li><a href="<?php echo $value['link'] ?>" target="_blank"><?php echo $value['title']; ?></a></li>
                    <?php } ?>

                </ul>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url('static/js.bak/jquery.validate.js') ?>"></script>
<script type="text/javascript">
    $(function () {
        $('.link .tits').click(function () {
            $('.link ul').slideToggle();
        });

        $(document).click(function (e) {
            if ((!$(e.target).parents().hasClass('js-noclick') && !$(e.target).hasClass('js-noclick'))) {
                $(".link ul").slideUp();
            }
        });

        $(window).scroll(function () {
            $(".link ul").slideUp();
        });

        $('.button').click(function () {
            if ($(this).hasClass('on')) {
                $(this).removeClass('on');
                $('.footer .footer-new .foott .table').slideUp();
            } else {
                $(this).addClass('on');
                $('.footer .footer-new .foott .table').slideDown();
            }
        });

        $("input[name=sendpost]").click(function () {
            $.ajax({
                url: "<?php echo site_url('feedback/sendpost'); ?>",
                data: "username="+$("input[name=username]").val() + "&telphone=" +
                     $("input[name=telphone]").val() + "&content=" +
                     $("input[type=content]").val() + "&_scfs=" +
                     $("input[name=_scfs]").val()
                ,
                dataType: "json",
                success: function ($data) {
                      if($data.status==1){
                          alert($data.msg)
                      }
                },
                error: function ($data) {
                   console.log($data)
                }
            })
        });
//        $("#feedback").validate({
//            submitHandler: function () {
//        $.ajax({
//            url: "<?php //echo site_url('feedback/sendpost'); ?>//",
//            data: {
//                username: $("input[name=username]").val(),
//                telphone: $("input[name=telphone]").val(),
//                content: $("input[type=content]").val()
//            },
//            dataType: "json",
//            success: function () {
//
//            },
//            error: function () {
//
//            }
//        })
//            },
//            rules: {
//                username: {
//                    require: true
//                },
//                telphone: {
//                    require: true
//                },
//                content: {
//                    require: true
//                },
//                message: {
//                    username: {
//                        require: "请填写您的名字"
//                    },
//                    telphone: {
//                        require: "请填写你的电话号码"
//                    },
//                    content: {
//                        require: "请填写你的想法和需求"
//                    }
//                }
//
//            }
//        })


    })
</script>