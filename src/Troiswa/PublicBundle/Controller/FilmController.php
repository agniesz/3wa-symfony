<?php

namespace Troiswa\PublicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Troiswa\PublicBundle\Entity\Film;

use Symfony\Component\HttpFoundation\Request;

use Troiswa\PublicBundle\Form\FilmType;

class FilmController extends Controller
{






   public function filmsAction()
   {
             /* $film = array(array('id'=> 1,'synopsis'=> "desc1", 'titre'=> "titre1", 'categorie'=> "horreur"),

                             array('id'=> 2,'synopsis'=> "desc2", 'titre'=>"titre2", 'categorie'=> "action"),

                             array('id'=> 3,'synopsis'=> "desc3", 'titre'=>"titre3", 'categorie'=> "comedie"),

                             array('id'=> 4,'synopsis'=> "desc4", 'titre'=>"titre4", 'categorie'=> "aventure"));*/

                  //die (var_dump($film)); //test ok 

      $em = $this-> getDoctrine() -> getManager();

      $films = $em -> getRepository('TroiswaPublicBundle:Film') -> findAll();


      //die (\Doctrine\Common\Util\Debug::dump($films));
      //test ok

        return $this->render('TroiswaPublicBundle:Film:films.html.twig', array('films'=>$films));

             
   } 


  public function unFilmAction($number)
  {
       $em = $this-> getDoctrine() -> getManager();

       $film = $em -> getRepository('TroiswaPublicBundle:Film') -> find($number); 

        return $this->render('TroiswaPublicBundle:Film:unFilm.html.twig', array('lefilm'=>$film));
  }


  public function AjoutFilmAction(Request $request)
  {
      $ajoutFilm =new Film();
      $formFilm= $this->createForm(new FilmType(), $ajoutFilm)

          -> add('ajouter','submit');
          

         /* if("POST"===$request->getMethod()){
            
            //die ('POST');

            $formFilm->bind($request);*/

            $formFilm->handleRequest($request);

            //die(var_dump($request->request->all()));
              if($formFilm->isValid())
              {

                $ajoutFilm-> upload();
                $em=$this->getDoctrine()->getManager();

                $em->persist($ajoutFilm);

                $em->flush();

                $session=$request->getSession();

                $session->getFlashBag()->add('info', 'Film ajouté');

                return $this->redirect ($this->generateUrl('troiswa_public_ajoutfilm'));
                  

              }
              // Permet d'afficher les erreurs du formulaire
              // else
              // {
              //   die(var_dump($request->request->all()));
              //   $validator = $this->get('validator');
              //   $errors = $validator->validate($formFilm);
              //   foreach ($errors as $e) {
              //     echo $e->getMessage().'<br>';
              //   }
              //   die('end');
              // }

         /*}*/  

        return $this->render('TroiswaPublicBundle:Film:ajoutFilm.html.twig',array('formFilm'=>$formFilm->createView()));
  }

                                   
}    