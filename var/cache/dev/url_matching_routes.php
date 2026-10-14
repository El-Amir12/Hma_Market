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
        '/resend-activation' => [[['_route' => 'app_resend_activation', '_controller' => 'App\\Controller\\AccountActivationController::resend'], null, ['POST' => 0], null, false, false, null]],
        '/admin/category' => [[['_route' => 'app_admin_category_index', '_controller' => 'App\\Controller\\Admin\\CategoryController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/category/new' => [[['_route' => 'app_admin_category_new', '_controller' => 'App\\Controller\\Admin\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/category-recipe' => [[['_route' => 'app_admin_category_recipe_index', '_controller' => 'App\\Controller\\Admin\\CategoryRecipeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/category-recipe/new' => [[['_route' => 'app_admin_category_recipe_new', '_controller' => 'App\\Controller\\Admin\\CategoryRecipeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/location' => [[['_route' => 'app_admin_location_index', '_controller' => 'App\\Controller\\Admin\\LocationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/location/new' => [[['_route' => 'app_admin_location_new', '_controller' => 'App\\Controller\\Admin\\LocationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/location/api/search' => [[['_route' => 'app_admin_location_api_search', '_controller' => 'App\\Controller\\Admin\\LocationController::apiSearch'], null, ['GET' => 0], null, false, false, null]],
        '/admin/payment' => [[['_route' => 'admin_payment_index', '_controller' => 'App\\Controller\\Admin\\PaymentController::index'], null, ['GET' => 0], null, true, false, null]],
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
        '/admin/stock-batch/import/excel' => [[['_route' => 'app_admin_stock_batch_import_excel', '_controller' => 'App\\Controller\\Admin\\StockBatchController::importExcel'], null, ['POST' => 0], null, false, false, null]],
        '/admin/stock-batch/export/pdf' => [[['_route' => 'app_admin_stock_batch_export_pdf', '_controller' => 'App\\Controller\\Admin\\StockBatchController::exportPdf'], null, ['GET' => 0], null, false, false, null]],
        '/admin/stock-batch/export/excel/template' => [[['_route' => 'app_admin_stock_batch_export_excel_template', '_controller' => 'App\\Controller\\Admin\\StockBatchController::exportExcelTemplate'], null, ['GET' => 0], null, false, false, null]],
        '/admin/stock-movement' => [[['_route' => 'app_admin_stock_movement_index', '_controller' => 'App\\Controller\\Admin\\StockMovementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/stock-movement/export/excel' => [[['_route' => 'app_admin_stock_movement_export_excel', '_controller' => 'App\\Controller\\Admin\\StockMovementController::exportExcel'], null, ['GET' => 0], null, false, false, null]],
        '/admin/stock-movement/export/pdf' => [[['_route' => 'app_admin_stock_movement_export_pdf', '_controller' => 'App\\Controller\\Admin\\StockMovementController::exportPdf'], null, ['GET' => 0], null, false, false, null]],
        '/admin/stock-movement/print-multiple' => [[['_route' => 'app_admin_stock_movement_print_multiple', '_controller' => 'App\\Controller\\Admin\\StockMovementController::printMultiple'], null, ['GET' => 0], null, false, false, null]],
        '/admin/subscription' => [[['_route' => 'admin_subscription_index', '_controller' => 'App\\Controller\\Admin\\SubscriptionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/supplier' => [[['_route' => 'app_admin_supplier_index', '_controller' => 'App\\Controller\\Admin\\SupplierController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/supplier/new' => [[['_route' => 'app_admin_supplier_new', '_controller' => 'App\\Controller\\Admin\\SupplierController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/supplier-credit-note' => [[['_route' => 'app_supplier_credit_note_index', '_controller' => 'App\\Controller\\Admin\\SupplierCreditNoteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/supplier-credit-note/export/excel' => [[['_route' => 'app_supplier_credit_note_export_excel', '_controller' => 'App\\Controller\\Admin\\SupplierCreditNoteController::exportExcel'], null, ['GET' => 0], null, false, false, null]],
        '/admin/supplier-credit-note/export/pdf' => [[['_route' => 'app_supplier_credit_note_export_pdf', '_controller' => 'App\\Controller\\Admin\\SupplierCreditNoteController::exportPdf'], null, ['GET' => 0], null, false, false, null]],
        '/admin/type-promotion' => [[['_route' => 'app_admin_type_promotion_index', '_controller' => 'App\\Controller\\Admin\\TypePromotionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/type-promotion/new' => [[['_route' => 'app_admin_type_promotion_new', '_controller' => 'App\\Controller\\Admin\\TypePromotionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\Admin\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\Admin\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/products/search/barcode' => [[['_route' => 'api_product_search_barcode', '_controller' => 'App\\Controller\\Api\\ProductSearchController::searchByBarcode'], null, ['GET' => 0], null, false, false, null]],
        '/company/analysis' => [[['_route' => 'company_analysis_index', '_controller' => 'App\\Controller\\Company\\CompanyAnalysisController::index'], null, ['GET' => 0], null, true, false, null]],
        '/company/analysis/new' => [[['_route' => 'company_analysis_new', '_controller' => 'App\\Controller\\Company\\CompanyAnalysisController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/company/settings' => [[['_route' => 'app_company_settings_index', '_controller' => 'App\\Controller\\Company\\CompanySettingsController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/company/settings/guard-periods' => [[['_route' => 'app_company_settings_guard_periods', '_controller' => 'App\\Controller\\Company\\CompanySettingsController::saveGuardPeriods'], null, ['POST' => 0], null, false, false, null]],
        '/toggle-visibility' => [[['_route' => 'app_dashboard_toggle_visibility', '_controller' => 'App\\Controller\\DashboardController::toggleVisibility'], null, ['POST' => 0], null, false, false, null]],
        '/guard-periods' => [[['_route' => 'app_dashboard_guard_periods', '_controller' => 'App\\Controller\\DashboardController::saveGuardPeriods'], null, ['POST' => 0], null, false, false, null]],
        '/dashboard/company/details' => [[['_route' => 'app_dashboard_hmaservice_details', '_controller' => 'App\\Controller\\Dashboard\\HmaServiceProfileController::showDetails'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard/company/edit' => [[['_route' => 'app_dashboard_hmaservice_edit', '_controller' => 'App\\Controller\\Dashboard\\HmaServiceProfileController::editProfile'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard/company/delete-logo' => [[['_route' => 'app_dashboard_hmaservice_delete_logo', '_controller' => 'App\\Controller\\Dashboard\\HmaServiceProfileController::deleteLogo'], null, ['POST' => 0], null, false, false, null]],
        '/dashboard/company/deactivate' => [[['_route' => 'app_dashboard_hmaservice_deactivate', '_controller' => 'App\\Controller\\Dashboard\\HmaServiceProfileController::deactivateCompany'], null, ['POST' => 0], null, false, false, null]],
        '/dashboard/company/activate' => [[['_route' => 'app_dashboard_hmaservice_activate', '_controller' => 'App\\Controller\\Dashboard\\HmaServiceProfileController::activateCompany'], null, ['POST' => 0], null, false, false, null]],
        '/css/company-theme.css' => [[['_route' => 'app_dynamic_css', '_controller' => 'App\\Controller\\DynamicStyleController::getCompanyTheme'], null, null, null, false, false, null]],
        '/manager/team' => [[['_route' => 'app_manager_team_index', '_controller' => 'App\\Controller\\Manager\\TeamController::index'], null, ['GET' => 0], null, true, false, null]],
        '/marketplace/login' => [[['_route' => 'marketplace_login', '_controller' => 'App\\Controller\\Marketplace\\AuthController::login'], null, null, null, false, false, null]],
        '/marketplace/register' => [
            [['_route' => 'marketplace_register', '_controller' => 'App\\Controller\\Marketplace\\AuthController::register'], null, null, null, false, false, null],
            [['_route' => 'marketplace_register_simple', '_controller' => 'App\\Controller\\Marketplace\\RegistrationController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null],
        ],
        '/marketplace/logout' => [[['_route' => 'marketplace_logout', '_controller' => 'App\\Controller\\Marketplace\\AuthController::logout'], null, null, null, false, false, null]],
        '/marketplace/cart' => [[['_route' => 'marketplace_cart', '_controller' => 'App\\Controller\\Marketplace\\CartController::index'], null, null, null, true, false, null]],
        '/marketplace/cart/clear' => [[['_route' => 'marketplace_cart_clear', '_controller' => 'App\\Controller\\Marketplace\\CartController::clear'], null, ['POST' => 0], null, false, false, null]],
        '/marketplace/cart/checkout' => [[['_route' => 'marketplace_cart_checkout', '_controller' => 'App\\Controller\\Marketplace\\CartController::checkout'], null, ['POST' => 0], null, false, false, null]],
        '/marketplace/cart/payment/callback' => [[['_route' => 'marketplace_payment_callback', '_controller' => 'App\\Controller\\Marketplace\\CartController::paymentCallback'], null, null, null, false, false, null]],
        '/marketplace/favorites' => [[['_route' => 'marketplace_favorites', '_controller' => 'App\\Controller\\Marketplace\\FavoriteController::index'], null, null, null, false, false, null]],
        '/marketplace/forgot-password' => [[['_route' => 'marketplace_forgot_password', '_controller' => 'App\\Controller\\Marketplace\\ForgotPasswordController::forgotPassword'], null, null, null, false, false, null]],
        '/marketplace/check-email' => [[['_route' => 'marketplace_check_email', '_controller' => 'App\\Controller\\Marketplace\\ForgotPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/marketplace' => [[['_route' => 'marketplace_home', '_controller' => 'App\\Controller\\Marketplace\\HomeController::index'], null, null, null, false, false, null]],
        '/marketplace/favorite/toggle' => [[['_route' => 'marketplace_favorite_toggle', '_controller' => 'App\\Controller\\Marketplace\\HomeController::toggleFavorite'], null, ['POST' => 0], null, false, false, null]],
        '/marketplace/favorites/count' => [[['_route' => 'marketplace_favorites_count', '_controller' => 'App\\Controller\\Marketplace\\HomeController::getFavoritesCount'], null, ['GET' => 0], null, false, false, null]],
        '/marketplace/cart/count' => [[['_route' => 'marketplace_cart_count', '_controller' => 'App\\Controller\\Marketplace\\HomeController::getCartCount'], null, ['GET' => 0], null, false, false, null]],
        '/marketplace/cart/items' => [[['_route' => 'marketplace_cart_items', '_controller' => 'App\\Controller\\Marketplace\\HomeController::getCartItems'], null, ['GET' => 0], null, false, false, null]],
        '/marketplace/cart/add' => [[['_route' => 'marketplace_cart_add', '_controller' => 'App\\Controller\\Marketplace\\HomeController::addToCart'], null, ['POST' => 0], null, false, false, null]],
        '/marketplace/cart/status' => [[['_route' => 'marketplace_cart_status', '_controller' => 'App\\Controller\\Marketplace\\HomeController::getCartStatus'], null, ['GET' => 0], null, false, false, null]],
        '/customer/orders' => [[['_route' => 'customer_orders', '_controller' => 'App\\Controller\\Marketplace\\OrderController::index'], null, null, null, true, false, null]],
        '/customer/pharmacies/search' => [[['_route' => 'customer_pharmacy_search', '_controller' => 'App\\Controller\\Marketplace\\PharmacyController::search'], null, null, null, false, false, null]],
        '/marketplace/pharmacies/search' => [[['_route' => 'marketplace_pharmacy_search', '_controller' => 'App\\Controller\\Marketplace\\PharmacySearchController::search'], null, null, null, false, false, null]],
        '/marketplace/pharmacies/api/countries' => [[['_route' => 'api_pharmacy_countries', '_controller' => 'App\\Controller\\Marketplace\\PharmacySearchController::getCountries'], null, null, null, false, false, null]],
        '/marketplace/pharmacies/api/cities' => [[['_route' => 'api_pharmacy_cities', '_controller' => 'App\\Controller\\Marketplace\\PharmacySearchController::getCities'], null, null, null, false, false, null]],
        '/marketplace/pharmacies/api/pharmacies' => [[['_route' => 'api_pharmacies', '_controller' => 'App\\Controller\\Marketplace\\PharmacySearchController::getPharmacies'], null, null, null, false, false, null]],
        '/marketplace/pharmacies/api/products' => [[['_route' => 'api_products', '_controller' => 'App\\Controller\\Marketplace\\PharmacySearchController::getProducts'], null, null, null, false, false, null]],
        '/marketplace/products' => [[['_route' => 'marketplace_products', '_controller' => 'App\\Controller\\Marketplace\\ProductController::list'], null, ['GET' => 0], null, false, false, null]],
        '/marketplace/profile' => [[['_route' => 'marketplace_profile', '_controller' => 'App\\Controller\\Marketplace\\ProfileController::index'], null, null, null, true, false, null]],
        '/marketplace/profile/edit' => [[['_route' => 'marketplace_profile_edit', '_controller' => 'App\\Controller\\Marketplace\\ProfileController::edit'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/marketplace/profile/change-password' => [[['_route' => 'marketplace_change_password', '_controller' => 'App\\Controller\\Marketplace\\ProfileController::changePassword'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/marketplace/profile/orders' => [[['_route' => 'marketplace_orders', '_controller' => 'App\\Controller\\Marketplace\\ProfileController::orders'], null, null, null, false, false, null]],
        '/marketplace/profile/orders/search' => [[['_route' => 'marketplace_orders_search', '_controller' => 'App\\Controller\\Marketplace\\ProfileController::searchOrders'], null, ['GET' => 0], null, false, false, null]],
        '/marketplace/profile/stats/data' => [[['_route' => 'marketplace_profile_stats_data', '_controller' => 'App\\Controller\\Marketplace\\ProfileController::getStatsData'], null, ['GET' => 0], null, false, false, null]],
        '/conditions-generales' => [[['_route' => 'page_terms', '_controller' => 'App\\Controller\\PageController::terms'], null, null, null, false, false, null]],
        '/politique-confidentialite' => [[['_route' => 'page_privacy', '_controller' => 'App\\Controller\\PageController::privacy'], null, null, null, false, false, null]],
        '/payment/callback' => [
            [['_route' => 'public_payment_callback', '_controller' => 'App\\Controller\\PaymentController::callback'], null, ['GET' => 0, 'POST' => 1], null, false, false, null],
            [['_route' => 'payment_callback', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::paymentCallback'], null, ['GET' => 0, 'POST' => 1], null, false, false, null],
        ],
        '/payment/success' => [[['_route' => 'payment_success', '_controller' => 'App\\Controller\\PaymentController::success'], null, ['GET' => 0], null, false, false, null]],
        '/payment/error' => [[['_route' => 'payment_error', '_controller' => 'App\\Controller\\PaymentController::error'], null, ['GET' => 0], null, false, false, null]],
        '/print/multiple' => [[['_route' => 'print_multiple', '_controller' => 'App\\Controller\\PrintController::printMultiple'], null, ['POST' => 0], null, false, false, null]],
        '/print/check-printer' => [[['_route' => 'check_printer', '_controller' => 'App\\Controller\\PrintController::checkPrinter'], null, ['GET' => 0], null, false, false, null]],
        '/print/preferences' => [[['_route' => 'print_preferences', '_controller' => 'App\\Controller\\PrintController::savePreferences'], null, ['POST' => 0], null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile_show', '_controller' => 'App\\Controller\\ProfileController::show'], null, ['GET' => 0], null, true, false, null]],
        '/profile/edit' => [[['_route' => 'app_profile_edit', '_controller' => 'App\\Controller\\ProfileController::edit'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile/delete-photo' => [[['_route' => 'app_profile_delete_photo', '_controller' => 'App\\Controller\\ProfileController::deletePhoto'], null, ['POST' => 0], null, false, false, null]],
        '/purchase' => [[['_route' => 'purchase_index', '_controller' => 'App\\Controller\\PurchaseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/purchase/cart' => [[['_route' => 'purchase_cart', '_controller' => 'App\\Controller\\PurchaseController::cart'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/purchase/cart-data' => [[['_route' => 'purchase_cart_data', '_controller' => 'App\\Controller\\PurchaseController::cartData'], null, ['GET' => 0], null, false, false, null]],
        '/purchase/add-product' => [[['_route' => 'purchase_add_product', '_controller' => 'App\\Controller\\PurchaseController::addProduct'], null, ['POST' => 0], null, false, false, null]],
        '/purchase/confirm' => [[['_route' => 'purchase_confirm', '_controller' => 'App\\Controller\\PurchaseController::confirm'], null, ['POST' => 0], null, false, false, null]],
        '/purchase/search-products' => [[['_route' => 'purchase_search_products', '_controller' => 'App\\Controller\\PurchaseController::searchProducts'], null, ['GET' => 0], null, false, false, null]],
        '/reports/financial' => [[['_route' => 'app_financial_report_index', '_controller' => 'App\\Controller\\Report\\FinancialReportController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reports/financial/data' => [[['_route' => 'app_financial_report_data', '_controller' => 'App\\Controller\\Report\\FinancialReportController::getData'], null, ['GET' => 0], null, false, false, null]],
        '/reports/financial/export' => [[['_route' => 'app_financial_report_export', '_controller' => 'App\\Controller\\Report\\FinancialReportController::export'], null, ['GET' => 0], null, false, false, null]],
        '/reports/sales' => [[['_route' => 'app_sales_report_index', '_controller' => 'App\\Controller\\Report\\SalesReportController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reports/sales/data' => [[['_route' => 'app_sales_report_data', '_controller' => 'App\\Controller\\Report\\SalesReportController::getData'], null, ['GET' => 0], null, false, false, null]],
        '/reports/sales/export' => [[['_route' => 'app_sales_report_export', '_controller' => 'App\\Controller\\Report\\SalesReportController::export'], null, ['GET' => 0], null, false, false, null]],
        '/reports/stock' => [[['_route' => 'app_stock_report_index', '_controller' => 'App\\Controller\\Report\\StockReportController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reports/stock/data' => [[['_route' => 'app_stock_report_data', '_controller' => 'App\\Controller\\Report\\StockReportController::getData'], null, ['GET' => 0], null, false, false, null]],
        '/reports/stock/export' => [[['_route' => 'app_stock_report_export', '_controller' => 'App\\Controller\\Report\\StockReportController::export'], null, ['GET' => 0], null, false, false, null]],
        '/forgot-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/change-password' => [[['_route' => 'app_change_password', '_controller' => 'App\\Controller\\ResetPasswordController::changePassword'], null, null, null, false, false, null]],
        '/first-login-change-password' => [[['_route' => 'app_first_login_change_password', '_controller' => 'App\\Controller\\ResetPasswordController::firstLoginChangePassword'], null, null, null, false, false, null]],
        '/returns' => [[['_route' => 'returns_index', '_controller' => 'App\\Controller\\Return\\ReturnController::index'], null, ['GET' => 0], null, true, false, null]],
        '/returns/export-pdf' => [[['_route' => 'returns_export_pdf', '_controller' => 'App\\Controller\\Return\\ReturnController::exportPdf'], null, ['GET' => 0], null, false, false, null]],
        '/returns/api/search-orders' => [[['_route' => 'returns_search_orders', '_controller' => 'App\\Controller\\Return\\ReturnController::searchOrders'], null, ['GET' => 0], null, false, false, null]],
        '/orders/contact-super-admin' => [[['_route' => 'app_orders_contact_super_admin', '_controller' => 'App\\Controller\\Sale\\OrderController::contactSuperAdmin'], null, ['GET' => 0], null, false, false, null]],
        '/orders/export/excel' => [[['_route' => 'app_orders_export_excel', '_controller' => 'App\\Controller\\Sale\\OrderController::exportExcel'], null, ['GET' => 0], null, false, false, null]],
        '/orders/export/pdf' => [[['_route' => 'app_orders_export_pdf', '_controller' => 'App\\Controller\\Sale\\OrderController::exportPdf'], null, ['GET' => 0], null, false, false, null]],
        '/orders' => [[['_route' => 'app_orders_index', '_controller' => 'App\\Controller\\Sale\\OrderController::index'], null, ['GET' => 0], null, true, false, null]],
        '/orders/api/search-customer' => [[['_route' => 'api_search_customer', '_controller' => 'App\\Controller\\Sale\\OrderController::searchCustomer'], null, ['GET' => 0], null, false, false, null]],
        '/sale/restaurant/search' => [[['_route' => 'restaurant_sale_search', '_controller' => 'App\\Controller\\Sale\\RestaurantSaleController::search'], null, ['GET' => 0], null, false, false, null]],
        '/sale/restaurant/search-customer' => [[['_route' => 'restaurant_sale_search_customer', '_controller' => 'App\\Controller\\Sale\\RestaurantSaleController::searchCustomer'], null, ['GET' => 0], null, false, false, null]],
        '/sale/restaurant' => [[['_route' => 'restaurant_sale_index', '_controller' => 'App\\Controller\\Sale\\RestaurantSaleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/sale/restaurant/daily-stats' => [[['_route' => 'restaurant_daily_stats', '_controller' => 'App\\Controller\\Sale\\RestaurantSaleController::getDailyStatsApi'], null, ['GET' => 0], null, false, false, null]],
        '/sale/retail/search' => [[['_route' => 'retail_sale_search', '_controller' => 'App\\Controller\\Sale\\RetailSaleController::search'], null, ['GET' => 0], null, false, false, null]],
        '/sale/retail' => [[['_route' => 'retail_sale_index', '_controller' => 'App\\Controller\\Sale\\RetailSaleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/sale/retail/search-customer' => [[['_route' => 'retail_sale_search_customer', '_controller' => 'App\\Controller\\Sale\\RetailSaleController::searchCustomer'], null, ['GET' => 0], null, false, false, null]],
        '/sale/retail/daily-stats' => [[['_route' => 'retail_daily_stats', '_controller' => 'App\\Controller\\Sale\\RetailSaleController::getDailyStatsApi'], null, ['GET' => 0], null, false, false, null]],
        '/sale/retail/sale/cart' => [[['_route' => 'sale_cart', '_controller' => 'App\\Controller\\Sale\\RetailSaleController::cart'], null, ['GET' => 0], null, false, false, null]],
        '/sale/retail/sale/cart-data' => [[['_route' => 'sale_cart_data', '_controller' => 'App\\Controller\\Sale\\RetailSaleController::cartData'], null, ['GET' => 0], null, false, false, null]],
        '/sale/retail/sale/clear-cart' => [[['_route' => 'sale_clear_cart', '_controller' => 'App\\Controller\\Sale\\RetailSaleController::clearCart'], null, ['POST' => 0], null, false, false, null]],
        '/sale/retail/sale/checkout' => [[['_route' => 'sale_checkout', '_controller' => 'App\\Controller\\Sale\\RetailSaleController::checkout'], null, ['POST' => 0], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/stock/inventory' => [[['_route' => 'app_stock_inventory_index', '_controller' => 'App\\Controller\\Stock\\InventoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/stock/inventory/new' => [[['_route' => 'app_stock_inventory_new', '_controller' => 'App\\Controller\\Stock\\InventoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/stock/adjustment' => [[['_route' => 'app_stock_adjustment_index', '_controller' => 'App\\Controller\\Stock\\StockAdjustmentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/stock/adjustment/new' => [[['_route' => 'app_stock_adjustment_new', '_controller' => 'App\\Controller\\Stock\\StockAdjustmentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/stock/transfer' => [[['_route' => 'app_stock_transfer_index', '_controller' => 'App\\Controller\\Stock\\StockTransferController::index'], null, ['GET' => 0], null, true, false, null]],
        '/stock/transfer/new' => [[['_route' => 'app_stock_transfer_new', '_controller' => 'App\\Controller\\Stock\\StockTransferController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/subscription/plans' => [[['_route' => 'app_subscription_plans', '_controller' => 'App\\Controller\\SubscriptionController::plans'], null, null, null, false, false, null]],
        '/subscription/checkout' => [[['_route' => 'app_subscription_checkout', '_controller' => 'App\\Controller\\SubscriptionController::checkout'], null, ['POST' => 0], null, false, false, null]],
        '/subscription/callback' => [[['_route' => 'app_subscription_callback', '_controller' => 'App\\Controller\\SubscriptionController::callback'], null, null, null, false, false, null]],
        '/super-admin/analysis-prices' => [[['_route' => 'super_admin_analysis_price_index', '_controller' => 'App\\Controller\\SuperAdmin\\AnalysisPriceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/super-admin/analysis-prices/new' => [[['_route' => 'super_admin_analysis_price_new', '_controller' => 'App\\Controller\\SuperAdmin\\AnalysisPriceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/super-admin/analysis-requests' => [[['_route' => 'app_super_admin_analysis_request_index', '_controller' => 'App\\Controller\\SuperAdmin\\AnalysisRequestController::index'], null, ['GET' => 0], null, true, false, null]],
        '/super-admin/analysis-requests/data' => [[['_route' => 'app_super_admin_analysis_request_data', '_controller' => 'App\\Controller\\SuperAdmin\\AnalysisRequestController::getData'], null, ['GET' => 0], null, false, false, null]],
        '/super-admin/analysis-requests/export' => [[['_route' => 'app_super_admin_analysis_request_export', '_controller' => 'App\\Controller\\SuperAdmin\\AnalysisRequestController::export'], null, ['GET' => 0], null, false, false, null]],
        '/super-admin/analysis-statistics' => [[['_route' => 'app_super_admin_analysis_statistics_index', '_controller' => 'App\\Controller\\SuperAdmin\\AnalysisStatisticsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/super-admin/analysis-statistics/data' => [[['_route' => 'app_super_admin_analysis_statistics_data', '_controller' => 'App\\Controller\\SuperAdmin\\AnalysisStatisticsController::getData'], null, ['GET' => 0], null, false, false, null]],
        '/super-admin/analysis-statistics/export' => [[['_route' => 'app_super_admin_analysis_statistics_export', '_controller' => 'App\\Controller\\SuperAdmin\\AnalysisStatisticsController::export'], null, ['GET' => 0], null, false, false, null]],
        '/super-admin/analysis' => [[['_route' => 'super_admin_analysis_index', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::index'], null, null, null, true, false, null]],
        '/super-admin/analysis/company/search' => [[['_route' => 'super_admin_analysis_search_company', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::searchCompany'], null, ['GET' => 0], null, false, false, null]],
        '/super-admin/hma-service' => [[['_route' => 'app_super_admin_hma_service_index', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/super-admin/hma-service/new' => [[['_route' => 'app_super_admin_hma_service_new', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/super-admin/payment' => [[['_route' => 'super_admin_payment_index', '_controller' => 'App\\Controller\\SuperAdmin\\PaymentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/super-admin/statistics' => [[['_route' => 'app_super_admin_statistics_index', '_controller' => 'App\\Controller\\SuperAdmin\\StatisticsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/super-admin/statistics/data' => [[['_route' => 'app_super_admin_statistics_data', '_controller' => 'App\\Controller\\SuperAdmin\\StatisticsController::getData'], null, ['GET' => 0], null, false, false, null]],
        '/super-admin/statistics/export' => [[['_route' => 'app_super_admin_statistics_export', '_controller' => 'App\\Controller\\SuperAdmin\\StatisticsController::export'], null, ['GET' => 0], null, false, false, null]],
        '/super-admin/subscription' => [[['_route' => 'super_admin_subscription_index', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/super-admin/subscription/new' => [[['_route' => 'super_admin_subscription_new', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/super-admin/subscription-plans' => [[['_route' => 'app_super_admin_subscription_plan_index', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionPlanController::index'], null, ['GET' => 0], null, true, false, null]],
        '/super-admin/subscription-plans/new' => [[['_route' => 'app_super_admin_subscription_plan_new', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionPlanController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/super-admin/export' => [[['_route' => 'super_admin_export_index', '_controller' => 'App\\Controller\\SuperAdmin\\SuperAdminExportController::index'], null, ['GET' => 0], null, true, false, null]],
        '/super-admin/export/export-excel' => [[['_route' => 'super_admin_export_excel', '_controller' => 'App\\Controller\\SuperAdmin\\SuperAdminExportController::exportExcel'], null, ['GET' => 0], null, false, false, null]],
        '/super-admin/export/export-all' => [[['_route' => 'super_admin_export_all', '_controller' => 'App\\Controller\\SuperAdmin\\SuperAdminExportController::exportAll'], null, ['GET' => 0], null, false, false, null]],
        '/supplier/credit-note/thanks' => [[['_route' => 'supplier_credit_note_thanks', '_controller' => 'App\\Controller\\SupplierCreditNoteResponseController::thanks'], null, ['GET' => 0], null, false, false, null]],
        '/supplier/credit-note/new-direct' => [[['_route' => 'app_supplier_credit_note_new_direct_response', '_controller' => 'App\\Controller\\SupplierCreditNoteResponseController::newDirect'], null, ['POST' => 0], null, false, false, null]],
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
                .'|/a(?'
                    .'|ctivate/([^/]++)(*:190)'
                    .'|dmin/(?'
                        .'|p(?'
                            .'|urchase/(?'
                                .'|cart/receive/([^/]++)(*:242)'
                                .'|item/([^/]++)(?'
                                    .'|(*:266)'
                                    .'|/edit(*:279)'
                                    .'|(*:287)'
                                .')'
                            .')'
                            .'|ayment/([^/]++)(*:312)'
                            .'|ro(?'
                                .'|duct/(?'
                                    .'|([^/]++)(?'
                                        .'|(*:344)'
                                        .'|/(?'
                                            .'|edit(*:360)'
                                            .'|toggle\\-status(*:382)'
                                            .'|delete\\-image(*:403)'
                                        .')'
                                        .'|(*:412)'
                                    .')'
                                    .'|api/([^/]++)/details(*:441)'
                                    .'|check/barcode/([^/]++)(*:471)'
                                    .'|([^/]++)/(?'
                                        .'|stock\\-(?'
                                            .'|batches(*:508)'
                                            .'|movements(*:525)'
                                        .')'
                                        .'|print\\-(?'
                                            .'|barcode(*:551)'
                                            .'|sheet(*:564)'
                                        .')'
                                    .')'
                                .')'
                                .'|motion/(?'
                                    .'|categories/([^/]++)(?'
                                        .'|(*:607)'
                                        .'|/delete(*:622)'
                                    .')'
                                    .'|products/([^/]++)(?'
                                        .'|(*:651)'
                                        .'|/delete(*:666)'
                                    .')'
                                    .'|([^/]++)(?'
                                        .'|(*:686)'
                                        .'|/(?'
                                            .'|edit(*:702)'
                                            .'|delete\\-image(*:723)'
                                            .'|toggle\\-status(*:745)'
                                        .')'
                                        .'|(*:754)'
                                    .')'
                                    .'|product/([^/]++)/promotions(*:790)'
                                    .'|category/([^/]++)/promotions(*:826)'
                                .')'
                            .')'
                        .')'
                        .'|category(?'
                            .'|/([^/]++)(?'
                                .'|(*:860)'
                                .'|/(?'
                                    .'|edit(*:876)'
                                    .'|toggle\\-status(*:898)'
                                    .'|activate\\-from\\-quota(*:927)'
                                    .'|delete\\-image(*:948)'
                                    .'|products(*:964)'
                                .')'
                                .'|(*:973)'
                            .')'
                            .'|\\-recipe/([^/]++)(?'
                                .'|(*:1002)'
                                .'|/(?'
                                    .'|edit(*:1019)'
                                    .'|toggle\\-status(*:1042)'
                                    .'|activate\\-from\\-quota(*:1072)'
                                    .'|delete\\-image(*:1094)'
                                    .'|recipes(*:1110)'
                                    .'|promotions(*:1129)'
                                .')'
                                .'|(*:1139)'
                            .')'
                        .')'
                        .'|location/([^/]++)/(?'
                            .'|show(*:1175)'
                            .'|edit(*:1188)'
                            .'|toggle(*:1203)'
                            .'|delete(*:1218)'
                        .')'
                        .'|re(?'
                            .'|cipe/([^/]++)(?'
                                .'|(*:1249)'
                                .'|/(?'
                                    .'|edit(*:1266)'
                                    .'|toggle\\-status(*:1289)'
                                    .'|delete\\-image(*:1311)'
                                .')'
                                .'|(*:1321)'
                            .')'
                            .'|staurant/promotion/(?'
                                .'|categories/([^/]++)(?'
                                    .'|(*:1375)'
                                    .'|/delete(*:1391)'
                                .')'
                                .'|recipes/([^/]++)(?'
                                    .'|(*:1420)'
                                    .'|/delete(*:1436)'
                                .')'
                                .'|([^/]++)(?'
                                    .'|(*:1457)'
                                    .'|/(?'
                                        .'|edit(*:1474)'
                                        .'|delete\\-image(*:1496)'
                                        .'|toggle\\-status(*:1519)'
                                    .')'
                                    .'|(*:1529)'
                                .')'
                                .'|recipe/([^/]++)/promotions(*:1565)'
                                .'|category\\-recipe/([^/]++)/promotions(*:1610)'
                            .')'
                        .')'
                        .'|s(?'
                            .'|tock\\-(?'
                                .'|batch/(?'
                                    .'|product/([^/]++)(*:1659)'
                                    .'|([^/]++)/(?'
                                        .'|show(*:1684)'
                                        .'|edit(*:1697)'
                                        .'|toggle(*:1712)'
                                        .'|delete(*:1727)'
                                        .'|print(*:1741)'
                                    .')'
                                .')'
                                .'|movement/([^/]++)/show(*:1774)'
                            .')'
                            .'|u(?'
                                .'|bscription/([^/]++)(*:1807)'
                                .'|pplier(?'
                                    .'|/([^/]++)(?'
                                        .'|(*:1837)'
                                        .'|/(?'
                                            .'|edit(*:1854)'
                                            .'|toggle\\-status(*:1877)'
                                        .')'
                                        .'|(*:1887)'
                                    .')'
                                    .'|\\-credit\\-note/(?'
                                        .'|new/([^/]++)(*:1927)'
                                        .'|([^/]++)(?'
                                            .'|(*:1947)'
                                            .'|/(?'
                                                .'|resolve(*:1967)'
                                                .'|apply\\-stock\\-action(*:1996)'
                                            .')'
                                        .')'
                                        .'|print\\-multiple(*:2022)'
                                        .'|new\\-direct(*:2042)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|type\\-promotion/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:2090)'
                                .'|toggle\\-status(*:2113)'
                                .'|delete(*:2128)'
                            .')'
                            .'|(*:2138)'
                        .')'
                        .'|user/([^/]++)(?'
                            .'|(*:2164)'
                            .'|/(?'
                                .'|edit(*:2181)'
                                .'|delete\\-photo(*:2203)'
                            .')'
                            .'|(*:2213)'
                        .')'
                    .')'
                .')'
                .'|/c(?'
                    .'|ompany/analysis/([^/]++)(?'
                        .'|(*:2257)'
                        .'|/download(?'
                            .'|\\-(?'
                                .'|final(*:2288)'
                                .'|raw(*:2300)'
                            .')'
                            .'|(*:2310)'
                        .')'
                    .')'
                    .'|ustomer/(?'
                        .'|category/([^/]++)(*:2349)'
                        .'|orders/([^/]++)(*:2373)'
                    .')'
                .')'
                .'|/uploads/(?'
                    .'|([a-zA-Z0-9_\\-]+)/([0-9]+)/(.+)(*:2427)'
                    .'|([a-zA-Z0-9_\\-]+)/(.+)(*:2458)'
                .')'
                .'|/ma(?'
                    .'|nager/team/([^/]++)(?'
                        .'|(*:2496)'
                        .'|/edit(*:2510)'
                    .')'
                    .'|rketplace/(?'
                        .'|verify\\-email/([^/]++)(*:2555)'
                        .'|rese(?'
                            .'|nd\\-verification/([^/]++)(*:2596)'
                            .'|t\\-password/([^/]++)(*:2625)'
                        .')'
                        .'|cart/(?'
                            .'|update/([^/]++)(*:2658)'
                            .'|remove/([^/]++)(*:2682)'
                            .'|payment/status(?:/([^/]++))?(*:2719)'
                        .')'
                        .'|favorite/check/([^/]++)(*:2752)'
                        .'|p(?'
                            .'|harmacies/api/pharmacy/([^/]++)/(?'
                                .'|categories(*:2810)'
                                .'|forms(*:2824)'
                            .')'
                            .'|ro(?'
                                .'|duct/([^/]++)(?'
                                    .'|(*:2855)'
                                    .'|/rat(?'
                                        .'|e(*:2872)'
                                        .'|ings(*:2885)'
                                    .')'
                                .')'
                                .'|file/order/(?'
                                    .'|([^/]++)(*:2918)'
                                    .'|status/([^/]++)(*:2942)'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/p(?'
                    .'|ayment/(?'
                        .'|success/([^/]++)(*:2987)'
                        .'|already\\-processed/([^/]++)(*:3023)'
                    .')'
                    .'|rint/ticket/([^/]++)/([^/]++)(*:3062)'
                    .'|urchase/(?'
                        .'|re(?'
                            .'|move\\-product/([^/]++)(*:3109)'
                            .'|ceive/([^/]++)(*:3132)'
                        .')'
                        .'|update\\-quantity/([^/]++)(*:3167)'
                        .'|cancel/([^/]++)(*:3191)'
                        .'|([^/]++)(?'
                            .'|(*:3211)'
                            .'|/print(*:3226)'
                        .')'
                        .'|update\\-item/([^/]++)(*:3257)'
                        .'|report\\-issue\\-temp(*:3285)'
                        .'|delete\\-issue\\-temp/([^/]++)(*:3322)'
                    .')'
                .')'
                .'|/re(?'
                    .'|set\\-password/([^/]++)(*:3361)'
                    .'|turns/(?'
                        .'|new/([^/]++)(*:3391)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:3419)'
                                .'|approve(*:3435)'
                                .'|complete(*:3452)'
                                .'|reject(*:3467)'
                            .')'
                            .'|(*:3477)'
                        .')'
                        .'|api/order\\-items/([^/]++)(*:3512)'
                        .'|print\\-(?'
                            .'|receipt/([^/]++)(*:3547)'
                            .'|multiple\\-receipts(*:3574)'
                        .')'
                    .')'
                .')'
                .'|/orders/(?'
                    .'|([^/]++)(?'
                        .'|/(?'
                            .'|toggle(*:3618)'
                            .'|delete(*:3633)'
                            .'|receipt\\-content(*:3658)'
                        .')'
                        .'|(*:3668)'
                    .')'
                    .'|receipts\\-content(*:3695)'
                    .'|daily\\-stats(*:3716)'
                    .'|c(?'
                        .'|heck\\-can\\-sell(*:3744)'
                        .'|ontact\\-admin(*:3766)'
                    .')'
                    .'|([^/]++)/(?'
                        .'|print(*:3793)'
                        .'|update\\-status(*:3816)'
                        .'|download\\-pdf(*:3838)'
                    .')'
                .')'
                .'|/s(?'
                    .'|ale/retail/sale/(?'
                        .'|add\\-product/([^/]++)(*:3894)'
                        .'|update\\-(?'
                            .'|quantity/([^/]++)/([^/]++)(*:3940)'
                            .'|notes/([^/]++)/([^/]++)(*:3972)'
                        .')'
                        .'|re(?'
                            .'|move\\-item/([^/]++)/([^/]++)(*:4015)'
                            .'|ceipt/([^/]++)(*:4038)'
                        .')'
                    .')'
                    .'|tock/(?'
                        .'|inventory/([^/]++)(?'
                            .'|/(?'
                                .'|add\\-products(*:4095)'
                                .'|item/([^/]++)/remove(*:4124)'
                                .'|c(?'
                                    .'|ount(*:4141)'
                                    .'|ancel(*:4155)'
                                .')'
                                .'|validate(*:4173)'
                            .')'
                            .'|(*:4183)'
                        .')'
                        .'|adjustment/([^/]++)(*:4212)'
                        .'|transfer/([^/]++)(?'
                            .'|/(?'
                                .'|start(*:4250)'
                                .'|receive(*:4266)'
                                .'|cancel(*:4281)'
                                .'|print(*:4295)'
                            .')'
                            .'|(*:4305)'
                        .')'
                    .')'
                    .'|u(?'
                        .'|bscription/success/([^/]++)(*:4347)'
                        .'|p(?'
                            .'|er\\-admin/(?'
                                .'|analysis(?'
                                    .'|\\-(?'
                                        .'|prices/([^/]++)(?'
                                            .'|(*:4407)'
                                            .'|/(?'
                                                .'|edit(*:4424)'
                                                .'|toggle(*:4439)'
                                                .'|delete(*:4454)'
                                            .')'
                                        .')'
                                        .'|requests/([^/]++)/show(*:4487)'
                                    .')'
                                    .'|/(?'
                                        .'|company/([^/]++)/stats(*:4523)'
                                        .'|new/([^/]++)(*:4544)'
                                        .'|([^/]++)(?'
                                            .'|(*:4564)'
                                            .'|/(?'
                                                .'|generate\\-raw(*:4590)'
                                                .'|upload\\-report(*:4613)'
                                                .'|re(?'
                                                    .'|place\\-report(*:4640)'
                                                    .'|try(*:4652)'
                                                .')'
                                                .'|download\\-(?'
                                                    .'|final(*:4680)'
                                                    .'|raw(*:4692)'
                                                .')'
                                                .'|payment\\-link(*:4715)'
                                                .'|send\\-payment\\-link(*:4743)'
                                                .'|force\\-to\\-paid(*:4767)'
                                                .'|cancel(*:4782)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|hma\\-service/(?'
                                    .'|([^/]++)(?'
                                        .'|(*:4822)'
                                        .'|/(?'
                                            .'|edit(*:4839)'
                                            .'|toggle\\-status(*:4862)'
                                            .'|delete(*:4877)'
                                            .'|subscriptions(*:4899)'
                                        .')'
                                    .')'
                                    .'|export/([^/]++)(*:4925)'
                                .')'
                                .'|payment/([^/]++)(*:4951)'
                                .'|subscription(?'
                                    .'|/(?'
                                        .'|([^/]++)(*:4987)'
                                        .'|export/([^/]++)/([^/]++)(*:5020)'
                                    .')'
                                    .'|\\-plans/([^/]++)(?'
                                        .'|(*:5049)'
                                        .'|/(?'
                                            .'|edit(*:5066)'
                                            .'|toggle(*:5081)'
                                        .')'
                                        .'|(*:5091)'
                                    .')'
                                .')'
                            .')'
                            .'|plier/credit\\-note/respond/([^/]++)(*:5138)'
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
        190 => [[['_route' => 'app_activate_account', '_controller' => 'App\\Controller\\AccountActivationController::activate'], ['token'], null, null, false, true, null]],
        242 => [[['_route' => 'admin_purchase_cart_receive', '_controller' => 'App\\Controller\\Admin\\CartController::receiveCart'], ['id'], ['GET' => 0], null, false, true, null]],
        266 => [[['_route' => 'app_admin_purchase_item_show', '_controller' => 'App\\Controller\\Admin\\PurchaseItemController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        279 => [[['_route' => 'app_admin_purchase_item_edit', '_controller' => 'App\\Controller\\Admin\\PurchaseItemController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        287 => [[['_route' => 'app_admin_purchase_item_delete', '_controller' => 'App\\Controller\\Admin\\PurchaseItemController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        312 => [[['_route' => 'admin_payment_show', '_controller' => 'App\\Controller\\Admin\\PaymentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        344 => [[['_route' => 'app_admin_product_show', '_controller' => 'App\\Controller\\Admin\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        360 => [[['_route' => 'app_admin_product_edit', '_controller' => 'App\\Controller\\Admin\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        382 => [[['_route' => 'app_admin_product_toggle_status', '_controller' => 'App\\Controller\\Admin\\ProductController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        403 => [[['_route' => 'app_admin_product_delete_image', '_controller' => 'App\\Controller\\Admin\\ProductController::deleteImage'], ['id'], ['POST' => 0], null, false, false, null]],
        412 => [[['_route' => 'app_admin_product_delete', '_controller' => 'App\\Controller\\Admin\\ProductController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        441 => [[['_route' => 'app_admin_product_api_details', '_controller' => 'App\\Controller\\Admin\\ProductController::apiDetails'], ['id'], ['GET' => 0], null, false, false, null]],
        471 => [[['_route' => 'app_admin_product_check_barcode', '_controller' => 'App\\Controller\\Admin\\ProductController::checkBarcode'], ['barcode'], ['GET' => 0], null, false, true, null]],
        508 => [[['_route' => 'app_admin_product_stock_batches', '_controller' => 'App\\Controller\\Admin\\ProductController::stockBatches'], ['id'], ['GET' => 0], null, false, false, null]],
        525 => [[['_route' => 'app_admin_product_stock_movements', '_controller' => 'App\\Controller\\Admin\\ProductController::stockMovements'], ['id'], ['GET' => 0], null, false, false, null]],
        551 => [[['_route' => 'app_admin_product_print_barcode', '_controller' => 'App\\Controller\\Admin\\ProductController::printBarcode'], ['id'], ['GET' => 0], null, false, false, null]],
        564 => [[['_route' => 'app_admin_product_print_sheet', '_controller' => 'App\\Controller\\Admin\\ProductController::printSheet'], ['id'], ['GET' => 0], null, false, false, null]],
        607 => [[['_route' => 'app_admin_promotion_category_show', '_controller' => 'App\\Controller\\Admin\\PromotionController::categoryShow'], ['id'], ['GET' => 0], null, false, true, null]],
        622 => [[['_route' => 'app_admin_promotion_category_delete', '_controller' => 'App\\Controller\\Admin\\PromotionController::categoryDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        651 => [[['_route' => 'app_admin_promotion_product_show', '_controller' => 'App\\Controller\\Admin\\PromotionController::productShow'], ['id'], ['GET' => 0], null, false, true, null]],
        666 => [[['_route' => 'app_admin_promotion_product_delete', '_controller' => 'App\\Controller\\Admin\\PromotionController::productDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        686 => [[['_route' => 'app_admin_promotion_show', '_controller' => 'App\\Controller\\Admin\\PromotionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        702 => [[['_route' => 'app_admin_promotion_edit', '_controller' => 'App\\Controller\\Admin\\PromotionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        723 => [[['_route' => 'app_admin_promotion_delete_image', '_controller' => 'App\\Controller\\Admin\\PromotionController::deleteImage'], ['id'], ['POST' => 0], null, false, false, null]],
        745 => [[['_route' => 'app_admin_promotion_toggle_status', '_controller' => 'App\\Controller\\Admin\\PromotionController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        754 => [[['_route' => 'app_admin_promotion_delete', '_controller' => 'App\\Controller\\Admin\\PromotionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        790 => [[['_route' => 'app_admin_product_promotions', '_controller' => 'App\\Controller\\Admin\\PromotionController::productPromotions'], ['id'], ['GET' => 0], null, false, false, null]],
        826 => [[['_route' => 'app_admin_category_promotions', '_controller' => 'App\\Controller\\Admin\\PromotionController::categoryPromotions'], ['id'], ['GET' => 0], null, false, false, null]],
        860 => [[['_route' => 'app_admin_category_show', '_controller' => 'App\\Controller\\Admin\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        876 => [[['_route' => 'app_admin_category_edit', '_controller' => 'App\\Controller\\Admin\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        898 => [[['_route' => 'app_admin_category_toggle_status', '_controller' => 'App\\Controller\\Admin\\CategoryController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        927 => [[['_route' => 'app_admin_category_activate_from_quota', '_controller' => 'App\\Controller\\Admin\\CategoryController::activateFromQuota'], ['id'], ['POST' => 0], null, false, false, null]],
        948 => [[['_route' => 'app_admin_category_delete_image', '_controller' => 'App\\Controller\\Admin\\CategoryController::deleteImage'], ['id'], ['POST' => 0], null, false, false, null]],
        964 => [[['_route' => 'app_admin_category_products', '_controller' => 'App\\Controller\\Admin\\CategoryController::products'], ['id'], ['GET' => 0], null, false, false, null]],
        973 => [[['_route' => 'app_admin_category_delete', '_controller' => 'App\\Controller\\Admin\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1002 => [[['_route' => 'app_admin_category_recipe_show', '_controller' => 'App\\Controller\\Admin\\CategoryRecipeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1019 => [[['_route' => 'app_admin_category_recipe_edit', '_controller' => 'App\\Controller\\Admin\\CategoryRecipeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1042 => [[['_route' => 'app_admin_category_recipe_toggle_status', '_controller' => 'App\\Controller\\Admin\\CategoryRecipeController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        1072 => [[['_route' => 'app_admin_category_recipe_activate_from_quota', '_controller' => 'App\\Controller\\Admin\\CategoryRecipeController::activateFromQuota'], ['id'], ['POST' => 0], null, false, false, null]],
        1094 => [[['_route' => 'app_admin_category_recipe_delete_image', '_controller' => 'App\\Controller\\Admin\\CategoryRecipeController::deleteImage'], ['id'], ['POST' => 0], null, false, false, null]],
        1110 => [[['_route' => 'app_admin_category_recipe_recipes', '_controller' => 'App\\Controller\\Admin\\CategoryRecipeController::recipes'], ['id'], ['GET' => 0], null, false, false, null]],
        1129 => [[['_route' => 'app_admin_category_recipe_promotions', '_controller' => 'App\\Controller\\Admin\\CategoryRecipeController::promotions'], ['id'], ['GET' => 0], null, false, false, null]],
        1139 => [[['_route' => 'app_admin_category_recipe_delete', '_controller' => 'App\\Controller\\Admin\\CategoryRecipeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1175 => [[['_route' => 'app_admin_location_show', '_controller' => 'App\\Controller\\Admin\\LocationController::show'], ['id'], ['GET' => 0], null, false, false, null]],
        1188 => [[['_route' => 'app_admin_location_edit', '_controller' => 'App\\Controller\\Admin\\LocationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1203 => [[['_route' => 'app_admin_location_toggle', '_controller' => 'App\\Controller\\Admin\\LocationController::toggle'], ['id'], ['POST' => 0], null, false, false, null]],
        1218 => [[['_route' => 'app_admin_location_delete', '_controller' => 'App\\Controller\\Admin\\LocationController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1249 => [[['_route' => 'app_admin_recipe_show', '_controller' => 'App\\Controller\\Admin\\RecipeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1266 => [[['_route' => 'app_admin_recipe_edit', '_controller' => 'App\\Controller\\Admin\\RecipeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1289 => [[['_route' => 'app_admin_recipe_toggle_status', '_controller' => 'App\\Controller\\Admin\\RecipeController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        1311 => [[['_route' => 'app_admin_recipe_delete_image', '_controller' => 'App\\Controller\\Admin\\RecipeController::deleteImage'], ['id'], ['POST' => 0], null, false, false, null]],
        1321 => [[['_route' => 'app_admin_recipe_delete', '_controller' => 'App\\Controller\\Admin\\RecipeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1375 => [[['_route' => 'app_restaurant_promotion_category_show', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::categoryShow'], ['id'], ['GET' => 0], null, false, true, null]],
        1391 => [[['_route' => 'app_restaurant_promotion_category_delete', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::categoryDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        1420 => [[['_route' => 'app_restaurant_promotion_recipe_show', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::recipeShow'], ['id'], ['GET' => 0], null, false, true, null]],
        1436 => [[['_route' => 'app_restaurant_promotion_recipe_delete', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::recipeDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        1457 => [[['_route' => 'app_restaurant_promotion_show', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1474 => [[['_route' => 'app_restaurant_promotion_edit', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1496 => [[['_route' => 'app_restaurant_promotion_delete_image', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::deleteImage'], ['id'], ['POST' => 0], null, false, false, null]],
        1519 => [[['_route' => 'app_restaurant_promotion_toggle_status', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        1529 => [[['_route' => 'app_restaurant_promotion_delete', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1565 => [[['_route' => 'app_restaurant_recipe_promotions', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::recipePromotions'], ['id'], ['GET' => 0], null, false, false, null]],
        1610 => [[['_route' => 'app_restaurant_category_recipe_promotions', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::categoryRecipePromotions'], ['id'], ['GET' => 0], null, false, false, null]],
        1659 => [[['_route' => 'app_admin_stock_batch_index', '_controller' => 'App\\Controller\\Admin\\StockBatchController::index'], ['productId'], ['GET' => 0], null, false, true, null]],
        1684 => [[['_route' => 'app_admin_stock_batch_show', '_controller' => 'App\\Controller\\Admin\\StockBatchController::show'], ['id'], ['GET' => 0], null, false, false, null]],
        1697 => [[['_route' => 'app_admin_stock_batch_edit', '_controller' => 'App\\Controller\\Admin\\StockBatchController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1712 => [[['_route' => 'app_admin_stock_batch_toggle', '_controller' => 'App\\Controller\\Admin\\StockBatchController::toggle'], ['id'], ['POST' => 0], null, false, false, null]],
        1727 => [[['_route' => 'app_admin_stock_batch_delete', '_controller' => 'App\\Controller\\Admin\\StockBatchController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1741 => [[['_route' => 'app_admin_stock_batch_print', '_controller' => 'App\\Controller\\Admin\\StockBatchController::print'], ['id'], ['GET' => 0], null, false, false, null]],
        1774 => [[['_route' => 'app_admin_stock_movement_show', '_controller' => 'App\\Controller\\Admin\\StockMovementController::show'], ['id'], ['GET' => 0], null, false, false, null]],
        1807 => [[['_route' => 'admin_subscription_show', '_controller' => 'App\\Controller\\Admin\\SubscriptionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1837 => [[['_route' => 'app_admin_supplier_show', '_controller' => 'App\\Controller\\Admin\\SupplierController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1854 => [[['_route' => 'app_admin_supplier_edit', '_controller' => 'App\\Controller\\Admin\\SupplierController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1877 => [[['_route' => 'app_admin_supplier_toggle_status', '_controller' => 'App\\Controller\\Admin\\SupplierController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        1887 => [[['_route' => 'app_admin_supplier_delete', '_controller' => 'App\\Controller\\Admin\\SupplierController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1927 => [[['_route' => 'app_supplier_credit_note_new', '_controller' => 'App\\Controller\\Admin\\SupplierCreditNoteController::new'], ['batchId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1947 => [[['_route' => 'app_supplier_credit_note_show', '_controller' => 'App\\Controller\\Admin\\SupplierCreditNoteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1967 => [[['_route' => 'app_supplier_credit_note_resolve', '_controller' => 'App\\Controller\\Admin\\SupplierCreditNoteController::resolve'], ['id'], ['POST' => 0], null, false, false, null]],
        1996 => [[['_route' => 'app_supplier_credit_note_apply_stock_action', '_controller' => 'App\\Controller\\Admin\\SupplierCreditNoteController::applyStockAction'], ['id'], ['POST' => 0], null, false, false, null]],
        2022 => [[['_route' => 'app_supplier_credit_note_print_multiple', '_controller' => 'App\\Controller\\Admin\\SupplierCreditNoteController::printMultiple'], [], ['GET' => 0], null, false, false, null]],
        2042 => [[['_route' => 'app_supplier_credit_note_new_direct', '_controller' => 'App\\Controller\\Admin\\SupplierCreditNoteController::newDirect'], [], ['POST' => 0], null, false, false, null]],
        2090 => [[['_route' => 'app_admin_type_promotion_edit', '_controller' => 'App\\Controller\\Admin\\TypePromotionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2113 => [[['_route' => 'app_admin_type_promotion_toggle_status', '_controller' => 'App\\Controller\\Admin\\TypePromotionController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        2128 => [[['_route' => 'app_admin_type_promotion_delete', '_controller' => 'App\\Controller\\Admin\\TypePromotionController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        2138 => [[['_route' => 'app_admin_type_promotion_show', '_controller' => 'App\\Controller\\Admin\\TypePromotionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2164 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\Admin\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2181 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\Admin\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2203 => [[['_route' => 'app_user_delete_photo', '_controller' => 'App\\Controller\\Admin\\UserController::deletePhoto'], ['id'], ['POST' => 0], null, false, false, null]],
        2213 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\Admin\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        2257 => [[['_route' => 'company_analysis_show', '_controller' => 'App\\Controller\\Company\\CompanyAnalysisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2288 => [[['_route' => 'company_analysis_download_final', '_controller' => 'App\\Controller\\Company\\CompanyAnalysisController::downloadFinal'], ['id'], ['GET' => 0], null, false, false, null]],
        2300 => [[['_route' => 'company_analysis_download_raw', '_controller' => 'App\\Controller\\Company\\CompanyAnalysisController::downloadRaw'], ['id'], ['GET' => 0], null, false, false, null]],
        2310 => [[['_route' => 'company_analysis_download', '_controller' => 'App\\Controller\\Company\\CompanyAnalysisController::download'], ['id'], ['GET' => 0], null, false, false, null]],
        2349 => [[['_route' => 'marketplace_category', '_controller' => 'App\\Controller\\Marketplace\\CategoryController::show'], ['slug'], null, null, false, true, null]],
        2373 => [[['_route' => 'customer_order_show', '_controller' => 'App\\Controller\\Marketplace\\OrderController::show'], ['id'], null, null, false, true, null]],
        2427 => [[['_route' => 'app_serve_upload', '_controller' => 'App\\Controller\\FileServeController::serveUploadedFile'], ['folder', 'companyId', 'filename'], ['GET' => 0], null, false, true, null]],
        2458 => [[['_route' => 'app_serve_upload_simple', '_controller' => 'App\\Controller\\FileServeController::serveSimpleUploadedFile'], ['folder', 'filename'], ['GET' => 0], null, false, true, null]],
        2496 => [[['_route' => 'app_manager_team_show', '_controller' => 'App\\Controller\\Manager\\TeamController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2510 => [[['_route' => 'app_manager_team_edit', '_controller' => 'App\\Controller\\Manager\\TeamController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2555 => [[['_route' => 'marketplace_verify_email', '_controller' => 'App\\Controller\\Marketplace\\AuthController::verifyEmail'], ['token'], null, null, false, true, null]],
        2596 => [[['_route' => 'marketplace_resend_verification', '_controller' => 'App\\Controller\\Marketplace\\AuthController::resendVerification'], ['email'], null, null, false, true, null]],
        2625 => [[['_route' => 'marketplace_reset_password', '_controller' => 'App\\Controller\\Marketplace\\ForgotPasswordController::resetPassword'], ['token'], null, null, false, true, null]],
        2658 => [[['_route' => 'marketplace_cart_update', '_controller' => 'App\\Controller\\Marketplace\\CartController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        2682 => [[['_route' => 'marketplace_cart_remove', '_controller' => 'App\\Controller\\Marketplace\\CartController::remove'], ['id'], ['POST' => 0], null, false, true, null]],
        2719 => [[['_route' => 'marketplace_payment_status', 'transaction_id' => null, '_controller' => 'App\\Controller\\Marketplace\\CartController::paymentStatus'], ['transaction_id'], null, null, false, true, null]],
        2752 => [[['_route' => 'marketplace_favorite_check', '_controller' => 'App\\Controller\\Marketplace\\FavoriteController::check'], ['productId'], ['GET' => 0], null, false, true, null]],
        2810 => [[['_route' => 'api_pharmacy_categories', '_controller' => 'App\\Controller\\Marketplace\\PharmacySearchController::getPharmacyCategories'], ['id'], null, null, false, false, null]],
        2824 => [[['_route' => 'api_pharmacy_forms', '_controller' => 'App\\Controller\\Marketplace\\PharmacySearchController::getPharmacyForms'], ['id'], null, null, false, false, null]],
        2855 => [[['_route' => 'marketplace_product_show', '_controller' => 'App\\Controller\\Marketplace\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2872 => [[['_route' => 'marketplace_product_rate', '_controller' => 'App\\Controller\\Marketplace\\ProductController::rateProduct'], ['id'], ['POST' => 0], null, false, false, null]],
        2885 => [[['_route' => 'marketplace_product_ratings', '_controller' => 'App\\Controller\\Marketplace\\ProductController::getRatings'], ['id'], ['GET' => 0], null, false, false, null]],
        2918 => [[['_route' => 'marketplace_order_detail', '_controller' => 'App\\Controller\\Marketplace\\ProfileController::orderDetail'], ['id'], null, null, false, true, null]],
        2942 => [[['_route' => 'marketplace_order_status', '_controller' => 'App\\Controller\\Marketplace\\ProfileController::updateOrderStatus'], ['id'], ['POST' => 0], null, false, true, null]],
        2987 => [[['_route' => 'payment_success_with_id', '_controller' => 'App\\Controller\\PaymentController::successWithId'], ['id'], ['GET' => 0], null, false, true, null]],
        3023 => [[['_route' => 'payment_already_processed', '_controller' => 'App\\Controller\\PaymentController::alreadyProcessed'], ['id'], ['GET' => 0], null, false, true, null]],
        3062 => [[['_route' => 'print_ticket', '_controller' => 'App\\Controller\\PrintController::printTicket'], ['id', 'type'], ['GET' => 0], null, false, true, null]],
        3109 => [[['_route' => 'purchase_remove_product', '_controller' => 'App\\Controller\\PurchaseController::removeProduct'], ['productId'], ['DELETE' => 0], null, false, true, null]],
        3132 => [[['_route' => 'purchase_receive', '_controller' => 'App\\Controller\\PurchaseController::receive'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        3167 => [[['_route' => 'purchase_update_quantity', '_controller' => 'App\\Controller\\PurchaseController::updateQuantity'], ['productId'], ['PUT' => 0], null, false, true, null]],
        3191 => [[['_route' => 'purchase_cancel', '_controller' => 'App\\Controller\\PurchaseController::cancel'], ['id'], ['POST' => 0], null, false, true, null]],
        3211 => [[['_route' => 'purchase_show', '_controller' => 'App\\Controller\\PurchaseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        3226 => [[['_route' => 'purchase_print', '_controller' => 'App\\Controller\\PurchaseController::print'], ['id'], ['GET' => 0], null, false, false, null]],
        3257 => [[['_route' => 'purchase_update_item', '_controller' => 'App\\Controller\\PurchaseController::updateCartItem'], ['productId'], ['PUT' => 0], null, false, true, null]],
        3285 => [[['_route' => 'purchase_report_issue_temp', '_controller' => 'App\\Controller\\PurchaseController::reportIssueTemp'], [], ['POST' => 0], null, false, false, null]],
        3322 => [[['_route' => 'purchase_delete_issue_temp', '_controller' => 'App\\Controller\\PurchaseController::deleteIssueTemp'], ['batchId'], ['POST' => 0], null, false, true, null]],
        3361 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        3391 => [[['_route' => 'returns_new', '_controller' => 'App\\Controller\\Return\\ReturnController::new'], ['orderId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        3419 => [[['_route' => 'returns_edit', '_controller' => 'App\\Controller\\Return\\ReturnController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3435 => [[['_route' => 'returns_approve', '_controller' => 'App\\Controller\\Return\\ReturnController::approve'], ['id'], ['POST' => 0], null, false, false, null]],
        3452 => [[['_route' => 'returns_complete', '_controller' => 'App\\Controller\\Return\\ReturnController::complete'], ['id'], ['POST' => 0], null, false, false, null]],
        3467 => [[['_route' => 'returns_reject', '_controller' => 'App\\Controller\\Return\\ReturnController::reject'], ['id'], ['POST' => 0], null, false, false, null]],
        3477 => [[['_route' => 'returns_show', '_controller' => 'App\\Controller\\Return\\ReturnController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        3512 => [[['_route' => 'returns_api_order_items', '_controller' => 'App\\Controller\\Return\\ReturnController::getOrderItems'], ['orderId'], ['GET' => 0], null, false, true, null]],
        3547 => [[['_route' => 'returns_print_receipt', '_controller' => 'App\\Controller\\Return\\ReturnController::printReceipt'], ['id'], ['GET' => 0], null, false, true, null]],
        3574 => [[['_route' => 'returns_print_multiple_receipts', '_controller' => 'App\\Controller\\Return\\ReturnController::printMultipleReceipts'], [], ['POST' => 0], null, false, false, null]],
        3618 => [[['_route' => 'app_orders_toggle', '_controller' => 'App\\Controller\\Sale\\OrderController::toggle'], ['id'], ['POST' => 0], null, false, false, null]],
        3633 => [[['_route' => 'app_orders_delete', '_controller' => 'App\\Controller\\Sale\\OrderController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        3658 => [[['_route' => 'app_orders_receipt_content', '_controller' => 'App\\Controller\\Sale\\OrderController::receiptContent'], ['id'], ['GET' => 0], null, false, false, null]],
        3668 => [[['_route' => 'app_orders_show', '_controller' => 'App\\Controller\\Sale\\OrderController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        3695 => [[['_route' => 'app_orders_receipts_content', '_controller' => 'App\\Controller\\Sale\\OrderController::receiptsContent'], [], ['GET' => 0], null, false, false, null]],
        3716 => [[['_route' => 'api_daily_stats', '_controller' => 'App\\Controller\\Sale\\OrderController::getDailyStats'], [], ['GET' => 0], null, false, false, null]],
        3744 => [[['_route' => 'api_check_can_sell', '_controller' => 'App\\Controller\\Sale\\OrderController::checkCanSell'], [], ['GET' => 0], null, false, false, null]],
        3766 => [[['_route' => 'app_orders_contact_admin', '_controller' => 'App\\Controller\\Sale\\OrderController::contactAdmin'], [], ['GET' => 0], null, false, false, null]],
        3793 => [[['_route' => 'app_orders_print', '_controller' => 'App\\Controller\\Sale\\OrderController::printReceipt'], ['id'], ['GET' => 0], null, false, false, null]],
        3816 => [[['_route' => 'app_orders_update_status', '_controller' => 'App\\Controller\\Sale\\OrderController::updateStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        3838 => [[['_route' => 'app_orders_download_pdf', '_controller' => 'App\\Controller\\Sale\\OrderController::downloadPdf'], ['id'], ['GET' => 0], null, false, false, null]],
        3894 => [[['_route' => 'sale_add_product', '_controller' => 'App\\Controller\\Sale\\RetailSaleController::addProduct'], ['id'], ['POST' => 0], null, false, true, null]],
        3940 => [[['_route' => 'sale_update_quantity', '_controller' => 'App\\Controller\\Sale\\RetailSaleController::updateQuantity'], ['type', 'id'], ['PUT' => 0], null, false, true, null]],
        3972 => [[['_route' => 'sale_update_notes', '_controller' => 'App\\Controller\\Sale\\RetailSaleController::updateNotes'], ['type', 'id'], ['PUT' => 0], null, false, true, null]],
        4015 => [[['_route' => 'sale_remove_item', '_controller' => 'App\\Controller\\Sale\\RetailSaleController::removeItem'], ['type', 'id'], ['DELETE' => 0], null, false, true, null]],
        4038 => [[['_route' => 'sale_receipt', '_controller' => 'App\\Controller\\Sale\\RetailSaleController::receipt'], ['id'], ['GET' => 0], null, false, true, null]],
        4095 => [[['_route' => 'app_stock_inventory_add_products', '_controller' => 'App\\Controller\\Stock\\InventoryController::addProducts'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4124 => [[['_route' => 'app_stock_inventory_remove_item', '_controller' => 'App\\Controller\\Stock\\InventoryController::removeItem'], ['inventoryId', 'itemId'], ['POST' => 0], null, false, false, null]],
        4141 => [[['_route' => 'app_stock_inventory_count', '_controller' => 'App\\Controller\\Stock\\InventoryController::count'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4155 => [[['_route' => 'app_stock_inventory_cancel', '_controller' => 'App\\Controller\\Stock\\InventoryController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        4173 => [[['_route' => 'app_stock_inventory_validate', '_controller' => 'App\\Controller\\Stock\\InventoryController::validate'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4183 => [[['_route' => 'app_stock_inventory_show', '_controller' => 'App\\Controller\\Stock\\InventoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        4212 => [[['_route' => 'app_stock_adjustment_show', '_controller' => 'App\\Controller\\Stock\\StockAdjustmentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        4250 => [[['_route' => 'app_stock_transfer_start', '_controller' => 'App\\Controller\\Stock\\StockTransferController::start'], ['id'], ['POST' => 0], null, false, false, null]],
        4266 => [[['_route' => 'app_stock_transfer_receive', '_controller' => 'App\\Controller\\Stock\\StockTransferController::receive'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4281 => [[['_route' => 'app_stock_transfer_cancel', '_controller' => 'App\\Controller\\Stock\\StockTransferController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        4295 => [[['_route' => 'app_stock_transfer_print', '_controller' => 'App\\Controller\\Stock\\StockTransferController::print'], ['id'], ['GET' => 0], null, false, false, null]],
        4305 => [[['_route' => 'app_stock_transfer_show', '_controller' => 'App\\Controller\\Stock\\StockTransferController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        4347 => [[['_route' => 'app_subscription_success', '_controller' => 'App\\Controller\\SubscriptionController::success'], ['id'], null, null, false, true, null]],
        4407 => [[['_route' => 'super_admin_analysis_price_show', '_controller' => 'App\\Controller\\SuperAdmin\\AnalysisPriceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        4424 => [[['_route' => 'super_admin_analysis_price_edit', '_controller' => 'App\\Controller\\SuperAdmin\\AnalysisPriceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4439 => [[['_route' => 'super_admin_analysis_price_toggle', '_controller' => 'App\\Controller\\SuperAdmin\\AnalysisPriceController::toggle'], ['id'], ['POST' => 0], null, false, false, null]],
        4454 => [[['_route' => 'super_admin_analysis_price_delete', '_controller' => 'App\\Controller\\SuperAdmin\\AnalysisPriceController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        4487 => [[['_route' => 'app_super_admin_analysis_request_show', '_controller' => 'App\\Controller\\SuperAdmin\\AnalysisRequestController::show'], ['id'], ['GET' => 0], null, false, false, null]],
        4523 => [[['_route' => 'super_admin_analysis_company_stats', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::companyStats'], ['id'], ['GET' => 0], null, false, false, null]],
        4544 => [[['_route' => 'super_admin_analysis_new', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::new'], ['companyId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        4564 => [[['_route' => 'super_admin_analysis_show', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        4590 => [[['_route' => 'super_admin_analysis_generate_raw', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::generateRawData'], ['id'], ['POST' => 0], null, false, false, null]],
        4613 => [[['_route' => 'super_admin_analysis_upload_report', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::uploadFinalReport'], ['id'], ['POST' => 0], null, false, false, null]],
        4640 => [[['_route' => 'super_admin_analysis_replace_report', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::replaceFinalReport'], ['id'], ['POST' => 0], null, false, false, null]],
        4652 => [[['_route' => 'super_admin_analysis_retry', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::retry'], ['id'], ['POST' => 0], null, false, false, null]],
        4680 => [[['_route' => 'super_admin_analysis_download_final', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::downloadFinalReport'], ['id'], ['GET' => 0], null, false, false, null]],
        4692 => [[['_route' => 'super_admin_analysis_download_raw', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::downloadRawData'], ['id'], ['GET' => 0], null, false, false, null]],
        4715 => [[['_route' => 'super_admin_analysis_payment_link', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::getPaymentLink'], ['id'], ['GET' => 0], null, false, false, null]],
        4743 => [[['_route' => 'super_admin_analysis_send_payment_link', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::sendPaymentLink'], ['id'], ['POST' => 0], null, false, false, null]],
        4767 => [[['_route' => 'super_admin_analysis_force_to_paid', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::forceToPaid'], ['id'], ['POST' => 0], null, false, false, null]],
        4782 => [[['_route' => 'super_admin_analysis_cancel', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        4822 => [[['_route' => 'app_super_admin_hma_service_show', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        4839 => [[['_route' => 'app_super_admin_hma_service_edit', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4862 => [[['_route' => 'app_super_admin_hma_service_toggle', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        4877 => [[['_route' => 'app_super_admin_hma_service_delete', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        4899 => [[['_route' => 'app_super_admin_hma_service_subscriptions', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::subscriptions'], ['id'], ['GET' => 0], null, false, false, null]],
        4925 => [[['_route' => 'app_super_admin_hma_service_export', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        4951 => [[['_route' => 'super_admin_payment_show', '_controller' => 'App\\Controller\\SuperAdmin\\PaymentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        4987 => [[['_route' => 'super_admin_subscription_show', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        5020 => [[['_route' => 'super_admin_subscription_export', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionController::export'], ['company', 'format'], ['GET' => 0], null, false, true, null]],
        5049 => [[['_route' => 'app_super_admin_subscription_plan_show', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionPlanController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        5066 => [[['_route' => 'app_super_admin_subscription_plan_edit', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionPlanController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        5081 => [[['_route' => 'app_super_admin_subscription_plan_toggle', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionPlanController::toggle'], ['id'], ['POST' => 0], null, false, false, null]],
        5091 => [[['_route' => 'app_super_admin_subscription_plan_delete', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionPlanController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        5138 => [
            [['_route' => 'supplier_credit_note_respond', '_controller' => 'App\\Controller\\SupplierCreditNoteResponseController::respond'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
