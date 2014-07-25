<?php

namespace Troiswa\PublicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Troiswa\PublicBundle\Entity\Categorie;





class CategorieController extends Controller
{

  public function categoriesAction()
   {

      $em = $this-> getDoctrine() -> getManager();

      $categories = $em -> getRepository('TroiswaPublicBundle:Categorie') -> findAll();


      //die (\Doctrine\Common\Util\Debug::dump($films));
      //test ok

        return $this->render('TroiswaPublicBundle:Categorie:categories.html.twig', array('categories'=>$categories));
        
      
             
   } 


 

                                   
}    