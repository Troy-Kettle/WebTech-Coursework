<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<body class="bg-dark text-light">
    <div class="mt-3 text-center">
        <p class="h2">Online Repository <br>
            <small class="text-muted">Faculty of Natural Sciences at Keele University</small>
        </p>
    </div>

    <div id="form" class="p-5">
        <form method="POST">
            <div class="form-group">
                <label id="Author">Author's:</label>
                <input class="form-control" name="Author" aria-describedby="emailHelp" placeholder="Author's">
            </div>
            <div class="form-group">
                <label id="Year">Publication Year:</label>
                <input class="form-control" name="Year" placeholder="2022...">
            </div>
            <div class="form-group">
                <label id="Journal">Journal:</label>
                <textarea type="email" class="form-control" name="Journal" aria-describedby="emailHelp" placeholder="Journal"></textarea>
            </div>
            <div class="form-group">
                <label id="DOI">DOI</label>
                <input class="form-control" name="DOI" placeholder="doi:10.1177/0269881118806297.">
            </div>
            <div class="form-group">
                <label id="School">School Name</label>
                <input class="form-control" name="School" placeholder="School of Natural Sciences">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <?php
    $data = array($_POST["Author"], $_POST["Year"], $_POST["Journal"], $_POST["DOI"], $_POST["School"]);

    $file_open = fopen("data.txt", "a") or die("unable to open file");

    fputcsv($file_open, $data);

    fclose($file_open);
    ?>
     <div class="text-center">
        <a href="Display.php">
            <button class="btn btn-primary">List of Publications</button>
        </a>
    </div>
</body>

</html>