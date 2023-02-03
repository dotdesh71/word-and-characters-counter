<?php
  if(isset($_POST['text'])){
    $text = $_POST['text'];
    $word_count = str_word_count($text);
    $char_count = strlen($text);
    $result = array('word_count' => $word_count, 'char_count' => $char_count);
    echo json_encode($result);
  }
?>
