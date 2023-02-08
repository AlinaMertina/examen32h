<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ajoutbd_model extends CI_Model{
   
   public function ajoutproduir($idc,$idu,$desc,$prix){
        $requete="insert into produit(idCategorie,idUser,prix,description) values(%d,%d,%d,'%s')";
        $requete=sprintf($requete,$idc,$idu,$prix,$desc);
        $query = $this->db->query($requete);
        $requete="select idp from produit order by idp desc limit 1";
        $query = $this->db->query($requete);
        $a=0;
        foreach($query->result_array() as $row){
            $a=$row['idp'];
        }
        return $a;
   }
   public function ajoutphotoproduit($idp ,$nomimage){
    $requete="insert into photoproduit(idp,Nomimage) values(%d,'%s')";
    $requete=sprintf($requete,$idp,$nomimage);
    $query = $this->db->query($requete);
   }
   public function upload_photo($idp ,$nomimage,$nomfile)
	{
		 $config['upload_path'] = './assets/image';
		 $config['allowed_types'] = 'gif|jpg|png|jpeg';
		 $config['max_size'] = 200000;
		 $config['max_width'] = 200000;
		 $config['max_height'] =200000;
		 $this->load->library('upload', $config);
		 $this->upload->initialize($config,TRUE);
		 if ( ! $this->upload->do_upload($nomfile))
		 {
			 echo "erreur".$this->upload->display_errors()." e";
		 }
		 else
		 {
			$this->ajoutphotoproduit($idp ,$nomimage);
		    }
	}
    public function ajoutproposition($iduser1,$iduser2,$idproduit1,$idproduit2){
        $requete="insert into Proposition(idproduit1,idUtilisateur1,idproduit2,idUtilisateur2,datep) values(%d,%s,%d,%d,now())";
        $requete=sprintf($requete,$idproduit1,$iduser1,$idproduit2,$iduser2);
        $query = $this->db->query($requete);
    }
    public function AccepterEchange($idp,$bol){
        $requete="insert into AccepterProduit(idproposition,Valu) values (%d,%s) ";
        $requete=sprintf($requete,$idp,$bol);
        $query = $this->db->query($requete);
    }
    
}
?>