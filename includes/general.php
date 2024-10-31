<?php
/**
 * Table of contents
 * 
 * page_takeover_textdomain ( Translation )
 * page_takeover_enqueues ( Enqueue scripts and styles )
 * page_takeover_get_fonts_regular (  Returns array of regular fonts )
 * page_takeover_get_fonts_google ( Returns array of google fonts )
 * page_takeover_google_fonts_url ( Get the Google Fonts URL )
 * page_takeover_set_cookie ( Set cookie ( impression frequency control )
 * page_takeover_code_comment_start ( Comment code at start )
 * page_takeover_code_comment_end ( Comment code at end )
 * page_takeover_trigger_on_exit ( Script to trigger on exit )
 * page_takover_trigger_on_timeout ( Script to trigger on timeout )
 * page_takeover_get_option ( Get option value )
 * page_takeover_get_option_default ( Get option default value )
 * page_takeover_show_overlay ( Displays the overlay )
 * page_takeover_display ( Display the overlay )
 */

if ( ! function_exists( 'page_takeover_textdomain' ) ) {

	/**
	 * Translation
	 *
	 * @since 1.1.0
	 */
	function page_takeover_textdomain() {
		
		load_plugin_textdomain( 'page-takeover', false, PAGE_TAKEOVER_DIR_NAME . '/languages' ); 

	} add_action( 'init', 'page_takeover_textdomain' );

}

if ( ! function_exists( 'page_takeover_enqueues' ) ) {

	/**
	 * Enqueue Scripts and Styles
	 *
	 * @since 1.1.0
	 */
	function page_takeover_enqueues() {

		if ( ! page_takeover_is_active_placement() ) {
			return;
		}
    
        wp_enqueue_style( 'page-takeover-css', PAGE_TAKEOVER_URL . 'css/page-takeover.css', array(), PAGE_TAKEOVER_VERSION );
        wp_enqueue_style( 'page-takeover-google-fonts', page_takeover_google_fonts_url() );
        
        wp_enqueue_script( 'jquery' );

	} add_action( 'wp_enqueue_scripts', 'page_takeover_enqueues' );

}

if ( ! function_exists( 'page_takeover_get_fonts_regular' ) ) {

    /**
     * Returns array of regular fonts
     *
     * @since 1.1.0
     */
    function page_takeover_get_fonts_regular() {
        return array ( 'Arial', 'Georgia', 'Helvetica', 'Tahoma', 'Times New Roman', 'Verdana' );
    }   

}

