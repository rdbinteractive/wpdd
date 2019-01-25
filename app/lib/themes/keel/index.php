<?php
get_header();
// Start DryDock Landing.
?>
<div class="drydock-landing">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300.55 403.49"><defs><style>.cls-1,.cls-2{fill:#f2f2f3;}.cls-2{font-size:46px;font-family:Geomanist-Light, Geomanist;font-weight:300;}.cls-3{letter-spacing:0.03em;}</style></defs><title>DryDock</title><g id="Layer_1" data-name="Layer 1"><rect class="cls-1" x="283.75" y="329.44" width="18" height="45.59" transform="translate(-154.31 9.2) rotate(-10)"/><rect class="cls-1" x="198" y="329.08" width="18" height="41.52" transform="translate(-46.89 -72.39) rotate(8)"/><polygon class="cls-1" points="283.29 331.4 17.26 331.4 16.25 313.4 284.28 313.4 283.29 331.4"/><polygon class="cls-1" points="34.51 331.4 17.26 331.4 0 22.23 12.43 22.23 34.51 331.4"/><polygon class="cls-1" points="266.03 331.14 283.29 331.14 300.55 21.98 288.12 21.98 266.03 331.14"/><path class="cls-1" d="M264.86,171.4v-6.94H231.12v6.94S174.81,183.64,143,206.49c0,0,40.4,49.38,40.4,126.09H312.61c0-76.71,40.39-126.09,40.39-126.09C321.18,183.64,264.86,171.4,264.86,171.4Z" transform="translate(-97.59 -46.99)"/><path class="cls-1" d="M234.12,166.46v6.36l-2.36.51c-.49.11-44.11,9.74-75.58,27.38v9.5h.62c30.79-15,67.12-22.85,67.12-22.85v-2.45l16.87,1.63,7.2,3.06,7.21-3.67,16.87-1v2.45s36.33,7.9,67.12,22.85h.61v-9.5c-31.46-17.64-75.08-27.27-75.57-27.38l-2.37-.51v-6.36Z" transform="translate(-97.59 -46.99)"/><path class="cls-1" d="M348.37,160.84V151H334.58V131.46H255.2s-3-5.72,0-5.72H297V111.46H265.13L253.86,81.67h-3V55.15L248,47l-2.85,8.16V81.67h-3l-11.27,29.79H199v14.28h41.76c3,0,0,5.72,0,5.72h-79.3V151H147.61v9.8h-15.5v8.56H160V180h-3.81v13.84C184,178.94,218.73,170.2,228.12,168v-7.54h39.74V168c9.4,2.2,44.11,10.94,71.94,25.85V180h-3.51V169.4h27.59v-8.56ZM198.92,151H165.59V140h33.33Zm41.87,0h-37.7V140h37.7Zm52,0H255.2V140h37.55Zm37.66,0H296.92V140h33.49Z" transform="translate(-97.59 -46.99)"/></g><g id="Layer_2" data-name="Layer 2"><text class="cls-2" transform="translate(27.17 393.33)">WP D<tspan class="cls-3" x="106.17" y="0">r</tspan><tspan x="122.08" y="0">yDock</tspan></text></g></svg>
    <p>Local WordPress Development with Docker</p>
    <p>
        <?php (new WPDD\ThemeSetup\RegisterNavigation())->wpddPrimaryNav(); ?>
        <?php
        $identity = new WPDD\SiteIdentity\Display();
        echo $identity->company_name;
        echo $identity->addressBlock();
        ?>
    </p>
<?php
// End DryDock Landing.
get_footer();
