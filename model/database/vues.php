
<?php 
class vues {
	 public $id;
	 public $id_publication;
	 public $created_at;
	 public $nb;
	 public $vues=array();



                public function __construct($vues=null) {
                    $this->vues = $vues;
                         
                }

                public function all()
                {
                    return $this->vues;
                }

                public function role($id, $id_publication, $created_at, $nb)
                    {
                        $this->id = $id;
$this->id_publication = $id_publication;
$this->created_at = $created_at;
$this->nb = $nb;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->vues) && count($this->vues)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setId_publication($d['id_publication']);
$this->setCreated_at($d['created_at']);
$this->setNb($d['nb']);
$this->vues =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id;
                        }
                        
                    }
                    /**
                    * Get the value of id_publication
                    */ 
                    public function getId_publication($id_publication=null)
                    {
                        if ($id_publication != null && is_array($this->vues) && count($this->vues)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id_publication = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id_publication]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setId_publication($d['id_publication']);
$this->setCreated_at($d['created_at']);
$this->setNb($d['nb']);
$this->vues =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id_publication;
                        }
                        
                    }
                    /**
                    * Get the value of created_at
                    */ 
                    public function getCreated_at($created_at=null)
                    {
                        if ($created_at != null && is_array($this->vues) && count($this->vues)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE created_at = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$created_at]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setId_publication($d['id_publication']);
$this->setCreated_at($d['created_at']);
$this->setNb($d['nb']);
$this->vues =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->created_at;
                        }
                        
                    }
                    /**
                    * Get the value of nb
                    */ 
                    public function getNb($nb=null)
                    {
                        if ($nb != null && is_array($this->vues) && count($this->vues)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE nb = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$nb]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setId_publication($d['id_publication']);
$this->setCreated_at($d['created_at']);
$this->setNb($d['nb']);
$this->vues =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->nb;
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
                    * Set the value of id_publication
                    *
                    * @return  self
                    */ 
                   public function setId_publication($id_publication)
                   {
                    $this->id_publication = $id_publication;
               
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
                    * Set the value of nb
                    *
                    * @return  self
                    */ 
                   public function setNb($nb)
                   {
                    $this->nb = $nb;
               
                       return $this;
                   }
}
