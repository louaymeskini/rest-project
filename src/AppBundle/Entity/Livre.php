<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livre
 *
 * @ORM\Table(name="livre", indexes={@ORM\Index(name="IDX_AC634F9960BB6FE6", columns={"auteur_id"})})
 * @ORM\Entity
 */
class Livre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dispo", type="boolean", nullable=false)
     */
    private $dispo;

    /**
     * @var \Auteur
     *
     * @ORM\ManyToOne(targetEntity="Auteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="auteur_id", referencedColumnName="id")
     * })
     */
    private $auteur;



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
     * Set titre
     *
     * @param string $titre
     *
     * @return Livre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set dispo
     *
     * @param boolean $dispo
     *
     * @return Livre
     */
    public function setDispo($dispo)
    {
        $this->dispo = $dispo;

        return $this;
    }

    /**
     * Get dispo
     *
     * @return boolean
     */
    public function getDispo()
    {
        return $this->dispo;
    }

    /**
     * Set auteur
     *
     * @param \AppBundle\Entity\Auteur $auteur
     *
     * @return Livre
     */
    public function setAuteur(\AppBundle\Entity\Auteur $auteur = null)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return \AppBundle\Entity\Auteur
     */
    public function getAuteur()
    {
        return $this->auteur;
    }
}
