<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PaymentsConroller;


Route::get('/',[HomeController::class, 'index1']);
// New Routes

// All Products
Route::get('/products',[HomeController::class, 'products']);
//Products Category
Route::get('/products/{category}',[HomeController::class, 'productss']);
//Single Product
Route::get('/product/{name}',[HomeController::class, 'product']);
// Modal View
Route::get('dynamicModal/{id}', [HomeController::class, 'loadModal'])->name('dynamicModal');

Route::get('dynamicCartModal/{id}',  [CartController::class, 'loadCartModal'])->name('dynamicCartModal');

Route::get('removecartmodal/{id}',  [CartController::class, 'removeCart'])->name('removecartmodal');


// * Products*/
Route::get('/classifieds',[HomeController::class, 'products']);
Route::get('/our-products',[HomeController::class, 'products']);

/** Single Product */
Route::get('/classifieds/{code}',[HomeController::class, 'code']);
// Full Packages
Route::get('/complete-vehicle-assessories',[HomeController::class, 'fullPackages']);
Route::get('/special-offers',[HomeController::class, 'specialoffers']);
Route::get('/complete-vehicle-assessories/{code}',[HomeController::class, 'fullPackage']);
/** Product Categories */
Route::get('/classifieds/shop/{cat}',[HomeController::class, 'catt']);
// *Products Brands*/
Route::get('/classifieds/brand/{brand}',[HomeController::class, 'brand']);
Route::get('/our-portfolio',[HomeController::class, 'portfolio']);
Route::get('/request-quote',[HomeController::class, 'request']);

// Other Routes
Route::get('/products',[HomeController::class, 'products']);
Route::get('/products/grid',[HomeController::class, 'grid']);
Route::get('/product/{title}',[HomeController::class, 'product']);
Route::get('/products/cat/{title}',[HomeController::class, 'cat']);
Route::get('/cat/{title}',[HomeController::class, 'cat']);
Route::get('/products/brand/{title}',[HomeController::class, 'brand']);
Route::get('/shop/cat/{cat}',[HomeController::class, 'shop_cat']);
Route::get('/shop/{name}',[HomeController::class, 'product']);
Route::get('/contact',[HomeController::class, 'contact']);
Route::get('/contact-us',[HomeController::class, 'contact']);
Route::get('/services',[HomeController::class, 'services']);
Route::get('/our-services',[HomeController::class, 'services']);
Route::get('/service/{name}',[HomeController::class, 'service']);
Route::get('/about',[HomeController::class, 'about']);
Route::get('/about-us',[HomeController::class, 'about']);
Route::get('/terms',[HomeController::class, 'terms']);
Route::get('/delivery',[HomeController::class, 'delivery']);
Route::get('/terms-and-conditions',[HomeController::class, 'terms']);
Route::get('/privacy',[HomeController::class, 'privacy']);
Route::get('/privacy-policy',[HomeController::class, 'privacy']);
Route::get('/shipping-policy',[HomeController::class, 'shipping']);

Route::get('/search',[HomeController::class, 'search']);
Route::get('/copyright',[HomeController::class, 'copyright']);
Route::get('/commingsoon',[HomeController::class, 'commingsoon']);
Route::post('/submitMessage',[HomeController::class, 'submitMessage']);
Route::post('/till',[PaymentsConroller::class, 'till']);

Route::post('/getQuote',[HomeController::class, 'getQuote']);

// Geo Location
Route::get('get-ip-details', function () {

	  $ip = '154.79.70.69';

    $data = \Location::get($ip);
    dd($data);
    echo $data->areaCode;



});


// Version Control
Route::get('/version_control', [HomeController::class, 'version']);

//Check If Mail Exists
Route::post('/checkemail',[HomeController::class, 'checkEmail']);
//Subscribers
Route::post('/subscribe',[HomeController::class, 'subscribe']);

//Search Site
Route::post('/searchsite',[HomeController::class, 'searchsite']);

