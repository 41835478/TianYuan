function msg_replay(i){
	var e=$(i);
	var id=parseInt(e.attr('rel'),10);
	if (id>0){
		var name=e.parent().find('cite').html();
		$('#re_wid').val(id);
		$('#rep_name').html(name);
		var msg=e.parent().parent().find('p.rep');
		if (msg.length>0){
			msg=msg.find('span').html();
		}else{
			msg='';
		}
		$('body,html').animate({scrollTop:1000},100,'swing',function(){
			$('#rep_info').val(msg).focus();
		});
	}
}
function sub_rep(u){
	var id=parseInt($('#re_wid').val(),10);
	if (id>0){
		var msg=$('#rep_info').val();
		$.ajax({
			type:'post',
			url:'/m'+u+'/ajaxr.html',
			data:{'id':id,'msg':msg},
			success:function(d){
				if (d=='1'){
					alert('回复成功');
				}else if (d=='-1'){
					alert('留言信息不存在');
				}else if(d=='-2'){
					alert('没有回复权限');
				}
				getHtml('/m'+u+'/words.html');
			}
		});
	}else{
		alert('请选择一条祝福,再进行回复');
	}
}

function form_z_sub(zid){
 var send=$('#send').val();
 var content=$('#content').val();
 var num=$('#wall_num').val();
 if (send==''||send=='您的姓名'){
	alert('请填写您的姓名');
	 $('#send').focus();
	 return ;
 }
 if (content.length<5){
	alert('留言内容不能少于5个字符');
	 $('#content').focus();
	 return ;
 }
 $.ajax({
	'type':'post',
	'url':'/m'+zid+'/ajaxp.html',
	'data':{'act':'words','send':send,'content':content,'num':num},
	success:function(d){
		if (d=='1'){
			alert('发布成功');
			setTimeout(function(){
				getHtml('/m'+zid+'/words.html');
			},1000);
		}else if(d=='2'){
			getHtml('/m'+zid+'/words.html');
		}else{
			alert(''+d+'');
		}
	}
 });
}