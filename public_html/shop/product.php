<?php

require '../../engine/core.php';

/**
 * Выводим информацию о товаре для страницы одного товара
 */
function routeIndex()
{
  $id = $_GET['id'];

  $item = getItem(
    "select * from product where id={$id}"
  );

  if (!isset(($_SESSION)['history'])) {
    $_SESSION['history'] = [];
    $_SESSION['history'][] = $id;
  } else {
    $key = array_search($id, $_SESSION['history']);
    if ($key !== false) {
      unset($_SESSION['history'][$key]);
      $_SESSION['history'][] = $id;
    } else {
      $_SESSION['history'][] = $id;
    }
  }

  $prod = null;
  $prods = [];
  foreach ($_SESSION['history'] as $id) {
    $prod = getItem(
      "select * from product where id={$id}"
    );
    array_unshift($prods, $prod);
  }

  echo render('shop/details', [
    'item' => $item,
    'prods' => $prods,
  ]);
}

route();