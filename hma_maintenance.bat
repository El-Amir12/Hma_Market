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

echo [%date% %time%] 🧹 Nettoyage des inscriptions incomplètes...
php bin/console app:clean-incomplete-registrations --no-interaction
if %errorlevel% neq 0 echo ⚠️ Erreur lors du nettoyage

echo [%date% %time%] 🔍 Vérification des abonnements expirés...
php bin/console app:check-expired-subscriptions
if %errorlevel% neq 0 echo ⚠️ Erreur lors de la vérification

echo [%date% %time%] 📧 Envoi des rappels d'expiration...
php bin/console app:send-expiration-reminders
if %errorlevel% neq 0 echo ⚠️ Erreur lors de l'envoi

echo [%date% %time%] ⚙️ Application des quotas (entités)...
php bin/console app:enforce-quotas --no-interaction
if %errorlevel% neq 0 echo ⚠️ Erreur lors de l'application des quotas

echo [%date% %time%] 👥 Application des quotas utilisateurs...
php bin/console app:enforce-user-quotas --no-interaction
if %errorlevel% neq 0 echo ⚠️ Erreur lors de l'application des quotas utilisateurs

echo [%date% %time%] 🔓 Déblocage des comptes utilisateurs expirés...
php bin/console app:unlock-locked-users --no-interaction
if %errorlevel% neq 0 echo ⚠️ Erreur lors du déblocage

echo [%date% %time%] 🔄 Désactivation des lots expirés...
php bin/console app:batches:deactivate-expired --no-interaction
if %errorlevel% neq 0 echo ⚠️ Erreur lors de la désactivation des lots

echo.
echo ========================================
echo    TÂCHES TERMINÉES À %date% %time%
echo ========================================
pause