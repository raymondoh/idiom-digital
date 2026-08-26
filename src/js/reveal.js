export function initReveal() {
  const revealElements = document.querySelectorAll('.reveal, .reveal-image');

  if (!revealElements.length) return;

  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;

        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      });
    },
    {
      threshold: 0,
  rootMargin: '0px 0px 15% 0px',
    }
  );

  revealElements.forEach((element) => {
    observer.observe(element);
  });
}