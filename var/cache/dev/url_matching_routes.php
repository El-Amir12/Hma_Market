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
        '/admin/stock-batch/import/excel' => [[['_route' => 'app_admin_stock_batch_import_excel', '_controller' => 'App\\Controller\\Admin\\StockBatchController::importExcel'], null, ['POST' => 0], null, false, false, null]],
        '/admin/stock-batch/export/pdf' => [[['_route' => 'app_admin_stock_batch_export_pdf', '_controller' => 'App\\Controller\\Admin\\StockBatchController::exportPdf'], null, ['GET' => 0], null, false, false, null]],
        '/admin/stock-batch/export/excel/template' => [[['_route' => 'app_admin_stock_batch_export_excel_template', '_controller' => 'App\\Controller\\Admin\\StockBatchController::exportExcelTemplate'], null, ['GET' => 0], null, false, false, null]],
        '/admin/stock-movement' => [[['_route' => 'app_admin_stock_movement_index', '_controller' => 'App\\Controller\\Admin\\StockMovementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/stock-movement/export/excel' => [[['_route' => 'app_admin_stock_movement_export_excel', '_controller' => 'App\\Controller\\Admin\\StockMovementController::exportExcel'], null, ['GET' => 0], null, false, false, null]],
        '/admin/stock-movement/export/pdf' => [[['_route' => 'app_admin_stock_movement_export_pdf', '_controller' => 'App\\Controller\\Admin\\StockMovementController::exportPdf'], null, ['GET' => 0], null, false, false, null]],
        '/admin/stock-movement/print-multiple' => [[['_route' => 'app_admin_stock_movement_print_multiple', '_controller' => 'App\\Controller\\Admin\\StockMovementController::printMultiple'], null, ['GET' => 0], null, false, false, null]],
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
        '/dashboard/company/details' => [[['_route' => 'app_dashboard_hmaservice_details', '_controller' => 'App\\Controller\\Dashboard\\HmaServiceProfileController::showDetails'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard/company/edit' => [[['_route' => 'app_dashboard_hmaservice_edit', '_controller' => 'App\\Controller\\Dashboard\\HmaServiceProfileController::editProfile'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard/company/delete-logo' => [[['_route' => 'app_dashboard_hmaservice_delete_logo', '_controller' => 'App\\Controller\\Dashboard\\HmaServiceProfileController::deleteLogo'], null, ['POST' => 0], null, false, false, null]],
        '/dashboard/company/deactivate' => [[['_route' => 'app_dashboard_hmaservice_deactivate', '_controller' => 'App\\Controller\\Dashboard\\HmaServiceProfileController::deactivateCompany'], null, ['POST' => 0], null, false, false, null]],
        '/dashboard/company/activate' => [[['_route' => 'app_dashboard_hmaservice_activate', '_controller' => 'App\\Controller\\Dashboard\\HmaServiceProfileController::activateCompany'], null, ['POST' => 0], null, false, false, null]],
        '/manager/team' => [[['_route' => 'app_manager_team_index', '_controller' => 'App\\Controller\\Manager\\TeamController::index'], null, ['GET' => 0], null, true, false, null]],
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
        '/sale/restaurant' => [[['_route' => 'restaurant_sale_index', '_controller' => 'App\\Controller\\Sale\\RestaurantSaleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/sale/restaurant/daily-stats' => [[['_route' => 'api_daily_stats', '_controller' => 'App\\Controller\\Sale\\RestaurantSaleController::getDailyStatsApi'], null, ['GET' => 0], null, false, false, null]],
        '/sale/retail/search' => [[['_route' => 'retail_sale_search', '_controller' => 'App\\Controller\\Sale\\RetailSaleController::search'], null, ['GET' => 0], null, false, false, null]],
        '/sale/retail' => [[['_route' => 'retail_sale_index', '_controller' => 'App\\Controller\\Sale\\RetailSaleController::index'], null, ['GET' => 0], null, true, false, null]],
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
        '/super/admin/subscription' => [[['_route' => 'app_super_admin_subscription_index', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/super/admin/subscription/new' => [[['_route' => 'app_super_admin_subscription_new', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                        .'|tock\\-(?'
                            .'|batch/(?'
                                .'|product/([^/]++)(*:1584)'
                                .'|([^/]++)/(?'
                                    .'|show(*:1609)'
                                    .'|edit(*:1622)'
                                    .'|toggle(*:1637)'
                                    .'|delete(*:1652)'
                                    .'|print(*:1666)'
                                .')'
                            .')'
                            .'|movement/([^/]++)/show(*:1699)'
                        .')'
                        .'|upplier(?'
                            .'|/([^/]++)(?'
                                .'|(*:1731)'
                                .'|/(?'
                                    .'|edit(*:1748)'
                                    .'|toggle\\-status(*:1771)'
                                .')'
                                .'|(*:1781)'
                            .')'
                            .'|\\-credit\\-note/(?'
                                .'|new/([^/]++)(*:1821)'
                                .'|([^/]++)(?'
                                    .'|(*:1841)'
                                    .'|/(?'
                                        .'|resolve(*:1861)'
                                        .'|apply\\-stock\\-action(*:1890)'
                                    .')'
                                .')'
                                .'|print\\-multiple(*:1916)'
                                .'|new\\-direct(*:1936)'
                            .')'
                        .')'
                    .')'
                    .'|type\\-promotion/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:1983)'
                            .'|toggle\\-status(*:2006)'
                            .'|delete(*:2021)'
                        .')'
                        .'|(*:2031)'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:2057)'
                        .'|/(?'
                            .'|edit(*:2074)'
                            .'|delete\\-photo(*:2096)'
                        .')'
                        .'|(*:2106)'
                    .')'
                .')'
                .'|/company/analysis/([^/]++)(?'
                    .'|(*:2146)'
                    .'|/download(?'
                        .'|\\-(?'
                            .'|final(*:2177)'
                            .'|raw(*:2189)'
                        .')'
                        .'|(*:2199)'
                    .')'
                .')'
                .'|/manager/team/([^/]++)(?'
                    .'|(*:2235)'
                    .'|/edit(*:2249)'
                .')'
                .'|/p(?'
                    .'|ayment/(?'
                        .'|success/([^/]++)(*:2290)'
                        .'|already\\-processed/([^/]++)(*:2326)'
                    .')'
                    .'|rint/ticket/([^/]++)/([^/]++)(*:2365)'
                    .'|urchase/(?'
                        .'|re(?'
                            .'|move\\-product/([^/]++)(*:2412)'
                            .'|ceive/([^/]++)(*:2435)'
                        .')'
                        .'|update\\-quantity/([^/]++)(*:2470)'
                        .'|cancel/([^/]++)(*:2494)'
                        .'|([^/]++)(?'
                            .'|(*:2514)'
                            .'|/print(*:2529)'
                        .')'
                        .'|update\\-item/([^/]++)(*:2560)'
                        .'|report\\-issue\\-temp(*:2588)'
                        .'|delete\\-issue\\-temp/([^/]++)(*:2625)'
                    .')'
                .')'
                .'|/re(?'
                    .'|set\\-password/([^/]++)(*:2664)'
                    .'|turns/(?'
                        .'|new/([^/]++)(*:2694)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:2722)'
                                .'|approve(*:2738)'
                                .'|complete(*:2755)'
                                .'|reject(*:2770)'
                            .')'
                            .'|(*:2780)'
                        .')'
                        .'|api/order\\-items/([^/]++)(*:2815)'
                        .'|print\\-(?'
                            .'|receipt/([^/]++)(*:2850)'
                            .'|multiple\\-receipts(*:2877)'
                        .')'
                    .')'
                .')'
                .'|/orders/(?'
                    .'|([^/]++)(?'
                        .'|/(?'
                            .'|toggle(*:2921)'
                            .'|delete(*:2936)'
                            .'|receipt\\-content(*:2961)'
                        .')'
                        .'|(*:2971)'
                    .')'
                    .'|receipts\\-content(*:2998)'
                    .'|c(?'
                        .'|heck\\-can\\-sell(*:3026)'
                        .'|ontact\\-admin(*:3048)'
                    .')'
                    .'|([^/]++)/(?'
                        .'|print(*:3075)'
                        .'|download\\-pdf(*:3097)'
                    .')'
                .')'
                .'|/s(?'
                    .'|ale/retail/sale/(?'
                        .'|add\\-product/([^/]++)(*:3153)'
                        .'|update\\-(?'
                            .'|quantity/([^/]++)/([^/]++)(*:3199)'
                            .'|notes/([^/]++)/([^/]++)(*:3231)'
                        .')'
                        .'|re(?'
                            .'|move\\-item/([^/]++)/([^/]++)(*:3274)'
                            .'|ceipt/([^/]++)(*:3297)'
                        .')'
                    .')'
                    .'|tock/(?'
                        .'|inventory/([^/]++)(?'
                            .'|/(?'
                                .'|add\\-products(*:3354)'
                                .'|c(?'
                                    .'|ount(*:3371)'
                                    .'|ancel(*:3385)'
                                .')'
                                .'|validate(*:3403)'
                            .')'
                            .'|(*:3413)'
                        .')'
                        .'|adjustment/([^/]++)(*:3442)'
                        .'|transfer/([^/]++)(?'
                            .'|/(?'
                                .'|start(*:3480)'
                                .'|receive(*:3496)'
                                .'|cancel(*:3511)'
                            .')'
                            .'|(*:3521)'
                        .')'
                    .')'
                    .'|u(?'
                        .'|bscription/success/([^/]++)(*:3563)'
                        .'|p(?'
                            .'|er(?'
                                .'|\\-admin/(?'
                                    .'|analysis(?'
                                        .'|\\-prices/([^/]++)(?'
                                            .'|(*:3623)'
                                            .'|/(?'
                                                .'|edit(*:3640)'
                                                .'|toggle(*:3655)'
                                                .'|delete(*:3670)'
                                            .')'
                                        .')'
                                        .'|/(?'
                                            .'|company/([^/]++)/stats(*:3707)'
                                            .'|new/([^/]++)(*:3728)'
                                            .'|([^/]++)(?'
                                                .'|(*:3748)'
                                                .'|/(?'
                                                    .'|generate\\-raw(*:3774)'
                                                    .'|upload\\-report(*:3797)'
                                                    .'|re(?'
                                                        .'|place\\-report(*:3824)'
                                                        .'|try(*:3836)'
                                                    .')'
                                                    .'|download\\-(?'
                                                        .'|raw(*:3862)'
                                                        .'|final(*:3876)'
                                                    .')'
                                                    .'|payment\\-link(*:3899)'
                                                    .'|send\\-payment\\-link(*:3927)'
                                                    .'|force\\-to\\-paid(*:3951)'
                                                    .'|cancel(*:3966)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|hma\\-service/(?'
                                        .'|([^/]++)(?'
                                            .'|(*:4006)'
                                            .'|/(?'
                                                .'|edit(*:4023)'
                                                .'|toggle\\-status(*:4046)'
                                                .'|delete(*:4061)'
                                                .'|subscriptions(*:4083)'
                                            .')'
                                        .')'
                                        .'|export/([^/]++)(*:4109)'
                                    .')'
                                    .'|subscription\\-plans/([^/]++)(?'
                                        .'|(*:4150)'
                                        .'|/(?'
                                            .'|edit(*:4167)'
                                            .'|toggle(*:4182)'
                                        .')'
                                        .'|(*:4192)'
                                    .')'
                                .')'
                                .'|/admin/subscription/([^/]++)(?'
                                    .'|(*:4234)'
                                    .'|/edit(*:4248)'
                                    .'|(*:4257)'
                                .')'
                            .')'
                            .'|plier/credit\\-note/respond/([^/]++)(*:4303)'
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
        1584 => [[['_route' => 'app_admin_stock_batch_index', '_controller' => 'App\\Controller\\Admin\\StockBatchController::index'], ['productId'], ['GET' => 0], null, false, true, null]],
        1609 => [[['_route' => 'app_admin_stock_batch_show', '_controller' => 'App\\Controller\\Admin\\StockBatchController::show'], ['id'], ['GET' => 0], null, false, false, null]],
        1622 => [[['_route' => 'app_admin_stock_batch_edit', '_controller' => 'App\\Controller\\Admin\\StockBatchController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1637 => [[['_route' => 'app_admin_stock_batch_toggle', '_controller' => 'App\\Controller\\Admin\\StockBatchController::toggle'], ['id'], ['POST' => 0], null, false, false, null]],
        1652 => [[['_route' => 'app_admin_stock_batch_delete', '_controller' => 'App\\Controller\\Admin\\StockBatchController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1666 => [[['_route' => 'app_admin_stock_batch_print', '_controller' => 'App\\Controller\\Admin\\StockBatchController::print'], ['id'], ['GET' => 0], null, false, false, null]],
        1699 => [[['_route' => 'app_admin_stock_movement_show', '_controller' => 'App\\Controller\\Admin\\StockMovementController::show'], ['id'], ['GET' => 0], null, false, false, null]],
        1731 => [[['_route' => 'app_admin_supplier_show', '_controller' => 'App\\Controller\\Admin\\SupplierController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1748 => [[['_route' => 'app_admin_supplier_edit', '_controller' => 'App\\Controller\\Admin\\SupplierController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1771 => [[['_route' => 'app_admin_supplier_toggle_status', '_controller' => 'App\\Controller\\Admin\\SupplierController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        1781 => [[['_route' => 'app_admin_supplier_delete', '_controller' => 'App\\Controller\\Admin\\SupplierController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1821 => [[['_route' => 'app_supplier_credit_note_new', '_controller' => 'App\\Controller\\Admin\\SupplierCreditNoteController::new'], ['batchId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1841 => [[['_route' => 'app_supplier_credit_note_show', '_controller' => 'App\\Controller\\Admin\\SupplierCreditNoteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1861 => [[['_route' => 'app_supplier_credit_note_resolve', '_controller' => 'App\\Controller\\Admin\\SupplierCreditNoteController::resolve'], ['id'], ['POST' => 0], null, false, false, null]],
        1890 => [[['_route' => 'app_supplier_credit_note_apply_stock_action', '_controller' => 'App\\Controller\\Admin\\SupplierCreditNoteController::applyStockAction'], ['id'], ['POST' => 0], null, false, false, null]],
        1916 => [[['_route' => 'app_supplier_credit_note_print_multiple', '_controller' => 'App\\Controller\\Admin\\SupplierCreditNoteController::printMultiple'], [], ['GET' => 0], null, false, false, null]],
        1936 => [[['_route' => 'app_supplier_credit_note_new_direct', '_controller' => 'App\\Controller\\Admin\\SupplierCreditNoteController::newDirect'], [], ['POST' => 0], null, false, false, null]],
        1983 => [[['_route' => 'app_admin_type_promotion_edit', '_controller' => 'App\\Controller\\Admin\\TypePromotionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2006 => [[['_route' => 'app_admin_type_promotion_toggle_status', '_controller' => 'App\\Controller\\Admin\\TypePromotionController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        2021 => [[['_route' => 'app_admin_type_promotion_delete', '_controller' => 'App\\Controller\\Admin\\TypePromotionController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        2031 => [[['_route' => 'app_admin_type_promotion_show', '_controller' => 'App\\Controller\\Admin\\TypePromotionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2057 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\Admin\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2074 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\Admin\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2096 => [[['_route' => 'app_user_delete_photo', '_controller' => 'App\\Controller\\Admin\\UserController::deletePhoto'], ['id'], ['POST' => 0], null, false, false, null]],
        2106 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\Admin\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        2146 => [[['_route' => 'company_analysis_show', '_controller' => 'App\\Controller\\Company\\CompanyAnalysisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2177 => [[['_route' => 'company_analysis_download_final', '_controller' => 'App\\Controller\\Company\\CompanyAnalysisController::downloadFinal'], ['id'], ['GET' => 0], null, false, false, null]],
        2189 => [[['_route' => 'company_analysis_download_raw', '_controller' => 'App\\Controller\\Company\\CompanyAnalysisController::downloadRaw'], ['id'], ['GET' => 0], null, false, false, null]],
        2199 => [[['_route' => 'company_analysis_download', '_controller' => 'App\\Controller\\Company\\CompanyAnalysisController::download'], ['id'], ['GET' => 0], null, false, false, null]],
        2235 => [[['_route' => 'app_manager_team_show', '_controller' => 'App\\Controller\\Manager\\TeamController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2249 => [[['_route' => 'app_manager_team_edit', '_controller' => 'App\\Controller\\Manager\\TeamController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2290 => [[['_route' => 'payment_success_with_id', '_controller' => 'App\\Controller\\PaymentController::successWithId'], ['id'], ['GET' => 0], null, false, true, null]],
        2326 => [[['_route' => 'payment_already_processed', '_controller' => 'App\\Controller\\PaymentController::alreadyProcessed'], ['id'], ['GET' => 0], null, false, true, null]],
        2365 => [[['_route' => 'print_ticket', '_controller' => 'App\\Controller\\PrintController::printTicket'], ['id', 'type'], ['GET' => 0], null, false, true, null]],
        2412 => [[['_route' => 'purchase_remove_product', '_controller' => 'App\\Controller\\PurchaseController::removeProduct'], ['productId'], ['DELETE' => 0], null, false, true, null]],
        2435 => [[['_route' => 'purchase_receive', '_controller' => 'App\\Controller\\PurchaseController::receive'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2470 => [[['_route' => 'purchase_update_quantity', '_controller' => 'App\\Controller\\PurchaseController::updateQuantity'], ['productId'], ['PUT' => 0], null, false, true, null]],
        2494 => [[['_route' => 'purchase_cancel', '_controller' => 'App\\Controller\\PurchaseController::cancel'], ['id'], ['POST' => 0], null, false, true, null]],
        2514 => [[['_route' => 'purchase_show', '_controller' => 'App\\Controller\\PurchaseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2529 => [[['_route' => 'purchase_print', '_controller' => 'App\\Controller\\PurchaseController::print'], ['id'], ['GET' => 0], null, false, false, null]],
        2560 => [[['_route' => 'purchase_update_item', '_controller' => 'App\\Controller\\PurchaseController::updateCartItem'], ['productId'], ['PUT' => 0], null, false, true, null]],
        2588 => [[['_route' => 'purchase_report_issue_temp', '_controller' => 'App\\Controller\\PurchaseController::reportIssueTemp'], [], ['POST' => 0], null, false, false, null]],
        2625 => [[['_route' => 'purchase_delete_issue_temp', '_controller' => 'App\\Controller\\PurchaseController::deleteIssueTemp'], ['batchId'], ['POST' => 0], null, false, true, null]],
        2664 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        2694 => [[['_route' => 'returns_new', '_controller' => 'App\\Controller\\Return\\ReturnController::new'], ['orderId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2722 => [[['_route' => 'returns_edit', '_controller' => 'App\\Controller\\Return\\ReturnController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2738 => [[['_route' => 'returns_approve', '_controller' => 'App\\Controller\\Return\\ReturnController::approve'], ['id'], ['POST' => 0], null, false, false, null]],
        2755 => [[['_route' => 'returns_complete', '_controller' => 'App\\Controller\\Return\\ReturnController::complete'], ['id'], ['POST' => 0], null, false, false, null]],
        2770 => [[['_route' => 'returns_reject', '_controller' => 'App\\Controller\\Return\\ReturnController::reject'], ['id'], ['POST' => 0], null, false, false, null]],
        2780 => [[['_route' => 'returns_show', '_controller' => 'App\\Controller\\Return\\ReturnController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2815 => [[['_route' => 'returns_api_order_items', '_controller' => 'App\\Controller\\Return\\ReturnController::getOrderItems'], ['orderId'], ['GET' => 0], null, false, true, null]],
        2850 => [[['_route' => 'returns_print_receipt', '_controller' => 'App\\Controller\\Return\\ReturnController::printReceipt'], ['id'], ['GET' => 0], null, false, true, null]],
        2877 => [[['_route' => 'returns_print_multiple_receipts', '_controller' => 'App\\Controller\\Return\\ReturnController::printMultipleReceipts'], [], ['POST' => 0], null, false, false, null]],
        2921 => [[['_route' => 'app_orders_toggle', '_controller' => 'App\\Controller\\Sale\\OrderController::toggle'], ['id'], ['POST' => 0], null, false, false, null]],
        2936 => [[['_route' => 'app_orders_delete', '_controller' => 'App\\Controller\\Sale\\OrderController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        2961 => [[['_route' => 'app_orders_receipt_content', '_controller' => 'App\\Controller\\Sale\\OrderController::receiptContent'], ['id'], ['GET' => 0], null, false, false, null]],
        2971 => [[['_route' => 'app_orders_show', '_controller' => 'App\\Controller\\Sale\\OrderController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2998 => [[['_route' => 'app_orders_receipts_content', '_controller' => 'App\\Controller\\Sale\\OrderController::receiptsContent'], [], ['GET' => 0], null, false, false, null]],
        3026 => [[['_route' => 'api_check_can_sell', '_controller' => 'App\\Controller\\Sale\\OrderController::checkCanSell'], [], ['GET' => 0], null, false, false, null]],
        3048 => [[['_route' => 'app_orders_contact_admin', '_controller' => 'App\\Controller\\Sale\\OrderController::contactAdmin'], [], ['GET' => 0], null, false, false, null]],
        3075 => [[['_route' => 'app_orders_print', '_controller' => 'App\\Controller\\Sale\\OrderController::printReceipt'], ['id'], ['GET' => 0], null, false, false, null]],
        3097 => [[['_route' => 'app_orders_download_pdf', '_controller' => 'App\\Controller\\Sale\\OrderController::downloadPdf'], ['id'], ['GET' => 0], null, false, false, null]],
        3153 => [[['_route' => 'sale_add_product', '_controller' => 'App\\Controller\\Sale\\RetailSaleController::addProduct'], ['id'], ['POST' => 0], null, false, true, null]],
        3199 => [[['_route' => 'sale_update_quantity', '_controller' => 'App\\Controller\\Sale\\RetailSaleController::updateQuantity'], ['type', 'id'], ['PUT' => 0], null, false, true, null]],
        3231 => [[['_route' => 'sale_update_notes', '_controller' => 'App\\Controller\\Sale\\RetailSaleController::updateNotes'], ['type', 'id'], ['PUT' => 0], null, false, true, null]],
        3274 => [[['_route' => 'sale_remove_item', '_controller' => 'App\\Controller\\Sale\\RetailSaleController::removeItem'], ['type', 'id'], ['DELETE' => 0], null, false, true, null]],
        3297 => [[['_route' => 'sale_receipt', '_controller' => 'App\\Controller\\Sale\\RetailSaleController::receipt'], ['id'], ['GET' => 0], null, false, true, null]],
        3354 => [[['_route' => 'app_stock_inventory_add_products', '_controller' => 'App\\Controller\\Stock\\InventoryController::addProducts'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3371 => [[['_route' => 'app_stock_inventory_count', '_controller' => 'App\\Controller\\Stock\\InventoryController::count'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3385 => [[['_route' => 'app_stock_inventory_cancel', '_controller' => 'App\\Controller\\Stock\\InventoryController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        3403 => [[['_route' => 'app_stock_inventory_validate', '_controller' => 'App\\Controller\\Stock\\InventoryController::validate'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3413 => [[['_route' => 'app_stock_inventory_show', '_controller' => 'App\\Controller\\Stock\\InventoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        3442 => [[['_route' => 'app_stock_adjustment_show', '_controller' => 'App\\Controller\\Stock\\StockAdjustmentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        3480 => [[['_route' => 'app_stock_transfer_start', '_controller' => 'App\\Controller\\Stock\\StockTransferController::start'], ['id'], ['POST' => 0], null, false, false, null]],
        3496 => [[['_route' => 'app_stock_transfer_receive', '_controller' => 'App\\Controller\\Stock\\StockTransferController::receive'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3511 => [[['_route' => 'app_stock_transfer_cancel', '_controller' => 'App\\Controller\\Stock\\StockTransferController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        3521 => [[['_route' => 'app_stock_transfer_show', '_controller' => 'App\\Controller\\Stock\\StockTransferController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        3563 => [[['_route' => 'app_subscription_success', '_controller' => 'App\\Controller\\SubscriptionController::success'], ['id'], null, null, false, true, null]],
        3623 => [[['_route' => 'super_admin_analysis_price_show', '_controller' => 'App\\Controller\\SuperAdmin\\AnalysisPriceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        3640 => [[['_route' => 'super_admin_analysis_price_edit', '_controller' => 'App\\Controller\\SuperAdmin\\AnalysisPriceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3655 => [[['_route' => 'super_admin_analysis_price_toggle', '_controller' => 'App\\Controller\\SuperAdmin\\AnalysisPriceController::toggle'], ['id'], ['POST' => 0], null, false, false, null]],
        3670 => [[['_route' => 'super_admin_analysis_price_delete', '_controller' => 'App\\Controller\\SuperAdmin\\AnalysisPriceController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        3707 => [[['_route' => 'super_admin_analysis_company_stats', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::companyStats'], ['id'], ['GET' => 0], null, false, false, null]],
        3728 => [[['_route' => 'super_admin_analysis_new', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::new'], ['companyId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        3748 => [[['_route' => 'super_admin_analysis_show', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        3774 => [[['_route' => 'super_admin_analysis_generate_raw', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::generateRawData'], ['id'], ['POST' => 0], null, false, false, null]],
        3797 => [[['_route' => 'super_admin_analysis_upload_report', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::uploadFinalReport'], ['id'], ['POST' => 0], null, false, false, null]],
        3824 => [[['_route' => 'super_admin_analysis_replace_report', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::replaceFinalReport'], ['id'], ['POST' => 0], null, false, false, null]],
        3836 => [[['_route' => 'super_admin_analysis_retry', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::retry'], ['id'], ['POST' => 0], null, false, false, null]],
        3862 => [[['_route' => 'super_admin_analysis_download_raw', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::downloadRawData'], ['id'], ['GET' => 0], null, false, false, null]],
        3876 => [[['_route' => 'super_admin_analysis_download_final', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::downloadFinalReport'], ['id'], ['GET' => 0], null, false, false, null]],
        3899 => [[['_route' => 'super_admin_analysis_payment_link', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::getPaymentLink'], ['id'], ['GET' => 0], null, false, false, null]],
        3927 => [[['_route' => 'super_admin_analysis_send_payment_link', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::sendPaymentLink'], ['id'], ['POST' => 0], null, false, false, null]],
        3951 => [[['_route' => 'super_admin_analysis_force_to_paid', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::forceToPaid'], ['id'], ['POST' => 0], null, false, false, null]],
        3966 => [[['_route' => 'super_admin_analysis_cancel', '_controller' => 'App\\Controller\\SuperAdmin\\CompanyAnalysisController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        4006 => [[['_route' => 'app_super_admin_hma_service_show', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        4023 => [[['_route' => 'app_super_admin_hma_service_edit', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4046 => [[['_route' => 'app_super_admin_hma_service_toggle', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        4061 => [[['_route' => 'app_super_admin_hma_service_delete', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        4083 => [[['_route' => 'app_super_admin_hma_service_subscriptions', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::subscriptions'], ['id'], ['GET' => 0], null, false, false, null]],
        4109 => [[['_route' => 'app_super_admin_hma_service_export', '_controller' => 'App\\Controller\\SuperAdmin\\HmaServiceController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        4150 => [[['_route' => 'app_super_admin_subscription_plan_show', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionPlanController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        4167 => [[['_route' => 'app_super_admin_subscription_plan_edit', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionPlanController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4182 => [[['_route' => 'app_super_admin_subscription_plan_toggle', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionPlanController::toggle'], ['id'], ['POST' => 0], null, false, false, null]],
        4192 => [[['_route' => 'app_super_admin_subscription_plan_delete', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionPlanController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        4234 => [[['_route' => 'app_super_admin_subscription_show', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        4248 => [[['_route' => 'app_super_admin_subscription_edit', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4257 => [[['_route' => 'app_super_admin_subscription_delete', '_controller' => 'App\\Controller\\SuperAdmin\\SubscriptionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        4303 => [
            [['_route' => 'supplier_credit_note_respond', '_controller' => 'App\\Controller\\SupplierCreditNoteResponseController::respond'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
