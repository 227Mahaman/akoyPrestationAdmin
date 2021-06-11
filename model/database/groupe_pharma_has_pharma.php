
<?php 
class groupe_pharma_has_pharma {
	 public $id;
	 public $groupe_pharmacie;
	 public $pharmacie;
	 public $groupe_pharma_has_pharma=array();



                public function __construct($groupe_pharma_has_pharma=null) {
                    $this->groupe_pharma_has_pharma = $groupe_pharma_has_pharma;
                         
                }

                public function all()
                {
                    return $this->groupe_pharma_has_pharma;
                }

                public function role($id, $groupe_pharmacie, $pharmacie)
                    {
                        $this->id = $id;
$this->groupe_pharmacie = $groupe_pharmacie;
$this->pharmacie = $pharmacie;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->groupe_pharma_has_pharma) && count($this->groupe_pharma_has_pharma)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setGroupe_pharmacie($d['groupe_pharmacie']);
$this->setPharmacie($d['pharmacie']);
$this->groupe_pharma_has_pharma =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id;
                        }
                        
                    }
                    /**
                    * Get the value of groupe_pharmacie
                    */ 
                    public function getGroupe_pharmacie($groupe_pharmacie=null)
                    {
                        if ($groupe_pharmacie != null && is_array($this->groupe_pharma_has_pharma) && count($this->groupe_pharma_has_pharma)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE groupe_pharmacie = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$groupe_pharmacie]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setGroupe_pharmacie($d['groupe_pharmacie']);
$this->setPharmacie($d['pharmacie']);
$this->groupe_pharma_has_pharma =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->groupe_pharmacie;
                        }
                        
                    }
                    /**
                    * Get the value of pharmacie
                    */ 
                    public function getPharmacie($pharmacie=null)
                    {
                        if ($pharmacie != null && is_array($this->groupe_pharma_has_pharma) && count($this->groupe_pharma_has_pharma)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE pharmacie = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$pharmacie]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setGroupe_pharmacie($d['groupe_pharmacie']);
$this->setPharmacie($d['pharmacie']);
$this->groupe_pharma_has_pharma =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->pharmacie;
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
                    * Set the value of groupe_pharmacie
                    *
                    * @return  self
                    */ 
                   public function setGroupe_pharmacie($groupe_pharmacie)
                   {
                    $this->groupe_pharmacie = $groupe_pharmacie;
               
                       return $this;
                   }
                    /**
                    * Set the value of pharmacie
                    *
                    * @return  self
                    */ 
                   public function setPharmacie($pharmacie)
                   {
                    $this->pharmacie = $pharmacie;
               
                       return $this;
                   }
}
