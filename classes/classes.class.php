<?php
use Utils/Env;
(new Env(__DIR__ . '/.env'))->load();
$DB_HOST = getenv('DATABASE_HOST');
$DB_TYPE = getenv('DATABASE_TYPE');
$DB_NAME = getenv('MYSQL_DATABASE');
$DB_USERNAME = getenv('MYSQL_USER');
$DB_PASSWORD = getenv('MYSQL_PASSWORD');
class utilisateurs{
	public $id;
	public $nom;
	public $prenom;
	public $identifiant;
	public $mdp;
	public $telephone;
	public $adresse;
	public $statut;
	public $inscription;
	public function __construct($id,$n,$t,$i,$p,$ad,$st,$ins){
		$this->id=$id;
		$this->nom=$n;
		$this->prenom=$p;
		$this->identifiant=$i;
		$this->mdp=$mdp;
		$this->telephone=$t;
		$this->adresse=$ad;
		$this->statut=$st;
		$this->inscription=$ins;
		
		
	}
	public static  function connexion(){
		$cnx=null;
		try {
						//$cnx=new PDO('mysql:host=91.234.195.212;dbname=c1528924c_clients', 'c1528924c_eden1', '@@Eden1@@06');
            $cnx=new PDO('{$DB_TYPE}:host={$DB_HOST};dbname={$DB_NAME}', $DB_USERNAME, $DB_PASSWORD);
			return $cnx;
		} catch (Exception $e) {
            
			return $cnx;	
		}
	}
	public static function  authentif($l,$p){
		$id=-1;
		$cnx=utilisateurs::connexion();
		if($cnx!=null){
			$r=$cnx->query("SELECT * FROM `utilisateurs`");
			$t=$r->fetchAll();
			
			foreach ($t as $row){
				if($row[3]==$l && $row[5]==$p){
					return $row[0];
				}
			}
		}
		return $id;
	}
	public static function supprimer_ms_prod($id){
		$cnx=utilisateurs::connexion();
		if($cnx!=NULL){
			$r=$cnx->query("DELETE FROM `solomenu` WHERE `id`=$id  ");
		}
	}
	public static function ajouter_ms_prod($n,$p,$s,$c){
		$cnx=utilisateurs::connexion();
		if($cnx!=NULL){
			$r=$cnx->query("INSERT INTO `solomenu` (`id`, `nom`, `prix`, `stock`, `categorie`) VALUES (NULL, '".$n."', '".$p."', '".$s."', '".$c."')");
		}
	}
	public static function modifier_ms_prod($id,$n,$p,$s,$c){
		$cnx=utilisateurs::connexion();
		if($cnx!=null){
			$r=$cnx->query("UPDATE `solomenu` SET `nom`='$n',`prix`='$p',`stock`='$s',`categorie`='$c' WHERE `id`=$id ");
		}

	}



		public static function supprimer_me_prod($id){
		$cnx=utilisateurs::connexion();
		if($cnx!=NULL){
			$r=$cnx->query("DELETE FROM `extramenu` WHERE `id`=$id  ");
		}
	}
	public static function ajouter_me_prod($n,$p,$s,$c){
		$cnx=utilisateurs::connexion();
		if($cnx!=NULL){
			$r=$cnx->query("INSERT INTO `extramenu` (`id`, `nom`, `prix`, `stock`, `categorie`) VALUES (NULL, '".$n."', '".$p."', '".$s."', '".$c."')");
		}
	}
	public static function modifier_me_prod($id,$n,$p,$s,$c){
		$cnx=utilisateurs::connexion();
		if($cnx!=null){
			$r=$cnx->query("UPDATE `extramenu` SET `nom`='$n',`prix`='$p',`stock`='$s',`categorie`='$c' WHERE `id`=$id ");
		}

	}

	public static function Afficher_ms_prod(){
		$cnx=utilisateurs::connexion();
		if($cnx!=NULL){
			$r=$cnx->query("SELECT * FROM `solomenu`");
			
			return $r;
		}

	}
		public static function Afficher_me_prod(){
		$cnx=utilisateurs::connexion();
		if($cnx!=NULL){
			$r=$cnx->query("SELECT * FROM `extramenu`");
			
			return $r;
		}

	}
	/*
	public static function Afficher_film_rayon($id_r,$id_f){
		$cnx=employe::connexion();
		if($cnx!=NULL){
			$r=$cnx->query("SELECT * FROM `film` WHERE `id_rayon`= $id_r AND `id`=$id_f");
			$t=$r->fetchAll();
			foreach ($t as $row){
				echo $row['nom']."|".$row['type']."|".$row['description']."|".$row['annee']."</br>";
			}
		}

	}
	public static function supprimer_film_rayon($id_r,$id_f){
		$cnx=employe::connexion();
		if($cnx!=NULL){
			$r=$cnx->query("DELETE FROM `film` WHERE `id_rayon`=$id_r AND `id`=$id_f ");
		}
	}
	public static function ajouter_film_rayon($n,$t,$d,$a,$id_r){
		$cnx=employe::connexion();
		if($cnx!=NULL){
			$r=$cnx->query("INSERT INTO `film` (`id`, `nom`, `type`, `description`, `annee`, `id_rayon`) VALUES (NULL, '".$n."', '".$t."', '".$d."', '".$a."', '".$id_r."')");
		}
	}
	public static function modifier($id,$n,$t,$l,$p,$id_r){
		$cnx=employe::connexion();
		if($cnx!=null){
			$r=$cnx->query("UPDATE `employe` SET `id`='',`nom`='$n',`tel`='$t',`login`='$l',`password`='$p',`id_rayon`='$id_r' ");
		}

	}*/
}





?>