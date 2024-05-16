<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password</title>
    <style>
        .containtEmail{
            width: 100%;
            height: 100%;
            background-color: #eee;

            
            gap: 30px;
            padding: 30px;
            font-family: Arial, Helvetica, sans-serif;
            padding: 10px 20px;
        }

        .btn{
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
           

            padding: 10px 20px;
        }
        .btn a{
            
            color: #eee;
            padding: 15px;
            background-color: #3C0753;
            border-radius: 10px;
            font-size: 20px;
            font-weight: 600;
            
            line-height:normal ;
            text-decoration: none;
      
        }
        .DearUser{
            width: 100%;
            text-align: left;
            color:#3C0753;

            font-family: Arial, Helvetica, sans-serif;
            font-size: 48px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
            padding: 10px 20px;
        }
        .sometitle{
            width: 60%;
            text-align: left;
            color:#121212;

            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            padding: 10px 20px;
        }
        .teamadmin{
            width: 100%;
            text-align: center;
            color:#3C0753;

            font-family: Arial, Helvetica, sans-serif;
            font-size: 17px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            padding: 10px 20px;
        }
        .Subject{
            width: 100%;
            text-align: left;
            color:#121212;

            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    

<div class="containtEmail" >
<div class="Subject">Subject: Password Reset Request</div> 
<div class="DearUser">Dear {{ $fisrtName }}, {{  $lastName }}</div>
<div class="sometitle">
    We have received a request to reset your password for MatchCom. To proceed with the password reset, please follow the instructions below:</div>

<div class="btn"><a class="abtn" href="{{ route('resetPassword',$token) }}">Reset Password</a></div>    
<div class="sometitle">If you did not request this password reset, please ignore this email. Your password will not be changed.</div>
<div class="sometitle">Best regards,</div>
<div class="teamadmin">MatchCom .__. Support_Team</div>

</div>
</body>
</html>