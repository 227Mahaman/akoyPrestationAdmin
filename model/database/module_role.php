
<?php 
class module_role {
	 public $id;
	 public $role_id;
	 public $module;
	 public $create_at;
	 public $module_role=array();



                public function __construct($module_role=null) {
                    $this->module_role = $module_role;
                         
                }

                public function all()
                {
                    return $this->module_role;
                }

                public function role($id, $role_id, $module, $create_at)
                    {
                        $this->id = $id;
$this->role_id = $role_id;
$this->module = $module;
$this->create_at = $create_at;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->module_role) && count($this->module_role)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setRole_id($d['role_id']);
$this->setModule($d['module']);
$this->setCreate_at($d['create_at']);
$this->module_role =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id;
                        }
                        
                    }
                    /**
                    * Get the value of role_id
                    */ 
                    public function getRole_id($role_id=null)
                    {
                        if ($role_id != null && is_array($this->module_role) && count($this->module_role)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE role_id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$role_id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setRole_id($d['role_id']);
$this->setModule($d['module']);
$this->setCreate_at($d['create_at']);
$this->module_role =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->role_id;
                        }
                        
                    }
                    /**
                    * Get the value of module
                    */ 
                    public function getModule($module=null)
                    {
                        if ($module != null && is_array($this->module_role) && count($this->module_role)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE module = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$module]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setRole_id($d['role_id']);
$this->setModule($d['module']);
$this->setCreate_at($d['create_at']);
$this->module_role =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->module;
                        }
                        
                    }
                    /**
                    * Get the value of create_at
                    */ 
                    public function getCreate_at($create_at=null)
                    {
                        if ($create_at != null && is_array($this->module_role) && count($this->module_role)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE create_at = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$create_at]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setRole_id($d['role_id']);
$this->setModule($d['module']);
$this->setCreate_at($d['create_at']);
$this->module_role =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->create_at;
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
                    * Set the value of role_id
                    *
                    * @return  self
                    */ 
                   public function setRole_id($role_id)
                   {
                    $this->role_id = $role_id;
               
                       return $this;
                   }
                    /**
                    * Set the value of module
                    *
                    * @return  self
                    */ 
                   public function setModule($module)
                   {
                    $this->module = $module;
               
                       return $this;
                   }
                    /**
                    * Set the value of create_at
                    *
                    * @return  self
                    */ 
                   public function setCreate_at($create_at)
                   {
                    $this->create_at = $create_at;
               
                       return $this;
                   }
}
