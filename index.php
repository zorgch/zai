<?php



$conn = mysql_connect("localhost","web3","");

mysql_select_db("usr_web3_1",$conn);



function fl ($secs=1) {

  flush();

  sleep($secs);

}

function optionlist($value,$text,$selected="") {
  $html = "<OPTION value=\"$value\">$text</OPTION>\n";
  if($selected == $value) {
    $html = "<OPTION value=\"$value\" selected>$text</OPTION>\n";
  }
  return $html;
}

function umls ($text) {

  $replace = array("ö" => "&ouml;", "ä" => "&auml;", "ü" => "&uuml;");

  foreach($replace as $key => $value) {

    $text = str_replace($key,$value,$text);

  }

  return $text;

}

function done($color="green") {

  if($color == "green") {

    $col = "#00ff00";

  } else {

    $col = "#FF0000";

  }

  $html = "<FONT face = \"verdana\" size = \"2\" color =\"$col\"> done</FONT>\n";

  return $html;

}



//Initialisation sequenz:

$system = "zai@zooom:~\$ ";

srand((double)microtime()*1000000);

$num = rand(0,10000);

$host = gethostbyaddr($REMOTE_ADDR);

$s1 = ":~\$ starting system<BR>\n";

$s2 = ":~\$ reading database<BR>\n";

$s3 = ":~\$ network now online<BR>\n";

$s4 = ":~\$ connected to host<BR>\n";

$s5 = ":~\$ get system information\n";

$s6 = ":~\$ compiling AI on system hardware\n";

$s7 = "............";

$s8 =  "<BR>:~\$ compilation complete<BR>\n";

$s9 = ":~\$ starting zooom AI<BR>\n";

$s10 = "initializing";

$s11 = "......";

$s12 = "<BR>".$system."initialization complete, loading spell libary<BR>\n";

$s13 = $system."loading complete, output system started now!<BR>\n";

$s14 = $system."search for user information started\n";

$s15 = "........";

$s16 = "<BR>".$system."Search complete, ".$num." results found in database<BR>\n";

$s17 = $system."initializing input system\n";

$s18 = ".....";

$s19 = "<BR>".$system."input system now ready<BR>\n";

$s28 = $system."starting input devices\n";

$s22 = $system."initializing output system\n";

$s23 = "<BR>".$system."initializing languages\n";

$s24 = "<BR>".$system."AI now ready for connections<BR>\n";

$s25 = $system."get user information from client\n";

$s26 = $system."starting AI now with autopilot";

$s27 = $system."initializing emotion module";

$s20 = $system."<B>Let's Rock</B><BR>\n";

$s21 = "-----------------------------------------------------<BR>";



$seq = $s1.$s2.$s3.$s4.$s5.$s6.$s7.$s8.$s9.$s10.$s11.$s12.$s13.$s14.$s15.$s16.$s17.$s18.$s19.$s20.$s21;



echo "<HTML>\n";

echo "<HEAD><TITLE>zooom AI</TITLE></HEAD>\n";

echo "<BODY bgcolor = \"#2C273F\" text = \"#FAF5F0\">\n";

echo "<BR><BR><BR>\n";

echo "<FONT face = \"verdana\" size = \"5\">\n";

echo "<B>zooom Artificial Intelligence</B>";

echo "</FONT>\n";

echo "<FONT face = \"verdana\" size = \"2\">\n";

echo "<BR><BR>\n";

echo "<FORM action = \"$PHP_SELF\" method = \"post\">\n";

echo "<BR><BR>\n";

echo "Name: ";

echo "<INPUT type = \"text\" name = \"uname\" value = \"$uname\">\n";

echo "<BR>\n";

echo "<BR>\n";

echo "<TEXTAREA name = \"input\" cols = \"60\" rows = \"5\"></TEXTAREA>\n";

echo "<BR><INPUT type = \"submit\" name = \"send\" value = \"send msg\">\n";

echo "Language: ";

echo "<SELECT name = \"language\" size = \"1\">\n";

$list = array("wort" => "zooomisch","dewort" => "anfick");

foreach($list as $value => $text) {

  echo optionlist($value,$text,$language);

}

echo "</SELECT>\n";



if($language == "") { $language = "wort"; }

$sql = "SELECT ".$language." FROM zooomai WHERE ".$language." <> '' ";

$result = mysql_query($sql, $conn);

while($rs = mysql_fetch_array($result)) {

  $worter[] = $rs[0];

}



