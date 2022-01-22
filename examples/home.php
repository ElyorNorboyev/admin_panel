
<?php
include_once 'dbconfig.php';
if(!$user->is_loggedin())
{
    $user->redirect('login.php');
}
    $user_id = $_SESSION['user_session'];
    $stmt = $DB_con->prepare("SELECT * FROM users WHERE user_id=:user_id");
    $stmt->execute(array(":user_id"=>$user_id));
    $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="/bootstrap-5.1.3-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="/fontawesome-free-6.0.0-beta3-web/css/all.min.css">
<link rel="stylesheet" href="../assets/css/style.css" type="text/css">
<title>welcome - <?php print($userRow['user_email']); ?></title>
</head>

<body>

<div class="header">
    <div class="left">
        <label><a href="#">Web Deweloper Programming Blog</a></label>
    </div>
    <div class="right">
     <label><a href="logout.php?logout=true"><i class="fas fa-sign-out-alt"></i> logout</a></label>
    </div>
</div>
<div class="content">
welcome : <?php print($userRow['user_name']); ?>
</div>
</body>
</html>