<?php
declare(strict_types=1);
class nodo{
    public function __construct(
        public readonly int $id,
        public readonly string $nombre,
        public readonly float $precio,
        public readonly int $stock,
        
        public ?nodo $siguiente = null,
        public ?nodo $anterior = null,
    ){}
}