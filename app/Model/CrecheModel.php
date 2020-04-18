<?php


namespace App\Model;

use App\Weblitzer\Model;
use App\App;

class CrecheModel extends Model
{
    protected static $table = 'nurs_creche';
    protected $id_creche;
    protected $nom_creche;
    protected $nom_gerant;
    protected $prenom_gerant;
    protected $email;
    protected $telephone_creche;
    protected $num_rue;
    protected $supp_rue;
    protected $nom_rue;
    protected $codepostal;
    protected $ville;
    protected $num_siret;
    protected $num_agrement;
    protected $num_secusocial;
    protected $effectif_maxenfant;
    protected $longitude;
    protected $latitude;
    protected $password;
    protected $token;
    protected $created_at;
    protected $modified_at;


    /**
     * @return mixed
     */
    public function getId_Creche()
    {
        return $this->id_creche;
    }

    /**
     * @param mixed $id_creche
     */
    public function setIdCreche($id_creche)
    {
        $this->id_creche = $id_creche;
    }

    /**
     * @return mixed
     */
    public function getNom_Creche()
    {
        return $this->nom_creche;
    }

    /**
     * @param mixed $nom_creche
     */
    public function setNomCreche($nom_creche)
    {
        $this->nom_creche = $nom_creche;
    }

    /**
     * @return mixed
     */
    public function getNom_Gerant()
    {
        return $this->nom_gerant;
    }

    /**
     * @param mixed $nom_gerant
     */
    public function setNomGerant($nom_gerant)
    {
        $this->nom_gerant = $nom_gerant;
    }

    /**
     * @return mixed
     */
    public function getPrenom_Gerant()
    {
        return $this->prenom_gerant;
    }

    /**
     * @param mixed $prenom_gerant
     */
    public function setPrenomGerant($prenom_gerant)
    {
        $this->prenom_gerant = $prenom_gerant;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */

    public function getTelephone()
    {
        return $this->telephone_creche;
    }

    /**
     * @param mixed $telephone_creche
     */
    public function setTelephoneCreche($telephone_creche)
    {
        $this->telephone_creche = $telephone_creche;
    }

    /**
     * @return mixed
     */
    public function getNum_Rue()
    {
        return $this->num_rue;
    }

    /**
     * @param mixed $num_rue
     */
    public function setNumRue($num_rue)
    {
        $this->num_rue = $num_rue;
    }

    /**
     * @return mixed
     */
    public function getSupp_Rue()
    {
        return $this->supp_rue;
    }

    /**
     * @param mixed $supp_rue
     */
    public function setSuppRue($supp_rue)
    {
        $this->supp_rue = $supp_rue;
    }

    /**
     * @return mixed
     */
    public function getNom_Rue()
    {
        return $this->nom_rue;
    }

    /**
     * @param mixed $nom_rue
     */
    public function setNomRue($nom_rue)
    {
        $this->nom_rue = $nom_rue;
    }

    /**
     * @return mixed
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * @param mixed $codepostal
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return mixed
     */
    public function getNum_Siret()
    {
        return $this->num_siret;
    }

    /**
     * @param mixed $num_siret
     */
    public function setNumSiret($num_siret)
    {
        $this->num_siret = $num_siret;
    }

    /**
     * @return mixed
     */
    public function getNum_Agrement()
    {
        return $this->num_agrement;
    }

    /**
     * @param mixed $num_agrement
     */
    public function setNumAgrement($num_agrement)
    {
        $this->num_agrement = $num_agrement;
    }

    /**
     * @return mixed
     */
    public function getNum_Secusocial()
    {
        return $this->num_secusocial;
    }

    /**
     * @param mixed $num_secusocial
     */
    public function setNumSecusocial($num_secusocial)
    {
        $this->num_secusocial = $num_secusocial;
    }

    /**
     * @return mixed
     */
    public function getEffectif_Maxenfant()
    {
        return $this->effectif_maxenfant;
    }

    /**
     * @param mixed $effectif_maxenfant
     */
    public function setEffectifMaxenfant($effectif_maxenfant)
    {
        $this->effectif_maxenfant = $effectif_maxenfant;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return mixed
     */
    public function get_Password()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function get_Token()
    {
        return $this->token;
    }

    /**
     * @param mixed $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * @return mixed
     */
    public function get_CreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @return mixed
     */
    public function get_ModifiedAt()
    {
        return $this->modified_at;
    }

    /**
     * @param mixed $modified_at
     */
    public function setModifiedAt($modified_at)
    {
        $this->modified_at = $modified_at;
    }



}