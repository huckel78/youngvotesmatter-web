document.addEventListener("DOMContentLoaded", () => {
    
    /** Background Stars **/
    const starsContainer = document.getElementById('stars-container');
    function createStars() {
        const fragment = document.createDocumentFragment();
        for (let i = 0; i < 130; i++) {
            const star = document.createElement('div');
            star.className = 'star';
            const size = Math.random() * 2 + 0.5;
            star.style.cssText = `left:${Math.random()*100}%; top:${Math.random()*100}%; width:${size}px; height:${size}px; --d:${Math.random()*3+2}s; animation-delay:${Math.random()*5}s;`;
            fragment.appendChild(star);
        }
        if (starsContainer) starsContainer.appendChild(fragment);
    }
    // Defers non-critical execution until after primary layout
    setTimeout(createStars, 100);

    /** Animated Numbers **/
    function animateValue(obj, start, end, duration) {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            const val = Math.floor(progress * (end - start) + start);
            obj.innerHTML = val >= 1000 ? (val / 1000).toFixed(0) + "K" : val;
            if (progress < 1) window.requestAnimationFrame(step);
        };
        window.requestAnimationFrame(step);
    }

    /** Roadmap Logic **/
    const steps = document.querySelectorAll('.roadmap-step');
    const roadmapBar = document.getElementById('roadmap-bar');
    
    function updateRoadmap(stepNumber, progressWidth) {
        if (roadmapBar) roadmapBar.style.width = progressWidth;
        steps.forEach((s, i) => {
            if (i < stepNumber) {
                s.classList.add('active');
            } else {
                s.classList.remove('active');
            }
        });
    }

    steps.forEach(step => {
        step.addEventListener('click', function() {
            updateRoadmap(this.dataset.step, this.dataset.progress);
        });
        step.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                updateRoadmap(this.dataset.step, this.dataset.progress);
            }
        });
    });

    /** Intersection Observer for Scroll Animations **/
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    const num = entry.target.querySelector('.num, .kpi-num, .big');
                    if (num && num.dataset.target && num.dataset.animate !== "false" && !num.classList.contains('done')) {
                        animateValue(num, 0, parseInt(num.dataset.target), 2000);
                        num.classList.add('done');
                    }
                    // Stop observing once animated for performance
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15, rootMargin: "0px 0px -50px 0px" });

        document.querySelectorAll('.reveal, .hero-stat, .kpi-card, .stat-card').forEach(el => observer.observe(el));
    }

    /** Accessible Menu Toggle **/
    const menuToggle = document.getElementById('mobile-menu');
    const navLinks = document.querySelector('.nav-links');
    
    if (menuToggle && navLinks) {
        menuToggle.addEventListener('click', () => {
            const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
            menuToggle.setAttribute('aria-expanded', !isExpanded);
            menuToggle.classList.toggle('active');
            navLinks.classList.toggle('active');
        });
    }

    /** Dynamic Navbar Background **/
    window.addEventListener('scroll', () => {
        const nav = document.getElementById('main-nav');
        if (nav) {
            nav.style.padding = window.scrollY > 50 ? '0.7rem 5%' : '1rem 5%';
        }
    }, { passive: true });
});