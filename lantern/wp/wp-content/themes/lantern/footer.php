<footer>
<?php include 'testimonial.php'; ?>
	   <div class="footer">
     <div class="container">
     <div class="row">
     <div class="col-sm-5">
     <h4>Lantern Creative</h4>
     <hr>
     <p>A small creative-minded agency with a focus on projects that shift paradigms and push the realm of what is possible.
</p>

    </div>
  
    <div class="col-sm-3 col-sm-offset-1">

    <h6>Find Something</h6>
    <hr>
    <div class="row">
   <div class="col-sm-6">
            <?php if( dynamic_sidebar( 'widget_one' ) ): ?>
            <?php endif; ?>
          </div>
          <div class="col-sm-6">
            <?php if( dynamic_sidebar( 'widget_two' ) ): ?>
            <?php endif; ?>
          </div>
    </div>
    </div>
     <div class="col-sm-3 ">
    <h6>Get in Touch</h6>
    <hr>
    <li>phone: 778-233-3552</li>
    <li>email: info@lantern.cr</li>
    </div>
    
  
      
  
      </div><br><br><div class="pull-left">      <p>&copy; Lantern Creative LCC. 2014. We are located in beautiful Vancouver, British Columbia</p></div>
      </div>
    </footer>
















<?php wp_footer(); ?>
<script>

$.fn.popover.Constructor.prototype.getCalculatedOffset = function (placement, pos, actualWidth, actualHeight) {
    return  placement == 'bottom'? { top: pos.top + pos.height, left: pos.left  }:
            placement == 'top'? { top: pos.top - actualHeight, left: pos.left + pos.width / 2 -actualWidth / 2 }:
            placement == 'left'? { top: pos.top + pos.height / 2, left: pos.left - actualWidth }:
            { top: pos.top + pos.height / 2, left: pos.left + pos.width };
};

  $(".tag").popover({
    template: '<div class="popover animated flipInX" style="margin-left:-30px;margin-top:-1px;"><div class="popover-inner"><div class="col-xs-2"><span class="glyphicon glyphicon-ok" style="font-size:30px;color:#fff;top:14px;left:15px "></span></div><div class="col-xs-10"><h3 class="popover-title"></h3><div class="popover-content" style ="color:rgba(255,255,255,0.8);"><p></p></div></div></div></div>',
    animation: false
  
  });


</script>
  <script src="/lantern/js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
</body>
</html>