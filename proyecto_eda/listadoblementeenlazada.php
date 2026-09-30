<?php
declare(strict_types=1);

class listadoblementeenlazada{
    private ?nodo $cabeza =null;
    private ?nodo $cola =null;
    private int $tamano = 0 ;
    public function agregaralfinal(nodo $nodo){
        if($this -> cabeza ===null ){
            $this -> cabeza =$nodo;
            $this -> cola =$nodo;
        }else{
            $this -> cola ->siguiente = $nodo;
            $nodo-> anterior= $this ->cola;
            $this ->cola = $nodo;
        }
        $this -> tamano ++;
    }
        public function obtenerid() :array{
            $ids = [];
            $actual =$this ->cabeza;
            while($actual !== null){
                $ids[] = $actual ->id;
                $actual = $actual -> siguiente;
            }
            return $ids ;
        }
    
}
?> 