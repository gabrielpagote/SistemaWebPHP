<?php

session_start();
require "./repository/SistemasRepositoryPDO.php";
require "./model/Sistema.php";
require "./util/SimpleImage.php";

class SistemasController{
    
    public function index(){
        $sistemasRepository = new SistemasRepositoryPDO();
        return $sistemasRepository->listarTodos();
    }

    public function save($request){

        $sistemasRepository = new SistemasRepositoryPDO();
        $sistema = (object) $request;

        $upload = $this->savePoster($_FILES);

        if(gettype($upload)=="string"){
            $sistema->poster = $upload;
        }
        
        if ($sistemasRepository->salvar($sistema)) 
                $_SESSION["msg"] = "Sistema cadastrado com sucesso";
        else 
                $_SESSION["msg"] = "Erro ao cadastrar sistema";
        
        header("Location: /");
        
    }

    private function savePoster($file){
        $posterDir = "imagens/posters/";
        $posterPath = $posterDir . basename($file["poster_file"]["name"]);
        $posterTmp = $file["poster_file"]["tmp_name"];

        $image = new SimpleImage();
        $image->load($posterTmp);
        $image->resize(200, 300);
        $image->save($posterPath);
        return $posterPath;

    }

    public function favorite(int $id){
        $sistemasRepository = new SistemasRepositoryPDO();
        $result = ['success' => $sistemasRepository->favoritar($id)];
        header('Content-type: application/json');
        echo json_encode($result);
    }
}
