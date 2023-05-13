pipeline {
    agent {
        node {
			label 'docker-agent-phpnode'
		}
	}
    stages {
        stage('composer install') {
            steps {
				bash '''
					composer install
				'''
            }
        }
		stage("build assets") { 
			steps {
				sh 'CI=true yarn install '
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