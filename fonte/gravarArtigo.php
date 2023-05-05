<?php
$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$artigo = $_POST["artigo"];
$foto = $_FILES["foto"]; //array 


                                    
$ext = explode(".",$foto["name"]); 
$ext = array_reverse($ext); 
$ext = $ext[0];


if ($ext != "jpg" && $ext != "JPG" && $ext != "png" && $ext != "gif" && $ext != "jpeg" && $ext != "jfif") {
    echo" Arquivo inválido";
} elseif($foto["size"] > 1024 * 800) {
    echo" Tamanho excedido";
}else{
    include_once'./conexao.php';
    $nomefoto = date("YmdHis").rand(0000,9999).".".$ext;    
    $sql = "insert into artigo values(null,'".$titulo."','".$autor."','".$artigo."','".$nomefoto."')";
    if (mysqli_query($con,$sql)) {
        move_uploaded_file($foto["tmp_name"],"./upload/".$nomefoto);
        $msg = base64_encode("gravado o artigo com sucesso");
        header("location:../cadastrarArtigo.php?msg=".$msg);
              
    } else {
        $msg = base64_encode("Erro ao gravar o artigo");
        header("location:../cadastrarArtigo.php?msg=".$msg);
    }
    
}
?>