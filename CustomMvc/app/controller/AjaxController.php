<?php


class AjaxController extends Controller
{
    public function Mensagem($id_sala=''){
        $this->daoUsuario = new Dao('Usuarios');
        $this->set('TESTE',$this->daoUsuario->findAll());

        $this->view('Tabela',['id_sala' =>$id_sala]);
        $this->view->page_title = 'INDEX';
        $this->view->ajax();
    }
}