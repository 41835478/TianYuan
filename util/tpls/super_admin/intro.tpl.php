<?php include T('super_admin','header');?>
<div class="am-cf admin-main">
	<?php include T('super_admin','left');?>
	<div class="admin-content">
		<div class="admin-content-body">
			<div class="am-cf am-padding am-padding-bottom-0">
				<div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">系统设置</strong> / <small>System Settings</small></div>
			  </div>
			<hr>
			<form method="post" action="/index.php" id="cate_a_from" class="am-form am-form-horizontal">
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">首页标题（title）：</label>
					<div class="am-u-sm-10">
					  <input type="text" id="chk_title" placeholder="首页标题（title）一般不超过40个汉字" name="sitename" value="<?=$config['sitename']?>">
					</div>
				</div>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">首页关键词（KeyWords）：</label>
					<div class="am-u-sm-10">
					  <input type="text" id="chk_kwd" placeholder="首页关键词（KeyWords）一般不超过40个汉字" name="keywords" value="<?=$config['keywords']?>">
					</div>
				</div>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">网站首页描述（description）：</label>
					<div class="am-u-sm-10">
					  <input type="text" id="chk_dsp" placeholder="网站首页描述（description）100-200个汉字" name="sitedsp" value="<?=$config['sitedsp']?>">
					</div>
				</div>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">上传商城Logo：</label>
					<div class="am-u-sm-10">
						<iframe src="/?m=admin&a=upfile&tb=7" border="0" frameborder="0" scrolling="no" width="260" height="30"></iframe>
						<input type="hidden" name="logo" value="<?=$config['logo']?>" id="chk_thumb" />
					</div>
				</div>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">Logo预览：</label>
					<div class="am-u-sm-10">
						<div id="site_logo_prev">
							<img src="<?=$config['logo']?>" width="100px"  class="am-thumbnail"/>
						</div>
					</div>
				</div>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">顶部欢迎语：</label>
					<div class="am-u-sm-10">
					  <input type="text" placeholder="你好，商城演示站 欢迎你" name="welcome" value="<?=$config['welcome']?>">
					</div>
				</div>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">通用搜索框说明文字：</label>
					<div class="am-u-sm-10">
					  <input type="text" placeholder="搜索其实很简单" name="search" value="<?=$config['search']?>">
					</div>
				</div>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">搜索框下方备选词：</label>
					<div class="am-u-sm-10">
					  <input type="text" placeholder="备选词之间用/分隔 8个词左右" name="tag" value="<?=$config['tag']?>">
					</div>
				</div>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">自定义head内的meta标签：</label>
					<div class="am-u-sm-10">
						<textarea id="" name="meta"  rows="2" placeholder="meta标签 例如站长工具验证"><?=$config['meta']?></textarea>
					</div>
				</div>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">微信公众号名称：</label>
					<div class="am-u-sm-10">
					  <input type="text" placeholder="meta标签 例如站长工具验证" name="wxname" value="<?=$config['wxname']?>">
					</div>
				</div>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">商城客服电话：</label>
					<div class="am-u-sm-10">
					  <input type="text" placeholder="商城400客服电话" name="tel" value="<?=$config['tel']?>">
					</div>
				</div>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">QQ：</label>
					<div class="am-u-sm-10">
					  <input type="text" placeholder="商城客服qq" name="qq" value="<?=$config['qq']?>">
					</div>
				</div>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">ICP备案号：</label>
					<div class="am-u-sm-10">
					  <input type="text" placeholder="商城ICP备案号" name="icp" value="<?=$config['icp']?>">
					</div>
				</div>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">公安备案号：</label>
					<div class="am-u-sm-10">
					  <input type="text" placeholder="公安备案号" name="police" value="<?=$config['police']?>">
					</div>
				</div>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">微信公众平台二维码：</label>
					<div class="am-u-sm-10">
						<iframe src="/?m=admin&a=upfile&tb=8" border="0" frameborder="0" scrolling="no" width="260" height="30"></iframe>
						<input type="hidden" name="wxqr" id="chk_wxqr" value="<?=$config['wxqr']?>"/>
					</div>
				</div>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">上传公众平台二维码：</label>
					<div class="am-u-sm-10">
						<div id="site_wxqr">
							<img src="<?=$config['wxqr']?>"  width="100px"  class="am-thumbnail"/>
						</div>
					</div>
				</div>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">开店是否需要审核：</label>
					<div class="am-u-sm-10">
						<select name="join">
							<option value="1" <?php if($config['join']==1){?>selected="selected"<?php }?>>需要</option>
							<option value="0" <?php if($config['join']==0){?>selected="selected"<?php }?>>不需要</option>
						</select>
					</div>
				</div>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">保证金金额（单位元）：</label>
					<div class="am-u-sm-10">
						<input type="text" placeholder="请填写入驻缴纳的保证金金额" name="bond" value="<?=$config['bond']?>">
					</div>
				</div>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">注册协议 / 免责声明：</label>
					<div class="am-u-sm-10">
						<textarea name="agreement" rows="5" ><?=$config['agreement']?></textarea>
					</div>
				</div>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">客服代码：</label>
					<div class="am-u-sm-10">
						<textarea name="kf" rows="5" ><?=$config['kf']?></textarea>
					</div>
				</div>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">统计代码：</label>
					<div class="am-u-sm-10">
						<textarea name="tongji" rows="5" ><?=$config['tongji']?></textarea>
					</div>
				</div>
				<input type="hidden" name="m" value="admin">
				<input type="hidden" name="a" value="intro">
				<input type="hidden" name="c" value="save">
				<div class="am-form-group">
				  <div class="am-u-sm-9 am-u-sm-push-3">
					<button type="button" class="am-btn am-btn-primary" onclick="check_data()">保存信息</button>
				  </div>
				</div>
			</form>
		
</div>
<script type="text/javascript">
	function check_data(){
		var chk_title=$('#chk_title').val();
		if (chk_title.length<1){
			alert('网站名称不能为空');
			return false;
		}else if(chk_title.length>50){
			alert('网站名称不能超过50字');
			return false;
		}
		var chk_kwd=$('#chk_kwd').val();
		if (chk_kwd.length<1){
			alert('网站说明不能为空');
			return false;
		}else if(chk_kwd.length>100){
			alert('网站说明不能超过100字');
			return false;
		}
		var chk_dsp=$('#chk_dsp').val();
		if (chk_dsp.length<1){
			alert('网站说明不能为空');
			return false;
		}else if(chk_dsp.length>100){
			alert('网站说明不能超过100字');
			return false;
		}
		var cate_icon=$('#chk_thumb').val();
		if (cate_icon.length<20){
			$('#site_logo_prev').css('borderColor','red');
			alert('请上传Logo图片');
			return false;
		}else{
			$('#site_logo_prev').css('borderColor','#999');
		}
		$('#cate_a_from').submit();
	}
	function setImg(file){
		$('#chk_thumb').val(file);
		$('#site_logo_prev').css('borderColor','#999').html('<img src="'+file+'"  width="100px"  class="am-thumbnail"/>');
	}
	function setImgs(file){
		$('#chk_wxqr').val(file);
		$('#site_wxqr').css('borderColor','#999').html('<img src="'+file+'"  width="100px"  class="am-thumbnail"/>');
	}
</script>

<?php include T('super_admin','footer');?>