if ( ! function_exists( 'page_takeover_get_fonts_google' ) ) {

    /**
     * Returns array of google fonts
     *
     * @since 1.1.0
     */
    function page_takeover_get_fonts_google() {
        return array( 'ABeeZee', 'Abel', 'Abhaya Libre', 'Abril Fatface', 'Aclonica', 'Acme', 'Actor', 'Adamina', 'Advent Pro', 'Aguafina Script', 'Akronim', 'Aladin', 'Aldrich', 'Alef', 'Alegreya', 'Alegreya SC', 'Alegreya Sans', 'Alegreya Sans SC', 'Alex Brush', 'Alfa Slab One', 'Alice', 'Alike', 'Alike Angular', 'Allan', 'Allerta', 'Allerta Stencil', 'Allura', 'Almendra', 'Almendra Display', 'Almendra SC', 'Amarante', 'Amaranth', 'Amatic SC', 'Amatica SC', 'Amethysta', 'Amiko', 'Amiri', 'Amita', 'Anaheim', 'Andada', 'Andika', 'Angkor', 'Annie Use Your Telescope', 'Anonymous Pro', 'Antic', 'Antic Didone', 'Antic Slab', 'Anton', 'Arapey', 'Arbutus', 'Arbutus Slab', 'Architects Daughter', 'Archivo', 'Archivo Black', 'Archivo Narrow', 'Aref Ruqaa', 'Arima Madurai', 'Arimo', 'Arizonia', 'Armata', 'Arsenal', 'Artifika', 'Arvo', 'Arya', 'Asap', 'Asap Condensed', 'Asar', 'Asset', 'Assistant', 'Astloch', 'Asul', 'Athiti', 'Atma', 'Atomic Age', 'Aubrey', 'Audiowide', 'Autour One', 'Average', 'Average Sans', 'Averia Gruesa Libre', 'Averia Libre', 'Averia Sans Libre', 'Averia Serif Libre', 'Bad Script', 'Bahiana', 'Baloo', 'Baloo Bhai', 'Baloo Bhaijaan', 'Baloo Bhaina', 'Baloo Chettan', 'Baloo Da', 'Baloo Paaji', 'Baloo Tamma', 'Baloo Tammudu', 'Baloo Thambi', 'Balthazar', 'Bangers', 'Barrio', 'Basic', 'Battambang', 'Baumans', 'Bayon', 'Belgrano', 'Bellefair', 'Belleza', 'BenchNine', 'Bentham', 'Berkshire Swash', 'Bevan', 'Bigelow Rules', 'Bigshot One', 'Bilbo', 'Bilbo Swash Caps', 'BioRhyme', 'BioRhyme Expanded', 'Biryani', 'Bitter', 'Black Ops One', 'Bokor', 'Bonbon', 'Boogaloo', 'Bowlby One', 'Bowlby One SC', 'Brawler', 'Bree Serif', 'Bubblegum Sans', 'Bubbler One', 'Buda', 'Buenard', 'Bungee', 'Bungee Hairline', 'Bungee Inline', 'Bungee Outline', 'Bungee Shade', 'Butcherman', 'Butterfly Kids', 'Cabin', 'Cabin Condensed', 'Cabin Sketch', 'Caesar Dressing', 'Cagliostro', 'Cairo', 'Calligraffitti', 'Cambay', 'Cambo', 'Candal', 'Cantarell', 'Cantata One', 'Cantora One', 'Capriola', 'Cardo', 'Carme', 'Carrois Gothic', 'Carrois Gothic SC', 'Carter One', 'Catamaran', 'Caudex', 'Caveat', 'Caveat Brush', 'Cedarville Cursive', 'Ceviche One', 'Changa', 'Changa One', 'Chango', 'Chathura', 'Chau Philomene One', 'Chela One', 'Chelsea Market', 'Chenla', 'Cherry Cream Soda', 'Cherry Swash', 'Chewy', 'Chicle', 'Chivo', 'Chonburi', 'Cinzel', 'Cinzel Decorative', 'Clicker Script', 'Coda', 'Coda Caption', 'Codystar', 'Coiny', 'Combo', 'Comfortaa', 'Coming Soon', 'Concert One', 'Condiment', 'Content', 'Contrail One', 'Convergence', 'Cookie', 'Copse', 'Corben', 'Cormorant', 'Cormorant Garamond', 'Cormorant Infant', 'Cormorant SC', 'Cormorant Unicase', 'Cormorant Upright', 'Courgette', 'Cousine', 'Coustard', 'Covered By Your Grace', 'Crafty Girls', 'Creepster', 'Crete Round', 'Crimson Text', 'Croissant One', 'Crushed', 'Cuprum', 'Cutive', 'Cutive Mono', 'Damion', 'Dancing Script', 'Dangrek', 'David Libre', 'Dawning of a New Day', 'Days One', 'Dekko', 'Delius', 'Delius Swash Caps', 'Delius Unicase', 'Della Respira', 'Denk One', 'Devonshire', 'Dhurjati', 'Didact Gothic', 'Diplomata', 'Diplomata SC', 'Domine', 'Donegal One', 'Doppio One', 'Dorsa', 'Dosis', 'Dr Sugiyama', 'Droid Sans', 'Droid Sans Mono', 'Droid Serif', 'Duru Sans', 'Dynalight', 'EB Garamond', 'Eagle Lake', 'Eater', 'Economica', 'Eczar', 'El Messiri', 'Electrolize', 'Elsie', 'Elsie Swash Caps', 'Emblema One', 'Emilys Candy', 'Encode Sans', 'Encode Sans Condensed', 'Encode Sans Expanded', 'Encode Sans Semi Condensed', 'Encode Sans Semi Expanded', 'Engagement', 'Englebert', 'Enriqueta', 'Erica One', 'Esteban', 'Euphoria Script', 'Ewert', 'Exo', 'Exo 2', 'Expletus Sans', 'Fanwood Text', 'Farsan', 'Fascinate', 'Fascinate Inline', 'Faster One', 'Fasthand', 'Fauna One', 'Faustina', 'Federant', 'Federo', 'Felipa', 'Fenix', 'Finger Paint', 'Fira Mono', 'Fira Sans', 'Fira Sans Condensed', 'Fira Sans Extra Condensed', 'Fjalla One', 'Fjord One', 'Flamenco', 'Flavors', 'Fondamento', 'Fontdiner Swanky', 'Forum', 'Francois One', 'Frank Ruhl Libre', 'Freckle Face', 'Fredericka the Great', 'Fredoka One', 'Freehand', 'Fresca', 'Frijole', 'Fruktur', 'Fugaz One', 'GFS Didot', 'GFS Neohellenic', 'Gabriela', 'Gafata', 'Galada', 'Galdeano', 'Galindo', 'Gentium Basic', 'Gentium Book Basic', 'Geo', 'Geostar', 'Geostar Fill', 'Germania One', 'Gidugu', 'Gilda Display', 'Give You Glory', 'Glass Antiqua', 'Glegoo', 'Gloria Hallelujah', 'Goblin One', 'Gochi Hand', 'Gorditas', 'Goudy Bookletter 1911', 'Graduate', 'Grand Hotel', 'Gravitas One', 'Great Vibes', 'Griffy', 'Gruppo', 'Gudea', 'Gurajada', 'Habibi', 'Halant', 'Hammersmith One', 'Hanalei', 'Hanalei Fill', 'Handlee', 'Hanuman', 'Happy Monkey', 'Harmattan', 'Headland One', 'Heebo', 'Henny Penny', 'Herr Von Muellerhoff', 'Hind', 'Hind Guntur', 'Hind Madurai', 'Hind Siliguri', 'Hind Vadodara', 'Holtwood One SC', 'Homemade Apple', 'Homenaje', 'IM Fell DW Pica', 'IM Fell DW Pica SC', 'IM Fell Double Pica', 'IM Fell Double Pica SC', 'IM Fell English', 'IM Fell English SC', 'IM Fell French Canon', 'IM Fell French Canon SC', 'IM Fell Great Primer', 'IM Fell Great Primer SC', 'Iceberg', 'Iceland', 'Imprima', 'Inconsolata', 'Inder', 'Indie Flower', 'Inika', 'Inknut Antiqua', 'Irish Grover', 'Istok Web', 'Italiana', 'Italianno', 'Itim', 'Jacques Francois', 'Jacques Francois Shadow', 'Jaldi', 'Jim Nightshade', 'Jockey One', 'Jolly Lodger', 'Jomhuria', 'Josefin Sans', 'Josefin Slab', 'Joti One', 'Judson', 'Julee', 'Julius Sans One', 'Junge', 'Jura', 'Just Another Hand', 'Just Me Again Down Here', 'Kadwa', 'Kalam', 'Kameron', 'Kanit', 'Kantumruy', 'Karla', 'Karma', 'Katibeh', 'Kaushan Script', 'Kavivanar', 'Kavoon', 'Kdam Thmor', 'Keania One', 'Kelly Slab', 'Kenia', 'Khand', 'Khmer', 'Khula', 'Kite One', 'Knewave', 'Kotta One', 'Koulen', 'Kranky', 'Kreon', 'Kristi', 'Krona One', 'Kumar One', 'Kumar One Outline', 'Kurale', 'La Belle Aurore', 'Laila', 'Lakki Reddy', 'Lalezar', 'Lancelot', 'Lateef', 'Lato', 'League Script', 'Leckerli One', 'Ledger', 'Lekton', 'Lemon', 'Lemonada', 'Libre Barcode 128', 'Libre Barcode 128 Text', 'Libre Barcode 39', 'Libre Barcode 39 Extended', 'Libre Barcode 39 Extended Text', 'Libre Barcode 39 Text', 'Libre Baskerville', 'Libre Franklin', 'Life Savers', 'Lilita One', 'Lily Script One', 'Limelight', 'Linden Hill', 'Lobster', 'Lobster Two', 'Londrina Outline', 'Londrina Shadow', 'Londrina Sketch', 'Londrina Solid', 'Lora', 'Love Ya Like A Sister', 'Loved by the King', 'Lovers Quarrel', 'Luckiest Guy', 'Lusitana', 'Lustria', 'Macondo', 'Macondo Swash Caps', 'Mada', 'Magra', 'Maiden Orange', 'Maitree', 'Mako', 'Mallanna', 'Mandali', 'Manuale', 'Marcellus', 'Marcellus SC', 'Marck Script', 'Margarine', 'Marko One', 'Marmelad', 'Martel', 'Martel Sans', 'Marvel', 'Mate', 'Mate SC', 'Maven Pro', 'McLaren', 'Meddon', 'MedievalSharp', 'Medula One', 'Meera Inimai', 'Megrim', 'Meie Script', 'Merienda', 'Merienda One', 'Merriweather', 'Merriweather Sans', 'Metal', 'Metal Mania', 'Metamorphous', 'Metrophobic', 'Michroma', 'Milonga', 'Miltonian', 'Miltonian Tattoo', 'Miniver', 'Miriam Libre', 'Mirza', 'Miss Fajardose', 'Mitr', 'Modak', 'Modern Antiqua', 'Mogra', 'Molengo', 'Molle', 'Monda', 'Monofett', 'Monoton', 'Monsieur La Doulaise', 'Montaga', 'Montez', 'Montserrat', 'Montserrat Alternates', 'Montserrat Subrayada', 'Moul', 'Moulpali', 'Mountains of Christmas', 'Mouse Memoirs', 'Mr Bedfort', 'Mr Dafoe', 'Mr De Haviland', 'Mrs Saint Delafield', 'Mrs Sheppards', 'Mukta', 'Mukta Mahee', 'Mukta Malar', 'Mukta Vaani', 'Muli', 'Mystery Quest', 'NTR', 'Neucha', 'Neuton', 'New Rocker', 'News Cycle', 'Niconne', 'Nixie One', 'Nobile', 'Nokora', 'Norican', 'Nosifer', 'Nothing You Could Do', 'Noticia Text', 'Noto Sans', 'Noto Serif', 'Nova Cut', 'Nova Flat', 'Nova Mono', 'Nova Oval', 'Nova Round', 'Nova Script', 'Nova Slim', 'Nova Square', 'Numans', 'Nunito', 'Nunito Sans', 'Odor Mean Chey', 'Offside', 'Old Standard TT', 'Oldenburg', 'Oleo Script', 'Oleo Script Swash Caps', 'Open Sans', 'Open Sans Condensed', 'Oranienbaum', 'Orbitron', 'Oregano', 'Orienta', 'Original Surfer', 'Oswald', 'Over the Rainbow', 'Overlock', 'Overlock SC', 'Overpass', 'Overpass Mono', 'Ovo', 'Oxygen', 'Oxygen Mono', 'PT Mono', 'PT Sans', 'PT Sans Caption', 'PT Sans Narrow', 'PT Serif', 'PT Serif Caption', 'Pacifico', 'Padauk', 'Palanquin', 'Palanquin Dark', 'Pangolin', 'Paprika', 'Parisienne', 'Passero One', 'Passion One', 'Pathway Gothic One', 'Patrick Hand', 'Patrick Hand SC', 'Pattaya', 'Patua One', 'Pavanam', 'Paytone One', 'Peddana', 'Peralta', 'Permanent Marker', 'Petit Formal Script', 'Petrona', 'Philosopher', 'Piedra', 'Pinyon Script', 'Pirata One', 'Plaster', 'Play', 'Playball', 'Playfair Display', 'Playfair Display SC', 'Podkova', 'Poiret One', 'Poller One', 'Poly', 'Pompiere', 'Pontano Sans', 'Poppins', 'Port Lligat Sans', 'Port Lligat Slab', 'Pragati Narrow', 'Prata', 'Preahvihear', 'Press Start 2P', 'Pridi', 'Princess Sofia', 'Prociono', 'Prompt', 'Prosto One', 'Proza Libre', 'Puritan', 'Purple Purse', 'Quando', 'Quantico', 'Quattrocento', 'Quattrocento Sans', 'Questrial', 'Quicksand', 'Quintessential', 'Qwigley', 'Racing Sans One', 'Radley', 'Rajdhani', 'Rakkas', 'Raleway', 'Raleway Dots', 'Ramabhadra', 'Ramaraja', 'Rambla', 'Rammetto One', 'Ranchers', 'Rancho', 'Ranga', 'Rasa', 'Rationale', 'Ravi Prakash', 'Redressed', 'Reem Kufi', 'Reenie Beanie', 'Revalia', 'Rhodium Libre', 'Ribeye', 'Ribeye Marrow', 'Righteous', 'Risque', 'Roboto', 'Roboto Condensed', 'Roboto Mono', 'Roboto Slab', 'Rochester', 'Rock Salt', 'Rokkitt', 'Romanesco', 'Ropa Sans', 'Rosario', 'Rosarivo', 'Rouge Script', 'Rozha One', 'Rubik', 'Rubik Mono One', 'Ruda', 'Rufina', 'Ruge Boogie', 'Ruluko', 'Rum Raisin', 'Ruslan Display', 'Russo One', 'Ruthie', 'Rye', 'Sacramento', 'Sahitya', 'Sail', 'Saira', 'Saira Condensed', 'Saira Extra Condensed', 'Saira Semi Condensed', 'Salsa', 'Sanchez', 'Sancreek', 'Sansita', 'Sarala', 'Sarina', 'Sarpanch', 'Satisfy', 'Scada', 'Scheherazade', 'Schoolbell', 'Scope One', 'Seaweed Script', 'Secular One', 'Sedgwick Ave', 'Sedgwick Ave Display', 'Sevillana', 'Seymour One', 'Shadows Into Light', 'Shadows Into Light Two', 'Shanti', 'Share', 'Share Tech', 'Share Tech Mono', 'Shojumaru', 'Short Stack', 'Shrikhand', 'Siemreap', 'Sigmar One', 'Signika', 'Signika Negative', 'Simonetta', 'Sintony', 'Sirin Stencil', 'Six Caps', 'Skranji', 'Slabo 13px', 'Slabo 27px', 'Slackey', 'Smokum', 'Smythe', 'Sniglet', 'Snippet', 'Snowburst One', 'Sofadi One', 'Sofia', 'Sonsie One', 'Sorts Mill Goudy', 'Source Code Pro', 'Source Sans Pro', 'Source Serif Pro', 'Space Mono', 'Special Elite', 'Spectral', 'Spicy Rice', 'Spinnaker', 'Spirax', 'Squada One', 'Sree Krushnadevaraya', 'Sriracha', 'Stalemate', 'Stalinist One', 'Stardos Stencil', 'Stint Ultra Condensed', 'Stint Ultra Expanded', 'Stoke', 'Strait', 'Sue Ellen Francisco', 'Suez One', 'Sumana', 'Sunshiney', 'Supermercado One', 'Sura', 'Suranna', 'Suravaram', 'Suwannaphum', 'Swanky and Moo Moo', 'Syncopate', 'Tangerine', 'Taprom', 'Tauri', 'Taviraj', 'Teko', 'Telex', 'Tenali Ramakrishna', 'Tenor Sans', 'Text Me One', 'The Girl Next Door', 'Tienne', 'Tillana', 'Timmana', 'Tinos', 'Titan One', 'Titillium Web', 'Trade Winds', 'Trirong', 'Trocchi', 'Trochut', 'Trykker', 'Tulpen One', 'Ubuntu', 'Ubuntu Condensed', 'Ubuntu Mono', 'Ultra', 'Uncial Antiqua', 'Underdog', 'Unica One', 'UnifrakturCook', 'UnifrakturMaguntia', 'Unkempt', 'Unlock', 'Unna', 'VT323', 'Vampiro One', 'Varela', 'Varela Round', 'Vast Shadow', 'Vesper Libre', 'Vibur', 'Vidaloka', 'Viga', 'Voces', 'Volkhov', 'Vollkorn', 'Voltaire', 'Waiting for the Sunrise', 'Wallpoet', 'Walter Turncoat', 'Warnes', 'Wellfleet', 'Wendy One', 'Wire One', 'Work Sans', 'Yanone Kaffeesatz', 'Yantramanav', 'Yatra One', 'Yellowtail', 'Yeseva One', 'Yesteryear', 'Yrsa', 'Zeyada', 'Zilla Slab', 'Zilla Slab Highlight' );
    }

}

