<?php


class Controller
{
    protected $view;
    protected $view_vars = [];
    protected $template;

    public function view($viewName,$data =[]){
        $view_folder = str_replace('Controller', '', get_class($this)) . DIRECTORY_SEPARATOR;
        $data = array_merge($data, $this->view_vars);
        $this->view = new View($view_folder . $viewName,$data);
        return $this->view;
    }

    //Adiciona variavel a view
    protected function set($name,$value){
        $this->view_vars[$name] = $value;
    }

    protected function get($name){
        $value = $this->view_vars[$name];
        if(!isset($value)){
            throw new Exception('Key not found: ' . $name);
        }
        return $value;
    }
}