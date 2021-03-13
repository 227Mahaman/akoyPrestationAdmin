
<?php 
class experience_tache {
	 public $id;
	 public $experience;
	 public $tache;
	 public $experience_tache=array();



                public function __construct($experience_tache=null) {
                    $this->experience_tache = $experience_tache;
                         
                }

                public function all()
                {
                    return $this->experience_tache;
                }

                public function role($id, $experience, $tache)
                    {
                        $this->id = $id;
$this->experience = $experience;
$this->tache = $tache;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->experience_tache) && count($this->experience_tache)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setExperience($d['experience']);
$this->setTache($d['tache']);
$this->experience_tache =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id;
                        }
                        
                    }
                    /**
                    * Get the value of experience
                    */ 
                    public function getExperience($experience=null)
                    {
                        if ($experience != null && is_array($this->experience_tache) && count($this->experience_tache)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE experience = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$experience]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setExperience($d['experience']);
$this->setTache($d['tache']);
$this->experience_tache =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->experience;
                        }
                        
                    }
                    /**
                    * Get the value of tache
                    */ 
                    public function getTache($tache=null)
                    {
                        if ($tache != null && is_array($this->experience_tache) && count($this->experience_tache)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE tache = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$tache]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setExperience($d['experience']);
$this->setTache($d['tache']);
$this->experience_tache =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->tache;
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
                    * Set the value of experience
                    *
                    * @return  self
                    */ 
                   public function setExperience($experience)
                   {
                    $this->experience = $experience;
               
                       return $this;
                   }
                    /**
                    * Set the value of tache
                    *
                    * @return  self
                    */ 
                   public function setTache($tache)
                   {
                    $this->tache = $tache;
               
                       return $this;
                   }
}
