
<?php 
class projet {
	 public $id;
	 public $titre;
	 public $liens;
	 public $projet=array();



                public function __construct($projet=null) {
                    $this->projet = $projet;
                         
                }

                public function all()
                {
                    return $this->projet;
                }

                public function role($id, $titre, $liens)
                    {
                        $this->id = $id;
$this->titre = $titre;
$this->liens = $liens;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->projet) && count($this->projet)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setLiens($d['liens']);
$this->projet =$data; 
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
                        if ($titre != null && is_array($this->projet) && count($this->projet)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE titre = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$titre]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setLiens($d['liens']);
$this->projet =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->titre;
                        }
                        
                    }
                    /**
                    * Get the value of liens
                    */ 
                    public function getLiens($liens=null)
                    {
                        if ($liens != null && is_array($this->projet) && count($this->projet)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE liens = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$liens]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setLiens($d['liens']);
$this->projet =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->liens;
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
                    * Set the value of liens
                    *
                    * @return  self
                    */ 
                   public function setLiens($liens)
                   {
                    $this->liens = $liens;
               
                       return $this;
                   }
}
