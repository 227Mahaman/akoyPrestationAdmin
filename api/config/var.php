<?php
        //Pour la connexion à la base de donnée
        $this->config["host"] = 'localhost';
        $this->config["db_name"] = 'akoy_prestation';
        $this->config["username"] = 'root';
        $this->config["password_"] = '';
$this->config["tables"] = ['categories_publication','cv','ecole','files','langues','module','module_role','pays','publications','roles','type_publication','types_user','users','villes',];

$this->config['tables']['categories_publication'] = ['id','titre',];

$this->config['tables']['categories_publication']['id'] = ['id'];

$this->config['tables']['cv'] = ['id','titre','auteur','user_create','created_at','update_at','statut','file',];

$this->config['tables']['categories_publication']['id'] = ['id'];$this->config['tables']['cv']['id'] = ['id'];

$this->config['tables']['ecole'] = ['id','label','description','ville','user_create','created_at','updated_at','statut',];

$this->config['tables']['categories_publication']['id'] = ['id'];$this->config['tables']['cv']['id'] = ['id'];$this->config['tables']['ecole']['id'] = ['id'];

$this->config['tables']['files'] = ['id','file_name','file_url','file_type','file_size','created_at','statut',];

$this->config['tables']['categories_publication']['id'] = ['id'];$this->config['tables']['cv']['id'] = ['id'];$this->config['tables']['ecole']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];

$this->config['tables']['langues'] = ['id','code','titre',];

$this->config['tables']['categories_publication']['id'] = ['id'];$this->config['tables']['cv']['id'] = ['id'];$this->config['tables']['ecole']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['langues']['id'] = ['id'];

$this->config['tables']['module'] = ['id','name','icon','description','action_url','sub_module','is_menu','created_at','updated_at','statut','user_create',];

$this->config['tables']['categories_publication']['id'] = ['id'];$this->config['tables']['cv']['id'] = ['id'];$this->config['tables']['ecole']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['langues']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];

$this->config['tables']['module_role'] = ['id','role_id','module','create_at',];

$this->config['tables']['categories_publication']['id'] = ['id'];$this->config['tables']['cv']['id'] = ['id'];$this->config['tables']['ecole']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['langues']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];

$this->config['tables']['pays'] = ['id','name',];

$this->config['tables']['categories_publication']['id'] = ['id'];$this->config['tables']['cv']['id'] = ['id'];$this->config['tables']['ecole']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['langues']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['pays']['id'] = ['id'];

$this->config['tables']['publications'] = ['id','type_publication','category_publication','titre','description','lieu','date_annee_bourse','date_debut','date_fin','ecole','date_elaboration','file','user_create','create_at','updated_at','statut',];

$this->config['tables']['categories_publication']['id'] = ['id'];$this->config['tables']['cv']['id'] = ['id'];$this->config['tables']['ecole']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['langues']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['pays']['id'] = ['id'];$this->config['tables']['publications']['id'] = ['id'];

$this->config['tables']['roles'] = ['id','name','description',];

$this->config['tables']['categories_publication']['id'] = ['id'];$this->config['tables']['cv']['id'] = ['id'];$this->config['tables']['ecole']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['langues']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['pays']['id'] = ['id'];$this->config['tables']['publications']['id'] = ['id'];$this->config['tables']['roles']['id'] = ['id'];

$this->config['tables']['type_publication'] = ['id','titre',];

$this->config['tables']['categories_publication']['id'] = ['id'];$this->config['tables']['cv']['id'] = ['id'];$this->config['tables']['ecole']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['langues']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['pays']['id'] = ['id'];$this->config['tables']['publications']['id'] = ['id'];$this->config['tables']['roles']['id'] = ['id'];$this->config['tables']['type_publication']['id'] = ['id'];

$this->config['tables']['types_user'] = ['id','label',];

$this->config['tables']['categories_publication']['id'] = ['id'];$this->config['tables']['cv']['id'] = ['id'];$this->config['tables']['ecole']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['langues']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['pays']['id'] = ['id'];$this->config['tables']['publications']['id'] = ['id'];$this->config['tables']['roles']['id'] = ['id'];$this->config['tables']['type_publication']['id'] = ['id'];$this->config['tables']['types_user']['id'] = ['id'];

$this->config['tables']['users'] = ['id','first_name','last_name','phone_number','type_user','created_at','updated_at','photo','role','password_','statut',];

$this->config['tables']['categories_publication']['id'] = ['id'];$this->config['tables']['cv']['id'] = ['id'];$this->config['tables']['ecole']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['langues']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['pays']['id'] = ['id'];$this->config['tables']['publications']['id'] = ['id'];$this->config['tables']['roles']['id'] = ['id'];$this->config['tables']['type_publication']['id'] = ['id'];$this->config['tables']['types_user']['id'] = ['id'];$this->config['tables']['users']['id'] = ['id'];

$this->config['tables']['villes'] = ['id','titre',];

$this->config['tables']['categories_publication']['id'] = ['id'];$this->config['tables']['cv']['id'] = ['id'];$this->config['tables']['ecole']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['langues']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['pays']['id'] = ['id'];$this->config['tables']['publications']['id'] = ['id'];$this->config['tables']['roles']['id'] = ['id'];$this->config['tables']['type_publication']['id'] = ['id'];$this->config['tables']['types_user']['id'] = ['id'];$this->config['tables']['users']['id'] = ['id'];$this->config['tables']['villes']['id'] = ['id'];
