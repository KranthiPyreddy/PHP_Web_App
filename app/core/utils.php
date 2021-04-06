<?php
function check_permissions()
{	
	if($_SESSION[permissions][role] !='admin')
	{

	 if($_SESSION[permissions][role] !='manager')
		{
			if($_SESSION[permissions][role] != $_SESSION[method])
		 	{ 
				$_SESSION['page']  = $_SESSION[method];
			   header('Location: /');
		 	}
		}
		else
		{
			if($_SESSION[method]!="manager" && $_SESSION[method]!="staff")
			{
				$_SESSION['page']  = $_SESSION[method];
				 header('Location: /');
			}
			else
	{
		$_SESSION['page'] ==null;
	}
		}
	}
	else
	{
		$_SESSION['page'] ==null;
	}
}

?> 