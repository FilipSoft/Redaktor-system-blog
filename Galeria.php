<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Galeria
 *
 * @author My
 */
class Galeria {
   private $zloska;
        private $stlpcou;
           private $subory = array();

        public function __construct($zloska, $stlpcou)
        {
                $this->zloska = $zloska;
                $this->stlpcou = $stlpcou;
        }

        public function nacitaj() {
            $zloska = dir($this->zloska);
            
            while ($polozka = $zloska->read()){
                if(strpos($polozka, 'mini.')){
                    $this->subory [] = $polozka;
                }
            }
            $zloska->close();
        }
        
        public function vypis() {
             echo('<table id="galerie"><tr>');
        $stlpec = 0;
        
        foreach ($this->subory as $subor) {
          $nahlad = $this->zloska.'/'.$subor;
          $obrazok = $this->zloska . '/' . str_replace('_mini.', '.', $subor);
          echo('<td><a href="' . htmlspecialchars($obrazok) . '"><img src="' . htmlspecialchars($nahlad) . '" alt=""></a></td>');
            $stlpec++;
                if ($stlpec >= $this->stlpcou)
                {
                        echo('</tr><tr>');
                        $sloupec = 0;
                }
        }
        echo('</tr></table>');

        }      
}
