<?php

namespace ERPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Etablissement
 *
 * @ORM\Table(name="etablissement")
 * @ORM\Entity(repositoryClass="ERPBundle\Repository\EtablissementRepository")
 */
class Etablissement {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Client", inversedBy="etablissements")
     * @ORM\JoinColumn(name="client", referencedColumnName="id")
     */
    private $client;
    
    /**
     * @ORM\ManyToOne(targetEntity="Entreprise", inversedBy="etablissement")
     * @ORM\JoinColumn(name="entreprise", referencedColumnName="id")
     */
    private $entreprise;

    /**
     * @ORM\OneToMany(targetEntity="Employee", mappedBy="Etablissement")
     */
    private $employee;

    /**
     * @ORM\OneToMany(targetEntity="Etudiant", mappedBy="Etablissement")
     */
    private $etudiant;

    /**
     * @ORM\OneToMany(targetEntity="Enseignant", mappedBy="Etablissement")
     */
    private $enseignant;

    /**
     * @ORM\OneToMany(targetEntity="Classe", mappedBy="Etablissement")
     */
    private $classe;

    /**
     * @ORM\OneToMany(targetEntity="Specialite", mappedBy="Etablissement")
     */
    private $specialite;

    /**
     * @ORM\OneToMany(targetEntity="Niveau", mappedBy="Etablissement")
     */
    private $niveau;

    /**
     * @ORM\OneToMany(targetEntity="UniteEnseignement", mappedBy="Etablissement")
     */
    private $uniteEnseignement;


    /**
     * @ORM\OneToMany(targetEntity="Diplome", mappedBy="Etablissement")
     */
    private $diplome;

    /**
     * @ORM\OneToMany(targetEntity="Parameter", mappedBy="Etablissement")
     */
    private $parameter;

    /**
     * @ORM\OneToMany(targetEntity="Payment", mappedBy="Etablissement")
     */
    private $payment;

    /**
     * @ORM\OneToMany(targetEntity="Salle", mappedBy="Etablissement")
     */
    private $salle;

    /**
     * @ORM\OneToMany(targetEntity="Emploi", mappedBy="etablissement")
     */
    private $emploi;

    /**
     * @var string
     *
     * @ORM\Column(name="signatureDirecteur", type="string", length=255)
     */
    private $signatureDirecteur;

    /**
     * @var string
     *
     * @ORM\Column(name="nomEtablissement", type="string", length=255)
     */
    private $nomEtablissement;

    /**
     * @var string
     *
     * @ORM\Column(name="typeEtablissement", type="string", length=255)
     */
    private $typeEtablissement;

    /**
     * @var string
     *
     * @ORM\Column(name="Academie", type="string", length=255)
     */
    private $academie;

