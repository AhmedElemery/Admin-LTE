<?php

namespace App\DataTables;

use App\Admin;
use App\User;
use Yajra\DataTables\Services\DataTable;

class AdminDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables($query)
            ->addColumn('edit', 'admin.admins.btn.edit')
            ->addColumn('delete', 'admin.admins.btn.delete')
            ->rawColumns([
                'edit', 'delete',
            ]);

    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
    {
        return Admin::query();
    }

    public static function lang(){
        $lang = [
                    "emptyTable"       => trans('admin.emptyTable'),
                    "info"             => trans('admin.info'),
                    "infoEmpty"        => trans('admin.infoEmpty'),
                    "infoFiltered"     => trans('admin.infoFiltered'),
                    "infoPostFix"      => trans('admin.infoPostFix'),
                    "thousands"        => trans('admin.thousands'),
                    "lengthMenu"       => trans('admin.lengthMenu'),
                    "loadingRecords"   => trans('admin.loadingRecords'),
                    "processing"       => trans('admin.processing'),
                    "search"           => trans('admin.search'),
                    "zeroRecords"      => trans('admin.zeroRecords'),
                    "paginate"         => [
                    "first"            => trans('admin.first'),
                    "last"             => trans('admin.last'),
                    "next"             => trans('admin.next'),
                    "previous"         => trans('admin.previous'),
                    ],
                    "aria"             => [
                    "sortAscending"    => trans('admin.sortAscending'),
                    "sortDescending"   => trans('admin.sortDescending'),
                    ]
            ];

            return $lang;
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
        // ->addAction(['width' => '80px'])
        //->parameters($this->getBuilderParameters());
            ->parameters([
                'dom' => 'Blfrtip',
                'buttons' => [
                    ['text' => '<i class="fa fa-plus"></i>'.trans('admin.addnew'), 'className' => 'btn btn-success btn-margin'],
                    ['extend' => 'print', 'className' => 'btn-margin btn btn-primary', 'text' => '<i class="fa fa-print"></i>'.trans('admin.print')],
                    ['extend' => 'csv', 'className' => 'btn-margin btn btn-info', 'text' => '<i class="fa fa-book"></i>'.trans('admin.csv')],
                    ['extend' => 'excel', 'className' => 'btn-margin btn btn-warning', 'text' => '<i class="fa fa-file"></i>'.trans('admin.excel')],
                    ['extend' => 'reload', 'className' => 'btn-margin btn btn-default', 'text' => '<i class="fa fa-refresh"></i>'],
                ],
                'lengthMenu' => [
                    [10, 25, 50, 100, -1], [10, 25, 50, 'All Data'],
                ], // for search form

                'initComplete' => " function () {
                         this.api().columns([0,1,2,3,4]).every( function () {
                         var column = this;
                         var input = document.createElement(\"input\");
                        $(input).appendTo($(column.footer()).empty())
                        .on( 'keyup', function () {
                            column.search($(this).val(),false , false, true).draw();
                        });
                    });
                }",

                'language' => self::lang(),

            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            ['name' => 'id', 'data' => 'id', 'title' => trans('admin.id')],
            ['name' => 'name', 'data' => 'name', 'title' => trans('admin.name')],
            ['name' => 'email', 'data' => 'email', 'title' => trans('admin.email')],
            // ['name' => 'created_at', 'data' => 'created_at', 'title' => 'Created_at'],
            // ['name' => 'updated_at', 'data' => 'updated_at', 'title' => 'Updated_at'],
            [
                'name' => 'edit',
                'data' => 'edit',
                'title' => trans('admin.edit'),
                'orderable' => false,
                'searchable' => false,
                'printable' => false,
                'exportable' => false,
            ],
            [
                'name' => 'delete',
                'data' => 'delete',
                'title' => trans('admin.delete'),
                'orderable' => false,
                'searchable' => false,
                'printable' => false,
                'exportable' => false,
            ],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Admin_' . date('YmdHis');
    }
}
