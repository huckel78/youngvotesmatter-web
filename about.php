<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Project OMega</title>
    <meta name="description" content="Learn about the team and mission behind Vote For Democracy and Project OMega.">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:ital,wght@0,300;0,400;0,500;0,700;1,300&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">
</head>
<body>

    <a href="#main-content" class="skip-link">Skip to main content</a>

    <?php include 'header.php'; ?>

    <main id="main-content">
        <section class="hero hero-internal">
            <div class="hero-bg"></div>
            <div class="hero-stars" id="stars-container" aria-hidden="true"></div>
            
            <div style="position: relative; z-index: 1;">
                <span class="hero-label reveal">The Organization</span>
                <h1 class="hero-title reveal">OUR <span class="accent">STORY</span></h1>
                <p class="hero-sub reveal" style="margin: 0 auto;">We are technologists, organizers, and policy nerds building the infrastructure for the next generation of American voters.</p>
            </div>
        </section>

        <section class="content-section">
            <h2 class="section-title reveal" style="font-size: 2.5rem; text-align: left;">Bridging the Gap Between Energy and Action</h2>
            <p class="reveal">Project OMega was founded on a simple premise: the generation that will inherit the consequences of today's political decisions has the least friction-free access to the ballot box. While commercial technology has evolved to make ordering food or trading stocks a one-tap experience, civic engagement remains stuck in the past.</p>
            <p class="reveal">We operate a dual-entity structure (501c3 and 501c4) to ensure we can educate voters on college campuses while simultaneously holding elected officials accountable in state legislatures.</p>
            
            <div class="mission-stats" style="margin-top: 4rem;">
                <div class="stat-card reveal" style="text-align: center;">
                    <h3>Our Vision</h3>
                    <p>A democracy where the electorate accurately reflects the demographics of the nation, driven by frictionless access to voting.</p>
                </div>
                <div class="stat-card reveal" style="text-align: center;">
                    <h3>Our Approach</h3>
                    <p>Treating civic action like a product. We prioritize UI/UX, mobile-first design, and clear data to remove barriers to entry.</p>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

</body>
</html>
