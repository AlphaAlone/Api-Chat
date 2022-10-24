<?php 
class Chats extends SQLServer{
    public $strIdChats;
    public $strUsuario;
    public $strMensaje;
    public $strUsuarioEnviado;
    public $strFecha;
    public $strIdEmotes;
    public function SelectChats(){
      $sql = "SELECT * FROM dbo.Chats";
      $request = $this->select_all($sql);
      return $request;
    }
     public function SelectChats(string $strIdChats){
        $this->$strIdChats = $strIdChats;
        $sql = "SELECT * FROM dbo.Chats WHERE Id ='".$this->$strIdChats."'";
        $request = $this->select($sql);
        return $request;
    }
}