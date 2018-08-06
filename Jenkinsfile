pipeline {
    agent any

    stages {
        stage('Mount Docker') {
            steps {
                sh docker-compose up -d
            }
        }
        stage('Build') {
            steps {
                sh docker run --rm -it -v$(pwd):/app composer install
            }
        }
        stage('Test') {
            steps {
                sh docker exec -it jk_php vendor/bin/phpunit
            }
        }
        stage('Deploy') {
            steps {
                echo 'Deploying....'
            }
        }
    }
}