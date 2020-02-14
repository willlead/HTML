<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>MyRecipe - main</title>    
    <meta name="viewport" content="width=device-width; initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="css/common.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <style >
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
        .top>img{
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
            display: flex;
/*            position: relative;*/
        }
        ul li{
/*            position: absolute;*/
            /*            width: 33%;*/
            
            text-align: center;
            flex: 1;            
/*            li 기본 꾸미기 없애기*/
            list-style: none; 
/*            height: 50px;*/
            
        }
        .search{
            float: right;

        }
    </style>
</head>
<body>
  <header>      
  <?php include 'common/header.php'?>
  </header>   
</body>
</html>