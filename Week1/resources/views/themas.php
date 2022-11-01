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



<h2>Themas</h2>

<table>
  <tr>
    <th>1</th>
    <th>Handel en economie</th>
    <th><a href="standpunten/handeleneconomie"><button>Standpunten</button></a></th>
  </tr>
  <tr>
    <td>2</td>
    <td>Onderwijs</td>
    <th><a href="standpunten/onderwijs"><button>Standpunten</button></a></th>
  </tr>
  <!-- <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <th><button>test</button></th>
  </tr> -->
  <tr>
 
</table>


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






table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
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





















.dropbtn {
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

.dropdown:hover .dropdown-content {display: block;}

</style>