//BlogRoutes
Route::get('/blog',[BlogController::class, 'index']);
Route::get('/blog/videos',[BlogController::class, 'videos']);
Route::get('/blog/{title}',[BlogController::class, 'blog']);
Route::get('/blog/cat/{cat}',[BlogController::class, 'blogCat']);
Route::post('/blog/search',[BlogController::class, 'search_blog']);
Route::get('/blog/tag/{tag}',[BlogController::class, 'tag']);
Route::post('/blog/comment',[BlogController::class, 'add_comment']);


// Cart Routes
Route::get('/cart',[CartController::class, 'index']);
Route::get('/cart/wishlist',[CartController::class, 'wishlist']);
Route::get('/cart/removewishlist/{rowId}/{user}',[CartController::class, 'removeWishlist']);

Route::get('/cart/destroy/{rowId}',[CartController::class, 'destroy']);
Route::get('/cart/destroyCompare/{rowId}',[CartController::class, 'destroyCompare']);
Route::get('cart/addItem/{id}',[CartController::class, 'addItem']);
Route::get('cart/addWishlist/{id}/{user}',[CartController::class, 'addWishlist']);

Route::get('cart/addCart/{id}',[CartController::class, 'addCart']);
Route::get('cart/addCarts/{id}',[CartController::class, 'addCarts']);

Route::get('cart/addCompare/{id}',[CartController::class, 'addCompare']);
Route::post('cart/addCart/{id}',[CartController::class, 'addCartPost']);
Route::get('cart/addToTheCart/{id}',[CartController::class, 'addToTheCart']);

Route::post('url()->current()/cart/addToTheCart/{id}',[CartController::class, 'addToTheCart']);

Route::post('/cart/update', [CartController::class, 'update']);
Route::get('/cart/compare', [CartController::class, 'compare']);

Route::get('/cart/cartUpdated', [CartController::class, 'cartUpdated']);


Route::post('cart/checkout/updateShipping', [CheckoutController::class, 'updateShipping']);
// Checkout Routes
Route::get('cart/checkout',[CheckoutController::class, 'index']);
Route::get('cart/checkout/checkout_billing',[CheckoutController::class, 'checkout_billing']);
Route::get('cart/checkout/shipping_method',[CheckoutController::class, 'shipping_method']);
Route::get('cart/checkout/payment',[CheckoutController::class, 'payment'])->name('payment');
Route::get('cart/checkout/order',[CheckoutController::class, 'checkout_confirm']);
Route::post('cart/checkout/formvalidate', [CheckoutController::class, 'formvalidate']);
Route::post('cart/checkout/create-user', [CheckoutController::class, 'create']);
Route::post('cart/checkout/save-user-data', [CheckoutController::class, 'save']);

Route::post('cart/checkout/login', [CheckoutController::class, 'login']);
Route::post('cart/checkout/placeOrder', [CheckoutController::class, 'placeOrder']);
Route::get('cart/checkout/placeOrder', [CheckoutController::class, 'placeOrderGet']);
Route::get('cart/checkout/placeOrderNow', [CheckoutController::class, 'placeOrderGetAjaxNow']);

//Payment pages

Route::post('payments/veryfy/mpesa',[PaymentsConroller::class, 'verify']); //The Lipa na MPESA Page
Route::post('payments/veryfy/sitoki',[PaymentsConroller::class, 'stk']); //The Lipa na MPESA Page
Route::get('mpesa/confirm',[PaymentsConroller::class, 'confirm']);             //Rquired URL
Route::get('mpesa/validate',[PaymentsConroller::class, 'validation']);         //Rquired URL
Route::get('mpesa/register',[PaymentsConroller::class, 'register']);           //Rquired URL


