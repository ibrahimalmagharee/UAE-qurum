<?php

namespace App\Traits;


use Exception;
use Illuminate\Support\Facades\Schema;

trait MetronicPaginate
{

    public static function getColumns()
    {
        $table = with(new static)->getTable();
        $columns = Schema::getColumnListing($table);
        return $columns;
    }

    public static function scopeMetronicPaginate($modelQuery,$options=[])
    {
        $pagination = request()->pagination;
        $query = request()->input('query');
        $sort = request()->sort;
        request()->request->add(['page' => $pagination['page']]);
        $model = $modelQuery;
        $columns = static::getColumns();
        if ($query)
            foreach ($query as $key => $value) {
                if (in_array($key, $columns)) {
                    if(is_array($value)){
                        $model->whereIn($key, $value);
                    } else {
                        if($key == 'status' && $value == 'not_published'){
                            $model->whereNull('published_at');
                        } else {
                            $model->where($key, $value);
                        }
                    }
                }
                if ($key == 'or_where'){
                    foreach ($value as $k => $v) {
                        $model->orWhere($k, $v);
                    }
                }
                if ($key == 'generalSearch'||$key == 'generalSearch2') {
                    $model->where(function ($q) use ($columns, $value) {
                        foreach ($columns as $column) {
                            if(!in_array($column,['created_at','updated_at','deleted_at','email_verified_at'])) {
                                $q->orWhere($column, 'like', "%$value%");
                            }
                        }
                    });
                }
            }

        if ($sort && in_array($sort['field'], $columns)) {
            $model->orderBy($sort['field'], $sort['sort']);
        }

        if(array_key_exists('with',$options)) {
            if(array_key_exists('relations',$options['with'])) {
                $model = $model->with($options['with']['relations']);
            }
            if(array_key_exists('count',$options['with'])) {
                $model = $model->withCount($options['with']['count']);
            }
        }

        if(array_key_exists('where',$options)) {
            foreach ($options['where'] as $key => $value) {
                $model = $model->where($key,$value);
            }
        }

        $model = $model->paginate($pagination['perpage']);

        $pagination['total'] = $model->total();
        $pagination['pages'] = $model->lastPage();

        $response = [
            'meta' => $pagination,
            'data' => $model->toArray()['data']
        ];
        return $response;
    }

    public static function scopeAdvancedMetronicPaginate($modelQuery)
    {
        $pagination = request()->pagination;
        $query = request()->input('query');
        $sort = request()->sort;
        request()->request->add(['page' => $pagination['page']]);
        $model = $modelQuery;
        $columns = static::getColumns();

        if ($sort && in_array($sort['field'], $columns)) {

            if ($sort['field'] != 'id'){
                $model->orderBy($sort['field'], $sort['sort']);
            }
        }
        $pagination['rowIds'] = $modelQuery->pluck('id'); // add this for multi select

        $model = $model->paginate(10);

        $pagination['total'] = $model->total();
        $pagination['pages'] = $model->lastPage();
        $pagination['sort'] = $sort['sort'];
        $pagination['field'] = $sort['field'];
        $pagination['iTotalRecords'] = $model->total();
        $pagination['iTotalDisplayRecords'] = $model->total();
        $pagination['sEcho'] = 0;

        $response = [
            'meta' => $pagination,
            'data' => $model->toArray()['data']
        ];
        return $response;
    }
}
