<?php include 'inc/header.php' ?>

<div id="ou-site-header">

<!-- UNCOMMENT FOR SITE CREATIVE
<div class="ou-creative"><img src="img/creative.jpg" alt="creative" class="ou-go3"></div>
-->

</div> <!-- end ou-site-header -->

<div id="ou-site-body">

<div id="ou-page">

<div id="ou-region0">
<?php include('inc/region0a.php'); ?>

<?php include('inc/region0b.php'); ?>
</div> <!-- end ou-region0 -->

<div id="ou-region1">
<?php include('inc/region1a.php'); ?>

<div class="ou-section">
<p>Here are a couple of form examples. It is more important that the form you create is usable and accessible than that it follows the coding detailed below. Since there can be many different types of forms for all different kinds of usage please feel free to design them with the spirit of OU ICE in mind.</p>

<h2>Form <span class="code-toggle"><a href="#"><i class="fa fa-code"></i></a></span></h2>

<pre class="code">
<code><form class="ou-ouice" method="post" action="#form-action">
  <fieldset>
  <legend>About you</legend>
  <ul>
    <li>
      <label for="name">Name</label>
	  <input type="text" id="name">
    </li>
    <li>
      <label for="email">Email</label>
      <input type="text" id="email">
    </li>
    <li>
      <label for="tel">Telephone</label>
	  <input type="text" placeholder="Landline or mobile" id="tel">
    </li>
    <li>
      <label for="address">Address</label>
      <textarea name="address" id="address" cols="40" rows="5"></textarea>
    </li>
  </ul>
  </fieldset>
  <fieldset class="ou-options">
  <legend>How did you find us?</legend>
  <ul>
    <li>
      <label for="check1"><input type="checkbox" id="check1"> Surfed on in</label>
    </li>
    <li>
      <label for="check2"><input type="checkbox" id="check2"> Search engine</label>
    </li>
    <li>
      <label for="check3"><input type="checkbox" id="check3"> Magazine</label>
    </li>
    <li>
      <label for="check4"><input type="checkbox" id="check4"> Suggestion</label>
    </li>
  </ul>
  </fieldset>
  <fieldset class="ou-options">
  <legend>What is your favourite colour?</legend>
  <ul>
    <li>
      <label for="radio1"><input type="radio" name="colour" id="radio1"> Blue</label>
    </li>
    <li>
      <label for="radio2"><input type="radio" name="colour"  id="radio2"> Red</label>
    </li>
    <li>
      <label for="radio3"><input type="radio" name="colour" id="radio3"> Green</label>
    </li>
  </ul>
  </fieldset>
  <fieldset>
  <legend>How old are you?</legend>
    <select name="dropdown">
      <option>18-25</option>
      <option>26-40</option>
      <option>41-60</option>
    </select>
  </fieldset>
  <fieldset>
  <legend>This field is disabled</legend>
    <select name="dropdown" disabled>
      <option>Apples</option>
      <option>Bananas</option>
      <option>Pears</option>
    </select>
  </fieldset>
<input type="submit" value="Send">
</form></code>
</pre>

<form class="ou-ouice" method="post" action="#form-action">
  <fieldset>
  <legend>About you</legend>
  <ul>
    <li>
      <label for="name">Name</label>
	  <input type="text" id="name">
    </li>
    <li>
      <label for="email">Email</label>
      <input type="text" id="email">
    </li>
    <li>
      <label for="tel">Telephone</label>
	  <input type="text" placeholder="Landline or mobile" id="tel">
    </li>
    <li>
      <label for="address">Address</label>
      <textarea name="address" id="address" cols="40" rows="5"></textarea>
    </li>
  </ul>
  </fieldset>
  <fieldset class="ou-options">
  <legend>How did you find us?</legend>
  <ul>
    <li>
      <label for="check1"><input type="checkbox" id="check1"> Surfed on in</label>
    </li>
    <li>
      <label for="check2"><input type="checkbox" id="check2"> Search engine</label>
    </li>
    <li>
      <label for="check3"><input type="checkbox" id="check3"> Magazine</label>
    </li>
    <li>
      <label for="check4"><input type="checkbox" id="check4"> Suggestion</label>
    </li>
  </ul>
  </fieldset>
  <fieldset class="ou-options">
  <legend>What is your favourite colour?</legend>
  <ul>
    <li>
      <label for="radio1"><input type="radio" name="colour" id="radio1"> Blue</label>
    </li>
    <li>
      <label for="radio2"><input type="radio" name="colour" id="radio2"> Red</label>
    </li>
    <li>
      <label for="radio3"><input type="radio" name="colour" id="radio3"> Green</label>
    </li>
  </ul>
  </fieldset>
  <fieldset>
  <legend>How old are you?</legend>
    <select name="dropdown">
      <option>18-25</option>
      <option>26-40</option>
      <option>41-60</option>
    </select>
  </fieldset>
  <fieldset>
  <legend>This field is disabled</legend>
    <select name="dropdown" disabled>
      <option>Apples</option>
      <option>Bananas</option>
      <option>Pears</option>
    </select>
  </fieldset>
<input type="submit" value="Send">
</form>  

</div>

<div class="ou-section">

<h2>Comment form <span class="code-toggle"><a href="#"><i class="fa fa-code"></i></a></span></h2>

<pre class="code">
<code><form class="ou-ouice ou-comment-form" method="post" action="#form-action">
<fieldset>
<legend>Post a comment</legend>
<ul>
<li><label for="message2">Your message</label>
<textarea rows="10" cols="40" id="message2"></textarea></li>
<li>
<label for="name2">Name</label>
<input type="text" id="name2">
</li>
<li>
<label for="email2">Email</label>
<input type="text" class="ou-email" id="email2">
</li>
<li>
<label for="website2">Website</label>
<input type="text" value="http://" id="website2">
</li>
</ul>
<p>
<input type="submit" value="Post comment">
</p>
</fieldset>
</form></code>
</pre>

<form class="ou-ouice ou-comment-form" method="post" action="#form-action">
<fieldset>
<legend>Post a comment</legend>
<ul>
<li><label for="message2">Your message</label>
<textarea rows="10" cols="40" id="message2"></textarea></li>
<li>
<label for="name2">Name</label>
<input type="text" id="name2">
</li>
<li>
<label for="email2">Email</label>
<input type="text" class="ou-email" id="email2">
</li>
<li>
<label for="website2">Website</label>
<input type="text" value="http://" id="website2">
</li>
</ul>
<p>
<input type="submit" value="Post comment">
</p>
</fieldset>
</form> 

</div>

<?php include('inc/region1b.php'); ?>
</div> <!-- end ou-region1 -->

<div id="ou-region2">
<?php include('inc/region2a.php'); ?>

<div class="ou-full-nav">
<?php nav_fullnav(); ?>
</div>

<?php include('inc/region2b.php'); ?>
</div> <!-- end ou-region2 -->

</div> <!-- end ou-page -->

</div> <!-- end ou-site-body -->

<div id="ou-site-footer">
<?php include('inc/site-footer.php'); ?>
</div> <!-- end ou-site-footer -->

<?php include 'inc/footer.php' ?>