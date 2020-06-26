<div class="school-name"><?php echo $school->name ?></div>

<div class="school-field">
  <div class="school-field__label">School ID</div>
  <div class="school-field__value"><?php echo $school->sid ?></div>
</div>
<div class="school-field">
  <div class="school-field__label">School Address</div>
  <div class="school-field__value"><?php echo $school->address ?></div>
</div>
<div class="school-field">
  <div class="school-field__label">Zip Code</div>
  <div class="school-field__value"><?php echo $school->zip_code ?></div>
</div>

<div class="buttons">
  <button class="edit-button" onclick="window.location.href='/schools/<?php echo $school->sid ?>/edit'">Edit</button>
  <button class="delete-button" onclick="window.location.href='/schools/<?php echo $school->sid ?>/delete'">Delete</button>
</div>
<?php
