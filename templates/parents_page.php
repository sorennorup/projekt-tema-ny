<?php /* Template Name: Parents page*/ get_header(); ?>
<?php $field_data = get_post_meta(get_the_ID()); 
      $left = $field_data['_text_box1'][0];
      $center = $field_data['_text_box2'][0];
      $right = $field_data['_text_box3'][0];
      $header1 = $field_data['_header_1'][0];
      $header2 = $field_data['_header_2'][0];
      $header3 = $field_data['_header_3'][0];
?>

<div class = "container-fluid">
    <div class = "quote-wrapper">
    <blockquote class = "center blockquote wp-block-quote header-quote background">    
        <i> Fortæl mig noget, og jeg vil glemme det.
            Vis mig en ting, og jeg husker det måske. 
            Giv mig en oplevelse, og jeg glemmer det aldrig </br>
            - Søren Kierkegaard </i>
    </blockquote>
    </div>
    <div class = "row nopadding">
        <div class=" first-col col-lg-4">
            <h2 class = "text-uppercase">
                <?php echo $header1; ?>
            </h2>
             <p>
                <?php echo $left?>
            </p>
            <div class = "readmore-block">
                <a href = "https://ungeipraksis.dk/hvorfor/" class = "btn padding-btm center  btn-lg">læs mere</a>
            </div>
        </div>
               
        <div class="second-col col-lg-4">
            <h2 class = "text-uppercase">
             <?php echo $header2; ?></h2>
             <p>
             <?php echo $center;?>
             </p>
            <div class = "readmore-block">
                <a href = "https://ungeipraksis.dk/hvad/" class = "btn padding-btm btn-lg">læs mere</a>
            </div>
        </div>
                
        <div class="third-col col-lg-4">
            <h2 class = "text-uppercase">
                <?php echo $header3; ?>
            </h2>
            <p>
                <?php echo $right;?>
            </p>
            <div class = "readmore-block">
                <a href = "https://ungeipraksis.dk/hvordan/" class = "btn padding-btm btn-lg">læs mere</a>
            </div>
        </div>
                  
    </div>
        <br/>
        
        
        </div>
        <div class = "sponser_partner_container">
           <div class = "container">
         <div class = "row">
          <div class = "col-sm-4"></div>
           <div class = "col-sm-2"><img class = "img-responsive" src = "<?php echo get_template_directory_uri();?>/partnerlogoer/nordea-fonden.png" width = "150" /> </div>
            <div class = "col-sm-2"><img class = "img-responsive" src = "<?php echo get_template_directory_uri();?>/partnerlogoer/UU-Danmark-logo.png" width = "150" /></div>
      
            <div class = "col-sm-4"></div>

          </div> 
         </div><br/>
         
         <div class = "container">
         <div class = "row">
          <div class = "col-sm-1"></div>
           <div class = "bottom-margin col-sm-2 mb-5"><img class = "img-responsive" src = "<?php echo get_template_directory_uri();?>/projekt-tema-ny/partnerlogoer/Dansk-Byggeri-logo_net.jpg" width = "150" /> </div>
            <div class = " bottom-margin col-sm-2 mb-5"><img class = "img-responsive" src = "<?php echo get_template_directory_uri();?>/partnerlogoer/DE_logo_2016.jpg" width = "150"  /> </div>
             <div class = " bottom-margin left-margin col-sm-2 mb-5"><img class = "img-responsive" src = "<?php echo get_template_directory_uri();?>/partnerlogoer/lf-logo-positiv.png" width = "150"  /> </div>
              <div class = " bottom-margin col-sm-2 mb-5"><img class = "img-responsive" src = "<?php echo get_template_directory_uri();?>partnerlogoer/logo-danske-maritime-Dansk.jpg" width = "150"  /> </div>
            <div class = " bottom-margin col-sm-2 mb-5"><img class = "img-responsive" src = "<?php echo get_template_directory_uri();?>/partnerlogoer/Plastindustrien-logo-for-web-1.png" width = "150"  /> </div>
            <div class = " col-sm-1 "></div>

          </div> 
         </div>
</div>
    <?php  get_footer();?>