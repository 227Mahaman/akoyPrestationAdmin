
<?php 
class programmation_has_groupe_pharm {
	 public $id;
	 public $id_program;
	 public $id_groupe;
	 public $programmation_has_groupe_pharm=array();



                public function __construct($programmation_has_groupe_pharm=null) {
                    $this->programmation_has_groupe_pharm = $programmation_has_groupe_pharm;
                         
                }

                public function all()
                {
                    return $this->programmation_has_groupe_pharm;
                }

                public function role($id, $id_program, $id_groupe)
                    {
                        $this->id = $id;
$this->id_program = $id_program;
$this->id_groupe = $id_groupe;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->programmation_has_groupe_pharm) && count($this->programmation_has_groupe_pharm)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setId_program($d['id_program']);
$this->setId_groupe($d['id_groupe']);
$this->programmation_has_groupe_pharm =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id;
                        }
                        
                    }
                    /**
                    * Get the value of id_program
                    */ 
                    public function getId_program($id_program=null)
                    {
                        if ($id_program != null && is_array($this->programmation_has_groupe_pharm) && count($this->programmation_has_groupe_pharm)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id_program = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id_program]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setId_program($d['id_program']);
$this->setId_groupe($d['id_groupe']);
$this->programmation_has_groupe_pharm =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id_program;
                        }
                        
                    }
                    /**
                    * Get the value of id_groupe
                    */ 
                    public function getId_groupe($id_groupe=null)
                    {
                        if ($id_groupe != null && is_array($this->programmation_has_groupe_pharm) && count($this->programmation_has_groupe_pharm)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id_groupe = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id_groupe]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setId_program($d['id_program']);
$this->setId_groupe($d['id_groupe']);
$this->programmation_has_groupe_pharm =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id_groupe;
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
                    * Set the value of id_program
                    *
                    * @return  self
                    */ 
                   public function setId_program($id_program)
                   {
                    $this->id_program = $id_program;
               
                       return $this;
                   }
                    /**
                    * Set the value of id_groupe
                    *
                    * @return  self
                    */ 
                   public function setId_groupe($id_groupe)
                   {
                    $this->id_groupe = $id_groupe;
               
                       return $this;
                   }
}
