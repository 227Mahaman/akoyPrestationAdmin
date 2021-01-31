
<?php 
class module {
	 public $id;
	 public $name;
	 public $icon;
	 public $description;
	 public $action_url;
	 public $sub_module;
	 public $is_menu;
	 public $created_at;
	 public $updated_at;
	 public $statut;
	 public $user_create;
	 public $module=array();



                public function __construct($module=null) {
                    $this->module = $module;
                         
                }

                public function all()
                {
                    return $this->module;
                }

                public function role($id, $name, $icon, $description, $action_url, $sub_module, $is_menu, $created_at, $updated_at, $statut, $user_create)
                    {
                        $this->id = $id;
$this->name = $name;
$this->icon = $icon;
$this->description = $description;
$this->action_url = $action_url;
$this->sub_module = $sub_module;
$this->is_menu = $is_menu;
$this->created_at = $created_at;
$this->updated_at = $updated_at;
$this->statut = $statut;
$this->user_create = $user_create;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->module) && count($this->module)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setName($d['name']);
$this->setIcon($d['icon']);
$this->setDescription($d['description']);
$this->setAction_url($d['action_url']);
$this->setSub_module($d['sub_module']);
$this->setIs_menu($d['is_menu']);
$this->setCreated_at($d['created_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->setUser_create($d['user_create']);
$this->module =$data; 
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
                        if ($name != null && is_array($this->module) && count($this->module)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE name = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$name]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setName($d['name']);
$this->setIcon($d['icon']);
$this->setDescription($d['description']);
$this->setAction_url($d['action_url']);
$this->setSub_module($d['sub_module']);
$this->setIs_menu($d['is_menu']);
$this->setCreated_at($d['created_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->setUser_create($d['user_create']);
$this->module =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->name;
                        }
                        
                    }
                    /**
                    * Get the value of icon
                    */ 
                    public function getIcon($icon=null)
                    {
                        if ($icon != null && is_array($this->module) && count($this->module)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE icon = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$icon]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setName($d['name']);
$this->setIcon($d['icon']);
$this->setDescription($d['description']);
$this->setAction_url($d['action_url']);
$this->setSub_module($d['sub_module']);
$this->setIs_menu($d['is_menu']);
$this->setCreated_at($d['created_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->setUser_create($d['user_create']);
$this->module =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->icon;
                        }
                        
                    }
                    /**
                    * Get the value of description
                    */ 
                    public function getDescription($description=null)
                    {
                        if ($description != null && is_array($this->module) && count($this->module)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE description = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$description]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setName($d['name']);
$this->setIcon($d['icon']);
$this->setDescription($d['description']);
$this->setAction_url($d['action_url']);
$this->setSub_module($d['sub_module']);
$this->setIs_menu($d['is_menu']);
$this->setCreated_at($d['created_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->setUser_create($d['user_create']);
$this->module =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->description;
                        }
                        
                    }
                    /**
                    * Get the value of action_url
                    */ 
                    public function getAction_url($action_url=null)
                    {
                        if ($action_url != null && is_array($this->module) && count($this->module)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE action_url = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$action_url]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setName($d['name']);
$this->setIcon($d['icon']);
$this->setDescription($d['description']);
$this->setAction_url($d['action_url']);
$this->setSub_module($d['sub_module']);
$this->setIs_menu($d['is_menu']);
$this->setCreated_at($d['created_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->setUser_create($d['user_create']);
$this->module =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->action_url;
                        }
                        
                    }
                    /**
                    * Get the value of sub_module
                    */ 
                    public function getSub_module($sub_module=null)
                    {
                        if ($sub_module != null && is_array($this->module) && count($this->module)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE sub_module = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$sub_module]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setName($d['name']);
$this->setIcon($d['icon']);
$this->setDescription($d['description']);
$this->setAction_url($d['action_url']);
$this->setSub_module($d['sub_module']);
$this->setIs_menu($d['is_menu']);
$this->setCreated_at($d['created_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->setUser_create($d['user_create']);
$this->module =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->sub_module;
                        }
                        
                    }
                    /**
                    * Get the value of is_menu
                    */ 
                    public function getIs_menu($is_menu=null)
                    {
                        if ($is_menu != null && is_array($this->module) && count($this->module)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE is_menu = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$is_menu]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setName($d['name']);
$this->setIcon($d['icon']);
$this->setDescription($d['description']);
$this->setAction_url($d['action_url']);
$this->setSub_module($d['sub_module']);
$this->setIs_menu($d['is_menu']);
$this->setCreated_at($d['created_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->setUser_create($d['user_create']);
$this->module =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->is_menu;
                        }
                        
                    }
                    /**
                    * Get the value of created_at
                    */ 
                    public function getCreated_at($created_at=null)
                    {
                        if ($created_at != null && is_array($this->module) && count($this->module)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE created_at = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$created_at]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setName($d['name']);
$this->setIcon($d['icon']);
$this->setDescription($d['description']);
$this->setAction_url($d['action_url']);
$this->setSub_module($d['sub_module']);
$this->setIs_menu($d['is_menu']);
$this->setCreated_at($d['created_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->setUser_create($d['user_create']);
$this->module =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->created_at;
                        }
                        
                    }
                    /**
                    * Get the value of updated_at
                    */ 
                    public function getUpdated_at($updated_at=null)
                    {
                        if ($updated_at != null && is_array($this->module) && count($this->module)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE updated_at = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$updated_at]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setName($d['name']);
$this->setIcon($d['icon']);
$this->setDescription($d['description']);
$this->setAction_url($d['action_url']);
$this->setSub_module($d['sub_module']);
$this->setIs_menu($d['is_menu']);
$this->setCreated_at($d['created_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->setUser_create($d['user_create']);
$this->module =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->updated_at;
                        }
                        
                    }
                    /**
                    * Get the value of statut
                    */ 
                    public function getStatut($statut=null)
                    {
                        if ($statut != null && is_array($this->module) && count($this->module)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE statut = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$statut]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setName($d['name']);
$this->setIcon($d['icon']);
$this->setDescription($d['description']);
$this->setAction_url($d['action_url']);
$this->setSub_module($d['sub_module']);
$this->setIs_menu($d['is_menu']);
$this->setCreated_at($d['created_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->setUser_create($d['user_create']);
$this->module =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->statut;
                        }
                        
                    }
                    /**
                    * Get the value of user_create
                    */ 
                    public function getUser_create($user_create=null)
                    {
                        if ($user_create != null && is_array($this->module) && count($this->module)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE user_create = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$user_create]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setName($d['name']);
$this->setIcon($d['icon']);
$this->setDescription($d['description']);
$this->setAction_url($d['action_url']);
$this->setSub_module($d['sub_module']);
$this->setIs_menu($d['is_menu']);
$this->setCreated_at($d['created_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->setUser_create($d['user_create']);
$this->module =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->user_create;
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
                    /**
                    * Set the value of icon
                    *
                    * @return  self
                    */ 
                   public function setIcon($icon)
                   {
                    $this->icon = $icon;
               
                       return $this;
                   }
                    /**
                    * Set the value of description
                    *
                    * @return  self
                    */ 
                   public function setDescription($description)
                   {
                    $this->description = $description;
               
                       return $this;
                   }
                    /**
                    * Set the value of action_url
                    *
                    * @return  self
                    */ 
                   public function setAction_url($action_url)
                   {
                    $this->action_url = $action_url;
               
                       return $this;
                   }
                    /**
                    * Set the value of sub_module
                    *
                    * @return  self
                    */ 
                   public function setSub_module($sub_module)
                   {
                    $this->sub_module = $sub_module;
               
                       return $this;
                   }
                    /**
                    * Set the value of is_menu
                    *
                    * @return  self
                    */ 
                   public function setIs_menu($is_menu)
                   {
                    $this->is_menu = $is_menu;
               
                       return $this;
                   }
                    /**
                    * Set the value of created_at
                    *
                    * @return  self
                    */ 
                   public function setCreated_at($created_at)
                   {
                    $this->created_at = $created_at;
               
                       return $this;
                   }
                    /**
                    * Set the value of updated_at
                    *
                    * @return  self
                    */ 
                   public function setUpdated_at($updated_at)
                   {
                    $this->updated_at = $updated_at;
               
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
                    /**
                    * Set the value of user_create
                    *
                    * @return  self
                    */ 
                   public function setUser_create($user_create)
                   {
                    $this->user_create = $user_create;
               
                       return $this;
                   }
}
