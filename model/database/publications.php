
<?php 
class publications {
	 public $id;
	 public $type_publication;
	 public $category_publication;
	 public $num_offre;
	 public $titre;
	 public $description;
	 public $lieu;
	 public $date_annee_bourse;
	 public $date_debut;
	 public $date_fin;
	 public $ecole;
	 public $date_elaboration;
	 public $file;
	 public $user_create;
	 public $create_at;
	 public $updated_at;
	 public $statut;
	 public $ville;
	 public $entreprise;
	 public $experience;
	 public $sexe;
	 public $nombre_candidat;
	 public $diplome;
	 public $publications=array();



                public function __construct($publications=null) {
                    $this->publications = $publications;
                         
                }

                public function all()
                {
                    return $this->publications;
                }

                public function role($id, $type_publication, $category_publication, $num_offre, $titre, $description, $lieu, $date_annee_bourse, $date_debut, $date_fin, $ecole, $date_elaboration, $file, $user_create, $create_at, $updated_at, $statut, $ville, $entreprise, $experience, $sexe, $nombre_candidat, $diplome)
                    {
                        $this->id = $id;
$this->type_publication = $type_publication;
$this->category_publication = $category_publication;
$this->num_offre = $num_offre;
$this->titre = $titre;
$this->description = $description;
$this->lieu = $lieu;
$this->date_annee_bourse = $date_annee_bourse;
$this->date_debut = $date_debut;
$this->date_fin = $date_fin;
$this->ecole = $ecole;
$this->date_elaboration = $date_elaboration;
$this->file = $file;
$this->user_create = $user_create;
$this->create_at = $create_at;
$this->updated_at = $updated_at;
$this->statut = $statut;
$this->ville = $ville;
$this->entreprise = $entreprise;
$this->experience = $experience;
$this->sexe = $sexe;
$this->nombre_candidat = $nombre_candidat;
$this->diplome = $diplome;

                    }
                


