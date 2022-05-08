<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BT1635-PHP</title>

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
     $n = rand(1,100);
     $BookList= [];
     echo "N = $n<br>";
     for ($i=1; $i <= $n ; $i++) 
     {
         $BookList[] =[
             'title' => 'quyển sách '.$i,
             'authorname' => 'tác giả '.$i,
             'price' => rand(1,100),
             'nsx' => 'nhà xuất bản '.$i,
         ];
     }
    ?>

    <div class="container">
        <div class="card-header bg-primary text-white">
            Display data on table
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Authorname</th>
                        <th>Price</th>
                        <th>NSX</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $count = 0;
                        foreach ($BookList as $item) {
                            echo
                            "
                                <tr>
                                    <td>".(++$count)."</td>
                                    <td>".$item['title']."</td>
                                    <td>".$item['authorname'].''."</td>
                                    <td>".$item['price']."</td>
                                    <td>".$item['nsx']."</td>
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