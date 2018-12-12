<?php

class Index
{

    function someDeliberatelyBadCodeStyle()
    {
        return json_encode([ 'dog']);
    }

    protected function more()
    {
        return [

          'heloo', 'world','okay', 'nomore'
        ];
    }

    const test = 'here';

    function noVisibility()
    {
    }

    private function oneMore($test = null)
    {
        return function (...  $args) {
            return array_walk($this->more(), function ($param) {
                if (!$param) {
                    $this->tellAJudge();
                }
            });
        };
    }

    public function tellAJudge()
    {
        return'ok!';
    }
}
