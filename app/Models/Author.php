<?php

namespace App\Models;

use App\Models\Citation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * La classe Author représente le modèle pour la table "authors" dans la base de données.
 */
class Author extends Model
{
    // Utilisation du trait HasFactory qui permet de créer des usines pour ce modèle
    use HasFactory;

    /**
     * Les attributs qui sont assignable en masse.
     *
     * @var array
     */
    protected $fillable = [
        'name', // Le nom de l'auteur
        'bio'   // La biographie de l'auteur
    ];

    /**
     * Définit la relation "un à plusieurs" entre un auteur et des citations.
     * Chaque auteur peut avoir plusieurs citations.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function citation(): HasMany {
        // Utilise la classe Citation pour déterminer les citations qui appartiennent à cet auteur
        return $this->hasMany(Citation::class);
    }
}
