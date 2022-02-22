<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Home';
$route['404_override'] = 'Pagenotfound';
$route['translate_uri_dashes'] = FALSE;


$route['rss'] = "Home/rss";
$route['rssfb'] = "Hhome/rssfb";
$route['admin'] = 'Admin';
$route['admin/(:any)'] = 'Admin/$1';
$route['writer'] = 'Writer';
$route['writer/(:any)'] = 'Writer/$1';

$route['starttoday'] = 'Starttoday';
$route['starttoday/(:any)'] = 'Starttoday/$1';

$route['starterkit'] = 'Starttoday/starterkit';
$route['conference'] = 'pages/conference';


$route['download_ebook'] = "Home/ebook";

$route['events'] = 'Events';
$route['events/(:any)'] = 'Events/$1';

$route['articles/all'] = 'Article/all';
$route['videos'] = 'Article/video';
$route['article/loadmore'] = 'Article/loadmore';
$route['article/loadmoreHome'] = 'Article/loadmoreHome';
$route['article/loadArticle'] = 'Article/loadArticle/$1';
$route['article/loadCatArticle'] = 'Article/loadCatArticle/$1';
$route['article/category/(:any)/(:any)'] = 'Article/category/$1/$2';

$route['article/preview/(:any)'] = 'Article/preview/$1';
$route['article/amp/(:any)'] = 'Article/viewamp/$1';


$route['article/(:any)'] = 'Article/view/$1';
$route['articleby/(:any)'] = 'Article/author/$1';

$route['products/all'] = 'Aategory/all';
$route['product/(:any)'] = 'Product/view/$1';
$route['products/(:any)'] = 'Category/view/$1';

$route['author'] = 'Author';
$route['author/follow/(:any)'] = 'Author/follow/$1';
$route['author/unfollow/(:any)'] = 'Author/unfollow/$1';
$route['author/(:any)'] = 'Author/view/$1';


$route['alwayshungry']='Recipes/allReceipe/';
$route['recipe/(:any)'] = 'Recipes/view/$1';
$route['recipes/all']='Recipes/allReceipe/';
$route['recipes/(:any)'] = 'Recipes/category/$1';
$route['recipes/by/(:any)'] = 'Recipes/recipyby/$1';
$route['recipesx/(:any)'] = 'Recipes/$1';


$route['user'] = 'user';


$route['user/article'] = 'user/MysaveArticle';
$route['user/recipe'] = 'user/MysaveRecipe';
$route['user/restaurant'] = 'user/MysaveRestaurant';
$route['user/(:any)'] = 'user/$1';

$route['restaurants'] = 'restaurant/index';
$route['restaurant/loadmore'] = 'restaurant/loadmore';
$route['restaurant/loadRestaurant'] = 'restaurant/loadRestaurant/$1';
$route['restaurant/city/(:any)'] = 'restaurant/cities/$1';
$route['restaurant/(:any)'] = 'restaurant/$1';
$route['restaurants/(:any)'] = 'restaurant/view/$1';
$route['experts'] = 'columnist';
$route['experts/(:any)'] = 'columnist/view/$1';
$route['experts/ask'] = 'columnist/ask';


$route['search'] = 'search';
$route['tag/(:any)'] = 'search/tags/$1';
$route['search/(:any)'] = 'search/$1';

$route['newsletter'] = 'newslatter/subscribe';
$route['subscribe'] = 'newslatter';
$route['subscribe_submit'] = 'newslatter/subs';
$route['newsletter/unsubscribe/(:any)'] = 'newslatter/unsubscribe/$1';
$route['comment/(:any)'] = 'comment/$1';



$route['tag/article/(:any)'] = 'article/tag/$1';
$route['tag/recipe/(:any)'] = 'recipes/tag/$1';



$route['about-vegan-first'] = 'pages/aboutus';
$route['advertise-with-us'] = 'pages/advertise';


$route['contact-us'] = 'pages/contact';
$route['listed'] = 'pages/listed';
$route['partner-with-us'] = 'pages/partner';
$route['feedback'] = 'pages/feedback';
$route['attendevent'] = 'pages/attendevent';
$route['(:any)'] = 'pages/view/$1';

$route['magazine'] = 'magazine/index';
$route['subscription'] = 'magazine/checkout';
$route['response'] = 'magazine/response';