                    /**
                    * Get the value of id
                    */ 
                    public function getId($id=null)
                    {
                        if ($id != null && is_array($this->publications) && count($this->publications)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setType_publication($d['type_publication']);
$this->setCategory_publication($d['category_publication']);
$this->setNum_offre($d['num_offre']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setLieu($d['lieu']);
$this->setDate_annee_bourse($d['date_annee_bourse']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setEcole($d['ecole']);
$this->setDate_elaboration($d['date_elaboration']);
$this->setFile($d['file']);
$this->setUser_create($d['user_create']);
$this->setCreate_at($d['create_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setEntreprise($d['entreprise']);
$this->setExperience($d['experience']);
$this->setSexe($d['sexe']);
$this->setNombre_candidat($d['nombre_candidat']);
$this->setDiplome($d['diplome']);
$this->publications =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id;
                        }
                        
                    }
                    /**
                    * Get the value of type_publication
                    */ 
                    public function getType_publication($type_publication=null)
                    {
                        if ($type_publication != null && is_array($this->publications) && count($this->publications)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE type_publication = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$type_publication]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setType_publication($d['type_publication']);
$this->setCategory_publication($d['category_publication']);
$this->setNum_offre($d['num_offre']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setLieu($d['lieu']);
$this->setDate_annee_bourse($d['date_annee_bourse']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setEcole($d['ecole']);
$this->setDate_elaboration($d['date_elaboration']);
$this->setFile($d['file']);
$this->setUser_create($d['user_create']);
$this->setCreate_at($d['create_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setEntreprise($d['entreprise']);
$this->setExperience($d['experience']);
$this->setSexe($d['sexe']);
$this->setNombre_candidat($d['nombre_candidat']);
$this->setDiplome($d['diplome']);
$this->publications =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->type_publication;
                        }
                        
                    }
                    /**
                    * Get the value of category_publication
                    */ 
                    public function getCategory_publication($category_publication=null)
                    {
                        if ($category_publication != null && is_array($this->publications) && count($this->publications)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE category_publication = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$category_publication]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setType_publication($d['type_publication']);
$this->setCategory_publication($d['category_publication']);
$this->setNum_offre($d['num_offre']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setLieu($d['lieu']);
$this->setDate_annee_bourse($d['date_annee_bourse']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setEcole($d['ecole']);
$this->setDate_elaboration($d['date_elaboration']);
$this->setFile($d['file']);
$this->setUser_create($d['user_create']);
$this->setCreate_at($d['create_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setEntreprise($d['entreprise']);
$this->setExperience($d['experience']);
$this->setSexe($d['sexe']);
$this->setNombre_candidat($d['nombre_candidat']);
$this->setDiplome($d['diplome']);
$this->publications =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->category_publication;
                        }
                        
                    }
                    /**
                    * Get the value of num_offre
                    */ 
                    public function getNum_offre($num_offre=null)
                    {
                        if ($num_offre != null && is_array($this->publications) && count($this->publications)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE num_offre = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$num_offre]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setType_publication($d['type_publication']);
$this->setCategory_publication($d['category_publication']);
$this->setNum_offre($d['num_offre']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setLieu($d['lieu']);
$this->setDate_annee_bourse($d['date_annee_bourse']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setEcole($d['ecole']);
$this->setDate_elaboration($d['date_elaboration']);
$this->setFile($d['file']);
$this->setUser_create($d['user_create']);
$this->setCreate_at($d['create_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setEntreprise($d['entreprise']);
$this->setExperience($d['experience']);
$this->setSexe($d['sexe']);
$this->setNombre_candidat($d['nombre_candidat']);
$this->setDiplome($d['diplome']);
$this->publications =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->num_offre;
                        }
                        
                    }
                    /**
                    * Get the value of titre
                    */ 
                    public function getTitre($titre=null)
                    {
                        if ($titre != null && is_array($this->publications) && count($this->publications)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE titre = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$titre]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setType_publication($d['type_publication']);
$this->setCategory_publication($d['category_publication']);
$this->setNum_offre($d['num_offre']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setLieu($d['lieu']);
$this->setDate_annee_bourse($d['date_annee_bourse']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setEcole($d['ecole']);
$this->setDate_elaboration($d['date_elaboration']);
$this->setFile($d['file']);
$this->setUser_create($d['user_create']);
$this->setCreate_at($d['create_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setEntreprise($d['entreprise']);
$this->setExperience($d['experience']);
$this->setSexe($d['sexe']);
$this->setNombre_candidat($d['nombre_candidat']);
$this->setDiplome($d['diplome']);
$this->publications =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->titre;
                        }
                        
                    }
                    /**
                    * Get the value of description
                    */ 
                    public function getDescription($description=null)
                    {
                        if ($description != null && is_array($this->publications) && count($this->publications)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE description = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$description]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setType_publication($d['type_publication']);
$this->setCategory_publication($d['category_publication']);
$this->setNum_offre($d['num_offre']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setLieu($d['lieu']);
$this->setDate_annee_bourse($d['date_annee_bourse']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setEcole($d['ecole']);
$this->setDate_elaboration($d['date_elaboration']);
$this->setFile($d['file']);
$this->setUser_create($d['user_create']);
$this->setCreate_at($d['create_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setEntreprise($d['entreprise']);
$this->setExperience($d['experience']);
$this->setSexe($d['sexe']);
$this->setNombre_candidat($d['nombre_candidat']);
$this->setDiplome($d['diplome']);
$this->publications =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->description;
                        }
                        
                    }
                    /**
                    * Get the value of lieu
                    */ 
                    public function getLieu($lieu=null)
                    {
                        if ($lieu != null && is_array($this->publications) && count($this->publications)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE lieu = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$lieu]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setType_publication($d['type_publication']);
$this->setCategory_publication($d['category_publication']);
$this->setNum_offre($d['num_offre']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setLieu($d['lieu']);
$this->setDate_annee_bourse($d['date_annee_bourse']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setEcole($d['ecole']);
$this->setDate_elaboration($d['date_elaboration']);
$this->setFile($d['file']);
$this->setUser_create($d['user_create']);
$this->setCreate_at($d['create_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setEntreprise($d['entreprise']);
$this->setExperience($d['experience']);
$this->setSexe($d['sexe']);
$this->setNombre_candidat($d['nombre_candidat']);
$this->setDiplome($d['diplome']);
$this->publications =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->lieu;
                        }
                        
                    }
                    /**
                    * Get the value of date_annee_bourse
                    */ 
                    public function getDate_annee_bourse($date_annee_bourse=null)
                    {
                        if ($date_annee_bourse != null && is_array($this->publications) && count($this->publications)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE date_annee_bourse = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$date_annee_bourse]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setType_publication($d['type_publication']);
$this->setCategory_publication($d['category_publication']);
$this->setNum_offre($d['num_offre']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setLieu($d['lieu']);
$this->setDate_annee_bourse($d['date_annee_bourse']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setEcole($d['ecole']);
$this->setDate_elaboration($d['date_elaboration']);
$this->setFile($d['file']);
$this->setUser_create($d['user_create']);
$this->setCreate_at($d['create_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setEntreprise($d['entreprise']);
$this->setExperience($d['experience']);
$this->setSexe($d['sexe']);
$this->setNombre_candidat($d['nombre_candidat']);
$this->setDiplome($d['diplome']);
$this->publications =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->date_annee_bourse;
                        }
                        
                    }
                    /**
                    * Get the value of date_debut
                    */ 
                    public function getDate_debut($date_debut=null)
                    {
                        if ($date_debut != null && is_array($this->publications) && count($this->publications)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE date_debut = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$date_debut]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setType_publication($d['type_publication']);
$this->setCategory_publication($d['category_publication']);
$this->setNum_offre($d['num_offre']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setLieu($d['lieu']);
$this->setDate_annee_bourse($d['date_annee_bourse']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setEcole($d['ecole']);
$this->setDate_elaboration($d['date_elaboration']);
$this->setFile($d['file']);
$this->setUser_create($d['user_create']);
$this->setCreate_at($d['create_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setEntreprise($d['entreprise']);
$this->setExperience($d['experience']);
$this->setSexe($d['sexe']);
$this->setNombre_candidat($d['nombre_candidat']);
$this->setDiplome($d['diplome']);
$this->publications =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->date_debut;
                        }
                        
                    }
                    /**
                    * Get the value of date_fin
                    */ 
                    public function getDate_fin($date_fin=null)
                    {
                        if ($date_fin != null && is_array($this->publications) && count($this->publications)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE date_fin = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$date_fin]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setType_publication($d['type_publication']);
$this->setCategory_publication($d['category_publication']);
$this->setNum_offre($d['num_offre']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setLieu($d['lieu']);
$this->setDate_annee_bourse($d['date_annee_bourse']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setEcole($d['ecole']);
$this->setDate_elaboration($d['date_elaboration']);
$this->setFile($d['file']);
$this->setUser_create($d['user_create']);
$this->setCreate_at($d['create_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setEntreprise($d['entreprise']);
$this->setExperience($d['experience']);
$this->setSexe($d['sexe']);
$this->setNombre_candidat($d['nombre_candidat']);
$this->setDiplome($d['diplome']);
$this->publications =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->date_fin;
                        }
                        
                    }
                    /**
                    * Get the value of ecole
                    */ 
                    public function getEcole($ecole=null)
                    {
                        if ($ecole != null && is_array($this->publications) && count($this->publications)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE ecole = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$ecole]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setType_publication($d['type_publication']);
$this->setCategory_publication($d['category_publication']);
$this->setNum_offre($d['num_offre']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setLieu($d['lieu']);
$this->setDate_annee_bourse($d['date_annee_bourse']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setEcole($d['ecole']);
$this->setDate_elaboration($d['date_elaboration']);
$this->setFile($d['file']);
$this->setUser_create($d['user_create']);
$this->setCreate_at($d['create_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setEntreprise($d['entreprise']);
$this->setExperience($d['experience']);
$this->setSexe($d['sexe']);
$this->setNombre_candidat($d['nombre_candidat']);
$this->setDiplome($d['diplome']);
$this->publications =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->ecole;
                        }
                        
                    }
                    /**
                    * Get the value of date_elaboration
                    */ 
                    public function getDate_elaboration($date_elaboration=null)
                    {
                        if ($date_elaboration != null && is_array($this->publications) && count($this->publications)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE date_elaboration = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$date_elaboration]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setType_publication($d['type_publication']);
$this->setCategory_publication($d['category_publication']);
$this->setNum_offre($d['num_offre']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setLieu($d['lieu']);
$this->setDate_annee_bourse($d['date_annee_bourse']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setEcole($d['ecole']);
$this->setDate_elaboration($d['date_elaboration']);
$this->setFile($d['file']);
$this->setUser_create($d['user_create']);
$this->setCreate_at($d['create_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setEntreprise($d['entreprise']);
$this->setExperience($d['experience']);
$this->setSexe($d['sexe']);
$this->setNombre_candidat($d['nombre_candidat']);
$this->setDiplome($d['diplome']);
$this->publications =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->date_elaboration;
                        }
                        
                    }
                    /**
                    * Get the value of file
                    */ 
                    public function getFile($file=null)
                    {
                        if ($file != null && is_array($this->publications) && count($this->publications)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE file = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$file]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setType_publication($d['type_publication']);
$this->setCategory_publication($d['category_publication']);
$this->setNum_offre($d['num_offre']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setLieu($d['lieu']);
$this->setDate_annee_bourse($d['date_annee_bourse']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setEcole($d['ecole']);
$this->setDate_elaboration($d['date_elaboration']);
$this->setFile($d['file']);
$this->setUser_create($d['user_create']);
$this->setCreate_at($d['create_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setEntreprise($d['entreprise']);
$this->setExperience($d['experience']);
$this->setSexe($d['sexe']);
$this->setNombre_candidat($d['nombre_candidat']);
$this->setDiplome($d['diplome']);
$this->publications =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->file;
                        }
                        
                    }
                    /**
                    * Get the value of user_create
                    */ 
                    public function getUser_create($user_create=null)
                    {
                        if ($user_create != null && is_array($this->publications) && count($this->publications)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE user_create = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$user_create]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setType_publication($d['type_publication']);
$this->setCategory_publication($d['category_publication']);
$this->setNum_offre($d['num_offre']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setLieu($d['lieu']);
$this->setDate_annee_bourse($d['date_annee_bourse']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setEcole($d['ecole']);
$this->setDate_elaboration($d['date_elaboration']);
$this->setFile($d['file']);
$this->setUser_create($d['user_create']);
$this->setCreate_at($d['create_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setEntreprise($d['entreprise']);
$this->setExperience($d['experience']);
$this->setSexe($d['sexe']);
$this->setNombre_candidat($d['nombre_candidat']);
$this->setDiplome($d['diplome']);
$this->publications =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->user_create;
                        }
                        
                    }
                    /**
                    * Get the value of create_at
                    */ 
                    public function getCreate_at($create_at=null)
                    {
                        if ($create_at != null && is_array($this->publications) && count($this->publications)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE create_at = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$create_at]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setType_publication($d['type_publication']);
$this->setCategory_publication($d['category_publication']);
$this->setNum_offre($d['num_offre']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setLieu($d['lieu']);
$this->setDate_annee_bourse($d['date_annee_bourse']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setEcole($d['ecole']);
$this->setDate_elaboration($d['date_elaboration']);
$this->setFile($d['file']);
$this->setUser_create($d['user_create']);
$this->setCreate_at($d['create_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setEntreprise($d['entreprise']);
$this->setExperience($d['experience']);
$this->setSexe($d['sexe']);
$this->setNombre_candidat($d['nombre_candidat']);
$this->setDiplome($d['diplome']);
$this->publications =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->create_at;
                        }
                        
                    }
                    /**
                    * Get the value of updated_at
                    */ 
                    public function getUpdated_at($updated_at=null)
                    {
                        if ($updated_at != null && is_array($this->publications) && count($this->publications)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE updated_at = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$updated_at]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setType_publication($d['type_publication']);
$this->setCategory_publication($d['category_publication']);
$this->setNum_offre($d['num_offre']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setLieu($d['lieu']);
$this->setDate_annee_bourse($d['date_annee_bourse']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setEcole($d['ecole']);
$this->setDate_elaboration($d['date_elaboration']);
$this->setFile($d['file']);
$this->setUser_create($d['user_create']);
$this->setCreate_at($d['create_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setEntreprise($d['entreprise']);
$this->setExperience($d['experience']);
$this->setSexe($d['sexe']);
$this->setNombre_candidat($d['nombre_candidat']);
$this->setDiplome($d['diplome']);
$this->publications =$data; 
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
                        if ($statut != null && is_array($this->publications) && count($this->publications)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE statut = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$statut]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setType_publication($d['type_publication']);
$this->setCategory_publication($d['category_publication']);
$this->setNum_offre($d['num_offre']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setLieu($d['lieu']);
$this->setDate_annee_bourse($d['date_annee_bourse']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setEcole($d['ecole']);
$this->setDate_elaboration($d['date_elaboration']);
$this->setFile($d['file']);
$this->setUser_create($d['user_create']);
$this->setCreate_at($d['create_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setEntreprise($d['entreprise']);
$this->setExperience($d['experience']);
$this->setSexe($d['sexe']);
$this->setNombre_candidat($d['nombre_candidat']);
$this->setDiplome($d['diplome']);
$this->publications =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->statut;
                        }
                        
                    }
                    /**
                    * Get the value of ville
                    */ 
                    public function getVille($ville=null)
                    {
                        if ($ville != null && is_array($this->publications) && count($this->publications)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE ville = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$ville]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setType_publication($d['type_publication']);
$this->setCategory_publication($d['category_publication']);
$this->setNum_offre($d['num_offre']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setLieu($d['lieu']);
$this->setDate_annee_bourse($d['date_annee_bourse']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setEcole($d['ecole']);
$this->setDate_elaboration($d['date_elaboration']);
$this->setFile($d['file']);
$this->setUser_create($d['user_create']);
$this->setCreate_at($d['create_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setEntreprise($d['entreprise']);
$this->setExperience($d['experience']);
$this->setSexe($d['sexe']);
$this->setNombre_candidat($d['nombre_candidat']);
$this->setDiplome($d['diplome']);
$this->publications =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->ville;
                        }
                        
                    }
                    /**
                    * Get the value of entreprise
                    */ 
                    public function getEntreprise($entreprise=null)
                    {
                        if ($entreprise != null && is_array($this->publications) && count($this->publications)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE entreprise = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$entreprise]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setType_publication($d['type_publication']);
$this->setCategory_publication($d['category_publication']);
$this->setNum_offre($d['num_offre']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setLieu($d['lieu']);
$this->setDate_annee_bourse($d['date_annee_bourse']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setEcole($d['ecole']);
$this->setDate_elaboration($d['date_elaboration']);
$this->setFile($d['file']);
$this->setUser_create($d['user_create']);
$this->setCreate_at($d['create_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setEntreprise($d['entreprise']);
$this->setExperience($d['experience']);
$this->setSexe($d['sexe']);
$this->setNombre_candidat($d['nombre_candidat']);
$this->setDiplome($d['diplome']);
$this->publications =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->entreprise;
                        }
                        
                    }
                    /**
                    * Get the value of experience
                    */ 
                    public function getExperience($experience=null)
                    {
                        if ($experience != null && is_array($this->publications) && count($this->publications)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE experience = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$experience]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setType_publication($d['type_publication']);
$this->setCategory_publication($d['category_publication']);
$this->setNum_offre($d['num_offre']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setLieu($d['lieu']);
$this->setDate_annee_bourse($d['date_annee_bourse']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setEcole($d['ecole']);
$this->setDate_elaboration($d['date_elaboration']);
$this->setFile($d['file']);
$this->setUser_create($d['user_create']);
$this->setCreate_at($d['create_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setEntreprise($d['entreprise']);
$this->setExperience($d['experience']);
$this->setSexe($d['sexe']);
$this->setNombre_candidat($d['nombre_candidat']);
$this->setDiplome($d['diplome']);
$this->publications =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->experience;
                        }
                        
                    }
                    /**
                    * Get the value of sexe
                    */ 
                    public function getSexe($sexe=null)
                    {
                        if ($sexe != null && is_array($this->publications) && count($this->publications)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE sexe = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$sexe]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setType_publication($d['type_publication']);
$this->setCategory_publication($d['category_publication']);
$this->setNum_offre($d['num_offre']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setLieu($d['lieu']);
$this->setDate_annee_bourse($d['date_annee_bourse']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setEcole($d['ecole']);
$this->setDate_elaboration($d['date_elaboration']);
$this->setFile($d['file']);
$this->setUser_create($d['user_create']);
$this->setCreate_at($d['create_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setEntreprise($d['entreprise']);
$this->setExperience($d['experience']);
$this->setSexe($d['sexe']);
$this->setNombre_candidat($d['nombre_candidat']);
$this->setDiplome($d['diplome']);
$this->publications =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->sexe;
                        }
                        
                    }
                    /**
                    * Get the value of nombre_candidat
                    */ 
                    public function getNombre_candidat($nombre_candidat=null)
                    {
                        if ($nombre_candidat != null && is_array($this->publications) && count($this->publications)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE nombre_candidat = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$nombre_candidat]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setType_publication($d['type_publication']);
$this->setCategory_publication($d['category_publication']);
$this->setNum_offre($d['num_offre']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setLieu($d['lieu']);
$this->setDate_annee_bourse($d['date_annee_bourse']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setEcole($d['ecole']);
$this->setDate_elaboration($d['date_elaboration']);
$this->setFile($d['file']);
$this->setUser_create($d['user_create']);
$this->setCreate_at($d['create_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setEntreprise($d['entreprise']);
$this->setExperience($d['experience']);
$this->setSexe($d['sexe']);
$this->setNombre_candidat($d['nombre_candidat']);
$this->setDiplome($d['diplome']);
$this->publications =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->nombre_candidat;
                        }
                        
                    }
                    /**
                    * Get the value of diplome
                    */ 
                    public function getDiplome($diplome=null)
                    {
                        if ($diplome != null && is_array($this->publications) && count($this->publications)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE diplome = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$diplome]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId($d['id']);
$this->setType_publication($d['type_publication']);
$this->setCategory_publication($d['category_publication']);
$this->setNum_offre($d['num_offre']);
$this->setTitre($d['titre']);
$this->setDescription($d['description']);
$this->setLieu($d['lieu']);
$this->setDate_annee_bourse($d['date_annee_bourse']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->setEcole($d['ecole']);
$this->setDate_elaboration($d['date_elaboration']);
$this->setFile($d['file']);
$this->setUser_create($d['user_create']);
$this->setCreate_at($d['create_at']);
$this->setUpdated_at($d['updated_at']);
$this->setStatut($d['statut']);
$this->setVille($d['ville']);
$this->setEntreprise($d['entreprise']);
$this->setExperience($d['experience']);
$this->setSexe($d['sexe']);
$this->setNombre_candidat($d['nombre_candidat']);
$this->setDiplome($d['diplome']);
$this->publications =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->diplome;
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
                    * Set the value of type_publication
                    *
                    * @return  self
                    */ 
                   public function setType_publication($type_publication)
                   {
                    $this->type_publication = $type_publication;
               
                       return $this;
                   }
                    /**
                    * Set the value of category_publication
                    *
                    * @return  self
                    */ 
                   public function setCategory_publication($category_publication)
                   {
                    $this->category_publication = $category_publication;
               
                       return $this;
                   }
                    /**
                    * Set the value of num_offre
                    *
                    * @return  self
                    */ 
                   public function setNum_offre($num_offre)
                   {
                    $this->num_offre = $num_offre;
               
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
                    * Set the value of lieu
                    *
                    * @return  self
                    */ 
                   public function setLieu($lieu)
                   {
                    $this->lieu = $lieu;
               
                       return $this;
                   }
                    /**
                    * Set the value of date_annee_bourse
                    *
                    * @return  self
                    */ 
                   public function setDate_annee_bourse($date_annee_bourse)
                   {
                    $this->date_annee_bourse = $date_annee_bourse;
               
                       return $this;
                   }
                    /**
                    * Set the value of date_debut
                    *
                    * @return  self
                    */ 
                   public function setDate_debut($date_debut)
                   {
                    $this->date_debut = $date_debut;
               
                       return $this;
                   }
                    /**
                    * Set the value of date_fin
                    *
                    * @return  self
                    */ 
                   public function setDate_fin($date_fin)
                   {
                    $this->date_fin = $date_fin;
               
                       return $this;
                   }
                    /**
                    * Set the value of ecole
                    *
                    * @return  self
                    */ 
                   public function setEcole($ecole)
                   {
                    $this->ecole = $ecole;
               
                       return $this;
                   }
                    /**
                    * Set the value of date_elaboration
                    *
                    * @return  self
                    */ 
                   public function setDate_elaboration($date_elaboration)
                   {
                    $this->date_elaboration = $date_elaboration;
               
                       return $this;
                   }
                    /**
                    * Set the value of file
                    *
                    * @return  self
                    */ 
                   public function setFile($file)
                   {
                    $this->file = $file;
               
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
                    * Set the value of ville
                    *
                    * @return  self
                    */ 
                   public function setVille($ville)
                   {
                    $this->ville = $ville;
               
                       return $this;
                   }
                    /**
                    * Set the value of entreprise
                    *
                    * @return  self
                    */ 
                   public function setEntreprise($entreprise)
                   {
                    $this->entreprise = $entreprise;
               
                       return $this;
                   }
                    /**
                    * Set the value of experience
                    *
                    * @return  self
                    */ 
                   public function setExperience($experience)
                   {
                    $this->experience = $experience;
               
                       return $this;
                   }
                    /**
                    * Set the value of sexe
                    *
                    * @return  self
                    */ 
                   public function setSexe($sexe)
                   {
                    $this->sexe = $sexe;
               
                       return $this;
                   }
                    /**
                    * Set the value of nombre_candidat
                    *
                    * @return  self
                    */ 
                   public function setNombre_candidat($nombre_candidat)
                   {
                    $this->nombre_candidat = $nombre_candidat;
               
                       return $this;
                   }
                    /**
                    * Set the value of diplome
                    *
                    * @return  self
                    */ 
                   public function setDiplome($diplome)
                   {
                    $this->diplome = $diplome;
               
                       return $this;
                   }
}
