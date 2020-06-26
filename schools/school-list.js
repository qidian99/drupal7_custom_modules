function onEditClick (event) {
  event.stopPropagation();
  alert(event.target.id);
}