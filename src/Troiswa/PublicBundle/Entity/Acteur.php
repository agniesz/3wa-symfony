<?php

namespace Troiswa\PublicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Acteur
 *
 * @ORM\Table(name="acteur")
 * @ORM\Entity(repositoryClass="Troiswa\PublicBundle\Entity\ActeurRepository")
 */
class Acteur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     * @Assert\Length(
     *      min = "2",
     *      minMessage = "Votre nom doit faire au moins 2 caractères",)
     * @Assert\NotBlank(message="Le champ pénom ne peut pas rester vide")
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min = "5",
     *      minMessage = "Votre nom doit faire au moins {{ 5 }} caractères",)
     */
    private $nom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissance", type="date")
     * @Assert\NotBlank()
     */
    private $dateNaissance;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sexe", type="boolean")
     * @Assert\NotBlank()
     * @Assert\Choice(choices = {"0", "1"}, message = "Choisissez un genre valide.")
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="nationalite", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $nationalite;

    /**
     * @var string
     *
     * @ORM\Column(name="bigraphie", type="text")
     * @Assert\NotBlank()
     */
    private $bigraphie;


    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string",length=255)
     */
    private $image;


    private $fichier;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Acteur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Acteur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     * @return Acteur
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime 
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return Acteur
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set nationalite
     *
     * @param string $nationalite
     * @return Acteur
     */
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Get nationalite
     *
     * @return string 
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * Set bigraphie
     *
     * @param string $bigraphie
     * @return Acteur
     */
    public function setBigraphie($bigraphie)
    {
        $this->bigraphie = $bigraphie;

        return $this;
    }

    /**
     * Get bigraphie
     *
     * @return string 
     */
    public function getBigraphie()
    {
        return $this->bigraphie;
    }


    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        if ($this->sexe == '1') { 

            return "Homme";
            
         }   
         else

            return "Femme";               
    }


    /**
     * Get age
     *
     * @return  
     */
    public function getAge() 
    {     
        $datediff = $this->dateNaissance->diff(new \DateTime()); 

        return $datediff->y; 
    }        
                
    


    /**
     * Set image
     *
     * @param string $image
     * @return Acteur
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

   
  
    public function setFichier($fichier)
    {
        $this->fichier = $fichier;

        return $this;
    }

    public function getFichier()
    {
        return $this->fichier;
    }



    public function upload()
    {
       if (null === $this->fichier)
       {
        return;
       }
   
        $this->fichier->move($this->getUploadRootDir(),
        $this->fichier->getClientOriginalName());

        $this->image=$this->fichier->getClientOriginalName();



     } 

    public function getUploadDir()   
    {
       
        return "upload/Acteurs";
    }   



    public function getWebPath()   
    {

      if (null === $this->image)
       {
        return null;
       }
   
        return $this->getUploadDir().'/'.$this->image;
        
    }

    public function getUploadRootDir()   
    {
       
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }
}
