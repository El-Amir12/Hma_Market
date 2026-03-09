@echo off
cd /d "C:\wamp64\www\Mes projets en Symfony\hma_market"
php bin\console app:check-expired-subscriptions
pause