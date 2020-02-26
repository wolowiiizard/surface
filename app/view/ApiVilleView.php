<?php

class ApiVilleView extends View
{
        public function render () {
        //    var_dump($this->data);
            json_encode($this->data);
        }

}
