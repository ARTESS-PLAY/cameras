jQuery(document).ready(function ($) {
    const $body = $('.body');
    const $calculationApplication = $('#calculation-application');
    const $calculationBtns = $('.btn_open-calculation-application');

    $calculationBtns.on('click', function () {
        if ($(this).hasClass('loading')) return;

        const $calc1 = $('#calcInput1');
        const $calc2 = $('#calcInput2');
        const $need_setting = $('#need_setting');

        const rooms = $calc1.val();
        const meters = $calc2.val();
        const need_setting = $need_setting.is(':checked');

        let valid = true;

        if (rooms == '--') {
            valid = false;
            $calc1.addClass('info__input--error');
        }

        if (meters == '---') {
            valid = false;
            $calc2.addClass('info__input--error');
        }

        if (!valid) return;

        $.ajax({
            method: 'POST',
            url: ajaxUrl,
            data: {
                action: 'calc_modal',
                rooms,
                meters,
                need_setting,
            },

            beforeSend: function () {
                $calculationBtns.text('Расчитываю...');
                $calculationBtns.addClass('loading');
            },

            success: function (res) {
                const data = JSON.parse(res);
                console.log(data);
                if (!data.success) return;

                $('#calculation-application').html(data.modal);

                toggleModal();
                $calculationBtns.removeClass('loading');
            },
            error: function (res) {
                const data = JSON.parse(res);
            },
        });
    });

    const resetText = () => {
        $calculationBtns.text('Рассчитать стоимость');
    };

    const toggleModal = () => {
        $calculationApplication.fadeToggle();
        $body.toggleClass('no-scroll');
        resetText();
    };

    $calculationApplication.on('click', '#btn_close-info-application, .cross-icon', function () {
        toggleModal();
    });

    $calculationApplication.on('click', function (e) {
        const $el = $calculationApplication.find('.application__modal-calculation');
        if (!$el.is(e.target) && $el.has(e.target).length === 0) {
            toggleModal();
        }
    });
});
