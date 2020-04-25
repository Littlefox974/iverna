<?php
namespace App;
use simplehtmldom\HtmlWeb;

class ZoneFilmsScrapper {
 
  /**
   * @var ZoneFilmsScrapper
   * @access private
   * @static
   */
   private static $_instance = null;

   private $movieData;
 
   /**
    * Constructeur de la classe
    *
    * @param void
    * @return void
    */
   private function __construct() {  
       $this->movieData = $this->generateTable();

   }

   public static function getMovieData()
   {
      return ZoneFilmsScrapper::getInstance()->movieData;
   }
 
   /**
    * Méthode qui crée l'unique instance de la classe
    * si elle n'existe pas encore puis la retourne.
    *
    * @param void
    * @return ZoneFilmsScrapper
    */
   public static function getInstance() {
 
    if(is_null(self::$_instance)) 
    {
        self::$_instance = new ZoneFilmsScrapper();  
    }
    return self::$_instance;
   }

   public function generateTable()
   // Find all films
   {
    $films = array();
    // Find all films
    $page = (new HtmlWeb())->load('https://www.zone-films.stream');
    $nbPageTotal = 2;//intval($page->find('div.navigation', 0)->lastChild()->plaintext);
    for($i=1; $i < $nbPageTotal+1; $i++)
    {   echo"Processing Page: $i / $nbPageTotal \n";
        $url = (new HtmlWeb())->load("https://www.zone-films.stream/page/$i");
        foreach ($url->find('div.th-item') as $elements) {
            $string = trim($elements->find('div.th-subtitle', 0)->plaintext, "- \n\r\0");
            preg_match("/\((\d+)\)(.*)/", $string, $matches, PREG_OFFSET_CAPTURE);
            
            $qualityNode = $elements->find('span.ribbon', 0);
            if($qualityNode != null)
            {
                $quality = $qualityNode->plaintext;
            }
            else{
                $quality="null";
            }

            if(array_key_exists (1 , $matches))
            {
                $years = $matches[1][0];
            }
            else{
                $years = "null";
            }


            if(array_key_exists (1 , $matches))
            {
                $years = $matches[1][0];
            }
            else{
                $years = "null";
            }
            if(array_key_exists (2 , $matches))
            {
                $genres = $matches[2][0];
            }
            else{
                $genres = "null";
            }

            $films[] = [
                'title' => trim($elements->find('div.th-title', 0)->innerText()),
                'year' => $years, 
                'quality' => $quality,
                'genres' => array_map('trim', explode(",", $genres)),
                'url' => $elements->first_child()->href
            ];     
        }
    }
   
    return $films;
   }
}

