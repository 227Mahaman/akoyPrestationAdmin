
<?php 
class cv_association {
	 public $id;
	 public $cv;
	 public $association;
	 public $cv_association=array();



                public function __construct($cv_association=null) {
                    $this->cv_association = $cv_association;
                         
                }

                public function all()
                {
                    return $this->cv_association;
                }

                public function role($id, $cv, $association)
                    {
                        $this->id = $id;
$this->cv = $cv;
$this->association = $association;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->cv_association) && count($this->cv_association)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCv($d['cv']);
$this->setAssociation($d['association']);
$this->cv_association =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id;
                        }
                        
                    }
                    /**
                    * Get the value of cv
                    */ 
                    public function getCv($cv=null)
                    {
                        if ($cv != null && is_array($this->cv_association) && count($this->cv_association)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE cv = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$cv]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCv($d['cv']);
$this->setAssociation($d['association']);
$this->cv_association =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->cv;
                        }
                        
                    }
                    /**
                    * Get the value of association
                    */ 
                    public function getAssociation($association=null)
                    {
                        if ($association != null && is_array($this->cv_association) && count($this->cv_association)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE association = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$association]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCv($d['cv']);
$this->setAssociation($d['association']);
$this->cv_association =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->association;
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
                    * Set the value of cv
                    *
                    * @return  self
                    */ 
                   public function setCv($cv)
                   {
                    $this->cv = $cv;
               
                       return $this;
                   }
                    /**
                    * Set the value of association
                    *
                    * @return  self
                    */ 
                   public function setAssociation($association)
                   {
                    $this->association = $association;
               
                       return $this;
                   }
}
