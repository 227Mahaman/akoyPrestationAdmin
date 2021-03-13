
<?php 
class cv {
	 public $id;
	 public $client;
	 public $created_at;
	 public $update_at;
	 public $statut;
	 public $cv=array();



                public function __construct($cv=null) {
                    $this->cv = $cv;
                         
                }

                public function all()
                {
                    return $this->cv;
                }

                public function role($id, $client, $created_at, $update_at, $statut)
                    {
                        $this->id = $id;
$this->client = $client;
$this->created_at = $created_at;
$this->update_at = $update_at;
$this->statut = $statut;

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
$this->setClient($d['client']);
$this->setCreated_at($d['created_at']);
$this->setUpdate_at($d['update_at']);
$this->setStatut($d['statut']);
$this->cv =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id;
                        }
                        
                    }
                    /**
                    * Get the value of client
                    */ 
                    public function getClient($client=null)
                    {
                        if ($client != null && is_array($this->cv) && count($this->cv)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE client = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$client]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setClient($d['client']);
$this->setCreated_at($d['created_at']);
$this->setUpdate_at($d['update_at']);
$this->setStatut($d['statut']);
$this->cv =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->client;
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
$this->setClient($d['client']);
$this->setCreated_at($d['created_at']);
$this->setUpdate_at($d['update_at']);
$this->setStatut($d['statut']);
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
$this->setClient($d['client']);
$this->setCreated_at($d['created_at']);
$this->setUpdate_at($d['update_at']);
$this->setStatut($d['statut']);
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
$this->setClient($d['client']);
$this->setCreated_at($d['created_at']);
$this->setUpdate_at($d['update_at']);
$this->setStatut($d['statut']);
$this->cv =$data; 
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
                    * Set the value of client
                    *
                    * @return  self
                    */ 
                   public function setClient($client)
                   {
                    $this->client = $client;
               
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
}
