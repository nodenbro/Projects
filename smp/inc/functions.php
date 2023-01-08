<?php 
    session_start();
    $dbConn = "";
    dbConnection();
    function dbConnection()
    {
        global $dbConn;

        $dbConn = mysqli_connect('localhost', 'root', '', 'smp');
        if(!$dbConn)
        {
            die("Lidhje me deshtoi te realizohet " . mysqli_error($dbConn));
        }
    }

    // Funksionet per Login

    function login($email, $fjalekalimi)
    {
        global $dbConn;

        $sql = "SELECT  antariid, emri, mbiemri, telefoni, email, roli FROM antaret";
        $sql .= " WHERE email = '$email' AND fjalekalimi = '$fjalekalimi'";
        $logindata = mysqli_query($dbConn, $sql);
        if(mysqli_num_rows($logindata) == 1)
        {
            $logindata = mysqli_fetch_assoc($logindata);
            $antari = array();
            $antari['antariid'] = $logindata['antariid'];
            $antari['emrimbiemri'] = $logindata['emri']. " " . $_POST['mbiemri'];
            $antari['roli'] = $logindata['roli'];
            $_SESSION['antari'] = $antari;
            header("Location: punet.php");
        }
        else
        {
            echo "Nuk ka antar me keto kredenciale";
        }
    }

    // Funksionet per Login

    // Funksionet per faqen Antaret
    function merrAntaret()
    {
        global $dbConn;

        $sql = "SELECT antariid, emri, mbiemri, telefoni, email FROM antaret" ;
        return $antaret = mysqli_query($dbConn, $sql);
    }
    function merrAntarId($aid)
    {
        global $dbConn;
        $sql = "SELECT antariid, emri, mbiemri, telefoni, email, fjalekalimi FROM antaret WHERE antariid = $aid" ;
        return $antari = mysqli_query($dbConn, $sql);
    }

    function fshijAntar($antariid)
    {
        global $dbConn;

        $sql = "DELETE FROM antaret WHERE antariid = $antariid";
        $antari = mysqli_query($dbConn, $sql);
        if($antari)
        {
            $_SESSION['message'] = "Antari u fshi me sukses";
            header("Location: antaret.php");
        }
        else 
        {
            die ("Antari deshtoi te fshihet. " .mysqli_error($dbConn));       
        }
    }
    function shtoAntar($emri, $mbiemri, $telefoni, $email, $fjalekalimi)
    {
        global $dbConn;

        $sql = "INSERT INTO antaret( emri, mbiemri, telefoni, email, fjalekalimi) VALUES " ;
        $sql .= "('$emri', '$mbiemri', '$telefoni', '$email', '$fjalekalimi')";
        
        $antari = mysqli_query($dbConn, $sql);
        if($antari)
        {
            $_SESSION['message'] = "Antari u shtua me sukses";
            header("Location: antaret.php");
        }
        else 
        {
            die ("Antari deshtoi te shtohet. " .mysqli_error($dbConn));
            
        }


    }
    function modifikoAntar($antariid, $emri, $mbiemri, $telefoni, $email, $fjalekalimi)
    {
        global $dbConn;

        $sql = "UPDATE antaret SET emri = '$emri', mbiemri = '$mbiemri', telefoni = '$telefoni',";
        $sql.=" email = '$email', fjalekalimi = '$fjalekalimi' WHERE antariid = $antariid";
        $antari = mysqli_query($dbConn, $sql);
        if($antari)
        {
            $_SESSION['message'] = "Antari u mpdifikua me sukses";
            header("Location: antaret.php");
        }
        else 
        {
            die ("Antari deshtoi te modifikohet. " .mysqli_error($dbConn));
        }
    }

    // Funksionet per faqen Antaret

    // Funksionet per faqen Projektet

    function merrProjektet()
    {
        global $dbConn;

        $sql = "SELECT projektiid ,emri, pershkrimi, datafillimit, datambarimit FROM projektet" ;
        return $projektet = mysqli_query($dbConn, $sql);
    }

    function merrProjektId($pid)
    {
        global $dbConn;

        $sql = "SELECT projektiid, emri, pershkrimi, datafillimit, datambarimit FROM projektet WHERE projektiid = $pid";
        return $projekti = mysqli_query($dbConn, $sql);
    }

    function fshijProjekt($projektiid)
    {
        global $dbConn;

        $sql = "DELETE FROM projektet WHERE projektiid = $projektiid";
        $projekti = mysqli_query($dbConn, $sql);
        if($projekti)
        {
            $_SESSION['message'] = "Projekti u fshi me sukses";
            header("Location: projektet.php");
        }
        else 
        {
            die ("Projekti deshtoi te fshihet. " .mysqli_error($dbConn));       
        }
    }

    function modifikoProjekt($projektiid, $emri, $pershkrimi, $datafillimit, $datambarimit)
    {
        global $dbConn;

        $sql = "UPDATE projektet SET emri = '$emri',pershkrimi = '$pershkrimi',";
        $sql .= " datafillimit ='$datafillimit',datambarimit = '$datafillimit' WHERE projektiid = $projektiid";
        $projekti = mysqli_query($dbConn, $sql);
        if($projekti)
            {
                $_SESSION['message'] = "Projekti u modifikua me sukses";
                header("Location: projektet.php");
            }
            else 
            {
                die ("Projekti deshtoi te modifikohet. " .mysqli_error($dbConn));
            }
    }

    function shtoProjekte($emri, $pershkrimi, $datafillimit, $datambarimit)
    {
        global $dbConn;  

        $sql = "INSERT INTO projektet(emri, pershkrimi, datafillimit, datambarimit) VALUES " ;
        $sql .= "('$emri', '$pershkrimi', '$datafillimit', '$datambarimit')";
        
        $projekti = mysqli_query($dbConn, $sql);
        if($projekti)
        {
            $_SESSION['message'] = "Projekti u shtua me sukses";
            header("Location: projektet.php");
        }
        else 
        {
            die ("Projekti deshtoi te shtohet. " .mysqli_error($dbConn));
        }


    }

    // Funksionet per faqen Projektet

    // Funksionet per faqen Home

    function merrAntarRoli()
    {
        global $dbConn;

        $sql = "SELECT antariid, emri, mbiemri, datalindjes, telefoni, email, roli FROM antaret ";
        $sql .= " WHERE roli = 1";
        return $antaret = mysqli_query($dbConn, $sql);
    }

    // Funksionet per faqen Home

    //Funksionet per faqen  Punet

    function merrPunet()
    {
        global $dbConn;

        // $antariid = $_SESSION['antari']['antariid'];
        $sql = "SELECT p.punaid, p.projektiid, pr.emri, p.data, p.pershkrimi ";
        $sql .= "FROM punet p INNER JOIN projektet pr ON p.projektiid=pr.projektiid ";
        //echo $_SESSION['antari']['roli'];
        // if($_SESSION['antari']['roli'] == 0) 
        // {
        //     $sql .= "WHERE p.antariid = $antariid";
        // }
        return mysqli_query($dbConn, $sql);
    }
    function merrPuneId($punaid)
    {
        global $dbConn;

        $sql = " SELECT p.punaid,p.data,p.pershkrimi,pr.projektiid,pr.emri";
        $sql .= " FROM punet p INNER JOIN projektet pr ON p.projektiid = pr.projektiid";
        $sql .= " WHERE punaid = $punaid";
        $puna_data = mysqli_query($dbConn, $sql);
        return mysqli_fetch_assoc($puna_data);
    }

    function shtoPune($projektiid, $data, $pershkrimi)
    {
        global $dbConn;
        $antariid = $_SESSION['antari']['antariid'];

        $sql = "INSERT INTO punet(antariid, projektiid, data, pershkrimi) VALUES ";
        $sql .= " ('$antariid', '$projektiid', '$data', '$pershkrimi')";

        $pune = mysqli_query($dbConn, $sql);
        if($pune)
        {
            $_SESSION['message'] = "Puna u shtua me sukses";
            header("Location: punet.php");
        }
        else 
        {
            die ("Puna deshtoi te shtohet. " . mysqli_error($dbConn));
        }

    }
    function modifikoPune($punaid, $projektiid, $datapune, $pershkrimi) {
        global $dbConn;

        $sql ="UPDATE punet SET projektiid='$projektiid', data='$datapune', ";
        $sql .= " pershkrimi='$pershkrimi' WHERE punaid = '$punaid'";
        $pune = mysqli_query($dbConn, $sql);
        if($pune)
        {
            $_SESSION['message'] = "Puna u modifikua me sukses";
            header("Location: punet.php");
        }
        else
        {
            echo "Puna deshtoi te modifikohet" . mysqli_error($dbConn);
        }
    }
    function fshijPune($punaid)
    {
        global $dbConn;

        $sql = "DELETE FROM punet WHERE punaid = $punaid";
        $puna = mysqli_query($dbConn, $sql);
        if($puna)
        {
            $_SESSION['message'] = "Puna u fshi me sukses";
            header("Location: punet.php");
        }
        else 
        {
            echo "Puna deshtoi te fshihet" . mysqli_error($dbConn);
        }
    }

    //Funksionet per faqen Punet

?>