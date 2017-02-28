var face = {'0':['微笑','0px 0'],'1':['撇嘴','-24px 0'],'2':['色','-48px 0'],'3':['发呆','-72px 0'],'4':['得意','-96px 0'],'5':['流泪','-120px 0'],'6':['害羞','-144px 0'],'7':['闭嘴','-168px 0'],'8':['睡','-192px 0'],'9':['大哭','-216px 0'],'10':['尴尬','-240px 0'],'11':['发怒','-264px 0'],'12':['调皮','-288px 0'],'13':['呲牙','-312px 0'],'14':['惊讶','-336px 0'],'15':['难过','-360px 0'],'16':['酷','-384px 0'],'17':['冷汗','-408px 0'],'18':['抓狂','-432px 0'],'19':['吐','-456px 0'],'20':['偷笑','-480px 0'],'21':['可爱','-504px 0'],'22':['白眼','-528px 0'],'23':['傲慢','-552px 0'],'24':['饥饿','-576px 0'],'25':['困','-600px 0'],'26':['惊恐','-624px 0'],'27':['流汗','-648px 0'],'28':['憨笑','-672px 0'],'29':['大兵','-696px 0'],'30':['奋斗','-720px 0'],'31':['咒骂','-744px 0'],'32':['疑问','-768px 0'],'33':['嘘','-792px 0'],'34':['晕','-816px 0'],'35':['折磨','-840px 0'],'36':['衰','-864px 0'],'37':['骷髅','-888px 0'],'38':['敲打','-912px 0'],'39':['再见','-936px 0'],'40':['擦汗','-960px 0'],'41':['抠鼻','-984px 0'],'42':['鼓掌','-1008px 0'],'43':['糗大了','-1032px 0'],'44':['坏笑','-1056px 0'],'45':['左哼哼','-1080px 0'],'46':['右哼哼','-1104px 0'],'47':['哈欠','-1128px 0'],'48':['鄙视','-1152px 0'],'49':['委屈','-1176px 0'],'50':['快哭了','-1200px 0'],'51':['阴险','-1224px 0'],'52':['亲亲','-1248px 0'],'53':['吓','-1272px 0'],'54':['可怜','-1296px 0'],'55':['菜刀','-1320px 0'],'56':['西瓜','-1344px 0'],'57':['啤酒','-1368px 0'],'58':['篮球','-1392px 0'],'59':['乒乓','-1416px 0'],'60':['咖啡','-1440px 0'],'61':['饭','-1464px 0'],'62':['猪头','-1488px 0'],'63':['玫瑰','-1512px 0'],'64':['凋谢','-1536px 0'],'65':['示爱','-1560px 0'],'66':['爱心','-1584px 0'],'67':['心碎','-1608px 0'],'68':['蛋糕','-1632px 0'],'69':['闪电','-1656px 0'],'70':['炸弹','-1680px 0'],'71':['刀','-1704px 0'],'72':['足球','-1728px 0'],'73':['瓢虫','-1752px 0'],'74':['便便','-1776px 0'],'75':['月亮','-1800px 0'],'76':['太阳','-1824px 0'],'77':['礼物','-1848px 0'],'78':['拥抱','-1872px 0'],'79':['强','-1896px 0'],'80':['弱','-1920px 0'],'81':['握手','-1944px 0'],'82':['胜利','-1968px 0'],'83':['抱拳','-1992px 0'],'84':['勾引','-2016px 0'],'85':['拳头','-2040px 0'],'86':['差劲','-2064px 0'],'87':['爱你','-2088px 0'],'88':['NO','-2112px 0'],'89':['OK','-2136px 0'],'90':['爱情','-2160px 0'],'91':['飞吻','-2184px 0'],'92':['跳跳','-2208px 0'],'93':['发抖','-2232px 0'],'94':['怄火','-2256px 0'],'95':['转圈','-2280px 0'],'96':['磕头','-2304px 0'],'97':['回头','-2328px 0'],'98':['跳绳','-2352px 0'],'99':['挥手','-2376px 0'],'100':['激动','-2400px 0'],'101':['街舞','-2424px 0'],'102':['献吻','-2448px 0'],'103':['左太极','-2472px 0'],'104':['右太极','-2496px 0']};
var saveSelection, restoreSelection;
if (window.getSelection) {
    saveSelection = function() {
        var sel = window.getSelection();
        return sel;
    };
    restoreSelection = function(savedSelection) {
		savedSelection.removeAllRanges();
		$('#seditor').get(0).focus();
    };
} else if (document.selection && document.selection.createRange) {
    saveSelection = function() {
        var sel = document.selection;
        return (sel.type != "None") ? sel.createRange() : null;
    };
    restoreSelection = function(savedSelection) {
        if (savedSelection) {
            savedSelection.select();
        }
    };
}
function insertHTML(sHtml){
    var sel = saveSelection();
    document.execCommand('InsertImage', false , sHtml); 
    restoreSelection(sel);
}

function show_link_bar(){
	art.dialog.open('/static/url.html',{
		title:'设置超链接',
		icon:'question',
		height:'90px',
		ok:function(){
			var iframe = this.iframe.contentWindow;
			if (!iframe.document.body) {
				alert('iframe还没加载完毕呢');
				return false;
			};
			var url = $.trim(iframe.document.getElementById('url').value);
			if (url.length<1){
				art.dialog.alert('链接地址是空的哦！');
				return false;
			}else{
				url=url.indexOf('#')==0||url.indexOf('http://')==0?url:'http://'+url;
				insertLINK(url);
			}
		},
		cancel:true
	});
}

