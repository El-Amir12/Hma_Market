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
                        .'|ayment/([^/]++)(*:285)'
                        .'|ro(?'
                            .'|duct/(?'
                                .'|([^/]++)(?'
                                    .'|(*:317)'
                                    .'|/(?'
                                        .'|edit(*:333)'
                                        .'|toggle\\-status(*:355)'
                                        .'|delete\\-image(*:376)'
                                    .')'
                                    .'|(*:385)'
                                .')'
                                .'|api/([^/]++)/details(*:414)'
                                .'|check/barcode/([^/]++)(*:444)'
                                .'|([^/]++)/(?'
                                    .'|stock\\-batches(*:478)'
                                    .'|print\\-(?'
                                        .'|barcode(*:503)'
                                        .'|sheet(*:516)'
                                    .')'
                                .')'
                            .')'
                            .'|motion/(?'
                                .'|categories/([^/]++)(?'
                                    .'|(*:559)'
                                    .'|/delete(*:574)'
                                .')'
                                .'|products/([^/]++)(?'
                                    .'|(*:603)'
                                    .'|/delete(*:618)'
                                .')'
                                .'|([^/]++)(?'
                                    .'|(*:638)'
                                    .'|/(?'
                                        .'|edit(*:654)'
                                        .'|delete\\-image(*:675)'
                                        .'|toggle\\-status(*:697)'
                                    .')'
                                    .'|(*:706)'
                                .')'
                                .'|product/([^/]++)/promotions(*:742)'
                                .'|category/([^/]++)/promotions(*:778)'
                            .')'
                        .')'
                    .')'
                    .'|category(?'
                        .'|/([^/]++)(?'
                            .'|(*:812)'
                            .'|/(?'
                                .'|edit(*:828)'
                                .'|toggle\\-status(*:850)'
                                .'|activate\\-from\\-quota(*:879)'
                                .'|delete\\-image(*:900)'
                                .'|products(*:916)'
                            .')'
                            .'|(*:925)'
                        .')'
                        .'|\\-recipe/([^/]++)(?'
                            .'|(*:954)'
                            .'|/(?'
                                .'|edit(*:970)'
                                .'|toggle\\-status(*:992)'
                                .'|activate\\-from\\-quota(*:1021)'
                                .'|delete\\-image(*:1043)'
                                .'|recipes(*:1059)'
                                .'|promotions(*:1078)'
                            .')'
                            .'|(*:1088)'
                        .')'
                    .')'
                    .'|location/([^/]++)/(?'
                        .'|show(*:1124)'
                        .'|edit(*:1137)'
                        .'|toggle(*:1152)'
                        .'|delete(*:1167)'
                    .')'
                    .'|re(?'
                        .'|cipe/([^/]++)(?'
                            .'|(*:1198)'
                            .'|/(?'
                                .'|edit(*:1215)'
                                .'|toggle\\-status(*:1238)'
                                .'|delete\\-image(*:1260)'
                            .')'
                            .'|(*:1270)'
                        .')'
                        .'|staurant/promotion/(?'
                            .'|categories/([^/]++)(?'
                                .'|(*:1324)'
                                .'|/delete(*:1340)'
                            .')'
                            .'|recipes/([^/]++)(?'
                                .'|(*:1369)'
                                .'|/delete(*:1385)'
                            .')'
                            .'|([^/]++)(?'
                                .'|(*:1406)'
                                .'|/(?'
                                    .'|edit(*:1423)'
                                    .'|delete\\-image(*:1445)'
                                    .'|toggle\\-status(*:1468)'
                                .')'
                                .'|(*:1478)'
                            .')'
                            .'|recipe/([^/]++)/promotions(*:1514)'
                            .'|category\\-recipe/([^/]++)/promotions(*:1559)'
                        .')'
                    .')'
                    .'|s(?'
                        .'|tock\\-(?'
                            .'|batch/(?'
                                .'|product/([^/]++)(*:1608)'
                                .'|([^/]++)/(?'
                                    .'|show(*:1633)'
                                    .'|edit(*:1646)'
                                    .'|toggle(*:1661)'
                                    .'|delete(*:1676)'
                                    .'|print(*:1690)'
                                .')'
                            .')'
                            .'|movement/([^/]++)/show(*:1723)'
                        .')'
                        .'|u(?'
                            .'|bscription/([^/]++)(*:1756)'
                            .'|pplier(?'
                                .'|/([^/]++)(?'
                                    .'|(*:1786)'
                                    .'|/(?'
                                        .'|edit(*:1803)'
                                        .'|toggle\\-status(*:1826)'
                                    .')'
                                    .'|(*:1836)'
                                .')'
                                .'|\\-credit\\-note/(?'
                                    .'|new/([^/]++)(*:1876)'
                                    .'|([^/]++)(?'
                                        .'|(*:1896)'
                                        .'|/(?'
                                            .'|resolve(*:1916)'
                                            .'|apply\\-stock\\-action(*:1945)'
                                        .')'
                                    .')'
                                    .'|print\\-multiple(*:1971)'
                                    .'|new\\-direct(*:1991)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|type\\-promotion/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:2039)'
                            .'|toggle\\-status(*:2062)'
                            .'|delete(*:2077)'
                        .')'
                        .'|(*:2087)'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:2113)'
                        .'|/(?'
                            .'|edit(*:2130)'
                            .'|delete\\-photo(*:2152)'
                        .')'
                        .'|(*:2162)'
                    .')'
                .')'
                .'|/c(?'
                    .'|ompany/analysis/([^/]++)(?'
                        .'|(*:2205)'
                        .'|/download(?'
                            .'|\\-(?'
                                .'|final(*:2236)'
                                .'|raw(*:2248)'
                            .')'
                            .'|(*:2258)'
                        .')'
                    .')'
                    .'|ustomer/(?'
                        .'|category/([^/]++)(*:2297)'
                        .'|orders/([^/]++)(*:2321)'
                    .')'
                .')'
                .'|/ma(?'
                    .'|nager/team/([^/]++)(?'
                        .'|(*:2360)'
                        .'|/edit(*:2374)'
                    .')'
                    .'|rketplace/(?'
                        .'|verify\\-email/([^/]++)(*:2419)'
                        .'|rese(?'
                            .'|nd\\-verification/([^/]++)(*:2460)'
                            .'|t\\-password/([^/]++)(*:2489)'
                        .')'
                        .'|cart/(?'
                            .'|update/([^/]++)(*:2522)'
                            .'|remove/([^/]++)(*:2546)'
                            .'|payment/status(?:/([^/]++))?(*:2583)'
                        .')'
                        .'|favorite/check/([^/]++)(*:2616)'
                        .'|p(?'
                            .'|harmacies/api/pharmacy/([^/]++)/(?'
                                .'|categories(*:2674)'
                                .'|forms(*:2688)'
                            .')'
                            .'|ro(?'
                                .'|duct/([^/]++)(?'
                                    .'|(*:2719)'
                                    .'|/rat(?'
                                        .'|e(*:2736)'
                                        .'|ings(*:2749)'
                                    .')'
                                .')'
                                .'|file/order/(?'
                                    .'|([^/]++)(*:2782)'
                                    .'|status/([^/]++)(*:2806)'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/p(?'
                    .'|ayment/(?'
                        .'|success/([^/]++)(*:2851)'
                        .'|already\\-processed/([^/]++)(*:2887)'
                    .')'
                    .'|rint/ticket/([^/]++)/([^/]++)(*:2926)'
                    .'|urchase/(?'
                        .'|re(?'
                            .'|move\\-product/([^/]++)(*:2973)'
                            .'|ceive/([^/]++)(*:2996)'
                        .')'
                        .'|update\\-quantity/([^/]++)(*:3031)'
                        .'|cancel/([^/]++)(*:3055)'
                        .'|([^/]++)(?'
                            .'|(*:3075)'
                            .'|/print(*:3090)'
                        .')'
                        .'|update\\-item/([^/]++)(*:3121)'
                        .'|report\\-issue\\-temp(*:3149)'
                        .'|delete\\-issue\\-temp/([^/]++)(*:3186)'
                    .')'
                .')'
                .'|/re(?'
                    .'|set\\-password/([^/]++)(*:3225)'
                    .'|turns/(?'
                        .'|new/([^/]++)(*:3255)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:3283)'
                                .'|approve(*:3299)'
                                .'|complete(*:3316)'
                                .'|reject(*:3331)'
                            .')'
                            .'|(*:3341)'
                        .')'
                        .'|api/order\\-items/([^/]++)(*:3376)'
                        .'|print\\-(?'
                            .'|receipt/([^/]++)(*:3411)'
                            .'|multiple\\-receipts(*:3438)'
                        .')'
                    .')'
                .')'
                .'|/orders/(?'
                    .'|([^/]++)(?'
                        .'|/(?'
                            .'|toggle(*:3482)'
                            .'|delete(*:3497)'
                            .'|receipt\\-content(*:3522)'
                        .')'
                        .'|(*:3532)'
                    .')'
                    .'|receipts\\-content(*:3559)'
                    .'|daily\\-stats(*:3580)'
                    .'|c(?'
                        .'|heck\\-can\\-sell(*:3608)'
                        .'|ontact\\-admin(*:3630)'
                    .')'
                    .'|([^/]++)/(?'
                        .'|print(*:3657)'
                        .'|update\\-status(*:3680)'
                        .'|download\\-pdf(*:3702)'
                    .')'
                .')'
                .'|/s(?'
                    .'|ale/retail/sale/(?'
                        .'|add\\-product/([^/]++)(*:3758)'
                        .'|update\\-(?'
                            .'|quantity/([^/]++)/([^/]++)(*:3804)'
                            .'|notes/([^/]++)/([^/]++)(*:3836)'
                        .')'
                        .'|re(?'
                            .'|move\\-item/([^/]++)/([^/]++)(*:3879)'
                            .'|ceipt/([^/]++)(*:3902)'
                        .')'
                    .')'
                    .'|tock/(?'
                        .'|inventory/([^/]++)(?'
                            .'|/(?'
                                .'|add\\-products(*:3959)'
                                .'|c(?'
                                    .'|ount(*:3976)'
                                    .'|ancel(*:3990)'
                                .')'
                                .'|validate(*:4008)'
                            .')'
                            .'|(*:4018)'
                        .')'
                        .'|adjustment/([^/]++)(*:4047)'
                        .'|transfer/([^/]++)(?'
                            .'|/(?'
                                .'|start(*:4085)'
                                .'|receive(*:4101)'
                                .'|cancel(*:4116)'
                            .')'
                            .'|(*:4126)'
                        .')'
                    .')'
                    .'|u(?'
                        .'|bscription/success/([^/]++)(*:4168)'
                        .'|p(?'
                            .'|er\\-admin/(?'
                                .'|analysis(?'
                                    .'|\\-prices/([^/]++)(?'
                                        .'|(*:4225)'
                                        .'|/(?'
                                            .'|edit(*:4242)'
                                            .'|toggle(*:4257)'
                                            .'|delete(*:4272)'
                                        .')'
                                    .')'
                                    .'|/(?'
                                        .'|company/([^/]++)/stats(*:4309)'
                                        .'|new/([^/]++)(*:4330)'
                                        .'|([^/]++)(?'
                                            .'|(*:4350)'
                                            .'|/(?'
                                                .'|generate\\-raw(*:4376)'
                                                .'|upload\\-report(*:4399)'
                                                .'|re(?'
                                                    .'|place\\-report(*:4426)'
                                                    .'|try(*:4438)'
                                                .')'
                                                .'|download\\-(?'
                                                    .'|final(*:4466)'
                                                    .'|raw(*:4478)'
                                                .')'
                                                .'|payment\\-link(*:4501)'
                                                .'|send\\-payment\\-link(*:4529)'
                                                .'|force\\-to\\-paid(*:4553)'
                                                .'|cancel(*:4568)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|hma\\-service/(?'
                                    .'|([^/]++)(?'
                                        .'|(*:4608)'
                                        .'|/(?'
                                            .'|edit(*:4625)'
                                            .'|toggle\\-status(*:4648)'
                                            .'|delete(*:4663)'
                                            .'|subscriptions(*:4685)'
                                        .')'
                                    .')'
                                    .'|export/([^/]++)(*:4711)'
                                .')'
                                .'|payment/([^/]++)(*:4737)'
                                .'|subscription(?'
                                    .'|/([^/]++)(*:4770)'
                                    .'|\\-plans/([^/]++)(?'
                                        .'|(*:4798)'
                                        .'|/(?'
                                            .'|edit(*:4815)'
                                            .'|toggle(*:4830)'
                                        .')'
                                        .'|(*:4840)'
                                    .')'
                                .')'
                            .')'
                            .'|plier/credit\\-note/respond/([^/]++)(*:4887)'
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
        285 => [[['_route' => 'admin_payment_show', '_controller' => 'App\\Controller\\Admin\\PaymentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        317 => [[['_route' => 'app_admin_product_show', '_controller' => 'App\\Controller\\Admin\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        333 => [[['_route' => 'app_admin_product_edit', '_controller' => 'App\\Controller\\Admin\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        355 => [[['_route' => 'app_admin_product_toggle_status', '_controller' => 'App\\Controller\\Admin\\ProductController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        376 => [[['_route' => 'app_admin_product_delete_image', '_controller' => 'App\\Controller\\Admin\\ProductController::deleteImage'], ['id'], ['POST' => 0], null, false, false, null]],
        385 => [[['_route' => 'app_admin_product_delete', '_controller' => 'App\\Controller\\Admin\\ProductController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        414 => [[['_route' => 'app_admin_product_api_details', '_controller' => 'App\\Controller\\Admin\\ProductController::apiDetails'], ['id'], ['GET' => 0], null, false, false, null]],
        444 => [[['_route' => 'app_admin_product_check_barcode', '_controller' => 'App\\Controller\\Admin\\ProductController::checkBarcode'], ['barcode'], ['GET' => 0], null, false, true, null]],
        478 => [[['_route' => 'app_admin_product_stock_batches', '_controller' => 'App\\Controller\\Admin\\ProductController::stockBatches'], ['id'], ['GET' => 0], null, false, false, null]],
        503 => [[['_route' => 'app_admin_product_print_barcode', '_controller' => 'App\\Controller\\Admin\\ProductController::printBarcode'], ['id'], ['GET' => 0], null, false, false, null]],
        516 => [[['_route' => 'app_admin_product_print_sheet', '_controller' => 'App\\Controller\\Admin\\ProductController::printSheet'], ['id'], ['GET' => 0], null, false, false, null]],
        559 => [[['_route' => 'app_admin_promotion_category_show', '_controller' => 'App\\Controller\\Admin\\PromotionController::categoryShow'], ['id'], ['GET' => 0], null, false, true, null]],
        574 => [[['_route' => 'app_admin_promotion_category_delete', '_controller' => 'App\\Controller\\Admin\\PromotionController::categoryDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        603 => [[['_route' => 'app_admin_promotion_product_show', '_controller' => 'App\\Controller\\Admin\\PromotionController::productShow'], ['id'], ['GET' => 0], null, false, true, null]],
        618 => [[['_route' => 'app_admin_promotion_product_delete', '_controller' => 'App\\Controller\\Admin\\PromotionController::productDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        638 => [[['_route' => 'app_admin_promotion_show', '_controller' => 'App\\Controller\\Admin\\PromotionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        654 => [[['_route' => 'app_admin_promotion_edit', '_controller' => 'App\\Controller\\Admin\\PromotionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        675 => [[['_route' => 'app_admin_promotion_delete_image', '_controller' => 'App\\Controller\\Admin\\PromotionController::deleteImage'], ['id'], ['POST' => 0], null, false, false, null]],
        697 => [[['_route' => 'app_admin_promotion_toggle_status', '_controller' => 'App\\Controller\\Admin\\PromotionController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        706 => [[['_route' => 'app_admin_promotion_delete', '_controller' => 'App\\Controller\\Admin\\PromotionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        742 => [[['_route' => 'app_admin_product_promotions', '_controller' => 'App\\Controller\\Admin\\PromotionController::productPromotions'], ['id'], ['GET' => 0], null, false, false, null]],
        778 => [[['_route' => 'app_admin_category_promotions', '_controller' => 'App\\Controller\\Admin\\PromotionController::categoryPromotions'], ['id'], ['GET' => 0], null, false, false, null]],
        812 => [[['_route' => 'app_admin_category_show', '_controller' => 'App\\Controller\\Admin\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        828 => [[['_route' => 'app_admin_category_edit', '_controller' => 'App\\Controller\\Admin\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        850 => [[['_route' => 'app_admin_category_toggle_status', '_controller' => 'App\\Controller\\Admin\\CategoryController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        879 => [[['_route' => 'app_admin_category_activate_from_quota', '_controller' => 'App\\Controller\\Admin\\CategoryController::activateFromQuota'], ['id'], ['POST' => 0], null, false, false, null]],
        900 => [[['_route' => 'app_admin_category_delete_image', '_controller' => 'App\\Controller\\Admin\\CategoryController::deleteImage'], ['id'], ['POST' => 0], null, false, false, null]],
        916 => [[['_route' => 'app_admin_category_products', '_controller' => 'App\\Controller\\Admin\\CategoryController::products'], ['id'], ['GET' => 0], null, false, false, null]],
        925 => [[['_route' => 'app_admin_category_delete', '_controller' => 'App\\Controller\\Admin\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        954 => [[['_route' => 'app_admin_category_recipe_show', '_controller' => 'App\\Controller\\Admin\\CategoryRecipeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        970 => [[['_route' => 'app_admin_category_recipe_edit', '_controller' => 'App\\Controller\\Admin\\CategoryRecipeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        992 => [[['_route' => 'app_admin_category_recipe_toggle_status', '_controller' => 'App\\Controller\\Admin\\CategoryRecipeController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        1021 => [[['_route' => 'app_admin_category_recipe_activate_from_quota', '_controller' => 'App\\Controller\\Admin\\CategoryRecipeController::activateFromQuota'], ['id'], ['POST' => 0], null, false, false, null]],
        1043 => [[['_route' => 'app_admin_category_recipe_delete_image', '_controller' => 'App\\Controller\\Admin\\CategoryRecipeController::deleteImage'], ['id'], ['POST' => 0], null, false, false, null]],
        1059 => [[['_route' => 'app_admin_category_recipe_recipes', '_controller' => 'App\\Controller\\Admin\\CategoryRecipeController::recipes'], ['id'], ['GET' => 0], null, false, false, null]],
        1078 => [[['_route' => 'app_admin_category_recipe_promotions', '_controller' => 'App\\Controller\\Admin\\CategoryRecipeController::promotions'], ['id'], ['GET' => 0], null, false, false, null]],
        1088 => [[['_route' => 'app_admin_category_recipe_delete', '_controller' => 'App\\Controller\\Admin\\CategoryRecipeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1124 => [[['_route' => 'app_admin_location_show', '_controller' => 'App\\Controller\\Admin\\LocationController::show'], ['id'], ['GET' => 0], null, false, false, null]],
        1137 => [[['_route' => 'app_admin_location_edit', '_controller' => 'App\\Controller\\Admin\\LocationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1152 => [[['_route' => 'app_admin_location_toggle', '_controller' => 'App\\Controller\\Admin\\LocationController::toggle'], ['id'], ['POST' => 0], null, false, false, null]],
        1167 => [[['_route' => 'app_admin_location_delete', '_controller' => 'App\\Controller\\Admin\\LocationController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1198 => [[['_route' => 'app_admin_recipe_show', '_controller' => 'App\\Controller\\Admin\\RecipeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1215 => [[['_route' => 'app_admin_recipe_edit', '_controller' => 'App\\Controller\\Admin\\RecipeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1238 => [[['_route' => 'app_admin_recipe_toggle_status', '_controller' => 'App\\Controller\\Admin\\RecipeController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        1260 => [[['_route' => 'app_admin_recipe_delete_image', '_controller' => 'App\\Controller\\Admin\\RecipeController::deleteImage'], ['id'], ['POST' => 0], null, false, false, null]],
        1270 => [[['_route' => 'app_admin_recipe_delete', '_controller' => 'App\\Controller\\Admin\\RecipeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1324 => [[['_route' => 'app_restaurant_promotion_category_show', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::categoryShow'], ['id'], ['GET' => 0], null, false, true, null]],
        1340 => [[['_route' => 'app_restaurant_promotion_category_delete', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::categoryDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        1369 => [[['_route' => 'app_restaurant_promotion_recipe_show', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::recipeShow'], ['id'], ['GET' => 0], null, false, true, null]],
        1385 => [[['_route' => 'app_restaurant_promotion_recipe_delete', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::recipeDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        1406 => [[['_route' => 'app_restaurant_promotion_show', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1423 => [[['_route' => 'app_restaurant_promotion_edit', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1445 => [[['_route' => 'app_restaurant_promotion_delete_image', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::deleteImage'], ['id'], ['POST' => 0], null, false, false, null]],
        1468 => [[['_route' => 'app_restaurant_promotion_toggle_status', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        1478 => [[['_route' => 'app_restaurant_promotion_delete', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1514 => [[['_route' => 'app_restaurant_recipe_promotions', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::recipePromotions'], ['id'], ['GET' => 0], null, false, false, null]],
        1559 => [[['_route' => 'app_restaurant_category_recipe_promotions', '_controller' => 'App\\Controller\\Admin\\RestaurantPromotionController::categoryRecipePromotions'], ['id'], ['GET' => 0], null, false, false, null]],
        1608 => [[['_route' => 'app_admin_stock_batch_index', '_controller' => 'App\\Controller\\Admin\\StockBatchController::index'], ['productId'], ['GET' => 0], null, false, true, null]],
        1633 => [[['_route' => 'app_admin_stock_batch_show', '_controller' => 'App\\Controller\\Admin\\StockBatchController::show'], ['id'], ['GET' => 0], null, false, false, null]],
        1646 => [[['_route' => 'app_admin_stock_batch_edit', '_controller' => 'App\\Controller\\Admin\\StockBatchController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1661 => [[['_route' => 'app_admin_stock_batch_toggle', '_controller' => 'App\\Controller\\Admin\\StockBatchController::toggle'], ['id'], ['POST' => 0], null, false, false, null]],
        1676 => [[['_route' => 'app_admin_stock_batch_delete', '_controller' => 'App\\Controller\\Admin\\StockBatchController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1690 => [[['_route' => 'app_admin_stock_batch_print', '_controller' => 'App\\Controller\\Admin\\StockBatchController::print'], ['id'], ['GET' => 0], null, false, false, null]],
        1723 => [[['_route' => 'app_admin_stock_movement_show', '_controller' => 'App\\Controller\\Admin\\StockMovementController::show'], ['id'], ['GET' => 0], null, false, false, null]],
        1756 => [[['_route' => 'admin_subscription_show', '_controller' => 'App\\Controller\\Admin\\SubscriptionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1786 => [[['_route' => 'app_admin_supplier_show', '_controller' => 'App\\Controller\\Admin\\SupplierController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1803 => [[['_route' => 'app_admin_supplier_edit', '_controller' => 'App\\Controller\\Admin\\SupplierController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1826 => [[['_route' => 'app_admin_supplier_toggle_status', '_controller' => 'App\\Controller\\Admin\\SupplierController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        1836 => [[['_route' => 'app_admin_supplier_delete', '_controller' => 'App\\Controller\\Admin\\SupplierController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1876 => [[['_route' => 'app_supplier_credit_note_new', '_controller' => 'App\\Controller\\Admin\\SupplierCreditNoteController::new'], ['batchId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1896 => [[['_route' => 'app_supplier_credit_note_show', '_controller' => 'App\\Controller\\Admin\\SupplierCreditNoteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1916 => [[['_route' => 'app_supplier_credit_note_resolve', '_controller' => 'App\\Controller\\Admin\\SupplierCreditNoteController::resolve'], ['id'], ['POST' => 0], null, false, false, null]],
        1945 => [[['_route' => 'app_supplier_credit_note_apply_stock_action', '_controller' => 'App\\Controller\\Admin\\SupplierCreditNoteController::applyStockAction'], ['id'], ['POST' => 0], null, false, false, null]],
        1971 => [[['_route' => 'app_supplier_credit_note_print_multiple', '_controller' => 'App\\Controller\\Admin\\SupplierCreditNoteController::printMultiple'], [], ['GET' => 0], null, false, false, null]],
        1991 => [[['_route' => 'app_supplier_credit_note_new_direct', '_controller' => 'App\\Controller\\Admin\\SupplierCreditNoteController::newDirect'], [], ['POST' => 0], null, false, false, null]],
        2039 => [[['_route' => 'app_admin_type_promotion_edit', '_controller' => 'App\\Controller\\Admin\\TypePromotionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2062 => [[['_route' => 'app_admin_type_promotion_toggle_status', '_controller' => 'App\\Controller\\Admin\\TypePromotionController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        2077 => [[['_route' => 'app_admin_type_promotion_delete', '_controller' => 'App\\Controller\\Admin\\TypePromotionController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        2087 => [[['_route' => 'app_admin_type_promotion_show', '_controller' => 'App\\Controller\\Admin\\TypePromotionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2113 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\Admin\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2130 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\Admin\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2152 => [[['_route' => 'app_user_delete_photo', '_controller' => 'App\\Controller\\Admin\\UserController::deletePhoto'], ['id'], ['POST' => 0], null, false, false, null]],
        2162 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\Admin\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        2205 => [[['_route' => 'company_analysis_show', '_controller' => 'App\\Controller\\Company\\CompanyAnalysisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2236 => [[['_route' => 'company_analysis_download_final', '_controller' => 'App\\Controller\\Company\\CompanyAnalysisController::downloadFinal'], ['id'], ['GET' => 0], null, false, false, null]],
        2248 => [[['_route' => 'company_analysis_download_raw', '_controller' => 'App\\Controller\\Company\\CompanyAnalysisController::downloadRaw'], ['id'], ['GET' => 0], null, false, false, null]],
        2258 => [[['_route' => 'company_analysis_download', '_controller' => 'App\\Controller\\Company\\CompanyAnalysisController::download'], ['id'], ['GET' => 0], null, false, false, null]],
        2297 => [[['_route' => 'marketplace_category', '_controller' => 'App\\Controller\\Marketplace\\CategoryController::show'], ['slug'], null, null, false, true, null]],
        2321 => [[['_route' => 'customer_order_show', '_controller' => 'App\\Controller\\Marketplace\\OrderController::show'], ['id'], null, null, false, true, null]],
        2360 => [[['_route' => 'app_manager_team_show', '_controller' => 'App\\Controller\\Manager\\TeamController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2374 => [[['_route' => 'app_manager_team_edit', '_controller' => 'App\\Controller\\Manager\\TeamController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2419 => [[['_route' => 'marketplace_verify_email', '_controller' => 'App\\Controller\\Marketplace\\AuthController::verifyEmail'], ['token'], null, null, false, true, null]],
        2460 => [[['_route' => 'marketplace_resend_verification', '_controller' => 'App\\Controller\\Marketplace\\AuthController::resendVerification'], ['email'], null, null, false, true, null]],
        2489 => [[['_route' => 'marketplace_reset_password', '_controller' => 'App\\Controller\\Marketplace\\ForgotPasswordController::resetPassword'], ['token'], null, null, false, true, null]],
        2522 => [[['_route' => 'marketplace_cart_update', '_controller' => 'App\\Controller\\Marketplace\\CartController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        2546 => [[['_route' => 'marketplace_cart_remove', '_controller' => 'App\\Controller\\Marketplace\\CartController::remove'], ['id'], ['POST' => 0], null, false, true, null]],
        2583 => [[['_route' => 'marketplace_payment_status', 'transaction_id' => null, '_controller' => 'App\\Controller\\Marketplace\\CartController::paymentStatus'], ['transaction_id'], null, null, false, true, null]],
        2616 => [[['_route' => 'marketplace_favorite_check', '_controller' => 'App\\Controller\\Marketplace\\FavoriteController::check'], ['productId'], ['GET' => 0], null, false, true, null]],
        2674 => [[['_route' => 'api_pharmacy_categories', '_controller' => 'App\\Controller\\Marketplace\\PharmacySearchController::getPharmacyCategories'], ['id'], null, null, false, false, null]],
        2688 => [[['_route' => 'api_pharmacy_forms', '_controller' => 'App\\Controller\\Marketplace\\PharmacySearchController::getPharmacyForms'], ['id'], null, null, false, false, null]],
        2719 => [[['_route' => 'marketplace_product_show', '_controller' => 'App\\Controller\\Marketplace\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2736 => [[['_route' => 'marketplace_product_rate', '_controller' => 'App\\Controller\\Marketplace\\ProductController::rateProduct'], ['id'], ['POST' => 0], null, false, false, null]],
        2749 => [[['_route' => 'marketplace_product_ratings', '_controller' => 'App\\Controller\\Marketplace\\ProductController::getRatings'], ['id'], ['GET' => 0], null, false, false, null]],
        2782 => [[['_route' => 'marketplace_order_detail', '_controller' => 'App\\Controller\\Marketplace\\ProfileController::orderDetail'], ['id'], null, null, false, true, null]],
        2806 => [[['_route' => 'marketplace_order_status', '_controller' => 'App\\Controller\\Marketplace\\ProfileController::updateOrderStatus'], ['id'], ['POST' => 0], null, false, true, null]],
        2851 => [[['_route' => 'payment_success_with_id', '_controller' => 'App\\Controller\\PaymentController::successWithId'], ['id'], ['GET' => 0], null, false, true, null]],
        2887 => [[['_route' => 'payment_already_processed', '_controller' => 'App\\Controller\\PaymentController::alreadyProcessed'], ['id'], ['GET' => 0], null, false, true, null]],
        2926 => [[['_route' => 'print_ticket', '_controller' => 'App\\Controller\\PrintController::printTicket'], ['id', 'type'], ['GET' => 0], null, false, true, null]],
        2973 => [[['_route' => 'purchase_remove_product', '_controller' => 'App\\Controller\\PurchaseController::removeProduct'], ['productId'], ['DELETE' => 0], null, false, true, null]],
        2996 => [[['_route' => 'purchase_receive', '_controller' => 'App\\Controller\\PurchaseController::receive'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        3031 => [[['_route' => 'purchase_update_quantity', '_controller' => 'App\\Controller\\PurchaseController::updateQuantity'], ['productId'], ['PUT' => 0], null, false, true, null]],
        3055 => [[['_route' => 'purchase_cancel', '_controller' => 'App\\Controller\\PurchaseController::cancel'], ['id'], ['POST' => 0], null, false, true, null]],
        3075 => [[['_route' => 'purchase_show', '_controller' => 'App\\Controller\\PurchaseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        3090 => [[['_route' => 'purchase_print', '_controller' => 'App\\Controller\\PurchaseController::print'], ['id'], ['GET' => 0], null, false, false, null]],
        3121 => [[['_route' => 'purchase_update_item', '_controller' => 'App\\Controller\\PurchaseController::updateCartItem'], ['productId'], ['PUT' => 0], null, false, true, null]],
        3149 => [[['_route' => 'purchase_report_issue_temp', '_controller' => 'App\\Controller\\PurchaseController::reportIssueTemp'], [], ['POST' => 0], null, false, false, null]],
        3186 => [[['_route' => 'purchase_delete_issue_temp', '_controller' => 'App\\Controller\\PurchaseController::deleteIssueTemp'], ['batchId'], ['POST' => 0], null, false, true, null]],
        3225 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        3255 => [[['_route' => 'returns_new', '_controller' => 'App\\Controller\\Return\\ReturnController::new'], ['orderId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        3283 => [[['_route' => 'returns_edit', '_controller' => 'App\\Controller\\Return\\ReturnController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3299 => [[['_route' => 'returns_approve', '_controller' => 'App\\Controller\\Return\\ReturnController::approve'], ['id'], ['POST' => 0], null, false, false, null]],
        3316 => [[['_route' => 'returns_complete', '_controller' => 'App\\Controller\\Return\\ReturnController::complete'], ['id'], ['POST' => 0], null, false, false, null]],
        3331 => [[['_route' => 'returns_reject', '_controller' => 'App\\Controller\\Return\\ReturnController::reject'], ['id'], ['POST' => 0], null, false, false, null]],
        3341 => [[['_route' => 'returns_show', '_controller' => 'App\\Controller\\Return\\ReturnController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        3376 => [[['_route' => 'returns_api_order_items', '_controller' => 'App\\Controller\\Return\\ReturnController::getOrderItems'], ['orderId'], ['GET' => 0], null, false, true, null]],
        3411 => [[['_route' => 'returns_print_receipt', '_controller' => 'App\\Controller\\Return\\ReturnController::printReceipt'], ['id'], ['GET' => 0], null, false, true, null]],
        3438 => [[['_route' => 'returns_print_multiple_receipts', '_controller' => 'App\\Controller\\Return\\ReturnController::printMultipleReceipts'], [], ['POST' => 0], null, false, false, null]],
        3482 => [[['_route' => 'app_orders_toggle', '_controller' => 'App\\Controller\\Sale\\OrderController::toggle'], ['id'], ['POST' => 0], null, false, false, null]],
        3497 => [[['_route' => 'app_orders_delete', '_controller' => 'App\\Controller\\Sale\\OrderController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        3522 => [[['_route' => 'app_orders_receipt_content', '_controller' => 'App\\Controller\\Sale\\OrderController::receiptContent'], ['id'], ['GET' => 0], null, false, false, null]],
        3532 => [[['_route' => 'app_orders_show', '_controller' => 'App\\Controller\\Sale\\OrderController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        3559 => [[['_route' => 'app_orders_receipts_content', '_controller' => 'App\\Controller\\Sale\\OrderController::receiptsContent'], [], ['GET' => 0], null, false, false, null]],
        3580 => [[['_route' => 'api_daily_stats', '_controller' => 'App\\Controller\\Sale\\OrderController::getDailyStats'], [], ['GET' => 0], null, false, false, null]],
        3608 => [[['_route' => 'api_check_can_sell', '_controller' => 'App\\Controller\\Sale\\OrderController::checkCanSell'], [], ['GET' => 0], null, false, false, null]],
        3630 => [[['_route' => 'app_orders_contact_admin', '_controller' => 'App\\Controller\\Sale\\OrderController::contactAdmin'], [], ['GET' => 0], null, false, false, null]],
        3657 => [[['_route' => 'app_orders_print', '_controller' => 'App\\Controller\\Sale\\OrderController::printReceipt'], ['id'], ['GET' => 0], null, false, false, null]],
        3680 => [[['_route' => 'app_orders_update_status', '_controller' => 'App\\Controller\\Sale\\OrderController::updateStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        3702 => [[['_route' => 'app_orders_download_pdf', '_controller' => 'App\\Controller\\Sale\\OrderController::downloadPdf'], ['id'], ['GET' => 0], null, false, false, null]],
        3758 => [[['_route' => 'sale_add_product', '_controller' => 'App\\Controller\\Sale\\RetailSaleController::addProduct'], ['id'], ['POST' => 0], null, false, true, null]],
        3804 => [[['_route' => 'sale_update_quantity', '_controller' => 'App\\Controller\\Sale\\RetailSaleController::updateQuantity'], ['type', 'id'], ['PUT' => 0], null, false, true, null]],
        3836 => [[['_route' => 'sale_update_notes', '_controller' => 'App\\Controller\\Sale\\RetailSaleController::updateNotes'], ['type', 'id'], ['PUT' => 0], null, false, true, null]],
        3879 => [[['_route' => 'sale_remove_item', '_controller' => 'App\\Controller\\Sale\\RetailSaleController::removeItem'], ['type', 'id'], ['DELETE' => 0], null, false, true, null]],
        3902 => [[['_route' => 'sale_receipt', '_controller' => 'App\\Controller\\Sale\\RetailSaleController::receipt'], ['id'], ['GET' => 0], null, false, true, null]],
        3959 => [[['_route' => 'app_stock_inventory_add_products', '_controller' => 'App\\Controller\\Stock\\InventoryController::addProducts'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3976 => [[['_route' => 'app_stock_inventory_count', '_controller' => 'App\\Controller\\Stock\\InventoryController::count'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3990 => [[['_route' => 'app_stock_inventory_cancel', '_controller' => 'App\\Controller\\Stock\\InventoryController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        4008 => [[['_route' => 'app_stock_inventory_validate', '_controller' => 'App\\Controller\\Stock\\InventoryController::validate'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4018 => [[['_route' => 'app_stock_inventory_show', '_controller' => 'App\\Controller\\Stock\\InventoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        4047 => [[['_route' => 'app_stock_adjustment_show', '_controller' => 'App\\Controller\\Stock\\StockAdjustmentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        4085 => [[['_route' => 'app_stock_transfer_start', '_controller' => 'App\\Controller\\Stock\\StockTransferController::start'], ['id'], ['POST' => 0], null, false, false, null]],
        4101 => [[['_route' => 'app_stock_transfer_receive', '_controller' => 'App\\Controller\\Stock\\StockTransferController::receive'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4116 => [[['_route' => 'app_stock_transfer_cancel', '_controller' => 'App\\Controller\\Stock\\StockTransferController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        4126 => [[['_route' => 'app_stock_transfer_show', '_controller' => 'App\\Controller\\Stock\\StockTransferController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        4168 => [[['_route' => 'app_subscription_success', '_controller' => 'App\\Controller\\SubscriptionController::success'], ['id'], null, null, false, true, null]],
        4225 => [[['_route' => 'super_admin_analysis_price_show', '_controller' => 'App\\Controller\\SuperAdmin\\AnalysisPriceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        4242 => [[['_route' => 'super_admin_analysis_price_edit', '_controller' => 'App\\Controller\\SuperAdmin\\AnalysisPriceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4257 => [[['_route' => 'super_admin_analysis_price_toggle', '_controller' => 'App\\Controller\\SuperAdmin\\AnalysisPriceController::toggle'], ['id'], ['POST' => 0], null, false, false, null]],
        4272 => [[['_route' => 'super_admin_analysis_price_delete', '_controller' => 'App\\Controller\\SuperAdmin\\AnalysisPriceController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        4309 => [[['_route' => 'super_admin_analysis_company_stats', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::companyStats'], ['id'], ['GET' => 0], null, false, false, null]],
        4330 => [[['_route' => 'super_admin_analysis_new', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::new'], ['companyId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        4350 => [[['_route' => 'super_admin_analysis_show', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        4376 => [[['_route' => 'super_admin_analysis_generate_raw', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::generateRawData'], ['id'], ['POST' => 0], null, false, false, null]],
        4399 => [[['_route' => 'super_admin_analysis_upload_report', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::uploadFinalReport'], ['id'], ['POST' => 0], null, false, false, null]],
        4426 => [[['_route' => 'super_admin_analysis_replace_report', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::replaceFinalReport'], ['id'], ['POST' => 0], null, false, false, null]],
        4438 => [[['_route' => 'super_admin_analysis_retry', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::retry'], ['id'], ['POST' => 0], null, false, false, null]],
        4466 => [[['_route' => 'super_admin_analysis_download_final', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::downloadFinalReport'], ['id'], ['GET' => 0], null, false, false, null]],
        4478 => [[['_route' => 'super_admin_analysis_download_raw', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::downloadRawData'], ['id'], ['GET' => 0], null, false, false, null]],
        4501 => [[['_route' => 'super_admin_analysis_payment_link', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::getPaymentLink'], ['id'], ['GET' => 0], null, false, false, null]],
        4529 => [[['_route' => 'super_admin_analysis_send_payment_link', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::sendPaymentLink'], ['id'], ['POST' => 0], null, false, false, null]],
        4553 => [[['_route' => 'super_admin_analysis_force_to_paid', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::forceToPaid'], ['id'], ['POST' => 0], null, false, false, null]],
        4568 => [[['_route' => 'super_admin_analysis_cancel', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        4608 => [[['_route' => 'app_super_admin_hma_service_show', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        4625 => [[['_route' => 'app_super_admin_hma_service_edit', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4648 => [[['_route' => 'app_super_admin_hma_service_toggle', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        4663 => [[['_route' => 'app_super_admin_hma_service_delete', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        4685 => [[['_route' => 'app_super_admin_hma_service_subscriptions', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::subscriptions'], ['id'], ['GET' => 0], null, false, false, null]],
        4711 => [[['_route' => 'app_super_admin_hma_service_export', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        4737 => [[['_route' => 'super_admin_payment_show', '_controller' => 'App\\Controller\\SuperAdmin\\PaymentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        4770 => [[['_route' => 'super_admin_subscription_show', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        4798 => [[['_route' => 'app_super_admin_subscription_plan_show', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionPlanController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        4815 => [[['_route' => 'app_super_admin_subscription_plan_edit', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionPlanController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4830 => [[['_route' => 'app_super_admin_subscription_plan_toggle', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionPlanController::toggle'], ['id'], ['POST' => 0], null, false, false, null]],
        4840 => [[['_route' => 'app_super_admin_subscription_plan_delete', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionPlanController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        4887 => [
            [['_route' => 'supplier_credit_note_respond', '_controller' => 'App\\Controller\\SupplierCreditNoteResponseController::respond'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
