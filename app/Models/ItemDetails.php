<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemDetails extends Model
{
    use HasFactory;
    protected $fillable = ['item_id', 'filename'];

    public function item() {
        return $this -> belongsTo('App\Item');
    }
    public function up() {
        Schema::create('item_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('item_id')->unsigned();
            $table->foreign('item_id')->references('id')->on('items');
            $table->string('filename');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('item_details');
    }
}
