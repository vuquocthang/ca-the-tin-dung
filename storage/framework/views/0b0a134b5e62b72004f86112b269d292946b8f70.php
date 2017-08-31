<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <?php $__env->startSection('meta_description'); ?>
    <meta name="description" content="<?php echo e(\App\Seo::findOrFail(1)->meta_description); ?>">
    <?php echo $__env->yieldSection(); ?>

    <meta name="keywords" content="<?php echo e(\App\Seo::findOrFail(1)->meta_keyword); ?>">
    <script type="text/javascript">
        document.documentElement.className = document.documentElement.className + ' yes-js js_active js'
    </script>

    <link rel="stylesheet" href="<?php echo e(url('public/ampleadmin')); ?>/plugins/bower_components/tinymce/skins/lightgray/skin.min.css">

    <title>Cà Thẻ Tín Dụng</title>
    <style>
        .wishlist_table .add_to_cart,
        a.add_to_wishlist.button.alt {
            border-radius: 16px;
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
        }
    </style>

    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.3\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.3\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "http:\/\/wedesignthemes.com\/themes\/mini\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.8"
            }
        };
        ! function(a, b, c) {
            function d(a) {
                var b, c, d, e, f = String.fromCharCode;
                if (!k || !k.fillText) return !1;
                switch (k.clearRect(0, 0, j.width, j.height), k.textBaseline = "top", k.font = "600 32px Arial", a) {
                    case "flag":
                        return k.fillText(f(55356, 56826, 55356, 56819), 0, 0), b = j.toDataURL(), k.clearRect(0, 0, j.width, j.height), k.fillText(f(55356, 56826, 8203, 55356, 56819), 0, 0), c = j.toDataURL(), b === c && (k.clearRect(0, 0, j.width, j.height), k.fillText(f(55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447), 0, 0), b = j.toDataURL(), k.clearRect(0, 0, j.width, j.height), k.fillText(f(55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447), 0, 0), c = j.toDataURL(), b !== c);
                    case "emoji4":
                        return k.fillText(f(55358, 56794, 8205, 9794, 65039), 0, 0), d = j.toDataURL(), k.clearRect(0, 0, j.width, j.height), k.fillText(f(55358, 56794, 8203, 9794, 65039), 0, 0), e = j.toDataURL(), d !== e
                }
                return !1
            }

            function e(a) {
                var c = b.createElement("script");
                c.src = a, c.defer = c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
            }
            var f, g, h, i, j = b.createElement("canvas"),
                k = j.getContext && j.getContext("2d");
            for (i = Array("flag", "emoji4"), c.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, h = 0; h < i.length; h++) c.supports[i[h]] = d(i[h]), c.supports.everything = c.supports.everything && c.supports[i[h]], "flag" !== i[h] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[i[h]]);
            c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function() {
                c.DOMReady = !0
            }, c.supports.everything || (g = function() {
                c.readyCallback()
            }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", g, !1), a.addEventListener("load", g, !1)) : (a.attachEvent("onload", g), b.attachEvent("onreadystatechange", function() {
                "complete" === b.readyState && c.readyCallback()
            })), f = c.source || {}, f.concatemoji ? e(f.concatemoji) : f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='dt-animation-css-css' href='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/designthemes-core-features/shortcodes/css/animations.css' type='text/css' media='all' />
    <link rel='stylesheet' id='dt-sc-css-css' href='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/designthemes-core-features/shortcodes/css/shortcodes.css' type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css' href='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/contact-form-7/includes/css/styles.css-ver=4.7.htm' type='text/css' media='all' />
    <link rel='stylesheet' id='sb_instagram_styles-css' href='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/instagram-feed/css/sb-instagram.min.css-ver=1.4.8.htm' type='text/css' media='all' />
    <link rel='stylesheet' id='sb_instagram_icons-css' href='<?php echo e(url('public/cttd')); ?>/maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css' href='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/revslider/public/assets/css/settings.css' type='text/css' media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {}
    </style>
    <link rel='stylesheet' id='woocommerce_prettyPhoto_css-css' href='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/woocommerce/assets/css/prettyPhoto.css-ver=3.0.7.htm' type='text/css' media='all' />
    <link rel='stylesheet' id='jquery-selectBox-css' href='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/yith-woocommerce-wishlist/assets/css/jquery.selectBox.css-ver=1.2.0.htm' type='text/css' media='all' />
    <link rel='stylesheet' id='yith-wcwl-main-css' href='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/yith-woocommerce-wishlist/assets/css/style.css-ver=2.1.2.htm' type='text/css' media='all' />
    <link rel='stylesheet' id='yith-wcwl-font-awesome-css' href='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/yith-woocommerce-wishlist/assets/css/font-awesome.min.css-ver=4.7.0.htm' type='text/css' media='all' />
    <link rel='stylesheet' id='bsf-Defaults-css' href='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/uploads/smile_fonts/Defaults/Defaults.css' type='text/css' media='all' />
    <link rel='stylesheet' id='mini-blog-css' href='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/themes/mini-blog/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='miniblog-base-css' href='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/themes/mini-blog/css/base.css' type='text/css' media='all' />
    <link rel='stylesheet' id='miniblog-grid-css' href='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/themes/mini-blog/css/grid.css' type='text/css' media='all' />
    <link rel='stylesheet' id='miniblog-widget-css' href='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/themes/mini-blog/css/widget.css' type='text/css' media='all' />
    <link rel='stylesheet' id='miniblog-layout-css' href='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/themes/mini-blog/css/layout.css' type='text/css' media='all' />
    <link rel='stylesheet' id='miniblog-blog-css' href='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/themes/mini-blog/css/blog.css' type='text/css' media='all' />
    <link rel='stylesheet' id='miniblog-portfolio-css' href='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/themes/mini-blog/css/portfolio.css' type='text/css' media='all' />
    <link rel='stylesheet' id='miniblog-contact-css' href='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/themes/mini-blog/css/contact.css' type='text/css' media='all' />
    <link rel='stylesheet' id='miniblog-custom-class-css' href='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/themes/mini-blog/css/custom-class.css' type='text/css' media='all' />
    <link rel='stylesheet' id='magnific-popup-css' href='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/themes/mini-blog/css/magnific-popup.css' type='text/css' media='all' />
    <link rel='stylesheet' id='custom-font-awesome-css' href='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/themes/mini-blog/css/font-awesome.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='pe-icon-7-stroke-css' href='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/themes/mini-blog/css/pe-icon-7-stroke.css' type='text/css' media='all' />
    <link rel='stylesheet' id='stroke-gap-icons-style-css' href='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/themes/mini-blog/css/stroke-gap-icons-style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='icon-moon-css' href='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/themes/mini-blog/css/icon-moon.css' type='text/css' media='all' />
    <link rel='stylesheet' id='material-design-iconic-css' href='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/themes/mini-blog/css/material-design-iconic-font.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='miniblog-loader-css' href='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/themes/mini-blog/css/loaders.css' type='text/css' media='all' />
    <link rel='stylesheet' id='miniblog-woo-css' href='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/themes/mini-blog/css/woocommerce.css' type='text/css' media='all' />
    <link rel='stylesheet' id='skin-css' href='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/themes/mini-blog/css/skins/gold/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='miniblog-customevent-css' href='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/themes/mini-blog/tribe-events/custom.css' type='text/css' media='all' />
    <link rel='stylesheet' id='miniblog-responsive-css' href='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/themes/mini-blog/css/responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' id='miniblog-fonts-css' href='<?php echo e(url('public/cttd')); ?>/fonts.googleapis.com/css-family=Lato---100---100italic---300---300italic---400---400italic---500---600---700---800---800italic---Lora---100---100italic---300---300italic---400---400italic---500---600---700---800---800italic-subset' type='text/css' media='all' />
    <link rel='stylesheet' id='miniblog-custom-css' href='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/themes/mini-blog/css/custom.css' type='text/css' media='all' />
    <style id='miniblog-combined-inline-css' type='text/css'>
        body,
        .layout-boxed .inner-wrapper,
        .blog-entry.post-info-bottom-image .entry-meta,
        .dt-sc-contact-info.type4,
        .dt-sc-contact-info.type3:after,
        .dt-sc-contact-info.type5:hover .dt-sc-contact-icon,
        .dt-sc-image-caption .dt-sc-image-wrapper .icon-wrapper:after,
        .dt-sc-timeline-section.type3 .dt-sc-timeline .dt-sc-timeline-content:after,
        .dt-sc-timeline-section.type5 .dt-sc-timeline .dt-sc-timeline-content .dt-sc-timeline-icon-wrapper,
        .woocommerce div.product .woocommerce-tabs ul.tabs li.active {
            background-color: #f8f8f8;
        }

        .blog-entry.entry-classic .entry-format a,
        .dt-sc-icon-box.type3 .icon-wrapper span,
        .dt-sc-icon-box.type6 .icon-wrapper,
        .dt-sc-icon-box.type7 .icon-wrapper span {
            border-color: #f8f8f8;
        }

        ul.dt-sc-tabs-horizontal-frame > li > a.current,
        .woocommerce div.product .woocommerce-tabs ul.tabs li.active {
            border-bottom-color: #f8f8f8;
        }

        ul.dt-sc-tabs-vertical-frame > li > a.current,
        .dt-sc-image-caption.type7 .dt-sc-image-wrapper:before {
            border-right-color: #f8f8f8;
        }

        .dt-sc-tabs-horizontal-frame-container.type2 ul.dt-sc-tabs-horizontal-frame > li > a.current,
        .dt-sc-testimonial.type2 blockquote:before,
        .dt-sc-image-caption.type7.top-content .dt-sc-image-wrapper:before,
        .dt-sc-tabs-horizontal-frame-container.type6 ul.dt-sc-tabs-horizontal-frame > li > a:before {
            border-top-color: #f8f8f8;
        }

        .dt-sc-image-caption.type7.left-content .dt-sc-image-wrapper:before {
            border-left-color: #f8f8f8;
        }

        .extend-bg-fullwidth-left:after,
        .extend-bg-fullwidth-right:after {
            background: ;
        }

        .top-bar a,
        .dt-sc-dark-bg.top-bar a {
            color: ;
        }

        .top-bar {
            color: #2f2e2e;
            background-color: #eeeeee
        }

        .top-bar a:hover,
        .dt-sc-dark-bg.top-bar a:hover {
            color: #2f2e2e;
        }

        #main-menu ul.menu > li > a,
        .main-header ul.dt-sc-sociable li a {
            color: #2f2e2e;
        }

        .footer-widgets.dt-sc-dark-bg {
            background-color: rgba(255, 255, 255, 1);
        }

        .footer-widgets,
        #footer,
        .footer-copyright {
            color: #777777;
        }

        .footer-widgets a,
        #footer a {
            color: #2f2e2e;
        }

        #footer h3 {
            color: #2f2e2e;
        }

        .footer-copyright {
            background: rgba(255, 255, 255, 1);
        }

        #main-menu .megamenu-child-container > ul.sub-menu > li > a,
        #main-menu .megamenu-child-container > ul.sub-menu > li > .nolink-menu {
            color: ;
        }

        #main-menu .megamenu-child-container > ul.sub-menu > li > a:hover {
            color: ;
        }

        #main-menu .megamenu-child-container > ul.sub-menu > li.current_page_item > a,
        #main-menu .megamenu-child-container > ul.sub-menu > li.current_page_ancestor > a,
        #main-menu .megamenu-child-container > ul.sub-menu > li.current-menu-item > a,
        #main-menu .megamenu-child-container > ul.sub-menu > li.current-menu-ancestor > a {
            color: ;
        }

        #main-menu .megamenu-child-container ul.sub-menu > li > ul > li > a,
        #main-menu ul li.menu-item-simple-parent ul > li > a {
            color: ;
        }

        h1,
        .dt-sc-counter.type1 .dt-sc-counter-number,
        .dt-sc-portfolio-sorting a,
        .dt-sc-testimonial .dt-sc-testimonial-author cite,
        .dt-sc-pr-tb-col.minimal .dt-sc-price p,
        .dt-sc-pr-tb-col.minimal .dt-sc-price h6 span,
        .dt-sc-testimonial.special-testimonial-carousel blockquote,
        .dt-sc-pr-tb-col .dt-sc-tb-title,
        .dt-sc-pr-tb-col .dt-sc-tb-content,
        .dt-sc-pr-tb-col .dt-sc-tb-content li,
        .dt-sc-bar-text,
        .dt-sc-counter.type3 .dt-sc-counter-number,
        .dt-sc-newsletter-section.type2 .dt-sc-subscribe-frm input[type="submit"],
        .dt-sc-timeline .dt-sc-timeline-content h2 span,
        .dt-sc-model-sorting a,
        .dt-sc-icon-box.type9 .icon-content h4,
        .dt-sc-icon-box.type9 .icon-content h4 span,
        .dt-sc-menu-sorting a,
        .dt-sc-menu .image-overlay .price,
        .dt-sc-menu .menu-categories a,
        .dt-sc-pr-tb-col .dt-sc-price h6,
        ul.products li .onsale {
            font-family: Lora, sans-serif;
        }

        h2 {
            font-family: Lora, sans-serif;
        }

        h3,
        .dt-sc-testimonial.type1 blockquote,
        .blog-entry.entry-date-left .entry-date,
        .dt-sc-ribbon-title,
        .dt-sc-testimonial.type1 .dt-sc-testimonial-author cite {
            font-family: Lora, sans-serif;
        }

        h4,
        .blog-entry .entry-meta,
        .dt-sc-button,
        .widget.widget_tabbed_posts .dt-sc-tabs-content .entry-comment .entry-comment-meta a,
        .widget > ul > li {
            font-family: Lora, sans-serif;
        }

        h5 {
            font-family: Lora, sans-serif;
        }

        h6,
        #main-menu ul.menu > li > a,
        .dt-sc-counter.type1 .dt-sc-counter-number,
        .dt-sc-portfolio-sorting a,
        .dt-sc-testimonial.type1 blockquote,
        .entry-meta,
        .dt-sc-testimonial .dt-sc-testimonial-author cite,
        .dt-sc-pr-tb-col.minimal .dt-sc-price p,
        .dt-sc-pr-tb-col.minimal .dt-sc-price h6 span,
        .dt-sc-testimonial.special-testimonial-carousel blockquote,
        .dt-sc-pr-tb-col .dt-sc-tb-title,
        .dt-sc-pr-tb-col .dt-sc-tb-content,
        .dt-sc-button,
        .dt-sc-bar-text,
        .dt-sc-post-block-default-wrapper .blog-entry .entry-meta-data .category a,
        blockquote.type1,
        .dt-sc-testimonial.type5 .dt-sc-testimonial-quote blockquote,
        .dt-sc-testimonial.type5 .dt-sc-testimonial-author cite:before,
        .dt-sc-testimonial.type1 q:before,
        .dt-sc-testimonial.type1 q:after {
            font-family: Lora, sans-serif;
        }

        h1 {
            font-size: 40px;
            font-weight: normal;
            letter-spacing: 0px;
        }

        h2 {
            font-size: 34px;
            font-weight: normal;
            letter-spacing: 0px;
        }

        h3 {
            font-size: 28px;
            font-weight: normal;
            letter-spacing: 0px;
        }

        h4 {
            font-size: 24px;
            font-weight: normal;
            letter-spacing: 0px;
        }

        h5 {
            font-size: 18px;
            font-weight: normal;
            letter-spacing: 0px;
        }

        h6 {
            font-size: 16px;
            font-weight: normal;
            letter-spacing: 0px;
        }

        body {
            font-size: 14px;
            line-height: 26px;
        }

        body,
        .blog-entry.blog-medium-style .entry-meta,
        .dt-sc-event-image-caption .dt-sc-image-content h3,
        .dt-sc-events-list .dt-sc-event-title h5,
        .dt-sc-team.type2 .dt-sc-team-details h4,
        .dt-sc-team.type2 .dt-sc-team-details h5,
        .dt-sc-contact-info.type5 h6,
        .dt-sc-sponsors .dt-sc-one-third h3,
        .dt-sc-testimonial.type5 .dt-sc-testimonial-author cite,
        .dt-sc-counter.type3 h4,
        .dt-sc-contact-info.type2 h6,
        .woocommerce ul.products li.product .onsale,
        #footer .mailchimp-form input[type="email"],
        .dt-sc-icon-box.type5 .icon-content h5,
        .main-header #searchform input[type="text"],
        .dt-sc-testimonial.type1 .dt-sc-testimonial-author cite small,
        .dt-sc-pr-tb-col.type2 .dt-sc-tb-content li,
        .dt-sc-team.rounded .dt-sc-team-details h5,
        .megamenu-child-container > ul.sub-menu > li > a .menu-item-description,
        .menu-item-description,
        .blog-entry.entry-classic .entry-details .dt-sc-button.transparent,
        .secondary-sidebar .type11 .widgettitle,
        .blog-entry.entry-overlay .dt-sc-button.with-icon.icon-right.type1,
        input[type="submit"],
        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="url"],
        input[type="tel"],
        input[type="number"],
        input[type="range"],
        input[type="date"],
        textarea,
        input.text,
        input[type="search"],
        select,
        textarea,
        input[type="submit"],
        input[type="reset"] {
            font-family: Lato, sans-serif;
        }

        #main-menu ul.menu > li > a,
        .left-header #main-menu > ul.menu > li > a {
            font-size: 12px;
            font-weight: normal;
            letter-spacing: 0px;
        }

        #main-menu ul.menu > li > a,
        .dt-sc-pr-tb-col .dt-sc-tb-title h5,
        .dt-sc-timeline .dt-sc-timeline-content h2,
        .dt-sc-icon-box.type3 .icon-content h4,
        .dt-sc-popular-procedures .details h3,
        .dt-sc-popular-procedures .details .duration,
        .dt-sc-popular-procedures .details .price,
        .dt-sc-counter.type2 .dt-sc-counter-number,
        .dt-sc-counter.type2 h4,
        .dt-sc-testimonial.type4 .dt-sc-testimonial-author cite {
            font-family: Lato, sans-serif;
        }

        #footer {
            font-size: 14px;
        }

        .loader .loader-inner .text {
            background-image: -webkit-linear-gradient(transparent, transparent), url(wp-content/uploads/2017/05/loader-bg-gif-2.gif);
        }
    </style>
    <script type='text/javascript' src='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-includes')); ?>/js/jquery/jquery.js'></script>
    <script type='text/javascript' src='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-includes')); ?>/js/jquery/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js'></script>
    <script type='text/javascript' src='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wc_add_to_cart_params = {
            "ajax_url": "\/themes\/mini\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/themes\/mini\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "http:\/\/wedesignthemes.com\/themes\/mini\/cart\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js'></script>
    <script type='text/javascript' src='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart.js'></script>
    <script type='text/javascript' src='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-includes')); ?>/js/jquery/ui/core.min.js'></script>
    <script type='text/javascript' src='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-includes')); ?>/js/jquery/ui/widget.min.js'></script>
    <script type='text/javascript' src='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-includes')); ?>/js/jquery/ui/tabs.min.js'></script>
    <script type='text/javascript' src='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/themes/mini-blog/framework/js/modernizr.custom.js'></script>
    <link rel='https://api.w.org/' href='wp-json/index.htm' />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc.php-rsd.htm" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml.htm" />
    <meta name="generator" content="WordPress 4.8" />
    <meta name="generator" content="WooCommerce 3.0.7" />
    <link rel="canonical" href="index.htm" />
    <link rel='shortlink' href='index.htm' />
    <link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed-url=http---------wedesignthemes.com---themes---mini---.htm" />
    <link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed-url=http---------wedesignthemes.com---themes---mini----format=xml.htm" />
    <link href='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/uploads/2017/05/favicon.png' rel='shortcut icon' type='image/x-icon' />
    <link href='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/uploads/2017/05/apple-touch-icon.png' rel='apple-touch-icon' />
    <link href='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/uploads/2017/05/apple-touch-icon-114x114.png' sizes='114x114' rel='apple-touch-icon' />
    <link href='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/uploads/2017/05/apple-touch-icon-72x72.png' sizes='72x72' rel='apple-touch-icon' />
    <link href='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/uploads/2017/05/apple-touch-icon-144x144.png' sizes='144x144' rel='apple-touch-icon' />
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
    <meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress." />
    <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]-->
    <meta name="generator" content="Powered by Slider Revolution 5.4.1 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <noscript>
        <style type="text/css">
            .wpb_animate_when_almost_visible {
                opacity: 1;
            }
        </style>
    </noscript>

    <script type="text/javascript" src="<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/revslider/public/assets/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/revslider/public/assets/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/revslider/public/assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/revslider/public/assets/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/revslider/public/assets/js/extensions/revolution.extension.parallax.min.js"></script>
