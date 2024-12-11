<?php
include("connect.php");

$islandOfPersonalityQuery = "SELECT * FROM islandsofpersonality";
$islandOfPersonalityResults = executeQuery($islandOfPersonalityQuery);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Islands of Personality</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="icon" href="images/icon.png">
</head>
<style>
    @font-face {
        font-family: 'Carton';
        src: url('fontStyle/Carton_Six.ttf');
    }

    .custom-font {
        font-family: 'Carton';
    }
</style>

<body>

    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="images/icon.png" width="50" height="30" class="d-inline-block align-top mx-3">
            My Islands of Personality
        </a>
    </nav>

    <div class="w3-display-container" style="margin-bottom:100px">
        <img src="images/profile.jpg" style="width:100%">
        <div class="w3-display-bottomleft w3-container w3-amber w3-hover-orange w3-hide-small"
            style="bottom:10%;opacity:0.7;width:70%">
            <h2><b>Welcome to my Islands of Personality.<br></h2>
            <h3>Let's explore the magical destinations with me!</h3></b>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <?php if (mysqli_num_rows($islandOfPersonalityResults) > 0) {
                while ($islandOfPersonalityRow = mysqli_fetch_assoc($islandOfPersonalityResults)) { ?>

                    <div class="col-md-6 col-lg-6" style="margin-bottom:30px;">
                        <div class="card h-100 shadow"
                            style="border: 3px solid <?php echo $islandOfPersonalityRow['color']; ?>">
                            <div class="card-body">
                                <div>
                                    <img src="images/<?php echo $islandOfPersonalityRow['image']; ?>" class="img-fluid"
                                        style="width: 100%">
                                    <h1 class="card-title text-center custom-font"
                                        style="color: <?php echo $islandOfPersonalityRow['color']; ?>">
                                        <?php echo $islandOfPersonalityRow['name']; ?>
                                    </h1>
                                    <p class="card-text" style="font-size: 20px; text-align: justify;">
                                        <?php echo $islandOfPersonalityRow['shortDescription']; ?>
                                    </p>

                                    <form method="GET" action="view.php" class="d-flex justify-content-center">
                                        <input type="hidden"
                                            value="<?php echo $islandOfPersonalityRow['islandOfPersonalityID']; ?>"
                                            name="islandID">
                                        <input type="hidden" value="<?php echo $islandOfPersonalityRow['name']; ?>"
                                            name="islandName">
                                        <input type="hidden" value="<?php echo $islandOfPersonalityRow['color']; ?>"
                                            name="islandColor">
                                        <button type="submit" class="btn btn-primary">Visit Island</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                <?php }

            } ?>
        </div>
    </div>


    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1"></a>
                <span class="mb-3 mb-md-0" style="color:#bc9601">© 2024 <i>Created by Justine Raymundo; For Educational
                        Purposes Only</i></span>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>