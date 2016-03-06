<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>企业网站</title>
<meta name="keywords" content="企业网站" />
<meta name="description" content="企业网站" />
<link href="<?php echo (TEMDIR_URL); ?>css/templatemo_style.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" type="text/css" href="<?php echo (TEMDIR_URL); ?>css/ddsmoothmenu.css" />
<script type="text/javascript" src="<?php echo (TEMDIR_URL); ?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo (TEMDIR_URL); ?>js/ddsmoothmenu.js">

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>
<link rel="stylesheet" type="text/css" href="css/style1.css" />
<script language="javascript" type="text/javascript" src="js/jquery.js"></script>
<script language="javascript" type="text/javascript" src="js/jquery.easing.js"></script>
<script language="javascript" type="text/javascript" src="js/script.js"></script>
<script type="text/javascript">
 $(document).ready( function(){	
		var buttons = { previous:$('#lofslidecontent45 .lof-previous') ,
						next:$('#lofslidecontent45 .lof-next') };
						
		$obj = $('#lofslidecontent45').lofJSidernews( { interval : 4000,
												direction		: 'opacitys',	
											 	easing			: 'easeInOutExpo',
												duration		: 1200,
												auto		 	: false,
												maxItemDisplay  : 4,
												navPosition     : 'horizontal', // horizontal
												navigatorHeight : 32,
												navigatorWidth  : 80,
												mainWidth:940,
												buttons			: buttons} );	
	});
</script>
 
</head>

<body>

