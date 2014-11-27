<?php

echo "branch name : ";
$branch = trim(fgets(STDIN));

echo "method : ";
$method = trim(fgets(STDIN));

echo "details : ";
$desc = trim(fgets(STDIN));

echo "user name : ";
$name = trim(fgets(STDIN));

print("branch name is \"$branch\"\n");
print("$desc - $method by $name");

?>
