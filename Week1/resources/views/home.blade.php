<!DOCTYPE html>
<html lang="nl">

<head>
  <title>Home</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/css/test.css">
</head>

<body>
<div class="header">
    <p id="header_txt">Verkiezingen</p>
  </div>
  <div class="nav">
  <a href="home" class="active menucolor">Home</a>
    <a href="partijen" class="menucolor">Partijen</a>
    <a href="themas" class="menucolor">Themas</a>
    <!-- <div class="dropdown" >
    <div class="dropdown-content"> -->
  </div>
  </div>
  </div>

  <div id="home">
    <h1>Home</h1>
    <p>In Nederland worden er verkiezingen gehouden voor de Tweede Kamer, de Provinciale Staten en de gemeenteraad (in Amsterdam en Rotterdam ook voor bestuurscommissies respectievelijk gebiedscommissies). Daarnaast kiezen we ook nog de Nederlandse vertegenwoordigers in het Europees Parlement en de algemene besturen van de waterschappen. Het kabinet (ministers en staatssecretarissen) wordt niet gekozen. Na de Tweede Kamerverkiezingen wordt wel geprobeerd een kabinet te vormen dat kan rekenen op de steun van een meerderheid in de Tweede Kamer.</p>
  </div>

  <style>
    html
{
    background-color: #ecf5ff;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
    padding: 0;
  
}


.header {
    text-align: center;
    background: lightblue;
    font-size: 30px;
    overflow: hidden;
    height: 100px;
    margin-top: -10px;
    margin-left: -10px;
    margin-right: -10px;
    align-items: center;
    justify-content: space-between;

}


#header_txt
{
    color: white;
}


.nav {
    background-color: gray;
    overflow: hidden;
    height: 120px;
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-wrap: wrap;
    font-size: 20px;
    margin-left: -10px;
    margin-right: -10px;
    margin-top: -10px;
}





.menucolor {
    color: white;
    text-decoration: none;
}


a:hover {
    color: lightblue
}

.active {
    color: blue;
}












/* .dropbtn {
  color: white;
  font-size: 20px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 100px;
  height: 30px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  font-size: 15px;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  height: 30px;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;} */





@media only screen and (max-width: 600px) {
    .nav > a 
    {
        width: 100%;
    }
        .nav {
            flex-direction: row;
            height: auto;
        }


}


  </style>