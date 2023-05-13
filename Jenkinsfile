pipeline {
    agent {
        node {
			label 'docker-agent-test2'
		}
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
				sh '''
					yarn && yarn build
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