<div id="templatemo_wrapper">
	
    <div id="templatmeo_header">
    	<div id="site_title"><h1><a href="#">南宁网站建设</a></h1></div>
        <div id="templatemo_search">
            <form action="#" method="get">
              <input type="text" value="Search" name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
              <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
            </form>
        </div>
        
        <div class="cleaner"></div>
    </div> <!-- END of header -->
    
    <div id="templatemo_menu" class="ddsmoothmenu">
        <ul>
            <li><a href="index.html" class="selected">首页<span>Start here</span></a></li>
            <li><a href="about.html">关于我们<span>Who we are</span></a>
                <ul>
                    <li><a href="#">联系我们</a></li>
                    <li><a href="#">我们的宗旨</a></li>
                    <li><a href="#">服务项目</a></li>
                </ul>
            </li>
            <li><a href="portfolio.html">在线帮助<span>What we have done</span></a>
                <ul>
                    <li><a href="#">Sub menu 1</a></li>
                    <li><a href="#">Sub menu 2</a></li>
                    <li><a href="#">Sub menu 3</a></li>
                    <li><a href="#">Sub menu 4</a></li>
                    <li><a href="#">Sub menu 5</a></li>
               </ul>
			</li>
			<li><a href="blog.html">资料分享<span>Our latest news</span></a></li>
			<li><a href="contact.html">联系我们<span>Get to us</span></a></li>
        </ul>
        <br style="clear: left" />
    </div> <!-- END of menu -->

    <div id="templatemo_slider">
		<div id="lofslidecontent45" class="lof-slidecontent" style="width:940px; height:340px;">
	<div class="preload"><div></div></div>
 <!-- MAIN CONTENT --> 
  <div class="lof-main-outer" style="width:940px; height:340px;">
  	<ul class="lof-main-wapper">
  		<li>
            <img src="<?php echo (TEMDIR_URL); ?>images/slider/thumbl_980x340.png" title="Newsflash 1" alt="Slider 01" />           
            <div class="lof-main-item-desc">
                <h3><a target="_parent" title="Newsflash 1" href="#Category-1">/ Newsflash 1 /</a> <i> — Monday, February 25, 2048 18:25</i></h3>
                <h2>Template 2.5 version released</h2>
                <p>One thing about Web Design, it always changes! Template makes it easy to edit buttons, pages, contents, etc...
                <a class="readmore" href="#">Read more </a>
                </p>
            </div>
        </li> 
       <li>
       	  <img src="<?php echo (TEMDIR_URL); ?>images/slider/thumbl_980x340_002.png" title="Newsflash 2" alt="Slider 02" />           
          	 <div class="lof-main-item-desc">
                <h3><a target="_parent" title="Newsflash 2" href="#Category-2">/ Newsflash 2 /</a> 	<i> — Sunday, February 24, 2048 11:08</i></h3>
                <h2>Template Design packs updated</h2>
                <p>Template makes it easy to launch a Web site of any kind. Whether you want a brochure site or you are...
                <a class="readmore" href="#">Read more </a>
                </p>
             </div>
        </li> 
       <li>
       	  <img src="<?php echo (TEMDIR_URL); ?>images/slider/thumbl_980x340_003.png" title="Newsflash 3" alt="Slider 03" />            
          	<div class="lof-main-item-desc">
                <h3><a target="_parent" title="Newsflash 3" href="#Category-3">/ Newsflash 3 /</a> 	<i> — Tuesday, February 19, 2048 09:50</i></h3>
                <h2>Free Template extensions available</h2>
                <p>With a library of thousands of free templates, you can add what you need as your site grows. Don't...
                <a class="readmore" href="#">Read more </a>
                </p>
             </div>
        </li> 
		
        <li>
			<img src="<?php echo (TEMDIR_URL); ?>images/slider/thumbl_980x340_004.png" title="Newsflash 4" alt="Slider 04" />            
          	<div class="lof-main-item-desc">
                <h3><a target="_parent" title="Newsflash 4" href="#Category-4">/ Newsflash 4 /</a>	<i> — Sunday, February 17, 2048 20:40</i></h3>
                <h2>Free Web Design tips</h2>
                <p>Sed pretium fermentum tellus id feugiat. Quisque in congue ante. Aliquam pretium condimentum orci vel consequat...
                <a class="readmore" href="#">Read more </a>
                </p>
             </div>
        </li> 
        
        <li>
			<img src="<?php echo (TEMDIR_URL); ?>images/slider/thumbl_980x340_005.png" title="Newsflash 5" alt="Slider 05" />            
          	<div class="lof-main-item-desc">
                <h3><a target="_parent" title="Newsflash 5" href="#">/ Newsflash 5 /</a>	<i> — Monday, February 11, 2048 11:48</i></h3>
               <h2>Try CSS for free</h2>
                <p>Nam odio dolor, tincidunt id ornare sit amet, dignissim sed risus. Nam tortor mi, eleifend ut hendrerit sit amet...
                <a class="readmore" href="#">Read more </a>
                </p>
             </div>
        </li> 
		
        <li>

			<img src="<?php echo (TEMDIR_URL); ?>images/slider/thumbl_980x340_006.png" title="Newsflash 6" alt="Slider 06" />            
          	<div class="lof-main-item-desc">
                <h3><a target="_parent" title="Newsflash 6" href="#">/ Newsflash 6 /</a>	<i> — Sunday, February 10, 2048 13:36</i></h3>
                <h2>Getting to know about dedicated server</h2>
                <p>Pellentesque sit amet ipsum nibh. Pellentesque cursus eleifend tempus. Fusce augue nisl, pretium id, porta quis nisl...
                <a class="readmore" href="#">Read more </a>
                </p>
             </div>
        </li> 
        <li>
			<img src="<?php echo (TEMDIR_URL); ?>images/slider/thumbl_980x340_007.png" title="Newsflash 7" alt="Slider 07" />            
          	<div class="lof-main-item-desc">
                <h3><a target="_parent" title="Newsflash 7" href="#">/ Newsflash 7 /</a>	<i> — Friday, February 08, 2048 10:22</i></h3>
                <h2>How to be aware of free subdomains</h2>
                <p>Donec commodo elit eu nunc varius viverra. Donec gravida orci quis semper sapien arcu faucibus commodo...
                <a class="readmore" href="#">Read more </a>
                </p>
             </div>
        </li> 
        <li>
			<img src="<?php echo (TEMDIR_URL); ?>images/slider/thumbl_980x340_008.png" title="Newsflash 8" alt="Slider 08" />            
          	<div class="lof-main-item-desc">
                <h3><a target="_parent" title="Newsflash 8" href="#">/ Newsflash 8 /</a>	<i> — Wednesday, February 04, 2048 17:28</i></h3>
                <h2>SSL security professionals</h2>
                <p>Cras tincidunt turpis ut ligula vestibulum interdum. Vestibulum semper sapien ut risus posuere interdum...
                	<a class="readmore" href="#">Read more </a>
                </p>
             </div>
        </li> 
      </ul>  	
	</div>
	<!-- END MAIN CONTENT --> 
    <!-- NAVIGATOR -->
	<div class="lof-navigator-wapper">

        <div onclick="return false" class="lof-next">Next</div>
		<div class="lof-navigator-outer">
            <ul class="lof-navigator">
               <li><img src="<?php echo (TEMDIR_URL); ?>images/slider/thumbs/thumbl_980x340.png" alt="Image 01" /></li>
               <li><img src="<?php echo (TEMDIR_URL); ?>images/slider/thumbs/thumbl_980x340_002.png" alt="Image 01" /></li>
               <li><img src="<?php echo (TEMDIR_URL); ?>images/slider/thumbs/thumbl_980x340_003.png" alt="Image 02" /></li>
               <li><img src="<?php echo (TEMDIR_URL); ?>images/slider/thumbs/thumbl_980x340_004.png" alt="Image 03" /></li>    
               <li><img src="<?php echo (TEMDIR_URL); ?>images/slider/thumbs/thumbl_980x340_005.png" alt="Image 04" /></li>
               <li><img src="<?php echo (TEMDIR_URL); ?>images/slider/thumbs/thumbl_980x340_006.png" alt="Image 05" /></li>       
               <li><img src="<?php echo (TEMDIR_URL); ?>images/slider/thumbs/thumbl_980x340_007.png" alt="Image 06" /></li>       
               <li><img src="<?php echo (TEMDIR_URL); ?>images/slider/thumbs/thumbl_980x340_008.png" alt="Image 07" /></li>       		
            </ul>
		</div>
        <div onclick="return false" class="lof-previous">Previous</div>
	</div> 
    
 </div> 
