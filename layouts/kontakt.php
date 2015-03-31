<div id="kontaktwrapper">
<div class="leftkontakt animated flipInX">
<h1>{{ profile.name }}</h1>
<p>{{ site.tagline }}</p>
<p class="contact"><span class="icn-phone"></span> +420 222 333 222</br><span class="icn-mail"></span> {{ profile.email }}</br><span class="icn-skype"></span> JohnDoe007</p>
</div>
<div class="leftkontakttwo animated flipInX">
<h1>Jméno Příjmení</h1>
<p>Text..</p>
<p class="contact"><span class="icn-phone"></span> +420 222 333 222</br><span class="icn-mail"></span> {{ profile.email }}</br><span class="icn-skype"></span> JohnDoe007</p>
</div>
</div>
<div id="formwrapper">
<div class="form animated fadeInDown">
<form method="post" action="#php">
    <input type="text" name="name" value="" placeholder="Celé jméno*" class="inp name" />
    <input type="text" value="" name="email" placeholder="E-mail*" class="inp mail" />
    <input type="text" value="" name="phone" placeholder="Telefon" class="inp tel" />
    <input type="text" value="" name="human" placeholder="Kolik je 2+2? (Anti-spam)*" class="inp spam" />
    <textarea type="text" value="" name="message" placeholder="" class=""></textarea>

    <input class="formbut" id="submit" name="submit" type="submit" Value="Odeslat"  />
</form>
</div>
</div>

<div id="php">
<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    	$from = 'Od: Jan Dočekal.cz'; 
    	$to = 'honza.doc@gmail.com'; 
    	$subject = 'Kontaktní formulář!';
    	$human = $_POST['human'];

    	$body = "Od: $name\n E-Mail: $email\n Zpráva:\n $message\n\n Telefon: $phone";
?>
<?php
if ($_POST['submit']) {
    if ($name != '' && $email != '') {
        if ($human == '4') {				 
            if (mail ($to, $subject, $body, $from)) { 
        echo '<p id="success" class="animated flash"><span class="icn-heart"></span>Zpráva odeslána!</p>';
    } else { 
        echo '<p id="error" class="animated flash"><span class="icn-remove"></span>Něco se pokazilo, zkuste to znovu..</p>'; 
    }
} else if ($_POST['submit'] && $human != '4') {
    echo '<p id="error" class="animated flash"><span class="icn-remove"></span>Anti-spam otázka nebyla zodpovězena správně.</p>';
}
} else {
        echo '<p id="required" class="animated flash"><span class="icn-warning-sign"></span>Prosím vyplňte povinná pole.</p>';
    }
}
?>
</div>