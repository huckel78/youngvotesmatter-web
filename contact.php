<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Project OMega</title>
    <meta name="description" content="Get in touch with the Vote For Democracy team.">
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
                <span class="hero-label reveal">Get in Touch</span>
                <h1 class="hero-title reveal">REACH <span class="accent">OUT</span></h1>
                <p class="hero-sub reveal" style="margin: 0 auto;">Whether you are a potential campus ambassador, a funder, or just have a question, we want to hear from you.</p>
            </div>
        </section>

        <section style="padding: 2rem 5% 8rem;">
            <form class="contact-form reveal" action="process-form.php" method="POST">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" class="form-input" required placeholder="Jane Doe">
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" class="form-input" required placeholder="jane@university.edu">
                </div>

                <div class="form-group">
                    <label for="subject">Reason for Contact</label>
                    <select id="subject" name="subject" class="form-input" required style="appearance: none;">
                        <option value="ambassador">Campus Ambassador Program</option>
                        <option value="funding">Funding & Grants</option>
                        <option value="press">Press Inquiry</option>
                        <option value="general">General Question</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" class="form-input" required placeholder="How can we build the future together?"></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary" style="margin-top: 1rem;">Send Message</button>
            </form>
        </section>
    </main>

    <?php include 'footer.php'; ?>

</body>
</html>
