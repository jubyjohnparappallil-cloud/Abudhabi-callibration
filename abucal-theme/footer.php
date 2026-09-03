<?php
/**
 * Footer template.
 *
 * @package AbuCal
 */
?>
<footer class="site-footer">
	<div class="container footer-inner glass">
		<div class="footer-brand">
			<span class="brand-text">Abu <strong>Dhabi</strong></span>
			<p><?php esc_html_e( 'Precise, ISO-certified calibration and testing services in Abu Dhabi and across the UAE.', 'abucal' ); ?></p>
		</div>

		<div class="footer-links">
			<?php
			if ( has_nav_menu( 'footer' ) ) {
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'container'      => false,
					)
				);
			} else {
				echo '<ul>';
				echo '<li><a href="' . esc_url( home_url( '/#about' ) ) . '">' . esc_html__( 'About', 'abucal' ) . '</a></li>';
				echo '<li><a href="' . esc_url( home_url( '/#services' ) ) . '">' . esc_html__( 'Services', 'abucal' ) . '</a></li>';
				echo '<li><a href="' . esc_url( home_url( '/#industries' ) ) . '">' . esc_html__( 'Industries', 'abucal' ) . '</a></li>';
				echo '<li><a href="' . esc_url( home_url( '/#contact' ) ) . '">' . esc_html__( 'Contact', 'abucal' ) . '</a></li>';
				echo '</ul>';
			}
			?>
		</div>

		<div class="footer-social">
			<a href="#" aria-label="Facebook">f</a>
			<a href="#" aria-label="LinkedIn">in</a>
			<a href="#" aria-label="Instagram">ig</a>
		</div>
	</div>

	<p class="copyright">&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>. <?php esc_html_e( 'All Rights Reserved.', 'abucal' ); ?></p>
</footer>

<?php
/**
 * Floating WhatsApp button (bottom-left).
 * Change the phone number below to your real WhatsApp number (international format, no + or spaces).
 */
$abucal_whatsapp = '971501234567';
?>
<a class="whatsapp-float" href="https://wa.me/<?php echo esc_attr( $abucal_whatsapp ); ?>" target="_blank" rel="noopener" aria-label="<?php esc_attr_e( 'Chat on WhatsApp', 'abucal' ); ?>">
	<svg viewBox="0 0 32 32" width="30" height="30" aria-hidden="true">
		<path fill="#fff" d="M16.001 3.2C8.94 3.2 3.2 8.94 3.2 16c0 2.26.6 4.46 1.73 6.4L3.2 28.8l6.56-1.72A12.74 12.74 0 0 0 16 28.8C23.06 28.8 28.8 23.06 28.8 16S23.06 3.2 16.001 3.2zm0 23.04c-1.98 0-3.92-.53-5.62-1.53l-.4-.24-3.9 1.02 1.04-3.8-.26-.4a10.6 10.6 0 0 1-1.62-5.65c0-5.86 4.77-10.62 10.63-10.62 5.86 0 10.62 4.76 10.62 10.62 0 5.86-4.76 10.63-10.62 10.63zm5.82-7.96c-.32-.16-1.89-.93-2.18-1.04-.29-.11-.5-.16-.71.16-.21.32-.82 1.04-1 1.25-.18.21-.37.24-.69.08-.32-.16-1.35-.5-2.57-1.58-.95-.85-1.59-1.9-1.78-2.22-.18-.32-.02-.49.14-.65.14-.14.32-.37.48-.55.16-.18.21-.32.32-.53.11-.21.05-.4-.03-.56-.08-.16-.71-1.72-.98-2.35-.26-.62-.52-.54-.71-.55l-.6-.01c-.21 0-.55.08-.84.4-.29.32-1.1 1.08-1.1 2.63 0 1.55 1.13 3.05 1.29 3.26.16.21 2.22 3.39 5.38 4.75.75.32 1.34.52 1.8.66.76.24 1.44.21 1.98.13.6-.09 1.89-.77 2.16-1.52.27-.75.27-1.39.19-1.52-.08-.13-.29-.21-.61-.37z"/>
	</svg>
</a>

<?php
/**
 * Language switcher (bottom-right).
 * If a translation plugin (WPML / Polylang / GTranslate) is active it usually
 * adds its own switcher; this is a simple EN / AR toggle placeholder.
 */
?>
<?php
/**
 * Simple chat bot widget (front-end only, canned responses).
 * For a real bot, connect to a service later.
 */
?>
<div class="chatbot" id="chatbot" aria-live="polite">
	<button class="chatbot-toggle" id="chatbotToggle" aria-label="<?php esc_attr_e( 'Open chat', 'abucal' ); ?>">
		<span class="chat-icon-open">💬</span>
		<span class="chat-icon-close">✕</span>
	</button>
	<div class="chatbot-panel glass" id="chatbotPanel" role="dialog" aria-label="<?php esc_attr_e( 'Chat with Abu Dhabi Calibration', 'abucal' ); ?>">
		<div class="chatbot-head">
			<div>
				<strong><?php esc_html_e( 'Abu Dhabi Assistant', 'abucal' ); ?></strong>
				<span class="chatbot-status"><?php esc_html_e( 'Online', 'abucal' ); ?></span>
			</div>
		</div>
		<div class="chatbot-body" id="chatbotBody">
			<div class="chat-msg bot"><?php esc_html_e( 'Hi! 👋 I am the Abu Dhabi Calibration assistant. How can I help you with calibration services today?', 'abucal' ); ?></div>
		</div>
		<div class="chatbot-quick" id="chatbotQuick">
			<button type="button" data-q="services"><?php esc_html_e( 'Your services', 'abucal' ); ?></button>
			<button type="button" data-q="quote"><?php esc_html_e( 'Get a quote', 'abucal' ); ?></button>
			<button type="button" data-q="contact"><?php esc_html_e( 'Contact info', 'abucal' ); ?></button>
			<button type="button" data-q="iso"><?php esc_html_e( 'ISO certified?', 'abucal' ); ?></button>
		</div>
		<form class="chatbot-input" id="chatbotForm">
			<input type="text" id="chatbotText" placeholder="<?php esc_attr_e( 'Type a message…', 'abucal' ); ?>" autocomplete="off" />
			<button type="submit" aria-label="<?php esc_attr_e( 'Send', 'abucal' ); ?>">➤</button>
		</form>
	</div>
</div>

<div class="lang-switch" id="langSwitch">
	<button class="lang-current" aria-haspopup="true" aria-expanded="false">
		<span class="lang-flag">🇬🇧</span> <span>EN</span> <span class="lang-caret">▾</span>
	</button>
	<ul class="lang-list">
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="lang-flag">🇬🇧</span> English</a></li>
		<li><a href="<?php echo esc_url( home_url( '/ar/' ) ); ?>"><span class="lang-flag">🇦🇪</span> العربية</a></li>
	</ul>
</div>

<?php wp_footer(); ?>
</body>
</html>
