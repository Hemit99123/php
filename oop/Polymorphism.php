<?php 

include_once __DIR__ . "/Interfaces/IDevice.php";

use App\Interfaces\IDevice;

class Phone implements IDevice
{
    private function lock()
    {
        echo "Locked 📱";
    } 

    private function unlock()
    {
        echo "Unlocked 📱";
    }

    public function open()
    {
        $this->unlock();
        echo "Open 📱";
    }

    public function close()
    {
        $this->lock();
        echo "Close 📱";
    }
}

// Completely different logic from the above logic

// The echo statements are just placeholders, it will be different in production

class Computer implements IDevice 
{
    private function lock()
    {
        echo "Locked 👨🏿‍💻";
    }

    private function unlock()
    {
        echo "Unlocked 👨🏿‍💻";
    }

    public function open()
    {
        $this->unlock();
        echo "Open 👨🏿‍💻";
    }

    public function close()
    {
        $this->lock();
        echo "Close 👨🏿‍💻";
    }
}
