pipeline {
    agent {
        docker {
			image 'anggakharisma/jenkins_docker'
		}
	}
	environment {
		APP_KEY = credentials("APP_KEY")
	}
    stages {
        stage('composer install') {
            steps {
				sh '''
					composer install
				'''
            }
        }
		stage("build assets") { 
			steps {
				sh 'ls -la'
				sh '''
					CI=true yarn install 
					CI=true yarn build 
				'''
			}
		}

        stage('Test') {
            steps {
				sh '''
					php artisan test
				'''
            }
        }
        stage('Deliver') {
            steps {
                echo 'Deliver....'
                sh '''
                echo "doing delivery stuff.."
                '''
            }
        }
    }
}