<aside class="col-md-4 col-lg-3 col-xl-2 hidden-xs hidden-sm" id="rightColumn">
    <a href="#" class="slide-column-close visible-sm visible-xs"><span class="icon icon-chevron_left"></span>back</a>
    <div class="filters-block visible-xs">
        <div class="filters-row__select">
            <label>Sort by: </label>
            <div class="select-wrapper">
                <select class="select--ys">
                    <option>Position</option>
                    <option>Price</option>
                    <option>Rating</option>
                </select>
            </div>
            <a href="#" class="sort-direction icon icon-arrow_back"></a>
        </div>
        <div class="filters-row__select">
            <label>Show: </label>
            <div class="select-wrapper">
                <select class="select--ys">
                    <option>25</option>
                    <option>50</option>
                    <option>100</option>
                </select>
            </div>
        </div>
        <a href="#" class="icon icon-arrow-down active"></a><a href="#" class="icon icon-arrow-up"></a>
    </div>
    <!-- shopping by block -->
    <div class="collapse-block open">
        <h4 class="collapse-block__title">SHOPPING BY:</h4>
        <div class="collapse-block__content">
            <ul class="filter-list">
                <li> Color: <span>White</span><a href="#" class="icon icon-clear icon-to-right"></a> </li>
                <li> Size: <span>S</span><a href="#" class="icon icon-clear icon-to-right"></a> </li>
            </ul>
            <a class="btn btn--ys btn--sm btn--light">Clear All</a>
        </div>
    </div>
    <!-- /shopping by block -->
    <!-- category block -->
    <div class="collapse-block open">
        <h4 class="collapse-block__title ">WOMENS</h4>
        <div class="collapse-block__content">
            <ul class="expander-list">
                <li class="active">
                    <a href="#">TOPS</a><span class="expander"></span>
                    <ul>
                        <li class="active"><a href="#">Blouses &amp; Shirts</a></li>
                        <li><a href="#">Dresses</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">BOTTOMS</a><span class="expander"></span>
                    <ul>
                        <li><a href="#">Trousers</a></li>
                        <li><a href="#">Jeans</a></li>
                        <li><a href="#">Leggings</a></li>
                        <li><a href="#">Jumpsuit &amp; shorts</a></li>
                        <li><a href="#">Skirts</a></li>
                        <li><a href="#">Tights</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">ACCESSORIES</a><span class="expander"></span>
                    <ul>
                        <li><a href="#">Jewellery</a></li>
                        <li><a href="#">Hats</a></li>
                        <li><a href="#">Scarves &amp; snoods</a></li>
                        <li><a href="#">Belts</a></li>
                        <li><a href="#">Bags</a></li>
                        <li><a href="#">Shoes</a></li>
                        <li><a href="#">Sunglasses</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- /category block -->
    <!-- price slider block -->
    <div class="collapse-block open">
        <h4 class="collapse-block__title">PRICE</h4>
        <div class="collapse-block__content">
            <div id="priceSlider" class="price-slider"></div>
            <form action="#">
                <div class="price-input">
                    <label>From:</label>
                    <input type="text" id="priceMin" />
                </div>
                <div class="price-input-divider">-</div>
                <div class="price-input">
                    <label>To:</label>
                    <input type="text" id="priceMax" />
                </div>
                <div class="price-input">
                    <button type="submit" class="btn btn--ys btn--md">Filter</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /price slider block -->
    <!-- size block -->
    <div class="collapse-block open">
        <h4 class="collapse-block__title">SIZE</h4>
        <div class="collapse-block__content">
            <ul class="options-swatch options-swatch--size options-swatch--lg">
                <li><a href="#">XS</a></li>
                <li><a href="#">S</a></li>
                <li><a href="#">M</a></li>
                <li><a href="#">L</a></li>
                <li><a href="#">XL</a></li>
                <li><a href="#">2XL</a></li>
                <li><a href="#">3XL</a></li>
            </ul>
        </div>
    </div>
    <!-- /size block -->
    <!-- color block -->
    <div class="collapse-block open">
        <h4 class="collapse-block__title">COLOR</h4>
        <div class="collapse-block__content">
            <ul class="options-swatch options-swatch--color options-swatch--lg">
                <li><a href="#"><span class="swatch-label color-black"></span></a></li>
                <li><a href="#"><span class="swatch-label color-grey"></span></a></li>
                <li><a href="#"><span class="swatch-label color-light-grey"></span></a></li>
                <li><a href="#"><span class="swatch-label color-blue"></span></a></li>
                <li><a href="#"><span class="swatch-label color-dark-turquoise "></span></a></li>
                <li><a href="#"><span class="swatch-label color-orange"></span></a></li>
                <li><a href="#"><span class="swatch-label color-purple"></span></a></li>
                <li><a href="#"><span class="swatch-label color-pale-violet-red"></span></a></li>
                <li><a href="#"><span class="swatch-label color-red"></span></a></li>
                <li><a href="#"><span class="swatch-label color-green"></span></a></li>
                <li><a href="#"><span class="swatch-label color-yellow"></span></a></li>
                <li><a href="#"><span class="swatch-label color-tan"></span></a></li>
            </ul>
        </div>
    </div>
    <!-- /color block -->
    <!-- brands block -->
    <div class="collapse-block open">
        <h4 class="collapse-block__title">BRANDS</h4>
        <div class="collapse-block__content">
            <ul class="simple-list">
                <li><a href="#">Levi’s </a></li>
                <li><a href="#">Gap</a></li>
                <li><a href="#">Zara</a></li>
                <li><a href="#">Polo</a></li>
                <li><a href="#">Ecco</a></li>
                <li><a href="#">H&amp;M</a></li>
                <li><a href="#">Diesel</a></li>
                <li><a href="#">Bockers</a></li>
                <li><a href="#">Lacoste</a></li>
            </ul>
        </div>
    </div>
    <div class="collapse-block open">
        <h4 class="collapse-block__title">COMMUNITY POLL</h4>
        <div class="collapse-block__content">
            <p class="under-form-text color">What is your favorite color</p>
            <form id="pollForm1" action="#">
                <ul class="filter-list">
                    <li>
                        <label class="radio">
                            <input id="radio1" type="radio" name="radios" checked>
                            <span class="outer"><span class="inner"></span></span>Green</label>
                    </li>
                    <li>
                        <label class="radio">
                            <input id="radio2" type="radio" name="radios">
                            <span class="outer"><span class="inner"></span></span>Red</label>
                    </li>
                    <li>
                        <label class="radio">
                            <input id="radio3" type="radio" name="radios">
                            <span class="outer"><span class="inner"></span></span>Black</label>
                    </li>
                    <li>
                        <label class="radio">
                            <input id="radio4" type="radio" name="radios">
                            <span class="outer"><span class="inner"></span></span>Magenta</label>
                    </li>
                </ul>
                <button type="submit" class="btn btn--ys btn--md btn--light">Vote</button>
            </form>
        </div>
    </div>
    <div class="collapse-block open">
        <h4 class="collapse-block__title">POPULAR TAGS</h4>
        <div class="collapse-block__content">
            <ul class="tags-list">
                <li><a href="#">Grey</a></li>
                <li><a href="#">Shirt</a></li>
                <li><a href="#">suit</a></li>
                <li><a href="#">Dresses </a></li>
                <li><a href="#">Outerwear</a></li>
            </ul>
        </div>
    </div>
</aside>