<?php

class Home_Controller extends Base_Controller {

    public function action_index()
    {
        $classes = DB::table('z_class')
            ->where('l_fid','=',0)
            ->where('l_views','=','显示')
            ->order_by('l_sort','desc')
            ->take(4)
            ->get();
        $linkes = DB::table('z_link')
            ->order_by('w_sort','desc')
            ->get();
        $view = View::make('home.index')
            ->with('classes',$classes)
            ->with('linkes',$linkes);
        return $view;
    }
    /**
     * top.php
     *
     * top.php
     * 
     * @author weiyongq@gmail.com
     */
    public function action_top()
    {
        
        $allnum = "0";
        $allprice = "0";
        $welcominfo="";
        if(Session::has('GetTempNum')){
            $GetTempNum1 = trim($_SESSION["GetTempNum"]); //取用户访问网站临时标识号
            $carList = "SELECT z_car.l_id, z_car.l_productid, z_car.l_num, z_car.l_datetime, z_car.l_tempnum, z_product.l_fid, z_product.l_classid, z_product.l_name, z_product.l_price1, z_product.l_price2, z_car.l_extprice1, z_car.l_extprice2 FROM z_car INNER JOIN z_product ON z_car.l_productid = z_product.l_id";
            $sql = "select sum(l_num) as allnum,sum(l_price2*l_num) as allprice from (" . $carList . ") as tb where l_tempnum='" . $GetTempNum1 . "'";
            $all = DB::query($sql)->first();
            if ($all) {
                $allnum = $all->allnum;
                $allprice = $all->allprice;
            } 
        }
        if(Auth::user()){
            $welcominfo = "尊敬的[ <strong><font color=#0000FF>" . Auth::user()->username . " </font></strong> ] 会员！欢迎您的到来！";
        }

        $products = DB::table('z_product')
            ->where('l_views','=','显示')
            ->order_by('l_clicknum')
            ->take(10)
            ->get();
        $view = View::make('include.top')
            ->with('allnum',$allnum)
            ->with('allprice',$allprice)
            ->with('welcominfo',$welcominfo)
            ->with('products',$products);
        return $view;
    }
    /**
     * @author weiyongq@gmail.com
     */
    public function action_firstProducttj()
    {
        $p_sql = "select * from z_product where l_tuijian='推荐'
and l_views='显示' order by l_sort desc limit 6";
        $pic_sql = "select * from z_productpic where l_productid=";
        $products = DB::query($p_sql);
        foreach($products as $product){
            $product->pic = DB::query($pic_sql.$product->l_id." and l_views='显示' order by l_sort desc limit 1");
        }
        $view = View::make('include.firstproducttj')
            ->with('products',$products);
        return $view;
    }

    /**
     * @author weiyongq@gmail.com
     */
    public function action_firstHotProductlist()
    {
        $products = DB::table('z_product')
            ->where('l_views','=','显示')
            ->order_by('l_shuliang','desc')
            ->take(6)
            ->get();
        foreach($products as $product){
            $product->pic=
                DB::table('z_productpic')
                ->where('l_views','=','显示')
                ->order_by('l_sort','desc')
                ->first();
        }
        $view = View::make('include.firsthotproductlist')
            ->with('products',$products)
            ;
        return $view;
    }
    /**
     * @author weiyongq@gmail.com
     */
    public function action_First_right_list_1()
    {
        $hots = DB::table('z_hot')
            ->where('l_views','=','显示')
            ->order_by('l_sort','desc')
            ->take(3)
            ->get();
        $sql = "SELECT z_user.Meid, z_user.Cnum, z_user.NickName, z_user.UserName, z_order.l_id, z_order.l_orderform, z_order.l_price, z_order.l_mobile, z_order.l_ordertime, z_order.l_orderstatu FROM z_user INNER JOIN z_order ON z_user.Meid = z_order.l_userid";
        $new_orders = DB::query("SELECT * from ("
                               .$sql.") as tb where tb.l_orderstatu='新订单'"); 
        $view = View::make('include.first_right_list_1')
            ->with('hots',$hots)
            ->with('new_orders',$new_orders);
        return $view;
    }

    /**
     * @author weiyongq@gmail.com
     */
    public function action_First_right_list_3()
    {
        $comates = DB::table('z_comate')
            ->where('w_views','=','显示')
            ->order_by('w_sort','desc')
            ->take(6)
            ->get();;
        $view = View::make('include.first_right_list_3')
            ->with('comates',$comates);
        return $view;
    }

    /**
     * @author weiyongq@gmail.com
     */
    public function action_copyright()
    {
        $contact = DB::table('z_contact')
            ->first();
        $copyright = DB::table('w_copyright')
            ->first();
        $view = View::make('include.copyright')
            ->with('contact',$contact)
            ->with('copyright',$copyright);
        return $view;
    }
}