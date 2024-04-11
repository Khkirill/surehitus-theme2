				</main>

				<footer class="footer">
					<div class="footer__container container">
						<div class="footer__wrapper">
							<div class="footer__column">
								<div class="footer__title title-2"><?php echo esc_html( pll__( 'Telli teenus 5% allahindlusega kohe praegu' ) ) ?></div>
								<button data-micromodal-open="modal-form" class="footer__btn btn"><?php echo esc_html( pll__( 'Jäta taotlus' ) ) ?></button>
							</div>
							<div class="footer__column">
								<div class="footer__title title-2"><?php echo esc_html( pll__( 'Kontaktid' ) ) ?></div>
								<div class="footer__menus">
									<div class="footer__submenu">
										<div class="footer__submenu-title title-3"><?php echo esc_html( pll__( 'SuurEhitus OÜ' ) ) ?></div>
										<ul class="footer__submenu-list">
											<li>
												<a href="" target="_blank"><?php echo esc_html( pll__( 'Registrikood 14508707' ) ) ?></a>
											</li>
											<li>
												<a href="" target="_blank">Harju maakond, Tallinn,</a>
											</li>
											<li>
												<a href="" target="_blank">Mustamäe linnaosa,</a>
											</li>
											<li>
												<a href="https://goo.gl/maps/eQDD27xLmJxrfVr86" target="_blank">Akademia tee 4, Tallinn</a>
											</li>
											<li>
												<a href="mailto:<?php echo esc_html( pll__( 'suurehitusou@gmail.com' ) ) ?>"><?php echo esc_html( pll__( 'suurehitusou@gmail.com' ) ) ?></a>
											</li>
											<li>
											<a href="tel:<?php echo esc_html( pll__( '+37258339290' ) ) ?>"><?php echo esc_html( pll__( '+37258339290' ) ) ?></a>
											</li>
										</ul>
									</div>
									<div class="footer__submenu">
										<div class="footer__submenu-title title-3"><?php echo esc_html( pll__( 'Sotsiaalvõrgud' ) ) ?></div>
										<ul class="footer__submenu-list">
											<li>
												<a href="https://www.facebook.com/profile.php?id=100067231812601" target="_blank">FaceBook</a>
											</li>
											<li>
												<a href="https://instagram.com/suurehitus_ou?igshid=MzRlODBiNWFlZA==" target="_blank">Instagram</a>
											</li>
											<li>
												<a href="https://t.me/suurehitus" target="_blank">Telegram</a>
											</li>
											<li>
												<a href="https://wa.me/message/PMSEZVDVUBD3A1" target="_blank">WhatsApp</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<nav class="footer__navigation">
							<ul class="footer__navigation-list">
								<li>
									<a href="#services"><?php echo esc_html( pll__( 'Teenused' ) ) ?></a>
								</li>
								<li>
									<a href="#portfolio"><?php echo esc_html( pll__( 'Portfoolio' ) ) ?></a>
								</li>
								<li>
									<a href="#faq"><?php echo esc_html( pll__( 'Küsimus-vastus' ) ) ?></a>
								</li>
								<li>
									<a href="#reviews"><?php echo esc_html( pll__( 'Tagasiside' ) ) ?></a>
								</li>
								<li>
									<a href="<?php echo site_url( '/privacy-policy' ); ?>" style="display: block; !important"><?php echo esc_html( pll__( 'Privaatsuspoliitika' ) ) ?></a>
								</li>
							</ul>
						</nav>
						<div class="footer__bottom">
							<div class="footer__copyright">
								©<?php bloginfo( 'name' ); ?>. <?php echo date('Y'); ?>. <?php echo esc_html( pll__( 'Kõik õigused kaitstud' ) ) ?>.
							</div>
							<div class="footer__author">
								<span class="footer__ask"><?php echo esc_html( pll__( 'Kas vajate veebisaidi arendamist? Kirjutage kiiresti!' ) ) ?></span>
								<span>Design: <a href="https://t.me/y_kochur" target="_blank" rel="nofollow" class="footer__author-link">Kochur</a></span>
								<span>Code: <a href="https://t.me/mmmishin" target="_blank" rel="nofollow" class="footer__author-link">Mishin</a></span>
							</div>
						</div>
					</div>
				</footer>

			</div>
		</div>
	</div>

	<div class="modal micromodal-slide" id="modal-form" aria-hidden="true">
		<div class="modal__overlay" tabindex="-1" data-micromodal-close>
			<div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-form-title">
				<div class="modal__header">
					<h2 class="modal__title title-1" id="modal-form-title">
						<?php echo esc_html( pll__( 'Tellige teenus' ) ) ?>
					</h2>
					<button class="modal__close" aria-label="Закрыть окно" data-micromodal-close></button>
				</div>
				<div class="modal__content" id="modal-form-content">
					<p class="modal__descr">
						<?php echo esc_html( pll__( 'See on lihtne. Kirjutage oma nimi, telefoninumber ja e-posti aadress. Me helistame teile tagasi, vastame kõigile teie küsimustele ja asume asja juurde.' ) ) ?>
					</p>
					<form id="firts-form" class="form">
						<input hidden type="checkbox" name="art_anticheck" class="art_anticheck" value="true" checked="checked"/>
						<input hidden type="text" name="art_submitted" value=""/>
						<input hidden type="text" name="art_subject" class="required art_subject" value="Заявка с сайта"/>
						<input hidden type="text" name="success-text" value="<?php echo esc_html( pll__( 'Aitäh! Teie taotlus on edukalt saadetud. Võtame teiega peagi ühendust.' ) ) ?>"/>
						<input hidden type="text" name="name-error-text" value="<?php echo esc_html( pll__( 'Palun sisestage oma nimi.' ) ) ?>"/>
						<input hidden type="text" name="name-error-tel" value="<?php echo esc_html( pll__( 'Palun sisestage oma telefoninumber.' ) ) ?>"/>
						<input hidden type="text" name="name-error-email" value="<?php echo esc_html( pll__( 'Palun sisestage oma e-posti aadress.' ) ) ?>"/>
						<input hidden type="text" name="name-incorrect-email" value="<?php echo esc_html( pll__( 'Vale e-posti aadress.' ) ) ?>"/>
						<div class="form__group">
							<input type="text" name="art_name" class="form__input required art_name" value="" autocomplete="off"/>
							<div class="form__group-title"><?php echo esc_html( pll__( 'Nimi' ) ) ?></div>
						</div>
						<div class="form__group">
							<input type="tel" name="art_tel" class="form__input required art_tel estonia-mask" value="" autocomplete="off"/>
							<div class="form__group-title"><?php echo esc_html( pll__( 'Telefon' ) ) ?></div>
						</div>
						<div class="form__group">
							<input type="email" name="art_email" class="form__input required art_email" value="" autocomplete="off"/>
							<div class="form__group-title"><?php echo esc_html( pll__( 'E-post' ) ) ?></div>
						</div>
						<div class="form__accept">
							<label class="caption">
								<input type="checkbox" required name="checkbox" class="form__checkbox">
								<span class="custom-checkbox"></span>
								<?php echo esc_html( pll__( 'Annan oma nõusoleku järgmiste andmete töötlemiseks' ) ) ?>
							</label>
							<a class="caption" href="<?php echo site_url( '/privacy-policy' ); ?>"><?php echo esc_html( pll__( 'Isikuandmed' ) ) ?></a>
						</div>
						<button type="submit" class="form__btn btn btn_reverse"><?php echo esc_html( pll__( 'Saada' ) ) ?></button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php wp_footer(); ?>
</body>
</html>