<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href ="<?php echo base_url("static/fallnew")."/";?>"/>
    <link rel="stylesheet" href="css/result.css" />
    <link rel="stylesheet" href="css/new.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.10/css/uikit.min.css" />
</head>
<body>
	<div class="svgbox uk-align-center" id="mysvgbox">
      <!--<svg 
        xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink" 
        version="1.1"
        width="100%" height="100%"
      >
        background
        <image  x="0" y="0" width="100%" xlink:href="./static/Rectangle.svg"></image>
        moon
        <image  id="moon2" x="95%" y="24%" width="11%" xlink:href="./static/Oval Copy 3.svg"></image>
        <image  id="moon1" x="-10%" y="10%" width="16%" xlink:href="./static/Group.svg"></image>
        <image  id="moon3" x="80%" y="63%" width="14%" xlink:href="./static/Oval Copy 3.svg"></image>
        cloud
        <image  id="cloud1" x="-8%" y="23%" width="16%" xlink:href="./static/cloud1.svg"></image>
        <image  id="cloud2" x="45%" y="-13%" width="45%" xlink:href="./static/cloud2.svg"></image>
        <image  id="cloud3" x="60%" y="-13%" width="35%" xlink:href="./static/cloud3.svg"></image>
        <image  id="cloud4" x="95%" y="35%" width="10%" xlink:href="./static/cloud4.svg"></image>
        <image  id="cloud5" x="30%" y="61%" width="18%" xlink:href="./static/cloud5.svg"></image>
        line
        <image  id="line" x="0%" y="2%" width="100%"
         xlink:href="./static/line.svg"></image>
        title
        <image  id="title" x="30%" y="37%" width="40%"
         xlink:href="./static/UIslices/PAPIC.png"></image>
        word
        <text id="svgtext" opacity="0" x="32.5%" y="48%" fill="white"><?php echo $status?></text>
        word-underline
        <line id="textline" opacity="0" x1="25%" y1="41.5%" x2="75%" y2="41.5%" stroke="white" stroke-width="2"/>
      </svg>-->
    </div>
    <div class="uk-margin-large-bottom uk-margin-small-top">
    	<div class="uk-card uk-card-default uk-card-body uk-width-2-5@l uk-width-4-5@s uk-align-center">
    		<div class="uk-card-badge uk-label">Tips</div>
            <h2 class="uk-card-title">温馨提示:</h2>
            <?php if ($status=='欢迎关注浙大勤创!') { ?>
                <p><?php echo $text ?></p>
            <?php }else{ ?>
                <p>你已报名成功，</p>
                <p>请认真核对稍后发到手机上的信息，确认志愿填写无误。若有错误，请重新填写报名表。</p>
                <p>后续信息将会在几日内以短信形式通知，请注意查收。</p>
                <p>祝你好运喔！</p>
            <?php } ?>
        </div>
    </div>
    <footer class="uk-align-center uk-text-center">PAPIC@2018</footer>
</body>
</html>
<!-- svg js -->
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/svg.js/2.6.5/svg.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  if (typeof SVGRect !== "undefined") 
  {  /* If the browser does support SVG. */ 
    //alert("support svg!");
    //alert($(".svgbox #moon2").attr("xlink:href"));
    //$("embed").hide();
  }
  else 
  {  /* If the browser does not support SVG. */ 
    UIkit.notification({
        message: '请您更换内核更高的浏览器！!',
        status: 'danger',
        pos: 'top-center',
        timeout: 3000
    });
  }
  
  var draw = SVG('mysvgbox').size('100%','100%');
  var image = draw.image('static/Rectangle.png');
  image.attr({x:0,y:0,id:'svgboxbgpic'});
  image.size('100%');
  $("#svgboxbgpic").css('height','auto')

  var moon1 = draw.image('static/Group.svg');
  moon1.attr({width:'16%',height:'16%',x:'-10%',y:'10%'});
  moon1.animate({duration:1500}).move('20%','10%')
       .animate({duration:300}).move('22%','10%')
       .animate({duration:300}).move('20%','10%')
       .animate({duration:300}).move('22%','10%');

  var moon2 = draw.image('static/Oval Copy 3.svg');
  moon2.attr({width:'11%',height:'11%',x:'95%',y:'24%'});
  moon2.animate({duration:3000}).move('65%','24%');   

  var moon3 = draw.image('static/Oval Copy 3.svg');
  moon3.attr({width:'14%',height:'14%',x:'80%',y:'63%'});

  var cloud1 = draw.image('static/cloud1.svg');
  cloud1.attr({width:'18%',height:'30%',x:'-10%',y:'23%'});
  cloud1.animate({duration:1500}).move('-2%','23%')
        .animate(300).move('-3%','23%')
        .animate(500).move('-1%','23%');  

  var cloud2 = draw.image('static/cloud2.svg');
  cloud2.attr({width:'45%',height:'27%',x:'45%',y:'-13%'});
  cloud2.animate(1500).move('45%','-2%')
        .animate(300).move('45%','-4%')
        .animate(500).move('45%','-2%');

  var cloud3 = draw.image('static/cloud3.svg');
  cloud3.attr({width:'35%',height:'23%',x:'60%',y:'-13%'});
  cloud3.animate(1500).move('60%','-2%')
        .animate(250).move('60%','-6%')
        .animate(500).move('60%','-3%');     

  var cloud4 = draw.image('static/cloud4.svg');
  cloud4.attr({width:'9%',height:'15%',x:'97%',y:'35%'});
  cloud4.animate(1500).move('91%','35%')
        .animate(300).move('92%','35%')
        .animate(500).move('91%','35%');

  var cloud5 = draw.image('static/cloud5.svg');
  cloud5.attr({width:'18%',height:'15%',x:'30%',y:'61%'}); 
  cloud5.animate(2000).move('30%','55%');

  var line = draw.image('static/line.svg');
  line.attr({width:'100%',height:'100%',x:'0',y:'-2%'});
  line.animate(2000).move('0','-12%')
      .animate(2000).move('0','-6%');  

  var title = draw.image('static/UIslices/PAPIC.png');
  title.attr({width:'40%',height:'15%',x:'30%',y:'37%'});
  title.animate(1500).move('30%','25%')
       .animate(1500).move('30%','30%');

  var text = draw.text("浙大勤创秋季纳新");
  text.attr({x:'32.5%',y:'48%',fill:'white',opacity:0})
  text.animate({duration:1000,delay:3000}).attr({opacity:1});

  var textline = draw.line().stroke({width:2});
  textline.attr({x1:"25%",y1:"45%",x2:"25%",y2:"45%",stroke:"white",opacity:0});
  textline.animate({duration:300,delay:3500}).attr({opacity:0.8,x2:'75%'});
})
</script>