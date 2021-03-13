
<?php 
class types_user {
	 public $id;
	 public $label;
	 public $statut;
	 public $types_user=array();



                public function __construct($types_user=null) {
                    $this->types_user = $types_user;
                         
                }

                public function all()
                {
                    return $this->types_user;
                }

                public function role($id, $label, $statut)
                    {
                        $this->id = $id;
$this->label = $label;
$this->statut = $statut;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->types_user) && count($this->types_user)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setLabel($d['label']);
$this->setStatut($d['statut']);
$this->types_user =$data; 
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
                        if ($label != null && is_array($this->types_user) && count($this->types_user)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE label = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$label]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setLabel($d['label']);
$this->setStatut($d['statut']);
$this->types_user =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->label;
                        }
                        
                    }
                    /**
                    * Get the value of statut
                    */ 
                    public function getStatut($statut=null)
                    {
                        if ($statut != null && is_array($this->types_user) && count($this->types_user)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE statut = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$statut]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setLabel($d['label']);
$this->setStatut($d['statut']);
$this->types_user =$data; 
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
