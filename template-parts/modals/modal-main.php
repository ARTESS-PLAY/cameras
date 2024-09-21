<?php 
/**
 * Модалка на главной для калькулятора
 * 
 * @package ASB Video
 */
?>
   <div class="application" id="calculation-application">
        <section class="application__modal application__modal-calculation">
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
            <main class="application__content application__calculation-content scroll-block wide-scroll-block">
                <div class="application__table">
                    <span class="application__table-head application__table-tag">#</span>
                    <span class="application__table-head"><?php echo esc_html__('Наименование', 'asbvideo') ?></span>
                    <span class="application__table-head amount-col"><?php echo esc_html__('Кол-во', 'asbvideo') ?></span>
                    <span class="application__table-head"><?php echo esc_html__('шт.', 'asbvideo') ?></span>
                    <span class="application__table-head"><?php echo esc_html__('Цена', 'asbvideo') ?></span>
                    <span class="application__table-head"><?php echo esc_html__('Стоимость', 'asbvideo') ?></span>

                    <div></div>
                    <span class="application__table-title"><?php echo esc_html__('Оборудование', 'asbvideo') ?></span>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>

                    <span class="application__table-elem application__table-num">1</span>
                    <span class="application__table-elem application__table-item-name">TVI Камера видеонаблюдения
                        Hikvision HiWatch DS-T101</span>
                    <span class="application__table-elem amount-col">17</span>
                    <span class="application__table-elem application__table-item-amount">шт.</span>
                    <span class="application__table-elem">3290₽</span>
                    <span class="application__table-elem application__table-cost">9870₽</span>

                    <span class="application__table-elem application__table-num">2</span>
                    <span class="application__table-elem application__table-item-name">IP-видеокамера Hikvision
                        DS-2DE4220-AE</span>
                    <span class="application__table-elem amount-col">1</span>
                    <span class="application__table-elem application__table-item-amount">шт.</span>
                    <span class="application__table-elem">3290₽</span>
                    <span class="application__table-elem application__table-cost">39990₽</span>

                    <span class="application__table-elem application__table-num">3</span>
                    <span class="application__table-elem application__table-item-name">HD-ЕМШ Видеорегистратор Hikvision
                        DS-7324HQHI-K4</span>
                    <span class="application__table-elem amount-col">1</span>
                    <span class="application__table-elem application__table-item-amount">шт.</span>
                    <span class="application__table-elem">13390₽</span>
                    <span class="application__table-elem application__table-cost">13390₽</span>

                    <span class="application__table-elem application__table-num">4</span>
                    <span class="application__table-elem application__table-item-name">IP-видеокамера Hikvision
                        DS-2DE4220-AE</span>
                    <span class="application__table-elem amount-col">1</span>
                    <span class="application__table-elem application__table-item-amount">шт.</span>
                    <span class="application__table-elem">2880₽</span>
                    <span class="application__table-elem application__table-cost">2880₽</span>

                    <span class="application__table-elem application__table-num">5</span>
                    <span class="application__table-elem application__table-item-name">Аккумуляторная батарея GP 12-7S
                        12В</span>
                    <span class="application__table-elem amount-col">1</span>
                    <span class="application__table-elem application__table-item-amount">шт.</span>
                    <span class="application__table-elem">720₽</span>
                    <span class="application__table-elem application__table-cost">720₽</span>

                    <span class="application__table-elem application__table-num">6</span>
                    <span class="application__table-elem application__table-item-name">Жёсткий диск Western Digital
                        WD20PURX 2ТБ</span>
                    <span class="application__table-elem amount-col">1</span>
                    <span class="application__table-elem application__table-item-amount">шт.</span>
                    <span class="application__table-elem">5700₽</span>
                    <span class="application__table-elem application__table-cost">5700₽</span>

                    <div></div>
                    <span class="application__table-total">Всего за оборудование:</span>
                    <div></div>
                    <div></div>
                    <div></div>
                    <span class="application__table-total-cost">72550₽</span>

                    <div></div>
                    <span class="application__table-title">Монтажные материалы</span>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>

                    <span class="application__table-elem application__table-num">1</span>
                    <span class="application__table-elem application__table-item-name">Комбинированный кабель ParLan
                        U/UTP Cat5e 4х2х0,52 PVC</span>
                    <span class="application__table-elem amount-col">1</span>
                    <span class="application__table-elem application__table-item-amount">бухта.</span>
                    <span class="application__table-elem">4480₽</span>
                    <span class="application__table-elem application__table-cost">4480₽</span>

                    <span class="application__table-elem application__table-num">2</span>
                    <span class="application__table-elem application__table-item-name">Кабельный канал DIRECT ELECTRIC
                        ПВХ 25x16</span>
                    <span class="application__table-elem amount-col">40</span>
                    <span class="application__table-elem application__table-item-amount">м</span>
                    <span class="application__table-elem">56₽</span>
                    <span class="application__table-elem application__table-cost">2240₽</span>

                    <span class="application__table-elem application__table-num">3</span>
                    <span class="application__table-elem application__table-item-name">Расходный материал</span>
                    <span class="application__table-elem amount-col">1</span>
                    <span class="application__table-elem application__table-item-amount">компл.</span>
                    <span class="application__table-elem">2000₽</span>
                    <span class="application__table-elem application__table-cost">2000₽</span>

                    <div></div>
                    <span class="application__table-total">Всего за монтажные материалы:</span>
                    <div></div>
                    <div></div>
                    <div></div>
                    <span class="application__table-total-cost">8720₽</span>

                    <div></div>
                    <span class="application__table-title">Выполняемые виды работ</span>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>

                    <span class="application__table-elem application__table-num">1</span>
                    <span class="application__table-elem application__table-item-name">Работы по монтажу кабельных
                        коммуникаций</span>
                    <span class="application__table-elem amount-col">120</span>
                    <span class="application__table-elem application__table-item-amount">м</span>
                    <span class="application__table-elem">150₽</span>
                    <span class="application__table-elem application__table-cost">18000₽</span>

                    <span class="application__table-elem application__table-num">2</span>
                    <span class="application__table-elem application__table-item-name">Монтаж и подключение
                        оборудования</span>
                    <span class="application__table-elem amount-col">3</span>
                    <span class="application__table-elem application__table-item-amount">шт.</span>
                    <span class="application__table-elem">1000₽</span>
                    <span class="application__table-elem application__table-cost">3000₽</span>

                    <span class="application__table-elem application__table-num">3</span>
                    <span class="application__table-elem application__table-item-name">Инженерные и пусконакладочные
                        работы</span>
                    <span class="application__table-elem amount-col">1</span>
                    <span class="application__table-elem application__table-item-amount">компл.</span>
                    <span class="application__table-elem">5000₽</span>
                    <span class="application__table-elem application__table-cost">5000₽</span>

                    <div></div>
                    <span class="application__table-total"><?php echo esc_html__('Всего за работу:', 'asbvideo') ?></span>
                    <div></div>
                    <div></div>
                    <div></div>
                    <span class="application__table-total-cost">32000₽</span>
                </div>
            </main>

            <footer class="application__footer footer-amount">
                <div class="application__footer-amount-block">
                    <span class="application__footer-amount-title"><?php echo esc_html__('ИТОГО ПО СМЕТЕ:', 'asbvideo') ?></span>
                    <span class="application__footer-amount-price">113270₽</span>
                </div>
                <div class="application__footer-block">
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
                    <button class="btn-application application__btn application__btn_wide"
                        id="btn_close-info-application"><?php echo esc_html__('Сформировать заявку', 'asbvideo') ?></button>
                </div>
            </footer>
        </section>
    </div>