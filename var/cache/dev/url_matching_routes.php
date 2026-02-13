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
        '/admin/product' => [[['_route' => 'app_admin_product_index', '_controller' => 'App\\Controller\\Admin\\ProductController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/product/new' => [[['_route' => 'app_admin_product_new', '_controller' => 'App\\Controller\\Admin\\ProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/product/scan/barcode' => [[['_route' => 'app_admin_product_scan_barcode', '_controller' => 'App\\Controller\\Admin\\ProductController::scanBarcode'], null, ['POST' => 0], null, false, false, null]],
        '/admin/product/generate/barcode' => [[['_route' => 'app_admin_product_generate_barcode', '_controller' => 'App\\Controller\\Admin\\ProductController::generateBarcodeAction'], null, ['GET' => 0], null, false, false, null]],
        '/admin/purchase' => [[['_route' => 'admin_purchase_index', '_controller' => 'App\\Controller\\Admin\\PurchaseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/purchase/new' => [[['_route' => 'admin_purchase_new', '_controller' => 'App\\Controller\\Admin\\PurchaseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/purchase/cart' => [[['_route' => 'admin_purchase_cart', '_controller' => 'App\\Controller\\Admin\\PurchaseController::cart'], null, ['GET' => 0], null, false, false, null]],
        '/admin/purchase/cart/add-product' => [[['_route' => 'admin_purchase_cart_add_product', '_controller' => 'App\\Controller\\Admin\\PurchaseController::addToCart'], null, ['POST' => 0], null, false, false, null]],
        '/admin/purchase/cart/clear' => [[['_route' => 'admin_purchase_cart_clear', '_controller' => 'App\\Controller\\Admin\\PurchaseController::clearCart'], null, ['POST' => 0], null, false, false, null]],
        '/admin/purchase/search-products' => [[['_route' => 'admin_purchase_search_products', '_controller' => 'App\\Controller\\Admin\\PurchaseController::searchProducts'], null, ['GET' => 0], null, false, false, null]],
        '/admin/purchase/confirm-order' => [[['_route' => 'admin_purchase_confirm_order', '_controller' => 'App\\Controller\\Admin\\PurchaseController::confirmOrder'], null, ['POST' => 0], null, false, false, null]],
        '/admin/purchase/cart/check-empty' => [[['_route' => 'admin_purchase_cart_check_empty', '_controller' => 'App\\Controller\\Admin\\PurchaseController::checkCartEmpty'], null, ['GET' => 0], null, false, false, null]],
        '/admin/purchase/item/new' => [[['_route' => 'app_admin_purchase_item_new', '_controller' => 'App\\Controller\\Admin\\PurchaseItemController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/stock/batch' => [[['_route' => 'app_admin_stock_batch_index', '_controller' => 'App\\Controller\\Admin\\StockBatchController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/stock/batch/new' => [[['_route' => 'app_admin_stock_batch_new', '_controller' => 'App\\Controller\\Admin\\StockBatchController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/supplier' => [[['_route' => 'app_admin_supplier_index', '_controller' => 'App\\Controller\\Admin\\SupplierController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/supplier/new' => [[['_route' => 'app_admin_supplier_new', '_controller' => 'App\\Controller\\Admin\\SupplierController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\Admin\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\Admin\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard/company/details' => [[['_route' => 'app_dashboard_hmaservice_details', '_controller' => 'App\\Controller\\Dashboard\\HmaServiceProfileController::showDetails'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard/company/edit' => [[['_route' => 'app_dashboard_hmaservice_edit', '_controller' => 'App\\Controller\\Dashboard\\HmaServiceProfileController::editProfile'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard/company/delete-logo' => [[['_route' => 'app_dashboard_hmaservice_delete_logo', '_controller' => 'App\\Controller\\Dashboard\\HmaServiceProfileController::deleteLogo'], null, ['POST' => 0], null, false, false, null]],
        '/dashboard/company/deactivate' => [[['_route' => 'app_dashboard_hmaservice_deactivate', '_controller' => 'App\\Controller\\Dashboard\\HmaServiceProfileController::deactivateCompany'], null, ['POST' => 0], null, false, false, null]],
        '/dashboard/company/activate' => [[['_route' => 'app_dashboard_hmaservice_activate', '_controller' => 'App\\Controller\\Dashboard\\HmaServiceProfileController::activateCompany'], null, ['POST' => 0], null, false, false, null]],
        '/forgot-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/change-password' => [[['_route' => 'app_change_password', '_controller' => 'App\\Controller\\ResetPasswordController::changePassword'], null, null, null, false, false, null]],
        '/first-login-change-password' => [[['_route' => 'app_first_login_change_password', '_controller' => 'App\\Controller\\ResetPasswordController::firstLoginChangePassword'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/super/admin/hma/service' => [[['_route' => 'app_super_admin_hma_service_index', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::index'], null, ['GET' => 0], null, false, false, null]],
        '/super/admin/hma/service/new' => [[['_route' => 'app_super_admin_hma_service_new', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                            .'|cart/(?'
                                .'|re(?'
                                    .'|ceive/([^/]++)(*:221)'
                                    .'|move/([^/]++)(*:242)'
                                .')'
                                .'|update/([^/]++)(*:266)'
                                .'|set\\-supplier/([^/]++)(*:296)'
                            .')'
                            .'|([^/]++)(?'
                                .'|(*:316)'
                                .'|/(?'
                                    .'|edit(?'
                                        .'|(*:335)'
                                        .'|\\-item/([^/]++)(*:358)'
                                    .')'
                                    .'|d(?'
                                        .'|elete(*:376)'
                                        .'|ownload\\-pdf(*:396)'
                                    .')'
                                    .'|re(?'
                                        .'|send\\-email(*:421)'
                                        .'|move\\-item/([^/]++)(*:448)'
                                        .'|ceive\\-api(*:466)'
                                    .')'
                                    .'|generate\\-pdf(*:488)'
                                    .'|view\\-pdf(*:505)'
                                    .'|cancel(*:519)'
                                    .'|a(?'
                                        .'|pprove(*:537)'
                                        .'|dd\\-product/([^/]++)(*:565)'
                                    .')'
                                    .'|update\\-items(*:587)'
                                .')'
                            .')'
                            .'|cart/edit/([^/]++)(*:615)'
                            .'|item(?'
                                .'|(*:630)'
                                .'|/([^/]++)(?'
                                    .'|(*:650)'
                                    .'|/edit(*:663)'
                                    .'|(*:671)'
                                .')'
                            .')'
                        .')'
                        .'|roduct/(?'
                            .'|([^/]++)(?'
                                .'|(*:703)'
                                .'|/(?'
                                    .'|edit(*:719)'
                                    .'|toggle\\-status(*:741)'
                                    .'|delete\\-image(*:762)'
                                .')'
                                .'|(*:771)'
                            .')'
                            .'|api/([^/]++)/details(*:800)'
                            .'|check/barcode/([^/]++)(*:830)'
                        .')'
                    .')'
                    .'|category/([^/]++)(?'
                        .'|(*:860)'
                        .'|/(?'
                            .'|edit(*:876)'
                            .'|toggle\\-status(*:898)'
                            .'|delete\\-image(*:919)'
                        .')'
                        .'|(*:928)'
                    .')'
                    .'|s(?'
                        .'|tock/batch/([^/]++)(?'
                            .'|(*:963)'
                            .'|/edit(*:976)'
                            .'|(*:984)'
                        .')'
                        .'|upplier/([^/]++)(?'
                            .'|(*:1012)'
                            .'|/edit(*:1026)'
                            .'|(*:1035)'
                        .')'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:1062)'
                        .'|/(?'
                            .'|edit(*:1079)'
                            .'|toggle\\-status(*:1102)'
                            .'|delete\\-photo(*:1124)'
                        .')'
                        .'|(*:1134)'
                    .')'
                .')'
                .'|/reset\\-password/([^/]++)(*:1170)'
                .'|/super/admin/hma/service/([^/]++)(?'
                    .'|(*:1215)'
                    .'|/(?'
                        .'|edit(*:1232)'
                        .'|delete\\-logo(*:1253)'
                    .')'
                    .'|(*:1263)'
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
        221 => [[['_route' => 'admin_purchase_cart_receive', '_controller' => 'App\\Controller\\Admin\\CartController::receiveCart'], ['id'], ['GET' => 0], null, false, true, null]],
        242 => [[['_route' => 'admin_purchase_cart_remove', '_controller' => 'App\\Controller\\Admin\\PurchaseController::removeCartItem'], ['index'], ['DELETE' => 0], null, false, true, null]],
        266 => [[['_route' => 'admin_purchase_cart_update', '_controller' => 'App\\Controller\\Admin\\PurchaseController::updateCartItem'], ['index'], ['POST' => 0], null, false, true, null]],
        296 => [[['_route' => 'admin_purchase_cart_set_supplier', '_controller' => 'App\\Controller\\Admin\\PurchaseController::setCartSupplier'], ['id'], ['POST' => 0], null, false, true, null]],
        316 => [[['_route' => 'admin_purchase_show', '_controller' => 'App\\Controller\\Admin\\PurchaseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        335 => [[['_route' => 'admin_purchase_edit', '_controller' => 'App\\Controller\\Admin\\PurchaseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        358 => [[['_route' => 'admin_purchase_edit_item', '_controller' => 'App\\Controller\\Admin\\PurchaseController::editPurchaseItem'], ['id', 'itemId'], ['POST' => 0], null, false, true, null]],
        376 => [[['_route' => 'admin_purchase_delete', '_controller' => 'App\\Controller\\Admin\\PurchaseController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        396 => [[['_route' => 'admin_purchase_download_pdf', '_controller' => 'App\\Controller\\Admin\\PurchaseController::downloadPdf'], ['id'], ['GET' => 0], null, false, false, null]],
        421 => [[['_route' => 'admin_purchase_resend_email', '_controller' => 'App\\Controller\\Admin\\PurchaseController::resendEmail'], ['id'], ['POST' => 0], null, false, false, null]],
        448 => [[['_route' => 'admin_purchase_remove_item', '_controller' => 'App\\Controller\\Admin\\PurchaseController::removePurchaseItem'], ['id', 'itemId'], ['DELETE' => 0], null, false, true, null]],
        466 => [[['_route' => 'admin_purchase_receive_api', '_controller' => 'App\\Controller\\Admin\\PurchaseController::receivePurchaseApi'], ['id'], ['POST' => 0], null, false, false, null]],
        488 => [[['_route' => 'admin_purchase_generate_pdf', '_controller' => 'App\\Controller\\Admin\\PurchaseController::generatePdf'], ['id'], ['GET' => 0], null, false, false, null]],
        505 => [[['_route' => 'admin_purchase_view_pdf', '_controller' => 'App\\Controller\\Admin\\PurchaseController::viewPdf'], ['id'], ['GET' => 0], null, false, false, null]],
        519 => [[['_route' => 'admin_purchase_cancel', '_controller' => 'App\\Controller\\Admin\\PurchaseController::cancelPurchase'], ['id'], ['POST' => 0], null, false, false, null]],
        537 => [[['_route' => 'admin_purchase_approve', '_controller' => 'App\\Controller\\Admin\\PurchaseController::approvePurchase'], ['id'], ['POST' => 0], null, false, false, null]],
        565 => [[['_route' => 'admin_purchase_add_product_to_purchase', '_controller' => 'App\\Controller\\Admin\\PurchaseController::addProductToPurchase'], ['purchaseId', 'productId'], ['POST' => 0], null, false, true, null]],
        587 => [[['_route' => 'admin_purchase_update_items', '_controller' => 'App\\Controller\\Admin\\PurchaseController::updatePurchaseItems'], ['id'], ['POST' => 0], null, false, false, null]],
        615 => [[['_route' => 'admin_purchase_cart_edit', '_controller' => 'App\\Controller\\Admin\\PurchaseController::cartEdit'], ['id'], ['GET' => 0], null, false, true, null]],
        630 => [[['_route' => 'app_admin_purchase_item_index', '_controller' => 'App\\Controller\\Admin\\PurchaseItemController::index'], [], ['GET' => 0], null, false, false, null]],
        650 => [[['_route' => 'app_admin_purchase_item_show', '_controller' => 'App\\Controller\\Admin\\PurchaseItemController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        663 => [[['_route' => 'app_admin_purchase_item_edit', '_controller' => 'App\\Controller\\Admin\\PurchaseItemController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        671 => [[['_route' => 'app_admin_purchase_item_delete', '_controller' => 'App\\Controller\\Admin\\PurchaseItemController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        703 => [[['_route' => 'app_admin_product_show', '_controller' => 'App\\Controller\\Admin\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        719 => [[['_route' => 'app_admin_product_edit', '_controller' => 'App\\Controller\\Admin\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        741 => [[['_route' => 'app_admin_product_toggle_status', '_controller' => 'App\\Controller\\Admin\\ProductController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        762 => [[['_route' => 'app_admin_product_delete_image', '_controller' => 'App\\Controller\\Admin\\ProductController::deleteImage'], ['id'], ['POST' => 0], null, false, false, null]],
        771 => [[['_route' => 'app_admin_product_delete', '_controller' => 'App\\Controller\\Admin\\ProductController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        800 => [[['_route' => 'app_admin_product_api_details', '_controller' => 'App\\Controller\\Admin\\ProductController::apiDetails'], ['id'], ['GET' => 0], null, false, false, null]],
        830 => [[['_route' => 'app_admin_product_check_barcode', '_controller' => 'App\\Controller\\Admin\\ProductController::checkBarcode'], ['barcode'], ['GET' => 0], null, false, true, null]],
        860 => [[['_route' => 'app_admin_category_show', '_controller' => 'App\\Controller\\Admin\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        876 => [[['_route' => 'app_admin_category_edit', '_controller' => 'App\\Controller\\Admin\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        898 => [[['_route' => 'app_admin_category_toggle_status', '_controller' => 'App\\Controller\\Admin\\CategoryController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        919 => [[['_route' => 'app_admin_category_delete_image', '_controller' => 'App\\Controller\\Admin\\CategoryController::deleteImage'], ['id'], ['POST' => 0], null, false, false, null]],
        928 => [[['_route' => 'app_admin_category_delete', '_controller' => 'App\\Controller\\Admin\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        963 => [[['_route' => 'app_admin_stock_batch_show', '_controller' => 'App\\Controller\\Admin\\StockBatchController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        976 => [[['_route' => 'app_admin_stock_batch_edit', '_controller' => 'App\\Controller\\Admin\\StockBatchController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        984 => [[['_route' => 'app_admin_stock_batch_delete', '_controller' => 'App\\Controller\\Admin\\StockBatchController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1012 => [[['_route' => 'app_admin_supplier_show', '_controller' => 'App\\Controller\\Admin\\SupplierController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1026 => [[['_route' => 'app_admin_supplier_edit', '_controller' => 'App\\Controller\\Admin\\SupplierController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1035 => [[['_route' => 'app_admin_supplier_delete', '_controller' => 'App\\Controller\\Admin\\SupplierController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1062 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\Admin\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1079 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\Admin\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1102 => [[['_route' => 'app_user_toggle_status', '_controller' => 'App\\Controller\\Admin\\UserController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        1124 => [[['_route' => 'app_user_delete_photo', '_controller' => 'App\\Controller\\Admin\\UserController::deletePhoto'], ['id'], ['POST' => 0], null, false, false, null]],
        1134 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\Admin\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1170 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        1215 => [[['_route' => 'app_super_admin_hma_service_show', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1232 => [[['_route' => 'app_super_admin_hma_service_edit', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1253 => [[['_route' => 'app_super_admin_hma_service_delete_logo', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::deleteLogo'], ['id'], ['POST' => 0], null, false, false, null]],
        1263 => [
            [['_route' => 'app_super_admin_hma_service_delete', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
