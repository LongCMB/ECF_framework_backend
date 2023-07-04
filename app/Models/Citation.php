<?php

namespace App\Models;

use App\Models\Author;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * La classe Citation représente le modèle pour la table "citations" dans la base de données.
 */
class Citation extends Model
{
    // Utilisation du trait HasFactory qui permet de créer des usines pour ce modèle
    use HasFactory;

    /**
     * Les attributs qui sont assignable en masse.
     *
     * @var array
     */
    protected $fillable = [
        'citation',   // Le contenu de la citation
        'explication', // L'explication de la citation
        'author_id'   // L'identifiant de l'auteur de la citation
    ];

    /**
     * Définit la relation "plusieurs à un" entre une citation et un auteur.
     * Chaque citation appartient à un auteur.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author(): BelongsTo {
        // Utilise la classe Author pour déterminer à quel auteur appartient cette citation
        return $this->belongsTo(Author::class);
    }
}
