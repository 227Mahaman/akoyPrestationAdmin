
<?php 
class publicites {
	 public $id;
	 public $titre;
	 public $description;
	 public $file;
	 public $entreprise;
	 public $delai;
	 public $user_create;
	 public $created_at;
	 public $statut;
	 public $publicites=array();



                public function __construct($publicites=null) {
                    $this->publicites = $publicites;
                         
                }

                public function all()
                {
                    return $this->publicites;
                }

                public function role($id, $titre, $description, $file, $entreprise, $delai, $user_create, $created_at, $statut)
                    {
                        $this->id = $id;
$this->titre = $titre;
$this->description = $description;
$this->file = $file;
$this->entreprise = $entreprise;
$this->delai = $delai;
$this->user_create = $user_create;
$this->created_at = $created_at;
$this->statut = $statut;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->publicites) && count($this->publicites)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setFile($d['file']);
$this->setEntreprise($d['entreprise']);
$this->setDelai($d['delai']);
$this->setUser_create($d['user_create']);
$this->setCreated_at($d['created_at']);
$this->setStatut($d['statut']);
$this->publicites =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id;
                        }
                        
                    }
                    /**
                    * Get the value of titre
                    */ 
                    public function getTitre($titre=null)
                    {
                        if ($titre != null && is_array($this->publicites) && count($this->publicites)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE titre = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$titre]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setFile($d['file']);
$this->setEntreprise($d['entreprise']);
$this->setDelai($d['delai']);
$this->setUser_create($d['user_create']);
$this->setCreated_at($d['created_at']);
$this->setStatut($d['statut']);
$this->publicites =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->titre;
                        }
                        
                    }
                    /**
                    * Get the value of description
                    */ 
                    public function getDescription($description=null)
                    {
                        if ($description != null && is_array($this->publicites) && count($this->publicites)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE description = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$description]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setFile($d['file']);
$this->setEntreprise($d['entreprise']);
$this->setDelai($d['delai']);
$this->setUser_create($d['user_create']);
$this->setCreated_at($d['created_at']);
$this->setStatut($d['statut']);
$this->publicites =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->description;
                        }
                        
                    }
                    /**
                    * Get the value of file
                    */ 
                    public function getFile($file=null)
                    {
                        if ($file != null && is_array($this->publicites) && count($this->publicites)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE file = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$file]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setFile($d['file']);
$this->setEntreprise($d['entreprise']);
$this->setDelai($d['delai']);
$this->setUser_create($d['user_create']);
$this->setCreated_at($d['created_at']);
$this->setStatut($d['statut']);
$this->publicites =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->file;
                        }
                        
                    }
                    /**
                    * Get the value of entreprise
                    */ 
                    public function getEntreprise($entreprise=null)
                    {
                        if ($entreprise != null && is_array($this->publicites) && count($this->publicites)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE entreprise = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$entreprise]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setFile($d['file']);
$this->setEntreprise($d['entreprise']);
$this->setDelai($d['delai']);
$this->setUser_create($d['user_create']);
$this->setCreated_at($d['created_at']);
$this->setStatut($d['statut']);
$this->publicites =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->entreprise;
                        }
                        
                    }
                    /**
                    * Get the value of delai
                    */ 
                    public function getDelai($delai=null)
                    {
                        if ($delai != null && is_array($this->publicites) && count($this->publicites)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE delai = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$delai]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setFile($d['file']);
$this->setEntreprise($d['entreprise']);
$this->setDelai($d['delai']);
$this->setUser_create($d['user_create']);
$this->setCreated_at($d['created_at']);
$this->setStatut($d['statut']);
$this->publicites =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->delai;
                        }
                        
                    }
                    /**
                    * Get the value of user_create
                    */ 
                    public function getUser_create($user_create=null)
                    {
                        if ($user_create != null && is_array($this->publicites) && count($this->publicites)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE user_create = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$user_create]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setFile($d['file']);
$this->setEntreprise($d['entreprise']);
$this->setDelai($d['delai']);
$this->setUser_create($d['user_create']);
$this->setCreated_at($d['created_at']);
$this->setStatut($d['statut']);
$this->publicites =$data; 
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
                        if ($created_at != null && is_array($this->publicites) && count($this->publicites)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE created_at = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$created_at]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setFile($d['file']);
$this->setEntreprise($d['entreprise']);
$this->setDelai($d['delai']);
$this->setUser_create($d['user_create']);
$this->setCreated_at($d['created_at']);
$this->setStatut($d['statut']);
$this->publicites =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->created_at;
                        }
                        
                    }
                    /**
                    * Get the value of statut
                    */ 
                    public function getStatut($statut=null)
                    {
                        if ($statut != null && is_array($this->publicites) && count($this->publicites)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE statut = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$statut]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setFile($d['file']);
$this->setEntreprise($d['entreprise']);
$this->setDelai($d['delai']);
$this->setUser_create($d['user_create']);
$this->setCreated_at($d['created_at']);
$this->setStatut($d['statut']);
$this->publicites =$data; 
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
                    * Set the value of file
                    *
                    * @return  self
                    */ 
                   public function setFile($file)
                   {
                    $this->file = $file;
               
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
                    * Set the value of delai
                    *
                    * @return  self
                    */ 
                   public function setDelai($delai)
                   {
                    $this->delai = $delai;
               
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
