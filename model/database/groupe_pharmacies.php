
<?php 
class groupe_pharmacies {
	 public $id;
	 public $code_groupe;
	 public $titre;
	 public $created_at;
	 public $statut;
	 public $groupe_pharmacies=array();



                public function __construct($groupe_pharmacies=null) {
                    $this->groupe_pharmacies = $groupe_pharmacies;
                         
                }

                public function all()
                {
                    return $this->groupe_pharmacies;
                }

                public function role($id, $code_groupe, $titre, $created_at, $statut)
                    {
                        $this->id = $id;
$this->code_groupe = $code_groupe;
$this->titre = $titre;
$this->created_at = $created_at;
$this->statut = $statut;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->groupe_pharmacies) && count($this->groupe_pharmacies)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCode_groupe($d['code_groupe']);
$this->setTitre($d['titre']);
$this->setCreated_at($d['created_at']);
$this->setStatut($d['statut']);
$this->groupe_pharmacies =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id;
                        }
                        
                    }
                    /**
                    * Get the value of code_groupe
                    */ 
                    public function getCode_groupe($code_groupe=null)
                    {
                        if ($code_groupe != null && is_array($this->groupe_pharmacies) && count($this->groupe_pharmacies)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE code_groupe = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$code_groupe]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCode_groupe($d['code_groupe']);
$this->setTitre($d['titre']);
$this->setCreated_at($d['created_at']);
$this->setStatut($d['statut']);
$this->groupe_pharmacies =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->code_groupe;
                        }
                        
                    }
                    /**
                    * Get the value of titre
                    */ 
                    public function getTitre($titre=null)
                    {
                        if ($titre != null && is_array($this->groupe_pharmacies) && count($this->groupe_pharmacies)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE titre = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$titre]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCode_groupe($d['code_groupe']);
$this->setTitre($d['titre']);
$this->setCreated_at($d['created_at']);
$this->setStatut($d['statut']);
$this->groupe_pharmacies =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->titre;
                        }
                        
                    }
                    /**
                    * Get the value of created_at
                    */ 
                    public function getCreated_at($created_at=null)
                    {
                        if ($created_at != null && is_array($this->groupe_pharmacies) && count($this->groupe_pharmacies)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE created_at = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$created_at]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCode_groupe($d['code_groupe']);
$this->setTitre($d['titre']);
$this->setCreated_at($d['created_at']);
$this->setStatut($d['statut']);
$this->groupe_pharmacies =$data; 
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
                        if ($statut != null && is_array($this->groupe_pharmacies) && count($this->groupe_pharmacies)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE statut = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$statut]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCode_groupe($d['code_groupe']);
$this->setTitre($d['titre']);
$this->setCreated_at($d['created_at']);
$this->setStatut($d['statut']);
$this->groupe_pharmacies =$data; 
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
                    * Set the value of code_groupe
                    *
                    * @return  self
                    */ 
                   public function setCode_groupe($code_groupe)
                   {
                    $this->code_groupe = $code_groupe;
               
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
