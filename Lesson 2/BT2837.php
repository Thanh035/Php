<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BT2837 - PHP</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
</head>
<body>
<?php
    $n = rand(3,15);
    echo "N = $n";
    $bookList = [];

    for($i=1;$i<=$n;$i++)
    {
        $bookList[] = 
        [
            'title' => 'Title '.$i,
            'thumbnail' => 'Thumbnail '.$i,
            'price' => rand(1,100)
        ];
    }
?>

<div class="container">
    <div class="card-header text-white bg-success">
        Diplay bookList on table
    </div>
    <div class="card-body" style="border: solid black 1px;">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Thumbnail</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count = 0;
                foreach ($bookList as $item) {
                    echo
                    "
                        <tr>
                            <td>".(++$count)."</td>
                            <td>".($item['title'])."</td>
                            <td>".($item['thumbnail'])."</td>
                            <td>".($item['price'])."</td>
                        </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>