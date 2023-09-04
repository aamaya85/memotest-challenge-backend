<?php

namespace App\GraphQL\Mutations;

use App\Models\GameSession;

final class EndGameSession {

    public function __invoke($_, array $args) {
        
        $gameSession = GameSession::find($args['id']);

        if (!$gameSession) {
            throw new \Exception('Registro no encontrado');
        }

        // Realiza la actualización del campo state en el backend
        $gameSession->state = "COMPLETED";
        $gameSession->save();

        // Devuelve el registro actualizado
        return $gameSession;

    }
}
