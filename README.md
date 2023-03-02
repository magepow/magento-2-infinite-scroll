[<img src="https://github.com/magepow/themeforest/blob/master/shopify/shopify_affiliate.jpg" >](https://shopify.pxf.io/VyL446)

## Magento 2 Infinite Scroll (Magepow Infinite Scroll extension Free)

**Infinite scroll** for Magento 2 automatically loads product catalog without reloading the page. Your customers will be pleasantly surprised with supportive navigation and high performance of your web store.

[![Latest Stable Version](https://poser.pugx.org/magepow/infinitescroll/v/stable)](https://packagist.org/packages/magepow/infinitescroll)
[![Total Downloads](https://poser.pugx.org/magepow/infinitescroll/downloads)](https://packagist.org/packages/magepow/infinitescroll)
[![Daily Downloads](https://poser.pugx.org/magepow/infinitescroll/d/daily)](https://packagist.org/packages/magepow/infinitescroll)

**See more information**:

- [<img src="https://github.com/magepow/media/blob/master/icons/demo.svg" width="40" height="40">](https://demo.magepow.com/infinitescroll)

- [Detail](https://magepow.com/magento-2-infinite-scroll-extension.html)

- [Documentation](https://docs.alothemes.com/m2/extension/infinitescroll/)

- [Video tutorial](https://www.youtube.com/watch?v=gTemvUzrOJg&t=57s)

- [<img src="https://github.com/magepow/media/blob/master/icons/shopify.svg" width="40" height="40">](https://apps.shopify.com/magepow-infinite-scroll)[Shopify version](https://apps.shopify.com/magepow-infinite-scroll)

## Highlight Features

- Automatically load content and images in just one page.

- Visitors can see all in just one page

- Display load more chart to help users see more products.

- Reduce the request load to the server, increase website speed

- Increase professional animation effects for Magento website.

- Support to increase website ranking on search engines

- Responsive

## How to use Infinite Scroll extension
Before you continue, ensure you meet the following requirements:

  * You have installed magento2
  * You are using a Linux or Mac OS machine. Windows is not currently supported.
  Install Magento 2 Infinite Scroll extension

### Step 1 : Download Magento 2 Infinitescroll Extension

 #### Install via composer (recommend)
Run the following commands in Magento 2 root folder:
```
composer require magepow/infinitescroll
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy -f
```

### Step 2: User guide
  #### Key features of Magento 2 Infinite scroll Extension:
  * Ajax scroll without interruption.
  * Freely scroll down & See what page of the catalog they're on.
  * Automatically loading pages.
  * Show Loading Button.
  * Possibility to give/ share links to a certain positions.
  * Easy to customize.
  * Similar technique as seen on Twitter, Facebook.
  * Increase the conversion rate at your store.
  * Easy to Change Button and Loading Text.

  ### 2.1. General configuration

  `Login to Magento admin > Stores > Configuration > Magepow > Infinitescroll > Enable > Choose Yes to enable the module.`
  
  ![Image of Magento admin config](https://github.com/magepow/magento2-infinitescroll/blob/master/media/backend_config.png)
  
   In `Stores > Configuration > Magepow > Infinitescroll` we set: 
   * **Delay (ms)**: Delay time for the scroll down, default 600.
   * **Content**: Select for the elements that surrounds the items you will be loading more of (For Ex. = .classname/#id).
   * **Pagination**: Select class, id for paging loaded more.
   * **Next**: Select class, id for the link to to the next page.
   * **Item**: Select for the class name that you want to config all items you will load more.
   * **Loading text**: Place any text you want when loading the page.
   * **Done text**: When the download is completed, the text you configured will appear.
   * **Loading Image placeholder**: The icons you want are displayed while downloading more, you can change it arbitrarily or use Magento's default icons.
   * **Load More threshold**: When this page number is reached, a button to load more products will be shown instead of continue loading products automatically with the scroll.
   * **Load More button text**: Configure the download button text.
   After you finish configuring, save and clear the cache.
   Run the following command:
   
   ```
   php bin/magento cache:clean
   ```
  ### 2.2. Result
   
   ![Image of magento store front](https://github.com/magepow/magento2-infinitescroll/blob/master/media/result_frontend_1.png)
   ![Image of magento store front](https://github.com/magepow/magento2-infinitescroll/blob/master/media/result_frontend_2.png)

  ### 3. Events
  * Refresh Infinite Scroll update with Ajax use code:
  ```
  $('body').trigger('collectionUpdated');
  ```
 ## Donation

If this project help you reduce time to develop, you can give me a cup of coffee :) 

[![paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](https://www.paypal.com/paypalme/alopay)

      
**[Our Magento 2 Extensions](https://magepow.com/magento-2-extensions.html)**

* [Magento 2 Recent Sales Notification](https://magepow.com/magento-2-recent-order-notification.html)

* [Magento 2 Categories Extension](https://magepow.com/magento-categories-extension.html)

* [Magento 2 Sticky Cart](https://magepow.com/magento-sticky-cart.html)

* [Magento 2 Ajax Contact](https://magepow.com/magento-ajax-contact-form.html)

* [Magento 2 Lazy Load](https://magepow.com/magento-lazy-load.html)

* [Magento 2 Mutil Translate](https://magepow.com/magento-multi-translate.html)

* [Magento 2 Instagram Integration](https://magepow.com/magento-2-instagram.html)

* [Magento 2 Lookbook Pin Products](https://magepow.com/lookbook-pin-products.html)

* [Magento 2 Product Slider](https://magepow.com/magento-product-slider.html)

* [Magento 2 Product Banner](https://magepow.com/magento-2-banner-slider.html)

**[Our Magento 2 services](https://magepow.com/magento-services.html)**

* [PSD to Magento 2 Theme Conversion](https://alothemes.com/psd-to-magento-theme-conversion.html)

* [Magento 2 Speed Optimization Service](https://magepow.com/magento-speed-optimization-service.html)

* [Magento 2 Security Patch Installation](https://magepow.com/magento-security-patch-installation.html)

* [Magento 2 Website Maintenance Service](https://magepow.com/website-maintenance-service.html)

* [Magento 2 Professional Installation Service](https://magepow.com/professional-installation-service.html)

* [Magento 2 Upgrade Service](https://magepow.com/magento-upgrade-service.html)

* [Magento 2 Customization Service](https://magepow.com/customization-service.html)

* [Hire Magento 2 Developer](https://magepow.com/hire-magento-developer.html)

**[Our Magento 2 Themes](https://alothemes.com/)**

* [Expert Multipurpose Responsive Magento 2 Theme](https://1.envato.market/c/1314680/275988/4415?u=https://themeforest.net/item/expert-premium-responsive-magento-2-and-1-support-rtl-magento-2-/21667789)

* [Gecko Premium Responsive Magento 2 Theme](https://1.envato.market/c/1314680/275988/4415?u=https://themeforest.net/item/gecko-responsive-magento-2-theme-rtl-supported/24677410)

* [Milano Fashion Responsive Magento 2 Theme](https://1.envato.market/c/1314680/275988/4415?u=https://themeforest.net/item/milano-fashion-responsive-magento-1-2-theme/12141971)

* [Electro 2 Responsive Magento 2 Theme](https://1.envato.market/c/1314680/275988/4415?u=https://themeforest.net/item/electro2-premium-responsive-magento-2-rtl-supported/26875864)

* [Electro Responsive Magento 2 Theme](https://1.envato.market/c/1314680/275988/4415?u=https://themeforest.net/item/electro-responsive-magento-1-2-theme/17042067)

* [Pizzaro Food responsive Magento 2 Theme](https://1.envato.market/c/1314680/275988/4415?u=https://themeforest.net/item/pizzaro-food-responsive-magento-1-2-theme/19438157)

* [Biolife organic responsive Magento 2 Theme](https://1.envato.market/c/1314680/275988/4415?u=https://themeforest.net/item/biolife-organic-food-magento-2-theme-rtl-supported/25712510)

* [Market responsive Magento 2 Theme](https://1.envato.market/c/1314680/275988/4415?u=https://themeforest.net/item/market-responsive-magento-2-theme/22997928)

* [Kuteshop responsive Magento 2 Theme](https://1.envato.market/c/1314680/275988/4415?u=https://themeforest.net/item/kuteshop-multipurpose-responsive-magento-1-2-theme/12985435)

* [Bencher - Responsive Magento 2 Theme](https://1.envato.market/c/1314680/275988/4415?u=https://themeforest.net/item/bencher-responsive-magento-1-2-theme/15787772)

* [Supermarket Responsive Magento 2 Theme](https://1.envato.market/c/1314680/275988/4415?u=https://themeforest.net/item/supermarket-responsive-magento-1-2-theme/18447995)

**[Our Shopify Themes](https://themeforest.net/user/alotheme)**

* [Dukamarket - Multipurpose Shopify Theme](https://1.envato.market/c/1314680/275988/4415?u=https://themeforest.net/item/dukamarket-multipurpose-shopify-theme/36158349)

* [Ohey - Multipurpose Shopify Theme](https://1.envato.market/c/1314680/275988/4415?u=https://themeforest.net/item/ohey-multipurpose-shopify-theme/34624195)

* [Flexon - Multipurpose Shopify Theme](https://1.envato.market/c/1314680/275988/4415?u=https://themeforest.net/item/flexon-multipurpose-shopify-theme/33461048)

**[Our Shopify App](https://apps.shopify.com/partners/maggicart)**

* [Magepow Infinite Scroll](https://apps.shopify.com/magepow-infinite-scroll)

* [Magepow Promotionbar](https://apps.shopify.com/magepow-promotionbar)

* [Magepow Size Chart](https://apps.shopify.com/magepow-size-chart)

**[Our WordPress Theme](https://themeforest.net/user/alotheme/portfolio)**

* [SadesMarket - Multipurpose WordPress Theme](https://1.envato.market/c/1314680/275988/4415?u=https://themeforest.net/item/sadesmarket-multipurpose-wordpress-theme/35369933)
