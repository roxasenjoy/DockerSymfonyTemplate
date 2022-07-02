
# Template d'un docker avec Symfony + mail

Ce repository te permet de gagner du temps lors de la création d'un projet symfony avec Docker.
Grâce à lui tu pourrais avoir un projet Symfony sous docker en deux secondes !

## Installation

How to install this project ? 

```bash
  git clone https://github.com/roxasenjoy/DockerSymfonyTemplate.git
  cd DockerSymfonyTemplate
  
  docker-compose build
  docker exec php composer create-project symfony/website-skeleton PROJECT_NAME
  docker-compose up -d

```


Ajouter des éléments dans notre projet 

```bash
  
  docker exec -it php /bin/bash
  cd PROJECT_NAME

```

Félicitation, vous êtes dans le dossier de votre projet ! A vous de jouer maintenant !
    
## Author

- [@andrewmahe](https://andrewmahe.com/)

