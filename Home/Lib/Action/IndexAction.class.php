<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
	public function index(){
		$m = M('Statistics');
		import('ORG.Util.Page');// 导入分页类
		$count      = $m->count();// 查询满足要求的总记录数
		$Page       = new Page($count,7);// 实例化分页类 传入总记录数和每页显示的记录数
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $m->order('avgscore desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出

		//向篮板榜分配数据
		$board = $m->limit(6)->order('avgboard desc')->select();
		$this->assign('board',$board);

		//向助攻榜分配数据
		$ast = $m->limit(6)->order('avgast desc')->select();
		$this->assign('ast',$ast);

		//向抢断榜分配数据
		$stl = $m->limit(6)->order('avgstl desc')->select();
		$this->assign('stl',$stl);

		//向盖帽榜分配数据
		$block = $m->limit(6)->order('avgblock desc')->select();
		$this->assign('block',$block);

		//向失误榜分配数据
		$fault = $m->limit(6)->order('avgfault desc')->select();
		$this->assign('fault',$fault);

		//向神投榜分配数据
		$shortrate = $m->limit(6)->order('shortrate desc')->select();
		$this->assign('shortrate',$shortrate);
		$this->display(); // 输出模板
	}

	//向更多篮板榜模块分配数据
	public function moreScore(){
		$m = M('Statistics');
		import('ORG.Util.Page');// 导入分页类
		$count      = $m->count();// 查询满足要求的总记录数
		$Page       = new Page($count,14);// 实例化分页类 传入总记录数和每页显示的记录数
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $m->order('avgboard desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display();
	}

	//向更多篮板榜模块分配数据
	public function moreBoard(){
		$m = M('Statistics');
		import('ORG.Util.Page');// 导入分页类
		$count      = $m->count();// 查询满足要求的总记录数
		$Page       = new Page($count,14);// 实例化分页类 传入总记录数和每页显示的记录数
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $m->order('avgboard desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display();
	}

	//向更多助攻榜模块分配数据
	public function moreAst(){
		$m = M('Statistics');
		import('ORG.Util.Page');// 导入分页类
		$count      = $m->count();// 查询满足要求的总记录数
		$Page       = new Page($count,14);// 实例化分页类 传入总记录数和每页显示的记录数
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $m->order('avgast desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display();
	}

	//向更多抢断榜模块分配数据
	public function moreStl(){
		$m = M('Statistics');
		import('ORG.Util.Page');// 导入分页类
		$count      = $m->count();// 查询满足要求的总记录数
		$Page       = new Page($count,14);// 实例化分页类 传入总记录数和每页显示的记录数
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $m->order('avgstl desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display();
	}

	//向更多盖帽榜模块分配数据
	public function moreBlock(){
		$m = M('Statistics');
		import('ORG.Util.Page');// 导入分页类
		$count      = $m->count();// 查询满足要求的总记录数
		$Page       = new Page($count,14);// 实例化分页类 传入总记录数和每页显示的记录数
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $m->order('avgblock desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display();
	}

	//向更多失误榜模块分配数据
	public function moreFault(){
		$m = M('Statistics');
		import('ORG.Util.Page');// 导入分页类
		$count      = $m->count();// 查询满足要求的总记录数
		$Page       = new Page($count,14);// 实例化分页类 传入总记录数和每页显示的记录数
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $m->order('avgfault desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display();
	}

	//向更多神投榜模块分配数据
	public function moreShot(){
		$m = M('Statistics');
		import('ORG.Util.Page');// 导入分页类
		$count      = $m->count();// 查询满足要求的总记录数
		$Page       = new Page($count,14);// 实例化分页类 传入总记录数和每页显示的记录数
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $m->order('shortrate desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display();
	}

	//输出精彩图集页面
	public function image() {
		$this->display(); // 输出模板
	}

	//输出未来小组展示页面
	public function future() {
		$this->display(); // 输出模板
	}

	//向不断更新的篮板榜球员头像和个人数据部分分配数据
	public function info(){
		$m = M("Statistics");
		$result = $m->find($_REQUEST['do']);
		echo json_encode($result);
	}

	//向不断更新的篮板榜图形界面分配数据
	public function myData(){
		$m = M("Statistics");
		$condition['player'] = $_REQUEST['player'];
		$result1 = $m->where($condition)->field('avgscore,shortrate,thirdrate,ft,mpg')->select();
		$namesArray = array();
		$namesArray[0] = intval($result1[0][avgscore]);
		$namesArray[1] = intval($result1[0][shortrate]);
		$namesArray[2] = intval($result1[0][thirdrate]);
		$namesArray[3] = intval($result1[0][ft]);
		$namesArray[4] = intval($result1[0][mpg]);
		echo json_encode($namesArray);
	}
}