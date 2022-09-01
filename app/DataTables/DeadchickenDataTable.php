<?php

namespace App\DataTables;

use App\Models\Deadchicken;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class DeadchickenDataTable extends DataTable
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
            ->addColumn('action', 'deadchicken.action')
            ->editColumn('created_at' , function(Deadchicken $deadchicken){
                return $deadchicken->created_at->translatedFormat('j F Y g:i A');
               });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Deadchicken $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Deadchicken $model)
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
                    ->setTableId('deadchicken-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('create'),
                        Button::make('export'),
                        Button::make('print'),
                        Button::make('reload'),
                        Button::make('pageLength')

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
            Column::make('number')->title(__('hometr.dead numer')),
            Column::make('created_at')->title(__('hometr.Date')),
            Column::computed('action')
            ->exportable(false)
            ->printable(false)
            ->width(80)
            ->addClass('text-center')->title(__('hometr.Options')),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Deadchicken_' . date('YmdHis');
    }
}
