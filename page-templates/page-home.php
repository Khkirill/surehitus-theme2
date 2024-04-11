<?php
/*
 * Template name: Главная страница
 */
 get_header();
 the_post();
?>

<section class="cover">
	<div class="cover__container container">
		<div class="cover__block block">
			<div class="block__column">
				<h1 class="cover__title title-1 title-11111">
					<?php echo pll__( 'Krohvimis-ja maalimistööd Eesti majades' ) ?>
				</h1>
			</div>
			<div class="block__column">
				<div class="cover__content">
					<div class="cover__description">
						<?php echo pll__( 'SuurEhituse spetsialisti käe all muutub iga tuba täpselt selliseks nagu klient soovinud ja pikisilmi ooadnud.' ) ?>
					</div>
					<button data-micromodal-open="modal-form" class="btn btn_reverse">
						<?php echo esc_html( pll__( 'Hinnapakkumine' ) ) ?>
					</button>
				</div>
			</div>
		</div>
	</div>
	<div class="cover__bg">
		<img class="cover__img" src="<?= get_template_directory_uri() ?>/assets/images/cover22.png" alt="Image" loading="lazy" rel="preconnect">
		<div class="cover__arrow"></div>
	</div>
</section>

<?php
	// Метаполя для блока с услугами
	$services_block_subtitle = carbon_get_post_meta( get_the_ID(), 'services_block_subtitle' );
	$services_block_title = carbon_get_post_meta( get_the_ID(), 'services_block_title' );
	$services_cards = carbon_get_post_meta( get_the_ID(), 'services_cards' );
