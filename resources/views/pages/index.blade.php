@extends('layouts.master') 

@section('title', 'Home') 

@section('content')

<div class="page-wrapper ">
    <div class="content-wrapper ">
        <main>
            <div class="hero-section hero-banner-wrapper full">
                <div class="b-lazy hero-section-image b-loaded" style="background-image: url(../img/home-page.jpg);"></div>
                <div class="hero-section-content">
                    <div class="hero-section-text">
                        <h1>It&#039;s the food you love, delivered</h1>
                        <p></p>
                    </div>
                    <div class="hero-section-form">
                        <form method="GET" class="location-form restaurants-search-form is-full-address " id="delivery-information-postal-index-form">
                            <div class="address-search-container">
                                <div class="input-box validation-wrapper big">
                                    <input type="text" class="restaurants-search-form__input restaurants__location__input " id="delivery-information-postal-index"
                                        name="" placeholder=" " value="" />
                                    <div class="address-suggestions"></div>
                                    <label for="delivery-information-postal-index">Enter your street address</label>
                                </div>
                            </div>
                            <div class="button-container two-buttons">
                                <button class="button restaurants-search-form__button js-restaurants-search-submit restaurants-search-form__button--full js-restaurants-search-button gtm-homepage-delivery-button">Delivery</button>
                                <span class="button-text-separator">or</span>
                                <button class="button restaurants-search-form__button js-restaurants-search-pickup js-restaurants-search-button gtm-homepage-pickup-button">Pick-up</button>
                                <span class="tooltip-pickup" title="Get your favourite meals to go with our new pick-up feature!"></span>
                                <button class="button js-restaurants-search-submit restaurants-search-form__button--reduced gtm-homepage-delivery-button restaurants-search-form__button">
                                    <i class="icon-right-open-big"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <section class="home-cities">
                <h2 class="section-headline full-container">Cities<span class="headline-subtitle">Find us in your city</span></h2>
                <div class="city-list-wrapper">
                    <ul class="city-list" ontouchstart="">
                        <li>
                            <a class="city-tile" href="#">
                                <figure>
                                    <picture>
                                        <div class="city-picture b-lazy" data-src="https://images.foodora.com/production/ca/city-2.jpg"></div>
                                    </picture>
                                    <figcaption class="city-info">
                                        <span class="city-name">
                                            Toronto
                                        </span>
                                        <span class="city-letter">T</span>
                                        <span class="city-cta button city__called-action js-ripple">
                                            <svg class="svg-stroke-container" xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                                                <g fill="none" fill-rule="evenodd" stroke="#FFFFFF" stroke-width="2" transform="translate(1 1)" stroke-linecap="round">
                                                    <path d="M0,8 L17.5,8" />
                                                    <polyline points="4.338 13.628 15.628 13.628 15.628 2.338" stroke-linejoin="round" transform="rotate(-45 9.983 7.983)" />
                                                </g>
                                            </svg>
                                        </span>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <li>
                            <a class="city-tile" href="/city/montreal" data-gtm-cta="findRestaurant_montreal">
                                <figure>
                                    <picture>
                                        <div class="city-picture b-lazy" data-src="https://images.foodora.com/production/ca/city-3.jpg"></div>
                                    </picture>
                                    <figcaption class="city-info">
                                        <span class="city-name">
                                            Montreal
                                        </span>
                                        <span class="city-letter">M</span>
                                        <span class="city-cta button city__called-action js-ripple">
                                            <svg class="svg-stroke-container" xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                                                <g fill="none" fill-rule="evenodd" stroke="#FFFFFF" stroke-width="2" transform="translate(1 1)" stroke-linecap="round">
                                                    <path d="M0,8 L17.5,8" />
                                                    <polyline points="4.338 13.628 15.628 13.628 15.628 2.338" stroke-linejoin="round" transform="rotate(-45 9.983 7.983)" />
                                                </g>
                                            </svg>
                                        </span>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <li>
                            <a class="city-tile" href="/city/vancouver" data-gtm-cta="findRestaurant_vancouver">
                                <figure>
                                    <picture>
                                        <div class="city-picture b-lazy" data-src="https://images.foodora.com/production/ca/city-4.jpg"></div>
                                    </picture>
                                    <figcaption class="city-info">
                                        <span class="city-name">
                                            Vancouver
                                        </span>
                                        <span class="city-letter">V</span>
                                        <span class="city-cta button city__called-action js-ripple">
                                            <svg class="svg-stroke-container" xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                                                <g fill="none" fill-rule="evenodd" stroke="#FFFFFF" stroke-width="2" transform="translate(1 1)" stroke-linecap="round">
                                                    <path d="M0,8 L17.5,8" />
                                                    <polyline points="4.338 13.628 15.628 13.628 15.628 2.338" stroke-linejoin="round" transform="rotate(-45 9.983 7.983)" />
                                                </g>
                                            </svg>
                                        </span>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <li>
                            <a class="city-tile" href="/city/quebec" data-gtm-cta="findRestaurant_quebec">
                                <figure>
                                    <picture>
                                        <div class="city-picture b-lazy" data-src="https://images.foodora.com/production/ca/city-5.jpg"></div>
                                    </picture>
                                    <figcaption class="city-info">
                                        <span class="city-name">
                                            Québec
                                        </span>
                                        <span class="city-letter">Q</span>
                                        <span class="city-cta button city__called-action js-ripple">
                                            <svg class="svg-stroke-container" xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                                                <g fill="none" fill-rule="evenodd" stroke="#FFFFFF" stroke-width="2" transform="translate(1 1)" stroke-linecap="round">
                                                    <path d="M0,8 L17.5,8" />
                                                    <polyline points="4.338 13.628 15.628 13.628 15.628 2.338" stroke-linejoin="round" transform="rotate(-45 9.983 7.983)" />
                                                </g>
                                            </svg>
                                        </span>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <li>
                            <a class="city-tile" href="/city/calgary" data-gtm-cta="findRestaurant_calgary">
                                <figure>
                                    <picture>
                                        <div class="city-picture b-lazy" data-src="https://images.foodora.com/production/ca/city-7.jpg"></div>
                                    </picture>
                                    <figcaption class="city-info">
                                        <span class="city-name">
                                            Calgary
                                        </span>
                                        <span class="city-letter">C</span>
                                        <span class="city-cta button city__called-action js-ripple">
                                            <svg class="svg-stroke-container" xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                                                <g fill="none" fill-rule="evenodd" stroke="#FFFFFF" stroke-width="2" transform="translate(1 1)" stroke-linecap="round">
                                                    <path d="M0,8 L17.5,8" />
                                                    <polyline points="4.338 13.628 15.628 13.628 15.628 2.338" stroke-linejoin="round" transform="rotate(-45 9.983 7.983)" />
                                                </g>
                                            </svg>
                                        </span>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <li>
                            <a class="city-tile" href="/city/edmonton" data-gtm-cta="findRestaurant_edmonton">
                                <figure>
                                    <picture>
                                        <div class="city-picture b-lazy" data-src="https://images.foodora.com/production/ca/city-6.jpg"></div>
                                    </picture>
                                    <figcaption class="city-info">
                                        <span class="city-name">
                                            Edmonton
                                        </span>
                                        <span class="city-letter">E</span>
                                        <span class="city-cta button city__called-action js-ripple">
                                            <svg class="svg-stroke-container" xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                                                <g fill="none" fill-rule="evenodd" stroke="#FFFFFF" stroke-width="2" transform="translate(1 1)" stroke-linecap="round">
                                                    <path d="M0,8 L17.5,8" />
                                                    <polyline points="4.338 13.628 15.628 13.628 15.628 2.338" stroke-linejoin="round" transform="rotate(-45 9.983 7.983)" />
                                                </g>
                                            </svg>
                                        </span>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>


            <section class="home-apps">

                <h2 class="section-headline full-container">
                    App
                    <span class="headline-subtitle">
                        Put us in your pocket
                    </span>
                </h2>

                <div class="home-section-apps">









                    @endsection