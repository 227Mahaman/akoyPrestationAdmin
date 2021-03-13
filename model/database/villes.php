
<?php 
class villes {
	 public $id;
	 public $titre;
	 public $pays;
	 public $statut;
	 public $villes=array();



                public function __construct($villes=null) {
                    $this->villes = $villes;
                         
                }

                public function all()
                {
                    return $this->villes;
                }

                public function role($id, $titre, $pays, $statut)
                    {
                        $this->id = $id;
$this->titre = $titre;
$this->pays = $pays;
$this->statut = $statut;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->villes) && count($this->villes)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setPays($d['pays']);
$this->setStatut($d['statut']);
$this->villes =$data; 
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
                        if ($titre != null && is_array($this->villes) && count($this->villes)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE titre = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$titre]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setPays($d['pays']);
$this->setStatut($d['statut']);
$this->villes =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->titre;
                        }
                        
                    }
                    /**
                    * Get the value of pays
                    */ 
                    public function getPays($pays=null)
                    {
                        if ($pays != null && is_array($this->villes) && count($this->villes)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE pays = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$pays]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setPays($d['pays']);
$this->setStatut($d['statut']);
$this->villes =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->pays;
                        }
                        
                    }
                    /**
                    * Get the value of statut
                    */ 
                    public function getStatut($statut=null)
                    {
                        if ($statut != null && is_array($this->villes) && count($this->villes)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE statut = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$statut]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setTitre($d['titre']);
$this->setPays($d['pays']);
$this->setStatut($d['statut']);
$this->villes =$data; 
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
                    * Set the value of pays
                    *
                    * @return  self
                    */ 
                   public function setPays($pays)
                   {
                    $this->pays = $pays;
               
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
