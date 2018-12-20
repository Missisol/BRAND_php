(function ($) {
  $(function () {

    /**
     * Удаляет заказ при работе из панели администратора
     */
    $('.container').on('click', '#delete-order', function () {
      const id = $(this).data('order_id');
      const $el1 = $('#orderItem' + id);
      const $el2 = $('.order' + id);
      const $el3 = $('#orderStatus' + id);

      $.ajax({
          url: '/shop/orders.php?action=deleteorder',
          type: 'POST',
          data:
            { id: id },
          success: function (response) {
            if (response.result === 'ok') {
              alert('Заказ удален');
              $el1.remove();
              $el2.remove();
              $el3.remove();
            } else {
              alert('Заказ исполнен, его нельзя удалить');
            }
          },
          error: function () {
            alert('Не удалось удалить заказ');
          }
        });
      });

    /**
     * Изменяет статус заказа при работе из панели администратора
     */
    $('.container').on('click', '#appruve-order', function () {
      const id = $(this).data('order_id');
      const $stat = $('#orderStatus' + id);

      $.ajax({
          url: '/shop/orders.php?action=appruveorder',
          type: 'POST',
          data:
            { id: id },
          success: function (response) {
            if (response.result === 'ok') {
              alert('Статус заказа изменен');
              $stat.text('Status ' + response.status);
            } else {
              alert('Статус заказа был изменен ранее');
            }
          },
          error: function () {
            alert('Не удалось изменить статус заказа');
          }
        });
      });

  })
})(jQuery);




