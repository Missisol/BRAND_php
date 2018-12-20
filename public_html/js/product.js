(function ($) {
  $(function () {

    /**
     *  Добавляет товар в корзину на странице одного продукта
     */
    $('#add-product-cart').on('click', function () {
      const id = $(this).data('id');
      const $el = $(this);

      $.post(
        '/shop/cart.php?action=additem',
        {id: id, quantity: 1},
        function (response) {
          if (response.result !== 'ERROR') {
            $el.empty().text('Product added to cart').attr('disabled', 'disabled');
          } else {
            alert('Не удалось добавить товар в корзину');
          }
        }
      );
    });

    /**
     * Добавляет единицу товара в корзину
     */
    $('.add-product').on('click', function () {
      const id = $(this).data('id');
      const $p = $('#quantity' + id);

      $.post(
        '/shop/cart.php?action=additem',
        {id: id, quantity: 1},

        function (response) {
          if (response.result !== "ERROR") {
            $p.text('quantity: ' + response.result);
          } else {
            alert('Не удалось добавить товар в корзину');
          }
        }
      );
    });

    /**
     * Удаляет единицу товара из корзины
     */
    $('.delete-oneproduct').on('click', function () {
      const id = $(this).data('id');
      const $p = $('#quantity' + id);
      const $li = $('#buttonWrap' + id);
      const $ul = $('#orderWrap');
      const $proceed = $('#proceedToCheckout');

      $.post(
        '/shop/cart.php?action=deleteoneitem',
        {id: id, quantity: 1},
        function (response) {
          if (response.result !== 'ERROR') {
            if (response.result > 0) {
              $p.text('quantity: ' + response.result);
            } else if (response.arrempty === 0) {
              $proceed.remove();
              $ul.remove();
              const $text = $('<div />').addClass('my-5').text('Your cart is empty');
              $('#orderContainer').append($text);
            } else {
              $li.remove();
            }
          } else {
            alert('Не удалось удалить товар из корзины');
          }
        }
      );
    });

    /**
     * Удаляет весь товар из корзины
     */
    $('.delete-product').on('click', function () {
      const id = $(this).data('id');
      const $li = $('#buttonWrap' + id);
      const $ul = $('#orderWrap');
      const $proceed = $('#proceedToCheckout');

      $.post(
        '/shop/cart.php?action=deleteitem',
        {id: id, quantity: 1},
        function (response) {
          if (response.result === "OK") {
            if (response.arrempty === 0) {
              $proceed.remove();
              $ul.remove();
              const $text = $('<div />').addClass('my-5').text('Your cart is empty');
              $('#orderContainer').append($text);
            } else {
              $li.remove();
            }
          } else {
            alert('Не удалось удалить товар из корзины');
          }
        }
      );
    });

  })
})(jQuery);

