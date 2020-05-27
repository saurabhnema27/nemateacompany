pipeline {
    agent any
    stages {
        stage('build') {
            steps {
                sh 'composer update'
<<<<<<< HEAD
                php -r "file_exists('.env') || copy('.env.example', '.env');"
=======
                sh 'cp .env.example .env'
                sh 'composer install'
>>>>>>> d4183b6592a2a5b1d3efddfcbd086f18ae999af7
                sh 'composer dump-autoload'
                sh 'php artisan config:clear'
                sh 'php artisan cache:clear'
                echo 'All done test successfully'
            }
        }
    }
}
