<?php
	require('header.php');
?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
	  <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
	  <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

<!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" style="margin-bottom:-1%;">
      <div class="item active">
        <img src="image/gurney.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Gurney</h3>
          <p>Photographed by Tan Ee Jack.</p>
        </div>      
      </div>

      <div class="item">
        <img src="image/komtar.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Komtar</h3>
          <p>Photographed by Tan Ee Jack.</p>
        </div>      
      </div>
	  
	  <div class="item">
        <img src="image/sq.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Straits Quay</h3>
          <p>Photographed by Tan Ee Jack.</p>
        </div>      
      </div>
	  
	  <div class="item">
        <img src="image/roundabout.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Queensbay Roundabout</h3>
          <p>Photographed by Tan Ee Jack.</p>
        </div>      
      </div>
	  
	  <div class="item">
        <img src="image/queens.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Queensbay Area</h3>
          <p>Photographed by Tan Ee Jack.</p>
        </div>      
      </div>
    </div>

<!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  

</div>
<?php
	require('footer.php');
?>