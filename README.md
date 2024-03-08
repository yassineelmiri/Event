Contexte du projet
La société "Evento" ambitionne de développer une plateforme novatrice dédiée à la gestion et à la réservation des places d'événements. L'objectif est de fournir une expérience utilisateur optimale aux participants, organisateurs et administrateurs. Cette plateforme permettra aux utilisateurs de découvrir, réserver et générer des tickets pour une variété d'événements, tandis que les organisateurs auront la possibilité de créer et de gérer leurs propres événements.

​

​

Fonctionnalités Requises :

​

​

Utilisateur :

​

_ En tant qu'utilisateur, je veux pouvoir m'inscrire sur la plateforme en fournissant mon nom, mon adresse e-mail et un mot de passe.

_ En tant qu'utilisateur, je veux avoir la possibilité de me connecter à mon compte en utilisant mes identifiants.

_ En tant qu'utilisateur, je veux pouvoir réinitialiser mon mot de passe en cas d'oubli, en recevant un e-mail de réinitialisation.

_ En tant qu'utilisateur, je veux pouvoir consulter la liste des événements disponibles sur la plateforme avec pagination pour faciliter la navigation.

_ En tant qu'utilisateur, je veux pouvoir filtrer les événements par catégorie.

_ En tant qu'utilisateur, je veux pouvoir rechercher des événements par titre.

_ En tant qu'utilisateur, je veux pouvoir visualiser les détails d'un événement, y compris sa description, sa date, son lieu et le nombre de places disponibles.

_ En tant qu'utilisateur, je veux pouvoir réserver une place pour un événement.

_ En tant qu'utilisateur, je veux pouvoir générer un ticket une fois ma réservation confirmée.

​

​

Organisateur :

​

_ En tant qu'organisateur, je veux pouvoir créer un nouvel événement en spécifiant son titre, sa description, sa date, son lieu, sa catégorie et le nombre de places disponibles.

_ En tant qu'organisateur, je veux pouvoir gérer mes événements.

_ En tant qu'organisateur, je veux avoir accès à des statistiques sur les réservations de mes événements.

_ En tant qu'organisateur, je veux avoir la possibilité de choisir entre une acceptation automatique des réservations ou une validation manuelle.

​

​

Administrateur :

​

_ En tant qu'administrateur, je veux pouvoir gérer les utilisateurs en restricton leur access.

_ En tant qu'administrateur, je veux pouvoir gérer les catégories d'événements en ajoutant, modifiant ou supprimant des catégories.

_ En tant qu'administrateur, je veux pouvoir valider les événements créés par les organisateurs avant leur publication sur la plateforme.

_ En tant qu'administrateur, je veux avoir accès à des statistiques.

​

​

Bonus :

​

_ En tant qu'utilisateur, je veux pouvoir filtrer les événements par date ou par lieu.

_ En tant qu'utilisateur, je veux pouvoir me connecter à mon compte en utilisant mon compte Google ou Facebook.

_ En tant qu'utilisateur, je veux recevoir un e-mail contenant le ticket d'un utilisateur une fois sa réservation confirmée.

_ En tant qu'utilisateur, je veux pouvoir générer mon ticket au format PDF une fois ma réservation confirmée.

_ En tant que développeur, je veux intégrer un système de paiement pour les réservations d'événements.

​

Modalités pédagogiques
Travail: individuel

Durée de travail: 5 jours

Date de lancement du brief: 01/03/2024 à 05:00 pm

Date limite de soumission: 08/03/2024 avant 05:30 pm

Modalités d'évaluation
Une durée de 45 min organisée comme suit :
- Présenter une défense publique de son travail devant les jurys.
- Chaque apprenants n'aura que ~15 minutes pour Démontrer le contenu et la fonctionnalité du site Web (Démonstration, explication de la conception, la base de donnée, code source).
- Code Review \ Questions culture Web (15 minutes)
- Mise en situation (15 minutes)

Livrables
_ La gestion des tâches sur un Scrum Board avec tous les User  stories.
_ Lien de Repository Github du projet 
_ Lien de la présentation
_ Les diagrammes UML
  |_ Diagramme de classes
  |_ Diagramme de cas d'utilisations

Critères de performance
1. Implémentation des Bonnes Pratiques pour CRUD dans Laravel:

- Veillez à suivre les bonnes pratiques de Laravel, telles que l'utilisation des migrations pour définir la structure de la base de données, la séparation des préoccupations avec l'utilisation de modèles, et l'optimisation des requêtes Eloquent.

2. Règles de Validation des Formulaires en Laravel:

- Ajoutez des règles de validation appropriées dans les requêtes avant de passer aux contrôleurs pour assurer l'intégrité des données. Utilisez les fonctionnalités de validation intégrées de Laravel pour vérifier les données entrantes.

3. Utilisation de Middleware pour la Validation:

- Implémentez des middlewares de validation pour valider les données avant qu'elles n'atteignent le contrôleur. Cela aide à assurer une validation précoce et à maintenir la propreté du code.

4. Implémentation des Seeders et Factories:

- Utilisez des seeders pour alimenter la base de données avec des données de test. Créez des factories pour générer des données de manière aléatoire lors des tests unitaires et fonctionnels.

5. Optimisation des Requêtes Eloquent:

- Assurez-vous que vos requêtes Eloquent sont bien optimisées en utilisant les méthodes appropriées telles que "select", "where", et en évitant le chargement excessif de relations.

6. Gestion Appropriée des Relations Eloquent:

- Si votre modèle a des relations avec d'autres modèles, assurez-vous d'utiliser les méthodes Eloquent pour charger ces relations de manière optimale (par exemple, eager loading).

7. Utilisation de Soft Deletes:

- Si vous utilisez Soft Deletes, assurez-vous de gérer correctement les annonces supprimées dans vos requêtes, en évitant de les inclure par défaut dans les résultats.

8. Cache des Requêtes Fréquemment Utilisées:

- Utilisez le cache pour stocker temporairement des résultats de requêtes fréquemment utilisées afin de réduire la charge sur la base de données.

9. Tests de Performance:

- Effectuez des tests de performance pour évaluer la vitesse d'exécution des opérations CRUD sous différentes charges.

10. Optimisation des Vues:

- Si vos vues sont complexes, assurez-vous d'optimiser les requêtes et d'utiliser la mise en cache des vues lorsque cela est approprié.
