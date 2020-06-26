<?php

drupal_add_js(drupal_get_path('module', 'schools') . '/school-list.js');

echo "<div class='schools-list'>";
if ($data->rowCount() > 0) {
  foreach ($data as $v) {
    echo "<div class='school' onclick=" . "'window.location.href = \"/schools/" . $v->sid . "\"'"  . ">";
    echo "<div class='school__name'>" . $v->name . "</div>";
    echo "<div class='school__addr_label'>Address</div>";
    echo "<div class='school__address'>" . $v->address . "</div>";
    echo "<div class='school__button_container'>
        <button class='school__edit_button' onclick='window.location.href=\"" . "/schools/" . $v->sid . "/edit\";event.cancelBubble=true;'>Edit</button>";
    echo "<button class='school__delete_button' onclick='window.location.href=\"" . "/schools/" . $v->sid . "/delete\";event.cancelBubble=true;'>Delete</button></div>";
    echo "</div>";
  }
} else {
  echo "No records found";
}

echo '</div>';
