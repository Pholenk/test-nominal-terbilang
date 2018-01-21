<?php

namespace App\Traits;

trait BilanganTrait {
    
    public function nominalConverter($nominal)
    {
        $nominal = abs($nominal);
        $terbilang = array('', 'satu','dua','tiga','empat','lima','enam','tujuh','delapan','sembilan','sepuluh','sebelas');
        $tempSentence = "";
        if ($nominal < 12) {
            $tempSentence = " ".$terbilang[$nominal];
        }
        else if ($nominal < 20) {
            $tempSentence = $this->nominalConverter($nominal - 10).' belas rupiah';
        }
        else if ($nominal < 100) {
            $tempSentence = $this->nominalConverter($nominal / 10).' puluh '.$this->nominalConverter($nominal%10).' rupiah';
        }
        else if ($nominal < 200) {
            $tempSentence = 'seratus'.$this->nominalConverter($nominal - 100).' rupiah';
        }
        else if ($nominal < 1000) {
            $tempSentence = $this->nominalConverter($nominal / 100).' ratus '.$this->nominalConverter($nominal%100).' rupiah';
        }
        else if ($nominal < 2000) {
            $tempSentence = 'seribu '.$this->nominalConverter($nominal - 1000).' rupiah';
        }
        else if ($nominal < 1000000) {
            $tempSentence = $this->nominalConverter($nominal / 1000).' ribu '.$this->nominalConverter($nominal%1000).' rupiah';
        }
        else if ($nominal < 1000000000) {
            $tempSentence = $this->nominalConverter($nominal / 1000000).' juta '.$this->nominalConverter($nominal%1000000).' rupiah';
        }
        else if ($nominal === 1000000000) {
            $tempSentence = $this->nominalConverter($nominal / 1000000000).' milyar rupiah';
        }
        else if ($nominal > 1000000000) {
            $tempSentence = 'Nominal Terlalu Besar';
        }
        
        return $tempSentence;
    }

}