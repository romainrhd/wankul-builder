# Wankul Builder

## Technologies utilisées

- PHP 8.2
- Node 20
- Laravel 10
- MariaDB
- InertiaJS
- Vue.js
- TailwindCSS
- Mailpit
- Laravel Pint
- Husky
- Commitizen

## Installation du projet

<details>
<summary>Avec Docker (<a href="https://laravel.com/docs/10.x/sail">Sail</a>)</summary>

1. Récupération du projet :
    ```bash
    git clone git@github.com:romainrhd/wankul-builder.git
    ```
2. On se déplace dans le projet :
    ```bash
    cd wankul-builder/
    ```
3. On crée le fichier .env et on le remplit avec les bonnes informations :
   ```bash
   cp .env.example .env
   ```
   Il faut bien penser à mettre à jour les valeurs suivantes :
    - LOG_CHANNEL (Mettre daily pour avoir un fichier de log par jour)
4. Installation des dépendances :
    ```bash
    docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
    ```
5. Installation de la base de données :
    ```bash
    sail artisan migrate --seed
    ```
6. Création du lien symbolique pour les images :
    ```bash
    sail artisan storage:link
    ```
7. Création du lien symbolique pour les images :
    ```bash
    sail artisan key:generate
    ```
8. Installation des dépendances front : 
    ```bash
    sail npm install
    ```
9. Lancement du projet :
    ```bash
    sail npm run dev
    ```

</details>
<details>
<summary>Sans Docker</summary>

1. Récupération du projet :
    ```bash
    git clone git@github.com:romainrhd/wankul-builder.git
    ```
2. On se déplace dans le projet :
    ```bash
    cd wankul-builder/
    ```
3. On crée le fichier .env et on le remplit avec les bonnes informations :
    ```bash
    cp .env.example .env
    ```
   Il faut bien penser à mettre à jour les valeurs suivantes :
    - LOG_CHANNEL (Mettre daily pour avoir un fichier de log par jour)
4. Installation des dépendances :
    ```bash
    composer install
    ```
5. Installation de la base de données :
    ```bash
    php artisan migrate --seed
    ```
6. Création du lien symbolique pour les images :
   ```bash
   php artisan storage:link
    ```
7. Création de la clé Laravel :
   ```bash
   php artisan key:generate
    ```
8. Installation des dépendances front :
    ```bash
    npm install
    ```
9. Lancement du projet :
    ```bash
    npm run dev
    ```

</details>

## Informations utiles

### Récupération de l'intégralité des images des cartes :

J'ai également développé un scrapper qui va remplir la base de données avec les images des cartes, leur id et leur nom.
Il est disponible ici : https://github.com/romainrhd/wankul-scrapper

### Formatage du code :

```bash
./vendor/bin/pint -v
```

### Hooks Git avec Husky

Utilisation de Husky pour ajouter des hooks à Git.
- Commitlint : permet d'ajouter des conventions pour les messages de commit.
- Laravel Pint : permet de formater le code juste avant de créer le commit.

### Commitizen

Commitizen est un outil qui sert d'aide à la rédaction d'un message de commit pour respecter les conventions 
du commitlint. C'est surtout utile lors de l'onboarding d'un développeur sur un projet. 

Pour l'utiliser, il suffit d'ajout au stage ses modifications puis de taper la commande `cz` à la place de lancer la
commande `git commit -m "mon message"`. Commitizen va alors dialoguer avec le développeur en ligne de commande pour
l'aider à rédiger son message de commit.
