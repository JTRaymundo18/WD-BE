<?php
include("connect.php");

if (isset($_GET['islandID']) && isset($_GET['islandName']) && isset($_GET['islandColor'])) {
    $islandOfPersonalityID = $_GET['islandID'];
    $islandName = $_GET['islandName'];
    $islandColor = $_GET['islandColor'];
} else {
    echo "No Island ID provided!";
}

$islandContentQuery = "SELECT * FROM islandcontents WHERE islandOfPersonalityID = $islandOfPersonalityID";
$islandContentResults = executeQuery($islandContentQuery);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/icon.png">
    <title><?php echo $islandName ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<style>
    @font-face {
        font-family: 'Snow';
        src: url('fontStyle/SNOW BLUE.ttf');
    }

    .custom-font {
        font-family: 'Snow';
        color: #dfdb02;
    }

    @font-face {
        font-family: 'Carton';
        src: url('fontStyle/Carton_Six.ttf');
    }

    .custom-font2 {
        font-family: 'Carton';
        color: #e8ef07;
        font-size: 27px;
    }
</style>

<body data-bs-theme="dark">

    <div class="display-3 text-center my-5 custom-font" style="color: <?php echo $islandColor?>">
        <?php echo $islandName ?>
    </div>

    <?php if (mysqli_num_rows($islandContentResults) > 0) {
        while ($islandContentRow = mysqli_fetch_assoc($islandContentResults)) {

            $switchSides = $islandContentRow['islandContentID'] % 2 !== 0;
            ?>
            <!-- Container for Island Content -->
            <div class="container" style="height: 500px; margin-top: 250px;">
                <div style="position: relative;">

                    <?php if ($switchSides) { ?>

                        <div
                            style="border-radius: 50%; width: 500px; height: 500px; background-color: #e1e800; position: absolute; left: -100px">
                            <div
                                style="border-radius: 50%; width: 300px; height: 300px; background-color: #ec2614; position: absolute; top: 250px; left: 250px">
                            </div>
                            <div
                                style="border-radius: 50%; width: 250px; height: 250px; background-color: #53d80b; position: absolute; top: -50px; left: 50px">
                            </div>
                            <div
                                style="border-radius: 50%; width: 300px; height: 300px; background-color: #1068e3; position: absolute; top: -75px; left: 250px">
                            </div>
                            <div
                                style="border-radius: 50%; width: 200px; height: 200px; background-color: #8227f2; position: absolute; top: 300px; left: 400px">
                            </div>
                        </div>

                    <?php } else { ?>

                        <div
                            style="border-radius: 50%; width: 500px; height: 500px; background-color: #e1e800; position: absolute; right: -75px;">

                            <div
                                style="border-radius: 50%; width: 300px; height: 300px; background-color: #ec2614; position: absolute; top: 250px; left: -50px;">
                            </div>
                            <div
                                style="border-radius: 50%; width: 200px; height: 200px; background-color: #53d80b; position: absolute; top: -25px; left: -50px;">
                            </div>
                            <div
                                style="border-radius: 50%; width: 300px; height: 300px; background-color: #1068e3; position: absolute; top: -50px; left: 100px">
                            </div>
                            <div
                                style="border-radius: 50%; width: 200px; height: 200px; background-color: #8227f2; position: absolute; top: -30px; left: 60px">
                            </div>
                        </div>

                    <?php } ?>

                    <!-- Card with Island Content -->
                    <div class="card text-bg-dark my-3 rounded-5" style="max-width: 100%; position: absolute; z-index: 10; border: 5px solid <?php echo $islandColor?>">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="images/<?php echo $islandContentRow['image'] ?>" class="img-fluid rounded-5"
                                    style="height: 400px; width: 100%">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body d-flex justify-content-center align-items-center" style="height: 100%">
                                    <p class="card-text custom-font2 text-center">
                                        <?php echo $islandContentRow['content']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php }
    } ?>

    <div class="my-5" style="height:200px">

    </div>

    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1"></a>
                <span class="mb-3 mb-md-0" style="color:#bc9601">© 2024 <i>Created by Justine Raymundo; For Educational
                        Purposes Only</i></span>
            </div>
            <div class="more-info">
                <p><b>Want to know more about me? Head back to the </b> <a href="index.php" style="color:#bc9601">Main
                        Menu</a>!</p>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>