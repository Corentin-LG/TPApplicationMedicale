<?php

/**
 * Description of Util
 *
 * @author Amin
 */

include '../Model/Utilisateur.php';
include '../Model/Secretaire.php';
include '../Model/Medecin.php';
include '../Model/Patient.php';
include '../Model/Consultation.php';
include '../Model/Ordonnance.php';
include '../Model/Rendez_Vous.php';

class Util {
    
    public $serveur = "195.144.11.150";
    public $base = "zdj62853";
    public $usr =  "zdj62853";
    public $pass = "MIN2022!!";
    public $mysqli;
    
    /**
     * 
     * @param type $Login
     * @param type $Passwd
     * @return \Utilisateur
     */
    public function getUtilisateur($Login, $Passwd){
        
        $Utilisateur = NULL;
        
        $Query = "SELECT * FROM utilisateur";
        
        $this->dbConnection();
        
        if ($this->mysqli->connect_error) {
            die('Erreur de connexion ('.$this->mysqli->connect_errno.')'. $this->mysqli->connect_error);
        }
        
        else{
            if(($result = $this->mysqli->query($Query))){
                while($ligne = $result->fetch_assoc()){
                    $_Login = $ligne['Login'];
                    $_Passwd = $ligne['Password'];
                    
                    if( ($Login == $_Login) && ($Passwd == $_Passwd) )
                    {
                         $Utilisateur = new Utilisateur();
                         $Utilisateur->Id_Utilisateur = $ligne['Id_Utilisateur'];
                         $Utilisateur->Login = $ligne['Login'];
                         $Utilisateur->Password = $ligne['Passwd'];
                         $Utilisateur->Type_Utilisateur = $ligne['Type_Utilisateur'];
                         $Utilisateur->Last_Login = $ligne['Last_Login'];
                         
                         if($Utilisateur->getType_Utilisateur()=="Secretaire"){
                             $Secretaire = $this->getSecretaireByID($ligne['Id_Secretaire']);
                             $Utilisateur->setSecretaire($Secretaire);
                         }
                         if($Utilisateur->getType_Utilisateur()=="Medecin"){
                             $Medecin = $this->getMedecinByID($ligne['Id_Medecin']);
                             $Utilisateur->setMedecin($Medecin);
                         }
                         break;
                    }
                }

            }
        
        }
        return $Utilisateur;
    }
    
    /**
     * 
     * @param type $Id
     * @return \Utilisateur
     */
    public function getUtilisateurById($Id){
        $Utilisateur = NULL;
        
        $Query = "SELECT * FROM utilisateur WHERE Id_Utilisateur='".$Id."'";
        
        $this->dbConnection();
        
        if ($this->mysqli->connect_error) {
            die('Erreur de connexion ('.$this->mysqli->connect_errno.')'. $this->mysqli->connect_error);
        }
        
        else{
            if(($result = $this->mysqli->query($Query))){
                while($ligne = $result->fetch_assoc()){
                    $_Id = $ligne['Id_Utilisateur'];
                    
                    if(($Id == $_Id))
                    {
                         $Utilisateur = new Utilisateur();
                         $Utilisateur->Id_Utilisateur = $ligne['Id_Utilisateur'];
                         $Utilisateur->Login = $ligne['Login'];
                         $Utilisateur->Password = $ligne['Password'];
                         $Utilisateur->Type_Utilisateur = $ligne['Type_Utilisateur'];
                         $Utilisateur->Last_Login = $ligne['Last_Login'];
                         
                         if($Utilisateur->getType_Utilisateur()=="Secretaire"){
                             $Secretaire = $this->getSecretaireByID($ligne['Id_Secretaire']);
                             $Utilisateur->setSecretaire($Secretaire);
                         }
                         if($Utilisateur->getType_Utilisateur()=="Medecin"){
                             $Medecin = $this->getMedecinByID($ligne['Id_Medecin']);
                             $Utilisateur->setMedecin($Medecin);
                         }
                         break;
                    }
                }

            }
        
        }
        return $Utilisateur;
    }
    
    /**
     * 
     * @param type $Id
     * @return \Secretaire
     */
    public function getSecretaireByID($Id){
        $Secretaire = NULL;
        
        $Query = "SELECT * FROM secretaire WHERE Id_Secretaire='".$Id."'";
        
        $this->dbConnection();
        
        if ($this->mysqli->connect_error) {
            die('Erreur de connexion ('.$this->mysqli->connect_errno.')'. $this->mysqli->connect_error);
        }
        
        else{
            if(($result = $this->mysqli->query($Query))){
                while($ligne = $result->fetch_assoc()){
                    $_Id = $ligne['Id_Secretaire'];
                    
                    if(($Id == $_Id))
                    {
                         $Secretaire = new Secretaire();
                         $Secretaire->Id_Secretaire = $ligne['Id_Secretaire'];
                         $Secretaire->Nom_Secretaire = $ligne['Nom_Secretaire'];
                         $Secretaire->Prenom_Secretaire = $ligne['Prenom_Secretaire'];
                         break;
                    }
                }

            }
        
        }
        return $Secretaire;
    }
    
