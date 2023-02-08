<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Accuille_model extends CI_Model 
{
    
    public function get_categorie(){
        $requete="select  * from categorie";
        $query = $this->db->query($requete);
        $tabe = array();
        $a=0;
        foreach($query->result_array() as $row){
            $tabe[$a]=$row;
            $a++;
        }
        return $tabe;
    }
    public function get_allproduit(){
        $requete="select id,Nomimage,idCategorie,idUser,prix,description from photoproduit join produit on photoproduit.idp=produit.idp group by photoproduit.idp ";
        $query = $this->db->query($requete);
        $tabe = array();
        $a=0;
        foreach($query->result_array() as $row){
            $tabe[$a]=$row;
            $a++;
        }
        return $tabe;
    }
    public function listedemesposte($id ){
        $requete="select photoproduit.idp,id,Nomimage,idCategorie,idUser,prix,description from photoproduit join produit on photoproduit.idp=produit.idp where idUser=%d  group by photoproduit.idp ";
        $requete =sprintf($requete,$id);
        $query = $this->db->query($requete);
        $tabe = array();
        $a=0;
        foreach($query->result_array() as $row){
            $tabe[$a]=$row;
            $a++;
        }
        return $tabe;
    }
    public function getlistephoto($idp){
        $requete="select * from photoproduit where idp=%d";
        $requete =sprintf($requete,$idp);
        $query = $this->db->query($requete);
        $tabe = array();
        $a=0;
        foreach($query->result_array() as $row){
            $tabe[$a]=$row;
            $a++;
        }
        return $tabe;
    }
    
    public function getinfoproduit($idp){
        $requete="select * from produit where idp=%d";
        $requete =sprintf($requete,$idp);
        $query = $this->db->query($requete);
        $tabe = array();
        foreach($query->result_array() as $row){
            $tabe=$row;
        }
        return $tabe;
        
    }
    public function getproduitmodifcategorie($idp){
        $requete="select produit.idp as idp,idCategorie,Nomimage from produit join photoproduit on photoproduit.idp=produit.idp where produit.idp=%d group by produit.idp";
        $requete =sprintf($requete,$idp);
        $query = $this->db->query($requete);
        $tabe = array();
        foreach($query->result_array() as $row){
            return $row;
        }
    }
    public function getlisteautreObjet($idp){
        $requete="select photoproduit.idp,id,Nomimage,idCategorie,idUser,prix,description from photoproduit join produit on photoproduit.idp=produit.idp where idUser!=%d  group by photoproduit.idp ";
        $requete =sprintf($requete,$idp);
        $query = $this->db->query($requete);
        $tabe = array();
        $a=0;
        foreach($query->result_array() as $row){
            $tabe[$a]=$row;
            $a++;
        }
        return $tabe;
    }
    public function produitEchanger($iduserko){
        $requete="select Nomimage,Proposition.idproduit1,produit.prix,produit.description from Proposition join produit on Proposition.idproduit1 = produit.idp join photoproduit on produit.idp=photoproduit.idp where idUtilisateur1=%d group by photoproduit.idp";
        $requete =sprintf($requete,$iduserko);
        $query = $this->db->query($requete);
        $tabe = array();
        $a=0;
        foreach($query->result_array() as $row){
            $tabe[$a]=$row;
        }
        return $tabe;
    }
    public function produitTakalony($iduserko){
        $requete="select idproposition,Nomimage,Proposition.idproduit1,produit.prix,produit.description,idUtilisateur2 from Proposition join produit on Proposition.idproduit2 = produit.idp join photoproduit on produit.idp=photoproduit.idp where idUtilisateur1=%d group by photoproduit.idp";
        $requete =sprintf($requete,$iduserko);
        $query = $this->db->query($requete);
        $tabe = array();
        $a=0;
        foreach($query->result_array() as $row){
            $tabe[$a]=$row;
        }
        return $tabe;
    }
    public function listeproduit(){
        $requete="select photoproduit.idp,id,Nomimage,idCategorie,idUser,prix,description from photoproduit join produit on photoproduit.idp=produit.idp group by photoproduit.idp ";
        $query = $this->db->query($requete);
        $tabe = array();
        $a=0;
        foreach($query->result_array() as $row){
            $tabe[$a]=$row;
            $a++;
        }
        return $tabe;
    }
    public function modifcategorie($idp,$idc){
        $requete="update produit set idCategorie=%d where idp=%d";
        $requete =sprintf($requete,$idc,$idp);
        $query = $this->db->query($requete);
    }
    public function getHistorique($idp){
        $requete="select User.Nom,Prenom,dated,User.id,Proposition.idproduit1 as idproduit  from AccepterProduit join Proposition on Proposition.idproposition=AccepterProduit.idproposition join User on User.id = Proposition.idUtilisateur1  where Proposition.idproduit1=%d";
        $requete=sprintf($requete,$idp);
        $query = $this->db->query($requete);
        $tabe = array();
        $a=0;
        foreach($query->result_array() as $row){
            $tabe[$a]=$row;
            $a++;
        }
        return $tabe;
    }
    public function getlisteproduitlien($prixproduit,$dixAudeux,$iduser,$idp){
        $MdixpC=0;
        $PdixpC=0;
        if($dixAudeux==1){
            $MixpC= $prixproduit-($prixproduit*0.1);
            $PdixpC=$prixproduit+($prixproduit*0.1);
        }else{
            $MixpC= $prixproduit-($prixproduit*0.2);
            $PdixpC=$prixproduit+($prixproduit*0.2);
        }
        $requete ="select produit.prix,Nomimage,produit.idp,produit.idUser from produit join photoproduit on photoproduit.idp = produit.idp where (produit.prix BETWEEN %d AND  %d ) and idUser!=%d and produit.idp!=%d";
        $requete=sprintf($requete,$MixpC,$PdixpC,$iduser,$idp);
        $query = $this->db->query($requete);
        $tabe = array();
        $a=0;
        foreach($query->result_array() as $row){
            $tabe[$a]=$row;
            $a++;
        }
        return $tabe;
    }
}
?>