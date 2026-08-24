<?php
/**
 * Idiom Digital about preview.
 *
 * @package Idiom_Digital
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<section id="about" class="bg-[#F5F3EE] text-[#151515]">
	<div class="mx-auto grid w-full max-w-[1600px] grid-cols-1 gap-10 px-6 py-20 sm:px-8 lg:min-h-[58vh] lg:grid-cols-12 lg:items-center lg:gap-8 lg:px-12 lg:py-32">

		<div class="lg:col-span-7">
			<p class="mb-5 text-sm text-[#747474]">
				/about
			</p>

			<h2 class="m-0 max-w-[12ch] text-[clamp(3rem,5.5vw,5.75rem)] font-medium leading-[0.96] tracking-[-0.055em]">
				An independent digital studio working across design, development and product creation.
			</h2>
		</div>

		<div class="lg:col-span-4 lg:col-start-9">
			<p class="max-w-md text-lg leading-relaxed text-[#5B5B5B] sm:text-xl">
				Small enough to stay close to the work. Capable enough to take an idea from first conversation through to launch.
			</p>

			<a
				href="<?php echo esc_url( home_url( '/about' ) ); ?>"
				class="mt-8 inline-flex items-center gap-2 font-medium text-[#151515] no-underline transition-opacity hover:opacity-50"
			>
				More about Idiom
				<span aria-hidden="true">→</span>
			</a>
		</div>

	</div>
</section>