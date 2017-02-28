<?php include T('seller_admin','header');?>
<div id="bread" class="cont">
	<p><a href="/home/index.html">首页</a> <i class="fa fa-angle-right" aria-hidden="true"></i> 买家中心</p>
</div>
<style type="text/css">
.jf_top{min-height:0;overflow:hidden;}
.jf_top ul li{width:190px;height:68px;float:left;margin-right:30px;border:1px dashed #ccc;border-radius:15px;-webkit-border-radius:15px;text-align:center;padding-top:20px;}
.jf_top ul li p{font-size:15px;font-weight:bold;}
.jf_top ul li p span{font-size:24px;color:#009237}
.score_log{min-height:0;overflow:hidden;}
.log_tit{border:1px solid #e6e6e6;background-color:#f8f8f8;height:42px;line-height:42px;font-size:15px;margin-top:28px;}
.log_tit span{width:220px;display:inline-block;text-align:center;}
.score_log ul{border:1px solid #e6e6e6;margin-top:14px;}
.score_log ul li{border-bottom:1px solid #e6e6e6;min-height:0;overflow:hidden;padding-top:18px;height:80px}
.score_log ul li:last-child{border:none}
.pic{width:62px;height:62px;padding-left:18px;}
.log_des{width: 250px;padding-right: 30px;text-align: center;margin-left: 10px;padding-top: 15px;}
.log_score{width:80px;text-align:center;line-height:50px;color:#ff6900}
.log_des p span{color:#a9a9a9}
.log_time{width:240px;text-align:center;margin-left:50px;line-height:50px;}
.log_extra{width:240px;text-align:center;line-height:50px;}
</style>
<div id="main" class="cont">
	<?php include T('admin','left');?>
	<div id="right">
		<div class="r_tit">我的积分</div>
		<div class="jf_top">
			<ul>
				<li>
					<p>当前可用积分 <span><?=$user['score']?></span></p>
				</li>
				<!--<li>
					<p>将要过期的积分 <span style="color:#ff6900">343</span></p>
					<p style="font-size:12px;font-weight:normal">(将于2016/10/22过期)</p>
				</li>-->
			</ul>
		</div>	
		<div class="score_log">
			<div class="log_tit">
				<span class="">交易记录</span>
				<span class="">积分变化</span>
				<span class="">日期</span>
				<span class="">备注</span>
			</div>
			<ul>
<?php foreach ($log as $k=>$v) {?>
				<li>
					<div class="log_des fl">
						<p style="margin-bottom:10px"><?=$tp_arr[$v['type']]?></p>
					</div>
					<div class="log_score fl"><?=$v['way']==1?'+':'-';?><?=$v['score']?></div>
					<div class="log_time fl"><?=date('Y-m-d H:i:s',$v['time'])?></div>
					<div class="log_extra fl"><?=$v['extra']?></div>
				</li>
<?php }?>
			</ul>
		</div>
	</div>
</div>
<script type="text/javascript">

</script>

<?php include T('seller_admin','footer');?>