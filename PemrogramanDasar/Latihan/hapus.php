<?php
    session_start();
    
    if(!isset($_SESSION["login"])) {
        header("Location: login.php");
        exit;
    }
    
    require 'Function.php';

    $id = $_GET["id"];

    if(delete($id) != "C00000") {
        echo "
                <script>
                    alert('Data berhasil dihapus');
                    document.location.href= 'index.php';
                </script>
            ";
    } else {
        echo "
            <script>
                alert('Data gagal dihapus');
            </script>
        ";
    
    }
?>