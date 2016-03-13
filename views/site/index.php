<?php

/* @var $this yii\web\View */

$this->title = Yii::t('app', 'Video operator for a wedding Kiev') . " ZEFIRMA " .
	Yii::t('app', 'Wedding videography and wedding video');

?>
<div class="container">
	<div class="site-index">
	
	    <div class="body-content">
			 <div class="row center">
				 <h4><?= Yii::t('app', 'Wedding clips'); ?></h4>
			 </div>
			 
			 <div class="row center">
				 <a class='black-link' href='/site/wedding-movies'><p><?= Yii::t('app', 'Here you can get acquainted with several options of movies,
		are included in our packages. Enjoy watching'); ?> :)</p></a>
			 </div>
			 
			 
			 <?php 
				 $ii = 0;
				 foreach ($video as $item): 
				 if(($ii % 2) == 0):
			 ?>
	        	<div class="row">
		     <?php endif; ?>
		     
	            <div class="col-md-6 col-cell-padding">
	            	<div class="embed-responsive embed-responsive-16by9">
	                	<iframe class="embed-responsive-item" src="<?= $item['url']; ?>" frameborder="0" allowfullscreen></iframe>
	            	</div>
	            </div>
			<?php if(($ii % 2) == 1): ?>
	        	</div>
	        <?php endif; ?>
	        <?php
	        	$ii++;
	        	endforeach; 
	        ?>
	
	    </div>
	    
	    <div class='seo-text'>
	
	<h3 class='center bold'><?= Yii::t('app', 'Videography wedding in Poland'); ?></h3>
	
	<?= Yii::t('app', 'Wedding is, of course, an exciting event for the newlyweds and their
		loved ones. Photos - This is a memory that will remain after us,
		and beautiful wedding photos will admire not only you,
		but your children grandchildren, and perhaps the next generation.
		Therefore it is very important that your wedding filmed a pro.
		Wedding - a romantic story with a wonderful culmination of the celebration,
		to which invite friends and relatives.'); ?>
	 
	<h3 class='center bold'>
	<?= Yii::t('app', 'We provide high-quality photo and video services on the territory of Ukraine and Poland'); ?>
	</h3>
	
	<?= Yii::t('app', 'To make your photos and videos have become really
			wonderful memories, we use all of its professionalism and
			many years of experience. Warsaw magnificent city with a unique architecture.
			If the wedding venue you choose to Warsaw or Krakow we will find
			wonderful location for shooting a romantic film about the history of
			your love. Video and photos of your wedding photography in Poland - a story
			brimming with romance and adventure, and only the power of the professionals
			to transmit the frames.
			Create high-quality wedding photos and video -
			it is not a simple process. The photograph should convey the mood and atmosphere.
			After all, it is no secret that some of the photos can watch for hours,
			experiencing the emotions of bygone days, with the same gusto as in a moment of fixing
			this frame, and other pictures and gathering dust on a shelf without causing any emotion.
			To the photographer caught the very shots he should have flair and professionalism.
			At the preliminary meeting with the customer, the photographer tries to understand the nature and
			customer preferences. After wedding photo and video shooting - a mutually creative process.
			After all, you are the main characters in the romantic stories,
			the culmination of which is a big event in the life of lovers.
			This is a wedding.'); ?>
	 
	<?= Yii::t('app', 'You yourself are the protagonists of a film contact,
		in which we will display the full depth of your feelings,
		all the tenderness and timidity of your relationship.
		But what would our film came out that way,
		on its creation, we will work as a team.'); ?>
	
	<h3 class='center bold'>
	<?= Yii::t('app', 'Creating a movie of your wedding in Poland
		we will be sure to remove important for each bride and groom event,
		including charges of bride and groom.'); ?>
	</h3>
	
	<?= Yii::t('app', 'For the bride - a dress, make-up. Fun pastime with friends. 
			It is important to convey the atmosphere of the morning, 
			the mood and your heartfelt emotions. The second stage - the wedding ceremony. 
			This may be a wedding in a cathedral or church. 
			This survey is always solemn and touching. 
			And the task of the operator and editor convey these emotions and find 
			the things that this display. Then, the solution of all walks. 
			It was during a walk will be filmed most romantic frames. 
			And it is very important that the operator knew the pre-planned route. 
			You may also want to consult with the operator. 
			Perhaps he can tell a good place by which you can get extraordinary 
			images that will delight you later. And the culmination of the celebrations - 
			it is, of course, a restaurant. This is a meeting of young, 
			near and dear to people who came to congratulate the newlyweds. 
			Today, many practice a couple Bridal session- this photo 
			session groom and bride in beautiful places on the eve of the wedding. 
			The wedding day and so full of emotions and often walk, 
			which takes about two hours, does not allow to be in several 
			places at once and spend quality photo session. 
			And indeed the photo session - this is an additional burden for honeymooners, 
			for whom the wedding and so difficult test. It is for this reason 
			Bridal session - is a great alternative. Lets get beautiful photos, 
			but if you want to please the guests, raised them as a wedding surprise. 
			Another interesting solution is the Engagement Session - 
			is filming young in casual clothes in expensive and memorable honeymoon locations. 
			This survey allows you to learn more about the photographer on your 
			wedding day and feel more at ease in Poland (Krakow, Warsaw) or Ukraine (Kiev).'); ?>
	
	<h3 class='center bold'>
	<?= Yii::t('app', 'Video operator for a wedding Kiev. Wedding Videography'); ?>
	</h3>
	
	<?= Yii::t('app', 'Any wedding is deservedly considered the most vivid and
			solemn event for the majority of people. That is why they try to
			capture the most vivid and memorable moments not only on film,
			but also in the video. Of course, this would be an expensive duplex shooting
			choice for the customer, but the result is impressive -
			in addition to a wedding album wedding film will be in the family,
			which can be viewed in the family. Let\'s speak about the benefits of
			wedding video: video is always carried out by two videographers
			using high-aperture optics with varying focal length
			(Macro, wide-angle and uzkofokusnoy). In this way,
			achieved more diverse results - the presence of the total, average,
			close-ups and details of a staged scene. When shooting using
			image stabilization system GlideCam, GlideTrack.
			The sound at your wedding is written not only to external microphones and a remote control
			sound engineer, allowing no extraneous noise such as your record
			vows at a wedding ceremony. The entire wedding film and movie passes
			not only installation but also full color correction. On the day of your wedding
			we move on their own transport, it will not deliver
			you unnecessary trouble. But sometimes some customers do
			the most common mistake - to invite the wedding video
			lovers of the number of guests and relatives. Needless to say,
			that such an approach is fraught with many disadvantages -
			Video in the foreground can be difficult to calculate the newlyweds,
			special effects as well as a decent soundtrack will not be in principle.
			But from a professional videographer for a wedding in Kiev,
			as in other cities, such errors will not occur initially,
			because it is sure to be a professional to use quality
			video equipment, in which the manual focus image will be,
			optical and digital image stabilization, which will be
			recorded exclusively on a professional camera
			Canon5d mark2s high resolution. Professional - a wedding videographer
			in this case, be sure to stock the optional battery pack,
			which will allow the customer to be completely sure of one thing -
			all wedding video will be recorded zhostky drive.
			And in cases when fans suddenly ends the charge in the battery
			camcorder, observed never will!'); ?>
	
	<?= Yii::t('app', 'As soon as the event will be held wedding,
			a true master will generate competent installation -
			removes unwanted frames, add a quality soundtrack.
			And then will reformat a professional video format to MP4,
			and to give a wedding video disc to its customers,
			which will be reviewed again and again the most exciting moments
			wedding throughout a long happy life ...'); ?>
	
	<?= Yii::t('app', 'After the holiday, you get a feature-length film about her wedding
			(Lasting from 30 to 60 minutes)
			and apart from him and a small cheerful clip in 3-5 minutes,
			composed of the best moments of your wedding under the cheerful music.'); ?>
	
	<h3 class='center bold'>
	<?= Yii::t('app', 'The operator at the wedding Kiev'); ?>
	</h3>
	
	<?= Yii::t('app', 'Wedding video in Kiev necessarily includes
			preparing young people for the wedding ceremony, such as visiting the ceremony,
			Registrar or wedding (marafet morning, dressing,
			meeting with buddies and girlfriends), a wedding a walk in the city.
			Optionally, you can still order and shooting a wedding banquet,
			and serve the wedding cake. Chronology of events in a film about the next.
			Young morning. As a rule, the wedding video or a wedding film begins with
			as young awake preparing for the wedding. The operator is busy shooting the bride:
			bride with the help of bridesmaids dresses, suggests marafet,
			preparing tenders for the groom. Pick up the bride and groom.
			Then comes the video of how the bridegroom passed all competitions,
			made him a witness to the bride and bridesmaids
			(Unless, of course, those prepared). It\'s very funny, ridiculous procedure.
			And then, after a long (or not) test for the groom removed and the meeting itself
			the bride and groom: their joy, hugs, kisses, etc.
			The ceremony at the registry office. There already is a video and the wedding guests:
			friends, relatives, and their relatives. Total contingent,
			Those attending the ceremony at the registry office. Then imprinted on the video and the ceremony:
			it Registry Office workers, exchange of rings. two cameras are in the registry office,
			which makes it possible to carry out just two surveys: a general plan and
			approximate (and then combine them). Stroll.
			Wedding film is unthinkable without capturing the wedding walk.
			Often here offer young filmmakers to play some plot:
			being late for a plane, meet in the forest, field, etc. To clip.
			But it is possible to confine and easy walk: just shoot the young,
			witnesses offered at different places and at different angles. Wedding banquet and
			supply the wedding cake. At this stages shooting continues,
			removed all of the most interesting moments of the competition program,
			toast the guests, the first dance, the throwing of the bouquet, garter, a family home, etc.
			What would the film had its logical conclusion.'); ?>
	
	<h3 class='center bold'>
	<?= Yii::t('app', 'Wedding or wedding video clip'); ?>
	</h3>
	
	<?= Yii::t('app', 'In addition to a full-scale wedding film, there is also
			wedding clip. Wedding video - a compilation of the best moments of your wedding,
			binding them together and applying it to all music.
			The entire clip lasts no more than 3-5 minutes. It looks very lively, fun and mentally.
			It can be safely sent to all your friends to view:
			they have it exactly to the end of the inspection. In our time there
			whole areas of wedding clip: love story, trash the dress,
			concept film, glamor, gangster style, and many others.'); ?>
	    </div>
	</div>

</div>
