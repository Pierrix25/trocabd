-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Serveur: localhost
-- Généré le : Lun 29 Septembre 2014
-- Version du serveur: 5.0.45
-- Version de PHP: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de données: `trocabd`
-- 


-- 
-- Structure de la table `album`
-- 

ALTER TABLE `album` 
  ADD COLUMN `note` int(11) default 0 AFTER   `utilisateur_id`;



