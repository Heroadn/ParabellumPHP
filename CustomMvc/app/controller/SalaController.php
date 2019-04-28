<?php
class SalaController extends Controller
{
    public function Cadastrar($id='',$name=''){
        //view(nomeView,paramentros /id/name);
        $this->view(['id' =>$id, 'name' =>$name]);
        //Titulo da Pagina
        $this->view->page_title = 'Titulo';
        //Carrega a View
        $this->view->render();
    }
}