    /**
     * @var string
     *
     * @ORM\Column(name="AnneeScolaire", type="string", length=255)
     */
    private $anneeScolaire;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var int
     *
     * @ORM\Column(name="codePostal", type="integer")
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="departement", type="string", length=255)
     */
    private $departement;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255)
     */
    private $pays;

    /**
     * @var int
     *
     * @ORM\Column(name="tel", type="integer")
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="siteWeb", type="string", length=255)
     */
    private $siteWeb;

    /**
     * @var string
     *
     * @ORM\Column(name="logoEtablissement", type="string", length=255)
     */
    private $logoEtablissement;

    /**
     * @var integer
     *
     * @ORM\Column(name="fax", type="integer")
     */
    private $fax;

    /**
     * @ORM\OneToOne(targetEntity="ERPBundle\Entity\Admin", cascade={"persist"})
     */
    private $Admin;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set signatureDirecteur
     *
     * @param string $signatureDirecteur
     * @return Etablissement
     */
    public function setSignatureDirecteur($signatureDirecteur) {
        $this->signatureDirecteur = $signatureDirecteur;

        return $this;
    }

    /**
     * Get signatureDirecteur
     *
     * @return string
     */
    public function getSignatureDirecteur() {
        return $this->signatureDirecteur;
    }

    /**
     * Set nomEtablissement
     *
     * @param string $nomEtablissement
     * @return Etablissement
     */
    public function setNomEtablissement($nomEtablissement) {
        $this->nomEtablissement = $nomEtablissement;

        return $this;
    }

    /**
     * Get nomEtablissement
     *
     * @return string
     */
    public function getNomEtablissement() {
        return $this->nomEtablissement;
    }

    /**
     * Set academie
     *
     * @param string $academie
     * @return Etablissement
     */
    public function setAcademie($academie) {
        $this->academie = $academie;

        return $this;
    }

    /**
     * Get academie
     *
     * @return string
     */
    public function getAcademie() {
        return $this->academie;
    }

    /**
     * Set anneeScolaire
     *
     * @param string $anneeScolaire
     * @return Etablissement
     */
    public function setAnneeScolaire($anneeScolaire) {
        $this->anneeScolaire = $anneeScolaire;

        return $this;
    }

    /**
     * Get anneeScolaire
     *
     * @return string
     */
    public function getAnneeScolaire() {
        return $this->anneeScolaire;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Etablissement
     */
    public function setAdresse($adresse) {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse() {
        return $this->adresse;
    }

    /**
     * Set codePostal
     *
     * @param integer $codePostal
     * @return Etablissement
     */
    public function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return integer
     */
    public function getCodePostal() {
        return $this->codePostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Etablissement
     */
    public function setVille($ville) {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille() {
        return $this->ville;
    }

    /**
     * Set departement
     *
     * @param string $departement
     * @return Etablissement
     */
    public function setDepartement($departement) {
        $this->departement = $departement;

        return $this;
    }

    /**
     * Get departement
     *
     * @return string
     */
    public function getDepartement() {
        return $this->departement;
    }

    /**
     * Set pays
     *
     * @param string $pays
     * @return Etablissement
     */
    public function setPays($pays) {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays() {
        return $this->pays;
    }

    /**
     * Set tel
     *
     * @param integer $tel
     * @return Etablissement
     */
    public function setTel($tel) {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return integer
     */
    public function getTel() {
        return $this->tel;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Etablissement
     */
    public function setMail($mail) {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail() {
        return $this->mail;
    }

    /**
     * Set siteWeb
     *
     * @param string $siteWeb
     * @return Etablissement
     */
    public function setSiteWeb($siteWeb) {
        $this->siteWeb = $siteWeb;

        return $this;
    }

    /**
     * Get siteWeb
     *
     * @return string
     */
    public function getSiteWeb() {
        return $this->siteWeb;
    }

    /**
     * Set logoEtablissement
     *
     * @param string $logoEtablissement
     * @return Etablissement
     */
    public function setLogoEtablissement($logoEtablissement) {
        $this->logoEtablissement = $logoEtablissement;

        return $this;
    }

    /**
     * Get logoEtablissement
     *
     * @return string
     */
    public function getLogoEtablissement() {
        return $this->logoEtablissement;
    }

    /**
     * Set fax
     *
     * @param integer $fax
     * @return Etablissement
     */
    public function setFax($fax) {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return integer
     */
    public function getFax() {
        return $this->fax;
    }

    private $file;

    function getFile() {
        return $this->file;
    }

    function setFile(UploadedFile $file) {
        $this->file = $file;
    }

    public function getUploadDir() {
        return 'uploads/etablissement/logo';
    }

    public function getAbsolutRoot() {
        return $this->getUploadDir() . $this->logoEtablissement;
    }

    public function getWebpath() {
        return $this->getUploadDir() . '/' . $this->logoEtablissement;
    }

    public function getUploadRoot() {
        return __DIR__ . '../../../../web/' . $this->getUploadDir() . '/';
    }

    public function uploadLogo() {
        if ($this->file === null) {
            return;
        }
        $today = date("Ymd");
        $time = date("His");
        $this->logoEtablissement = 'logo' . $today . $time . '.png';
        if (!is_dir($this->getUploadRoot())) {
            mkdir($this->getUploadRoot(), '0777', true);
        }
        move_uploaded_file($this->file->getPathName(), __DIR__ . '../../../../web/' . $this->getUploadDir() . '/logo' . $today . $time . '.png');
        unset($this->file);
    }
    
    public function removeSignature($s){
        unlink('../../../../web/' . $this->getUploadDir() . '/'.$s);
    }

    private $fichier;

    function getFichier() {
        return $this->fichier;
    }

    function setFichier(UploadedFile $fichier) {
        $this->fichier = $fichier;
    }

    public function getUploadDirS() {
        return 'uploads/etablissement/signature';
    }

    public function getAbsolutRootS() {
        return $this->getUploadDirS() . $this->signatureDirecteur;
    }

    public function getWebpathS() {
        return $this->getUploadDirS() . '/' . $this->signatureDirecteur;
    }

    public function getUploadRootS() {
        return __DIR__ . '../../../../web/' . $this->getUploadDirS() . '/';
    }

    public function uploadSignature() {
        if ($this->fichier === null) {
            return;
        }
        $today = date("Ymd");
        $time = date("His");
        $this->signatureDirecteur = 'signature' . $today . $time . '.png';
        if (!is_dir($this->getUploadRootS())) {
            mkdir($this->getUploadRootS(), '0777', true);
        }
        move_uploaded_file($this->fichier->getPathName(), __DIR__ . '../../../../web/' . $this->getUploadDirS() . '/signature' . $today . $time . '.png');
        unset($this->fichier);
    }

    /**
     * Set user
     *
     * @param \ERPBundle\Entity\User $user
     * @return Etablissement
     */
    public function setUser(\ERPBundle\Entity\User $user = null) {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \ERPBundle\Entity\User
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * Set typeEtablissement
     *
     * @param string $typeEtablissement
     * @return Etablissement
     */
    public function setTypeEtablissement($typeEtablissement) {
        $this->typeEtablissement = $typeEtablissement;

        return $this;
    }

    /**
     * Get typeEtablissement
     *
     * @return string 
     */
    public function getTypeEtablissement() {
        return $this->typeEtablissement;
    }


    /**
     * Set client
     *
     * @param \ERPBundle\Entity\Client $client
     *
     * @return Etablissement
     */
    public function setClient(\ERPBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \ERPBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set admin
     *
     * @param \ERPBundle\Entity\Admin $admin
     *
     * @return Etablissement
     */
    public function setAdmin(\ERPBundle\Entity\Admin $admin = null)
    {
        $this->Admin = $admin;

        return $this;
    }

    /**
     * Get admin
     *
     * @return \ERPBundle\Entity\Admin
     */
    public function getAdmin()
    {
        return $this->Admin;
    }

    /**
     * Set employee
     *
     * @param \ERPBundle\Entity\Employee $employee
     *
     * @return Etablissement
     */
    public function setEmployee(\ERPBundle\Entity\Employee $employee = null)
    {
        $this->employee = $employee;

        return $this;
    }

    /**
     * Get employee
     *
     * @return \ERPBundle\Entity\Employee
     */
    public function getEmployee()
    {
        return $this->employee;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->employee = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add employee
     *
     * @param \ERPBundle\Entity\employee $employee
     *
     * @return Etablissement
     */
    public function addEmployee(\ERPBundle\Entity\employee $employee)
    {
        $this->employee[] = $employee;

        return $this;
    }

    /**
     * Remove employee
     *
     * @param \ERPBundle\Entity\employee $employee
     */
    public function removeEmployee(\ERPBundle\Entity\employee $employee)
    {
        $this->employee->removeElement($employee);
    }

    /**
     * Add etudiant
     *
     * @param \ERPBundle\Entity\Etudiant $etudiant
     *
     * @return Etablissement
     */
    public function addEtudiant(\ERPBundle\Entity\Etudiant $etudiant)
    {
        $this->etudiant[] = $etudiant;

        return $this;
    }

    /**
     * Remove etudiant
     *
     * @param \ERPBundle\Entity\Etudiant $etudiant
     */
    public function removeEtudiant(\ERPBundle\Entity\Etudiant $etudiant)
    {
        $this->etudiant->removeElement($etudiant);
    }

    /**
     * Get etudiant
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEtudiant()
    {
        return $this->etudiant;
    }

    /**
     * Add enseignant
     *
     * @param \ERPBundle\Entity\Enseignant $enseignant
     *
     * @return Etablissement
     */
    public function addEnseignant(\ERPBundle\Entity\Enseignant $enseignant)
    {
        $this->enseignant[] = $enseignant;

        return $this;
    }

    /**
     * Remove enseignant
     *
     * @param \ERPBundle\Entity\Enseignant $enseignant
     */
    public function removeEnseignant(\ERPBundle\Entity\Enseignant $enseignant)
    {
        $this->enseignant->removeElement($enseignant);
    }

    /**
     * Get enseignant
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEnseignant()
    {
        return $this->enseignant;
    }

    /**
     * Set entreprise
     *
     * @param \ERPBundle\Entity\Entreprise $entreprise
     *
     * @return Etablissement
     */
    public function setEntreprise(\ERPBundle\Entity\Entreprise $entreprise = null)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * Get entreprise
     *
     * @return \ERPBundle\Entity\Entreprise
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * Add classe
     *
     * @param \ERPBundle\Entity\Classe $classe
     *
     * @return Etablissement
     */
    public function addClasse(\ERPBundle\Entity\Classe $classe)
    {
        $this->classe[] = $classe;

        return $this;
    }

    /**
     * Remove classe
     *
     * @param \ERPBundle\Entity\Classe $classe
     */
    public function removeClasse(\ERPBundle\Entity\Classe $classe)
    {
        $this->classe->removeElement($classe);
    }

    /**
     * Get classe
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Add specialite
     *
     * @param \ERPBundle\Entity\Specialite $specialite
     *
     * @return Etablissement
     */
    public function addSpecialite(\ERPBundle\Entity\Specialite $specialite)
    {
        $this->specialite[] = $specialite;

        return $this;
    }

    /**
     * Remove specialite
     *
     * @param \ERPBundle\Entity\Specialite $specialite
     */
    public function removeSpecialite(\ERPBundle\Entity\Specialite $specialite)
    {
        $this->specialite->removeElement($specialite);
    }

    /**
     * Get specialite
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Add uniteEnseignement
     *
     * @param \ERPBundle\Entity\UniteEnseignement $uniteEnseignement
     *
     * @return Etablissement
     */
    public function addUniteEnseignement(\ERPBundle\Entity\UniteEnseignement $uniteEnseignement)
    {
        $this->uniteEnseignement[] = $uniteEnseignement;

        return $this;
    }

    /**
     * Remove uniteEnseignement
     *
     * @param \ERPBundle\Entity\UniteEnseignement $uniteEnseignement
     */
    public function removeUniteEnseignement(\ERPBundle\Entity\UniteEnseignement $uniteEnseignement)
    {
        $this->uniteEnseignement->removeElement($uniteEnseignement);
    }

    /**
     * Get uniteEnseignement
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUniteEnseignement()
    {
        return $this->uniteEnseignement;
    }

    /**
     * Add parameter
     *
     * @param \ERPBundle\Entity\Parameter $parameter
     *
     * @return Etablissement
     */
    public function addParameter(\ERPBundle\Entity\Parameter $parameter)
    {
        $this->parameter[] = $parameter;

        return $this;
    }

    /**
     * Remove parameter
     *
     * @param \ERPBundle\Entity\Parameter $parameter
     */
    public function removeParameter(\ERPBundle\Entity\Parameter $parameter)
    {
        $this->parameter->removeElement($parameter);
    }

    /**
     * Get parameter
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Add niveau
     *
     * @param \ERPBundle\Entity\Niveau $niveau
     *
     * @return Etablissement
     */
    public function addNiveau(\ERPBundle\Entity\Niveau $niveau)
    {
        $this->niveau[] = $niveau;

        return $this;
    }

    /**
     * Remove niveau
     *
     * @param \ERPBundle\Entity\Niveau $niveau
     */
    public function removeNiveau(\ERPBundle\Entity\Niveau $niveau)
    {
        $this->niveau->removeElement($niveau);
    }

    /**
     * Get niveau
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Add payment
     *
     * @param \ERPBundle\Entity\Payment $payment
     *
     * @return Etablissement
     */
    public function addPayment(\ERPBundle\Entity\Payment $payment)
    {
        $this->payment[] = $payment;

        return $this;
    }

    /**
     * Remove payment
     *
     * @param \ERPBundle\Entity\Payment $payment
     */
    public function removePayment(\ERPBundle\Entity\Payment $payment)
    {
        $this->payment->removeElement($payment);
    }

    /**
     * Get payment
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Add salle
     *
     * @param \ERPBundle\Entity\Salle $salle
     *
     * @return Etablissement
     */
    public function addSalle(\ERPBundle\Entity\Salle $salle)
    {
        $this->salle[] = $salle;

        return $this;
    }

    /**
     * Remove salle
     *
     * @param \ERPBundle\Entity\Salle $salle
     */
    public function removeSalle(\ERPBundle\Entity\Salle $salle)
    {
        $this->salle->removeElement($salle);
    }

    /**
     * Get salle
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSalle()
    {
        return $this->salle;
    }

    /**
     * Add diplome
     *
     * @param \ERPBundle\Entity\Diplome $diplome
     *
     * @return Etablissement
     */
    public function addDiplome(\ERPBundle\Entity\Diplome $diplome)
    {
        $this->diplome[] = $diplome;

        return $this;
    }

    /**
     * Remove diplome
     *
     * @param \ERPBundle\Entity\Diplome $diplome
     */
    public function removeDiplome(\ERPBundle\Entity\Diplome $diplome)
    {
        $this->diplome->removeElement($diplome);
    }

    /**
     * Get diplome
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDiplome()
    {
        return $this->diplome;
    }

    /**
     * Add emploi
     *
     * @param \ERPBundle\Entity\Emploi $emploi
     *
     * @return Etablissement
     */
    public function addEmploi(\ERPBundle\Entity\Emploi $emploi)
    {
        $this->emploi[] = $emploi;

        return $this;
    }

    /**
     * Remove emploi
     *
     * @param \ERPBundle\Entity\Emploi $emploi
     */
    public function removeEmploi(\ERPBundle\Entity\Emploi $emploi)
    {
        $this->emploi->removeElement($emploi);
    }

    /**
     * Get emploi
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEmploi()
    {
        return $this->emploi;
    }
}
