<?php
    if(count($_POST) > 0){
        $id = intval(htmlspecialchars($_GET['id']));
        if($admin->articles->update($id,'',$_POST) === true){
            echo "<script>alert('Updated!')</script>";
        }else{
            echo 'Error updating';
        }
    }
?>

<div class="card card-pad">
    <form action="#" method="POST">
        <?php
        if(!isset($_GET['id'])){
            header("Location: ".$admin->articles->articlesPage);
        }
        print_r($admin->articles->getEdit($_GET['id']));
        ?>
    </form>
</div>
