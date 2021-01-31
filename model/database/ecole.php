
<?php 
class ecole {
	 public $id;
	 public $label;
	 public $description;
	 public $ville;
	 public $user_create;
	 public $created_at;
	 public $updated_at;
	 public $statut;
	 public $ecole=array();



                public function __construct($ecole=null) {
                    $this->ecole = $ecole;
                         
                }

                public function all()
                {
                    return $this->ecole;
                }

                public function role($id, $label, $description, $ville, $user_create, $created_at, $updated_at, $statut)
                    {
                        $this->id = $id;
$this->label = $label;
$this->description = $description;
$this->ville = $ville;
$this->user_create = $user_create;
$this->created_at = $created_at;
$this->updated_at = $updated_at;
$this->statut = $statut;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->ecole) && count($this->ecole)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setLabel($d['label']);
$this->setDescription($d['description']);
$this->setVille($d['ville']);
$this->setUser_create($d['user_create']);
$this->setCreated_at($d['created_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->ecole =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id;
                        }
                        
                    }
                    /**
                    * Get the value of label
                    */ 
                    public function getLabel($label=null)
                    {
                        if ($label != null && is_array($this->ecole) && count($this->ecole)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE label = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$label]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setLabel($d['label']);
$this->setDescription($d['description']);
$this->setVille($d['ville']);
$this->setUser_create($d['user_create']);
$this->setCreated_at($d['created_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->ecole =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->label;
                        }
                        
                    }
                    /**
                    * Get the value of description
                    */ 
                    public function getDescription($description=null)
                    {
                        if ($description != null && is_array($this->ecole) && count($this->ecole)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE description = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$description]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setLabel($d['label']);
$this->setDescription($d['description']);
$this->setVille($d['ville']);
$this->setUser_create($d['user_create']);
$this->setCreated_at($d['created_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->ecole =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->description;
                        }
                        
                    }
                    /**
                    * Get the value of ville
                    */ 
                    public function getVille($ville=null)
                    {
                        if ($ville != null && is_array($this->ecole) && count($this->ecole)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE ville = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$ville]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setLabel($d['label']);
$this->setDescription($d['description']);
$this->setVille($d['ville']);
$this->setUser_create($d['user_create']);
$this->setCreated_at($d['created_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->ecole =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->ville;
                        }
                        
                    }
                    /**
                    * Get the value of user_create
                    */ 
                    public function getUser_create($user_create=null)
                    {
                        if ($user_create != null && is_array($this->ecole) && count($this->ecole)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE user_create = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$user_create]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setLabel($d['label']);
$this->setDescription($d['description']);
$this->setVille($d['ville']);
$this->setUser_create($d['user_create']);
$this->setCreated_at($d['created_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->ecole =$data; 
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
                        if ($created_at != null && is_array($this->ecole) && count($this->ecole)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE created_at = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$created_at]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setLabel($d['label']);
$this->setDescription($d['description']);
$this->setVille($d['ville']);
$this->setUser_create($d['user_create']);
$this->setCreated_at($d['created_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->ecole =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->created_at;
                        }
                        
                    }
                    /**
                    * Get the value of updated_at
                    */ 
                    public function getUpdated_at($updated_at=null)
                    {
                        if ($updated_at != null && is_array($this->ecole) && count($this->ecole)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE updated_at = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$updated_at]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setLabel($d['label']);
$this->setDescription($d['description']);
$this->setVille($d['ville']);
$this->setUser_create($d['user_create']);
$this->setCreated_at($d['created_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->ecole =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->updated_at;
                        }
                        
                    }
                    /**
                    * Get the value of statut
                    */ 
                    public function getStatut($statut=null)
                    {
                        if ($statut != null && is_array($this->ecole) && count($this->ecole)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE statut = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$statut]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setLabel($d['label']);
$this->setDescription($d['description']);
$this->setVille($d['ville']);
$this->setUser_create($d['user_create']);
$this->setCreated_at($d['created_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->ecole =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->statut;
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
                    * Set the value of label
                    *
                    * @return  self
                    */ 
                   public function setLabel($label)
                   {
                    $this->label = $label;
               
                       return $this;
                   }
                    /**
                    * Set the value of description
                    *
                    * @return  self
                    */ 
                   public function setDescription($description)
                   {
                    $this->description = $description;
               
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
                    /**
                    * Set the value of updated_at
                    *
                    * @return  self
                    */ 
                   public function setUpdated_at($updated_at)
                   {
                    $this->updated_at = $updated_at;
               
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
}
