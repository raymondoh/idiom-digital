<?php
/**
 * Idiom Digital homepage hero.
 *
 * @package Idiom_Digital
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<section class="relative flex min-h-[calc(100vh-88px)] bg-[#F5F3EE] text-[#151515]">
	<div class="mx-auto grid w-full max-w-[1600px] grid-rows-[1fr_auto] px-6 pb-10 sm:px-8 lg:px-12 lg:pb-12">

		<div class="flex items-center py-16 lg:py-12">

	<div class="grid w-full grid-cols-1 gap-12 lg:grid-cols-12 lg:gap-8">

		<div class="lg:col-span-8">
			<h1 class="m-0 max-w-[11ch] text-[clamp(4rem,9vw,9rem)] font-medium leading-[0.86] tracking-[-0.065em] text-[#151515]">
				We build<br>
				digital things.
			</h1>
		</div>

		<div class="flex flex-col justify-end lg:col-span-4 lg:pb-3">
			<p class="max-w-md text-lg leading-relaxed text-[#4F4F4F] sm:text-xl">
				Websites, applications and digital products — conceived,
				designed and built by Idiom Digital.
			</p>

			<div class="mt-8 flex flex-col items-start gap-3 text-base font-medium sm:flex-row sm:gap-8">
				<a
					href="<?php echo esc_url( home_url( '/work' ) ); ?>"
					class="no-underline transition-opacity hover:opacity-60"
				>
					Explore our work →
				</a>

				<a
					href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
					class="no-underline transition-opacity hover:opacity-60"
				>
					Start a project
				</a>
			</div>
		</div>

	</div>

</div>

		<div class="flex justify-end">
			<span
				class="block h-3 w-3 rounded-full bg-[#93CF9E]"
				aria-hidden="true"
			></span>
		</div>

	</div>
</section>