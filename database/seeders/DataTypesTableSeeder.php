<?php

namespace Joy\VoyagerBreadInvoice\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'invoices');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'invoices',
                'display_name_singular' => __('joy-voyager-bread-invoice::seeders.data_types.invoice.singular'),
                'display_name_plural'   => __('joy-voyager-bread-invoice::seeders.data_types.invoice.plural'),
                'icon'                  => 'voyager-bread voyager-bread-invoice voyager-receipt',
                'model_name'            => 'Joy\\VoyagerBreadInvoice\\Models\\Invoice',
                // 'policy_name'           => 'Joy\\VoyagerBreadInvoice\\Policies\\InvoicePolicy',
                // 'controller'            => 'Joy\\VoyagerBreadInvoice\\Http\\Controllers\\VoyagerBreadInvoiceController',
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
