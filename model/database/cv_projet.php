
<?php 
class cv_projet {
	 public $id;
	 public $cv;
	 public $projet;
	 public $cv_projet=array();



                public function __construct($cv_projet=null) {
                    $this->cv_projet = $cv_projet;
                         
                }

                public function all()
                {
                    return $this->cv_projet;
                }

                public function role($id, $cv, $projet)
                    {
                        $this->id = $id;
$this->cv = $cv;
$this->projet = $projet;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->cv_projet) && count($this->cv_projet)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCv($d['cv']);
$this->setProjet($d['projet']);
$this->cv_projet =$data; 
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
                        if ($cv != null && is_array($this->cv_projet) && count($this->cv_projet)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE cv = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$cv]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCv($d['cv']);
$this->setProjet($d['projet']);
$this->cv_projet =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->cv;
                        }
                        
                    }
                    /**
                    * Get the value of projet
                    */ 
                    public function getProjet($projet=null)
                    {
                        if ($projet != null && is_array($this->cv_projet) && count($this->cv_projet)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE projet = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$projet]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCv($d['cv']);
$this->setProjet($d['projet']);
$this->cv_projet =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->projet;
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
                    * Set the value of projet
                    *
                    * @return  self
                    */ 
                   public function setProjet($projet)
                   {
                    $this->projet = $projet;
               
                       return $this;
                   }
}
