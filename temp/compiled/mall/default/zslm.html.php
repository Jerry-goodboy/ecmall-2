<?php echo $this->fetch('header.html'); ?>
<link type="text/css" href="<?php echo $this->res_base . "/" . 'css/wslm.css'; ?>" rel="stylesheet" />
<div class="zslm_banner">
    <a href="<?php echo url('app=apply'); ?>"><img src="<?php echo $this->res_base . "/" . 'images/zslm_banner.jpg'; ?>" /></a>
</div>
<div class="midbox4">
	<div class="midbox4_one">
    	<div class="midbox4_one_txt">资费标准如何?</div>
        <div class="midbox4_one_txt2">如何收取费用</div>
        <a href="<?php echo url('app=article&act=view&article_id='); ?>"><div class="midbox4_one_txt3">查询资费标准</div></a>
    </div>
    <div class="midbox4_one">
    	<div class="midbox4_one_txt">入驻需要哪些材料?</div>
        <div class="midbox4_one_txt2">提前准备入驻材料</div>
        <a href="<?php echo url('app=article&act=view&article_id='); ?>"><div class="midbox4_one_txt3">查询招商标准</div></a>
    </div>
    <div class="midbox4_one">
    	<div class="midbox4_one_txt">入驻常见问题?</div>
        <div class="midbox4_one_txt2">提前知晓避免错误提交</div>
        <a href="<?php echo url('app=article&act=view&article_id='); ?>"><div class="midbox4_one_txt3">查看常见问题</div></a>
    </div>
    <div class="midbox4_two">
    	<div class="midbox4_two_tit">信息公告：</div>
        <div class="midbox4_one_cont">
        	<ul>
                    <?php $_from = $this->_var['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'ar');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['ar']):
?>
                    <li><a target="_blank" href="<?php echo url('app=article&act=view&article_id=' . $this->_var['ar']['article_id']. ''); ?>"><?php echo $this->_var['ar']['title']; ?></a>
                        <?php if ($this->_var['key'] == 0): ?>
                        <img src="<?php echo $this->res_base . "/" . 'images/new.jpg'; ?>" style="vertical-align:top;"/>
                        <?php endif; ?>
                    </li>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

            </ul>
        </div>
    </div>
</div>
<div class="enterstep">
    <div class="enterstep_tit">入驻流程</div>
    <div class="enterstep_tit2">ENTERING STEP</div>
    <div class="enterstep_cont">
        <div class="enterstep_one" style="background:url(<?php echo $this->res_base . "/" . 'images/step1.jpg'; ?>)"><span>【了解招商标准】</span><br />①了解相关资费标准<br />②了解入住所需资料</div>
        <div class="enterstep_one" style="background:url(<?php echo $this->res_base . "/" . 'images/step2.jpg'; ?>)"><span>【检测企业网上结算账号】</span><br />①注册企业版支付宝账号<br />②注册其他结算账号</div>
        <div class="enterstep_one" style="background:url(<?php echo $this->res_base . "/" . 'images/step3.jpg'; ?>)"><span>【填写/提交信息及资料】</span><br />①填写申请信息，提交资质</div>
        <div class="enterstep_one" style="background:url(<?php echo $this->res_base . "/" . 'images/step4.jpg'; ?>)"><span>【等待审核】</span><br />①15个工作日内审核完毕<br />②如未通过，请在15个工作日内修改并提交资料</div>
        <div class="enterstep_two" style="background:url(<?php echo $this->res_base . "/" . 'images/step5.jpg'; ?>)"><span>【入住成功店铺上线】</span><br />①签署协议、补全商家档案<br />②收费店铺缴纳技术服务年费③发布商品 ，店铺上线</div>
    </div>
</div>
<div class="clear"></div>
<?php echo $this->fetch('footer.html'); ?>