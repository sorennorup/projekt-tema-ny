<?php /* Template Name: Parents page*/ get_header(); ?>
<?php $field_data = get_post_meta(get_the_ID()); 
      $left = $field_data['blok_1'][0];
      $center = $field_data['blok_2'][0];
      $right = $field_data['blok_3'][0];
?>

<div class = "container-fluid">
<blockquote class = "blockquote wp-block-quote header-quote text-center">    
               <p>Fortæl mig noget, og jeg vil glemme det.
  Vis mig en ting, og jeg husker det måske. 
  Giv mig en oplevelse, og jeg glemmer det aldrig </br>
  - Søren Kierkegaard</p>
  
</blockquote>
            
            <div class = "row nopadding">
               <div class=" first-col col-lg-4">
                   <h2 class = "text-uppercase">Hvorfor?</h2>
                    <p>
                        <?php echo $left?>
</p>
                    <div class = "readmore-block">
                      <a href = "https://ungeipraksis.dk/hvorfor/" class = "btn padding-btm center  btn-lg">læs mere</a>
                    </div>
               </div>
               
               <div class="second-col col-lg-4">
                   <h2 class = "text-uppercase">Hvad?</h2>
                   <p>
                    <?php echo $center;?>

                   
                   </p>
                   <div class = "readmore-block">
                      <a href = "https://ungeipraksis.dk/hvad/" class = "btn padding-btm btn-lg">læs mere</a>
                    </div>
                   

               </div>
                
                <div class="third-col col-lg-4">
                    <h2 class = "text-uppercase">Hvordan?</h2>
                    <p>
                      <?php echo $right;?>
                    </p>
                    <div class = "readmore-block">
                      <a href = "https://ungeipraksis.dk/hvordan/" class = "btn padding-btm btn-lg">læs mere</a>
                    </div>
 
                </div>
                  
            </div>
           <div class = "row one-col">
            
                 <!-- <h3 class = "text-uppercase dark-color text-center">Rollemodel film</h3>
                
                <div class = "col-lg-6"><iframe width="100%" height="50%" src="https://www.youtube.com/embed/VQarW4Bz05U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div class = "col-lg-6"><iframe width="100%" height="50%" src="https://www.youtube.com/embed/oZWXLQwTOts" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
               -->
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
     
        
        
        
        
    </body>
    


<?php get_footer(); ?>
