<?php

namespace Troiswa\PublicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Validator\Constraints as Assert;

class MainController extends Controller
{
    public function indexAction()
    {

      $em = $this-> getDoctrine()->getManager();
      $allFilmsByCategorie = $em -> getRepository('TroiswaPublicBundle:Film')->getNbFilmByCategorie();

        return $this->render('TroiswaPublicBundle:Main:index.html.twig',array('allfilmbycategory' => $allFilmsByCategorie));
    }


#TroiswaPublicBundle ----nom de notre bundle
#Default--- cotroller
#index -----fonction indexAction 


    public function bonjourAction()
    {
        return $this->render('TroiswaPublicBundle:Main:bonjour.html.twig');
    }


     public function ageAction($number)
    {
        return $this->render('TroiswaPublicBundle:Main:age.html.twig', array('mon_age'=>$number));
    }

    public function competenceAction()
    {

        $competences = array('php' => array('note'=> 10, 'couleur'=>"#ffec03"), 
                             'html' =>array('note'=> 7, 'couleur'=>"#66CC66"),
                             'css' => array('note'=> 8, 'couleur'=>"#ffec03"),
                             'js' =>  array('note'=> 5, 'couleur'=>"#222222"));
        return $this->render('TroiswaPublicBundle:Main:competence.html.twig'
                                    , array('competence'=>$competences));
    }


   public function ContactAction(Request $request)
    {

        $formContact= $this->createFormBuilder()

          -> add('nom', 'text', 
                array(
                    'constraints'=> new Assert\NotBlank()))

          -> add('mail', null, 
                array(
                    'constraints'=>array(
                        new Assert\NotBlank(),
                        new Assert\Email(),
                    )
                )
            )

          -> add('phone', null, 
                array(
                    'constraints'=> new Assert\Regex(
                        array(
                        'pattern' => '`^0[1-68][0-9]{8}$`',
                        'match'   => true,
                        'message' => 'Le no de tél n est pas valide'
                        )
                      )
                    )
                )


          

          -> add('message','textarea', 
                array(
                    'constraints'=>array(
                        new Assert\NotBlank(),
                        new Assert\Length(array(
                            'min' => "500",
                            'minMessage' => "Votre nom doit faire au moins 500 caractères"
                            )
                        )
                    )
                )
            )

          -> add('ajouter','submit')
          -> getForm();

        
   
    
        $formContact->handleRequest($request);

              if($formContact->isValid())
              {

                $nom=$formContact->get('nom')->getData();
                $mail=$formContact->get('mail')->getData();
                $phone=$formContact->get('phone')->getData();
                $message=$formContact->get('message')->getData();
                $email= \Swift_Message::newInstance()

                      -> setSubject('Formulaire de contact')
                      -> setForm('$email client')
                      -> setTo('agnieszka.jozwik.turcotte@gmal.com')
                      -> setBody($this-> renderView('TroiswaPublicBundle:Mail:mailcontact.html.twig', array('name=>$nom')));


                      $this->get('mails')->send($mail);    

               # $em=$this->getDoctrine()->getManager();

               # $em->persist($update);

               # $em->flush();

               # $session=$request->getSession();

                $session->getFlashBag()->add('info', '
                    Votre message a été envoyé avec succes');

                  return $this->redirect ($this->generateUrl('troiswa_public_contact'));
                  

              }

   
  return $this->render('TroiswaPublicBundle:Main:contact.html.twig',array('formContact'=>$formContact->createView()));
 
} 

}



