<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- include internal CSS custom styles based on ACF custom fields -->

        <style>
            body {
                color: #212529 !important;
            }
            body a {
                color: #212529;
            }
            body a:hover {
                color: #909090;
            }
            ul.menu > li {
                font-size: 14px;
            }
            ul.menu > li a {
                color: #212529;
            }
            ul.menu > li,
            .sub-menu li,
            .menu-hover:hover {
                border-radius: 0.75rem !important;
            }
            mark,
            .mark {
                border-radius: 0.75rem !important;
            }
            .button {
                border-radius: 0.75rem !important;
            }
            .bg-side {
                background: #e8f9f9;
            }
            .bg-navbar {
                background-color: #ffffff;
            }
            .bg-sidenav {
                background-color: #ffffff;
            }
            .bg-current {
                background: ;
            }
            .bg-footer {
                background: #f4f4f4;
            }
            .bg-nextprev {
                background: ;
            }
            .bg-cart-totals,
            .bg-customer-order-address {
                background: #f1f1f1;
            }
            .hamb-menu {
                color: #212529;
            }
            .navbar .nav-link {
                color: #dd3333;
            }
            .logo {
                height: 55px;
            }
            .navbar-height {
                height: 70px;
            }
            .navbar-search {
                top: 70px;
            }
            .sidenav {
                background-color: #ffffff;
            }
            .scrollbar::-webkit-scrollbar-thumb {
                border: 3px solid #e8f9f9;
            }
            .wc-navigation-sticky-top,
            .navigation-sticky-top {
                top: 70px;
            }
            .is-ajax-search-details,
            .is-ajax-search-result {
                position: fixed !important;
            }
            .pace .pace-progress {
                background: #ff0000;
            }
            .pt-fixed {
                top: 70px;
            }
            @media only screen and (max-width: 991px) {
                .pt-fixed {
                    top: calc(70px * 1.75);
                }
            }
            .slider-cover {
                height: calc(70vh - 70px);
            }
            .page-wide-cover {
                height: calc(100vh - 70px);
            }
            .single-comments-content {
                background: #e5fbfb;
            }
            .border-custom {
                border: 1rem solid;
                border-color: #f8f9fa;
            }
            .sticky-top-left-title {
                top: calc(70px + 1rem);
            }
            .page-numbers {
                color: #ffffff;
                background-color: #007aff;
                border-color: #007aff;
                border-radius: 0.75rem !important;
            }
            .img-fluid {
                border-radius: 0.75rem !important;
            }
            .border-class,
            #border-class {
                border-radius: 0.75rem !important;
            }
            .border-more-rounded {
                border-radius: 2rem;
                -webkit-border-radius: 2rem;
                -moz-border-radius: 2rem;
            }
            .slider-wrap {
                border-radius: 0.75rem !important;
                height: 425px;
            }
            .slider-featured-wrap {
                border-radius: 0.75rem !important;
                height: 360px;
            }
            .feat-cat-wrap {
                border-radius: 0.75rem !important;
                height: 230px;
            }
            .elements-wrap {
                border-radius: 0.75rem !important;
                height: 230px;
            }
            .gallery,
            .gallery-item img {
                border-radius: 0.75rem !important;
            }
            .book-card-bg {
                background-color: #e0e6fb;
            }
            .book-card-bg:hover {
                background-color: #f6ffd5;
            }
            .book-card-txt,
            .book-card-txt a,
            .book-card-txt a:hover {
                color: #212529;
            }
            .title-in,
            .title-in a,
            .text-in,
            .title-out a,
            .text-out {
                color: #ffffff;
            }
            .home-va-btn a {
                color: #007aff;
            }
            .author-name a,
            .author-name-archive a {
                color: #007aff;
            }
            .publisher-name a,
            .publisher-name-archive a {
                color: #000000;
            }
            .hamb-menu,
            .hamb-menu-right,
            .dropdown-sidenav-btn {
                color: #007aff;
            }
            .btn-custom {
                color: #ffffff !important;
                background-color: #007aff !important;
                border-color: #007aff !important;
                border-radius: 0.75rem !important;
            }
            .btn-custom:hover,
            .btn-custom:focus,
            .btn-custom:active,
            .btn-custom.active,
            .open .dropdown-toggle.btn-custom {
                color: #ffffff !important;
                background-color: #1e73be !important;
                border-color: #1e73be !important;
            }
            .menu-item {
                border-radius: 0.75rem !important;
            }
            .menu-hover:hover {
                background: #e5fbfb;
            }
            .col-hover:hover {
                background: #d3eeff;
                border-radius: 0.75rem !important;
            }
            .grid-sizer {
            }
            @media only screen and (min-width: 769px) and (max-width: 991px) {
                .grid-sizer,
                .grid-item-3,
                .grid-item-4,
                .grid-item-5 {
                    width: 33.333%;
                }
            }
            #search input[type="radio"]:after,
            #search input[type="radio"]:checked:after {
                border-radius: 0.75rem !important;
            }
            .grid-sizer-pc {
            }
            @media only screen and (min-width: 769px) and (max-width: 991px) {
                .grid-sizer-pc,
                .grid-item-pc-3,
                .grid-item-pc-4,
                .grid-item-pc-5,
                .grid-item-pc-6,
                .grid-item-pc-7 {
                    width: 33.333%;
                }
            }
            .grid-sizer-pr {
                width: 16.666666%;
            }
            @media only screen and (min-width: 769px) and (max-width: 991px) {
                .grid-sizer-pr,
                .grid-item-pr-3,
                .grid-item-pr-4,
                .grid-item-pr-5,
                .grid-item-pr-6,
                .grid-item-pr-7 {
                    width: 33.333%;
                }
            }
            .previous:before {
                content: "\f053";
            }
            .next:before {
                content: "\f054";
            }
            .social-icons {
                background: #007aff;
                border-radius: 50% !important;
            }
            .social-icons a:not([href]),
            .social-icons a:not([href]):hover,
            .social-icons a,
            .social-icons a:hover {
                color: #ffffff;
            }

            <!-- Woocommerce -- > .woocommerce button.button {
                border-radius: 0.75rem !important;
            }

            .woocommerce #content input.button.alt:hover,
            .woocommerce #respond input#submit.alt:hover,
            .woocommerce a.button.alt:hover,
            .woocommerce button.button.alt:hover,
            .woocommerce input.button.alt:hover,
            .woocommerce-page #content input.button.alt:hover,
            .woocommerce-page #respond input#submit.alt:hover,
            .woocommerce-page a.button.alt:hover,
            .woocommerce-page button.button.alt:hover,
            .woocommerce-page input.button.alt:hover {
                background: #1e73be;
                background-color: #1e73be;
                box-shadow: none;
                text-shadow: transparent;
                color: #ffffff;
                border-color: #1e73be;
            }

            .woocommerce #content input.button:hover,
            .woocommerce #respond input#submit:hover,
            .woocommerce a.button:hover,
            .woocommerce button.button:hover,
            .woocommerce input.button:hover,
            .woocommerce-page #content input.button:hover,
            .woocommerce-page #respond input#submit:hover,
            .woocommerce-page a.button:hover,
            .woocommerce-page button.button:hover,
            .woocommerce-page input.button:hover {
                background: #1e73be;
                background-color: #1e73be;
                box-shadow: none;
                text-shadow: transparent;
                color: #ffffff;
                border-color: #1e73be;
            }

            .woocommerce #content input.button,
            .woocommerce #respond input#submit,
            .woocommerce a.button,
            .woocommerce button.button,
            .woocommerce input.button,
            .woocommerce-page #content input.button,
            .woocommerce-page #respond input#submit,
            .woocommerce-page a.button,
            .woocommerce-page button.button,
            .woocommerce-page input.button {
                background: #f1f1f1;
                color: #333333;
            }

            .woocommerce #content input.button.alt:hover,
            .woocommerce #respond input#submit.alt:hover,
            .woocommerce a.button.alt:hover,
            .woocommerce button.button.alt:hover,
            .woocommerce input.button.alt:hover,
            .woocommerce-page #content input.button.alt:hover,
            .woocommerce-page #respond input#submit.alt:hover,
            .woocommerce-page a.button.alt:hover,
            .woocommerce-page button.button.alt:hover,
            .woocommerce-page input.button.alt:hover {
                background: #1e73be;
                box-shadow: none;
                text-shadow: transparent;
                color: #ffffff;
                border-color: #1e73be;
            }

            .woocommerce div.product span.price,
            .woocommerce .taxonomy-summary p.price {
                font-size: 15px;
            }
            .woocommerce span.onsale {
                color: #ffffff;
            }

            .woocommerce #reviews #comments ol.commentlist li .comment-text {
                background: #e5fbfb;
            }

            .woocommerce form .form-row input.input-text,
            .woocommerce-checkout .woocommerce form .form-row .select2-container,
            .woocommerce form .form-row textarea,
            .woocommerce span.onsale,
            .woocommerce .quantity .qty {
                border-radius: 0.75rem !important;
            }

            .woocommerce .size-woocommerce_thumbnail,
            img.woocommerce-placeholder,
            img.attachment-woocommerce_thumbnail {
                width: 100%;
                height: auto;
                border-radius: 0.75rem !important;
            }
            ul {
                list-style: none;
            }
            .customform .form-control {
                background-color: #fff;
                border: 0;
            }
            .input-text {
                border-radius: 0.75rem !important;
            }
        </style>

        <title>CNFT.IO | Cardano&#x27;s Biggest NFT Marketplace</title>
        <meta name="robots" content="noindex, nofollow" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:url" content="https://cnft.io" />
        <meta property="twitter:title" content="CNFT.IO | Cardano&#x27;s Biggest NFT Marketplace" />
        <meta property="twitter:description" content="CNFT, Cardano Non-funigle tokens. Cardano&#x27;s first and biggest nft marketplace." />
        <meta property="og:image" content="https://cnft.io/Assets/Images/site_thumbnail.jpg" />
        <link rel="dns-prefetch" href="//fonts.googleapis.com" />
        <link rel="dns-prefetch" href="//s.w.org" />
        <link rel="alternate" type="application/rss+xml" title="EXLIBRIS &raquo; Feed" href="#;/projects/exlibriswp/feed/" />
        <link rel="alternate" type="application/rss+xml" title="EXLIBRIS &raquo; Comments Feed" href="#;/projects/exlibriswp/comments/feed/" />
        <script type="text/javascript">
            window._wpemojiSettings = {
                baseUrl: "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/",
                ext: ".png",
                svgUrl: "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/",
                svgExt: ".svg",
                source: { concatemoji: "https:\/\/demo.ramsthemes.com\/projects\/exlibriswp\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.8.3" },
            };
            !(function (e, a, t) {
                var n,
                    r,
                    o,
                    i = a.createElement("canvas"),
                    p = i.getContext && i.getContext("2d");
                function s(e, t) {
                    var a = String.fromCharCode;
                    p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
                    e = i.toDataURL();
                    return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL();
                }
                function c(e) {
                    var t = a.createElement("script");
                    (t.src = e), (t.defer = t.type = "text/javascript"), a.getElementsByTagName("head")[0].appendChild(t);
                }
                for (o = Array("flag", "emoji"), t.supports = { everything: !0, everythingExceptFlag: !0 }, r = 0; r < o.length; r++)
                    (t.supports[o[r]] = (function (e) {
                        if (!p || !p.fillText) return !1;
                        switch (((p.textBaseline = "top"), (p.font = "600 32px Arial"), e)) {
                            case "flag":
                                return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039])
                                    ? !1
                                    : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) &&
                                          !s(
                                              [55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447],
                                              [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]
                                          );
                            case "emoji":
                                return !s([10084, 65039, 8205, 55357, 56613], [10084, 65039, 8203, 55357, 56613]);
                        }
                        return !1;
                    })(o[r])),
                        (t.supports.everything = t.supports.everything && t.supports[o[r]]),
                        "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
                (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag),
                    (t.DOMReady = !1),
                    (t.readyCallback = function () {
                        t.DOMReady = !0;
                    }),
                    t.supports.everything ||
                        ((n = function () {
                            t.readyCallback();
                        }),
                        a.addEventListener
                            ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1))
                            : (e.attachEvent("onload", n),
                              a.attachEvent("onreadystatechange", function () {
                                  "complete" === a.readyState && t.readyCallback();
                              })),
                        (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n.wpemoji)));
            })(window, document, window._wpemojiSettings);
        </script>
        <style type="text/css">
            img.wp-smiley,
            img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 0.07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>
        <link rel="stylesheet" id="wp-block-library-css" href="{{ asset('assets/css/style.min.css') }}" media="all" />
        <link rel="stylesheet" id="wc-blocks-vendors-style-css" href="{{ asset('assets/css/wc-blocks-vendors-style.css') }}" media="all" />
        <link rel="stylesheet" id="wc-blocks-style-css" href="{{ asset('assets/css/wc-blocks-style.css') }}" media="all" />
        <link rel="stylesheet" id="lbwps-styles-css" href="{{ asset('assets/css/default.css') }}" media="all" />
        <link rel="stylesheet" id="woocommerce-smallscreen-css" href="{{ asset('assets/css/woocommerce-smallscreen.css') }}" media="only screen and (max-width: 768px)" />
        <style id="woocommerce-inline-inline-css" type="text/css">
            .woocommerce form .form-row .required {
                visibility: visible;
            }
        </style>
        <link rel="stylesheet" id="wp-night-mode-css" href="{{ asset('assets/css/wp-night-mode-public.css') }}" media="all" />
        <link rel="stylesheet" id="ppress-frontend-css" href="{{ asset('assets/css/frontend.min.css') }}" media="all" />
        <link rel="stylesheet" id="ppress-flatpickr-css" href="{{ asset('assets/css/flatpickr.min.css') }}" media="all" />
        <link rel="stylesheet" id="ppress-select2-css" href="{{ asset('assets/css/select2.min.css') }}" media="all" />
        <link rel="stylesheet" id="ivory-search-styles-css" href="{{ asset('assets/css/ivory-search.min.css') }}" media="all" />
        <link rel="preload" as="font" type="font/woff2" crossorigin="anonymous" id="tinvwl-webfont-font-css" href="{{ asset('assets/fonts/tinvwl-webfont.woff2') }}" media="all" />
        <link rel="stylesheet" id="tinvwl-webfont-css" href="{{ asset('assets/css/webfont.min.css') }}" media="all" />
        <link rel="stylesheet" id="tinvwl-css" href="{{ asset('assets/css/public.min.css') }}" media="all" />
        <style id="tinvwl-inline-css" type="text/css">
            .tinv-wishlist .product-action {
                width: auto;
            }
            .tinv-header h2 {
                font-size: 1.25rem;
            }
            .wishlist-icon-navbar {
                margin: 0.5rem;
                vertical-align: middle;
            }
            .top_wishlist-heart:before {
                font-size: 1.75em !important;
                margin-right: 0 !important;
            }
            .tinv-wishlist .tinvwl_add_to_wishlist_button.tinvwl-icon-heart:before {
                font-size: 1.75em;
            }
            .wishlist_products_counter_number {
                background: red;
                color: white;
                padding: 0 0.5em;
                font-size: 0.75rem;
                display: inline-block;
                vertical-align: top;
                border-radius: 25rem;
                width: 18px;
                height: 18px;
            }
        </style>
        <link rel="stylesheet" id="bootstrap-css" href="{{ asset('assets/css/bootstrap.min.css') }}" media="all" />
        <link rel="stylesheet" id="bootstrap-drawer-css-css" href="{{ asset('assets/css/bootstrap-drawer.css') }}" media="all" />
        <link rel="stylesheet" id="flickity-css-css" href="{{ asset('assets/css/flickity.min.css') }}" media="all" />
        <link rel="stylesheet" id="scrollbar-css-css" href="{{ asset('assets/css/simplebar.min.css') }}" media="all" />
        <link rel="stylesheet" id="font-awesome-css-css" href="{{ asset('assets/css/all.min.css') }}" media="all" />
        <link rel="stylesheet" id="googleFonts-css" href="https://fonts.googleapis.com/css?family=Work+Sans%3A300%2C400%2C500%2C700&#038;display=swap&#038;ver=5.8.3" media="all" />
        <link rel="stylesheet" id="exlibriswp-basics-wc-css-css" href="{{ asset('assets/css/woocommerce-basics.css') }}" media="all" />
        <link rel="stylesheet" id="exlibriswp-custom-wc-css-css" href="{{ asset('assets/css/woocommerce-custom.css') }}" media="all" />
        <link rel="stylesheet" id="exlibriswp-custom-css-css" href="{{ asset('assets/css/main.css') }}" media="all" />
        <script src="{{ asset('assets/js/jquery.min.js') }}" id="jquery-js"></script>

        <script src="{{ asset('assets/js/wp-night-mode-public.js') }}" id="wp-night-mode-js"></script>
        <script src="{{ asset('assets/js/flatpickr.min.js') }}" id="ppress-flatpickr-js"></script>
        <script src="{{ asset('assets/js/select2.min.js') }}" id="ppress-select2-js"></script>

        <style type="text/css">

            		.wpnm-button.style-1,
            		.wpnm-button.style-2,
            		.wpnm-button.style-3,
            		.wpnm-button.style-4,
            		.wpnm-button.style-5 {
            			font-size: 11px;
            		}

            	.wp-night-mode-slider {
            		background-color: ;
            	}

            	.wp-night-mode-button.active .wp-night-mode-slider {
            		background-color: ;
            	}

            	body.wp-night-mode-on * {
            		background: ;
            	}

            	body.wp-night-mode-on .customize-partial-edit-shortcut button,
            	body.wp-night-mode-on .customize-partial-edit-shortcut button svg,
            	body.wp-night-mode-on #adminbarsearch,
            	body.wp-night-mode-on span.display-name,
            	body.wp-night-mode-on span.ab-icon,
            	body.wp-night-mode-on span.ab-label {
            	    background: transparent;
            	}

            	body.wp-night-mode-on * {
            		color: #ffffff;
            	}

            	body.wp-night-mode-on a {
            		color: #ffffff;
            	}

            	body.wp-night-mode-on a:hover,
            	body.wp-night-mode-on a:visited,
            	body.wp-night-mode-on a:active {
            		color: ;
            	}
            }				@media (prefers-color-scheme: dark) {

            		.wpnm-button.style-1,
            		.wpnm-button.style-2,
            		.wpnm-button.style-3,
            		.wpnm-button.style-4,
            		.wpnm-button.style-5 {
            			font-size: 11px;
            		}

            	.wp-night-mode-slider {
            		background-color: ;
            	}

            	.wp-night-mode-button.active .wp-night-mode-slider {
            		background-color: ;
            	}

            	body.wp-night-mode-on * {
            		background: ;
            	}

            	body.wp-night-mode-on .customize-partial-edit-shortcut button,
            	body.wp-night-mode-on .customize-partial-edit-shortcut button svg,
            	body.wp-night-mode-on #adminbarsearch,
            	body.wp-night-mode-on span.display-name,
            	body.wp-night-mode-on span.ab-icon,
            	body.wp-night-mode-on span.ab-label {
            	    background: transparent;
            	}

            	body.wp-night-mode-on * {
            		color: #ffffff;
            	}

            	body.wp-night-mode-on a {
            		color: #ffffff;
            	}

            	body.wp-night-mode-on a:hover,
            	body.wp-night-mode-on a:visited,
            	body.wp-night-mode-on a:active {
            		color: ;
            	}
            }				}
        </style>
        <noscript>
            <style>
                .woocommerce-product-gallery {
                    opacity: 1 !important;
                }
            </style>
        </noscript>
        <link rel="icon" href="#;/projects/exlibriswp/wp-content/uploads/2020/01/cropped-exlibris-web-thumb-100x100.jpg" sizes="32x32" />
        <link rel="icon" href="#;/projects/exlibriswp/wp-content/uploads/2020/01/cropped-exlibris-web-thumb-300x300.jpg" sizes="192x192" />
        <link rel="apple-touch-icon" href="#;/projects/exlibriswp/wp-content/uploads/2020/01/cropped-exlibris-web-thumb-300x300.jpg" />
        <meta name="msapplication-TileImage" content="https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/01/cropped-exlibris-web-thumb-300x300.jpg" />
        <style type="text/css" id="wp-custom-css">
            .wpnm-button.style-1 {
                top: 0;
            }
        </style>
    </head>

    <body
        class="home blog bg theme-exlibriswp woocommerce-no-js exlibriswp tinvwl-theme-style post-the-life-of-captain-marvel-trailer-released woocommerce woocommerce-page"
        id="loadfade"
        class="post-194 post type-post status-publish format-standard has-post-thumbnail hentry category-releases tag-captain-marvel tag-carol-danvers tag-comics tag-marvel book_author-margaret-stohl"
    >
        <!-- get navbar -->

        <!-- Navbar -->

        <nav class="fixed-header navbar navbar-height navbar-pos bg-navbar">
            <div class="navbar-container position-relative">
                <!-- hamburger menu left-->
                <span class="hamb-menu toggle-open-close"><i class="fas fa-th fa-lg mx-2"></i></span>

                <!-- logo -->
                <a class="navbar-logo-left" href="{{URL::to('/')}}">
                    <!-- display logo for normal mode -->
                    <img class="logo logow logores" src="https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/exlibris-logo-normal.svg" alt="Normal Mode Logo" />

                    <!-- display logo for dark mode -->
                    <img class="logo logob logores" src="https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/exlibris-logo-dark.svg" alt="Dark Mode Logo" />

                    <!-- display logo for normal mode -->
                    <img class="logo logow d-lg-none" src="https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/exlibris-logo-normal-res.svg" alt="Normal Mode Logo" />

                    <!-- display logo for dark mode -->
                    <img class="logo logob d-lg-none" src="https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/exlibris-logo-dark-res.svg" alt="Dark Mode Logo" />
                </a>
              <div style='float:left'>
			  </div>
                <!-- display search bar below -->
                <div class="customsearch">
                    <style type="text/css">
                        #is-ajax-search-result-683 .is-ajax-search-post:hover,
                        #is-ajax-search-result-683 .is-show-more-results:hover,
                        #is-ajax-search-details-683 .is-ajax-search-tags-details > div:hover,
                        #is-ajax-search-details-683 .is-ajax-search-categories-details > div:hover {
                            background-color: #e5fbfb !important;
                        }
                        #is-ajax-search-result-683 a,
                        #is-ajax-search-details-683 a:not(.button) {
                            color: #000000 !important;
                        }
                        #is-ajax-search-details-683 .is-ajax-woocommerce-actions a.button {
                            background-color: #000000 !important;
                        }
                        #is-ajax-search-result-683 .is-ajax-search-post,
                        #is-ajax-search-details-683 .is-ajax-search-post-details {
                            border-color: #e5fbfb !important;
                        }
                        #is-ajax-search-result-683,
                        #is-ajax-search-details-683 {
                            background-color: #e5fbfb !important;
                        }
                    </style>
                    <form
                        data-min-no-for-search="1"
                        data-result-box-max-height="400"
                        data-form-id="683"
                        class="is-search-form is-form-style is-form-style-3 is-form-id-683 is-ajax-search"
                        action="https://demo.ramsthemes.com/projects/exlibriswp/"
                        method="get"
                        role="search"
                    >
                        <label for="is-search-input-683">
                            <span class="is-screen-reader-text">Search for:</span><input type="search" id="is-search-input-683" name="s" value="" class="is-search-input" placeholder="Search Books" autocomplete="off" />
                            <span class="is-loader-image" style="display: none; background-image: url(https://demo.ramsthemes.com/projects/exlibriswp/wp-content/plugins/add-search-to-menu/public/images/spinner.gif);"></span>
                        </label>
                        <button type="submit" class="is-search-submit">
                            <span class="is-screen-reader-text">Search Button</span>
                            <span class="is-search-icon">
                                <svg focusable="false" aria-label="Search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px">
                                    <path
                                        d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"
                                    ></path>
                                </svg>
                            </span>
                        </button>
                        <input type="hidden" name="id" value="683" /><input type="hidden" name="post_type" value="product" />
                    </form>
                </div>

                <!-- icons on right -->

                <div class="navbar-icons">
                    <!-- register -->
                    <div class="d-none d-md-inline-block mx-1">
                        <a class="btn btn-custom btn-sm" href="#;/projects/exlibriswp/register/">Register</a>
                    </div>

                    <!-- login -->
                    <div class="d-none d-md-inline-block">
                        <a title="Login" href="#;/projects/exlibriswp/my-account/"><i class="fas fa-sign-in-alt fa-lg align-middle mx-2"></i></a>
                    </div>

                    <div class="navbar-box" id="topnav">
                        <!-- Switch mode -->

                        <div class="d-inline-block align-middle mx-1">
                            <div class="wpnm-button style-1">
                                <div class="wpnm-slider round"></div>
                            </div>
                        </div>

                        <!-- Wishlist -->
                        <div class="d-inline-block align-middle mx-1">
                            <a href="#;/projects/exlibriswp/my-wishlist/" class="wishlist_products_counter top_wishlist-heart top_wishlist- no-txt">
                                <span class="wishlist_products_counter_text"></span>
                            </a>
                        </div>

                        <!-- cart -->

                        <div class="d-inline-block align-middle mx-1">
                            <a class="cart-contents" href="#;/projects/exlibriswp/cart/" title="Cart "> </a>
                        </div>

                        <!-- hamburger menu right -->
                        <div class="hamb-menu-right-box d-inline-block d-md-none">
                            <span class="toggle-open-close-right"><i class="fas fa-bars fa-lg hamb-menu-right align-middle"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <nav class="navbar navbar-search bg-navbar">
            <!-- display search bar responsive -->
            <div class="customsearch-res">
                <style type="text/css">
                    #is-ajax-search-result-683 .is-ajax-search-post:hover,
                    #is-ajax-search-result-683 .is-show-more-results:hover,
                    #is-ajax-search-details-683 .is-ajax-search-tags-details > div:hover,
                    #is-ajax-search-details-683 .is-ajax-search-categories-details > div:hover {
                        background-color: #e5fbfb !important;
                    }
                    #is-ajax-search-result-683 a,
                    #is-ajax-search-details-683 a:not(.button) {
                        color: #000000 !important;
                    }
                    #is-ajax-search-details-683 .is-ajax-woocommerce-actions a.button {
                        background-color: #000000 !important;
                    }
                    #is-ajax-search-result-683 .is-ajax-search-post,
                    #is-ajax-search-details-683 .is-ajax-search-post-details {
                        border-color: #e5fbfb !important;
                    }
                    #is-ajax-search-result-683,
                    #is-ajax-search-details-683 {
                        background-color: #e5fbfb !important;
                    }
                </style>
                <form
                    data-min-no-for-search="1"
                    data-result-box-max-height="400"
                    data-form-id="683"
                    class="is-search-form is-form-style is-form-style-3 is-form-id-683 is-ajax-search"
                    action="https://demo.ramsthemes.com/projects/exlibriswp/"
                    method="get"
                    role="search"
                >
                    <label for="is-search-input-683">
                        <span class="is-screen-reader-text">Search for:</span><input type="search" id="is-search-input-683" name="s" value="" class="is-search-input" placeholder="Search Books" autocomplete="off" />
                        <span class="is-loader-image" style="display: none; background-image: url(https://demo.ramsthemes.com/projects/exlibriswp/wp-content/plugins/add-search-to-menu/public/images/spinner.gif);"></span>
                    </label>
                    <button type="submit" class="is-search-submit">
                        <span class="is-screen-reader-text">Search Button</span>
                        <span class="is-search-icon">
                            <svg focusable="false" aria-label="Search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px">
                                <path
                                    d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"
                                ></path>
                            </svg>
                        </span>
                    </button>
                    <input type="hidden" name="id" value="683" /><input type="hidden" name="post_type" value="product" />
                </form>
            </div>
        </nav>

        <!-- sidenav left (dotted menu left) -->

        <div id="exlibris-sidenav-left" class="sidenav-l bg-side">
            <div class="buttons-sidenav" id="topnav">
                <!-- close sidenav button -->
                <span title="Close Menu" class="closebtn toggle-open-close"><i class="fas fa-times fa-lg"></i></span>
            </div>

            <div class="sidenav-margin-top">
                <div class="sidenav-nav-container-res">
                    <ul id="accordion" class="menu">
                        <li id="menu-item-5" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-5 menu-hover">
                            <a href="{{URL::to('/')}}" aria-current="page">Home</a>
                        </li>
                        <li id="menu-item-237" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-237 menu-hover"><a href="{{URL::to('/myaccount')}}">My account</a></li>
                        <li id="menu-item-231" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-231 menu-hover"><a href="{{URL::to('/')}}">Mint</a></li>
                        <!--<li id="menu-item-233" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-parent-item menu-item-233 menu-hover">
                            <a href="#" class="parent">Pages</a><span class="dropdown-sidenav-btn"><i class="fas fa-chevron-down fa-lg"></i></span>
                            <ul class="sub-menu">
                                <li id="menu-item-236" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-236 menu-hover"><a href="#;/projects/exlibriswp/sample-page/">Sample Page</a></li>
                                <li id="menu-item-238" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-238 menu-hover"><a href="#;/projects/exlibriswp/404/">404</a></li>
                            </ul>
                        </li>-->
                        <li id="menu-item-404" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-404 menu-hover"><a href="{{URL::to('/')}}">Sell</a></li>
                        <li id="menu-item-403" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-403 menu-hover"><a href="{{URL::to('/')}}">Marketplace</a></li>
                        <li id="menu-item-230" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-230 menu-hover"><a href="{{URL::to('/')}}">Launch</a></li>
                        <li id="menu-item-234" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-234 menu-hover"><a href="{{URL::to('/')}}">Activity</a></li>
                        <li id="menu-item-328" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-328 menu-hover"><a href="{{URL::to('/')}}">BetaDex</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- sidenav right (responsive) -->

        <div id="exlibris-sidenav-right" class="sidenav-r bg-side">
            <div class="buttons-sidenav" id="topnav">
                <!-- Register and Login buttons -->

                <!-- register -->

                <label class="pointerbtn mr-3">
                    <a title="Register" href="#;/projects/exlibriswp/register/"><i class="fas fa-user-plus fa-lg"></i></a>
                </label>

                <!-- login -->
                <label class="pointerbtn mr-3">
                    <a title="Login" href="#;/projects/exlibriswp/my-account/"><i class="fas fa-sign-in-alt fa-lg"></i></a>
                </label>

                <!-- close sidenav button -->
                <span title="Close Menu" class="closebtn toggle-open-close-right"><i class="fas fa-times fa-lg"></i></span>
            </div>

            <div class="sidenav-margin-top">
                <div data-simplebar class="scrollbar-sidenav-res">
                    <!-- Shop sidebar and account sidebar-->

                    <div class="sidenav-nav-container">
                        <div id="nav_menu-2" class="widget_nav_menu mb-3">
                            <div class="menu-sidenav-menu-container">
                                <ul id="accordion-sidenav" class="menu">
                                    <li id="menu-item-241" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-parent-item menu-item-241 menu-hover">
                                        <a href="#" class="parent">Academic</a><span class="dropdown-sidenav-btn"><i class="fas fa-chevron-down fa-lg"></i></span>
                                        <ul class="sub-menu">
                                            <li id="menu-item-222" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-222 menu-hover"><a href="#;/projects/exlibriswp/product-category/essays/">Essays</a></li>
                                            <li id="menu-item-224" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-224 menu-hover">
                                                <a href="#;/projects/exlibriswp/product-category/investigation/">Investigation</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-240" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-parent-item menu-item-240 menu-hover">
                                        <a href="#" class="parent">Art</a><span class="dropdown-sidenav-btn"><i class="fas fa-chevron-down fa-lg"></i></span>
                                        <ul class="sub-menu">
                                            <li id="menu-item-217" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-217 menu-hover">
                                                <a href="#;/projects/exlibriswp/product-category/architecture/">Architecture</a>
                                            </li>
                                            <li id="menu-item-220" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-220 menu-hover"><a href="#;/projects/exlibriswp/product-category/design/">Design</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-218" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-218 menu-hover"><a href="#;/projects/exlibriswp/product-category/auto-help/">Auto Help</a></li>
                                    <li id="menu-item-219" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-219 menu-hover"><a href="#;/projects/exlibriswp/product-category/biographies/">Biographies</a></li>
                                    <li id="menu-item-221" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-221 menu-hover"><a href="#;/projects/exlibriswp/product-category/economy/">Economy</a></li>
                                    <li id="menu-item-223" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-223 menu-hover"><a href="#;/projects/exlibriswp/product-category/finances/">Finances</a></li>
                                    <li id="menu-item-239" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-parent-item menu-item-239 menu-hover">
                                        <a href="#" class="parent">Literature</a><span class="dropdown-sidenav-btn"><i class="fas fa-chevron-down fa-lg"></i></span>
                                        <ul class="sub-menu">
                                            <li id="menu-item-225" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-225 menu-hover"><a href="#;/projects/exlibriswp/product-category/novel/">Novel</a></li>
                                            <li id="menu-item-229" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-229 menu-hover"><a href="#;/projects/exlibriswp/product-category/theater/">Theater</a></li>
                                            <li id="menu-item-228" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-228 menu-hover"><a href="#;/projects/exlibriswp/product-category/stories/">Stories</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-226" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-226 menu-hover"><a href="#;/projects/exlibriswp/product-category/philosophy/">Philosophy</a></li>
                                    <li id="menu-item-227" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-227 menu-hover"><a href="#;/projects/exlibriswp/product-category/psychology/">Psychology</a></li>
                                    <li id="menu-item-310" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-310 menu-hover"><a href="#;/projects/exlibriswp/product-category/comics/">Comics</a></li>
                                </ul>
                            </div>
                        </div>

                        <div id="custom_html-3" class="widget_text widget_custom_html mb-3">
                            <h6 class="widget_titles">SELECTED AUTHORS</h6>
                            <div class="textwidget custom-html-widget">
                                <ul class="author-list-container">
                                    <li class="author-list">
                                        <div class="float-left mr-2">
                                            <a href="#;/projects/exlibriswp/book-author/emma-cline/">
                                                <img
                                                    class="img-res rounded-circle shadow-sm"
                                                    src="https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2021/04/EmmaCline-150x150.jpeg"
                                                    loading="lazy"
                                                    srcset="
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2021/04/EmmaCline-150x150.jpeg    150w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2021/04/EmmaCline-100x100.jpeg    100w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2021/04/EmmaCline-600x600.jpeg    600w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2021/04/EmmaCline-300x300.jpeg    300w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2021/04/EmmaCline-1024x1024.jpeg 1024w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2021/04/EmmaCline-768x768.jpeg    768w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2021/04/EmmaCline-450x450.jpeg    450w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2021/04/EmmaCline.jpeg           1153w
                                                    "
                                                    sizes="(max-width: 36px) 100vw, 36px"
                                                />
                                            </a>
                                        </div>

                                        <div class="author-list-name">
                                            <a href="#;/projects/exlibriswp/book-author/emma-cline/">Emma Cline</a>
                                        </div>
                                    </li>

                                    <li class="author-list">
                                        <div class="float-left mr-2">
                                            <a href="#;/projects/exlibriswp/book-author/thomas-piketty/">
                                                <img
                                                    class="img-res rounded-circle shadow-sm"
                                                    src="https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/Piketty-150x150.jpg"
                                                    loading="lazy"
                                                    srcset="
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/Piketty-150x150.jpg 150w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/Piketty-100x100.jpg 100w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/Piketty-300x300.jpg 300w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/Piketty-450x450.jpg 450w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/Piketty-600x600.jpg 600w
                                                    "
                                                    sizes="(max-width: 36px) 100vw, 36px"
                                                />
                                            </a>
                                        </div>

                                        <div class="author-list-name">
                                            <a href="#;/projects/exlibriswp/book-author/thomas-piketty/">Thomas Piketty</a>
                                        </div>
                                    </li>

                                    <li class="author-list">
                                        <div class="float-left mr-2">
                                            <a href="#;/projects/exlibriswp/book-author/tara-westover/">
                                                <img
                                                    class="img-res rounded-circle shadow-sm"
                                                    src="https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/t-Tara-Westover-Interview-2-150x150.jpg"
                                                    loading="lazy"
                                                    srcset="
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/t-Tara-Westover-Interview-2-150x150.jpg 150w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/t-Tara-Westover-Interview-2-100x100.jpg 100w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/t-Tara-Westover-Interview-2-300x300.jpg 300w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/t-Tara-Westover-Interview-2-450x450.jpg 450w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/t-Tara-Westover-Interview-2-600x600.jpg 600w
                                                    "
                                                    sizes="(max-width: 36px) 100vw, 36px"
                                                />
                                            </a>
                                        </div>

                                        <div class="author-list-name">
                                            <a href="#;/projects/exlibriswp/book-author/tara-westover/">Tara Westover</a>
                                        </div>
                                    </li>

                                    <li class="author-list">
                                        <div class="float-left mr-2">
                                            <a href="#;/projects/exlibriswp/book-author/robert-kiyosaki/">
                                                <img
                                                    class="img-res rounded-circle shadow-sm"
                                                    src="https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/Robert-Kiyosaki-scaled-150x150.jpg"
                                                    loading="lazy"
                                                    srcset="
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/Robert-Kiyosaki-scaled-150x150.jpg 150w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/Robert-Kiyosaki-scaled-100x100.jpg 100w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/Robert-Kiyosaki-scaled-300x300.jpg 300w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/Robert-Kiyosaki-scaled-450x450.jpg 450w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/Robert-Kiyosaki-scaled-600x600.jpg 600w
                                                    "
                                                    sizes="(max-width: 36px) 100vw, 36px"
                                                />
                                            </a>
                                        </div>

                                        <div class="author-list-name">
                                            <a href="#;/projects/exlibriswp/book-author/robert-kiyosaki/">Robert Kiyosaki</a>
                                        </div>
                                    </li>

                                    <li class="author-list">
                                        <div class="float-left mr-2">
                                            <a href="#;/projects/exlibriswp/book-author/caroline-kepnes/">
                                                <img
                                                    class="img-res rounded-circle shadow-sm"
                                                    src="https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/01/caroline-kepnes-150x150.jpg"
                                                    loading="lazy"
                                                    srcset="
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/01/caroline-kepnes-150x150.jpg 150w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/01/caroline-kepnes-100x100.jpg 100w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/01/caroline-kepnes-300x300.jpg 300w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/01/caroline-kepnes-450x450.jpg 450w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/01/caroline-kepnes-600x600.jpg 600w
                                                    "
                                                    sizes="(max-width: 36px) 100vw, 36px"
                                                />
                                            </a>
                                        </div>

                                        <div class="author-list-name">
                                            <a href="#;/projects/exlibriswp/book-author/caroline-kepnes/">Caroline Kepnes</a>
                                        </div>
                                    </li>
                                </ul>

                                <a class="btn btn-custom btn-block" href="#;/projects/exlibriswp/book-authors/"> All authors </a>
                            </div>
                        </div>

                        <div id="custom_html-2" class="widget_text widget_custom_html mb-3">
                            <h6 class="widget_titles">SELECTED PUBLISHERS</h6>
                            <div class="textwidget custom-html-widget">
                                <ul class="author-list-container">
                                    <li class="author-list">
                                        <div class="float-left mr-2">
                                            <a href="#;/projects/exlibriswp/publisher/hollow-editors/">
                                                <img
                                                    class="img-res rounded-circle shadow-sm"
                                                    src="https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/04/hollow-150x150.jpg"
                                                    loading="lazy"
                                                    srcset="
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/04/hollow-150x150.jpg 150w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/04/hollow-100x100.jpg 100w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/04/hollow-300x300.jpg 300w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/04/hollow-450x450.jpg 450w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/04/hollow-600x600.jpg 600w
                                                    "
                                                    sizes="(max-width: 36px) 100vw, 36px"
                                                />
                                            </a>
                                        </div>

                                        <div class="author-list-name">
                                            <a href="#;/projects/exlibriswp/publisher/hollow-editors/">Hollow Editors</a>
                                        </div>
                                    </li>

                                    <li class="author-list">
                                        <div class="float-left mr-2">
                                            <a href="#;/projects/exlibriswp/publisher/interzone/">
                                                <img
                                                    class="img-res rounded-circle shadow-sm"
                                                    src="https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/06/interzone-150x150.jpg"
                                                    loading="lazy"
                                                    srcset="
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/06/interzone-150x150.jpg 150w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/06/interzone-100x100.jpg 100w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/06/interzone-300x300.jpg 300w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/06/interzone-450x450.jpg 450w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/06/interzone-600x600.jpg 600w
                                                    "
                                                    sizes="(max-width: 36px) 100vw, 36px"
                                                />
                                            </a>
                                        </div>

                                        <div class="author-list-name">
                                            <a href="#;/projects/exlibriswp/publisher/interzone/">Interzone</a>
                                        </div>
                                    </li>

                                    <li class="author-list">
                                        <div class="float-left mr-2">
                                            <a href="#;/projects/exlibriswp/publisher/rush-publishers/">
                                                <img
                                                    class="img-res rounded-circle shadow-sm"
                                                    src="https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/04/rush-150x150.jpg"
                                                    loading="lazy"
                                                    srcset="
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/04/rush-150x150.jpg 150w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/04/rush-100x100.jpg 100w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/04/rush-300x300.jpg 300w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/04/rush-450x450.jpg 450w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/04/rush-600x600.jpg 600w
                                                    "
                                                    sizes="(max-width: 36px) 100vw, 36px"
                                                />
                                            </a>
                                        </div>

                                        <div class="author-list-name">
                                            <a href="#;/projects/exlibriswp/publisher/rush-publishers/">Rush Publishers</a>
                                        </div>
                                    </li>

                                    <li class="author-list">
                                        <div class="float-left mr-2">
                                            <a href="#;/projects/exlibriswp/publisher/victory/">
                                                <img
                                                    class="img-res rounded-circle shadow-sm"
                                                    src="https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/04/victory-150x150.jpg"
                                                    loading="lazy"
                                                    srcset="
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/04/victory-150x150.jpg 150w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/04/victory-100x100.jpg 100w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/04/victory-300x300.jpg 300w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/04/victory-450x450.jpg 450w,
                                                        https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/04/victory-600x600.jpg 600w
                                                    "
                                                    sizes="(max-width: 36px) 100vw, 36px"
                                                />
                                            </a>
                                        </div>

                                        <div class="author-list-name">
                                            <a href="#;/projects/exlibriswp/publisher/victory/">Victory</a>
                                        </div>
                                    </li>
                                </ul>

                                <a class="btn btn-custom btn-block" href="#;/projects/exlibriswp/book-publishers/"> All publishers </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main container -->

        <main class="pt-fixed">
            <div class="container-general">
                <div class="wrapper">
                    <!-- Sidenav -->
                    <nav id="sidebar" class="sidenav">
                        <div data-simplebar class="wc-navigation-sticky-top scrollbar-sidenav">
                            <div class="sidenav-nav-container">
                                <div id="nav_menu-2" class="widget_nav_menu mb-3">
                                    <div class="menu-sidenav-menu-container">
                                        <ul id="accordion-sidenav" class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-parent-item menu-item-241 menu-hover">
                                                <a href="#" class="parent">Academic</a><span class="dropdown-sidenav-btn"><i class="fas fa-chevron-down fa-lg"></i></span>
                                                <ul class="sub-menu">
                                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-222 menu-hover"><a href="#;/projects/exlibriswp/product-category/essays/">Essays</a></li>
                                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-224 menu-hover"><a href="#;/projects/exlibriswp/product-category/investigation/">Investigation</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-parent-item menu-item-240 menu-hover">
                                                <a href="#" class="parent">Art</a><span class="dropdown-sidenav-btn"><i class="fas fa-chevron-down fa-lg"></i></span>
                                                <ul class="sub-menu">
                                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-217 menu-hover"><a href="#;/projects/exlibriswp/product-category/architecture/">Architecture</a></li>
                                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-220 menu-hover"><a href="#;/projects/exlibriswp/product-category/design/">Design</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-218 menu-hover"><a href="#;/projects/exlibriswp/product-category/auto-help/">Auto Help</a></li>
                                            <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-219 menu-hover"><a href="#;/projects/exlibriswp/product-category/biographies/">Biographies</a></li>
                                            <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-221 menu-hover"><a href="#;/projects/exlibriswp/product-category/economy/">Economy</a></li>
                                            <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-223 menu-hover"><a href="#;/projects/exlibriswp/product-category/finances/">Finances</a></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-parent-item menu-item-239 menu-hover">
                                                <a href="#" class="parent">Literature</a><span class="dropdown-sidenav-btn"><i class="fas fa-chevron-down fa-lg"></i></span>
                                                <ul class="sub-menu">
                                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-225 menu-hover"><a href="#;/projects/exlibriswp/product-category/novel/">Novel</a></li>
                                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-229 menu-hover"><a href="#;/projects/exlibriswp/product-category/theater/">Theater</a></li>
                                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-228 menu-hover"><a href="#;/projects/exlibriswp/product-category/stories/">Stories</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-226 menu-hover"><a href="#;/projects/exlibriswp/product-category/philosophy/">Philosophy</a></li>
                                            <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-227 menu-hover"><a href="#;/projects/exlibriswp/product-category/psychology/">Psychology</a></li>
                                            <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-310 menu-hover"><a href="#;/projects/exlibriswp/product-category/comics/">Comics</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div id="custom_html-3" class="widget_text widget_custom_html mb-3">
                                    <h6 class="widget_titles">SELECTED AUTHORS</h6>
                                    <div class="textwidget custom-html-widget">
                                        <ul class="author-list-container">
                                            <li class="author-list">
                                                <div class="float-left mr-2">
                                                    <a href="#;/projects/exlibriswp/book-author/emma-cline/">
                                                        <img
                                                            class="img-res rounded-circle shadow-sm"
                                                            src="https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2021/04/EmmaCline-150x150.jpeg"
                                                            loading="lazy"
                                                            srcset="
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2021/04/EmmaCline-150x150.jpeg    150w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2021/04/EmmaCline-100x100.jpeg    100w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2021/04/EmmaCline-600x600.jpeg    600w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2021/04/EmmaCline-300x300.jpeg    300w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2021/04/EmmaCline-1024x1024.jpeg 1024w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2021/04/EmmaCline-768x768.jpeg    768w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2021/04/EmmaCline-450x450.jpeg    450w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2021/04/EmmaCline.jpeg           1153w
                                                            "
                                                            sizes="(max-width: 36px) 100vw, 36px"
                                                        />
                                                    </a>
                                                </div>

                                                <div class="author-list-name">
                                                    <a href="#;/projects/exlibriswp/book-author/emma-cline/">Emma Cline</a>
                                                </div>
                                            </li>

                                            <li class="author-list">
                                                <div class="float-left mr-2">
                                                    <a href="#;/projects/exlibriswp/book-author/thomas-piketty/">
                                                        <img
                                                            class="img-res rounded-circle shadow-sm"
                                                            src="https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/Piketty-150x150.jpg"
                                                            loading="lazy"
                                                            srcset="
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/Piketty-150x150.jpg 150w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/Piketty-100x100.jpg 100w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/Piketty-300x300.jpg 300w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/Piketty-450x450.jpg 450w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/Piketty-600x600.jpg 600w
                                                            "
                                                            sizes="(max-width: 36px) 100vw, 36px"
                                                        />
                                                    </a>
                                                </div>

                                                <div class="author-list-name">
                                                    <a href="#;/projects/exlibriswp/book-author/thomas-piketty/">Thomas Piketty</a>
                                                </div>
                                            </li>

                                            <li class="author-list">
                                                <div class="float-left mr-2">
                                                    <a href="#;/projects/exlibriswp/book-author/tara-westover/">
                                                        <img
                                                            class="img-res rounded-circle shadow-sm"
                                                            src="https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/t-Tara-Westover-Interview-2-150x150.jpg"
                                                            loading="lazy"
                                                            srcset="
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/t-Tara-Westover-Interview-2-150x150.jpg 150w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/t-Tara-Westover-Interview-2-100x100.jpg 100w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/t-Tara-Westover-Interview-2-300x300.jpg 300w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/t-Tara-Westover-Interview-2-450x450.jpg 450w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/t-Tara-Westover-Interview-2-600x600.jpg 600w
                                                            "
                                                            sizes="(max-width: 36px) 100vw, 36px"
                                                        />
                                                    </a>
                                                </div>

                                                <div class="author-list-name">
                                                    <a href="#;/projects/exlibriswp/book-author/tara-westover/">Tara Westover</a>
                                                </div>
                                            </li>

                                            <li class="author-list">
                                                <div class="float-left mr-2">
                                                    <a href="#;/projects/exlibriswp/book-author/robert-kiyosaki/">
                                                        <img
                                                            class="img-res rounded-circle shadow-sm"
                                                            src="https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/Robert-Kiyosaki-scaled-150x150.jpg"
                                                            loading="lazy"
                                                            srcset="
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/Robert-Kiyosaki-scaled-150x150.jpg 150w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/Robert-Kiyosaki-scaled-100x100.jpg 100w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/Robert-Kiyosaki-scaled-300x300.jpg 300w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/Robert-Kiyosaki-scaled-450x450.jpg 450w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2019/07/Robert-Kiyosaki-scaled-600x600.jpg 600w
                                                            "
                                                            sizes="(max-width: 36px) 100vw, 36px"
                                                        />
                                                    </a>
                                                </div>

                                                <div class="author-list-name">
                                                    <a href="#;/projects/exlibriswp/book-author/robert-kiyosaki/">Robert Kiyosaki</a>
                                                </div>
                                            </li>

                                            <li class="author-list">
                                                <div class="float-left mr-2">
                                                    <a href="#;/projects/exlibriswp/book-author/caroline-kepnes/">
                                                        <img
                                                            class="img-res rounded-circle shadow-sm"
                                                            src="https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/01/caroline-kepnes-150x150.jpg"
                                                            loading="lazy"
                                                            srcset="
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/01/caroline-kepnes-150x150.jpg 150w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/01/caroline-kepnes-100x100.jpg 100w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/01/caroline-kepnes-300x300.jpg 300w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/01/caroline-kepnes-450x450.jpg 450w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/01/caroline-kepnes-600x600.jpg 600w
                                                            "
                                                            sizes="(max-width: 36px) 100vw, 36px"
                                                        />
                                                    </a>
                                                </div>

                                                <div class="author-list-name">
                                                    <a href="#;/projects/exlibriswp/book-author/caroline-kepnes/">Caroline Kepnes</a>
                                                </div>
                                            </li>
                                        </ul>

                                        <a class="btn btn-custom btn-block" href="#;/projects/exlibriswp/book-authors/"> All authors </a>
                                    </div>
                                </div>

                                <div id="custom_html-2" class="widget_text widget_custom_html mb-3">
                                    <h6 class="widget_titles">SELECTED PUBLISHERS</h6>
                                    <div class="textwidget custom-html-widget">
                                        <ul class="author-list-container">
                                            <li class="author-list">
                                                <div class="float-left mr-2">
                                                    <a href="#;/projects/exlibriswp/publisher/hollow-editors/">
                                                        <img
                                                            class="img-res rounded-circle shadow-sm"
                                                            src="https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/04/hollow-150x150.jpg"
                                                            loading="lazy"
                                                            srcset="
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/04/hollow-150x150.jpg 150w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/04/hollow-100x100.jpg 100w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/04/hollow-300x300.jpg 300w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/04/hollow-450x450.jpg 450w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/04/hollow-600x600.jpg 600w
                                                            "
                                                            sizes="(max-width: 36px) 100vw, 36px"
                                                        />
                                                    </a>
                                                </div>

                                                <div class="author-list-name">
                                                    <a href="#;/projects/exlibriswp/publisher/hollow-editors/">Hollow Editors</a>
                                                </div>
                                            </li>

                                            <li class="author-list">
                                                <div class="float-left mr-2">
                                                    <a href="#;/projects/exlibriswp/publisher/interzone/">
                                                        <img
                                                            class="img-res rounded-circle shadow-sm"
                                                            src="https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/06/interzone-150x150.jpg"
                                                            loading="lazy"
                                                            srcset="
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/06/interzone-150x150.jpg 150w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/06/interzone-100x100.jpg 100w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/06/interzone-300x300.jpg 300w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/06/interzone-450x450.jpg 450w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/06/interzone-600x600.jpg 600w
                                                            "
                                                            sizes="(max-width: 36px) 100vw, 36px"
                                                        />
                                                    </a>
                                                </div>

                                                <div class="author-list-name">
                                                    <a href="#;/projects/exlibriswp/publisher/interzone/">Interzone</a>
                                                </div>
                                            </li>

                                            <li class="author-list">
                                                <div class="float-left mr-2">
                                                    <a href="#;/projects/exlibriswp/publisher/rush-publishers/">
                                                        <img
                                                            class="img-res rounded-circle shadow-sm"
                                                            src="https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/04/rush-150x150.jpg"
                                                            loading="lazy"
                                                            srcset="
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/04/rush-150x150.jpg 150w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/04/rush-100x100.jpg 100w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/04/rush-300x300.jpg 300w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/04/rush-450x450.jpg 450w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/04/rush-600x600.jpg 600w
                                                            "
                                                            sizes="(max-width: 36px) 100vw, 36px"
                                                        />
                                                    </a>
                                                </div>

                                                <div class="author-list-name">
                                                    <a href="#;/projects/exlibriswp/publisher/rush-publishers/">Rush Publishers</a>
                                                </div>
                                            </li>

                                            <li class="author-list">
                                                <div class="float-left mr-2">
                                                    <a href="#;/projects/exlibriswp/publisher/victory/">
                                                        <img
                                                            class="img-res rounded-circle shadow-sm"
                                                            src="https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/04/victory-150x150.jpg"
                                                            loading="lazy"
                                                            srcset="
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/04/victory-150x150.jpg 150w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/04/victory-100x100.jpg 100w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/04/victory-300x300.jpg 300w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/04/victory-450x450.jpg 450w,
                                                                https://demo.ramsthemes.com/projects/exlibriswp/wp-content/uploads/2020/04/victory-600x600.jpg 600w
                                                            "
                                                            sizes="(max-width: 36px) 100vw, 36px"
                                                        />
                                                    </a>
                                                </div>

                                                <div class="author-list-name">
                                                    <a href="#;/projects/exlibriswp/publisher/victory/">Victory</a>
                                                </div>
                                            </li>
                                        </ul>

                                        <a class="btn btn-custom btn-block" href="#;/projects/exlibriswp/book-publishers/"> All publishers </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <div id="page-content-wrapper">
                        @yield('content')
                    </div>
                </div>
            </div>

            <footer>
                <div class="container-fluid py-3 bg-footer">
                    <div class="row">
                        <div class="col-12 col-sm-12 mx-auto">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <div class="p-3">
                                        <div id="text-2" class="widget_text">
                                            <h6>CNFT.IO</h6>
                                            <div class="textwidget">
                                                <p class="mt-1 mb-1"><a href="{{URL::to('/')}}">Home</a></p>
                                                <p class="mt-1 mb-1"><a href="{{URL::to('/')}}">Mint</a></p>
                                                <p class="mt-1 mb-1"><a href="{{URL::to('/')}}">Sell</a></p>
                                                <p class="mt-1 mb-1"><a href="{{URL::to('/')}}">Marketplace</a></p>
                                                <p class="mt-1 mb-1"><a href="{{URL::to('/')}}">BetaDex</a></p>
                                                <p class="mt-1 mb-1"><a href="{{URL::to('/')}}">Login</a></p>
                                                <p class="mt-1 mb-1"><a href="{{URL::to('/')}}">Support</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3">
                                    <div class="p-3">
                                        <div id="text-3" class="widget_text">
                                            <h6>About Us</h6>
                                            <div class="textwidget">
                                                CNFT.IO is a marketplace for Cardano Non-Fungible Tokens, launched in July 2021 from a
                                                <br />
                                                team decentralised across the world, we can officially say we are the first marketplace on Cardano. We will be adding loads of new features over the next few months so be sure to check back.
                                                If you need any help or support reach out to a member of the team on one of our social media channels.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3">
                                    <div class="p-3">
                                        <div id="text-4" class="widget_text">
                                            <h6>Connect</h6>
                                            <div class="textwidget">
                                                <a href="#"><i class="mx-1 fab fa-facebook fa-lg"></i><span class="screen-reader-text">Facebook</span></a>
                                                <a href="#"><i class="mx-1 fab fa-twitter fa-lg"></i><span class="screen-reader-text">Twitter</span></a>
                                                <a href="#"><i class="mx-1 fab fa-linkedin fa-lg"></i><span class="screen-reader-text">Linkedin</span></a>
                                                <a href="#"><i class="mx-1 fab fa-instagram fa-lg"></i><span class="screen-reader-text">Instagram</span></a>
                                                <a href="#"><i class="mx-1 fab fa-telegram fa-lg"></i><span class="screen-reader-text">Telegram</span></a>
                                                <a href="#"><i class="mx-1 fab fa-youtube fa-lg"></i><span class="screen-reader-text">Youtube</span></a>
                                                <a href="#"><i class="mx-1 fab fa-vimeo fa-lg"></i><span class="screen-reader-text">Vimeo</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3">
                                    <div class="p-3">
                                        <div id="text-5" class="widget_text">
                                            <h6>Subscribe</h6>
                                            <div class="textwidget">
                                                Sign up to our mailing list and receive up-to-date info on new releases.
                                                <!--<p><i class="far fa-copyright fa-sm"></i> <span>2022 EXLIBRIS</br>
		All Rights Reserved</p>	-->
                                                <form action="" class="customform">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-12 mb-2">
                                                            <input type="text" placeholder="Name" class="form-control input-text" />
                                                        </div>
                                                        <div class="col-12 col-sm-12 mb-2">
                                                            <input type="email" placeholder="Email Address" class="form-control input-text" />
                                                        </div>
                                                        <div class="col-12 col-sm-12 text-left">
                                                            <input type="submit" class="btn btn-custom" value="Subscribe" />
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <a href="#" id="back-to-top" class="btn-custom" title="Back to top"><i class="fas fa-chevron-up"></i></a>
        </main>

        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="pswp__bg"></div>
            <div class="pswp__scroll-wrap">
                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>
                <div class="pswp__ui pswp__ui--hidden">
                    <div class="pswp__top-bar">
                        <div class="pswp__counter"></div>
                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                        <button class="pswp__button pswp__button--share" title="Share"></button>
                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                                <div class="pswp__preloader__cut">
                                    <div class="pswp__preloader__donut"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                    </div>
                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>
                </div>
            </div>
        </div>
        <style type="text/css" media="screen">
            /* Ivory search custom CSS code */
            .is-form-style input.is-search-input {
                border-radius: 10px 0 0 10px;
                font-family: inherit;
            }
            .is-form-style input.is-search-submit,
            .is-search-icon {
                border-radius: 0 10px 10px 0;
            }
            .is-ajax-search-result {
                top: 60px !important;
            }
            div.is-ajax-search-details,
            div.is-ajax-search-result {
                border-radius: 10px;
            }
            .is-ajax-search-items {
                border-radius: 10px !important;
            }
            .is-search-sections .thumbnail img {
                border-radius: 0.5rem;
            }
            .is-ajax-search-details .is-title a,
            .is-ajax-search-post .is-title a {
                font-weight: bold;
            }
            .is-form-id-3321 .is-search-input,
            .is-form-id-3322 .is-search-input {
                border-radius: 10px !important;
            }
            .is-form-id-3325 .is-search-submit:focus,
            .is-form-id-3325 .is-search-submit:hover,
            .is-form-id-3325 .is-search-submit,
            .is-form-id-3325 .is-search-icon {
                border-radius: 0 10px 10px 0;
            }
        </style>
        <script type="text/javascript">
            (function () {
                var c = document.body.className;
                c = c.replace(/woocommerce-no-js/, "woocommerce-js");
                document.body.className = c;
            })();
        </script>
        <link rel="stylesheet" id="ivory-ajax-search-styles-css" href="https://demo.ramsthemes.com/projects/exlibriswp/wp-content/plugins/add-search-to-menu/public/css/ivory-ajax-search.min.css?ver=4.8.1" media="all" />
        <script type="text/javascript" id="lbwps-js-extra">
            /* <![CDATA[ */
            var lbwpsOptions = {
                label_facebook: "Share on Facebook",
                label_twitter: "Tweet",
                label_pinterest: "Pin it",
                label_download: "Download image",
                label_copyurl: "Copy image URL",
                share_facebook: "0",
                share_twitter: "0",
                share_pinterest: "0",
                share_download: "1",
                share_direct: "0",
                share_copyurl: "0",
                share_custom_label: "",
                share_custom_link: "",
                wheelmode: "close",
                close_on_drag: "1",
                history: "1",
                show_counter: "1",
                show_fullscreen: "1",
                show_zoom: "1",
                show_caption: "1",
                loop: "1",
                pinchtoclose: "1",
                taptotoggle: "1",
                spacing: "12",
                close_on_click: "1",
                fulldesktop: "0",
                use_alt: "0",
                desktop_slider: "1",
                idletime: "4000",
                hide_scrollbars: "1",
            };
            /* ]]> */
        </script>
        <script src="https://demo.ramsthemes.com/projects/exlibriswp/wp-content/plugins/lightbox-photoswipe/assets/scripts.js?ver=3.2.5" id="lbwps-js"></script>
        <script src="https://demo.ramsthemes.com/projects/exlibriswp/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.5.9.0" id="jquery-blockui-js"></script>
        <script type="text/javascript" id="wc-add-to-cart-js-extra">
            /* <![CDATA[ */
            var wc_add_to_cart_params = {
                ajax_url: "\/projects\/exlibriswp\/wp-admin\/admin-ajax.php",
                wc_ajax_url: "\/projects\/exlibriswp\/?wc-ajax=%%endpoint%%",
                i18n_view_cart: "View cart",
                cart_url: "https:\/\/demo.ramsthemes.com\/projects\/exlibriswp\/cart\/",
                is_cart: "",
                cart_redirect_after_add: "no",
            };
            /* ]]> */
        </script>
        <script src="{{ asset('assets/js/add-to-cart.min.js') }}" id="wc-add-to-cart-js"></script>
        <script src="https://demo.ramsthemes.com/projects/exlibriswp/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.5.9.0" id="js-cookie-js"></script>
        <script type="text/javascript" id="woocommerce-js-extra">
            /* <![CDATA[ */
            var woocommerce_params = { ajax_url: "\/projects\/exlibriswp\/wp-admin\/admin-ajax.php", wc_ajax_url: "\/projects\/exlibriswp\/?wc-ajax=%%endpoint%%" };
            /* ]]> */
        </script>
        <script src="https://demo.ramsthemes.com/projects/exlibriswp/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=5.9.0" id="woocommerce-js"></script>
        <script type="text/javascript" id="wc-cart-fragments-js-extra">
            /* <![CDATA[ */
            var wc_cart_fragments_params = {
                ajax_url: "\/projects\/exlibriswp\/wp-admin\/admin-ajax.php",
                wc_ajax_url: "\/projects\/exlibriswp\/?wc-ajax=%%endpoint%%",
                cart_hash_key: "wc_cart_hash_cef373075d6aebdc03de57f1d7f74860",
                fragment_name: "wc_fragments_cef373075d6aebdc03de57f1d7f74860",
                request_timeout: "5000",
            };
            /* ]]> */
        </script>
        <script src="https://demo.ramsthemes.com/projects/exlibriswp/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=5.9.0" id="wc-cart-fragments-js"></script>
        <script type="text/javascript" id="ppress-frontend-script-js-extra">
            /* <![CDATA[ */
            var pp_ajax_form = {
                ajaxurl: "https:\/\/demo.ramsthemes.com\/projects\/exlibriswp\/wp-admin\/admin-ajax.php",
                confirm_delete: "Are you sure?",
                deleting_text: "Deleting...",
                deleting_error: "An error occurred. Please try again.",
                nonce: "1c6f1b052a",
                disable_ajax_form: "false",
            };
            /* ]]> */
        </script>
        <script src="https://demo.ramsthemes.com/projects/exlibriswp/wp-content/plugins/wp-user-avatar/assets/js/frontend.min.js?ver=3.2.4" id="ppress-frontend-script-js"></script>
        <script type="text/javascript" id="tinvwl-js-extra">
            /* <![CDATA[ */
            var tinvwl_add_to_wishlist = {
                text_create: "Create New",
                text_already_in: '"{product_name}" already in Wishlist',
                simple_flow: "",
                hide_zero_counter: "",
                i18n_make_a_selection_text: "Please select some product options before adding this product to your wishlist.",
                tinvwl_break_submit: "No items or actions are selected.",
                tinvwl_clipboard: "Copied!",
                allow_parent_variable: "",
                block_ajax_wishlists_data: "",
                update_wishlists_data: "",
                hash_key: "ti_wishlist_data_cef373075d6aebdc03de57f1d7f74860",
                nonce: "aea3cfa169",
                rest_root: "https:\/\/demo.ramsthemes.com\/projects\/exlibriswp\/wp-json\/",
                plugin_url: "https:\/\/demo.ramsthemes.com\/projects\/exlibriswp\/wp-content\/plugins\/ti-woocommerce-wishlist\/",
            };
            /* ]]> */
        </script>
        <script src="{{ asset('assets/js/public.min.js') }}" id="tinvwl-js"></script>
        <script src="{{ asset('assets/js/flickity.pkgd.min.js') }}" id="flickity-js"></script>
        <script src="{{ asset('assets/js/flickity-custom.js') }}" id="flickity-custom-js"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" id="bootstrap-js"></script>
        <script src="https://demo.ramsthemes.com/projects/exlibriswp/wp-content/themes/exlibriswp/assets/js/simplebar.min.js?ver=5.8.3" id="scrollbar-js"></script>
        <script src="https://demo.ramsthemes.com/projects/exlibriswp/wp-content/themes/exlibriswp/assets/js/custom.js?ver=5.8.3" id="exlibriswp-custom-js"></script>
        <script src="https://demo.ramsthemes.com/projects/exlibriswp/wp-content/themes/exlibriswp/assets/js/navbar.js?ver=5.8.3" id="navbar-js"></script>
        <script src="https://demo.ramsthemes.com/projects/exlibriswp/wp-content/themes/exlibriswp/assets/js/wooalign-public.js?ver=5.8.3" id="woo-align-buttons-js"></script>
        <script src="https://demo.ramsthemes.com/projects/exlibriswp/wp-content/themes/exlibriswp/assets/js/pace/pace.min.js?ver=5.8.3" id="pace-js"></script>
        <script src="https://demo.ramsthemes.com/projects/exlibriswp/wp-content/themes/exlibriswp/assets/js/bootstrap-drawer.js?ver=5.8.3" id="bootstrap-drawer-js"></script>
        <script type="text/javascript" id="ivory-search-scripts-js-extra">
            /* <![CDATA[ */
            var IvorySearchVars = { is_analytics_enabled: "1" };
            /* ]]> */
        </script>
        <script src="https://demo.ramsthemes.com/projects/exlibriswp/wp-content/plugins/add-search-to-menu/public/js/ivory-search.min.js?ver=4.8.1" id="ivory-search-scripts-js"></script>
        <script src="https://demo.ramsthemes.com/projects/exlibriswp/wp-includes/js/wp-embed.min.js?ver=5.8.3" id="wp-embed-js"></script>
    </body>
</html>
