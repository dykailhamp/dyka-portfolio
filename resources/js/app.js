import Alpine from "alpinejs";

window.Alpine = Alpine;
Alpine.start();

const initializePortfolioCarousels = () => {
	document.querySelectorAll("[data-portfolio-carousel]").forEach((carousel) => {
		const portfolioSection = carousel.closest("#portfolio") ?? carousel;
		const track = carousel.querySelector("[data-portfolio-track]");
		const slides = carousel.querySelectorAll("[data-portfolio-slide]");
		const dots = carousel.querySelectorAll("[data-portfolio-dot]");
		const counter = carousel.querySelector("[data-portfolio-counter]");
		const previousButton = portfolioSection.querySelector("[data-portfolio-prev]");
		const nextButton = portfolioSection.querySelector("[data-portfolio-next]");
		let activeIndex = 0;
		let autoplay;

		if (!track || !slides.length || !counter || !previousButton || !nextButton) {
			return;
		}

		const updateCarousel = (nextIndex) => {
			activeIndex = (nextIndex + slides.length) % slides.length;
			track.style.transform = `translateX(-${activeIndex * 100}%)`;
			counter.textContent = `${String(activeIndex + 1).padStart(2, "0")} / ${String(slides.length).padStart(2, "0")}`;

			dots.forEach((dot, dotIndex) => {
				const isActive = dotIndex === activeIndex;
				dot.classList.toggle("is-active", isActive);
				dot.setAttribute("aria-selected", String(isActive));
			});
		};

		const stopAutoplay = () => window.clearInterval(autoplay);
		const startAutoplay = () => {
			stopAutoplay();
			autoplay = window.setInterval(() => updateCarousel(activeIndex + 1), 7000);
		};

		previousButton.addEventListener("click", () => {
			updateCarousel(activeIndex - 1);
			startAutoplay();
		});
		nextButton.addEventListener("click", () => {
			updateCarousel(activeIndex + 1);
			startAutoplay();
		});
		dots.forEach((dot) => {
			dot.addEventListener("click", () => {
				updateCarousel(Number(dot.dataset.portfolioDot));
				startAutoplay();
			});
		});
		carousel.addEventListener("focusin", stopAutoplay);
		carousel.addEventListener("focusout", (event) => {
			if (!carousel.contains(event.relatedTarget)) {
				startAutoplay();
			}
		});

		updateCarousel(0);
		startAutoplay();
	});
};

if (document.readyState === "loading") {
	document.addEventListener("DOMContentLoaded", initializePortfolioCarousels, { once: true });
} else {
	initializePortfolioCarousels();
}
