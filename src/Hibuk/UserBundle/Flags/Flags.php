<?php

namespace Hibuk\UserBundle\Flags

/**
 * Définit les différents "Flags" pouvant être apposés
 * à un utilisateur
 */
class Flags
{
	/**
	 * Flag apposé sur un utilisateur blamé pour une mauvaise transaction
	 */
	const BLAME = 'flag_blame';

	/**
	 * Flag apposé sur un utilisateur ayant montré qu'il est digne de confiance
	 */
	const TRUSTWORTHY = 'flag_trustworthy';
}