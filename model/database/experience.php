
<?php 
class experience {
	 public $id;
	 public $entreprise;
	 public $poste;
	 public $date_debut;
	 public $date_fin;
	 public $ville;
	 public $tache;
	 public $experience=array();



                public function __construct($experience=null) {
                    $this->experience = $experience;
                         
                }

                public function all()
                {
                    return $this->experience;
                }

                public function role($id, $entreprise, $poste, $date_debut, $date_fin, $ville, $tache)
                    {
                        $this->id = $id;
$this->entreprise = $entreprise;
$this->poste = $poste;
$this->date_debut = $date_debut;
$this->date_fin = $date_fin;
$this->ville = $ville;
$this->tache = $tache;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->experience) && count($this->experience)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setEntreprise($d['entreprise']);
$this->setPoste($d['poste']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setVille($d['ville']);
$this->setTache($d['tache']);
$this->experience =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id;
                        }
                        
                    }
                    /**
                    * Get the value of entreprise
                    */ 
                    public function getEntreprise($entreprise=null)
                    {
                        if ($entreprise != null && is_array($this->experience) && count($this->experience)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE entreprise = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$entreprise]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setEntreprise($d['entreprise']);
$this->setPoste($d['poste']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setVille($d['ville']);
$this->setTache($d['tache']);
$this->experience =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->entreprise;
                        }
                        
                    }
                    /**
                    * Get the value of poste
                    */ 
                    public function getPoste($poste=null)
                    {
                        if ($poste != null && is_array($this->experience) && count($this->experience)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE poste = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$poste]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setEntreprise($d['entreprise']);
$this->setPoste($d['poste']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setVille($d['ville']);
$this->setTache($d['tache']);
$this->experience =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->poste;
                        }
                        
                    }
                    /**
                    * Get the value of date_debut
                    */ 
                    public function getDate_debut($date_debut=null)
                    {
                        if ($date_debut != null && is_array($this->experience) && count($this->experience)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE date_debut = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$date_debut]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setEntreprise($d['entreprise']);
$this->setPoste($d['poste']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setVille($d['ville']);
$this->setTache($d['tache']);
$this->experience =$data; 
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
                        if ($date_fin != null && is_array($this->experience) && count($this->experience)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE date_fin = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$date_fin]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setEntreprise($d['entreprise']);
$this->setPoste($d['poste']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setVille($d['ville']);
$this->setTache($d['tache']);
$this->experience =$data; 
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
                        if ($ville != null && is_array($this->experience) && count($this->experience)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE ville = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$ville]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setEntreprise($d['entreprise']);
$this->setPoste($d['poste']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setVille($d['ville']);
$this->setTache($d['tache']);
$this->experience =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->ville;
                        }
                        
                    }
                    /**
                    * Get the value of tache
                    */ 
                    public function getTache($tache=null)
                    {
                        if ($tache != null && is_array($this->experience) && count($this->experience)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE tache = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$tache]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setEntreprise($d['entreprise']);
$this->setPoste($d['poste']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setVille($d['ville']);
$this->setTache($d['tache']);
$this->experience =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->tache;
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
                    * Set the value of entreprise
                    *
                    * @return  self
                    */ 
                   public function setEntreprise($entreprise)
                   {
                    $this->entreprise = $entreprise;
               
                       return $this;
                   }
                    /**
                    * Set the value of poste
                    *
                    * @return  self
                    */ 
                   public function setPoste($poste)
                   {
                    $this->poste = $poste;
               
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
                    * Set the value of tache
                    *
                    * @return  self
                    */ 
                   public function setTache($tache)
                   {
                    $this->tache = $tache;
               
                       return $this;
                   }
}
