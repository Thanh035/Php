<!DOCTYPE html>
<html lang="en" lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin sinh viên</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
</head>
<body>
    
    <?php
    $Fullname = 'Phùng Quang Thanh';
    $Age = 19;
    $Address = "Hà Nội";
    $Email = "Phungquangthanh035@gmail.com";
    $Phone = "0364504982";

    echo 
    "
        <table>
            <thead>
                <th>Tên</th>
                <th>Tuổi</th>
                <th>Địa Chỉ</th>
                <th>Email</th>
                <th>SĐT</th>
            </thead>
            <tbody>
                <td>$Fullname</td>
                <td>$Age</td>
                <td>$Address</td>
                <td>
                    <a href=\"mailto:$Email\" >$Email</a>
                </td>
                <td>
                    <a href=\"tel:$Phone\" >$Phone</a>
                </td>
            </tbody>
        </table>
    "
    ?>

</body>
</html>