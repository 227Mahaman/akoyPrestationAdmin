
<?php 
class programmation {
	 public $id_program;
	 public $titre;
	 public $date_debut;
	 public $date_fin;
	 public $statut;
	 public $user_create;
	 public $created_at;
	 public $programmation=array();



                public function __construct($programmation=null) {
                    $this->programmation = $programmation;
                         
                }

                public function all()
                {
                    return $this->programmation;
                }

                public function role($id_program, $titre, $date_debut, $date_fin, $statut, $user_create, $created_at)
                    {
                        $this->id_program = $id_program;
$this->titre = $titre;
$this->date_debut = $date_debut;
$this->date_fin = $date_fin;
$this->statut = $statut;
$this->user_create = $user_create;
$this->created_at = $created_at;

                    }
                


                    /**
                    * Get the value of id_program
                    */ 
                    public function getId_program($id_program=null)
                    {
                        if ($id_program != null && is_array($this->programmation) && count($this->programmation)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id_program = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id_program]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_program($d['id_program']);
$this->setTitre($d['titre']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setStatut($d['statut']);
$this->setUser_create($d['user_create']);
$this->setCreated_at($d['created_at']);
$this->programmation =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id_program;
                        }
                        
                    }
                    /**
                    * Get the value of titre
                    */ 
                    public function getTitre($titre=null)
                    {
                        if ($titre != null && is_array($this->programmation) && count($this->programmation)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE titre = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$titre]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_program($d['id_program']);
$this->setTitre($d['titre']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setStatut($d['statut']);
$this->setUser_create($d['user_create']);
$this->setCreated_at($d['created_at']);
$this->programmation =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->titre;
                        }
                        
                    }
                    /**
                    * Get the value of date_debut
                    */ 
                    public function getDate_debut($date_debut=null)
                    {
                        if ($date_debut != null && is_array($this->programmation) && count($this->programmation)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE date_debut = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$date_debut]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_program($d['id_program']);
$this->setTitre($d['titre']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setStatut($d['statut']);
$this->setUser_create($d['user_create']);
$this->setCreated_at($d['created_at']);
$this->programmation =$data; 
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
                        if ($date_fin != null && is_array($this->programmation) && count($this->programmation)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE date_fin = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$date_fin]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_program($d['id_program']);
$this->setTitre($d['titre']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setStatut($d['statut']);
$this->setUser_create($d['user_create']);
$this->setCreated_at($d['created_at']);
$this->programmation =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->date_fin;
                        }
                        
                    }
                    /**
                    * Get the value of statut
                    */ 
                    public function getStatut($statut=null)
                    {
                        if ($statut != null && is_array($this->programmation) && count($this->programmation)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE statut = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$statut]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_program($d['id_program']);
$this->setTitre($d['titre']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setStatut($d['statut']);
$this->setUser_create($d['user_create']);
$this->setCreated_at($d['created_at']);
$this->programmation =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->statut;
                        }
                        
                    }
                    /**
                    * Get the value of user_create
                    */ 
                    public function getUser_create($user_create=null)
                    {
                        if ($user_create != null && is_array($this->programmation) && count($this->programmation)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE user_create = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$user_create]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_program($d['id_program']);
$this->setTitre($d['titre']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setStatut($d['statut']);
$this->setUser_create($d['user_create']);
$this->setCreated_at($d['created_at']);
$this->programmation =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->user_create;
                        }
                        
                    }
                    /**
                    * Get the value of created_at
                    */ 
                    public function getCreated_at($created_at=null)
                    {
                        if ($created_at != null && is_array($this->programmation) && count($this->programmation)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE created_at = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$created_at]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_program($d['id_program']);
$this->setTitre($d['titre']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setStatut($d['statut']);
$this->setUser_create($d['user_create']);
$this->setCreated_at($d['created_at']);
$this->programmation =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->created_at;
                        }
                        
                    }


                    /**
                    * Set the value of id_program
                    *
                    * @return  self
                    */ 
                   public function setId_program($id_program)
                   {
                    $this->id_program = $id_program;
               
                       return $this;
                   }
                    /**
                    * Set the value of titre
                    *
                    * @return  self
                    */ 
                   public function setTitre($titre)
                   {
                    $this->titre = $titre;
               
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
                    * Set the value of statut
                    *
                    * @return  self
                    */ 
                   public function setStatut($statut)
                   {
                    $this->statut = $statut;
               
                       return $this;
                   }
                    /**
                    * Set the value of user_create
                    *
                    * @return  self
                    */ 
                   public function setUser_create($user_create)
                   {
                    $this->user_create = $user_create;
               
                       return $this;
                   }
                    /**
                    * Set the value of created_at
                    *
                    * @return  self
                    */ 
                   public function setCreated_at($created_at)
                   {
                    $this->created_at = $created_at;
               
                       return $this;
                   }
}
