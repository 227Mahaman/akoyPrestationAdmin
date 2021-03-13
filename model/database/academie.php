
<?php 
class academie {
	 public $id;
	 public $ecole;
	 public $filiere;
	 public $date_debut;
	 public $date_fin;
	 public $ville;
	 public $diplome;
	 public $academie=array();



                public function __construct($academie=null) {
                    $this->academie = $academie;
                         
                }

                public function all()
                {
                    return $this->academie;
                }

                public function role($id, $ecole, $filiere, $date_debut, $date_fin, $ville, $diplome)
                    {
                        $this->id = $id;
$this->ecole = $ecole;
$this->filiere = $filiere;
$this->date_debut = $date_debut;
$this->date_fin = $date_fin;
$this->ville = $ville;
$this->diplome = $diplome;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->academie) && count($this->academie)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setEcole($d['ecole']);
$this->setFiliere($d['filiere']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setVille($d['ville']);
$this->setDiplome($d['diplome']);
$this->academie =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id;
                        }
                        
                    }
                    /**
                    * Get the value of ecole
                    */ 
                    public function getEcole($ecole=null)
                    {
                        if ($ecole != null && is_array($this->academie) && count($this->academie)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE ecole = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$ecole]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setEcole($d['ecole']);
$this->setFiliere($d['filiere']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setVille($d['ville']);
$this->setDiplome($d['diplome']);
$this->academie =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->ecole;
                        }
                        
                    }
                    /**
                    * Get the value of filiere
                    */ 
                    public function getFiliere($filiere=null)
                    {
                        if ($filiere != null && is_array($this->academie) && count($this->academie)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE filiere = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$filiere]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setEcole($d['ecole']);
$this->setFiliere($d['filiere']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setVille($d['ville']);
$this->setDiplome($d['diplome']);
$this->academie =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->filiere;
                        }
                        
                    }
                    /**
                    * Get the value of date_debut
                    */ 
                    public function getDate_debut($date_debut=null)
                    {
                        if ($date_debut != null && is_array($this->academie) && count($this->academie)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE date_debut = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$date_debut]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setEcole($d['ecole']);
$this->setFiliere($d['filiere']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setVille($d['ville']);
$this->setDiplome($d['diplome']);
$this->academie =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->date_debut;
                        }
                        
                    }
                    /**
                    * Get the value of date_fin
                    */ 
                    public function getDate_fin($date_fin=null)
                    {
                        if ($date_fin != null && is_array($this->academie) && count($this->academie)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE date_fin = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$date_fin]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setEcole($d['ecole']);
$this->setFiliere($d['filiere']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setVille($d['ville']);
$this->setDiplome($d['diplome']);
$this->academie =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->date_fin;
                        }
                        
                    }
                    /**
                    * Get the value of ville
                    */ 
                    public function getVille($ville=null)
                    {
                        if ($ville != null && is_array($this->academie) && count($this->academie)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE ville = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$ville]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setEcole($d['ecole']);
$this->setFiliere($d['filiere']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setVille($d['ville']);
$this->setDiplome($d['diplome']);
$this->academie =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->ville;
                        }
                        
                    }
                    /**
                    * Get the value of diplome
                    */ 
                    public function getDiplome($diplome=null)
                    {
                        if ($diplome != null && is_array($this->academie) && count($this->academie)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE diplome = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$diplome]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setEcole($d['ecole']);
$this->setFiliere($d['filiere']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setVille($d['ville']);
$this->setDiplome($d['diplome']);
$this->academie =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->diplome;
                        }
                        
                    }


                    /**
                    * Set the value of id
                    *
                    * @return  self
                    */ 
                   public function setId($id)
                   {
                    $this->id = $id;
               
                       return $this;
                   }
                    /**
                    * Set the value of ecole
                    *
                    * @return  self
                    */ 
                   public function setEcole($ecole)
                   {
                    $this->ecole = $ecole;
               
                       return $this;
                   }
                    /**
                    * Set the value of filiere
                    *
                    * @return  self
                    */ 
                   public function setFiliere($filiere)
                   {
                    $this->filiere = $filiere;
               
                       return $this;
                   }
                    /**
                    * Set the value of date_debut
                    *
                    * @return  self
                    */ 
                   public function setDate_debut($date_debut)
                   {
                    $this->date_debut = $date_debut;
               
                       return $this;
                   }
                    /**
                    * Set the value of date_fin
                    *
                    * @return  self
                    */ 
                   public function setDate_fin($date_fin)
                   {
                    $this->date_fin = $date_fin;
               
                       return $this;
                   }
                    /**
                    * Set the value of ville
                    *
                    * @return  self
                    */ 
                   public function setVille($ville)
                   {
                    $this->ville = $ville;
               
                       return $this;
                   }
                    /**
                    * Set the value of diplome
                    *
                    * @return  self
                    */ 
                   public function setDiplome($diplome)
                   {
                    $this->diplome = $diplome;
               
                       return $this;
                   }
}