if ( ! function_exists( 'page_takeover_google_fonts_url' ) ) {

	/**
	 * Get the Google Fonts URL
	 * 
	 * @since 1.1.0
	 */
	function page_takeover_google_fonts_url() {				

		$title_font = page_takeover_get_option( 'title_font' );
		$subtitle_font = page_takeover_get_option( 'subtitle_font' );
		$button_font = page_takeover_get_option( 'button_font' );
		$decline_font = page_takeover_get_option( 'decline_font' );
		$newsletter_input_font = page_takeover_get_option( 'newsletter_input_font_family' );
		$newsletter_button_font = page_takeover_get_option( 'newsletter_button_font_family' );
		
		$page_takeover_active_fonts = array( $title_font, $subtitle_font, $button_font, $decline_font, $newsletter_input_font, $newsletter_button_font );

		$page_takeover_font_delimiter = '';
		$page_takeover_font_string = '';
		
		if ( is_array( $page_takeover_active_fonts ) ) {

			foreach ( $page_takeover_active_fonts as $val ) {
				
				switch ( $val ) {
					case 'Arial':
					case 'Georgia':
					case 'Helvetica':
					case 'Tahoma':
					case 'Times New Roman':
					case 'Verdana':
						break;
					default:
						$page_takeover_font_string .= $page_takeover_font_delimiter . $val;
						$page_takeover_font_delimiter = '|';
						break;
				}

			}

		}    

		return '//fonts.googleapis.com/css?family=' . $page_takeover_font_string;

	}

}

