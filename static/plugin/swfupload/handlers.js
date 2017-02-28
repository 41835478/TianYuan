function fileQueueError(file, errorCode, message) {
	try {
		var imageName = "error.gif";
		var errorName = "";
		if (errorCode === SWFUpload.errorCode_QUEUE_LIMIT_EXCEEDED) {
			errorName = "队列图片太多！";
		}

		if (errorName !== "") {
			art.dialog.alert(errorName+'xx');
			return;
		}
		//art.dialog.alert(errorCode);
		switch (errorCode) {
		case SWFUpload.QUEUE_ERROR.ZERO_BYTE_FILE:
			art.dialog.alert('队列中有0字节图片！（错误的图片）');
			break;
		case SWFUpload.QUEUE_ERROR.FILE_EXCEEDS_SIZE_LIMIT:
			art.dialog.alert('单张图片不能超过5MB大小！');
			//imageName = "toobig.gif";
			break;
		case SWFUpload.QUEUE_ERROR.QUEUE_LIMIT_EXCEEDED:
			art.dialog.alert('单个图集最多能上传5张图片！');
			break;
		case SWFUpload.QUEUE_ERROR.ZERO_BYTE_FILE:
			art.dialog.alert('不能上传0字节的图片');
			break;
		case SWFUpload.QUEUE_ERROR.INVALID_FILETYPE:
			art.dialog.alert('不被允许的格式');
			break;
		default:
			art.dialog.alert(message+'xxx');
			break;
		}
		addImage("images/" + imageName);

	} catch (ex) {
		this.debug(ex);
	}

}

function fileDialogComplete(numFilesSelected, numFilesQueued) {
	try {
		if (numFilesQueued > 0) {
			this.startUpload();
		}
	} catch (ex) {
		this.debug(ex);
	}
}

function uploadProgress(file, bytesLoaded) {

	try {
		var percent = Math.ceil((bytesLoaded / file.size) * 100);

		var progress = new FileProgress(file,  this.customSettings.upload_target);
		progress.setProgress(percent);
		if (percent === 100) {
			progress.setStatus("创建缩略图...");
			progress.toggleCancel(false, this);
		} else {
			progress.setStatus("上传中...");
			progress.toggleCancel(true, this);
		}
	} catch (ex) {
		this.debug(ex);
	}
}

function uploadSuccess(file, serverData) {
	try {
		var progress = new FileProgress(file,  this.customSettings.upload_target);
		if (serverData.substring(0, 7) === "FILEID:") {
			var msg = serverData.split('|');
			addImage(msg[1],msg[1],msg[2]);
			progress.setStatus("缩略图创建完成.");
			progress.toggleCancel(false);
		} else {
			//addImage("images/error.gif");
			progress.setStatus("错误.");
			progress.toggleCancel(false);
			art.dialog.alert(serverData.replace(/ERROR:/g,'')+'sdf');
		}
	} catch (ex) {
		this.debug(ex);
	}
}

function uploadComplete(file) {
	try {
		if (this.getStats().files_queued > 0) {
			this.startUpload();
		} else {
			var progress = new FileProgress(file,  this.customSettings.upload_target);
			progress.setComplete();
			progress.setStatus("全部完成.");
			progress.toggleCancel(false);
			//u_single
			$("#thumbnails").sortable("destroy");
			$("#thumbnails").sortable({items:'div.u_single',handle: '.top_img_z1',revert:true});
		}
	} catch (ex) {
		this.debug(ex);
	}
}

function uploadError(file, errorCode, message) {
	var imageName =  "error.gif";
	var progress;
	try {
		switch (errorCode) {
		case SWFUpload.UPLOAD_ERROR.FILE_CANCELLED:
			try {
				progress = new FileProgress(file,  this.customSettings.upload_target);
				progress.setCancelled();
				progress.setStatus("已经取消");
				progress.toggleCancel(false);
			}
			catch (ex1) {
				this.debug(ex1);
			}
			break;
		case SWFUpload.UPLOAD_ERROR.UPLOAD_STOPPED:
			try {
				progress = new FileProgress(file,  this.customSettings.upload_target);
				progress.setCancelled();
				progress.setStatus("已经停止");
				progress.toggleCancel(true);
			}
			catch (ex2) {
				this.debug(ex2);
			}
		case SWFUpload.UPLOAD_ERROR.UPLOAD_LIMIT_EXCEEDED:
			imageName = "uploadlimit.gif";
			break;
		default:
			art.dialog.alert(message+'fa');
			break;
		}
		addImage("images/" + imageName);
	} catch (ex3) {
		this.debug(ex3);
	}

}

function chk_numz(){
	var img_nums=$('.u_single').length;
	if(img_nums>14){
		$('#upload_btn').css('margin-top','100px');
		return 'A';
	}else{
		$('#upload_btn').css('margin-top','0');
		return 'B';
	}
}

