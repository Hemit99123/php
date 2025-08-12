<?php 

interface IDevice
{
    private function lock(): void;
    private function unlock(): void;
    public function open(): void;
    public function close(): void;
}

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
