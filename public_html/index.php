<?php

/**
 * начальная страница сайта
 */

// поключаем конфигурации приложения
require '../engine/core.php';

// вывод шаблона

function routeIndex()
{
  $prods = getItemArray(
    "select * from product where id >= 8 limit 8"
  );

  echo render('site/home', [
    'prods' => $prods,
  ]);
}

/**
 * Выводит все продукты на главной странице
 */
function routeAllproducts()
{
  $prods = getItemArray(
    "select * from product"
  );

  echo render('site/home', [
    'prods' => $prods,
  ]);
}

route();