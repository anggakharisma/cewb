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
        stage('Build image') {
			agent any
            steps {
				script {
					docker.build('cewb_build', '-f Dockerfile .')
				}
            }
        }
    }
}