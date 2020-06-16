<?php

  class Home
  {

    function __construct()
    {
      
    }

    public function Inicio()
    {
       $smarty=new Smarty();
       $smarty->display('Default.tpl');
    }

    public function Fun2()
    {
     $model=new Usuarios ();

     $consulta=$model->BuscarUsuario("user","pass");
     var_dump($consulta);
    }
  }
 ?>
