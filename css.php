<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>

    input:focus{
        background-color:skyblue;
        color: white;
    }

    .intro::first-letter{
        background-color:red;
    }

    
a[target="_blank"]
 {
  background-color: red;
}

div {
    background: red;
    border-bottom-left-radius:15px;
    padding-left: 5px; 
    position:relative;
}

div:hover {
    background: tomato;
    
    border-radius:15px 2px;
}

</style>
</head>
<body>

<div>This is a div element. It has some text.</div>

<a href="https://w3schools.com">w3schools.com</a>
  <a href="http://disney.com" target="_blank">Disney.com</a>
  <a href="http://wikipedia.org" target="_top">wikipedia.org</a>


<form>
  Name:
  <input type="text" name="fname">
  Age:
  <input type="text" name="age">
</form>
<pre> 

<p class="intro"> asdfasd asdf asa fsd asdf

    asdfa asd addslashesfa sd <a href="as"></a>
</p>
</pre>


</body>
</html>