if ( ! function_exists( 'page_takeover_set_cookie' ) ) {

	/**
	 * Set cookie ( impression frequency control )
	 * 
	 * @since 1.1.0
	 */
	function page_takeover_set_cookie() {

		if ( ! page_takeover_is_active_placement() ) {
			return;
		}
		
		$frequency = page_takeover_get_option( 'frequency' );

		if ( ! is_admin() && ! isset( $_COOKIE['page_takeover_campaign'] ) ) {
			
			if ( empty($frequency) || $frequency == 0 ) {
				// no cookie
			} elseif ($frequency == 1) {
				setcookie('page_takeover_campaign', 1, 0, COOKIEPATH, COOKIE_DOMAIN, is_ssl());
			} elseif ($frequency == 2) {
				setcookie('page_takeover_campaign', 1, time()+3600*24*1, COOKIEPATH, COOKIE_DOMAIN, is_ssl());
			} elseif ($frequency == 3) {
				setcookie('page_takeover_campaign', 1, time()+3600*24*7, COOKIEPATH, COOKIE_DOMAIN, is_ssl());
			}

		}

	} add_action( 'init', 'page_takeover_set_cookie');

}

if ( ! function_exists( 'page_takeover_code_comment_start' ) ) {

	/**
	 * Comment code at beggining
	 */
	function page_takeover_code_comment_start() {
		return "\n<!-- " . __('Full-screen overlay created by Page Takeover', 'page-takeover') . " -->\n<!-- https://wordpress.org/plugins/page-takeover/ -->\n";
	}

}

