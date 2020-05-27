pipeline {
    agent any
    stages {
        stage('build') {
            steps {
                sh 'composer update'
                sh php -r "file_exists('.env') || copy('.env.example', '.env');"
                sh 'composer dump-autoload'
                sh 'php artisan config:clear'
                sh 'php artisan cache:clear'
                sh 'All done test successfully'
            }
        }
    }
}
