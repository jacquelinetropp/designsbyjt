<?php get_header() ?>

<section class="homeHero">
    <div class="homeHero__text">
        <h1>Hi, I'm Jacqueline</h1>
        <h3>Frontend Developer & Designer</h3>
    </div>
    <div class="homeHero__images">

        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/home-hero.png" alt="image of Jacqueline Tropp" />
    </div>
</section>

<section class="services" id="about">
    <div class="services__intro">
        <h2 class="services__description__title">What I can do for you</h2>
        <p>With over 4 years of experience, I am equipped to take on any challenge you have. I pride myself on clear communication and meeting deadlines.</p>
    </div>
    <div class="services__icons">
        <div class="services__name" id="webDesignButton">
            <div class="services__circles primary">
                <i class="ph-desktop services__icons__icons"></i>
            </div>
            <h4>Web Design</h4>
        </div>
        <div class="services__name" id="mobileAppButton">
            <div class="services__circles secondary">
                <i class="ph-device-mobile services__icons__icons"></i>
            </div>
            <h4>Mobile App</h4>
        </div>
        <div class="services__name" id="brandingButton">
            <div class="services__circles tertiary">
                <i class="ph-briefcase services__icons__icons"></i>
            </div>
            <h4>Branding</h4>
        </div>
    </div>

    <div class="services__description">
        <div class="services__description__extra">
            <div id="webdesign">
                <h6>Web Design</h6>
                <p>Making your vision come to life is one of my top priorities. Along with building a website that is up to date with best-practices, I create mockups to help visualize your dream website.
                    With experience building Wordpress websites and web applications, the possibilities are endless.
                <p>
            </div>
            <div id="mobileApp">
                <h6>Mobile App</h6>
                <p>Now more than ever it is important to have a website that is not only is interactive on your computer, but also on your phone.
                    With responsive designs, you are able to create a beautiful mobile site that allows your clients to access your site anywhere.
                <p>
            </div>
            <div id="branding">
                <h6>Branding</h6>
                <p>
                    Developing a brand across all of your platforms is the key to success. If you do not have a brand identity established, we can work together to build your brand identity together! If you have an established brand, together we will ensure your website matches your brand.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="projects" id="projects">
    <div class="projectsDiv">
        <h2>Projects</h2>
        <div class="project" id="project1">
            <a href="#" class="photo">
                <div class="project__desc">
                    <div class="project__text">
                        <h3>DFA Covid Vaccine</h3>
                        <p>Commissioned for Doctors for America</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="project" id="project2">
            <a href="#" class="photo">
                <div class="project__desc">
                    <div class="project__text">
                        <h3>Prime Planner</h3>
                        <p>Your ultimate planning resource</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="project" id="project3">
            <a href="#" class="photo">
                <div class="project__desc">
                    <div class="project__text">
                        <h3>Backpacking Buddies</h3>
                        <p>A social media app designed for travelers</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="project" id="project4">
            <a href="#" class="photo">
                <div class="project__desc">
                    <div class="project__text">
                        <h3>Natural Bath Bombs</h3>
                        <p>An e-commerce website</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="project" id="project5">
            <a href="#" class="photo">
                <div class="project__desc">
                    <div class="project__text">
                        <h3>FuncMove</h3>
                        <p>A personal training website</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="project" id="project6">
            <a href="#" class="photo">
                <div class="project__desc">
                    <div class="project__text">
                        <h3>World Recipes</h3>
                        <p>A recipe database for international friends</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="project" id="project7">
            <a href="#" class="photo">
                <div class="project__desc">
                    <div class="project__text">
                        <h3>Weather Tracker</h3>
                        <p>Designed for the current weather and forecasts</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="project" id="project8">
            <a href="#" class="photo">
                <div class="project__desc">
                    <div class="project__text">
                        <h3>Ultimate Planner</h3>
                        <p></p>
                    </div>
                </div>
            </a>
        </div>
        <div class="project" id="project9">
            <a href="#" class="photo">
                <div class="project__desc">
                    <div class="project__text">
                        <h3>Blog</h3>
                        <p>Designed for a lifestyle blog</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<section class="skills" id="skills">
    <h2>Skills</h2>
    <?php get_template_part('template-parts/skills') ?>
</section>

<section class="contactus" id="contact">
    <h3>Let's Work Together </h3>
    <?php echo do_shortcode("[contact-form-7 id='73' title='Contact form 1']"); ?>
</section>

<?php get_footer() ?>