




<?php
include("header.php");
?>
 
<section style="min-height:450px;">
<div class="row">
    
    <div class="container" >
       
            <div class="col-md-6">
           
            <form method="post">
                <div class="container" style="width: 400px;
                    padding: 20px;
                    background-color: white;
                    margin: 0 auto;
                    margin-top: 100px;
                    border-radius: 5px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">    

                <h2 style="text-align: center;
                    background-color: maroon;
                    color: white;
                    padding:10px;">Contact Us</h2>


                 <center>
                    <P >Send us message below and we'll respond as soon as possible</P>
                </center>
                 <hr>
                    <style>
                        input[type="text"],
                       input[type="email"],
                        input[type="tel"] {
                        width: 100%;
                        padding: 12px 20px;
                        margin: 8px 0;
                        display: inline-block;
                        border: 2px solid #ccc;
                        box-sizing: border-box;
                        border-radius: 50px;
                        border-color:maroon;
                        color: maroon;
                        }
                    </style>
                <label for="username"><b>Name</b></label>
                <input type="text"  id="username" placeholder="Enter name" name="name" required>
                <br>
                <label for="email"><b>Email</b></label>
                <input type="email"  id="email" placeholder="Enter email" name="email" required>
                <br>
                <label for="number"><b>Mobile</b></label>
                <input type="tel"   id="number" placeholder="Enter number" name="number" required>
                <hr>
                <label for="message"><b>subject</b></label>
                <textarea name="message" id="message"  rows="10" style="resize:none;width:100%; border-radius: 50px;"></textarea>
                
                
                
                <button type="submit" class="btn" style =" background-color:maroon;color:white;">Send message</button>
                  <button type="reset" class="btn"  style =" background-color:maroon;color:white;">Clear</button>
                </div>
               
      </div>
    </form>
    </div>
            

           </div>
        </div>
    </div>
</section>


<?php
include("footer.php");
?>

