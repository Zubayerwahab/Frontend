@extends('front.master')
@section('title')
    Home Page
@endsection
@section('body')

    <div id="wrapper" class="site wp-site-blocks"> <a class="skip-link screen-reader-text scroll-ignore" href="#main">Skip to content</a>
        <header id="masthead" class="site-header" role="banner" itemtype="https://schema.org/WPHeader" itemscope>
            <div id="main-header" class="site-header-wrap">
                <div class="site-header-inner-wrap">
                    <div class="site-header-upper-wrap">
                        <div class="site-header-upper-inner-wrap">
                            <div class="site-main-header-wrap site-header-row-container site-header-focus-item site-header-row-layout-standard" data-section="kadence_customizer_header_main">
                                <div class="site-header-row-container-inner">
                                    <div class="site-container">
                                        <div class="site-main-header-inner-wrap site-header-row site-header-row-has-sides site-header-row-no-center">
                                            <div class="site-header-main-section-left site-header-section site-header-section-left">
                                                <div class="site-header-item site-header-focus-item" data-section="title_tagline">
                                                    <div class="site-branding branding-layout-standard">
                                                        <a class="brand" href="https://estezonhomegoods.com/" rel="home" aria-label="Estezon Home Goods">
                                                            <div class="site-title-wrap">
                                                                <p class="site-title">Estezon Home Goods</p>
                                                            </div></a>
                                                    </div>
                                                </div><!-- data-section="title_tagline" -->
                                            </div>
                                            <div class="site-header-main-section-right site-header-section site-header-section-right">
                                                <div class="site-header-item site-header-focus-item site-header-item-main-navigation header-navigation-layout-stretch-false header-navigation-layout-fill-stretch-false" data-section="kadence_customizer_primary_navigation">
                                                    <nav id="site-navigation" class="main-navigation header-navigation nav--toggle-sub header-navigation-style-underline header-navigation-dropdown-animation-fade-down" role="navigation" aria-label="Primary Navigation">
                                                        <div class="primary-menu-container header-menu-container">
                                                            <ul id="primary-menu" class="menu">
                                                                <li id="menu-item-26" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-5 current_page_item menu-item-26"><a href="https://estezonhomegoods.com/" aria-current="page">Home</a></li>
                                                                <li id="menu-item-1016" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1016"><a href="https://estezonhomegoods.com/shop-page-customize/">Shop</a></li>
                                                                <li id="menu-item-41" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-41"><a href="https://estezonhomegoods.com/about-us/"><span class="nav-drop-title-wrap">About Us<span class="dropdown-nav-toggle"><span class="kadence-svg-iconset svg-baseline">
                      <svg aria-hidden="true" class="kadence-svg-icon kadence-arrow-down-svg" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24">
                       <title>Expand</title><path d="M5.293 9.707l6 6c0.391 0.391 1.024 0.391 1.414 0l6-6c0.391-0.391 0.391-1.024 0-1.414s-1.024-0.391-1.414 0l-5.293 5.293-5.293-5.293c-0.391-0.391-1.024-0.391-1.414 0s-0.391 1.024 0 1.414z"></path>
                      </svg></span></span></span></a>
                                                                    <ul class="sub-menu">
                                                                        <li id="menu-item-200" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-200"><a href="https://estezonhomegoods.com/contact-us/">Contact Us</a></li>
                                                                    </ul> </li>
                                                                <li id="menu-item-30" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-30"><a href="{{ route('login') }}">Login</a></li>
                                                                <li id="menu-item-30" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-30"><a href="{{ route('register') }}">Register</a></li>
                                                            </ul>
                                                        </div>
                                                    </nav><!-- #site-navigation -->
                                                </div><!-- data-section="primary_navigation" -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-header" class="site-mobile-header-wrap">
                <div class="site-header-inner-wrap">
                    <div class="site-header-upper-wrap">
                        <div class="site-header-upper-inner-wrap">
                            <div class="site-main-header-wrap site-header-focus-item site-header-row-layout-standard site-header-row-tablet-layout-default site-header-row-mobile-layout-default ">
                                <div class="site-header-row-container-inner">
                                    <div class="site-container">
                                        <div class="site-main-header-inner-wrap site-header-row site-header-row-has-sides site-header-row-no-center">
                                            <div class="site-header-main-section-left site-header-section site-header-section-left">
                                                <div class="site-header-item site-header-focus-item" data-section="title_tagline">
                                                    <div class="site-branding mobile-site-branding branding-layout-standard branding-tablet-layout-inherit branding-mobile-layout-inherit">
                                                        <a class="brand" href="https://estezonhomegoods.com/" rel="home" aria-label="Estezon Home Goods">
                                                            <div class="site-title-wrap">
                                                                <div class="site-title vs-md-false">
                                                                    Estezon Home Goods
                                                                </div>
                                                            </div></a>
                                                    </div>
                                                </div><!-- data-section="title_tagline" -->
                                            </div>
                                            <div class="site-header-main-section-right site-header-section site-header-section-right">
                                                <div class="site-header-item site-header-focus-item site-header-item-navgation-popup-toggle" data-section="kadence_customizer_mobile_trigger">
                                                    <div class="mobile-toggle-open-container"> <button id="mobile-toggle" class="menu-toggle-open drawer-toggle menu-toggle-style-default" aria-label="Open menu" data-toggle-target="#mobile-drawer" data-toggle-body-class="showing-popup-drawer-from-right" aria-expanded="false" data-set-focus=".menu-toggle-close"> <span class="menu-toggle-icon"><span class="kadence-svg-iconset">
                  <svg aria-hidden="true" class="kadence-svg-icon kadence-menu-svg" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24">
                   <title>Toggle Menu</title><path d="M3 13h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1zM3 7h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1zM3 19h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1z"></path>
                  </svg></span></span> </button>
                                                    </div>
                                                </div><!-- data-section="mobile_trigger" -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- #masthead -->
        <div id="inner-wrap" class="wrap hfeed kt-clear">
            <div id="primary" class="content-area">
                <div class="content-container site-container">
                    <main id="main" class="site-main" role="main">
                        <div class="woocommerce kadence-woo-messages-none-woo-pages woocommerce-notices-wrapper"></div>
                        <div class="content-wrap">
                            <article id="post-5" class="entry content-bg single-entry post-5 page type-page status-publish hentry">
                                <div class="entry-content-wrap">
                                    <div class="entry-content single-content">
                                        <div class="wp-block-uagb-container uagb-block-2d58a38f alignfull uagb-is-root-container">
                                            <div class="uagb-container-inner-blocks-wrap">
                                                <div class="wp-block-uagb-container uagb-block-8c8f8852">
                                                    <div class="kb-row-layout-wrap kb-row-layout-id_e270c6-bd alignnone wp-block-kadence-rowlayout">
                                                        <div class="kt-row-column-wrap kt-has-1-columns kt-row-layout-equal kt-tab-layout-inherit kt-mobile-layout-row kt-row-valign-top">
                                                            <div class="wp-block-kadence-column kadence-column_08ecfc-67">
                                                                <div class="kt-inside-inner-col">
                                                                    <div class="kb-row-layout-wrap kb-row-layout-id_b6c8ec-45 alignnone wp-block-kadence-rowlayout">
                                                                        <div class="kt-row-column-wrap kt-has-3-columns kt-row-layout-center-wide kt-tab-layout-inherit kt-mobile-layout-row kt-row-valign-top">
                                                                            <div class="wp-block-kadence-column kadence-column_eb17ba-0e">
                                                                                <div class="kt-inside-inner-col"></div>
                                                                            </div>
                                                                            <div class="wp-block-kadence-column kadence-column_de181b-64">
                                                                                <div class="kt-inside-inner-col">
                                                                                    <h1 id="gspb_heading-id-gsbp-57e885b8-d566" class="gspb_heading gspb_heading-id-gsbp-57e885b8-d566 " data-aos="flip-up" data-aos-easing="ease" data-aos-duration="700"><span class="text-anim text-anim--rotate js-text-anim">Unlock your <span class="text-anim__wrapper js-text-anim__wrapper"><span class="text-anim__word js-text-anim__word text-anim__word--in">potential</span><span class="text-anim__word js-text-anim__word ">ability</span><span class="text-anim__word js-text-anim__word ">talent</span></span></span> with the right tools.</h1>
                                                                                    <div id="gspb_button-id-gsbp-3862aebb-412a" class="gspb_button_wrapper gspb_button-id-gsbp-3862aebb-412a wp-block-greenshift-blocks-button">
                                                                                        <a class="gspb-buttonbox" data-aos="fade-up" data-aos-easing="ease" data-aos-duration="700" href="https://estezonhomegoods.com/shop-page-customize/" rel="noopener"><span class="gspb-buttonbox-textwrap"><span class="gspb-buttonbox-icon">
                          <svg class="" style="display:inline-block;vertical-align:middle" width="15" height="15" viewbox="0 0 896 1024" xmlns="http://www.w3.org/2000/svg">
                           <path style="fill:#565D66" d="M436.202 76.202l-39.598 39.598c-9.372 9.372-9.372 24.568 0 33.942l310.26 310.258h-682.864c-13.254 0-24 10.746-24 24v56c0 13.254 10.746 24 24 24h682.864l-310.26 310.26c-9.372 9.372-9.372 24.568 0 33.942l39.598 39.598c9.372 9.372 24.568 9.372 33.942 0l418.828-418.828c9.372-9.372 9.372-24.568 0-33.942l-418.83-418.828c-9.372-9.374-24.568-9.374-33.94 0z"></path>
                          </svg></span><span class="gspb-buttonbox-text"><span class="gspb-buttonbox-title">SEE PRODUCTS</span></span></span></a>
                                                                                    </div>
                                                                                    <div class="wp-block-kadence-column kadence-column_fe88c2-f2">
                                                                                        <div class="kt-inside-inner-col">
                                                                                            <div class="wp-block-kadence-column kadence-column_38ab85-42">
                                                                                                <div class="kt-inside-inner-col">
                                                                                                    <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
                                                                                                    <form role="search" method="get" action="https://estezonhomegoods.com/" class="wp-block-search__button-outside wp-block-search__text-button aligncenter animated fadeIn wp-block-search">
                                                                                                        <label for="wp-block-search__input-1" class="wp-block-search__label screen-reader-text">Search</label>
                                                                                                        <div class="wp-block-search__inside-wrapper " style="width: 75%">
                                                                                                            <input type="search" id="wp-block-search__input-1" class="wp-block-search__input has-small-font-size" name="s" value="" placeholder="Search product here..." required>
                                                                                                            <input type="hidden" name="post_type" value="product"><button type="submit" class="wp-block-search__button has-text-color has-theme-palette5-color has-background has-theme-palette4-background-color has-small-font-size wp-element-button">Search</button>
                                                                                                        </div>
                                                                                                    </form>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="wp-block-kadence-column kadence-column_8fd11c-43">
                                                                                <div class="kt-inside-inner-col"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uagb-container__shape uagb-container__shape-bottom uagb-container__invert" data-negative="false">
                                                <svg xmlns="https://www.w3.org/2000/svg" viewbox="0 0 1000 100" preserveaspectratio="none">
                                                    <path class="uagb-container__shape-fill" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z"></path><path class="uagb-container__shape-fill" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"></path><path class="uagb-container__shape-fill" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="kb-row-layout-wrap kb-row-layout-id_663b43-aa alignnone wp-block-kadence-rowlayout">
                                            <div class="kt-row-column-wrap kt-has-1-columns kt-row-layout-equal kt-tab-layout-inherit kt-mobile-layout-row kt-row-valign-top">
                                                <div class="wp-block-kadence-column kadence-column_8cbbb4-95">
                                                    <div class="kt-inside-inner-col">
                                                        <div class="wp-block-uagb-container uagb-block-b652ae47 alignfull uagb-is-root-container">
                                                            <div class="uagb-container-inner-blocks-wrap">
                                                                <div class="kb-row-layout-wrap kb-row-layout-id_a9801c-db alignnone animated fadeInUp wp-block-kadence-rowlayout">
                                                                    <div class="kt-row-column-wrap kt-has-4-columns kt-row-layout-equal kt-tab-layout-inherit kt-mobile-layout-row kt-row-valign-top">
                                                                        <div class="wp-block-kadence-column kadence-column_6eef40-85">
                                                                            <div class="kt-inside-inner-col">
                                                                                <div class="wp-block-essential-blocks-infobox">
                                                                                    <div class="eb-parent-wrapper eb-parent-eb-infobox-3an856m ">
                                                                                        <div class="eb-infobox-3an856m eb-infobox-wrapper">
                                                                                            <div class="infobox-wrapper-inner">
                                                                                                <div class="icon-img-wrapper">
                                                                                                    <div class="eb-infobox-image-wrapper">
                                                                                                        <img decoding="async" alt="macbook" data-src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/eCommerce-Icons-Dark_Shopping-Online.png" class="eb-infobox-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                                                                                                        <noscript>
                                                                                                            <img decoding="async" class="eb-infobox-image" src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/eCommerce-Icons-Dark_Shopping-Online.png" alt="macbook">
                                                                                                        </noscript>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="contents-wrapper">
                                                                                                    <h6 class="title">Online Shopping</h6>
                                                                                                    <p class="description">Register and start add products in your cart.</p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="wp-block-kadence-column kadence-column_d523f9-87">
                                                                            <div class="kt-inside-inner-col">
                                                                                <div class="wp-block-essential-blocks-infobox">
                                                                                    <div class="eb-parent-wrapper eb-parent-eb-infobox-mycy3wl ">
                                                                                        <div class="eb-infobox-mycy3wl eb-infobox-wrapper">
                                                                                            <div class="infobox-wrapper-inner">
                                                                                                <div class="icon-img-wrapper">
                                                                                                    <div class="eb-infobox-image-wrapper">
                                                                                                        <img decoding="async" alt="macbook" data-src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/eCommerce-Icons-Dark_Prices.png" class="eb-infobox-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                                                                                                        <noscript>
                                                                                                            <img decoding="async" class="eb-infobox-image" src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/eCommerce-Icons-Dark_Prices.png" alt="macbook">
                                                                                                        </noscript>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="contents-wrapper">
                                                                                                    <h6 class="title">Affordable</h6>
                                                                                                    <p class="description">Keep calm and buy up. Check out our list of affordable products.</p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="wp-block-kadence-column kadence-column_d79625-b2">
                                                                            <div class="kt-inside-inner-col">
                                                                                <div class="wp-block-essential-blocks-infobox">
                                                                                    <div class="eb-parent-wrapper eb-parent-eb-infobox-89dk71i ">
                                                                                        <div class="eb-infobox-89dk71i eb-infobox-wrapper">
                                                                                            <div class="infobox-wrapper-inner">
                                                                                                <div class="icon-img-wrapper">
                                                                                                    <div class="eb-infobox-image-wrapper">
                                                                                                        <img decoding="async" alt="macbook" data-src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/eCommerce-Icons-Dark_Rewards.png" class="eb-infobox-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                                                                                                        <noscript>
                                                                                                            <img decoding="async" class="eb-infobox-image" src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/eCommerce-Icons-Dark_Rewards.png" alt="macbook">
                                                                                                        </noscript>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="contents-wrapper">
                                                                                                    <h6 class="title">Best Quality</h6>
                                                                                                    <p class="description">Offering the top quality products just for you.</p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="wp-block-kadence-column kadence-column_9dfd6a-d8">
                                                                            <div class="kt-inside-inner-col">
                                                                                <div class="wp-block-essential-blocks-infobox">
                                                                                    <div class="eb-parent-wrapper eb-parent-eb-infobox-od383vy ">
                                                                                        <div class="eb-infobox-od383vy eb-infobox-wrapper">
                                                                                            <div class="infobox-wrapper-inner">
                                                                                                <div class="icon-img-wrapper">
                                                                                                    <div class="eb-infobox-image-wrapper">
                                                                                                        <img decoding="async" alt="macbook" data-src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/eCommerce-Icons-Dark_Delivery.png" class="eb-infobox-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                                                                                                        <noscript>
                                                                                                            <img decoding="async" class="eb-infobox-image" src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/eCommerce-Icons-Dark_Delivery.png" alt="macbook">
                                                                                                        </noscript>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="contents-wrapper">
                                                                                                    <h6 class="title">Shipping</h6>
                                                                                                    <p class="description">Choose your address location to be shipped. We offer Door-to-Door Delivery.</p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kb-row-layout-wrap kb-row-layout-id_dc6a56-15 alignnone wp-block-kadence-rowlayout">
                                            <div class="kt-row-column-wrap kt-has-1-columns kt-row-layout-equal kt-tab-layout-inherit kt-mobile-layout-row kt-row-valign-top">
                                                <div class="wp-block-kadence-column kadence-column_afd84d-ed">
                                                    <div class="kt-inside-inner-col">
                                                        <div class="wp-block-uagb-container uagb-block-f746d72f alignfull uagb-is-root-container">
                                                            <div class="uagb-container-inner-blocks-wrap">
                                                                <div class="wp-block-uagb-container uagb-block-65842264 alignfull uagb-is-root-container">
                                                                    <div class="uagb-container-inner-blocks-wrap"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kb-row-layout-wrap kb-row-layout-id_595240-72 alignnone wp-block-kadence-rowlayout">
                                            <div class="kt-row-column-wrap kt-has-1-columns kt-row-layout-equal kt-tab-layout-inherit kt-mobile-layout-row kt-row-valign-top">
                                                <div class="wp-block-kadence-column kadence-column_378997-77">
                                                    <div class="kt-inside-inner-col">
                                                        <div class="wp-block-uagb-container uagb-block-6c8ffb6d alignfull uagb-is-root-container">
                                                            <div class="uagb-container-inner-blocks-wrap">
                                                                <p class="has-text-align-left has-theme-palette-5-color has-text-color has-larger-font-size"><strong>New Product</strong></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

