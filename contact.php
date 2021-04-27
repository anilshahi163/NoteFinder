<?php include 'includes/connection.php';?>
<?php include 'includes/header.php';?>

<?php include 'includes/navbar.php';?>


<div class="container">


      <div  class="form">
        <form id="contactform" method="POST" action="index.php?msg=1">
        <p class="contact"><label>Report a Problem. | Request for service.</label></p> 
          <p class="contact"><label for="name">Full Name:</label></p> 
          <input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text"> 
           
          <p class="contact"><label for="email">Email Address:</label></p> 
          <input id="email" name="email" placeholder="example@domain.com" required="" type="email"> 
                
<!--                 <p class="contact"><label for="your-message">Your Message:</label></p> 
          <input id="message" name="message" placeholder="Your message" required="" rows="4" type="textarea">  -->
          <p class="contact"><label for="email">Your Message:</label></p> 
			<textarea class="form-control" rows="8" cols="2" placeholder="Your message"></textarea>      
            
            <input class="buttom" name="signup" id="submit" tabindex="5" value="Send" type="submit">    
   </form> 
</div>      
</div>

</body>
</html>