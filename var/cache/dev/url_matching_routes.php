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
        '/admin/stock/batch' => [[['_route' => 'app_admin_stock_batch_index', '_controller' => 'App\\Controller\\Admin\\StockBatchController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/stock/batch/new' => [[['_route' => 'app_admin_stock_batch_new', '_controller' => 'App\\Controller\\Admin\\StockBatchController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                            .')'
                            .'|motion/(?'
                                .'|categories/([^/]++)(?'
                                    .'|(*:462)'
                                    .'|/delete(*:477)'
                                .')'
                                .'|products/([^/]++)(?'
                                    .'|(*:506)'
                                    .'|/delete(*:521)'
                                .')'
                                .'|([^/]++)(?'
                                    .'|(*:541)'
                                    .'|/(?'
                                        .'|edit(*:557)'
                                        .'|delete\\-image(*:578)'
                                        .'|toggle\\-status(*:600)'
                                    .')'
                                    .'|(*:609)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|category(?'
                        .'|/([^/]++)(?'
                            .'|(*:644)'
                            .'|/(?'
                                .'|edit(*:660)'
                                .'|toggle\\-status(*:682)'
                                .'|activate\\-from\\-quota(*:711)'
                                .'|delete\\-image(*:732)'
                                .'|pro(?'
                                    .'|ducts(*:751)'
                                    .'|motions(*:766)'
                                .')'
                            .')'
                            .'|(*:776)'
                        .')'
                        .'|\\-recipe/([^/]++)(?'
                            .'|(*:805)'
                            .'|/(?'
                                .'|edit(*:821)'
                                .'|toggle\\-status(*:843)'
                                .'|activate\\-from\\-quota(*:872)'
                                .'|delete\\-image(*:893)'
                                .'|recipes(*:908)'
                                .'|promotions(*:926)'
                            .')'
                            .'|(*:935)'
                        .')'
                    .')'
                    .'|re(?'
                        .'|cipe/([^/]++)(?'
                            .'|(*:966)'
                            .'|/(?'
                                .'|edit(*:982)'
                                .'|toggle\\-status(*:1004)'
                                .'|delete\\-image(*:1026)'
                            .')'
                            .'|(*:1036)'
                        .')'
                        .'|staurant/promotion/(?'
                            .'|categories/([^/]++)(?'
                                .'|(*:1090)'
                                .'|/delete(*:1106)'
                            .')'
                            .'|recipes/([^/]++)(?'
                                .'|(*:1135)'
                                .'|/delete(*:1151)'
                            .')'
                            .'|([^/]++)(?'
                                .'|(*:1172)'
                                .'|/(?'
                                    .'|edit(*:1189)'
                                    .'|delete\\-image(*:1211)'
                                    .'|toggle\\-status(*:1234)'
                                .')'
                                .'|(*:1244)'
                            .')'
                        .')'
                    .')'
                    .'|s(?'
                        .'|tock/batch/([^/]++)(?'
                            .'|(*:1282)'
                            .'|/edit(*:1296)'
                            .'|(*:1305)'
                        .')'
                        .'|upplier/([^/]++)(?'
                            .'|(*:1334)'
                            .'|/(?'
                                .'|edit(*:1351)'
                                .'|toggle\\-status(*:1374)'
                            .')'
                            .'|(*:1384)'
                        .')'
                    .')'
                    .'|type\\-promotion/([^/]++)/(?'
                        .'|edit(*:1427)'
                        .'|delete(*:1442)'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:1468)'
                        .'|/(?'
                            .'|edit(*:1485)'
                            .'|delete\\-photo(*:1507)'
                        .')'
                        .'|(*:1517)'
                    .')'
                .')'
                .'|/manager/team/([^/]++)(?'
                    .'|(*:1553)'
                    .'|/edit(*:1567)'
                .')'
                .'|/purchase/(?'
                    .'|re(?'
                        .'|move\\-product/([^/]++)(*:1617)'
                        .'|ceive/([^/]++)(*:1640)'
                    .')'
                    .'|update\\-quantity/([^/]++)(*:1675)'
                    .'|cancel/([^/]++)(*:1699)'
                    .'|([^/]++)(?'
                        .'|(*:1719)'
                        .'|/print(*:1734)'
                    .')'
                    .'|update\\-item/([^/]++)(*:1765)'
                .')'
                .'|/reset\\-password/([^/]++)(*:1800)'
                .'|/su(?'
                    .'|bscription/success/([^/]++)(*:1842)'
                    .'|per(?'
                        .'|\\-admin/(?'
                            .'|hma\\-service/(?'
                                .'|([^/]++)(?'
                                    .'|(*:1895)'
                                    .'|/(?'
                                        .'|edit(*:1912)'
                                        .'|toggle\\-status(*:1935)'
                                        .'|delete(*:1950)'
                                        .'|subscriptions(*:1972)'
                                    .')'
                                .')'
                                .'|export/([^/]++)(*:1998)'
                            .')'
                            .'|subscription\\-plans/([^/]++)(?'
                                .'|(*:2039)'
                                .'|/(?'
                                    .'|edit(*:2056)'
                                    .'|toggle(*:2071)'
                                .')'
                                .'|(*:2081)'
                            .')'
                        .')'
                        .'|/admin/subscription/([^/]++)(?'
                            .'|(*:2123)'
                            .'|/edit(*:2137)'
                            .'|(*:2146)'
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
        462 => [[['_route' => 'app_admin_promotion_category_show', '_controller' => 'App\\Controller\\Admin\\PromotionController::categoryShow'], ['id'], ['GET' => 0], null, false, true, null]],
        477 => [[['_route' => 'app_admin_promotion_category_delete', '_controller' => 'App\\Controller\\Admin\\PromotionController::categoryDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        506 => [[['_route' => 'app_admin_promotion_product_show', '_controller' => 'App\\Controller\\Admin\\PromotionController::productShow'], ['id'], ['GET' => 0], null, false, true, null]],
        521 => [[['_route' => 'app_admin_promotion_product_delete', '_controller' => 'App\\Controller\\Admin\\PromotionController::productDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        541 => [[['_route' => 'app_admin_promotion_show', '_controller' => 'App\\Controller\\Admin\\PromotionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        557 => [[['_route' => 'app_admin_promotion_edit', '_controller' => 'App\\Controller\\Admin\\PromotionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        578 => [[['_route' => 'app_admin_promotion_delete_image', '_controller' => 'App\\Controller\\Admin\\PromotionController::deleteImage'], ['id'], ['POST' => 0], null, false, false, null]],
        600 => [[['_route' => 'app_admin_promotion_toggle_status', '_controller' => 'App\\Controller\\Admin\\PromotionController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        609 => [[['_route' => 'app_admin_promotion_delete', '_controller' => 'App\\Controller\\Admin\\PromotionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        644 => [[['_route' => 'app_admin_category_show', '_controller' => 'App\\Controller\\Admin\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        660 => [[['_route' => 'app_admin_category_edit', '_controller' => 'App\\Controller\\Admin\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        682 => [[['_route' => 'app_admin_category_toggle_status', '_controller' => 'App\\Controller\\Admin\\CategoryController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        711 => [[['_route' => 'app_admin_category_activate_from_quota', '_controller' => 'App\\Controller\\Admin\\CategoryController::activateFromQuota'], ['id'], ['POST' => 0], null, false, false, null]],
        732 => [[['_route' => 'app_admin_category_delete_image', '_controller' => 'App\\Controller\\Admin\\CategoryController::deleteImage'], ['id'], ['POST' => 0], null, false, false, null]],
        751 => [[['_route' => 'app_admin_category_products', '_controller' => 'App\\Controller\\Admin\\CategoryController::products'], ['id'], ['GET' => 0], null, false, false, null]],
        766 => [[['_route' => 'app_admin_category_promotions', '_controller' => 'App\\Controller\\Admin\\CategoryController::promotions'], ['id'], ['GET' => 0], null, false, false, null]],
        776 => [[['_route' => 'app_admin_category_delete', '_controller' => 'App\\Controller\\Admin\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        805 => [[['_route' => 'app_admin_category_recipe_show', '_controller' => 'App\\Controller\\Admin\\CategoryRecipeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        821 => [[['_route' => 'app_admin_category_recipe_edit', '_controller' => 'App\\Controller\\Admin\\CategoryRecipeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        843 => [[['_route' => 'app_admin_category_recipe_toggle_status', '_controller' => 'App\\Controller\\Admin\\CategoryRecipeController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        872 => [[['_route' => 'app_admin_category_recipe_activate_from_quota', '_controller' => 'App\\Controller\\Admin\\CategoryRecipeController::activateFromQuota'], ['id'], ['POST' => 0], null, false, false, null]],
        893 => [[['_route' => 'app_admin_category_recipe_delete_image', '_controller' => 'App\\Controller\\Admin\\CategoryRecipeController::deleteImage'], ['id'], ['POST' => 0], null, false, false, null]],
        908 => [[['_route' => 'app_admin_category_recipe_recipes', '_controller' => 'App\\Controller\\Admin\\CategoryRecipeController::recipes'], ['id'], ['GET' => 0], null, false, false, null]],
        926 => [[['_route' => 'app_admin_category_recipe_promotions', '_controller' => 'App\\Controller\\Admin\\CategoryRecipeController::promotions'], ['id'], ['GET' => 0], null, false, false, null]],
        935 => [[['_route' => 'app_admin_category_recipe_delete', '_controller' => 'App\\Controller\\Admin\\CategoryRecipeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        966 => [[['_route' => 'app_admin_recipe_show', '_controller' => 'App\\Controller\\Admin\\RecipeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        982 => [[['_route' => 'app_admin_recipe_edit', '_controller' => 'App\\Controller\\Admin\\RecipeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1004 => [[['_route' => 'app_admin_recipe_toggle_status', '_controller' => 'App\\Controller\\Admin\\RecipeController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        1026 => [[['_route' => 'app_admin_recipe_delete_image', '_controller' => 'App\\Controller\\Admin\\RecipeController::deleteImage'], ['id'], ['POST' => 0], null, false, false, null]],
        1036 => [[['_route' => 'app_admin_recipe_delete', '_controller' => 'App\\Controller\\Admin\\RecipeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1090 => [[['_route' => 'app_restaurant_promotion_category_show', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::categoryShow'], ['id'], ['GET' => 0], null, false, true, null]],
        1106 => [[['_route' => 'app_restaurant_promotion_category_delete', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::categoryDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        1135 => [[['_route' => 'app_restaurant_promotion_recipe_show', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::recipeShow'], ['id'], ['GET' => 0], null, false, true, null]],
        1151 => [[['_route' => 'app_restaurant_promotion_recipe_delete', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::recipeDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        1172 => [[['_route' => 'app_restaurant_promotion_show', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1189 => [[['_route' => 'app_restaurant_promotion_edit', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1211 => [[['_route' => 'app_restaurant_promotion_delete_image', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::deleteImage'], ['id'], ['POST' => 0], null, false, false, null]],
        1234 => [[['_route' => 'app_restaurant_promotion_toggle_status', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        1244 => [[['_route' => 'app_restaurant_promotion_delete', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1282 => [[['_route' => 'app_admin_stock_batch_show', '_controller' => 'App\\Controller\\Admin\\StockBatchController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1296 => [[['_route' => 'app_admin_stock_batch_edit', '_controller' => 'App\\Controller\\Admin\\StockBatchController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1305 => [[['_route' => 'app_admin_stock_batch_delete', '_controller' => 'App\\Controller\\Admin\\StockBatchController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1334 => [[['_route' => 'app_admin_supplier_show', '_controller' => 'App\\Controller\\Admin\\SupplierController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1351 => [[['_route' => 'app_admin_supplier_edit', '_controller' => 'App\\Controller\\Admin\\SupplierController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1374 => [[['_route' => 'app_admin_supplier_toggle_status', '_controller' => 'App\\Controller\\Admin\\SupplierController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        1384 => [[['_route' => 'app_admin_supplier_delete', '_controller' => 'App\\Controller\\Admin\\SupplierController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1427 => [[['_route' => 'app_admin_type_promotion_edit', '_controller' => 'App\\Controller\\Admin\\TypePromotionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1442 => [[['_route' => 'app_admin_type_promotion_delete', '_controller' => 'App\\Controller\\Admin\\TypePromotionController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1468 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\Admin\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1485 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\Admin\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1507 => [[['_route' => 'app_user_delete_photo', '_controller' => 'App\\Controller\\Admin\\UserController::deletePhoto'], ['id'], ['POST' => 0], null, false, false, null]],
        1517 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\Admin\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1553 => [[['_route' => 'app_manager_team_show', '_controller' => 'App\\Controller\\Manager\\TeamController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1567 => [[['_route' => 'app_manager_team_edit', '_controller' => 'App\\Controller\\Manager\\TeamController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1617 => [[['_route' => 'purchase_remove_product', '_controller' => 'App\\Controller\\PurchaseController::removeProduct'], ['productId'], ['DELETE' => 0], null, false, true, null]],
        1640 => [[['_route' => 'purchase_receive', '_controller' => 'App\\Controller\\PurchaseController::receive'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1675 => [[['_route' => 'purchase_update_quantity', '_controller' => 'App\\Controller\\PurchaseController::updateQuantity'], ['productId'], ['PUT' => 0], null, false, true, null]],
        1699 => [[['_route' => 'purchase_cancel', '_controller' => 'App\\Controller\\PurchaseController::cancel'], ['id'], ['POST' => 0], null, false, true, null]],
        1719 => [[['_route' => 'purchase_show', '_controller' => 'App\\Controller\\PurchaseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1734 => [[['_route' => 'purchase_print', '_controller' => 'App\\Controller\\PurchaseController::print'], ['id'], ['GET' => 0], null, false, false, null]],
        1765 => [[['_route' => 'purchase_update_item', '_controller' => 'App\\Controller\\PurchaseController::updateCartItem'], ['productId'], ['PUT' => 0], null, false, true, null]],
        1800 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        1842 => [[['_route' => 'app_subscription_success', '_controller' => 'App\\Controller\\SubscriptionController::success'], ['id'], null, null, false, true, null]],
        1895 => [[['_route' => 'app_super_admin_hma_service_show', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1912 => [[['_route' => 'app_super_admin_hma_service_edit', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1935 => [[['_route' => 'app_super_admin_hma_service_toggle', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        1950 => [[['_route' => 'app_super_admin_hma_service_delete', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1972 => [[['_route' => 'app_super_admin_hma_service_subscriptions', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::subscriptions'], ['id'], ['GET' => 0], null, false, false, null]],
        1998 => [[['_route' => 'app_super_admin_hma_service_export', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        2039 => [[['_route' => 'app_super_admin_subscription_plan_show', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionPlanController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2056 => [[['_route' => 'app_super_admin_subscription_plan_edit', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionPlanController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2071 => [[['_route' => 'app_super_admin_subscription_plan_toggle', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionPlanController::toggle'], ['id'], ['POST' => 0], null, false, false, null]],
        2081 => [[['_route' => 'app_super_admin_subscription_plan_delete', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionPlanController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        2123 => [[['_route' => 'app_super_admin_subscription_show', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2137 => [[['_route' => 'app_super_admin_subscription_edit', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2146 => [
            [['_route' => 'app_super_admin_subscription_delete', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
