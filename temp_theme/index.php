<?php
    //HOLDS ALL THE HEADER, TITLE AND MAIN MENU
    if(!file_exists('includes/config.php')){
        header('location:includes/install.php');
    }
    
    include('menu.php');
?>
 <ul>
            <li><a href="<?php echo SITE_ROOT;?>" id="current">Home</a></li>
            <li><a href="quest_search.php">Quest</a></li>
            <li><a href="creature_search.php">Creature</a></li>
            <li><a href="item_search.php">Items</a></li>
            <li><a href="<?php echo SITE_ROOT;?>">Misc</a></li>
            <li><a href="<?php echo SITE_ROOT;?>">ID Calc</a></li>
        </ul>
    </div>
</div>
<div id="content-wrap">
  <div id="content">
    
    <!--
    <div id="sidebar">
      <div class="sidebox">
        <h1>Sidebar Menu</h1>
        <ul class="sidemenu">
          <li><a href="http://www.free-css.com/" class="top">Home</a></li>
          <li><a href="#TemplateInfo">TemplateInfo</a></li>
          <li><a href="#SampleTags">Sample Tags</a></li>
          <li><a href="http://www.free-css.com/">More Templates...</a></li>
          <li><a href="http://www.free-css.com/">Premium Templates</a></li>
        </ul>
      </div>
      <div class="sidebox">
        <h1>Sponsors</h1>
        <ul class="sidemenu">
          <li><a href="http://www.free-css.com/" class="top">Dreamhost</a></li>
          <li><a href="http://www.free-css.com/">4templates</a></li>
          <li><a href="http://www.free-css.com/">TemplateMonster</a></li>
          <li><a href="http://www.free-css.com/">Fotolia.com</a></li>
          <li><a href="http://www.free-css.com/">Text Link Ads</a></li>
        </ul>
      </div>
      <div class="sidebox">
        <h1>Wise Words</h1>
        <p>&quot;Our life is what our thoughts make it.&quot;</p>
        <p class="align-right">- Marcus Aurelius</p>
      </div>
      <div class="sidebox">
        <h1>Support Styleshout</h1>
        <p>If you are interested in supporting my work and would like to contribute, you are welcome to make a small donation through the donate link on my website - it will be a great help and will surely be appreciated.</p>
      </div>
    </div>
    //-->
    
    <div id="main"> <a name="TemplateInfo"></a>
      <h1>Welcome to the <span class="gray">T-Cata: Cataclysm Database Editor</span></h1>
      <p><strong>T-Cata</strong> is a free, php project created by <strong>r.scorpio</strong>. This work is distributed under the <a rel="license" target="_blank" href="http://creativecommons.org/licenses/by/2.5/"> Creative Commons Attribution 2.5 License</a>, which means that you are free to use and modify it for any purpose. All I ask is that you leave any reference to myself in the credits as original creator.</p>
      <p>The "skeletal" design is based off the QUICE Mangos DB editor</p>
      <p>Good luck and I hope you find this tool useful!</p>
      
      <center>
        <h3>ACKNOWLEDGEMENTS</h3>
            PHP Design and Creation<br/>
                <a href="">R.Scorpio</a><p/>
            Cataclysm/Database Server Engine:<br/>
            <a href="http://projectskyfire.org" target="_blank">Project SkyFire</a>
            <p/>
            T'Cata Design Inspired by<br/>
            <a href="http://quice.indomit.ru" target="_blank">QUICE</a> <br> a MaNGOs Database Editor<p/>
    
            Dedicated to my son
          </center>
      <!--
      
      <a name="SampleTags"></a>
      <h1>Sample Tags</h1>
      <h3>Code</h3>
      <p><code> code-sample { <br />
        font-weight: bold;<br />
        font-style: italic;<br />
        } </code></p>
      <h3>Example Lists</h3>
      <ol>
        <li><span>example of ordered list</span></li>
        <li><span>uses span to color the numbers</span></li>
      </ol>
      <ul>
        <li><span>example of unordered list</span></li>
        <li><span>uses span to color the bullets</span></li>
      </ul>
      <h3>Blockquote</h3>
      <blockquote>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat....</p>
      </blockquote>
      <h3>Image and text</h3>
      <p> <a href="http://www.free-css.com/"><img src="imagesx/firefox-gray.jpg" width="100" height="121" alt="firefox-gray"  class="float-left" /></a> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam. Cras fringilla magna. Phasellus suscipit, leo a pharetra condimentum, lorem tellus eleifend magna, eget fringilla velit magna id neque. Curabitur vel urna. In tristique orci porttitor ipsum. Aliquam ornare diam iaculis nibh. Proin luctus, velit pulvinar ullamcorper nonummy, mauris enim eleifend urna, congue egestas elit lectus eu est. </p>
      <h3>Example Form</h3>
      <form action="http://www.free-css.com/">
        <p>
          <label>Name</label>
          <input name="dname" value="Your Name" type="text" size="30" />
          <label>Email</label>
          <input name="demail" value="Your Email" type="text" size="30" />
          <label>Your Comments</label>
          <textarea rows="5" cols="5"></textarea>
          <br />
          <input class="button" type="submit" />
        </p>
      </form>
      <br />
    </div>
  </div>
</div>
<div id="footer">
  <div id="footer-content">
    <div class="col float-left">
      <h2>Site Partners</h2>
      <ul>
        <li><a href="http://www.free-css.com/"><strong>Dreamhost</strong> - Excellent Webhosting at $7.95/mo</a></li>
        <li><a href="http://www.free-css.com/"><strong>4templates</strong> - Low Cost Hi-Quality Templates</a></li>
        <li><a href="http://www.free-css.com/"><strong>TemplateMonster</strong> - Best templates on the net!</a></li>
        <li><a href="http://www.free-css.com/"><strong>Fotolia</strong> - Free stock imagesx or from $1</a></li>
        <li><a href="http://www.free-css.com/"><strong>Text Link Ads</strong> - Easiest. Money. Ever.</a></li>
      </ul>
    </div>
    <div class="col float-left">
      <h2>Links</h2>
      <ul>
        <li><a href="http://www.free-css.com/"><strong>openwebdesign.org</strong></a></li>
        <li><a href="http://www.free-css.com/"><strong>OSWD.org</strong></a></li>
        <li><a href="http://www.free-css.com/"><strong>zeroweb.org</strong></a></li>
        <li><a href="http://www.free-css.com/"><strong>Alistapart</strong></a></li>
        <li><a href="http://www.free-css.com/"><strong>CSS Remix</strong></a></li>
      </ul>
    </div>
    <div class="col2 float-right">
      <p> &copy; copyright 2006 <strong>Your Company Name</strong><br />
        Design by: <a href="http://www.free-css.com/"><strong>styleshout</strong></a> &nbsp; &nbsp; Valid <a href="http://jigsaw.w3.org/css-validator/check/referer"><strong>CSS</strong></a> | <a href="http://validator.w3.org/check/referer"><strong>XHTML</strong></a> </p>
      <ul>
        <li><a href="http://www.free-css.com/"><strong>Home</strong></a></li>
        <li><a href="http://www.free-css.com/"><strong>Sitemap</strong></a></li>
        <li><a href="http://www.free-css.com/"><strong>RSS Feed</strong></a></li>
      </ul>
      //-->
      <div id="footer">
    </div>
  </div>
</div>
</body>
</html>
