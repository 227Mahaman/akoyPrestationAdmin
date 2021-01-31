
<?php 
class cv {
	 public $id;
	 public $titre;
	 public $auteur;
	 public $user_create;
	 public $created_at;
	 public $update_at;
	 public $statut;
	 public $file;
	 public $cv=array();



                public function __construct($cv=null) {
                    $this->cv = $cv;
                         
                }

                public function all()
                {
                    return $this->cv;
                }

                public function role($id, $titre, $auteur, $user_create, $created_at, $update_at, $statut, $file)
                    {
                        $this->id = $id;
$this->titre = $titre;
$this->auteur = $auteur;
$this->user_create = $user_create;
$this->created_at = $created_at;
$this->update_at = $update_at;
$this->statut = $statut;
$this->file = $file;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->cv) && count($this->cv)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setAuteur($d['auteur']);
$this->setUser_create($d['user_create']);
$this->setCreated_at($d['created_at']);
$this->setUpdate_at($d['update_at']);
$this->setStatut($d['statut']);
$this->setFile($d['file']);
$this->cv =$data; 
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
                        if ($titre != null && is_array($this->cv) && count($this->cv)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE titre = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$titre]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setAuteur($d['auteur']);
$this->setUser_create($d['user_create']);
$this->setCreated_at($d['created_at']);
$this->setUpdate_at($d['update_at']);
$this->setStatut($d['statut']);
$this->setFile($d['file']);
$this->cv =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->titre;
                        }
                        
                    }
                    /**
                    * Get the value of auteur
                    */ 
                    public function getAuteur($auteur=null)
                    {
                        if ($auteur != null && is_array($this->cv) && count($this->cv)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE auteur = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$auteur]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setAuteur($d['auteur']);
$this->setUser_create($d['user_create']);
$this->setCreated_at($d['created_at']);
$this->setUpdate_at($d['update_at']);
$this->setStatut($d['statut']);
$this->setFile($d['file']);
$this->cv =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->auteur;
                        }
                        
                    }
                    /**
                    * Get the value of user_create
                    */ 
                    public function getUser_create($user_create=null)
                    {
                        if ($user_create != null && is_array($this->cv) && count($this->cv)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE user_create = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$user_create]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setAuteur($d['auteur']);
$this->setUser_create($d['user_create']);
$this->setCreated_at($d['created_at']);
$this->setUpdate_at($d['update_at']);
$this->setStatut($d['statut']);
$this->setFile($d['file']);
$this->cv =$data; 
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
                        if ($created_at != null && is_array($this->cv) && count($this->cv)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE created_at = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$created_at]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setAuteur($d['auteur']);
$this->setUser_create($d['user_create']);
$this->setCreated_at($d['created_at']);
$this->setUpdate_at($d['update_at']);
$this->setStatut($d['statut']);
$this->setFile($d['file']);
$this->cv =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->created_at;
                        }
                        
                    }
                    /**
                    * Get the value of update_at
                    */ 
                    public function getUpdate_at($update_at=null)
                    {
                        if ($update_at != null && is_array($this->cv) && count($this->cv)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE update_at = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$update_at]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setAuteur($d['auteur']);
$this->setUser_create($d['user_create']);
$this->setCreated_at($d['created_at']);
$this->setUpdate_at($d['update_at']);
$this->setStatut($d['statut']);
$this->setFile($d['file']);
$this->cv =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->update_at;
                        }
                        
                    }
                    /**
                    * Get the value of statut
                    */ 
                    public function getStatut($statut=null)
                    {
                        if ($statut != null && is_array($this->cv) && count($this->cv)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE statut = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$statut]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setAuteur($d['auteur']);
$this->setUser_create($d['user_create']);
$this->setCreated_at($d['created_at']);
$this->setUpdate_at($d['update_at']);
$this->setStatut($d['statut']);
$this->setFile($d['file']);
$this->cv =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->statut;
                        }
                        
                    }
                    /**
                    * Get the value of file
                    */ 
                    public function getFile($file=null)
                    {
                        if ($file != null && is_array($this->cv) && count($this->cv)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE file = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$file]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setAuteur($d['auteur']);
$this->setUser_create($d['user_create']);
$this->setCreated_at($d['created_at']);
$this->setUpdate_at($d['update_at']);
$this->setStatut($d['statut']);
$this->setFile($d['file']);
$this->cv =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->file;
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
                    * Set the value of auteur
                    *
                    * @return  self
                    */ 
                   public function setAuteur($auteur)
                   {
                    $this->auteur = $auteur;
               
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
                    * Set the value of update_at
                    *
                    * @return  self
                    */ 
                   public function setUpdate_at($update_at)
                   {
                    $this->update_at = $update_at;
               
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
                    * Set the value of file
                    *
                    * @return  self
                    */ 
                   public function setFile($file)
                   {
                    $this->file = $file;
               
                       return $this;
                   }
}