</head>

<body class="home page-template page-template-tpl-blog page-template-tpl-blog-php page page-id-2 layout-wide fullwidth-header header-align-center fullwidth-menu-header sticky-header standard-header woo-type2 page-with-slider no-breadcrumb wpb-js-composer js-comp-ver-5.1.1 vc_responsive">

<div id="fb-root"></div>

<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>


<div class="loader">
    <div class="loader-inner">
        <div class="text">Loading</div>
    </div>
</div>
<!-- **Wrapper** -->
<div class="wrapper" style="border-top: 10px solid #05d24d  ">
    <div class="inner-wrapper">

        <!-- **Header Wrapper** -->
        <div id="header-wrapper" class="">
            <!-- **Header** -->
            <header id="header">
                <div class="sidebar main right" id="sidebar-main">
                    <div class="wrapper">
                        <div id="slide-logo">
                            <a href="index.htm" title="Minimal Blog WordPress Theme">
                                <img class="slide_logo" src="<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/themes/mini-blog/images/slide-logo.png" alt="Minimal Blog WordPress Theme" title="Minimal Blog WordPress Theme" />
                            </a>
                        </div>
                        <nav class="slide-menu">
                            <ul class="slide-cat-list">
                                <li class="cat-item cat-item-52"><a href="blog/category/fashion/index.htm">Fashion<span> 6</span></a>
                                </li>
                                <li class="cat-item cat-item-53"><a href="blog/category/lifestyle/index.htm">Lifestyle<span> 23</span></a>
                                </li>
                                <li class="cat-item cat-item-82"><a href="blog/category/music/index.htm">Music<span> 1</span></a>
                                </li>
                                <li class="cat-item cat-item-1"><a href="blog/category/nature/index.htm">Nature<span> 4</span></a>
                                </li>
                                <li class="cat-item cat-item-55"><a href="blog/category/photography/index.htm">Photography<span> 4</span></a>
                                </li>
                                <li class="cat-item cat-item-79"><a href="blog/category/technology/index.htm">Technology<span> 12</span></a>
                                </li>
                                <li class="cat-item cat-item-80"><a href="blog/category/video/index.htm">Video<span> 4</span></a>
                                </li>
                            </ul>
                        </nav>
                        <div class="slide-footer">
                            <div class="secondary-sidebar">
                                <div class="type11">
                                    <aside id="miniblog_about-1" class="widget widget_about">
                                        <h3 class="widgettitle">Carolina</h3>
                                        <div class="dt-sc-about-widget">
                                            <div class="entry-about-thumb"><img src="<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/uploads/2015/06/testimonial-image1.jpg" alt="about-img"></div>
                                            <div class="entry-about-desc">
                                                <p>Donec eu nunc ut velit pellentesque commodo. Nunc a placerat justo.</p>
                                                <ul class="dt-sc-team-social  aligncenter rounded-border">
                                                    <li>
                                                        <a class="fa fa-twitter" href="index.htm#" title="Twitter"></a>
                                                    </li>
                                                    <li>
                                                        <a class="fa fa-facebook" href="index.htm#" title="Facebook"></a>
                                                    </li>
                                                    <li>
                                                        <a class="fa fa-google-plus" href="index.htm#" title="Google"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- **Main Header Wrapper** -->
                <div id="main-header-wrapper" class="main-header-wrapper">

                    <div class="container">

                        <!-- **Main Header** -->
                        <div class="main-header">
                            <div class="header-left">
                                <ul class='dt-sc-sociable  '>

                                    <li>
                                        <a class='fa fa-phone' ></a>
                                    </li>
                                    <li>
                                        <a  class='fa' style="color: #2f2e2e;" >01234.15.1111</a>
                                    </li>

                                </ul>
                            </div>
                            <div id="logo">
                                <a href="index.htm" title="Minimal Blog WordPress Theme">
                                    <img class="normal_logo" src="<?php echo e(url('public/logo')); ?>/logo.png" alt="Minimal Blog WordPress Theme" title="Minimal Blog WordPress Theme" />
                                    <img class="darkbg_logo" src="<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/uploads/2017/05/logo-light.png" alt="Minimal Blog WordPress Theme" title="Minimal Blog WordPress Theme" />
                                </a>
                            </div>
                            <div class="header-right">
                                <div class="dt-overlay-search">
                                    <div class="overlay-search-icon" id="overlay-search-icon"> <span class="fa fa-search"> </span> </div>
                                    <div class="overlay overlay-search">
                                        <div class="overlay-close"></div>
                                        <!-- **Searchform** -->
                                        <form method="get" class="dt-sc-search-form" id="searchform" action="index.htm">
                                            <input id="s" name="s" type="text" value="Search ..." class="text_input" />
                                            <a href="void(0)/index.htm" class="dt-search-icon"> <span class="fa fa-close"> </span> </a>
                                            <input name="submit" type="submit" value="Go" />
                                        </form>
                                        <!-- **Searchform - End** -->
                                    </div>
                                </div>

                            </div>
                            <div id="menu-wrapper" class="menu-wrapper menu-with-splitter" style="border-top-color: #05d24d; border-bottom-color: #05d24d">
                                <div class="dt-menu-toggle" id="dt-menu-toggle">
                                    Menu <span class="dt-menu-toggle-icon"></span>
                                </div>
                                <nav id="main-menu" class="menu-main-menu-container">
                                    <style>
                                        .menu-item a{
                                            color: #03d56b !important;
                                        }
                                    </style>
                                    <ul class="menu" >
                                        <li id="menu-item-117" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-depth-0 menu-item-simple-parent ">
                                            <a href="index.htm">Trang Chủ</a>
                                        </li>

                                        <li id="menu-item-118" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-depth-0 menu-item-simple-parent ">
                                            <a href="index.htm">Cà Thẻ Tín Dụng</a>
                                        </li>

                                        <li id="menu-item-119" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-depth-0 menu-item-simple-parent ">
                                            <a href="index.htm">Đáo Hạn Thẻ Tín Dụng</a>
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- **Main Header** -->
                <?php $__env->startSection('slider'); ?>
                <div id="slider">
                    <div class="dt-sc-main-slider" id="dt-sc-rev-slider">
                        <link href="<?php echo e(url('public/cttd')); ?>/fonts.googleapis.com/css-family=Lora-400---Lato-400---300" rel="stylesheet" property="stylesheet" type="text/css" media="all">
                        <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="specific_posts" style="margin:0px auto;background:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
                            <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
                            <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
                                <ul>
                                    <!-- SLIDE  -->
                                    <li data-index="rs-7797" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="http://wedesignthemes.com/themes/mini/wp-content/uploads/2017/05/blog17-100x100.jpg" data-rotate="0" data-saveperformance="off" data-title="The latest passion &#8211; photography" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src="<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/revslider/admin/assets/images/dummy.png" alt="" title="blog17" width="1200" height="800" data-lazyload="<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/')); ?>/image/slider1.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                                        <!-- LAYERS -->

                                        <!-- LAYER NR. 1 -->
                                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-7797-layer-5" data-x="center" data-hoffset="" data-y="bottom" data-voffset="" data-width="['full','full','full','full']" data-height="['150']" data-type="shape" data-responsive_offset="on" data-wrapper_class="grdnt-bg" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;background-color:rgba(0,0,0,0.5);"> </div>

                                        <!-- LAYER NR. 2 -->
                                        <div class="tp-caption   tp-resizeme" id="slide-7797-layer-1" data-x="30" data-y="bottom" data-voffset="62" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":500,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 25px; line-height: 30px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Lora;">Rút Tiền Mặt Từ Thẻ Tín Dụng</div>

                                        <!-- LAYER NR. 3 -->


                                        <!-- LAYER NR. 4 -->
                                        <div class="tp-caption   tp-resizeme" id="slide-7797-layer-3" data-x="30" data-y="bottom" data-voffset="30" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":990,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8; white-space: nowrap; font-size: 16px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Lato;">Chi Phí Chỉ Từ 1.5% </div>

                                        <!-- LAYER NR. 5 -->
                                        <div class="tp-caption rev-btn " id="slide-7797-layer-4" data-x="right" data-hoffset="30" data-y="bottom" data-voffset="45" data-width="['auto']" data-height="['auto']" data-type="button" data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"http:\/\/wedesignthemes.com\/themes\/mini\/blog\/the-latest-passion-photography\/","delay":""}]' data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":2490,"speed":1500,"frame":"0","from":"x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]" data-paddingright="[20,20,20,20]" data-paddingbottom="[12,12,12,12]" data-paddingleft="[20,20,20,20]" style="z-index: 9; white-space: nowrap; font-size: 16px; line-height: 17px; font-weight: 300; color: rgba(255,255,255,1); letter-spacing: px;font-family:Lato;background-color:rgba(0,0,0,0.75);border-color:rgba(0,0,0,1);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Xem Thêm </div>
                                    </li>
                                    <!-- SLIDE  -->
                                    <li data-index="rs-7795" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="http://wedesignthemes.com/themes/mini/wp-content/uploads/2017/05/blog3-100x100.jpg" data-rotate="0" data-saveperformance="off" data-title="Bikers show off to their pretty pillion riders" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src="<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/revslider/admin/assets/images/dummy.png" alt="" title="blog3" width="1200" height="800" data-lazyload="<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/')); ?>/image/slider2.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                                        <!-- LAYERS -->

                                        <!-- LAYER NR. 6 -->
                                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-7795-layer-5" data-x="center" data-hoffset="" data-y="bottom" data-voffset="" data-width="['full','full','full','full']" data-height="['150']" data-type="shape" data-responsive_offset="on" data-wrapper_class="grdnt-bg" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;background-color:rgba(0,0,0,0.5);"> </div>

                                        <!-- LAYER NR. 7 -->
                                        <div class="tp-caption   tp-resizeme" id="slide-7795-layer-1" data-x="30" data-y="bottom" data-voffset="62" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":500,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 25px; line-height: 30px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Lora;">Với Chi Phí Thật Thấp </div>

                                        <!-- LAYER NR. 8 -->

                                        <!-- LAYER NR. 9 -->
                                        <div class="tp-caption   tp-resizeme" id="slide-7795-layer-3" data-x="30" data-y="bottom" data-voffset="30" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":990,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8; white-space: nowrap; font-size: 16px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Lato;">45 Ngày Miễn Lãi</div>

                                        <!-- LAYER NR. 10 -->
                                        <div class="tp-caption rev-btn " id="slide-7795-layer-4" data-x="right" data-hoffset="30" data-y="bottom" data-voffset="45" data-width="['auto']" data-height="['auto']" data-type="button" data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"http:\/\/wedesignthemes.com\/themes\/mini\/blog\/bikers-show-off-to-their-pretty-pillion-riders\/","delay":""}]' data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":2490,"speed":1500,"frame":"0","from":"x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]" data-paddingright="[20,20,20,20]" data-paddingbottom="[12,12,12,12]" data-paddingleft="[20,20,20,20]" style="z-index: 9; white-space: nowrap; font-size: 16px; line-height: 17px; font-weight: 300; color: rgba(255,255,255,1); letter-spacing: px;font-family:Lato;background-color:rgba(0,0,0,0.75);border-color:rgba(0,0,0,1);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Xem Thêm</div>
                                    </li>
                                    <!-- SLIDE  -->
                                    <li data-index="rs-7790" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="http://wedesignthemes.com/themes/mini/wp-content/uploads/2017/05/blog8-100x100.jpg" data-rotate="0" data-saveperformance="off" data-title="Life after sixty- the real beginning?" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src="<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/revslider/admin/assets/images/dummy.png" alt="" title="blog8" width="1200" height="800" data-lazyload="<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini')); ?>/image/slider3.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                                        <!-- LAYERS -->

                                        <!-- LAYER NR. 11 -->
                                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-7790-layer-5" data-x="center" data-hoffset="" data-y="bottom" data-voffset="" data-width="['full','full','full','full']" data-height="['150']" data-type="shape" data-responsive_offset="on" data-wrapper_class="grdnt-bg" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;background-color:rgba(0,0,0,0.5);"> </div>

                                        <!-- LAYER NR. 12 -->
                                        <div class="tp-caption   tp-resizeme" id="slide-7790-layer-1" data-x="30" data-y="bottom" data-voffset="62" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":500,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 25px; line-height: 30px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Lora;">Dịch Vụ Dành Cho Người Thông Minh</div>

                                        <!-- LAYER NR. 13 -->

                                        <!-- LAYER NR. 14 -->
                                        <div class="tp-caption   tp-resizeme" id="slide-7790-layer-3" data-x="30" data-y="bottom" data-voffset="30" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":990,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8; white-space: nowrap; font-size: 16px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Lato;">Tại Sao Phải Chọn 4% Khi Dịch Vụ Tận Nơi ChỉMất ~ 1.5% Mà Lãi Suất Trong 45 Ngày Là 0%?? </div>

                                        <!-- LAYER NR. 15 -->
                                        <div class="tp-caption rev-btn " id="slide-7790-layer-4" data-x="right" data-hoffset="30" data-y="bottom" data-voffset="45" data-width="['auto']" data-height="['auto']" data-type="button" data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"http:\/\/wedesignthemes.com\/themes\/mini\/blog\/life-after-sixty-the-real-beginning\/","delay":""}]' data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":2490,"speed":1500,"frame":"0","from":"x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]" data-paddingright="[20,20,20,20]" data-paddingbottom="[12,12,12,12]" data-paddingleft="[20,20,20,20]" style="z-index: 9; white-space: nowrap; font-size: 16px; line-height: 17px; font-weight: 300; color: rgba(255,255,255,1); letter-spacing: px;font-family:Lato;background-color:rgba(0,0,0,0.75);border-color:rgba(0,0,0,1);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Xem Thêm </div>
                                    </li>

                                </ul>
                                <script>
                                    var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
                                    var htmlDivCss = "";
                                    if (htmlDiv) {
                                        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                    } else {
                                        var htmlDiv = document.createElement("div");
                                        htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                                        document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                                    }
                                </script>
                                <div class="tp-bannertimer" style="height: 5px; background: rgba(0,0,0,0.15);"></div>
                            </div>
                            <script>
                                var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
                                var htmlDivCss = "";
                                if (htmlDiv) {
                                    htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                } else {
                                    var htmlDiv = document.createElement("div");
                                    htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                                    document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                                }
                            </script>
                            <script type="text/javascript">
                                /******************************************
                                 -	PREPARE PLACEHOLDER FOR SLIDER	-
                                 ******************************************/

                                var setREVStartSize = function() {
                                    try {
                                        var e = new Object,
                                            i = jQuery(window).width(),
                                            t = 9999,
                                            r = 0,
                                            n = 0,
                                            l = 0,
                                            f = 0,
                                            s = 0,
                                            h = 0;
                                        e.c = jQuery('#rev_slider_1_1');
                                        e.gridwidth = [720];
                                        e.gridheight = [550];

                                        e.sliderLayout = "fullwidth";
                                        if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                                                f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                                            }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                                            var u = (e.c.width(), jQuery(window).height());
                                            if (void 0 != e.fullScreenOffsetContainer) {
                                                var c = e.fullScreenOffsetContainer.split(",");
                                                if (c) jQuery.each(c, function(e, i) {
                                                    u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                                                }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                                            }
                                            f = u
                                        } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                                        e.c.closest(".rev_slider_wrapper").css({
                                            height: f
                                        })

                                    } catch (d) {
                                        console.log("Failure at Presize of Slider:" + d)
                                    }
                                };

                                setREVStartSize();

                                var tpj = jQuery;

                                var revapi1;
                                tpj(document).ready(function() {
                                    if (tpj("#rev_slider_1_1").revolution == undefined) {
                                        revslider_showDoubleJqueryError("#rev_slider_1_1");
                                    } else {
                                        revapi1 = tpj("#rev_slider_1_1").show().revolution({
                                            sliderType: "carousel",
                                            jsFileLocation: "//wedesignthemes.com/themes/mini/wp-content/plugins/revslider/public/assets/js/",
                                            sliderLayout: "fullwidth",
                                            dottedOverlay: "none",
                                            delay: 9000,
                                            navigation: {
                                                keyboardNavigation: "off",
                                                keyboard_direction: "horizontal",
                                                mouseScrollNavigation: "off",
                                                mouseScrollReverse: "default",
                                                onHoverStop: "off",
                                                touch: {
                                                    touchenabled: "on",
                                                    touchOnDesktop: "off",
                                                    swipe_threshold: 75,
                                                    swipe_min_touches: 50,
                                                    swipe_direction: "horizontal",
                                                    drag_block_vertical: false
                                                },
                                                arrows: {
                                                    style: "hebe",
                                                    enable: true,
                                                    hide_onmobile: false,
                                                    hide_onleave: true,
                                                    hide_delay: 200,
                                                    hide_delay_mobile: 1200,
                                                    tmp :'',
                                                    left: {
                                                        h_align: "left",
                                                        v_align: "center",
                                                        h_offset: 30,
                                                        v_offset: 0
                                                    },
                                                    right: {
                                                        h_align: "right",
                                                        v_align: "center",
                                                        h_offset: 30,
                                                        v_offset: 0
                                                    }
                                                }
                                            },
                                            carousel: {
                                                horizontal_align: "center",
                                                vertical_align: "center",
                                                fadeout: "on",
                                                vary_fade: "on",
                                                maxVisibleItems: 3,
                                                infinity: "on",
                                                space: 0,
                                                stretch: "off",
                                                showLayersAllTime: "off",
                                                easing: "Power3.easeInOut",
                                                speed: "800"
                                            },
                                            visibilityLevels: [1240, 1024, 778, 480],
                                            gridwidth: 720,
                                            gridheight: 550,
                                            lazyType: "smart",
                                            parallax: {
                                                type: "mouse",
                                                origo: "slidercenter",
                                                speed: 2000,
                                                levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
                                            },
                                            shadow: 0,
                                            spinner: "off",
                                            stopLoop: "on",
                                            stopAfterLoops: 0,
                                            stopAtSlide: 1,
                                            shuffle: "off",
                                            autoHeight: "off",
                                            hideThumbsOnMobile: "off",
                                            hideSliderAtLimit: 0,
                                            hideCaptionAtLimit: 0,
                                            hideAllCaptionAtLilmit: 0,
                                            debugMode: false,
                                            fallbacks: {
                                                simplifyAll: "off",
                                                nextSlideOnWindowFocus: "off",
                                                disableFocusListener: false,
                                            }
                                        });
                                    }
                                }); /*ready*/
                            </script>
                            <script>
                                var htmlDivCss = unescape(".grdnt-bg%20.tp-caption.tp-shape.tp-shapewrapper.tp-resizeme%7B%2F%2A%20Permalink%20-%20use%20to%20edit%20and%20share%20this%20gradient%3A%20http%3A%2F%2Fcolorzilla.com%2Fgradient-editor%2F%23000000%2B0%2C000000%2B100%260%2B0%2C1%2B100%20%2A%2F%0Abackground%3A%20-moz-linear-gradient%28top%2C%20rgba%280%2C0%2C0%2C0%29%200%25%2C%20rgba%280%2C0%2C0%2C1%29%20100%25%29%3B%20%2F%2A%20FF3.6-15%20%2A%2F%0Abackground%3A%20-webkit-linear-gradient%28top%2C%20rgba%280%2C0%2C0%2C0%29%200%25%2Crgba%280%2C0%2C0%2C1%29%20100%25%29%3B%20%2F%2A%20Chrome10-25%2CSafari5.1-6%20%2A%2F%0Abackground%3A%20linear-gradient%28to%20bottom%2C%20rgba%280%2C0%2C0%2C0%29%200%25%2Crgba%280%2C0%2C0%2C1%29%20100%25%29%3B%20%2F%2A%20W3C%2C%20IE10%2B%2C%20FF16%2B%2C%20Chrome26%2B%2C%20Opera12%2B%2C%20Safari7%2B%20%2A%2F%0Afilter%3A%20progid%3ADXImageTransform.Microsoft.gradient%28%20startColorstr%3D%27%2300000000%27%2C%20endColorstr%3D%27%23000000%27%2CGradientType%3D0%20%29%3B%20%2F%2A%20IE6-9%20%2A%2F%0A%20%20%20%20%20%20background-color%3A%20rgba%280%2C%200%2C%200%2C%200%29%20%21important%3B%0A%7D");
                                var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                                if (htmlDiv) {
                                    htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                } else {
                                    var htmlDiv = document.createElement('div');
                                    htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                    document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                                }
                            </script>
                            <script>
                                var htmlDivCss = unescape(".hebe.tparrows%20%7B%0A%20%20cursor%3Apointer%3B%0A%20%20background%3Argba%28255%2C%20255%2C%20255%2C%201%29%3B%0A%20%20min-width%3A70px%3B%0A%20%20min-height%3A70px%3B%0A%20%20position%3Aabsolute%3B%0A%20%20display%3Ablock%3B%0A%20%20z-index%3A100%3B%0A%7D%0A.hebe.tparrows%3Ahover%20%7B%0A%7D%0A.hebe.tparrows%3Abefore%20%7B%0A%20%20font-family%3A%20%22revicons%22%3B%0A%20%20font-size%3A30px%3B%0A%20%20color%3Argba%280%2C0%2C0%2C0.5%29%3B%0A%20%20display%3Ablock%3B%0A%20%20line-height%3A%2070px%3B%0A%20%20text-align%3A%20center%3B%0A%20%20-webkit-transition%3A%20color%200.3s%3B%0A%20%20-moz-transition%3A%20color%200.3s%3B%0A%20%20transition%3A%20color%200.3s%3B%0A%20%20z-index%3A2%3B%0A%20%20position%3Arelative%3B%0A%20%20%20background%3Argba%28255%2C%20255%2C%20255%2C%201%29%3B%0A%20%20min-width%3A70px%3B%0A%20%20%20%20min-height%3A70px%3B%0A%7D%0A.hebe.tparrows.tp-leftarrow%3Abefore%20%7B%0A%20%20content%3A%20%22%5Ce824%22%3B%0A%7D%0A.hebe.tparrows.tp-rightarrow%3Abefore%20%7B%0A%20%20content%3A%20%22%5Ce825%22%3B%0A%7D%0A.hebe.tparrows%3Ahover%3Abefore%20%7B%0A%20color%3A%23000%3B%0A%20%20%20%20%20%20%7D%0A.tp-title-wrap%20%7B%20%0A%20%20position%3Aabsolute%3B%0A%20%20z-index%3A0%3B%0A%20%20display%3Ainline-block%3B%0A%20%20background%3A%23000%3B%0A%20%20background%3Argba%280%2C0%2C0%2C0.75%29%3B%0A%20%20min-height%3A60px%3B%0A%20%20line-height%3A60px%3B%0A%20%20top%3A-10px%3B%0A%20%20margin-left%3A0px%3B%0A%20%20-webkit-transition%3A%20-webkit-transform%200.3s%3B%0A%20%20transition%3A%20transform%200.3s%3B%0A%20%20transform%3Ascalex%280%29%3B%20%20%0A%20%20-webkit-transform%3Ascalex%280%29%3B%20%20%0A%20%20transform-origin%3A0%25%2050%25%3B%20%0A%20%20%20-webkit-transform-origin%3A0%25%2050%25%3B%0A%7D%0A%20.hebe.tp-rightarrow%20.tp-title-wrap%20%7B%20%0A%20%20%20right%3A0px%3B%0A%20%20%20-webkit-transform-origin%3A100%25%2050%25%3B%0A%20%7D%0A.hebe.tparrows%3Ahover%20.tp-title-wrap%20%7B%0A%20%20transform%3Ascalex%281%29%3B%0A%20%20-webkit-transform%3Ascalex%281%29%3B%0A%7D%0A.hebe%20.tp-arr-titleholder%20%7B%0A%20%20position%3Arelative%3B%0A%20%20text-transform%3Auppercase%3B%0A%20%20color%3Argb%28255%2C%20255%2C%20255%29%3B%0A%20%20font-weight%3A600%3B%0A%20%20font-size%3A12px%3B%0A%20%20line-height%3A90px%3B%0A%20%20white-space%3Anowrap%3B%0A%20%20padding%3A0px%2020px%200px%2090px%3B%0A%7D%0A%0A.hebe.tp-rightarrow%20.tp-arr-titleholder%20%7B%0A%20%20%20margin-left%3A0px%3B%20%0A%20%20%20padding%3A0px%2090px%200px%2020px%3B%0A%20%7D%0A%0A.hebe.tparrows%3Ahover%20.tp-arr-titleholder%20%7B%0A%20%20%20transform%3Atranslatex%280px%29%3B%0A%20%20%20-webkit-transform%3Atranslatex%280px%29%3B%0A%20%20transition-delay%3A%200.1s%3B%0A%20%20opacity%3A1%3B%0A%7D%0A%0A.hebe%20.tp-arr-imgholder%7B%0A%20%20%20%20%20%20width%3A90px%3B%0A%20%20%20%20%20%20height%3A90px%3B%0A%20%20%20%20%20%20position%3Aabsolute%3B%0A%20%20%20%20%20%20left%3A100%25%3B%0A%20%20%20%20%20%20display%3Ablock%3B%0A%20%20%20%20%20%20background-size%3Acover%3B%0A%20%20%20%20%20%20background-position%3Acenter%20center%3B%0A%20%20%09%20top%3A0px%3B%20right%3A-90px%3B%0A%20%20%20%20%7D%0A.hebe.tp-rightarrow%20.tp-arr-imgholder%7B%0A%20%20%20%20%20%20%20%20right%3Aauto%3Bleft%3A-90px%3B%0A%20%20%20%20%20%20%7D%0A");
                                var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                                if (htmlDiv) {
                                    htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                } else {
                                    var htmlDiv = document.createElement('div');
                                    htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                    document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                                }
                            </script>
                        </div>
                        <!-- END REVOLUTION SLIDER -->
                    </div>
                </div>
                    <?php echo $__env->yieldSection(); ?>
            </header>
            <!-- **Header - End** -->
        </div>
        <!-- **Header Wrapper - End** -->

        <!-- **Main** -->
        <div id="main">
            <!-- ** Container ** -->
            <div class="container">
                <section id="primary" class="page-with-sidebar with-right-sidebar">
                    <!-- #post-2 -->
                    <div id="post-2" class="post-2 page type-page status-publish hentry">
                    </div>
                    <!-- #post-2 -->
                    <div class="dt-sc-clear"></div>

                    <!-- Blog Template -->
                    <div class="dt-sc-posts-list-wrapper">

                        <?php $__env->startSection('content'); ?>

                        <div class='tpl-blog-holder'>
                            <div class="column dt-sc-one-column">
                                <article id="post-7786" class="blog-entry entry-classic post-7786 post type-post status-publish format-standard has-post-thumbnail hentry category-lifestyle tag-asia tag-nature">
                                    <!-- Entry Meta Data -->
                                    <div class="entry-meta-data">
                                        <div class="entry-title">
                                            <h4><a href="blog/plantation-workers-in-assam-tea-estate/index.htm" title="Permalink to Plantation workers in Assam Tea Estate">Plantation workers in Assam Tea Estate</a></h4>
                                        </div>
                                        <!-- Entry Meta Data -->


                                        <div class="entry-thumb">
                                            <div class="blog-image">
                                                <a href="blog/plantation-workers-in-assam-tea-estate/index.htm" title="Permalink to Plantation workers in Assam Tea Estate">
                                                    <img width="1200" height="800" src="<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/uploads/2017/05/blog7.jpg" class="attachment-full size-full wp-post-image" alt="" srcset="http://wedesignthemes.com/themes/mini/wp-content/uploads/2017/05/blog7.jpg 1200w, http://wedesignthemes.com/themes/mini/wp-content/uploads/2017/05/blog7-300x200.jpg 300w, http://wedesignthemes.com/themes/mini/wp-content/uploads/2017/05/blog7-768x512.jpg 768w, http://wedesignthemes.com/themes/mini/wp-content/uploads/2017/05/blog7-1024x683.jpg 1024w" sizes="(max-width: 1200px) 100vw, 1200px" /> </a>
                                            </div>

                                            <div class="entry-info">
                                                <div class="dt-sc-like-views ">
                                                    <div class="likes dt_like_btn">
                                                        <i class="zmdi zmdi-favorite-outline zmdi-hc-fw"> </i>
                                                        <span>4</span>
                                                    </div>

                                                    <div class="views">
                                                        <i class="zmdi zmdi-eye zmdi-hc-fw"> </i>
                                                        <span>1050</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Entry Format -->
                                            <div class="entry-format hidden">
                                                <a class="ico-format" href="index.htm"></a>
                                            </div>
                                            <!-- Entry Format -->
                                        </div>
                                        <!-- Featured Image -->

                                        <!-- Entry Details -->
                                        <div class="entry-details">
                                            <div class="entry-body">
                                                <p>Several of the world&#8217;s biggest tea brands, including PG Tips, Lipton, Tetley and Twinings, have said they will work to improve the tea estates they buy from in India after a BBC investigation found dangerous, disgusting and degrading living and working conditions. The joint investigation by Radio 4&#8217;s File on Four and BBC News also </p>
                                            </div>



                                        </div>
                                        <!-- Entry Details -->

                                    </div>
                                    <!-- Entry Meta Data -->
                                </article>
                            </div>

                        </div>
                        <!-- **Pagination** -->
                        <div class="pagination blog-pagination">
                            <div class="column one pager_wrapper">
                                <ul class='page-numbers'>
                                    <li><span class='page-numbers current'>1</span></li>
                                    <li><a class='page-numbers' href='page/2/index.htm'>2</a></li>
                                    <li><a class='page-numbers' href='page/3/index.htm'>3</a></li>
                                    <li><span class="page-numbers dots">&hellip;</span></li>
                                    <li><a class='page-numbers' href='page/5/index.htm'>5</a></li>
                                    <li><a class="next page-numbers" href="page/2/index.htm">Next<i class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <?php echo $__env->yieldSection(); ?>
                        <!-- **Pagination** -->
                        <!-- Blog Template Ends -->
                    </div>

                </section>
                <!-- **Primary - End** -->
                <!-- Secondary Right -->
                <section id="secondary-right" class="secondary-sidebar secondary-has-right-sidebar">
                    <div class='type11'>
                        <aside id="miniblog_about-2" class="widget widget_about">
                            <h3 class="widgettitle">Zalo</h3>
                            <div class="dt-sc-about-widget">

                                <div class="entry-about-desc">
                                    <p>01234 15 1111</p>
                                </div>
                            </div>
                        </aside>
                        <aside id="miniblog_headlines-2" class="widget widget_headlines">
                            <h3 class="widgettitle">Cà Thẻ Tín Dụng</h3>
                            <div class='recent-headlines-widget'>

                                <div class="fb-page" data-href="https://www.facebook.com/cathetindung" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/cathetindung" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cathetindung">Cà Thẻ Tín Dụng</a></blockquote></div>
                            </div>
                        </aside>


                    </div>
                </section>
            </div>
            <!-- **Container - End** -->

        </div>
        <!-- **Main - End** -->

        <!-- **Footer** -->
        <footer id="footer">
            <div class="footer-widgets">
                <div class="container">
                    <div class='column dt-sc-full-width first'>
                        <aside id="text-9" class="widget widget_text">
                            <div class="textwidget">


                                © 2017 <a href="index.htm#"> </a>. All rights reserved.
                                <div class='dt-sc-clear '> </div>
                                <div class="vc_empty_space" style="height: 16px"><span class="vc_empty_space_inner"></span></div>

                                <ul class='dt-sc-sociable rounded-border '>
                                    <li>
                                        <a class='fa fa-facebook' title='Facebook' href='index.htm#'> </a>
                                    </li>
                                    <li>
                                        <a class='fa fa-twitter' title='Twitter' href='index.htm#'> </a>
                                    </li>
                                    <li>
                                        <a class='fa fa-google-plus' title='Google-plus' href='index.htm#'> </a>
                                    </li>
                                    <li>
                                        <a class='fa fa-instagram' title='Instagram' href='index.htm#'> </a>
                                    </li>
                                    <li>
                                        <a class='fa fa-pinterest' title='Pinterest' href='index.htm#'> </a>
                                    </li>
                                    <li>
                                        <a class='fa fa-tumblr' title='Tumblr' href='index.htm#'> </a>
                                    </li>
                                </ul>
                                <div class="vc_empty_space" style="height: 50px"><span class="vc_empty_space_inner"></span></div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </footer>
        <!-- **Footer - End** -->
    </div>
    <!-- **Inner Wrapper - End** -->
