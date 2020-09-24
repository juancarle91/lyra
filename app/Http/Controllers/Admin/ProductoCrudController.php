<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductoRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\DB;
use App\Categoria;

/**
 * Class ProductoCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProductoCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;


    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Producto::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/producto');
        CRUD::setEntityNameStrings('producto', 'productos');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::setFromDb(); // columns

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ProductoRequest::class);
        $categorias = DB::table('categorias')->pluck('titulo');
        CRUD::addFields([
            [
                'name' => 'titulo', 
                'type' => 'text', 
                'label' => 'Titulo'
            ],
            [
                'name' => 'descripcion', 
                'type' => 'text', 
                'label' => 'Descripcion'
            ],
            [
                'name' => 'foto', 
                'type' => 'browse', 
                'label' => 'Imagen'
            ],
            [
                'name' => 'visible_en', 
                'label' => 'Visible en Home',
                'type' => 'select_from_array',
                'options' => ['si' => 'Si', 'no' => 'No'],
                'allows_null' => false,
                'default' => 'no',
            ],
            [
                'name' => 'categoria_id', 
                'label' => 'Categoría',
                'type' => 'select2',
                'attribute' => 'titulo',
                'model' => "App\Categoria",
                'allows_null' => false,
                'default' => 0,
            ],
            [
                'name' => 'precio', 
                'type' => 'text', 
                'label' => 'Precio',
                'default' => 0
            ]
        ]);

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
