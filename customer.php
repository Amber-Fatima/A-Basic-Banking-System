<?php include "head.php"; ?>
<?php
$sql = 'SELECT * FROM customer';
$res = mysqli_query($conn, $sql);
$form = mysqli_fetch_all($res, MYSQLI_ASSOC);
?>
<?php if (empty($form)) : ?>
  <p>no form</p>
<?php endif; ?>
<div>
  <h1 style="font-family: 'Roboto Slab', serif;font-size: 2rem;text-align: center;">CUSTOMER DETAILS</h1>
</div>
<div class="tables">
  <table>
    <tr>
      <th>ID</th>
      <th>NAME</th>
      <th>EMAIL</th>
      <th>BALANCE</th>
    </tr>
    <?php foreach ($form as $f) : ?>
      <tr>
        <td><?php echo $f['id']; ?></td>
        <td><?php echo $f['name']; ?></td>
        <td><?php echo $f['email']; ?></td>
        <td><?php echo $f['balance']; ?></td>
      </tr>
    <?php endforeach; ?>


  </table>
</div>
<div id="button" style="text-align:center">
  <button onclick="document.location='form.php'" type="submit" style="padding: 10px;
  margin: 10px;
  color:#fff;background-color: #333;">Send Money</button>
</div>
<?php include "foot.php"; ?>