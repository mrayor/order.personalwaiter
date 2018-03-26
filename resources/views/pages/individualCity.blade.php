@extends('layouts.master') 

@section('title', 'Individual City') 

@section('content')
    <div class="country-ca home">
        <div class="page-wrapper ">
            <div class="content-wrapper ">
                <main>
                    <div class="hero-section hero-banner-wrapper">
                        <div class="hero-section-image b-lazy b-loaded" style="background-image: url(../img/home-page.jpg);"></div>
                        <div class="hero-section-content">
                            <div class="hero-section-text">
                                <h1>Food Delivery from
                                    <strong>Abeokuta</strong>’s Best Restaurants</h1>
                                <!--display location dynamically -->
                                <p>The meals you love, delivered with care</p>
                            </div>
                            <div class="hero-section-form restaurants__search-bar">
                                <form method="GET" class="location-form restaurants-search-form  city-page" id="delivery-information-postal-index-form">
                                    <div class="address-search-container">
                                        <div class="input-box validation-wrapper big">
                                            <input type="text" class="restaurants-search-form__input restaurants__location__input " id="delivery-information-postal-index"
                                                name="" placeholder=" " value="" />
                                            <div class="address-suggestions"></div>
                                            <label for="delivery-information-postal-index">Enter your street address</label>
                                        </div>
                                    </div>
                                    <div class="button-container ">
                                        <button class="button js-restaurants-search-submit restaurants-search-form__button">Find restaurants near you</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="marketing-banner">
                        <div class="b-lazy marketing-banner-image b-lazy b-loaded" style="background-image: url(../img/marketing-banner.jpg);"> </div>
                        <div class="marketing-banner-content">
                            <h3 class="marketing-banner-title">Keep an eye out for the
                                <span style="color:#cc3535; font-weight: bold">red tags</span>!</h3>
                            <p class="marketing-banner-text">Great deals ahead!</p>
                        </div>
                    </div>
                    <div class="restaurants-container js-restaurants-container">
                        <!--put total number of available restaurants-->
                        <div class="restaurants__list">
                            <section class="vendor-list-section  ">
                                <span class="title-flat">Popular restaurants</span>
                                <ul class="vendor-list ">
                                    <li>
                                        <a href="/individualRestaurant" class="hreview-aggregate url">
                                            <figure class="vendor-tile  item">
                                                <picture>
                                                    <div class="vendor-picture b-lazy b-loaded" style="background-image:url(../img/listings.jpg)"></div>
                                                </picture>
                                                <figcaption class="vendor-info">
                                                    <span class="headline">
                                                        <span class="name fn">Restaurant - Name</span>
                                                    </span>
                                                    <ul class="categories summary">
                                                        <li>
                                                            $ </li>
                                                        <li data-id=19>Fingerfood</li>
                                                        <li data-id=51>Local</li>
                                                        <li data-id=113>Chinese</li>
                                                        <li data-id=58>Vegetarian</li>
                                                        <li data-id=35>Sandwiches</li>
                                                    </ul>
                                                </figcaption>
                                                <span class="tag">NEW</span>
                                            </figure>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="hreview-aggregate url">
                                            <figure class="vendor-tile  item">
                                                <picture>
                                                    <div class="vendor-picture b-lazy b-loaded" style="background-image:url(../img/listings.jpg)"></div>
                                                </picture>
                                                <figcaption class="vendor-info">
                                                    <span class="headline">
                                                        <span class="name fn">Restaurant - Name</span>
                                                    </span>
                                                    <ul class="categories summary">
                                                        <li>
                                                            $$ </li>
                                                        <li data-id=19>Fingerfood</li>
                                                        <li data-id=51>Local</li>
                                                        <li data-id=113>Chinese</li>
                                                        <li data-id=58>Vegetarian</li>
                                                        <li data-id=35>Sandwiches</li>
                                                    </ul>
                                                </figcaption>
                                                {{--
                                                <span class="tag">NEW</span> --}}
                                            </figure>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="hreview-aggregate url">
                                            <figure class="vendor-tile  item">
                                                <picture>
                                                    <div class="vendor-picture b-lazy b-loaded" style="background-image:url(../img/listings.jpg)"></div>
                                                </picture>
                                                <figcaption class="vendor-info">
                                                    <span class="headline">
                                                        <span class="name fn">Restaurant - Name</span>
                                                    </span>
                                                    <ul class="categories summary">
                                                        <li>
                                                            $ </li>
                                                        <li data-id=19>Fingerfood</li>
                                                        <li data-id=51>Local</li>
                                                        <li data-id=113>Chinese</li>
                                                        <li data-id=58>Vegetarian</li>
                                                        <li data-id=35>Sandwiches</li>
                                                    </ul>
                                                </figcaption>
                                                {{--
                                                <span class="tag">NEW</span> --}}
                                            </figure>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="hreview-aggregate url">
                                            <figure class="vendor-tile  item">
                                                <picture>
                                                    <div class="vendor-picture b-lazy b-loaded" style="background-image:url(../img/listings.jpg)"></div>
                                                </picture>
                                                <figcaption class="vendor-info">
                                                    <span class="headline">
                                                        <span class="name fn">Restaurant - Name</span>
                                                    </span>
                                                    <ul class="categories summary">
                                                        <li>
                                                            $$ </li>
                                                        <li data-id=19>Fingerfood</li>
                                                        <li data-id=51>Local</li>
                                                        <li data-id=113>Chinese</li>
                                                        <li data-id=58>Vegetarian</li>
                                                        <li data-id=35>Sandwiches</li>
                                                    </ul>
                                                </figcaption>
                                                <span class="tag">NEW</span>
                                            </figure>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="hreview-aggregate url">
                                            <figure class="vendor-tile  item">
                                                <picture>
                                                    <div class="vendor-picture b-lazy b-loaded" style="background-image:url(../img/listings.jpg)"></div>
                                                </picture>
                                                <figcaption class="vendor-info">
                                                    <span class="headline">
                                                        <span class="name fn">Restaurant - Name</span>
                                                    </span>
                                                    <ul class="categories summary">
                                                        <li>
                                                            $ </li>
                                                        <li data-id=19>Fingerfood</li>
                                                        <li data-id=51>Local</li>
                                                        <li data-id=113>Chinese</li>
                                                        <li data-id=58>Vegetarian</li>
                                                        <li data-id=35>Sandwiches</li>
                                                    </ul>
                                                </figcaption>
                                                {{--
                                                <span class="tag">NEW</span> --}}
                                            </figure>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="hreview-aggregate url">
                                            <figure class="vendor-tile  item">
                                                <picture>
                                                    <div class="vendor-picture b-lazy b-loaded" style="background-image:url(../img/listings.jpg)"></div>
                                                </picture>
                                                <figcaption class="vendor-info">
                                                    <span class="headline">
                                                        <span class="name fn">Restaurant - Name</span>
                                                    </span>
                                                    <ul class="categories summary">
                                                        <li>
                                                            $ </li>
                                                        <li data-id=19>Fingerfood</li>
                                                        <li data-id=51>Local</li>
                                                        <li data-id=113>Chinese</li>
                                                        <li data-id=58>Vegetarian</li>
                                                        <li data-id=35>Sandwiches</li>
                                                    </ul>
                                                </figcaption>
                                                <span class="tag">NEW</span>
                                            </figure>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="hreview-aggregate url">
                                            <figure class="vendor-tile  item">
                                                <picture>
                                                    <div class="vendor-picture b-lazy b-loaded" style="background-image:url(../img/listings.jpg)"></div>
                                                </picture>
                                                <figcaption class="vendor-info">
                                                    <span class="headline">
                                                        <span class="name fn">Restaurant - Name</span>
                                                    </span>
                                                    <ul class="categories summary">
                                                        <li>
                                                            $ </li>
                                                        <li data-id=19>Fingerfood</li>
                                                        <li data-id=51>Local</li>
                                                        <li data-id=113>Chinese</li>
                                                        <li data-id=58>Vegetarian</li>
                                                        <li data-id=35>Sandwiches</li>
                                                    </ul>
                                                </figcaption>
                                                {{--
                                                <span class="tag">NEW</span> --}}
                                            </figure>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="hreview-aggregate url">
                                            <figure class="vendor-tile  item">
                                                <picture>
                                                    <div class="vendor-picture b-lazy b-loaded" style="background-image:url(../img/listings.jpg)"></div>
                                                </picture>
                                                <figcaption class="vendor-info">
                                                    <span class="headline">
                                                        <span class="name fn">Restaurant - Name</span>
                                                    </span>
                                                    <ul class="categories summary">
                                                        <li>
                                                            $$ </li>
                                                        <li data-id=19>Fingerfood</li>
                                                        <li data-id=51>Local</li>
                                                        <li data-id=113>Chinese</li>
                                                        <li data-id=58>Vegetarian</li>
                                                        <li data-id=35>Sandwiches</li>
                                                    </ul>
                                                </figcaption>
                                                {{--
                                                <span class="tag">NEW</span> --}}
                                            </figure>
                                        </a>
                                    </li>
                                </ul>
                            </section>
                        </div>
                        <div class="restaurants__city-bottom-info js-city-bottom-info">
                            <div class="restaurants__city-bottom-info__description">
                                <!--dynamically pass in information-->
                                <h2>Food Delivery in Abeokuta From Only The Best Restaurants</h2>
                                <p>Abeokuta’s food scene is characterised by its diverse range of cuisines and cultural influences.
                                    This is more than well reflected in personal waiter’s restaurant selection. You can sample
                                    the world’s flavours, try unique creations from some of the most inventive chefs, and enjoy
                                    sumptuous bakery items all in one place. We’ve carefully curated all of Abeokuta’s best spots
                                    into one convenient place. Browse our choices and discover delivery from the most memorable
                                    restaurants and eateries to enjoy today.
                                </p>
                                <h2>Why food delivery from personal waiter?</h2>
                                <p>
                                    Our team of experts have paid a visit to every restaurant you’ll find here, and checked they’re up to our strict standards
                                    - only Abeokuta’s most beloved spots are here to order from. Quickly place and pay for your
                                    order online, and find your food delivered straight to your door in no time at all.
                                </p>
                                <h2>The Best Restaurants in Abeokuta Carefully Curated</h2>
                                <p>
                                    We have carefully chosen the best restaurants in Abeokuta. All you have to do is to order your food and we will get it delivered
                                    to you in no time. You have not tested us before, this is your moment to have the
                                    <a
                                        style="color:#cc3535;">taste of awesomeness</a>.
                                </p>
                                <h2>Food for your friends or the office?</h2>
                                <p>
                                    Let us do the hard part of entertaining and bring the food right to you and your friends. Alternatively if you need to organize
                                    some catering for your co-workers, are working late, or want to treat the team, you can conveniently
                                    order straight to your office.
                                </p>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
@endsection