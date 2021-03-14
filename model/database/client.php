
<?php 
class client {
	 public $id;
	 public $nom;
	 public $prenom;
	 public $phone;
	 public $email;
	 public $statut;
	 public $ville;
	 public $presentation;
	 public $adresse;
	 public $created_at;
	 public $update_at;
	 public $password;
	 public $file;
	 public $date_naissance;
	 public $lieu_naissance;
	 public $client=array();



                public function __construct($client=null) {
                    $this->client = $client;
                         
                }

                public function all()
                {
                    return $this->client;
                }

                public function role($id, $nom, $prenom, $phone, $email, $statut, $ville, $presentation, $adresse, $created_at, $update_at, $password, $file, $date_naissance, $lieu_naissance)
                    {
                        $this->id = $id;
$this->nom = $nom;
$this->prenom = $prenom;
$this->phone = $phone;
$this->email = $email;
$this->statut = $statut;
$this->ville = $ville;
$this->presentation = $presentation;
$this->adresse = $adresse;
$this->created_at = $created_at;
$this->update_at = $update_at;
$this->password = $password;
$this->file = $file;
$this->date_naissance = $date_naissance;
$this->lieu_naissance = $lieu_naissance;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setPhone($d['phone']);
$this->setEmail($d['email']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setPresentation($d['presentation']);
$this->setAdresse($d['adresse']);
$this->setCreated_at($d['created_at']);
$this->setUpdate_at($d['update_at']);
$this->setPassword($d['password']);
$this->setFile($d['file']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissance($d['lieu_naissance']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id;
                        }
                        
                    }
                    /**
                    * Get the value of nom
                    */ 
                    public function getNom($nom=null)
                    {
                        if ($nom != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE nom = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$nom]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setPhone($d['phone']);
$this->setEmail($d['email']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setPresentation($d['presentation']);
$this->setAdresse($d['adresse']);
$this->setCreated_at($d['created_at']);
$this->setUpdate_at($d['update_at']);
$this->setPassword($d['password']);
$this->setFile($d['file']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissance($d['lieu_naissance']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->nom;
                        }
                        
                    }
                    /**
                    * Get the value of prenom
                    */ 
                    public function getPrenom($prenom=null)
                    {
                        if ($prenom != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE prenom = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$prenom]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setPhone($d['phone']);
$this->setEmail($d['email']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setPresentation($d['presentation']);
$this->setAdresse($d['adresse']);
$this->setCreated_at($d['created_at']);
$this->setUpdate_at($d['update_at']);
$this->setPassword($d['password']);
$this->setFile($d['file']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissance($d['lieu_naissance']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->prenom;
                        }
                        
                    }
                    /**
                    * Get the value of phone
                    */ 
                    public function getPhone($phone=null)
                    {
                        if ($phone != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE phone = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$phone]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setPhone($d['phone']);
$this->setEmail($d['email']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setPresentation($d['presentation']);
$this->setAdresse($d['adresse']);
$this->setCreated_at($d['created_at']);
$this->setUpdate_at($d['update_at']);
$this->setPassword($d['password']);
$this->setFile($d['file']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissance($d['lieu_naissance']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->phone;
                        }
                        
                    }
                    /**
                    * Get the value of email
                    */ 
                    public function getEmail($email=null)
                    {
                        if ($email != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE email = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$email]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setPhone($d['phone']);
$this->setEmail($d['email']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setPresentation($d['presentation']);
$this->setAdresse($d['adresse']);
$this->setCreated_at($d['created_at']);
$this->setUpdate_at($d['update_at']);
$this->setPassword($d['password']);
$this->setFile($d['file']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissance($d['lieu_naissance']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->email;
                        }
                        
                    }
                    /**
                    * Get the value of statut
                    */ 
                    public function getStatut($statut=null)
                    {
                        if ($statut != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE statut = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$statut]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setPhone($d['phone']);
$this->setEmail($d['email']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setPresentation($d['presentation']);
$this->setAdresse($d['adresse']);
$this->setCreated_at($d['created_at']);
$this->setUpdate_at($d['update_at']);
$this->setPassword($d['password']);
$this->setFile($d['file']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissance($d['lieu_naissance']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->statut;
                        }
                        
                    }
                    /**
                    * Get the value of ville
                    */ 
                    public function getVille($ville=null)
                    {
                        if ($ville != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE ville = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$ville]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setPhone($d['phone']);
$this->setEmail($d['email']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setPresentation($d['presentation']);
$this->setAdresse($d['adresse']);
$this->setCreated_at($d['created_at']);
$this->setUpdate_at($d['update_at']);
$this->setPassword($d['password']);
$this->setFile($d['file']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissance($d['lieu_naissance']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->ville;
                        }
                        
                    }
                    /**
                    * Get the value of presentation
                    */ 
                    public function getPresentation($presentation=null)
                    {
                        if ($presentation != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE presentation = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$presentation]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setPhone($d['phone']);
$this->setEmail($d['email']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setPresentation($d['presentation']);
$this->setAdresse($d['adresse']);
$this->setCreated_at($d['created_at']);
$this->setUpdate_at($d['update_at']);
$this->setPassword($d['password']);
$this->setFile($d['file']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissance($d['lieu_naissance']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->presentation;
                        }
                        
                    }
                    /**
                    * Get the value of adresse
                    */ 
                    public function getAdresse($adresse=null)
                    {
                        if ($adresse != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE adresse = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$adresse]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setPhone($d['phone']);
$this->setEmail($d['email']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setPresentation($d['presentation']);
$this->setAdresse($d['adresse']);
$this->setCreated_at($d['created_at']);
$this->setUpdate_at($d['update_at']);
$this->setPassword($d['password']);
$this->setFile($d['file']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissance($d['lieu_naissance']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->adresse;
                        }
                        
                    }
                    /**
                    * Get the value of created_at
                    */ 
                    public function getCreated_at($created_at=null)
                    {
                        if ($created_at != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE created_at = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$created_at]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setPhone($d['phone']);
$this->setEmail($d['email']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setPresentation($d['presentation']);
$this->setAdresse($d['adresse']);
$this->setCreated_at($d['created_at']);
$this->setUpdate_at($d['update_at']);
$this->setPassword($d['password']);
$this->setFile($d['file']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissance($d['lieu_naissance']);
$this->client =$data; 
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
                        if ($update_at != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE update_at = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$update_at]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setPhone($d['phone']);
$this->setEmail($d['email']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setPresentation($d['presentation']);
$this->setAdresse($d['adresse']);
$this->setCreated_at($d['created_at']);
$this->setUpdate_at($d['update_at']);
$this->setPassword($d['password']);
$this->setFile($d['file']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissance($d['lieu_naissance']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->update_at;
                        }
                        
                    }
                    /**
                    * Get the value of password
                    */ 
                    public function getPassword($password=null)
                    {
                        if ($password != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE password = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$password]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setPhone($d['phone']);
$this->setEmail($d['email']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setPresentation($d['presentation']);
$this->setAdresse($d['adresse']);
$this->setCreated_at($d['created_at']);
$this->setUpdate_at($d['update_at']);
$this->setPassword($d['password']);
$this->setFile($d['file']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissance($d['lieu_naissance']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->password;
                        }
                        
                    }
                    /**
                    * Get the value of file
                    */ 
                    public function getFile($file=null)
                    {
                        if ($file != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE file = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$file]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setPhone($d['phone']);
$this->setEmail($d['email']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setPresentation($d['presentation']);
$this->setAdresse($d['adresse']);
$this->setCreated_at($d['created_at']);
$this->setUpdate_at($d['update_at']);
$this->setPassword($d['password']);
$this->setFile($d['file']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissance($d['lieu_naissance']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->file;
                        }
                        
                    }
                    /**
                    * Get the value of date_naissance
                    */ 
                    public function getDate_naissance($date_naissance=null)
                    {
                        if ($date_naissance != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE date_naissance = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$date_naissance]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setPhone($d['phone']);
$this->setEmail($d['email']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setPresentation($d['presentation']);
$this->setAdresse($d['adresse']);
$this->setCreated_at($d['created_at']);
$this->setUpdate_at($d['update_at']);
$this->setPassword($d['password']);
$this->setFile($d['file']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissance($d['lieu_naissance']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->date_naissance;
                        }
                        
                    }
                    /**
                    * Get the value of lieu_naissance
                    */ 
                    public function getLieu_naissance($lieu_naissance=null)
                    {
                        if ($lieu_naissance != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE lieu_naissance = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$lieu_naissance]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setPhone($d['phone']);
$this->setEmail($d['email']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setPresentation($d['presentation']);
$this->setAdresse($d['adresse']);
$this->setCreated_at($d['created_at']);
$this->setUpdate_at($d['update_at']);
$this->setPassword($d['password']);
$this->setFile($d['file']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissance($d['lieu_naissance']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->lieu_naissance;
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
                    * Set the value of nom
                    *
                    * @return  self
                    */ 
                   public function setNom($nom)
                   {
                    $this->nom = $nom;
               
                       return $this;
                   }
                    /**
                    * Set the value of prenom
                    *
                    * @return  self
                    */ 
                   public function setPrenom($prenom)
                   {
                    $this->prenom = $prenom;
               
                       return $this;
                   }
                    /**
                    * Set the value of phone
                    *
                    * @return  self
                    */ 
                   public function setPhone($phone)
                   {
                    $this->phone = $phone;
               
                       return $this;
                   }
                    /**
                    * Set the value of email
                    *
                    * @return  self
                    */ 
                   public function setEmail($email)
                   {
                    $this->email = $email;
               
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
                    * Set the value of presentation
                    *
                    * @return  self
                    */ 
                   public function setPresentation($presentation)
                   {
                    $this->presentation = $presentation;
               
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
                    * Set the value of password
                    *
                    * @return  self
                    */ 
                   public function setPassword($password)
                   {
                    $this->password = $password;
               
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
                    * Set the value of date_naissance
                    *
                    * @return  self
                    */ 
                   public function setDate_naissance($date_naissance)
                   {
                    $this->date_naissance = $date_naissance;
               
                       return $this;
                   }
                    /**
                    * Set the value of lieu_naissance
                    *
                    * @return  self
                    */ 
                   public function setLieu_naissance($lieu_naissance)
                   {
                    $this->lieu_naissance = $lieu_naissance;
               
                       return $this;
                   }
}
