<?php

/**
 * Template for the Contact page.
 *
 * @package Idiom_Digital
 */

get_header();

$contact_status = isset($_GET['contact'])
	? sanitize_key(wp_unslash($_GET['contact']))
	: '';
?>

<main class="bg-[#F5F3EE] text-[#151515]">

	<section class="px-6 py-24 sm:px-8 lg:px-12 lg:py-32">
		<div class="mx-auto grid max-w-[1600px] grid-cols-1 gap-12 lg:grid-cols-12 lg:gap-8">

			<div class="lg:col-span-3">
				<p class="m-0 text-sm font-medium tracking-[0.08em] text-[#747474]">
					<span class="text-[#93CF9E]">/</span> contact
				</p>
			</div>

			<div class="lg:col-span-8 lg:col-start-5">
				<h1 class="m-0 max-w-[10ch] text-[clamp(4rem,8vw,8.5rem)] font-medium leading-[0.9] tracking-[-0.06em]">
					Have something worth building?
				</h1>

				<p class="mt-8 max-w-2xl text-lg leading-relaxed text-[#5B5B5B] sm:text-xl">
					Tell us what you’re working on, what needs to happen and where you are in
					the process.
				</p>
			</div>

		</div>
	</section>

	<?php if ('success' === $contact_status || 'error' === $contact_status) : ?>
		<section class="px-6 pb-8 sm:px-8 lg:px-12 lg:pb-12">
			<div class="mx-auto grid max-w-[1600px] grid-cols-1 gap-8 lg:grid-cols-12 lg:gap-8">

				<div class="lg:col-span-7 lg:col-start-5">

					<?php if ('success' === $contact_status) : ?>
						<div
							class="border-l-2 border-[#93CF9E] py-2 pl-5 text-lg text-[#151515]"
							role="status">
							Thanks — your enquiry has been sent.
						</div>
					<?php else : ?>
						<div
							class="border-l-2 border-[#151515] py-2 pl-5 text-lg text-[#5B5B5B]"
							role="alert">
							Something went wrong. Please check the form and try again.
						</div>
					<?php endif; ?>

				</div>

			</div>
		</section>
	<?php endif; ?>

	<section class="px-6 pb-24 sm:px-8 lg:px-12 lg:pb-32">
		<div class="mx-auto grid max-w-[1600px] grid-cols-1 gap-16 border-t border-[#D5D1C8] pt-16 lg:grid-cols-12 lg:gap-8 lg:pt-24">

			<div class="lg:col-span-3">
				<p class="m-0 text-sm font-medium tracking-[0.08em] text-[#747474]">
					01 / Start a project
				</p>
			</div>

			<div class="lg:col-span-7 lg:col-start-5">



				<form
					class="space-y-10"
					action="<?php echo esc_url(admin_url('admin-post.php')); ?>"
					method="post">

					<input
						type="hidden"
						name="action"
						value="idiom_contact_form">

					<?php wp_nonce_field('idiom_contact_form', 'idiom_contact_nonce'); ?>

					<div>
						<label
							for="contact-name"
							class="mb-3 block text-sm font-medium text-[#747474]">
							Name
						</label>

						<input
							id="contact-name"
							name="name"
							type="text"
							autocomplete="name"
							required
							class="w-full border-0 border-b border-[#BDB8AE] bg-transparent px-0 py-4 text-2xl text-[#151515] outline-none transition-colors placeholder:text-[#A6A19A] focus:border-[#151515] focus:ring-0"
							placeholder="Your name">
					</div>

					<div>
						<label
							for="contact-email"
							class="mb-3 block text-sm font-medium text-[#747474]">
							Email
						</label>

						<input
							id="contact-email"
							name="email"
							type="email"
							autocomplete="email"
							required
							class="w-full border-0 border-b border-[#BDB8AE] bg-transparent px-0 py-4 text-2xl text-[#151515] outline-none transition-colors placeholder:text-[#A6A19A] focus:border-[#151515] focus:ring-0"
							placeholder="you@company.com">
					</div>

					<div>
						<label
							for="contact-company"
							class="mb-3 block text-sm font-medium text-[#747474]">
							Company or organisation
							<span class="font-normal">(optional)</span>
						</label>

						<input
							id="contact-company"
							name="company"
							type="text"
							autocomplete="organization"
							class="w-full border-0 border-b border-[#BDB8AE] bg-transparent px-0 py-4 text-2xl text-[#151515] outline-none transition-colors placeholder:text-[#A6A19A] focus:border-[#151515] focus:ring-0"
							placeholder="Company name">
					</div>

					<div>
						<label
							for="contact-project"
							class="mb-3 block text-sm font-medium text-[#747474]">
							What are you looking to build?
						</label>

						<textarea
							id="contact-project"
							name="project"
							rows="5"
							required
							class="w-full resize-y border-0 border-b border-[#BDB8AE] bg-transparent px-0 py-4 text-2xl leading-relaxed text-[#151515] outline-none transition-colors placeholder:text-[#A6A19A] focus:border-[#151515] focus:ring-0"
							placeholder="A little about the project, problem or idea."></textarea>
					</div>

					<div>
						<label
							for="contact-budget"
							class="mb-3 block text-sm font-medium text-[#747474]">
							Budget
							<span class="font-normal">(optional)</span>
						</label>

						<select
							id="contact-budget"
							name="budget"
							class="w-full border-0 border-b border-[#BDB8AE] bg-transparent px-0 py-4 text-xl text-[#151515] outline-none transition-colors focus:border-[#151515] focus:ring-0">
							<option value="">Select a range</option>
							<option value="under-5k">Under £5,000</option>
							<option value="5k-10k">£5,000–£10,000</option>
							<option value="10k-25k">£10,000–£25,000</option>
							<option value="25k-plus">£25,000+</option>
							<option value="not-sure">Not sure yet</option>
						</select>
					</div>

					<div class="pt-4">
						<button
							type="submit"
							class="group inline-flex items-center gap-3 text-lg font-medium text-[#151515]">
							Send enquiry
							<span
								class="inline-block transition-transform duration-200 group-hover:translate-x-2"
								aria-hidden="true">
								→
							</span>
						</button>
					</div>

				</form>

			</div>

		</div>
	</section>

	<section class="bg-[#1C1C1C] px-6 py-24 text-[#F5F3EE] sm:px-8 lg:px-12 lg:py-32">
		<div class="mx-auto grid max-w-[1600px] grid-cols-1 gap-12 lg:grid-cols-12 lg:gap-8">

			<div class="lg:col-span-3">
				<p class="m-0 text-sm font-medium tracking-[0.08em] text-[#A6A6A6]">
					02 / Not ready for a brief?
				</p>
			</div>

			<div class="lg:col-span-7 lg:col-start-5">
				<h2 class="m-0 max-w-[12ch] text-[clamp(3rem,5.5vw,6rem)] font-medium leading-[0.95] tracking-[-0.055em]">
					You don’t need to have
					<span class="text-[#93CF9E]">everything figured out.</span>
				</h2>

				<p class="mt-8 max-w-2xl text-lg leading-relaxed text-[#C7C7C7] sm:text-xl">
					An early idea, an awkward existing system or simply a problem that needs
					solving is enough to start a conversation.
				</p>
			</div>

		</div>
	</section>

	<section class="px-6 py-24 sm:px-8 lg:px-12 lg:py-32">
		<div class="mx-auto grid max-w-[1600px] grid-cols-1 gap-12 lg:grid-cols-12 lg:gap-8">

			<div class="lg:col-span-3">
				<p class="m-0 text-sm font-medium tracking-[0.08em] text-[#747474]">
					03 / Email
				</p>
			</div>

			<div class="min-w-0 lg:col-span-8 lg:col-start-5">
				<p class="m-0 text-lg text-[#5B5B5B]">
					Prefer email?
				</p>
				<a
					href="mailto:hello@idiomdigital.com"
					class="group mt-5 flex max-w-full flex-wrap items-baseline gap-x-3 gap-y-2 text-[clamp(1.9rem,8vw,5rem)] font-medium leading-none tracking-[-0.05em] text-[#151515] no-underline">
					<span class="min-w-0 [overflow-wrap:anywhere]">
						hello@idiomdigital.com
					</span>

					<span
						class="inline-block shrink-0 text-[#93CF9E] transition-transform duration-200 group-hover:translate-x-2"
						aria-hidden="true">
						→
					</span>
				</a>
			</div>

		</div>
	</section>

</main>

<?php
get_footer();
