<?php
session_start();
$dbconn;
dbConnection();
function dbConnection(){
    global $dbconn;
    $dbconn=mysqli_connect("localhost",'root','','rentacar');
    if(!$dbconn){
        die("Deshtoi lidhja me DB".mysqli_error($dbconn));
    }
}


function login($email,$fjalekalimi)
{
    global $dbconn;
    $sql="SELECT perdoruesiid, emri, mbiemri, email, telefoni,roli FROM perdoruesit";
    $sql.=" WHERE email='$email' AND fjalekalimi='$fjalekalimi'";
    $res=mysqli_query($dbconn,$sql);
    
    if(mysqli_num_rows($res)==1){
        $user_data=mysqli_fetch_assoc($res);
        $user=array();
        $user['perdoruesiid']=$user_data['perdoruesiid'];
        $user['emrimbiemri']=$user_data['emri']. " " . $user_data['mbiemri'];
        $user['roli']=$user_data['roli'];
        $_SESSION['user']=$user;
        header("Location: index.php");
    }else{
        echo "Nuk ka perdorues me keto shenime";
    }
}

function register($emri, $mbiemri, $email, $telefoni, $fjalekalimi, $nrpersonal, $adresa)
{
    global $dbconn;
    
    $sql = "INSERT INTO perdoruesit(emri, mbiemri, email, telefoni, fjalekalimi, nrpersonal, adresa) VALUES ";
    $sql .= " ('$emri','$mbiemri','$email','$telefoni','$fjalekalimi','$nrpersonal','$adresa')";
    $res = mysqli_query($dbconn, $sql);
    if($res)
    {
        header("Location: login.php");
    }
    else
    {
        "Perdoruesi deshtoi te regjistrohet " . mysqli_error($dbconn);
    }
}
function merrPerdoruesit(){
    global $dbconn;
    $sql="SELECT perdoruesiid, emri, mbiemri, email, telefoni FROM perdoruesit";
    return mysqli_query($dbconn,$sql);
}
function merrPerdoruesId($pid){
    global $dbconn;
    $sql="SELECT perdoruesiid, emri, mbiemri, email, telefoni,roli,fjalekalimi,nrpersonal FROM perdoruesit";
    $sql.=" WHERE perdoruesiid=$pid";
    $res=mysqli_query($dbconn,$sql);
    return mysqli_fetch_assoc($res);
}


function fshijPerdorues($perdoruesiid)
{
    global $dbconn;

    $sql = "DELETE FROM perdoruesit WHERE perdoruesiid = $perdoruesiid";
    $res = mysqli_query($dbconn, $sql);
    if($res)
    {
        header("Location: perdoruesit.php");
    }
}
function shtoPerdorues($emri,$mbiemri,$roli,$nrpersonal,$telefoni,$email,$fjalekalimi){
    global $dbconn;
    $sql="INSERT INTO perdoruesit(emri, mbiemri, email, fjalekalimi, telefoni, nrpersonal, roli) VALUES ";
    $sql.="('$emri', '$mbiemri', '$email', '$fjalekalimi', '$telefoni', '$nrpersonal', '$roli')";
    $res=mysqli_query($dbconn,$sql);
    if($res){
        $_SESSION['message']="Perdoruesi u shtua me sukses";
        header("Location: perdoruesit.php");
    }else{
        die("Deshtoi shtimi i perdoruesit" . mysqli_error($dbconn));
    }
}

function modifikoPerdorues($perdoruesiid,$emri,$mbiemri,$roli,$nrpersonal,$telefoni,$email,$fjalekalimi){
    global $dbconn;
    $sql="UPDATE perdoruesit SET emri='$emri', mbiemri='$mbiemri', email='$email' ,";
    $sql.="fjalekalimi='$fjalekalimi', telefoni='$telefoni', nrpersonal='$nrpersonal'";
    $sql.=", roli='$roli' WHERE perdoruesiid=$perdoruesiid ";
    $res=mysqli_query($dbconn,$sql);
    if($res){
        $_SESSION['message']="Perdoruesi u modifukua me sukses";
        header("Location: perdoruesit.php");
    }else{
        die("Deshtoi modifikimi i perdoruesit" . mysqli_error($dbconn));
    }
}
/** */

function merrRezervimet(){
    global $dbconn;
    $sql="SELECT r.rezervimiid, a.emri, CONCAT(k.emri,' ',k.mbiemri) AS emrimbiemri, r.datamarrjes, r.datakthimit";
    $sql.=" FROM rezervimet r INNER JOIN automjetet a  ON a.automjetiid=r.automjetiid INNER JOIN klientet k ON r.klientiid=k.klientiid";
    $sql.=" ORDER BY r.rezervimiid DESC";
    return mysqli_query($dbconn,$sql);
}
function merrRezervimId($rezervimiid){
    global $dbconn;
    $sql="SELECT r.rezervimiid,a.automjetiid, a.emri,k.klientiid, CONCAT(k.emri,' ',k.mbiemri) AS emrimbiemri, r.datamarrjes, r.datakthimit";
    $sql.=" FROM rezervimet r INNER JOIN automjetet a  ON a.automjetiid=r.automjetiid INNER JOIN klientet k ON r.klientiid=k.klientiid";
    $sql.=" WHERE rezervimiid=$rezervimiid";
    $res=mysqli_query($dbconn,$sql);
    return mysqli_fetch_assoc($res);
}
function shtoRezervim($klientiid,$automjetiid,$datamarrjes,$datakthimit){
    global $dbconn;

    $perdoruesiid=$_SESSION['user']['perdoruesiid'];
    $sql="INSERT INTO rezervimet(klientiid, automjetiid, perdoruesiid, datamarrjes, datakthimit) VALUES ";
    $sql.="('$klientiid', '$automjetiid', '$perdoruesiid', '$datamarrjes', '$datakthimit')";
    $res=mysqli_query($dbconn,$sql);
    if($res){
        $_SESSION['message']="Rezervimi u shtua me sukses";
        header("Location: rezervimet.php");
    }else{
        die("Deshtoi shtimi i rezervimit" . mysqli_error($dbconn));
    }
}
function modifikoRezervim($rezervimiid,$klientiid,$automjetiid,$datamarrjes,$datakthimit){
    global $dbconn;

    $perdoruesiid=2;
    $sql="UPDATE rezervimet  SET klientiid='$klientiid', automjetiid='$automjetiid', perdoruesiid='$perdoruesiid',";
    $sql.=" datamarrjes='$datamarrjes', datakthimit='$datakthimit' WHERE rezervimiid=$rezervimiid ";
    $res=mysqli_query($dbconn,$sql);
    if($res){
        $_SESSION['message']="Rezervimi u modifiku me sukses";
        header("Location: rezervimet.php");
    }else{
        die("Deshtoi modifikimi i rezervimit" . mysqli_error($dbconn));
    }
}

