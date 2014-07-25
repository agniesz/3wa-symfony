<?php

namespace Troiswa\PublicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Troiswa\PublicBundle\Entity\Acteur;

use Symfony\Component\HttpFoundation\Request;

use Troiswa\PublicBundle\Form\ActeurType;

class ActeurController extends Controller
{






   public function ActeursAction()
   {
             /* $film = array(array('id'=> 1,'synopsis'=> "desc1", 'titre'=> "titre1", 'categorie'=> "horreur"),

                             array('id'=> 2,'synopsis'=> "desc2", 'titre'=>"titre2", 'categorie'=> "action"),

                             array('id'=> 3,'synopsis'=> "desc3", 'titre'=>"titre3", 'categorie'=> "comedie"),

                             array('id'=> 4,'synopsis'=> "desc4", 'titre'=>"titre4", 'categorie'=> "aventure"));*/

                  //die (var_dump($film)); //test ok 

      $em = $this-> getDoctrine() -> getManager();

      $acteurs = $em -> getRepository('TroiswaPublicBundle:Acteur') -> findAll();


      //die (\Doctrine\Common\Util\Debug::dump($films));
      //test ok

        return $this->render('TroiswaPublicBundle:Acteur:acteurs.html.twig', array('actrices'=>$acteurs));

             
   } 


  public function unActeurAction($id)
  {
       $em = $this-> getDoctrine() -> getManager();

       $unActeur = $em -> getRepository('TroiswaPublicBundle:Acteur') -> find($id); 

        return $this->render('TroiswaPublicBundle:Acteur:unActeur.html.twig', array('actrice'=>$unActeur));
  }


  public function AjouterAction(Request $request)
  {
      $acteur=new Acteur();
      $formActeur= $this->createForm(new ActeurType(), $acteur)

          -> add('ajouter','submit');
          

         /* if("POST"===$request->getMethod()){
            
            //die ('POST');

            $formActeur->bind($request);*/

            $formActeur->handleRequest($request);


              if($formActeur->isValid())
              {

                $acteur->upload();

                $em=$this->getDoctrine()->getManager();

                $em->persist($acteur);

                $em->flush();

                $session=$request->getSession();

                $session->getFlashBag()->add('info', 'Acteur crée');


                  return $this->redirect($this->generateUrl('troiswa_public_ajouter'));

              }


         /*}*/  

        return $this->render('TroiswaPublicBundle:Acteur:ajouter.html.twig',array('formActeur'=>$formActeur->createView()));
  }


  public function UpdateAction($number,Request $request)
  {
       $em = $this-> getDoctrine() -> getManager();

       $update = $em -> getRepository('TroiswaPublicBundle:Acteur') -> find($number);

       $formActeur= $this->createFormBuilder($update)

          -> add('prenom','text')
          -> add('nom')
          -> add('dateNaissance')
          -> add('sexe')
          -> add('nationalite')
          -> add('bigraphie')
          -> add('ajouter','submit')
          -> getForm();


          /*if("POST"===$request->getMethod())
          {
            
            //die ('POST');

            $formActeur->bind($request);*/


            $formActeur->handleRequest($request);

              if($formActeur->isValid())
              {

                $em=$this->getDoctrine()->getManager();

                $em->persist($update);

                $em->flush();

                $session=$request->getSession();

                $session->getFlashBag()->add('info', 'Fiche acteur a été mise à jour');

                  return $this->redirect ($this->generateUrl('troiswa_public_update',array ('number'=>$number)));
                  

              }

          /*}*/  

       

        return $this->render('TroiswaPublicBundle:Acteur:update.html.twig', array('formUpdate'=>$formActeur->createView()));
  }

                                   
}    