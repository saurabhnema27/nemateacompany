pipeline {
    agent any
    stages {
        stage('build') {
            steps {
                sh 'php --version'
                sh 'php artisan config:clear'
                sh 'php artisan cache:clear'
                sh 'All done'
            }
        }
    }
}