<script type="text/javascript">

</script>	
    </div>
    
    <div id="templatemo_main">
    	
        <div class="col one_fourth fp_services">
            
            <h2 class="s1"><img src="<?php echo (TEMDIR_URL); ?>images/calendar-32px.png" alt="Image 01" /> <a href="#">Web Design</a></h2>
            <p>Nullam consectetur varius risus, a lobortis ipsum auctor at. Aenean bibendum vulputate libero ac sagittis.</p>
        </div>
        <div class="col one_fourth fp_services">
            
            <h2 class="s1"><img src="<?php echo (TEMDIR_URL); ?>images/map-32px.png" alt="Image 02" /><a href="#">Graphic Design</a></h2>
            <p>Duis egestas, magna at iaculis pulvinar, leo est elementum sapien leo elit sit, id vestibulum eros elit at purus.</p>
        </div>
        
        <div class="col one_fourth fp_services">
            
            <h2 class="s2"><img src="<?php echo (TEMDIR_URL); ?>images/notebook-32px.png" alt="Image 03" /><a href="#">Web Programming</a></h2>
            <p>Ut rhoncus rhoncus mauris, varius venenatis nibh consequat ac. Duis nec velit eros, eu scelerisque lacus.</p>
        </div>
        <div class="col one_fourth no_margin_right fp_services">
            
            <h2 class="s3"><img src="<?php echo (TEMDIR_URL); ?>images/post-it-32px.png" alt="Image 04" /><a href="#">Web Marketing</a></h2>
            <p>Etiam sodales feugiat turpis et dapibus. Vestibulum adipiscing convallis tortor sit amet dignissim. Duis nec velit accumsan.</p>
        </div>
        <div class="col one_fourth fp_services">
            
            <h2 class="s1"><img src="<?php echo (TEMDIR_URL); ?>images/rosette-32px.png" alt="Image 05" /><a href="#">Web Hosting</a></h2>
            <p>Pellentesque suscipit velit at dui egestas porta. Maecenas quis metus ac nulla pretium eleifend dolor mi.</p>
        </div>
		<div class="col one_fourth fp_services">
            
            <h2 class="s1"><img src="<?php echo (TEMDIR_URL); ?>images/tick-32px.png" alt="Image 06" /><a href="#">SSL Certificate</a></h2>
            <p>Aenean ante nunc, bibendum non lobortis id, viverra eu diam. Cras sed commodo lectus in ultrices eget vitae dui. </p>
        </div>
        
        <div class="col one_fourth fp_services">
            
            <h2 class="s2"><img src="<?php echo (TEMDIR_URL); ?>images/name-tag-32px.png" alt="Image 07" /><a href="#">Content Writing</a></h2>
            <p>Ut metus urna, rhoncus vitae venenatis consequat, pulvinar vitae ante. Mauris eu sapien in nulla rhoncus nec ut leo.</p>
        </div>
        <div class="col one_fourth no_margin_right fp_services">
            
            <h2 class="s3"><img src="<?php echo (TEMDIR_URL); ?>images/flickr-32px.png" alt="Image 08" /><a href="#">Ecommerce Solution</a></h2>
            <p>Mauris lobortis lorem at mi tincidunt id magna neque dapibus. Duis in condimentum odio auctor. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
        </div>
        
        <div class="cleaner"></div>
    
    </div> <!-- END of main -->
    
