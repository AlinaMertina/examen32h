<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
        parent::__construct();
        /*
        if(!$this->session->has_userdata('nom')){
         redirect(base_url('welcome/index/'));
         }*/
		$this->load->helper('url_helper');
		$this->load->model('accuille_model','accuille');
		$this->load->model('takalo_model','takalo_model');
     }
	public function index()
	{
		//redirect(base_url('accuille/index/'));
		$this->load->view('login');
	}
	public function admin(){
		$this->load->view('loginAdmin');
	}
	public function traitLogin() {  //Traiter la connection d'un client
		if($this->input->post("email") != "" && $this->input->post("mdp") != "") {
			$email =  $this->input->post("email");
			$mdp = $this->input->post("mdp");
			$this->load->model('takalo_model');
			if ( $this->takalo_model->verifyLogin($email, $mdp) == true ) {
				$id = $this->takalo_model->getIdUser($email, $mdp);
				$_SESSION['user'] = $id; 
				redirect(base_url('accuille/index/'));
			}
			else {
				$error = "Donnes entrees incorrects";
				redirect(base_url('welcome/index?idError='. $error));
			}
		}
		else {
			$error = "Completer les champs";
			redirect(base_url('welcome/index'. $error));
		}
	}
	public function inscription() { //Pour affiche la page d'inscription
		$this->load->view('inscription');
	}
	public function traitLoginAdmin() {  //Traiter la connection d'un client
		if($this->input->post("email") != "" && $this->input->post("mdp") != "") {
			$email =  $this->input->post("email");
			$mdp = $this->input->post("mdp");
			$this->load->model('takalo_model');
			if ( $this->takalo_model->verifyLogin($email, $mdp) == true ) {
				$id = $this->takalo_model->getIdUser($email, $mdp);
				$_SESSION['user'] = $id; 
				$_SESSION['idadmin']=0;
				redirect(base_url('accuille/liste/'));
			}
			else {
				$error = "Donnes entrees incorrects";
				redirect(base_url('welcome/index?idError='. $error));
			}
		}
		else {
			$error = "Completer les champs";
			redirect(base_url('welcome/index'. $error));
		}
	}
	public function traitInscription() {    //Traiter l'inscription
		if ( $this->input->post("nom") != "" && $this->input->post("prenom") != "" && $this->input->post("dtn") != "" && $this->input->post("email") != "" &&  $this->input->post("mdp") != "" ) {
			$nom = $this->input->post("nom");
			$prenom = $this->input->post("prenom");
			$dtn = $this->input->post("dtn");
			$email = $this->input->post("email");
			$mdp = $this->input->post("mdp");
			$this->load->model('takalo_model');

			$this->takalo_model->inscrire($nom, $prenom, $dtn, $email, $mdp);
			redirect(base_url('accuille/index/'));
			$id = $this->takalo_model->getIdUser($email, $mdp);
			$_SESSION['user'] = $id; 
		}
		else {
			$error = "Completer les champs";
			redirect(base_url('welcome/index'));
		}        
	}
	public function deconnexion(){
		session_destroy();
		redirect(base_url('welcome/index'));
	}
}