function insertLINK(sHtml){
    var sel = saveSelection();
    document.execCommand('CreateLink', false , sHtml);
    restoreSelection(sel);
}
function inimage(text){
	var obj= $("#seditor")[0];
	var range, node;
	if(!obj.hasfocus) {
		obj.focus();
	}
	var mark=obj.getAttribute('mark');
	mark=parseInt(mark,10);
    if (window.getSelection && window.getSelection().getRangeAt) {
        range = window.getSelection().getRangeAt(0);
		if (mark>0){
			range.startOffset=mark;
		}
		range.collapse(false);
        node = document.createDocumentFragment('');
		div=document.createElement('img');
		div.setAttribute('src',text);
		node.appendChild(div);
		var c = node.lastChild;
        range.insertNode(node);
		console.log(c);
		console.log(range);
		var j = window.getSelection();
		j.removeAllRanges();
		j.addRange(range);
		console.log(range);
		obj.setAttribute('mark',range.startOffset);
		
    } else if (document.selection && document.selection.createRange) {
        document.selection.createRange().pasteHTML(text);
    }
}

function inilink(text){
	var obj= $("#seditor")[0];
	var range, node;
	if(!obj.hasfocus) {
		//obj.focus();
	}
    if (window.getSelection && window.getSelection().getRangeAt) {
        range = window.getSelection().getRangeAt(0);
		console.log(range);
		return;
		range.collapse(false);
        node = document.createDocumentFragment('');
		div=document.createElement('img');
		div.setAttribute('src',text);
		node.appendChild(div);
		var c = node.lastChild;
        range.insertNode(node);
		console.log(c);
		console.log(range);
		var j = window.getSelection();
		j.removeAllRanges();
		j.addRange(range);
		console.log(range);
		
    }else if (document.selection && document.selection.createRange) {
        document.selection.createRange().pasteHTML(text);
    }
}
function show_emotion(){
	$('#mask_editor').css('z-index',80);
    $('#js_emotion_id').show().css('z-index',90);
    var e = $('#seditor').get(0);
    if(!window.webkitURL) e.focus();

}
function hide_emotion(){
	$('#mask_editor').css('z-index',-1);
    $('#js_emotion_id').hide();
}
function text_show(){
    $('#mult_editor').hide();
    $('#text_editor').show();
    $('#rplytype').val('txt');
}
function mult_show(){
    $('#js_emotion_id').hide();
    $('#text_editor').hide();
    $('#mult_editor').show();
    $('#rplytype').val('news');
}
function syncContent(){
	$('#seditor a').each(function(i,o){
		var e=$(o);
		e.removeAttr('title');
	});
    var html = $('#seditor').html();
        html = html.replace(/<img\s+src="https:\/\/res.wx.qq.com\/mpres\/htmledition\/images\/icon\/emotion\/([0-9]+).gif"[^>]*>/ig,function(a,b){
            return '/'+face[b][0];
        });
    $('#msg').val(html);
}
function PreView(src){
    $('#wxb').val(src);
    $('#wxbimg').attr('src', src);
}
function setUrl(e,url,t){
    //url = url.toLowerCase();
    url = url.replace(/[。]/g,'.');
    if((url.substring(0,7)!='http://')&&(url.substring(0,8)!='https://')){
        url = 'http://'+url;
    }
    $(e).val(url);
    $(t).attr('href',url);
}
function nPreview(src,inputid,imgid){
    $('#'+inputid).val(src);
    $('#'+imgid).attr('src',src);
}
function delNew(i){
	var sons=$('#newslist table').length;
	if (sons<2){
		$('#idsp').parent().show();
	}
    $('#inputtable'+i).remove();
    $('#prvid'+i).remove();
    $('.lone:last').css('borderBottom','none');
}
function addNews(){
    var i = $('#newslist table').length;
    if(i>=10){
        art.dialog.alert('抱歉，目前最多支持10条');
        return ;
    }
	$('#idsp').parent().hide();
	i++;
    var html = '<div id="inputtable'+i+'" class="nanana"><table width="100%" cellspacing="1" cellpadding="5" bgcolor="#dddddd" class="btable">';
        html+= '<tr><td colspan="2" align="right"><a class="deln" href="javascript:delNew('+i+')">删除</a></td></tr>';
        html+='<tr>';
        html+='   <td width="60" align="right">标题</td>';
        html+='   <td><input type="text" class="ntxt" name="stitle[]" value="标题" onkeyup="$(\'#href'+i+'\').html(this.value)" /></td>';
        html+='</tr>';
        html+='<tr>';
        html+='    <td align="right">链接</td>';
        html+='    <td><input type="text" class="ntxt e_link" name="slink[]" onblur="setUrl(this,this.value,\'.ilink'+i+'\')" value="" /></td>';
        html+='</tr>';
        html+='<tr>';
        html+='    <td align="right">图片</td>';
        html+='    <td><input type="hidden" id="pic'+i+'" name="spic[]" value="" /><iframe src="/?m=admin&a=upload&type=wxn&callback=nPreview&inputid=pic'+i+'&imgid=imgpv'+i+'" frameborder="0" width="100" height="30"></iframe><i onclick="show_normal_link(this)" class="cr_btn_link">&nbsp;</i>';
        html+='    </td>';
        html+='</tr>';
        html+='</table></div>';
        $(html).appendTo('#newslist');
    var preview = '<div class="lone" id="prvid'+i+'">';
        preview+= '    <table width="100%" cellpadding="0" cellspacing="0" border="0">';
        preview+= '        <tr>';
        preview+= '            <td><a class="ilink'+i+'" id="href'+i+'" href="#">标题</a></td>';
        preview+= '            <td width="90" align="center"><a class="ilink'+i+'" href="#"><img width="80" height="80" id="imgpv'+i+'" src="/static/img/ms/spic.gif"></a></td>';
        preview+= '        </tr>';
        preview+= '    </table>  ';
        preview+= '</div>';
        $(preview).appendTo('#morenews');
}