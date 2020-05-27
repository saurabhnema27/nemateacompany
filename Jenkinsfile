pipeline {
    agent any
    stages {
        stage('build') {
            steps {
                sh 'composer update'
                cp .env.example .env
                composer install
                sh 'composer dump-autoload'
                sh 'php artisan config:clear'
                sh 'php artisan cache:clear'
                echo 'All done test successfully'
            }
        }
    }
}
