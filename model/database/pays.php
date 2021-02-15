
<?php 
class pays {
	 public $id;
	 public $name;
	 public $pays=array();



                public function __construct($pays=null) {
                    $this->pays = $pays;
                         
                }

                public function all()
                {
                    return $this->pays;
                }

                public function role($id, $name)
                    {
                        $this->id = $id;
$this->name = $name;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->pays) && count($this->pays)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setName($d['name']);
$this->pays =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id;
                        }
                        
                    }
                    /**
                    * Get the value of name
                    */ 
                    public function getName($name=null)
                    {
                        if ($name != null && is_array($this->pays) && count($this->pays)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE name = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$name]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setName($d['name']);
$this->pays =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->name;
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
                    * Set the value of name
                    *
                    * @return  self
                    */ 
                   public function setName($name)
                   {
                    $this->name = $name;
               
                       return $this;
                   }
}
