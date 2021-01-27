<?php

$cmd = 'mysql -usite1sql -ptest site1_db -e "SELECT salaries.Name, salaries.Salary, hours.Hours FROM salaries JOIN hours ON salaries.Name = hours.Name;"';

$output = shell_exec($cmd);

echo "<pre>$output</pre>";

?>

