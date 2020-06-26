<!-- <a class="ctools-use-modal" href="schools/30/delete">Modal Login</a> -->


<?php
if ($data->rowCount() > 0) {
  echo "<table><tr><th>Id</th><th>Name</th><th>Address</th><th>Zip Code</th><th>Actions</th></tr>";
  foreach ($data as $v) {
    echo "<tr>";
    echo "<td>" . "<a href='/schools/" . $v->sid . "'>" . $v->sid . "</td>";
    echo "<td>" . $v->name . "</td>";
    echo "<td>" . $v->address . "</td>";
    echo "<td>" . $v->zip_code . "</td>";
    echo "<td><button onclick='window.location.href=\"" . "/schools/" . $v->sid . "/edit\"'>Edit</button>";
    echo "<button onclick='window.location.href=\"" . "/schools/" . $v->sid . "/delete\"'>Delete</button></td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "No records found";
}
