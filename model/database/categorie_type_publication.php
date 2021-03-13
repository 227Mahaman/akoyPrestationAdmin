
<?php 
class categorie_type_publication {
	 public $id;
	 public $categories_publication;
	 public $type_publication;
	 public $categorie_type_publication=array();



                public function __construct($categorie_type_publication=null) {
                    $this->categorie_type_publication = $categorie_type_publication;
                         
                }

                public function all()
                {
                    return $this->categorie_type_publication;
                }

                public function role($id, $categories_publication, $type_publication)
                    {
                        $this->id = $id;
$this->categories_publication = $categories_publication;
$this->type_publication = $type_publication;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->categorie_type_publication) && count($this->categorie_type_publication)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCategories_publication($d['categories_publication']);
$this->setType_publication($d['type_publication']);
$this->categorie_type_publication =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id;
                        }
                        
                    }
                    /**
                    * Get the value of categories_publication
                    */ 
                    public function getCategories_publication($categories_publication=null)
                    {
                        if ($categories_publication != null && is_array($this->categorie_type_publication) && count($this->categorie_type_publication)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE categories_publication = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$categories_publication]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCategories_publication($d['categories_publication']);
$this->setType_publication($d['type_publication']);
$this->categorie_type_publication =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->categories_publication;
                        }
                        
                    }
                    /**
                    * Get the value of type_publication
                    */ 
                    public function getType_publication($type_publication=null)
                    {
                        if ($type_publication != null && is_array($this->categorie_type_publication) && count($this->categorie_type_publication)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE type_publication = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$type_publication]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setCategories_publication($d['categories_publication']);
$this->setType_publication($d['type_publication']);
$this->categorie_type_publication =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->type_publication;
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
                    * Set the value of categories_publication
                    *
                    * @return  self
                    */ 
                   public function setCategories_publication($categories_publication)
                   {
                    $this->categories_publication = $categories_publication;
               
                       return $this;
                   }
                    /**
                    * Set the value of type_publication
                    *
                    * @return  self
                    */ 
                   public function setType_publication($type_publication)
                   {
                    $this->type_publication = $type_publication;
               
                       return $this;
                   }
}
