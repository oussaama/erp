<?php

namespace ERPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
/**
 * Document
 *
 * @ORM\Table(name="document")
 * @ORM\Entity(repositoryClass="ERPBundle\Repository\DocumentRepository")
 */
class Document
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
     * @var string
     *
     *  @ORM\Column(type="array")
     */
    private $identifiant;

    /**
     * @var string
     *
     *  @ORM\Column(type="array")
     */
    private $diplome;

    /**
     * @var string
     *
     *  @ORM\Column(type="array")
     */
    private $note;


    /**
     * @var string
     *
     *  @ORM\Column(type="array",nullable=true)
     */
    private $extrait;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set identifiant
     *
     * @param string $identifiant
     *
     * @return Document
     */
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;

        return $this;
    }

    /**
     * Get identifiant
     *
     * @return string
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * Set diplome
     *
     * @param string $diplome
     *
     * @return Document
     */
    public function setDiplome($diplome)
    {
        $this->diplome = $diplome;

        return $this;
    }

    /**
     * Get diplome
     *
     * @return string
     */
    public function getDiplome()
    {
        return $this->diplome;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return Document
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set etudiant
     *
     * @param \ERPBundle\Entity\Etudiant $etudiant
     *
     * @return Document
     */
    public function setEtudiant(\ERPBundle\Entity\Etudiant $etudiant = null)
    {
        $this->etudiant = $etudiant;

        return $this;
    }

    /**
     * Get etudiant
     *
     * @return \ERPBundle\Entity\Etudiant
     */
    public function getEtudiant()
    {
        return $this->etudiant;
    }

    public function __construct(){
        $this->fichierId=array();
    }

    public $fichierId;

    function setFichierId(array $file) {
        $this->fichierId = $file;
    }

    public function getUploadDir() {
        return 'uploads/etablissement/'.date('Y').'/etudiant';
    }

    public function getAbsolutRoot() {
        return $this->getUploadDir() . $this->identifiant;
    }

    public function getWebpath() {
        return $this->getUploadDir() . '/' . $this->identifiant;
    }

    public function getUploadRoot() {
        return __DIR__ . '../../../../web/' . $this->getUploadDir() . '/';
    }

    public function uploadIdentifiant($id)
    {
        $this->identifiant =array();
        if (!is_dir($this->getUploadRoot())) {
            mkdir($this->getUploadRoot(), '0777', true);
        }
        if(!is_dir($this->getUploadRoot().'/'.$id)){
            mkdir($this->getUploadRoot().'/'.$id);
        }
        foreach($this->fichierId as $file)
        {
            $path = md5(uniqid()) . '.' .$file->guessExtension();
            array_push ($this->identifiant, $path);
            move_uploaded_file($file->getPathName(), __DIR__ . '../../../../web/' . $this->getUploadDir() .'/'.$id.'/'.$path);
            unset($file);
        }
    }


    private $fichierDiplome;

    function getFichierDiplome() {
        return $this->fichierDiplome;
    }

    function setFichierDiplome(array $file) {
        $this->fichierDiplome = $file;
    }

    public function uploadDiplome($id) {
        $this->diplome =array();
        if (!is_dir($this->getUploadRoot())) {
            mkdir($this->getUploadRoot(), '0777', true);
        }
        if(!is_dir($this->getUploadRoot().'/'.$id)){
            mkdir($this->getUploadRoot().'/'.$id);
        }
        foreach($this->fichierDiplome as $file)
        {
            $path = md5(uniqid()) . '.' .$file->guessExtension();
            array_push ($this->diplome, $path);
            move_uploaded_file($file->getPathName(), __DIR__ . '../../../../web/' . $this->getUploadDir() .'/'.$id.'/'.$path);
            unset($file);
        }
    }

    private $fichierNote;

    function getFichierNote() {
        return $this->fichierNote;
    }

    function setFichierNote(array $file) {
        $this->fichierNote = $file;
    }
    public function uploadNote($id) {
        $this->note =array();
        if (!is_dir($this->getUploadRoot())) {
            mkdir($this->getUploadRoot(), '0777', true);
        }
        if(!is_dir($this->getUploadRoot().'/'.$id)){
            mkdir($this->getUploadRoot().'/'.$id);
        }
        foreach($this->fichierNote as $file)
        {
            $path = md5(uniqid()) . '.' .$file->guessExtension();
            array_push ($this->note, $path);
            move_uploaded_file($file->getPathName(), __DIR__ . '../../../../web/' . $this->getUploadDir() .'/'.$id.'/'.$path);
            unset($file);
        }
    }

    /**
     * Set extrait
     *
     * @param array $extrait
     *
     * @return Document
     */
    public function setExtrait($extrait)
    {
        $this->extrait = $extrait;

        return $this;
    }

    /**
     * Get extrait
     *
     * @return array
     */
    public function getExtrait()
    {
        return $this->extrait;
    }

    private $fichierExtrait;

    function getFichierExtrait() {
        return $this->fichierExtrait;
    }

    function setFichierExtrait(array $file) {
        $this->fichierExtrait = $file;
    }

    public function uploadExtrait($id)
    {
        $this->extrait =array();
        if (!is_dir($this->getUploadRoot())) {
            mkdir($this->getUploadRoot(), '0777', true);
        }
        if(!is_dir($this->getUploadRoot().'/'.$id)){
            mkdir($this->getUploadRoot().'/'.$id);
        }

        foreach($this->fichierExtrait as $file)
        {
            $path = md5(uniqid()) . '.' .$file->guessExtension();
            array_push ($this->extrait, $path);
            move_uploaded_file($file->getPathName(), __DIR__ . '../../../../web/' . $this->getUploadDir() .'/'.$id.'/'.$path);
            unset($file);
        }
    }
}