if ( ! function_exists( 'page_takeover_code_comment_end' ) ) {

	/**
	 * Comment code at end
	 */
	function page_takeover_code_comment_end() {
		return "\n<!-- / " . __('Page Takeover', 'page-takeover') . " -->\n";
	}

}

if ( ! function_exists( 'page_takeover_trigger_on_exit' ) ) {

	/**
	 * Script to trigger on exit
	 * 
	 * @since 1.1.0
	 */
	function page_takeover_trigger_on_exit() {
		
		ob_start();
		?>
			<script>
				setTimeout(() => {
					jQuery(document).on('mouseout', evt => {
						if(evt.toElement === null && evt.relatedTarget === null) {
							jQuery(evt.currentTarget).off('mouseout');
							jQuery('.page-takeover').show();
						}
					});
				}, 3000);
			</script>
		<?php
		$output = ob_get_contents();
		ob_end_clean();

		return $output;

	}

}

if ( ! function_exists( 'page_takover_trigger_on_timeout' ) ) {

	/**
	 * Trigger on timeout
	 * 
	 * @since 1.1.0
	 */
	function page_takeover_trigger_on_timeout() {

		$trigger_timeout = page_takeover_get_option( 'trigger' );
		
		if ( empty( $trigger_timeout ) ) {
			$trigger_timeout = 0;
		}

		ob_start();
		?>
			<script>
				jQuery(document).ready(function(){
					setTimeout(function(){
						jQuery('.page-takeover').show();
					}, <?php echo $trigger_timeout; ?>000)
				});
			</script>
		<?php
		$output = ob_get_contents();
		ob_end_clean();

		return $output;

	}

}

