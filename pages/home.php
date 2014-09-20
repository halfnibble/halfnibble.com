<?php
	$lorem = "<h4 class=\"title\">Article Title</h4>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis metus scelerisque, 
	dapibus massa ut, tincidunt quam. Aliquam varius, tortor consequat semper vestibulum, erat tortor 
	congue diam, in eleifend urna elit et sem. Donec sit amet lacus vitae erat tempor tincidunt at 
	eget quam. Etiam aliquet faucibus magna vel vestibulum. Sed ligula tellus, convallis nec nulla 
	sed, laoreet lacinia dui. Donec ac pharetra purus. Etiam a convallis elit. Aliquam adipiscing ut 
	purus vel consequat. Nullam vel sapien id tortor lacinia scelerisque. Praesent eget ultrices nisl, 
	vel rhoncus lacus. Maecenas mollis neque ac porttitor blandit. Vestibulum vitae pulvinar massa. Ut 
	ut iaculis justo, vel sagittis lectus.
	</p><p>
	Nullam laoreet, dui id fermentum rutrum, dui orci aliquam eros, in tristique nulla massa sed ipsum. 
	Aenean condimentum in purus vitae convallis. Mauris bibendum consequat sapien, ac fermentum metus 
	lacinia ut. Vestibulum quis purus eu tortor laoreet mollis. Integer at sapien vitae nisi 
	condimentum accumsan. Vivamus aliquam sem tellus, vitae luctus arcu rutrum a. Suspendisse sapien 
	libero, facilisis vel metus id, faucibus feugiat leo. Duis convallis, arcu ut dapibus malesuada, 
	enim mi hendrerit odio, sit amet facilisis nisi turpis at enim. Nam rutrum eros justo, quis feugiat 
	nibh vulputate in.</p>";
?>
<section>
	<article>
		<h4 class="title">A Bit About Me</h4>
		<p>
			<img src="/img/KayPro_aboutme_lowres.png" align="left">
			I am a freelance, full stack web developer presently located in Reno, NV. I'm also an
			air traffic controller and software entrepreneur. Previously, I've worked as a chemist
			for Clinical Reference Laboratory and a radiology technologist for the U.S. Army. I 
			love anything highly technical and challenging, and am not afraid to teach
			myself something new.
		</p>
		<p>
			One of my many hobbies is studying early computer systems. The color scheme for this 
			website is inspired by my favorite old personal computer, the <em>KayPro II (pictured 
			above).</em> My other exhiting hobbies include skiing, hiking, and building with LEGO.
		</p>
		<p>
			To learn more about what I'm up to, follow me on Twitter 
			<a href="https://twitter.com/halfnibble" target="_blank">@halfnibble</a>
		</p>
		<p>
			<span class="label radius warning">(Fair warning: I am an unapologetic BlackBerry 10 fan)</span>
		</p>
	</article>
	<article class="alternate">
		<h4 class="title">
			<i class="fa fa-suitcase"></i>
			Business Services
		</h4>
		<img class="full-width rounded" src="/img/my-office-desk.jpg">
		<p>
			Pictured here is my desk where I work hard to develop software solutions to all the
			world's problems.
		</p>
		<p>
			<ul><span class="blue">Services include:</span>
				<li>Website development</li>
				<li>Database design &amp; optimization (MySQL)</li>
				<li>Software patent preparation</li> 
				<li>BlackBerry 10 app development</li>
				<li>Project management</li>
			</ul>
		</p>
		<p>
			For a details on the services offered, visit the <a href="/page/services">Services page.</a>
		</p>
	</article>
</section>

<section>
	<article>
		<?php echo $lorem; ?>
	</article>

	<article class="alternate">
		<?php echo $lorem; ?>
	</article>
</section>

<section>
	<article>
		<?php echo $lorem; ?>
	</article>

	<article class="alternate">
		<?php echo $lorem; ?>
	</article>
</section>

<section>
	<article>
		<?php echo $lorem; ?>
	</article>

	<article class="alternate">
		<?php echo $lorem; ?>
	</article>
</section>

