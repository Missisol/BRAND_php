(function ($) {
  $(function () {

    /**
     * Удаляет сообщение о сохранении/ошибке сохранения в БД
     * при клике на любой инпут формы управления товарами
     */
    $('#goodsAdd').on('click', 'input', function () {
      $('#messageGoodsAdd').empty();
    });

    /**
     * Удаляет сообщение о сохранении/ошибке сохранения в БД
     * при клике на любой инпут формы управления товарами
     */
    $('#goodsDel').on('click', 'input', function () {
      $('#messageGoodsDel').empty();
    });

  })
})(jQuery);