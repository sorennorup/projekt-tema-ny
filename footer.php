			<!-- footer -->
			<footer> 
  
    <div class = "row">
      <div  class="col-lg-4 text-center">  <p><br/>&copy; UU DANMARK 2018</p> </div>
      <div  class="col-lg-4 text-center"> <br/>For mere info. EUK@kl.dk</div>
      <div  class="col-lg-4 text-center"> <br/><a href = "https://uudanmark.dk/persondatapolitik/">Læs vores persondatapolitik</a></div>
    </div>
   
</footer>
			<!-- /footer -->
	<!-- Show the admin links if user is loggedin-->
	<div class = "admin-links">
		<?php if(is_user_logged_in()){ ?>
		<a href = "<?php echo admin_url();?>">Kontrolpanel</a><?php echo ' - ' ?>
		<?php edit_post_link("Rediger"); echo ' - ' ?>
		<a href = "<?php echo admin_url('post-new.php?post_type=page');?>">Nyt indlæg</a>
		<?php }?>
	</div>


	</body>
</html>