{{--                                        @foreach($products as $product)--}}
{{--                                            <div class="row mt-8">--}}
{{--                                                <label for="" class="col-md-12 mx-auto">{{ $category->name }}</label>--}}
{{--                                                <p class="has-text-align-left has-theme-palette-5-color has-text-color has-larger-font-size">{{ $product->name }}</p>--}}

{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="row mt-2">--}}
{{--                                                <label for="" class="col-md-4">{{ $category->status }}</label>--}}
{{--                                                <p class="has-text-align-left has-theme-palette-5-color has-text-color has-larger-font-size">{{ $product->status }}</p>--}}


{{--                                            </div>--}}
{{--                                        @endforeach--}}
                                        @foreach($products as $product)
                                            <div class="single-product">
                                                <div class="product-f-image">
                                                    <img src="{{ asset($product->image)}}" alt="" style="height: 265px">
                                                    <div class="product-hover">
                                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>

                                                    </div>
                                                </div>


                                                <p class="has-text-align-left has-theme-palette-5-color has-text-color has-larger-font-size">{{ $product->name }}</p>
                                                <div class="product-carousel-price">
                                                    <del>${{$product->price+500}}</del> <ins>${{ $product->price }}</ins>
                                                </div>

{{--                                                <label for="" class="col-md-4">{{ $product->status }}</label>--}}
                                                <p class="has-text-align-left has-theme-palette-5-color has-text-color has-larger-font-size">{{ $product->status }}</p>
                                            </div>
                                        @endforeach


