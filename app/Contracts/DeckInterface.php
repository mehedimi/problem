<?php
namespace App\Contracts;

interface DeckInterface
{
	public function shuffle();

	public function deal(int $hands);
}