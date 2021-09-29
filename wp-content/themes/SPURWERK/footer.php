<section class="block-footer">
    <div class="container-footer">
        <div class="block-footer-flex">
            <div class="block-social-media flex_grow">
                <h6>PROJEKTENTWICKLER: </h6>
                <img src="<?= get_template_directory_uri(); ?>/img/footer_logo.png" alt="Footer-Logo" class="footer-logo">
                <div class="block-social_media flex_grow">
                    <a href="https://preview.colorlib.com/#consultingbiz"> <img src="<?= get_template_directory_uri(); ?>/img/FB.png" alt="Facebook" class="footer-icon"></a>
                    <a href="#"> <img src="<?= get_template_directory_uri(); ?>/img/youtube.png" alt="youtube" class="footer-icon"></a>
                    <a href="#"> <img src="<?= get_template_directory_uri(); ?>/img/Insta.png" alt="Instagramm" class="footer-icon"> </a>
                </div>

            </div>

            <div class="gruppe flex_grow">
                <h6> PEPER & SÖHNE GRUPPE </h6>
                <p>
                    Allerkai 4 <br>
                    28309 Bremen <br>
                    Deutschand

                </p>

            </div>
            <div class="block-kontakt flex_grow">
                <h6>Kontakt </h6>
                <p> Melanie Nouri <br>
                    <span>Vertrieb</span></p>

                <ul class="cantact-span">
                    <li><span>T:</span> +49 (0) 421 458 55 29-49</li>
                    <li><span>E:</span> m.nouri@peperundsoehne.de</li>
                    <li><span>W:</span> peperundsoehne.de</li>


                </ul>

            </div>
            <div class=" block-Büro flex_grow">
                <h6> Bürozeiten </h6>
                <p>
                    Montag - Donnerstag <br>
                    08:00 - 17:00
                </p>

            </div>
            <div class="block-Rechtliches flex_grow">
                <h6>Rechtliches </h6>


                <?php
                wp_nav_menu(array(
                    'theme_location' => 'Footer',
                    'container_class' => 'ul'
                ));
                ?>

                <!-- <ul>
                    <li><a href="">AGB</a></li>
                    <li><a href="">Datenschutz</a></li>
                    <li><a href="">Impressum</a></li>
                </ul> -->

            </div>
        </div>

    </div>

    <div class="container-footer space-padding">
        <div class="block-footer-flex">
            <div class="block-social-media flex_grow">
                <h6> Vertriebspartner</h6>
                <img src="<?= get_template_directory_uri(); ?>/img/spies.png" alt="Robert c Spies" class="footer-logo">

            </div>

            <div class="gruppe flex_grow">
                <h6>Robert c. Spies <br>
                    Gewerbe & Investment <br> GmbH & Co. KG
                </h6>
                <p>
                    Domshof 21, <br>
                    28195 Bremen <br>
                    Deutschand

                </p>

            </div>
            <div class="block-kontakt flex_grow">
                <h6>Kontakt </h6>
                <p> Martin Zunken <br>
                    <span>Logistik- und
                        Industrieimmobilien
                    </span></p>

                <ul class="cantact-span">
                    <li><span>T:</span>+49 (0) 421 173 93-62</li>
                    <li><span>M:</span>+49 (0) 160 970 823 35</li>
                    <li><span>E:</span>m.zunken@robertcspies.de</li>
                    <li><span>W:</span>robertcspies.de</li>


                </ul>


            </div>
            <div class="block-kontakt flex_grow ">
                <h6 class="none">Kontakt </h6>
                <p> Siljan Tietjen <br>
                    <span>Leitung <br> Bürovermietung
                    </span></p>

                <ul class="cantact-span">
                    <li><span>T:</span> +49 (0) 421 173 93-36</li>
                    <li><span>M:</span> +49 (0) 175 759 67 33</li>
                    <li><span>E:</span> s.tietjen@robertcspies.de</li>
                    <li><span>W:</span> robertcspies.de</li>


                </ul>

            </div>
            <div class="block-Büro flex_grow">
                <h6> Bürozeiten </h6>
                <p>
                    Montag - Donnerstag <br>
                    09:00 - 18:00
                </p>
                <p>
                    Freitag <br>
                    08:00 - 16:00
                </p>

            </div>

        </div>

    </div>

</section>


<script src="js/flip.min.js"></script>
<script>
    function handleTickInit(tick) {

        // Uncomment to set labels to different language ( in this case Dutch )
        var locale = {
            YEAR_PLURAL: 'Jahre',
            YEAR_SINGULAR: 'Jahr',
            MONTH_PLURAL: 'Monate',
            MONTH_SINGULAR: 'Monat',
            WEEK_PLURAL: 'Wochen',
            WEEK_SINGULAR: 'Woche',
            DAY_PLURAL: 'Tage',
            DAY_SINGULAR: 'Tag',
            HOUR_PLURAL: 'Stunden',
            HOUR_SINGULAR: 'Stunde',
            MINUTE_PLURAL: 'Minuten',
            MINUTE_SINGULAR: 'Minute',
            SECOND_PLURAL: 'Sekunden',
            SECOND_SINGULAR: 'Sekunde',
            MILLISECOND_PLURAL: 'Millisekunden',
            MILLISECOND_SINGULAR: 'Millisekunde'
        };

        for (var key in locale) {
            if (!locale.hasOwnProperty(key)) {
                continue;
            }
            tick.setConstant(key, locale[key]);
        }

        Tick.count.down('2021-11-04').onupdate = function(value) {
            tick.value = value;

            if (value[0] + value[1] + value[2] + value[3] === 0) {
                console.log('success');
            }
        };

    };
</script>

</body>

</html>
<?wp_footer();?>