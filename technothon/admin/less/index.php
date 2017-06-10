<?php
$hostname="localhost"; //local server name default localhost
$username="root";  //mysql username default is root.
$password="";       //blank if no password is set for mysql.
$database="TECHNOTHON";  //database name which you created
$con=mysql_connect($hostname,$username,$password);
if(! $con)
{
die('Connection Failed'.mysql_error());
}

mysql_select_db($database,$con);

If(isset($_post['submit'])!='')
{
If($_POST['name']=='' || $_POST['email']=='' || $_POST['enroll']==''|| $_POST['phone']=='' || $_POST['cname']=='' || $_POST['ccode']=='')
{
Echo "please fill the empty field.";
}
Else
{
$sql="insert into student(name,enroll,email,phone,cname,ccode,dept,event) values('".$_POST['name']."', '".$_POST['enroll']."', '".$_POST['email']."', '".$_POST['phone']."', '".$_POST['cname']."', '".$_POST['ccode']."', '".$_POST['dept']."', '".$_POST['event']."')";
$res=mysql_query($sql);
If($res)
{
Echo "Record successfully inserted";
}
Else
{
Echo "There is some problem in inserting record";
}

}
}

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Sign-Up</title>
<link rel="stylesheet" href="css/bootstrap.min.css"  />
<script src="js/bootstrap.min.js" ></script>
<script src="js/jquery.min.js"></script>
</head>
<body id="body-color">
  <hr /><center><h3>TECHNOTHON 2K16 Event Registration Form </h3></center>
<form id="contactForm" class="form-horizontal" action="<?PHP echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div class="form-group">
        <label class="col-xs-3 control-label">Student Name</label>
        <div class="col-xs-4">
            <input type="text" class="form-control" name="name" placeholder="Your Name" />
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-xs-3 control-label" >Enrollment No.</label>
        <div class="col-xs-4">
            <input type="text" class="form-control" name="enroll" placeholder="Your Enrollment No." />
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Email address</label>
        <div class="col-xs-4">
            <input type="email" class="form-control" name="email" placeholder="Your Email"/>
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-xs-3 control-label">Phone</label>
        <div class="col-xs-4">
            <input type="text" class="form-control" name="phone" placeholder="Your Phone Number" required/>
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-xs-3 control-label">Fee</label>
        <div class="col-xs-4">
            <input type="text" class="form-control" name="fee" placeholder="Fee as per event"  disabled/>
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-3 control-label">College Name</label>
    <div class="col-xs-4">
        <input type="text" class="form-control" name="cname" placeholder="Collage Name" />
    </div>
  </div>
    <div class="form-group">
        <label class="col-xs-3 control-label">College Code</label>
    <div class="col-xs-4">
        <input type="text" class="form-control" name="ccode" placeholder="Collage Code" length=12/>
    </div>
  </div>
    <div class="form-group">
                                <label class="col-xs-3 control-label">Branch</label>
                                <div class="col-xs-4">
                                <select class="form-control" id="dept">
                                    <option value="CE/IT">CE/IT</option>
                                    <option value="Electrical">Electrical</option>
                                    <option value="EC">EC</option>
                                    <option value="Mech/Auto">Mech/Auto</option>
                                    <option value="Civil">Civil</option>
                                    <option value="General">General</option>
                                </select>
                              </div>
    </div>
    <div class="form-group">
                                <label class="col-xs-3 control-label">Event LIst</label>
                                <div class="col-xs-4">
                                <select class="form-control" id="event">
                                  <option value="Event list">Crazy C</option>
                                  <option value="Electrical">Lan Gamming</option>
                                  <option value="EC">Design Your Idea</option>
                                  <option value="Mech/Auto">Code Master</option>n>
                                      <option value="General">Poster Presentati
                                      <option value="Civil">Error Recovery</optioon></option>
                                </select>
    </div>
  </div>
        <div class="form-group">
        <div class="col-xs-9 col-xs-offset-3">
            <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Submit</button>
            <button type="reset" class="btn btn-primary" value="reset">Reset</button>
        </div>
    </div>
</form>
<script>
$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    }
    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

    $('#basicBootstrapForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            firstName: {
                row: '.col-xs-4',
                validators: {
                    notEmpty: {
                        message: 'The first name is required'
                    }
                }
            },
            username: {
                validators: {
                    notEmpty: {
                        message: 'Enter Your Enrollement No.'
                    },
                    stringLength: {
                        min: 12,
                        max: 12,
                        message: 'Please Enter valid Enrollment No.'
                    },
                    regexp: {
                        regexp: /[0-9]/,
                        message: 'Only number is allowed'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
                      captcha: {
                validators: {
                    callback: {
                        message: 'Wrong answer',
                        callback: function(value, validator, $field) {
                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            },

        }
    });
});
</script>
</body>
</html>