<?php

function toDisplayDate($date) {
    if ($phpDate = strtotime($date)) {
        return date('m/d/Y');
    } else {
        return "";
    }
}

function toMySQLDate($date) {
    if ($phpDate = strtotime($date)) {
        return date('Y/m/d', $phpDate);
    } else {
        return "";
    }
}

?>