</div> <!-- END of wrapper -->


<div id="templatemo_footer_wrapper">
	<div id="templatemo_footer">
    	<div class="col one_third">
        	<h4>Flickr</h4>
            <ul class="flickr_stream">
                <li><a href="#"><img src="<?php echo (TEMDIR_URL); ?>images/01.png" alt="Flickr 01" /></a></li>
                <li><a href="#"><img src="<?php echo (TEMDIR_URL); ?>images/02.png" alt="Flickr 02" /></a></li>
                <li class="no_margin_right"><a href="#"><img src="<?php echo (TEMDIR_URL); ?>images/03.png" alt="Flickr 03" /></a></li>
                <li><a href="#"><img src="<?php echo (TEMDIR_URL); ?>images/04.png" alt="Flickr 04" /></a></li>
                <li><a href="#"><img src="<?php echo (TEMDIR_URL); ?>images/05.png" alt="Flickr 05" /></a></li>
                <li class="no_margin_right"><a href="#"><img src="<?php echo (TEMDIR_URL); ?>images/06.png" alt="Flickr 06" /></a></li>
                 <li><a href="#"><img src="<?php echo (TEMDIR_URL); ?>images/03.png" alt="Flickr 07" /></a></li>
                <li><a href="#"><img src="<?php echo (TEMDIR_URL); ?>images/04.png" alt="Flickr 08" /></a></li>
                <li class="no_margin_right"><a href="#"><img src="<?php echo (TEMDIR_URL); ?>images/02.png" alt="Flickr 09" /></a></li>
            </ul>  
        </div>
		
        <div class="col one_third">
        	<h4>Twitter</h4>
            <ul class="twitter_post">
	            <li>Suspendisse at scelerisque urna. Aenean tincidunt velit at dui massa in tellus varius ultricies. <a href="#">http://bit.ly/13IwZO</a></li>
                <li>Proin dignissim, diam nec <a href="#">@TemplateMo</a> enim lorem tempus orci, ac imperdiet ante purus in justo.</li>
                <li>Fusce cursus consectetur ultricies <a href="#">http://bit.ly/34sdPo</a> uis lectus, ut elementum id, fermentum sed erat. </li>
			</ul>
        </div>
        
        <div class="col one_third no_margin_right">
        	<h4>Follow Us</h4>
			<p><a href="http://www.templatemo.com" target="_parent">Dark Pro Theme</a> is free css template provided by <a href="http://www.templatemo.com">templatemo.com</a> for your personal or commercial websites. Sed vestibulum ipsum ac odio dictum tincidunt. Etiam feugiat turpis semper lectus eget diam porta iaculis.</p>
			
			<div class="cleaner h20"></div>
            <div class="footer_social_button">
                <a href="#"><img src="<?php echo (TEMDIR_URL); ?>images/facebook.png" title="Facebook" alt="Facebook" /></a>
                <a href="#"><img src="<?php echo (TEMDIR_URL); ?>images/flickr.png" title="Flickr" alt="Flickr" /></a>
                <a href="#"><img src="<?php echo (TEMDIR_URL); ?>images/twitter.png" title="Twitter" alt="Twitter" /></a>
                <a href="#"><img src="<?php echo (TEMDIR_URL); ?>images/youtube.png" title="Youtube" alt="Youtube" /></a>
                <a href="#"><img src="<?php echo (TEMDIR_URL); ?>images/feed.png" title="RSS" alt="RSS" /></a>
			</div>
            
            Copyright ? 2048 <a href="#">Your Company Name</a> <br /> 
			<a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by 
			<a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>download from  <a href="http://www.mianfeimoban.com/">mianfeimoban.com</a>
			
			<div class="cleaner"></div>
        </div>
		
        <div class="cleaner"></div>
    </div> <!-- END of footer -->
</div> <!-- END of footer wrapper -->
</body>
</html>