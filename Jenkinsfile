pipeline {
    agent any

    environment {
        IMAGE_NAME = "notes-app"
        CONTAINER_NAME = "notes-app-container"
        PORT = "9092"
    }

    stages {

        stage('Checkout') {
            steps {
                git branch: 'master', url: 'https://github.com/Satyams-git/notes-app.git'
            }
        }

        stage('Build Docker Image') {
            steps {
                sh '''
                echo "======= Building Docker Image ======="
                docker build -t ${IMAGE_NAME}:latest .
                '''
            }
        }

        stage('Push to Docker Hub') {
            steps {
                withCredentials([usernamePassword(
                    credentialsId: 'Docker_Hub_Id_Pwd',
                    usernameVariable: 'DOCKER_USER',
                    passwordVariable: 'DOCKER_PASS'
                )]) {
                    sh '''
                    echo "======== Logging in to Docker Hub ========="
                    echo $DOCKER_PASS | docker login -u $DOCKER_USER --password-stdin
                    
                    echo "======== Tagging Image ========"
                    docker tag ${IMAGE_NAME}:latest $DOCKER_USER/${IMAGE_NAME}:latest
                    
                    echo "======== Pushing Image to Docker Hub ========"
                    docker push $DOCKER_USER/${IMAGE_NAME}:latest
                    '''
                }
            }
        }

        stage('Stop Old Container') {
            steps {
                sh '''
                echo "======= Stopping Old Container ======="
                docker stop ${CONTAINER_NAME} || true
                docker rm ${CONTAINER_NAME} || true
                '''
            }
        }

        stage('Run New Container') {
            steps {
                sh '''
                echo "======= Running New Container ======="
                docker run -d --name ${CONTAINER_NAME} -p ${PORT}:80 -v notes:/data ${IMAGE_NAME}:latest
                '''
            }
        }

        stage('Verify') {
            steps {
                sh '''
                echo "======= Checking App Response ======="
                sleep 5
                curl -s http://13.233.195.5:${PORT} | head -n 20
                '''
            }
        }
    }

    post {
        success {
            echo "Notes App Deployed Successfully!"
        }
        failure {
            echo "Deployment Failed!"
        }
    }
}
