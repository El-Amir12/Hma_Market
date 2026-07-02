@echo off
title HMA MARKET - TÂCHES DE MAINTENANCE
color 0A

echo ========================================
echo    EXÉCUTION DES TÂCHES DE MAINTENANCE
echo    HMA MARKET
echo    Démarrage : %date% %time%
echo ========================================
echo.

cd /d "C:\wamp64\www\Mes projets en Symfony\hma_market"

:: ============================================
:: 1. NETTOYAGE DES INSCRIPTIONS INCOMPLÈTES
:: ============================================
echo [%date% %time%] 🧹 Nettoyage des clients incomplets (soft + hard delete)...
php bin/console app:clean-incomplete-customers --no-interaction
if %errorlevel% neq 0 echo ⚠️ Erreur lors du nettoyage des clients

:: ============================================
:: 2. NETTOYAGE DES INSCRIPTIONS HMA SERVICE
:: ============================================
echo [%date% %time%] 🧹 Nettoyage des inscriptions HmaService incomplètes...
php bin/console app:clean-incomplete-registrations --no-interaction
if %errorlevel% neq 0 echo ⚠️ Erreur lors du nettoyage des HmaService

:: ============================================
:: 3. GESTION DES UTILISATEURS
:: ============================================
echo [%date% %time%] 🔓 Déblocage des comptes utilisateurs expirés...
php bin/console app:unlock-locked-users --no-interaction
if %errorlevel% neq 0 echo ⚠️ Erreur lors du déblocage

:: ============================================
:: 4. GESTION DES ABONNEMENTS
:: ============================================
:: ✅ Vérification des abonnements expirés (avec statistiques détaillées)
echo [%date% %time%] 🔍 Vérification des abonnements expirés...
php bin/console app:check-expired-subscriptions
if %errorlevel% neq 0 echo ⚠️ Erreur lors de la vérification

:: ✅ Vérification du statut public de toutes les entreprises
echo [%date% %time%] 📊 Vérification du statut public des entreprises...
php bin/console app:check-public-status --no-interaction
if %errorlevel% neq 0 echo ⚠️ Erreur lors de la vérification du statut

echo [%date% %time%] 📧 Envoi des rappels d'expiration...
php bin/console app:send-expiration-reminders
if %errorlevel% neq 0 echo ⚠️ Erreur lors de l'envoi

:: ============================================
:: 5. QUOTAS ET LIMITES
:: ============================================
:: ✅ Application des quotas pour toutes les entreprises
echo [%date% %time%] ⚙️ Application des quotas...
php bin/console app:enforce-quotas --no-interaction
if %errorlevel% neq 0 echo ⚠️ Erreur lors de l'application des quotas

:: ✅ Application des quotas utilisateurs
echo [%date% %time%] 👥 Application des quotas utilisateurs...
php bin/console app:enforce-user-quotas --no-interaction
if %errorlevel% neq 0 echo ⚠️ Erreur lors de l'application des quotas utilisateurs

:: ============================================
:: 6. GESTION DU STOCK
:: ============================================
echo [%date% %time%] 🔄 Maintenance du stock...
php bin/console app:stock:maintenance --no-interaction
if %errorlevel% neq 0 echo ⚠️ Erreur lors de la maintenance du stock

:: ============================================
:: 7. NETTOYAGE FINAL
:: ============================================
echo [%date% %time%] 🧹 Nettoyage des fichiers temporaires...
php bin/console cache:clear --env=prod --no-interaction 2>nul

echo.
echo ========================================
echo    TÂCHES TERMINÉES À %date% %time%
echo ========================================
pause