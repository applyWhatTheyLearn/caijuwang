<?php
class Utils_Controller extends Controller {
    public $restful=true;
    public function get_fileDel(){
        $name=Input::get('name');
        $path='../../ueditor/php/upload/3281364827863.jpg';
        unlink($path);
    }
}