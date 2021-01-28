pipeline {

	agent any

		stages {
	
			stage("build") {
		
				steps {
					echo "building application"
					sh "mkdir -p /backup/test-1-folder"
				}
			}

			stage("test") {

                                steps {
                 			echo "testing application"
                                }
                        }

			stage("deploy") {

                                steps {
                 			echo "deploying application"
                                }
                        }

		}



}
