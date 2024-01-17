
<?php
/*
require_once "classes/databaseManager.php";

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

try {
    $dbobj = new DatabaseManager();
    var_dump($dbobj);
    $pdo = $dbobj->connect();

    // $pdo for database operations


} catch (Exception $e) {
    echo "Error creating DatabaseManager instance: "  . $e->getMessage();
}
*/
?>




<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goodcard - track your collection of Pokémon cards</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- js file-->
    <script src="./js/script.js"></script>
</head>
<body>

<h1 class="bg-dark text-center text-light py-2">Goodcard - track your collection of Pokémon cards</h1>

<div class="container">


    <!-- Modal -->
    <?php
    include "form.php";
    ?>
    <?php
    include "profile.php";
    ?>

    <!--input search and button section-->
<div class="row mb-3">
    <div class="col-10">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-dark">
                    <i class="fa fa-search text-light" aria-hidden="true"></i>
                </span>
            </div>
            <input type="text" class="form-control" placeholder="Search...">
        </div>
    </div>
    <div class="col-2">
        <button class="btn btn-dark" type="button" data-toggle="modal" data-target="#newmodal">
            Add New
        </button>
    </div>
</div>


    <!--table-->
    <?php
    require_once "table.php";
    ?>

    <!--pagination-->
    <nav aria-label="Page navigation example" id="pagination">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>

        </ul>
    </nav>

</div>



<ul>

   <?php foreach ($cards as $card) : ?>
        <li><?= $card['name'] ?></li>
    <?php endforeach; ?>

</ul>

</body>
</html>