{{--                                        <div class="wp-block-product-blocks-product-grid-3 wopb-block-e58ac5 animated fadeInLeft">--}}
{{--                                            <div class="wopb-block-wrapper">--}}
{{--                                                <div class="wopb-heading-filter">--}}
{{--                                                    <div class="wopb-heading-filter-in">--}}
{{--                                                        <div class="wopb-heading-wrap wopb-heading-style1 wopb-heading-left">--}}
{{--                                                            <h2 class="wopb-heading-inner"><span></span></h2>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="wopb-wrapper-main-content">--}}
{{--                                                    <div class="wopb-product-blocks-slide" data-slidestoshow="5-2-1" data-autoplay="1" data-slidespeed="2500" data-showdots="1" data-showarrows="1">--}}
{{--                                                        <div class="wopb-block-item">--}}
{{--                                                            <div class="wopb-block-content-wrap wopb-pg-l1">--}}
{{--                                                                <div class="wopb-block-image wopb-block-image-zoomIn">--}}
{{--                                                                    <div class="wopb-product-meta">--}}
{{--                                                                        <a class="wopb-wishlist-icon wopb-wishlist-add" data-action="add" data-postid="1353"><span class="wopb-tooltip-text">--}}
{{--                     <svg viewbox="0 -28 512.001 512" xmlns="http://www.w3.org/2000/svg">--}}
{{--                      <path d="m256 455.515625c-7.289062 0-14.316406-2.640625-19.792969-7.4375-20.683593-18.085937-40.625-35.082031-58.21875-50.074219l-.089843-.078125c-51.582032-43.957031-96.125-81.917969-127.117188-119.3125-34.644531-41.804687-50.78125-81.441406-50.78125-124.742187 0-42.070313 14.425781-80.882813 40.617188-109.292969 26.503906-28.746094 62.871093-44.578125 102.414062-44.578125 29.554688 0 56.621094 9.34375 80.445312 27.769531 12.023438 9.300781 22.921876 20.683594 32.523438 33.960938 9.605469-13.277344 20.5-24.660157 32.527344-33.960938 23.824218-18.425781 50.890625-27.769531 80.445312-27.769531 39.539063 0 75.910156 15.832031 102.414063 44.578125 26.191406 28.410156 40.613281 67.222656 40.613281 109.292969 0 43.300781-16.132812 82.9375-50.777344 124.738281-30.992187 37.398437-75.53125 75.355469-127.105468 119.308594-17.625 15.015625-37.597657 32.039062-58.328126 50.167969-5.472656 4.789062-12.503906 7.429687-19.789062 7.429687zm-112.96875-425.523437c-31.066406 0-59.605469 12.398437-80.367188 34.914062-21.070312 22.855469-32.675781 54.449219-32.675781 88.964844 0 36.417968 13.535157 68.988281 43.882813 105.605468 29.332031 35.394532 72.960937 72.574219 123.476562 115.625l.09375.078126c17.660156 15.050781 37.679688 32.113281 58.515625 50.332031 20.960938-18.253907 41.011719-35.34375 58.707031-50.417969 50.511719-43.050781 94.136719-80.222656 123.46875-115.617188 30.34375-36.617187 43.878907-69.1875 43.878907-105.605468 0-34.515625-11.605469-66.109375-32.675781-88.964844-20.757813-22.515625-49.300782-34.914062-80.363282-34.914062-22.757812 0-43.652344 7.234374-62.101562 21.5-16.441406 12.71875-27.894532 28.796874-34.609375 40.046874-3.453125 5.785157-9.53125 9.238282-16.261719 9.238282s-12.808594-3.453125-16.261719-9.238282c-6.710937-11.25-18.164062-27.328124-34.609375-40.046874-18.449218-14.265626-39.34375-21.5-62.097656-21.5zm0 0" />--}}
{{--                     </svg>--}}
{{--                     <svg viewbox="0 -28 512.00002 512" xmlns="http://www.w3.org/2000/svg">--}}
{{--                      <path d="m471.382812 44.578125c-26.503906-28.746094-62.871093-44.578125-102.410156-44.578125-29.554687 0-56.621094 9.34375-80.449218 27.769531-12.023438 9.300781-22.917969 20.679688-32.523438 33.960938-9.601562-13.277344-20.5-24.660157-32.527344-33.960938-23.824218-18.425781-50.890625-27.769531-80.445312-27.769531-39.539063 0-75.910156 15.832031-102.414063 44.578125-26.1875 28.410156-40.613281 67.222656-40.613281 109.292969 0 43.300781 16.136719 82.9375 50.78125 124.742187 30.992188 37.394531 75.535156 75.355469 127.117188 119.3125 17.613281 15.011719 37.578124 32.027344 58.308593 50.152344 5.476563 4.796875 12.503907 7.4375 19.792969 7.4375 7.285156 0 14.316406-2.640625 19.785156-7.429687 20.730469-18.128907 40.707032-35.152344 58.328125-50.171876 51.574219-43.949218 96.117188-81.90625 127.109375-119.304687 34.644532-41.800781 50.777344-81.4375 50.777344-124.742187 0-42.066407-14.425781-80.878907-40.617188-109.289063zm0 0" />--}}
{{--                     </svg><span class="wopb-tooltip-text-left"><span>Add to Wishlist</span><span>Browse Wishlist</span></span></span></a>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="wopb-quick-cart">--}}
{{--                                                                        <div class="wopb-product-btn">--}}
{{--                                                                            <div class="wopb-product-btn">--}}
{{--                                                                                <span class="wopb-tooltip-text wopb-cart-action" data-postid="1353"><a href="?add-to-cart=1353" data-stock="" aria-label="Add “Mevotech Original Grade Outer Tie Rod End GDS1460” to your cart" data-quantity="1" data-product_id="1353" data-product_sku="A-308379251-LCA-1" rel="nofollow" class="add_to_cart_button ajax_add_to_cart wopb-cart-normal">Add to cart</a><a href="https://estezonhomegoods.com/cart/" class="wopb-cart-active">View Cart</a></span>--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div><a href="https://estezonhomegoods.com/product/mevotech-original-grade-outer-tie-rod-end-gds1460/"><img decoding="async" alt="Mevotech Original Grade Outer Tie Rod End GDS1460" data-src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product191-Mevotech-Original-Grade-Outer-Tie-Rod-End-GDS1460-_00.jpg?time=1689069779" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">--}}
{{--                                                                        <noscript>--}}
{{--                                                                            <img decoding="async" alt="Mevotech Original Grade Outer Tie Rod End GDS1460" src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product191-Mevotech-Original-Grade-Outer-Tie-Rod-End-GDS1460-_00.jpg?time=1689069779">--}}
{{--                                                                        </noscript></a>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="wopb-pg-cl wopb-pg-cl2">--}}
{{--                                                                    <div class="wopb-product-cat-price">--}}
{{--                                                                        <div class="wopb-product-price">--}}
{{--                                                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>45.82</span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="wopb-product-title-review">--}}
{{--                                                                        <h3 class="wopb-block-title"><a href="https://estezonhomegoods.com/product/mevotech-original-grade-outer-tie-rod-end-gds1460/">Mevotech Original Grade Outer Tie Rod End GDS1460</a></h3>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="wopb-block-item">--}}
{{--                                                            <div class="wopb-block-content-wrap wopb-pg-l1">--}}
{{--                                                                <div class="wopb-block-image wopb-block-image-zoomIn">--}}
{{--                                                                    <div class="wopb-product-meta">--}}
{{--                                                                        <a class="wopb-wishlist-icon wopb-wishlist-add" data-action="add" data-postid="1348"><span class="wopb-tooltip-text">--}}
{{--                     <svg viewbox="0 -28 512.001 512" xmlns="http://www.w3.org/2000/svg">--}}
{{--                      <path d="m256 455.515625c-7.289062 0-14.316406-2.640625-19.792969-7.4375-20.683593-18.085937-40.625-35.082031-58.21875-50.074219l-.089843-.078125c-51.582032-43.957031-96.125-81.917969-127.117188-119.3125-34.644531-41.804687-50.78125-81.441406-50.78125-124.742187 0-42.070313 14.425781-80.882813 40.617188-109.292969 26.503906-28.746094 62.871093-44.578125 102.414062-44.578125 29.554688 0 56.621094 9.34375 80.445312 27.769531 12.023438 9.300781 22.921876 20.683594 32.523438 33.960938 9.605469-13.277344 20.5-24.660157 32.527344-33.960938 23.824218-18.425781 50.890625-27.769531 80.445312-27.769531 39.539063 0 75.910156 15.832031 102.414063 44.578125 26.191406 28.410156 40.613281 67.222656 40.613281 109.292969 0 43.300781-16.132812 82.9375-50.777344 124.738281-30.992187 37.398437-75.53125 75.355469-127.105468 119.308594-17.625 15.015625-37.597657 32.039062-58.328126 50.167969-5.472656 4.789062-12.503906 7.429687-19.789062 7.429687zm-112.96875-425.523437c-31.066406 0-59.605469 12.398437-80.367188 34.914062-21.070312 22.855469-32.675781 54.449219-32.675781 88.964844 0 36.417968 13.535157 68.988281 43.882813 105.605468 29.332031 35.394532 72.960937 72.574219 123.476562 115.625l.09375.078126c17.660156 15.050781 37.679688 32.113281 58.515625 50.332031 20.960938-18.253907 41.011719-35.34375 58.707031-50.417969 50.511719-43.050781 94.136719-80.222656 123.46875-115.617188 30.34375-36.617187 43.878907-69.1875 43.878907-105.605468 0-34.515625-11.605469-66.109375-32.675781-88.964844-20.757813-22.515625-49.300782-34.914062-80.363282-34.914062-22.757812 0-43.652344 7.234374-62.101562 21.5-16.441406 12.71875-27.894532 28.796874-34.609375 40.046874-3.453125 5.785157-9.53125 9.238282-16.261719 9.238282s-12.808594-3.453125-16.261719-9.238282c-6.710937-11.25-18.164062-27.328124-34.609375-40.046874-18.449218-14.265626-39.34375-21.5-62.097656-21.5zm0 0" />--}}
{{--                     </svg>--}}
{{--                     <svg viewbox="0 -28 512.00002 512" xmlns="http://www.w3.org/2000/svg">--}}
{{--                      <path d="m471.382812 44.578125c-26.503906-28.746094-62.871093-44.578125-102.410156-44.578125-29.554687 0-56.621094 9.34375-80.449218 27.769531-12.023438 9.300781-22.917969 20.679688-32.523438 33.960938-9.601562-13.277344-20.5-24.660157-32.527344-33.960938-23.824218-18.425781-50.890625-27.769531-80.445312-27.769531-39.539063 0-75.910156 15.832031-102.414063 44.578125-26.1875 28.410156-40.613281 67.222656-40.613281 109.292969 0 43.300781 16.136719 82.9375 50.78125 124.742187 30.992188 37.394531 75.535156 75.355469 127.117188 119.3125 17.613281 15.011719 37.578124 32.027344 58.308593 50.152344 5.476563 4.796875 12.503907 7.4375 19.792969 7.4375 7.285156 0 14.316406-2.640625 19.785156-7.429687 20.730469-18.128907 40.707032-35.152344 58.328125-50.171876 51.574219-43.949218 96.117188-81.90625 127.109375-119.304687 34.644532-41.800781 50.777344-81.4375 50.777344-124.742187 0-42.066407-14.425781-80.878907-40.617188-109.289063zm0 0" />--}}
{{--                     </svg><span class="wopb-tooltip-text-left"><span>Add to Wishlist</span><span>Browse Wishlist</span></span></span></a>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="wopb-quick-cart">--}}
{{--                                                                        <div class="wopb-product-btn">--}}
{{--                                                                            <div class="wopb-product-btn">--}}
{{--                                                                                <span class="wopb-tooltip-text wopb-cart-action" data-postid="1348"><a href="?add-to-cart=1348" data-stock="" aria-label="Add “Cordless Light Filtering Mini Blind - 34 Inch Length, 72 Inch Height, 1&quot; Slat Size - Alabaster - Cordless GII Morningstar Horizontal Windows Blinds for Interior by Achim Home Decor” to your cart" data-quantity="1" data-product_id="1348" data-product_sku="A-308370819-LCA-1" rel="nofollow" class="add_to_cart_button ajax_add_to_cart wopb-cart-normal">Add to cart</a><a href="https://estezonhomegoods.com/cart/" class="wopb-cart-active">View Cart</a></span>--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div><a href="https://estezonhomegoods.com/product/cordless-light-filtering-mini-blind-34-inch-length-72-inch-height-1-slat-size-alabaster-cordless-gii-morningstar-horizontal-windows-blinds-for-interior-by-achim-home-decor/"><img decoding="async" alt="Cordless Light Filtering Mini Blind – 34 Inch Length, 72 Inch Height, 1″ Slat Size – Alabaster – Cordless GII Morningstar Horizontal Windows Blinds for Interior by Achim Home Decor" data-src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product192-Cordless-Room-Darkening-Mini-Blind-34-Inch-Width-64-Inch-Length-00.jpg?time=1689069779" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">--}}
{{--                                                                        <noscript>--}}
{{--                                                                            <img decoding="async" alt="Cordless Light Filtering Mini Blind – 34 Inch Length, 72 Inch Height, 1″ Slat Size – Alabaster – Cordless GII Morningstar Horizontal Windows Blinds for Interior by Achim Home Decor" src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product192-Cordless-Room-Darkening-Mini-Blind-34-Inch-Width-64-Inch-Length-00.jpg?time=1689069779">--}}
{{--                                                                        </noscript></a>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="wopb-pg-cl wopb-pg-cl2">--}}
{{--                                                                    <div class="wopb-product-cat-price">--}}
{{--                                                                        <div class="wopb-product-price">--}}
{{--                                                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29.20</span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="wopb-product-title-review">--}}
{{--                                                                        <h3 class="wopb-block-title"><a href="https://estezonhomegoods.com/product/cordless-light-filtering-mini-blind-34-inch-length-72-inch-height-1-slat-size-alabaster-cordless-gii-morningstar-horizontal-windows-blinds-for-interior-by-achim-home-decor/">Cordless Light Filtering Mini Blind – 34 Inch Length, 72 Inch Height, 1″ Slat Size – Alabaster – Cordless GII Morningstar Horizontal Windows Blinds for Interior by Achim Home Decor</a></h3>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="wopb-block-item">--}}
{{--                                                            <div class="wopb-block-content-wrap wopb-pg-l1">--}}
{{--                                                                <div class="wopb-block-image wopb-block-image-zoomIn">--}}
{{--                                                                    <div class="wopb-product-meta">--}}
{{--                                                                        <a class="wopb-wishlist-icon wopb-wishlist-add" data-action="add" data-postid="1344"><span class="wopb-tooltip-text">--}}
{{--                     <svg viewbox="0 -28 512.001 512" xmlns="http://www.w3.org/2000/svg">--}}
{{--                      <path d="m256 455.515625c-7.289062 0-14.316406-2.640625-19.792969-7.4375-20.683593-18.085937-40.625-35.082031-58.21875-50.074219l-.089843-.078125c-51.582032-43.957031-96.125-81.917969-127.117188-119.3125-34.644531-41.804687-50.78125-81.441406-50.78125-124.742187 0-42.070313 14.425781-80.882813 40.617188-109.292969 26.503906-28.746094 62.871093-44.578125 102.414062-44.578125 29.554688 0 56.621094 9.34375 80.445312 27.769531 12.023438 9.300781 22.921876 20.683594 32.523438 33.960938 9.605469-13.277344 20.5-24.660157 32.527344-33.960938 23.824218-18.425781 50.890625-27.769531 80.445312-27.769531 39.539063 0 75.910156 15.832031 102.414063 44.578125 26.191406 28.410156 40.613281 67.222656 40.613281 109.292969 0 43.300781-16.132812 82.9375-50.777344 124.738281-30.992187 37.398437-75.53125 75.355469-127.105468 119.308594-17.625 15.015625-37.597657 32.039062-58.328126 50.167969-5.472656 4.789062-12.503906 7.429687-19.789062 7.429687zm-112.96875-425.523437c-31.066406 0-59.605469 12.398437-80.367188 34.914062-21.070312 22.855469-32.675781 54.449219-32.675781 88.964844 0 36.417968 13.535157 68.988281 43.882813 105.605468 29.332031 35.394532 72.960937 72.574219 123.476562 115.625l.09375.078126c17.660156 15.050781 37.679688 32.113281 58.515625 50.332031 20.960938-18.253907 41.011719-35.34375 58.707031-50.417969 50.511719-43.050781 94.136719-80.222656 123.46875-115.617188 30.34375-36.617187 43.878907-69.1875 43.878907-105.605468 0-34.515625-11.605469-66.109375-32.675781-88.964844-20.757813-22.515625-49.300782-34.914062-80.363282-34.914062-22.757812 0-43.652344 7.234374-62.101562 21.5-16.441406 12.71875-27.894532 28.796874-34.609375 40.046874-3.453125 5.785157-9.53125 9.238282-16.261719 9.238282s-12.808594-3.453125-16.261719-9.238282c-6.710937-11.25-18.164062-27.328124-34.609375-40.046874-18.449218-14.265626-39.34375-21.5-62.097656-21.5zm0 0" />--}}
{{--                     </svg>--}}
{{--                     <svg viewbox="0 -28 512.00002 512" xmlns="http://www.w3.org/2000/svg">--}}
{{--                      <path d="m471.382812 44.578125c-26.503906-28.746094-62.871093-44.578125-102.410156-44.578125-29.554687 0-56.621094 9.34375-80.449218 27.769531-12.023438 9.300781-22.917969 20.679688-32.523438 33.960938-9.601562-13.277344-20.5-24.660157-32.527344-33.960938-23.824218-18.425781-50.890625-27.769531-80.445312-27.769531-39.539063 0-75.910156 15.832031-102.414063 44.578125-26.1875 28.410156-40.613281 67.222656-40.613281 109.292969 0 43.300781 16.136719 82.9375 50.78125 124.742187 30.992188 37.394531 75.535156 75.355469 127.117188 119.3125 17.613281 15.011719 37.578124 32.027344 58.308593 50.152344 5.476563 4.796875 12.503907 7.4375 19.792969 7.4375 7.285156 0 14.316406-2.640625 19.785156-7.429687 20.730469-18.128907 40.707032-35.152344 58.328125-50.171876 51.574219-43.949218 96.117188-81.90625 127.109375-119.304687 34.644532-41.800781 50.777344-81.4375 50.777344-124.742187 0-42.066407-14.425781-80.878907-40.617188-109.289063zm0 0" />--}}
{{--                     </svg><span class="wopb-tooltip-text-left"><span>Add to Wishlist</span><span>Browse Wishlist</span></span></span></a>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="wopb-quick-cart">--}}
{{--                                                                        <div class="wopb-product-btn">--}}
{{--                                                                            <div class="wopb-product-btn">--}}
{{--                                                                                <span class="wopb-tooltip-text wopb-cart-action" data-postid="1344"><a href="?add-to-cart=1344" data-stock="" aria-label="Add “Cordless Light Filtering Mini Blind - 26 Inch Length, 64 Inch Height, 1&quot; Slat Size - Alabaster - Cordless GII Morningstar Horizontal Windows Blinds for Interior by Achim Home Decor” to your cart" data-quantity="1" data-product_id="1344" data-product_sku="A-308370755-LCA-1" rel="nofollow" class="add_to_cart_button ajax_add_to_cart wopb-cart-normal">Add to cart</a><a href="https://estezonhomegoods.com/cart/" class="wopb-cart-active">View Cart</a></span>--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div><a href="https://estezonhomegoods.com/product/cordless-light-filtering-mini-blind-26-inch-length-64-inch-height-1-slat-size-alabaster-cordless-gii-morningstar-horizontal-windows-blinds-for-interior-by-achim-home-decor/"><img decoding="async" alt="Cordless Light Filtering Mini Blind – 26 Inch Length, 64 Inch Height, 1″ Slat Size – Alabaster – Cordless GII Morningstar Horizontal Windows Blinds for Interior by Achim Home Decor" data-src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product188-Cordless-Light-Filtering-Mini-Blind-26-Inch-Length-64-Inch-Height-1-Slat-Size-Alabaster-00-1.jpg?time=1689069779" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">--}}
{{--                                                                        <noscript>--}}
{{--                                                                            <img decoding="async" alt="Cordless Light Filtering Mini Blind – 26 Inch Length, 64 Inch Height, 1″ Slat Size – Alabaster – Cordless GII Morningstar Horizontal Windows Blinds for Interior by Achim Home Decor" src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product188-Cordless-Light-Filtering-Mini-Blind-26-Inch-Length-64-Inch-Height-1-Slat-Size-Alabaster-00-1.jpg?time=1689069779">--}}
{{--                                                                        </noscript></a>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="wopb-pg-cl wopb-pg-cl2">--}}
{{--                                                                    <div class="wopb-product-cat-price">--}}
{{--                                                                        <div class="wopb-product-price">--}}
{{--                                                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>23.98</span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="wopb-product-title-review">--}}
{{--                                                                        <h3 class="wopb-block-title"><a href="https://estezonhomegoods.com/product/cordless-light-filtering-mini-blind-26-inch-length-64-inch-height-1-slat-size-alabaster-cordless-gii-morningstar-horizontal-windows-blinds-for-interior-by-achim-home-decor/">Cordless Light Filtering Mini Blind – 26 Inch Length, 64 Inch Height, 1″ Slat Size – Alabaster – Cordless GII Morningstar Horizontal Windows Blinds for Interior by Achim Home Decor</a></h3>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="wopb-block-item">--}}
{{--                                                            <div class="wopb-block-content-wrap wopb-pg-l1">--}}
{{--                                                                <div class="wopb-block-image wopb-block-image-zoomIn">--}}
{{--                                                                    <div class="wopb-product-meta">--}}
{{--                                                                        <a class="wopb-wishlist-icon wopb-wishlist-add" data-action="add" data-postid="1339"><span class="wopb-tooltip-text">--}}
{{--                     <svg viewbox="0 -28 512.001 512" xmlns="http://www.w3.org/2000/svg">--}}
{{--                      <path d="m256 455.515625c-7.289062 0-14.316406-2.640625-19.792969-7.4375-20.683593-18.085937-40.625-35.082031-58.21875-50.074219l-.089843-.078125c-51.582032-43.957031-96.125-81.917969-127.117188-119.3125-34.644531-41.804687-50.78125-81.441406-50.78125-124.742187 0-42.070313 14.425781-80.882813 40.617188-109.292969 26.503906-28.746094 62.871093-44.578125 102.414062-44.578125 29.554688 0 56.621094 9.34375 80.445312 27.769531 12.023438 9.300781 22.921876 20.683594 32.523438 33.960938 9.605469-13.277344 20.5-24.660157 32.527344-33.960938 23.824218-18.425781 50.890625-27.769531 80.445312-27.769531 39.539063 0 75.910156 15.832031 102.414063 44.578125 26.191406 28.410156 40.613281 67.222656 40.613281 109.292969 0 43.300781-16.132812 82.9375-50.777344 124.738281-30.992187 37.398437-75.53125 75.355469-127.105468 119.308594-17.625 15.015625-37.597657 32.039062-58.328126 50.167969-5.472656 4.789062-12.503906 7.429687-19.789062 7.429687zm-112.96875-425.523437c-31.066406 0-59.605469 12.398437-80.367188 34.914062-21.070312 22.855469-32.675781 54.449219-32.675781 88.964844 0 36.417968 13.535157 68.988281 43.882813 105.605468 29.332031 35.394532 72.960937 72.574219 123.476562 115.625l.09375.078126c17.660156 15.050781 37.679688 32.113281 58.515625 50.332031 20.960938-18.253907 41.011719-35.34375 58.707031-50.417969 50.511719-43.050781 94.136719-80.222656 123.46875-115.617188 30.34375-36.617187 43.878907-69.1875 43.878907-105.605468 0-34.515625-11.605469-66.109375-32.675781-88.964844-20.757813-22.515625-49.300782-34.914062-80.363282-34.914062-22.757812 0-43.652344 7.234374-62.101562 21.5-16.441406 12.71875-27.894532 28.796874-34.609375 40.046874-3.453125 5.785157-9.53125 9.238282-16.261719 9.238282s-12.808594-3.453125-16.261719-9.238282c-6.710937-11.25-18.164062-27.328124-34.609375-40.046874-18.449218-14.265626-39.34375-21.5-62.097656-21.5zm0 0" />--}}
{{--                     </svg>--}}
{{--                     <svg viewbox="0 -28 512.00002 512" xmlns="http://www.w3.org/2000/svg">--}}
{{--                      <path d="m471.382812 44.578125c-26.503906-28.746094-62.871093-44.578125-102.410156-44.578125-29.554687 0-56.621094 9.34375-80.449218 27.769531-12.023438 9.300781-22.917969 20.679688-32.523438 33.960938-9.601562-13.277344-20.5-24.660157-32.527344-33.960938-23.824218-18.425781-50.890625-27.769531-80.445312-27.769531-39.539063 0-75.910156 15.832031-102.414063 44.578125-26.1875 28.410156-40.613281 67.222656-40.613281 109.292969 0 43.300781 16.136719 82.9375 50.78125 124.742187 30.992188 37.394531 75.535156 75.355469 127.117188 119.3125 17.613281 15.011719 37.578124 32.027344 58.308593 50.152344 5.476563 4.796875 12.503907 7.4375 19.792969 7.4375 7.285156 0 14.316406-2.640625 19.785156-7.429687 20.730469-18.128907 40.707032-35.152344 58.328125-50.171876 51.574219-43.949218 96.117188-81.90625 127.109375-119.304687 34.644532-41.800781 50.777344-81.4375 50.777344-124.742187 0-42.066407-14.425781-80.878907-40.617188-109.289063zm0 0" />--}}
{{--                     </svg><span class="wopb-tooltip-text-left"><span>Add to Wishlist</span><span>Browse Wishlist</span></span></span></a>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="wopb-quick-cart">--}}
{{--                                                                        <div class="wopb-product-btn">--}}
{{--                                                                            <div class="wopb-product-btn">--}}
{{--                                                                                <span class="wopb-tooltip-text wopb-cart-action" data-postid="1339"><a href="?add-to-cart=1339" data-stock="" aria-label="Add “Classic Touch Cordless 1&quot; Light Filtering Mini Blind, 22&quot; Wide x 64&quot; Long, White” to your cart" data-quantity="1" data-product_id="1339" data-product_sku="A-308370731-RMC-1" rel="nofollow" class="add_to_cart_button ajax_add_to_cart wopb-cart-normal">Add to cart</a><a href="https://estezonhomegoods.com/cart/" class="wopb-cart-active">View Cart</a></span>--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div><a href="https://estezonhomegoods.com/product/classic-touch-cordless-1-light-filtering-mini-blind-22-wide-x-64-long-white/"><img decoding="async" alt="Classic Touch Cordless 1″ Light Filtering Mini Blind, 22″ Wide x 64″ Long, White" data-src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product187-Classic-Touch-Cordless-1-Light-Filtering-Mini-Blind-22-Wide-x-64-Long-White-00.jpg?time=1689069779" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">--}}
{{--                                                                        <noscript>--}}
{{--                                                                            <img decoding="async" alt="Classic Touch Cordless 1″ Light Filtering Mini Blind, 22″ Wide x 64″ Long, White" src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product187-Classic-Touch-Cordless-1-Light-Filtering-Mini-Blind-22-Wide-x-64-Long-White-00.jpg?time=1689069779">--}}
{{--                                                                        </noscript></a>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="wopb-pg-cl wopb-pg-cl2">--}}
{{--                                                                    <div class="wopb-product-cat-price">--}}
{{--                                                                        <div class="wopb-product-price">--}}
{{--                                                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>22.79</span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="wopb-product-title-review">--}}
{{--                                                                        <h3 class="wopb-block-title"><a href="https://estezonhomegoods.com/product/classic-touch-cordless-1-light-filtering-mini-blind-22-wide-x-64-long-white/">Classic Touch Cordless 1″ Light Filtering Mini Blind, 22″ Wide x 64″ Long, White</a></h3>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="wopb-block-item">--}}
{{--                                                            <div class="wopb-block-content-wrap wopb-pg-l1">--}}
{{--                                                                <div class="wopb-block-image wopb-block-image-zoomIn">--}}
{{--                                                                    <div class="wopb-product-meta">--}}
{{--                                                                        <a class="wopb-wishlist-icon wopb-wishlist-add" data-action="add" data-postid="1337"><span class="wopb-tooltip-text">--}}
{{--                     <svg viewbox="0 -28 512.001 512" xmlns="http://www.w3.org/2000/svg">--}}
{{--                      <path d="m256 455.515625c-7.289062 0-14.316406-2.640625-19.792969-7.4375-20.683593-18.085937-40.625-35.082031-58.21875-50.074219l-.089843-.078125c-51.582032-43.957031-96.125-81.917969-127.117188-119.3125-34.644531-41.804687-50.78125-81.441406-50.78125-124.742187 0-42.070313 14.425781-80.882813 40.617188-109.292969 26.503906-28.746094 62.871093-44.578125 102.414062-44.578125 29.554688 0 56.621094 9.34375 80.445312 27.769531 12.023438 9.300781 22.921876 20.683594 32.523438 33.960938 9.605469-13.277344 20.5-24.660157 32.527344-33.960938 23.824218-18.425781 50.890625-27.769531 80.445312-27.769531 39.539063 0 75.910156 15.832031 102.414063 44.578125 26.191406 28.410156 40.613281 67.222656 40.613281 109.292969 0 43.300781-16.132812 82.9375-50.777344 124.738281-30.992187 37.398437-75.53125 75.355469-127.105468 119.308594-17.625 15.015625-37.597657 32.039062-58.328126 50.167969-5.472656 4.789062-12.503906 7.429687-19.789062 7.429687zm-112.96875-425.523437c-31.066406 0-59.605469 12.398437-80.367188 34.914062-21.070312 22.855469-32.675781 54.449219-32.675781 88.964844 0 36.417968 13.535157 68.988281 43.882813 105.605468 29.332031 35.394532 72.960937 72.574219 123.476562 115.625l.09375.078126c17.660156 15.050781 37.679688 32.113281 58.515625 50.332031 20.960938-18.253907 41.011719-35.34375 58.707031-50.417969 50.511719-43.050781 94.136719-80.222656 123.46875-115.617188 30.34375-36.617187 43.878907-69.1875 43.878907-105.605468 0-34.515625-11.605469-66.109375-32.675781-88.964844-20.757813-22.515625-49.300782-34.914062-80.363282-34.914062-22.757812 0-43.652344 7.234374-62.101562 21.5-16.441406 12.71875-27.894532 28.796874-34.609375 40.046874-3.453125 5.785157-9.53125 9.238282-16.261719 9.238282s-12.808594-3.453125-16.261719-9.238282c-6.710937-11.25-18.164062-27.328124-34.609375-40.046874-18.449218-14.265626-39.34375-21.5-62.097656-21.5zm0 0" />--}}
{{--                     </svg>--}}
{{--                     <svg viewbox="0 -28 512.00002 512" xmlns="http://www.w3.org/2000/svg">--}}
{{--                      <path d="m471.382812 44.578125c-26.503906-28.746094-62.871093-44.578125-102.410156-44.578125-29.554687 0-56.621094 9.34375-80.449218 27.769531-12.023438 9.300781-22.917969 20.679688-32.523438 33.960938-9.601562-13.277344-20.5-24.660157-32.527344-33.960938-23.824218-18.425781-50.890625-27.769531-80.445312-27.769531-39.539063 0-75.910156 15.832031-102.414063 44.578125-26.1875 28.410156-40.613281 67.222656-40.613281 109.292969 0 43.300781 16.136719 82.9375 50.78125 124.742187 30.992188 37.394531 75.535156 75.355469 127.117188 119.3125 17.613281 15.011719 37.578124 32.027344 58.308593 50.152344 5.476563 4.796875 12.503907 7.4375 19.792969 7.4375 7.285156 0 14.316406-2.640625 19.785156-7.429687 20.730469-18.128907 40.707032-35.152344 58.328125-50.171876 51.574219-43.949218 96.117188-81.90625 127.109375-119.304687 34.644532-41.800781 50.777344-81.4375 50.777344-124.742187 0-42.066407-14.425781-80.878907-40.617188-109.289063zm0 0" />--}}
{{--                     </svg><span class="wopb-tooltip-text-left"><span>Add to Wishlist</span><span>Browse Wishlist</span></span></span></a>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="wopb-quick-cart">--}}
{{--                                                                        <div class="wopb-product-btn">--}}
{{--                                                                            <div class="wopb-product-btn">--}}
{{--                                                                                <span class="wopb-tooltip-text wopb-cart-action" data-postid="1337"><a href="?add-to-cart=1337" data-stock="" aria-label="Add “” to your cart" data-quantity="1" data-product_id="1337" data-product_sku="A-308363868-RBC-1" rel="nofollow" class="add_to_cart_button ajax_add_to_cart wopb-cart-normal">Add to cart</a><a href="https://estezonhomegoods.com/cart/" class="wopb-cart-active">View Cart</a></span>--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div><a href="https://estezonhomegoods.com/product/1337/"><img decoding="async" alt="" data-src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product186-Westar-EM-9301-Transmission-Mount-00.jpg?time=1689069779" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">--}}
{{--                                                                        <noscript>--}}
{{--                                                                            <img decoding="async" alt="" src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product186-Westar-EM-9301-Transmission-Mount-00.jpg?time=1689069779">--}}
{{--                                                                        </noscript></a>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="wopb-pg-cl wopb-pg-cl2">--}}
{{--                                                                    <div class="wopb-product-cat-price">--}}
{{--                                                                        <div class="wopb-product-price">--}}
{{--                                                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>20.61</span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="wopb-product-title-review">--}}
{{--                                                                        <h3 class="wopb-block-title"><a href="https://estezonhomegoods.com/product/1337/"></a></h3>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="wopb-block-item">--}}
{{--                                                            <div class="wopb-block-content-wrap wopb-pg-l1">--}}
{{--                                                                <div class="wopb-block-image wopb-block-image-zoomIn">--}}
{{--                                                                    <div class="wopb-product-meta">--}}
{{--                                                                        <a class="wopb-wishlist-icon wopb-wishlist-add" data-action="add" data-postid="1335"><span class="wopb-tooltip-text">--}}
{{--                     <svg viewbox="0 -28 512.001 512" xmlns="http://www.w3.org/2000/svg">--}}
{{--                      <path d="m256 455.515625c-7.289062 0-14.316406-2.640625-19.792969-7.4375-20.683593-18.085937-40.625-35.082031-58.21875-50.074219l-.089843-.078125c-51.582032-43.957031-96.125-81.917969-127.117188-119.3125-34.644531-41.804687-50.78125-81.441406-50.78125-124.742187 0-42.070313 14.425781-80.882813 40.617188-109.292969 26.503906-28.746094 62.871093-44.578125 102.414062-44.578125 29.554688 0 56.621094 9.34375 80.445312 27.769531 12.023438 9.300781 22.921876 20.683594 32.523438 33.960938 9.605469-13.277344 20.5-24.660157 32.527344-33.960938 23.824218-18.425781 50.890625-27.769531 80.445312-27.769531 39.539063 0 75.910156 15.832031 102.414063 44.578125 26.191406 28.410156 40.613281 67.222656 40.613281 109.292969 0 43.300781-16.132812 82.9375-50.777344 124.738281-30.992187 37.398437-75.53125 75.355469-127.105468 119.308594-17.625 15.015625-37.597657 32.039062-58.328126 50.167969-5.472656 4.789062-12.503906 7.429687-19.789062 7.429687zm-112.96875-425.523437c-31.066406 0-59.605469 12.398437-80.367188 34.914062-21.070312 22.855469-32.675781 54.449219-32.675781 88.964844 0 36.417968 13.535157 68.988281 43.882813 105.605468 29.332031 35.394532 72.960937 72.574219 123.476562 115.625l.09375.078126c17.660156 15.050781 37.679688 32.113281 58.515625 50.332031 20.960938-18.253907 41.011719-35.34375 58.707031-50.417969 50.511719-43.050781 94.136719-80.222656 123.46875-115.617188 30.34375-36.617187 43.878907-69.1875 43.878907-105.605468 0-34.515625-11.605469-66.109375-32.675781-88.964844-20.757813-22.515625-49.300782-34.914062-80.363282-34.914062-22.757812 0-43.652344 7.234374-62.101562 21.5-16.441406 12.71875-27.894532 28.796874-34.609375 40.046874-3.453125 5.785157-9.53125 9.238282-16.261719 9.238282s-12.808594-3.453125-16.261719-9.238282c-6.710937-11.25-18.164062-27.328124-34.609375-40.046874-18.449218-14.265626-39.34375-21.5-62.097656-21.5zm0 0" />--}}
{{--                     </svg>--}}
{{--                     <svg viewbox="0 -28 512.00002 512" xmlns="http://www.w3.org/2000/svg">--}}
{{--                      <path d="m471.382812 44.578125c-26.503906-28.746094-62.871093-44.578125-102.410156-44.578125-29.554687 0-56.621094 9.34375-80.449218 27.769531-12.023438 9.300781-22.917969 20.679688-32.523438 33.960938-9.601562-13.277344-20.5-24.660157-32.527344-33.960938-23.824218-18.425781-50.890625-27.769531-80.445312-27.769531-39.539063 0-75.910156 15.832031-102.414063 44.578125-26.1875 28.410156-40.613281 67.222656-40.613281 109.292969 0 43.300781 16.136719 82.9375 50.78125 124.742187 30.992188 37.394531 75.535156 75.355469 127.117188 119.3125 17.613281 15.011719 37.578124 32.027344 58.308593 50.152344 5.476563 4.796875 12.503907 7.4375 19.792969 7.4375 7.285156 0 14.316406-2.640625 19.785156-7.429687 20.730469-18.128907 40.707032-35.152344 58.328125-50.171876 51.574219-43.949218 96.117188-81.90625 127.109375-119.304687 34.644532-41.800781 50.777344-81.4375 50.777344-124.742187 0-42.066407-14.425781-80.878907-40.617188-109.289063zm0 0" />--}}
{{--                     </svg><span class="wopb-tooltip-text-left"><span>Add to Wishlist</span><span>Browse Wishlist</span></span></span></a>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="wopb-quick-cart">--}}
{{--                                                                        <div class="wopb-product-btn">--}}
{{--                                                                            <div class="wopb-product-btn">--}}
{{--                                                                                <span class="wopb-tooltip-text wopb-cart-action" data-postid="1335"><a href="?add-to-cart=1335" data-stock="" aria-label="Add “Mevotech GK8361 Radius Arm Insulator” to your cart" data-quantity="1" data-product_id="1335" data-product_sku="A-308363396-LCA-1" rel="nofollow" class="add_to_cart_button ajax_add_to_cart wopb-cart-normal">Add to cart</a><a href="https://estezonhomegoods.com/cart/" class="wopb-cart-active">View Cart</a></span>--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div><a href="https://estezonhomegoods.com/product/mevotech-gk8361-radius-arm-insulator/"><img decoding="async" alt="Mevotech GK8361 Radius Arm Insulator" data-src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product185-Mevotech-GK8361-Radius-Arm-Insulator-00.jpg?time=1689069779" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">--}}
{{--                                                                        <noscript>--}}
{{--                                                                            <img decoding="async" alt="Mevotech GK8361 Radius Arm Insulator" src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product185-Mevotech-GK8361-Radius-Arm-Insulator-00.jpg?time=1689069779">--}}
{{--                                                                        </noscript></a>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="wopb-pg-cl wopb-pg-cl2">--}}
{{--                                                                    <div class="wopb-product-cat-price">--}}
{{--                                                                        <div class="wopb-product-price">--}}
{{--                                                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>15.18</span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="wopb-product-title-review">--}}
{{--                                                                        <h3 class="wopb-block-title"><a href="https://estezonhomegoods.com/product/mevotech-gk8361-radius-arm-insulator/">Mevotech GK8361 Radius Arm Insulator</a></h3>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="wopb-block-item">--}}
{{--                                                            <div class="wopb-block-content-wrap wopb-pg-l1">--}}
{{--                                                                <div class="wopb-block-image wopb-block-image-zoomIn">--}}
{{--                                                                    <div class="wopb-product-meta">--}}
{{--                                                                        <a class="wopb-wishlist-icon wopb-wishlist-add" data-action="add" data-postid="1332"><span class="wopb-tooltip-text">--}}
{{--                     <svg viewbox="0 -28 512.001 512" xmlns="http://www.w3.org/2000/svg">--}}
{{--                      <path d="m256 455.515625c-7.289062 0-14.316406-2.640625-19.792969-7.4375-20.683593-18.085937-40.625-35.082031-58.21875-50.074219l-.089843-.078125c-51.582032-43.957031-96.125-81.917969-127.117188-119.3125-34.644531-41.804687-50.78125-81.441406-50.78125-124.742187 0-42.070313 14.425781-80.882813 40.617188-109.292969 26.503906-28.746094 62.871093-44.578125 102.414062-44.578125 29.554688 0 56.621094 9.34375 80.445312 27.769531 12.023438 9.300781 22.921876 20.683594 32.523438 33.960938 9.605469-13.277344 20.5-24.660157 32.527344-33.960938 23.824218-18.425781 50.890625-27.769531 80.445312-27.769531 39.539063 0 75.910156 15.832031 102.414063 44.578125 26.191406 28.410156 40.613281 67.222656 40.613281 109.292969 0 43.300781-16.132812 82.9375-50.777344 124.738281-30.992187 37.398437-75.53125 75.355469-127.105468 119.308594-17.625 15.015625-37.597657 32.039062-58.328126 50.167969-5.472656 4.789062-12.503906 7.429687-19.789062 7.429687zm-112.96875-425.523437c-31.066406 0-59.605469 12.398437-80.367188 34.914062-21.070312 22.855469-32.675781 54.449219-32.675781 88.964844 0 36.417968 13.535157 68.988281 43.882813 105.605468 29.332031 35.394532 72.960937 72.574219 123.476562 115.625l.09375.078126c17.660156 15.050781 37.679688 32.113281 58.515625 50.332031 20.960938-18.253907 41.011719-35.34375 58.707031-50.417969 50.511719-43.050781 94.136719-80.222656 123.46875-115.617188 30.34375-36.617187 43.878907-69.1875 43.878907-105.605468 0-34.515625-11.605469-66.109375-32.675781-88.964844-20.757813-22.515625-49.300782-34.914062-80.363282-34.914062-22.757812 0-43.652344 7.234374-62.101562 21.5-16.441406 12.71875-27.894532 28.796874-34.609375 40.046874-3.453125 5.785157-9.53125 9.238282-16.261719 9.238282s-12.808594-3.453125-16.261719-9.238282c-6.710937-11.25-18.164062-27.328124-34.609375-40.046874-18.449218-14.265626-39.34375-21.5-62.097656-21.5zm0 0" />--}}
{{--                     </svg>--}}
{{--                     <svg viewbox="0 -28 512.00002 512" xmlns="http://www.w3.org/2000/svg">--}}
{{--                      <path d="m471.382812 44.578125c-26.503906-28.746094-62.871093-44.578125-102.410156-44.578125-29.554687 0-56.621094 9.34375-80.449218 27.769531-12.023438 9.300781-22.917969 20.679688-32.523438 33.960938-9.601562-13.277344-20.5-24.660157-32.527344-33.960938-23.824218-18.425781-50.890625-27.769531-80.445312-27.769531-39.539063 0-75.910156 15.832031-102.414063 44.578125-26.1875 28.410156-40.613281 67.222656-40.613281 109.292969 0 43.300781 16.136719 82.9375 50.78125 124.742187 30.992188 37.394531 75.535156 75.355469 127.117188 119.3125 17.613281 15.011719 37.578124 32.027344 58.308593 50.152344 5.476563 4.796875 12.503907 7.4375 19.792969 7.4375 7.285156 0 14.316406-2.640625 19.785156-7.429687 20.730469-18.128907 40.707032-35.152344 58.328125-50.171876 51.574219-43.949218 96.117188-81.90625 127.109375-119.304687 34.644532-41.800781 50.777344-81.4375 50.777344-124.742187 0-42.066407-14.425781-80.878907-40.617188-109.289063zm0 0" />--}}
{{--                     </svg><span class="wopb-tooltip-text-left"><span>Add to Wishlist</span><span>Browse Wishlist</span></span></span></a>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="wopb-quick-cart">--}}
{{--                                                                        <div class="wopb-product-btn">--}}
{{--                                                                            <div class="wopb-product-btn">--}}
{{--                                                                                <span class="wopb-tooltip-text wopb-cart-action" data-postid="1332"><a href="?add-to-cart=1332" data-stock="" aria-label="Add “Chesapeake 3118-25096 Bison Navy Herringbone Wallpaper” to your cart" data-quantity="1" data-product_id="1332" data-product_sku="A-308249850-LCA-1" rel="nofollow" class="add_to_cart_button ajax_add_to_cart wopb-cart-normal">Add to cart</a><a href="https://estezonhomegoods.com/cart/" class="wopb-cart-active">View Cart</a></span>--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div><a href="https://estezonhomegoods.com/product/chesapeake-3118-25096-bison-navy-herringbone-wallpaper/"><img decoding="async" alt="Chesapeake 3118-25096 Bison Navy Herringbone Wallpaper" data-src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product184-Chesapeake-3118-25096-Bison-Navy-Herringbone-Wallpaper-00.jpg?time=1689069779" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">--}}
{{--                                                                        <noscript>--}}
{{--                                                                            <img decoding="async" alt="Chesapeake 3118-25096 Bison Navy Herringbone Wallpaper" src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product184-Chesapeake-3118-25096-Bison-Navy-Herringbone-Wallpaper-00.jpg?time=1689069779">--}}
{{--                                                                        </noscript></a>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="wopb-pg-cl wopb-pg-cl2">--}}
{{--                                                                    <div class="wopb-product-cat-price">--}}
{{--                                                                        <div class="wopb-product-price">--}}
{{--                                                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>66.84</span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="wopb-product-title-review">--}}
{{--                                                                        <h3 class="wopb-block-title"><a href="https://estezonhomegoods.com/product/chesapeake-3118-25096-bison-navy-herringbone-wallpaper/">Chesapeake 3118-25096 Bison Navy Herringbone Wallpaper</a></h3>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="wopb-block-item">--}}
{{--                                                            <div class="wopb-block-content-wrap wopb-pg-l1">--}}
{{--                                                                <div class="wopb-block-image wopb-block-image-zoomIn">--}}
{{--                                                                    <div class="wopb-product-meta">--}}
{{--                                                                        <a class="wopb-wishlist-icon wopb-wishlist-add" data-action="add" data-postid="1328"><span class="wopb-tooltip-text">--}}
{{--                     <svg viewbox="0 -28 512.001 512" xmlns="http://www.w3.org/2000/svg">--}}
{{--                      <path d="m256 455.515625c-7.289062 0-14.316406-2.640625-19.792969-7.4375-20.683593-18.085937-40.625-35.082031-58.21875-50.074219l-.089843-.078125c-51.582032-43.957031-96.125-81.917969-127.117188-119.3125-34.644531-41.804687-50.78125-81.441406-50.78125-124.742187 0-42.070313 14.425781-80.882813 40.617188-109.292969 26.503906-28.746094 62.871093-44.578125 102.414062-44.578125 29.554688 0 56.621094 9.34375 80.445312 27.769531 12.023438 9.300781 22.921876 20.683594 32.523438 33.960938 9.605469-13.277344 20.5-24.660157 32.527344-33.960938 23.824218-18.425781 50.890625-27.769531 80.445312-27.769531 39.539063 0 75.910156 15.832031 102.414063 44.578125 26.191406 28.410156 40.613281 67.222656 40.613281 109.292969 0 43.300781-16.132812 82.9375-50.777344 124.738281-30.992187 37.398437-75.53125 75.355469-127.105468 119.308594-17.625 15.015625-37.597657 32.039062-58.328126 50.167969-5.472656 4.789062-12.503906 7.429687-19.789062 7.429687zm-112.96875-425.523437c-31.066406 0-59.605469 12.398437-80.367188 34.914062-21.070312 22.855469-32.675781 54.449219-32.675781 88.964844 0 36.417968 13.535157 68.988281 43.882813 105.605468 29.332031 35.394532 72.960937 72.574219 123.476562 115.625l.09375.078126c17.660156 15.050781 37.679688 32.113281 58.515625 50.332031 20.960938-18.253907 41.011719-35.34375 58.707031-50.417969 50.511719-43.050781 94.136719-80.222656 123.46875-115.617188 30.34375-36.617187 43.878907-69.1875 43.878907-105.605468 0-34.515625-11.605469-66.109375-32.675781-88.964844-20.757813-22.515625-49.300782-34.914062-80.363282-34.914062-22.757812 0-43.652344 7.234374-62.101562 21.5-16.441406 12.71875-27.894532 28.796874-34.609375 40.046874-3.453125 5.785157-9.53125 9.238282-16.261719 9.238282s-12.808594-3.453125-16.261719-9.238282c-6.710937-11.25-18.164062-27.328124-34.609375-40.046874-18.449218-14.265626-39.34375-21.5-62.097656-21.5zm0 0" />--}}
{{--                     </svg>--}}
{{--                     <svg viewbox="0 -28 512.00002 512" xmlns="http://www.w3.org/2000/svg">--}}
{{--                      <path d="m471.382812 44.578125c-26.503906-28.746094-62.871093-44.578125-102.410156-44.578125-29.554687 0-56.621094 9.34375-80.449218 27.769531-12.023438 9.300781-22.917969 20.679688-32.523438 33.960938-9.601562-13.277344-20.5-24.660157-32.527344-33.960938-23.824218-18.425781-50.890625-27.769531-80.445312-27.769531-39.539063 0-75.910156 15.832031-102.414063 44.578125-26.1875 28.410156-40.613281 67.222656-40.613281 109.292969 0 43.300781 16.136719 82.9375 50.78125 124.742187 30.992188 37.394531 75.535156 75.355469 127.117188 119.3125 17.613281 15.011719 37.578124 32.027344 58.308593 50.152344 5.476563 4.796875 12.503907 7.4375 19.792969 7.4375 7.285156 0 14.316406-2.640625 19.785156-7.429687 20.730469-18.128907 40.707032-35.152344 58.328125-50.171876 51.574219-43.949218 96.117188-81.90625 127.109375-119.304687 34.644532-41.800781 50.777344-81.4375 50.777344-124.742187 0-42.066407-14.425781-80.878907-40.617188-109.289063zm0 0" />--}}
{{--                     </svg><span class="wopb-tooltip-text-left"><span>Add to Wishlist</span><span>Browse Wishlist</span></span></span></a>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="wopb-quick-cart">--}}
{{--                                                                        <div class="wopb-product-btn">--}}
{{--                                                                            <div class="wopb-product-btn">--}}
{{--                                                                                <span class="wopb-tooltip-text wopb-cart-action" data-postid="1328"><a href="?add-to-cart=1328" data-stock="" aria-label="Add “Norwall G67950 Chinchilla Fur Wallpaper, Light Grey, White, Weathered White” to your cart" data-quantity="1" data-product_id="1328" data-product_sku="A-308104920-LCA-1" rel="nofollow" class="add_to_cart_button ajax_add_to_cart wopb-cart-normal">Add to cart</a><a href="https://estezonhomegoods.com/cart/" class="wopb-cart-active">View Cart</a></span>--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div><a href="https://estezonhomegoods.com/product/norwall-g67950-chinchilla-fur-wallpaper-light-grey-white-weathered-white/"><img decoding="async" alt="Norwall G67950 Chinchilla Fur Wallpaper, Light Grey, White, Weathered White" data-src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product194-Achim-Home-Furnishings-Harper-Panel-50x63-Creamy-White-00.jpg?time=1689069779" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">--}}
{{--                                                                        <noscript>--}}
{{--                                                                            <img decoding="async" alt="Norwall G67950 Chinchilla Fur Wallpaper, Light Grey, White, Weathered White" src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product194-Achim-Home-Furnishings-Harper-Panel-50x63-Creamy-White-00.jpg?time=1689069779">--}}
{{--                                                                        </noscript></a>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="wopb-pg-cl wopb-pg-cl2">--}}
{{--                                                                    <div class="wopb-product-cat-price">--}}
{{--                                                                        <div class="wopb-product-price">--}}
{{--                                                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>20.28</span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="wopb-product-title-review">--}}
{{--                                                                        <h3 class="wopb-block-title"><a href="https://estezonhomegoods.com/product/norwall-g67950-chinchilla-fur-wallpaper-light-grey-white-weathered-white/">Norwall G67950 Chinchilla Fur Wallpaper, Light Grey, White, Weathered White</a></h3>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="wopb-slick-nav" style="display:none">--}}
{{--                                                        <div class="wopb-slick-prev">--}}
{{--                                                            <div class="slick-arrow slick-prev">--}}
{{--                                                                <svg enable-background="new 0 0 476.213 476.213" version="1.1" viewbox="0 0 476.21 476.21">--}}
{{--                                                                    <polygon points="476.21 223.11 57.427 223.11 151.82 128.71 130.61 107.5 0 238.11 130.61 368.71 151.82 347.5 57.427 253.11 476.21 253.11" />--}}
{{--                                                                </svg>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="wopb-slick-next">--}}
{{--                                                            <div class="slick-arrow slick-next">--}}
{{--                                                                <svg enable-background="new 0 0 476.213 476.213" version="1.1" viewbox="0 0 476.21 476.21">--}}
{{--                                                                    <polygon points="345.61 107.5 324.39 128.71 418.79 223.11 0 223.11 0 253.11 418.79 253.11 324.39 347.5 345.61 368.71 476.21 238.11" />--}}
{{--                                                                </svg>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
                                            </div>
                                        </div>
                                        <div class="kb-row-layout-wrap kb-row-layout-id_b46b46-8f alignnone wp-block-kadence-rowlayout">
                                            <div class="kt-row-column-wrap kt-has-1-columns kt-row-layout-equal kt-tab-layout-inherit kt-mobile-layout-row kt-row-valign-top">
                                                <div class="wp-block-kadence-column kadence-column_6c0217-51">
                                                    <div class="kt-inside-inner-col">
                                                        <div class="wp-block-uagb-container uagb-block-76578769 alignfull uagb-is-root-container">
                                                            <div class="uagb-container-inner-blocks-wrap"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wp-block-uagb-container uagb-block-3293e5e0 alignfull uagb-is-root-container">
                                            <div class="uagb-container-inner-blocks-wrap">
                                                <div id="gspb_row-id-gsbp-7283be30-d256" class="gspb_row gspb_row-id-gsbp-7283be30-d256 wp-block-greenshift-blocks-row alignfull gspb_row-id-gsbp-7283be30-d256">
                                                    <div class="gspb_row__content">
                                                    </div>
                                                </div>
                                                <div class="kb-row-layout-wrap kb-row-layout-id_3080cd-73 alignnone wp-block-kadence-rowlayout">
                                                    <div class="kt-row-column-wrap kt-has-1-columns kt-row-layout-equal kt-tab-layout-inherit kt-mobile-layout-row kt-row-valign-top">
                                                        <div class="wp-block-kadence-column kadence-column_aa2ce0-94">
                                                            <div class="kt-inside-inner-col">
                                                                <p class="has-text-align-left has-theme-palette-5-color has-text-color has-larger-font-size"><strong>OUR CATEGORIES</strong></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wp-block-product-blocks-product-category-2 wopb-block-9a95a6 animated zoomIn">
                                                    <div class="wopb-block-wrapper">
                                                        <div class="wopb-block-items-wrap wopb-cg2-items-1">
                                                            <div class="wopb-block-item">
                                                                <div class="wopb-block-content-wrap">
                                                                    <div class="wopb-block-image wopb-block-image-zoomIn">
                                                                        <a href="https://estezonhomegoods.com/product-category/electrical/" class="wopb-product-cat-img"><img src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/dai-ogxlyCA1BQc-unsplash-scaled.jpg?time=1689069779" alt="Electrical/"></a>
                                                                    </div>
                                                                    <div class="wopb-category-content-items wopb-category-content-middlePosition wopb-category-content-centerPosition">
                                                                        <div class="wopb-category-content-item">
                                                                            <h5 class="wopb-product-cat-title"><a href="https://estezonhomegoods.com/product-category/electrical/">Electrical</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="wopb-block-item">
                                                                <div class="wopb-block-content-wrap">
                                                                    <div class="wopb-block-image wopb-block-image-zoomIn">
                                                                        <a href="https://estezonhomegoods.com/product-category/furnishing/" class="wopb-product-cat-img"><img src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product122-nuLOOM-Soft-and-Plush-Moroccan-Trellis-Iola-Easy-Shag-Indoor-Area-Rug-Grey-00.jpg?time=1689069779" alt="Furnishing/"></a>
                                                                    </div>
                                                                    <div class="wopb-category-content-items wopb-category-content-middlePosition wopb-category-content-centerPosition">
                                                                        <div class="wopb-category-content-item">
                                                                            <h5 class="wopb-product-cat-title"><a href="https://estezonhomegoods.com/product-category/furnishing/">Furnishing</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="wopb-block-item">
                                                                <div class="wopb-block-content-wrap">
                                                                    <div class="wopb-block-image wopb-block-image-zoomIn">
                                                                        <a href="https://estezonhomegoods.com/product-category/hardware-tools/" class="wopb-product-cat-img"><img src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product92-Apollo-Tools-DT9408-53_00.jpg?time=1689069779" alt="Hardware" &amp; tools></a>
                                                                    </div>
                                                                    <div class="wopb-category-content-items wopb-category-content-middlePosition wopb-category-content-centerPosition">
                                                                        <div class="wopb-category-content-item">
                                                                            <h5 class="wopb-product-cat-title"><a href="https://estezonhomegoods.com/product-category/hardware-tools/">Hardware &amp; Tools</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="wopb-block-item">
                                                                <div class="wopb-block-content-wrap">
                                                                    <div class="wopb-block-image wopb-block-image-zoomIn">
                                                                        <a href="https://estezonhomegoods.com/product-category/home-components/" class="wopb-product-cat-img"><img src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/libertyprod2_pic3.jpg?time=1689069779" alt="Home" components></a>
                                                                    </div>
                                                                    <div class="wopb-category-content-items wopb-category-content-middlePosition wopb-category-content-centerPosition">
                                                                        <div class="wopb-category-content-item">
                                                                            <h5 class="wopb-product-cat-title"><a href="https://estezonhomegoods.com/product-category/home-components/">Home Components</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="wopb-block-item">
                                                                <div class="wopb-block-content-wrap">
                                                                    <div class="wopb-block-image wopb-block-image-zoomIn">
                                                                        <a href="https://estezonhomegoods.com/product-category/plumbing/" class="wopb-product-cat-img"><img src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product16_00.jpg?time=1689069779" alt="Plumbing/"></a>
                                                                    </div>
                                                                    <div class="wopb-category-content-items wopb-category-content-middlePosition wopb-category-content-centerPosition">
                                                                        <div class="wopb-category-content-item">
                                                                            <h5 class="wopb-product-cat-title"><a href="https://estezonhomegoods.com/product-category/plumbing/">Plumbing</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="kb-row-layout-wrap kb-row-layout-id_1bce9c-b3 alignnone wp-block-kadence-rowlayout">
                                                    <div class="kt-row-column-wrap kt-has-1-columns kt-row-layout-equal kt-tab-layout-inherit kt-mobile-layout-row kt-row-valign-top">
                                                        <div class="wp-block-kadence-column kadence-column_99fe36-89">
                                                            <div class="kt-inside-inner-col"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="height:88px" aria-hidden="true" class="wp-block-spacer"></div>
                                        <div class="kb-row-layout-wrap kb-row-layout-id_d1886c-83 alignnone has-theme-palette4-background-color kt-row-has-bg wp-block-kadence-rowlayout">
                                            <div class="kt-blocks-carousel kb-blocks-bg-slider kt-carousel-container-dotstyle-dark">
                                                <div class="kt-blocks-carousel-init kb-blocks-bg-slider-init kt-carousel-arrowstyle-none kt-carousel-dotstyle-dark" data-slider-anim-speed="400" data-slider-type="slider" data-slider-scroll="1" data-slider-arrows="false" data-slider-fade="true" data-slider-dots="true" data-slider-hover-pause="false" data-slider-auto="true" data-slider-speed="7000">
                                                    <div class="kb-bg-slide-contain">
                                                        <div class="kb-bg-slide kb-bg-slide-0" style="background-color:var(--global-palette9, #ffffff); background-image:url(https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/04/BG_Design_03.png); background-size:cover; background-position:center center; background-repeat:no-repeat;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kt-row-layout-overlay kt-row-overlay-normal"></div>
                                            <div class="kt-row-layout-top-sep kt-row-sep-type-mtns">
                                                <svg viewbox="0 0 1000 100" preserveaspectratio="none">
                                                    <path d="M1000,50l-182.69,-45.286l-292.031,61.197l-190.875,-41.075l-143.748,28.794l-190.656,-23.63l0,70l1000,0l0,-50Z" style="opacity: 0.4" /><path d="M1000,57l-152.781,-22.589l-214.383,19.81l-159.318,-21.471l-177.44,25.875l-192.722,5.627l-103.356,-27.275l0,63.023l1000,0l0,-43Z" />
                                                </svg>
                                            </div>
                                            <div class="kt-row-layout-bottom-sep kt-row-sep-type-mtns">
                                                <svg viewbox="0 0 1000 100" preserveaspectratio="none">
                                                    <path d="M1000,50l-182.69,-45.286l-292.031,61.197l-190.875,-41.075l-143.748,28.794l-190.656,-23.63l0,70l1000,0l0,-50Z" style="opacity: 0.4" /><path d="M1000,57l-152.781,-22.589l-214.383,19.81l-159.318,-21.471l-177.44,25.875l-192.722,5.627l-103.356,-27.275l0,63.023l1000,0l0,-43Z" />
                                                </svg>
                                            </div>
                                            <div class="kt-row-column-wrap kt-has-2-columns kt-row-layout-right-golden kt-tab-layout-inherit kt-mobile-layout-row kt-row-valign-top">
                                                <div class="wp-block-kadence-column kadence-column_e11b81-f4">
                                                    <div class="kt-inside-inner-col">
                                                        <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
                                                        <h1 id="gspb_heading-id-gsbp-c325d481-3447" class="gspb_heading gspb_heading-id-gsbp-c325d481-3447 "><span class="text-anim text-anim--rotate js-text-anim"><span class="text-anim__wrapper js-text-anim__wrapper"></span></span> <strong>FEATURED PRODUCTS</strong></h1>
                                                    </div>
                                                </div>
                                                <div class="wp-block-kadence-column kadence-column_4011ec-a9">
                                                    <div class="kt-inside-inner-col">
                                                        <div class="eb-parent-wrapper eb-parent-eb-woo-product-1qns7dp ">
                                                            <div class="eb-woo-products-wrapper eb-woo-product-1qns7dp" data-id="eb-woo-product-1qns7dp" data-querydata="a:9:{s:8:&quot;per_page&quot;;s:1:&quot;4&quot;;s:6:&quot;offset&quot;;s:1:&quot;0&quot;;s:6:&quot;source&quot;;s:8:&quot;products&quot;;s:9:&quot;rest_base&quot;;s:8:&quot;products&quot;;s:14:&quot;rest_namespace&quot;;s:5:&quot;wc/v3&quot;;s:8:&quot;category&quot;;a:0:{}s:3:&quot;tag&quot;;a:0:{}s:7:&quot;orderby&quot;;s:4:&quot;date&quot;;s:5:&quot;order&quot;;s:4:&quot;desc&quot;;}" data-attributes="a:15:{s:6:&quot;layout&quot;;s:4:&quot;grid&quot;;s:10:&quot;gridPreset&quot;;s:13:&quot;grid-preset-3&quot;;s:10:&quot;listPreset&quot;;s:13:&quot;list-preset-1&quot;;s:14:&quot;saleBadgeAlign&quot;;s:10:&quot;align-left&quot;;s:8:&quot;saleText&quot;;s:8:&quot;ON SALE!&quot;;s:10:&quot;showRating&quot;;b:0;s:9:&quot;showPrice&quot;;b:1;s:13:&quot;showSaleBadge&quot;;b:1;s:17:&quot;productDescLength&quot;;i:5;s:15:&quot;isCustomCartBtn&quot;;b:0;s:14:&quot;simpleCartText&quot;;s:7:&quot;Buy Now&quot;;s:16:&quot;variableCartText&quot;;s:14:&quot;Select Options&quot;;s:15:&quot;groupedCartText&quot;;s:13:&quot;View Products&quot;;s:16:&quot;externalCartText&quot;;s:7:&quot;Buy Now&quot;;s:15:&quot;defaultCartText&quot;;s:9:&quot;Read More&quot;;}">
                                                                <div class="eb-woo-products-gallery grid-preset-3">
                                                                    <div class="eb-woo-products-col">
                                                                        <div class="eb-woo-product"> <a class="grid-preset-anchor" href="https://estezonhomegoods.com/product/mevotech-original-grade-outer-tie-rod-end-gds1460/"></a>
                                                                            <div class="eb-woo-product-image-wrapper">
                                                                                <div class="eb-woo-product-image">
                                                                                    <img decoding="async" width="300" height="300" alt="" data-src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product191-Mevotech-Original-Grade-Outer-Tie-Rod-End-GDS1460-_00-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                                                                                    <noscript>
                                                                                        <img decoding="async" width="300" height="300" src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product191-Mevotech-Original-Grade-Outer-Tie-Rod-End-GDS1460-_00-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="">
                                                                                    </noscript>
                                                                                </div>
                                                                                <div class="eb-woo-product-overlay">
                                                                                    <div class="eb-woo-product-button-list"> <a href="?add-to-cart=1353" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1353" data-product_sku="A-308379251-LCA-1" aria-label="Add “Mevotech Original Grade Outer Tie Rod End GDS1460” to your cart" aria-describedby="" rel="nofollow" data-product_price="45.82" data-product_name="Mevotech Original Grade Outer Tie Rod End GDS1460" data-google_product_id="">Add to cart</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="eb-woo-product-content-wrapper">
                                                                                <div class="eb-woo-product-content">
                                                                                    <h3 class="eb-woo-product-title"> <a href="https://estezonhomegoods.com/product/mevotech-original-grade-outer-tie-rod-end-gds1460/"> Mevotech Original Grade Outer Tie Rod End GDS1460 </a> </h3>
                                                                                    <p class="eb-woo-product-price"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>45.82</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="eb-woo-products-col">
                                                                        <div class="eb-woo-product"> <a class="grid-preset-anchor" href="https://estezonhomegoods.com/product/cordless-light-filtering-mini-blind-34-inch-length-72-inch-height-1-slat-size-alabaster-cordless-gii-morningstar-horizontal-windows-blinds-for-interior-by-achim-home-decor/"></a>
                                                                            <div class="eb-woo-product-image-wrapper">
                                                                                <div class="eb-woo-product-image">
                                                                                    <img decoding="async" width="300" height="300" alt="" data-src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product192-Cordless-Room-Darkening-Mini-Blind-34-Inch-Width-64-Inch-Length-00-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                                                                                    <noscript>
                                                                                        <img decoding="async" width="300" height="300" src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product192-Cordless-Room-Darkening-Mini-Blind-34-Inch-Width-64-Inch-Length-00-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="">
                                                                                    </noscript>
                                                                                </div>
                                                                                <div class="eb-woo-product-overlay">
                                                                                    <div class="eb-woo-product-button-list"> <a href="?add-to-cart=1348" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1348" data-product_sku="A-308370819-LCA-1" aria-label="Add “Cordless Light Filtering Mini Blind - 34 Inch Length, 72 Inch Height, 1&quot; Slat Size - Alabaster - Cordless GII Morningstar Horizontal Windows Blinds for Interior by Achim Home Decor” to your cart" aria-describedby="" rel="nofollow" data-product_price="29.2" data-product_name="Cordless Light Filtering Mini Blind - 34 Inch Length, 72 Inch Height, 1&quot; Slat Size - Alabaster - Cordless GII Morningstar Horizontal Windows Blinds for Interior by Achim Home Decor" data-google_product_id="">Add to cart</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="eb-woo-product-content-wrapper">
                                                                                <div class="eb-woo-product-content">
                                                                                    <h3 class="eb-woo-product-title"> <a href="https://estezonhomegoods.com/product/cordless-light-filtering-mini-blind-34-inch-length-72-inch-height-1-slat-size-alabaster-cordless-gii-morningstar-horizontal-windows-blinds-for-interior-by-achim-home-decor/"> Cordless Light Filtering Mini Blind – 34 Inch Length, 72 Inch Height, 1″ Slat Size – Alabaster – Cordless GII Morningstar Horizontal Windows Blinds for Interior by Achim Home Decor </a> </h3>
                                                                                    <p class="eb-woo-product-price"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29.20</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="eb-woo-products-col">
                                                                        <div class="eb-woo-product"> <a class="grid-preset-anchor" href="https://estezonhomegoods.com/product/cordless-light-filtering-mini-blind-26-inch-length-64-inch-height-1-slat-size-alabaster-cordless-gii-morningstar-horizontal-windows-blinds-for-interior-by-achim-home-decor/"></a>
                                                                            <div class="eb-woo-product-image-wrapper">
                                                                                <div class="eb-woo-product-image">
                                                                                    <img decoding="async" width="300" height="300" alt="" data-src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product188-Cordless-Light-Filtering-Mini-Blind-26-Inch-Length-64-Inch-Height-1-Slat-Size-Alabaster-00-1-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                                                                                    <noscript>
                                                                                        <img decoding="async" width="300" height="300" src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product188-Cordless-Light-Filtering-Mini-Blind-26-Inch-Length-64-Inch-Height-1-Slat-Size-Alabaster-00-1-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="">
                                                                                    </noscript>
                                                                                </div>
                                                                                <div class="eb-woo-product-overlay">
                                                                                    <div class="eb-woo-product-button-list"> <a href="?add-to-cart=1344" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1344" data-product_sku="A-308370755-LCA-1" aria-label="Add “Cordless Light Filtering Mini Blind - 26 Inch Length, 64 Inch Height, 1&quot; Slat Size - Alabaster - Cordless GII Morningstar Horizontal Windows Blinds for Interior by Achim Home Decor” to your cart" aria-describedby="" rel="nofollow" data-product_price="23.98" data-product_name="Cordless Light Filtering Mini Blind - 26 Inch Length, 64 Inch Height, 1&quot; Slat Size - Alabaster - Cordless GII Morningstar Horizontal Windows Blinds for Interior by Achim Home Decor" data-google_product_id="">Add to cart</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="eb-woo-product-content-wrapper">
                                                                                <div class="eb-woo-product-content">
                                                                                    <h3 class="eb-woo-product-title"> <a href="https://estezonhomegoods.com/product/cordless-light-filtering-mini-blind-26-inch-length-64-inch-height-1-slat-size-alabaster-cordless-gii-morningstar-horizontal-windows-blinds-for-interior-by-achim-home-decor/"> Cordless Light Filtering Mini Blind – 26 Inch Length, 64 Inch Height, 1″ Slat Size – Alabaster – Cordless GII Morningstar Horizontal Windows Blinds for Interior by Achim Home Decor </a> </h3>
                                                                                    <p class="eb-woo-product-price"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>23.98</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="eb-woo-products-col">
                                                                        <div class="eb-woo-product"> <a class="grid-preset-anchor" href="https://estezonhomegoods.com/product/classic-touch-cordless-1-light-filtering-mini-blind-22-wide-x-64-long-white/"></a>
                                                                            <div class="eb-woo-product-image-wrapper">
                                                                                <div class="eb-woo-product-image">
                                                                                    <img decoding="async" width="300" height="300" alt="" data-src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product187-Classic-Touch-Cordless-1-Light-Filtering-Mini-Blind-22-Wide-x-64-Long-White-00-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                                                                                    <noscript>
                                                                                        <img decoding="async" width="300" height="300" src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product187-Classic-Touch-Cordless-1-Light-Filtering-Mini-Blind-22-Wide-x-64-Long-White-00-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="">
                                                                                    </noscript>
                                                                                </div>
                                                                                <div class="eb-woo-product-overlay">
                                                                                    <div class="eb-woo-product-button-list"> <a href="?add-to-cart=1339" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1339" data-product_sku="A-308370731-RMC-1" aria-label="Add “Classic Touch Cordless 1&quot; Light Filtering Mini Blind, 22&quot; Wide x 64&quot; Long, White” to your cart" aria-describedby="" rel="nofollow" data-product_price="22.79" data-product_name="Classic Touch Cordless 1&quot; Light Filtering Mini Blind, 22&quot; Wide x 64&quot; Long, White" data-google_product_id="">Add to cart</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="eb-woo-product-content-wrapper">
                                                                                <div class="eb-woo-product-content">
                                                                                    <h3 class="eb-woo-product-title"> <a href="https://estezonhomegoods.com/product/classic-touch-cordless-1-light-filtering-mini-blind-22-wide-x-64-long-white/"> Classic Touch Cordless 1″ Light Filtering Mini Blind, 22″ Wide x 64″ Long, White </a> </h3>
                                                                                    <p class="eb-woo-product-price"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>22.79</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
                                        <p class="has-text-align-center animated fadeIn has-theme-palette-5-color has-theme-palette-9-background-color has-text-color has-background has-larger-font-size">NEWEST PRODUCTS</p>
                                        <div class="kb-row-layout-wrap kb-row-layout-id_c9ab6a-9f alignnone wp-block-kadence-rowlayout">
                                            <div class="kt-blocks-carousel kb-blocks-bg-slider kt-carousel-container-dotstyle-dark">
                                                <div class="kt-blocks-carousel-init kb-blocks-bg-slider-init kt-carousel-arrowstyle-none kt-carousel-dotstyle-dark" data-slider-anim-speed="400" data-slider-type="slider" data-slider-scroll="1" data-slider-arrows="false" data-slider-fade="true" data-slider-dots="true" data-slider-hover-pause="false" data-slider-auto="true" data-slider-speed="7000">
                                                    <div class="kb-bg-slide-contain">
                                                        <div class="kb-bg-slide kb-bg-slide-0" style="background-image:url(https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/04/BG_Design_04.png); background-size:cover; background-position:center center; background-repeat:no-repeat;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kt-row-column-wrap kt-has-3-columns kt-row-layout-center-exwide kt-tab-layout-inherit kt-mobile-layout-row kt-row-valign-top">
                                                <div class="wp-block-kadence-column kadence-column_8334e8-b6">
                                                    <div class="kt-inside-inner-col"></div>
                                                </div>
                                                <div class="wp-block-kadence-column kadence-column_46f193-2c animated fadeIn">
                                                    <div class="kt-inside-inner-col">
                                                        <div style="height:31px" aria-hidden="true" class="wp-block-spacer"></div>
                                                        <div class="wp-block-product-blocks-product-list-1 wopb-block-a4ba49 ">
                                                            <div class="wopb-block-wrapper">
                                                                <div class="wopb-wrapper-main-content">
                                                                    <div class="wopb-block-items-wrap wopb-block-row wopb-block-column-3 wopb-block-content-">
                                                                        <div class="wopb-block-item wopb-block-media">
                                                                            <div class="wopb-block-content-wrap wopb-pl1-l1">
                                                                                <div class="wopb-block-image wopb-block-image-roateLeft">
                                                                                    <a href="https://estezonhomegoods.com/product/xia-home-fashions-witching-hour-halloween-table-runner-13-by-108-candy-corn/"><img decoding="async" alt="Xia Home Fashions Witching Hour Halloween Table Runner, 13 by 108″, Candy Corn" data-src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product178-Xia-Home-Fashions-Witching-Hour-Halloween-Table-Runner-13-by-108-00.jpg?time=1689069779" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                                                                                        <noscript>
                                                                                            <img decoding="async" alt="Xia Home Fashions Witching Hour Halloween Table Runner, 13 by 108″, Candy Corn" src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product178-Xia-Home-Fashions-Witching-Hour-Halloween-Table-Runner-13-by-108-00.jpg?time=1689069779">
                                                                                        </noscript></a>
                                                                                </div>
                                                                                <div class="wopb-block-content">
                                                                                    <h2 class="wopb-block-title"><a href="https://estezonhomegoods.com/product/xia-home-fashions-witching-hour-halloween-table-runner-13-by-108-candy-corn/">Xia Home Fashions Witching Hour Halloween Table Runner, 13 by 108″, Candy Corn</a></h2>
                                                                                    <div class="wopb-product-price">
                                                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>52.00</span>
                                                                                    </div>
                                                                                    <div class="wopb-star-rating">
                                                                                        <span style="width: 0%"><strong itemprop="ratingValue" class="wopb-rating">0</strong>out of 5</span>
                                                                                    </div>
                                                                                    <div class="wopb-product-btn">
                                                                                        <span class="wopb-tooltip-text wopb-cart-action" data-postid="1316"><a href="?add-to-cart=1316" data-stock="" aria-label="Add “Xia Home Fashions Witching Hour Halloween Table Runner, 13 by 108&quot;, Candy Corn” to your cart" data-quantity="1" data-product_id="1316" data-product_sku="A-306776767-RMC-1" rel="nofollow" class="add_to_cart_button ajax_add_to_cart wopb-cart-normal">Add to cart</a><a href="https://estezonhomegoods.com/cart/" class="wopb-cart-active">View Cart</a></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="wopb-block-item wopb-block-media">
                                                                            <div class="wopb-block-content-wrap wopb-pl1-l1">
                                                                                <div class="wopb-block-image wopb-block-image-roateLeft">
                                                                                    <a href="https://estezonhomegoods.com/product/woodland-home-decor-cms36e-crown-molding-shelf/"><img decoding="async" alt="Woodland Home Décor CMS36E Crown Molding Shelf" data-src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product34-Woodland-Home-Decor.jpg?time=1689069779" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                                                                                        <noscript>
                                                                                            <img decoding="async" alt="Woodland Home Décor CMS36E Crown Molding Shelf" src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product34-Woodland-Home-Decor.jpg?time=1689069779">
                                                                                        </noscript></a>
                                                                                </div>
                                                                                <div class="wopb-block-content">
                                                                                    <h2 class="wopb-block-title"><a href="https://estezonhomegoods.com/product/woodland-home-decor-cms36e-crown-molding-shelf/">Woodland Home Décor CMS36E Crown Molding Shelf</a></h2>
                                                                                    <div class="wopb-product-price">
                                                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>55.90</span>
                                                                                    </div>
                                                                                    <div class="wopb-star-rating">
                                                                                        <span style="width: 0%"><strong itemprop="ratingValue" class="wopb-rating">0</strong>out of 5</span>
                                                                                    </div>
                                                                                    <div class="wopb-product-btn">
                                                                                        <span class="wopb-tooltip-text wopb-cart-action" data-postid="605"><a href="?add-to-cart=605" data-stock="" aria-label="Add “Woodland Home Décor CMS36E Crown Molding Shelf” to your cart" data-quantity="1" data-product_id="605" data-product_sku="A-202072607-LCA-1" rel="nofollow" class="add_to_cart_button ajax_add_to_cart wopb-cart-normal">Add to cart</a><a href="https://estezonhomegoods.com/cart/" class="wopb-cart-active">View Cart</a></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="wopb-block-item wopb-block-media">
                                                                            <div class="wopb-block-content-wrap wopb-pl1-l1">
                                                                                <div class="wopb-block-image wopb-block-image-roateLeft">
                                                                                    <a href="https://estezonhomegoods.com/product/westek-rfk1636lc-light-control-white/"><img decoding="async" alt="Westek RFK1636LC Light Control, White" data-src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product165-Westek-RFK1636LC-Light-Control-White-00.jpg?time=1689069779" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                                                                                        <noscript>
                                                                                            <img decoding="async" alt="Westek RFK1636LC Light Control, White" src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product165-Westek-RFK1636LC-Light-Control-White-00.jpg?time=1689069779">
                                                                                        </noscript></a>
                                                                                </div>
                                                                                <div class="wopb-block-content">
                                                                                    <h2 class="wopb-block-title"><a href="https://estezonhomegoods.com/product/westek-rfk1636lc-light-control-white/">Westek RFK1636LC Light Control, White</a></h2>
                                                                                    <div class="wopb-product-price">
                                                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>31.55</span>
                                                                                    </div>
                                                                                    <div class="wopb-star-rating">
                                                                                        <span style="width: 0%"><strong itemprop="ratingValue" class="wopb-rating">0</strong>out of 5</span>
                                                                                    </div>
                                                                                    <div class="wopb-product-btn">
                                                                                        <span class="wopb-tooltip-text wopb-cart-action" data-postid="1280"><a href="?add-to-cart=1280" data-stock="" aria-label="Add “Westek RFK1636LC Light Control, White” to your cart" data-quantity="1" data-product_id="1280" data-product_sku="A-305011214-LCA-1" rel="nofollow" class="add_to_cart_button ajax_add_to_cart wopb-cart-normal">Add to cart</a><a href="https://estezonhomegoods.com/cart/" class="wopb-cart-active">View Cart</a></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="wopb-block-item wopb-block-media">
                                                                            <div class="wopb-block-content-wrap wopb-pl1-l1">
                                                                                <div class="wopb-block-image wopb-block-image-roateLeft">
                                                                                    <a href="https://estezonhomegoods.com/product/westek-nl-drcl-2-directional-night-light-2-pack-white/"><img decoding="async" alt="Westek NL-DRCL-2 Directional Night Light (2 Pack), White" data-src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product164-Westek-NL-DRCL-2-Directional-Night-Light-2-Pack-White-00.jpg?time=1689069779" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                                                                                        <noscript>
                                                                                            <img decoding="async" alt="Westek NL-DRCL-2 Directional Night Light (2 Pack), White" src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product164-Westek-NL-DRCL-2-Directional-Night-Light-2-Pack-White-00.jpg?time=1689069779">
                                                                                        </noscript></a>
                                                                                </div>
                                                                                <div class="wopb-block-content">
                                                                                    <h2 class="wopb-block-title"><a href="https://estezonhomegoods.com/product/westek-nl-drcl-2-directional-night-light-2-pack-white/">Westek NL-DRCL-2 Directional Night Light (2 Pack), White</a></h2>
                                                                                    <div class="wopb-product-price">
                                                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>13.00</span>
                                                                                    </div>
                                                                                    <div class="wopb-star-rating">
                                                                                        <span style="width: 0%"><strong itemprop="ratingValue" class="wopb-rating">0</strong>out of 5</span>
                                                                                    </div>
                                                                                    <div class="wopb-product-btn">
                                                                                        <span class="wopb-tooltip-text wopb-cart-action" data-postid="1275"><a href="?add-to-cart=1275" data-stock="" aria-label="Add “Westek NL-DRCL-2 Directional Night Light (2 Pack), White” to your cart" data-quantity="1" data-product_id="1275" data-product_sku="A-305009788-LCA-1" rel="nofollow" class="add_to_cart_button ajax_add_to_cart wopb-cart-normal">Add to cart</a><a href="https://estezonhomegoods.com/cart/" class="wopb-cart-active">View Cart</a></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="wopb-block-item wopb-block-media">
                                                                            <div class="wopb-block-content-wrap wopb-pl1-l1">
                                                                                <div class="wopb-block-image wopb-block-image-roateLeft">
                                                                                    <a href="https://estezonhomegoods.com/product/watts-lf800m4-qt-3-4-inch-lead-free-anti-siphon-pressure-vacuum-breaker-backflow-preventer-quarter-turn-shutoff-tee-handles-bronze/"><img decoding="async" alt="Watts LF800M4-QT 3/4 Inch Lead Free Anti-Siphon Pressure Vacuum Breaker Backflow Preventer, Quarter Turn Shutoff, Tee Handles, Bronze" data-src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product139-Watts-LF800M4-QT-3-4-Inch-Lead-Free-Anti-Siphon-Pressure-Vacuum-Breaker-Backflow-Preventer-00.jpg?time=1689069779" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                                                                                        <noscript>
                                                                                            <img decoding="async" alt="Watts LF800M4-QT 3/4 Inch Lead Free Anti-Siphon Pressure Vacuum Breaker Backflow Preventer, Quarter Turn Shutoff, Tee Handles, Bronze" src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product139-Watts-LF800M4-QT-3-4-Inch-Lead-Free-Anti-Siphon-Pressure-Vacuum-Breaker-Backflow-Preventer-00.jpg?time=1689069779">
                                                                                        </noscript></a>
                                                                                </div>
                                                                                <div class="wopb-block-content">
                                                                                    <h2 class="wopb-block-title"><a href="https://estezonhomegoods.com/product/watts-lf800m4-qt-3-4-inch-lead-free-anti-siphon-pressure-vacuum-breaker-backflow-preventer-quarter-turn-shutoff-tee-handles-bronze/">Watts LF800M4-QT 3/4 Inch Lead Free Anti-Siphon Pressure Vacuum Breaker Backflow Preventer, Quarter Turn Shutoff, Tee Handles, Bronze</a></h2>
                                                                                    <div class="wopb-product-price">
                                                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>222.86</span>
                                                                                    </div>
                                                                                    <div class="wopb-star-rating">
                                                                                        <span style="width: 0%"><strong itemprop="ratingValue" class="wopb-rating">0</strong>out of 5</span>
                                                                                    </div>
                                                                                    <div class="wopb-product-btn">
                                                                                        <span class="wopb-tooltip-text wopb-cart-action" data-postid="1194"><a href="?add-to-cart=1194" data-stock="" aria-label="Add “Watts LF800M4-QT 3/4 Inch Lead Free Anti-Siphon Pressure Vacuum Breaker Backflow Preventer, Quarter Turn Shutoff, Tee Handles, Bronze” to your cart" data-quantity="1" data-product_id="1194" data-product_sku="A-300977379-LCA-1" rel="nofollow" class="add_to_cart_button ajax_add_to_cart wopb-cart-normal">Add to cart</a><a href="https://estezonhomegoods.com/cart/" class="wopb-cart-active">View Cart</a></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="wopb-block-item wopb-block-media">
                                                                            <div class="wopb-block-content-wrap wopb-pl1-l1">
                                                                                <div class="wopb-block-image wopb-block-image-roateLeft">
                                                                                    <a href="https://estezonhomegoods.com/product/watco-plastic-stainless-steel-bathtub-stopper-and-drain-2-7-8-dia-chrome/"><img decoding="async" alt="WATCO Plastic, Stainless Steel Bathtub Stopper and Drain, 2-7/8″ Dia, Chrome" data-src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product90-WATCO-Plastic-Stainless-Steel-Bathtub00.jpg?time=1689069779" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                                                                                        <noscript>
                                                                                            <img decoding="async" alt="WATCO Plastic, Stainless Steel Bathtub Stopper and Drain, 2-7/8″ Dia, Chrome" src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product90-WATCO-Plastic-Stainless-Steel-Bathtub00.jpg?time=1689069779">
                                                                                        </noscript></a>
                                                                                </div>
                                                                                <div class="wopb-block-content">
                                                                                    <h2 class="wopb-block-title"><a href="https://estezonhomegoods.com/product/watco-plastic-stainless-steel-bathtub-stopper-and-drain-2-7-8-dia-chrome/">WATCO Plastic, Stainless Steel Bathtub Stopper and Drain, 2-7/8″ Dia, Chrome</a></h2>
                                                                                    <div class="wopb-product-price">
                                                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>43.86</span>
                                                                                    </div>
                                                                                    <div class="wopb-star-rating">
                                                                                        <span style="width: 0%"><strong itemprop="ratingValue" class="wopb-rating">0</strong>out of 5</span>
                                                                                    </div>
                                                                                    <div class="wopb-product-btn">
                                                                                        <span class="wopb-tooltip-text wopb-cart-action" data-postid="838"><a href="?add-to-cart=838" data-stock="" aria-label="Add “WATCO Plastic, Stainless Steel Bathtub Stopper and Drain, 2-7/8&quot; Dia, Chrome” to your cart" data-quantity="1" data-product_id="838" data-product_sku="A-204741437-LCA-1" rel="nofollow" class="add_to_cart_button ajax_add_to_cart wopb-cart-normal">Add to cart</a><a href="https://estezonhomegoods.com/cart/" class="wopb-cart-active">View Cart</a></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="wopb-block-item wopb-block-media">
                                                                            <div class="wopb-block-content-wrap wopb-pl1-l1">
                                                                                <div class="wopb-block-image wopb-block-image-roateLeft">
                                                                                    <a href="https://estezonhomegoods.com/product/volume-lighting-v2718-track-light-monopoint-canopy-black/"><img decoding="async" alt="Volume Lighting V2718 Track Light Monopoint Canopy, Black" data-src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product124-Volume-Lighting-V2718-Track-Light-Monopoint-Canopy-Black-00.jpg?time=1689069779" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                                                                                        <noscript>
                                                                                            <img decoding="async" alt="Volume Lighting V2718 Track Light Monopoint Canopy, Black" src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product124-Volume-Lighting-V2718-Track-Light-Monopoint-Canopy-Black-00.jpg?time=1689069779">
                                                                                        </noscript></a>
                                                                                </div>
                                                                                <div class="wopb-block-content">
                                                                                    <h2 class="wopb-block-title"><a href="https://estezonhomegoods.com/product/volume-lighting-v2718-track-light-monopoint-canopy-black/">Volume Lighting V2718 Track Light Monopoint Canopy, Black</a></h2>
                                                                                    <div class="wopb-product-price">
                                                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>20.06</span>
                                                                                    </div>
                                                                                    <div class="wopb-star-rating">
                                                                                        <span style="width: 0%"><strong itemprop="ratingValue" class="wopb-rating">0</strong>out of 5</span>
                                                                                    </div>
                                                                                    <div class="wopb-product-btn">
                                                                                        <span class="wopb-tooltip-text wopb-cart-action" data-postid="947"><a href="?add-to-cart=947" data-stock="" aria-label="Add “Volume Lighting V2718 Track Light Monopoint Canopy, Black” to your cart" data-quantity="1" data-product_id="947" data-product_sku="A-207189614-LCA-1" rel="nofollow" class="add_to_cart_button ajax_add_to_cart wopb-cart-normal">Add to cart</a><a href="https://estezonhomegoods.com/cart/" class="wopb-cart-active">View Cart</a></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="wopb-block-item wopb-block-media">
                                                                            <div class="wopb-block-content-wrap wopb-pl1-l1">
                                                                                <div class="wopb-block-image wopb-block-image-roateLeft">
                                                                                    <a href="https://estezonhomegoods.com/product/visol-raoul-stainless-steel-double-wall-champagne-holder/"><img decoding="async" alt="Visol Raoul Stainless Steel Double Wall Champagne Holder" data-src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product144-Visol-Raoul-Stainless-Steel-Double-Wall-Champagne-Holder-01.jpg?time=1689069779" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                                                                                        <noscript>
                                                                                            <img decoding="async" alt="Visol Raoul Stainless Steel Double Wall Champagne Holder" src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product144-Visol-Raoul-Stainless-Steel-Double-Wall-Champagne-Holder-01.jpg?time=1689069779">
                                                                                        </noscript></a>
                                                                                </div>
                                                                                <div class="wopb-block-content">
                                                                                    <h2 class="wopb-block-title"><a href="https://estezonhomegoods.com/product/visol-raoul-stainless-steel-double-wall-champagne-holder/">Visol Raoul Stainless Steel Double Wall Champagne Holder</a></h2>
                                                                                    <div class="wopb-product-price">
                                                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>66.64</span>
                                                                                    </div>
                                                                                    <div class="wopb-star-rating">
                                                                                        <span style="width: 0%"><strong itemprop="ratingValue" class="wopb-rating">0</strong>out of 5</span>
                                                                                    </div>
                                                                                    <div class="wopb-product-btn">
                                                                                        <span class="wopb-tooltip-text wopb-cart-action" data-postid="1213"><a href="?add-to-cart=1213" data-stock="" aria-label="Add “Visol Raoul Stainless Steel Double Wall Champagne Holder” to your cart" data-quantity="1" data-product_id="1213" data-product_sku="A-301310713-LCA-1" rel="nofollow" class="add_to_cart_button ajax_add_to_cart wopb-cart-normal">Add to cart</a><a href="https://estezonhomegoods.com/cart/" class="wopb-cart-active">View Cart</a></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="wopb-block-item wopb-block-media">
                                                                            <div class="wopb-block-content-wrap wopb-pl1-l1">
                                                                                <div class="wopb-block-image wopb-block-image-roateLeft">
                                                                                    <a href="https://estezonhomegoods.com/product/visol-little-cooper-double-walled-stainless-steel-9-ounce-mug-silver/"><img decoding="async" alt="Visol Little Cooper Double Walled Stainless Steel 9-Ounce Mug, Silver" data-src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product148-Visol-Little-Cooper-Double-Walled-Stainless-Steel-9-Ounce-Mug-Silver-00.jpg?time=1689069779" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                                                                                        <noscript>
                                                                                            <img decoding="async" alt="Visol Little Cooper Double Walled Stainless Steel 9-Ounce Mug, Silver" src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/product148-Visol-Little-Cooper-Double-Walled-Stainless-Steel-9-Ounce-Mug-Silver-00.jpg?time=1689069779">
                                                                                        </noscript></a>
                                                                                </div>
                                                                                <div class="wopb-block-content">
                                                                                    <h2 class="wopb-block-title"><a href="https://estezonhomegoods.com/product/visol-little-cooper-double-walled-stainless-steel-9-ounce-mug-silver/">Visol Little Cooper Double Walled Stainless Steel 9-Ounce Mug, Silver</a></h2>
                                                                                    <div class="wopb-product-price">
                                                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25.52</span>
                                                                                    </div>
                                                                                    <div class="wopb-star-rating">
                                                                                        <span style="width: 0%"><strong itemprop="ratingValue" class="wopb-rating">0</strong>out of 5</span>
                                                                                    </div>
                                                                                    <div class="wopb-product-btn">
                                                                                        <span class="wopb-tooltip-text wopb-cart-action" data-postid="1226"><a href="?add-to-cart=1226" data-stock="" aria-label="Add “Visol Little Cooper Double Walled Stainless Steel 9-Ounce Mug, Silver” to your cart" data-quantity="1" data-product_id="1226" data-product_sku="A-301668017-LCA-1" rel="nofollow" class="add_to_cart_button ajax_add_to_cart wopb-cart-normal">Add to cart</a><a href="https://estezonhomegoods.com/cart/" class="wopb-cart-active">View Cart</a></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="height:21px" aria-hidden="true" class="wp-block-spacer"></div>
                                                    </div>
                                                </div>
                                                <div class="wp-block-kadence-column kadence-column_7c77ec-29">
                                                    <div class="kt-inside-inner-col"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wp-block-uagb-container uagb-block-6fa558b8 alignfull uagb-is-root-container">
                                            <div class="uagb-container-inner-blocks-wrap">
                                                <div style="height:103px" aria-hidden="true" class="wp-block-spacer"></div>
                                                <div class="wp-block-uagb-info-box uagb-block-97fe988b uagb-infobox__content-wrap  uagb-infobox-icon-above-title uagb-infobox-image-valign-top coblocks-animate animated fadeInLeft">
                                                    <div class="uagb-ifb-content">
                                                        <div class="uagb-ifb-title-wrap">
                                                            <h2 class="uagb-ifb-title">What They Say About Us</h2>
                                                        </div>
                                                        <div class="uagb-ifb-separator"></div>
                                                    </div>
                                                </div>
                                                <div class="kb-row-layout-wrap kb-row-layout-id_43cd89-1e alignnone has-theme-palette9-background-color kt-row-has-bg wp-block-kadence-rowlayout">
                                                    <div class="kt-blocks-carousel kb-blocks-bg-slider kt-carousel-container-dotstyle-dark">
                                                        <div class="kt-blocks-carousel-init kb-blocks-bg-slider-init kt-carousel-arrowstyle-none kt-carousel-dotstyle-dark" data-slider-anim-speed="400" data-slider-type="slider" data-slider-scroll="1" data-slider-arrows="false" data-slider-fade="true" data-slider-dots="true" data-slider-hover-pause="false" data-slider-auto="true" data-slider-speed="7000">
                                                            <div class="kb-bg-slide-contain">
                                                                <div class="kb-bg-slide kb-bg-slide-0" style="background-image:url(https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/04/BG_Design_05.png); background-size:cover; background-position:center center; background-repeat:no-repeat;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="kt-row-column-wrap kt-has-3-columns kt-row-layout-center-wide kt-tab-layout-inherit kt-mobile-layout-row kt-row-valign-top">
                                                        <div class="wp-block-kadence-column kadence-column_634a22-d4">
                                                            <div class="kt-inside-inner-col"></div>
                                                        </div>
                                                        <div class="wp-block-kadence-column kadence-column_a1a3bb-02">
                                                            <div class="kt-inside-inner-col">
                                                                <div class="wp-block-uagb-testimonial uagb-slick-carousel uagb-tm__arrow-outside uagb-block-c3c63496">
                                                                    <div class="is-carousel uagb-tm__columns-1 uagb-tm__items">
                                                                        <div class="uagb-testimonial__wrap  uagb-tm__imgicon-style-circle uagb-tm__image-position-bottom uagb-tm__bg-type-none ">
                                                                            <div class="uagb-tm__content">
                                                                                <div class="uagb-tm__overlay"></div>
                                                                                <div class="uagb-tm__text-wrap">
                                                                                    <div class="uagb-tm__desc">
                                                                                        I have been working with these guys for years now! With lots of hard work and timely communication, they made sure they delivered the best to me. Highly recommended!
                                                                                    </div>
                                                                                    <div class="uagb-tm__meta-inner">
                                                                                        <div class="uagb-testimonial-details">
                                                                                            <span class="uagb-tm__author-name">Daisy Williams </span><span class="uagb-tm__company"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="uagb-testimonial__wrap  uagb-tm__imgicon-style-circle uagb-tm__image-position-bottom uagb-tm__bg-type-none ">
                                                                            <div class="uagb-tm__content">
                                                                                <div class="uagb-tm__overlay"></div>
                                                                                <div class="uagb-tm__text-wrap">
                                                                                    <div class="uagb-tm__desc">
                                                                                        I recently purchased a cordless drill from TodaynTomorrow and it has been a game changer. It’s lightweight, easy to use, and has enough power to drill through even the toughest materials. I highly recommend it to anyone looking for a reliable drill.
                                                                                    </div>
                                                                                    <div class="uagb-tm__meta-inner">
                                                                                        <div class="uagb-testimonial-details">
                                                                                            <span class="uagb-tm__author-name">Jonathan Freece </span><span class="uagb-tm__company"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="uagb-testimonial__wrap  uagb-tm__imgicon-style-circle uagb-tm__image-position-bottom uagb-tm__bg-type-none ">
                                                                            <div class="uagb-tm__content">
                                                                                <div class="uagb-tm__overlay"></div>
                                                                                <div class="uagb-tm__text-wrap">
                                                                                    <div class="uagb-tm__desc">
                                                                                        I’ve been using TodaynTomorrow for years and they never disappoint. Their products are affordable and of good quality. I recently purchased a new set of pliers and they work great. I highly recommend TodaynTomorrow to anyone looking for a bargain.
                                                                                    </div>
                                                                                    <div class="uagb-tm__meta-inner">
                                                                                        <div class="uagb-testimonial-details">
                                                                                            <span class="uagb-tm__author-name">Amanda South</span><span class="uagb-tm__company">Company Name</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wp-block-kadence-column kadence-column_9ae9c0-fe">
                                                            <div class="kt-inside-inner-col"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wp-block-uagb-container uagb-block-467a80e9 alignfull uagb-is-root-container">
                                                    <div class="uagb-container-inner-blocks-wrap"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wp-block-uagb-container uagb-block-9a89ad19 alignfull uagb-is-root-container">
                                            <div class="uagb-container__shape uagb-container__shape-top">
                                                <svg xmlns="https://www.w3.org/2000/svg" viewbox="0 0 1000 100" preserveaspectratio="none">
                                                    <path class="uagb-container__shape-fill" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z"></path><path class="uagb-container__shape-fill" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"></path><path class="uagb-container__shape-fill" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"></path>
                                                </svg>
                                            </div>
                                            <div class="uagb-container-inner-blocks-wrap">
                                                <div class="wp-block-uagb-container uagb-block-cbedecdf">
                                                    <div class="kb-row-layout-wrap kb-row-layout-id_6f49d5-bc alignnone wp-block-kadence-rowlayout">
                                                        <div class="kt-row-column-wrap kt-has-1-columns kt-row-layout-equal kt-tab-layout-inherit kt-mobile-layout-row kt-row-valign-top">
                                                            <div class="wp-block-kadence-column kadence-column_0fa3b1-62">
                                                                <div class="kt-inside-inner-col">
                                                                    <div class="wp-block-uagb-container uagb-block-0f1f72cb">
                                                                        <div class="wp-block-uagb-container uagb-block-259034b2">
                                                                            <div class="kb-row-layout-wrap kb-row-layout-id_0e333c-60 alignnone wp-block-kadence-rowlayout">
                                                                                <div class="kt-row-column-wrap kt-has-2-columns kt-row-layout-right-golden kt-tab-layout-inherit kt-mobile-layout-row kt-row-valign-top">
                                                                                    <div class="wp-block-kadence-column kadence-column_2f308b-3b">
                                                                                        <div class="kt-inside-inner-col">
                                                                                            <div id="gspb_image-id-gsbp-79b2086d-5c9b" class="gspb_image gspb_image-id-gsbp-79b2086d-5c9b wp-block-greenshift-blocks-image">
                                                                                                <img decoding="async" loading="lazy" src="https://61422b.p3cdn1.secureserver.net/wp-content/uploads/2023/03/new_register-1.png" data-src="" alt="" width="860" height="708" data-aos="fade-left" data-aos-easing="ease" data-aos-duration="700" data-aos-once="true">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="wp-block-kadence-column kadence-column_dd3bd9-57">
                                                                                        <div class="kt-inside-inner-col">
                                                                                            <div class="kb-row-layout-wrap kb-row-layout-id_9653ae-85 alignnone wp-block-kadence-rowlayout">
                                                                                                <div class="kt-row-column-wrap kt-has-2-columns kt-row-layout-left-golden kt-tab-layout-inherit kt-mobile-layout-row kt-row-valign-top">
                                                                                                    <div class="wp-block-kadence-column kadence-column_c0bc7b-96">
                                                                                                        <div class="kt-inside-inner-col">
                                                                                                            <div style="height:45px" aria-hidden="true" class="wp-block-spacer"></div>
                                                                                                            <h1 id="gspb_heading-id-gsbp-532e6952-e1d3" class="gspb_heading gspb_heading-id-gsbp-532e6952-e1d3 " data-aos="fade" data-aos-easing="ease" data-aos-duration="700" data-aos-once="true"><span class="text-anim text-anim--loader js-text-anim"><span class="text-anim__wrapper js-text-anim__wrapper"><span class="text-anim__word js-text-anim__word text-anim__word--in">SHOP</span><span class="text-anim__word js-text-anim__word ">JOIN</span><span class="text-anim__word js-text-anim__word ">REGISTER</span></span></span> NOW!</h1>
                                                                                                            <div class="wp-block-uagb-info-box uagb-block-b9810ace uagb-infobox__content-wrap  uagb-infobox-icon-above-title uagb-infobox-image-valign-top coblocks-animate">
                                                                                                                <div class="uagb-ifb-content">
                                                                                                                    <div class="uagb-ifb-title-wrap"></div>
                                                                                                                    <p class="uagb-ifb-desc">Create an account and start adding your favorite products in your cart. We are excited to have you as a part of our community! </p>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div id="gspb_button-id-gsbp-5bc73663-c075" class="gspb_button_wrapper gspb_button-id-gsbp-5bc73663-c075 wp-block-greenshift-blocks-button">
                                                                                                                <a class="gspb-buttonbox" data-aos="zoom-in-up" data-aos-easing="ease" data-aos-duration="700" data-aos-once="true" href="https://estezonhomegoods.com/register/" rel="noopener"><span class="gspb-buttonbox-textwrap"><span class="gspb-buttonbox-icon">
                                <svg class="" style="display:inline-block;vertical-align:middle" width="15" height="15" viewbox="0 0 896 1024" xmlns="http://www.w3.org/2000/svg">
                                 <path style="fill:#565D66" d="M436.202 76.202l-39.598 39.598c-9.372 9.372-9.372 24.568 0 33.942l310.26 310.258h-682.864c-13.254 0-24 10.746-24 24v56c0 13.254 10.746 24 24 24h682.864l-310.26 310.26c-9.372 9.372-9.372 24.568 0 33.942l39.598 39.598c9.372 9.372 24.568 9.372 33.942 0l418.828-418.828c9.372-9.372 9.372-24.568 0-33.942l-418.83-418.828c-9.372-9.374-24.568-9.374-33.94 0z"></path>
                                </svg></span><span class="gspb-buttonbox-text"><span class="gspb-buttonbox-title">Register Now / LogIn</span></span></span></a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="wp-block-kadence-column kadence-column_dc023a-65">
                                                                                                        <div class="kt-inside-inner-col"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .entry-content -->
                                </div>
                            </article><!-- #post-5 -->
                        </div>
                    </main><!-- #main -->
                </div>
            </div><!-- #primary -->
        </div><!-- #inner-wrap -->
        <footer id="colophon" class="site-footer" role="contentinfo">
            <div class="site-footer-wrap">
                <div class="site-bottom-footer-wrap site-footer-row-container site-footer-focus-item site-footer-row-layout-standard site-footer-row-tablet-layout-default site-footer-row-mobile-layout-default" data-section="kadence_customizer_footer_bottom">
                    <div class="site-footer-row-container-inner">
                        <div class="site-container">
                            <div class="site-bottom-footer-inner-wrap site-footer-row site-footer-row-columns-3 site-footer-row-column-layout-equal site-footer-row-tablet-column-layout-default site-footer-row-mobile-column-layout-row ft-ro-dir-row ft-ro-collapse-normal ft-ro-t-dir-default ft-ro-m-dir-default ft-ro-lstyle-plain">
                                <div class="site-footer-bottom-section-1 site-footer-section footer-section-inner-items-1">
                                    <div class="footer-widget-area widget-area site-footer-focus-item footer-widget1 content-align-center content-tablet-align-default content-mobile-align-default content-valign-middle content-tablet-valign-default content-mobile-valign-default" data-section="sidebar-widgets-footer1">
                                        <div class="footer-widget-area-inner site-info-inner">
                                            <section id="nav_menu-3" class="widget widget_nav_menu">
                                                <div class="menu-footer-menu-01-container">
                                                    <ul id="menu-footer-menu-01" class="menu">
                                                        <li id="menu-item-193" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-193"><a href="https://estezonhomegoods.com/about-us/">About Us</a></li>
                                                        <li id="menu-item-194" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-194"><a href="https://estezonhomegoods.com/contact-us/">Contact Us</a></li>
                                                        <li id="menu-item-451" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-451"><a href="https://estezonhomegoods.com/faq/">FAQ</a></li>
                                                        <li id="menu-item-198" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-198"><a href="https://estezonhomegoods.com/register/">Register</a></li>
                                                    </ul>
                                                </div>
                                            </section>
                                        </div>
                                    </div><!-- .footer-widget1 -->
                                </div>
                                <div class="site-footer-bottom-section-2 site-footer-section footer-section-inner-items-1">
                                    <div class="footer-widget-area widget-area site-footer-focus-item footer-widget2 content-align-default content-tablet-align-default content-mobile-align-default content-valign-default content-tablet-valign-default content-mobile-valign-default" data-section="sidebar-widgets-footer2">
                                        <div class="footer-widget-area-inner site-info-inner">
                                            <section id="block-12" class="widget widget_block widget_text">
                                                <p class="has-text-align-center"></p>
                                            </section>
                                            <section id="block-14" class="widget widget_block widget_text">
                                                <p class="has-text-align-center"></p>
                                            </section>
                                            <section id="block-22" class="widget widget_block widget_text">
                                                <p>✆ (409) 779-1205</p>
                                            </section>
                                            <section id="block-23" class="widget widget_block widget_text">
                                                <p><img decoding="async" draggable="false" role="img" alt="✉" data-src="https://s.w.org/images/core/emoji/14.0.0/svg/2709.svg" class="emoji lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                                                <noscript>
                                                    <img decoding="async" draggable="false" role="img" class="emoji" src="https://s.w.org/images/core/emoji/14.0.0/svg/2709.svg" alt="✉">
                                                </noscript> info@estezonhomegoods.com</p>
                                            </section>
                                            <section id="block-26" class="widget widget_block widget_text">
                                                <p></p>
                                            </section>
                                        </div>
                                    </div><!-- .footer-widget2 -->
                                </div>
                                <div class="site-footer-bottom-section-3 site-footer-section footer-section-inner-items-1">
                                    <div class="footer-widget-area site-info site-footer-focus-item content-align-center content-tablet-align-default content-mobile-align-default content-valign-default content-tablet-valign-default content-mobile-valign-default" data-section="kadence_customizer_footer_html">
                                        <div class="footer-widget-area-inner site-info-inner">
                                            <div class="footer-html inner-link-style-normal">
                                                <div class="footer-html-inner">
                                                    <p>© 2023 Estezon Home Goods.<br> All rights reserved.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .site-info -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!-- #colophon -->
    </div><!-- #wrapper -->
@endsection