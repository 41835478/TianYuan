(function(config) {
	config['lock'] = false;
	config['opacity'] = 0.2;
	config['fixed'] = true;
	config['okVal'] = '确定';
	config['cancelVal'] = '取消';
	config['height'] = 'auto';
});

function dialog_close() {
	var list = art.dialog.list;
	for (var i in list) {
		list[i].close();
	}
}