<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
	
	<!-- 移动设备优先，确保适当的绘制和触屏缩放 -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="__PUBLIC__/Js/jquery-2.1.4.js"></script>
	<script src="__PUBLIC__/Css/bootstrap-3.3.5-dist/js/bootstrap.js"></script>
	<link href="__PUBLIC__/Css/bootstrap-3.3.5-dist/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="__PUBLIC__/Css/bootstrap-3.3.5-dist/css/bootstrap-theme.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		.breadcrumb{
			margin-bottom: 0px;
		}
	</style>
	<title>更多神投榜数据</title>
	<link rel="shortcut icon" href="__PUBLIC__/Images/NBA.ico">
</head>

<body>
	<div class="container">
		<div class="row">
			<ul class="nav nav-tabs col-md-12">
				<li role="presentation"><a href="__URL__/moreScore">得分榜</a></li>
				<li role="presentation"><a href="__URL__/moreBoard">篮板榜</a></li>
				<li role="presentation"><a href="__URL__/moreAst">助攻榜</a></li>
				<li role="presentation"><a href="__URL__/moreStl">抢断榜</a></li>
				<li role="presentation"><a href="__URL__/moreBlock">盖帽榜</a></li>
				<li role="presentation"><a href="__URL__/moreFault">失误榜</a></li>
				<li role="presentation" class="active"><a href="#">神投榜</a></li>
			</ul>
		</div>
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="__URL__/index">NBA统计</a></li>
				<li><a href="__URL__/index#6F">神投榜</a></li>
				<li class="active">更多数据>></li>
			</ol>
		</div>
		<div class="row">
			<table class="table table-bordered table-hover col-md-12">
				<tr  class="active">
					<th>排名</th><th>球员</th><th>球队</th><th>投篮命中率</th><th>投篮命中数</th>
					<th>投篮出手数</th>
					<th>场均时间</th><th>参赛场次</th>
				</tr>
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
						<td>
							<?php
 if($_GET[p]==null){ echo $key+1; } else { echo $_GET[p]*14+$key-13; } ?>
						</td>
						<td><?php echo ($vo["player"]); ?></td><td><?php echo ($vo["team"]); ?></td>
						<td><?php echo ($vo["shortrate"]); ?>%<td><?php echo ($vo["sumshort"]); ?></td><td><?php echo ($vo["shotcell"]); ?></td><td><?php echo ($vo["mpg"]); ?></td>
						<td><?php echo ($vo["gs"]); ?></td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</table>
			<?php echo ($page); ?><a href="__URL__/index#6F" class="btn btn-primary pull-right">返回</a>
		</div>
	</div>
</body>
</html>