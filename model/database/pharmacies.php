
<?php 
class pharmacies {
	 public $id;
	 public $code_pharma;
	 public $titre;
	 public $adresse;
	 public $tel;
	 public $image;
	 public $create_at;
	 public $user_create;
	 public $statut;
	 public $pharmacies=array();



                public function __construct($pharmacies=null) {
                    $this->pharmacies = $pharmacies;
                         
                }

                public function all()
                {
                    return $this->pharmacies;
                }

                public function role($id, $code_pharma, $titre, $adresse, $tel, $image, $create_at, $user_create, $statut)
                    {
                        $this->id = $id;
$this->code_pharma = $code_pharma;
$this->titre = $titre;
$this->adresse = $adresse;
$this->tel = $tel;
$this->image = $image;
$this->create_at = $create_at;
$this->user_create = $user_create;
$this->statut = $statut;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->pharmacies) && count($this->pharmacies)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCode_pharma($d['code_pharma']);
$this->setTitre($d['titre']);
$this->setAdresse($d['adresse']);
$this->setTel($d['tel']);
$this->setImage($d['image']);
$this->setCreate_at($d['create_at']);
$this->setUser_create($d['user_create']);
$this->setStatut($d['statut']);
$this->pharmacies =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id;
                        }
                        
                    }
                    /**
                    * Get the value of code_pharma
                    */ 
                    public function getCode_pharma($code_pharma=null)
                    {
                        if ($code_pharma != null && is_array($this->pharmacies) && count($this->pharmacies)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE code_pharma = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$code_pharma]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCode_pharma($d['code_pharma']);
$this->setTitre($d['titre']);
$this->setAdresse($d['adresse']);
$this->setTel($d['tel']);
$this->setImage($d['image']);
$this->setCreate_at($d['create_at']);
$this->setUser_create($d['user_create']);
$this->setStatut($d['statut']);
$this->pharmacies =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->code_pharma;
                        }
                        
                    }
                    /**
                    * Get the value of titre
                    */ 
                    public function getTitre($titre=null)
                    {
                        if ($titre != null && is_array($this->pharmacies) && count($this->pharmacies)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE titre = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$titre]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCode_pharma($d['code_pharma']);
$this->setTitre($d['titre']);
$this->setAdresse($d['adresse']);
$this->setTel($d['tel']);
$this->setImage($d['image']);
$this->setCreate_at($d['create_at']);
$this->setUser_create($d['user_create']);
$this->setStatut($d['statut']);
$this->pharmacies =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->titre;
                        }
                        
                    }
                    /**
                    * Get the value of adresse
                    */ 
                    public function getAdresse($adresse=null)
                    {
                        if ($adresse != null && is_array($this->pharmacies) && count($this->pharmacies)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE adresse = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$adresse]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCode_pharma($d['code_pharma']);
$this->setTitre($d['titre']);
$this->setAdresse($d['adresse']);
$this->setTel($d['tel']);
$this->setImage($d['image']);
$this->setCreate_at($d['create_at']);
$this->setUser_create($d['user_create']);
$this->setStatut($d['statut']);
$this->pharmacies =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->adresse;
                        }
                        
                    }
                    /**
                    * Get the value of tel
                    */ 
                    public function getTel($tel=null)
                    {
                        if ($tel != null && is_array($this->pharmacies) && count($this->pharmacies)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE tel = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$tel]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCode_pharma($d['code_pharma']);
$this->setTitre($d['titre']);
$this->setAdresse($d['adresse']);
$this->setTel($d['tel']);
$this->setImage($d['image']);
$this->setCreate_at($d['create_at']);
$this->setUser_create($d['user_create']);
$this->setStatut($d['statut']);
$this->pharmacies =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->tel;
                        }
                        
                    }
                    /**
                    * Get the value of image
                    */ 
                    public function getImage($image=null)
                    {
                        if ($image != null && is_array($this->pharmacies) && count($this->pharmacies)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE image = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$image]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCode_pharma($d['code_pharma']);
$this->setTitre($d['titre']);
$this->setAdresse($d['adresse']);
$this->setTel($d['tel']);
$this->setImage($d['image']);
$this->setCreate_at($d['create_at']);
$this->setUser_create($d['user_create']);
$this->setStatut($d['statut']);
$this->pharmacies =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->image;
                        }
                        
                    }
                    /**
                    * Get the value of create_at
                    */ 
                    public function getCreate_at($create_at=null)
                    {
                        if ($create_at != null && is_array($this->pharmacies) && count($this->pharmacies)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE create_at = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$create_at]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCode_pharma($d['code_pharma']);
$this->setTitre($d['titre']);
$this->setAdresse($d['adresse']);
$this->setTel($d['tel']);
$this->setImage($d['image']);
$this->setCreate_at($d['create_at']);
$this->setUser_create($d['user_create']);
$this->setStatut($d['statut']);
$this->pharmacies =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->create_at;
                        }
                        
                    }
                    /**
                    * Get the value of user_create
                    */ 
                    public function getUser_create($user_create=null)
                    {
                        if ($user_create != null && is_array($this->pharmacies) && count($this->pharmacies)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE user_create = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$user_create]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCode_pharma($d['code_pharma']);
$this->setTitre($d['titre']);
$this->setAdresse($d['adresse']);
$this->setTel($d['tel']);
$this->setImage($d['image']);
$this->setCreate_at($d['create_at']);
$this->setUser_create($d['user_create']);
$this->setStatut($d['statut']);
$this->pharmacies =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->user_create;
                        }
                        
                    }
                    /**
                    * Get the value of statut
                    */ 
                    public function getStatut($statut=null)
                    {
                        if ($statut != null && is_array($this->pharmacies) && count($this->pharmacies)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE statut = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$statut]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCode_pharma($d['code_pharma']);
$this->setTitre($d['titre']);
$this->setAdresse($d['adresse']);
$this->setTel($d['tel']);
$this->setImage($d['image']);
$this->setCreate_at($d['create_at']);
$this->setUser_create($d['user_create']);
$this->setStatut($d['statut']);
$this->pharmacies =$data; 
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
                    * Set the value of code_pharma
                    *
                    * @return  self
                    */ 
                   public function setCode_pharma($code_pharma)
                   {
                    $this->code_pharma = $code_pharma;
               
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
                    * Set the value of adresse
                    *
                    * @return  self
                    */ 
                   public function setAdresse($adresse)
                   {
                    $this->adresse = $adresse;
               
                       return $this;
                   }
                    /**
                    * Set the value of tel
                    *
                    * @return  self
                    */ 
                   public function setTel($tel)
                   {
                    $this->tel = $tel;
               
                       return $this;
                   }
                    /**
                    * Set the value of image
                    *
                    * @return  self
                    */ 
                   public function setImage($image)
                   {
                    $this->image = $image;
               
                       return $this;
                   }
                    /**
                    * Set the value of create_at
                    *
                    * @return  self
                    */ 
                   public function setCreate_at($create_at)
                   {
                    $this->create_at = $create_at;
               
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
