<?php 
/**
 * Шаблон модалки для формирования заявки
 * 
 * @package ASB Video
 */
?>

<div class="application" id="application">
    <form class="application__modal" autocomplete="off" novalidate>
        <header class="application__header">
            <img src="<?php the_field('logo_mini', 'options'); ?>" class="application__logo" alt="Логотип компании АСБ">
            <div class="application__block">
                <p><?php echo esc_html__('Заявка', 'asbvideo') ?> <span class="text-green">&#8470;&nbsp;126325780</span></p>
                <p><?php echo esc_html__('на&nbsp;монтаж систем безопасности от', 'asbvideo') ?>&nbsp;12.08.2024г.</p>
            </div>
            <div class="application__icons">
                <div class="application__icon cross-icon"></div>
                <div class="application__icon download-icon"></div>
            </div>
        </header>
        <main class="application__content scroll-block">
            <div class="application__field application__field-list">
                <label class="application__field-name"><span><?php echo esc_html__('Выбор системы', 'asbvideo') ?></span></label>
                <div class="application__list">
                    <div class="application__form application__list-item">
                        <span><?php echo esc_html__('Системы видеонаблюдения', 'asbvideo') ?></span>
                    </div>
                    <div class="application__form application__list-item">
                        <span><?php echo esc_html__('Системы контроля доступа', 'asbvideo') ?></span>
                    </div>
                    <div class="application__form application__list-item">
                        <span><?php echo esc_html__('Охранно-пожарное оборудование', 'asbvideo') ?></span>
                    </div>
                    <div class="application__form application__list-item">
                        <span><?php echo esc_html__('Сигнализации &laquo;Sapsan&raquo;', 'asbvideo') ?></span>
                    </div>
                    <div class="application__form application__list-item">
                        <span><?php echo esc_html__('Источники питания', 'asbvideo') ?></span>
                    </div>
                    <div class="application__form application__list-item">
                        <span><?php echo esc_html__('Комплекты оборудования', 'asbvideo') ?></span>
                    </div>
                </div>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/checkmark_2.svg"
                    class="application__validation-icon validation-icon_none" alt="Галочка валидации">
            </div>
            <div class="application__field">
                <label for="phone" class="application__field-name"><span><?php echo esc_html__('Телефон', 'asbvideo') ?></span></label>
                <input type="tel" id="phone" class="application__form application__input"
                    placeholder="Контактный телефон">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/checkmark_2.svg"
                    class="application__validation-icon validation-icon_none" alt="Галочка валидации">
            </div>
            <div class="application__field">
                <label for="company" class="application__field-name"><span><?php echo esc_html__('Компания (ФИО)', 'asbvideo') ?></span></label>
                <input type="text" id="company" class="application__form application__input"
                    placeholder="Название компании/Объекта">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/checkmark_2.svg"
                    class="application__validation-icon validation-icon_none" alt="Галочка валидации">
            </div>
            <div class="application__field">
                <label for="human" class="application__field-name"><span><?php echo esc_html__('Контактное лицо', 'asbvideo') ?></span></label>
                <input type="text" id="human" class="application__form application__input"
                    placeholder="Контактное лицо">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/checkmark_2.svg"
                    class="application__validation-icon validation-icon_none" alt="Галочка валидации">
            </div>
            <div class="application__field">
                <label for="comment"
                    class="application__field-name application__field-textarea"><span><?php echo esc_html__('Комментарий', 'asbvideo') ?></span></label>
                <textarea name="text" id="comment" class="application__form application__textarea scroll-block"
                    placeholder="Ваш комментарий"></textarea>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/checkmark_2.svg" class="application__validation-icon icon_none"
                    alt="Галочка валидации">
            </div>
        </main>
        <footer class="application__footer">
            <aside class="application__footnotes">
                <div class="application__license">
                    <span class="application__license-title"><?php echo esc_html__('Лицензия:', 'asbvideo') ?></span>
                    <div class="application__license-number">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/document.svg" alt="Сертифицированный документ">
                        <span>МЧС России &#8470;&nbsp;77-Б/02699 от&nbsp;01.09.2010</span>
                    </div>
                </div>
                <div class="application__guarantee">
                    <div class="application__guarantee-text">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/guarantee.svg" alt="Знак гарантии">
                        <span><?php echo esc_html__('Гарантия на оборудование и выполненные работы:', 'asbvideo') ?></span>
                    </div>
                    <span class="application__guarantee-year"><?php echo esc_html__('1 год', 'asbvideo') ?></span>
                </div>
            </aside>
            <button class="btn-application application__btn" id="btn_open-info-application"><?php echo esc_html__('Отправить', 'asbvideo') ?></button>
        </footer>
    </form>
</div>