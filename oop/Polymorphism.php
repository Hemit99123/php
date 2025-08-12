<?php 

interface IDevice
{
    public function open(): void;
    public function close(): void;
    public function lock(): void;
}

class Phone implements IDevice
{
  public function open()
  {
    echo "Open 📱" 
  }

  public function close()
  {
    echo "Close 📱" 
  }

  public function lock()
  {
    echo "Lock 📱"
  }
}

// completely different logic from the above logic
class Computer implements IDevice 
{
  public function open()
  {
    echo "Open 👨🏿‍💻" 
  }

  public function close()
  {
    echo "Close 👨🏿‍💻" 
  }

  public function lock()
  {
    echo "Lock 👨🏿‍💻"
  }
}
