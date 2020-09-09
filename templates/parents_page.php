<?php /* Template Name: Parents page*/ get_header(); ?>
<?php $field_data = get_post_meta(get_the_ID()); 
      $left = $field_data['blok1'][0];
      $center = $field_data['blok2'][0];
      $right = $field_data['blok3'][0];
      $header1 = $field_data['header1'][0];
      $header2 = $field_data['header2'][0];
      $header3 = $field_data['header3'][0];
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
    
    
            <div class = "row green">
                <div class = "text-center col-lg-12"><h2 class = "  dark-color">Spørgejørgen på erhvervsuddannelse </h2>
                <a href = "https://forms.gle/Mb5ysbTBNWwGos4VA" class  = "btn"><p class="text-uppercase button-text ">Test din viden før arrangementet > </p></a>
               <br/><br/> <a href = "https://forms.gle/SazhFe8rZ3KtGoPq9" class  = "btn"><p class="text-uppercase button-text ">Test din viden efter arrangementet > </p></a>
                </div>
                
                </div>
                
            </div>
        <br/>
        
        
        </div>
        <div class = "sponser_partner_container">
           <div class = "container">
         <div class = "row">
          <div class = "col-sm-4"></div>
           <div class = "col-sm-2"><img class = "img-responsive" src = "/wp-content/themes/projekt-tema-ny/partnerlogoer/nordea-fonden.png" width = "150" /> </div>
            <div class = "col-sm-2"><img class = "img-responsive" src = "/wp-content/themes/projekt-tema-ny/partnerlogoer/UU-Danmark-logo.png" width = "150" /></div>
      
            <div class = "col-sm-4"></div>

          </div> 
         </div><br/>
         
         <div class = "container">
         <div class = "row">
          <div class = "col-sm-1"></div>
           <div class = "bottom-margin col-sm-2 mb-5"><img class = "img-responsive" src = "/wp-content/themes/projekt-tema-ny/partnerlogoer/Dansk-Byggeri-logo_net.jpg" width = "150" /> </div>
            <div class = " bottom-margin col-sm-2 mb-5"><img class = "img-responsive" src = "/wp-content/themes/projekt-tema-ny/partnerlogoer/DE_logo_2016.jpg" width = "150"  /> </div>
             <div class = " bottom-margin left-margin col-sm-2 mb-5"><img class = "img-responsive" src = "/wp-content/themes/projekt-tema-ny/partnerlogoer/lf-logo-positiv.png" width = "150"  /> </div>
              <div class = " bottom-margin col-sm-2 mb-5"><img class = "img-responsive" src = "/wp-content/themes/projekt-tema-ny/partnerlogoer/logo-danske-maritime-Dansk.jpg" width = "150"  /> </div>
            <div class = " bottom-margin col-sm-2 mb-5"><img class = "img-responsive" src = "/wp-content/themes/projekt-tema-ny/partnerlogoer/Plastindustrien-logo-for-web-1.png" width = "150"  /> </div>
            <div class = " col-sm-1 "></div>

          </div> 
         </div>
</div>
    </body>
    </html>