@echo off
title 🧹 NETTOYAGE HMA MARKET - TOUTES LES 24H
color 0A

echo ========================================
echo    NETTOYAGE DES INSCRIPTIONS INCOMPLÈTES
echo    HMA MARKET - TOUTES LES 24H
echo    Démarrage : %date% %time%
echo ========================================
echo.

:loop
cd /d C:\wamp64\www\hma-market

echo [%date% %time%] 🧹 Nettoyage en cours...
php bin/console app:clean-incomplete-registrations --no-interaction

echo [%date% %time%] ✅ Nettoyage terminé
echo [%date% %time%] ⏳ Prochain nettoyage dans 24h...
echo ----------------------------------------
echo.

timeout /t 86400 /nobreak
goto loop