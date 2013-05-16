<?php
class User_Controller extends Controller {
    public $restful=true;
    private $per_page = 25;
    public $messages = array(
        'email'
        => '格式不正确！',
        'required'
        => '不能为空！',
        'confirmed'
        =>'密码不匹配'
    );

    public $rules = array(
        'username'=>'required',
        'password'=>'required|confirmed'

    );
    /**
     * @author weiyongq@gmail.com
     */
    public function get_login()
    {
        $user = Auth::user();
        $loginStatu = '请输入用户名与密码';
        $view = View::make('myshop.user_login')
            ->with('loginStatu',$loginStatu);
        return $view;
    }

    public function post_login(){
        $userdata = array(
            'username'=>Input::get('username'),
            'password'=>Input::get('password')
        );
        if ( Auth::attempt($userdata) )
            {
                // we are now logged in, go to home
                return Redirect::to('admin.html');
            }
        else
            {
                // auth failure! lets go back to the login
                return Redirect::to('login.html')
                    ->with('login_errors', true);
                // pass any error notification you want
                // i like to do it this way :)
            }

    }
    
}