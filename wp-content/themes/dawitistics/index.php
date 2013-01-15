<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie7" lang="en" prefix="og:http://ogp.me/ns#"> <![endif]-->
<!--[if IE 7]> <html class="no-js ie7" lang="en" prefix="og:http://ogp.me/ns#"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8" lang="en" prefix="og:http://ogp.me/ns#"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" prefix="og:http://ogp.me/ns#"> <!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/styles/style.css" />
<script src="<?php bloginfo('template_url'); ?>/scripts/modernizr.js"></script>
<title><?php wp_title( '§', true, 'right' ); ?></title>
<?php wp_head(); ?>
</head>

<body>
	<div class="dawit"></div>
	<section class="wrapper">
		<?php query_posts( 'posts_per_page=-1' ); ?>
		<?php if(have_posts()) : ?>
		<?php while(have_posts()) : ?>
		<?php the_post(); ?>

		<article>
			<div class="entry-header">
				<h1><?php the_title(); ?></h1>
			</div>
		</article>
		<?php endwhile; ?>
		<?php endif; ?>

	</section>

	<footer>
		<span class='st_segnalo_large' displayText='Segnalo'></span>
		<span class='st_instagram_large' displayText='Instagram Badge' st_username='dawitistics'></span>
		<span class='st_plusone_large' displayText='Google +1'></span>
		<span class='st_yammer_large' displayText='Yammer'></span>
		<span class='st_yigg_large' displayText='Yigg'></span>
		<span class='st_xing_large' displayText='Xing'></span>
		<span class='st_xerpi_large' displayText='Xerpi'></span>
		<span class='st_xanga_large' displayText='Xanga'></span>
		<span class='st_wordpress_large' displayText='WordPress'></span>
		<span class='st_voxopolis_large' displayText='VOXopolis'></span>
		<span class='st_vkontakte_large' displayText='Vkontakte'></span>
		<span class='st_tumblr_large' displayText='Tumblr'></span>
		<span class='st_virb_large' displayText='Virb'></span>
		<span class='st_viadeo_large' displayText='Viadeo'></span>
		<span class='st_typepad_large' displayText='TypePad'></span>
		<span class='st_technorati_large' displayText='Technorati'></span>
		<span class='st_stumpedia_large' displayText='Stumpedia'></span>
		<span class='st_stumbleupon_large' displayText='StumbleUpon'></span>
		<span class='st_startlap_large' displayText='Startlap'></span>
		<span class='st_startaid_large' displayText='Startaid'></span>
		<span class='st_speedtile_large' displayText='Speedtile'></span>
		<span class='st_sonico_large' displayText='Sonico'></span>
		<span class='st_slashdot_large' displayText='Slashdot'></span>
		<span class='st_friendfeed_large' displayText='FriendFeed'></span>
		<span class='st_raise_your_voice_large' displayText='Raise Your Voice'></span>
		<span class='st_reddit_large' displayText='Reddit'></span>
		<span class='st_orkut_large' displayText='Orkut'></span>
		<span class='st_odnoklassniki_large' displayText='Odnoklassniki'></span>
		<span class='st_oknotizie_large' displayText='Oknotizie'></span>
		<span class='st_netvouz_large' displayText='Netvouz'></span>
		<span class='st_nujij_large' displayText='NUjij'></span>
		<span class='st_newsvine_large' displayText='Newsvine'></span>
		<span class='st_netlog_large' displayText='Netlog'></span>
		<span class='st_n4g_large' displayText='N4G'></span>
		<span class='st_myspace_large' displayText='MySpace'></span>
		<span class='st_moshare_large' displayText='moShare'></span>
		<span class='st_messenger_large' displayText='Messenger'></span>
		<span class='st_mixx_large' displayText='Mixx'></span>
		<span class='st_mister_wong_large' displayText='Mr Wong'></span>
		<span class='st_meneame_large' displayText='Meneame'></span>
		<span class='st_mail_ru_large' displayText='mail.ru'></span>
		<span class='st_livejournal_large' displayText='LiveJournal'></span>
		<span class='st_linkagogo_large' displayText='linkaGoGo'></span>
		<span class='st_instapaper_large' displayText='Instapaper'></span>
		<span class='st_kaboodle_large' displayText='Kaboodle'></span>
		<span class='st_jumptags_large' displayText='Jumptags'></span>
		<span class='st_hyves_large' displayText='Hyves'></span>
		<span class='st_hatena_large' displayText='Hatena'></span>
		<span class='st_identi_large' displayText='identi.ca'></span>
		<span class='st_google_translate_large' displayText='Google Translate'></span>
		<span class='st_google_reader_large' displayText='Google Reader'></span>
		<span class='st_google_bmarks_large' displayText='Bookmarks'></span>
		<span class='st_google_large' displayText='Google'></span>
		<span class='st_fwisp_large' displayText='fwisp'></span>
		<span class='st_funp_large' displayText='Funp'></span>
		<span class='st_edmodo_large' displayText='Edmodo'></span>
		<span class='st_fresqui_large' displayText='Fresqui'></span>
		<span class='st_sharethis_large' displayText='ShareThis'></span>
		<span class='st_formspring_large' displayText='Formspring'></span>
		<span class='st_folkd_large' displayText='folkd.com'></span>
		<span class='st_fashiolista_large' displayText='Fashiolista'></span>
		<span class='st_fark_large' displayText='Fark'></span>
		<span class='st_evernote_large' displayText='Evernote'></span>
		<span class='st_googleplus_large' displayText='Google +'></span>
		<span class='st_dzone_large' displayText='DZone'></span>
		<span class='st_dotnetshoutout_large' displayText='.net Shoutout'></span>
		<span class='st_diigo_large' displayText='Diigo'></span>
		<span class='st_digg_large' displayText='Digg'></span>
		<span class='st_delicious_large' displayText='Delicious'></span>
		<span class='st_dealsplus_large' displayText='Dealspl.us'></span>
		<span class='st_connotea_large' displayText='Connotea'></span>
		<span class='st_citeulike_large' displayText='CiteULike'></span>
		<span class='st_chiq_large' displayText='chiq'></span>
		<span class='st_care2_large' displayText='Care2'></span>
		<span class='st_bus_exchange_large' displayText='Add to BX'></span>
		<span class='st_buffer_large' displayText='Buffer'></span>
		<span class='st_buddymarks_large' displayText='BuddyMarks'></span>
		<span class='st_brainify_large' displayText='Brainify'></span>
		<span class='st_blogger_large' displayText='Blogger'></span>
		<span class='st_blogmarks_large' displayText='Blogmarks'></span>
		<span class='st_blip_large' displayText='Blip'></span>
		<span class='st_blinklist_large' displayText='Blinklist'></span>
		<span class='st_bebo_large' displayText='Bebo'></span>
		<span class='st_baidu_large' displayText='Baidu'></span>
		<span class='st_amazon_wishlist_large' displayText='Amazon Wishlist'></span>
		<span class='st_allvoices_large' displayText='Allvoices'></span>
		<span class='st_adfty_large' displayText='Adfty'></span>
		<span class='st_facebook_large' displayText='Facebook'></span>
		<span class='st_twitter_large' displayText='Tweet'></span>
		<span class='st_linkedin_large' displayText='LinkedIn'></span>
		<span class='st_pinterest_large' displayText='Pinterest'></span>
		<span class='st_email_large' displayText='Email'></span>
		<span class='st_arto_large' displayText='Arto'></span>
		<span class='st_corank_large' displayText='coRank'></span>
		<span class='st_corkboard_large' displayText='Corkboard'></span>
		<span class='st_current_large' displayText='Current'></span>
		<span class='st_sina_large' displayText='Sina'></span>
	</footer>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<script type="text/javascript">var switchTo5x=false;</script>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher: "ur-78fe2706-3324-acc3-649-197f98dc945b"});</script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/script.js"></script>
</body>
</html>