<?php use yii\helpers\Url; ?>
<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>6666管理后台</title>
  <meta name="description" content="这是一个 index 页面">
  <meta name="keywords" content="index">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="<?= $this->params['cdnUrl'] ?>assets/amazeui/css/amazeui.min.css" />
  <link rel="stylesheet" href="<?= $this->params['cdnUrl'] ?>assets/datetimepicker/css/amazeui.datetimepicker.css"/>
  <link rel="stylesheet" href="<?= $this->params['cdnUrl'] ?>assets/chosen/amazeui.chosen.css"/>
  <link rel="stylesheet" href="<?= $this->params['cdnUrl'] ?>assets/amazeui/css/admin.css" />
  <link rel="stylesheet" href="<?= $this->params['cdnUrl'] ?>assets/diyUpload/css/webuploader.css">
  <link rel="stylesheet" href="<?= $this->params['cdnUrl'] ?>assets/diyUpload/css/diyUpload.css">
  <link rel="stylesheet" href="<?= $this->params['cdnUrl'] ?>assets/Jcrop/css/jquery.Jcrop.min.css">

<?php if($this->params['useBS']):?>
<link href="<?= $this->params['cdnUrl'] ?>assets/emoji-picker/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href="<?= $this->params['cdnUrl'] ?>assets/emoji/css/emoji.css" rel="stylesheet" type="text/css">
<?php endif;?>
<link href="<?= $this->params['cdnUrl'] ?>assets/emoji-picker/lib/css/nanoscroller.css" rel="stylesheet">
<link href="<?= $this->params['cdnUrl'] ?>assets/emoji-picker/lib/css/emoji.css" rel="stylesheet">

  <script src="<?= $this->params['cdnUrl'] ?>assets/emoji/js/emoji.js"></script>
  <script src="<?= $this->params['cdnUrl'] ?>assets/amazeui/js/jquery.min.js"></script>
  <script src="<?= $this->params['cdnUrl'] ?>assets/emoji/js/jquery.emoji.js"></script>
  <script src="<?= $this->params['cdnUrl'] ?>assets/amazeui/js/amazeui.min.js"></script>
  <script src="<?= $this->params['cdnUrl'] ?>assets/shan/js/jquery.form.js"></script>
  <script src="<?= $this->params['cdnUrl'] ?>assets/chosen/amazeui.chosen.min.js"></script>
  <script src="<?= $this->params['cdnUrl'] ?>assets/datetimepicker/js/amazeui.datetimepicker.min.js"></script>
  <script src="<?= $this->params['cdnUrl'] ?>assets/datetimepicker/js/locales/amazeui.datetimepicker.zh-CN.js"></script>
  <script src="<?= $this->params['cdnUrl'] ?>assets/amazeui/js/app.js"></script>
  <script src="<?= $this->params['cdnUrl'] ?>assets/diyUpload/js/webuploader.html5only.min.js"></script>
  <script src="<?= $this->params['cdnUrl'] ?>assets/diyUpload/js/diyUpload.js"></script>
  <script src="<?= $this->params['cdnUrl'] ?>assets/Jcrop/js/jquery.Jcrop.min.js"></script>
</head>
<?php use app\components\JsConfig; ?>
<?= JsConfig::widget() ?>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->

<header class="am-topbar admin-header">
  <div class="am-topbar-brand">
    <strong>6666</strong> <small>管理后台</small>
  </div>

  <!-- <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

    <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
      <li><a href="javascript:;"><span class="am-icon-envelope-o"></span> 收件箱 <span class="am-badge am-badge-warning">5</span></a></li>
      <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          <span class="am-icon-users"></span> 管理员 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li><a href="#"><span class="am-icon-user"></span> 资料</a></li>
          <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
          <li><a href="#"><span class="am-icon-power-off"></span> 退出</a></li>
        </ul>
      </li>
      <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
    </ul>
  </div> -->
</header>

<div class="am-cf admin-main">
  <!-- sidebar start -->
  <?= app\components\LeftMenu::widget() ?>
  <!-- sidebar end -->

  <!-- content start -->
  <?=$content?>
  <!-- content end -->
</div>

<a class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<footer>
  <hr>
  <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
</footer>

</body>
</html>
