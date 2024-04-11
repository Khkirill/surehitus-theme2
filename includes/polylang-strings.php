<?php

add_action('init', 'pwd_suurehitus_polylang_strings' );

function pwd_suurehitus_polylang_strings() {

	if( ! function_exists( 'pll_register_string' ) ) {
		return;
	}


	// Повторяющиеся строки переводов
	pll_register_string(
		'pwd_suurehitus_footer_registerkod',
		'Registrikood 14508707',
		'Footer',
		false
	);
	
	pll_register_string(
		'pwd_suurehitus_portfolio',
		'Portfoolio',
		'Common',
		false
	);

	pll_register_string(
		'pwd_suurehitus_portfolio_title',
		'Tulemus ennekõike',
		'Common',
		false
	);

	pll_register_string(
		'pwd_suurehitus_submit_application',
		'Jäta taotlus',
		'Common',
		false
	);

	pll_register_string(
		'pwd_suurehitus_process_title',
		'Näited',
		'Common',
		false
	);

	pll_register_string(
		'pwd_suurehitus_process_subtitle',
		'Kuidas toimub krohvimis-ja maalritööde teostamise protsess',
		'Common',
		false
	);

	pll_register_string(
		'pwd_suurehitus_interior_decoration_title',
		'Siseviimistlus',
		'Common',
		false
	);

	pll_register_string(
		'pwd_suurehitus_interior_decoration_subtitle',
		'Ei mingeid viivitusi ega ülekulusid',
		'Common',
		false
	);

	pll_register_string(
		'pwd_suurehitus_reviews_title',
		'Tagasiside',
		'Common',
		false
	);

	pll_register_string(
		'pwd_suurehitus_reviews_subtitle',
		'Meist räägitakse',
		'Common',
		false
	);

	pll_register_string(
		'pwd_suurehitus_partners_title',
		'Partnerid',
		'Common',
		false
	);

	pll_register_string(
		'pwd_suurehitus_partners_subtitle',
		'Partnerid väärtustavad SuurEhitus',
		'Common',
		false
	);

	pll_register_string(
		'pwd_suurehitus_loading',
		'Laadimine',
		'Common',
		false
	);

	pll_register_string(
		'pwd_suurehitus_official_site',
		'Ametlik veebileht',
		'Common',
		false
	);

	pll_register_string(
		'pwd_suurehitus_all_rights_reserved',
		'Kõik õigused kaitstud',
		'Common',
		false
	);

	pll_register_string(
		'pwd_suurehitus_pp',
		'Privaatsuspoliitika',
		'Common',
		false
	);

	pll_register_string(
		'pwd_suurehitus_ask_about_site',
		'Kas vajate veebisaidi arendamist? Kirjutage kiiresti!',
		'Common',
		false
	);

	pll_register_string(
		'pwd_suurehitus_footer_sale',
		'Telli teenus 5% allahindlusega kohe praegu',
		'Common',
		false
	);

	pll_register_string(
		'pwd_suurehitus_footer_contacts',
		'Kontaktid',
		'Common',
		false
	);

	pll_register_string(
		'pwd_suurehitus_footer_info',
		'Aadress',
		'Common',
		false
	);

	pll_register_string(
		'pwd_suurehitus_footer_socials',
		'Sotsiaalvõrgud',
		'Common',
		false
	);

	pll_register_string(
		'pwd_suurehitus_back_homepage',
		'Tagasi avalehele',
		'Common',
		false
	);

	pll_register_string(
		'pwd_suurehitus_phone',
		'+37258339290',
		'Common',
		false
	);

	pll_register_string(
		'pwd_suurehitus_mail',
		'suurehitusou@gmail.com',
		'Common',
		false
	);

	pll_register_string(
		'pwd_suurehitus_404_text',
		'Sellist lehekülge ei ole, palun pöörduge tagasi pealehele.',
		'Common',
		false
	);


	// Обложка главной страницы
	pll_register_string(
		'pwd_suurehitus_homescreen_title',
		'Krohvimis-ja maalimistööd Eesti majades',
		'Homescreen',
		true
	);

	pll_register_string(
		'pwd_suurehitus_homescreen_description',
		'SuurEhituse spetsialisti käe all muutub iga tuba täpselt selliseks nagu klient soovinud ja pikisilmi ooadnud.',
		'Homescreen',
		true
	);

	pll_register_string(
		'pwd_suurehitus_homescreen_btn',
		'Hinnapakkumine',
		'Homescreen',
		false
	);

	// Секция "Услуги"
	pll_register_string(
		'pwd_suurehitus_services_title',
		'Teenused',
		'Services',
		false
	);

	pll_register_string(
		'pwd_suurehitus_services_subtitle',
		'Vii unistus täide',
		'Services',
		false
	);

	pll_register_string(
		'pwd_suurehitus_services_card_1_title',
		'Krohvimistööd (mehaaniline / käsitsi)',
		'Services',
		false
	);

	pll_register_string(
		'pwd_suurehitus_services_card_1_description',
		'Seinte joondamine nii kipsi-kui ka tsemendimörtidega.',
		'Services',
		false
	);

	pll_register_string(
		'pwd_suurehitus_services_card_2_title',
		'Maalritööd (värvimine / dekoreerimine)',
		'Services',
		false
	);

	pll_register_string(
		'pwd_suurehitus_services_card_2_description',
		'Seinte, lagede, nõlvade värvimine veepõhiste värvidega.',
		'Services',
		false
	);
	
	pll_register_string(
		'pwd_suurehitus_services_button_price',
		'Uurige täpset maksumust',
		'Services',
		false
	);


	// Секция "Круг работ"
	pll_register_string(
		'pwd_suurehitus_works_title',
		'Töö etapid',
		'Works',
		false
	);

	pll_register_string(
		'pwd_suurehitus_works_subtitle',
		'Täielik tööde tsükkel',
		'Works',
		false
	);

	pll_register_string(
		'pwd_suurehitus_works_card_1_title',
		'Tasandamine ja armeerimine',
		'Works',
		false
	);

	pll_register_string(
		'pwd_suurehitus_works_card_1_text',
		'Krohvimiseks mõeldud kipsisegude õige pealekandmine ja seejärel õige armeerimine mängivad olulist rolli maja komfortse atmosfääri loomisel. Töötame Knauf materjalidega. Need takistavad seente paljunemist, hoiavad talvel soojust ja suvel komfortse temperatuuri.',
		'Works',
		true
	);

	pll_register_string(
		'pwd_suurehitus_works_card_2_title',
		'Pahteldamine ja lihvimine',
		'Works',
		false
	);

	pll_register_string(
		'pwd_suurehitus_works_card_2_text',
		'Suure uhkusega võime öelda, et SuurEhitus firma töötajad suudavad hoida spaatleid ja lihvimisvõrke teravana, mille abil tagame seinte, lagede ja nõlvade sileda ja ühtlase pinna edasiseks värvimiseks või tapeetimiseks.',
		'Works',
		true
	);

	pll_register_string(
		'pwd_suurehitus_works_card_3_title',
		'Kruntimine ja värvimine',
		'Works',
		false
	);

	pll_register_string(
		'pwd_suurehitus_works_card_3_text',
		'Kruntime seinu nii, et isegi kõige tavalisem värv või mistahes dekoratiivne reljeef ei praguneks ja seda oleks lihtne uuesti pealekanda. Tulemus - kõik nurgad on ühtlased, täpsed ja ilusad.',
		'Works',
		true
	);


	// Секция "Преимущества"
	pll_register_string(
		'pwd_suurehitus_advantages_title',
		'Eelised',
		'Advantages',
		false
	);

	pll_register_string(
		'pwd_suurehitus_advantages_subtitle',
		'Värvitud seinad - see on kindel trend XXI sajandi trend',
		'Advantages',
		false
	);

	pll_register_string(
		'pwd_suurehitus_advantages_col_1_title',
		'Mugav',
		'Advantages',
		false
	);

	pll_register_string(
		'pwd_suurehitus_advantages_col_1_text_1',
		'Akrüülvärviga kaetud seinu saab pesta täiesti erinevate puhastusvahenditega.',
		'Advantages',
		true
	);

	pll_register_string(
		'pwd_suurehitus_advantages_col_1_text_2',
		'Värvid, millega me töötame, ei muuda oma tooni ega kooru.',
		'Advantages',
		true
	);

	pll_register_string(
		'pwd_suurehitus_advantages_col_2_title',
		'Vastupidav',
		'Advantages',
		false
	);

	pll_register_string(
		'pwd_suurehitus_advantages_col_2_text_1',
		'Värvid ei tuhmu päikesevalguse käes vähemalt järgmise 10 aasta jooksul.',
		'Advantages',
		true
	);

	pll_register_string(
		'pwd_suurehitus_advantages_col_2_text_2',
		'Kerge südamega garanteerime, et vähemalt järgmise 10 aasta jooksul ei pea Te seinu üle värvima.',
		'Advantages',
		true
	);

	pll_register_string(
		'pwd_suurehitus_advantages_col_3_title',
		'Keskkonnasõbralik',
		'Advantages',
		false
	);

	pll_register_string(
		'pwd_suurehitus_advantages_col_3_text_1',
		'Seinte värvimine on ideaalne, kui Te ei soovi tapeediga töötamiseks aega raisata: vana tapeedi eemaldamine ja uue kleepimine. Uue värvikihi saab kanda otse vana kihi peale. Akrüülvärviga saab seinu 2-3 korda üle värvida.',
		'Advantages',
		true
	);


	// Секция "Заказать услугу"
	pll_register_string(
		'pwd_suurehitus_order_title',
		'Tellida teenust',
		'Order services',
		false
	);

	pll_register_string(
		'pwd_suurehitus_order_subtitle',
		'Soovin oma kodu siseviimistlust',
		'Order services',
		false
	);

	pll_register_string(
		'pwd_suurehitus_order_text_1',
		'Tingimused on läbipaistvad, selged ja ei muutu.',
		'Order services',
		false
	);

	pll_register_string(
		'pwd_suurehitus_order_text_2',
		'Tasuta konsultatsioon Teile sobival ajal.',
		'Order services',
		false
	);


	// Секция "О компании"
	pll_register_string(
		'pwd_suurehitus_about_title',
		'Ettevõtest',
		'About',
		false
	);

	pll_register_string(
		'pwd_suurehitus_about_subtitle',
		'90% krohvimis-ja maalritöödest teeb SuurEhitus soovituste järgi',
		'About',
		true
	);

	pll_register_string(
		'pwd_suurehitus_about_text_1',
		'SuurEhitus - 100% garantii seinte, lagede, nõlvade siseviimistluse valdkonnas. Alates 2018 aastast teeb tihedat ja professionaalset koostööd nii töövõtjate kui ka Eestis elavate ja töötavate eraisikutega. 80% krohvimis-ja värvimistööd tehakse Harjumaal.',
		'About',
		true
	);

	pll_register_string(
		'pwd_suurehitus_about_text_2',
		'SuurEhitus - meil on kogenud krohvijad. Maalriäri kunstnikud ja dekoraatorid. Töö on alati tehtud õigeaegselt.',
		'About',
		true
	);


	// Секция "Мы в цифрах"
	pll_register_string(
		'pwd_suurehitus_numbers_title',
		'Meie numbrid',
		'Numbers',
		false
	);

	pll_register_string(
		'pwd_suurehitus_numbers_subtitle',
		'SuurEhitus - 5 + aastat kogemust',
		'Numbers',
		false
	);

	pll_register_string(
		'pwd_suurehitus_numbers_col_1_description',
		'Üle antud objekte',
		'Numbers',
		false
	);

	pll_register_string(
		'pwd_suurehitus_numbers_col_2_description',
		'tuhat m2 juba lõpetatud viimistlustöid',
		'Numbers',
		false
	);

	pll_register_string(
		'pwd_suurehitus_numbers_col_3_description',
		'Rahulolevaid kliente',
		'Numbers',
		false
	);


	// Секция "План работ"
	pll_register_string(
		'pwd_suurehitus_plan_title',
		'Tööde plaan',
		'Plan',
		false
	);

	pll_register_string(
		'pwd_suurehitus_plan_subtitle',
		'Koostöö etapid',
		'Plan',
		false
	);

	pll_register_string(
		'pwd_suurehitus_plan_row_1_title',
		'Tööde hindamine',
		'Plan',
		false
	);

	pll_register_string(
		'pwd_suurehitus_plan_row_1_text',
		'Lepime kokku kohtumise aja objektil. Teeme mõõtmeid, arutame üksikasju, lepime kokku täpse maksumuse.',
		'Plan',
		true
	);

	pll_register_string(
		'pwd_suurehitus_plan_row_2_title',
		'Sõlmime lepingu',
		'Plan',
		false
	);

	pll_register_string(
		'pwd_suurehitus_plan_row_2_text',
		'Fikseerime täitmise tähtaega, kõigi tööde mahtu ja materjale. Lepingus fikseeritud eelarve ei muutu.',
		'Plan',
		true
	);

	pll_register_string(
		'pwd_suurehitus_plan_row_3_title',
		'Viimistluse teostamine',
		'Plan',
		false
	);

	pll_register_string(
		'pwd_suurehitus_plan_row_3_text',
		'Ostame ja tarnime heakskiidetud materjale ja isiklikke seadmeid. Teostame tööde kontrolli. Igal nädal teeme fotoaruande.',
		'Plan',
		true
	);

	pll_register_string(
		'pwd_suurehitus_plan_row_4_title',
		'Tööde vastuvõtmine',
		'Plan',
		false
	);

	pll_register_string(
		'pwd_suurehitus_plan_row_4_text',
		'Anname töö üle. Te võtate vastu, teete makse. Omakorda viime välja ehitusjäätmeid ja isikliku varustuse.',
		'Plan',
		true
	);

	pll_register_string(
		'pwd_suurehitus_plan_row_5_title',
		'Anname garantii',
		'Plan',
		false
	);

	pll_register_string(
		'pwd_suurehitus_plan_row_5_text',
		'Vastavalt seadusandlusele - 2 aastat. Aga! 14 päeva jooksul pärast töö vastuvõtmist, kui on vaja muudatusi teha, siis helistage ja teeme korda.',
		'Plan',
		true
	);


	// Секция "Оставить контакты"
	pll_register_string(
		'pwd_suurehitus_contacts_title',
		'Jäta meile oma kontaktid',
		'Contacts',
		false
	);

	pll_register_string(
		'pwd_suurehitus_contacts_subtitle',
		'Alustame tööd',
		'Contacts',
		false
	);

	pll_register_string(
		'pwd_suurehitus_contacts_text',
		'Kõik on lihtne. Kirjutage telefoninumber ja oma nimi. Helistame tagasi, vastame Teie küsimustele ja asume asja juurde.',
		'Contacts',
		true
	);


	// Секция "FAQ"
	pll_register_string(
		'pwd_suurehitus_faq_title',
		'Küsimus-vastus',
		'FAQ',
		false
	);

	pll_register_string(
		'pwd_suurehitus_faq_subtitle',
		'Korduma kippuvad küsimused',
		'FAQ',
		false
	);

	pll_register_string(
		'pwd_suurehitus_faq_row_1_title',
		'Millistes Eesti maakondades Teie töötate?',
		'FAQ',
		false
	);

	pll_register_string(
		'pwd_suurehitus_faq_row_1_text',
		'80% töödest on teostatud Tallinnas ja Harjumaal. Vajadusel teostame töid ka teistes Eesti osades. Meil on olemas töökogemus Soomes ja Rootsis.',
		'FAQ',
		true
	);

	pll_register_string(
		'pwd_suurehitus_faq_row_2_title',
		'Millised on sisetööde tähtajad?',
		'FAQ',
		false
	);

	pll_register_string(
		'pwd_suurehitus_faq_row_2_text',
		'Kõik sõltub tööde mahust ja keerukusest. Samuti võetakse arvesse aastaaega, ruumi kuivatamiseks mõeldud kütte olemasolu ja muid ehitusnorme. Näiteks täielik tööde tsükkel - kuni 8 nädalat aega kulub 500 m2 piki seinu maja jaoks.',
		'FAQ',
		true
	);

	pll_register_string(
		'pwd_suurehitus_faq_row_3_title',
		'Milliseid materjale Te kasutate?',
		'FAQ',
		false
	);

	pll_register_string(
		'pwd_suurehitus_faq_row_3_text',
		'Nii krohvimiseks kui ka värvimiseks kasutame kauakestvaid ja vastupidavaid materjale. Värvid on ainult veepõhised. Need on veepõhised või vesidispersioon-, akrüül -, lateksvärvid.',
		'FAQ',
		true
	);

	pll_register_string(
		'pwd_suurehitus_faq_row_4_title',
		'Kas on mingeid allahindlusi, kampaaniaid, eripakkumisi?',
		'FAQ',
		false
	);

	pll_register_string(
		'pwd_suurehitus_faq_row_4_text',
		'Allahindlussüsteem on paindlik. Helistage - lepime kokku. SuurEhitusel on võimalik 100% ettemaks, mis annab garantii 5% allahindlusele. Ja Teie tagasiside eest meie töö kohta sotsiaalvõrgustikes teeme 10 m2 tasuta maalritööd (seinte värvimine).',
		'FAQ',
		true
	);

	pll_register_string(
		'pwd_suurehitus_faq_row_5_title',
		'Kuidas maksmine toimub?',
		'FAQ',
		false
	);

	pll_register_string(
		'pwd_suurehitus_faq_row_5_text',
		'Ettemaks 30% lepingus märgitud hinnast. Erinevate siseviimistluse tööde eest makstakse eraldi ja ainult peale valmimist ja.Teie heakskiidu.',
		'FAQ',
		true
	);

	pll_register_string(
		'pwd_suurehitus_faq_row_6_title',
		'Kas ma saan lepingu töö käigus lõpetada?',
		'FAQ',
		false
	);

	pll_register_string(
		'pwd_suurehitus_faq_row_6_text',
		'Jah. Teil on õigus igal ajal ilma põhjust selgitamata ühepoolselt lepingu täitmisest keelduda, makstes tehtud tööde eest. See on lepingus kirjas.',
		'FAQ',
		true
	);


	// Модальное окно с формой
	pll_register_string(
		'pwd_suurehitus_modal_form_title',
		'Tellige teenus',
		'Modal Form',
		false
	);
	
	pll_register_string(
		'pwd_suurehitus_modal_form_subtitle',
		'See on lihtne. Kirjutage oma nimi, telefoninumber ja e-posti aadress. Me helistame teile tagasi, vastame kõigile teie küsimustele ja asume asja juurde.',
		'Modal Form',
		true
	);

	pll_register_string(
		'pwd_suurehitus_modal_form_thanks',
		'Aitäh! Teie taotlus on edukalt saadetud. Võtame teiega peagi ühendust.',
		'Modal Form',
		false
	);

	pll_register_string(
		'pwd_suurehitus_modal_form_please_name',
		'Palun sisestage oma nimi.',
		'Modal Form',
		false
	);

	pll_register_string(
		'pwd_suurehitus_modal_form_please_phone',
		'Palun sisestage oma telefoninumber.',
		'Modal Form',
		false
	);

	pll_register_string(
		'pwd_suurehitus_modal_form_please_email',
		'Palun sisestage oma e-posti aadress.',
		'Modal Form',
		false
	);

	pll_register_string(
		'pwd_suurehitus_modal_form_incorrect_email',
		'Vale e-posti aadress.',
		'Modal Form',
		false
	);

	pll_register_string(
		'pwd_suurehitus_modal_form_name',
		'Nimi',
		'Modal Form',
		false
	);

	pll_register_string(
		'pwd_suurehitus_modal_form_phone',
		'Telefon',
		'Modal Form',
		false
	);

	pll_register_string(
		'pwd_suurehitus_modal_form_email',
		'E-post',
		'Modal Form',
		false
	);

	pll_register_string(
		'pwd_suurehitus_modal_form_accept_text',
		'Annan oma nõusoleku järgmiste andmete töötlemiseks',
		'Modal Form',
		false
	);

	pll_register_string(
		'pwd_suurehitus_modal_form_accept_link',
		'Isikuandmed',
		'Modal Form',
		false
	);

	pll_register_string(
		'pwd_suurehitus_modal_form_button_send',
		'Saada',
		'Modal Form',
		false
	);


	// Политика конфиденциальности
	pll_register_string(
		'pwd_suurehitus_pp_block_1_title',
		'Üldsätted',
		'Policy1',
		false
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_1_subtitle',
		'SuurEhitus OÜ privaatsuspoliitika',
		'Policy1',
		false
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_1_heading_1',
		'Sissejuhatav teave',
		'Policy1',
		false
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_1_text_1',
		'Me töötleme isikuandmeid vastavalt käesolevas privaatsuspoliitikas sätestatud põhimõtetele. Palun võtke aega, et lugeda käesolevat privaatsuspoliitikat ja võtke meiega ühendust, kui teil on sellega seoses küsimusi.',
		'Policy1',
		true
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_1_text_2',
		'Käesolevast privaatsuspoliitikast leiate üksikasjad selle kohta, milliseid isikuandmeid me oma veebisaidi kaudu kogume, miks ja mille alusel me neid kasutame ning kellel on nendele andmetele juurdepääs. Me austame teie õigust kontrollida oma eraelu puutumatust. Seetõttu leiate privaatsuspoliitikast ka teavet selle kohta, kuidas oma õigusi kasutada.',
		'Policy1',
		true
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_1_text_3',
		'Pidage meeles, et me võime oma privaatsuspoliitikat ajakohastada ja tehtud muudatused jõustuvad koheselt.',
		'Policy1',
		true
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_1_heading_2',
		'Vastutav andmetöötleja',
		'Policy1',
		false
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_1_row_1',
		'Ettevõtte nimi: SuurEhitus OÜ',
		'Policy1',
		false
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_1_row_2',
		'Aadress: Akademia tee 4, Tallinn',
		'Policy1',
		false
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_1_row_3',
		'Tel: +372 5833 9290',
		'Policy1',
		false
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_1_row_4',
		'E-posti aadress: suurehitusou@gmail.com',
		'Policy1',
		false
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_1_row_5',
		'Koduleht: suurehitus.ee',
		'Policy1',
		false
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_2_subtitle',
		'Milliseid isikuandmeid me kogume ja kuidas me neid kasutame?',
		'Policy2',
		false
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_2_heading_1',
		'Kontaktvormidelt saadud teave',
		'Policy2',
		false
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_2_text_1',
		'Me töötleme ja salvestame teavet, mida te meile vabatahtlikult meie veebisaidi kaudu edastate. Näiteks kui täidate meie veebisaidil mis tahes kontaktvormi. Kontaktvormide kaudu kogutud isikuandmeid (nimi, e-posti aadress ja telefoninumber) töötleme selleks, et vastata teie päringule. Eespool nimetatud isikuandmete töötlemise toimingu puhul on õiguslikuks aluseks sõltuvalt olukorrast kas andmesubjektiga sõlmitud lepingu täitmine või lepingu sõlmimisele eelnevate meetmete võtmine või andmetöötleja õigustatud huvi. Õigustatud huvi on siinkohal vastutava töötleja huvi vastata andmesubjekti taotlustele.',
		'Policy2',
		true
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_2_text_2',
		'Kui soovite meilt tooteid osta, küsime teie nime, e-posti aadressi ja telefoninumbrit, et täita teie tellimus ja valmistada müük ette. Kui tellite meilt ka paigaldust, töötleme lisaks eespool nimetatud isikuandmetele ka teie aadressi. Selle töötlemise õiguslik alus on isikuandmete töötlemine andmesubjektiga sõlmitud lepingu täitmiseks või lepingu sõlmimisele eelnevate meetmete võtmiseks vastavalt andmesubjekti taotlusele.',
		'Policy2',
		true
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_2_text_3',
		'Kui oleme teie päringule vastanud ja/või tellimuse täitnud, võime teie isikuandmeid säilitada, et hõlbustada teiega edasist suhtlemist. Sellise andmetöötluse õiguslik alus on meie õigustatud huvi tagada kiire suhtlus meie klientide ja teiste inimestega, kes on näidanud üles huvi meie ettevõtte ja selle toodete vastu.',
		'Policy2',
		true
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_2_heading_2',
		'Veebisaidi sirvimise statistika',
		'Policy2',
		false
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_2_text_4',
		'Nagu paljud teisedki veebisaidi omanikud, kogume me statistikat selle kohta, kuidas külastajad meie veebisaiti kasutavad. See statistika on vajalik selleks, et me saaksime paremini mõista oma külastajate käitumist ja parandada meie veebisaidi kasutajakogemust.',
		'Policy2',
		true
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_2_text_5',
		'Veebisaidi külastajate kohta salvestatakse muu hulgas järgmised andmed: brauseri tüüp ja versioon, seadme tüüp ja operatsioonisüsteem, IP-aadress, veebisaidi seansi kestus, külastatud leheküljed ja külastaja asukoht. Me kogume külastajate andmeid ainult anonüümsel kujul ja ei seosta neid ühegi konkreetse isikuga.',
		'Policy2',
		true
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_2_text_6',
		'Veebisaidi külastajate kohta kogutud teabe analüüsimiseks kasutame tööriista Google Analytics.',
		'Policy2',
		true
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_2_heading_3',
		'Uudiskiri',
		'Policy2',
		false
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_2_text_7',
		'Kui liituda meie uudiskirja meililistiga, saadame teile ka edaspidi meie äritegevust ja turunduskampaaniaid, personaalseid pakkumisi ja muid meie ettevõttega seotud teateid.',
		'Policy2',
		true
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_2_text_8',
		'Uudiskirja saatmiseks töötleme teie nime ja e-posti aadressi. Uudiskirja saatmine toimub ainult teie nõusoleku alusel. Kui te ei soovi enam uudiskirja või muid turundusteateid e-posti teel saada, võite end igal ajal vastuvõtjate nimekirjast eemaldada, klõpsates uudiskirja lõpus oleval lingil "eemalda nimekirjast" või "loobu tellimusest".',
		'Policy2',
		true
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_2_text_9',
		'Uudiskirja saatmisega võime koguda statistilisi andmeid teie suhtluse kohta meiega. Näiteks võime analüüsida, kas avasite uudiskirja ja millistele linkidele uudiskirjas klõpsasite.',
		'Policy2',
		true
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_2_text_10',
		'Enne uudiskirja saatmist võime hinnata meie uudiskirja kontaktnimekirjas olevate isikute käitumist. See on vajalik selleks, et saaksime teile saata personaalsemaid e-kirju. Selline töötlemine põhineb meie õigustatud huvil mõista meie kontaktnimekirjas olevate inimeste vajadusi ja eelistusi, et pakkuda neile asjakohasemat teavet.',
		'Policy2',
		true
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_2_heading_4',
		'Küpsised',
		'Policy2',
		false
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_2_text_11',
		'Nagu enamik teisi veebisaite, kasutame ka meie veebisaidil küpsiseid. Küpsis on väike tekstifail, mille veebileht salvestab teie arvutisse või seadmesse, kui külastate veebilehte. See võimaldab veebisaidil mäletada teie tegevusi ja eelistusi pikaks ajaks, nii et te ei pea neid uuesti sisestama, kui külastate veebisaiti uuesti või kui liigute ühelt leheküljelt teisele.',
		'Policy2',
		true
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_2_text_12',
		'Kasutame küpsiseid eelkõige veebisaidi nõuetekohaseks toimimiseks ja veebiliikluse analüüsimiseks ning Facebookis, Instagramis ja/või Google is kuvatava reklaami saatmiseks.',
		'Policy2',
		true
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_2_text_13',
		'Soovi korral saate keelduda küpsiste salvestamisest oma arvutisse või seda piirata. Samuti saate kustutada kõik küpsised, mis on varem teie arvutisse salvestatud. Selleks peate muutma oma veebilehitseja isiklikke privaatsusseadeid. Kui te keelate või piirate küpsiste salvestamist oma arvutisse, ei pruugi mõned funktsioonid siiski toimida.',
		'Policy2',
		true
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_2_heading_5',
		'Kasutame oma veebisaidil järgmisi küpsiseid:',
		'Policy2',
		false
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_2_text_14',
		'Google Analyticsi küpsised - kasutame selliseid küpsiseid, et analüüsida meie veebisaidi külastatavust. Peamiselt kasutame Google Analyticsi küpsiseid, et analüüsida, kas külastajad on uued või korduvad külastajad, milliseid veebilehti nad külastavad, kui kaua nad veebilehel viibivad ja kust külastajad meie veebilehele tulevad. See teave on meile oluline, et saaksime paremini mõista meie veebisaidi külastajate käitumist ja seeläbi parandada meie veebisaidi kasutajakogemust.',
		'Policy2',
		true
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_2_text_15',
		'Samuti kasutame Facebooki ja Google küpsiseid, mis võimaldavad meil suunata Facebookis, Instagramis ja/või Google is kuvatavaid reklaame ning mõõta nende reklaamide tõhusust.',
		'Policy2',
		true
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_3_title',
		'Turvalisus',
		'Policy3',
		false
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_3_subtitle',
		'Kellega võime teie isikuandmeid jagada?',
		'Policy3',
		false
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_3_text_1',
		'Me ei jaga, müü, rendi ega avalda muul viisil teie isikuandmeid, mida me oma veebisaidi kaudu kogume, välja arvatud järgmistel juhtudel:',
		'Policy3',
		true
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_3_text_2',
		'Me võime avaldada teie kohta kogutud teavet meie lepingulistele teenusepakkujatele, kui selline avaldamine võimaldab neil osapooltel pakkuda meile kaubanduslikku, professionaalset või tehnilist tuge.',
		'Policy3',
		true
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_3_text_3',
		'Samuti võime avaldada kolmandatele isikutele anonüümset teavet, mida me oma veebisaidi kaudu kogume. Näiteks võime avaldada teavet meie veebisaidi külastajate arvu või muud statistilist teavet.',
		'Policy3',
		true
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_3_text_4',
		'Meie veebisaidi kontaktvormide kaudu meile edastatud isikuandmete turvalisuse tagamiseks kasutame tehnoloogiat, mis krüpteerib kontaktvormidesse sisestatud teabe. Me võtame ka lisameetmeid, et kaitsta teie isikuandmeid loata avalikustamise eest.',
		'Policy3',
		true
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_3_text_5',
		'Pidage meeles, et vaatamata meie parimatele kavatsustele ja käesolevas privaatsuspoliitikas sätestatud põhimõtetele ei saa me tagada, et sellised edastamis- ja krüpteerimismeetodid tagavad 100%-lise turvalisuse.',
		'Policy3',
		true
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_4_title',
		'Õigused ja võimalused',
		'Policy4',
		false
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_4_subtitle',
		'Teie õigused ja võimalused oma õiguste kasutamiseks',
		'Policy4',
		false
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_4_heading_1',
		'Teil on järgmised õigused',
		'Policy4',
		false
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_4_text_1',
		'õigus taotleda juurdepääsu oma isikuandmetele;',
		'Policy4',
		false
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_4_text_2',
		'õigus taotleda oma isikuandmete parandamist;',
		'Policy4',
		false
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_4_text_3',
		'õigus taotleda oma isikuandmete kustutamist;',
		'Policy4',
		false
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_4_text_4',
		'õigus nõuda oma isikuandmete töötlemise piiramist;',
		'Policy4',
		false
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_4_text_5',
		'õigus esitada vastuväiteid oma isikuandmete töötlemisele;',
		'Policy4',
		false
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_4_text_6',
		'õigus taotleda oma isikuandmete edastamist;',
		'Policy4',
		false
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_4_text_7',
		'kui teie isikuandmete töötlemine põhineb teie nõusolekul, on teil õigus oma nõusolek tagasi võtta.',
		'Policy4',
		true
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_4_text_8',
		'Eespool nimetatud õiguste kasutamiseks võtke meiega ühendust aadressil suurehitusou@gmail.com.',
		'Policy4',
		true
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_4_text_9',
		'Kui te arvate, et teie privaatsust on rikutud, võtke meiega ühendust ülaltoodud e-posti aadressil. Teil on ka õigus esitada kaebus selle riigi andmekaitse järelevalveasutusele, kus te elate. Eestis on selleks Eesti Andmekaitse Inspektsioon (AKI).',
		'Policy4',
		true
	);

	pll_register_string(
		'pwd_suurehitus_pp_block_4_text_10',
		'Seda dokumenti uuendati viimati 03.07.2023.',
		'Policy4',
		false
	);

}

if( ! function_exists( 'pll__' ) ) {
	function pll__( $string ) {
		return $string;
	}
}

if( ! function_exists( 'pll_e' ) ) {
	function pll_e( $string ) {
		echo $string;
	}
}