<?php include 'includes/head.php'?>

<?php include 'includes/aboutCss.php'?>

<body
    class="wp-singular page-template-default page page-id-5607 wp-custom-logo wp-embed-responsive wp-theme-itactics trx_addons_customizable_theme skin_default elementor-use-container scheme_default blog_mode_page body_style_fullscreen is_single sidebar_hide expand_content remove_margins trx_addons_present header_type_custom header_style_header-custom-2552 header_position_over menu_side_ no_layout fixed_blocks_sticky elementor-default elementor-kit-5 elementor-page elementor-page-5607">





    <?php include 'includes/header.php'?>


    <section class="bannerWrap">
        <div class="content ">
            <h2 class="bannerTitle">Contact Us</h2>
        </div>
    </section>


    <div class="page_content_wrap">
        <div class="floating-particles">
            <div class="particle" style="left: 10%; animation-delay: 0s;"></div>
            <div class="particle" style="left: 20%; animation-delay: 1s;"></div>
            <div class="particle" style="left: 30%; animation-delay: 2s;"></div>
            <div class="particle" style="left: 40%; animation-delay: 3s;"></div>
            <div class="particle" style="left: 50%; animation-delay: 4s;"></div>
            <div class="particle" style="left: 60%; animation-delay: 5s;"></div>
            <div class="particle" style="left: 70%; animation-delay: 1.5s;"></div>
            <div class="particle" style="left: 80%; animation-delay: 2.5s;"></div>
            <div class="particle" style="left: 90%; animation-delay: 3.5s;"></div>
        </div>

        <div class="container">


            <div class="contact-section">
                <div class="contact-form">
                    <h2 class="form-title">Get In Touch</h2>
                    <div class="success-message" id="successMessage">
                        Thank you! Your message has been sent successfully.
                    </div>
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Full Name *</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="company">Company</label>
                            <input type="text" id="company" name="company">
                        </div>
                        <div class="form-group">
                            <label for="service">Service Interest</label>
                            <select id="service" name="service">
                                <option value="">Select a service</option>
                                <option value="web-development">Web Development</option>
                                <option value="mobile-apps">Mobile Applications</option>
                                <option value="software-consulting">Software Consulting</option>
                                <option value="cloud-solutions">Cloud Solutions</option>
                                <option value="custom-software">Custom Software</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message"
                                placeholder="Tell us about your project or how we can help you..." required></textarea>
                        </div>
                        <button type="submit" class="submit-btn">Send Message</button>
                    </form>
                </div>

                <div class="contact-info">
                    <h2 class="text-white">Contact Information</h2>

                    <div class="contact-item">
                        <div class="contact-icon">📍</div>
                        <div class="contact-details">
                            <h3>Office Address</h3>
                            <p>123 Tech Street, Suite 400<br>Innovation District, NY 10001</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">📞</div>
                        <div class="contact-details">
                            <h3>Phone</h3>
                            <p>+1 (555) 123-4567</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">✉️</div>
                        <div class="contact-details">
                            <h3>Email</h3>
                            <p>hello@techsolutions.com</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">🕒</div>
                        <div class="contact-details">
                            <h3>Business Hours</h3>
                            <p>Mon - Fri: 9:00 AM - 6:00 PM<br>Sat: 10:00 AM - 4:00 PM</p>
                        </div>
                    </div>


                </div>
            </div>

            <div class="map-section">
                <h2 style="color: #181c61; margin-bottom: 20px;">Find Us</h2>
                <p style="color: #666; margin-bottom: 20px;">We're located in the heart of the tech district, easily
                    accessible by public transport.</p>
                <div class="map-placeholder">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57988.09622825888!2d85.2849331020277!3d27.708954252231774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu%2044600!5e1!3m2!1sen!2snp!4v1756718686355!5m2!1sen!2snp"
                        class="" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <span id="footer_skip_link_anchor" class="itactics_skip_link_anchor">

    </span>
    <!-- footer  -->
    <?php include 'includes/footer.php'?>