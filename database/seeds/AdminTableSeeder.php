<?php

use Illuminate\Database\Seeder;
use DSIproject\Rol;
use DSIproject\User;
use DSIproject\Materia;


class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    $role = new Rol;
    $role->codigo     = 'direc';
    $role->nombre = 'Admin';
    $role->estado   = 1;

    $role->save();

    $role = new Rol;
    $role->codigo     = 'docen';
    $role->nombre = 'Docente';
    $role->estado   = 1;

    $role->save();


    $role = new Rol;
    $role->codigo     = 'estu';
    $role->nombre = 'Estudiante';
    $role->estado   = 1;

    $role->save();


    $role = new Rol;
    $role->codigo     = 'secre';
    $role->nombre = 'Secretaria';
    $role->estado   = 1;

    $role->save();



    $user = new User;
    $user->rol_id     = 1;
    $user->nombre = 'Theizer';
    $user->apellido   = 'Gonzalez';
    $user->email     = 'admin@admin.com';
    $user->password = 'admin123';
    $user->dui   = '25212293';
    $user->estado   = 1;

    $user->save();


    $materia = new Materia;
    $materia->codigo     = '254361';
    $materia->nombre = 'Matemática';
    $materia->estado   = 1;

    $materia->save();


    $materia = new Materia;
    $materia->codigo     = '224364';
    $materia->nombre = 'Química';
    $materia->estado   = 1;

    $materia->save();


    $materia = new Materia;
    $materia->codigo     = '154366';
    $materia->nombre = 'Física';
    $materia->estado   = 1;

    $materia->save();

    $materia = new Materia;
    $materia->codigo     = '354261';
    $materia->nombre = 'Idioma';
    $materia->estado   = 1;

    $materia->save();


    $materia = new Materia;
    $materia->codigo     = '254532';
    $materia->nombre = 'Informática';
    $materia->estado   = 1;

    $materia->save();


    /* ESTADOS */
    DSIproject\Departamento::create(array( 'id' => 1, 'nombre' => 'Amazonas'));
    DSIproject\Departamento::create(array( 'id' => 2, 'nombre' => 'Anzoátegui'));
    DSIproject\Departamento::create(array( 'id' => 3, 'nombre' => 'Apure'));
    DSIproject\Departamento::create(array( 'id' => 4, 'nombre' => 'Aragua'));
    DSIproject\Departamento::create(array( 'id' => 5, 'nombre' => 'Barinas'));
    DSIproject\Departamento::create(array( 'id' => 6, 'nombre' => 'Bolívar'));
    DSIproject\Departamento::create(array( 'id' => 7, 'nombre' => 'Carabobo'));
    DSIproject\Departamento::create(array( 'id' => 8, 'nombre' => 'Cojedes'));
    DSIproject\Departamento::create(array( 'id' => 9, 'nombre' => 'Delta Amacuro'));
    DSIproject\Departamento::create(array( 'id' => 10, 'nombre' => 'Falcón'));
    DSIproject\Departamento::create(array( 'id' => 11, 'nombre' => 'Guárico'));
    DSIproject\Departamento::create(array( 'id' => 12, 'nombre' => 'Lara'));
    DSIproject\Departamento::create(array( 'id' => 13, 'nombre' => 'Mérida'));
    DSIproject\Departamento::create(array( 'id' => 14, 'nombre' => 'Miranda'));
    DSIproject\Departamento::create(array( 'id' => 15, 'nombre' => 'Monagas'));
    DSIproject\Departamento::create(array( 'id' => 16, 'nombre' => 'Nueva Esparta'));
    DSIproject\Departamento::create(array( 'id' => 17, 'nombre' => 'Portuguesa'));
    DSIproject\Departamento::create(array( 'id' => 18, 'nombre' => 'Sucre'));
    DSIproject\Departamento::create(array( 'id' => 19, 'nombre' => 'Táchira'));
    DSIproject\Departamento::create(array( 'id' => 20, 'nombre' => 'Trujillo'));
    DSIproject\Departamento::create(array( 'id' => 21, 'nombre' => 'Vargas'));
    DSIproject\Departamento::create(array( 'id' => 22, 'nombre' => 'Yaracuy'));
    DSIproject\Departamento::create(array( 'id' => 23, 'nombre' => 'Zulia'));
    DSIproject\Departamento::create(array( 'id' => 24, 'nombre' => 'Distrito Capital'));
    DSIproject\Departamento::create(array( 'id' => 25, 'nombre' => 'Dependencias Federales'));




    DSIproject\Municipio::create(array( 'id' => 1, 'departamento_id' => 1, 'nombre'=> 'Alto Orinoco' ));
    DSIproject\Municipio::create(array( 'id' => 2, 'departamento_id' => 1, 'nombre'=> 'Atabapo' ));
    DSIproject\Municipio::create(array( 'id' => 3, 'departamento_id' => 1, 'nombre'=> 'Atures' ));
    DSIproject\Municipio::create(array( 'id' => 4, 'departamento_id' => 1, 'nombre'=> 'Autana' ));
    DSIproject\Municipio::create(array( 'id' => 5, 'departamento_id' => 1, 'nombre'=> 'Manapiare' ));
    DSIproject\Municipio::create(array( 'id' => 6, 'departamento_id' => 1, 'nombre'=> 'Maroa' ));
    DSIproject\Municipio::create(array( 'id' => 7, 'departamento_id' => 1, 'nombre'=> 'Río Negro' ));
    DSIproject\Municipio::create(array( 'id' => 8, 'departamento_id' => 2, 'nombre'=> 'Anaco' ));
    DSIproject\Municipio::create(array( 'id' => 9, 'departamento_id' => 2, 'nombre'=> 'Aragua' ));
    DSIproject\Municipio::create(array( 'id' => 10, 'departamento_id' => 2, 'nombre'=> 'Manuel Ezequiel Bruzual' ));
    DSIproject\Municipio::create(array( 'id' => 11, 'departamento_id' => 2, 'nombre'=> 'Diego Bautista Urbaneja' ));
    DSIproject\Municipio::create(array( 'id' => 12, 'departamento_id' => 2, 'nombre'=> 'Fernando Peñalver' ));
    DSIproject\Municipio::create(array( 'id' => 13, 'departamento_id' => 2, 'nombre'=> 'Francisco Del Carmen Carvajal' ));
    DSIproject\Municipio::create(array( 'id' => 14, 'departamento_id' => 2, 'nombre'=> 'General Sir Arthur McGregor' ));
    DSIproject\Municipio::create(array( 'id' => 15, 'departamento_id' => 2, 'nombre'=> 'Guanta' ));
    DSIproject\Municipio::create(array( 'id' => 16, 'departamento_id' => 2, 'nombre'=> 'Independencia' ));
    DSIproject\Municipio::create(array( 'id' => 17, 'departamento_id' => 2, 'nombre'=> 'José Gregorio Monagas' ));
    DSIproject\Municipio::create(array( 'id' => 18, 'departamento_id' => 2, 'nombre'=> 'Juan Antonio Sotillo' ));
    DSIproject\Municipio::create(array( 'id' => 19, 'departamento_id' => 2, 'nombre'=> 'Juan Manuel Cajigal' ));
    DSIproject\Municipio::create(array( 'id' => 20, 'departamento_id' => 2, 'nombre'=> 'Libertad' ));
    DSIproject\Municipio::create(array( 'id' => 21, 'departamento_id' => 2, 'nombre'=> 'Francisco de Miranda' ));
    DSIproject\Municipio::create(array( 'id' => 22, 'departamento_id' => 2, 'nombre'=> 'Pedro María Freites' ));
    DSIproject\Municipio::create(array( 'id' => 23, 'departamento_id' => 2, 'nombre'=> 'Píritu' ));
    DSIproject\Municipio::create(array( 'id' => 24, 'departamento_id' => 2, 'nombre'=> 'San José de Guanipa' ));
    DSIproject\Municipio::create(array( 'id' => 25, 'departamento_id' => 2, 'nombre'=> 'San Juan de Capistrano' ));
    DSIproject\Municipio::create(array( 'id' => 26, 'departamento_id' => 2, 'nombre'=> 'Santa Ana' ));
    DSIproject\Municipio::create(array( 'id' => 27, 'departamento_id' => 2, 'nombre'=> 'Simón Bolívar' ));
    DSIproject\Municipio::create(array( 'id' => 28, 'departamento_id' => 2, 'nombre'=> 'Simón Rodríguez' ));
    DSIproject\Municipio::create(array( 'id' => 29, 'departamento_id' => 3, 'nombre'=> 'Achaguas' ));
    DSIproject\Municipio::create(array( 'id' => 30, 'departamento_id' => 3, 'nombre'=> 'Biruaca' ));
    DSIproject\Municipio::create(array( 'id' => 31, 'departamento_id' => 3, 'nombre'=> 'Muñóz' ));
    DSIproject\Municipio::create(array( 'id' => 32, 'departamento_id' => 3, 'nombre'=> 'Páez' ));
    DSIproject\Municipio::create(array( 'id' => 33, 'departamento_id' => 3, 'nombre'=> 'Pedro Camejo' ));
    DSIproject\Municipio::create(array( 'id' => 34, 'departamento_id' => 3, 'nombre'=> 'Rómulo Gallegos' ));
    DSIproject\Municipio::create(array( 'id' => 35, 'departamento_id' => 3, 'nombre'=> 'San Fernando' ));
    DSIproject\Municipio::create(array( 'id' => 36, 'departamento_id' => 4, 'nombre'=> 'Atanasio Girardot' ));
    DSIproject\Municipio::create(array( 'id' => 37, 'departamento_id' => 4, 'nombre'=> 'Bolívar' ));
    DSIproject\Municipio::create(array( 'id' => 38, 'departamento_id' => 4, 'nombre'=> 'Camatagua' ));
    DSIproject\Municipio::create(array( 'id' => 39, 'departamento_id' => 4, 'nombre'=> 'Francisco Linares Alcántara' ));
    DSIproject\Municipio::create(array( 'id' => 40, 'departamento_id' => 4, 'nombre'=> 'José Ángel Lamas' ));
    DSIproject\Municipio::create(array( 'id' => 41, 'departamento_id' => 4, 'nombre'=> 'José Félix Ribas' ));
    DSIproject\Municipio::create(array( 'id' => 42, 'departamento_id' => 4, 'nombre'=> 'José Rafael Revenga' ));
    DSIproject\Municipio::create(array( 'id' => 43, 'departamento_id' => 4, 'nombre'=> 'Libertador' ));
    DSIproject\Municipio::create(array( 'id' => 44, 'departamento_id' => 4, 'nombre'=> 'Mario Briceño Iragorry' ));
    DSIproject\Municipio::create(array( 'id' => 45, 'departamento_id' => 4, 'nombre'=> 'Ocumare de la Costa de Oro' ));
    DSIproject\Municipio::create(array( 'id' => 46, 'departamento_id' => 4, 'nombre'=> 'San Casimiro' ));
    DSIproject\Municipio::create(array( 'id' => 47, 'departamento_id' => 4, 'nombre'=> 'San Sebastián' ));
    DSIproject\Municipio::create(array( 'id' => 48, 'departamento_id' => 4, 'nombre'=> 'Santiago Mariño' ));
    DSIproject\Municipio::create(array( 'id' => 49, 'departamento_id' => 4, 'nombre'=> 'Santos Michelena' ));
    DSIproject\Municipio::create(array( 'id' => 50, 'departamento_id' => 4, 'nombre'=> 'Sucre' ));
    DSIproject\Municipio::create(array( 'id' => 51, 'departamento_id' => 4, 'nombre'=> 'Tovar' ));
    DSIproject\Municipio::create(array( 'id' => 52, 'departamento_id' => 4, 'nombre'=> 'Urdaneta' ));
    DSIproject\Municipio::create(array( 'id' => 53, 'departamento_id' => 4, 'nombre'=> 'Zamora' ));
    DSIproject\Municipio::create(array( 'id' => 54, 'departamento_id' => 5, 'nombre'=> 'Alberto Arvelo Torrealba' ));
    DSIproject\Municipio::create(array( 'id' => 55, 'departamento_id' => 5, 'nombre'=> 'Andrés Eloy Blanco' ));
    DSIproject\Municipio::create(array( 'id' => 56, 'departamento_id' => 5, 'nombre'=> 'Antonio José de Sucre' ));
    DSIproject\Municipio::create(array( 'id' => 57, 'departamento_id' => 5, 'nombre'=> 'Arismendi' ));
    DSIproject\Municipio::create(array( 'id' => 58, 'departamento_id' => 5, 'nombre'=> 'Barinas' ));
    DSIproject\Municipio::create(array( 'id' => 59, 'departamento_id' => 5, 'nombre'=> 'Bolívar' ));
    DSIproject\Municipio::create(array( 'id' => 60, 'departamento_id' => 5, 'nombre'=> 'Cruz Paredes' ));
    DSIproject\Municipio::create(array( 'id' => 61, 'departamento_id' => 5, 'nombre'=> 'Ezequiel Zamora' ));
    DSIproject\Municipio::create(array( 'id' => 62, 'departamento_id' => 5, 'nombre'=> 'Obispos' ));
    DSIproject\Municipio::create(array( 'id' => 63, 'departamento_id' => 5, 'nombre'=> 'Pedraza' ));
    DSIproject\Municipio::create(array( 'id' => 64, 'departamento_id' => 5, 'nombre'=> 'Rojas' ));
    DSIproject\Municipio::create(array( 'id' => 65, 'departamento_id' => 5, 'nombre'=> 'Sosa' ));
    DSIproject\Municipio::create(array( 'id' => 66, 'departamento_id' => 6, 'nombre'=> 'Caroní' ));
    DSIproject\Municipio::create(array( 'id' => 67, 'departamento_id' => 6, 'nombre'=> 'Cedeño' ));
    DSIproject\Municipio::create(array( 'id' => 68, 'departamento_id' => 6, 'nombre'=> 'El Callao' ));
    DSIproject\Municipio::create(array( 'id' => 69, 'departamento_id' => 6, 'nombre'=> 'Gran Sabana' ));
    DSIproject\Municipio::create(array( 'id' => 70, 'departamento_id' => 6, 'nombre'=> 'Heres' ));
    DSIproject\Municipio::create(array( 'id' => 71, 'departamento_id' => 6, 'nombre'=> 'Piar' ));
    DSIproject\Municipio::create(array( 'id' => 72, 'departamento_id' => 6, 'nombre'=> 'Angostura (Raúl Leoni)' ));
    DSIproject\Municipio::create(array( 'id' => 73, 'departamento_id' => 6, 'nombre'=> 'Roscio' ));
    DSIproject\Municipio::create(array( 'id' => 74, 'departamento_id' => 6, 'nombre'=> 'Sifontes' ));
    DSIproject\Municipio::create(array( 'id' => 75, 'departamento_id' => 6, 'nombre'=> 'Sucre' ));
    DSIproject\Municipio::create(array( 'id' => 76, 'departamento_id' => 6, 'nombre'=> 'Padre Pedro Chien' ));
    DSIproject\Municipio::create(array( 'id' => 77, 'departamento_id' => 7, 'nombre'=> 'Bejuma' ));
    DSIproject\Municipio::create(array( 'id' => 78, 'departamento_id' => 7, 'nombre'=> 'Carlos Arvelo' ));
    DSIproject\Municipio::create(array( 'id' => 79, 'departamento_id' => 7, 'nombre'=> 'Diego Ibarra' ));
    DSIproject\Municipio::create(array( 'id' => 80, 'departamento_id' => 7, 'nombre'=> 'Guacara' ));
    DSIproject\Municipio::create(array( 'id' => 81, 'departamento_id' => 7, 'nombre'=> 'Juan José Mora' ));
    DSIproject\Municipio::create(array( 'id' => 82, 'departamento_id' => 7, 'nombre'=> 'Libertador' ));
    DSIproject\Municipio::create(array( 'id' => 83, 'departamento_id' => 7, 'nombre'=> 'Los Guayos' ));
    DSIproject\Municipio::create(array( 'id' => 84, 'departamento_id' => 7, 'nombre'=> 'Miranda' ));
    DSIproject\Municipio::create(array( 'id' => 85, 'departamento_id' => 7, 'nombre'=> 'Montalbán' ));
    DSIproject\Municipio::create(array( 'id' => 86, 'departamento_id' => 7, 'nombre'=> 'Naguanagua' ));
    DSIproject\Municipio::create(array( 'id' => 87, 'departamento_id' => 7, 'nombre'=> 'Puerto Cabello' ));
    DSIproject\Municipio::create(array( 'id' => 88, 'departamento_id' => 7, 'nombre'=> 'San Diego' ));
    DSIproject\Municipio::create(array( 'id' => 89, 'departamento_id' => 7, 'nombre'=> 'San Joaquín' ));
    DSIproject\Municipio::create(array( 'id' => 90, 'departamento_id' => 7, 'nombre'=> 'Valencia' ));
    DSIproject\Municipio::create(array( 'id' => 91, 'departamento_id' => 8, 'nombre'=> 'Anzoátegui' ));
    DSIproject\Municipio::create(array( 'id' => 92, 'departamento_id' => 8, 'nombre'=> 'Tinaquillo' ));
    DSIproject\Municipio::create(array( 'id' => 93, 'departamento_id' => 8, 'nombre'=> 'Girardot' ));
    DSIproject\Municipio::create(array( 'id' => 94, 'departamento_id' => 8, 'nombre'=> 'Lima Blanco' ));
    DSIproject\Municipio::create(array( 'id' => 95, 'departamento_id' => 8, 'nombre'=> 'Pao de San Juan Bautista' ));
    DSIproject\Municipio::create(array( 'id' => 96, 'departamento_id' => 8, 'nombre'=> 'Ricaurte' ));
    DSIproject\Municipio::create(array( 'id' => 97, 'departamento_id' => 8, 'nombre'=> 'Rómulo Gallegos' ));
    DSIproject\Municipio::create(array( 'id' => 98, 'departamento_id' => 8, 'nombre'=> 'San Carlos' ));
    DSIproject\Municipio::create(array( 'id' => 99, 'departamento_id' => 8, 'nombre'=> 'Tinaco' ));
    DSIproject\Municipio::create(array( 'id' => 100, 'departamento_id' => 9, 'nombre'=> 'Antonio Díaz' ));
    DSIproject\Municipio::create(array( 'id' => 101, 'departamento_id' => 9, 'nombre'=> 'Casacoima' ));
    DSIproject\Municipio::create(array( 'id' => 102, 'departamento_id' => 9, 'nombre'=> 'Pedernales' ));
    DSIproject\Municipio::create(array( 'id' => 103, 'departamento_id' => 9, 'nombre'=> 'Tucupita' ));
    DSIproject\Municipio::create(array( 'id' => 104, 'departamento_id' => 10, 'nombre'=> 'Acosta' ));
    DSIproject\Municipio::create(array( 'id' => 105, 'departamento_id' => 10, 'nombre'=> 'Bolívar' ));
    DSIproject\Municipio::create(array( 'id' => 106, 'departamento_id' => 10, 'nombre'=> 'Buchivacoa' ));
    DSIproject\Municipio::create(array( 'id' => 107, 'departamento_id' => 10, 'nombre'=> 'Cacique Manaure' ));
    DSIproject\Municipio::create(array( 'id' => 108, 'departamento_id' => 10, 'nombre'=> 'Carirubana' ));
    DSIproject\Municipio::create(array( 'id' => 109, 'departamento_id' => 10, 'nombre'=> 'Colina' ));
    DSIproject\Municipio::create(array( 'id' => 110, 'departamento_id' => 10, 'nombre'=> 'Dabajuro' ));
    DSIproject\Municipio::create(array( 'id' => 111, 'departamento_id' => 10, 'nombre'=> 'Democracia' ));
    DSIproject\Municipio::create(array( 'id' => 112, 'departamento_id' => 10, 'nombre'=> 'Falcón' ));
    DSIproject\Municipio::create(array( 'id' => 113, 'departamento_id' => 10, 'nombre'=> 'Federación' ));
    DSIproject\Municipio::create(array( 'id' => 114, 'departamento_id' => 10, 'nombre'=> 'Jacura' ));
    DSIproject\Municipio::create(array( 'id' => 115, 'departamento_id' => 10, 'nombre'=> 'José Laurencio Silva' ));
    DSIproject\Municipio::create(array( 'id' => 116, 'departamento_id' => 10, 'nombre'=> 'Los Taques' ));
    DSIproject\Municipio::create(array( 'id' => 117, 'departamento_id' => 10, 'nombre'=> 'Mauroa' ));
    DSIproject\Municipio::create(array( 'id' => 118, 'departamento_id' => 10, 'nombre'=> 'Miranda' ));
    DSIproject\Municipio::create(array( 'id' => 119, 'departamento_id' => 10, 'nombre'=> 'Monseñor Iturriza' ));
    DSIproject\Municipio::create(array( 'id' => 120, 'departamento_id' => 10, 'nombre'=> 'Palmasola' ));
    DSIproject\Municipio::create(array( 'id' => 121, 'departamento_id' => 10, 'nombre'=> 'Petit' ));
    DSIproject\Municipio::create(array( 'id' => 122, 'departamento_id' => 10, 'nombre'=> 'Píritu' ));
    DSIproject\Municipio::create(array( 'id' => 123, 'departamento_id' => 10, 'nombre'=> 'San Francisco' ));
    DSIproject\Municipio::create(array( 'id' => 124, 'departamento_id' => 10, 'nombre'=> 'Sucre' ));
    DSIproject\Municipio::create(array( 'id' => 125, 'departamento_id' => 10, 'nombre'=> 'Tocópero' ));
    DSIproject\Municipio::create(array( 'id' => 126, 'departamento_id' => 10, 'nombre'=> 'Unión' ));
    DSIproject\Municipio::create(array( 'id' => 127, 'departamento_id' => 10, 'nombre'=> 'Urumaco' ));
    DSIproject\Municipio::create(array( 'id' => 128, 'departamento_id' => 10, 'nombre'=> 'Zamora' ));
    DSIproject\Municipio::create(array( 'id' => 129, 'departamento_id' => 11, 'nombre'=> 'Camaguán' ));
    DSIproject\Municipio::create(array( 'id' => 130, 'departamento_id' => 11, 'nombre'=> 'Chaguaramas' ));
    DSIproject\Municipio::create(array( 'id' => 131, 'departamento_id' => 11, 'nombre'=> 'El Socorro' ));
    DSIproject\Municipio::create(array( 'id' => 132, 'departamento_id' => 11, 'nombre'=> 'José Félix Ribas' ));
    DSIproject\Municipio::create(array( 'id' => 133, 'departamento_id' => 11, 'nombre'=> 'José Tadeo Monagas' ));
    DSIproject\Municipio::create(array( 'id' => 134, 'departamento_id' => 11, 'nombre'=> 'Juan Germán Roscio' ));
    DSIproject\Municipio::create(array( 'id' => 135, 'departamento_id' => 11, 'nombre'=> 'Julián Mellado' ));
    DSIproject\Municipio::create(array( 'id' => 136, 'departamento_id' => 11, 'nombre'=> 'Las Mercedes' ));
    DSIproject\Municipio::create(array( 'id' => 137, 'departamento_id' => 11, 'nombre'=> 'Leonardo Infante' ));
    DSIproject\Municipio::create(array( 'id' => 138, 'departamento_id' => 11, 'nombre'=> 'Pedro Zaraza' ));
    DSIproject\Municipio::create(array( 'id' => 139, 'departamento_id' => 11, 'nombre'=> 'Ortíz' ));
    DSIproject\Municipio::create(array( 'id' => 140, 'departamento_id' => 11, 'nombre'=> 'San Gerónimo de Guayabal' ));
    DSIproject\Municipio::create(array( 'id' => 141, 'departamento_id' => 11, 'nombre'=> 'San José de Guaribe' ));
    DSIproject\Municipio::create(array( 'id' => 142, 'departamento_id' => 11, 'nombre'=> 'Santa María de Ipire' ));
    DSIproject\Municipio::create(array( 'id' => 143, 'departamento_id' => 11, 'nombre'=> 'Sebastián Francisco de Miranda' ));
    DSIproject\Municipio::create(array( 'id' => 144, 'departamento_id' => 12, 'nombre'=> 'Andrés Eloy Blanco' ));
    DSIproject\Municipio::create(array( 'id' => 145, 'departamento_id' => 12, 'nombre'=> 'Crespo' ));
    DSIproject\Municipio::create(array( 'id' => 146, 'departamento_id' => 12, 'nombre'=> 'Iribarren' ));
    DSIproject\Municipio::create(array( 'id' => 147, 'departamento_id' => 12, 'nombre'=> 'Jiménez' ));
    DSIproject\Municipio::create(array( 'id' => 148, 'departamento_id' => 12, 'nombre'=> 'Morán' ));
    DSIproject\Municipio::create(array( 'id' => 149, 'departamento_id' => 12, 'nombre'=> 'Palavecino' ));
    DSIproject\Municipio::create(array( 'id' => 150, 'departamento_id' => 12, 'nombre'=> 'Simón Planas' ));
    DSIproject\Municipio::create(array( 'id' => 151, 'departamento_id' => 12, 'nombre'=> 'Torres' ));
    DSIproject\Municipio::create(array( 'id' => 152, 'departamento_id' => 12, 'nombre'=> 'Urdaneta' ));
    DSIproject\Municipio::create(array( 'id' => 179, 'departamento_id' => 13, 'nombre'=> 'Alberto Adriani' ));
    DSIproject\Municipio::create(array( 'id' => 180, 'departamento_id' => 13, 'nombre'=> 'Andrés Bello' ));
    DSIproject\Municipio::create(array( 'id' => 181, 'departamento_id' => 13, 'nombre'=> 'Antonio Pinto Salinas' ));
    DSIproject\Municipio::create(array( 'id' => 182, 'departamento_id' => 13, 'nombre'=> 'Aricagua' ));
    DSIproject\Municipio::create(array( 'id' => 183, 'departamento_id' => 13, 'nombre'=> 'Arzobispo Chacón' ));
    DSIproject\Municipio::create(array( 'id' => 184, 'departamento_id' => 13, 'nombre'=> 'Campo Elías' ));
    DSIproject\Municipio::create(array( 'id' => 185, 'departamento_id' => 13, 'nombre'=> 'Caracciolo Parra Olmedo' ));
    DSIproject\Municipio::create(array( 'id' => 186, 'departamento_id' => 13, 'nombre'=> 'Cardenal Quintero' ));
    DSIproject\Municipio::create(array( 'id' => 187, 'departamento_id' => 13, 'nombre'=> 'Guaraque' ));
    DSIproject\Municipio::create(array( 'id' => 188, 'departamento_id' => 13, 'nombre'=> 'Julio César Salas' ));
    DSIproject\Municipio::create(array( 'id' => 189, 'departamento_id' => 13, 'nombre'=> 'Justo Briceño' ));
    DSIproject\Municipio::create(array( 'id' => 190, 'departamento_id' => 13, 'nombre'=> 'Libertador' ));
    DSIproject\Municipio::create(array( 'id' => 191, 'departamento_id' => 13, 'nombre'=> 'Miranda' ));
    DSIproject\Municipio::create(array( 'id' => 192, 'departamento_id' => 13, 'nombre'=> 'Obispo Ramos de Lora' ));
    DSIproject\Municipio::create(array( 'id' => 193, 'departamento_id' => 13, 'nombre'=> 'Padre Noguera' ));
    DSIproject\Municipio::create(array( 'id' => 194, 'departamento_id' => 13, 'nombre'=> 'Pueblo Llano' ));
    DSIproject\Municipio::create(array( 'id' => 195, 'departamento_id' => 13, 'nombre'=> 'Rangel' ));
    DSIproject\Municipio::create(array( 'id' => 196, 'departamento_id' => 13, 'nombre'=> 'Rivas Dávila' ));
    DSIproject\Municipio::create(array( 'id' => 197, 'departamento_id' => 13, 'nombre'=> 'Santos Marquina' ));
    DSIproject\Municipio::create(array( 'id' => 198, 'departamento_id' => 13, 'nombre'=> 'Sucre' ));
    DSIproject\Municipio::create(array( 'id' => 199, 'departamento_id' => 13, 'nombre'=> 'Tovar' ));
    DSIproject\Municipio::create(array( 'id' => 200, 'departamento_id' => 13, 'nombre'=> 'Tulio Febres Cordero' ));
    DSIproject\Municipio::create(array( 'id' => 201, 'departamento_id' => 13, 'nombre'=> 'Zea' ));
    DSIproject\Municipio::create(array( 'id' => 223, 'departamento_id' => 14, 'nombre'=> 'Acevedo' ));
    DSIproject\Municipio::create(array( 'id' => 224, 'departamento_id' => 14, 'nombre'=> 'Andrés Bello' ));
    DSIproject\Municipio::create(array( 'id' => 225, 'departamento_id' => 14, 'nombre'=> 'Baruta' ));
    DSIproject\Municipio::create(array( 'id' => 226, 'departamento_id' => 14, 'nombre'=> 'Brión' ));
    DSIproject\Municipio::create(array( 'id' => 227, 'departamento_id' => 14, 'nombre'=> 'Buroz' ));
    DSIproject\Municipio::create(array( 'id' => 228, 'departamento_id' => 14, 'nombre'=> 'Carrizal' ));
    DSIproject\Municipio::create(array( 'id' => 229, 'departamento_id' => 14, 'nombre'=> 'Chacao' ));
    DSIproject\Municipio::create(array( 'id' => 230, 'departamento_id' => 14, 'nombre'=> 'Cristóbal Rojas' ));
    DSIproject\Municipio::create(array( 'id' => 231, 'departamento_id' => 14, 'nombre'=> 'El Hatillo' ));
    DSIproject\Municipio::create(array( 'id' => 232, 'departamento_id' => 14, 'nombre'=> 'Guaicaipuro' ));
    DSIproject\Municipio::create(array( 'id' => 233, 'departamento_id' => 14, 'nombre'=> 'Independencia' ));
    DSIproject\Municipio::create(array( 'id' => 234, 'departamento_id' => 14, 'nombre'=> 'Lander' ));
    DSIproject\Municipio::create(array( 'id' => 235, 'departamento_id' => 14, 'nombre'=> 'Los Salias' ));
    DSIproject\Municipio::create(array( 'id' => 236, 'departamento_id' => 14, 'nombre'=> 'Páez' ));
    DSIproject\Municipio::create(array( 'id' => 237, 'departamento_id' => 14, 'nombre'=> 'Paz Castillo' ));
    DSIproject\Municipio::create(array( 'id' => 238, 'departamento_id' => 14, 'nombre'=> 'Pedro Gual' ));
    DSIproject\Municipio::create(array( 'id' => 239, 'departamento_id' => 14, 'nombre'=> 'Plaza' ));
    DSIproject\Municipio::create(array( 'id' => 240, 'departamento_id' => 14, 'nombre'=> 'Simón Bolívar' ));
    DSIproject\Municipio::create(array( 'id' => 241, 'departamento_id' => 14, 'nombre'=> 'Sucre' ));
    DSIproject\Municipio::create(array( 'id' => 242, 'departamento_id' => 14, 'nombre'=> 'Urdaneta' ));
    DSIproject\Municipio::create(array( 'id' => 243, 'departamento_id' => 14, 'nombre'=> 'Zamora' ));
    DSIproject\Municipio::create(array( 'id' => 258, 'departamento_id' => 15, 'nombre'=> 'Acosta' ));
    DSIproject\Municipio::create(array( 'id' => 259, 'departamento_id' => 15, 'nombre'=> 'Aguasay' ));
    DSIproject\Municipio::create(array( 'id' => 260, 'departamento_id' => 15, 'nombre'=> 'Bolívar' ));
    DSIproject\Municipio::create(array( 'id' => 261, 'departamento_id' => 15, 'nombre'=> 'Caripe' ));
    DSIproject\Municipio::create(array( 'id' => 262, 'departamento_id' => 15, 'nombre'=> 'Cedeño' ));
    DSIproject\Municipio::create(array( 'id' => 263, 'departamento_id' => 15, 'nombre'=> 'Ezequiel Zamora' ));
    DSIproject\Municipio::create(array( 'id' => 264, 'departamento_id' => 15, 'nombre'=> 'Libertador' ));
    DSIproject\Municipio::create(array( 'id' => 265, 'departamento_id' => 15, 'nombre'=> 'Maturín' ));
    DSIproject\Municipio::create(array( 'id' => 266, 'departamento_id' => 15, 'nombre'=> 'Piar' ));
    DSIproject\Municipio::create(array( 'id' => 267, 'departamento_id' => 15, 'nombre'=> 'Punceres' ));
    DSIproject\Municipio::create(array( 'id' => 268, 'departamento_id' => 15, 'nombre'=> 'Santa Bárbara' ));
    DSIproject\Municipio::create(array( 'id' => 269, 'departamento_id' => 15, 'nombre'=> 'Sotillo' ));
    DSIproject\Municipio::create(array( 'id' => 270, 'departamento_id' => 15, 'nombre'=> 'Uracoa' ));
    DSIproject\Municipio::create(array( 'id' => 271, 'departamento_id' => 16, 'nombre'=> 'Antolín del Campo' ));
    DSIproject\Municipio::create(array( 'id' => 272, 'departamento_id' => 16, 'nombre'=> 'Arismendi' ));
    DSIproject\Municipio::create(array( 'id' => 273, 'departamento_id' => 16, 'nombre'=> 'García' ));
    DSIproject\Municipio::create(array( 'id' => 274, 'departamento_id' => 16, 'nombre'=> 'Gómez' ));
    DSIproject\Municipio::create(array( 'id' => 275, 'departamento_id' => 16, 'nombre'=> 'Maneiro' ));
    DSIproject\Municipio::create(array( 'id' => 276, 'departamento_id' => 16, 'nombre'=> 'Marcano' ));
    DSIproject\Municipio::create(array( 'id' => 277, 'departamento_id' => 16, 'nombre'=> 'Mariño' ));
    DSIproject\Municipio::create(array( 'id' => 278, 'departamento_id' => 16, 'nombre'=> 'Península de Macanao' ));
    DSIproject\Municipio::create(array( 'id' => 279, 'departamento_id' => 16, 'nombre'=> 'Tubores' ));
    DSIproject\Municipio::create(array( 'id' => 280, 'departamento_id' => 16, 'nombre'=> 'Villalba' ));
    DSIproject\Municipio::create(array( 'id' => 281, 'departamento_id' => 16, 'nombre'=> 'Díaz' ));
    DSIproject\Municipio::create(array( 'id' => 282, 'departamento_id' => 17, 'nombre'=> 'Agua Blanca' ));
    DSIproject\Municipio::create(array( 'id' => 283, 'departamento_id' => 17, 'nombre'=> 'Araure' ));
    DSIproject\Municipio::create(array( 'id' => 284, 'departamento_id' => 17, 'nombre'=> 'Esteller' ));
    DSIproject\Municipio::create(array( 'id' => 285, 'departamento_id' => 17, 'nombre'=> 'Guanare' ));
    DSIproject\Municipio::create(array( 'id' => 286, 'departamento_id' => 17, 'nombre'=> 'Guanarito' ));
    DSIproject\Municipio::create(array( 'id' => 287, 'departamento_id' => 17, 'nombre'=> 'Monseñor José Vicente de Unda' ));
    DSIproject\Municipio::create(array( 'id' => 288, 'departamento_id' => 17, 'nombre'=> 'Ospino' ));
    DSIproject\Municipio::create(array( 'id' => 289, 'departamento_id' => 17, 'nombre'=> 'Páez' ));
    DSIproject\Municipio::create(array( 'id' => 290, 'departamento_id' => 17, 'nombre'=> 'Papelón' ));
    DSIproject\Municipio::create(array( 'id' => 291, 'departamento_id' => 17, 'nombre'=> 'San Genaro de Boconoíto' ));
    DSIproject\Municipio::create(array( 'id' => 292, 'departamento_id' => 17, 'nombre'=> 'San Rafael de Onoto' ));
    DSIproject\Municipio::create(array( 'id' => 293, 'departamento_id' => 17, 'nombre'=> 'Santa Rosalía' ));
    DSIproject\Municipio::create(array( 'id' => 294, 'departamento_id' => 17, 'nombre'=> 'Sucre' ));
    DSIproject\Municipio::create(array( 'id' => 295, 'departamento_id' => 17, 'nombre'=> 'Turén' ));
    DSIproject\Municipio::create(array( 'id' => 296, 'departamento_id' => 18, 'nombre'=> 'Andrés Eloy Blanco' ));
    DSIproject\Municipio::create(array( 'id' => 297, 'departamento_id' => 18, 'nombre'=> 'Andrés Mata' ));
    DSIproject\Municipio::create(array( 'id' => 298, 'departamento_id' => 18, 'nombre'=> 'Arismendi' ));
    DSIproject\Municipio::create(array( 'id' => 299, 'departamento_id' => 18, 'nombre'=> 'Benítez' ));
    DSIproject\Municipio::create(array( 'id' => 300, 'departamento_id' => 18, 'nombre'=> 'Bermúdez' ));
    DSIproject\Municipio::create(array( 'id' => 301, 'departamento_id' => 18, 'nombre'=> 'Bolívar' ));
    DSIproject\Municipio::create(array( 'id' => 302, 'departamento_id' => 18, 'nombre'=> 'Cajigal' ));
    DSIproject\Municipio::create(array( 'id' => 303, 'departamento_id' => 18, 'nombre'=> 'Cruz Salmerón Acosta' ));
    DSIproject\Municipio::create(array( 'id' => 304, 'departamento_id' => 18, 'nombre'=> 'Libertador' ));
    DSIproject\Municipio::create(array( 'id' => 305, 'departamento_id' => 18, 'nombre'=> 'Mariño' ));
    DSIproject\Municipio::create(array( 'id' => 306, 'departamento_id' => 18, 'nombre'=> 'Mejía' ));
    DSIproject\Municipio::create(array( 'id' => 307, 'departamento_id' => 18, 'nombre'=> 'Montes' ));
    DSIproject\Municipio::create(array( 'id' => 308, 'departamento_id' => 18, 'nombre'=> 'Ribero' ));
    DSIproject\Municipio::create(array( 'id' => 309, 'departamento_id' => 18, 'nombre'=> 'Sucre' ));
    DSIproject\Municipio::create(array( 'id' => 310, 'departamento_id' => 18, 'nombre'=> 'Valdéz' ));
    DSIproject\Municipio::create(array( 'id' => 341, 'departamento_id' => 19, 'nombre'=> 'Andrés Bello' ));
    DSIproject\Municipio::create(array( 'id' => 342, 'departamento_id' => 19, 'nombre'=> 'Antonio Rómulo Costa' ));
    DSIproject\Municipio::create(array( 'id' => 343, 'departamento_id' => 19, 'nombre'=> 'Ayacucho' ));
    DSIproject\Municipio::create(array( 'id' => 344, 'departamento_id' => 19, 'nombre'=> 'Bolívar' ));
    DSIproject\Municipio::create(array( 'id' => 345, 'departamento_id' => 19, 'nombre'=> 'Cárdenas' ));
    DSIproject\Municipio::create(array( 'id' => 346, 'departamento_id' => 19, 'nombre'=> 'Córdoba' ));
    DSIproject\Municipio::create(array( 'id' => 347, 'departamento_id' => 19, 'nombre'=> 'Fernández Feo' ));
    DSIproject\Municipio::create(array( 'id' => 348, 'departamento_id' => 19, 'nombre'=> 'Francisco de Miranda' ));
    DSIproject\Municipio::create(array( 'id' => 349, 'departamento_id' => 19, 'nombre'=> 'García de Hevia' ));
    DSIproject\Municipio::create(array( 'id' => 350, 'departamento_id' => 19, 'nombre'=> 'Guásimos' ));
    DSIproject\Municipio::create(array( 'id' => 351, 'departamento_id' => 19, 'nombre'=> 'Independencia' ));
    DSIproject\Municipio::create(array( 'id' => 352, 'departamento_id' => 19, 'nombre'=> 'Jáuregui' ));
    DSIproject\Municipio::create(array( 'id' => 353, 'departamento_id' => 19, 'nombre'=> 'José María Vargas' ));
    DSIproject\Municipio::create(array( 'id' => 354, 'departamento_id' => 19, 'nombre'=> 'Junín' ));
    DSIproject\Municipio::create(array( 'id' => 355, 'departamento_id' => 19, 'nombre'=> 'Libertad' ));
    DSIproject\Municipio::create(array( 'id' => 356, 'departamento_id' => 19, 'nombre'=> 'Libertador' ));
    DSIproject\Municipio::create(array( 'id' => 357, 'departamento_id' => 19, 'nombre'=> 'Lobatera' ));
    DSIproject\Municipio::create(array( 'id' => 358, 'departamento_id' => 19, 'nombre'=> 'Michelena' ));
    DSIproject\Municipio::create(array( 'id' => 359, 'departamento_id' => 19, 'nombre'=> 'Panamericano' ));
    DSIproject\Municipio::create(array( 'id' => 360, 'departamento_id' => 19, 'nombre'=> 'Pedro María Ureña' ));
    DSIproject\Municipio::create(array( 'id' => 361, 'departamento_id' => 19, 'nombre'=> 'Rafael Urdaneta' ));
    DSIproject\Municipio::create(array( 'id' => 362, 'departamento_id' => 19, 'nombre'=> 'Samuel Darío Maldonado' ));
    DSIproject\Municipio::create(array( 'id' => 363, 'departamento_id' => 19, 'nombre'=> 'San Cristóbal' ));
    DSIproject\Municipio::create(array( 'id' => 364, 'departamento_id' => 19, 'nombre'=> 'Seboruco' ));
    DSIproject\Municipio::create(array( 'id' => 365, 'departamento_id' => 19, 'nombre'=> 'Simón Rodríguez' ));
    DSIproject\Municipio::create(array( 'id' => 366, 'departamento_id' => 19, 'nombre'=> 'Sucre' ));
    DSIproject\Municipio::create(array( 'id' => 367, 'departamento_id' => 19, 'nombre'=> 'Torbes' ));
    DSIproject\Municipio::create(array( 'id' => 368, 'departamento_id' => 19, 'nombre'=> 'Uribante' ));
    DSIproject\Municipio::create(array( 'id' => 369, 'departamento_id' => 19, 'nombre'=> 'San Judas Tadeo' ));
    DSIproject\Municipio::create(array( 'id' => 370, 'departamento_id' => 20, 'nombre'=> 'Andrés Bello' ));
    DSIproject\Municipio::create(array( 'id' => 371, 'departamento_id' => 20, 'nombre'=> 'Boconó' ));
    DSIproject\Municipio::create(array( 'id' => 372, 'departamento_id' => 20, 'nombre'=> 'Bolívar' ));
    DSIproject\Municipio::create(array( 'id' => 373, 'departamento_id' => 20, 'nombre'=> 'Candelaria' ));
    DSIproject\Municipio::create(array( 'id' => 374, 'departamento_id' => 20, 'nombre'=> 'Carache' ));
    DSIproject\Municipio::create(array( 'id' => 375, 'departamento_id' => 20, 'nombre'=> 'Escuque' ));
    DSIproject\Municipio::create(array( 'id' => 376, 'departamento_id' => 20, 'nombre'=> 'José Felipe Márquez Cañizalez' ));
    DSIproject\Municipio::create(array( 'id' => 377, 'departamento_id' => 20, 'nombre'=> 'Juan Vicente Campos Elías' ));
    DSIproject\Municipio::create(array( 'id' => 378, 'departamento_id' => 20, 'nombre'=> 'La Ceiba' ));
    DSIproject\Municipio::create(array( 'id' => 379, 'departamento_id' => 20, 'nombre'=> 'Miranda' ));
    DSIproject\Municipio::create(array( 'id' => 380, 'departamento_id' => 20, 'nombre'=> 'Monte Carmelo' ));
    DSIproject\Municipio::create(array( 'id' => 381, 'departamento_id' => 20, 'nombre'=> 'Motatán' ));
    DSIproject\Municipio::create(array( 'id' => 382, 'departamento_id' => 20, 'nombre'=> 'Pampán' ));
    DSIproject\Municipio::create(array( 'id' => 383, 'departamento_id' => 20, 'nombre'=> 'Pampanito' ));
    DSIproject\Municipio::create(array( 'id' => 384, 'departamento_id' => 20, 'nombre'=> 'Rafael Rangel' ));
    DSIproject\Municipio::create(array( 'id' => 385, 'departamento_id' => 20, 'nombre'=> 'San Rafael de Carvajal' ));
    DSIproject\Municipio::create(array( 'id' => 386, 'departamento_id' => 20, 'nombre'=> 'Sucre' ));
    DSIproject\Municipio::create(array( 'id' => 387, 'departamento_id' => 20, 'nombre'=> 'Trujillo' ));
    DSIproject\Municipio::create(array( 'id' => 388, 'departamento_id' => 20, 'nombre'=> 'Urdaneta' ));
    DSIproject\Municipio::create(array( 'id' => 389, 'departamento_id' => 20, 'nombre'=> 'Valera' ));
    DSIproject\Municipio::create(array( 'id' => 390, 'departamento_id' => 21, 'nombre'=> 'Vargas' ));
    DSIproject\Municipio::create(array( 'id' => 391, 'departamento_id' => 22, 'nombre'=> 'Arístides Bastidas' ));
    DSIproject\Municipio::create(array( 'id' => 392, 'departamento_id' => 22, 'nombre'=> 'Bolívar' ));
    DSIproject\Municipio::create(array( 'id' => 407, 'departamento_id' => 22, 'nombre'=> 'Bruzual' ));
    DSIproject\Municipio::create(array( 'id' => 408, 'departamento_id' => 22, 'nombre'=> 'Cocorote' ));
    DSIproject\Municipio::create(array( 'id' => 409, 'departamento_id' => 22, 'nombre'=> 'Independencia' ));
    DSIproject\Municipio::create(array( 'id' => 410, 'departamento_id' => 22, 'nombre'=> 'José Antonio Páez' ));
    DSIproject\Municipio::create(array( 'id' => 411, 'departamento_id' => 22, 'nombre'=> 'La Trinidad' ));
    DSIproject\Municipio::create(array( 'id' => 412, 'departamento_id' => 22, 'nombre'=> 'Manuel Monge' ));
    DSIproject\Municipio::create(array( 'id' => 413, 'departamento_id' => 22, 'nombre'=> 'Nirgua' ));
    DSIproject\Municipio::create(array( 'id' => 414, 'departamento_id' => 22, 'nombre'=> 'Peña' ));
    DSIproject\Municipio::create(array( 'id' => 415, 'departamento_id' => 22, 'nombre'=> 'San Felipe' ));
    DSIproject\Municipio::create(array( 'id' => 416, 'departamento_id' => 22, 'nombre'=> 'Sucre' ));
    DSIproject\Municipio::create(array( 'id' => 417, 'departamento_id' => 22, 'nombre'=> 'Urachiche' ));
    DSIproject\Municipio::create(array( 'id' => 418, 'departamento_id' => 22, 'nombre'=> 'José Joaquín Veroes' ));
    DSIproject\Municipio::create(array( 'id' => 441, 'departamento_id' => 23, 'nombre'=> 'Almirante Padilla' ));
    DSIproject\Municipio::create(array( 'id' => 442, 'departamento_id' => 23, 'nombre'=> 'Baralt' ));
    DSIproject\Municipio::create(array( 'id' => 443, 'departamento_id' => 23, 'nombre'=> 'Cabimas' ));
    DSIproject\Municipio::create(array( 'id' => 444, 'departamento_id' => 23, 'nombre'=> 'Catatumbo' ));
    DSIproject\Municipio::create(array( 'id' => 445, 'departamento_id' => 23, 'nombre'=> 'Colón' ));
    DSIproject\Municipio::create(array( 'id' => 446, 'departamento_id' => 23, 'nombre'=> 'Francisco Javier Pulgar' ));
    DSIproject\Municipio::create(array( 'id' => 447, 'departamento_id' => 23, 'nombre'=> 'Páez' ));
    DSIproject\Municipio::create(array( 'id' => 448, 'departamento_id' => 23, 'nombre'=> 'Jesús Enrique Losada' ));
    DSIproject\Municipio::create(array( 'id' => 449, 'departamento_id' => 23, 'nombre'=> 'Jesús María Semprún' ));
    DSIproject\Municipio::create(array( 'id' => 450, 'departamento_id' => 23, 'nombre'=> 'La Cañada de Urdaneta' ));
    DSIproject\Municipio::create(array( 'id' => 451, 'departamento_id' => 23, 'nombre'=> 'Lagunillas' ));
    DSIproject\Municipio::create(array( 'id' => 452, 'departamento_id' => 23, 'nombre'=> 'Machiques de Perijá' ));
    DSIproject\Municipio::create(array( 'id' => 453, 'departamento_id' => 23, 'nombre'=> 'Mara' ));
    DSIproject\Municipio::create(array( 'id' => 454, 'departamento_id' => 23, 'nombre'=> 'Maracaibo' ));
    DSIproject\Municipio::create(array( 'id' => 455, 'departamento_id' => 23, 'nombre'=> 'Miranda' ));
    DSIproject\Municipio::create(array( 'id' => 456, 'departamento_id' => 23, 'nombre'=> 'Rosario de Perijá' ));
    DSIproject\Municipio::create(array( 'id' => 457, 'departamento_id' => 23, 'nombre'=> 'San Francisco' ));
    DSIproject\Municipio::create(array( 'id' => 458, 'departamento_id' => 23, 'nombre'=> 'Santa Rita' ));
    DSIproject\Municipio::create(array( 'id' => 459, 'departamento_id' => 23, 'nombre'=> 'Simón Bolívar' ));
    DSIproject\Municipio::create(array( 'id' => 460, 'departamento_id' => 23, 'nombre'=> 'Sucre' ));
    DSIproject\Municipio::create(array( 'id' => 461, 'departamento_id' => 23, 'nombre'=> 'Valmore Rodríguez' ));
    DSIproject\Municipio::create(array( 'id' => 462, 'departamento_id' => 24, 'nombre'=> 'Libertador' ));


        
        
        
        
        
        
        

        
        
    }
}
