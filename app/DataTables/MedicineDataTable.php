<?php

namespace App\DataTables;

use App\Models\Medicine;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class MedicineDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', 'medicine.action')
            ->editColumn('created_at' , function(Medicine $medicine){
                return $medicine->created_at->translatedFormat('j F Y g:i A');
               });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Medicine $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Medicine $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('medicine-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('create'),
                        Button::make('export'),
                        Button::make('print'),
                        Button::make('reload')
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
        
            Column::make('id')->title('#'),
            Column::make('name')->title(__('hometr.Medicine name')),
            Column::make('salary')->title(__('hometr.Medicine salary')),
            Column::make('created_at')->title(__('hometr.Buy date')),
            Column::computed('action')
            ->exportable(false)
            ->printable(false)
            ->width(60)
            ->addClass('text-center')
            ->title(__('hometr.Options')),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Medicine_' . date('YmdHis');
    }
}
