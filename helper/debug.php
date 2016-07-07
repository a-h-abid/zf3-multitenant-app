<?php

/**
 * Dump Data
 * 
 * @param  mixed  $var   
 * @param  string  $label 
 * @param  boolean $echo  
 * @return string         
 */
function d($var, $label = null, $echo = true)
{
    return Zend\Debug\Debug::dump($var, $label, $echo);
}

/**
 * Dump Data and Die
 * 
 * @param  mixed $var  
 * @param  string $label
 * @return void       
 */
function dd($var, $label = null)
{
    Zend\Debug\Debug::dump($var, $label, true);
    die;
}