function addImage(src,filename,id) {
	var newImg = document.createElement("img"),
		con = document.createElement('div'),
		hid = document.createElement('input'),
		op = document.createElement('div'),
		top= document.createElement('div'),
		ipt = document.createElement('input'),
		rdo = document.createElement('input');
	con.className = 'u_single';
	con.id='u_'+id;
	op.className='opop';
	top.className='top_img_z1';
	if(filename){
			var a = document.createElement('a'),
				org=document.createElement('a');
				label=document.createElement('label');
				span = document.createElement('span');
			ipt.type="hidden";ipt.name="info[sort][]";ipt.value=id;
			rdo.type="radio";rdo.name="info[cover]";rdo.value=id;
			rdo.onclick=function(){
				set_face_z(this);
			};
			span.innerHTML = '封面';
			org.innerHTML='原图';
			org.onclick=function(){show_org(id);};
			a.innerHTML = '删除';
			a.onclick=function(){
				this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode);
				chk_numz();
			};
	}else{
			hid.type="hidden";hid.name="";
			ipt.type="hidden";ipt.name="";
			rdo.type="hidden";rdo.name="";
			span.innerHTML = '&nbsp;';
			op.innerHTML = '&nbsp;';
			top.innerHTML='&nbsp;';
	}
	op.appendChild(org);
	op.appendChild(a);
	label.appendChild(rdo);
	label.appendChild(span);
	op.appendChild(label);
	top.appendChild(newImg)
	top.appendChild(hid);
	con.appendChild(top);
	con.appendChild(op);
	con.appendChild(ipt);
	var first=document.getElementById("thumbnails").firstChild;
	document.getElementById("thumbnails").insertBefore(con,first);
	if (con.filters) {
		try {
			con.filters.item("DXImageTransform.Microsoft.Alpha").opacity = 0;
		} catch (e) {
			con.style.filter = 'progid:DXImageTransform.Microsoft.Alpha(opacity=' + 0 + ')';
		}
	} else {
		con.style.opacity = 0;
	}

	newImg.onload = function () {
		fadeIn(con, 0);
	};
	newImg.src = src.replace(/_real/,"_350_350");
	chk_numz();
}

function set_face_z(e){
	$('.u_single').removeClass("fcf_color");
	$(e).parent().parent().parent().addClass("fcf_color");
}
function fadeIn(element, opacity) {
	var reduceOpacityBy = 5;
	var rate = 30;	// 15 fps
	if (opacity < 100) {
		opacity += reduceOpacityBy;
		if (opacity > 100) {
			opacity = 100;
		}

		if (element.filters) {
			try {
				element.filters.item("DXImageTransform.Microsoft.Alpha").opacity = opacity;
			} catch (e) {
				// If it is not set initially, the browser will throw an error.  This will set it if it is not set yet.
				element.style.filter = 'progid:DXImageTransform.Microsoft.Alpha(opacity=' + opacity + ')';
			}
		} else {
			element.style.opacity = opacity / 100;
		}
	}

	if (opacity < 100) {
		setTimeout(function () {
			fadeIn(element, opacity);
		}, rate);
	}
}



/* ******************************************
 *	FileProgress Object
 *	Control object for displaying file info
 * ****************************************** */

function FileProgress(file, targetID) {
	this.fileProgressID = "divFileProgress";

	this.fileProgressWrapper = document.getElementById(this.fileProgressID);
	if (!this.fileProgressWrapper) {
		this.fileProgressWrapper = document.createElement("div");
		this.fileProgressWrapper.className = "progressWrapper";
		this.fileProgressWrapper.id = this.fileProgressID;

		this.fileProgressElement = document.createElement("div");
		this.fileProgressElement.className = "progressContainer";

		var progressCancel = document.createElement("a");
		progressCancel.className = "progressCancel";
		progressCancel.href = "#";
		progressCancel.style.visibility = "hidden";
		progressCancel.appendChild(document.createTextNode(" "));

		var progressText = document.createElement("div");
		progressText.className = "progressName";
		progressText.appendChild(document.createTextNode(file.name));

		var progressBar = document.createElement("div");
		progressBar.className = "progressBarInProgress";

		var progressStatus = document.createElement("div");
		progressStatus.className = "progressBarStatus";
		progressStatus.innerHTML = "&nbsp;";

		this.fileProgressElement.appendChild(progressCancel);
		this.fileProgressElement.appendChild(progressText);
		this.fileProgressElement.appendChild(progressStatus);
		this.fileProgressElement.appendChild(progressBar);

		this.fileProgressWrapper.appendChild(this.fileProgressElement);

		document.getElementById(targetID).appendChild(this.fileProgressWrapper);
		fadeIn(this.fileProgressWrapper, 0);

	} else {
		this.fileProgressElement = this.fileProgressWrapper.firstChild;
		this.fileProgressElement.childNodes[1].firstChild.nodeValue = file.name;
	}

	this.height = this.fileProgressWrapper.offsetHeight;

}
FileProgress.prototype.setProgress = function (percentage) {
	this.fileProgressElement.className = "progressContainer green";
	this.fileProgressElement.childNodes[3].className = "progressBarInProgress";
	this.fileProgressElement.childNodes[3].style.width = percentage + "%";
};
FileProgress.prototype.setComplete = function () {
	this.fileProgressElement.className = "progressContainer blue";
	this.fileProgressElement.childNodes[3].className = "progressBarComplete";
	this.fileProgressElement.childNodes[3].style.width = "";

};
FileProgress.prototype.setError = function () {
	this.fileProgressElement.className = "progressContainer red";
	this.fileProgressElement.childNodes[3].className = "progressBarError";
	this.fileProgressElement.childNodes[3].style.width = "";

};
FileProgress.prototype.setCancelled = function () {
	this.fileProgressElement.className = "progressContainer";
	this.fileProgressElement.childNodes[3].className = "progressBarError";
	this.fileProgressElement.childNodes[3].style.width = "";

};
FileProgress.prototype.setStatus = function (status) {
	this.fileProgressElement.childNodes[2].innerHTML = status;
};

FileProgress.prototype.toggleCancel = function (show, swfuploadInstance) {
	this.fileProgressElement.childNodes[0].style.visibility = show ? "visible" : "hidden";
	if (swfuploadInstance) {
		var fileID = this.fileProgressID;
		this.fileProgressElement.childNodes[0].onclick = function () {
			swfuploadInstance.cancelUpload(fileID);
			return false;
		};
	}
};
