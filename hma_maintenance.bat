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
:: 1. NETTOYAGES (indépendants)
:: ============================================
echo [%date% %time%] 🧹 Nettoyage des clients incomplets (soft + hard delete)...
php bin/console app:clean-incomplete-customers --no-interaction
if %errorlevel% neq 0 echo ⚠️ Erreur lors du nettoyage des clients

echo [%date% %time%] 🧹 Nettoyage des inscriptions HmaService incomplètes...
php bin/console app:clean-incomplete-registrations --no-interaction
if %errorlevel% neq 0 echo ⚠️ Erreur lors du nettoyage des HmaService

echo [%date% %time%] 🧹 Nettoyage des demandes d'analyse expirées...
php bin/console app:clean-expired-analysis --no-interaction
if %errorlevel% neq 0 echo ⚠️ Erreur lors du nettoyage des analyses

:: ============================================
:: 2. GESTION DES UTILISATEURS
:: ============================================
echo [%date% %time%] 🔓 Déblocage des comptes utilisateurs expirés...
php bin/console app:unlock-locked-users --no-interaction
if %errorlevel% neq 0 echo ⚠️ Erreur lors du déblocage

:: ============================================
:: 3. GESTION DES ABONNEMENTS (ordre critique)
:: ============================================
:: 3.1 Rafraîchir statuts + basculer en freemium les expirés
echo [%date% %time%] 🔍 Vérification des abonnements expirés (refresh + downgrade)...
php bin/console app:check-expired-subscriptions --no-interaction
if %errorlevel% neq 0 echo ⚠️ Erreur lors de la vérification

:: 3.2 Appliquer les quotas (dépend du plan mis à jour ci-dessus)
echo [%date% %time%] ⚙️ Application des quotas entreprises...
php bin/console app:enforce-quotas --no-interaction
if %errorlevel% neq 0 echo ⚠️ Erreur lors de l'application des quotas

echo [%date% %time%] 👥 Application des quotas utilisateurs...
php bin/console app:enforce-user-quotas --no-interaction
if %errorlevel% neq 0 echo ⚠️ Erreur lors de l'application des quotas utilisateurs

:: ============================================
:: 4. RAPPELS D'EXPIRATION (après mise à jour des plans)
:: ============================================
echo [%date% %time%] 📧 Envoi des rappels d'expiration (avec proposition d'upgrade)...
php bin/console app:send-expiration-reminders
if %errorlevel% neq 0 echo ⚠️ Erreur lors de l'envoi des rappels

:: ============================================
:: 5. RECALCUL DES COMPTEURS
:: ============================================
echo [%date% %time%] 🔄 Recalcul des compteurs HmaService...
php bin/console app:recalculate-counters --no-interaction
if %errorlevel% neq 0 echo ⚠️ Erreur lors du recalcul des compteurs

:: ============================================
:: 6. MAINTENANCE STOCK
:: ============================================
echo [%date% %time%] 🔄 Maintenance du stock...
php bin/console app:stock:maintenance --no-interaction
if %errorlevel% neq 0 echo ⚠️ Erreur lors de la maintenance du stock

:: ============================================
:: 7. INFORMATIF (statut public)
:: ============================================
echo [%date% %time%] 📊 Vérification du statut public des entreprises...
php bin/console app:check-public-status --no-interaction
if %errorlevel% neq 0 echo ⚠️ Erreur lors de la vérification du statut

:: ============================================
:: 8. NETTOYAGE FINAL
:: ============================================
echo [%date% %time%] 🧹 Nettoyage du cache...
php bin/console cache:clear --env=prod --no-interaction 2>nul

echo.
echo ========================================
echo    TÂCHES TERMINÉES À %date% %time%
echo ========================================
pause