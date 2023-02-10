<?php

namespace SOLID\ISP\Interface;

interface EntertainmentInterface
{
    public function play(): string;
    public function pause(): string;
    public function stop(): string;
}
