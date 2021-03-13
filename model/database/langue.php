
<?php 
class langue {
	 public $id;
	 public $titre;
	 public $niveau;
	 public $langue=array();



                public function __construct($langue=null) {
                    $this->langue = $langue;
                         
                }

                public function all()
                {
                    return $this->langue;
                }

                public function role($id, $titre, $niveau)
                    {
                        $this->id = $id;
$this->titre = $titre;
$this->niveau = $niveau;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->langue) && count($this->langue)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setNiveau($d['niveau']);
$this->langue =$data; 
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
                        if ($titre != null && is_array($this->langue) && count($this->langue)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE titre = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$titre]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setNiveau($d['niveau']);
$this->langue =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->titre;
                        }
                        
                    }
                    /**
                    * Get the value of niveau
                    */ 
                    public function getNiveau($niveau=null)
                    {
                        if ($niveau != null && is_array($this->langue) && count($this->langue)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE niveau = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$niveau]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setNiveau($d['niveau']);
$this->langue =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->niveau;
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
                    * Set the value of niveau
                    *
                    * @return  self
                    */ 
                   public function setNiveau($niveau)
                   {
                    $this->niveau = $niveau;
               
                       return $this;
                   }
}
