<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/category' => [[['_route' => 'app_admin_category_index', '_controller' => 'App\\Controller\\Admin\\CategoryController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/category/new' => [[['_route' => 'app_admin_category_new', '_controller' => 'App\\Controller\\Admin\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/category-recipe' => [[['_route' => 'app_admin_category_recipe_index', '_controller' => 'App\\Controller\\Admin\\CategoryRecipeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/category-recipe/new' => [[['_route' => 'app_admin_category_recipe_new', '_controller' => 'App\\Controller\\Admin\\CategoryRecipeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/location' => [[['_route' => 'app_admin_location_index', '_controller' => 'App\\Controller\\Admin\\LocationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/location/new' => [[['_route' => 'app_admin_location_new', '_controller' => 'App\\Controller\\Admin\\LocationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/location/api/search' => [[['_route' => 'app_admin_location_api_search', '_controller' => 'App\\Controller\\Admin\\LocationController::apiSearch'], null, ['GET' => 0], null, false, false, null]],
        '/admin/product' => [[['_route' => 'app_admin_product_index', '_controller' => 'App\\Controller\\Admin\\ProductController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/product/new' => [[['_route' => 'app_admin_product_new', '_controller' => 'App\\Controller\\Admin\\ProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/product/scan/barcode' => [[['_route' => 'app_admin_product_scan_barcode', '_controller' => 'App\\Controller\\Admin\\ProductController::scanBarcode'], null, ['POST' => 0], null, false, false, null]],
        '/admin/product/generate/barcode' => [[['_route' => 'app_admin_product_generate_barcode', '_controller' => 'App\\Controller\\Admin\\ProductController::generateBarcodeAction'], null, ['GET' => 0], null, false, false, null]],
        '/admin/promotion' => [[['_route' => 'app_admin_promotion_index', '_controller' => 'App\\Controller\\Admin\\PromotionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/promotion/categories' => [[['_route' => 'app_admin_promotion_category_index', '_controller' => 'App\\Controller\\Admin\\PromotionController::categoryIndex'], null, ['GET' => 0], null, false, false, null]],
        '/admin/promotion/products' => [[['_route' => 'app_admin_promotion_product_index', '_controller' => 'App\\Controller\\Admin\\PromotionController::productIndex'], null, ['GET' => 0], null, false, false, null]],
        '/admin/promotion/new' => [[['_route' => 'app_admin_promotion_new', '_controller' => 'App\\Controller\\Admin\\PromotionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/purchase/item' => [[['_route' => 'app_admin_purchase_item_index', '_controller' => 'App\\Controller\\Admin\\PurchaseItemController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/purchase/item/new' => [[['_route' => 'app_admin_purchase_item_new', '_controller' => 'App\\Controller\\Admin\\PurchaseItemController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/recipe' => [[['_route' => 'app_admin_recipe_index', '_controller' => 'App\\Controller\\Admin\\RecipeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/recipe/new' => [[['_route' => 'app_admin_recipe_new', '_controller' => 'App\\Controller\\Admin\\RecipeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/restaurant/promotion' => [[['_route' => 'app_restaurant_promotion_index', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/restaurant/promotion/categories' => [[['_route' => 'app_restaurant_promotion_category_index', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::categoryIndex'], null, ['GET' => 0], null, false, false, null]],
        '/admin/restaurant/promotion/recipes' => [[['_route' => 'app_restaurant_promotion_recipe_index', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::recipeIndex'], null, ['GET' => 0], null, false, false, null]],
        '/admin/restaurant/promotion/new' => [[['_route' => 'app_restaurant_promotion_new', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/stock-batch/all' => [[['_route' => 'app_admin_stock_batch_all', '_controller' => 'App\\Controller\\Admin\\StockBatchController::all'], null, ['GET' => 0], null, false, false, null]],
        '/admin/stock-batch/print-multiple' => [[['_route' => 'app_admin_stock_batch_print_multiple', '_controller' => 'App\\Controller\\Admin\\StockBatchController::printMultiple'], null, ['GET' => 0], null, false, false, null]],
        '/admin/stock-batch/export/excel' => [[['_route' => 'app_admin_stock_batch_export_excel', '_controller' => 'App\\Controller\\Admin\\StockBatchController::exportExcel'], null, ['GET' => 0], null, false, false, null]],
        '/admin/stock-batch/export/pdf' => [[['_route' => 'app_admin_stock_batch_export_pdf', '_controller' => 'App\\Controller\\Admin\\StockBatchController::exportPdf'], null, ['GET' => 0], null, false, false, null]],
        '/admin/stock-batch/export/excel/template' => [[['_route' => 'app_admin_stock_batch_export_excel_template', '_controller' => 'App\\Controller\\Admin\\StockBatchController::exportExcelTemplate'], null, ['GET' => 0], null, false, false, null]],
        '/admin/stock-batch/import/excel' => [[['_route' => 'app_admin_stock_batch_import_excel', '_controller' => 'App\\Controller\\Admin\\StockBatchController::importExcel'], null, ['POST' => 0], null, false, false, null]],
        '/admin/supplier' => [[['_route' => 'app_admin_supplier_index', '_controller' => 'App\\Controller\\Admin\\SupplierController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/supplier/new' => [[['_route' => 'app_admin_supplier_new', '_controller' => 'App\\Controller\\Admin\\SupplierController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/type-promotion' => [[['_route' => 'app_admin_type_promotion_index', '_controller' => 'App\\Controller\\Admin\\TypePromotionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/type-promotion/new' => [[['_route' => 'app_admin_type_promotion_new', '_controller' => 'App\\Controller\\Admin\\TypePromotionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\Admin\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\Admin\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/products/search/barcode' => [[['_route' => 'api_product_search_barcode', '_controller' => 'App\\Controller\\Api\\ProductSearchController::searchByBarcode'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard/company/details' => [[['_route' => 'app_dashboard_hmaservice_details', '_controller' => 'App\\Controller\\Dashboard\\HmaServiceProfileController::showDetails'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard/company/edit' => [[['_route' => 'app_dashboard_hmaservice_edit', '_controller' => 'App\\Controller\\Dashboard\\HmaServiceProfileController::editProfile'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard/company/delete-logo' => [[['_route' => 'app_dashboard_hmaservice_delete_logo', '_controller' => 'App\\Controller\\Dashboard\\HmaServiceProfileController::deleteLogo'], null, ['POST' => 0], null, false, false, null]],
        '/dashboard/company/deactivate' => [[['_route' => 'app_dashboard_hmaservice_deactivate', '_controller' => 'App\\Controller\\Dashboard\\HmaServiceProfileController::deactivateCompany'], null, ['POST' => 0], null, false, false, null]],
        '/dashboard/company/activate' => [[['_route' => 'app_dashboard_hmaservice_activate', '_controller' => 'App\\Controller\\Dashboard\\HmaServiceProfileController::activateCompany'], null, ['POST' => 0], null, false, false, null]],
        '/manager/team' => [[['_route' => 'app_manager_team_index', '_controller' => 'App\\Controller\\Manager\\TeamController::index'], null, ['GET' => 0], null, true, false, null]],
        '/profile' => [[['_route' => 'app_profile_show', '_controller' => 'App\\Controller\\ProfileController::show'], null, ['GET' => 0], null, true, false, null]],
        '/profile/edit' => [[['_route' => 'app_profile_edit', '_controller' => 'App\\Controller\\ProfileController::edit'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile/delete-photo' => [[['_route' => 'app_profile_delete_photo', '_controller' => 'App\\Controller\\ProfileController::deletePhoto'], null, ['POST' => 0], null, false, false, null]],
        '/purchase' => [[['_route' => 'purchase_index', '_controller' => 'App\\Controller\\PurchaseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/purchase/cart' => [[['_route' => 'purchase_cart', '_controller' => 'App\\Controller\\PurchaseController::cart'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/purchase/cart-data' => [[['_route' => 'purchase_cart_data', '_controller' => 'App\\Controller\\PurchaseController::cartData'], null, ['GET' => 0], null, false, false, null]],
        '/purchase/add-product' => [[['_route' => 'purchase_add_product', '_controller' => 'App\\Controller\\PurchaseController::addProduct'], null, ['POST' => 0], null, false, false, null]],
        '/purchase/confirm' => [[['_route' => 'purchase_confirm', '_controller' => 'App\\Controller\\PurchaseController::confirm'], null, ['POST' => 0], null, false, false, null]],
        '/purchase/search-products' => [[['_route' => 'purchase_search_products', '_controller' => 'App\\Controller\\PurchaseController::searchProducts'], null, ['GET' => 0], null, false, false, null]],
        '/forgot-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/change-password' => [[['_route' => 'app_change_password', '_controller' => 'App\\Controller\\ResetPasswordController::changePassword'], null, null, null, false, false, null]],
        '/first-login-change-password' => [[['_route' => 'app_first_login_change_password', '_controller' => 'App\\Controller\\ResetPasswordController::firstLoginChangePassword'], null, null, null, false, false, null]],
        '/orders/contact-super-admin' => [[['_route' => 'app_orders_contact_super_admin', '_controller' => 'App\\Controller\\Sale\\OrderController::contactSuperAdmin'], null, ['GET' => 0], null, false, false, null]],
        '/orders/export/excel' => [[['_route' => 'app_orders_export_excel', '_controller' => 'App\\Controller\\Sale\\OrderController::exportExcel'], null, ['GET' => 0], null, false, false, null]],
        '/orders/export/pdf' => [[['_route' => 'app_orders_export_pdf', '_controller' => 'App\\Controller\\Sale\\OrderController::exportPdf'], null, ['GET' => 0], null, false, false, null]],
        '/orders' => [[['_route' => 'app_orders_index', '_controller' => 'App\\Controller\\Sale\\OrderController::index'], null, ['GET' => 0], null, true, false, null]],
        '/orders/api/search-customer' => [[['_route' => 'api_search_customer', '_controller' => 'App\\Controller\\Sale\\OrderController::searchCustomer'], null, ['GET' => 0], null, false, false, null]],
        '/sale/restaurant/search' => [[['_route' => 'restaurant_sale_search', '_controller' => 'App\\Controller\\Sale\\RestaurantSaleController::search'], null, ['GET' => 0], null, false, false, null]],
        '/sale/restaurant' => [[['_route' => 'restaurant_sale_index', '_controller' => 'App\\Controller\\Sale\\RestaurantSaleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/sale/restaurant/daily-stats' => [[['_route' => 'api_daily_stats', '_controller' => 'App\\Controller\\Sale\\RestaurantSaleController::getDailyStatsApi'], null, ['GET' => 0], null, false, false, null]],
        '/sale/retail/search' => [[['_route' => 'retail_sale_search', '_controller' => 'App\\Controller\\Sale\\RetailSaleController::search'], null, ['GET' => 0], null, false, false, null]],
        '/sale/retail' => [[['_route' => 'retail_sale_index', '_controller' => 'App\\Controller\\Sale\\RetailSaleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/sale/retail/sale/cart' => [[['_route' => 'sale_cart', '_controller' => 'App\\Controller\\Sale\\RetailSaleController::cart'], null, ['GET' => 0], null, false, false, null]],
        '/sale/retail/sale/cart-data' => [[['_route' => 'sale_cart_data', '_controller' => 'App\\Controller\\Sale\\RetailSaleController::cartData'], null, ['GET' => 0], null, false, false, null]],
        '/sale/retail/sale/clear-cart' => [[['_route' => 'sale_clear_cart', '_controller' => 'App\\Controller\\Sale\\RetailSaleController::clearCart'], null, ['POST' => 0], null, false, false, null]],
        '/sale/retail/sale/checkout' => [[['_route' => 'sale_checkout', '_controller' => 'App\\Controller\\Sale\\RetailSaleController::checkout'], null, ['POST' => 0], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/subscription/plans' => [[['_route' => 'app_subscription_plans', '_controller' => 'App\\Controller\\SubscriptionController::plans'], null, null, null, false, false, null]],
        '/subscription/checkout' => [[['_route' => 'app_subscription_checkout', '_controller' => 'App\\Controller\\SubscriptionController::checkout'], null, ['POST' => 0], null, false, false, null]],
        '/subscription/callback' => [[['_route' => 'app_subscription_callback', '_controller' => 'App\\Controller\\SubscriptionController::callback'], null, null, null, false, false, null]],
        '/super-admin/hma-service' => [[['_route' => 'app_super_admin_hma_service_index', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/super-admin/hma-service/new' => [[['_route' => 'app_super_admin_hma_service_new', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/super/admin/subscription' => [[['_route' => 'app_super_admin_subscription_index', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/super/admin/subscription/new' => [[['_route' => 'app_super_admin_subscription_new', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/super-admin/subscription-plans' => [[['_route' => 'app_super_admin_subscription_plan_index', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionPlanController::index'], null, ['GET' => 0], null, true, false, null]],
        '/super-admin/subscription-plans/new' => [[['_route' => 'app_super_admin_subscription_plan_new', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionPlanController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/super-admin/export' => [[['_route' => 'super_admin_export_index', '_controller' => 'App\\Controller\\SuperAdmin\\SuperAdminExportController::index'], null, ['GET' => 0], null, true, false, null]],
        '/super-admin/export/export-excel' => [[['_route' => 'super_admin_export_excel', '_controller' => 'App\\Controller\\SuperAdmin\\SuperAdminExportController::exportExcel'], null, ['GET' => 0], null, false, false, null]],
        '/super-admin/export/export-all' => [[['_route' => 'super_admin_export_all', '_controller' => 'App\\Controller\\SuperAdmin\\SuperAdminExportController::exportAll'], null, ['GET' => 0], null, false, false, null]],
        '/clear-toast-session' => [[['_route' => 'app_clear_toast', '_controller' => 'App\\Controller\\ToastController::clearToast'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\RegistrationController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/first-login-info' => [[['_route' => 'app_first_login_info', '_controller' => 'App\\Controller\\FirstLoginController::index'], null, ['GET' => 0], null, false, false, null]],
        '/first-login-complete' => [[['_route' => 'app_first_login_complete', '_controller' => 'App\\Controller\\FirstLoginController::complete'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:65)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:101)'
                                .'|router(*:115)'
                                .'|exception(?'
                                    .'|(*:135)'
                                    .'|\\.css(*:148)'
                                .')'
                            .')'
                            .'|(*:158)'
                        .')'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|p(?'
                        .'|urchase/(?'
                            .'|cart/receive/([^/]++)(*:215)'
                            .'|item/([^/]++)(?'
                                .'|(*:239)'
                                .'|/edit(*:252)'
                                .'|(*:260)'
                            .')'
                        .')'
                        .'|ro(?'
                            .'|duct/(?'
                                .'|([^/]++)(?'
                                    .'|(*:294)'
                                    .'|/(?'
                                        .'|edit(*:310)'
                                        .'|toggle\\-status(*:332)'
                                        .'|delete\\-image(*:353)'
                                    .')'
                                    .'|(*:362)'
                                .')'
                                .'|api/([^/]++)/details(*:391)'
                                .'|check/barcode/([^/]++)(*:421)'
                                .'|([^/]++)/(?'
                                    .'|stock\\-batches(*:455)'
                                    .'|print\\-(?'
                                        .'|barcode(*:480)'
                                        .'|sheet(*:493)'
                                    .')'
                                .')'
                            .')'
                            .'|motion/(?'
                                .'|categories/([^/]++)(?'
                                    .'|(*:536)'
                                    .'|/delete(*:551)'
                                .')'
                                .'|products/([^/]++)(?'
                                    .'|(*:580)'
                                    .'|/delete(*:595)'
                                .')'
                                .'|([^/]++)(?'
                                    .'|(*:615)'
                                    .'|/(?'
                                        .'|edit(*:631)'
                                        .'|delete\\-image(*:652)'
                                        .'|toggle\\-status(*:674)'
                                    .')'
                                    .'|(*:683)'
                                .')'
                                .'|product/([^/]++)/promotions(*:719)'
                                .'|category/([^/]++)/promotions(*:755)'
                            .')'
                        .')'
                    .')'
                    .'|category(?'
                        .'|/([^/]++)(?'
                            .'|(*:789)'
                            .'|/(?'
                                .'|edit(*:805)'
                                .'|toggle\\-status(*:827)'
                                .'|activate\\-from\\-quota(*:856)'
                                .'|delete\\-image(*:877)'
                                .'|products(*:893)'
                            .')'
                            .'|(*:902)'
                        .')'
                        .'|\\-recipe/([^/]++)(?'
                            .'|(*:931)'
                            .'|/(?'
                                .'|edit(*:947)'
                                .'|toggle\\-status(*:969)'
                                .'|activate\\-from\\-quota(*:998)'
                                .'|delete\\-image(*:1019)'
                                .'|recipes(*:1035)'
                                .'|promotions(*:1054)'
                            .')'
                            .'|(*:1064)'
                        .')'
                    .')'
                    .'|location/([^/]++)/(?'
                        .'|show(*:1100)'
                        .'|edit(*:1113)'
                        .'|toggle(*:1128)'
                        .'|delete(*:1143)'
                    .')'
                    .'|re(?'
                        .'|cipe/([^/]++)(?'
                            .'|(*:1174)'
                            .'|/(?'
                                .'|edit(*:1191)'
                                .'|toggle\\-status(*:1214)'
                                .'|delete\\-image(*:1236)'
                            .')'
                            .'|(*:1246)'
                        .')'
                        .'|staurant/promotion/(?'
                            .'|categories/([^/]++)(?'
                                .'|(*:1300)'
                                .'|/delete(*:1316)'
                            .')'
                            .'|recipes/([^/]++)(?'
                                .'|(*:1345)'
                                .'|/delete(*:1361)'
                            .')'
                            .'|([^/]++)(?'
                                .'|(*:1382)'
                                .'|/(?'
                                    .'|edit(*:1399)'
                                    .'|delete\\-image(*:1421)'
                                    .'|toggle\\-status(*:1444)'
                                .')'
                                .'|(*:1454)'
                            .')'
                            .'|recipe/([^/]++)/promotions(*:1490)'
                            .'|category\\-recipe/([^/]++)/promotions(*:1535)'
                        .')'
                    .')'
                    .'|s(?'
                        .'|tock\\-batch/(?'
                            .'|product/([^/]++)(*:1581)'
                            .'|([^/]++)/(?'
                                .'|show(*:1606)'
                                .'|edit(*:1619)'
                                .'|toggle(*:1634)'
                                .'|delete(*:1649)'
                                .'|print(*:1663)'
                            .')'
                            .'|product/([^/]++)/add\\-by\\-purchase(*:1707)'
                        .')'
                        .'|upplier/([^/]++)(?'
                            .'|(*:1736)'
                            .'|/(?'
                                .'|edit(*:1753)'
                                .'|toggle\\-status(*:1776)'
                            .')'
                            .'|(*:1786)'
                        .')'
                    .')'
                    .'|type\\-promotion/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:1832)'
                            .'|toggle\\-status(*:1855)'
                            .'|delete(*:1870)'
                        .')'
                        .'|(*:1880)'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:1906)'
                        .'|/(?'
                            .'|edit(*:1923)'
                            .'|delete\\-photo(*:1945)'
                        .')'
                        .'|(*:1955)'
                    .')'
                .')'
                .'|/manager/team/([^/]++)(?'
                    .'|(*:1991)'
                    .'|/edit(*:2005)'
                .')'
                .'|/purchase/(?'
                    .'|re(?'
                        .'|move\\-product/([^/]++)(*:2055)'
                        .'|ceive/([^/]++)(*:2078)'
                    .')'
                    .'|update\\-quantity/([^/]++)(*:2113)'
                    .'|cancel/([^/]++)(*:2137)'
                    .'|([^/]++)(?'
                        .'|(*:2157)'
                        .'|/print(*:2172)'
                    .')'
                    .'|update\\-item/([^/]++)(*:2203)'
                .')'
                .'|/reset\\-password/([^/]++)(*:2238)'
                .'|/orders/(?'
                    .'|([^/]++)(?'
                        .'|/(?'
                            .'|toggle(*:2279)'
                            .'|delete(*:2294)'
                            .'|receipt\\-content(*:2319)'
                        .')'
                        .'|(*:2329)'
                    .')'
                    .'|receipts\\-content(*:2356)'
                    .'|c(?'
                        .'|heck\\-can\\-sell(*:2384)'
                        .'|ontact\\-admin(*:2406)'
                    .')'
                    .'|([^/]++)/(?'
                        .'|print(*:2433)'
                        .'|download\\-pdf(*:2455)'
                    .')'
                .')'
                .'|/s(?'
                    .'|ale/retail/sale/(?'
                        .'|add\\-product/([^/]++)(*:2511)'
                        .'|update\\-quantity/([^/]++)/([^/]++)(*:2554)'
                        .'|re(?'
                            .'|move\\-item/([^/]++)/([^/]++)(*:2596)'
                            .'|ceipt/([^/]++)(*:2619)'
                        .')'
                    .')'
                    .'|u(?'
                        .'|bscription/success/([^/]++)(*:2661)'
                        .'|per(?'
                            .'|\\-admin/(?'
                                .'|hma\\-service/(?'
                                    .'|([^/]++)(?'
                                        .'|(*:2714)'
                                        .'|/(?'
                                            .'|edit(*:2731)'
                                            .'|toggle\\-status(*:2754)'
                                            .'|delete(*:2769)'
                                            .'|subscriptions(*:2791)'
                                        .')'
                                    .')'
                                    .'|export/([^/]++)(*:2817)'
                                .')'
                                .'|subscription\\-plans/([^/]++)(?'
                                    .'|(*:2858)'
                                    .'|/(?'
                                        .'|edit(*:2875)'
                                        .'|toggle(*:2890)'
                                    .')'
                                    .'|(*:2900)'
                                .')'
                            .')'
                            .'|/admin/subscription/([^/]++)(?'
                                .'|(*:2942)'
                                .'|/edit(*:2956)'
                                .'|(*:2965)'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        65 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        115 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        135 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        158 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        215 => [[['_route' => 'admin_purchase_cart_receive', '_controller' => 'App\\Controller\\Admin\\CartController::receiveCart'], ['id'], ['GET' => 0], null, false, true, null]],
        239 => [[['_route' => 'app_admin_purchase_item_show', '_controller' => 'App\\Controller\\Admin\\PurchaseItemController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        252 => [[['_route' => 'app_admin_purchase_item_edit', '_controller' => 'App\\Controller\\Admin\\PurchaseItemController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        260 => [[['_route' => 'app_admin_purchase_item_delete', '_controller' => 'App\\Controller\\Admin\\PurchaseItemController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        294 => [[['_route' => 'app_admin_product_show', '_controller' => 'App\\Controller\\Admin\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        310 => [[['_route' => 'app_admin_product_edit', '_controller' => 'App\\Controller\\Admin\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        332 => [[['_route' => 'app_admin_product_toggle_status', '_controller' => 'App\\Controller\\Admin\\ProductController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        353 => [[['_route' => 'app_admin_product_delete_image', '_controller' => 'App\\Controller\\Admin\\ProductController::deleteImage'], ['id'], ['POST' => 0], null, false, false, null]],
        362 => [[['_route' => 'app_admin_product_delete', '_controller' => 'App\\Controller\\Admin\\ProductController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        391 => [[['_route' => 'app_admin_product_api_details', '_controller' => 'App\\Controller\\Admin\\ProductController::apiDetails'], ['id'], ['GET' => 0], null, false, false, null]],
        421 => [[['_route' => 'app_admin_product_check_barcode', '_controller' => 'App\\Controller\\Admin\\ProductController::checkBarcode'], ['barcode'], ['GET' => 0], null, false, true, null]],
        455 => [[['_route' => 'app_admin_product_stock_batches', '_controller' => 'App\\Controller\\Admin\\ProductController::stockBatches'], ['id'], ['GET' => 0], null, false, false, null]],
        480 => [[['_route' => 'app_admin_product_print_barcode', '_controller' => 'App\\Controller\\Admin\\ProductController::printBarcode'], ['id'], ['GET' => 0], null, false, false, null]],
        493 => [[['_route' => 'app_admin_product_print_sheet', '_controller' => 'App\\Controller\\Admin\\ProductController::printSheet'], ['id'], ['GET' => 0], null, false, false, null]],
        536 => [[['_route' => 'app_admin_promotion_category_show', '_controller' => 'App\\Controller\\Admin\\PromotionController::categoryShow'], ['id'], ['GET' => 0], null, false, true, null]],
        551 => [[['_route' => 'app_admin_promotion_category_delete', '_controller' => 'App\\Controller\\Admin\\PromotionController::categoryDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        580 => [[['_route' => 'app_admin_promotion_product_show', '_controller' => 'App\\Controller\\Admin\\PromotionController::productShow'], ['id'], ['GET' => 0], null, false, true, null]],
        595 => [[['_route' => 'app_admin_promotion_product_delete', '_controller' => 'App\\Controller\\Admin\\PromotionController::productDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        615 => [[['_route' => 'app_admin_promotion_show', '_controller' => 'App\\Controller\\Admin\\PromotionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        631 => [[['_route' => 'app_admin_promotion_edit', '_controller' => 'App\\Controller\\Admin\\PromotionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        652 => [[['_route' => 'app_admin_promotion_delete_image', '_controller' => 'App\\Controller\\Admin\\PromotionController::deleteImage'], ['id'], ['POST' => 0], null, false, false, null]],
        674 => [[['_route' => 'app_admin_promotion_toggle_status', '_controller' => 'App\\Controller\\Admin\\PromotionController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        683 => [[['_route' => 'app_admin_promotion_delete', '_controller' => 'App\\Controller\\Admin\\PromotionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        719 => [[['_route' => 'app_admin_product_promotions', '_controller' => 'App\\Controller\\Admin\\PromotionController::productPromotions'], ['id'], ['GET' => 0], null, false, false, null]],
        755 => [[['_route' => 'app_admin_category_promotions', '_controller' => 'App\\Controller\\Admin\\PromotionController::categoryPromotions'], ['id'], ['GET' => 0], null, false, false, null]],
        789 => [[['_route' => 'app_admin_category_show', '_controller' => 'App\\Controller\\Admin\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        805 => [[['_route' => 'app_admin_category_edit', '_controller' => 'App\\Controller\\Admin\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        827 => [[['_route' => 'app_admin_category_toggle_status', '_controller' => 'App\\Controller\\Admin\\CategoryController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        856 => [[['_route' => 'app_admin_category_activate_from_quota', '_controller' => 'App\\Controller\\Admin\\CategoryController::activateFromQuota'], ['id'], ['POST' => 0], null, false, false, null]],
        877 => [[['_route' => 'app_admin_category_delete_image', '_controller' => 'App\\Controller\\Admin\\CategoryController::deleteImage'], ['id'], ['POST' => 0], null, false, false, null]],
        893 => [[['_route' => 'app_admin_category_products', '_controller' => 'App\\Controller\\Admin\\CategoryController::products'], ['id'], ['GET' => 0], null, false, false, null]],
        902 => [[['_route' => 'app_admin_category_delete', '_controller' => 'App\\Controller\\Admin\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        931 => [[['_route' => 'app_admin_category_recipe_show', '_controller' => 'App\\Controller\\Admin\\CategoryRecipeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        947 => [[['_route' => 'app_admin_category_recipe_edit', '_controller' => 'App\\Controller\\Admin\\CategoryRecipeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        969 => [[['_route' => 'app_admin_category_recipe_toggle_status', '_controller' => 'App\\Controller\\Admin\\CategoryRecipeController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        998 => [[['_route' => 'app_admin_category_recipe_activate_from_quota', '_controller' => 'App\\Controller\\Admin\\CategoryRecipeController::activateFromQuota'], ['id'], ['POST' => 0], null, false, false, null]],
        1019 => [[['_route' => 'app_admin_category_recipe_delete_image', '_controller' => 'App\\Controller\\Admin\\CategoryRecipeController::deleteImage'], ['id'], ['POST' => 0], null, false, false, null]],
        1035 => [[['_route' => 'app_admin_category_recipe_recipes', '_controller' => 'App\\Controller\\Admin\\CategoryRecipeController::recipes'], ['id'], ['GET' => 0], null, false, false, null]],
        1054 => [[['_route' => 'app_admin_category_recipe_promotions', '_controller' => 'App\\Controller\\Admin\\CategoryRecipeController::promotions'], ['id'], ['GET' => 0], null, false, false, null]],
        1064 => [[['_route' => 'app_admin_category_recipe_delete', '_controller' => 'App\\Controller\\Admin\\CategoryRecipeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1100 => [[['_route' => 'app_admin_location_show', '_controller' => 'App\\Controller\\Admin\\LocationController::show'], ['id'], ['GET' => 0], null, false, false, null]],
        1113 => [[['_route' => 'app_admin_location_edit', '_controller' => 'App\\Controller\\Admin\\LocationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1128 => [[['_route' => 'app_admin_location_toggle', '_controller' => 'App\\Controller\\Admin\\LocationController::toggle'], ['id'], ['POST' => 0], null, false, false, null]],
        1143 => [[['_route' => 'app_admin_location_delete', '_controller' => 'App\\Controller\\Admin\\LocationController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1174 => [[['_route' => 'app_admin_recipe_show', '_controller' => 'App\\Controller\\Admin\\RecipeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1191 => [[['_route' => 'app_admin_recipe_edit', '_controller' => 'App\\Controller\\Admin\\RecipeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1214 => [[['_route' => 'app_admin_recipe_toggle_status', '_controller' => 'App\\Controller\\Admin\\RecipeController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        1236 => [[['_route' => 'app_admin_recipe_delete_image', '_controller' => 'App\\Controller\\Admin\\RecipeController::deleteImage'], ['id'], ['POST' => 0], null, false, false, null]],
        1246 => [[['_route' => 'app_admin_recipe_delete', '_controller' => 'App\\Controller\\Admin\\RecipeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1300 => [[['_route' => 'app_restaurant_promotion_category_show', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::categoryShow'], ['id'], ['GET' => 0], null, false, true, null]],
        1316 => [[['_route' => 'app_restaurant_promotion_category_delete', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::categoryDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        1345 => [[['_route' => 'app_restaurant_promotion_recipe_show', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::recipeShow'], ['id'], ['GET' => 0], null, false, true, null]],
        1361 => [[['_route' => 'app_restaurant_promotion_recipe_delete', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::recipeDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        1382 => [[['_route' => 'app_restaurant_promotion_show', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1399 => [[['_route' => 'app_restaurant_promotion_edit', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1421 => [[['_route' => 'app_restaurant_promotion_delete_image', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::deleteImage'], ['id'], ['POST' => 0], null, false, false, null]],
        1444 => [[['_route' => 'app_restaurant_promotion_toggle_status', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        1454 => [[['_route' => 'app_restaurant_promotion_delete', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1490 => [[['_route' => 'app_restaurant_recipe_promotions', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::recipePromotions'], ['id'], ['GET' => 0], null, false, false, null]],
        1535 => [[['_route' => 'app_restaurant_category_recipe_promotions', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::categoryRecipePromotions'], ['id'], ['GET' => 0], null, false, false, null]],
        1581 => [[['_route' => 'app_admin_stock_batch_index', '_controller' => 'App\\Controller\\Admin\\StockBatchController::index'], ['productId'], ['GET' => 0], null, false, true, null]],
        1606 => [[['_route' => 'app_admin_stock_batch_show', '_controller' => 'App\\Controller\\Admin\\StockBatchController::show'], ['id'], ['GET' => 0], null, false, false, null]],
        1619 => [[['_route' => 'app_admin_stock_batch_edit', '_controller' => 'App\\Controller\\Admin\\StockBatchController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1634 => [[['_route' => 'app_admin_stock_batch_toggle', '_controller' => 'App\\Controller\\Admin\\StockBatchController::toggle'], ['id'], ['POST' => 0], null, false, false, null]],
        1649 => [[['_route' => 'app_admin_stock_batch_delete', '_controller' => 'App\\Controller\\Admin\\StockBatchController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1663 => [[['_route' => 'app_admin_stock_batch_print', '_controller' => 'App\\Controller\\Admin\\StockBatchController::print'], ['id'], ['GET' => 0], null, false, false, null]],
        1707 => [[['_route' => 'app_admin_stock_batch_add_by_purchase', '_controller' => 'App\\Controller\\Admin\\StockBatchController::redirectToPurchase'], ['productId'], ['GET' => 0], null, false, false, null]],
        1736 => [[['_route' => 'app_admin_supplier_show', '_controller' => 'App\\Controller\\Admin\\SupplierController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1753 => [[['_route' => 'app_admin_supplier_edit', '_controller' => 'App\\Controller\\Admin\\SupplierController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1776 => [[['_route' => 'app_admin_supplier_toggle_status', '_controller' => 'App\\Controller\\Admin\\SupplierController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        1786 => [[['_route' => 'app_admin_supplier_delete', '_controller' => 'App\\Controller\\Admin\\SupplierController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1832 => [[['_route' => 'app_admin_type_promotion_edit', '_controller' => 'App\\Controller\\Admin\\TypePromotionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1855 => [[['_route' => 'app_admin_type_promotion_toggle_status', '_controller' => 'App\\Controller\\Admin\\TypePromotionController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        1870 => [[['_route' => 'app_admin_type_promotion_delete', '_controller' => 'App\\Controller\\Admin\\TypePromotionController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1880 => [[['_route' => 'app_admin_type_promotion_show', '_controller' => 'App\\Controller\\Admin\\TypePromotionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1906 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\Admin\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1923 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\Admin\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1945 => [[['_route' => 'app_user_delete_photo', '_controller' => 'App\\Controller\\Admin\\UserController::deletePhoto'], ['id'], ['POST' => 0], null, false, false, null]],
        1955 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\Admin\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1991 => [[['_route' => 'app_manager_team_show', '_controller' => 'App\\Controller\\Manager\\TeamController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2005 => [[['_route' => 'app_manager_team_edit', '_controller' => 'App\\Controller\\Manager\\TeamController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2055 => [[['_route' => 'purchase_remove_product', '_controller' => 'App\\Controller\\PurchaseController::removeProduct'], ['productId'], ['DELETE' => 0], null, false, true, null]],
        2078 => [[['_route' => 'purchase_receive', '_controller' => 'App\\Controller\\PurchaseController::receive'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2113 => [[['_route' => 'purchase_update_quantity', '_controller' => 'App\\Controller\\PurchaseController::updateQuantity'], ['productId'], ['PUT' => 0], null, false, true, null]],
        2137 => [[['_route' => 'purchase_cancel', '_controller' => 'App\\Controller\\PurchaseController::cancel'], ['id'], ['POST' => 0], null, false, true, null]],
        2157 => [[['_route' => 'purchase_show', '_controller' => 'App\\Controller\\PurchaseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2172 => [[['_route' => 'purchase_print', '_controller' => 'App\\Controller\\PurchaseController::print'], ['id'], ['GET' => 0], null, false, false, null]],
        2203 => [[['_route' => 'purchase_update_item', '_controller' => 'App\\Controller\\PurchaseController::updateCartItem'], ['productId'], ['PUT' => 0], null, false, true, null]],
        2238 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        2279 => [[['_route' => 'app_orders_toggle', '_controller' => 'App\\Controller\\Sale\\OrderController::toggle'], ['id'], ['POST' => 0], null, false, false, null]],
        2294 => [[['_route' => 'app_orders_delete', '_controller' => 'App\\Controller\\Sale\\OrderController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        2319 => [[['_route' => 'app_orders_receipt_content', '_controller' => 'App\\Controller\\Sale\\OrderController::receiptContent'], ['id'], ['GET' => 0], null, false, false, null]],
        2329 => [[['_route' => 'app_orders_show', '_controller' => 'App\\Controller\\Sale\\OrderController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2356 => [[['_route' => 'app_orders_receipts_content', '_controller' => 'App\\Controller\\Sale\\OrderController::receiptsContent'], [], ['GET' => 0], null, false, false, null]],
        2384 => [[['_route' => 'api_check_can_sell', '_controller' => 'App\\Controller\\Sale\\OrderController::checkCanSell'], [], ['GET' => 0], null, false, false, null]],
        2406 => [[['_route' => 'app_orders_contact_admin', '_controller' => 'App\\Controller\\Sale\\OrderController::contactAdmin'], [], ['GET' => 0], null, false, false, null]],
        2433 => [[['_route' => 'app_orders_print', '_controller' => 'App\\Controller\\Sale\\OrderController::printReceipt'], ['id'], ['GET' => 0], null, false, false, null]],
        2455 => [[['_route' => 'app_orders_download_pdf', '_controller' => 'App\\Controller\\Sale\\OrderController::downloadPdf'], ['id'], ['GET' => 0], null, false, false, null]],
        2511 => [[['_route' => 'sale_add_product', '_controller' => 'App\\Controller\\Sale\\RetailSaleController::addProduct'], ['id'], ['POST' => 0], null, false, true, null]],
        2554 => [[['_route' => 'sale_update_quantity', '_controller' => 'App\\Controller\\Sale\\RetailSaleController::updateQuantity'], ['type', 'id'], ['PUT' => 0], null, false, true, null]],
        2596 => [[['_route' => 'sale_remove_item', '_controller' => 'App\\Controller\\Sale\\RetailSaleController::removeItem'], ['type', 'id'], ['DELETE' => 0], null, false, true, null]],
        2619 => [[['_route' => 'sale_receipt', '_controller' => 'App\\Controller\\Sale\\RetailSaleController::receipt'], ['id'], ['GET' => 0], null, false, true, null]],
        2661 => [[['_route' => 'app_subscription_success', '_controller' => 'App\\Controller\\SubscriptionController::success'], ['id'], null, null, false, true, null]],
        2714 => [[['_route' => 'app_super_admin_hma_service_show', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2731 => [[['_route' => 'app_super_admin_hma_service_edit', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2754 => [[['_route' => 'app_super_admin_hma_service_toggle', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        2769 => [[['_route' => 'app_super_admin_hma_service_delete', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        2791 => [[['_route' => 'app_super_admin_hma_service_subscriptions', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::subscriptions'], ['id'], ['GET' => 0], null, false, false, null]],
        2817 => [[['_route' => 'app_super_admin_hma_service_export', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        2858 => [[['_route' => 'app_super_admin_subscription_plan_show', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionPlanController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2875 => [[['_route' => 'app_super_admin_subscription_plan_edit', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionPlanController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2890 => [[['_route' => 'app_super_admin_subscription_plan_toggle', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionPlanController::toggle'], ['id'], ['POST' => 0], null, false, false, null]],
        2900 => [[['_route' => 'app_super_admin_subscription_plan_delete', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionPlanController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        2942 => [[['_route' => 'app_super_admin_subscription_show', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2956 => [[['_route' => 'app_super_admin_subscription_edit', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2965 => [
            [['_route' => 'app_super_admin_subscription_delete', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
