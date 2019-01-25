<?php

namespace WPDD\SiteIdentity;

class Display
{
    /**
     * @var string $company_name
     */
    public $company_name;

    /**
     * @var string $address_1
     */
    public $address_1;

    /**
     * @var string $address_2
     */
    public $address_2;

    /**
     * @var string $city
     */
    public $city;

    /**
     * @var string $state
     */
    public $state;

    /**
     * @var string $zip
     */
    public $zip;

    /**
     * @var string $country
     */
    public $country;

    /**
     * @var string $phone
     */
    public $phone;

    /**
     * @var string $mission_statement
     */
    public $fax;

    public function __construct()
    {
        $this->company_name      = get_theme_mod('wpdd_company_name');
        $this->address_1         = get_theme_mod('wpdd_street_address_1');
        $this->address_2         = get_theme_mod('wpdd_street_address_2');
        $this->city              = get_theme_mod('wpdd_city');
        $this->state             = get_theme_mod('wpdd_state');
        $this->zip               = get_theme_mod('wpdd_zip');
        $this->country           = get_theme_mod('wpdd_country');
        $this->phone             = get_theme_mod('wpdd_phone');
        $this->fax = get_theme_mod('wpdd_fax');
    }

    public function companyInfoArray()
    {
        $company_info = array();

        if ($this->company_name) :
            $company_info['company_name'] = $this->company_name;
        endif;

        if ($this->address_1) :
            $company_info['address_1'] = $this->address_1;
        endif;

        if ($this->address_2) :
            $company_info['address_2'] = $this->address_2;
        endif;

        if ($this->city) :
            $company_info['city'] = $this->city;
        endif;

        if ($this->state) :
            $company_info['state'] = $this->state;
        endif;

        if ($this->zip) :
            $company_info['zip'] = $this->zip;
        endif;

        if ($this->country) :
            $company_info['country'] = $this->country;
        endif;

        if ($this->phone) :
            $company_info['phone'] = $this->phone;
        endif;

        if ($this->fax) :
            $company_info['fax'] = $this->fax;
        endif;

        return $company_info;
    }

    public function displayCompanyInfo()
    {
        $string = '';

        if ($this->fax) :
            $string .= '<span itemprop="description" class="c_company-info__fax">' . $this->fax . '</span>';
        endif;

        if ($this->company_name) :
            $string .= '<span itemprop="name" class="c_company-info__name">' . $this->company_name . '</span>';
        endif;

        $string .= '<address class="c_company-info__address" itemscope itemtype="//schema.org/PostalAddress" itemprop="address">';

        if ($this->address_1) :
            $string .= '<span itemprop="streetAddress" class="c_company-info__address-1">' . $this->address_1 . '</span>';
        endif;

        if ($this->address_2) :
            $string .= '<span class="c_company-info__address-2">' . $this->address_2 . '</span>';
        endif;

        if ($this->city) :
            $string .= '<span itemprop="addressLocality" class="c_company-info__city">' . $this->city . ', </span>';
        endif;

        if ($this->state) :
            $string .= '<span itemprop="addressRegion" class="c_company-info__state">' . $this->state . ' </span>';
        endif;

        if ($this->zip) :
            $string .= '<span class="c_company-info__zip">' . $this->zip . '</span>';
        endif;

        if ($this->country) :
            $string .= '<span itemprop="addressCountry" class="c_company-info__country">' . $this->country . '</span>';
        endif;

        $string .= '</address>';

        if ($this->phone) :
            $string .= '<span itemprop="telephone" class="c_company-info__phone">' . $this->phone . '</span>';
        endif;

        echo $string;
    }
}
