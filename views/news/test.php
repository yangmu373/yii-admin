<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>jQuery多张图片批量上传插件_777模板www.777moban.com</title>
<link rel="stylesheet" type="text/css" href="<?= $this->params['cdnUrl'] ?>assets/diyUpload/css/webuploader.css">
<link rel="stylesheet" type="text/css" href="<?= $this->params['cdnUrl'] ?>assets/diyUpload/css/diyUpload.css">
<script src="<?= $this->params['cdnUrl'] ?>assets/amazeui/js/jquery.min.js"></script>
<script type="text/javascript" src="<?= $this->params['cdnUrl'] ?>assets/diyUpload/js/webuploader.html5only.min.js"></script>
<script type="text/javascript" src="<?= $this->params['cdnUrl'] ?>assets/diyUpload/js/diyUpload.js"></script>
</head>
<style>
*{ margin:0; padding:0;}
#box{ margin:50px auto; width:540px; min-height:400px; background:#FF9}
#demo{ margin:50px auto; width:540px; min-height:800px; background:#CF9}
</style>
<body>
<div id="box">
	<div id="test" ></div>
</div>

<div id="demo">
	<div id="as" ></div>
</div>
</body>
<script type="text/javascript">

/*
* 服务器地址,成功返回,失败返回参数格式依照jquery.ajax习惯;
* 其他参数同WebUploader
*/

$('#test').diyUpload({
	url:'http://localhost/6666.Admin/web/index.php/news/uploadimgs',
	success:function( data ) {
		console.info( data );
	},
	error:function( err ) {
		console.info( err );	
	}
});

$('#as').diyUpload({
	url:'http://localhost/6666.Admin/web/index.php/news/uploadimgs',
	success:function( data ) {
		console.info( data );
	},
	error:function( err ) {
		console.info( err );	
	},
	buttonText : '选择文件',
	chunked:true,
	// 分片大小
	chunkSize:512 * 1024,
	//最大上传的文件数量, 总文件大小,单个文件大小(单位字节);
	fileNumLimit:50,
	fileSizeLimit:500000 * 1024,
	fileSingleSizeLimit:50000 * 1024,
	accept: {}
});
</script>
<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
<p>适用浏览器：IE8、360、FireFox、Chrome、Safari、Opera、傲游、搜狗、世界之窗. </p>
<p>来源：<a href="http://www.777moban.com/" target="_blank">777模板</a></p>
</div>
</html>