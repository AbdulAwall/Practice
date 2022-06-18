<?php  $title = 'Contact Us';
include "header.php";?>


    <div class="con-main">
        <h1>Contact with us.</h1>
        <hr>
    </div>
    <div>
        <address class="con-address">
            Atimkhana More<br>
            Sherpr Sadar<br>
            2100 <br>
            <a href="mailto:awallali009@gmail.com">mail:example@gmail.com</a> <br>
        <a href="tel:333">Call:333</a>
        </address>
        
    </div>

    <div class="con-email">
        <h2>Email</h2>
        <a href="mailto:nowhere@mozilla.org?cc=name2@rapidtables.com&bcc=name3@rapidtables.com&subject=The%20subject%20of%20the%20email&body=The%20body%20of%20the%20email">
            Send mail with cc, bcc, subject and body
          </a>
    </div>

    <div class="contaioner">
        <div class="row">
            <div class="col-md-12 bg-danger">
                <div>Head</div>
            </div>
        </div>
    </div>

    <form action="registrationdata.php" method="post">
 
        
        <input type="text" class="form-control" placeholder="First name" name="firstName">

        <input type="text" class="form-control" placeholder="Last name" name="lastName">
        <input type="text" class="form-control" placeholder="Address" name="address">
        <input type="email" class="form-control" placeholder="Email" name="email">
        <!-- <input type="password" class="form-control" placeholder="Password" name="password"> -->
     
        <input type="submit" name="submit">
        
    </form>

    <?php include "footer.php"?>

</body>
</html>