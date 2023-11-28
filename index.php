<?php
$games = [
    [
        'team_home' => 'Olimpia Milano',
        'team_away' => 'Cantù',
        'goal_home' => 55,
        'goal_away' => 60,
    ],
    [
        'team_home' => 'Globe Trotters',
        'team_away' => 'Los Angeles Lakers',
        'goal_home' => 3,
        'goal_away' => 45,
    ],
    [
        'team_home' => 'Chicago Bulls',
        'team_away' => 'Miami Heat',
        'goal_home' => 20,
        'goal_away' => 16,
    ],
    [
        'team_home' => 'Boston Celtics',
        'team_away' => 'Golden State Warriors',
        'goal_home' => 3,
        'goal_away' => 44,
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-black">
    <h1 class="text-center text-white">PHP SNACK</h1>
    <main class="container-fluid d-flex ">

        <!-- SNACK 1 -->
        <section id="snak-1" class="bg-primary w-100 p-2 ">
            <h2 class=" text-center">Partite di Basket</h2>
            <div class="mt-5">
                <?php
                for ($i = 0; $i < count($games); $i++) {
                    $game = $games[$i];
                    echo "<h4>" . $game['team_home'] . " - " . $game['team_away'] . " | " . $game['goal_home'] . " - " . $game['goal_away'] . "</h4>";
                }
                ?>
            </div>
        </section>

        <!-- SNACK 2 -->
        <section id="snak-2" class="bg-warning w-100  text-center p-2">
            <h2>Form</h2>
            <div class="mt-5">
                <?php
                $formVisible = true;

                if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {
                    $name = $_GET['name'];
                    $mail = $_GET['mail'];
                    $age = $_GET['age'];

                    $nameLength = strlen($name) > 3;
                    $mailValid = filter_var($mail, FILTER_VALIDATE_EMAIL);
                    $ageNumeric = is_numeric($age);

                    if ($nameLength && $mailValid && $ageNumeric) {
                        echo "Accesso riuscito";
                        $formVisible = false;
                    } else {
                        echo "Accesso negato";
                    }
                }

                if ($formVisible) {
                    ?>
                    <form action="index.php" method="get">
                        <label for="name" class="form-text">Name:</label>
                        <input type="text" name="name" required class="d-block m-auto form-control">

                        <label for="mail" class="form-text">Mail:</label>
                        <input type="text" name="mail" required class="d-block m-auto form-control">

                        <label for="age" class="form-text">Age:</label>
                        <input type="text" name="age" required class="d-block m-auto form-control">

                        <button type="submit" class="mt-3 btn btn-success">INVIA</button>
                    </form>
                <?php } ?>

            </div>
        </section>

        <!-- SNACK 3 -->
        <section id="snak-3" class="bg-danger w-100 text-center p-2">
            <h2>BONUS</h2>
            <div class="mt-5">
                <?php
                $paragrafo = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac odio id leo tincidunt porttitor. Integer vel justo nec nisl aliquet dignissim eu ut elit. Nullam hendrerit, metus nec luctus vestibulum, urna ipsum ullamcorper metus, id tincidunt elit lacus a neque. Suspendisse id vestibulum neque. Vivamus id tellus et risus tristique commodo. Morbi accumsan semper metus. Proin volutpat felis nec malesuada fermentum. Sed vitae mi in quam iaculis hendrerit. Ut suscipit elit vel sapien egestas venenatis. In hac habitasse platea dictumst.";
                $paragrafi = explode('.', $paragrafo);
                foreach ($paragrafi as $paragrafo) {
                    echo "<p>{$paragrafo}</p>";
                }
                ?>
            </div>
        </section>

    </main>
</body>

</html>