</div>
<!-- **Wrapper - End** -->
<script type="text/javascript">
    function revslider_showDoubleJqueryError(sliderID) {
        var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
        errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
        errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
        errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
        errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
        jQuery(sliderID).show().html(errorMessage);
    }
</script>

<link rel='stylesheet' id='js_composer_front-css' href='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/js_composer/assets/css/js_composer.min.css' type='text/css' media='all' />
<script type='text/javascript' src='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/designthemes-core-features/shortcodes/js/jquery.tabs.min.js'></script>
<script type='text/javascript' src='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/designthemes-core-features/shortcodes/js/jquery.tipTip.minified.js'></script>
<script type='text/javascript' src='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/designthemes-core-features/shortcodes/js/jquery.inview.js'></script>
<script type='text/javascript' src='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/designthemes-core-features/shortcodes/js/jquery.animateNumber.min.js'></script>
<script type='text/javascript' src='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/designthemes-core-features/shortcodes/js/jquery.donutchart.js'></script>
<script type='text/javascript' src='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/designthemes-core-features/shortcodes/js/shortcodes.js'></script>
<script type='text/javascript' src='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/contact-form-7/includes/js/jquery.form.min.js'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var _wpcf7 = {
        "recaptcha": {
            "messages": {
                "empty": "Please verify that you are not a robot."
            }
        }
    };
    /* ]]> */
