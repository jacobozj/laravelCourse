<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Fish extends Model
{
    /**
     * FISH ATTRIBUTES
     * $this->attributes['id'] - int - contains the fish primary key (id)
     * $this->attributes['name'] - string - contains the fish name
     * $this->attributes['specie'] - int - contains the fish specie
     * $this->attributes['weight'] - int - contains the fish weight
     */
    protected $fillable = ['name', 'specie', 'weight'];

    public static function validate(Request $request): void
    {
        $request->validate([
            'name' => 'required',
            'specie' => 'required|in:Cabezón,Sapo Perro', 
            'weight' => 'required',
        ]);
    }

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function setName($name): void
    {
        $this->attributes['name'] = $name;
    }

    public function getSpecie(): string
    {
        return $this->attributes['specie'];
    }

    public function setSpecie($specie): void
    {
        $this->attributes['specie'] = $specie;
    }

    public function getWeight(): string
    {
        return $this->attributes['weight'];
    }

    public function setWeight($weight): void
    {
        $this->attributes['weight'] = $weight;
    }
}
