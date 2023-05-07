

    







  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/uikit.min.js"></script>
  <script src="assets/js/uikit-icons.min.js"></script>
  <script src="assets/js/main.js"></script>




  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  </body>


  
  <!-- <div id="shareModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title"> แชร์หน้านี้ </h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body ">
              <div class="text-center mt-2"> 
                  <a href="" target="_blank" data-js="facebook-share"> <img src="img/icon/facebook-icon.png" class="ico_social"></a>  
                  &nbsp;&nbsp;&nbsp;
                  <a href="https://lineit.line.me/share/ui?url=<?php echo $linkweb;?>" > <img src="img/icon/line-icon.png" class="ico_social"></a> 
              
                  <br>
                  <br>
              </div>
          </div>
      
        </div>
      </div>
    </div> -->

 

  <style type="text/css">  
    #map_canvas {  
        display: none; 
        width:550px;  
        height:500px;  
        margin:auto;   
    }  
    img.ico_social{
      width: 45px !important;
    }
    #shareModal  .modal-header button.close{
      position: absolute;
      top: 22px;
      right: 20px;
  }
  #shareModal h4.modal-title{
    text-align: center;
  }
  #shareModal .modal-header { 
    display: inline-block;
  }
  #shareModal{
    margin-top: 10%; 
  }
  .icon_sharebox{
    cursor: pointer;
  }
</style> 
 

<script type="text/javascript"  >
     var facebookShare = document.querySelector('[data-js="facebook-share"]');
     var linkweb = '<?php echo $linkweb;?>';
    facebookShare.onclick = function(e) {
      e.preventDefault();
      var facebookWindow = window.open('https://www.facebook.com/sharer/sharer.php?u=' +linkweb, 'facebook-popup', 'height=350,width=600');
      if(facebookWindow.focus) { facebookWindow.focus(); }
        return false;
    }
  </script>
<script>
  function setImgActive(setactive){

    
    // $('.box_img').removeAttr('src'); 
    // $('.box_img').attr('src' , 'img/delete_box.png'); 
    // $('#box_img'+setactive ).attr('src', 'img/active_box.png');
  
    $('.box_img').removeAttr('src');  
    var x = document.getElementsByClassName("box_img");
    var i;
    var y = 1;
    for (i = 0; i < x.length; i++) { 
      console.log(i); 
      // $('#box_img'+[y]).attr('src' , 'img/number_point/number_'+y+'_d.png'); 
      $('#box_img'+[y]).attr('src' , 'img/number_point/number_'+y+'.png'); 
      $('#box_img'+[y]).css("opacity","0.5");
      y++;
    }
    $('#box_img'+setactive ).attr('src', 'img/number_point/number_'+setactive+'.png');
    $('#box_img'+setactive ).css("opacity","1.0");

    $('.box_content').removeClass('box_active');
    $('.box_content').addClass("box_none"); 

    $('#box_content_'+setactive).removeClass('box_none'); 
    $('#box_content_'+setactive).addClass("box_active");  


    // $("#box_tourway").focus();
    // var top = document.getElementById(h).offsetTop; //Getting Y of target element
    // window.scrollTo(0, top);   

    window.scrollTo({
      top: 400,
      // left: 100,
      behavior: 'smooth'
    });

  }

  //text_tab4
</script>

<script>

    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      captionText.innerHTML = dots[slideIndex-1].alt;
    }
    
</script>


<script>
// function setImgActive(setactive){

// $('.box_img').removeAttr('src');
// $('.box_img').attr('src' , 'img/delete_box.png');

// $('#box_img'+setactive ).attr('src', 'img/active_box.png');


// $('.box_content').removeClass('box_active');
// $('.box_content').addClass("box_none"); 


// $('#box_content_'+setactive).removeClass('box_none'); 
// $('#box_content_'+setactive).addClass("box_active");  
   

// }


