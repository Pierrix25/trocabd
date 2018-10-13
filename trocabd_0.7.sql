-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Serveur: localhost
-- Généré le : Mar 03 Avril 2012 à 21:10
-- Version du serveur: 5.0.45
-- Version de PHP: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de données: `trocabd`
-- 


-- 
-- Structure de la table `utilisateur`
-- 

ALTER TABLE `utilisateur` 
  ADD COLUMN `user_id` int(11) default NULL AFTER   `derniereConnexion`;



