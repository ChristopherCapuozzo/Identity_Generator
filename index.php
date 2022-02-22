<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>
<body>
    <p class="titre-menu">Générateur D'itentité</p>
    <p class="description">Faite F5 ou CTRL + R pour généré une nouvelle identité</p>
    <div class="box">
        <?php
            $data_JSON = file_get_contents("nameAll.json"); 
            $decode = json_decode($data_JSON, true);
            $gender_typy;
            $age = rand(5, 75);
            
            $random = shuffle($decode);
            $get_input = $decode[$random];

            $find = array_search($get_input["name"], array_column($decode, "name"));

            echo 'Prénom : ', $get_input["name"];
            echo '<br>';
            echo 'Genre : ', $find == 1 ? $get_input["genre"] : "No genre";;
            echo '<br>';
            echo 'Age : ', $age;
            echo '<br>';
            echo 'Majeur : ', $age > 17 ? "Oui" : "Non";
            ?>
    </div>
</body>
</html>