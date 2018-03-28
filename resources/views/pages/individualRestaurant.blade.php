@extends('layouts.master') 

@section('title', 'Individual Restaurant') 

@section('content')
<div class="country-ca menu not-mobile">
    <div class="page-wrapper">
        <div class="content-wrapper menu-bg">
            <main>
                <div class="page-container">
                    <section class="vendor-section">
                        <div class="hero-banner-wrapper redesign-vendor-info">
                            <div class="vendor-header">
                                <div class="b-lazy hero-banner b-loaded" style="background-image: url(../img/restaurant-banner.jpg);"></div>
                                <div class="menu__postal-code-bar">
                                    <span class="menu__postal-code-bar__message" style="font-size: 14px;">Build your menu and have it delivered to you!</span>
                                    <form class="restaurants-search-form " id="delivery-information-postal-index-form" method="GET">
                                        <div class="restaurants-search-form__input-wrapper">
                                            <input type="text" class="restaurants-search-form__input" id="delivery-information-postal-index" value="" placeholder="Search for menu item">
                                            <div class="tooltip tooltip--align-left align-left tooltip-error bottom in" role="tooltip" id="tooltip318164" style="top: 48.0114px; left: 0px; display: block;"></div>
                                            <div class="address-suggestions"></div>
                                        </div>
                                        <div class="button-container ">
                                            <button class="button restaurants-search-form__button js-restaurants-search-submit restaurants-search-form__button--full js-restaurants-search-button gtm-homepage-delivery-button js-ripple">Search now
                                                <i class="ripple"></i>
                                            </button>
                                            <button class="button js-restaurants-search-submit restaurants-search-form__button--reduced gtm-homepage-delivery-button restaurants-search-form__button js-ripple">
                                                <i class="icon-right-open-big"></i>
                                                <i class="ripple"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="postal-index-form-overlay"></div>
                            <div class="vendor-info-container" data-toggle="modal" data-target="#rich-description">
                                <div class="vendor-info-main ">
                                    <div class="vendor-info-main-headline item">
                                        <h1 class="fn">Restaurant - Name</h1>
                                        <span class="tag">NEW</span>
                                    </div>
                                    <div class="vendor-info-main-details">
                                        <div class="vendor-info-main-details-cuisines-container summary">
                                            <ul class="vendor-info-main-details-cuisines">
                                                <li>$</li>
                                                <li data-id="51">American</li>
                                                <li data-id="113">Canadian</li>
                                                <li data-id="58">Vegetarian</li>
                                                <li data-id="35">Sandwiches</li>
                                                <li data-id="19">Fingerfood</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="vendor-info-main-info-button">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="21" height="21" viewBox="0 0 21 21">
                                                <defs>
                                                    <ellipse id="a" cx="10.5" cy="10.5" rx="10.5" ry="10.5"></ellipse>
                                                    <mask id="b" width="21" height="21" x="0" y="0" fill="#fff">
                                                        <use xlink:href="#a"></use>
                                                    </mask>
                                                </defs>
                                                <g class="svg-stroke-container" fill="none" fill-rule="evenodd">
                                                    <use stroke="#CC3535" stroke-width="2" mask="url(#b)" xlink:href="#a"></use>
                                                    <path stroke-width=".4" d="M10 5h1v1h-1z"></path>
                                                    <path stroke-width=".2" d="M10 8h1v7h-1z"></path>
                                                </g>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu__blocks-wrapper">
                            <div class="menu__blocks">
                                <div class="menu__list-wrapper">
                                    <nav class="dish-menu-category-list">
                                        <div class="dish-control-holder">
                                            <div class="nav-holder">
                                                <ul>
                                                    <li>
                                                        <a href="#menu__category-id-34505" data-id="34505" data-master-category-id="2" data-anchor-nav="">
                                                            Starters
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#menu__category-id-34506" data-id="34506" data-master-category-id="2" data-anchor-nav="">
                                                            Salads
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#menu__category-id-34511" data-id="34511" data-master-category-id="3" data-anchor-nav="">
                                                            Pasta and Bowls
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#menu__category-id-34508" data-id="34508" data-master-category-id="4" data-anchor-nav="">
                                                            Handhelds
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#menu__category-id-34509" data-id="34509" data-master-category-id="4" data-anchor-nav="">
                                                            Mains
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#menu__category-id-34510" data-id="34510" data-master-category-id="4" data-anchor-nav="">
                                                            Steaks and Prime Rib
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#menu__category-id-34614" data-id="34614" data-master-category-id="15" data-anchor-nav="">
                                                            Kids Menu
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#menu__category-id-34612" data-id="34612" data-master-category-id="5" data-anchor-nav="">
                                                            Sides
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#menu__category-id-34615" data-id="34615" data-master-category-id="9" data-anchor-nav="">
                                                            Desserts
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#menu__category-id-34616" data-id="34616" data-master-category-id="11" data-anchor-nav="">
                                                            Drinks
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <button class="nav-scroller prev hide">
                                                <svg width="12" height="14" xmlns="http://www.w3.org/2000/svg">
                                                    <path class="svg-stroke-container" stroke-linejoin="round" stroke-linecap="round" fill-rule="evenodd" fill="none" stroke="#EE343C"
                                                        d="m3.5,1.5l5,5.5l-5,5.5"></path>
                                                </svg>
                                            </button>
                                            <button class="nav-scroller next">
                                                <svg width="12" height="14" xmlns="http://www.w3.org/2000/svg">
                                                    <path class="svg-stroke-container" stroke-linejoin="round" stroke-linecap="round" fill-rule="evenodd" fill="none" stroke="#EE343C"
                                                        d="m3.5,1.5l5,5.5l-5,5.5"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </nav>
                                    <div class="menu__list">
                                        <section class="menu__items-wrapper">
                                            <div class="menu__items">
                                                <div class="dish-category-header" id="menu__category-id-34505">
                                                    <div class="dish-category-title-wrapper">
                                                        <h2 class="dish-category-title">Starters</h2>
                                                    </div>
                                                </div>
                                                <ul class="dish-list">
                                                    <li class="">
                                                        <div class="dish-card h-product menu__item" data-menu-category="Starters" data-variation-id="355915" data-product-id="355088"
                                                            ontouchstart="">
                                                            <div class="dish-info">
                                                                <h3 class="dish-name fn p-name">
                                                                    <span>
                                                                        Hot Spinach and Artichoke Dip
                                                                    </span>
                                                                </h3>
                                                                <p class="dish-description e-description">
                                                                    Creamy spinach, artichoke hearts, and Italian cheeses, served with crispy tortilla chips and fresh cut salsa. (990 Cals.
                                                                    Serves 2)
                                                                </p>
                                                            </div>
                                                            <footer class="action-bar">
                                                                <span class="price p-price">
                                                                    $13.50
                                                                </span>
                                                                <button class="button js-ripple">Add
                                                                    <i class="ripple"></i>
                                                                </button>
                                                            </footer>
                                                        </div>
                                                    </li>
                                                    <li class="">
                                                        <div class="dish-card h-product menu__item" data-menu-category="Starters" data-variation-id="355915" data-product-id="355088"
                                                            ontouchstart="">
                                                            <div class="dish-info">
                                                                <h3 class="dish-name fn p-name">
                                                                    <span>
                                                                        Hot Spinach and Artichoke Dip
                                                                    </span>
                                                                </h3>
                                                                <p class="dish-description e-description">
                                                                    Creamy spinach, artichoke hearts, and Italian cheeses, served with crispy tortilla chips and fresh cut salsa. (990 Cals.
                                                                    Serves 2)
                                                                </p>
                                                            </div>
                                                            <footer class="action-bar">
                                                                <span class="price p-price">
                                                                    $13.50
                                                                </span>
                                                                <button class="button js-ripple">Add
                                                                    <i class="ripple"></i>
                                                                </button>
                                                            </footer>
                                                        </div>
                                                    </li>
                                                    <li class="">
                                                        <div class="dish-card h-product menu__item" data-menu-category="Starters" data-variation-id="355915" data-product-id="355088"
                                                            ontouchstart="">
                                                            <div class="dish-info">
                                                                <h3 class="dish-name fn p-name">
                                                                    <span>
                                                                        Hot Spinach and Artichoke Dip
                                                                    </span>
                                                                </h3>
                                                                <p class="dish-description e-description">
                                                                    Creamy spinach, artichoke hearts, and Italian cheeses, served with crispy tortilla chips and fresh cut salsa. (990 Cals.
                                                                    Serves 2)
                                                                </p>
                                                            </div>
                                                            <footer class="action-bar">
                                                                <span class="price p-price">
                                                                    $13.50
                                                                </span>
                                                                <button class="button js-ripple">Add
                                                                    <i class="ripple"></i>
                                                                </button>
                                                            </footer>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="dish-category-header" id="menu__category-id-34506">
                                                    <div class="dish-category-title-wrapper">
                                                        <h2 class="dish-category-title">Starters</h2>
                                                    </div>
                                                </div>
                                                <ul class="dish-list">
                                                    <li class="">
                                                        <div class="dish-card h-product menu__item" data-menu-category="Starters" data-variation-id="355915" data-product-id="355088"
                                                            ontouchstart="">
                                                            <div class="dish-info">
                                                                <h3 class="dish-name fn p-name">
                                                                    <span>
                                                                        Hot Spinach and Artichoke Dip
                                                                    </span>
                                                                </h3>
                                                                <p class="dish-description e-description">
                                                                    Creamy spinach, artichoke hearts, and Italian cheeses, served with crispy tortilla chips and fresh cut salsa. (990 Cals.
                                                                    Serves 2)
                                                                </p>
                                                            </div>
                                                            <footer class="action-bar">
                                                                <span class="price p-price">
                                                                    $13.50
                                                                </span>
                                                                <button class="button js-ripple">Add
                                                                    <i class="ripple"></i>
                                                                </button>
                                                            </footer>
                                                        </div>
                                                    </li>
                                                    <li class="">
                                                        <div class="dish-card h-product menu__item" data-menu-category="Starters" data-variation-id="355915" data-product-id="355088"
                                                            ontouchstart="">
                                                            <div class="dish-info">
                                                                <h3 class="dish-name fn p-name">
                                                                    <span>
                                                                        Hot Spinach and Artichoke Dip
                                                                    </span>
                                                                </h3>
                                                                <p class="dish-description e-description">
                                                                    Creamy spinach, artichoke hearts, and Italian cheeses, served with crispy tortilla chips and fresh cut salsa. (990 Cals.
                                                                    Serves 2)
                                                                </p>
                                                            </div>
                                                            <footer class="action-bar">
                                                                <span class="price p-price">
                                                                    $13.50
                                                                </span>
                                                                <button class="button js-ripple">Add
                                                                    <i class="ripple"></i>
                                                                </button>
                                                            </footer>
                                                        </div>
                                                    </li>
                                                    <li class="">
                                                        <div class="dish-card h-product menu__item" data-menu-category="Starters" data-variation-id="355915" data-product-id="355088"
                                                            ontouchstart="">
                                                            <div class="dish-info">
                                                                <h3 class="dish-name fn p-name">
                                                                    <span>
                                                                        Hot Spinach and Artichoke Dip
                                                                    </span>
                                                                </h3>
                                                                <p class="dish-description e-description">
                                                                    Creamy spinach, artichoke hearts, and Italian cheeses, served with crispy tortilla chips and fresh cut salsa. (990 Cals.
                                                                    Serves 2)
                                                                </p>
                                                            </div>
                                                            <footer class="action-bar">
                                                                <span class="price p-price">
                                                                    $13.50
                                                                </span>
                                                                <button class="button js-ripple">Add
                                                                    <i class="ripple"></i>
                                                                </button>
                                                            </footer>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="dish-category-header" id="menu__category-id-34511">
                                                    <div class="dish-category-title-wrapper">
                                                        <h2 class="dish-category-title">Starters</h2>
                                                    </div>
                                                </div>
                                                <ul class="dish-list">
                                                    <li class="">
                                                        <div class="dish-card h-product menu__item" data-menu-category="Starters" data-variation-id="355915" data-product-id="355088"
                                                            ontouchstart="">
                                                            <div class="dish-info">
                                                                <h3 class="dish-name fn p-name">
                                                                    <span>
                                                                        Hot Spinach and Artichoke Dip
                                                                    </span>
                                                                </h3>
                                                                <p class="dish-description e-description">
                                                                    Creamy spinach, artichoke hearts, and Italian cheeses, served with crispy tortilla chips and fresh cut salsa. (990 Cals.
                                                                    Serves 2)
                                                                </p>
                                                            </div>
                                                            <footer class="action-bar">
                                                                <span class="price p-price">
                                                                    $13.50
                                                                </span>
                                                                <button class="button js-ripple">Add
                                                                    <i class="ripple"></i>
                                                                </button>
                                                            </footer>
                                                        </div>
                                                    </li>
                                                    <li class="">
                                                        <div class="dish-card h-product menu__item" data-menu-category="Starters" data-variation-id="355915" data-product-id="355088"
                                                            ontouchstart="">
                                                            <div class="dish-info">
                                                                <h3 class="dish-name fn p-name">
                                                                    <span>
                                                                        Hot Spinach and Artichoke Dip
                                                                    </span>
                                                                </h3>
                                                                <p class="dish-description e-description">
                                                                    Creamy spinach, artichoke hearts, and Italian cheeses, served with crispy tortilla chips and fresh cut salsa. (990 Cals.
                                                                    Serves 2)
                                                                </p>
                                                            </div>
                                                            <footer class="action-bar">
                                                                <span class="price p-price">
                                                                    $13.50
                                                                </span>
                                                                <button class="button js-ripple">Add
                                                                    <i class="ripple"></i>
                                                                </button>
                                                            </footer>
                                                        </div>
                                                    </li>
                                                    <li class="">
                                                        <div class="dish-card h-product menu__item" data-menu-category="Starters" data-variation-id="355915" data-product-id="355088"
                                                            ontouchstart="">
                                                            <div class="dish-info">
                                                                <h3 class="dish-name fn p-name">
                                                                    <span>
                                                                        Hot Spinach and Artichoke Dip
                                                                    </span>
                                                                </h3>
                                                                <p class="dish-description e-description">
                                                                    Creamy spinach, artichoke hearts, and Italian cheeses, served with crispy tortilla chips and fresh cut salsa. (990 Cals.
                                                                    Serves 2)
                                                                </p>
                                                            </div>
                                                            <footer class="action-bar">
                                                                <span class="price p-price">
                                                                    $13.50
                                                                </span>
                                                                <button class="button js-ripple">Add
                                                                    <i class="ripple"></i>
                                                                </button>
                                                            </footer>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="sticky-cart-button-container">
                                                <button class="sticky-cart-button hide loading">
                                                    <span class="cart-icon">
                                                        <a class="vendor-cart-icon ">
                                                            <svg width="18px" height="26px" viewBox="0 0 18 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <defs>
                                                                    <rect id="path-1" x="0" y="4" width="18" height="22"></rect>
                                                                    <mask id="mask-2" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="0" y="0" width="18" height="22" fill="white">
                                                                        <use xlink:href="#path-1"></use>
                                                                    </mask>
                                                                    <rect id="path-3" x="0" y="19" width="18" height="7"></rect>
                                                                    <mask id="mask-4" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="0" y="0" width="18" height="7" fill="white">
                                                                        <use xlink:href="#path-3"></use>
                                                                    </mask>
                                                                </defs>
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <g class="svg-stroke-container" transform="translate(-23.000000, -19.000000)" stroke="#D70F64">
                                                                        <g transform="translate(1.000000, 0.000000)">
                                                                            <g transform="translate(22.000000, 19.000000)">
                                                                                <use id="Rectangle-2" mask="url(#mask-2)" stroke-width="2" xlink:href="#path-1"></use>
                                                                                <path d="M4.5,6.5 L4.5,1.49077797 C4.5,0.943586406 4.9463114,0.5 5.49754465,0.5 L12.5024554,0.5 C13.053384,0.5 13.5,0.95097518 13.5,1.49077797 L13.5,6.5"
                                                                                    id="Path-3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                                <use id="Rectangle-5" mask="url(#mask-4)" stroke-width="2" xlink:href="#path-3"></use>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                            <span class="products-count hidden">0</span>
                                                        </a>
                                                    </span>
                                                    <span>View cart</span>
                                                    <span class="products-value">$0.00</span>
                                                    <span class="calcul-animation">
                                                        <span class="dot"></span>
                                                        <span class="dot"></span>
                                                        <span class="dot"></span>
                                                    </span>
                                                </button>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="menu__bottom-info">
                                        <div class="menu__footer">
                                            {{--
                                            <div class="modal fade menu__allergy-modal" id="allergyModal" tabindex="-1"
                                                role="dialog" aria-labelledby="allergyModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <h4 class="modal__h4 text-center">Allergy Information</h4>
                                                        <div class="modal-body clearfix">
                                                            <ul class="menu__allergy-modal__items">
                                                                <li class="menu__allergy-modal__item">
                                                                    <i class="menu__allergy-modal__item-icon icon-foodinfo-eggs"></i>
                                                                    <b class="menu__allergy-modal__item-number">4</b>
                                                                    <span class="menu__allergy-modal__item-text">Contains eggs</span>
                                                                </li>
                                                                <li class="menu__allergy-modal__item">
                                                                    <i class="menu__allergy-modal__item-icon icon-foodinfo-milk"></i>
                                                                    <b class="menu__allergy-modal__item-number">5</b>
                                                                    <span class="menu__allergy-modal__item-text">Contains milk</span>
                                                                </li>
                                                            </ul>
                                                            <ul class="menu__allergy-modal__items">
                                                                <li class="menu__allergy-modal__item">
                                                                    <i class="menu__allergy-modal__item-icon icon-foodinfo-hot3"></i>
                                                                    <b class="menu__allergy-modal__item-number">14</b>
                                                                    <span class="menu__allergy-modal__item-text">Very spicy</span>
                                                                </li>
                                                                <li class="menu__allergy-modal__item">
                                                                    <i class="menu__allergy-modal__item-icon icon-foodinfo-vegetarian"></i>
                                                                    <b class="menu__allergy-modal__item-number">15</b>
                                                                    <span class="menu__allergy-modal__item-text">Vegetarian</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="modal-close-button" data-dismiss="modal"></div>
                                                    </div>
                                                </div>
                                            </div> temporary something. make modals with vue js --}}
                                            <div class="menu__icon-legend full-container">
                                                <i class="menu__icon-legend__info-icon icon-info-circled"></i>
                                                <a class="menu__icon-legend__link">Allergy Information</a>
                                            </div>
                                            <div class="menu-bottom-info-restaurant-description full-container"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <aside class="cart-column">
                        <div id="cart" class="" data-is-active="1" data-is-vendor-flood-feature-closed="">
                            <div class="desktop-cart mobile-cart__hidden sticking-on-top">
                                <div class="b-lazy aspect-ratio-40-11 hero-banner" style="background-image: url(../img/cart.jpg);"></div>
                                <div class="desktop-cart__hero__title">Your cart
                                    <div class="modal-close-button mobile-close__cart"></div>
                                </div>
                            </div>
                            <div class="delivery-toggle"></div>
                            <div class="vendor__geocoding__tool-box"></div>
                            <div class="cart__time-picker">
                                <div class="desktop-cart__time">
                                    <div class="desktop-cart__time__field-date select-box changed">
                                        <div class="btn-group bootstrap-select">
                                            <button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown"
                                                role="button" data-id="order-delivery-date" title="Tue, Mar 27">
                                                <span class="filter-option pull-left">Tue, Mar 27</span>&nbsp;
                                                <span class="bs-caret">
                                                    <span class="caret"></span>
                                                </span>
                                            </button>
                                            <div class="dropdown-menu open" role="combobox">
                                                <ul class="dropdown-menu inner" role="listbox" aria-expanded="false">
                                                    <li data-original-index="0" class="disabled">
                                                        <a tabindex="-1" class="" data-tokens="null" role="option" href="#" aria-disabled="true"
                                                            aria-selected="false">
                                                            <span class="text"></span>
                                                            <span class="glyphicon glyphicon-ok check-mark"></span>
                                                        </a>
                                                    </li>
                                                    <li data-original-index="1" class="selected">
                                                        <a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false"
                                                            aria-selected="true">
                                                            <span class="text">Tue, Mar 27</span>
                                                            <span class="glyphicon glyphicon-ok check-mark"></span>
                                                        </a>
                                                    </li>
                                                    <li data-original-index="2">
                                                        <a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false"
                                                            aria-selected="false">
                                                            <span class="text">Wed, Mar 28</span>
                                                            <span class="glyphicon glyphicon-ok check-mark"></span>
                                                        </a>
                                                    </li>
                                                    <li data-original-index="3">
                                                        <a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false"
                                                            aria-selected="false">
                                                            <span class="text">Thu, Mar 29</span>
                                                            <span class="glyphicon glyphicon-ok check-mark"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <select id="order-delivery-date" class="" tabindex="-98">
                                                <option value="" disabled=""></option>
                                                <option value="2018-03-27">Tue, Mar 27</option>
                                                <option value="2018-03-28">Wed, Mar 28</option>
                                                <option value="2018-03-29">Thu, Mar 29</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="desktop-cart__time__field-time select-box changed">
                                        <div class="btn-group bootstrap-select">
                                            <button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown"
                                                role="button" data-id="order-delivery-time" title="Now">
                                                <span class="filter-option pull-left">Now</span>&nbsp;
                                                <span class="bs-caret">
                                                    <span class="caret"></span>
                                                </span>
                                            </button>
                                            <div class="dropdown-menu open" role="combobox">
                                                <ul class="dropdown-menu inner" role="listbox" aria-expanded="false">
                                                    <li data-original-index="0" class="disabled">
                                                        <a tabindex="-1" class="" data-tokens="null" role="option" href="#" aria-disabled="true"
                                                            aria-selected="false">
                                                            <span class="text"></span>
                                                            <span class="glyphicon glyphicon-ok check-mark"></span>
                                                        </a>
                                                    </li>
                                                    <li data-original-index="1" class="selected">
                                                        <a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false"
                                                            aria-selected="true">
                                                            <span class="text">Now</span>
                                                            <span class="glyphicon glyphicon-ok check-mark"></span>
                                                        </a>
                                                    </li>
                                                    <li data-original-index="2">
                                                        <a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false"
                                                            aria-selected="false">
                                                            <span class="text">7:00 PM</span>
                                                            <span class="glyphicon glyphicon-ok check-mark"></span>
                                                        </a>
                                                    </li>
                                                    <li data-original-index="3">
                                                        <a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false"
                                                            aria-selected="false">
                                                            <span class="text">7:15 PM</span>
                                                            <span class="glyphicon glyphicon-ok check-mark"></span>
                                                        </a>
                                                    </li>
                                                    <li data-original-index="4">
                                                        <a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false"
                                                            aria-selected="false">
                                                            <span class="text">7:30 PM</span>
                                                            <span class="glyphicon glyphicon-ok check-mark"></span>
                                                        </a>
                                                    </li>
                                                    <li data-original-index="5">
                                                        <a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false"
                                                            aria-selected="false">
                                                            <span class="text">7:45 PM</span>
                                                            <span class="glyphicon glyphicon-ok check-mark"></span>
                                                        </a>
                                                    </li>
                                                    <li data-original-index="6">
                                                        <a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false"
                                                            aria-selected="false">
                                                            <span class="text">8:00 PM</span>
                                                            <span class="glyphicon glyphicon-ok check-mark"></span>
                                                        </a>
                                                    </li>
                                                    <li data-original-index="7">
                                                        <a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false"
                                                            aria-selected="false">
                                                            <span class="text">8:15 PM</span>
                                                            <span class="glyphicon glyphicon-ok check-mark"></span>
                                                        </a>
                                                    </li>
                                                    <li data-original-index="8">
                                                        <a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false"
                                                            aria-selected="false">
                                                            <span class="text">8:30 PM</span>
                                                            <span class="glyphicon glyphicon-ok check-mark"></span>
                                                        </a>
                                                    </li>
                                                    <li data-original-index="9">
                                                        <a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false"
                                                            aria-selected="false">
                                                            <span class="text">8:45 PM</span>
                                                            <span class="glyphicon glyphicon-ok check-mark"></span>
                                                        </a>
                                                    </li>
                                                    <li data-original-index="10">
                                                        <a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false"
                                                            aria-selected="false">
                                                            <span class="text">9:00 PM</span>
                                                            <span class="glyphicon glyphicon-ok check-mark"></span>
                                                        </a>
                                                    </li>
                                                    <li data-original-index="11">
                                                        <a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false"
                                                            aria-selected="false">
                                                            <span class="text">9:15 PM</span>
                                                            <span class="glyphicon glyphicon-ok check-mark"></span>
                                                        </a>
                                                    </li>
                                                    <li data-original-index="12">
                                                        <a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false"
                                                            aria-selected="false">
                                                            <span class="text">9:30 PM</span>
                                                            <span class="glyphicon glyphicon-ok check-mark"></span>
                                                        </a>
                                                    </li>
                                                    <li data-original-index="13">
                                                        <a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false"
                                                            aria-selected="false">
                                                            <span class="text">9:45 PM</span>
                                                            <span class="glyphicon glyphicon-ok check-mark"></span>
                                                        </a>
                                                    </li>
                                                    <li data-original-index="14">
                                                        <a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false"
                                                            aria-selected="false">
                                                            <span class="text">10:00 PM</span>
                                                            <span class="glyphicon glyphicon-ok check-mark"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <select id="order-delivery-time" data-tooltip-msg="You've been gone for some time so we had to update the delivery time. Please check if that is ok for you"
                                                class="" tabindex="-98">
                                                <option value="" disabled="disabled"></option>
                                                <option value="now">Now</option>
                                                <option value="19:00">7:00 PM</option>
                                                <option value="19:15">7:15 PM</option>
                                                <option value="19:30">7:30 PM</option>
                                                <option value="19:45">7:45 PM</option>
                                                <option value="20:00">8:00 PM</option>
                                                <option value="20:15">8:15 PM</option>
                                                <option value="20:30">8:30 PM</option>
                                                <option value="20:45">8:45 PM</option>
                                                <option value="21:00">9:00 PM</option>
                                                <option value="21:15">9:15 PM</option>
                                                <option value="21:30">9:30 PM</option>
                                                <option value="21:45">9:45 PM</option>
                                                <option value="22:00">10:00 PM</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <p class="desktop-cart__delivery-time hide" style="display: none;">
                                <i class="icon-delivery"></i>
                                <span class="desktop-cart__delivery-time__text" data-delivery-time-suffix="min">
                                </span>
                            </p>
                            <div class="desktop-cart-container">    <!-- style="position: fixed; top: 128px; max-height: 793px; width: 336px; left: 790px; -->
                                <div class="desktop-cart__header"> 
                                    <h3 class="desktop-cart__title">
                                        Your order
                                        <span>Milestones - The Queensway</span>
                                    </h3>
                                    <p class="desktop-cart_order__message">
                                        You haven’t added anything to your cart yet! Start adding your favourite dishes
                                    </p>
                                </div>
                                <!-- Actual Cart -->
                                <h3 class="js-group-title desktop-cart__group-title hide">
                                    Your group
                                </h3>
                                <div class="desktop-cart__order">
                                    <div class="checkout__summary" data-name-you="You" style="max-height: 512px;">
                                        <div class="badge-pcart pcart is-single" style="display: none;">
                                            <div class="pcart-header">
                                                <div class="pcart-title">
                                                    You
                                                    <span class="badge-collapse-btn pcart-arrow icon-up-open-big"></span>
                                                </div>
                                                <div class="pcart-right">
                                                    <span class="badge-btn-container action-btn-container">
                                                        <a class="badge-more-btn pcart-more-btn" data-clear="Clear Basket" data-remove="Remove user">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="2" height="10" viewBox="0 0 2 10">
                                                                <g fill="#D70F64" fill-rule="evenodd">
                                                                    <circle cx="1" cy="1" r="1"></circle>
                                                                    <circle cx="1" cy="1" r="1" transform="translate(0 4)"></circle>
                                                                    <circle cx="1" cy="1" r="1" transform="translate(0 8)"></circle>
                                                                </g>
                                                            </svg>
                                                        </a>
                                                    </span>
                                                    <span class="pcart-price">
                                                        $0.00
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="badge-cart-body pcart-body">

                                                <table class="summary__items desktop-cart__products" style="display: none;">
                                                </table>
                                            </div>
                                            <div class="pcart-drop-down tooltip bottom align-right hide">
                                                <div class="tooltip-arrow"></div>
                                                <div class="tooltip-inner">

                                                    <div class="drop-down-btn" data-action="clear">
                                                        Clear Basket
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="desktop-cart__footer">
                                    <p class="desktop-cart__footer__message">
                                        You can redeem your voucher in the checkout
                                    </p>
                                    <div class="desktop-cart__order__subtotal-container">
                                        <div class="desktop-cart__order__subtotal">
                                            Subtotal
                                            <span class="desktop-cart__order__subtotal-price">$0.00</span>
                                        </div>

                                        <div class="desktop-cart__order__min-order hide">
                                            Minimum order
                                            <span class="desktop-cart__order__min-order-value">$15.00</span>
                                        </div>

                                        <div class="desktop-cart__order__min-diff-order hide">
                                            Difference to minimum
                                            <span class="desktop-cart__order__min-order-value">$0.00</span>
                                        </div>


                                        <div class="desktop-cart__order__delivery">
                                            Delivery fee
                                            <span class="desktop-cart__order__delivery-price">
                                                $0.00
                                            </span>
                                        </div>


                                        <div class="desktop-cart__order__service-fee-total">
                                            + Service Fee
                                            <span class="desktop-cart__order__service-fee-total-value">
                                                $0.00
                                            </span>
                                        </div>

                                        <div class="desktop-cart__order__container-charge hide">
                                            + Plastic Bag Charges
                                            <span class="desktop-cart__order__container-price">
                                                $0.00
                                            </span>
                                        </div>

                                        <div class="desktop-cart__order__allowance hide">
                                            Allowance
                                            <span class="desktop-cart__order__allowance-price">
                                                $0.00
                                            </span>
                                        </div>

                                        <div class="desktop-cart__order__charity hide">
                                            Charity
                                            <span class="desktop-cart__order__charity-price">
                                                $0.00
                                            </span>

                                            <div class="charity__button-container">

                                                <button class="button-ghost charity__select-button" data-tip-value="1.0">Donate 1€ to Progetto Arca</button>
                                            </div>
                                        </div>

                                        <div class="desktop-cart__order__vat">
                                            Tax

                                            <span class="desktop-cart__order__vat-price desktop-cart__order__vat-total-without-difference">$0.00</span>
                                            <span class="desktop-cart__order__vat-price desktop-cart__order__vat-total">$0.00</span>
                                        </div>


                                        <div class="desktop-cart__rider-tip hide">
                                            <span class="desktop-cart__order__rider-tip-text">
                                                Driver's Tip
                                            </span>
                                            <span class="desktop-cart__order__rider-tip-price">$0.00</span>

                                            <div class="cart__rider-tip__container hide">
                                                <!-- rider tip selection -->
                                            </div>
                                        </div>

                                        <div class="desktop-cart__order-total-container">
                                            <div class="desktop-cart__order__total">
                                                Total
                                                <em class="desktop-cart__order__total-note">(Incl. Tax)</em>
                                                <span class="desktop-cart__order__total-price">$0.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <figure class="delivery-fee-discount-info hide" data-text-free="Add %difference% more and get a free delivery!" data-text-discount="Add %difference% more and get a %discount% discount on your delivery fee">
                                        <div class="ddfee-image">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54 54">
                                                <g>
                                                    <line class="sparks-figure" x1="41" y1="4.117" x2="35.499" y2="13.646" stroke="#d70f64" style="fill: none;stroke-linecap: round;stroke-miterlimit: 10"></line>
                                                    <line class="sparks-figure" x1="50.883" y1="14" x2="41.361" y2="19.498" stroke="#d70f64" style="fill: none;stroke-linecap: round;stroke-miterlimit: 10"></line>
                                                    <line class="sparks-figure" x1="54.5" y1="27.5" x2="43.502" y2="27.5" stroke="#d70f64" style="fill: none;stroke-linecap: round;stroke-miterlimit: 10"></line>
                                                    <line class="sparks-figure" x1="50.883" y1="41" x2="41.358" y2="35.501" stroke="#d70f64" style="fill: none;stroke-linecap: round;stroke-miterlimit: 10"></line>
                                                    <line class="sparks-figure" x1="41" y1="50.883" x2="35.501" y2="41.358" stroke="#d70f64" style="fill: none;stroke-linecap: round;stroke-miterlimit: 10"></line>
                                                    <line class="sparks-figure" x1="27.5" y1="54.5" x2="27.5" y2="43.497" stroke="#d70f64" style="fill: none;stroke-linecap: round;stroke-miterlimit: 10"></line>
                                                    <line class="sparks-figure" x1="14" y1="50.883" x2="19.5" y2="41.357" stroke="#d70f64" style="fill: none;stroke-linecap: round;stroke-miterlimit: 10"></line>
                                                    <line class="sparks-figure" x1="4.117" y1="41" x2="13.643" y2="35.5" stroke="#d70f64" style="fill: none;stroke-linecap: round;stroke-miterlimit: 10"></line>
                                                    <line class="sparks-figure" x1="0.5" y1="27.5" x2="11.498" y2="27.5" stroke="#d70f64" style="fill: none;stroke-linecap: round;stroke-miterlimit: 10"></line>
                                                    <line class="sparks-figure" x1="4.117" y1="14" x2="13.635" y2="19.495" stroke="#d70f64" style="fill: none;stroke-linecap: round;stroke-miterlimit: 10"></line>
                                                    <line class="sparks-figure" x1="14" y1="4.117" x2="19.499" y2="13.642" stroke="#d70f64" style="fill: none;stroke-linecap: round;stroke-miterlimit: 10"></line>
                                                    <line class="sparks-figure" x1="27.5" y1="0.5" x2="27.5" y2="11.497" stroke="#d70f64" style="fill: none;stroke-linecap: round;stroke-miterlimit: 10"></line>
                                                </g>
                                                <g transform="translate(12.5 12)" fill="none" fill-rule="evenodd" stroke="#D70F64">
                                                    <g class="saving-group">
                                                        <path d="M28,5 C28,7.485 21.732,9.5 14,9.5 C6.268,9.5 6.89226454e-12,7.485 6.89226454e-12,5 C6.89226454e-12,2.515 6.268,0.5 14,0.5 C21.732,0.5 28,2.515 28,5 Z"></path>
                                                        <path d="M28 4.95963452C28 6.32987817 28 7.84333333 28 9.5 28 11.985 21.732 14 14 14 6.268 14 .89226454e-12 11.985.89226454e-12 9.5.89226454e-12 7.84333333.59484302e-12 6.32987817 0 4.95963452M4 8.5L4 13M9 9.5L9 14M14 9.5L14 14M23.5 8.5L23.5 13M19 9.5L19 14"></path>
                                                        <g transform="translate(3 8)">
                                                            <path d="M24.8612631,2.17128754 C26.9537544,3.32997666 28,4.27288081 28,5 C28,7.485 21.732,9.5 14,9.5 C6.268,9.5 6.89226454e-12,7.485 6.89226454e-12,5 C6.89226454e-12,4.80513882 0.0385413428,4.61316763 0.113307702,4.42483138"></path>
                                                            <path d="M28 4.95963452C28 6.32987817 28 7.84333333 28 9.5 28 11.985 21.732 14 14 14 6.268 14 .89226454e-12 11.985.89226454e-12 9.5.89226454e-12 7.84333333.59484302e-12 6.32987817.4233807e-27 4.95963452M4 8.5L4 13M9 9.5L9 14M14 9.5L14 14M24 8.5L24 13M19 9.5L19 14"></path>
                                                        </g>
                                                        <g transform="translate(2 16)">
                                                            <path d="M27.164977,3.67297809 C27.721659,4.22595157 28,4.66829221 28,5 C28,7.485 21.732,9.5 14,9.5 C6.268,9.5 6.89226454e-12,7.485 6.89226454e-12,5 C6.89226454e-12,4.233839 0.595821663,3.51235511 1.64667105,2.88082866"></path>
                                                            <path d="M28 4.95963452C28 6.32987817 28 7.84333333 28 9.5 28 11.985 21.732 14 14 14 6.268 14 .89226454e-12 11.985.89226454e-12 9.5.89226454e-12 7.84333333.59484302e-12 6.32987817.4233807e-27 4.95963452M4 8L4 12.5M9 9L9 13.5M14 10L14 14.5M24 8L24 12.5M19 9L19 13.5"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <figcaption class="ddfee-text"></figcaption>
                                    </figure>
                                    <div class="desktop-cart__order__checkout_button_container">
                                        <button class="button full btn-below-minimum-amount button--disabled btn-checkout disabled"
                                            data-vendor-code="s0vh">Checkout</button>
                                        <div class="error-message full desktop-cart__error__below-minimum-amount hide"
                                            id="">
                                            You need to add more items to be able to checkout
                                        </div>
                                    </div>
                                </div>


                                <div class="charity-banner hide"></div>
                            </div>
                        </div>
                </div>
                </aside>


        </div>
        </main>
    </div>
</div>
</div>
@endsection