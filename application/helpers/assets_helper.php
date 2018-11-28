<?php

if (!function_exists('css_url')) {
  function css_url($nom) {
    return base_url() . 'assets/css/' . $nom . '.css';
  }
}

if (!function_exists('fonts_url')) {
  function fonts_url($nom) {
    return base_url() . 'assets/fonts/' . $nom;
  }
}

if (!function_exists('img_url')) {
  function img_url($nom) {
    return base_url() . 'assets/img/' . $nom;
  }
}

if (!function_exists('js_url')) {
  function js_url($nom) {
    return base_url() . 'assets/js/' . $nom . '.js';
  }
}