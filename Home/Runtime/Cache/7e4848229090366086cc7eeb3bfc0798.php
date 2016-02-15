<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<!-- 移动设备优先，确保适当的绘制和触屏缩放 -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="__PUBLIC__/Js/jquery-2.1.4.js"></script>
	<script src="__PUBLIC__/Css/bootstrap-3.3.5-dist/js/bootstrap.js"></script>
	<script src="__PUBLIC__/Js/highcharts.js"></script>
	<script src="__PUBLIC__/Js/highcharts-more.js"></script>
	<link href="__PUBLIC__/Css/bootstrap-3.3.5-dist/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="__PUBLIC__/Css/bootstrap-3.3.5-dist/css/bootstrap-theme.css" rel="stylesheet" type="text/css">


	<link href="__PUBLIC__/Css/Stat.css" rel="stylesheet" type="text/css">
	<script type="text/javascript">
		$(document).ready(function(){
			//固定页面左侧导航栏
			$(window).scroll(function(){
				$('.song').css("top", $(window).scrollTop()-300)
				if($(".song").position().top<0) {
					$('.song').css("top", $(window).scrollTop())
				}
			});
			var charts = new Highcharts.Chart({
				// Highcharts 配置
				chart : {
					renderTo : "myContainer",  // 注意这里一定是 ID 选择器
					polar: true,
					type: 'line'
				},
				title: {
					text: 'NBA个人技能分析',

				},

				pane: {
					size: '80%'
				},

				xAxis: {
					categories: ['PPG', 'FG%', '3P%', 'FT%', 
					'MPG'],
					tickmarkPlacement: 'on',
					lineWidth: 0
				},

				yAxis: {
					gridLineInterpolation: 'polygon',
					lineWidth: 0,
					min: 0
				},

				tooltip: {
					shared: true
				},

				legend: {
					enabled: false
				},

				series: [ {
					type: 'area',
					name: 'Actual Spending',
					data: [50, 39, 42, 31, 26, 14],
					pointPlacement: 'on'
				}]
			}); 

			//助攻榜默认图形显示
			var chart1 = new Highcharts.Chart({
				// Highcharts 配置
				chart : {
					renderTo : "myContainer1",  // 注意这里一定是 ID 选择器
					polar: true,
					type: 'line'
				},
				title: {
					text: 'NBA个人技能分析',

				},

				pane: {
					size: '80%'
				},

				xAxis: {
					categories: ['PPG', 'FG%', '3P%', 'FT%', 
					'MPG'],
					tickmarkPlacement: 'on',
					lineWidth: 0
				},

				yAxis: {
					gridLineInterpolation: 'polygon',
					lineWidth: 0,
					min: 0
				},

				tooltip: {
					shared: true
				},

				legend: {
					enabled: false
				},

				series: [ {
					type: 'area',
					name: 'Actual Spending',
					data: [50, 39, 42, 31, 26, 14],
					pointPlacement: 'on'
				}]
			}); 

			//抢断榜默认图形显示
			var chart2 = new Highcharts.Chart({
				// Highcharts 配置
				chart : {
					renderTo : "myContainer2",  // 注意这里一定是 ID 选择器
					polar: true,
					type: 'line'
				},
				title: {
					text: 'NBA个人技能分析',

				},

				pane: {
					size: '80%'
				},

				xAxis: {
					categories: ['PPG', 'FG%', '3P%', 'FT%', 
					'MPG'],
					tickmarkPlacement: 'on',
					lineWidth: 0
				},

				yAxis: {
					gridLineInterpolation: 'polygon',
					lineWidth: 0,
					min: 0
				},

				tooltip: {
					shared: true
				},

				legend: {
					enabled: false
				},

				series: [ {
					type: 'area',
					name: 'Actual Spending',
					data: [50, 39, 42, 31, 26, 14],
					pointPlacement: 'on'
				}]
			});
			//盖帽榜默认图形显示
			var chart3 = new Highcharts.Chart({
				// Highcharts 配置
				chart : {
					renderTo : "myContainer3",  // 注意这里一定是 ID 选择器
					polar: true,
					type: 'line'
				},
				title: {
					text: 'NBA个人技能分析',

				},

				pane: {
					size: '80%'
				},

				xAxis: {
					categories: ['PPG', 'FG%', '3P%', 'FT%', 
					'MPG'],
					tickmarkPlacement: 'on',
					lineWidth: 0
				},

				yAxis: {
					gridLineInterpolation: 'polygon',
					lineWidth: 0,
					min: 0
				},

				tooltip: {
					shared: true
				},

				legend: {
					enabled: false
				},

				series: [ {
					type: 'area',
					name: 'Actual Spending',
					data: [50, 39, 42, 31, 26, 14],
					pointPlacement: 'on'
				}]
			}); 
			//失误榜默认图形显示
			var chart4 = new Highcharts.Chart({
				// Highcharts 配置
				chart : {
					renderTo : "myContainer4",  // 注意这里一定是 ID 选择器
					polar: true,
					type: 'line'
				},
				title: {
					text: 'NBA个人技能分析',

				},

				pane: {
					size: '80%'
				},

				xAxis: {
					categories: ['PPG', 'FG%', '3P%', 'FT%', 
					'MPG'],
					tickmarkPlacement: 'on',
					lineWidth: 0
				},

				yAxis: {
					gridLineInterpolation: 'polygon',
					lineWidth: 0,
					min: 0
				},

				tooltip: {
					shared: true
				},

				legend: {
					enabled: false
				},

				series: [ {
					type: 'area',
					name: 'Actual Spending',
					data: [50, 39, 42, 31, 26, 14],
					pointPlacement: 'on'
				}]
			});
			//神投榜默认图形显示
			var chart5 = new Highcharts.Chart({
				// Highcharts 配置
				chart : {
					renderTo : "myContainer5",  // 注意这里一定是 ID 选择器
					polar: true,
					type: 'line'
				},
				title: {
					text: 'NBA个人技能分析',

				},

				pane: {
					size: '80%'
				},

				xAxis: {
					categories: ['PPG', 'FG%', '3P%', 'FT%', 
					'MPG'],
					tickmarkPlacement: 'on',
					lineWidth: 0
				},

				yAxis: {
					gridLineInterpolation: 'polygon',
					lineWidth: 0,
					min: 0
				},

				tooltip: {
					shared: true
				},

				legend: {
					enabled: false
				},

				series: [ {
					type: 'area',
					name: 'Actual Spending',
					data: [50, 39, 42, 31, 26, 14],
					pointPlacement: 'on'
				}]
			});  
 





			
			$(".tmd").hover(function(){
				var info =  $(this).children().eq(1).html();
				var url = "__URL__/myData";
				var data = {"player": info};
				$.getJSON(url, data, function(res) {
					charts.series[0].setData(res);
				});
			})
			$(".tmd1").hover(function(){
				var info =  $(this).children().eq(1).html();
				var url = "__URL__/myData";
				var data = {"player": info};
				$.getJSON(url, data, function(res) {
					chart1.series[0].setData(res);
				});
				
			})
			$(".tmd2").hover(function(){
				var info =  $(this).children().eq(1).html();
				var url = "__URL__/myData";
				var data = {"player": info};
				$.getJSON(url, data, function(res) {
					chart2.series[0].setData(res);
				});
			})
			$(".tmd3").hover(function(){
				var info =  $(this).children().eq(1).html();
				var url = "__URL__/myData";
				var data = {"player": info};
				$.getJSON(url, data, function(res) {
					chart3.series[0].setData(res);
				});
			})
			$(".tmd4").hover(function(){
				var info =  $(this).children().eq(1).html();
				var url = "__URL__/myData";
				var data = {"player": info};
				$.getJSON(url, data, function(res) {
					chart4.series[0].setData(res);
				});
			})
			$(".tmd5").hover(function(){
				var info =  $(this).children().eq(1).html();
				var url = "__URL__/myData";
				var data = {"player": info};
				$.getJSON(url, data, function(res) {
					chart5.series[0].setData(res);
				});
			})
		});
		//NBA个人数据部分动态分配数据
		function info(id) {
			var url = "__URL__/info";
			var data = {"do": id};
			//获取json数据，并显示在客户端网页中
			$.getJSON(url, data, function(res) {
				$("#a").html(res.avgscore);
				$("#b").html(res.avgboard);
				$("#c").html(res.avgast);
				$("#d").html(res.avgstl);
				$("#e").html(res.avgblock);
				$("#f").html(res.ft+"%");
				$("#g").html(res.thirdrate+"%");
				$("#h").html(res.mpg);
				$("#i").html(res.player);
				$("#j").attr("src",'__PUBLIC__/Images/'+ res.image +'.jpg');
				$("#k").html(res.desc);
			});
		}

		//向助攻榜动态分配数据
		function info1(id) {
			var url = "__URL__/info";
			var data = {"do": id};
			//获取json数据，并显示在客户端网页中
			$.getJSON(url, data, function(res) {
				$("#a1").html(res.avgscore);
				$("#b1").html(res.avgboard);
				$("#c1").html(res.avgast);
				$("#d1").html(res.avgstl);
				$("#e1").html(res.avgblock);
				$("#f1").html(res.ft+"%");
				$("#g1").html(res.thirdrate+"%");
				$("#h1").html(res.mpg);
				$("#i1").html(res.player);
				$("#j1").attr("src",'__PUBLIC__/Images/'+ res.image +'.jpg');
				$("#k1").html(res.desc);
			});
		}

		//向抢断榜动态分配数据
		function info2(id) {
			var url = "__URL__/info";
			var data = {"do": id};
			//获取json数据，并显示在客户端网页中
			$.getJSON(url, data, function(res) {
				$("#a2").html(res.avgscore);
				$("#b2").html(res.avgboard);
				$("#c2").html(res.avgast);
				$("#d2").html(res.avgstl);
				$("#e2").html(res.avgblock);
				$("#f2").html(res.ft+"%");
				$("#g2").html(res.thirdrate+"%");
				$("#h2").html(res.mpg);
				$("#i2").html(res.player);
				$("#j2").attr("src",'__PUBLIC__/Images/'+ res.image +'.jpg');
				$("#k2").html(res.desc);
			});
			
		}
		//向盖帽榜动态分配数据
		function info3(id) {
			var url = "__URL__/info";
			var data = {"do": id};
			//获取json数据，并显示在客户端网页中
			$.getJSON(url, data, function(res) {
				$("#a3").html(res.avgscore);
				$("#b3").html(res.avgboard);
				$("#c3").html(res.avgast);
				$("#d3").html(res.avgstl);
				$("#e3").html(res.avgblock);
				$("#f3").html(res.ft+"%");
				$("#g3").html(res.thirdrate+"%");
				$("#h3").html(res.mpg);
				$("#i3").html(res.player);
				$("#j3").attr("src",'__PUBLIC__/Images/'+ res.image +'.jpg');
				$("#k3").html(res.desc);
			});
		}

		//向失误榜动态分配数据
		function info4(id) {
			var url = "__URL__/info";
			var data = {"do": id};
			//获取json数据，并显示在客户端网页中
			$.getJSON(url, data, function(res) {
				$("#a4").html(res.avgscore);
				$("#b4").html(res.avgboard);
				$("#c4").html(res.avgast);
				$("#d4").html(res.avgstl);
				$("#e4").html(res.avgblock);
				$("#f4").html(res.ft+"%");
				$("#g4").html(res.thirdrate+"%");
				$("#h4").html(res.mpg);
				$("#i4").html(res.player);
				$("#j4").attr("src",'__PUBLIC__/Images/'+ res.image +'.jpg');
				$("#k4").html(res.desc);
			});
		}

		//向神投榜动态分配数据
		function info5(id) {
			var url = "__URL__/info";
			var data = {"do": id};
			//获取json数据，并显示在客户端网页中
			$.getJSON(url, data, function(res) {
				$("#a5").html(res.avgscore);
				$("#b5").html(res.avgboard);
				$("#c5").html(res.avgast);
				$("#d5").html(res.avgstl);
				$("#e5").html(res.avgblock);
				$("#f5").html(res.ft+"%");
				$("#g5").html(res.thirdrate+"%");
				$("#h5").html(res.mpg);
				$("#i5").html(res.player);
				$("#j5").attr("src",'__PUBLIC__/Images/'+ res.image +'.jpg');
				$("#k5").html(res.desc);
			});
		}
	</script>
	<title>NBA统计</title>
	<link rel="shortcut icon" href="__PUBLIC__/Images/NBA.ico">
