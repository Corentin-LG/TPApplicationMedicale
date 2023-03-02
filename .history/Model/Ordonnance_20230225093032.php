<?php



/**
 * Description of Ordonance
 *
 * @author Corentin
 */
class Ordonance
{

    /**
     * Attributs
     */
    public $Id_Ordonance;
    public $Date_Ordonance;
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
    public function getId_Ordonance()
    {
        return $this->Id_Ordonance;
    }

    /**
     * 
     * @return type
     */
    public function getDate_Ordonance()
    {
        return $this->Date_Ordonance;
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
     * @param type $Id_Ordonance
     */
    public function setId_Ordonance($Id_Ordonance)
    {
        $this->Id_Ordonance = $Id_Ordonance;
    }
    /**
     * 
     * @param type $Date_Ordonance
     */
    public function setDate_Ordonance($Date_Ordonance)
    {
        $this->Date_Ordonance = $Date_Ordonance;
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