Route::get('get/details/{id}', 'PaymentsConroller@getDetails')->name('getDetails');

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::group(['prefix'=>'clientarea'], function(){

    Route::get('/', [HomeController::class, 'index'])->name('home');

    });
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {


    Route::group(['prefix'=>'admin'], function(){

        Route::get('/home', [AdminsController::class, 'index'])->name('admin.home');
        //Login route
        Route::get('/', [AdminsController::class, 'index'])->name('admin.index');





        //Testimonial
        Route::get('/addTestimonial', [AdminsController::class, 'addTestimonial']);
        Route::post('/add_Testimonial', [AdminsController::class, 'add_Testimonial']);
        Route::get('/testimonials',[AdminsController::class, 'testimonials']);
        Route::get('/editTestimonial/{id}', [AdminsController::class, 'editTestimonial']);
        Route::get('/deleteTestimonial/{id}', [AdminsController::class, 'deleteTestimonial']);
        Route::post('/edit_Testimonial/{id}', [AdminsController::class, 'edit_Testimonial']);


        Route::get('/edit-Product-slung', [AdminsController::class, 'edit_Product_slung']);


        //Terms Privacy copyright
        //copyright
        Route::get('/copyright',[AdminsController::class, 'copyright']);
        Route::post('/edit_copyright', [AdminsController::class, 'edit_copyright']);
        // Delivery Terms
        Route::get('/delivery',[AdminsController::class, 'delivery']);
        Route::post('/edit_delivery', [AdminsController::class, 'edit_delivery']);
        //Privacy
        Route::get('/privacy',[AdminsController::class, 'privacy']);
        Route::get('/addPrivacy', [AdminsController::class, 'addPrivacy']);
        Route::get('/editPrivacy/{id}', [AdminsController::class, 'editPrivacy']);
        Route::post('/add_privacy', [AdminsController::class, 'add_privacy']);
        Route::get('/delete_privacy/{id}',[AdminsController::class, 'delete_privacy']);
        Route::post('/edit_privacy/{id}', [AdminsController::class, 'edit_privacy']);
        //values
        Route::get('/values',[AdminsController::class, 'values']);
        Route::get('/addValues', [AdminsController::class, 'addValues']);
        Route::get('/editValues/{id}', [AdminsController::class, 'editValues']);
        Route::post('/add_values', [AdminsController::class, 'add_values']);
        Route::get('/delete_values/{id}',[AdminsController::class, 'delete_values']);
        Route::post('/edit_values/{id}', [AdminsController::class, 'edit_values']);

        //Offers
        Route::get('/Products_offer',[AdminsController::class, 'Products_offer']);
        Route::get('/swapoffer/{id}',[AdminsController::class, 'swapoffer']);
        Route::get('/deleteOffer/{id}',[AdminsController::class, 'deleteOffer']);
        Route::post('/swap_offer/{id}',[AdminsController::class, 'swap_offer']);
        Route::get('/special_offer/{id}',[AdminsController::class, 'special_offer']);
        Route::post('/special_offer_post',[AdminsController::class, 'special_offer_post']);
        Route::get('/special_offer_edit/{id}',[AdminsController::class, 'special_offer_edit']);
        Route::get('/swap_full/{id}',[AdminsController::class, 'swap_full']);

        // Featured& trending
        Route::get('/swapTrending/{id}',[AdminsController::class, 'swapTrending']);
        Route::get('/swapFeatured/{id}',[AdminsController::class, 'swapFeatured']);
        Route::get('/swapSlider/{id}',[AdminsController::class, 'swapSlider']);
        Route::get('/swapBanner/{id}',[AdminsController::class, 'swapBanner']);


        //Who
        Route::get('/who',[AdminsController::class, 'who']);
        Route::get('/editWho/{id}', [AdminsController::class, 'editWho']);
        Route::get('/delete_who/{id}',[AdminsController::class, 'delete_who']);
        Route::post('/edit_who/{id}', [AdminsController::class, 'edit_who']);

        //Terms
        Route::get('/terms',[AdminsController::class, 'terms']);
        Route::get('/addTerms', [AdminsController::class, 'addTerms']);
        Route::get('/editTerm/{id}', [AdminsController::class, 'editTerm']);
        Route::post('/add_term', [AdminsController::class, 'add_term']);
        Route::post('/edit_term/{id}', [AdminsController::class, 'edit_term']);
        Route::get('/delete_term/{id}',[AdminsController::class, 'delete_term']);
        //About
        Route::get('/about',[AdminsController::class, 'about']);
        Route::post('/about_save', [AdminsController::class, 'about_save']);
        //Services
        Route::get('/services',[AdminsController::class, 'services']);
        Route::get('/deleteService/{id}',[AdminsController::class, 'deleteService']);
        Route::post('/edit_Services/{id}', [AdminsController::class, 'edit_Services']);
        Route::get('/editServices/{id}', [AdminsController::class, 'editServices']);
        Route::get('/addService', [AdminsController::class, 'addService']);
        Route::post('/add_Service', [AdminsController::class, 'add_Service']);

        //Pricing
        Route::get('/pricing',[AdminsController::class, 'pricing']);
        Route::get('/deletePricing/{id}',[AdminsController::class, 'deletePricing']);
        Route::post('/edit_Pricing/{id}', [AdminsController::class, 'edit_Pricing']);
        Route::get('/editPricing/{id}', [AdminsController::class, 'editPricing']);
        Route::get('/addPricing', [AdminsController::class, 'addPricing']);
        Route::post('/add_Pricing', [AdminsController::class, 'add_Pricing']);

        //Video
        Route::get('/videos',[AdminsController::class, 'videos']);
        Route::get('/deleteVideo/{id}',[AdminsController::class, 'deleteVideo']);
        Route::post('/edit_Video/{id}', [AdminsController::class, 'edit_Video']);
        Route::get('/editVideo/{id}', [AdminsController::class, 'editVideo']);
        Route::post('/add_Video/{id}', [AdminsController::class, 'add_Video']);
        Route::get('/addVideo', [AdminsController::class, 'addVideo']);


        //Porfolio
        Route::get('/portfolio',[AdminsController::class, 'portfolio']);
        Route::get('/deletePortfolio/{id}',[AdminsController::class, 'deletePortfolio']);
        Route::post('/edit_Portfolio/{id}', [AdminsController::class, 'edit_Portfolio']);
        Route::get('/editPortfolio/{id}', [AdminsController::class, 'editPortfolio']);
        Route::get('/addPortfolio', [AdminsController::class, 'addPortfolio']);
        Route::post('/add_Portfolio', [AdminsController::class, 'add_Portfolio']);

        //How It Works
        Route::get('/how',[AdminsController::class, 'how']);
        Route::get('/deleteHow/{id}',[AdminsController::class, 'deleteHow']);
        Route::post('/edit_How/{id}', [AdminsController::class, 'edit_How']);
        Route::get('/editHow/{id}', [AdminsController::class, 'editHow']);
        Route::get('/addHow', [AdminsController::class, 'addHow']);
        Route::post('/add_How', [AdminsController::class, 'add_How']);

        //Gallery
        Route::get('/gallery',[AdminsController::class, 'gallery']);
        Route::get('/editGallery/{id}',[AdminsController::class, 'editGallery']);
        Route::get('/deleteGallery/{id}',[AdminsController::class, 'deleteGallery']);
        Route::post('/save_gallery/{id}', [AdminsController::class, 'save_gallery']);
        Route::get('/addGallery', [AdminsController::class, 'addGallery']);
        Route::get('/galleryList', [AdminsController::class, 'galleryList']);
        Route::post('/add_Gallery', [AdminsController::class, 'add_Gallery']);

        //Slider
        Route::get('/slider',[AdminsController::class, 'slider']);
        Route::get('/editSlider/{id}',[AdminsController::class, 'editSlider']);
        Route::get('/deleteSlider/{id}',[AdminsController::class, 'deleteSlider']);
        Route::post('/edit_Slider/{id}', [AdminsController::class, 'edit_Slider']);
        Route::get('/addSlider', [AdminsController::class, 'addSlider']);
        Route::post('/add_Slider', [AdminsController::class, 'add_Slider']);

        //Banner
        Route::get('/banner',[AdminsController::class, 'banners']);
        Route::get('/editBanner/{id}',[AdminsController::class, 'editBanner']);
        Route::post('/edit_Banner/{id}', [AdminsController::class, 'edit_Banner']);

        //Clients
        Route::get('/addClient', [AdminsController::class, 'addClient']);
        Route::post('/add_Client', [AdminsController::class, 'add_Client']);
        Route::get('/clients',[AdminsController::class, 'clients']);
        Route::get('/editClient/{id}', [AdminsController::class, 'editClient']);
        Route::get('/deleteClient/{id}', [AdminsController::class, 'deleteClient']);
        Route::post('/edit_Client/{id}', [AdminsController::class, 'edit_Client']);


        //Clients
        Route::get('/addBrand', [AdminsController::class, 'addBrand']);
        Route::post('/add_Brand', [AdminsController::class, 'add_Brand']);
        Route::get('/brands',[AdminsController::class, 'brands']);
        Route::get('/editBrand/{id}', [AdminsController::class, 'editBrand']);
        Route::get('/deleteBrand/{id}', [AdminsController::class, 'deleteBrand']);
        Route::post('/edit_Brand/{id}', [AdminsController::class, 'edit_Brand']);

        //Statisctics
        Route::get('/stats',[AdminsController::class, 'stats']);
        Route::get('/editStats/{id}', [AdminsController::class, 'editStats']);
        Route::get('/deleteStats/{id}', [AdminsController::class, 'deleteStats']);
        Route::post('/edit_Stats/{id}', [AdminsController::class, 'edit_Stats']);

        //Pages
        Route::get('/pages',[AdminsController::class, 'pages']);
        Route::get('/editPage/{id}',[AdminsController::class, 'editPage']);
        Route::get('/deletePage/{id}',[AdminsController::class, 'deletePage']);
        Route::post('/edit_Page/{id}', [AdminsController::class, 'edit_Page']);
        Route::get('/addPage', [AdminsController::class, 'addPage']);
        Route::post('/add_Page', [AdminsController::class, 'add_Page']);
        Route::post('/set_Page/{name}', [AdminsController::class, 'set_Page']);
        Route::get('/setPage/{name}', [AdminsController::class, 'setPage']);

        // My Api
        Route::get('/myApi', [AdminsController::class, 'myApi']);
        Route::get('/invoices', [AdminsController::class, 'invoices']);
        Route::get('/deleteInvoice/{id}', [AdminsController::class, 'deleteInvoice']);
        Route::get('/approveInvoice/{id}', [AdminsController::class, 'approveInvoice']);


        //Priducts
        Route::get('/products',[AdminsController::class, 'products']);
        Route::get('/Products-lte',[AdminsController::class, 'productslte']);

        Route::get('/editProduct/{id}',[AdminsController::class, 'editProduct']);
        Route::get('/editProductDetails/{id}',[AdminsController::class, 'editProductDetails']);
        Route::get('/deleteProduct/{id}',[AdminsController::class, 'deleteProduct']);
        Route::post('/edit_Product/{id}', [AdminsController::class, 'edit_Product']);
        Route::post('/edit_Product_Details/{id}', [AdminsController::class, 'edit_Product_Details']);
        Route::get('/addProduct', [AdminsController::class, 'addProduct']);
        Route::post('/add_Product', [AdminsController::class, 'add_Product']);


        //Admin
        Route::get('/admins',[AdminsController::class, 'admins']);
        Route::get('/editAdmin/{id}',[AdminsController::class, 'editAdmin']);
        Route::get('/deleteAdmin/{id}',[AdminsController::class, 'deleteAdmin']);
        Route::post('/edit_Admin/{id}', [AdminsController::class, 'edit_Admin']);
        Route::get('/addAdmin', [AdminsController::class, 'addAdmin']);
        Route::post('/add_Admin', [AdminsController::class, 'add_Admin']);

        //Orders
        Route::get('/orders',[AdminsController::class, 'orders']);
        Route::get('/editOrders/{id}',[AdminsController::class, 'editOrders']);
        Route::get('/deleteOrders/{id}',[AdminsController::class, 'deleteOrders']);
        Route::get('/confrimOrder/{id}',[AdminsController::class, 'confrimOrder']);
        Route::get('/swapOrder/{id}',[AdminsController::class, 'swapOrder']);
        Route::post('/edit_Orders/{id}', [AdminsController::class, 'edit_Orders']);
        Route::get('/addOrder', [AdminsController::class, 'addOrder']);
        Route::post('/add_Order', [AdminsController::class, 'add_Order']);

        //User
        Route::get('/users',[AdminsController::class, 'users']);
        Route::get('/editUser/{id}',[AdminsController::class, 'editUser']);
        Route::get('/deleteUser/{id}',[AdminsController::class, 'deleteUser']);
        Route::post('/edit_User/{id}', [AdminsController::class, 'edit_User']);
        Route::get('/addUser', [AdminsController::class, 'addUser']);
        Route::post('/add_User', [AdminsController::class, 'add_User']);

        //Blog Controls
        Route::get('/blog',[AdminsController::class, 'blog']);
        Route::get('/editBlog/{id}',[AdminsController::class, 'editBlog']);
        Route::get('/delete_Blog/{id}',[AdminsController::class, 'delete_Blog']);
        Route::post('/edit_Blog/{id}', [AdminsController::class, 'edit_Blog']);
        Route::get('/addBlog', [AdminsController::class, 'addBlog']);
        Route::post('/add_blog', [AdminsController::class, 'add_Blog']);
        //Categories Control
        Route::get('/categories',[AdminsController::class, 'categories']);
        Route::get('/editCategories/{id}',[AdminsController::class, 'editCategories']);
        Route::get('/deleteCategory/{id}',[AdminsController::class, 'deleteCategory']);
        Route::post('/edit_Category/{id}', [AdminsController::class, 'edit_Category']);
        Route::get('/addCategory', [AdminsController::class, 'addCategory']);
        Route::post('/add_Category', [AdminsController::class, 'add_Category']);

        //Service Renreded Control
        Route::get('/service_rendered',[AdminsController::class, 'service_rendered']);
        Route::get('/editService_rendered/{id}',[AdminsController::class, 'editService_rendered']);
        Route::get('/deleteService_rendered/{id}',[AdminsController::class, 'deleteService_rendered']);
        Route::post('/edit_Service_rendered/{id}', [AdminsController::class, 'edit_Service_rendered']);
        Route::get('/addService_rendered', [AdminsController::class, 'addService_rendered']);
        Route::post('/add_Service_rendered', [AdminsController::class, 'add_Service_rendered']);

        //Daily
        Route::get('/daily',[AdminsController::class, 'daily']);
        Route::get('/editDaily/{id}',[AdminsController::class, 'editDaily']);
        Route::get('/deleteDaily/{id}',[AdminsController::class, 'deleteDaily']);
        Route::post('/edit_Daily/{id}', [AdminsController::class, 'edit_Daily']);
        Route::get('/addDaily', [AdminsController::class, 'addDaily']);
        Route::post('/add_Daily', [AdminsController::class, 'add_Daily']);


        //Sub Categories
        Route::get('/subCategories',[AdminsController::class, 'subCategories']);
        Route::get('/editSubCategories/{id}',[AdminsController::class, 'editSubCategories']);
        Route::get('/deleteSubCategory/{id}',[AdminsController::class, 'deleteSubCategory']);
        Route::post('/edit_SubCategory/{id}', [AdminsController::class, 'edit_SubCategory']);
        Route::get('/addSubCategory', [AdminsController::class, 'addSubCategory']);
        Route::post('/add_SubCategory', [AdminsController::class, 'add_SubCategory']);

        //Active Services
        Route::get('/traceServices',[AdminsController::class, 'traceServices']);
        Route::get('/editTraceServices/{id}',[AdminsController::class, 'editTraceServices']);
        Route::get('/deleteTraceServices/{id}',[AdminsController::class, 'deleteTraceServices']);
        Route::post('/edit_TraceServices/{id}', [AdminsController::class, 'edit_TraceServices']);
        Route::get('/addTraceServices', [AdminsController::class, 'addTraceServices']);
        Route::post('/add_TraceServices', [AdminsController::class, 'add_TraceServices']);

        // Generic Routes
        Route::get('/form',[AdminsController::class, 'form']);
        Route::get('/list',[AdminsController::class, 'list']);
        Route::get('/formfile',[AdminsController::class, 'formfile']);
        Route::get('/formfiletext',[AdminsController::class, 'formfiletext']);


        Route::get('/edit_slung',[AdminsController::class, 'edit_slung']);
        //Payments
        Route::get('/payments',[AdminsController::class, 'payments']);
        Route::get('/payments/explore/{id}',[AdminsController::class, 'payments_explore']);
        //MPESA Routes
        Route::get('/balance',[AdminsController::class, 'balance']);
        Route::get('/reverse',[AdminsController::class, 'reverse']);
        Route::get('/lnmo',[AdminsController::class, 'lnmo']);
        Route::get('/b2b',[AdminsController::class, 'b2b']);
        Route::get('/b2c',[AdminsController::class, 'b2c']);
        Route::get('/lnmo/confirm/{id}',[AdminsController::class, 'lnmo_confirm']);


        // Order
        Route::get('/orders/explore/{id}',[AdminsController::class, 'order_explore']);

        //Notifications
        Route::get('/notifications',[AdminsController::class, 'notifications']);
        Route::get('/notification/{id}',[AdminsController::class, 'notification']);
        Route::get('/deleteNotification/{id}',[AdminsController::class, 'deleteNotification']);

        //Service Requests
        Route::get('/requests',[AdminsController::class, 'quoterequeste']);
        Route::get('/markRequest/{id}/{status}/{type}',[AdminsController::class, 'markRequest']);

        //Comments
        Route::get('/reviews',[AdminsController::class, 'reviews']);
        Route::get('/approve/{id}',[AdminsController::class, 'approve']);
        Route::get('/decline/{id}',[AdminsController::class, 'decline']);

        // Error Pages
        Route::get('/403',[AdminsController::class, 'error403']);
        Route::get('/404',[AdminsController::class, 'error404']);
        Route::get('/405',[AdminsController::class, 'error405']);
        Route::get('/500',[AdminsController::class, 'error500']);
        Route::get('/503',[AdminsController::class, 'error503']);





        // Subscribers Mail
        Route::post('/updatemail',[AdminsController::class, 'updatemail']);


        //Updates
        Route::get('/updates',[AdminsController::class, 'updates']);
        Route::get('/update/{id}',[AdminsController::class, 'update']);
        Route::get('/mark/{id}',[AdminsController::class, 'mark']);

        //profile
        Route::get('/profile',[AdminsController::class, 'profile']);
        Route::post('/profile_save/{id}',[AdminsController::class, 'profile_save']);
        Route::get('/editFile/{id}',[AdminsController::class, 'editFile']);
        Route::post('/edit_File/{id}',[AdminsController::class, 'edit_File']);

        // Gallery
        Route::get('/gallery',[AdminsController::class, 'gallery']);

        //Under Contruction
        Route::get('/under_construction',[AdminsController::class, 'under_construction']);

        //Wizard
        Route::get('/wizard',[AdminsController::class, 'wizard']);

        //Maps
        Route::get('/maps',[AdminsController::class, 'maps']);
        // SiteSettings
        Route::get('/sitesettings',[AdminsController::class, 'sitesettings']);
        Route::post('/savesitesettings',[AdminsController::class, 'savesitesettings']);
        //Messages
        Route::get('/allMessages', [AdminsController::class, 'allMessages']);
        Route::get('/unread', [AdminsController::class, 'unread']);
        Route::get('/read/{id}', [AdminsController::class, 'read']);
        Route::post('/reply/{id}', [AdminsController::class, 'reply']);
        Route::get('/deleteMessage/{id}', [AdminsController::class, 'deleteMessage']);

        //Subscribers
        Route::get('/subscribers', [AdminsController::class, 'subscribers']);
        Route::get('/mailSubscribers/{email}', [AdminsController::class, 'mailSubscribers']);
        Route::get('/mailSubscriber/{email}', [AdminsController::class, 'mailSubscriber']);
        Route::get('/deleteSubscriber/{id}', [AdminsController::class, 'deleteSubscriber']);
        // Version Control
        Route::get('/version', [AdminsController::class, 'version']);

        // Seo Settings
        // SeoSettings
        Route::get('/seosettings',[AdminsController::class, 'seosettings']);
        Route::post('/saveseosettings',[AdminsController::class, 'saveseosettings']);
        });

        // Users Routes

});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});
