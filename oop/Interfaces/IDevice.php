<?php 

namespace App\Interfaces;

interface IDevice
{
    private function lock(): void;
    private function unlock(): void;
    public function open(): void;
    public function close(): void;
}
