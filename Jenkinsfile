pipeline {
    agent {
        node {
			label 'docker-agent-test2'
		}
	}
    stages {
        stage('prepare') {
            steps {
				composer install 
				yarn && yarn build
            }
        }
        stage('Test') {
            steps {
				php artisan test
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