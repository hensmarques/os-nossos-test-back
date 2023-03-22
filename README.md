## Instalação e Uso

1. Instale os pacotes do composer: `composer install`

2. Rode as migrations do Doctrine: `php bin/console doctrine:migrations:migrate`

3. Gere as fixtures do Doctrine no banco de dados: `php bin/console doctrine:fixtures:load`

4. Inicie o servidor symfony: `symfony serve`