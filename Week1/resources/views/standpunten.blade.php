<!DOCTYPE html>
<html lang="nl">

<head>
  <title>Home</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>

<body>
<div class="header">
    <p id="header_txt"> Verkiezingen</p>
  </div>
  <div class="nav">
  <a href="/home" class="menucolor">Home</a>
    <a href="/partijen" class="menucolor">Partijen</a>
    <a href="/themas" class="active menucolor">Themas</a>
    </div>
  </div>

   <h2> De standpunten voor het thema {{$thema}}:</h2>

   @if($thema == "handeleneconomie")
   
    <p>10.000 voor iedere Nederlander belastingvrij. Dit stimuleert de koopkracht.</p>

   @else
   <ul>
   <li><P>Leraren krijgen van weer de ruimte om leraar te zijn. Het onderwijs nog beter te maken. Met minder werkdruk, extra onderwijsassistenten en een hoger salaris.</P></li>
   <li><p>Gratis kinderopvang voor alle kinderen. Zo leren en spelen kinderen op jonge leeftijd al samen.</p></li>
   <li><p>We willen al onze jonge talenten een zo goed mogelijke toekomst bieden en hen de kennis geven om ze zover mogelijk te laten komen in de maatschappij en hoe beter gestudeerd hoe meer profijt we hebben en ze de toekomst van Nederland zo mooi mogelijk kunnen maken.</p></li>
   </ul>
   @endif







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


  </style>