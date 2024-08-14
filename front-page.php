<?php

get_header();

if (is_front_page() && is_home()) {
	require get_template_directory() . '/home.php';
} elseif (is_front_page() && ! is_home()) {
?>
	<main class="main">
		<section class="hero">
			<div class="hero__inner container">
				<div class="content">
					<?php the_field('hero_title'); ?>
					<?php the_field('hero_text'); ?>
					<img class="hero__image visible-mobile" src="<?php the_field('hero_image'); ?>" alt="hero">
					<ul class="section__list">
						<li>Тут можна легко розрахувати податок</li>
						<li>Тут можна легко розрахувати податок</li>
						<li>Знати ставку податку</li>
					</ul>
				</div>
				<img class="hero__image hidden-mobile" src="<?php the_field('hero_image'); ?>" alt="hero">
			</div>
		</section>
		<section class="calculator section--bg">
			<div class="container">
				<h2 class="visible-mobile">Калькулятор податку на доходи фізичних осіб</h2>
				<p class="section__text visible-mobile">Тут можна легко розрахувати податок на доходи фізичних осіб.
					Залежно від вашої
					роботи та
					сімейного становища ви будете знати ставку податку на доходи фізичних осіб, яка буде застосована
					до вас.</p>
				<div class="calculator__inner">
					<form action="" class="calculator__form">
						<label for="brutto">
							Річна зарплата брутто
							<input type="number" id="brutto" name="brutto" placeholder="1000">
						</label>
						<label for="age">
							Вік
							<input type="number" id="age" name="age" placeholder="25">
						</label>
						<label for="category">
							<select name="category" id="category">
								<option value="Професійна категорія" selected disabled>Професійна категорія</option>
								<option value="Адміністративні службовці">Адміністративні службовці</option>
								<option value="Адміністративні службовці">Адміністративні службовці</option>
								<option value="Адміністративні службовці">Адміністративні службовці</option>
								<option value="Адміністративні службовці">Адміністративні службовці</option>
								<option value="Адміністративні службовці">Адміністративні службовці</option>
								<option value="Адміністративні службовці">Адміністративні службовці</option>
								<option value="Адміністративні службовці">Адміністративні службовці</option>
								<option value="Адміністративні службовці">Адміністративні службовці</option>
								<option value="Адміністративні службовці">Адміністративні службовці</option>
								<option value="Адміністративні службовці">Адміністративні службовці</option>
								<option value="Адміністративні службовці">Адміністративні службовці</option>
								<option value="Адміністративні службовці">Адміністративні службовці</option>
								<option value="Адміністративні службовці">Адміністративні службовці</option>
							</select>
						</label>
						<label class="input__row custom-checkbox" for="geographical">
							Географічна мобільність
							<input type="checkbox" name="geographical" id="geographical" checked>
							<span class="checkmark"></span>
						</label>
						<label for="disability">
							Чи маєте ви будь-який тип інвалідності?
							<select name="disability" id="disability">
								<option value="Автономне співтовариство" selected disabled>Автономне співтовариство
								</option>
								<option value="Адміністративні службовці">Адміністративні службовці</option>
								<option value="Адміністративні службовці">Адміністративні службовці</option>
								<option value="Адміністративні службовці">Адміністративні службовці</option>
								<option value="Адміністративні службовці">Адміністративні службовці</option>
							</select>
						</label>
						<label class="input__row custom-checkbox" for="demographic">
							Географічна мобільність
							<input type="checkbox" name="demographic" id="demographic">
							<span class="checkmark"></span>
						</label>
						<label class="input__row custom-checkbox" for="people">
							Люди під вашою опікою
							<input type="checkbox" name="people" id="people" checked>
							<span class="checkmark"></span>
							<label class="input__row full" for="peopleCount" id="peopleCountContainer">
								<button class="action__button" type="button" id="decreaseButton">
									<svg width="16" height="16" viewBox="0 0 16 16" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<g opacity="0.6">
											<path d="M3.33301 8H12.6663" stroke="#111113" stroke-width="1.33333"
												stroke-linecap="round" stroke-linejoin="round" />
										</g>
									</svg>
								</button>
								<input type="text" name="peopleCount" id="peopleCount" value="1">
								<button class="action__button" type="button" id="increaseButton">
									<svg width="16" height="16" viewBox="0 0 16 16" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<g opacity="0.6">
											<path d="M8 3.33301V12.6663" stroke="#111113" stroke-width="1.33333"
												stroke-linecap="round" stroke-linejoin="round" />
											<path d="M3.33301 8H12.6663" stroke="#111113" stroke-width="1.33333"
												stroke-linecap="round" stroke-linejoin="round" />
										</g>
									</svg>
								</button>
							</label>
						</label>
						<button class="button button--big">
							Обчислити
							<svg width="20" height="20" viewBox="0 0 20 20" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path d="M5.83301 14.1663L14.1663 5.83301" stroke="white" stroke-width="1.66667"
									stroke-linecap="round" stroke-linejoin="round" />
								<path d="M5.83301 5.83301H14.1663V14.1663" stroke="white" stroke-width="1.66667"
									stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</button>
					</form>
					<div class="calculator__content desktop__result">
						<h2 class="hidden-mobile">Калькулятор податку на доходи фізичних осіб</h2>
						<p class="section__text hidden-mobile">Тут можна легко розрахувати податок на доходи фізичних
							осіб. Залежно
							від вашої роботи та
							сімейного становища ви будете знати ставку податку на доходи фізичних осіб, яка буде
							застосована
							до вас.</p>
						<ul class="calculator__content__list">
							<li>
								<div class="balance">
									<span>
										<img src="<?php bloginfo('template_directory'); ?>/assets/images/icon/brutto.svg" alt="">
									</span>
									00 <sub>00</sub>€
								</div>
								<p>ПДФО</p>
							</li>
							<li>
								<div class="balance">
									<span>
										<img src="<?php bloginfo('template_directory'); ?>/assets/images/icon/pdfo.svg" alt="">
									</span>
									889 03 <sub>00</sub>€
								</div>
								<p>Річна зарплата брутто</p>
							</li>
							<li>
								<div class="balance">
									<span>
										<img src="<?php bloginfo('template_directory'); ?>/assets/images/icon/heart-handshake.svg" alt="">
									</span>
									100 000<sub>00</sub>€
								</div>
								<p>Внесок на соціальне страхування</p>
							</li>
							<li>
								<div class="balance">
									<span>
										<img src="<?php bloginfo('template_directory'); ?>/assets/images/icon/percentage.svg" alt="">
									</span>
									00 <sub>00</sub>%
								</div>
								<p>Вид утримання ПДФО</p>
							</li>
							<li class="full">
								<div class="balance">
									<span>
										<img src="<?php bloginfo('template_directory'); ?>/assets/images/icon/grommet-money.svg" alt="">
									</span>
									9110 97 <sub>00</sub>€
								</div>
								<p>Річна чиста зарплата</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="calculator__content mobil__result">
				<h2 class="hidden-mobile">Результат</h2>
				<ul class="calculator__content__list">
					<li>
						<div class="balance">
							<span>
								<img src="<?php bloginfo('template_directory'); ?>/assets/images/icon/brutto.svg" alt="">
							</span>
							00 <sub>00</sub>€
						</div>
						<p>ПДФО</p>
					</li>
					<li>
						<div class="balance">
							<span>
								<img src="<?php bloginfo('template_directory'); ?>/assets/images/icon/pdfo.svg" alt="">
							</span>
							889 03 <sub>00</sub>€
						</div>
						<p>Річна зарплата брутто</p>
					</li>
					<li>
						<div class="balance">
							<span>
								<img src="<?php bloginfo('template_directory'); ?>/assets/images/icon/heart-handshake.svg" alt="">
							</span>
							100 000<sub>00</sub>€
						</div>
						<p>Внесок на соціальне страхування</p>
					</li>
					<li>
						<div class="balance">
							<span>
								<img src="<?php bloginfo('template_directory'); ?>/assets/images/icon/percentage.svg" alt="">
							</span>
							00 <sub>00</sub>%
						</div>
						<p>Вид утримання ПДФО</p>
					</li>
					<li class="full">
						<div class="balance">
							<span>
								<img src="<?php bloginfo('template_directory'); ?>/assets/images/icon/grommet-money.svg" alt="">
							</span>
							9110 97 <sub>00</sub>€
						</div>
						<p>Річна чиста зарплата</p>
					</li>
				</ul>
			</div>
		</section>

		<section class="articles">
			<?php the_content(); ?>
		</section>




		<section class="faq">
			<div class="container">
				<div class="wrapper">
					<p class="subtitle"><?php the_field('faq_text');?></p>
					<div class="col full">
						<h2><?php the_field('faq_title');?></h2>
					</div>
				</div>
				<ul class="faq__list">

					<?php
					$faq_query = new WP_Query(array('post_type' => 'faq'));

					if ($faq_query->have_posts()) : ?>
						<?php while ($faq_query->have_posts()) : $faq_query->the_post(); ?>
							<li>
								<div class="faq__header">
									<h4><?php the_title(); ?></h4>
									<button class="faq__list-collapse"></button>
								</div>

								<div class="faq__content"><?php the_content(); ?></div>
							</li>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php else : ?>
						<p><?php _e('No FAQs found'); ?></p>
					<?php endif; ?>
				</ul>
			</div>
		</section>
	</main>


<?php
}
get_footer();
?>