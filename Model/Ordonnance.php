<?php



/**
 * Description of Ordonannce
 *
 * @author Corentin
 */
class Ordonnance
{

    /**
     * Attributs
     */
    public $Id_Ordonnance;
    public $Date_Ordonnance;
    public $Detail_Medicament;
    public $Id_Consultation;

    /**
     * 
     */
    public function __construct()
    {
    }

    /**
     * 
     * @return type
     */
    public function getId_Ordonnance()
    {
        return $this->Id_Ordonnance;
    }

    /**
     * 
     * @return type
     */
    public function getDate_Ordonnance()
    {
        return $this->Date_Ordonnance;
    }

    /**
     * 
     * @return type
     */
    public function getDetail_Medicament()
    {
        return $this->Detail_Medicament;
    }

    /**
     * 
     * @return type
     */
    public function getId_Consultation()
    {
        return $this->Id_Consultation;
    }

    /**
     * 
     * @param type $Id_Ordonnance
     */
    public function setId_Ordonnance($Id_Ordonnance)
    {
        $this->Id_Ordonnance = $Id_Ordonnance;
    }
    /**
     * 
     * @param type $Date_Ordonnance
     */
    public function setDate_Ordonnance($Date_Ordonnance)
    {
        $this->Date_Ordonnance = $Date_Ordonnance;
    }
    /**
     * 
     * @param type $Detail_Medicament
     */
    public function setDetail_Medicament($Detail_Medicament)
    {
        $this->Detail_Medicament = $Detail_Medicament;
    }
    /**
     * 
     * @param type $Id_Consultation
     */
    public function setId_Consultation($Id_Consultation)
    {
        $this->Id_Consultation = $Id_Consultation;
    }
}