if ( ! function_exists( 'page_takeover_get_option' ) ) {

	/**
	 * Get the value for an option
	 * 
	 * @since 1.1.0
	 */
	function page_takeover_get_option( $option_id = false ) {

		// no option id supplied, return
		if ( ! $option_id ) return;

		// get option value
		$option_value = get_option( PAGE_TAKOVER_OPTION_PREFIX . $option_id, page_takeover_get_option_default( $option_id ) );

		// pass it back
		return $option_value;

	}

}

if ( ! function_exists( 'page_takeover_get_option_default' ) ) {

	/**
	 * Get the default value for an option
	 * 
	 * @since 1.1.0
	 */
	function page_takeover_get_option_default( $option_id = false ) {

		// no option id supplied, return
		if ( ! $option_id ) return;

		// get all settings
		$settings = page_takeover_get_settings();

		// if default value set return it
		if ( ! empty( $settings[$option_id]['default'] ) ) {
			return $settings[$option_id]['default'];
		}
		
		// no default value
		return;

	}

}

if ( ! function_exists( 'page_takeover_show_overlay' ) ) {

	/**
	 * Display the overlay
	 * 
	 * @since 1.1.0
	 */
	function page_takeover_show_overlay() {

		if ( ! page_takeover_is_active_placement() ) {
			return;
		}
		
		$status = page_takeover_get_option( 'status' );
		
		if ( isset( $_COOKIE['page_takeover_campaign'] ) ) {
			// do nothing
		} else if ( $status == 'active' ) {
			page_takeover_display();
		}

	} add_action( 'wp_footer', 'page_takeover_show_overlay' );

}

