
<?php 
class cv_experience {
	 public $id;
	 public $cv;
	 public $experience;
	 public $cv_experience=array();



                public function __construct($cv_experience=null) {
                    $this->cv_experience = $cv_experience;
                         
                }

                public function all()
                {
                    return $this->cv_experience;
                }

                public function role($id, $cv, $experience)
                    {
                        $this->id = $id;
$this->cv = $cv;
$this->experience = $experience;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->cv_experience) && count($this->cv_experience)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCv($d['cv']);
$this->setExperience($d['experience']);
$this->cv_experience =$data; 
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
                        if ($cv != null && is_array($this->cv_experience) && count($this->cv_experience)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE cv = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$cv]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCv($d['cv']);
$this->setExperience($d['experience']);
$this->cv_experience =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->cv;
                        }
                        
                    }
                    /**
                    * Get the value of experience
                    */ 
                    public function getExperience($experience=null)
                    {
                        if ($experience != null && is_array($this->cv_experience) && count($this->cv_experience)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE experience = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$experience]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCv($d['cv']);
$this->setExperience($d['experience']);
$this->cv_experience =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->experience;
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
                    * Set the value of experience
                    *
                    * @return  self
                    */ 
                   public function setExperience($experience)
                   {
                    $this->experience = $experience;
               
                       return $this;
                   }
}