if($send && $uname != "" && $start) {

  $host = gethostbyaddr($REMOTE_ADDR);

  $insert = mysql_query("INSERT into zooomai (name, text, host) VALUES ('$uname', '$input','$host')",$conn);

  $wieheisstdu = substr_count($input,"Wie heisst du");

  $vonwo = substr_count($input,"Ich bin von");

  echo "<BR><BR><BR>\n";

  echo "<FONT face = \"verdana\" size = \"2\">\n";

  echo "<BR><BR><HR noshade size = \"1\" width = \"400\" align = \"left\" color = \"#FAF5F0\">\n";

  echo "<BR>\n";

  if($wieheisstdu >= 1) {

    echo $system;

    echo "my name's zooomAI and your name is ".$uname."<BR>\n";

    fl(2);

    echo $system;

    echo "Where are you from ?<BR>\n";

    fl(2);

    echo $system;

    fl();

    echo "Are you";

    fl(2);

    echo " com from ";

    fl(2);

    echo "hell ?<BR>\n";

    fl(4);

    echo $system;

    echo "I'm a realy friendly artificial intelligence!<BR>\n";

    fl(2);

    echo $system."Don't forget that!";

    fl();

  } else {

    if($wonwo >= 1) {

      echo $system;

      echo "Wow!<BR>";

      fl(2);

      echo "I know where that fucked nation is!<BR>";

      fl(3);

      echo "Please go home to your muther, nutt&auml;chind!<BR>";

      fl(2);

      echo "Shit!<BR>";

      fl();

      echo $system." heavy fail, on AI, AI shutdown now!";

      fl(5);

      echo done()."<BR>\n";

      fl();

      echo ":~\$ System instable, please disconnect now!<BR>\n";

      fl(3);

      echo ":~\$ System is down in 5 seconds!<BR>\n";

      fl(5);

      echo done();

      $start = FALSE;

    } else {

      echo $old;

      $user =  $uname."@zooom:~\$ ";

      echo $user;

      echo nl2br($input)."<BR>\n";

      $old .= $user.$input."<BR>\n";

      fl();

      echo $system;

      fl();

      if($language == "dewort") {

        echo "du ";

        $oldchr .= "du ";

      }

      $len = strlen($uname) + strlen($input);

      for($i = 0;$i <= $len;$i++) {

        $bc = $i % 10;

        srand((double)microtime()*1000000);

        $num = count($worter);

        $rand = rand(0,$num);

        $char = $worter[$rand];

        if($language == "dewort") {

          $nach = 4;

        }elseif($language == "wort") {

          $nach = 9;

        }

        if($bc == $nach) {

          $hm = $char." <BR>";

          echo $hm;

        } else {

          $hm = $char." ";

          echo $hm;

        }

        $oldchr .= $hm;



        flush();

        sleep(1);

      }

      if($language == "dewort") {

        echo " arschloch ";

        $oldchr .= " arschloch ";

      }

      $old .= $system.$oldchr."<BR>";

      echo "<INPUT type = \"hidden\" name = \"old\" value =\"$old\">\n";

    }

  }

  echo "<INPUT type = \"hidden\" name = \"start\" value = \"$start\">\n";

  echo "<BR>";

  echo "</FONT>";

} elseif(!$send) {

  $system = "zai@zooom:~\$ ";

  echo "<BR><BR><BR>\n";

  echo "<FONT face = \"verdana\" size = \"2\">\n";

  echo "<BR><BR><HR noshade size = \"1\" width = \"400\" align = \"left\" color = \"#FAF5F0\">\n";

  echo "<BR>\n";

  echo $s1;

  fl(2);

  echo $s2;

  fl(2);

  echo $s3;

  fl(2);

  echo $s4;

  fl(2);

  echo $s5;

  fl(2);

  echo done();

  fl(2);

  echo "<BR>";

  echo $s6;

  fl(2);

  for($i = 0;$i<=12;$i++) {

    echo ".";

    fl();

  }

  echo $s8;

  fl();

  echo $s9;

  fl(2);

  echo $s10;

  for($i = 0; $i <= 6;$i++) {

    echo ".";

    fl();

  }

  echo $s12;

  fl(2);

  echo $s13;

  fl(2);

  echo $s14;

  fl(2);

  for($i = 0; $i <= 8; $i++) {

    echo ".";

    fl();

  }

  echo $s16;

  fl();

  echo $s17;

  fl(2);

  for($i = 0; $i <= 5;$i++) {

    echo ".";

    fl();

  }

  echo $s19;

  fl();

  echo $s28;

  fl(2);

  echo done();

  fl();

  echo "<BR>";

  echo $s22;

  fl();

  for($i = 0; $i<=6;$i++) {

    echo ".";

    fl();

  }

  echo $s23;

  fl();

  for($i=0;$i<=8;$i++) {

    echo ".";

    fl();

  }

  echo $s24;

  fl(2);

  echo $s26;

  fl(4);

  echo done();

  fl();

  echo "<BR>";

  echo $s27;

  fl(2);

  echo done();

  fl();

  echo "<BR>";

  echo $s25;

  fl(2);

    for($i = 0;$i <= strlen($host);$i++) {

    echo substr($host,$i,1);

    fl();

  }

  fl(3);

  echo done();

  fl();

  echo "<BR>";

  echo $s20;

  fl();

  echo $s21;

  $start = TRUE;

  fl();

  echo "<INPUT type = \"hidden\" name = \"start\" value = \"$start\">\n";

  echo "</FONT>\n";

} elseif($send && $uname == "" && $start) {

  echo "<BR><BR><BR>\n";

  echo "<FONT face = \"verdana\" size = \"2\">\n";

  echo "<BR><BR><HR noshade size = \"1\" width = \"400\" align = \"left\" color = \"#FAF5F0\">\n";

  echo "<BR>\n";

  echo $system;

  echo "for psychologic test is your name needed!<BR>";

  fl();

  echo $system;

  echo "please give me your real name!<BR>";

  fl(3);

  echo $system;

  echo "else";

  fl();

  echo " I will hate you";

  echo "</FONT>";

} elseif(!$start && $send && $uname != "") {

  echo "<BR><BR><BR>\n";

  echo "<FONT face = \"verdana\" size = \"2\">\n";

  echo "<BR><BR><HR noshade size = \"1\" width = \"400\" align = \"left\" color = \"#FAF5F0\">\n";

  echo "<BR>\n";

  echo $system;

  fl();

  echo "initializing sequence isn't done!<BR>\n";

  fl();

  echo $system." please restart, and wait!<BR>\n";

  echo "</FONT>";

}

  



echo "</FORM></BODY></HTML>\n";