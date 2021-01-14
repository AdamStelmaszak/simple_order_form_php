<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
            $quantity = array($_POST['q_pants'], $_POST['q_cap'], $_POST['q_jacket'], $_POST['il_koszula'], $_POST['q_tshirt'], $_POST['q_hoodie']);
            for($j = 0; is_countable($products) ; $j++){
                if(!isset($products[$j]))
                ($quantity[$j])==0;
            
            }
            
            
            (string)$firstname = $_POST['firstname'];
            (string)$lastname = $_POST['lastname'];
            (string)$address = $_POST['address'];
            (string)$email = $_POST['e-mail'];
            (string)$phone_number = $_POST['phone_number'];
            echo 'Imie: '. $firstname .'<br />';
            echo 'Nazwisko: '. $lastname.'<br />';
            echo 'Adres: '. $address .'<br />';
            echo 'E-mail:'. $email .'<br />';
            echo 'Nr telefonu: '. $phone_number.'<br />'.'<br />';



            
           $totality = 0;
           $k = 0;
           $in_total = 0;
           $prices = array(110, 20, 210, 80, 45, 150);
           for($i = 0; $i < count($quantity); $i++){
                    $in_total = 0;
                    if(($quantity[$i])!= 0){
                    echo $_POST['product'][$k].'<br />';
                  
                  
                   echo "Cena: = ";
                   echo ($prices[$i]).'<br />';    
                   echo "Sztuk: = ";
                   echo ($quantity[$i]).'<br />';
                   echo "Razem: ";
                   $in_total = $prices[$i]*$quantity[$i];
                   echo ($in_total);
                   echo " PLN".'<br />';
                  
                   if($quantity[$i] > 5){
                   $prices[$i] = $prices[$i]*0.9;
                   echo "Cena po rabacie: ";
                   $in_total = $prices[$i]*$quantity[$i];
                   echo ($in_total);
                   echo " PLN".'<br />';    
                   }
                   $totality = $totality+$in_total;
                   $k++;
                   echo '<br/>';
                   }
            }
          
           echo "Zapłacona kwota łącznie = ";
           echo ($totality);
           echo " PLN";
           echo '<br /><br />';
           echo '<h2>Dziękujemy i zapraszamy ponownie!</h2>';

$break="____________________";
$totality_text= "Zapłacona kwota łącznie =  ";
$pln_txt= " PLN";
$file='baza.txt';

if(!is_file($file))
{

$new_entry=$firstname.PHP_EOL.$lastname.PHP_EOL.$address.PHP_EOL.$email.PHP_EOL.$phone_number.PHP_EOL.$totality_text.$totality.$pln_txt;

if(file_put_contents($file,$new_entry) !==false)
{
    echo'Zapis do pliku udany';
}

else
{
    echo 'Błąd przy zapisywaniu pliku';
}
    
}

else
{
    $previous_entries = file_get_contents($file);
$new_entry=$previous_entries.PHP_EOL.$break.PHP_EOL.$firstname.PHP_EOL.$lastname.PHP_EOL.$address.PHP_EOL.$email.PHP_EOL.$phone_number.PHP_EOL.$totality_text.$totality.$pln_txt;

if(file_put_contents($file,$new_entry) !==false)
{
    echo'Zapis do pliku udany';
}

else
{
    echo 'Błąd przy zapisywaniu pliku';
}
    
}
           ?>
