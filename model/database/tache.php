
<?php 
class tache {
	 public $id;
	 public $titre;
	 public $experience;
	 public $tache=array();



                public function __construct($tache=null) {
                    $this->tache = $tache;
                         
                }

                public function all()
                {
                    return $this->tache;
                }

                public function role($id, $titre, $experience)
                    {
                        $this->id = $id;
$this->titre = $titre;
$this->experience = $experience;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->tache) && count($this->tache)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setExperience($d['experience']);
$this->tache =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id;
                        }
                        
                    }
                    /**
                    * Get the value of titre
                    */ 
                    public function getTitre($titre=null)
                    {
                        if ($titre != null && is_array($this->tache) && count($this->tache)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE titre = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$titre]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setExperience($d['experience']);
$this->tache =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->titre;
                        }
                        
                    }
                    /**
                    * Get the value of experience
                    */ 
                    public function getExperience($experience=null)
                    {
                        if ($experience != null && is_array($this->tache) && count($this->tache)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE experience = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$experience]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setExperience($d['experience']);
$this->tache =$data; 
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
                    * Set the value of titre
                    *
                    * @return  self
                    */ 
                   public function setTitre($titre)
                   {
                    $this->titre = $titre;
               
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
