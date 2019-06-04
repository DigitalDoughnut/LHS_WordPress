<?php get_header(); ?>

<?php
$BookCounter = 0;
if(have_posts()) : while(have_posts()) : the_post();

$BookCounter ++; ?>

<?php if (($BookCounter % 2) == 0) { 

  $image = get_field('book_image');
?>

<div id="<?php the_title(); ?>" class="container-fluid py-3">
  <div class="container p-5">
  <div class="row">
    
  <div class="mx-auto col-md-7">
      <h1 class="pb-3 freeStyleH1 text-center"><?php the_title(); ?></h1>
      <?php the_content();
      ?>
      </div>  

      <div class="col-md-5 text-center">
      <img src="<?php echo get_field('book_image')?>" alt="<?php echo $image['alt']; ?>"  style="max-height: 473; max-width: 316px;"  width="80%">
      <div class="text-center pt-3">
        <a href="<?php echo get_field('buy_now_button')?>" target="_blank" role="button" class="btn btn-secondary">Buy Now</a>
      </div>
  </div>

    </div>
  </div>
</div>

<?php } 

else { 


$image = get_field('book_image');
?>

<div id="<?php the_title(); ?>" class="container-fluid py-3"  style='background-color: white' >
  <div class="container p-5">
  <div class="row">
    <div class="col-md-5 text-center">
      <img src="<?php echo get_field('book_image')?>" alt="<?php echo $image['alt']; ?>"  style="max-height: 473; max-width: 316px;"  width="80%">
      <div class="text-center pt-3">
        <a href="<?php echo get_field('buy_now_button')?>" target="_blank" role="button" class="btn btn-secondary">Buy Now</a>
      </div>

  </div>
  <div class="mx-auto col-md-7">
      <h1 class="pb-3 freeStyleH1 text-center"><?php the_title(); ?></h1>
      <?php the_content();
      ?>
      </div>  
    </div>
  </div>
</div>

<?php } ?>

<?php endwhile; endif; ?>



  <div class="container-fluid py-3" style="background-color: rgb(17,56,2); color: #FFF">
    <div class="container py-2">
      <div class="row align-middle">
          <div class="mx-auto">
        <h4 class="freeStyleH4">Read the first chapter here: </h4>
        </div>
      </div>
      <div class="row align-middle">
        <div class="mx-auto">
          <a style="cursor: pointer;" role="button" class="btn btn-secondary" data-toggle="modal" data-target="#EnduranceModal">Endurance</a>
        </div>
        <!-- The Modal -->
<div class="modal" id="EnduranceModal" style="color: #000">
  <div class="modal-dialog modal-lg" style="overflow-y: scroll; max-height: 90%;">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Chapter 1</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <p></p>
        <p>Lishan landed his two seater transport tub on his boat’s upper pad, engaged the docking clamps, and strode through the rear hatch as soon as the pressure had equalised. It felt good to be home once more, away from the demands of his position. He had been gone for over a month, overseeing Elite training and finalising a treaty with the Baketags, a warrior race who would now fight for the Esarelians against any and all enemies, and he was looking forwards to being able to relax for a while. </p>
