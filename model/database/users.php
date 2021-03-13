
<?php 
class users {
	 public $id;
	 public $first_name;
	 public $last_name;
	 public $phone_number;
	 public $type_user;
	 public $created_at;
	 public $updated_at;
	 public $photo;
	 public $role;
	 public $password_;
	 public $statut;
	 public $statut_delete;
	 public $users=array();



                public function __construct($users=null) {
                    $this->users = $users;
                         
                }

                public function all()
                {
                    return $this->users;
                }

                public function role($id, $first_name, $last_name, $phone_number, $type_user, $created_at, $updated_at, $photo, $role, $password_, $statut, $statut_delete)
                    {
                        $this->id = $id;
$this->first_name = $first_name;
$this->last_name = $last_name;
$this->phone_number = $phone_number;
$this->type_user = $type_user;
$this->created_at = $created_at;
$this->updated_at = $updated_at;
$this->photo = $photo;
$this->role = $role;
$this->password_ = $password_;
$this->statut = $statut;
$this->statut_delete = $statut_delete;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->users) && count($this->users)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setFirst_name($d['first_name']);
$this->setLast_name($d['last_name']);
$this->setPhone_number($d['phone_number']);
$this->setType_user($d['type_user']);
$this->setCreated_at($d['created_at']);
$this->setUpdated_at($d['updated_at']);
$this->setPhoto($d['photo']);
$this->setRole($d['role']);
$this->setPassword_($d['password_']);
$this->setStatut($d['statut']);
$this->setStatut_delete($d['statut_delete']);
$this->users =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id;
                        }
                        
                    }
                    /**
                    * Get the value of first_name
                    */ 
                    public function getFirst_name($first_name=null)
                    {
                        if ($first_name != null && is_array($this->users) && count($this->users)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE first_name = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$first_name]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setFirst_name($d['first_name']);
$this->setLast_name($d['last_name']);
$this->setPhone_number($d['phone_number']);
$this->setType_user($d['type_user']);
$this->setCreated_at($d['created_at']);
$this->setUpdated_at($d['updated_at']);
$this->setPhoto($d['photo']);
$this->setRole($d['role']);
$this->setPassword_($d['password_']);
$this->setStatut($d['statut']);
$this->setStatut_delete($d['statut_delete']);
$this->users =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->first_name;
                        }
                        
                    }
                    /**
                    * Get the value of last_name
                    */ 
                    public function getLast_name($last_name=null)
                    {
                        if ($last_name != null && is_array($this->users) && count($this->users)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE last_name = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$last_name]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setFirst_name($d['first_name']);
$this->setLast_name($d['last_name']);
$this->setPhone_number($d['phone_number']);
$this->setType_user($d['type_user']);
$this->setCreated_at($d['created_at']);
$this->setUpdated_at($d['updated_at']);
$this->setPhoto($d['photo']);
$this->setRole($d['role']);
$this->setPassword_($d['password_']);
$this->setStatut($d['statut']);
$this->setStatut_delete($d['statut_delete']);
$this->users =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->last_name;
                        }
                        
                    }
                    /**
                    * Get the value of phone_number
                    */ 
                    public function getPhone_number($phone_number=null)
                    {
                        if ($phone_number != null && is_array($this->users) && count($this->users)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE phone_number = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$phone_number]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setFirst_name($d['first_name']);
$this->setLast_name($d['last_name']);
$this->setPhone_number($d['phone_number']);
$this->setType_user($d['type_user']);
$this->setCreated_at($d['created_at']);
$this->setUpdated_at($d['updated_at']);
$this->setPhoto($d['photo']);
$this->setRole($d['role']);
$this->setPassword_($d['password_']);
$this->setStatut($d['statut']);
$this->setStatut_delete($d['statut_delete']);
$this->users =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->phone_number;
                        }
                        
                    }
                    /**
                    * Get the value of type_user
                    */ 
                    public function getType_user($type_user=null)
                    {
                        if ($type_user != null && is_array($this->users) && count($this->users)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE type_user = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$type_user]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setFirst_name($d['first_name']);
$this->setLast_name($d['last_name']);
$this->setPhone_number($d['phone_number']);
$this->setType_user($d['type_user']);
$this->setCreated_at($d['created_at']);
$this->setUpdated_at($d['updated_at']);
$this->setPhoto($d['photo']);
$this->setRole($d['role']);
$this->setPassword_($d['password_']);
$this->setStatut($d['statut']);
$this->setStatut_delete($d['statut_delete']);
$this->users =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->type_user;
                        }
                        
                    }
                    /**
                    * Get the value of created_at
                    */ 
                    public function getCreated_at($created_at=null)
                    {
                        if ($created_at != null && is_array($this->users) && count($this->users)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE created_at = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$created_at]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setFirst_name($d['first_name']);
$this->setLast_name($d['last_name']);
$this->setPhone_number($d['phone_number']);
$this->setType_user($d['type_user']);
$this->setCreated_at($d['created_at']);
$this->setUpdated_at($d['updated_at']);
$this->setPhoto($d['photo']);
$this->setRole($d['role']);
$this->setPassword_($d['password_']);
$this->setStatut($d['statut']);
$this->setStatut_delete($d['statut_delete']);
$this->users =$data; 
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
                        if ($updated_at != null && is_array($this->users) && count($this->users)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE updated_at = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$updated_at]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setFirst_name($d['first_name']);
$this->setLast_name($d['last_name']);
$this->setPhone_number($d['phone_number']);
$this->setType_user($d['type_user']);
$this->setCreated_at($d['created_at']);
$this->setUpdated_at($d['updated_at']);
$this->setPhoto($d['photo']);
$this->setRole($d['role']);
$this->setPassword_($d['password_']);
$this->setStatut($d['statut']);
$this->setStatut_delete($d['statut_delete']);
$this->users =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->updated_at;
                        }
                        
                    }
                    /**
                    * Get the value of photo
                    */ 
                    public function getPhoto($photo=null)
                    {
                        if ($photo != null && is_array($this->users) && count($this->users)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE photo = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$photo]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setFirst_name($d['first_name']);
$this->setLast_name($d['last_name']);
$this->setPhone_number($d['phone_number']);
$this->setType_user($d['type_user']);
$this->setCreated_at($d['created_at']);
$this->setUpdated_at($d['updated_at']);
$this->setPhoto($d['photo']);
$this->setRole($d['role']);
$this->setPassword_($d['password_']);
$this->setStatut($d['statut']);
$this->setStatut_delete($d['statut_delete']);
$this->users =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->photo;
                        }
                        
                    }
                    /**
                    * Get the value of role
                    */ 
                    public function getRole($role=null)
                    {
                        if ($role != null && is_array($this->users) && count($this->users)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE role = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$role]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setFirst_name($d['first_name']);
$this->setLast_name($d['last_name']);
$this->setPhone_number($d['phone_number']);
$this->setType_user($d['type_user']);
$this->setCreated_at($d['created_at']);
$this->setUpdated_at($d['updated_at']);
$this->setPhoto($d['photo']);
$this->setRole($d['role']);
$this->setPassword_($d['password_']);
$this->setStatut($d['statut']);
$this->setStatut_delete($d['statut_delete']);
$this->users =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->role;
                        }
                        
                    }
                    /**
                    * Get the value of password_
                    */ 
                    public function getPassword_($password_=null)
                    {
                        if ($password_ != null && is_array($this->users) && count($this->users)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE password_ = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$password_]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setFirst_name($d['first_name']);
$this->setLast_name($d['last_name']);
$this->setPhone_number($d['phone_number']);
$this->setType_user($d['type_user']);
$this->setCreated_at($d['created_at']);
$this->setUpdated_at($d['updated_at']);
$this->setPhoto($d['photo']);
$this->setRole($d['role']);
$this->setPassword_($d['password_']);
$this->setStatut($d['statut']);
$this->setStatut_delete($d['statut_delete']);
$this->users =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->password_;
                        }
                        
                    }
                    /**
                    * Get the value of statut
                    */ 
                    public function getStatut($statut=null)
                    {
                        if ($statut != null && is_array($this->users) && count($this->users)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE statut = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$statut]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setFirst_name($d['first_name']);
$this->setLast_name($d['last_name']);
$this->setPhone_number($d['phone_number']);
$this->setType_user($d['type_user']);
$this->setCreated_at($d['created_at']);
$this->setUpdated_at($d['updated_at']);
$this->setPhoto($d['photo']);
$this->setRole($d['role']);
$this->setPassword_($d['password_']);
$this->setStatut($d['statut']);
$this->setStatut_delete($d['statut_delete']);
$this->users =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->statut;
                        }
                        
                    }
                    /**
                    * Get the value of statut_delete
                    */ 
                    public function getStatut_delete($statut_delete=null)
                    {
                        if ($statut_delete != null && is_array($this->users) && count($this->users)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE statut_delete = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$statut_delete]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setFirst_name($d['first_name']);
$this->setLast_name($d['last_name']);
$this->setPhone_number($d['phone_number']);
$this->setType_user($d['type_user']);
$this->setCreated_at($d['created_at']);
$this->setUpdated_at($d['updated_at']);
$this->setPhoto($d['photo']);
$this->setRole($d['role']);
$this->setPassword_($d['password_']);
$this->setStatut($d['statut']);
$this->setStatut_delete($d['statut_delete']);
$this->users =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->statut_delete;
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
                    * Set the value of first_name
                    *
                    * @return  self
                    */ 
                   public function setFirst_name($first_name)
                   {
                    $this->first_name = $first_name;
               
                       return $this;
                   }
                    /**
                    * Set the value of last_name
                    *
                    * @return  self
                    */ 
                   public function setLast_name($last_name)
                   {
                    $this->last_name = $last_name;
               
                       return $this;
                   }
                    /**
                    * Set the value of phone_number
                    *
                    * @return  self
                    */ 
                   public function setPhone_number($phone_number)
                   {
                    $this->phone_number = $phone_number;
               
                       return $this;
                   }
                    /**
                    * Set the value of type_user
                    *
                    * @return  self
                    */ 
                   public function setType_user($type_user)
                   {
                    $this->type_user = $type_user;
               
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
                    * Set the value of photo
                    *
                    * @return  self
                    */ 
                   public function setPhoto($photo)
                   {
                    $this->photo = $photo;
               
                       return $this;
                   }
                    /**
                    * Set the value of role
                    *
                    * @return  self
                    */ 
                   public function setRole($role)
                   {
                    $this->role = $role;
               
                       return $this;
                   }
                    /**
                    * Set the value of password_
                    *
                    * @return  self
                    */ 
                   public function setPassword_($password_)
                   {
                    $this->password_ = $password_;
               
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
                    * Set the value of statut_delete
                    *
                    * @return  self
                    */ 
                   public function setStatut_delete($statut_delete)
                   {
                    $this->statut_delete = $statut_delete;
               
                       return $this;
                   }
}
