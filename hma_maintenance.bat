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
:: 1. NETTOYAGE ET GESTION DES UTILISATEURS
:: ============================================
echo [%date% %time%] 🧹 Nettoyage des inscriptions incomplètes...
php bin/console app:clean-incomplete-registrations --no-interaction
if %errorlevel% neq 0 echo ⚠️ Erreur lors du nettoyage

echo [%date% %time%] 🔓 Déblocage des comptes utilisateurs expirés...
php bin/console app:unlock-locked-users --no-interaction
if %errorlevel% neq 0 echo ⚠️ Erreur lors du déblocage

:: ============================================
:: 2. GESTION DES ABONNEMENTS (NOUVEAU)
:: ============================================
echo [%date% %time%] 🔄 Création des analyses mensuelles automatiques...
php bin/console app:create-monthly-subscriptions --no-interaction
if %errorlevel% neq 0 echo ⚠️ Erreur lors de la création des abonnements

echo [%date% %time%] 🔍 Vérification des abonnements expirés...
php bin/console app:check-expired-subscriptions
if %errorlevel% neq 0 echo ⚠️ Erreur lors de la vérification

echo [%date% %time%] 📧 Envoi des rappels d'expiration...
php bin/console app:send-expiration-reminders
if %errorlevel% neq 0 echo ⚠️ Erreur lors de l'envoi

echo [%date% %time%] 📧 Envoi des rappels d'expiration d'abonnement (NOUVEAU)...
php bin/console app:send-subscription-reminders --no-interaction
if %errorlevel% neq 0 echo ⚠️ Erreur lors de l'envoi des rappels

:: ============================================
:: 3. NETTOYAGE DES DEMANDES D'ANALYSE (NOUVEAU)
:: ============================================
echo [%date% %time%] 🧹 Nettoyage des demandes d'analyse expirées...
php bin/console app:clean-expired-analysis --no-interaction
if %errorlevel% neq 0 echo ⚠️ Erreur lors du nettoyage des analyses

:: ============================================
:: 4. QUOTAS ET LIMITES
:: ============================================
echo [%date% %time%] ⚙️ Application des quotas (entités)...
php bin/console app:enforce-quotas --no-interaction
if %errorlevel% neq 0 echo ⚠️ Erreur lors de l'application des quotas

echo [%date% %time%] 👥 Application des quotas utilisateurs...
php bin/console app:enforce-user-quotas --no-interaction
if %errorlevel% neq 0 echo ⚠️ Erreur lors de l'application des quotas utilisateurs

:: ============================================
:: 5. GESTION DU STOCK
:: ============================================
echo [%date% %time%] 🔄 MAINTENANCE DU STOCK (lots expirés, lots vides, synchronisation)...
php bin/console app:stock:maintenance --no-interaction
if %errorlevel% neq 0 echo ⚠️ Erreur lors de la maintenance du stock

echo.
echo ========================================
echo    TÂCHES TERMINÉES À %date% %time%
echo ========================================
pause