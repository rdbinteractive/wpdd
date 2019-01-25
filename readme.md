# WP DryDock
## Local WordPress Development with Docker.
### Documentation: [https://docs.wpdrydock.com/](https://docs.wpdrydock.com/)

## Why?
  - ~5 Minute Setup.
  - Uses [Dotenv](https://github.com/vlucas/phpdotenv) for [environment variable](#environmentVars) management.
  - Uses [PSR-4 Autoloader](https://www.php-fig.org/psr/psr-4/) to encapsulate functionality.
  - Keeps content separate from core
  - Keeps functionality separate from theme.
  - Uses [Laravel Mix](https://github.com/JeffreyWay/laravel-mix) as a wrapper for Webpack to compile styles and scripts.  
  
## <a name="quickStart">Quick Start</a>
### Setup
  - Download and install [Docker](https://www.docker.com/get-docker)
  - Clone this repository to your working directory.
  - Copy `./.env.dev` to `./.env`  
  - From your project root, run `docker compose up -d`
  - From your project root, run `docker exec -ti wpdd-php bash`
  - This logs you in to the php container at: `/var/www/html` 
  - From `/var/www/html` run `./buildfresh.sh` [Windows Note](#windowsBuildfresh)    
  - In a browser, visit `http://localhost` 
  - Configure WordPress
  - Activate the Keel theme.
  - Develop.
    
### <a name="developmentWorkflow">Development Workflow</a>
  - From your project root, run `docker exec -ti wpdd-php bash` to log in to the PHP container.
  - From `/var/www/html`, run `npm run watch` to watch & compile scripts & styles.
  - To log out of the PHP container type `exit`
  - To shut down Docker services, from your project root, run `docker-compose down`   
 
## <a name="codingStandards">Coding Standards</a>
[PSR-2](https://www.php-fig.org/psr/psr-2/)  

## <a name="gitflow">Gitflow Workflow</a>
  - This project uses the [Gitflow Workflow](https://www.atlassian.com/git/tutorials/comparing-workflows/gitflow-workflow).

## <a name="versioning">Versioning</a>
[Semver](https://semver.org)  
Given a version number MAJOR.MINOR.PATCH, increment the:
- MAJOR version when you make incompatible API changes,
- MINOR version when you add functionality in a backwards-compatible manner, and
- PATCH version when you make backwards-compatible bug fixes.

## <a name="windowsBuildfresh">buildfresh.sh Error on Windows Host</a>
If you encounter an error while running `./buildfresh.sh`:
  - Open `buildfresh.sh` in a text editor
  - Change the file's line endings to LF.
  - Re-run `./buildfresh.sh`
  - If error persists:
  - From: `/var/www/html` run `chmod +x ./buildfresh.sh`
  
## License
[GNU GPL v3.0 or Later](https://www.gnu.org/licenses/gpl-3.0.en.html)

## <a name="changelog">Changelog</a>
### Version 1.0.0 &mdash; Falling Into Infinity.
