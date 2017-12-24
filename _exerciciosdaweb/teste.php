<?php

function addNumbers($firstNumber, $secondNumber) {
    return $firstNumber + $secondNumber;
}

if (isset($_POST['n1']) && isset($_POST['n2'])) {
    $result = addNumbers(intval($_POST['n1']), intval($_POST['n2']));
}
?>
<html>
<body>

    <?php if (isset($result)) { ?>
        <h1> Result: <?php echo $result ?></h1>
    <?php } ?>
    <form action="" method="post">
    <p>1-st number: <input type="text" name="n1" /></p>
    <p>2-nd number: <input type="text" name="n2" /></p>
    <p><input type="submit"/></p>
    

</body>
</html>