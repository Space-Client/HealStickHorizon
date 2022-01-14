<?php
//...SNAKE EST GAY SNAKE EST AY SNAKE EST GAY SNAKE EST GAY SNAKE EST GAY SNAKE EST GAY


namespace EffectStick\EffectStickHorizon;

use pocketmine\event\Listener;

class EventListener implements Listener{

    /**
     * @var array
     */
    private $sticks;

    public function __construct()
    {
        $this->sticks = [
            '369:0' => new EffectInstance(
                Effect::getEffect( id: Effect::HEALING),
                duration: 1,
                amplifier: 3,
                visible: false
            )
        ]
    }

}