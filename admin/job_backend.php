<?php 
session_start();
include_once('config/database.php');
$cat_sql = 'SELECT * FROM categories';
$post_sql = 'SELECT * FROM positions';
$categories = mysqli_query($connection,$cat_sql);
$positions = mysqli_query($connection,$post_sql);

if($_SERVER['REQUEST_METHOD'] =='POST') {
	$category_id = $_POST['category'];
	$position_id = $_POST['position'];
	$title = $_POST['title'];
	$description = $_POST['description'];
	$requirement = $_POST['requirement'];
	$sql = "INSERT INTO jobs (category_id,position_id,title,description,requirement) VALUES('$category_id','$position_id','$title','$description','$requirement')";
	$result = mysqli_query($connection,$sql);
	if(!$result) {
		die('Insert Error'.mysqli_error($connection));
	}
	$_SESSION['job_success'] = 'New Job was created!';
	header("location:job.php");
}else if($_SERVER['REQUEST_METHOD'] == 'GET') {
	$jobs = 'SELECT j.*,p.name AS position_name FROM jobs AS j LEFT JOIN positions AS p ON j.position_id = p.id';
	$jobs = mysqli_query($connection,$jobs);
}