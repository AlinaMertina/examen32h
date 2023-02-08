<?php  
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Searcher extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->helper('url_helper');
            $this->load->model('partie2_model','stat');
            $this->load->model('accuille_model','accuille');
            session_start();
        }

        public function traitSearch() {
            if ( $this->input->post('search') != "" && $this->input->post('categorie') != "") {
                $key = $this->input->post('search');
                $cat = $this->input->post('categorie');
                $result = array();
                if ( $this->stat->searchProduit($key, $cat) != null ) {
                    $result = $this->stat->searchProduit($key, $cat,$_SESSION['iduser']);
                    $tab = array();
                    if (count($result) > 0 ) {
                        for ( $i = 0; $i < count($result); $i++) {
                            $tab['idp'][$i] = $result[$i]['idp'];
                            $tab['id'][$i] = $result[$i]['id'];
                            $tab['Nomimage'][$i] = $result[$i]['Nomimage'];
                            $tab['idCategorie'][$i] = $result[$i]['idCategorie'];
                            $tab['idUser'][$i] = $result[$i]['idUser'];
                            $tab['prix'][$i] = $result[$i]['prix'];
                            $tab['description'][$i] = $result[$i]['description'];
                        }
                    }
                    $tabe['recherche']=0;
                    if(isset($_SESSION['idadmin'])){
                        $tabe['admin']=0;
                    }
                    $this->load->view('header',$tabe);
                    $this->load->view('resultarecherche', $tab);
                    $this->load->view('footer');
                }
                else {
                    $error = "aucun resultat trouve pour votre recherche";
                    
                    redirect('searcher/getSearch?error='.$error);
                }
            }
            else {
                $error = "aucun resultat trouve pour votre recherche";
                redirect('searcher/getSearch?error='.$error);
            }
        }

        public function getSearch() {
            $data=array();
            $data=$this->accuille->get_categorie();
            $tabe=array();
            for($i=0;$i<count($data);$i++){
                $tabe['idcategorie'][$i]=$data[$i]['idCategorie'];
                $tabe['Nom'][$i]=$data[$i]['Nom'];
            }
            if(isset($_SESSION['idadmin'])){
                $tabe['admin']=0;
            }
            $this->load->view('header',$tabe);
            $this->load->view('searchProduit', $tabe);
            $this->load->view('footer');
        }

        public function getDetails() {
            $idp = $this->input->get('idp');
            $data = $this->stat->getProduitById($idp);
            $data['nomUser'] = $this->stat->getNomUserById($data['idUser']);
            $data['nomType'] = $this->stat->getNomTypeById($data['idCategorie']);
            $this->load->view('detailsProduit', $data);
        }
    }
?>