-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 29-08-2017 a las 13:27:18
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `test_db`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `items`
-- 

CREATE TABLE `items` (
  `id` int(11) NOT NULL auto_increment,
  `image` varchar(250) NOT NULL,
  `description` varchar(300) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
