<?php

namespace DSIproject;

use Illuminate\Database\Eloquent\Model;

class Horarios extends Model
{
    



     /**
     * Obtiene al docente ralacionado a la jornada.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function docente()
    {
        return $this->belongsTo('DSIproject\Docente');
    }



     /**
     * Obtiene al docente ralacionado a la jornada.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function alumno()
    {
        return $this->belongsTo('DSIproject\Alumno');

    }

         /**
     * Obtiene al docente ralacionado a la jornada.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function grado()
    {
        return $this->belongsTo('DSIproject\Grado');
    }
    

     /**
     * Obtiene al docente ralacionado a la jornada.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function materia()
    {
        return $this->belongsTo('DSIproject\Materia');
    }

}
