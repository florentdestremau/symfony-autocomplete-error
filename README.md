This project is a reproducer for a bug in Symfony Automcomplete combined with Live Component.

# Install the project

Use PHP8.2 with sqlite and install the dependencies with composer:
```bash
composer install
symfony console doctrine:migrations:migrate -n
symfony console doctrine:fixtures:load -n
symfony serve -d
```
# Reproduce the bug

- Go to https://localhost:8000 (your webserver)
- Click on the "Add a new post" button
- Fill the form with a title and a body, check that the "One" category is selected
- Click on the "Save" button
- The new post has the "Three" category selected instead of the "One" category.

# Issue

When using autocomplete with a Live Component, the choice field is always set to the last choice of the list.
