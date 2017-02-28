<?php include T('seller_admin','header');?>
<div id="bread" class="cont">
	<p><a href="/home/index.html">首页</a> <i class="fa fa-angle-right" aria-hidden="true"></i> 买家中心</p>
</div>
<style type="text/css">
.r_tab{font-size:16px;line-height:35px;font-weight:bold;border-bottom:1px solid #eee}	
.r_tab .cur{color:#009237}
.r_tab i{width:1px;height:15px;display:inline-block;background-color:#f1f1f1;margin-left:15px;margin-right:15px;}
.r_tab a{display:inline-block;}
.clearall{display:inline-block;float:right;width:60px;text-align:center;border:1px solid #ccc;font-size:12px;line-height:25px;color:#666;font-weight:normal;cursor:pointer}
.msg_list{padding:20px 0}
.msg_list ul li{background:url('/static/img/dot1.jpg') no-repeat center left;padding-left:20px;font-size:12px;line-height:30px;margin-bottom:20px;}
.msg_list ul li span{color:#999}
.msg_list ul li span a{color:#333}
.stime{padding-left:50px;}
.msg_list ul li p img{border:1px solid #f1f1f1;margin-right:5px;}
</style>
<div id="main" class="cont">
	<?php include T('admin','left');?>
	<div id="right">
		<div class="r_tab">
			<a href="http://mall.com/home/msg.html" <?php if(empty($tp)){?>class="cur"<?php }?>>系统消息</a><i></i><a href="http://mall.com/home/msg.html?tp=sx"<?php if($tp=='sx'){?>class="cur"<?php }?>>私信</a>
			<span class="clearall" onclick="clearall()">全部清空</span>
		</div>
		<div class="msg_list">
<?php if(!empty($list)){?>
			<ul>
<?php foreach($list as $k=>$v) {?>
				<li>
					<p> <img src="http://mall.com/static/uploadfile/2016/0903/151033829_real.jpg" width="30px" /> <a href=""><?=$v['title']?></a><span class="stime"><?=date('Y年m月d日 H:i',$v['time'])?></span> <span class="fr"><a href="/home/msg.html?c=view&id=<?=$v['id']?>">立即查看</a> | <a href="/home/msg.html?c=dele&id=<?=$v['id']?>">删除</a></span></p>
				</li>
<?php }?>
			</ul>
<?php }else{?>
			<p>什么也没有。。。</p>
<?php }?>
		</div>
	</div>
</div>
<?php include T('seller_admin','footer');?>