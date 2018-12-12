<?php

class Index {

    function someDeliberatelyBadCodeStyle()    {

    }


    protected function more() {
        return [
          'heloo', 'world','okay', 'nomore'
        ];
    }


    


    private function oneMore($test   = null) {
        return function(...  $args)
        {
           return array_walk($this->more(),function( $param ){
               if( !$param ) {
                   $this->tellAJudge();
               }
           });
        };
    }

    public function tellAJudge() {
        return'ok!';
    }

}