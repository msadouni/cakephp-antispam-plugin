<?php
class AntispamComponent extends Object {

    var $fields = array('email', 'comment', 'url', 'website', 'login');

    function isSpam($data) {
        foreach ($this->fields as $f) {
            if (!empty($data[$f])) {
                return true;
            }
        }
        return false;
    }
}

