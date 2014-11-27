<?php

include_once("Function_Sql.php");


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
}
class Output_XML
{
 public function Out_XML($Array)
 {
 				$converter = new Array2XML();
				$xmlStr = $converter->convert($Array);
 
 				echo $xmlStr;
 }
}

class Array2XML {
     
    private $writer;
    private $version = '1.0';
    private $encoding = 'UTF-8';
    private $rootName = 'root';
     
 
    function __construct() {
        $this->writer = new XMLWriter();
    }
     
    public function convert($data) {
        $this->writer->openMemory();
        $this->writer->startDocument($this->version, $this->encoding);
        $this->writer->startElement($this->rootName);
        if (is_array($data)) {
            $this->getXML($data);
        }
        $this->writer->endElement();
        return $this->writer->outputMemory();
    }
    public function setVersion($version) {
        $this->version = $version;
    }
    public function setEncoding($encoding) {
        $this->encoding = $encoding;
    }
    public function setRootName($rootName) {
        $this->rootName = $rootName;
    }
    private function getXML($data) {
        foreach ($data as $key => $val) {
            if (is_numeric($key)) {
                $key = 'key'.$key;
            }
            if (is_array($val)) {
                $this->writer->startElement($key);
                $this->getXML($val);
                $this->writer->endElement();
            }
            else {
                $this->writer->writeElement($key, $val);
            }
        }
    }
}


?>				
