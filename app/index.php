<?php
// session_start();
// require_once("../util/scriptUtil.php");
// require_once("../util/defineUtil.php");

?>
<!doctype html>
<html>
<head>
<!-- title前に記述 -->
<meta charset="utf-8">
<meta http-equiv="content-type">
<meta http-equiv="content-language">
<meta http-equiv="content-style-type">
<meta http-equiv="content-script-type">
<title><!-- 全角２５文字以内が理想 --> sample｜sample1｜sample2</title>
<meta name="discription" content="サイトの説明（キーワード含め２〜３件）">
<meta name="keyword" content="キーワード,キーワード1,キーワード2,（２〜７件）">
<!-- css -->
<link rel="stylesheet" href="/css/master.css" media="screen" title="no title" charset="utf-8">
<!-- js -->
<script type="text/javascript"></script>
</head>
<body class="switch sp_user tb_user pc_user" id="page_name">
<div id="wrap">
<header>
<!--[if lt IE 9]>
<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</header>

<div id="container">

<h1><!-- logo or title --></h1><!-- start -->
<h2><!-- subtitle --></h2><!-- ↓ -->
<h3><!-- hoge--></h3><!-- ↓ -->
<h4><!-- hoge--></h4><!-- ↓ -->
<h5><!-- hoge--></h5><!-- ↓ -->
<h6><!-- hoge--></h6><!-- end -->

<section>
  <div class="clearfix">
    <ul>
      <li><img src="../img/sample" alt="imgの説明" width="case by case" height="case by case"/></li>
      <li><a href="#" target="_blank"></a></li>
      <li></li>
      <li></li>
    </ul>
    <p>説明</p>
  </div>
</section>

<?php if(true): ?>
<p>if</p>
<?php elseif(false): ?>
<p>elseif</p>
<?php endif; ?>

<section>
  <div class="box_00"></div>
  <div class="box_01"></div>
  <div class="box_02"></div>
  <div class="box_03"></div>
  <div class="box_04"></div>
</section>

</div><!-- container end -->

<footer></footer>

</div><!-- wrap end -->
<script type="text/javascript"></script>
</body>
</html>