</script>
<script type='text/javascript' src='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/contact-form-7/includes/js/scripts.js'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var sb_instagram_js_options = {
        "sb_instagram_at": "5506288672.3a81a9f.2501d4d8b34948a78303e3110e25570d"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/instagram-feed/js/sb-instagram.min.js-ver=1.4.8.htm'></script>
<script type='text/javascript' src='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js-ver=2.70.htm'></script>
<script type='text/javascript' src='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js-ver=2.1.4.htm'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var woocommerce_params = {
        "ajax_url": "\/themes\/mini\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/themes\/mini\/?wc-ajax=%%endpoint%%"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/woocommerce/assets/js/frontend/woocommerce.min.js-ver=3.0.7.htm'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_cart_fragments_params = {
        "ajax_url": "\/themes\/mini\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/themes\/mini\/?wc-ajax=%%endpoint%%",
        "fragment_name": "wc_fragments"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js-ver=3.0.7.htm'></script>
<script type='text/javascript' src='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min.js-ver=3.1.6.htm'></script>
<script type='text/javascript' src='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/yith-woocommerce-wishlist/assets/js/jquery.selectBox.min.js-ver=1.2.0.htm'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var yith_wcwl_l10n = {
        "ajax_url": "\/themes\/mini\/wp-admin\/admin-ajax.php",
        "redirect_to_cart": "no",
        "multi_wishlist": "",
        "hide_add_button": "1",
        "is_user_logged_in": "",
        "ajax_loader_url": "http:\/\/wedesignthemes.com\/themes\/mini\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader.gif",
        "remove_from_wishlist_after_add_to_cart": "yes",
        "labels": {
            "cookie_disabled": "We are sorry, but this feature is available only if cookies are enabled on your browser.",
            "added_to_cart_message": "<div class=\"woocommerce-message\">Product correctly added to cart<\/div>"
        },
        "actions": {
            "add_to_wishlist_action": "add_to_wishlist",
            "remove_from_wishlist_action": "remove_from_wishlist",
            "move_to_another_wishlist_action": "move_to_another_wishlsit",
            "reload_wishlist_and_adding_elem_action": "reload_wishlist_and_adding_elem"
        }
    };
    /* ]]> */
</script>
<script type='text/javascript' src='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl.js-ver=2.1.2.htm'></script>
<script type='text/javascript' src='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/themes/mini-blog/framework/js/jquery.ui.totop.min.js'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var dttheme_urls = {
        "theme_base_url": "http:\/\/wedesignthemes.com\/themes\/mini\/wp-content\/themes\/mini-blog",
        "framework_base_url": "http:\/\/wedesignthemes.com\/themes\/mini\/wp-content\/themes\/mini-blog\/framework\/",
        "ajaxurl": "http:\/\/wedesignthemes.com\/themes\/mini\/wp-admin\/admin-ajax.php",
        "url": "http:\/\/wedesignthemes.com\/themes\/mini",
        "stickynav": "enable",
        "stickyele": ".menu-wrapper",
        "isRTL": "",
        "loadingbar": "enable",
        "nicescroll": "disable",
        "wpnonce": "35722df093"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/themes/mini-blog/framework/js/jquery.plugins.js'></script>
<script type='text/javascript' src='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/themes/mini-blog/framework/js/jquery.visualNav.min.js'></script>
<script type='text/javascript' src='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/themes/mini-blog/framework/js/jquery.magnific-popup.min.js'></script>
<script type='text/javascript' src='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/themes/mini-blog/framework/js/jquery.simpler-sidebar.min.js'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var paceOptions = {
        "restartOnRequestAfter": "false",
        "restartOnPushState": "false"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/themes/mini-blog/framework/js/pace.min.js'></script>
<script type='text/javascript' src='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/themes/mini-blog/framework/js/livesearch.js'></script>
<script type='text/javascript' src='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/themes/mini-blog/framework/js/custom.js'></script>
<script type='text/javascript' src='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-includes')); ?>/js/wp-embed.min.js'></script>
<script type='text/javascript' src='<?php echo e(url('public/cttd/wedesignthemes.com/themes/mini/wp-content')); ?>/plugins/js_composer/assets/js/dist/js_composer_front.min.js'></script>

<script src="<?php echo e(url('public/ampleadmin')); ?>/plugins/bower_components/tinymce/tinymce.min.js"></script>



<script>
    jQuery(document).ready(function ($) {
        if ($(".mymce").length > 0) {
            tinymce.init({
                selector: "div.mymce",

                body_class: 'mymce',
                toolbar: false,
            });
        }
    });


</script>

</body>

</html>