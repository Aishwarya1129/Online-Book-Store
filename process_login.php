<?php session_start();

require('includes/config.php');
	
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['usernm']))
		{
			$msg[]="No such User";
		}
		
		if(empty($_POST['pwd']))
		{
			$msg[]="Password Incorrect........";
		}
		
		
		if(!empty($msg))
		{
			echo '<b>Error:-</b><br>';
			
			foreach($msg as $k)
			{
				echo '<li>'.$k;
			}
		}
		else
		{
			
			
	
			
			$unm=$_POST['usernm'];
			
			$q="select * from user where u_unm='$unm'";
			
			$res=mysqli_query($conn,$q) or die("wrong query");
			
			$row=mysqli_fetch_assoc($res);
			
			if(!empty($row))
			{
				if($_POST['pwd']==$row['u_pwd'])
				{
					$_SESSION=array();
					$_SESSION['unm']=$row['u_unm'];
					$_SESSION['uid']=$row['u_pwd'];
					$_SESSION['status']=true;
					
					if($_SESSION['uid']!="aditi")
					{
                        session_start();
                        include "connect.php";
                        $sql = "SELECT * FROM user";
	                       $result = mysqli_query($connect, $sql);
                        $_SESSION['name'] = $row['u_fnm'];
                        $_SESSION['id'] = $row['u_id'];
						header("location:user_profile.php");
                        
                        
					}
					else if($_SESSION['unm']="nilesh")
					{
						header("location:admin/all_book.php");
					}
					else
					{
                         session_start();
                        include "connect.php";
                        $sql = "SELECT * FROM user";
	                       $result = mysqli_query($connect, $sql);
                        $_SESSION['name'] = $row['u_fnm'];
                        $_SESSION['id'] = $row['u_id'];
						header("location:user_profile.php");
                       
					}
				}
				
				else
				{
					echo 'Incorrect Password....';
				}
			}
			else
			{
				$r="select * from admin where u_unm='$unm'";
			
			$res=mysqli_query($conn,$r) or die("wrong query");
			
			$row=mysqli_fetch_assoc($res);
			if(!empty($row))
			{
				if($_POST['pwd']==$row['u_pwd'])
				{
					header("location:admin/all_book.php");
				}
				else
				{
					echo 'Incorrect Password....';
				}
			}
			else
			{
				echo 'Invalid User';
			}
			
		}
	
	}
	}
	else
	{
		header("location:login.php");
	}
			
?>