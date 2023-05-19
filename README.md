## Git project

### Installation

```bash
git clone https://github.com/DaniOmer/docker_project.git && cd docker_project
```

### Usage
1. You have to launch bdd services
    ```bash
    docker-compose -f docker-compose-bdd.yml up -d
    ```
    This will launch a postgresql database and a adminer interface to manage it.
    You have now access to a database with these credentials:
    - host: db
    - port: 5432
    - user: postgres
    - password: postgres
    - database: test
    - adminer: http://localhost:8082


2. You have to launch php services
    ```bash
    docker-compose -f docker-compose-php.yml up -d
    ```
   This will launch the php/apache server to preview the website.
   
  You have now access to the website at http://localhost:9000
   
