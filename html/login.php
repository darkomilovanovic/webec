<?php

    if(isset($_POST['uname']))
    {
        $this->HandleError("UserName is empty!");
        return false;
    }
    if(isset($_POST['psw']))
    {
        $this->HandleError("Password is empty!");
        return false;
    }
    $username = trim($_POST['uname']);
    $password = trim($_POST['psw']);
    //if(!$this->CheckLoginInDB($username,$password))
	if(!$this->CheckLoginLocal(username,$password))
    {
        return false;
    }
    //session_start();
    //$_SESSION[$this->GetLoginSessionVar()] = $username;
    return true;

function CheckLoginLocal(user, passwd)
{
  if (user == "Dierk")
  else if (user == "darko")
  else if (user == "cathrin")
  else
    return false;
  if (passwd == "fs19")
    return true;
}

<?php