<?php

namespace WPDD\ThemeSetup;

class ThemeSetup
{

    public function doSetup()
    {
        add_action('after_setup_theme', array($this, 'setUpTheme'), 16);
        add_action('after_switch_theme', array($this, 'flushRewriteRules'));
    }

    public function setUpTheme()
    {
        /**
         * Header Cleanup
         */

        // Remove Really simple discovery.
        $this->removeRSD();

        // Remove Windows Live Writer
        $this->removeWLW();

        // Remove WP version information.
        $this->removeWPGen();
        $this->removeVersionRSS();
        $this->removeVersionCSS();
        $this->removeVersionJS();

        // Remove Emoji Support.
        $this->removeEmoji();

        // Remove DNS Prefix.
        $this->removePrefetch();

        // Remove adjacent post tags.
        $this->removeAdjacentPosts();

        // Remove recent comment styling.
        $this->removeCommentStyle();

        // Remove the default REST API Endpoints.
        $this->removeDefaultREST();

        /**
         * Theme support.
         */

        // Add theme support.
        $this->addThemeSupport();

        /**
         * Quality of Life Options.
         */

        /**
         * Toggles the front-end admin bar.
         *
         * Optional, set in .env
         * Defaults to visible.
         */
        $this->toggleAdminBar();

        /**
         * Removes the default set of dashboard widgets.
         *
         * Optional, set in .env
         * Defaults to visible.
         */
        $this->removeDashWidgets();

        /**
         * Removes selected admin menu items.
         *
         * Options can be individually set in .env
         * Controls multiple options.
         * All options default to visible.
         */
        $this->removeMenuOptions();

        /**
         * Output Options.
         *
         * Cleans up a few minor annoyances.
         */

        // Change the "Read More" text in the excerpt.
        $this->editExcerptReadMore();

        // Remove inline styles from galleries.
        $this->removeInlineGalleryStyle();

        // Remove paragraph tags from images.
        $this->filterPTagsOnImages();
    }

    public function removeRSD()
    {
        remove_action('wp_head', 'rsd_link');
    }

    public function removeWLW()
    {
        remove_action('wp_head', 'wlwmanifest_link');
    }

    public function removeWPGen()
    {
        remove_action('wp_head', 'wp_generator');
    }

    /**
     * Remove Emoji Support
     */
    public function removeEmoji()
    {
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('wp_print_styles', 'print_emoji_styles');
        remove_action('admin_print_styles', 'print_emoji_styles');
        remove_action('admin_print_scripts', 'print_emoji_detection_script');
    }

    /**
     * Remove rel from adjacent posts.
     */
    public function removeAdjacentPosts()
    {
        remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);
    }

    /**
     * Remove WP version from RSS
     */
    public function removeVersionRSS()
    {
        add_filter('the_generator', '__return_empty_string');
    }

    /**
     * Remove inline gallery styling.
     */
    public function removeInlineGalleryStyle()
    {
        add_filter('gallery_style', 'removeGalleryStyle');

        function removeGalleryStyle($css)
        {
            return preg_replace("!<style type='text/css'>(.*?)</style>!s", '', $css);
        }
    }

    /**
     * Remove Paragraph tags on images.
     */
    public function filterPTagsOnImages()
    {
        function filterTags($content)
        {
            return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
        }
    }

    /**
     * Edit the excerpt "Read More" link.
     */
    public function editExcerptReadMore()
    {
        function editExcerptReadMore($more)
        {
            global $post;
            $permalink = get_the_permalink($post->ID);

            $readMore = '...';
            $readMore .= '<a href="' . $permalink . '">';
            $readMore .= 'Read More &raquo;';
            $readMore .= '</a>';

            return $readMore;
        }
    }

    /**
     * Theme Support
     */
    public function addThemeSupport()
    {
        add_action('after_setup_theme', array($this, 'themeSupport'));
    }

    public function themeSupport()
    {
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));
    }

    // Rest API
    public function removeDefaultREST()
    {
        if (!is_admin()) :
            remove_filter('rest_api_init', 'create_initial_rest_routes');
            remove_action('wp_head', 'rest_output_link_wp_head', 10);
            remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
        endif;
    }

    // Version CSS
    public function removeVersionCSS()
    {
        add_filter('style_loader_src', array($this, 'rVerStr'), 10);
    }

    // Version JS
    public function removeVersionJS()
    {
        add_filter('script_loader_src', array($this, 'rVerStr'), 10);
    }

    /**
     * Remove version from string.
     * @param $src
     * @return string
     */
    public function rVerStr($src)
    {
        if (strpos($src, 'ver=')) {
            $src = remove_query_arg('ver', $src);
            return $src;
        }
    }

    // Comment styles.
    public function removeCommentStyle()
    {
        add_action('widgets_init', array($this, 'rComSty'));
    }

    public function rComSty()
    {
        global $wp_widget_factory;
        remove_action(
            'wp_head',
            array(
                $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
                'recent_comments_style'
            )
        );
    }

    // Admin Bar.
    public function toggleAdminBar()
    {
        // HIDE_ADMIN_BAR Boolean, defined .env.
        if ('false' === SHOW_ADMIN_BAR) :
            add_filter('show_admin_bar', '__return_false');
        endif;
    }

    // Prefetch
    public function removePrefetch()
    {
        remove_action('wp_head', 'wp_resource_hints', 2);
    }

    // Dashboard widgets.
    public function removeDashWidgets()
    {
        if ('true' === REMOVE_DEFAULT_DASHBOARD_META) :
            add_action('admin_init', array($this, 'rDasWid'));
        endif;
    }

    public function rDasWid()
    {
        remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');
        remove_meta_box('dashboard_plugins', 'dashboard', 'normal');
        remove_meta_box('dashboard_primary', 'dashboard', 'side');
        remove_meta_box('dashboard_secondary', 'dashboard', 'normal');
        remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
        remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side');
        remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
        remove_meta_box('dashboard_right_now', 'dashboard', 'normal');
        remove_meta_box('dashboard_activity', 'dashboard', 'normal');
    }

    // Admin Menus
    public function removeMenuOptions()
    {
        add_action('admin_init', array($this, 'rMenOpt'));
    }

    public function rMenOpt()
    {
        if (REMOVE_POSTS_MENU === 'true') :
            remove_menu_page('edit.php');
        endif;

        if (REMOVE_MEDIA_MENU === 'true') :
            remove_menu_page('upload.php');
        endif;

        if (REMOVE_PAGES_MENU === 'true') :
            remove_menu_page('edit.php?post_type=page');
        endif;
        if (REMOVE_COMMENTS_MENU === 'true') :
            remove_menu_page('edit-comments.php');
        endif;
        if (REMOVE_APPEARANCE_MENU === 'true') :
            remove_menu_page('themes.php');
        endif;
        if (REMOVE_PLUGINS_MENU === 'true') :
            remove_menu_page('plugins.php');
        endif;
        if (REMOVE_USERS_MENU === 'true') :
            remove_menu_page('users.php');
        endif;
        if (REMOVE_TOOLS_MENU === 'true') :
            remove_menu_page('tools.php');
        endif;
        if (REMOVE_SETTINGS_MENU === 'true') :
            remove_menu_page('options-general.php');
        endif;
    }

    // Rewrite Rules.
    public function flushRewriteRules()
    {
        flush_rewrite_rules();
    }
}
