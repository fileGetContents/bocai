<!DOCTYPE html>
<head>
  <meta name="Keywords" content="<?php echo $header['tags'];?>"/>
  <meta name="Description" content="<?php echo $header['intro'];?>"/>
  <title><?php echo $header['title'];?></title>
  <script>
    var STATIC_URL  = "<?php echo STATIC_URL;?>" ;
    var UPLOAD_URL  = "<?php echo UPLOAD_URL;?>" ;
    var GLOBAL_URL = "<?php echo GLOBAL_URL;?>index.php/";
    var SITE_URL = "<?php echo site_url().'/';?>";
    var UPLOADDO_URL = "<?php echo SITE_URL.'upload/';?>";
    var STATIC_VER = "<?php echo STATIC_V;?>";

    var ADMINER_URL = "<?php echo SITE_URL;?>" ;
    var UPLOADDO_URL = "<?php echo SITE_URL.'/upload/';?>";
  </script>
  <?php
  echo static_file('web/css/reset.css');
  echo static_file('web/css/style.css');
  echo static_file('web/css/dealer.css');
  echo static_file('jQuery.js');
  ?>

  <script type="text/javascript" src="http://api.map.baidu.com/api?v=1.4"></script>
  <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=kix3GgvM7U7OKK3aZjNHUNTb"></script>
</head>
<body>

  <div class="">
   <div class="">
    <p class="">城市门店</p>
    <span class="">
     <select id="sel_region" name="sel_region" onchange="region_change(this.value,'0');cityCenter()">
      <option value="0" <?php if($region == '') echo 'selected';?>>请选择</option>
      <?php foreach($region_data as $row){ ?>
      <option value="<?php echo $row->yid;?>" <?php if($region == $row->title) echo 'selected';?>><?php echo $row->title;?></option>
      <?php } ?>
    </select>
    <select id="sel_city" name="sel_city" onchange="jxs_change('0'); cityCenter($(this));">
      <option value="0" <?php if(empty($city_data)) echo 'selected';?>>请选择</option>
      <?php if(!empty($city_data)){ foreach($city_data as $list){ ?>
      <option value="<?php echo $list->yid;?>" <?php if($city == $list->title) echo 'selected'?>><?php echo $list->title;?></option>
      <?php }}?>
    </select>
  </span>
  <span class="">请选择位置 : &nbsp;&nbsp;</span>
</div>
<div class="netmap">
  <div class="mapBox" id="mapBox"></div>
  <div class="mapControlBtn on" id="mapControlBtn" data-state="1"></div>
  <div class="addrBox shadowBox" id="addrBox">
   <a href="javascript:void(0)" id="mapTopBtn" class="mapTopBtn"></a>
   <div class="mapMsgBox" id="mapMsgBox">
    <ul id="msgContent">
    </ul>
  </div>
  <a href="javascript:void(0)" id="mapBottBtn" class="mapBottBtn"></a>
</div>
</div>
</div>

<?php
echo static_file('web/js/dealer.js');
echo static_file('web/js/mapFun.js');
?>
<script type="text/javascript">
  initMap();
  scollBox();
</script>
<script type="text/javascript">
  $(function(){
   $(".map-row").click(function(){
    if($(this).attr("class").indexOf("sleft") != -1){
     $(".addrpobox").stop().animate({"width":250},300);
     $(this).removeClass("sleft");
   }else{

     $(".addrpobox").stop().animate({"width":0},300);
     $(this).addClass("sleft");
   }
 })
 })
</script>
<?php include_once VIEWS.'inc/footer.php'; ?>
</body>
</html>