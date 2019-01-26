<?php
get_header();
// Start DryDock Landing.
?>
    <div class="drydock-landing">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 331.04 470.86"><defs><style>.cls-1,.cls-2{fill:#9fa2c8;}.cls-2{font-size:54px;font-family:Geomanist-Light, Geomanist;font-weight:300;}.cls-3{letter-spacing:0.03em;}</style></defs><title>DryDock Original</title><g id="Layer_1" data-name="Layer 1"><polygon class="cls-1" points="276.46 383.95 54.59 383.95 53.75 358.88 277.28 358.88 276.46 383.95"/><rect class="cls-1" x="110.21" y="257.71" width="28.63" height="145.28" transform="translate(-199.07 51.86) rotate(-22.1)"/><rect class="cls-1" x="360.13" y="258.08" width="28.63" height="144.9" transform="translate(513.08 758.39) rotate(-157.9)"/><path class="cls-1" d="M177.48,358.25a24,24,0,0,1,14.09-4.19c9.47,0,13.74-20,17.71-16.67,3.4,2.87,6.93,12.55,12.25,12.55s5.57-15.15,9-18c3-2.54,5.77,2.21,11.38.88.16,0,3,21.9,3.14,21.86,1.5-18.64,5.79-72.24,5.79-72.24l5.77,72.26c.17,0,11.18-32.86,11.34-32.83,5.56,1.33,3.14,4.25,6.13,6.79,3.4,2.87,4.94,9,10.28,9s6.45,1.56,9.85-1.31c4-3.37,6.34,17.76,15.81,17.76a24.12,24.12,0,0,1,14.12,4.19c.7.46,1.34.95,2,1.44l56.4-137.39L250.82,167.11,119.14,222.3l56.37,137.39C176.13,359.2,176.77,358.71,177.48,358.25Z" transform="translate(-83.93 -19.26)"/><path class="cls-1" d="M152.16,193,250.82,153,349.47,193,331.65,115.8h29.56l-8.8-22H149.23l-8.8,22H170Zm176.41-52.19H173.07v-4.34h155.5ZM215,115.8h14.85v12H215Zm28.39,0h14.86v12H243.39Zm28.4,0h14.85v12H271.79Zm43.25,12H300.18v-12H315Zm-113.58-12v12H186.6v-12Z" transform="translate(-83.93 -19.26)"/><path class="cls-1" d="M315,77.49a228,228,0,0,0-59.71-9.34l-.65-16.71a213,213,0,0,0,24.65-1.86v-4.5a229.87,229.87,0,0,0-25-1.65l-.3-7.81a155.66,155.66,0,0,0,17.87-1.32V31a174.43,174.43,0,0,0-18.1-1.21l-.4-10.5H248.2l-.41,10.5A174.43,174.43,0,0,0,229.7,31V34.3a155.66,155.66,0,0,0,17.87,1.32l-.31,7.81a229.86,229.86,0,0,0-24.95,1.65v4.5A213,213,0,0,0,247,51.44l-.64,16.71a227.93,227.93,0,0,0-59.71,9.34V87.55H315Z" transform="translate(-83.93 -19.26)"/><rect class="cls-1" x="91.79" y="235.66" width="150.2" height="105.02"/></g><g id="Layer_2" data-name="Layer 2"><text class="cls-2" transform="translate(19.4 458.92)">WP D<tspan class="cls-3" x="124.63" y="0">r</tspan><tspan x="143.31" y="0">yDock</tspan></text></g></svg>
    <p>Local WordPress Development with Docker</p>
    <p>
        <?php (new WPDD\ThemeSetup\RegisterNavigation())->wpddPrimaryNav(); ?>
    </p>
<?php
// End DryDock Landing.
get_footer();
