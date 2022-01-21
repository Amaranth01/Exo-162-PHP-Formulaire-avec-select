<?php
?>



    <form action="/index.php" method="post">
        <label for="id-option">Sélectionner votre civilité</label>
        <select name="select">
            <option name="Mr" id="id-option">Mr</option>
            <option name="Mme" id="id-optio">Mme</option>
        </select>

        <label for="id-firstname1">Votre prénom</label>
        <input type="text" name="firstname1" id="id-firstname1">

        <label for="id-name1">Votre nom</label>
        <input type="text" name="name1" id="id-name1">

        <label for="id-post-file">Fichier</label>
        <input type="file" name="file" id="id-post-file">

        <input type="submit" value="envoyer">
    </form>


<?php

if (isset($_POST['select'], $_POST['firstname1'], $_POST['name1'])){

    echo $_POST['select'] . " " . $_POST['firstname1'] . " " .$_POST['name1'];
}

//envoie fichier et vérification de type

if(isset($_FILES['file'])){
    $type = explode(".", $_FILES['file']['name']);
        if ($type === 'pdf'){

            echo "Le fichier est bien un PDF";

        }
        else {

            echo "Le fichier n'est pas un PDF";
        }

}

?>