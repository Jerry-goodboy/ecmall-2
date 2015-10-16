<?php echo $this->fetch('header.html'); ?>
<link type="text/css" href="<?php echo $this->res_base . "/" . 'css/index.css'; ?>" rel="stylesheet" />
<!--[if IE 6]>
<script type="text/javascript" src="<?php echo $this->res_base . "/" . 'js/ie6.js'; ?>" charset="utf-8"></script>
<![endif]-->
<style type="text/css">
.bg_shoppe{
    background: #f6f6f6 none repeat scroll 0 0;
    overflow: hidden;
}

.new_ul {
	margin: 0 auto;
	width: 1100px;
	padding-top:15px;
}
.new_ul li {
	float: left;
	margin: 10px 10px 15px 0px;
	border: 1px #DCDCDC solid;
	width: 350px;
	height: 330px;
}
.new_ul .dt2 {
	padding: 0px 10px;
	font-size: 14px;
}
.new_ul .dt1 {
	padding: 5px 15px;
	color: #cc142a;
	font-size: 18px;
	font-weight: bold
}
.new_ul .dd1 {
	padding-right: 15px;
	font-size: 25px;
}
.new_ul .dd2 {
	text-decoration: line-through;
	color: #9B9B9B;
	font-size: 14px;
	font-weight: normal
}
.new_ul a:hover{ color:#000;filter:alpha(opacity=80);       /* IE */
-moz-opacity:0.8;              /* Moz + FF */
opacity: 0.8; }
</style>
<div class="clear"></div>
<div class="bg_shoppe" area="shoppe" widget_type="area">
   <?php $this->display_widgets(array('page'=>'shoppe','area'=>'shoppe')); ?>
</div>
<?php echo $this->fetch('footer.html'); ?>