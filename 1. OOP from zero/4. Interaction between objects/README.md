# Notes of this lesson

__parent::function()__ Is used inside a son class to call the method defined inside its parent class.

## Principle "Tell don’t ask"

This principle says that, besides to ask to an object some information about it or his data and then use them to take a decision, for example:

```php
class Archer extends Unit
{
    protected $damage = 20;


    public function attack(Unit $opponent)
    {
        show("{$this->name} attacks {$opponent->getName()} with his arch");
        
        $damage = $this->damage;
        if ($opponent instanceof Soldier) {
            $damage = $this->damage/2;	
        }
    
        $opponent->setHp($opponent->hp - $damage);
        if ($opponent->getHp() <= 0) {
            $opponent->killed();
        }
    }
}
```

The best thing that we can do is to tell the object what we want to be made and let this object to have the responsibility to change its state. We can solve it, like this:

```php
abstract class Unit {

    //...
    public function takeDamage($damage)
    {
        $this->setHp($this->hp - $damage);
        if ($this->hp <= 0) {
            $this->killed();
        }
    }

}

class Archer extends Unit
{
    protected $damage = 20;
    
    public function attack(Unit $opponent)
    {
        show("{$this->name} attacks {$opponent->getName()} with his arch");
        $opponent->takeDamage($this->damage);
    }
 }
```