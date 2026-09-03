<?php
/**
 * Template Name: FAQ Page
 * A designed FAQ accordion for Abu Dhabi Calibration.
 *
 * @package AbuCal
 */

get_header();

$faqs = array(
	array(
		'What types of calibration services does Abu Dhabi Calibration provide?',
		'We offer calibration services for a wide range of equipment, including electrical, mechanical, and thermal instruments. Our services ensure that your instruments meet the necessary accuracy and compliance standards.',
	),
	array(
		'How often should my equipment be calibrated?',
		'Calibration frequency depends on the instrument type, usage, and industry regulations. Many instruments are calibrated every 6 to 12 months. Our team can recommend a schedule tailored to your equipment.',
	),
	array(
		'What is HSE training, and why is it important?',
		'HSE (Health, Safety & Environment) training equips your team with the skills to operate equipment safely and respond correctly to hazards. It reduces workplace incidents and supports regulatory compliance.',
	),
	array(
		'What does Portable Appliance Testing (PAT) involve?',
		'PAT involves visual inspection, earth continuity testing, insulation resistance testing, and functional checks of portable electrical appliances, followed by labelling and reporting.',
	),
	array(
		'What industries does Abu Dhabi Calibration serve?',
		'We serve oil & gas, marine, manufacturing, water treatment, defence & aviation, power & energy, bio-medical, pharmaceutical, refineries, hospitality, engineering, cement, and food & dairy sectors.',
	),
	array(
		'How can I schedule HSE training for my team?',
		'Simply contact us with your team size and preferred topics. We arrange on-site or in-lab sessions at a time that suits your operations.',
	),
	array(
		'How often should pressure gauges be calibrated?',
		'Pressure gauges are typically calibrated every 6 to 12 months, or more frequently in critical or high-use applications. We help you set the right interval.',
	),
	array(
		'Why is temperature mapping necessary if we already have continuous monitoring?',
		'Continuous monitoring records conditions at fixed sensor points, while temperature mapping proves uniformity across an entire space, identifying hot and cold spots that single sensors may miss.',
	),
	array(
		'How long should a temperature mapping study be conducted?',
		'A typical study runs for at least 24 to 72 hours to capture normal operating cycles, including door openings and load changes. Longer studies may be needed for validation.',
	),
	array(
		'When should temperature mapping be repeated?',
		'Repeat mapping after significant changes (layout, HVAC, load), following major maintenance, or on a periodic basis (often annually) as part of good practice.',
	),
	array(
		'What should be included in a temperature mapping protocol?',
		'A protocol should define objectives, sensor placement, acceptance criteria, study duration, equipment used, and reporting requirements.',
	),
	array(
		'How can organizations standardize temperature mapping across multiple facilities?',
		'By using consistent protocols, calibrated equipment, standardized sensor placement, and uniform acceptance criteria across all sites.',
	),
	array(
		'What certifications does Abu Dhabi Calibration hold?',
		'We operate under ISO 9001:2015 and align with ISO/IEC 17025:2017, ensuring competent, impartial, and traceable calibration services.',
	),
	array(
		'How do I know if my equipment passed the PAT test?',
		'After testing, we provide a detailed report and a label on each appliance indicating whether it passed or failed, along with any required actions.',
	),
	array(
		'What are the benefits of using Abu Dhabi Calibration?',
		'Accurate, traceable results; fast turnaround; on-site and in-lab options; ISO-aligned quality; and dedicated support across Abu Dhabi and the UAE.',
	),
	array(
		'Why is calibration important, and how does it impact my business?',
		'Calibration ensures measurement accuracy, reduces errors and rework, keeps you compliant, prevents costly downtime, and protects product quality and safety.',
	),
	array(
		'How do I choose the right calibration service provider in the UAE?',
		'Look for accreditation, traceability, experienced technicians, a broad service range, fast turnaround, and strong customer support, all of which we provide.',
	),
	array(
		'Is there a difference between lab calibration and field calibration?',
		'Yes. Lab calibration is performed in controlled conditions for the highest accuracy, while field (on-site) calibration is done at your location to reduce downtime. We offer both.',
	),
	array(
		'What is DKD pressure calibration?',
		'DKD refers to calibration performed to recognized German (DKD/DAkkS) guidelines for pressure, providing high-accuracy, traceable results for demanding applications.',
	),
	array(
		'What does USP <1079> recommend for temperature mapping and storage qualification?',
		'USP <1079> provides good storage and distribution practices for temperature-sensitive products, recommending mapping, monitoring, and qualification of storage areas.',
	),
	array(
		'Is seasonal temperature mapping required?',
		'For many facilities, mapping in both summer and winter is recommended to capture worst-case conditions across the year.',
	),
	array(
		'How many temperature sensors are required, and where should they be placed?',
		'The number depends on the size of the space. Sensors are placed at extremes (corners, near doors, top/bottom) and known hot/cold spots to fully characterize the area.',
	),
	array(
		'How should temperature mapping results be used after the study?',
		'Results guide optimal placement of permanent monitors, define alarm limits, identify risk areas, and support qualification and audit documentation.',
	),
	array(
		'How can organizations reduce inspection and audit risks for temperature-controlled storage?',
		'By maintaining calibrated monitoring, documented mapping studies, defined procedures, and regular re-qualification, all areas we can support you with.',
	),
);
?>

<main>
	<section class="page-hero">
		<div class="container">
			<div class="page-hero-inner reveal">
				<span class="eyebrow"><?php esc_html_e( 'FAQ', 'abucal' ); ?></span>
				<h1><?php esc_html_e( 'Frequently Asked Questions', 'abucal' ); ?></h1>
				<p><?php esc_html_e( "If you've got questions, we've got answers.", 'abucal' ); ?></p>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container faq-wrap">
			<?php foreach ( $faqs as $i => $faq ) : ?>
				<div class="faq-item glass reveal">
					<button class="faq-q" aria-expanded="false">
						<span><?php echo esc_html( $faq[0] ); ?></span>
						<span class="faq-icon" aria-hidden="true">+</span>
					</button>
					<div class="faq-a"><p><?php echo esc_html( $faq[1] ); ?></p></div>
				</div>
			<?php endforeach; ?>
		</div>
	</section>
</main>

<?php
get_footer();
