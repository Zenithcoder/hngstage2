<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic Clock</title>
    <style>
            body,  html{
               height: 100%;
                background-image: url("image/back.jpg");
				 background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
				box-sizing:border-box;
                padding:5rem
            }
			
		 
            .author{
                margin: -4rem 0;
                text-align: center;
                font-size: 2.5rem;
                color: #00000085;
            }
			.footer {
				margin-bottom:-5px;
				text-align: center;
			}
			.hng p{
				font-size: 36px;
				text-align: center;
				margin-top:180px;
				color: white;
			}
			.min {
				text-align: center;
				margin:auto;
			}
    </style>
</head>
<body>
    <div class="container">
        
                 <div class="hng">
				<p> HNG INTERNSHIP 4.0 </p>
				<br>
			<p style ="font-size:16px;">	<?php date_default_timezone_set("Africa/Lagos"); echo "The time is " . date("h:i:sa"); ?> </p>
				 </div>            
         
    </div>
	
        <p class="footer">Design by Jaido12</p>
	
  
</body>
</html>