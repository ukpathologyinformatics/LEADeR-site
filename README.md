# Template Site
---

### How to make it work
1. Setup "config_mssql.ini" file in the backend. THE HOST NAME IS "mssql" NOT LOCALHOST (if using docker)
2. Run `docker-compose up` while in the backend directory.
3. Might have to do 'composer install' if vendor is missing.
4. Open up SSMS locally (not in docker) and run the init.sql script in the docker-backed directory.
5. Navigate to http://localhost:8080/ for web interface


### Default accounts
WEB:
- username: admin
- password: anything you want

MSSQL:
- username: SA
- password: Codeman01

