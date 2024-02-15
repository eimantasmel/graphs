<?php

class Vertice
{

    // TODO: NEED TO CREATE ANOTHER  ASSOC ARRAY (KEY VERTICE, VALUE: BOOL) PROPERTY WITH EACH VERTICE REACHABILITY STATUS

    /**
     * @param int $number  number of vertice
     * @param int[] $neighbours integers which are expressed as neighbours
     */
    public function __construct(private int $number, private array $neighbours = [])
    {

    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @param int $number
     * @return Vertice
     */
    public function setNumber(int $number): Vertice
    {
        $this->number = $number;

        return $this;
    }

    /**
     * @return array
     */
    public function getNeighbours(): array
    {
        return $this->neighbours;
    }

    /**
     * @param array $neighbours
     * @return Vertice
     */
    public function addNeighbour(Vertice $neighbour): Vertice
    {
        $this->neighbours[] = $neighbour;

        return $this;
    }

    //TODO: NEED TO CREATE METHOD GET VERTICE BY NUMBER

}