</head>

<body data-spy="scroll" data-target=".navbar-example">
	<div class="container">
		<div class="row" id="0F">
			<ul class="nav nav-tabs col-md-12">
				<li role="presentation" class="active"><a href="#">NBA统计</a></li>
				<li role="presentation"><a href="__URL__/moreScore">NBA排名</a></li>
				<li role="presentation"><a href="__URL__/image">NBA精彩图集</a></li>
				<li role="presentation"><a href="__URL__/future">未来工作室</a></li>
			</ul>
		</div>

		<div class="row">
			<ol class="breadcrumb col-xs-12 col-md-12">
				<li><a href="#">得分榜</a></li>
			</ol>
		</div>

		<div class="row">
			<table class="table table-bordered table-hover col-md-12">
				<tr  class="active">
					<th>排名</th><th>球员</th><th>球队</th><th>场均得分</th><th>得分总数</th>
					<th>投篮命中率</th><th>场均时间</th><th>参赛场次</th>
				</tr>
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr hover="info()">
						<td>
							<?php
 if($_GET[p]==null){ echo $key+1; } else { echo $_GET[p]*7+$key-6; } ?>
						</td>
						<td><?php echo ($vo["player"]); ?></td><td><?php echo ($vo["team"]); ?></td>
						<td class="active"><?php echo ($vo["avgscore"]); ?></td><td><?php echo ($vo["score"]); ?></td>
						<td><?php echo ($vo["shortrate"]); ?>%</td>
						<td><?php echo ($vo["mpg"]); ?></td><td><?php echo ($vo["gs"]); ?></td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</table>
			<?php echo ($page); ?>
			<a href="__URL__/moreScore" class="btn btn-primary pull-right">全屏查看</a>
		</div>
		<div class="page-header"></div>
	</div>

	<div class="container">
		<div class="row">
			<!-- 主体左侧浮动导航显示部分 -->
			<div class="col-md-2">
				<nav id="navbar-example" class="navbar navbar-default navbar-static song" role="navigation">
					<div class="collapse navbar-collapse bs-js-navbar-scrollspy navbar-example">
						<ul class="nav nav-pills nav-stacked">
							<li><a href="#0F" name="0F">得分榜</a></li>
							<li><a href="#1F" name="1F">篮板榜</a></li>
							<li><a href="#2F" name="2F">助攻榜</a></li>
							<li><a href="#3F" name="3F">抢断榜</a></li>
							<li><a href="#4F" name="4F">盖帽榜</a></li>
							<li><a href="#5F" name="5F">失误榜</a></li>
							<li><a href="#6F" name="6F">神投榜</a></li>
						</ul>
					</div>
				</nav>
			</div>

			<!-- 主体右侧显示部分 -->
			<div class="col-md-10">
				<!-- 篮板榜显示部分 -->
				<div class="row" id="1F">
					<div class="row">
						<ol class="breadcrumb col-xs-12 col-md-12">
							<li><a href="#">篮板榜</a></li>
						</ol>
					</div>
					<div class="row">
						<table class="table table-bordered table-hover col-md-12" class="defg">
							<tr  class="active">
								<th>排名</th><th>球员</th><th>球队</th><th>场均篮板</th><th>篮板总数</th>
								<th>场均时间</th><th>参赛场次</th>
							</tr>
							<?php if(is_array($board)): $i = 0; $__LIST__ = $board;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="tmd" onmouseover="info('<?php echo ($vo["id"]); ?>')">
									<td><?php echo ($key+1); ?></td><td><?php echo ($vo["player"]); ?></td><td><?php echo ($vo["team"]); ?></td>
									<td class="active"><?php echo ($vo["avgboard"]); ?><td><?php echo ($vo["sumboard"]); ?></td><td><?php echo ($vo["mpg"]); ?></td>
									<td><?php echo ($vo["gs"]); ?></td>
								</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						</table>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="thumbnail">
								<img src="__PUBLIC__/Images/1.jpg"
								id="j">
							</div>
							<div class="caption">
								<h3 id="i">Thumbnail label</h3>
								<p id="k">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							</div>
						</div>
						<div class="col-md-5">
							<table class="table" id="priBoard">
								<caption><center>NBA个人数据</center></caption>
								<tbody>
									<tr>
										<td>PPG</td>
										<td id="a">5.4</td>
									</tr>
									<tr>
										<td>RPG</td>
										<td id="b">5.4</td>
									</tr>
									<tr>
										<td>APG</td>
										<td id="c">8.6</td>
									</tr>
									<tr>
										<td>SPG</td>
										<td id="d">2.1</td>
									</tr>
									<tr>
										<td>BPG</td>
										<td id="e">0.2</td>
									</tr>
									<tr>
										<td>FT%</td>
										<td id="f">83.5%</td>
									</tr>
									<tr>
										<td>3P%</td>
										<td id="g">29.9%</td>
									</tr>
									<tr>
										<td>MPG</td>
										<td id="h">34.4</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-md-4">
							<div id="myContainer" style="width:320px;height:350px"></div>
						</div>
					</div>
					<a class="btn btn-primary pull-right" href="__URL__/moreBoard">更多>></a>
					<div class="page-header"></div>
				</div>
				<!-- 助攻榜显示部分 -->
				<div class="row" id="2F">
					<div class="row">
						<ol class="breadcrumb col-xs-12 col-md-12">
							<li><a href="#">助攻榜</a></li>
						</ol>
					</div>
					<div class="row">
						<table class="table table-bordered table-hover col-md-12">
							<tr  class="active">
								<th>排名</th><th>球员</th><th>球队</th><th>场均助攻</th><th>助攻总数</th>
								<th>场均时间</th><th>参赛场次</th>
							</tr>
							<?php if(is_array($ast)): $i = 0; $__LIST__ = $ast;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr onmouseover="info1('<?php echo ($vo["id"]); ?>')" class="tmd1">
									<td><?php echo ($key+1); ?></td><td><?php echo ($vo["player"]); ?></td><td><?php echo ($vo["team"]); ?></td>
									<td class="active"><?php echo ($vo["avgast"]); ?><td><?php echo ($vo["sumast"]); ?></td><td><?php echo ($vo["mpg"]); ?></td>
									<td><?php echo ($vo["gs"]); ?></td>
								</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						</table>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="thumbnail">
								<img src="__PUBLIC__/Images/1.jpg"
								id="j1">
							</div>
							<div class="caption">
								<h3 id="i1">Thumbnail label</h3>
								<p id="k1">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							</div>
						</div>
						<div class="col-md-5">
							<table class="table" id="priBoard">
								<caption><center>NBA个人数据</center></caption>
								<tbody>
									<tr>
										<td>PPG</td>
										<td id="a1">5.4</td>
									</tr>
									<tr>
										<td>RPG</td>
										<td id="b1">5.4</td>
									</tr>
									<tr>
										<td>APG</td>
										<td id="c1">8.6</td>
									</tr>
									<tr>
										<td>SPG</td>
										<td id="d1">2.1</td>
									</tr>
									<tr>
										<td>BPG</td>
										<td id="e1">0.2</td>
									</tr>
									<tr>
										<td>FT%</td>
										<td id="f1">83.5%</td>
									</tr>
									<tr>
										<td>3P%</td>
										<td id="g1">29.9%</td>
									</tr>
									<tr>
										<td>MPG</td>
										<td id="h1">34.4</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-md-4">
							<div id="myContainer1" style="width:320px;height:350px"></div>
						</div>
					</div>
					<a class="btn btn-primary pull-right" href="__URL__/moreAst">更多>></a>
					<div class="page-header"></div>
				</div>
				<!-- 抢断榜显示部分 -->
				<div class="row" id="3F">
					<div class="row">
						<ol class="breadcrumb col-xs-12 col-md-12">
							<li><a href="#">抢断榜</a></li>
						</ol>
					</div>
					<div class="row">
						<table class="table table-bordered table-hover col-md-12">
							<tr  class="active">
								<th>排名</th><th>球员</th><th>球队</th><th>场均抢断</th><th>抢断总数</th>
								<th>场均时间</th><th>参赛场次</th>
							</tr>
							<?php if(is_array($stl)): $i = 0; $__LIST__ = $stl;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr onmouseover="info2('<?php echo ($vo["id"]); ?>')" class="tmd2">
									<td><?php echo ($key+1); ?></td><td><?php echo ($vo["player"]); ?></td><td><?php echo ($vo["team"]); ?></td>
									<td class="active"><?php echo ($vo["avgstl"]); ?><td><?php echo ($vo["sumstl"]); ?></td><td><?php echo ($vo["mpg"]); ?></td>
									<td><?php echo ($vo["gs"]); ?></td>
								</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						</table>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="thumbnail">
								<img src="__PUBLIC__/Images/1.jpg"
								id="j2">
							</div>
							<div class="caption">
								<h3 id="i2">Thumbnail label</h3>
								<p id="k2">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							</div>
						</div>
						<div class="col-md-5">
							<table class="table" id="priBoard">
								<caption><center>NBA个人数据</center></caption>
								<tbody>
									<tr>
										<td>PPG</td>
										<td id="a2">5.4</td>
									</tr>
									<tr>
										<td>RPG</td>
										<td id="b2">5.4</td>
									</tr>
									<tr>
										<td>APG</td>
										<td id="c2">8.6</td>
									</tr>
									<tr>
										<td>SPG</td>
										<td id="d2">2.1</td>
									</tr>
									<tr>
										<td>BPG</td>
										<td id="e2">0.2</td>
									</tr>
									<tr>
										<td>FT%</td>
										<td id="f2">83.5%</td>
									</tr>
									<tr>
										<td>3P%</td>
										<td id="g2">29.9%</td>
									</tr>
									<tr>
										<td>MPG</td>
										<td id="h2">34.4</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-md-4">
							<div id="myContainer2" style="width:320px;height:350px"></div>
						</div>
					</div>
					<a class="btn btn-primary pull-right" href="__URL__/moreStl">更多>></a>
					<div class="page-header"></div>
				</div>
				<!-- 盖帽榜显示部分 -->
				<div class="row" id="4F">
					<div class="row">
						<ol class="breadcrumb col-xs-12 col-md-12">
							<li><a href="#">盖帽榜</a></li>
						</ol>
					</div>
					<div class="row">
						<table class="table table-bordered table-hover col-md-12">
							<tr  class="active">
								<th>排名</th><th>球员</th><th>球队</th><th>场均盖帽</th><th>盖帽总数</th>
								<th>场均时间</th><th>参赛场次</th>
							</tr>
							<?php if(is_array($block)): $i = 0; $__LIST__ = $block;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr onmouseover="info3('<?php echo ($vo["id"]); ?>')" class="tmd3">
									<td><?php echo ($key+1); ?></td><td><?php echo ($vo["player"]); ?></td><td><?php echo ($vo["team"]); ?></td>
									<td class="active"><?php echo ($vo["avgblock"]); ?><td><?php echo ($vo["sumblock"]); ?></td><td><?php echo ($vo["mpg"]); ?></td>
									<td><?php echo ($vo["gs"]); ?></td>
								</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						</table>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="thumbnail">
								<img src="__PUBLIC__/Images/1.jpg"
								id="j3">
							</div>
							<div class="caption">
								<h3 id="i3">Thumbnail label</h3>
								<p id="k3">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							</div>
						</div>
						<div class="col-md-5">
							<table class="table" id="priBoard">
								<caption><center>NBA个人数据</center></caption>
								<tbody>
									<tr>
										<td>PPG</td>
										<td id="a3">5.4</td>
									</tr>
									<tr>
										<td>RPG</td>
										<td id="b3">5.4</td>
									</tr>
									<tr>
										<td>APG</td>
										<td id="c3">8.6</td>
									</tr>
									<tr>
										<td>SPG</td>
										<td id="d3">2.1</td>
									</tr>
									<tr>
										<td>BPG</td>
										<td id="e3">0.2</td>
									</tr>
									<tr>
										<td>FT%</td>
										<td id="f3">83.5%</td>
									</tr>
									<tr>
										<td>3P%</td>
										<td id="g3">29.9%</td>
									</tr>
									<tr>
										<td>MPG</td>
										<td id="h3">34.4</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-md-4">
							<div id="myContainer3" style="width:320px;height:350px"></div>
						</div>
					</div>
					<a class="btn btn-primary pull-right" href="__URL__/moreBlock">更多>></a>
					<div class="page-header"></div>
				</div>
				<!-- 失误榜显示部分 -->
				<div class="row" id="5F">
					<div class="row">
						<ol class="breadcrumb col-xs-12 col-md-12">
							<li><a href="#">失误榜</a></li>
						</ol>
					</div>
					<div class="row">
						<table class="table table-bordered table-hover col-md-12">
							<tr  class="active">
								<th>排名</th><th>球员</th><th>球队</th><th>场均失误</th><th>失误总数</th>
								<th>场均时间</th><th>参赛场次</th>
							</tr>
							<?php if(is_array($fault)): $i = 0; $__LIST__ = $fault;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr onmouseover="info4('<?php echo ($vo["id"]); ?>')" class="tmd4">
									<td><?php echo ($key+1); ?></td><td><?php echo ($vo["player"]); ?></td><td><?php echo ($vo["team"]); ?></td>
									<td class="active"><?php echo ($vo["avgfault"]); ?><td><?php echo ($vo["sumfault"]); ?></td><td><?php echo ($vo["mpg"]); ?></td>
									<td><?php echo ($vo["gs"]); ?></td>
								</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						</table>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="thumbnail">
								<img src="__PUBLIC__/Images/1.jpg"
								id="j4">
							</div>
							<div class="caption">
								<h3 id="i4">Thumbnail label</h3>
								<p id="k4">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							</div>
						</div>
						<div class="col-md-5">
							<table class="table" id="priBoard">
								<caption><center>NBA个人数据</center></caption>
								<tbody>
									<tr>
										<td>PPG</td>
										<td id="a4">5.4</td>
									</tr>
									<tr>
										<td>RPG</td>
										<td id="b4">5.4</td>
									</tr>
									<tr>
										<td>APG</td>
										<td id="c4">8.6</td>
									</tr>
									<tr>
										<td>SPG</td>
										<td id="d4">2.1</td>
									</tr>
									<tr>
										<td>BPG</td>
										<td id="e4">0.2</td>
									</tr>
									<tr>
										<td>FT%</td>
										<td id="f4">83.5%</td>
									</tr>
									<tr>
										<td>3P%</td>
										<td id="g4">29.9%</td>
									</tr>
									<tr>
										<td>MPG</td>
										<td id="h4">34.4</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-md-4">
							<div id="myContainer4" style="width:320px;height:350px"></div>
						</div>
					</div>
					<a class="btn btn-primary pull-right" href="__URL__/moreFault">更多>></a>
					<div class="page-header"></div>
				</div>

				<div class="row" id="6F">
					<div class="row">
						<ol class="breadcrumb col-xs-12 col-md-12">
							<li><a href="#">神投榜</a></li>
						</ol>
					</div>
					<table class="table table-bordered table-hover col-md-12">
						<tr  class="active">
							<th>排名</th><th>球员</th><th>球队</th><th>投篮命中率</th><th>投篮命中数</th>
							<th>投篮出手数</th>
							<th>场均时间</th><th>参赛场次</th>
						</tr>

						<?php if(is_array($shortrate)): $i = 0; $__LIST__ = $shortrate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr onmouseover="info5('<?php echo ($vo["id"]); ?>')" class="tmd5">
								<td><?php echo ($key+1); ?></td><td><?php echo ($vo["player"]); ?></td><td><?php echo ($vo["team"]); ?></td>
								<td><?php echo ($vo["shortrate"]); ?><td><?php echo ($vo["sumshort"]); ?></td><td><?php echo ($vo["shotcell"]); ?></td><td><?php echo ($vo["mpg"]); ?></td>
								<td><?php echo ($vo["gs"]); ?></td>
							</tr>
							<!-- <tr onmouseover="info4('<?php echo ($vo["id"]); ?>')" class="tmd4">
								<td><?php echo ($key+1); ?></td><td><?php echo ($vo["player"]); ?></td><td><?php echo ($vo["team"]); ?></td>
								<td class="active"><?php echo ($vo["avgfault"]); ?><td><?php echo ($vo["sumfault"]); ?></td><td><?php echo ($vo["mpg"]); ?></td>
								<td><?php echo ($vo["gs"]); ?></td>
							</tr>
 --><?php endforeach; endif; else: echo "" ;endif; ?>
					</table>
					<div class="row">
						<div class="col-md-3">
							<div class="thumbnail">
								<img src="__PUBLIC__/Images/1.jpg"
								id="j5">
							</div>
							<div class="caption">
								<h3 id="i4">Thumbnail label</h3>
								<p id="k4">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							</div>
						</div>
						<div class="col-md-5">
							<table class="table" id="priBoard">
								<caption><center>NBA个人数据</center></caption>
								<tbody>
									<tr>
										<td>PPG</td>
										<td id="a5">5.4</td>
									</tr>
									<tr>
										<td>RPG</td>
										<td id="b5">5.4</td>
									</tr>
									<tr>
										<td>APG</td>
										<td id="c5">8.6</td>
									</tr>
									<tr>
										<td>SPG</td>
										<td id="d5">2.1</td>
									</tr>
									<tr>
										<td>BPG</td>
										<td id="e5">0.2</td>
									</tr>
									<tr>
										<td>FT%</td>
										<td id="f5">83.5%</td>
									</tr>
									<tr>
										<td>3P%</td>
										<td id="g5">29.9%</td>
									</tr>
									<tr>
										<td>MPG</td>
										<td id="h5">34.4</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-md-4">
							<div id="myContainer5" style="width:320px;height:350px"></div>
						</div>
					</div>
					<a class="btn btn-primary pull-right" href="__URL__/moreShot">更多>></a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>