<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<section class="countdown">
    <h2 class="text-center">
        <?php the_field('uberschrift_countdown'); ?>
    </h2>
    <div class="tick" data-did-init="handleTickInit" data-credits="false">

        <div class=" container container-countdown" data-repeat="true" data-transform="preset(d, h, m, s) -> delay">

            <div class="tick-group">

                <div data-key="value" data-repeat="true" data-transform="pad(00) -> split -> delay">

                    <span data-view="flip"></span>

                </div>

                <span data-key="label" data-view="text" class="tick-label"></span>
            </div>
        </div>
    </div>
</section>
<div class="produktive">
</div>
<section class="container">
    <div class="text_description">
        <?php the_field('miet_description'); ?>
    </div>
</section>

<section class=" bloc-mietinteresse">

    <div class="flex-container-newsletter no-padding">
        <h1>MIETINTERESSE?</h1>
        <p>
            dann sprechen sie uns an!
        </p>
    </div>
    <div class="flex-form-img">
        <div class="image-einladung">
            <img src="<?= get_template_directory_uri(); ?>/img/einladungkarte" alt="einladungkarte" class="einladung-image">
        </div>
        <div class="mietinteresse">
            <div class="page-content page-content1">
                <div class="form-v10-content">
                    <?php echo do_shortcode('[contact-form-7 id="5" title="MietInteresse Contact" html_class="form-detail"]'); ?>
                </div>
            </div>
        </div>
</section>

<section class="formular-newsletter">
    <div class="flex-container-newsletter">
        <h1>JETZT NEWSLETTER ABONNIEREN!</h1>
        <p>
            Mit unserem Newsletter verfolgen Sie alle spannenden Neuigkeiten des <br>
            Neustadtsgüterbahnhofs und verpassen nicht den 04.11.2021. Jetzt abonnieren!
        </p>
    </div>

    <div class="page-content">
        <div class="form-v10-content ">
            <?php echo do_shortcode('[contact-form-7 id="18" title="Newsletter Contact" html_class="form-detail"]'); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>