if ( ! function_exists( 'page_takeover_display' ) ) {

	/**
	 * Display the takeover
	 * 
	 * @since 1.1.0
	 */
	function page_takeover_display() {

		// todo

		// Comment before takeover
		if ( ! is_admin() ) echo page_takeover_code_comment_start(); 		 

		?>

		<style>
			.page-takeover-container {
				<?php if ( ! empty( page_takeover_get_option( 'main_bg_color' ) ) ) : ?> background: <?php echo page_takeover_get_option( 'main_bg_color' ); ?>;<?php endif; ?>
				<?php if ( ! empty( page_takeover_get_option( 'main_padding' ) ) ) : ?> padding: <?php echo page_takeover_get_option( 'main_padding' ); ?>;<?php endif; ?>
			}
			#page-takeover-title {
				font-family:<?php echo page_takeover_get_option( 'title_font' ); ?>;
				font-size:<?php echo page_takeover_get_option( 'title_size' ); ?>;
				color:<?php echo page_takeover_get_option( 'title_color' ); ?>;
			}
			#page-takeover-subtitle-inner {
				font-family:<?php echo page_takeover_get_option( 'subtitle_font'); ?>;
				font-size:<?php echo page_takeover_get_option( 'subtitle_size'); ?>;
				color:<?php echo page_takeover_get_option( 'subtitle_color'); ?>;
			}
			#page-takeover-newsletter-input-email {
				font-family:<?php echo page_takeover_get_option( 'newsletter_input_font_family'); ?>;
				font-size:<?php echo page_takeover_get_option( 'newsletter_input_font_size'); ?>;
				color:<?php echo page_takeover_get_option( 'newsletter_input_color'); ?>;
				background-color:<?php echo page_takeover_get_option( 'newsletter_input_bg_color'); ?>;
			}
			#page-takeover-newsletter-input-email::placeholder {
				color:<?php echo page_takeover_get_option( 'newsletter_input_color'); ?>;
			}
			#page-takeover-newsletter-submit {
				font-family:<?php echo page_takeover_get_option( 'newsletter_button_font_family'); ?>;
				font-size:<?php echo page_takeover_get_option( 'newsletter_button_font_size'); ?>;
				color:<?php echo page_takeover_get_option( 'newsletter_button_color'); ?>;
				background-color:<?php echo page_takeover_get_option( 'newsletter_button_bg_color'); ?>;
			}
			#page-takeover-button {
				color:<?php echo page_takeover_get_option( 'button_color' ); ?>;
				display: <?php echo page_takeover_get_option( 'button_state' ); ?>;
			}
			#page-takeover-button a {
				font-family:<?php echo page_takeover_get_option( 'button_font' ); ?>;
				font-size:<?php echo page_takeover_get_option( 'button_size' ); ?>;
				background-color:<?php echo page_takeover_get_option( 'button_background' ); ?>;
			}
			#page-takeover-decline {
				font-family:<?php echo page_takeover_get_option( 'decline_font' ); ?>;
				font-size:<?php echo page_takeover_get_option( 'decline_size'); ?>;
				color:<?php echo page_takeover_get_option( 'decline_color' ); ?>;
			}
			<?php if ( ! empty( page_takeover_get_option( 'custom_css' ) ) ) echo page_takeover_get_option( 'custom_css' ); ?>
		</style>
		<div id="page-takeover-output" class="page-takeover" style="background-color:<?php echo page_takeover_get_option( 'background' ); ?>;">

			<?php if ( ! is_admin() ) : ?>
				<div id="page-takeover-close-button" class="page-takeover-close-button"></div>
			<?php endif; ?>

			<div id="page-takeover-container" class="page-takeover-container">

				<div id="page-takeover-inner" class="page-takeover-overlay">

					<div class="page-takeover-custom-content-before"><?php
						if ( is_admin() ) {
							echo page_takeover_get_option( 'custom_content_before' ); 
						} else {
							echo do_shortcode( page_takeover_get_option( 'custom_content_before' ) ); 
						}
					?></div>

					<div id="page-takeover-title" class="page-takeover-title"><?php echo page_takeover_get_option('title'); ?></div>

					<div id="page-takeover-subtitle-inner" class="page-takeover-subtitle"><?php echo do_shortcode( page_takeover_get_option( 'subtitle' ) ); ?></div>
					
					<?php $newsletter_url = page_takeover_get_option( 'newsletter_url' ); ?>
					<?php if ( $newsletter_url ) : ?>
						<div class="page-takeover-newsletter">
							<!-- Begin Mailchimp Signup Form -->
							<form action="<?php echo esc_url( $newsletter_url ); ?>" method="post" target="_blank">
								<div class="page-takeover-newsletter-form-main">
									<input id="page-takeover-newsletter-input-email" type="email" value="" name="EMAIL" placeholder="john@example.com">
									<input id="page-takeover-newsletter-submit" type="submit" value="Subscribe" name="subscribe">
								</div>
								<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_926e5e9cb73f9dfb8eaf88897_71a64de1f0" tabindex="-1" value=""></div>
							</form>
						</div><!-- .page-takeover-newsletter -->
					<?php endif; ?>
					
					<?php
						$button_url = page_takeover_get_option( 'button_url' );
						if ( is_admin() ) $button_url = '#';

						$button_class = 'page-takeover-button';
						if ( page_takeover_get_option( 'button_close_takeover' ) == 'enabled' ) {
							$button_class .= ' page-takeover-trigger-close';
						}
					?>
					<?php if ( page_takeover_get_option( 'button_state' ) == 'block' || is_admin() ) : ?>
						<div id="page-takeover-button" class="<?php echo esc_attr( $button_class ); ?>">
							<a href="<?php echo $button_url; ?>" target="<?php echo esc_attr( page_takeover_get_option( 'button_target') ); ?>" rel="<?php echo esc_attr( page_takeover_get_option( 'button_rel') ); ?>"><?php echo page_takeover_get_option( 'button'); ?></a>
						</div><!-- .page-takeover-button -->
					<?php endif; ?>

					<div id="page-takeover-decline" class="page-takeover-decline"><?php echo page_takeover_get_option( 'decline' ); ?></div>

					<div class="page-takeover-custom-content-after"><?php 
						if ( is_admin() ) {
							echo page_takeover_get_option( 'custom_content_after' ); 
						} else {
							echo do_shortcode( page_takeover_get_option( 'custom_content_after' ) ); 
						}
					?></div>

				</div><!--page-takeover-overlay-->

			</div><!--page-takeover-container-->

		</div><!--page-takeover-output-->

		<?php if ( ! is_admin() ) : ?>

			<?php 

				$trigger_type = page_takeover_get_option( 'trigger_type' );
				$trigger_selector = page_takeover_get_option( 'trigger_selector' );

				// Trigger on exit
				if ( $trigger_type == 'exit' ) {
					echo page_takeover_trigger_on_exit();   
				
				// Trigger on timeout
				} elseif ( $trigger_type == 'time' ) {
					echo page_takeover_trigger_on_timeout(); 
				}

			?>

			<script>
				// hide on decline click
				jQuery( '#page-takeover-decline, .page-takeover-trigger-close' ).on( 'click', function () {
					jQuery( '.page-takeover' ).hide();
				});
				// hide on close click
				jQuery( '#page-takeover-close-button' ).on( 'click', function () {
					jQuery( '.page-takeover' ).hide();
				});
				<?php if ( ! empty( $trigger_selector ) ) : ?>
					jQuery(document).on( 'click', '<?php echo sanitize_text_field( $trigger_selector ); ?>', function(){
						jQuery('.page-takeover').show();
					});
				<?php endif; ?>
			</script>

		<?php endif; ?>

		<?php 

		// Comment after takover
		if ( ! is_admin() ) echo page_takeover_code_comment_end();		

	}

}

