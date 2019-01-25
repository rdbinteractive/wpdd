<?php

namespace WPDD\SiteIdentity;

class Display
{
    /**
     * @var string
     */
    public $company_name;

    /**
     * @var string
     */
    public $address_1;

    /**
     * @var string
     */
    public $address_2;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $zip;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $fax;

    public function __construct()
    {
        $this->company_name      = esc_html(get_theme_mod('wpdd_company_name'));
        $this->address_1         = esc_html(get_theme_mod('wpdd_street_address_1'));
        $this->address_2         = esc_html(get_theme_mod('wpdd_street_address_2'));
        $this->city              = esc_html(get_theme_mod('wpdd_city'));
        $this->state             = esc_html(get_theme_mod('wpdd_state'));
        $this->zip               = esc_html(get_theme_mod('wpdd_zip'));
        $this->country           = esc_html(get_theme_mod('wpdd_country'));
        $this->phone             = esc_html(get_theme_mod('wpdd_phone'));
        $this->fax               = esc_html(get_theme_mod('wpdd_fax'));
    }

    /**
     * Returns formatted address block.
     *
     * @return string
     */
    public function addressBlock()
    {
        $string = '';

        if ($this->company_name) :
            $string .= '<span itemprop="name" class="c_site-identity__name">' . $this->company_name . '</span>';
        endif;

        $string .= '<address class="c_site-identity__address" itemscope itemtype="//schema.org/PostalAddress" itemprop="address">'; // @codingStandardsIgnoreLine.

        if ($this->address_1) :
            $string .= '<span itemprop="streetAddress" class="c_site-identity__address-1">' . $this->address_1 . '</span>'; // @codingStandardsIgnoreLine.
        endif;

        if ($this->address_2) :
            $string .= '<span class="c_site-identity__address-2">' . $this->address_2 . '</span>';
        endif;

        if ($this->city) :
            $string .= '<span itemprop="addressLocality" class="c_site-identity__city">' . $this->city . ', </span>';
        endif;

        if ($this->state) :
            $string .= '<span itemprop="addressRegion" class="c_site-identity__state">' . $this->state . ' </span>';
        endif;

        if ($this->zip) :
            $string .= '<span class="c_site-identity__zip">' . $this->zip . '</span>';
        endif;

        if ($this->country) :
            $string .= '<span itemprop="addressCountry" class="c_site-identity__country">' . $this->country . '</span>';
        endif;

        $string .= '</address>';

        if ($this->phone) :
            $string .= '<span itemprop="telephone" class="c_site-identity__phone">' . $this->phone . '</span>';
        endif;

        if ($this->fax) :
            $string .= '<span itemprop="description" class="c_site-identity__fax">' . $this->fax . '</span>';
        endif;

        return $string;
    }
}
