<?php
$conn = mysqli_connect("localhost", 'root', "", "phpblog");

if (mysqli_connect_errno()) {
	echo "failled to connect to Mysql ". mysqli_connect_errno();
}
  ?>