<?php get_header() ?>

<section class="homeHero">
    <div class="homeHero__text">
        <h1>Welcome!</h1>
    </div>
    <div class="homeHero__images">

        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/home-hero.png" alt="image of Jacqueline Tropp" />
    </div>
</section>

<section class="services">
    <div class="services__intro">
        <h2 class="services__description__title">What I can do for you</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor blanditiis minima ea voluptas, maiores labore temporibus explicabo qui excepturi voluptatem eum totam cum eius exercitationem dignissimos? Consectetur quae illo nemo?</p>
    </div>
    <div class="services__icons">
        <div class="services__name" id="webDesignButton">
            <div class="services__circles primary">
                <i class="ph-desktop services__icons__icons"></i>
            </div>
            <h3>Web Design</h3>
        </div>
        <div class="services__name" id="mobileAppButton">
            <div class="services__circles secondary">
                <i class="ph-device-mobile services__icons__icons"></i>
            </div>
            <h3>Mobile App</h3>
        </div>
        <div class="services__name" id="brandingButton">
            <div class="services__circles tertiary">
                <i class="ph-briefcase services__icons__icons"></i>
            </div>
            <h3>Branding</h3>
        </div>
    </div>

    <div class="services__description">
        <div class="services__description__extra">
            <div id="webdesign">
                <h6>Web Design</h6>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt quae aliquam beatae deserunt consectetur natus asperiores aut autem maxime adipisci commodi nam sint nemo, odio minus laudantium corrupti temporibus harum.
                <p>
            </div>
            <div id="mobileApp">
                <h6>Mobile App</h6>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt eveniet, accusantium nostrum provident minus, aliquid iusto expedita dolorem, deleniti quibusdam sint eaque laboriosam! Tempora neque, distinctio nemo a error dolorum!
                <p>
            </div>
            <div id="branding">
                <h6>Branding</h6>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae, necessitatibus facilis! Necessitatibus atque sit nulla quae debitis maxime quod non quos aut, consectetur nostrum hic voluptas unde earum error magnam!</p>
            </div>
        </div>
    </div>
</section>

<section class="projects">
    <div class="projectsDiv">
        <h3>Projects</h3>
        <div class="project" id="project1">
            <a href="#" class="photo">
                <div class="project__desc">
                    <div class="project__text">
                        <h1>DFA Covid Vaccine</h1>
                        <p>Commissioned for Doctors for America</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="project" id="project2">
            <a href="#" class="photo">
                <div class="project__desc">
                    <div class="project__text">
                        <h1>Prime Planner</h1>
                        <p>Your ultimate planning resource</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="project" id="project3">
            <a href="#" class="photo">
                <div class="project__desc">
                    <div class="project__text">
                        <h1>Backpacking Buddies</h1>
                        <p>A social media app designed for travelers</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="project" id="project4">
            <a href="#" class="photo">
                <div class="project__desc">
                    <div class="project__text">
                        <h1>Natural Bath Bombs</h1>
                        <p>An e-commerce website</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="project" id="project5">
            <a href="#" class="photo">
                <div class="project__desc">
                    <div class="project__text">
                        <h1>FuncMove</h1>
                        <p>A personal training website</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="project" id="project6">
            <a href="#" class="photo">
                <div class="project__desc">
                    <div class="project__text">
                        <h1>World Recipes</h1>
                        <p>A recipe database for international friends</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="project" id="project7">
            <a href="#" class="photo">
                <div class="project__desc">
                    <div class="project__text">
                        <h1>Weather Tracker</h1>
                        <p>Designed for the current weather and forecasts</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="project" id="project8">
            <a href="#" class="photo">
                <div class="project__desc">
                    <div class="project__text">
                        <h1>Ultimate Planner</h1>
                        <p></p>
                    </div>
                </div>
            </a>
        </div>
        <div class="project" id="project9">
            <a href="#" class="photo">
                <div class="project__desc">
                    <div class="project__text">
                        <h1>Blog</h1>
                        <p>Designed for a lifestyle blog</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<?php get_footer() ?>