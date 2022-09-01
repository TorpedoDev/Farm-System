<?php

namespace App\DataTables;

use App\Models\Cartoon;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class CartoonDataTable extends DataTable
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
            ->addColumn('action', 'cartoon.action')
            ->editColumn('created_at' , function(Cartoon $cartoon){
                return $cartoon->created_at->translatedFormat('j F Y g:i A');
               });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Cartoon $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Cartoon $model)
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
                    ->setTableId('cartoon-table')
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
            Column::make('quantity')->title(__('hometr.Cartoon quantity')),
            Column::make('salary')->title(__('hometr.Cartoon salary')),
            Column::make('total')->title(__('hometr.Total salary')),
            Column::make('created_at')->title(__('hometr.Buy date')),
            Column::computed('action')
            ->exportable(false)
            ->printable(false)
            ->width(80)
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
        return 'Cartoon_' . date('YmdHis');
    }
}
