<?php include "head.php"; ?>
<?php
$sql = 'SELECT * FROM form';
$res = mysqli_query($conn, $sql);
$form = mysqli_fetch_all($res, MYSQLI_ASSOC);
?>
<?php if (empty($form)) : ?>
    <p>no form</p>
<?php endif; ?>
<div>
    <h1 style="font-family: 'Roboto Slab', serif;font-size: 2rem;text-align: center;">TRANSACTION DETAILS</h1>
</div>
<div>
    <table>
        <tr>
            <th>SENDER NAME</th>
            <th>RECEIVER NAME</th>
            <th>AMOUNT TRANSFERED</th>
        </tr>
        <?php foreach ($form as $f) : ?>
            <tr>
                <td><?php echo $f['sname']; ?></td>
                <td><?php echo $f['rname']; ?></td>
                <td><?php echo $f['amount']; ?></td>
            </tr>
        <?php endforeach; ?>

    </table>
</div>
<?php include "foot.php"; ?>