    /**
     * 
     * @param type $Id
     * @return \Medecin
     */
    public function getMedecinByID($Id){
        $Medecin = NULL;
        
        $Query = "SELECT * FROM medecin WHERE Id_Medecin='".$Id."'";
        
        $this->dbConnection();
        
        if ($this->mysqli->connect_error) {
            die('Erreur de connexion ('.$this->mysqli->connect_errno.')'. $this->mysqli->connect_error);
        }
        
        else{
            if(($result = $this->mysqli->query($Query))){
                while($ligne = $result->fetch_assoc()){
                    $_Id = $ligne['Id_Medecin'];
                    
                    if(($Id == $_Id))
                    {
                         $Medecin = new Medecin();
                         $Medecin->Id_Medecin = $ligne['Id_Medecin'];
                         $Medecin->Nom_Medecin = $ligne['Nom_Medecin'];
                         $Medecin->Prenom_Medecin = $ligne['Prenom_Medecin'];
                         break;
                    }
                }

            }
        
        }
        return $Medecin;
    }

    /**
     * 
     */
    public function dbConnection(){
        $this->mysqli= new mysqli($this->serveur, $this->usr, $this->pass, $this->base);
        $this->mysqli->set_charset("utf8");
    }
    /*
    public function dbConnection(){
        $this->mysqli = new mysqli($this->serveur, $this->usr, $this->pass, $this->base);
        $this->mysqli->set_charset("utf8");
        if ($this->mysqli->connect_error) {
            error_log('Erreur de connexion ('.$this->mysqli->connect_errno.')'. $this->mysqli->connect_error);
        }
    }*/
           /**
     * 
     * @param type $Nom_Patient
     * @return \Patient[]
     */
    public function searchPatientByName($Nom_Patient){
        $Patients = array();
        
        $Query = "SELECT * FROM patient WHERE Nom_Patient = '" . $_POST['Nom_Patient'] . "'";
        
        $this->dbConnection();
        
        if ($this->mysqli->connect_error) {
            die('Erreur de connexion ('.$this->mysqli->connect_errno.')'. $this->mysqli->connect_error);
        }
        
        else{
            if(($result = $this->mysqli->query($Query))){
                while($ligne = $result->fetch_assoc()){
                    $unPatient = new Patient();
                    $unPatient->Id_Patient = $ligne['Id_Patient'];
                    $unPatient->Nom_Patient = $ligne['Nom_Patient'];
                    $unPatient->Prenom_Patient = $ligne['Prenom_Patient'];
                    $unPatient->Sexe_Patient = $ligne['Sexe_Patient'];
                    $unPatient->Adresse_Patient = $ligne['Adresse_Patient'];
                    $unPatient->Ville_Patient = $ligne['Ville_Patient'];
                    $unPatient->Departement_Patient = $ligne['Departement_Patient'];
                    $unPatient->Date_Naissance_Patient = $ligne['Date_Naissance_Patient'];
                    $unPatient->Situation_Familiale_Patient = $ligne['Situation_Familiale_Patient'];
                    $unPatient->Affiliation_Mutuelle = $ligne['Affiliation_Mutuelle'];
                    $unPatient->Date_Creation_Dossier = $ligne['Date_Creation_Dossier'];
                    array_push($Patients,$unPatient);
                }
            }
        }
        return $Patients;
    }

     /**
     *
     * @return \Rendez_vous[]
     */
    public function getAllRendezVous() : array {
        $RDVs = array();
        
        $Query = "SELECT * FROM rendez_vous";
        
        $this->dbConnection();
        
        if ($this->mysqli->connect_error) {
            die('Erreur de connexion ('.$this->mysqli->connect_errno.')'. $this->mysqli->connect_error);
        }
        
        else{
            if(($result = $this->mysqli->query($Query))){
                while($ligne = $result->fetch_assoc()){
                    $unRDV = new Rendez_Vous();
                    $unRDV->Id_Rendez_Vous = $ligne['Id_Rendez_Vous'];
                    $unRDV->Date_Rendez_Vous = $ligne['Date_Rendez_Vous'];
                    $unRDV->Salle_Rendez_Vous = $ligne['Salle_Rendez_Vous'];
                    $unRDV->Id_Patient = $ligne['Id_Patient'];
                    $unRDV->Id_Medecin = $ligne['Id_Medecin'];
                    array_push($RDVs,$unRDV);
                }
            }
        }
        return $RDVs;
    }
}