pipeline {
    agent any
    stages {
        stage('build') {
            steps {
                sh 'php --version'
                sh 'composer update'
                sh 'composer dump-autoload'
                sh 'php -r "file_exists('.env') || copy('.env.example', '.env');'
                sh 'php artisan config:clear'
                sh 'php artisan cache:clear'
                sh 'All done'
            }
        }
    }
}
