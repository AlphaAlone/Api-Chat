<?php 
class Emotes extends SQLServer{
    public $strIdEmotes;
    public $strDescripcion;
    public $strImagen;
    public function SelectEmotes(){
      $sql = "SELECT * FROM dbo.Emotes";
      $request = $this->select_all($sql);
      return $request;
    }
     public function SelectEmotes(string $strIdEmotes){
        $this->$strIdEmotes = $strIdEmotes;
        $sql = "SELECT * FROM dbo.Emotes WHERE Id ='".$this->$strIdEmotes."'";
        $request = $this->select($sql);
        return $request;
    }
}