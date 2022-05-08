<?php
$a = $b = $cal = $result = "";

if(!empty($_GET)) {
    $a = $_GET['a'];
    $b = $_GET['b'];
    $cal = $_GET['cal'];

    switch ($cal) {
        case '+':
            $result = $a + $b;
            break;
        case '-':
            $result = $a - $b;
            break;
        case '*':
            $result = $a * $b;
            break;
        case '/':
            $result = $a / $b;
            break;
        case '%':
            $result = $a % $b;
            break;
    }

    $result = "$a $cal $b = $result";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <title>Calculator Online</title>
    <style>
        table {
            margin: auto;
            margin-top: 50px;
            background: #BBBBBB;
        }

        .pheptinh {
            background: orange;
        }

        #c {
            width: 200px;
            height: 80px;
        }

        .btn {
            width: 100px;
            height: 80px;
        }

        .calcu {
            width: 400px;
            height: 60px;
        }
    </style>
</head>

<body>
    <form method="get" name="MyForm" style="display: none;">
        <input type="text" name="a" id="a" class="a" placeholder="Enter a" style="display: ;" value="<?=$a?>">
        <input type="text" name="b" id="b" class="b" placeholder="Enter b" style="display: ;" value="<?=$b?>">
        <input type="text" name="cal" id="cal" class="cal" placeholder="Cal" style="display: ;" value="<?=$cal?>">
        <button>Submit</button>
        <?=$result?>
    </form>

    <table>
        <tr>
            <td colspan="4"><input class="calcu" id="calcu" type="text" value="<?=$result?>" readonly="true"></td>
        </tr>
        <tr>
            <td><input type="button" class="btn" value="AC"></td>
            <td><input type="button" class="btn" value="+/-"></td>
            <td><input type="button" class="btn" value="%"></td>
            <td><input type="button" class="btn pheptinh" value="/"></td>
        </tr>
        <tr>
            <td><input type="button" class="btn" value="7"></td>
            <td><input type="button" class="btn" value="8"></td>
            <td><input type="button" class="btn" value="9"></td>
            <td><input type="button" class="btn pheptinh" value="*"></td>
        </tr>
        <tr>
            <td><input type="button" class="btn" value="4"></td>
            <td><input type="button" class="btn" value="5"></td>
            <td><input type="button" class="btn" value="6"></td>
            <td><input type="button" class="btn pheptinh" value="-"></td>
        </tr>
        <tr>
            <td><input type="button" class="btn" value="1"></td>
            <td><input type="button" class="btn" value="2"></td>
            <td><input type="button" class="btn" value="3"></td>
            <td><input type="button" class="btn pheptinh" value="+"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="button" class="btn" id="c" value="0"></td>
            <td><input type="button" class="btn" value="."></td>
            <td><input type="submit" class="btn pheptinh" value="="></td>
        </tr>
    </table>

<script type="text/javascript">
    var a = ''
    var b = ''
    var cal = ''

    $(function() {
        //Trang web tai xong -> hien thi giao dien xong -> goi vao day xu ly logic js
        $('input').click(function() {
            key = $(this).val()
            // console.log(key)
            switch(key) {
                case '0':
                case '1':
                case '2':
                case '3':
                case '4':
                case '5':
                case '6':
                case '7':
                case '8':
                case '9':
                case '.':
                    if(cal == '') {
                        a += key
                    } else {
                        b += key
                    }
                break;
                case '+':
                case '-':
                case '*':
                case '/':
                case '%':
                    cal = key
                break;
                case '=':
                    $('[name=MyForm]').submit()
                break;
                case 'AC':
                    a = ''
                    b = ''
                    cal = ''
                break;
            }

            $('[name=a]').val(a)
            $('[name=b]').val(b)
            $('[name=cal]').val(cal)

            $('#calcu').val(`${a} ${cal} ${b}`)
        })
    })
</script>
</body>
</html>