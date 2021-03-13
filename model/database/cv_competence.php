
<?php 
class cv_competence {
	 public $id;
	 public $cv;
	 public $competence;
	 public $cv_competence=array();



                public function __construct($cv_competence=null) {
                    $this->cv_competence = $cv_competence;
                         
                }

                public function all()
                {
                    return $this->cv_competence;
                }

                public function role($id, $cv, $competence)
                    {
                        $this->id = $id;
$this->cv = $cv;
$this->competence = $competence;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->cv_competence) && count($this->cv_competence)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCv($d['cv']);
$this->setCompetence($d['competence']);
$this->cv_competence =$data; 
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
                        if ($cv != null && is_array($this->cv_competence) && count($this->cv_competence)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE cv = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$cv]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCv($d['cv']);
$this->setCompetence($d['competence']);
$this->cv_competence =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->cv;
                        }
                        
                    }
                    /**
                    * Get the value of competence
                    */ 
                    public function getCompetence($competence=null)
                    {
                        if ($competence != null && is_array($this->cv_competence) && count($this->cv_competence)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE competence = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$competence]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCv($d['cv']);
$this->setCompetence($d['competence']);
$this->cv_competence =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->competence;
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
                    * Set the value of competence
                    *
                    * @return  self
                    */ 
                   public function setCompetence($competence)
                   {
                    $this->competence = $competence;
               
                       return $this;
                   }
}
