<?php

class Model_websepatu extends CI_Model
{
    public $merksepatu, $harga;
    public function getmerk($merksepatu = null){
        $this->merksepatu = $merksepatu;
        if ($this->merksepatu == "Nike") {
            $this->harga = "4.500.000";
        } elseif ($this->merksepatu == "Adiddas") {
            $this->harga = "3.000.000";
        } elseif ($this->merksepatu == "Puma") {
            $this->harga = "3.500.000";
        } elseif ($this->merksepatu == "Compass") {
            $this->harga = "1.500.000";
        } elseif ($this->merksepatu == "Air Jordan") {
            $this->harga = "15.000.000";
        }
        return $this->harga;
    }
}
