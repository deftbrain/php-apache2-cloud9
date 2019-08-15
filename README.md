# PHP + Apache2 + Cloud9

## Preparing the environment
### Remote environment
1. Go to the [Play with Docker](https://labs.play-with-docker.com) service and click the _Start_ button;
1. Click _ADD NEW INSTANCE_ at the left side bar;
1. Click the black rectangle on the right side and press the _Enter_ - you will see the console :)

### Local environment
1. Install Docker

## Running the environment

        git clone https://github.com/deftbrain/php-apache2-cloud9.git
        cd php-apache2-cloud9 && docker-compose up -d
        
## Stopping the environment
All changes will be lost.

        docker-compose down -v
