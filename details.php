<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <?php
    // Our Data
    include("data.php");

    // Show Data
    $id = $_GET['id'];
    $head_title = $title[$id];
    ?>
    <title><?php echo $head_title ?></title>

    <style>
        footer {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }

        footer p {
            margin-bottom: .25rem;
        }
    </style>
</head>

<body>
    <?php
    include("header.php");
    ?>
    <main class="bg-light">
        <div class="jumbotron">
            <div class="container">
                <h1>Welcome to My Shop</h1>
                <p>Buy new cell phones at a cheap price!</p>
            </div>
        </div>
        <div class="container py-5">
            <?php
            // Our Data
            include("data.php");

            // Show Data
            $id = $_GET['id'];
            echo '
				<div class="card">
					<div class="card-body">
					  <h2 class="card-title">' . $title[$id] . '</h2>
					  <p class="card-text">' . $description[$id] . '</p>
					</div>
					<div class="card-footer">$' . $price[$id] . '</div>
				  </div>
				';
            ?>

        </div>
    </main>
    <?php
    include("footer.php");
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>