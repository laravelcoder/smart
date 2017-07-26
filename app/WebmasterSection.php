<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebmasterSection extends Model
{
    //
    public function sections()
    {

        return $this->hasMany('App\Section' , 'webmaster_id')->orderby('row_no', 'asc');
    }

    public function topics()
    {

        return $this->hasMany('App\Topic' , 'webmaster_id')->orderby('row_no', 'asc');
    }

    public function menus()
    {

        return $this->hasMany('App\Section' , 'cat_id')->orderby('row_no', 'asc');
    }

}

