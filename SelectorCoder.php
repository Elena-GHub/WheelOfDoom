<?php
namespace App;


final class SelectorCoder{
    function getName($coders) {
        shuffle($coders);
        return $coders[0];

    }

    }

