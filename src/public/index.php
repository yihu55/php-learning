<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'header.html'; ?>
    <form action="index.php" method="get">
      Name: <input type="text" name="name">
      <input type="submit">
    </form>
    <?php
    /*echo '<h1>hello world</h1>';
    echo '<hr>';
    echo '<h2>my first php page</h2>';
    echo 'hello,', $_GET['name'];
    $grades = ['Jim' => 'A+', 'Pam' => 'B-', 'Oscar' => 'C+'];
    $grades['Jim'] = 'B+';
    echo $grades['Jim'];
    function sayHi($name)
    {
        echo "Hello $name";
    }
    sayHi('Mike');*/

    //define a constant
    define('STATUS_PAID', 'paid');

    echo defined('STATUS_PAID'); // paid
    echo __LINE__; // 33

    //variable variable

    $foo = 'bar';
    echo $foo; // bar
    //treat 'bar' as a varialble and define it as 'baz'
    $$foo = 'baz';
    echo $$foo;

//baz
?>
    <?php include 'footer.html'; ?>
</body>
</html>