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

                            
                        </section>
                    </div>
                </main>
            </div>
        </div>
    </div>
@endsection