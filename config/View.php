<?php

class View{
  private $_controlador;

  public function __construct(Rutas $peticion)
  {
      $this->_controlador =$peticion->getControlador();
      
  }

  public function renderizar($vista)
  {
    
    $rutaView=ROOT.'Views'.DS.$this->_controlador.DS.$vista.'_view.php';

      if(is_readable($rutaView)){
          include_once $rutaView;
      }
      else{
          echo $rutaView;
          throw new Exception('Error de vista: '.$rutaView);
      }


    }

  }