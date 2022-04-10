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
        <h2 class="services__description__title">What I can do for you</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor blanditiis minima ea voluptas, maiores labore temporibus explicabo qui excepturi voluptatem eum totam cum eius exercitationem dignissimos? Consectetur quae illo nemo?</p>

        <div class="services__description__extra">
            <div class="webdesign">
                <h6>Web Design</h6>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt quae aliquam beatae deserunt consectetur natus asperiores aut autem maxime adipisci commodi nam sint nemo, odio minus laudantium corrupti temporibus harum.
                <p>
            </div>
            <div class="mobileApp">
                <h6>Mobile App</h6>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt eveniet, accusantium nostrum provident minus, aliquid iusto expedita dolorem, deleniti quibusdam sint eaque laboriosam! Tempora neque, distinctio nemo a error dolorum!
                <p>
            </div>
            <div class="branding">
                <h6>Branding</h6>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae, necessitatibus facilis! Necessitatibus atque sit nulla quae debitis maxime quod non quos aut, consectetur nostrum hic voluptas unde earum error magnam!</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>