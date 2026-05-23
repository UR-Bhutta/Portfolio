<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
  
</head>
<body>
     <style>
        body {
    font-family: Arial, sans-serif;
    background: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}
.back-image{
    width: 100%;
    height: auto;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;

   }   

.login-container {
    background: darkgrey;  
    background-color: rgba(225, 225, 225, 0.3);
    padding: 150px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 300px;
}

input {
   width: 140%;
   margin-left: -60px;
   border-radius: 5px;
   border: 1px solid #ccc;
   margin-bottom:20px; 
   padding: 10px;
   }
   .back-image{
    width: 100%;
    height: auto;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;

   } 
  

.button {
    width: 10% ;
    padding: 10px 60px 10px 60px; 
    margin-top: 10px;
    background: #28a745;
    color: white;
    align-items: center;
    text-align: center;
    justify-content: center;
    border: none;
    background-color: #202125;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;    

}


.button:hover {
    background: #666666;

}
#img{
    image-background: cover;
}                

#error-message {
    color: red;
    margin-top: 10px;
}
</style>
     <div class="login-container">
        <h2>Login</h2>
        
         <img src="img/main-bg1.jpg"  alt="Background Image" class="back-image">
        <form>
            <input type="text" id="username" placeholder="Username" required><br>
            <input type="password" id="password" placeholder="Password" required><br><br>
            <a href="index.html" class="button" type="submit">Login</a>
            
                
        </form>
    </div>
    
</body>
</html>