$(document).ready(function(){ 
  

    /*
          $('#box_1').click(function(){

              // alert('test');

            $('#box_img1').attr('src', 'img/number_point/number_1.png');
 

 
            $('#box_img2').removeAttr('src', 'img/number_point/number_1.png');
            $('#box_img2').attr('src', 'img/number_point/number_2_d.png');


            $('#box_img3').attr('src', 'img/number_point/number_3_d.png');

            $('#box_img4').removeAttr('src', 'img/number_point/number_4.png');
            $('#box_img4').attr('src', 'img/number_point/number_4_d.png');

            $('#box_img5').removeAttr('src', 'img/number_point/number_5.png');
            $('#box_img5').attr('src', 'img/number_point/number_5_d.png');

            $('#box_img6').removeAttr('src', 'img/number_point/number_6.png');
            $('#box_img6').attr('src', 'img/number_point/number_6_d.png');

            $('#box_img7').removeAttr('src', 'img/number_point/number_7.png');
            $('#box_img7').attr('src', 'img/number_point/number_7_d.png');

            $('#box_img8').removeAttr('src', 'img/number_point/number_8.png');
            $('#box_img8').attr('src', 'img/number_point/number_8_d.png');

            $('#box_img9').removeAttr('src', 'img/number_point/number_9.png');
            $('#box_img9').attr('src', 'img/number_point/number_9_d.png');




              ////////////////////////////////////////////////// 
              ////////////////////////////////////////////////// 
              
              $('#box_content_1').removeClass("box_active");   
              $('#box_content_2').addClass("box_none"); 
              $('#box_content_3').addClass("box_none"); 
              $('#box_content_4').addClass("box_none"); 
              $('#box_content_5').addClass("box_none"); 
              $('#box_content_6').addClass("box_none"); 
              $('#box_content_7').addClass("box_none"); 
              $('#box_content_8').addClass("box_none"); 
              $('#box_content_9').addClass("box_none"); 


              $('#box_content_1').removeClass("box_none");   


 
              ////////////////////////////////////////////////// 
              ////////////////////////////////////////////////// 
           
        });  


        $('#box_2').click(function(){

            // alert('test');

            $('#box_img1').removeAttr('src', 'img/number_point/number_1.png');
            $('#box_img1').attr('src', 'img/number_point/number_1_d.png');

            $('#box_img2').attr('src', 'img/number_point/number_2.png');


            $('#box_img4').removeAttr('src', 'img/number_point/number_4.png');
            $('#box_img4').attr('src', 'img/number_point/number_4_d.png');

            $('#box_img5').removeAttr('src', 'img/number_point/number_5.png');
            $('#box_img5').attr('src', 'img/number_point/number_5_d.png');

            $('#box_img6').removeAttr('src', 'img/number_point/number_6.png');
            $('#box_img6').attr('src', 'img/number_point/number_6_d.png');

            $('#box_img7').removeAttr('src', 'img/number_point/number_7.png');
            $('#box_img7').attr('src', 'img/number_point/number_7_d.png');

            $('#box_img8').removeAttr('src', 'img/number_point/number_8.png');
            $('#box_img8').attr('src', 'img/number_point/number_8_d.png');

            $('#box_img9').removeAttr('src', 'img/number_point/number_9.png');
            $('#box_img9').attr('src', 'img/number_point/number_9_d.png');

            
 
            $('#box_img3').attr('src', 'img/number_point/number_3_d.png');

              ////////////////////////////////////////////////// 
              ////////////////////////////////////////////////// 
              
              $('#box_content_1').addClass("box_none"); 
              $('#box_content_3').addClass("box_none"); 
              $('#box_content_4').addClass("box_none"); 
              $('#box_content_5').addClass("box_none"); 
              $('#box_content_6').addClass("box_none"); 
              $('#box_content_7').addClass("box_none"); 
              $('#box_content_8').addClass("box_none"); 
              $('#box_content_9').addClass("box_none"); 


              $('#box_content_2').removeClass("box_none");
              $('#box_content_2').addClass("box_active");


 
              ////////////////////////////////////////////////// 
              ////////////////////////////////////////////////// 
           
        }); 


      
        $('#box_3').click(function(){

            // alert('test');

            $('#box_img1').removeAttr('src', 'img/number_point/number_1.png');
            $('#box_img1').attr('src', 'img/number_point/number_1_d.png');
 
            $('#box_img2').removeAttr('src', 'img/number_point/number_2.png');
            $('#box_img2').attr('src', 'img/number_point/number_2_d.png');

            $('#box_img4').removeAttr('src', 'img/number_point/number_4.png');
            $('#box_img4').attr('src', 'img/number_point/number_4_d.png');

            $('#box_img5').removeAttr('src', 'img/number_point/number_5.png');
            $('#box_img5').attr('src', 'img/number_point/number_5_d.png');

            $('#box_img6').removeAttr('src', 'img/number_point/number_6.png');
            $('#box_img6').attr('src', 'img/number_point/number_6_d.png');

            $('#box_img7').removeAttr('src', 'img/number_point/number_7.png');
            $('#box_img7').attr('src', 'img/number_point/number_7_d.png');

            $('#box_img8').removeAttr('src', 'img/number_point/number_8.png');
            $('#box_img8').attr('src', 'img/number_point/number_8_d.png');

            $('#box_img9').removeAttr('src', 'img/number_point/number_9.png');
            $('#box_img9').attr('src', 'img/number_point/number_9_d.png');



            $('#box_img3').attr('src', 'img/number_point/number_3.png');

              ////////////////////////////////////////////////// 
              ////////////////////////////////////////////////// 
              
              $('#box_content_1').addClass("box_none");
              $('#box_content_2').addClass("box_none");  
              $('#box_content_4').addClass("box_none"); 
              $('#box_content_5').addClass("box_none"); 
              $('#box_content_6').addClass("box_none"); 
              $('#box_content_7').addClass("box_none"); 
              $('#box_content_8').addClass("box_none"); 
              $('#box_content_9').addClass("box_none"); 




              $('#box_content_3').addClass("box_active");
              $('#box_content_3').removeClass("box_none"); 


 
              ////////////////////////////////////////////////// 
              ////////////////////////////////////////////////// 
           
      }); 


        $('#box_4').click(function(){

            // alert('test');

            $('#box_img1').removeAttr('src', 'img/number_point/number_1.png');
            $('#box_img1').attr('src', 'img/number_point/number_1_d.png');
 
            $('#box_img2').removeAttr('src', 'img/number_point/number_2.png');
            $('#box_img2').attr('src', 'img/number_point/number_2_d.png');

            $('#box_img3').removeAttr('src', 'img/number_point/number_3.png');
            $('#box_img3').attr('src', 'img/number_point/number_3_d.png');

            $('#box_img5').removeAttr('src', 'img/number_point/number_5.png');
            $('#box_img5').attr('src', 'img/number_point/number_5_d.png');

            $('#box_img6').removeAttr('src', 'img/number_point/number_6.png');
            $('#box_img6').attr('src', 'img/number_point/number_6_d.png');

            $('#box_img7').removeAttr('src', 'img/number_point/number_7.png');
            $('#box_img7').attr('src', 'img/number_point/number_7_d.png');

            $('#box_img8').removeAttr('src', 'img/number_point/number_8.png');
            $('#box_img8').attr('src', 'img/number_point/number_8_d.png');

            $('#box_img9').removeAttr('src', 'img/number_point/number_9.png');
            $('#box_img9').attr('src', 'img/number_point/number_9_d.png');



            $('#box_img4').attr('src', 'img/number_point/number_4.png');

              ////////////////////////////////////////////////// 
              ////////////////////////////////////////////////// 
              
              $('#box_content_1').addClass("box_none");
              $('#box_content_2').addClass("box_none"); 
              $('#box_content_3').addClass("box_none");  
              $('#box_content_5').addClass("box_none"); 
              $('#box_content_6').addClass("box_none"); 
              $('#box_content_7').addClass("box_none"); 
              $('#box_content_8').addClass("box_none"); 
              $('#box_content_9').addClass("box_none"); 



              $('#box_content_4').removeClass("box_none"); 
              $('#box_content_4').addClass("box_active");


 
              ////////////////////////////////////////////////// 
              ////////////////////////////////////////////////// 
           
      }); 


       $('#box_5').click(function(){

            // alert('test');

            $('#box_img1').removeAttr('src', 'img/number_point/number_1.png');
            $('#box_img1').attr('src', 'img/number_point/number_1_d.png');
 
            $('#box_img2').removeAttr('src', 'img/number_point/number_2.png');
            $('#box_img2').attr('src', 'img/number_point/number_2_d.png');

            $('#box_img3').removeAttr('src', 'img/number_point/number_3.png');
            $('#box_img3').attr('src', 'img/number_point/number_3_d.png');

            $('#box_img4').removeAttr('src', 'img/number_point/number_4.png');
            $('#box_img4').attr('src', 'img/number_point/number_4_d.png');

            $('#box_img6').removeAttr('src', 'img/number_point/number_6.png');
            $('#box_img6').attr('src', 'img/number_point/number_6_d.png');

            $('#box_img7').removeAttr('src', 'img/number_point/number_7.png');
            $('#box_img7').attr('src', 'img/number_point/number_7_d.png');

            $('#box_img8').removeAttr('src', 'img/number_point/number_8.png');
            $('#box_img8').attr('src', 'img/number_point/number_8_d.png');

            $('#box_img9').removeAttr('src', 'img/number_point/number_9.png');
            $('#box_img9').attr('src', 'img/number_point/number_9_d.png');



            $('#box_img5').attr('src', 'img/number_point/number_5.png');

              ////////////////////////////////////////////////// 
              ////////////////////////////////////////////////// 
              
              $('#box_content_1').addClass("box_none");
              $('#box_content_2').addClass("box_none"); 
              $('#box_content_3').addClass("box_none"); 
              $('#box_content_4').addClass("box_none");  
              $('#box_content_6').addClass("box_none"); 
              $('#box_content_7').addClass("box_none"); 
              $('#box_content_8').addClass("box_none"); 
              $('#box_content_9').addClass("box_none"); 



              $('#box_content_5').removeClass("box_none"); 
              $('#box_content_5').addClass("box_active");


 
              ////////////////////////////////////////////////// 
              ////////////////////////////////////////////////// 
           
      }); 

      
       $('#box_6').click(function(){

            // alert('test');

            $('#box_img1').removeAttr('src', 'img/number_point/number_1.png');
            $('#box_img1').attr('src', 'img/number_point/number_1_d.png');
 
            $('#box_img2').removeAttr('src', 'img/number_point/number_2.png');
            $('#box_img2').attr('src', 'img/number_point/number_2_d.png');

            $('#box_img3').removeAttr('src', 'img/number_point/number_3.png');
            $('#box_img3').attr('src', 'img/number_point/number_3_d.png');

            $('#box_img4').removeAttr('src', 'img/number_point/number_4.png');
            $('#box_img4').attr('src', 'img/number_point/number_4_d.png');

            $('#box_img5').removeAttr('src', 'img/number_point/number_5.png');
            $('#box_img5').attr('src', 'img/number_point/number_5_d.png');

            $('#box_img7').removeAttr('src', 'img/number_point/number_7.png');
            $('#box_img7').attr('src', 'img/number_point/number_7_d.png');

            $('#box_img8').removeAttr('src', 'img/number_point/number_8.png');
            $('#box_img8').attr('src', 'img/number_point/number_8_d.png');

            $('#box_img9').removeAttr('src', 'img/number_point/number_9.png');
            $('#box_img9').attr('src', 'img/number_point/number_9_d.png');


 
            $('#box_img6').attr('src', 'img/number_point/number_6.png');

              ////////////////////////////////////////////////// 
              ////////////////////////////////////////////////// 
              
              $('#box_content_1').addClass("box_none");
              $('#box_content_2').addClass("box_none"); 
              $('#box_content_3').addClass("box_none"); 
              $('#box_content_4').addClass("box_none"); 
              $('#box_content_5').addClass("box_none");  
              $('#box_content_7').addClass("box_none"); 
              $('#box_content_8').addClass("box_none"); 
              $('#box_content_9').addClass("box_none"); 



              $('#box_content_6').removeClass("box_none"); 
              $('#box_content_6').addClass("box_active");


 
              ////////////////////////////////////////////////// 
              ////////////////////////////////////////////////// 
           
      }); 

      
      
       $('#box_7').click(function(){

            // alert('test');

            $('#box_img1').removeAttr('src', 'img/number_point/number_1.png');
            $('#box_img1').attr('src', 'img/number_point/number_1_d.png');
 
            $('#box_img2').removeAttr('src', 'img/number_point/number_2.png');
            $('#box_img2').attr('src', 'img/number_point/number_2_d.png');

            $('#box_img3').removeAttr('src', 'img/number_point/number_3.png');
            $('#box_img3').attr('src', 'img/number_point/number_3_d.png');

            $('#box_img4').removeAttr('src', 'img/number_point/number_4.png');
            $('#box_img4').attr('src', 'img/number_point/number_4_d.png');

            $('#box_img5').removeAttr('src', 'img/number_point/number_5.png');
            $('#box_img5').attr('src', 'img/number_point/number_5_d.png');

            $('#box_img6').removeAttr('src', 'img/number_point/number_6.png');
            $('#box_img6').attr('src', 'img/number_point/number_6_d.png');

            $('#box_img8').removeAttr('src', 'img/number_point/number_8.png');
            $('#box_img8').attr('src', 'img/number_point/number_8_d.png');

            $('#box_img9').removeAttr('src', 'img/number_point/number_9.png');
            $('#box_img9').attr('src', 'img/number_point/number_9_d.png');


 
            $('#box_img7').attr('src', 'img/number_point/number_7.png');

              ////////////////////////////////////////////////// 
              ////////////////////////////////////////////////// 
              
              $('#box_content_1').addClass("box_none");
              $('#box_content_2').addClass("box_none"); 
              $('#box_content_3').addClass("box_none"); 
              $('#box_content_4').addClass("box_none"); 
              $('#box_content_5').addClass("box_none"); 
              $('#box_content_6').addClass("box_none"); 
              $('#box_content_8').addClass("box_none"); 
              $('#box_content_9').addClass("box_none"); 



              $('#box_content_7').removeClass("box_none"); 
              $('#box_content_7').addClass("box_active");


 
              ////////////////////////////////////////////////// 
              ////////////////////////////////////////////////// 
           
      }); 


      
      
       $('#box_8').click(function(){

            // alert('test');

            $('#box_img1').removeAttr('src', 'img/number_point/number_1.png');
            $('#box_img1').attr('src', 'img/number_point/number_1_d.png');
 
            $('#box_img2').removeAttr('src', 'img/number_point/number_2.png');
            $('#box_img2').attr('src', 'img/number_point/number_2_d.png');

            $('#box_img3').removeAttr('src', 'img/number_point/number_3.png');
            $('#box_img3').attr('src', 'img/number_point/number_3_d.png');

            $('#box_img4').removeAttr('src', 'img/number_point/number_4.png');
            $('#box_img4').attr('src', 'img/number_point/number_4_d.png');

            $('#box_img5').removeAttr('src', 'img/number_point/number_5.png');
            $('#box_img5').attr('src', 'img/number_point/number_5_d.png');

            $('#box_img6').removeAttr('src', 'img/number_point/number_6.png');
            $('#box_img6').attr('src', 'img/number_point/number_6_d.png');

            $('#box_img7').removeAttr('src', 'img/number_point/number_7.png');
            $('#box_img7').attr('src', 'img/number_point/number_7_d.png');

            $('#box_img9').removeAttr('src', 'img/number_point/number_9.png');
            $('#box_img9').attr('src', 'img/number_point/number_9_d.png');
             

 
            $('#box_img8').attr('src', 'img/number_point/number_8.png');

              ////////////////////////////////////////////////// 
              ////////////////////////////////////////////////// 
              
              $('#box_content_1').addClass("box_none");
              $('#box_content_2').addClass("box_none"); 
              $('#box_content_3').addClass("box_none"); 
              $('#box_content_4').addClass("box_none"); 
              $('#box_content_5').addClass("box_none"); 
              $('#box_content_6').addClass("box_none"); 
              $('#box_content_7').addClass("box_none"); 
              $('#box_content_9').addClass("box_none"); 



              $('#box_content_8').removeClass("box_none"); 
              $('#box_content_8').addClass("box_active");


 
              ////////////////////////////////////////////////// 
              ////////////////////////////////////////////////// 
           
      }); 




      
       $('#box_9').click(function(){

            // alert('test');

            $('#box_img1').removeAttr('src', 'img/number_point/number_1.png');
            $('#box_img1').attr('src', 'img/number_point/number_1_d.png');
 
            $('#box_img2').removeAttr('src', 'img/number_point/number_2.png');
            $('#box_img2').attr('src', 'img/number_point/number_2_d.png');

            $('#box_img3').removeAttr('src', 'img/number_point/number_3.png');
            $('#box_img3').attr('src', 'img/number_point/number_3_d.png');

            $('#box_img4').removeAttr('src', 'img/number_point/number_4.png');
            $('#box_img4').attr('src', 'img/number_point/number_4_d.png');

            $('#box_img5').removeAttr('src', 'img/number_point/number_5.png');
            $('#box_img5').attr('src', 'img/number_point/number_5_d.png');

            $('#box_img6').removeAttr('src', 'img/number_point/number_6.png');
            $('#box_img6').attr('src', 'img/number_point/number_6_d.png');

            $('#box_img7').removeAttr('src', 'img/number_point/number_7.png');
            $('#box_img7').attr('src', 'img/number_point/number_7_d.png');

            $('#box_img8').removeAttr('src', 'img/number_point/number_8.png');
            $('#box_img8').attr('src', 'img/number_point/number_8_d.png');

 
            $('#box_img9').attr('src', 'img/number_point/number_9.png');

              ////////////////////////////////////////////////// 
              ////////////////////////////////////////////////// 
              
              $('#box_content_1').addClass("box_none");
              $('#box_content_2').addClass("box_none"); 
              $('#box_content_3').addClass("box_none"); 
              $('#box_content_4').addClass("box_none"); 
              $('#box_content_5').addClass("box_none"); 
              $('#box_content_6').addClass("box_none"); 
              $('#box_content_7').addClass("box_none"); 
              $('#box_content_8').addClass("box_none"); 



              $('#box_content_9').removeClass("box_none"); 
              $('#box_content_9').addClass("box_active");


 
              ////////////////////////////////////////////////// 
              ////////////////////////////////////////////////// 
           
      });  

*/

});

    </script>

</html>











