<?php


class IndexController extends Controller
{
    public function index($id='',$name=''){
        $this->view('Index',['id' =>$id, 'name' =>$name]);
        $this->view->page_title = 'INDEX';
        $this->view->render();
    }
}