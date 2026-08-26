<?php

/**
 * Idiom Digital closing call to action.
 *
 * @package Idiom_Digital
 */

if (! defined('ABSPATH')) {
	exit;
}
?>

<section class="bg-[#1C1C1C] text-[#F5F3EE]">
	<div class="mx-auto flex min-h-[72vh] w-full max-w-[1600px] flex-col justify-between px-6 py-24 sm:px-8 lg:px-12 lg:py-32">

		<p class="text-sm text-[#93CF9E]">
			/project
		</p>

		<div class="py-16 lg:py-20">
			<h2 class="m-0 max-w-[11ch] text-[clamp(4rem,8vw,8rem)] font-medium leading-[0.9] tracking-[-0.06em] text-[#F5F3EE]">
				Got something worth building?

			</h2>
		</div>

		<div class="flex flex-col gap-6 border-t border-[#F5F3EE]/20 pt-7 sm:flex-row sm:items-end sm:justify-between">

			<a
				href="<?php echo esc_url(home_url('/contact')); ?>"
				class="inline-flex items-center gap-3 text-xl font-medium text-[#F5F3EE] no-underline transition-opacity hover:opacity-60 sm:text-2xl">
				Start a project
				<span aria-hidden="true">→</span>
			</a>

			<a
				href="mailto:hello@idiomdigital.com"
				class="text-base text-[#C8C8C8] no-underline transition-opacity hover:opacity-60">
				hello@idiomdigital.com
			</a>

		</div>

	</div>
</section>