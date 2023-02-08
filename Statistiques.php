<?php  
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Statistiques extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->helper('url_helper');
            $this->load->model('partie2_model','stat');
         }
        
        public function index() {
            $this->load->view('statistiques');
        }

        public function getStat() {
            $data['nc'] = $this->stat->getNbClientInscrit();
            $data['npe'] = $this->stat->getNbProduitEchanger();
            if(isset($_SESSION['idadmin'])){
                $data['admin']=0;
            }
            $this->load->view('header',$data);
            $this->load->view('statistiques', $data);
            $this->load->view('footer');
        }

       /* public function nbProdUser() {
            $data['npeUser'] = $this->stat->$this->stat->getNbProduitEchanger(1);
            $this->loaf->view($data, 'statistiques');
        } */
    }
?>