<?php
require "./repository/SistemasRepositoryPDO.php";
require "./model/sistema.php";


class SistemasController{

  public function index(){
  $istemasRepository = new SistemasRepositoryPDO();
  return $sistemasRepository->listarTodos();

}
  public function save($request){
    
$sistemasRepository= new SistemasRepositoryPDO();
$sistema = (object) $request;

$upload= $this->savePoster($_FILES);

if(gettype ($upload)=="string"){
  $sistema->poster = $upload;
}

if($sistemas->salvar($sistema))
  $_SESSION["msg"] = "Sistema operacional cadastrado com sucesso";
else 
$_SESSION["msg"] ="Erro ao inserir sistema";
   
header("Location: / ");

}
private function savePoster($file){
  $posterDir = "imagem/posters/";
  $posterPath = $posterDir . basename($file["poster_file"]["name"]);
  $posterTmp = $file["poster_file"]["tmp_name"];
 if (move_uploaded_file($posterTmp, $posterPath)){
    return $posterPath;
} else {
    return false;
}
  }

  public function favorite(int $id){
    $sistemasRepository = new SistemasRepositoryPDO();
    $result=['success'=>$sistemasRepository->favoritar($id)];
    header('Content-type:application/json');
   echo json_encode($result);
  }
  public function delete(int $id){
    $sistemasRepository = new SistemasRepositoryPDO();
    $result=['success'=>$sistemasRepository->delete($id)];
       header('Content-type:application/json');
   echo json_encode($result);
  }


}
