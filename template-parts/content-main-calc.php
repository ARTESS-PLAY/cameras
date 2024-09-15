<div class="info__calculation">
	<div class="info__input-area">
		<input class="info__input" id="calcInput1"  />
		<span class="info__input-name"><?php echo esc_html__('количество помещений', 'asbvideo') ?></span>
		<div class="info__calculator info__calculator-closed" id="calculator1">
			<div class="info__calculator-btn-1 info__calculator-btn-number">1</div>
			<div class="info__calculator-btn-2 info__calculator-btn-number">2</div>
			<div class="info__calculator-btn-3 info__calculator-btn-number">3</div>
			<div class="info__calculator-btn-4 info__calculator-btn-number">4</div>
			<div class="info__calculator-btn-5 info__calculator-btn-number">5</div>
			<div class="info__calculator-btn-6 info__calculator-btn-number">6</div>
			<div class="info__calculator-btn-7 info__calculator-btn-number">7</div>
			<div class="info__calculator-btn-8 info__calculator-btn-number">8</div>
			<div class="info__calculator-btn-9 info__calculator-btn-number">9</div>
			<div class="info__calculator-btn-delete"><img src="<?php bloginfo('template_url'); ?>/assets/svg/calc_delete.svg" alt="Удалить цифру">
			</div>
			<div class="info__calculator-btn-0 info__calculator-btn-number">0</div>
			<div class="info__calculator-btn-enter"><img src="<?php bloginfo('template_url'); ?>/assets/svg/calc_enter.svg" alt="Ввод значения">
			</div>
		</div>
	</div>
	<div class="info__input-area">
		<input class="info__input" id="calcInput2" />
		<span class="info__input-name"><?php echo esc_html__('квадратных метров', 'asbvideo') ?></span>
		<div class="info__calculator info__calculator-closed" id="calculator2">
			<div class="info__calculator-btn-1 info__calculator-btn-number">1</div>
			<div class="info__calculator-btn-2 info__calculator-btn-number">2</div>
			<div class="info__calculator-btn-3 info__calculator-btn-number">3</div>
			<div class="info__calculator-btn-4 info__calculator-btn-number">4</div>
			<div class="info__calculator-btn-5 info__calculator-btn-number">5</div>
			<div class="info__calculator-btn-6 info__calculator-btn-number">6</div>
			<div class="info__calculator-btn-7 info__calculator-btn-number">7</div>
			<div class="info__calculator-btn-8 info__calculator-btn-number">8</div>
			<div class="info__calculator-btn-9 info__calculator-btn-number">9</div>
			<div class="info__calculator-btn-delete"><img src="<?php bloginfo('template_url'); ?>/assets/svg/calc_delete.svg" alt="Удалить цифру">
			</div>
			<div class="info__calculator-btn-0 info__calculator-btn-number">0</div>
			<div class="info__calculator-btn-enter"><img src="<?php bloginfo('template_url'); ?>/assets/svg/calc_enter.svg" alt="Ввод значения">
			</div>
		</div>
	</div>
	<div class="info__input-area">
		<label class="info__input-checkbox">
			<input class="info__checkbox-hidden" type="checkbox">
			<div class="info__checkbox">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="none"
					viewBox="0 0 12 9.75" class="info__checkbox-icon">
					<path stroke="#54B731" stroke-linecap="round" stroke-width="2.25"
						d="m1.5 2.654 3.53 5.032 5.47 -6" />
				</svg>
			</div>
			<span class="info__input-name"><?php echo esc_html__('настройка сети', 'asbvideo') ?></span>
		</label>
	</div>
	<button class="info__btn"><?php echo esc_html__('Рассчитать стоимость', 'asbvideo') ?></button>
</div>