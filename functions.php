<?php


isNonEmptyString($string) {
    return is_string($string) && !empty($string);
}

getTplImg($path = null) {
    isNonEmptyString($path);
}
