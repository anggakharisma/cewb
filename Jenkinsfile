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
				bash '''
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