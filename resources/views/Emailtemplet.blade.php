
<div class="containtEmail" style="
    width: 600px;
    height: 600px;
    background-color: #eee;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    
    gap: 30px;
    padding: 30px;margin:20px;">
    <h1 style="
    font-size: 40px;
    color:#3C0753  ;
    width: 100%;
    text-align: left;">Match.com</h1>
   <p style="
   font-size: 20px ; 
   width: 100%;
   text-align: left;">Reset your password click Link  </p>
   <a style="font-size: 25px;text-decoration: none;background-color: #3C0753;color:#eeee; padding:15px;margin:10px ; border-radius:10px" href="{{ route('resetPassword',$token) }}">Reset Password</a>
</div>
