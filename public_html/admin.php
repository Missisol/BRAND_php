<?php

require '../engine/core.php';

/**
 * Отображает форму управления продуктами
 */
function routeIndex()
{

  echo render('admin/adminproducts');
}

function routeAdminaddprod()
{
  $cats = getItemArray("select * from category");

  $name = htmlspecialchars($_POST['name']);
  $des = htmlspecialchars($_POST['description']);
  $price = htmlspecialchars($_POST['price']);
  $quantity = htmlspecialchars($_POST['quantity']);
  $img = htmlspecialchars($_POST['img']);
  $imgmin = htmlspecialchars($_POST['img_min']);
  $cat = htmlspecialchars($_POST['category']);
  $message = false;

  $sql = "insert into `product` (`name`, `description`, `price`, `quantity`, `category_id`, `img`, `img_min`) 
values ('{$name}', '{$des}', '{$price}', '{$quantity}', '{$cat}', '{$img}', '{$imgmin}')";

$result = false;

  if (isset($_POST) && !empty($_POST['name'])) {
    $result = execute($sql);
    unset($_POST);
    if ($result) {
      $message = 'Product save success';
    } else {
      $message = 'Product save error';
    }
  }

  echo render('admin/adminproductsAdd', [
    'cats' => $cats,
    'message' => $message,
    'result' => $result,
  ]);
}

function routeAdmindelprod()
{
  $cats = getItemArray("select * from category");

  $name = htmlspecialchars($_POST['prodname']);
  $id = (int)(htmlspecialchars($_POST['product_id']));
  $cat = htmlspecialchars($_POST['category']);
  $message = false;
  $result = false;

  $sql = "delete from `product` where `id` = '{$id}' and `name` = '{$name}' and `category_id` = '{$cat}'";

  if ($id != 0) {
    execute($sql);
    unset($_POST);
    $result = getItem("select * from `product` where `id` = '{$id}' and `name` = '{$name}'");
    if ($result == null) {
      $message = 'Product delete success';
    } else {
      $message = 'Product delete error';
    }
  }

  echo render('admin/adminproductsDel', [
    'cats' => $cats,
    'message' => $message,
    'result' => $result,
    'id' => $id,
    'cat' => $cat,
  ]);
}

route();

