<h2>Test Result</h2>

<h3>
	<?php if($score == 1): ?>
		Congratulations, you got it right!
	<?php else: ?>
		Sorry, but you got it wrong!
	<?php endif; ?>
</h3>

<br>
<br>

<p style="margin-left:auto; text-align: center;">
	<a href="/quiz/taking/<?=$q_id?>" style="text-decoration: none;"><input type="button" value="Same Question"></a>
	<a href="/quiz/taking" style="text-decoration: none;"><input type="button" value="Another Question"></a>
</p>