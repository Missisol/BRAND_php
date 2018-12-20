<?php

require '../../engine/core.php';

/**
 * Выводим список категорий
 */
function routeIndex()
{
}

/**
 * Выводим список товаров в категории
 */
function routeView()
{
  $id = $_GET['id'];

  $cats = getItemArray(
    "select * from category"
  );

  $thisCat = getItem(
    "select `name` from category where id={$id}"
  );
  $thisCatName = $thisCat['name'];

  $prods = getItemArray(
    "select * from product where category_id={$id} limit 9"
  );

  echo render('shop/products', [
    'prods' => $prods,
    'cats' => $cats,
    'thisCatName' => $thisCatName,
  ]);
}

route();