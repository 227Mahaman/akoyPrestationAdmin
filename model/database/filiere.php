
<?php 
class filiere {
	 public $id;
	 public $libelle;
	 public $filiere=array();



                public function __construct($filiere=null) {
                    $this->filiere = $filiere;
                         
                }

                public function all()
                {
                    return $this->filiere;
                }

                public function role($id, $libelle)
                    {
                        $this->id = $id;
$this->libelle = $libelle;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->filiere) && count($this->filiere)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setLibelle($d['libelle']);
$this->filiere =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id;
                        }
                        
                    }
                    /**
                    * Get the value of libelle
                    */ 
                    public function getLibelle($libelle=null)
                    {
                        if ($libelle != null && is_array($this->filiere) && count($this->filiere)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE libelle = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$libelle]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setLibelle($d['libelle']);
$this->filiere =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->libelle;
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
                    * Set the value of libelle
                    *
                    * @return  self
                    */ 
                   public function setLibelle($libelle)
                   {
                    $this->libelle = $libelle;
               
                       return $this;
                   }
}
