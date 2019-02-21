<?php

namespace FixItBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Offre
 *
 * @ORM\Table(name="offre")
 * @ORM\Entity(repositoryClass="FixItBundle\Repository\OffreRepository")
 */
class Offre
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Service")
     * @ORM\JoinColumn (name="Service_id", referencedColumnName="id")
     */
    private $service;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn (name="user_id", referencedColumnName="id")
     */
    private $User;

    /**
     * @var int
     *
     * @ORM\Column(name="budget", type="integer")
     */
    private $budget;

    /**
     *@ORM\Column(type="string" , length=255)
     */
    private $Titre;
    /**
     *@ORM\Column(type="string" , length=255)
     */
    private $Description;


    /**
     * @return int
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * @param int $budget
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;
    }


    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->User;
    }

    /**
     * @param mixed $User
     */
    public function setUser($User)
    {
        $this->User = $User;
    }

    /**
     * @return mixed
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param mixed $service
     */
    public function setService($service)
    {
        $this->service = $service;
    }


    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param mixed $Description
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
    }
    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->Titre;
    }

    /**
     * @param mixed $Titre
     */
    public function setTitre($Titre)
    {
        $this->Titre = $Titre;
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

