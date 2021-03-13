
<?php 
class cv_langue {
	 public $id;
	 public $cv;
	 public $langue;
	 public $cv_langue=array();



                public function __construct($cv_langue=null) {
                    $this->cv_langue = $cv_langue;
                         
                }

                public function all()
                {
                    return $this->cv_langue;
                }

                public function role($id, $cv, $langue)
                    {
                        $this->id = $id;
$this->cv = $cv;
$this->langue = $langue;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->cv_langue) && count($this->cv_langue)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCv($d['cv']);
$this->setLangue($d['langue']);
$this->cv_langue =$data; 
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
                        if ($cv != null && is_array($this->cv_langue) && count($this->cv_langue)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE cv = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$cv]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCv($d['cv']);
$this->setLangue($d['langue']);
$this->cv_langue =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->cv;
                        }
                        
                    }
                    /**
                    * Get the value of langue
                    */ 
                    public function getLangue($langue=null)
                    {
                        if ($langue != null && is_array($this->cv_langue) && count($this->cv_langue)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE langue = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$langue]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCv($d['cv']);
$this->setLangue($d['langue']);
$this->cv_langue =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->langue;
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
                    * Set the value of langue
                    *
                    * @return  self
                    */ 
                   public function setLangue($langue)
                   {
                    $this->langue = $langue;
               
                       return $this;
                   }
}