<p>Things would be easier when the fabled cruiser was completed, and they could avoid the congested hub altogether. Still, for now it was a convenient meeting place. Housing the Ra’hon, the ultimate ruler of the Empire, and his Ra’hos family there also lessened the burden on Lishan’s warriors of protecting Ra’hon Innin’s luxury boat as well as the centre for trade and diplomacy. He had left Innin safely ensconced in the upper decks of the hub with a full complement of elite warriors on rotational duty.  </p>
<p> “Soshah,” he called, expecting his mate to be nearby. She usually waited in the atrium of their boat to greet him when he returned from long periods away. For the first time in many years, however, she was nowhere within sight. Lishan wondered what could have caused her absence as he descended to the great hall and made his way towards their private quarters. </p>
<p>Halfway there, he spotted her outline behind one of the internal pillars lining the central space. She was staring at something beyond his view, oblivious to her surroundings.  </p>
<p>Lishan changed direction and strolled over to discover what could hold his mate’s attention so fully. When he reached her, he put his hand on her shoulder and said, “You did not greet me today. What is keeping you so entranced that you forgot your mate’s return?” </p>
<p>Soshah jumped. Her hand went to her chest and her sapphire eyes narrowed in his direction. Still, she greeted him with a shallow bow and a kiss before turning back and pointing in the direction of the provisioner’s office. </p>
<p> “I apologise for missing your homecoming. I was watching Finnoy give the new slave a tour of the boat.” </p>
<p> “New slave?” Lishan had not authorised the purchase, nor would he. Like most of the upper Hos, Lishan was opposed to slavery in general, though he currently owned two. One was indentured, paying off a debt for his family, and would be released from service in a couple of years. The other… Well, that was a special case. </p>
<p>Lishan looked around his mate to see for himself. Just as she had said, their provisioner, Finnoy, was standing next to a strange creature wearing the collar of a slave. She pointed out something on a databloc, and the creature leaned closer to the display. It was short and thin with brown hair covering its head. It looked vaguely like a Teraburan but not as substantial and with only one leg joint. </p>
<p>Disapproval flared, and Lishan scowled. A soft hand on his forearm was the only thing that held him back from striding into the office and demanding an explanation of his employee. He turned back to Soshah to find her also dragging her eyes from the unusual being. When she met Lishan’s frown, she blinked her inner eyelids and stepped back a pace. </p>
<p> “Lishan,” she warned. “Wait until you have all the facts before making a judgement. I am very fond of Finnoy, and she is an excellent provisioner. I am sure there is a perfectly reasonable explanation for the appearance of another slave in our midst.” </p>
<p> “There had better be,” he replied. </p>
<p>Her advice given, Soshah moved onto other subjects. “The evening meal will be served on the observation deck in two cycles. I thought we could celebrate your return in style. Wear the clean kilt I laid out in the dressing room, and do not be late.” </p>
<p> “Yes, mate,” he said, bowing formally before kissing her cheek. </p>
<p>With a grin, she waved off his teasing and left him, gliding across the polished floor of the great hall in the direction of the garden suite. Her beaded dress swayed as she walked, catching the light from multiple globes overhead and casting her in a rainbow of colours. He wished he could join her, but he had to speak to Finnoy first. </p>
<p>Slowly, so he could observe unseen a moment longer, Lishan walked over to the provisioner’s office. Tucked into the side of the boat near the transporter down to the loading bay, the room on the main deck was one of the many rewards Finnoy had been given over the years for her stellar service. Lishan hoped he would not have reason to regret the generosity.
<p>From the open portal, he asked, “What is this?” 
<p>Finnoy stood, scraping her padded chair across the metallic flooring, and bowed formally, her hand coming up to meet her chest as she lowered her torso and then extending in front of her as she rose. The strange creature merely turned and stared at him. When Lishan nodded at his subordinate, acknowledging her respectful greeting, she hurried over to him. </p>
<p> “This is Jolan, Na’hor—”</p>
<p> “And what is Jolan doing on my boat?” Lishan looked pointedly at the slave collar before returning his gaze to Finnoy. </p>
<p>She held her hands up in a placating gesture. “I know your views on holding slaves, Na’hor, but I was trading for supplies this afternoon when I heard rumours of a special auction in the market. The Thexorans already had him on the selling platform by the time I got there. He’s a human, they said, and he caused quite a commotion amongst the traders. It sounded like Binjan was going to purchase him, so I stepped in and bought him for you instead. I trust I did the right thing?” </p>
<p>Another intervention—that made sense. Lishan allowed his body to relax. The only previous time he had bought a slave had been to save a Baketag from Binjan’s clutches. Dak would have been forced to fight in one of the Teraburan slaver’s entertainment bays, or worse, paraded in chains as an exotic pet at every social function he hosted. Lishan had seen such displays on several occasions, to his utter disgust. It was not a fate he would wish on any honourable warrior, as all Baketags were, so he had purchased Dak himself, at great cost, to prevent the travesty. </p>
<p>At first, he had tried to prise Dak’s full name from him, but the stubborn male had refused to give it. He only repeated that, upon his capture, he had lost the right to use the second syllable, an indicator of rank within their strict military culture. Since then, he had acted as Lishan’s personal combat trainer and was now a trusted and valued member of his household. </p>
<p>Maybe the same would prove true of this new addition, though he appeared too weak to be of any real use, and the prideful tilt of his chin suggested he would be unable to accept his new role. Lishan tried to recall what he knew of the elusive human species. They inhabited a small system beyond the far borders of the Thexoran system that was considered too insignificant and backward to either court or conquer. Not as technologically advanced as their neighbours, they had little contact with the wider universe and were rarely seen outside the habitable planets of their realm. He had not even heard of a sighting since he was a youngling. </p>
<p>Lishan tapped his chin with his forefinger. He would interview Jolan himself before making any further decisions. He cast one last glance over the human and turned to leave. To Finnoy, he said, “When you have finished with him here, send him to my study.” </p>
<p> “Of course, Na’hor,” she responded, but Lishan was already walking away.</p>

   
         
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="cursor: pointer;">Close</button>
      </div>

    </div>
  </div>
