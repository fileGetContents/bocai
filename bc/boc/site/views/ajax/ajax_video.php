<div class="v-new">
    <video src="<?php echo static_file('img/' . $video[0]['origin_name']); ?>" width="100%" height="100%"
           controls="controls"></video>
    <a href="javascript:;" class="close"></a>
</div>
<script type="text/javascript">
    $('.close').click(function () {
        $('.v').hide();
    })
</script>