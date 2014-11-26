<?php

class Destroy
{
 public function Get_Inf()
 {
     switch ($_GET['option'])
     {
         case "zakazi":
                Get_Zakazi();  //Output Information about request
                break;
         case "otgryz": 
                Get_Otgryz($_GET['id_tovar'], $_GET['id_sclad], $_GET['kol_vo']);  //Spisanie tovara
                break;
         case "status_zakaza":
                Get_Status();
                break;
         case "dobavlenie_tov":
                Get_Dobav($_GET['name'], $_GET['kol_vo'], $_GET['sclad'], $_GET['opisanie'], $_GET]'kategory']); // Output tovaru from kategory
                break;
         case "see_rezerv":
                Get_Rezerv(); //Output zajavki v rezerve
                break; 
         case "spisok_tov":
                Get_SpisokTov($_GET['kategory']); //Output product of category
                break;
         case "pokypka_zajavka"
                Get_Pokypka($_GET['tovaru'], $_GET['kol_vo']);   //Input: list of products and numbers
                break;
         case "rezerv":
                Get_Rezerv($_GET['tovaru'], $_GET['kol_vo']);    //Input: list of products and numbers
                break;
         case "inf_tov":
                Get_Inf($_GET['id_tov']);                 //Output name, kol_vo, Inform
                break;
         default: echo('True');
     }
 }
  public function Output_XML(array Masiv)
  {
     
  }

  $ob = new Destroy;
  $ob->Get_Inf();
}

?>				
