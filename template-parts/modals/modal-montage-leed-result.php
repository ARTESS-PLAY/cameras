<?php 
/**
 * Модалка, которая показывает результаты оправленной заявки
 * 
 * @package ASB Video
 */
?>

<div class="application" id="new-application">
    <section class="application__modal application__modal-info">
        <header class="application__header">
            <img src="<?php the_field('logo_mini', 'options'); ?>" class="application__logo" alt="Логотип компании АСБ">
            <div class="application__block">
                <p><?php echo esc_html__('Заявка', 'asbvideo') ?> <span class="text-green">&#8470;&nbsp;126325780</span></p>
                <p><?php echo esc_html__('на&nbsp;монтаж систем безопасности от&nbsp;12.08.2024г.', 'asbvideo') ?></p>
            </div>
            <div class="application__icons">
                <div class="application__icon cross-icon"></div>
                <div class="application__icon download-icon"></div>
            </div>
        </header>
        <main class="application__content application__info-content scroll-block">
            <div class="application__title"><span><?php echo esc_html__('Ваша заявка', 'asbvideo') ?></span></div>
            <div class="application__info">
                <div class="application__info-blocks">
                    <div class="application__info-block">
                        <div class="application__info-block-title">
                            <span>&#8470;&nbsp;136325780</span>
                            <span class="application__info-block-time">от 12:20 (GMT+3) 12.08.2024г. </span>
                        </div>
                        <div class="application__info-block-notes">
                            <span id="new-company"></span>
                            <span id="new-system"></span>
                            <span id="new-human"></span>
                            <span id="new-phone"></span>
                            <span id="new-comment"></span>
                        </div>
                    </div>
                    <div class="application__info-block application__info-block-texts">
                        <p class="application__info-block-text">Спасибо за&nbsp;обращение!
                            Наши менеджеры свяжутся с&nbsp;вами по&nbsp;указанному телефону в&nbsp;ближайшее время
                            для
                            уточнения деталей сформированной заявки.</p>
                        <p class="application__info-block-text">ООО &laquo;Автономные Системы Безопасности&raquo;
                            Технический директор, Брусенцов А.А.</p>
                    </div>
                </div>
                <div class="application__download">
                    <span><?php echo esc_html__('Вы&nbsp;можете скачать данную заявку, нажав на&nbsp;кнопку<', 'asbvideo') ?>/span>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/download.svg" alt="Кнопка скачивания">
                </div>
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
            <button class="btn-application application__btn" id="btn_close-info-application"><?php echo esc_html__('ОК', 'asbvideo') ?></button>
        </footer>
    </section>
</div>