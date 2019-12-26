<?php

class UtilsModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
    }
    public function upload($path)
    {

        $dossier = 'assets/img/' . $path . '/';
        $fichier = basename($_FILES['avatar']['name']);
        $taille_maxi = 100000000;
        $taille = filesize($_FILES['avatar']['tmp_name']);
        $extensions = array('.png', '.gif', '.jpg', '.jpeg', '.PNG', '.GIF', '.JPG', '.JPEG');
        $extension = strrchr($_FILES['avatar']['name'], '.'); //Début des vérifications de sécurité... 
        if (!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau 
        {
            throw new Exception("Vous devez uploader un fichier de type png, gif, jpg, jpeg");
        }
        if ($taille > $taille_maxi) {
            throw new Exception("Le fichier est trop gros");
        } else {
            $fichier = strtr($fichier, 'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
            $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
            if (move_uploaded_file($_FILES['avatar']['tmp_name'], './' . $dossier . $fichier)) //Si      
            {
                return  $dossier . $fichier;
            } else {
                throw new Exception("Echec de l'Upload");
            }
        }
    }
}
