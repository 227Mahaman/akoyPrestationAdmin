
<?php 
class type_publication {
	 public $id;
	 public $titre;
	 public $statut;
	 public $type_publication=array();



                public function __construct($type_publication=null) {
                    $this->type_publication = $type_publication;
                         
                }

                public function all()
                {
                    return $this->type_publication;
                }

                public function role($id, $titre, $statut)
                    {
                        $this->id = $id;
$this->titre = $titre;
$this->statut = $statut;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->type_publication) && count($this->type_publication)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setStatut($d['statut']);
$this->type_publication =$data; 
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
                        if ($titre != null && is_array($this->type_publication) && count($this->type_publication)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE titre = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$titre]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setStatut($d['statut']);
$this->type_publication =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->titre;
                        }
                        
                    }
                    /**
                    * Get the value of statut
                    */ 
                    public function getStatut($statut=null)
                    {
                        if ($statut != null && is_array($this->type_publication) && count($this->type_publication)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE statut = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$statut]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setStatut($d['statut']);
$this->type_publication =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->statut;
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
                    * Set the value of statut
                    *
                    * @return  self
                    */ 
                   public function setStatut($statut)
                   {
                    $this->statut = $statut;
               
                       return $this;
                   }
}
