<?php
require_once('DB.php');
$name = $_POST['name'];
$con = new DB();
$data = $con->searchDataItems($name);
?>

<?php if (count($data) > 0): ?>
<table>
  <thead>
    <tr>
      <th>
        <?php 
          echo implode('</th><th>', array_keys(current($data)));
          echo "<th>šalinimas</th>"
        ?>
      </th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($data as $row): array_map('htmlentities', $row); ?>
    <tr>
      <td>
        <?php 
          echo implode('</td><td>', $row); 
          echo "<td><a href=delete.php?id=".$row['id_preke'].">Šalinti</a></td>";
        ?>
      </td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<?php else: ?>
  <?php
    print_r("sąrašas tuščias");
  ?>
<?php endif; ?>
