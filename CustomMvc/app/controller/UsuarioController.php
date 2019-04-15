<?php


class UsuarioController extends Controller
{
    private $daoUsuarios;

    public function __construct(){
        $this->daoUsuarios = new DaoUsuarios;
    }

    public function cadastrar($id='',$name=''){
        $this->view('Cadastrar',['id' =>$id, 'name' =>$name]);
        $this->view->page_title = 'Cadastrar';
        $this->view->render();
    }

    public function cadastrar_post(){
        $Usuario = new Usuarios();
        $Usuario->nome = filter_input(INPUT_POST, 'nome');
        $Usuario->senha = filter_input(INPUT_POST, 'senha');
        $Usuario->email = filter_input(INPUT_POST, 'email');
        $Usuario->admin = filter_input(INPUT_POST, 'admin');
        $Usuario->foto_perfil = filter_input(INPUT_POST, 'foto_perfil');
        $this->daoUsuarios->save($Usuario);
        header('Location:' . '/Usuario/Cadastrar');
    }

    public function login($id='',$name=''){
        $this->view('Login',['id' =>$id, 'name' =>$name]);
        $this->view->page_title = 'Login';
        $this->view->render();
    }

    public function listar($id='',$name=''){
        $this->set('Usuarios',$this->daoUsuarios->findAll());
        $this->set('nome','NOME');
        $this->view('Listar',['id' =>$id, 'name' =>$name]);
        $this->view->page_title = 'Listar';
        $this->view->render();
    }
}