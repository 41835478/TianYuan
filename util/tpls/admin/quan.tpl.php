<?php include T('seller_admin','header');?>
<div id="bread" class="cont">
	<p><a href="/home/index.html">首页</a> <i class="fa fa-angle-right" aria-hidden="true"></i> 店铺中心</p>
</div>
<style type="text/css">
.r_tab{font-size:16px;line-height:35px;font-weight:bold;border-bottom:1px solid #eee}	
.r_tab .cur{color:#009237}
.r_tab i{width:1px;height:15px;display:inline-block;background-color:#f1f1f1;margin-left:15px;margin-right:15px;}
.r_tab a{display:inline-block;}
.quan_log{min-height:0;overflow:hidden;}
.log_tit{border:1px solid #e6e6e6;background-color:#f8f8f8;height:42px;line-height:42px;font-size:15px;margin-top:28px;}
.log_tit span{display:inline-block;text-align:center;}
.quan_log ul{border:1px solid #e6e6e6;margin-top:14px;}
.quan_log ul li{border-bottom:1px solid #e6e6e6;min-height:0;overflow:hidden;padding-top:18px;height:80px;text-align:center;}
.quan_log ul li:last-child{border:none}
.quan_log ul li div{padding:10px}
</style>
<div id="main" class="cont">
	<?php include T('admin','left');?>
	<div id="right">
		<div class="r_tab">
			<a href="/home/msg.html" <?php if(empty($tp)){?>class="cur"<?php }?>>优惠券</a><i></i>
		</div>
		<div class="quan_log">
			<div class="log_tit">
				<span style="width:200px">优惠券详情</span>
				<span style="width:100px">面值（元）</span>
				<span style="width:100px">使用情况</span>
				<span style="width:200px">使用条件</span>
				<span style="width:150px">有效时间</span>
				<span style="width:100px">操作</span>
			</div>
			<ul>
<?php foreach ($myquan as $k => $v) {
$quan=$db->get_One('select * from `web_quan` where id='.$v['quanid']);
?>
				<li>
					<div class="fl" style="width:160px">
						<p><?=$quan['title']?></p>
					</div>
					<div class="fl" style="width:120px;line-height:40px;color:#009239">&yen;<?=$quan['fee']?></div>
					<div class="fl" style="width:80px;line-height:40px;"><?=$v['status']==0?'未使用':'已使用';?></div>
					<div class="fl" style="width:180px"><?=$quan['beyond']>0?'满'.$quan['beyond'].'元可以使用':'无限制';?></div>
					<div class="fl" style="width:130px"><?=date('Y年m月d日',$quan['stime'])?>到<?=date('Y年m月d日',$quan['etime'])?></div>
					<div class="fl" style="width:80px;"><a onclick="del_quan(<?=$v['id']?>)" style="cursor:pointer"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div>
				</li>
<?php }?>
			</ul>
		</div>
	</div>
</div>
<script type="text/javascript">
function del_quan(id){
	layer.confirm('您确定要删除此优惠券吗？', {
  		btn: ['确定','取消'] //按钮
	}, function(){
		$.ajax({
			type:'post',
			url:'/?m=admin&a=quan&c=dele',
			data:{'id':id},
			success:function(r){
				if(r=='ok'){
					layer.alert('优惠券删除成功');
				}else{
					layer.alert(r);
				}
				setTimeout(function(){window.location.reload(true);},1200);
			}
		});
	});
}
</script>

<?php include T('seller_admin','footer');?>