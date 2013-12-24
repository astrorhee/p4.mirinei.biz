<h2>Creating a Quiz Problem</h2>

<p>Write any good ideas for a question that can help people to advance their knoowledge about the Solar System.
   Once you submit your problem, you will get a chance to test the problem by yourself.</p>

<?php if(isset($error)): ?>
    <div class='error'>
        <p style="margin-top: -10px;"> All fields are required.  Please complete all fields. </p>
    </div>
<?php endif; ?>

<form method='POST' action='/quiz/p_making'>

<p>
    Question<br>
    <textarea name='question' rows=5 cols=103 maxlength="511" required></textarea>
    <br><br>

    Correct Answer<br>
    <textarea name='c_answer' rows=5 cols=103 maxlength="511" required></textarea>
    <br><br>

    Incorrect Answer 1<br>
    <textarea name='ic_answer_1' rows=5 cols=103 maxlength="511" required></textarea>
    <br><br>

    Incorrect Answer 2<br>
    <textarea name='ic_answer_2' rows=5 cols=103 maxlength="511" required></textarea>
    <br><br>

    Incorrect Answer 3<br>
    <textarea name='ic_answer_3' rows=5 cols=103 maxlength="511" required></textarea>
    <br><br>
</p>

<?php if(isset($error)): ?>
    <div class='error'>
        <p style="margin-top: -10px;"> All fields are required.  Please complete all fields. </p>
    </div>
<?php endif; ?>

<p style="margin-top: -10px;">
    <input type='submit' value='Submit!'>
</p>

</form>