<html>
<head>
    
    <title>Fashion Feet</title>
    <link rel="stylesheet" href="style.css">
</head> 
<body>

<section>
        < <nav>
            <div class="logo">
                <h1>Fashion Feet</h1>
            
            </div>
            </div>

            <ul>
            <li><a href="home.php">Home</a></li>
                <li><a href="product.php">Products</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="review.php">Review</a></li>
                <li><a href="whishlist.php"><img src="images/logo2.png"width="30" height="30"></a><li>  
                <!--li><a href="addtocard.php"><img src="images/logo1.png"width="30" height="40"></a><li-->
                <li><a href="login.php"><img src="images/logo3.png"width="30" height="30"></a><li>
            </ul>
         </nav>
         <style>
            * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    
}
body {
    font-family: Arial, sans-serif;
}
/* Header */
header {
    background-color: white;
    color: rgb(0, 0, 0);
    padding: 10px 0;
    position: fixed;
    width: 100%;
    z-index: 100;
    box-shadow: 0 0 8px #6c14d0;
}
 
nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 5px auto;
    padding: 0 20px;
}
 
.logo {
    font-size: 1.5rem;
    font-weight: bold;
    color: #40b736;
}
 
.nav-links {
    list-style: none;
    display: flex;
}
 
.nav-links li {
    margin-right: 20px;
}
 
.nav-links a {
    color: rgb(0, 0, 0);
    padding: 10px;
    font-weight: bold;
    text-decoration: none;
}
 
.nav-links a:hover {
    background-color: #40b736;
    border-radius: 4px;
    color: white;
}
 
/* About Section */
.about {
    
    background-image: url(image/bg1.png);
    padding: 100px 0 20px 0;
    text-align: center;
}
 
.about h1 {
    font-size: 2.5rem;
    margin-bottom: 20px;
}
 
.about p {
    font-size: 1rem;
    color: #323030;
    max-width: 800px;
    margin: 0 auto;
}
 
.about-info {
    margin: 2rem 2rem;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: left;
}
 
.about-img {
    width: 20rem;
    height: 20rem;
 
}
 
.about-img img {
    width: 100%;
    height: 100%;
    border-radius: 5px;
    object-fit: contain;
}
 
.about-info p {
    font-size: 1.3rem;
    margin: 0 2rem;
    text-align: justify;
}
 
button {
   
    border: none;
    outline: 0;
    padding: 10px;
    margin: 2rem;
    font-size: 1rem;
    color: white;
     background: linear-gradient(to right, #c72092 , #6c14d0);
    text-align: center;
    cursor: pointer;
    width: 15rem;
    border-radius: 4px;
}
 
button:hover {
   
    background: linear-gradient(to right, #c72092 , #6c14d0);
}
 

 

            </style>
         <section class="about">
        <h1>About Us</h1>
        <div class="about-info">
            <div class="about-img">
                <img src=images/shoes4.png>
            </div>
            <div>
               <p>' Fashion Feet '- Sneakers for Everyone
                  For each Sneakers sweethearts out there, Fashion Feet 
                  offers the one-stop goal to pick the correct match of footwear. 
                  To satisfy the affection for sneakers, we offer heaps of alternatives 
                  from driving footwear marks, all under one rooftop. Gone are the days when you 
                  needed to go from store to store to locate the correct style and size for yourself.
                  At ' Fashion Feet ', you can locate a vast accumulation of 
                  dashing footwear in all sizes and styles, all inside a couple of snaps.</p>
                <button>Read More...</button>
            </div>
        </div>
    </section>
</body>
</html>
