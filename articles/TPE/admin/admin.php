<?php
require_once('includes/header.php');
?>

<div class="center">
    <h1>Administration</h1><br>
    <?php
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'add_article') {
            require_once("includes/database.php");
            if (isset($_POST['submit'])) {

                extract($_POST);

                // print_r($_FILES['fichier']);

                $content_dir = 'images/';

                $tmp_file = $_FILES['fichier']['tmp_name'];

                if (!is_uploaded_file($tmp_file)) {
                    exit('Vous avez oubliez votre image !');
                }

                $type_file = $_FILES['fichier']['type'];

                if (!strstr($type_file,'jpeg') && !strstr($type_file,'png')) {
                    exit("ce fichier n'est pas une image");
                }

                $name_file = time().'.jpg';
                
                if (!move_uploaded_file($tmp_file,$content_dir.$name_file)) {
                    exit('impossible de uploader le fichier');

                }

                $save_article = $db->prepare('INSERT INTO tpe(titre,contenu,images_name,price) VALUES(?,?,?,?)');

                $save_article->execute(array($titre,$contenu,$name_file,$price));
                echo "<h5 style='color:green;border: solid 1px black;text-align:center;background-color:white;padding:3px;'> Opération réussie</h5>";

            }
            ?><br>
            <h5>Titre</h5>
            <form method="POST" action="" enctype="multipart/form-data">
                <input type="text" name="titre" placeholder="Titre de l'article" required="" class="form form-control"><h5>Prix</h5>
                <input type="text" name="price" placeholder="Prix de l'article" required="" class="form form-control"><h5>Description</h5>
                <textarea name="contenu" placeholder="Description de l'article" class="form form-control"></textarea><br>
                <input type="file" name="fichier"><br><br>
                <input type="submit" name="submit" class="btn btn-light">
            </form>

            <?php
        }elseif ($_GET['action'] == 'edit_delete') {
            require_once("includes/database.php");
            $req_all_article = $db->prepare('SELECT *FROM tpe');
            $req_all_article->execute();

            while ($reponse= $req_all_article->fetch(PDO::FETCH_OBJ)) {
                ?>
                <table style="width: 100%">
                    <tr><td><?php echo $reponse->titre ?></td></tr>
                    <tr><td><a href="">modifier</td></tr>
                    <tr><td><a href="">supprimer</td></tr>
                </table>
                <?php 
            }
        }
    }

    ?>

</div>

<?php
require_once('includes/footer.php');
?>