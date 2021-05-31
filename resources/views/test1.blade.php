<?php
$age_du_visiteur = 17;
echo $age_du_visiteur;
echo "<br/>"
?>


<?php
$age = 8;

if ($age <= 12)
{
    echo "Salut gamin !<br/>";
}
?>

<?php
$age = 8;
 
if ($age <= 12) // SI l'âge est inférieur ou égal à 12
{
    echo "Salut gamin ! Bienvenue sur mon site !<br />";
    $autorisation_entrer = "Oui";
}
else // SINON
{
    echo "Ceci est un site pour enfants, vous êtes trop vieux pour pouvoir  entrer. Au revoir !<br />";
    $autorisation_entrer = "Non";
}
 
echo "<br/>Avez-vous l'autorisation d'entrer ? La réponse est : $autorisation_entrer";
?>


<?php
$autorisation_entrer = true;

if ($autorisation_entrer == true) // if ($autorisation_entrer)
{
    echo "<br/>Bienvenue petit nouveau. :o)";
}
elseif ($autorisation_entrer == false)
{
    echo "<br/>T'as pas le droit d'entrer !<br/>";
}
?>





<?php
//boucle while
$nombre_de_lignes = 1;

while ($nombre_de_lignes <= 10)
{
     $nombre_de_lignes++; // $nombre_de_lignes = $nombre_de_lignes + 1

    echo '<br/>Je ne dois pas regarder les mouches voler quand j\'apprends le PHP.<br />';
}   
?>





<?php
//Tableau
$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

foreach($coordonnees as $element)
{
   

    echo "$element<br />"; // echo $element . '<br />';
}
?>


<?php
//Tableau clé
$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

foreach($coordonnees as $cle => $element)
{
    echo "[$cle ] : $element<br />"; //echo '[' . $cle . '] : ' . $element . '<br />';
}
?>

<a href="bonjour.php?nom=Dupont&amp;prenom=Jean">Dis-moi bonjour !</a>

<br/>

<p>
    Cette page ne contient que du HTML.<br />
    Veuillez taper votre prénom :
</p>

<form action="bonjour.php" method="post">
<p>
    <input type="text" name="prenom" />
    <input type="submit" value="Valider" />
</p>
</form>


<?php
try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=jeux_video;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM jeux_video');

// On affiche chaque entrée une à une
//$donnees est un array qui contient champ par champ les valeurs de la première entrée. Par exemple, si vous vous intéressez au champ console  , vous utiliserez l'array $donnees['console']
while ($donnees = $reponse->fetch())
{
?>
    <p>
    <strong>Jeu</strong> : <?php echo $donnees['nom']; ?><br />
    Le possesseur de ce jeu est : <?php echo $donnees['possesseur']; ?>, et il le vend à <?php echo $donnees['prix']; ?> euros !<br />
    Ce jeu fonctionne sur <?php echo $donnees['console']; ?> et on peut y jouer à <?php echo $donnees['nbre_joueurs_max']; ?> au maximum<br />
    <?php echo $donnees['possesseur']; ?> a laissé ces commentaires sur <?php echo $donnees['nom']; ?> : <em><?php echo $donnees['commentaires']; ?></em>
   </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>



<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=jeux_video;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT nom, possesseur, prix FROM jeux_video WHERE possesseur=\'Patrick\' AND prix < 20 ORDER BY prix');

while ($donnees = $reponse->fetch())
{
    
    echo $donnees['nom'] . ' appartient à ' . $donnees['possesseur']  . ' coûte ' . $donnees['prix'] . ' EUR<br />';
}

$reponse->closeCursor();

?>


<?php
header ("Content-type: image/jpeg");
$image = imagecreatefromjpeg("couchersoleil.jpg");
?>

<?php
// Nous créons une classe « Personnage ».
class Personnage
{
  private $_force;
  private $_localisation;
  private $_experience;
  private $_degats;

  const FORCE_GRANDE = 80;
  public $couleur= "vert";



        
  // Nous déclarons une méthode dont le seul but est d'afficher un texte.
  public function parler()
  {
    $_force = 1; 
    echo "$_force, Je suis un personnage !";
  }
}
    
$perso = new Personnage(Personnage::FORCE_GRANDE);
$perso->parler();

echo $perso->couleur;




