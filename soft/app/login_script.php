<?php
session_start();//starting session
include('db_conn.php');
$error=''; //variable to store error message
 if (isset($_POST['submit'])) {

                            if (empty($_POST['staff_id']) || empty($_POST['password'])) {
								$error = "Invalid Staff ID & Password"; 
                            } 
							else 
							{   
                                                              
// Define $username and $password 
$staff_id=$_POST['staff_id']; 
$password=$_POST['password']; 

// To protect MySQL injection for Security purpose 
//$username = stripslashes($username);
//$password = stripslashes($password);
                                
                                
                                //Establishing Connection with Server by passing server_name, user_id and password as a parameter 
                                $connection = mysql_connect("localhost:3306","ceecoand_user","coanda@2019","ceecoand_db");
								
								//Selecting Database
								$db = mysql_select_db("ceecoand_db", $connection);
								
								//SQL query to fetch information of registerd users and finds user match.
                                $query = mysql_query("select * from staff_id where staff_id='$staff_id' AND password=PASSWORD('$password')", $connection);
                                $rows = mysql_num_rows($query);

                                if ($rows == 1) {
                                    $_SESSION['login_user']=$staff_id;//Initializing Session
                                    header("location: admin.php");//Redirecting to other page
                                    
                                } else {
                                    $error = "Invalid Staff ID & Password"; 
                                }
								
								//Closing Connection
								mysql_close($connection);                           
                            }
                        }
?>