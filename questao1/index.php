<?php

function SeculoAno($ano){
    if ($ano == 1) return 1;
    if ($ano < 1) return null;
    return intval(($ano - 1) / 100 + 1);
}