</div>
      </div>

</div>
</div>

<div id="Who" class="container-fluid py-3" style="background-color: white;">
    <div class="container p-5">
        <div class="row align-items-center">
        <h1 class="freeStyleH1 mx-auto text-center">Who's Who</h1>
        </div>
    <div class="row align-items-center mt-2">
      <div class="col-md-5 mx-auto pt-4">
        <img src="img/Gilla.jpg" alt="Picture of Gilla"  style="max-height: 499; max-width: 322px;"  width="100%">
         </div>
    <div class="mx-auto col-md-7">
        <h3 class="pb-3 text-center">Gilla</h3>
        <p class="pb-3"> I'd like you to meet Gilla Trestam, the main character in Courage.
           Here she is, as she appears at the start of the story. I never truly
            considered how wrong it seemed for Gilla to be doing manual labour
             while 7 months pregnant until I actually saw her in her uniform.
              It’s clear that something on planet U’du needs to change – and soon!</p>
        <p>
            Name: Gilla Trestam.<br>
          Age: 30 at the start of the series.<br>
          Status: Married to Elias, one child (Mira, 7) and pregnant with her second.<br>
          Position: Slave worker in the manufacturing sector on planet U’du,
             proficient in wiring circuitry and systems testing.<br>
          Appearance: Average height (5ft 7in), athletic build, warm brown eyes,
             long dark-brown hair reaches to her waist.<br>
          Attributes: Calm, nurturing, peace keeper, intelligent,
             firm believer in Old Earth’s God, good singing voice.<br>
          Favourite Activity: Singing the songs of Old Earth, passed down by her grandmother, to her children.<br></p>
  </div>  
      </div>


      <div class="row align-items-center mt-5">
        <div class="mx-auto col-md-7">
            <h3 class="pb-3 text-center">Reemah</h3>
            <p class="pb-3  "> Let me also introduce Ra'hos Reemah, one of the Esarelian characters from Courage.
               Reemah fills the role of the Egyptian princess in the Biblical account of Moses,
                and more of her story is told in Strength. </p>
            <p>Name: Reemah, First Daughter of Ashal of Esarel.<br>
              Age: 256 at the start of the series.<br>
              Status: Single<br>
              Position: Ra’hos (member of the Esarelian royal family).<br>
              Appearance: Tall for a female (8ft approx.), thin, toned, violet eyes signal Ra’hos lineage.<br>
              Attributes: Rebellious, intelligent, easily bored, great pilot, craves space and speed,
                 odd for an Esarelian – doesn’t like political games, feels stifled by her role,
                  dislikes sycophants, often lonely.<br>
              Favourite expression: Solid!<br>
              Favourite activity: Racing arrows (military fighter craft).<br></p>
              
              
      </div> 
      <div class="col-md-5 mx-auto py-4">
          <img src="img/Reemah.jpg" alt="Picture of Reemah"  style="max-height: 499; max-width: 322px;"  width="80%">
           </div>
          </div>

  </div>
  </div>
  
</div>

  <footer>
  <div class="container-fluid mt-5" style="background-color: rgba(17,56,2,0.45);">
      <div class="container">
        <div class="row py-3 justify-content-center">
            <h6><a class="mx-1 mx-sm-2 mx-md-3" href="index.html">Home</a><a class="mx-1 mx-sm-2 mx-md-3" href="about.html">About</a><a class="mx-1 mx-sm-2 mx-md-3" href="legacychronicles.html">Legacy Chronicles</a><a class="mx-1 mx-sm-2 mx-md-3" href="news.html">News</a><a href="privacyandcookies.html" class="mx-1 mx-sm-2 mx-md-3">Privacy &amp; Cookies</a><a class="mx-1 mx-sm-2 mx-md-3" href="contact.html">Contact</a></h6>
        </div>
        </div>
      </div>

      <div class="container-fluid mt-0" style="background-color: rgb(17,56,2);">
          <div class="container">
            <div class="row py-1 pt-2  justify-content-center">
                <h6>&copy; 2018 Lauren H Salisbury</h6>
            </div>
            </div>
          </div>
  </footer>

  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/ie10-viewport-bug-workaround.js"></script>
  <script src="js/featherlight.js"></script>
  <script src="js/myjavascript.js"></script>

</body>

</html>