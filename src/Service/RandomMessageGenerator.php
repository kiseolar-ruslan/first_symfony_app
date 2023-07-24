<?php

namespace App\Service;

class RandomMessageGenerator
{
    public function getHappyMessage(): string
    {
        $messages = [
            'You did it! You updated the system! Amazing!',
            'That was one of the coolest updates I\'ve seen all day!',
            'Great work! Keep going!',
        ];

        $randMessages = array_rand($messages);

        return $messages[$randMessages];
    }
}