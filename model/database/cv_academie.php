
<?php 
class cv_academie {
	 public $id;
	 public $cv;
	 public $academie;
	 public $cv_academie=array();



                public function __construct($cv_academie=null) {
                    $this->cv_academie = $cv_academie;
                         
                }

                public function all()
                {
                    return $this->cv_academie;
                }

                public function role($id, $cv, $academie)
                    {
                        $this->id = $id;
$this->cv = $cv;
$this->academie = $academie;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->cv_academie) && count($this->cv_academie)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCv($d['cv']);
$this->setAcademie($d['academie']);
$this->cv_academie =$data; 
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
                        if ($cv != null && is_array($this->cv_academie) && count($this->cv_academie)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE cv = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$cv]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCv($d['cv']);
$this->setAcademie($d['academie']);
$this->cv_academie =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->cv;
                        }
                        
                    }
                    /**
                    * Get the value of academie
                    */ 
                    public function getAcademie($academie=null)
                    {
                        if ($academie != null && is_array($this->cv_academie) && count($this->cv_academie)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE academie = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$academie]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCv($d['cv']);
$this->setAcademie($d['academie']);
$this->cv_academie =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->academie;
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
                    * Set the value of academie
                    *
                    * @return  self
                    */ 
                   public function setAcademie($academie)
                   {
                    $this->academie = $academie;
               
                       return $this;
                   }
}
