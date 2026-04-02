// assets/bootstrap.js
import { startStimulusApp } from '@symfony/stimulus-bridge';

// Démarre l'application Stimulus
export const app = startStimulusApp();

// Enregistre les contrôleurs manuellement
app.register('purchase', () => import('./controllers/purchase_controller.js'));