/** */


function merrKategori()
{
    global $dbconn;

    $sql ="SELECT kategoriid, emri, pershkrimi FROM kategorit";
    return mysqli_query($dbconn, $sql);
}

function merrKategoriId($kategoriid)
{
    global $dbconn;

    $sql = "SELECT kategoriid, emri, pershkrimi FROM kategorit WHERE kategoriid = $kategoriid";
    $res = mysqli_query($dbconn, $sql);
    return mysqli_fetch_assoc($res);
}

function fshijKategori($kategoriid)
{
    global $dbconn; 

    $sql = "DELETE FROM kategorit WHERE kategoriid = $kategoriid";
    $res = mysqli_query($dbconn, $sql);
    if($res)
    {
        header("Location: kategorit.php");
    }
}

function shtoKategori($emri, $pershkrimi)
{
    global $dbconn;

    $sql = "INSERT INTO kategorit(emri, pershkrimi) VALUES ('$emri','$pershkrimi')";
    $res = mysqli_query($dbconn, $sql);
    if($res) 
    {
        $_SESSION['message'] = "Kategoria u shtua me sukses";
        header("Location: kategorit.php");
    }
    else
    {
        die ("Kategoria deshtoi te shtohet " . mysqli_error($dbconn));
    }
}

function modifikoKategori($kategoriid, $emri, $pershkrimi)
{
    global $dbconn;

    $sql = "UPDATE kategorit SET emri = '$emri', pershkrimi = '$pershkrimi' WHERE kategoriid = $kategoriid";
    $res = mysqli_query($dbconn, $sql);
    if($res) 
    {
        $_SESSION['message'] = "Kategoria u modifikua me sukses";
        header("Location: kategorit.php");
    }
    else
    {
        die("Kategoria deshtoi te modifikohet" . mysqli_error($dbconn)); 
    }

}
/** */


function merrAutomjetet(){
    global $dbconn;
    // $sql="SELECT * FROM automjetet";
    // return mysqli_query($dbconn,$sql); 

    $sql = "SELECT a.automjetiid, a.emri, k.kategoriid, k.pershkrimi, a.nrregjistrimi, a.vitiprodhimit, a.cmimi ";
    $sql .= " FROM automjetet a INNER JOIN kategorit k ON a.kategoriid = k.kategoriid ";
    return mysqli_query($dbconn,$sql); 
}

function merrAutomjetId($automjetiid)
{
    global $dbconn;

    $sql = "SELECT a.emri, k.kategoriid, k.pershkrimi, a.nrregjistrimi, a.vitiprodhimit, a.cmimi ";
    $sql .= " FROM automjetet a INNER JOIN kategorit k ON a.kategoriid = k.kategoriid ";
    $sql .= "WHERE automjetiid = $automjetiid";
    $res = mysqli_query($dbconn, $sql);
    return mysqli_fetch_assoc($res);
}

function shtoAutomjete($emri, $kategoriid, $nrregjistrimi, $vitiprodhimit, $cmimi)
{

    global $dbconn;

    $sql = "INSERT INTO automjetet(emri, kategoriid, nrregjistrimi, vitiprodhimit, cmimi) VALUES ";
    $sql .= " ('$emri','$kategoriid','$nrregjistrimi','$vitiprodhimit','$cmimi')";
    $res = mysqli_query($dbconn, $sql);
    if($res)
    {
        header("Location: automjetet.php");
    }
}

function modifikoAutomjete($automjetiid, $emri, $kategoriid, $nrregjistrimi, $vitiprodhimit, $cmimi)
{
    global $dbconn;

    $sql = "UPDATE automjetet SET emri = '$emri', kategoriid = '$kategoriid', nrregjistrimi = '$nrregjistrimi', ";
    $sql .= " vitiprodhimit = '$vitiprodhimit', cmimi = '$cmimi' WHERE automjetiid = $automjetiid";
    $res = mysqli_query($dbconn, $sql);
    if($res)
    {
        header("Location: automjetet.php");
    }
}

function fshijAutomjete($automjetiid)
{
    global $dbconn;

    $sql = "DELETE FROM automjetet WHERE automjetiid = $automjetiid";
    $res = mysqli_query($dbconn, $sql);
    if($res)
    {
        header("Location: automjetet.php");
    }
}

/** */
function merrKlientet(){
    global $dbconn;
    $sql="SELECT * FROM klientet";
    return mysqli_query($dbconn,$sql); 
}



?>
