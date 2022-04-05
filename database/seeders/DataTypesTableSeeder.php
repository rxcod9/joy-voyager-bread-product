<?php

namespace Joy\VoyagerBreadProduct\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'products');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'products',
                'display_name_singular' => __('joy-voyager-bread-product::seeders.data_types.product.singular'),
                'display_name_plural'   => __('joy-voyager-bread-product::seeders.data_types.product.plural'),
                'icon'                  => 'voyager-bread voyager-bread-product voyager-shop',
                'model_name'            => 'Joy\\VoyagerBreadProduct\\Models\\Product',
                // 'policy_name'           => 'Joy\\VoyagerBreadProduct\\Policies\\ProductPolicy',
                // 'controller'            => 'Joy\\VoyagerBreadProduct\\Http\\Controllers\\VoyagerBreadProductController',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
