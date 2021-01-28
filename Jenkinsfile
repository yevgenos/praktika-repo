pipeline {

	agent any

		stages {
	
			stage("build") {
		
				steps {
					echo "building application"
				}
			}

			stage("test") {

                                steps {
                 			echo "testing application"
                                }
                        }

			stage("build") {

                                steps {
                 			echo "deploying application"
                                }
                        }

		}

}
