<?php
/**
 * For message show validation function
 * with two paramiter message messageType
 */

function validate($message,$messageType="danger"){
    $mag ="<div class=\" px-4 py-1\">
    <div class=\"alert alert-{$messageType} alert-dismissible fade show\" role=\"alert\">
        {$message}
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
    </div>

</div>";
return $mag;
}
/**
 * for emailvalidate funciton
 */

function emailValidate($email){
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        return true;
    }else{
        return false;
    }

}
// for edu mail function 
function fliterEmail($email,$vallidEmails){
    $vallidEmails = ['aub.edu.bd','diu.edu.bd','nsu.edu.bd'];
   $filt_email = explode('@',$email,2);
   return $filt_email[1];
   if(in_array($filt_email[1],$vallidEmails)){
        return true;

   }else{
        return false;
   }
}

// user name validation 
function validateUsername($username) {
            
    
    if (preg_match('/^\w{5,20}$/', $username)) {
        return true;
    } else {
        return false;
    }
}
// old input value
function oldinputValue($fieldName){
    if(isset($_POST[$fieldName])){
        echo $_POST[$fieldName];
    }else{
        echo ' ';

    }
}
// gender validate 
// function genderValdate($female){
//     if()

// }


if(isset($_POST['submit'])){
    $f_name          = $_POST['f_name'];
    $l_name          = $_POST['l_name'];
    $u_email         = $_POST['u_email'];
    $age             = $_POST['age'];
    
    $selectCountry   = $_POST['selectCountry'];
    if(isset($_POST['gender'])){
        $gender          = $_POST['gender'];
    }
    
    if(isset($_POST['agre_status'])){
        $agre_status     = $_POST['agre_status'];
   
    }
    
  
    

    

   if(empty($f_name) || empty($l_name) || empty($u_email) || empty($age) ||empty($gender)){

      $validateMsg= validate("All feild is requar") ;

   }else if(emailValidate($u_email)== false){
    $validateMsg= validate('Email is not valid!','warning');

   }else if(fliterEmail($u_email,['aub.edu.bd','diu.edu.bd','nsu.edu.bd'])==false){

       $validateMsg= validate('Email is not enable','warning');
   }else if($age < 18 || $age > 60 ){
    $validateMsg= validate('your not prefect this course ','warning');

   }else if (validateUsername($f_name) == false) {

    $validateMsg= validate('user name  is not valid','warning');

   }else if($gender=='female'){
    $validateMsg= validate('you are not anybul this coures','warning');

   }else if($agre_status !='yes'){
    $validateMsg= validate('you must field trams condition field','warning');

   }
   else{
    $validateMsg = validate('Everthing is ok!success','success'); 
    $_POST= '';

   }
    
}
  
?>
<!doctype html>
<html lang="en">

<head>
    <title>User Registion forme</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="cotainer mt-5 wrap">
        <h2 class="text-center ">User Registaion Form</h2>
        <?php
          if (isset($validateMsg)) {

              echo $validateMsg;
          }

          
        ?>


        <form action="" method="post">
            <div class="row px-4 py-2">

                <div class="col-6">
                    <input type="text" placeholder="Frist Name" class="form-control"
                        value="<?php oldinputValue('f_name') ?>" name="f_name" autocomplete="off">
                    <!-- <?php echo $name_erro ?> -->
                </div>
                <div class="col-6">
                    <input type="text" placeholder="Last Name" class="form-control"
                        value="<?php oldinputValue('l_name') ?>" name="l_name" autocomplete="off">
                </div>
            </div>
            <div class="row px-4 py-2">
                <div class="col-12">
                    <input type="text" placeholder="User Email" class="form-control"
                        value="<?php oldinputValue('u_email') ?>" name="u_email" autocomplete="off">
                </div>
            </div>
            <div class="row px-4 py-2">
                <div class="col-12">
                    <input type="text" placeholder="Enter your  age" class="form-control"
                        value="<?php oldinputValue('age') ?>" name="age" autocomplete="off">
                </div>
            </div>

            <div class="row mb-3">


                <div class="col margin_left">
                    <label for="">Gender</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>
                </div>
            </div>
            <div class="row px-4 mb-4">
                <div class="col-12 ">
                    <select class="form-control" name="selectCountry">
                        <option>select country </option>
                        <option value="Bangladesh">Bangladesh </option>
                        <option value="Pakistan">Pakistan </option>
                    </select>
                </div>
            </div>
            <div class="row mb-4">
                <dic class="col margin_left">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="agre_status" value="yes"
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            I agre with terms and conditions
                        </label>
                    </div>

                </dic>
            </div>

            <div class="row px-4 ">
                <div class="col-12 mb-2">
                    <!-- <a href=" " class="btn btn-warning btn-block " name="submit">Submit</a> -->
                    <button class="btn btn-warning btn-block" name="submit">submit</button>
                </div>
            </div>
        </form>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js "
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous ">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js "
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous ">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js "
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous ">
    </script>
</body>

</html>