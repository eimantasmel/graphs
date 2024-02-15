<?php

require './Vertice.php';
require './Algorythm.php';
class Graph
{
    public function __construct(private array $verticies = [])
    {

    }

    /**
     * @return array
     */
    public function getVerticies(): array
    {
        return $this->verticies;
    }

    /**
     * @param array $vertice
     * @return Graph
     */
    public function addVertice(Vertice $vertice): Graph
    {
        $this->verticies[] = $vertice;

        return $this;
    }

    public function readData(string $file) {
        $handle = fopen($file, "r");
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                $data = explode('|', $line);
                $vertice_number = $data[0];
                $numbers = explode(',', $data[1]);
                $numbers = array_map(fn($x) => (int)$x, $numbers);

                $this->verticies[] = new Vertice($vertice_number, $numbers);
            }
            fclose($handle); // Close the file handle
        } else {
            throw new \PHPUnit\Runner\FileDoesNotExistException($file);
        }
    }

    public function is_reachable(int $vertice, Algorythm $algorythm) :bool
    {
        if($algorythm == Algorythm::BFS)
            $this->BFSSearch();
        else
            $this->DFSSearch();

        return true;
    }


    private function BFSSearch()
    {

    }
    private function DFSSearch()
    {

    }
}