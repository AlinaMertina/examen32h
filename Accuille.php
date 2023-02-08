<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accuille extends CI_Controller {
    public function __construct(){
        parent::__construct();
        /*
        if(!$this->session->has_userdata('nom')){
         redirect(base_url('welcome/index/'));
         }*/

        $this->load->helper('url_helper');
        $this->load->model('accuille_model','accuille');
     }
    public function get_Categorieformater(){
        $data=array();
        $data=$this->accuille->get_categorie();
        $tabe=array();
        for($i=0;$i<count($data);$i++){
            $tabe['idcategorie'][$i]=$data[$i]['idCategorie'];
            $tabe['Nom'][$i]=$data[$i]['Nom'];
        }
        $data=$this->accuille->get_allproduit();
        for($i=0;$i<count($data);$i++){
            $tabe['Nomimage'][$i]=$data[$i]['Nomimage'];
            $tabe['idCategorieA'][$i]=$data[$i]['idCategorie'];
            $tabe['idUser'][$i]=$data[$i]['idUser'];
            $tabe['prix'][$i]=$data[$i]['prix'];
            $tabe['description'][$i]=$data[$i]['description'];
        }
        if(isset($_SESSION['idadmin'])){
            $tabe['admin']=0;
        }
        return $tabe;
    }
    public function getformatposte(){
        $data=array();
        $data=$this->accuille->get_categorie();
        $tabe=array();
        for($i=0;$i<count($data);$i++){
            $tabe['idcategorie'][$i]=$data[$i]['idCategorie'];
            $tabe['Nom'][$i]=$data[$i]['Nom'];
        }
        $data=$this->accuille->listedemesposte($_SESSION['user']);
        for($i=0;$i<count($data);$i++){
            $tabe['idp'][$i]=$data[$i]['idp'];
            $tabe['id'][$i]=$data[$i]['id'];
            $tabe['Nomimage'][$i]=$data[$i]['Nomimage'];
            $tabe['idCategorieA'][$i]=$data[$i]['idCategorie'];
            $tabe['idUser'][$i]=$data[$i]['idUser'];
            $tabe['prix'][$i]=$data[$i]['prix'];
            $tabe['description'][$i]=$data[$i]['description'];
        }
        if(isset($_SESSION['idadmin'])){
            $tabe['admin']=0;
        }
        if(isset($_GET['proposition'])){
            $tabe['propositon']=0;
        }
        return $tabe;
    }
	public function index()
	{
        $this->load->view('header',$this->get_Categorieformater());
		$this->load->view('Accuille',$this->get_Categorieformater());
        $this->load->view('footer');
	}	
    public 	function ajoutproduit(){
      
        $this->load->view('AjoutProduit',$this->get_Categorieformater());
    }
    public function voirlistedemespost(){
        $this->load->view('header',$this->getformatposte());
        $this->load->view('Listedemesposte',$this->getformatposte());
        $this->load->view('footer');
    }
    public function modifpost(){
        $data=array();
        $data=$this->accuille->getinfoproduit($_GET['idphoto']);
        $tabe=array();
        $tabe['prix']=$data['prix'];
        $tabe['desc']=$data['description'];
        $tabe['ipd']=$data['idp'];
        $tabe['idCategorie']=$data['idCategorie'];
        $data=array();
        $data=$this->accuille->getlistephoto($_GET['idphoto']);
       
        if(count($data)>0){
            for($i=0;$i<count($data);$i++){
                $tabe['Nomimage'][$i]=$data[$i]['Nomimage'];
                $tabe['id'][$i]=$data[$i]['id'];
            }
        }
        if(isset($_SESSION['idadmin'])){
            $tabe['admin']=0;
        }
        $this->load->view('modifiposte',$tabe);
    }
    public function listeautreobject(){
        $data=array();
        $data=$this->accuille->getlisteautreObjet($_SESSION['user']);
        $tabe=array();
        for($i=0;$i<count($data);$i++){
            $tabe['idp'][$i]=$data[$i]['idp'];
            $tabe['id'][$i]=$data[$i]['id'];
            $tabe['Nomimage'][$i]=$data[$i]['Nomimage'];
            $tabe['idCategorie'][$i]=$data[$i]['idCategorie'];
            $tabe['idUser'][$i]=$data[$i]['idUser'];
            $tabe['prix'][$i]=$data[$i]['prix'];
            $tabe['description'][$i]=$data[$i]['description'];
        }
        $data=$this->accuille->get_categorie();
        for($i=0;$i<count($data);$i++){
            $tabe['idcategorie'][$i]=$data[$i]['idCategorie'];
            $tabe['Nom'][$i]=$data[$i]['Nom'];
        }
        if(isset($_SESSION['idadmin'])){
            $tabe['admin']=0;
        }
        $tabe['propositon']=0;
        $this->load->view('header',$tabe);
        $this->load->view('listeobjetpersonne',$tabe);
        $this->load->view('footer');
    }
    public function liste(){
        $data=array();
        $data=$this->accuille->getlisteautreObjet($_SESSION['user']);
        $tabe=array();
        for($i=0;$i<count($data);$i++){
            $tabe['idp'][$i]=$data[$i]['idp'];
            $tabe['id'][$i]=$data[$i]['id'];
            $tabe['Nomimage'][$i]=$data[$i]['Nomimage'];
            $tabe['idCategorie'][$i]=$data[$i]['idCategorie'];
            $tabe['idUser'][$i]=$data[$i]['idUser'];
            $tabe['prix'][$i]=$data[$i]['prix'];
            $tabe['description'][$i]=$data[$i]['description'];
        }
        $data=$this->accuille->get_categorie();
        for($i=0;$i<count($data);$i++){
            $tabe['idcategorie'][$i]=$data[$i]['idCategorie'];
            $tabe['Nom'][$i]=$data[$i]['Nom'];
        }
        $tabe['gestion']=0;
        if(isset($_SESSION['idadmin'])){
            $tabe['admin']=0;
        }
        $this->load->view('header',$tabe);
        $this->load->view('listeobjetpersonne',$tabe);
        $this->load->view('footer');
    }
    public function listeproposition(){
        $data1=array();
        $data1=$this->accuille->produitEchanger($_SESSION['user']);
        $data2=array();
        $data2=$this->accuille->produitTakalony($_SESSION['user']);
       
        for($i=0;$i<count($data2);$i++){
            $tabe['NomimageE'][$i]=$data1[$i]['Nomimage'];
            $tabe['idpE'][$i]=$data1[$i]['idproduit1'];
            $tabe['prixE'][$i]=$data1[$i]['prix'];
            $tabe['descE'][$i]=$data1[$i]['description'];

            $tabe['NomimageT'][$i]=$data2[$i]['Nomimage'];
            $tabe['idpT'][$i]=$data2[$i]['idproposition'];
            $tabe['prixT'][$i]=$data2[$i]['prix'];
            $tabe['descT'][$i]=$data2[$i]['description'];
            $tabe['Utilisateur2'][$i]=$data2[$i]['idUtilisateur2'];
        }
        $data=$this->accuille->get_categorie();
        for($i=0;$i<count($data);$i++){
            $tabe['idcategorie'][$i]=$data[$i]['idCategorie'];
            $tabe['Nom'][$i]=$data[$i]['Nom'];
        }
        if(isset($_SESSION['idadmin'])){
            $tabe['admin']=0;
        }
        $this->load->view('header',$tabe);
        $this->load->view('listeproposition',$tabe);
        $this->load->view('footer');
    }
    public function modifcategorie(){

        $data=$this->accuille->getproduitmodifcategorie($_GET['idproduit']);
        $_SESSION['produitmodifc']=$_GET['idproduit'];
        $tabe=array();
        $tabe['idCategorie']=$data['idCategorie'];
        $tabe['Nomimage']=$data['Nomimage'];
        $data=$this->accuille->get_categorie();
        for($i=0;$i<count($data);$i++){
            $tabe['idcategorie'][$i]=$data[$i]['idCategorie'];
            $tabe['Nom'][$i]=$data[$i]['Nom'];
        }
        if(isset($_SESSION['idadmin'])){
            $tabe['admin']=0;
        }
        $this->load->view('modifcategorie',$tabe);
    }
    public function modifcategorieValue(){
        $this->accuille->modifcategorie($_SESSION['produitmodifc'],$_POST['categorie']);
        redirect(base_url('accuille/liste/'));
    }
    public function listehistoriqueObjet(){
        $data =$this->accuille->getHistorique($_GET['idproduit']);
        $tabe=array();
        for($i=0;$i<count($data);$i++){
            $tabe['Nom'][$i]=$data[$i]['Nom'];
            $tabe['Prenom'][$i]=$data[$i]['Prenom'];
            $tabe['dated'][$i]=$data[$i]['dated'];
        }
        if(isset($_SESSION['idadmin'])){
            $tabe['admin']=0;
        }
        $this->load->view('header',$tabe);
        $this->load->view('listeproduit',$tabe);
        $this->load->view('footer');
    }
    public function faireRecherche(){
        $this->load->view('header',$this->get_Categorieformater());
        $this->load->view('searchProduit',$this->get_Categorieformater());
        $this->load->view('footer');
    }
}