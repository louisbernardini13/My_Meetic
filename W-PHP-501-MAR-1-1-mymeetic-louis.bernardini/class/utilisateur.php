<?php

class utilisateur {
    private $id;
    private $nom;
    private $prenom;
    private $ville;
    private $date_de_naissance;
    private $genre;
    private $email;
    private $mot_de_passe;
    private $loisir;
    
    function __construct($data = false) {
        if($data){
            if (isset($data['id']) && $data['id']){
                $this->id = $data['id'];
            }
            $this->nom = $data['nom'];
            $this->prenom = $data['prenom'];
            $this->ville = $data['ville'];
            $this->date_de_naissance = str_replace('-', '', $data['date_de_naissance']);
            $this->genre = $data['genre'];
            $this->email = $data['email'];
            $this->mot_de_passe = hash("sha256", $data['mot_de_passe']);
            $this->loisir = $data['loisir'];
        }  
    }

    function save() {
        return Sql::update( (array) get_object_vars($this));
    }
    function get() {

    }
    function checkLogin($email, $mot_de_passe) {
        $userCheck = Sql::select("SELECT * FROM utilisateurs WHERE email='$email' 
        AND mot_de_passe='".hash('sha256', $mot_de_passe)."';");
        // echo "SELECT * FROM utilisateurs WHERE email='$email' 
        // AND mot_de_passe='".hash('sha256', $mot_de_passe)."'";
        if($userCheck == true){
            echo "Bonjour $email";
        }
    }
}



?>