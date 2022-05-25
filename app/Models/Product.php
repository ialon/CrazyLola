<?php

namespace App\Models;

use \DateTimeInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'products';

    protected $dates = [
        'due_date',
        'production_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'sku',
        'status_id',
        'name',
        'description',
        'unit_price',
        'weight',
        'due_date',
        'production_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function productInventories()
    {
        return $this->hasMany(Inventory::class, 'product_id', 'id');
    }

    public function productOrderItems()
    {
        return $this->hasMany(OrderItem::class, 'product_id', 'id');
    }

    public function status()
    {
        return $this->belongsTo(ProductStatus::class, 'status_id');
    }

    public function getDueDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDueDateAttribute($value)
    {
        $this->attributes['due_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getProductionDateAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setProductionDateAttribute($value)
    {
        $this->attributes['production_date'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
