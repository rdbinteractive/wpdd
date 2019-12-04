<?php

namespace WPDD\SiteIdentity;

class Display
{
    /**
     * Returns formatted address block.
     *
     * @return string
     */
    public function addressBlock()
    {
        $string = $this->companyName();
        $string .= '<address class="c_site-identity__address" 
                             itemscope itemtype="//schema.org/PostalAddress" 
                             itemprop="address"
                   >';
        $string .= $this->address1();
        $string .= $this->address2();
        $string .= $this->city();
        $string .= $this->state();
        $string .= $this->zip();
        $string .= $this->country();
        $string .= $this->phone();
        $string .= $this->fax();
        $string .= '</address>';
        return $string;
    }

    /**
     * Get the Company Name theme mod.
     *
     * @return string
     */
    private function companyName()
    {
        $companyName = get_theme_mod('wpdd_company_name', false);

        if (!$companyName) :
            return '';
        endif;

        return '<span itemprop="name" class="c_site-identity__name">' . $companyName . '</span>';
    }

    /**
     * Get the Address 1 theme mod.
     *
     * @return string
     */
    private function address1()
    {
        $address1 = get_theme_mod('wpdd_street_address_1', false);

        if (!$address1) :
            return '';
        endif;

        return '<span itemprop="streetAddress" class="c_site-identity__address-1">' . $address1 . '</span>';
    }

    /**
     * Get the Address 2 theme mod.
     *
     * @return string
     */
    private function address2()
    {
        $address2 = get_theme_mod('wpdd_street_address_2', false);

        if (!$address2) :
            return '';
        endif;

        return '<span class="c_site-identity__address-2">' . $address2 . '</span>';
    }

    /**
     * Get the City theme mod.
     *
     * @return string
     */
    private function city()
    {
        $city = get_theme_mod('wpdd_city', false);

        if (!$city) :
            return '';
        endif;

        return '<span itemprop="addressLocality" class="c_site-identity__city">' . $city . ', </span>';
    }

    /**
     * Get the State theme mod.
     *
     * @return string
     */
    private function state()
    {
        $state = get_theme_mod('wpdd_state', false);

        if (!$state) :
            return '';
        endif;

        return '<span itemprop="addressRegion" class="c_site-identity__state">' . $state . ' </span>';
    }

    /**
     * Get the Zip theme mod.
     *
     * @return string
     */
    private function zip()
    {
        $zip = get_theme_mod('wpdd_zip', false);

        if (!$zip) :
            return '';
        endif;

        return '<span itemprop="postalCode" class="c_site-identity__zip">' . $zip . '</span>';
    }

    /**
     * Get the Country theme mod.
     *
     * @return string
     */
    private function country()
    {
        $country = get_theme_mod('wpdd_country', false);

        if (!$country) :
            return '';
        endif;

        return '<span itemprop="addressCountry" class="c_site-identity__country">' . $country . '</span>';
    }

    /**
     * Get the Phone theme mod.
     *
     * @return string
     */
    private function phone()
    {
        $phone = get_theme_mod('wpdd_phone', false);

        if (!$phone) :
            return '';
        endif;

        return '<span itemprop="telephone" class="c_site-identity__phone">' . $phone . '</span>';
    }

    /**
     * Get the Fax theme mod.
     *
     * @return string
     */
    private function fax()
    {
        $fax = get_theme_mod('wpdd_fax', false);

        if (!$fax) :
            return '';
        endif;

        return '<span itemprop="fax" class="c_site-identity__fax">' . $fax . '</span>';
    }
}
