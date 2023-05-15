pipeline {
	agent any
	environment {
		APP_KEY = credentials("APP_KEY")
	}
    stages {
        stage('composer install') {
			agent {
				docker {
					image 'anggakharisma/jenkins_docker'
				}
			}
            steps {
				sh '''
					composer install
				'''
            }
        }
		stage("build assets") { 
			agent {
				docker {
					image 'anggakharisma/jenkins_docker'
				}
			}
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
    }
}