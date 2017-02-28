<?php include T('show/m/common','header');?>
<link rel="stylesheet" href="/static/css/web/login.css">
<style type="text/css">
	body{background-color: #F5F5F5;margin:0;padding: 0;}
	a{color: #000000;cursor:pointer;text-decoration:none;}
	div,p,a,table,textarea,form,input,img,ul,li,dl,dt,dd,h1,h2,h3,h4{margin:0;padding:0;}
	.head{background-color: #fff;}
	.quan-list{float:left;width: 100%;height:50px;background-color: #fff;border-bottom: 1px solid #cccccc;}
	.quan-info{height: 50px; width: 100%;border-bottom: 1px solid #ccc;}
	.quan-mz{float: left;width: 100%;line-height: 50px;}
	.quan-mz p{float: left;margin:0;}
	.quan-mz input{border:none;outline: none;}
	.mz{font-size: 18px;padding-left:10px;}
	.phone{width: 50%;font-size: 14px;padding-left: 15px;}
	.address{font-size: 16px;padding: 10px;}
	.dead-time{float: left;width:55%;height: 50px;font-size: 16px;line-height: 50px;font-weight: bold;color: #424242;}
	.quan-time{height: 50px;line-height: 50px;text-align: right;font-size: 12px;padding-right: 10px;}
	.bottom{position: fixed;bottom: 20px;height: 50px;line-height: 50px;text-align: center;width: 90%;margin-left: 5%;background-color: #ABD13E;font-size: 18px;border-radius: 5px;color: #ffffff;}

	.top{ margin:5px auto; color:#990000; text-align:center;}

	.info select{ border:1px #993300 solid; background:#FFFFFF;}

	.info{ margin:5px; text-align:center;}

	.info #show{ color:#3399FF; }


</style>
<script type="text/javascript" src="/static/js/j.js"></script>
	<script type="text/javascript">
		function selectCity(e,idstr){
			$.ajax({
				type:'post',
				url:'/ac.php?type=qu',
				dataType:'json',
				data:{'m':'admin','a':'area','areaid':e},
				success:function(city){
					var o = document.getElementById(idstr);
					o.options.length =1;
					if (city.length>1){
						o.style.display='inline-block';
						for (var i in city){
							o.options.add(new Option(city[i].name,city[i].areaid));
						}
					}else{
						setCity(e);
						o.style.display='none';
					}
				}
			});
		}
		function setCity(id){
			$('#areaid').val(id);
		}
	</script>
	<div class="main">
		<div class="head">
			<div class="go_back" style="margin-left:10px;"><</div>
			<div class="head_title">编辑地址</div>
			<div class="cart-edit" style="float:right;margin-right:15px;font-size:18px;"></div>
		</div>
		<div class="quan-list">
			<div class="quan-info">
				<div class="quan-mz">
					<p class="mz">收货人：</p>
					<p class="phone"><input type="text" name="linkman" value="<?=$address['linkman']?>" placeholder="联系人姓名"></p>
				</div>
			</div>
		</div>
		<div class="quan-list">
			<div class="quan-info">
				<div class="quan-mz">
					<p class="mz">手机号码：</p>
					<p class="phone"><input type="text" name="phone" value="<?=$address['phone']?>" placeholder="手机号"></p>
				</div>
			</div>
		</div>
		<div class="quan-list">
			<div class="quan-info">
				<div class="quan-mz">
					<p class="mz">所在地区：</p>
					<p class="phone areaid" style="width:60%;">
						<!--<select id="s_province" name="s_province" style="width:30%;"></select><select id="s_city" name="s_city" style="width:30%;"></select><select id="s_county" name="s_county" style="float:right;margin-top:16px;width:40%;"></select>
						<input type="hidden" name="areaid" value="<?=$address['areaid']?>">-->
						<?php $all_pc=$db->getAll("select `areaid`,`name` from `web_shop_area` where `parentid`=0");?>
					<select id="p" onchange="selectCity(this.value,'c')" style="width:25%;">
					<option value="0">请选择</option>
<?php foreach($all_pc as $p){?>
					<option value="<?=$p['areaid']?>"><?=$p['name']?></option>
<?php }?>
					</select>
					<select id="c" onchange="selectCity(this.value,'q')" style="width:25%;">
						<option value="0">请选择</option>
					</select>
					<select id="q" onchange="setCity(this.value)" style="width:30%;">
						<option value="0" selected>请选择</option>
					</select>
					<input type="hidden" name="areaid" id="areaid" value="<?=$address['areaid']?>" />
					</p>
				</div>
			</div>
		</div>
		<div class="quan-list">
			<div class="quan-info">
				<div class="quan-mz">
					<p class="mz">详细地址：</p>
					<p class="phone"><input type="text" name="address" value="<?=$address['address']?>" placeholder="详细地址"></p>
				</div>
			</div>
		</div>
		<div class="quan-list">
			<div class="quan-info">
				<div class="quan-mz">
					<p class="mz">设为默认：</p>
					<?php if ($address_tmp['sort'] == 1) {?>
						<p class="phone sort checked" style="width:55%;"><img src="/static/img/wap/choice.png" style="width:40px;float:right;margin-top:15px;"></p>
					<?php } else {?>
						<p class="phone sort" style="width:55%;"><img src="/static/img/wap/un-choice.png" style="width:40px;float:right;margin-top:15px;"></p>
					<?php }?>
				</div>
			</div>
		</div>
		<div class="bottom">
			保存收货地址
		</div>
	</div>
<?php include T('show/m/common','footer');?>
<script type="text/javascript">

	var key = '<?=$address_tmp["id"]?>';

	$('.sort').click(function() {
		if ($(this).hasClass('checked')) {
			$(this).removeClass('checked');
			$(this).find('img').attr('src', '/static/img/wap/un-choice.png');
		} else {
			$(this).addClass('checked');
			$(this).find('img').attr('src', '/static/img/wap/choice.png');
		}
	});

	$('.bottom').click(function() {

		var linkman = $('input[name="linkman"]').val();
		var phone = $('input[name="phone"]').val();
		var address = $('input[name="address"]').val();
		var areaid = $('input[name="areaid"]').val();
		var sort = '';

		if ($('.sort').hasClass('checked')) {
			sort = 'yes';
		} else {
			sort = 'no';
		}

		if (!linkman) {
			layer.msg('请填写收货人姓名');
			return false;
		}

		if (!phone) {
			layer.msg('请填写收货人电话');
			return false;
		}

		if (!address) {
			layer.msg('请填写收货人详细地址');
			return false;
		}

		if (!areaid) {
			layer.msg('请填写收货人地区');
			return false;
		}

		$.post('/?m=wxsite&mod=ajax', {a:'saveaddress', linkman:linkman, phone:phone, address:address, areaid:areaid, key:key, sort:sort}, function(data) {

			if (data == 'ok') {
				layer.msg('修改成功');
				setTimeout('history.go(-2)', 2000);
			}
		});
	});
</script>
