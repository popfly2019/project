<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {

	 public function _initialize(){
        if (!$_SESSION['name'] || !$_SESSION['id']) {
            //跳转回登录页面
            $this->error('您还没有登录，请登录......', U('login/index'));
        }else{

        }
    }

    public function checkAll(){
        $getid = $_REQUEST['对应的ID']; //获取选择的复选框的值
        if (!$getid)
            $this->error('未选择记录'); //没选择就提示信息
        $getids = implode(',', $getid); //选择一个以上，就用,把值连接起来(1,2,3)这样
        $id = is_array($getid) ? $getids : $getid; //如果是数组，就把用,连接起来的值覆给$id,否则就覆获取到的没有,号连接起来的值
     //最后进行数据操作,
        $Result = D("对应的数据库")->delete($id);
        $say = '删除成功';
        if ($Result === false) {
            $this->error('操作失败');
        } else {
            $this->success($say);
        }
    }
}