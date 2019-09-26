<?php
try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=gregbdd;charset=utf8', 'greg981', 'Bushman973');
    //bonne pratrique pour détail des erreurs//
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
}
?>

<?php
// define variables and set to empty values
$firstnameErr = $lastnameErr = $emailErr  = "";
$fname = $lName = $Email = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["First Name"])) {
    $firstnameErr = "First Name is required";
  } else {
    $fname = test_input($_POST["FirstName"]);
  }
  if (empty($_POST["Last Name"])) {
    $lastnameErr = "Last Name is required";
  } else {
    $lname = test_input($_POST["LastName"]);
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $Email = test_input($_POST["email"]);
  }
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

}
?>


<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php
echo "<h2>Your Input:</h2>";
echo $fname;
echo "<br>";
echo $lname;
echo "<br>";
echo $email;
echo "<br>";
echo $comment;
echo "<br>";
?>

/**


 


 <div class="page-header">
                <h2 itemprop="headline">
            GOLDEN BOOK			</h2>
                                </div>
                
    


    
                            <div itemprop="articleBody">
    <table border="0" style="font-family: Arial, Helvetica, sans-serif; width: 944px;" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td valign="top" bgcolor="#d6c7bc" width="773">
<div align="center">
<table border="0" class="dsR3" style="width: 650px; height: 30px;" cellspacing="0" cellpadding="5">
<tbody>
<tr>
<td><span class="titrelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; font-weight: bold; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">lass&egrave;re doroth&eacute;e<em>&nbsp;- la ciotat, France</em></span></td>
</tr>
<tr>
<td><span class="textelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">Je tiens &agrave; remercier l'&eacute;quipe de l'h&ocirc;tel pour leur acceuil chaleureux ainsi que leurs pr&eacute;cieux conseils</span></td>
</tr>
<tr>
<td><hr /></td>
</tr>
<tr>
<td><span class="titrelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; font-weight: bold; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">geraldine<em>&nbsp;- montpellier</em></span></td>
</tr>
<tr>
<td><span class="textelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">Merci &agrave; toute l'&eacute;quipe pour cet agr&eacute;able s&eacute;jour.On a beaucoup appr&eacute;ci&eacute; vos bons conseils ;)</span></td>
</tr>
<tr>
<td><hr /></td>
</tr>
<tr>
<td><span class="titrelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; font-weight: bold; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">sophie<em>&nbsp;- lyon, FRANCE</em></span></td>
</tr>
<tr>
<td><span class="textelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">situation geographique id&eacute;ale en plein centre ; lachambre etait impeccable ,les sanitaires aussi le personnel pr&ecirc;t &agrave; rendre service.</span></td>
</tr>
<tr>
<td><hr /></td>
</tr>
<tr>
<td><span class="titrelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; font-weight: bold; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">Mariline ( en couple d'age m&ucirc;r)<em>&nbsp;- Marseille, France</em></span></td>
</tr>
<tr>
<td><span class="textelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">+ L'acceuil et l'amabilit&eacute; du personnel,les conseils de fascilitation (parking,restaurants) les solutions apportees pour optimiser le s&eacute;jour et les visites de la ville jusq'au d&eacute;part m&ecirc;me avec un chien et des bagages.&nbsp;<br /></span></td>
</tr>
<tr>
<td><hr /></td>
</tr>
<tr>
<td><span class="titrelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; font-weight: bold; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">anonyme ( en couple d'age m&ucirc;r)<em>, france</em></span></td>
</tr>
<tr>
<td><span class="textelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;"><br />+ l'emplacement g&eacute;ographique au centre ville intra muros, &agrave; proximit&eacute; de tous les centres d'int&eacute;r&ecirc;ts. Le calme de la chambre donnant sur une petite cour int&eacute;rieure.&nbsp;<br /><br />- Pas de parking, et impossibilit&eacute; de se garer &agrave; proximit&eacute; (mais parking gratuit extra muros accessible). Pas d'ascenseur&nbsp;<br /></span></td>
</tr>
<tr>
<td><hr /></td>
</tr>
<tr>
<td><span class="titrelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; font-weight: bold; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">Josette<em>&nbsp;- Aix en provence., france</em></span></td>
</tr>
<tr>
<td><span class="textelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">+ Le calme tout en &eacute;tant en plein centre ville et l'amabilit&eacute; de l'acceuil.&nbsp;<br /><br />- Si j'ai mis moyen c'est pour les doses savon pas renouvele&eacute;s ainsi que les serviettes mais c'est un petit d&eacute;tail d&ucirc; &agrave; l'oubli.</span></td>
</tr>
<tr>
<td><hr /></td>
</tr>
<tr>
<td><span class="titrelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; font-weight: bold; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">alain<em>&nbsp;- le pradet, France</em></span></td>
</tr>
<tr>
<td><span class="textelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">le 14 ao&ucirc;t 2010&nbsp;<br /><br />+ accueil et personnel sympathique, situation centrale id&eacute;ale pour le festival.&nbsp;<br /><br />- pas d'ascenseur !!&nbsp;<br /></span></td>
</tr>
<tr>
<td><hr /></td>
</tr>
<tr>
<td><span class="titrelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; font-weight: bold; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">Anthony ( en couple d'age m&ucirc;r)<em>&nbsp;- Hemel Hempstead, Royaume-Uni</em></span></td>
</tr>
<tr>
<td><span class="textelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">25 septembre 2010&nbsp;<br /><br />+ I found the Hotels location to be excellent. The reception staff were very helpful and all spoke English. Some of the facilities were not good , but the Hotel was being upgraded which we could see and a lift is to be installed during the coming winter.&nbsp;<br /></span></td>
</tr>
<tr>
<td><hr /></td>
</tr>
<tr>
<td><span class="titrelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; font-weight: bold; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">Jean-pierre (en famille avec adolescents)<em>&nbsp;- la trinit&eacute; surzur, France, france</em></span></td>
</tr>
<tr>
<td><span class="textelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;"><br />16 novembre 2010&nbsp;<br /><br />+ tr&egrave;s bien situ&eacute;&nbsp;<br /><br />- Dommage que le parking soit si loin, mais l &eacute;tablissement nous offre une r&eacute;duction au parking de la ville(parking du palais des papes)&nbsp;<br /></span></td>
</tr>
<tr>
<td><hr /></td>
</tr>
<tr>
<td><span class="titrelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; font-weight: bold; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">Carolina<em>&nbsp;- Alpignano, Italie</em></span></td>
</tr>
<tr>
<td><span class="textelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">28 ao&ucirc;t 2010&nbsp;<br /><br />+ la cordialit&agrave; e la centralit&agrave; dell'ubicazione&nbsp;<br /><br /></span></td>
</tr>
<tr>
<td><hr /></td>
</tr>
<tr>
<td><span class="titrelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; font-weight: bold; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">Nathalie<em>&nbsp;- Clermont ferrand</em></span></td>
</tr>
<tr>
<td><span class="textelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">Tr&eacute;s bien situ&eacute; au coeur de la ville, proche du palais des papes et des muse&eacute;s; personnel acceuillant, h&ocirc;tel agr&eacute;able ,acceuillant; belle d&eacute;coration contemporaine.</span></td>
</tr>
<tr>
<td><hr /></td>
</tr>
<tr>
<td><span class="titrelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; font-weight: bold; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">Michelle<em>, U.S.A</em></span></td>
</tr>
<tr>
<td><span class="textelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">I stayed at this h&ocirc;tel a couple of years ago and can say that this time was even better than the last reception; very friendly, room in much better than last time and overall great stay once again .&nbsp;<br />It is very easy to get to from avignon center train station (about 10-15min)on foot ,there are many good shops on the same street too.</span></td>
</tr>
<tr>
<td><hr /></td>
</tr>
<tr>
<td><span class="titrelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; font-weight: bold; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">Monserrat .<em>&nbsp;- Manresa., Espagne</em></span></td>
</tr>
<tr>
<td><span class="textelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">El personal era muy amable; era limpio y esatba muy bien situado.</span></td>
</tr>
<tr>
<td><hr /></td>
</tr>
<tr>
<td><span class="titrelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; font-weight: bold; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">Rose claudine<em>&nbsp;- Corgoloin, France</em></span></td>
</tr>
<tr>
<td><span class="textelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">La proximit&eacute; de la gare, l'emplacement dans la rue pricipale, la bagagerie qui nous a permis de nous promener sans prendre nos valises , c'etait tr&eacute;s sympa de leurs part.</span></td>
</tr>
<tr>
<td><hr /></td>
</tr>
<tr>
<td><span class="titrelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; font-weight: bold; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">Sarah<em>&nbsp;- Toulouse, France</em></span></td>
</tr>
<tr>
<td><span class="textelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;"><br />+ H&ocirc;tel parfaitement situ&eacute; &agrave; proximit&eacute; du palais des papes et de la place de l'horloge.&nbsp;<br /><br />+ Personnel tres sympatique , d&eacute;co tres sympa,propre et lit confortable.</span></td>
</tr>
<tr>
<td><hr /></td>
</tr>
<tr>
<td><span class="titrelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; font-weight: bold; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">anonyme</span></td>
</tr>
<tr>
<td><span class="textelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">acceuil tres sympatique,le personnel est tres serviable , les prix sont imbattable.</span></td>
</tr>
<tr>
<td><hr /></td>
</tr>
<tr>
<td><span class="titrelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; font-weight: bold; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">MALICET Jean-Paul<em>&nbsp;- 83000 TOULON, FRANCE</em></span></td>
</tr>
<tr>
<td><span class="textelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">De passage &agrave; Avignon, j'ai eu le plaisir de s&eacute;journer &agrave; l'Hotel DANIELI,&nbsp;<br />situ&eacute; en plein coeur du centre historique de la Fameuse cit&eacute; des Paoes.&nbsp;<br />compl&egrave;tement r&eacute;nov&eacute;, cet Hotel, qui poss&egrave;de deux entr&eacute;es, offre des chambres&nbsp;<br />assez spacieuses, tr&egrave;s confortables et surtout climatis&eacute;es: halte &agrave; sugg&eacute;rer;</span></td>
</tr>
<tr>
<td><hr /></td>
</tr>
<tr>
<td><span class="titrelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; font-weight: bold; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">CANAC Evelyne<em>&nbsp;- VANNES</em></span></td>
</tr>
<tr>
<td><span class="textelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">Bretonne d'origine j'adore la Provence, et mon s&eacute;jour en Avignon, d&eacute;but Octobre, fut r&eacute;ussi par tout ce qu'il y a de beau &agrave; visiter dans la Cit&eacute; des Papes, mais aussi par le bon choix de l'Hotel, en l'occurence&nbsp;<br />l'Hotel DANIELI situ&eacute; en plein centre ville. Sa nouvelle d&eacute;coration,&nbsp;<br />ses chambres assez spacieuses et r&eacute;cemment climatis&eacute;es, et l'accueil qu'on y&nbsp;<br />trouve , vous procurent l'envie de prolonger votre s&eacute;jour.</span></td>
</tr>
<tr>
<td><hr /></td>
</tr>
<tr>
<td><span class="titrelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; font-weight: bold; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">Nancy<em>&nbsp;- Metz, France</em></span></td>
</tr>
<tr>
<td><span class="textelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">H&ocirc;tel 2 &eacute;toiles qui en vaut plus ; tr&eacute;s propre ,chambre spacieuse confortable et calme . H&ocirc;tel tr&eacute;s bien situ&eacute;; personnel sympa , A conseiller.</span></td>
</tr>
<tr>
<td><hr /></td>
</tr>
<tr>
<td><span class="titrelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; font-weight: bold; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">Yves<em>&nbsp;- Lorette, Canada</em></span></td>
</tr>
<tr>
<td><span class="textelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">La rapidit&eacute; du service, le pommeau de douche a &eacute;t&eacute; remplac&eacute; aussit&ocirc;t la reclamation faite.</span></td>
</tr>
<tr>
<td><hr /></td>
</tr>
<tr>
<td><span class="titrelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; font-weight: bold; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;">benoit<em>&nbsp;- puteaux, france</em></span></td>
</tr>
<tr>
<td><span class="textelvd" style="color: #55463a; font-size: 15px; font-family: Arial, Helvetica, SunSans-Regular, sans-serif; line-height: 16px; letter-spacing: 0px; vertical-align: 0px;"><br />9 ao&ucirc;t 2010&nbsp;<br /><br />Excellent accueil. Petits d&eacute;jeuners copieux. Confort de la chambre tr&egrave;s convenable. Acces internet. Bon emplacement en centre ville. Calme&nbsp;<br /></span></td>
</tr>
<tr>
<td><hr /></td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>





           <!-- About Cuisto section end -->  

        </section><p class="quote">"Live your dreams, do not dream your life"</p>
