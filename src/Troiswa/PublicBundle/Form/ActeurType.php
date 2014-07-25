<?php

namespace Troiswa\PublicBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ActeurType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            -> add('prenom','text', array('required'=>false))
            -> add('nom')
            -> add('fichier','file')

       /*   -> add('dateNaissance', 'date', array(
    'widget' => 'single_text',
    'format' => 'yyyy-MM-dd',))*/

            -> add('dateNaissance', 'date', array(
    'widget' => 'choice',
    'years' => range ( Date('Y'), '1900')))

            -> add('sexe', 'choice', array(  
    'choices'=> array('1' => 'Masculin', '0' => 'Féminin'),
           'expanded'=> true, ))

            -> add('nationalite')
            -> add('bigraphie')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Troiswa\PublicBundle\Entity\Acteur'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'troiswa_publicbundle_acteur';
    }
}
