pipeline {
    agent any
    stages {
        stage('build') {
            steps {
                sh 'php --version'
                sh 'composer install'
                sh 'coposer upadte'
                sh 'composer dump-autoload'
                sh 'php artisan config:clear'
                sh 'php artisan cache:clear'
                sh 'All done'
            }
        }
    }
}