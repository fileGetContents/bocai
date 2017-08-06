<!DOCTYPE html>
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>

<html>
<body>
	<div class="main">
	    <?php include_once VIEWS.'inc/header.php'; ?>
	    <?php include_once VIEWS.'inc/contact_nav.php'; ?>
	    <div class="contact">
	    	<div class="title js-m f-cb">
	    		<span class="fl"><img width="100%" src="<?php echo static_file('web/img/index_line1_left.png'); ?>"></span>
	    		<div class="tits">
	    			<div class="t">联系方式</div>
	    			<div class="t1">Contact information</div>
	    		</div>
	    		<span class="fr"><img width="100%" src="<?php echo static_file('web/img/index_line1_right.png'); ?>"></span>
	    	</div>
	    	<div class="content">
	    		<div class="map" id="map"></div>
	    		<div class="con">
	    			<div class="conn">
	    				<div class="tits">成都通联市政工程有限公司</div>
	    				<div class="tit">TongLian Decoration</div>
	    				<div class="line"></div>
	    				<div class="tit1">地址：成都市龙潭工业园区成宏路18号钢铁领域B座1206室<br>联系人：总经理：黄阻拮<br>电话：028-84720078 88884488 4006555570 13808062262<br>传真：028-84725578<br>邮箱：cdtonglian@126.com<br>网址：http://www.cd-tonglian.com</div>
	    				<div class="tit2">业务咨询：</div>
	    				<div class="tit1">小曾 17780527050<br>蒋女士 18980804488<br>办公室：028-84720078 028-88884488<br>全国统一服务电话：4006555570<br>西藏分厂址：西藏林芝地区米林县仲萨村<br>联系人：唐建 13628070090</div>
	    			</div>
	    		</div>
	    	</div>
	    </div>
	    <?php include_once VIEWS.'inc/footer.php'; ?>
    </div>
<?php
	echo static_file('web/js/main.js');
?>
<script>
$(function(){
	$('.header .header-new .nav a').eq(6).addClass('on');
	$('.mnav a').eq(0).addClass('on');


})
</script>
</body>
</html>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=8cYc0EtmCDWvEBjntjIo1Wyg"></script>
<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
      createMap();//创建地图
      setMapEvent();//设置地图事件
      addMapControl();//向地图添加控件
      addMapOverlay();//向地图添加覆盖物
    }
    function createMap(){ 
      map = new BMap.Map("map"); 
      map.centerAndZoom(new BMap.Point(104.184753,30.699548),19);
    }
    function setMapEvent(){
      map.enableScrollWheelZoom();
      map.enableKeyboard();
      map.enableDragging();
      map.enableDoubleClickZoom()
    }
    function addClickHandler(target,window){
      target.addEventListener("click",function(){
        target.openInfoWindow(window);
      });
    }
    function addMapOverlay(){
      var markers = [
        {content:"",title:"",imageOffset: {width:-46,height:-21},position:{lat:30.699377,lng:104.184443}}
      ];
      for(var index = 0; index < markers.length; index++ ){
        var point = new BMap.Point(markers[index].position.lng,markers[index].position.lat);
        var marker = new BMap.Marker(point,{icon:new BMap.Icon("http://api.map.baidu.com/lbsapi/createmap/images/icon.png",new BMap.Size(20,25),{
          imageOffset: new BMap.Size(markers[index].imageOffset.width,markers[index].imageOffset.height)
        })});
        var label = new BMap.Label(markers[index].title,{offset: new BMap.Size(25,5)});
        var opts = {
          width: 200,
          title: markers[index].title,
          enableMessage: false
        };
        var infoWindow = new BMap.InfoWindow(markers[index].content,opts);
        marker.setLabel(label);
        addClickHandler(marker,infoWindow);
        map.addOverlay(marker);
      };
    }
    //向地图添加控件
    function addMapControl(){
      var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
      map.addControl(navControl);
    }
    var map;
      initMap();
  </script>