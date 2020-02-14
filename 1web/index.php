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
        
/*index*/
        .contents{
/*            display: flex;*/
            background-color: #ccc;
/*            font-size: 3rem;*/
        }
        
        .contents ul{
            display: flex;
        }
        
        .contents ul li{
            flex: 1;
            padding: 5%;
        }
        .contents p{
            font-style: italic;            
        }
        .recipe_title{
            font-size: 2rem;
        }
        
        
    </style>
</head>

<body>
  <header>      
  <?php include 'common/header.php'?>
  </header>   
  <section>
      <div class="contents">
        <div class="recipe_title">김풍 레시피
        <button>더보기</button>
        </div>         
          <ul>
              <li><img src="images/recipe_1.png" alt="">
              <p>김풍의 짜투리타타, 냉장고를 부탁해 레시피</p>
              <div class="title">
                  title
              </div>
              </li>   
            <li><img src="images/recipe_1.png" alt="">
              <p>김풍의 짜투리타타, 냉장고를 부탁해 레시피</p>
              <div class="title">
                  title
              </div>
              </li>
              <li><img src="images/recipe_1.png" alt="">
              <p>김풍의 짜투리타타, 냉장고를 부탁해 레시피</p>
              <div class="title">
                  title
              </div>
              </li>
              <li><img src="images/recipe_1.png" alt="">
              <p>김풍의 짜투리타타, 냉장고를 부탁해 레시피</p>
              <div class="title">
                  title
              </div>
              </li>
              <li><img src="images/recipe_1.png" alt="">
              <p>김풍의 짜투리타타, 냉장고를 부탁해 레시피</p>
              <div class="title">
                  title
              </div>
              </li>            
          </ul>
      </div>      
  </section>
  <footer>
      footer
  </footer>
</body>

</html>