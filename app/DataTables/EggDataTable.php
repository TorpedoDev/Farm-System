<?php

namespace App\DataTables;

use App\Models\Egg;
use App\Models\Eggsales;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class EggDataTable extends DataTable
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
            ->addColumn('action', 'eggs.action')
            ->editColumn('created_at' , function(Eggsales $egg){
                return $egg->created_at->translatedFormat('j F Y g:i A');
               });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Eggsales $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Eggsales $model)
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
                    ->setTableId('egg-table')
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
            Column::make('quantity')->title(__('hometr.Egg quantity')),
            Column::make('salary')->title(__('hometr.Egg salary')),
            Column::make('total')->title(__('hometr.Total salary')),
            Column::make('created_at')->title(__('hometr.Sell date')),
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
        return 'Egg_' . date('YmdHis');
    }
}
