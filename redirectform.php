<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Redirectform extends CI_Controller {

	public function __construct(){
		parent::__construct();
        /*
		if(!$this->session->has_userdata('nom')){
		 redirect(base_url('welcome/index/'));
		 }*/
         $this->load->model('ajoutbd_model','ajout');
         $this->load->helper('url_helper');
         session_start();
	 }
	public function ajoutproduit(){
        $_SESSION['user']=1;
        $_SESSION['idproduit']=$this->ajout->ajoutproduir($_POST['categorie'],$_SESSION['user'],$_POST['description'],$_POST['prix']);
        $this->load->view('ajoutphoto');
    }
    public function ajoutimage(){
        for($i=0;$i<$_POST['nbr'];$i++){
            $nomfile='fichier'.$i;
            $this->ajout->upload_photo($_SESSION['idproduit'],$_FILES[$nomfile]['name'],$nomfile);
        }
        redirect(base_url('accuille/index/'));
    }
    public function fairepropositon(){
        $_SESSION['idutilisateurU']=$_GET['iduser'];
        $_SESSION['idp']=$_GET['idproduitA'];//idproduit t'autre utilisateur
        redirect(base_url('accuille/voirlistedemespost/?proposition=0'));
    }
    public function validerproposition(){
        $this->ajout->ajoutproposition($_SESSION['user'],$_SESSION['idutilisateurU'],$_GET['idproduit'],$_SESSION['idp']);
        redirect(base_url('accuille/index/'));
    }
    public function accepter(){
        $this->ajout->AccepterEchange($_GET['idproposition'],true);
        redirect(base_url('accuille/index/'));
    }
    public function refuser(){
        $this->ajout->AccepterEchange($_GET['idproposition'],false);
        redirect(base_url('accuille/index/'));
    }
}
