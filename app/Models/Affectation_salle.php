<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;



class Affectation_salle extends Model
{
    // Define the table associated with the model
    protected $fillable = [
        'salle_id',
        'concours_id', // Assure-toi que c'est bien 'concours_id' et non 'concour_id'
        'condidat_id',
    ];
    // Define the primary key for the table
    
}