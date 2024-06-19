<?php
const API_URL = "https://whenisthenextmcufilm.com/api";
$ch = curl_init(API_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
$data = json_decode($result, true);
curl_close($ch);

?>

<head>
    <meta charset="UTF-8">
    <title>La próxima película de Marvel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css" />
    <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
    <style>
        :root {
            color-scheme: dark;
        }
        section {
            display: flex;
            justify-content: center;
        }
        hgroup {
            display: flex;
            flex-direction: column;
            text-align: center;
        }
    </style>
</head>

<main>
    <!-- <pre>
        <?php var_dump($data) ?>
    </pre> -->
    <section>
        <img src="<?= $data["poster_url"] ?>" width="300" alt="" style="border-radius: 16px; margin-top: .5rem;">
    </section>
    <hgroup>
        <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> días</h3>
        <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
        <p>La siguiente es: <?= $data["following_production"]["title"]; ?></p>
    </hgroup>
</main>