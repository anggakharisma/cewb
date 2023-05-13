pipeline {
    agent {
        node {
			label 'docker-agent-test2'
		}
	}
    stages {
        stage('prepare') {
            steps {
				sh '''
					composer install
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