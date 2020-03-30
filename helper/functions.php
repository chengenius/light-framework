<?php

function config($conf_name)
{
    global $$conf_name;
    return $$conf_name;
}