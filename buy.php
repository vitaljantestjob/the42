<?
  if (isset($_POST['id']) && isset($_POST['color'])) {
    exit (json_encode(['id'=>$_POST['id'], 'color'=>$_POST['color']]));
  } else exit (json_encode(['error'=>'id or color undefined']));
?>