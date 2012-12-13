<?php

namespace MDW\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    //-- Simulamos obtener los datos de la base de datos cargando los artículos a un array
    private $articulos = array(
        array('id' => 1, 'title' => '<b>Articulo Numero 1</b>', 'created' => '2011-01-01'),
        array('id' => 2, 'title' => 'Articulo Numero 2', 'created' => '2011-01-01'),
        array('id' => 3, 'title' => 'Articulo Numero 3', 'created' => '2011-01-01')
    );

    public function indexAction($name) {
        return $this->render('MDWDemoBundle:Default:index.html.twig', array('name' => $name));
    }

    public function articulosAction() {
        $articulos = $this->articulos;
        return $this->render('MDWDemoBundle:Default:articulos.html.twig', array('articulos' => $articulos));
    }

    public function articuloAction($id) {
        
        $articulo = null;
        foreach ($this->articulos as $art) {
            if($art['id'] == $id){
                $articulo = $art;
                break;
            }           
        }
        
        if(is_null($articulo))
            $articulo = array('id' => 'no encontrado', 'title' => '', 'created' => '');
        return $this->render('MDWDemoBundle:Default:articulo.html.twig', array('articulo' => $articulo));
    }
    
    public function helloAction() {
        return new \Symfony\Component\HttpFoundation\Response('Hola! :)');
    }

}
