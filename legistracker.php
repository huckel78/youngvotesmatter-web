<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LegisTracker | Project OMega</title>
    <meta name="description" content="Track how all 535 members of Congress vote in real-time.">
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
                <span class="hero-label reveal">Accountability Module</span>
                <h1 class="hero-title reveal">LEGIS<span class="accent">TRACKER</span></h1>
                <p class="hero-sub reveal" style="margin: 0 auto;">No more hiding behind complex legal jargon. See exactly how your representatives are voting on the issues that matter to you.</p>
            </div>
        </section>

        <section class="content-section">
            <div class="contact-form reveal" style="text-align: center; margin-bottom: 4rem;">
                <h2 style="font-family: 'Bebas Neue', sans-serif; font-size: 2.2rem; color: var(--gold); margin-bottom: 1rem;">FIND YOUR REPRESENTATIVE</h2>
                <p style="margin-bottom: 2rem;">Enter your ZIP code to instantly see the voting record of your federal and state legislators.</p>
                
                <form action="#" method="GET" style="display: flex; gap: 1rem; flex-wrap: wrap; justify-content: center;">
                    <input type="text" name="zip" class="form-input" placeholder="Enter ZIP Code (e.g. 90210)" required style="max-width: 300px;">
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>

            <div class="features-grid">
                <div class="feature-card reveal">
                    <div class="feature-icon" aria-hidden="true">🎯</div>
                    <h3>Plain English Summaries</h3>
                    <p>We use AI and legal experts to translate 1,000-page bills into 2-paragraph summaries. Know what a "YEA" vote actually means.</p>
                </div>
                <div class="feature-card reveal">
                    <div class="feature-icon" aria-hidden="true">⚖️</div>
                    <h3>Democracy Scores</h3>
                    <p>Every member of Congress receives an automated grade (A-F) based on their votes expanding or restricting voting rights.</p>
                </div>
                <div class="feature-card reveal">
                    <div class="feature-icon" aria-hidden="true">🔔</div>
                    <h3>Real-Time Alerts</h3>
                    <p>Sign up for SMS or email alerts the moment your specific representative casts a vote on a priority issue.</p>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

</body>
</html>
