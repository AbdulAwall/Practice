
<?php $title ='Home';
include "header.php";
?>

  <main>

    <!-- It contains an article -->
    <article>
      <h2>Article heading</h2>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Donec a diam lectus. Set sit amet ipsum mauris. Maecenas congue ligula as quam viverra nec consectetur ant hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>

      <h3>Subsection</h3>

      <p>Donec ut librero sed accu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor.</p>

      <p>Pelientesque auctor nisi id magna consequat sagittis. Curabitur dapibus, enim sit amet elit pharetra tincidunt feugiat nist imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros.</p>

      <h3>Another subsection</h3>

      <p>Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum soclis natoque penatibus et manis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.</p>

      <p>Vivamus fermentum semper porta. Nunc diam velit, adipscing ut tristique vitae sagittis vel odio. Maecenas convallis ullamcorper ultricied. Curabitur ornare, ligula semper consectetur sagittis, nisi diam iaculis velit, is fringille sem nunc vet mi.</p>
    </article>

    <!-- the aside content can also be nested within the main content -->
    <aside>
      <h2>Related</h2>

      <ul>
        <li><a href="#">Oh I do like to be beside the seaside</a></li>
        <li><a href="#">Oh I do like to be beside the sea</a></li>
        <li><a href="#">Although in the North of England</a></li>
        <li><a href="#">It never stops raining</a></li>
        <li><a href="#">Oh well...</a></li>
      </ul>
    </aside>

  </main>




   <div> <h1 class="header"></h1> </div> 

    <img src="images/test1.jpg" alt="puthi" width="100px" height="100px">
    <br>
    <h2></h2>
    <br>
    <button>Change User</button>

    <label for="theme">Select Theme</label>
   <select id="theme"> 
        <option value="white">White</option>
        <option value="black">Black</option>
        <option value="cyen">Cyen</option>
        <option value="purple">Purple</option>
        <option value="gray">Light Gray</option>

    </select>

<br>
<label for="weather">Select the weather type today: </label>
    <select id="weather">
      <option value="">--Make a choice--</option>
      <option value="sunny">Sunny</option>
      <option value="rainy">Rainy</option>
      <option value="snowing">Snowing</option>
      <option value="overcast">Overcast</option>
    </select>
<br>
    <p id="wresult"> </p>

  <label for="month">Select month: </label>

<select id="month">
    <option id ="jan" value="January">January</option>
    <option value="February">February</option>
    <option value="March">March</option>
    <option value="April">April</option>
    <option value="May">May</option>
    <option value="June">June</option>
    <option value="July">July</option>
    <option value="August">August</option>
    <option value="September">September</option>
    <option value="October">October</option>
    <option value="November">November</option>
    <option value="December">December</option>
  </select>
  <h3></h3>
  <div> 
    <ul class="lss">
    <li></li>
</ul> 
</div>
 

  <p id="lists"></p>

<canvas width="200" height="200"></canvas>
<p id="gen"></p>
<button id="ball">Random Ball</button>

<!-- square calculation -->

<br>



<button id="calculate">Calculate</button>
<button id="clear">Clear</button>
<pre id="results"></pre>

<p id="frRes"></p>

<h2>JavaScript Strings</h2>

<p>Strings can be written with double or single quotes.</p>

<p class="js-result" id="demo"> </p>

<button onclick= "document.getElementById('random').innerHTML = myRandFunc(1,10)">random num</button>
<p id='random'> </p>
<p id="demo1"> </p>


<a class="positioned" href="#top">  <button>Top</button></a>

<script src="scripts/main.js"></script>

<?php include "footer.php"?>

</body>
</html>

