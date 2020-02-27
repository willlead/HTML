<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>MyRecipe - main</title>    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="css/common.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <style >
/*common*/
        *{
            margin: 0;
            padding: 0;                  
        }

        a{
            color: #000;
            text-decoration:none;
        }
        
        .top{
            position: relative;
        }
        .top img{
            width: 100%;
        }
        
        .top p{
            color: #fff;
/*            rem = root em, 1rem = 16px*/
            font-stretch: bold;
            font-size: 3rem;
/*            부모의 위치에 따라 정해진다는 것은 absolute*/
            position: absolute;
/*            반응형 웹은 무조건 %*/            
/*            top, left 살짝 위로, 왼쪽으로 이동되야하는데. 그 공식은? transform*/
            top: 50%;
            left: 50%;
/*            transform  가운데 잡기 공식이므로 암기*/
            transform: translate(-50%, -50%);                
        }
        
        ul{            
            width: 100%;
        }
        
        ul li{            
            list-style: none;
        }

        .nav{
            background-color: orangered;             
        }
        .nav ul{
            display: flex;
        }
        .nav ul li{
            flex: 1;
            text-align: center;
        }
        .nav ul li:hover{
            background-color: greenyellow;
        }
        footer{
            text-align: center;
            background-color: #bbb;
        }
        
        
/*index*/
        div.contents{            
            background-color: greenyellow;
            width: 100%;
            height: auto;
            text-align: center;
        }            
        div.category_title{
            text-align: left;
        }
        div.recipe{
           margin: 1%;
            display: inline-block;
            
            width: 180px;
        }
        
        div.recipe:hover{
            background-color: aliceblue;
        }
        
        div.recipe img{
            width: 100%;
            height: auto;
        }
        div.desc{
            padding: 15px;
            text-align: center;
        }
        
    </style>
</head>

<body>
  <header>      
  
  <div class="top">
    <img src="images/22.jpg" alt="">
    <p>MY RECIPE</p>
</div>
<div class="search">
    <input type="search">
    <input type="button" value="검색">
</div>
<div class="nav">
    <ul>
        <li><a href="#" style="color:black;">홈</a></li>
        <li><a href="index.php">인기 레시피</a></li>
        <li><a href="m03_01_board.php">게시판</a></li>
    </ul>       
</div>
  </header> 
    
  <section>
      <div class="contents">
    
       <div class="category">
       <div class="category_title">
        <form action="#" method="post">
           <p>
                김풍 레시피
                <input type="button" value="더보기"> 
            </p>
       </form>
       </div>
        <div class="recipe">
          <a href="#">
           <img src="images/recipe_1.png" alt="" width="600" height="400">
           </a>
            <div class="desc">김풍의 짜투리타타, 냉장고를 부탁해 레시피</div>                     
        </div>
              <div class="recipe">
          <a href="#">
           <img src="images/recipe_1.png" alt="" width="600" height="400">
           </a>
            <div class="desc">김풍의 짜투리타타, 냉장고를 부탁해 레시피</div>                     
        </div>
              <div class="recipe">
          <a href="#">
           <img src="images/recipe_1.png" alt="" width="600" height="400">
           </a>
            <div class="desc">김풍의 짜투리타타, 냉장고를 부탁해 레시피</div>                     
        </div>
              <div class="recipe">
          <a href="#">
           <img src="images/recipe_1.png" alt="" width="600" height="400">
           </a>
            <div class="desc">김풍의 짜투리타타, 냉장고를 부탁해 레시피</div>                     
        </div>
        <div class="recipe">
          <a href="#">
           <img src="images/recipe_1.png" alt="" width="600" height="400">
           </a>
            <div class="desc">김풍의 짜투리타타, 냉장고를 부탁해 레시피</div>                     
        </div>
       </div>
       
      </div>
  </section>
</body>

</html>