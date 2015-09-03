<?php 
namespace Home\Controller;
use Home\Common\Controller\CommonController;
/**
 * 商品视图
 */
class ProductController extends CommonController {

    public function index () {
        // 暂未加入分页功能
        $this->cate = M('cate')->select();
        $products = M('product')->order('time DESC')->select();

        $list = 0;
        foreach ($products as $key => &$v) {
            $v['list'] = $list;

            if ($list == 3) {
                $list = 0;
                continue;
            }

            $list++;
        }

        $this->products = $products;
        $this->display();
    }

    public function showByCate () {
        $cid = I('cid', 0, 'intval');
        $db = M('product');

        // 分页设置
        $count = $db->where('cid='.$cid)->count();
        $Page = new \Think\Page($count, 36);
        $show = $Page->show();

        $this->cate = I('cateTitle');
        $this->products = M('product')->where('cid='.$cid)->order('time DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->page = $show;
        $this->display();
    }

}
?>