<?php


include 'classes/user.php';
$userObj = new User;

if(isset($_POST['createUser'])){
    // $firstName =$_POST['first_name'];
    // $lastName =$_POST['last_name'];
    // $username =$_POST['username'];
    // $passw =$_POST['password'];
    // $confirmPassw =$_POST['confirmPassw'];

    // if($passw==$confirmPassw){
    // }else{
    //     echo"<p class ='text-danger'>Password and Confirm Password do not match.</p>";
    // }
    // $userObj->createUser($firstName,$lastName,$username,$passw);


}elseif(isset($_POST['btnLogIn'])){
    $username =$_POST['username'];
    $passw =$_POST['passw'];
    $userObj->login($username,$passw);

}elseif(isset($_POST['btnSignUp'])){
    $firstName =$_POST['first_name'];
    $lastName =$_POST['last_name'];
    $username =$_POST['username'];
    $passw =$_POST['passw'];
    $confirmPassw =$_POST['confirmPassw'];

    $userObj->createUser($firstName,$lastName,$username,$passw,$confirmPassw);

}elseif(isset($_POST['post'])){
    $post = $_POST['user_post'];
    $id = $_SESSION['login_id'];

    $userObj->addPost($post,$id);
}

 





?>