?>
<?php if( $services_block_subtitle && $services_block_title ) : ?>
	<section class="services" id="services">
		<div class="container">
			<div class="block">
				<div class="block__column">
					<div class="block__title title-2"><?= $services_block_subtitle ?></div>
				</div>
				<div class="block__column">
					<h2 class="title-1 title-11111"><?= $services_block_title ?></h2>
				</div>
			</div>
			<div class="small-slider services-slider swiper">
				<div class="small-slider__wrapper services-slider__wrapper swiper-wrapper">
					<?php foreach( $services_cards as $services_card ) { ?>
						<div class="small-slider__slide services-slider__slide swiper-slide">
							<div class="card">
								<div class="card__image">
									<button class="card__link" data-micromodal-open="modal-form">
										<span class="card__link-text"><?= $services_card[ 'services_card_btn_text' ] ?></span>
										<?= wp_get_attachment_image( $services_card['services_card_image'], 'full', false, array( 'loading' => 'lazy' ) ) ?>
									</button>
								</div>
								<div class="card__title title-2"><?= $services_card[ 'services_card_title' ] ?></div>
								<div class="card__text"><?= $services_card[ 'services_card_description' ] ?></div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>


<?php
	// Метаполя для блока с прайсом
	$price_block_subtitle = carbon_get_post_meta( get_the_ID(), 'price_block_subtitle' );
	$price_block_description = carbon_get_post_meta( get_the_ID(), 'price_block_description' );
	$price_items = carbon_get_post_meta( get_the_ID(), 'price_items' );
?>
<?php if( $price_block_subtitle && $price_block_description ) : ?>
	<section class="price" id="price">
		<div class="container">
			<div class="block">
				<div class="block__column">
					<div class="block__title title-2"><?= $price_block_subtitle ?></div>
					<div class="caption"><?= $price_block_description ?></div>
				</div>
				<div class="block__column">
					<?php if ( ! empty( $price_items ) ): ?>
						<div class="accordions">
							<?php foreach ( $price_items as $price_item => $item ): ?>
								<div class="accordion">
									<span class="accordion__border accordion__border_top"></span>
									<div class="accordion__header js-accordion-trigger accordion__header_active-new">
										<div class="accordion__title title-1" id="price__row-title-title-3"><?= $item[ 'price_item_title' ] ?></div>
										<div class="accordion__icon"></div>
									</div>
									<div class="accordion__body">
										<div class="accordion__content">
											<?php foreach( $item['price_rows'] as $price_row ) { ?>
												<div class="price__row">
													<div class="price__row-title title-3" id="price__row-title-title-3"><?= $price_row[ 'price_row_name' ] ?></div>
													<div class="price__row-cost"><?= $price_row[ 'price_row_cost' ] ?></div>
													<!--<button class="price__row-btn" data-micromodal-open="modal-form"><?= $price_row[ 'price_row_btn_text' ] ?></button>-->
													<div class="price__row-image">
														<?= wp_get_attachment_image( $price_row[ 'price_row_image' ], 'full' ) ?>
													</div>
												</div>
											<?php } ?>
										</div>
									</div>
									<span class="accordion__border accordion__border_bottom"></span>
								</div>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
					<button class="block__column-pricebtn btn_reverse" data-micromodal-open="modal-form">
						<?php echo esc_html( pll__( 'Uurige täpset maksumust' ) ) ?>
					</button>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>


<?php $args_portfolio = array(
	'posts_per_page'        => -1,
	'ignore_sticky_posts'   => true,
	'category_name'         => 'portfolio'
);
$query_portfolio = new WP_Query( $args_portfolio );
if( $query_portfolio->have_posts() ) :
?>
<section id="portfolio">
	<div class="container">
		<div class="block">
			<div class="block__column">
				<div class="block__title title-2">
					<?php echo esc_html( pll__( 'Portfoolio' ) ) ?>
				</div>
			</div>
			<div class="block__column">
				<h2 class="title-1">
					<?php echo esc_html( pll__( 'Tulemus ennekõike' ) ) ?>
				</h2>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="big-slider portfolio-slider swiper">
			<div class="swiper-wrapper">
				<?php while( $query_portfolio->have_posts() ) : $query_portfolio->the_post(); ?>
					<div class="big-slider__slide swiper-slide">
						<?php the_post_thumbnail( 'photo' ); ?>
					</div>
				<?php endwhile; ?>
			</div>
			<div class="big-slider__control">
				<div class="big-slider__container container">
					<div class="big-slider__pagination portfolio-slider__pagination swiper-pagination"></div>
					<div class="big-slider__prev portfolio-slider__prev swiper-button-prev"></div>
					<div class="big-slider__next portfolio-slider__next swiper-button-next"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; wp_reset_postdata(); ?>

<section>
	<div class="container">
		<div class="block">
			<div class="block__column">
				<div class="block__title title-2">
					<?php echo esc_html( pll__( 'Töö etapid' ) ) ?>
				</div>
			</div>
			<div class="block__column">
				<h2 class="title-1">
					<?php echo esc_html( pll__( 'Täielik tööde tsükkel' ) ) ?>
				</h2>
				<div class="rows">
					<div class="row">
						<span class="row__border row__border_top"></span>
						<div class="rows__title title-3 title-31">
							<?php echo esc_html( pll__( 'Tasandamine ja armeerimine' ) ) ?>
						</div>
						<div class="rows__text">
							<?php echo esc_html( pll__( 'Krohvimiseks mõeldud kipsisegude õige pealekandmine ja seejärel õige armeerimine mängivad olulist rolli maja komfortse atmosfääri loomisel. Töötame Knauf materjalidega. Need takistavad seente paljunemist, hoiavad talvel soojust ja suvel komfortse temperatuuri.' ) ) ?>
						</div>
						<span class="row__border row__border_bottom"></span>
					</div>
					<div class="row">
						<span class="row__border row__border_top"></span>
						<div class="rows__title title-3 title-31">
							<?php echo esc_html( pll__( 'Pahteldamine ja lihvimine' ) ) ?>
						</div>
						<div class="rows__text">
							<?php echo esc_html( pll__( 'Suure uhkusega võime öelda, et SuurEhitus firma töötajad suudavad hoida spaatleid ja lihvimisvõrke teravana, mille abil tagame seinte, lagede ja nõlvade sileda ja ühtlase pinna edasiseks värvimiseks või tapeetimiseks.' ) ) ?>
						</div>
						<span class="row__border row__border_bottom"></span>
					</div>
					<div class="row">
						<span class="row__border row__border_top"></span>
						<div class="rows__title title-3 title-31">
							<?php echo esc_html( pll__( 'Kruntimine ja värvimine' ) ) ?>
						</div>
						<div class="rows__text">
							<?php echo esc_html( pll__( 'Kruntime seinu nii, et isegi kõige tavalisem värv või mistahes dekoratiivne reljeef ei praguneks ja seda oleks lihtne uuesti pealekanda. Tulemus - kõik nurgad on ühtlased, täpsed ja ilusad.' ) ) ?>
						</div>
						<span class="row__border row__border_bottom"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="block">
			<div class="block__column">
				<div class="block__title title-2">
					<?php echo esc_html( pll__( 'Eelised' ) ) ?>
				</div>
			</div>
			<div class="block__column">
				<h2 class="title-1 title-11111">
					<?php echo esc_html( pll__( 'Värvitud seinad - see on kindel trend XXI sajandi trend' ) ) ?>
				</h2>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="columns">
			<div class="column">
				<div class="column__title title-2">
					<?php echo esc_html( pll__( 'Mugav' ) ) ?>
				</div>
				<div class="column__text">
					<?php echo esc_html( pll__( 'Akrüülvärviga kaetud seinu saab pesta täiesti erinevate puhastusvahenditega.' ) ) ?>
				</div>
				<div class="column__text">
					<?php echo esc_html( pll__( 'Värvid, millega me töötame, ei muuda oma tooni ega kooru.' ) ) ?>
				</div>
			</div>
			<div class="column">
				<div class="column__title title-2">
					<?php echo esc_html( pll__( 'Vastupidav' ) ) ?>
				</div>
				<div class="column__text">
					<?php echo esc_html( pll__( 'Värvid ei tuhmu päikesevalguse käes vähemalt järgmise 10 aasta jooksul.' ) ) ?>
				</div>
				<div class="column__text">
					<?php echo esc_html( pll__( 'Kerge südamega garanteerime, et vähemalt järgmise 10 aasta jooksul ei pea Te seinu üle värvima.' ) ) ?>
				</div>
			</div>
			<div class="column">
				<div class="column__title title-2">
					<?php echo esc_html( pll__( 'Keskkonnasõbralik' ) ) ?>
				</div>
				<div class="column__text">
					<?php echo esc_html( pll__( 'Seinte värvimine on ideaalne, kui Te ei soovi tapeediga töötamiseks aega raisata: vana tapeedi eemaldamine ja uue kleepimine. Uue värvikihi saab kanda otse vana kihi peale. Akrüülvärviga saab seinu 2-3 korda üle värvida.' ) ) ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="block">
			<div class="block__column">
				<div class="block__title title-2">
					<?php echo esc_html( pll__( 'Tellida teenust' ) ) ?>
				</div>
			</div>
			<div class="block__column"></div>
		</div>
		<div class="media-unit">
			<div class="media-unit__column">
				<img src="<?= get_template_directory_uri() ?>/assets/images/media1.png" alt="Image" class="media-unit__img">
			</div>
			<div class="media-unit__column">
				<h2 class="media-unit__title title-1">
					<?php echo esc_html( pll__( 'Soovin oma kodu siseviimistlust' ) ) ?>
				</h2>
				<div class="media-unit__text">
					<?php echo esc_html( pll__( 'Tingimused on läbipaistvad, selged ja ei muutu.' ) ) ?>
				</div>
				<div class="media-unit__text">
					<?php echo esc_html( pll__( 'Tasuta konsultatsioon Teile sobival ajal.' ) ) ?>
				</div>
				<button data-micromodal-open="modal-form" class="media-unit__btn btn btn_reverse">
					<?php echo esc_html( pll__( 'Jäta taotlus' ) ) ?>
				</button>
			</div>
		</div>
	</div>
</section>

<section class="about-company">
	<div class="container">
		<div class="block">
			<div class="block__column">
				<div class="block__title title-2">
					<?php echo esc_html( pll__( 'Ettevõtest' ) ) ?>
				</div>
			</div>
			<div class="block__column">
				<h2 class="title-1 title-11111">
					<?php echo esc_html( pll__( '90% krohvimis-ja maalritöödest teeb SuurEhitus soovituste järgi' ) ) ?>
				</h2>
				<div class="block__text block__text_first">
					<?php echo esc_html( pll__( 'SuurEhitus - 100% garantii seinte, lagede, nõlvade siseviimistluse valdkonnas. Alates 2018 aastast teeb tihedat ja professionaalset koostööd nii töövõtjate kui ka Eestis elavate ja töötavate eraisikutega. 80% krohvimis-ja värvimistööd tehakse Harjumaal.' ) ) ?>
				</div>
				<div class="block__text">
					<?php echo esc_html( pll__( 'SuurEhitus - meil on kogenud krohvijad. Maalriäri kunstnikud ja dekoraatorid. Töö on alati tehtud õigeaegselt.' ) ) ?>
				</div>
			</div>
		</div>
		<div class="small-slider company-slider swiper">
			<div class="small-slider__wrapper company-slider__wrapper swiper-wrapper">
				<div class="small-slider__slide company-slider__slide swiper-slide">
					<img src="<?= get_template_directory_uri() ?>/assets/images/card3.png" alt="Image">
				</div>
				<div class="small-slider__slide company-slider__slide swiper-slide">
					<img src="<?= get_template_directory_uri() ?>/assets/images/card4.png" alt="Image">
				</div>
				<div class="small-slider__slide company-slider__slide swiper-slide">
					<img src="<?= get_template_directory_uri() ?>/assets/images/card5.png" alt="Image">
				</div>
			</div>
		</div>
	</div>
</section>

<section id="numbers">
	<div class="container counter">
		<div class="block">
			<div class="block__column">
				<div class="block__title title-2">
					<?php echo esc_html( pll__( 'Meie numbrid' ) ) ?>
				</div>
			</div>
			<div class="block__column">
				<h2 class="title-1 title-11111">
					<?php echo esc_html( pll__( 'SuurEhitus - 5 + aastat kogemust' ) ) ?>
				</h2>
			</div>
		</div>
		<div class="columns columns_numbers">
			<div class="column">
				<div class="column__item">
					<span class="column__item-border"></span>
					<div class="column__area">
						<div data-num="120" class="column__number numeric">0</div>
						<div class="column__value numeric">+</div>
					</div>
					<div class="column__caption caption">
						<?php echo esc_html( pll__( 'Üle antud objekte' ) ) ?>
				</div>
				</div>
			</div>
			<div class="column">
				<div class="column__item">
					<span class="column__item-border"></span>
					<div class="column__area">
						<div data-num="50" class="column__number numeric">0</div>
						<div class="column__value numeric">+</div>
					</div>
					<div class="column__caption caption">
						<?php echo esc_html( pll__( 'tuhat m2 juba lõpetatud viimistlustöid' ) ) ?>
					</div>
				</div>
			</div>
			<div class="column">
				<div class="column__item">
					<span class="column__item-border"></span>
					<div class="column__area">
						<div data-num="99" class="column__number numeric">0</div>
						<div class="column__value numeric">%</div>
					</div>
					<div class="column__caption caption">
						<?php echo esc_html( pll__( 'Rahulolevaid kliente' ) ) ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="block">
			<div class="block__column">
				<div class="block__title title-2">
					<?php echo esc_html( pll__( 'Tööde plaan' ) ) ?>
				</div>
			</div>
			<div class="block__column">
				<h2 class="title-1 title-11111">
					<?php echo esc_html( pll__( 'Koostöö etapid' ) ) ?>
				</h2>
				<div class="rows">
					<div class="row">
						<span class="row__border row__border_top"></span>
						<div class="rows__title title-3 title-31">
							<?php echo esc_html( pll__( 'Tööde hindamine' ) ) ?>
						</div>
						<div class="rows__text">
							<?php echo esc_html( pll__( 'Lepime kokku kohtumise aja objektil. Teeme mõõtmeid, arutame üksikasju, lepime kokku täpse maksumuse.' ) ) ?>
						</div>
						<span class="row__border row__border_bottom"></span>
					</div>
					<div class="row">
						<span class="row__border row__border_top"></span>
						<div class="rows__title title-3 title-31">
							<?php echo esc_html( pll__( 'Sõlmime lepingu' ) ) ?>
						</div>
						<div class="rows__text">
							<?php echo esc_html( pll__( 'Fikseerime täitmise tähtaega, kõigi tööde mahtu ja materjale. Lepingus fikseeritud eelarve ei muutu.' ) ) ?>
						</div>
						<span class="row__border row__border_bottom"></span>
					</div>
					<div class="row">
						<span class="row__border row__border_top"></span>
						<div class="rows__title title-3 title-31">
							<?php echo esc_html( pll__( 'Viimistluse teostamine' ) ) ?>
						</div>
						<div class="rows__text">
							<?php echo esc_html( pll__( 'Ostame ja tarnime heakskiidetud materjale ja isiklikke seadmeid. Teostame tööde kontrolli. Igal nädal teeme fotoaruande.' ) ) ?>
						</div>
						<span class="row__border row__border_bottom"></span>
					</div>
					<div class="row">
						<span class="row__border row__border_top"></span>
						<div class="rows__title title-3 title-31">
							<?php echo esc_html( pll__( 'Tööde vastuvõtmine' ) ) ?>
						</div>
						<div class="rows__text">
							<?php echo esc_html( pll__( 'Anname töö üle. Te võtate vastu, teete makse. Omakorda viime välja ehitusjäätmeid ja isikliku varustuse.' ) ) ?>
						</div>
						<span class="row__border row__border_bottom"></span>
					</div>
					<div class="row">
						<span class="row__border row__border_top"></span>
						<div class="rows__title title-3 title-31">
							<?php echo esc_html( pll__( 'Anname garantii' ) ) ?>
						</div>
						<div class="rows__text">
							<?php echo esc_html( pll__( 'Vastavalt seadusandlusele - 2 aastat. Aga! 14 päeva jooksul pärast töö vastuvõtmist, kui on vaja muudatusi teha, siis helistage ja teeme korda.' ) ) ?>
						</div>
						<span class="row__border row__border_bottom"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php $args_examples = array(
	'posts_per_page'        => -1,
	'ignore_sticky_posts'   => true,
	'category_name'         => 'examples'
);
$query_examples = new WP_Query( $args_examples );
if( $query_examples->have_posts() ) :
?>
<section class="process-section">
	<div class="container">
		<div class="block">
			<div class="block__column">
				<div class="block__title title-2">
					<?php echo esc_html( pll__( 'Näited' ) ) ?>
				</div>
			</div>
			<div class="block__column">
				<h2 class="title-1 title-11111">
					<?php echo esc_html( pll__( 'Kuidas toimub krohvimis-ja maalritööde teostamise protsess' ) ) ?>
				</h2>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="big-slider process-slider swiper">
			<div class="swiper-wrapper">
				<?php while( $query_examples->have_posts() ) : $query_examples->the_post(); ?>
					<div class="big-slider__slide swiper-slide">
						<?php the_post_thumbnail( 'photo' ); ?>
					</div>
				<?php endwhile; ?>
			</div>
			<div class="big-slider__control">
				<div class="big-slider__container container">
					<div class="big-slider__pagination process-slider__pagination swiper-pagination"></div>
					<div class="big-slider__prev process-slider__prev swiper-button-prev"></div>
					<div class="big-slider__next process-slider__next swiper-button-next"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; wp_reset_postdata(); ?>

<section class="leave-contacts">
	<div class="container">
		<div class="block">
			<div class="block__column">
				<div class="block__title title-2">
					<?php echo esc_html( pll__( 'Jäta meile oma kontaktid' ) ) ?>
				</div>
			</div>
			<div class="block__column"></div>
		</div>
		<div class="media-unit media-unit_form">
			<div class="media-unit__column" id="media-unit__column-image">
				<img src="<?= get_template_directory_uri() ?>/assets/images/media2.png" alt="Image" class="media-unit__img">
			</div>
			<div class="media-unit__column">
				<h2 class="media-unit__title title-1"><?php echo esc_html( pll__( 'Alustame tööd' ) ) ?></h2>
				<div class="media-unit__text"><?php echo esc_html( pll__( 'Kõik on lihtne. Kirjutage telefoninumber ja oma nimi. Helistame tagasi, vastame Teie küsimustele ja asume asja juurde.' ) ) ?></div>
				<button data-micromodal-open="modal-form" class="btn btn_reverse media-unit__btn">
					<?php echo esc_html( pll__( 'Jäta taotlus' ) ) ?>
				</button>
			</div>
		</div>
	</div>
</section>

<section id="faq">
	<div class="container">
		<div class="block">
			<div class="block__column">
				<div class="block__title title-2">
					<?php echo esc_html( pll__( 'Küsimus-vastus' ) ) ?>
				</div>
			</div>
			<div class="block__column">
				<h2 class="title-1 title-11111">
					<?php echo esc_html( pll__( 'Korduma kippuvad küsimused' ) ) ?>
				</h2>
				<div class="accordions">
					<div class="accordion">
						<span class="accordion__border accordion__border_top"></span>
						<div class="accordion__header js-accordion-trigger">
							<div class="accordion__title title-3 title-31">
								<?php echo esc_html( pll__( 'Millistes Eesti maakondades Teie töötate?' ) ) ?>
							</div>
							<div class="accordion__icon"></div>
						</div>
						<div class="accordion__body">
							<div class="accordion__content">
								<?php echo esc_html( pll__( '80% töödest on teostatud Tallinnas ja Harjumaal. Vajadusel teostame töid ka teistes Eesti osades. Meil on olemas töökogemus Soomes ja Rootsis.' ) ) ?>
							</div>
						</div>
						<span class="accordion__border accordion__border_bottom"></span>
					</div>
					<div class="accordion">
						<span class="accordion__border accordion__border_top"></span>
						<div class="accordion__header js-accordion-trigger">
							<div class="accordion__title title-3">
								<?php echo esc_html( pll__( 'Millised on sisetööde tähtajad?' ) ) ?>
							</div>
							<div class="accordion__icon"></div>
						</div>
						<div class="accordion__body">
							<div class="accordion__content">
								<?php echo esc_html( pll__( 'Kõik sõltub tööde mahust ja keerukusest. Samuti võetakse arvesse aastaaega, ruumi kuivatamiseks mõeldud kütte olemasolu ja muid ehitusnorme. Näiteks täielik tööde tsükkel - kuni 8 nädalat aega kulub 500 m2 piki seinu maja jaoks.' ) ) ?>
							</div>
						</div>
						<span class="accordion__border accordion__border_bottom"></span>
					</div>
					<div class="accordion">
						<span class="accordion__border accordion__border_top"></span>
						<div class="accordion__header js-accordion-trigger">
							<div class="accordion__title title-3 title-31">
								<?php echo esc_html( pll__( 'Milliseid materjale Te kasutate?' ) ) ?>
							</div>
							<div class="accordion__icon"></div>
						</div>
						<div class="accordion__body">
							<div class="accordion__content">
								<?php echo esc_html( pll__( 'Nii krohvimiseks kui ka värvimiseks kasutame kauakestvaid ja vastupidavaid materjale. Värvid on ainult veepõhised. Need on veepõhised või vesidispersioon-, akrüül -, lateksvärvid.' ) ) ?>
							</div>
						</div>
						<span class="accordion__border accordion__border_bottom"></span>
					</div>
					<div class="accordion">
						<span class="accordion__border accordion__border_top"></span>
						<div class="accordion__header js-accordion-trigger">
							<div class="accordion__title title-3 title-31">
								<?php echo esc_html( pll__( 'Kas on mingeid allahindlusi, kampaaniaid, eripakkumisi?' ) ) ?>
							</div>
							<div class="accordion__icon"></div>
						</div>
						<div class="accordion__body">
							<div class="accordion__content">
								<?php echo esc_html( pll__( 'Allahindlussüsteem on paindlik. Helistage - lepime kokku. SuurEhitusel on võimalik 100% ettemaks, mis annab garantii 5% allahindlusele. Ja Teie tagasiside eest meie töö kohta sotsiaalvõrgustikes teeme 10 m2 tasuta maalritööd (seinte värvimine).' ) ) ?>
							</div>
						</div>
						<span class="accordion__border accordion__border_bottom"></span>
					</div>
					<div class="accordion">
						<span class="accordion__border accordion__border_top"></span>
						<div class="accordion__header js-accordion-trigger">
							<div class="accordion__title title-3 title-31">
								<?php echo esc_html( pll__( 'Kuidas maksmine toimub?' ) ) ?>
							</div>
							<div class="accordion__icon"></div>
						</div>
						<div class="accordion__body">
							<div class="accordion__content">
								<?php echo esc_html( pll__( 'Ettemaks 30% lepingus märgitud hinnast. Erinevate siseviimistluse tööde eest makstakse eraldi ja ainult peale valmimist ja.Teie heakskiidu.' ) ) ?>
							</div>
						</div>
						<span class="accordion__border accordion__border_bottom"></span>
					</div>
					<div class="accordion">
						<span class="accordion__border accordion__border_top"></span>
						<div class="accordion__header js-accordion-trigger">
							<div class="accordion__title title-3 title-31">
								<?php echo esc_html( pll__( 'Kas ma saan lepingu töö käigus lõpetada?' ) ) ?>
							</div>
							<div class="accordion__icon"></div>
						</div>
						<div class="accordion__body">
							<div class="accordion__content">
								<?php echo esc_html( pll__( 'Jah. Teil on õigus igal ajal ilma põhjust selgitamata ühepoolselt lepingu täitmisest keelduda, makstes tehtud tööde eest. See on lepingus kirjas.' ) ) ?>
							</div>
						</div>
						<span class="accordion__border accordion__border_bottom"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="interior-decoration">
	<div class="container">
		<div class="block">
			<div class="block__column">
				<div class="block__title title-2">
					<?php echo esc_html( pll__( 'Siseviimistlus' ) ) ?>
				</div>
			</div>
			<div class="block__column">
				<h2 class="title-1 title-11111">
					<?php echo esc_html( pll__( 'Ei mingeid viivitusi ega ülekulusid' ) ) ?>
				</h2>
			</div>
		</div>
		<div class="small-slider decoration-slider swiper">
			<div class="small-slider__wrapper decoration-slider__wrapper swiper-wrapper">
				<div class="small-slider__slide decoration-slider__slide swiper-slide">
					<img src="<?= get_template_directory_uri() ?>/assets/images/card6.png" alt="Image">
				</div>
				<div class="small-slider__slide decoration-slider__slide swiper-slide">
					<img src="<?= get_template_directory_uri() ?>/assets/images/card7.png" alt="Image">
				</div>
				<div class="small-slider__slide decoration-slider__slide swiper-slide">
					<img src="<?= get_template_directory_uri() ?>/assets/images/card8.png" alt="Image">
				</div>
			</div>
		</div>
	</div>
</section>

<?php $args_reviews = array(
	'posts_per_page'        => -1,
	'ignore_sticky_posts'   => true,
	'category_name'         => 'reviews'
);
$query_reviews = new WP_Query( $args_reviews );
if( $query_reviews->have_posts() ) :
?>
<section class="reviews-section" id="reviews">
	<div class="container">
		<div class="block">
			<div class="block__column">
				<div class="block__title title-2">
					<?php echo esc_html( pll__( 'Tagasiside' ) ) ?>
				</div>
			</div>
			<div class="block__column">
				<h2 class="title-1 custom-slider__title title-11111">
					<?php echo esc_html( pll__( 'Meist räägitakse' ) ) ?>
				</h2>
				<div class="custom-slider__control reviews-slider__control">
					<div class="custom-slider__prev reviews-slider__prev"></div>
					<div class="custom-slider__next reviews-slider__next"></div>
				</div>
			</div>
		</div>
		<div class="custom-slider reviews-slider swiper">
			<div class="custom-slider__wrapper reviews-slider__wrapper swiper-wrapper">

				<?php while( $query_reviews->have_posts() ) : $query_reviews->the_post(); ?>
					<div class="custom-slider__slide reviews-slider__slide swiper-slide">
						<div class="review">
							<?php the_post_thumbnail( 'avatar' ); ?>
							<div class="review__content">
								<div class="review__name"><?php the_title(); ?></div>
								<div class="review__position caption"><?php the_excerpt(); ?></div>
								<div class="review__text">
									<?php the_content(); ?>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>

			</div>
		</div>
	</div>
</section>
<?php endif; wp_reset_postdata(); ?>

<section class="partners-section">
	<div class="container">
		<div class="block">
			<div class="block__column">
				<div class="block__title title-2">
					<?php echo esc_html( pll__( 'Partnerid' ) ) ?>
				</div>
			</div>
			<div class="block__column">
				<h2 class="title-1 custom-slider__title title-11111">
					<?php echo esc_html( pll__( 'Partnerid väärtustavad SuurEhitus' ) ) ?>
				</h2>
				<div class="custom-slider__control partners-slider__control">
					<div class="custom-slider__prev partners-slider__prev"></div>
					<div class="custom-slider__next partners-slider__next"></div>
				</div>
			</div>
		</div>
		<div class="custom-slider partners-slider swiper">
			<div class="custom-slider__wrapper partners-slider__wrapper swiper-wrapper">
				<div class="custom-slider__slide partners-slider__slide swiper-slide">
					<img src="<?= get_template_directory_uri() ?>/assets/images/partner1.png" alt="Partner Logo" class="partner-img">
				</div>
				<div class="custom-slider__slide partners-slider__slide swiper-slide">
					<img src="<?= get_template_directory_uri() ?>/assets/images/partner3.png" alt="Partner Logo" class="partner-img">
				</div>
				<div class="custom-slider__slide partners-slider__slide swiper-slide">
					<img src="<?= get_template_directory_uri() ?>/assets/images/partner4.png" alt="Partner Logo" class="partner-img">
				</div>
				<div class="custom-slider__slide partners-slider__slide swiper-slide">
					<img src="<?= get_template_directory_uri() ?>/assets/images/partner5.png" alt="Partner Logo" class="partner-img">
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>