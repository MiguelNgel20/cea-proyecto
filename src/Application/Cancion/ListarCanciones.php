<?php
namespace App\Application\Cancion;

use App\Domain\Repository\CancionRepository;
use App\Domain\Entity\Cancion;

/**
 * Caso de uso: ListarCanciones.
 * Devuelve el conjunto de Canciones.
 */
final class ListarCanciones
{
    public function __construct(private CancionRepository $repo) {}

    /**
     * @return Cancion[]
     * TODO: delegar en el repositorio.
     */
    public function execute(): array
    {
        return []; // TODO: return $this->repo->listar();
    }
}
