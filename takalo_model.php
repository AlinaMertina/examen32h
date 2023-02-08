<?php  
    if(! defined('BASEPATH')) exit ('No direct script access allowed');

    class Takalo_model extends CI_Model {
        public function getUserById( $id ) {    //Avoir un user par son id
            $sql = "SELECT * FROM User where id = %d";
            $sql = sprintf($sql, $id);
            $query = $this->db->query($sql);
            $row = $query->row_array();

            return $row;
        }

        public function getAllClient() {    //Rcuperer tous les clients
            $query = $this->db->query("select * from User where isAdmin = 'false'"); 
            $data = array();
            $i = 0;
            foreach ( $query->result_array() as $row) {
                $data[$i] = $row;
                $i++;
            }
            return $data;
        }

        public function getAllAdmin() {    //Rcuperer tous les admins
            $query = $this->db->query("select * from User where isAdmin = 'true'"); 
            $data = array();
            $i = 0;
            foreach ( $query->result_array() as $row) {
                $data[$i] = $row;
                $i++;
            }
            return $data;
        }

        public function verifyLogin($email, $mdp) { //Verifie si les donnees entres sont vrais pour pouvoir se connecter
            $sql = "select * from User where email = '%s' and mdp = '%s'";
            $sql = sprintf($sql, $email, $mdp);
            $query = $this->db->query($sql);
            $row = $query->row_array();
            if($row['email'] == $email && $row['mdp'] == $mdp) {
                return true;
            }

            return false;
        }
        public function verifyLoginAdmin($email, $mdp) { //Verifie si les donnees entres sont vrais pour pouvoir se connecter
            $sql = "select * from User where email = '%s' and mdp = '%s' and isAdmin=true";
            $sql = sprintf($sql, $email, $mdp);
            $query = $this->db->query($sql);
            $row = $query->row_array();
            if($row['email'] == $email && $row['mdp'] == $mdp) {
                return true;
            }

            return false;
        }

        public function inscrire ( $nom, $prenom, $dtn, $email, $mdp) { //Creer un compte client
            $sql = "INSERT INTO User values ( default, '%s', '%s', '%s', '%s', '%s', false)";
            $sql = sprintf($sql, $nom, $prenom, $dtn, $email, $mdp);
            $this->db->query($sql);
        }

        public function getIdUser( $email, $mdp ) {     //Recuperer l'id d'un user par les donnees entres
            $sql = "select * from User where email = '%s' and mdp = '%s'";
            $sql = sprintf($sql, $email, $mdp);
            $query = $this->db->query($sql);
            $row = $query->row_array();

            return $row['id'];
        }
    }
?>