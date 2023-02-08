<?php 
    if(! defined('BASEPATH')) exit ('No direct script access allowed');
    class Partie2_model extends CI_Model 
    {
        public function getNbClientInscrit() {    //Avoir le nombre des clients
            $query = $this->db->query("select count(id) from user where isAdmin = false");
            $row = $query->row_array();
            
            return $row['count(id)'];
        }

        public function getNbProduitEchanger() {  //Avoir le nombre d'echange effectuer
            $query = $this->db->query("select count(idAcc) from echange where value = 1");
            $row = $query->row_array();
            
            return $row['count(idAcc)'];
        }

        public function searchProduit($key, $categorie ,$iduser) {  //Rechercher  un produit
            if ( $categorie == 0 ) {
                $sql = "select photoproduit.idp,id,Nomimage,idCategorie,idUser,prix,description from produit join photoproduit on photoproduit.idp=produit.idp where description like %s%s%s and idUser=%d group by produit.idp";
                $sql = sprintf($sql, "'%", $key, "%'",$iduser);
                $query = $this->db->query($sql); 
                $data = array();
                $i = 0;
                foreach ( $query->result_array() as $row) {
                    $data[$i] = $row;
                    $i++;
                }
                return $data;
            }
            else {
                $sql = "select photoproduit.idp,id,Nomimage,idCategorie,idUser,prix,description from produit join photoproduit on photoproduit.idp=produit.idp where description like %s%s%s and idCategorie = %d and idUser=%d group by produit.idp";
                $sql = sprintf($sql, "'%", $key,"%'", $categorie,$iduser);
                $query = $this->db->query($sql); 
                $data = array();
                $i = 0;
                foreach ( $query->result_array() as $row) {
                    $data[$i] = $row;
                    $i++;
                }
                return $data;
            }
        }

        public function getNomUserById( $id ) {    //Avoir le nom d'un user par son id
            $sql = "SELECT nom FROM user where id = %d";
            $sql = sprintf($sql, $id);
            $query = $this->db->query($sql);
            $row = $query->row_array();

            return $row['nom'];
        }

        public function getProduitById( $idProduit ) {  //Recuperer le produit correspondant a l'id
            $sql = "SELECT * FROM produit where idp = %d";
            $sql = sprintf($sql, $idProduit);
            $query = $this->db->query($sql);
            $row = $query->row_array();

            return $row;
        }

        public function getNomTypeById( $id ) {    //recuperer le nom d'un type par son id
            $sql = "SELECT nom FROM categorie where idCategorie = %d";
            $sql = sprintf($sql, $id);
            $query = $this->db->query($sql);
            $row = $query->row_array();

            return $row['nom'];
        }
    }
?>