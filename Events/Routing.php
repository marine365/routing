<?php

namespace Marine365\Routing\Events;

class Routing
{
    /**
     * Create a new event instance.
     *
     * @param  \Illuminate\Http\Request  $request  The request instance.
     */
    public function __construct(
        public $request,
    ) {
    }
}
