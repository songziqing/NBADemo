<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="__PUBLIC__/Js/jquery-2.1.4.js"></script>
	<script src="__PUBLIC__/Css/bootstrap-3.3.5-dist/js/bootstrap.js"></script>
	<link href="__PUBLIC__/Css/bootstrap-3.3.5-dist/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="__PUBLIC__/Css/bootstrap-3.3.5-dist/css/bootstrap-theme.css" rel="stylesheet" type="text/css">


	<link rel='stylesheet' href='__PUBLIC__/Css/style.css' media='screen' />
	<script src="__PUBLIC__/Js/blocksit.min.js"></script>
	<style type="text/css">
		.breadcrumb {
			margin-bottom: 0px;
		}
		#container {
			margin-top: 100px;
		}
	</style>
	<script>
		$(document).ready(function() {


	//blocksit define
	$(window).load( function() {
		$('#container').BlocksIt({
			numOfCol: 5,
			offsetX: 8,
			offsetY: 8,
			blockElement: '.grid'
		});
	});

		//window resize
		var currentWidth = 1100;
		$(window).resize(function() {
			var winWidth = $(window).width();
			var conWidth;
			if(winWidth < 660) {
				conWidth = 440;
				col = 2
			} else if(winWidth < 880) {
				conWidth = 660;
				col = 3
			} else if(winWidth < 1100) {
				conWidth = 880;
				col = 4;
			} else {
				conWidth = 1100;
				col = 5;
			}
			
			if(conWidth != currentWidth) {
				currentWidth = conWidth;
				$('#container').width(conWidth);
				$('#container').BlocksIt({
					numOfCol: col,
					offsetX: 8,
					offsetY: 8
				});
			}
		});
	});
	</script>
	<title>NBA精彩图集</title>
	<link rel="shortcut icon" href="__PUBLIC__/Images/NBA.ico">
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="row">
				<ul class="nav nav-tabs col-md-12">
					<li role="presentation"><a href="__URL__/index">NBA统计</a></li>
					<li role="presentation"><a href="#">NBA排名</a></li>
					<li role="presentation"  class="active"><a href="__URL__/image">NBA精彩图集</a></li>
					<li role="presentation"><a href="__URL__/future">未来工作室</a></li>
				</ul>
			</div>
		</div>

		<div class="row">
			<ul id="myTab" class="nav nav-tabs col-md-12">
				<li class="active">
					<a href="#a" data-toggle="tab">
						NBA专题--[常规赛]1月28日精彩赛况
					</a>
				</li>
				<li><a href="#b" data-toggle="tab">NBA专题--[常规赛]雷霆96-105湖人</a></li>
				<li><a href="#c" data-toggle="tab">NBA专题--[常规赛]热火负凯尔特人</a></li>
				<li class="dropdown">
					<a href="#" id="myTabDrop1" class="dropdown-toggle" 
					data-toggle="dropdown">更多NBA精彩图集 
					<b class="caret"></b>
				</a>
				<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
					<li><a href="#d" tabindex="-1" data-toggle="tab">NBA专题--[常规赛]篮网106-119火箭</a></li>
					<li><a href="#e" tabindex="-1" data-toggle="tab">NBA专题--[常规赛]1月27日精彩赛况</a></li>
				</ul>
			</li>
		</ul>
		<div id="myTabContent" class="tab-content">
			<div class="tab-pane fade in active" id="a">
				<div id="container">
					<div class="grid">
						<div class="imgholder">
							<img src="__PUBLIC__/Images/img22.jpg">
						</div>
						<strong>AAAAAA</strong>
						<p>A peaceful sunset view...</p>
						<div class="meta">by j osborn</div>
					</div>
					<div class="grid">
						<div class="imgholder">
							<img src="__PUBLIC__/Images/02Uc-fxfpcyu5008413.jpg">
						</div>
						<strong>Bridge to Heaven</strong>
						<p>Where is the bridge lead to?</p>
						<div class="meta">by SigitEko</div>
					</div>
					<div class="grid">
						<div class="imgholder">
							<img src="__PUBLIC__/Images/img17.jpg">
						</div>
						<strong>Autumn</strong>
						<p>The fall of the tree...</p>
						<div class="meta">by Lars van de Goor</div>
					</div>
					<div class="grid">
						<div class="imgholder">
							<img src="__PUBLIC__/Images/02Uc-fxfpcyu5008413.jpg">
						</div>
						<strong>AAAAAA</strong>
						<p>A peaceful sunset view...</p>
						<div class="meta">by j osborn</div>
					</div>
					<div class="grid">
						<div class="imgholder">
							<img src="__PUBLIC__/Images/img22.jpg">
						</div>
						<strong>Bridge to Heaven</strong>
						<p>Where is the bridge lead to?</p>
						<div class="meta">by SigitEko</div>
					</div>
					<div class="grid">
						<div class="imgholder">
							<img src="__PUBLIC__/Images/02Uc-fxfpcyu5008413.jpg">
						</div>
						<strong>Autumn</strong>
						<p>The fall of the tree...</p>
						<div class="meta">by Lars van de Goor</div>
					</div>
					<div class="grid">
						<div class="imgholder">
							<img src="__PUBLIC__/Images/img17.jpg">
						</div>
						<strong>AAAAAA</strong>
						<p>A peaceful sunset view...</p>
						<div class="meta">by j osborn</div>
					</div>
					<div class="grid">
						<div class="imgholder">
							<img src="__PUBLIC__/Images/02Uc-fxfpcyu5008413.jpg">
						</div>
						<strong>Bridge to Heaven</strong>
						<p>Where is the bridge lead to?</p>
						<div class="meta">by SigitEko</div>
					</div>
					<div class="grid">
						<div class="imgholder">
							<img src="__PUBLIC__/Images/img17.jpg">
						</div>
						<strong>Autumn</strong>
						<p>The fall of the tree...</p>
						<div class="meta">by Lars van de Goor</div>
					</div>
					<div class="grid">
						<div class="imgholder">
							<img src="__PUBLIC__/Images/img22.jpg">
						</div>
						<strong>AAAAAA</strong>
						<p>A peaceful sunset view...</p>
						<div class="meta">by j osborn</div>
					</div>
					<div class="grid">
						<div class="imgholder">
							<img src="__PUBLIC__/Images/02Uc-fxfpcyu5008413.jpg">
						</div>
						<strong>Bridge to Heaven</strong>
						<p>Where is the bridge lead to?</p>
						<div class="meta">by SigitEko</div>
					</div>
					<div class="grid">
						<div class="imgholder">
							<img src="__PUBLIC__/Images/img17.jpg">
						</div>
						<strong>Autumn</strong>
						<p>The fall of the tree...</p>
						<div class="meta">by Lars van de Goor</div>
					</div>
					<div class="grid">
						<div class="imgholder">
							<img src="__PUBLIC__/Images/02Uc-fxfpcyu5008413.jpg">
						</div>
						<strong>AAAAAA</strong>
						<p>A peaceful sunset view...</p>
						<div class="meta">by j osborn</div>
					</div>
					<div class="grid">
						<div class="imgholder">
							<img src="__PUBLIC__/Images/img22.jpg">
						</div>
						<strong>Bridge to Heaven</strong>
						<p>Where is the bridge lead to?</p>
						<div class="meta">by SigitEko</div>
					</div>
					<div class="grid">
						<div class="imgholder">
							<img src="__PUBLIC__/Images/02Uc-fxfpcyu5008413.jpg">
						</div>
						<strong>Autumn</strong>
						<p>The fall of the tree...</p>
						<div class="meta">by Lars van de Goor</div>
					</div>
					<div class="grid">
						<div class="imgholder">
							<img src="__PUBLIC__/Images/img22.jpg">
						</div>
						<strong>AAAAAA</strong>
						<p>A peaceful sunset view...</p>
						<div class="meta">by j osborn</div>
					</div>
					<div class="grid">
						<div class="imgholder">
							<img src="__PUBLIC__/Images/02Uc-fxfpcyu5008413.jpg">
						</div>
						<strong>Bridge to Heaven</strong>
						<p>Where is the bridge lead to?</p>
						<div class="meta">by SigitEko</div>
					</div>
					<div class="grid">
						<div class="imgholder">
							<img src="__PUBLIC__/Images/img17.jpg">
						</div>
						<strong>Autumn</strong>
						<p>The fall of the tree...</p>
						<div class="meta">by Lars van de Goor</div>
					</div>
					<div class="grid">
						<div class="imgholder">
							<img src="__PUBLIC__/Images/02Uc-fxfpcyu5008413.jpg">
						</div>
						<strong>AAAAAA</strong>
						<p>A peaceful sunset view...</p>
						<div class="meta">by j osborn</div>
					</div>
					<div class="grid">
						<div class="imgholder">
							<img src="__PUBLIC__/Images/img22.jpg">
						</div>
						<strong>Bridge to Heaven</strong>
						<p>Where is the bridge lead to?</p>
						<div class="meta">by SigitEko</div>
					</div>
					<div class="grid">
						<div class="imgholder">
							<img src="__PUBLIC__/Images/02Uc-fxfpcyu5008413.jpg">
						</div>
						<strong>Autumn</strong>
						<p>The fall of the tree...</p>
						<div class="meta">by Lars van de Goor</div>
					</div>
				</div>
			</div>

			<div class="tab-pane fade" id="b">
				<div class="row">
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/img25.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/img25.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/img25.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/img25.jpg">
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/ecND-fxfpqxf0129603.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/ecND-fxfpqxf0129603.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/ecND-fxfpqxf0129603.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/ecND-fxfpqxf0129603.jpg">
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/img23.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/img23.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/img23.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/img23.jpg">
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/ecND-fxfpqxf0129603.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/ecND-fxfpqxf0129603.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/ecND-fxfpqxf0129603.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/ecND-fxfpqxf0129603.jpg">
						</a>
					</div>
				</div>
			</div>

			<div class="tab-pane fade" id="c">
				<div class="row">
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/ABDS-fxfpcyp5140022.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/ABDS-fxfpcyp5140022.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/ABDS-fxfpcyp5140022.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/ABDS-fxfpcyp5140022.jpg">
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/ABDS-fxfpcyp5140022.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/ABDS-fxfpcyp5140022.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/ABDS-fxfpcyp5140022.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/ABDS-fxfpcyp5140022.jpg">
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/ABDS-fxfpcyp5140022.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/ABDS-fxfpcyp5140022.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/ABDS-fxfpcyp5140022.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/ABDS-fxfpcyp5140022.jpg">
						</a>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="d">
				<div class="row">
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/wwCG-fxfpqxf0093492.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/wwCG-fxfpqxf0093492.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/wwCG-fxfpqxf0093492.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/wwCG-fxfpqxf0093492.jpg">
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/wwCG-fxfpqxf0093492.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/wwCG-fxfpqxf0093492.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/wwCG-fxfpqxf0093492.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/wwCG-fxfpqxf0093492.jpg">
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/wwCG-fxfpqxf0093492.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/wwCG-fxfpqxf0093492.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/wwCG-fxfpqxf0093492.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/wwCG-fxfpqxf0093492.jpg">
						</a>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="e">
				<div class="row">
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/kBlu-fxfpqxf0110709.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/kBlu-fxfpqxf0110709.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/kBlu-fxfpqxf0110709.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/kBlu-fxfpqxf0110709.jpg">
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/kBlu-fxfpqxf0110709.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/kBlu-fxfpqxf0110709.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/kBlu-fxfpqxf0110709.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/kBlu-fxfpqxf0110709.jpg">
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/kBlu-fxfpqxf0110709.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/kBlu-fxfpqxf0110709.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/kBlu-fxfpqxf0110709.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/kBlu-fxfpqxf0110709.jpg">
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/kBlu-fxfpqxf0110709.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/kBlu-fxfpqxf0110709.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/kBlu-fxfpqxf0110709.jpg">
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
							<img src="__PUBLIC__/Images/kBlu-fxfpqxf0110709.jpg">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>