<?php include "head.php"; ?>
<?php
@$sname = $_POST['sname'];
@$rname = $_POST['rname'];
@$amount = $_POST['amount'];
if ($sname != $rname) {
    $sql = "INSERT INTO `form`(`sname`,`rname`,`amount`)VALUES('$sname','$rname','$amount')";
    $increment = "UPDATE `sparks`.`customer` SET `balance` = `balance` + $amount WHERE `name` = '$rname'";
    $decrement = "UPDATE `sparks`.`customer` SET `balance` = `balance` - $amount WHERE `name` = '$sname'";

    $res_increment = mysqli_query($conn, $increment);
    $res_decrement = mysqli_query($conn, $decrement);
    $res = mysqli_query($conn, $sql);
}


$res2 = "DELETE FROM form WHERE amount=0";
$rs2 = mysqli_query($conn, $res2);
?>
<div id="form" style="text-align: center; ">
    <!-- <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="$_POST" style="background-color: #333; margin: 100px 450px; padding: 20px;
border-radius: 0.5rem;"> -->
    <form action="form.php" method="post" style="background-color: #333; margin: 100px 450px; padding: 20px;
border-radius: 0.5rem;">
        <div>
            <label for="sname">Sender Name</label>
            <input type="text" id="sname" name="sname" required>
        </div><br>
        <div>
            <label for="rname">Receiver Name</label>
            <input type="text" id="rname" name="rname" required>
        </div><br>
        <div>

            <label for="amount">Amount</label>
            <input type="number" id="amount" name="amount" required>
        </div>
        <br>
        <div style="text-align: center;">
            <input name="submit" type="submit" value="Send">
        </div>


</div>
<?php include "foot.php"; ?>