if ( ! function_exists( 'page_takeover_is_active_placement' ) ) {

	/**
	 * Determine if page takeover should show on the current page
	 * 
	 * @since 1.1.5
	 */
	function page_takeover_is_active_placement() {		

		$placement = page_takeover_get_option( 'placement' );

		// '0' is sitewide, always true
		if ( $placement === '0' ) {
			return true;

		// '1' is custom defined, check further
		} elseif ( $placement === '1' ) {

			// get the custom placement
			$placement_custom = page_takeover_get_option( 'placement_custom' );

			// if empty return false
			if ( empty( $placement_custom ) ) {
				return false;

			// otherwise parse and check
			} else {
				
				// get the ID
				wp_reset_postdata();
				$page_id = get_the_ID();

				// turn rules into an array
				$placement_custom = explode( ',', $placement_custom );

				// go through each rule
				foreach ( $placement_custom as $placement_custom_item ) {

					$placement_custom_item = trim( $placement_custom_item );

					// if is numeric check the post/page ID
					if ( is_numeric( $placement_custom_item ) ) {
						if ( is_singular() && $placement_custom_item == $page_id ) {
							return true;
						}

					// not numeric, check the specific slugs
					} else {

						if ( $placement_custom_item == 'home' && ( is_front_page() || is_home() ) ) {
							return true;
						} elseif ( $placement_custom_item == 'search' && is_search() ) {
							return true;
						} elseif ( $placement_custom_item == 'notfound' && is_404() ) {
							return true;
						} elseif ( $placement_custom_item == 'archive' && is_archive() ) {
							return true;
						}

					}

				}
				
			}
			

		}

		// nothing matches, return false
		return false;

	}

}