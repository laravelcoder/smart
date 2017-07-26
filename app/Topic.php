<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    //Relation to webmasterSections
    public function webmasterSection()
    {

        return $this->belongsTo('App\WebmasterSection', 'webmaster_id');
    }

    //Relation to Sections
    public function section()
    {
        return $this->belongsTo('App\Section', 'section_id');
    }

    //Relation to Users
    public function user()
    {
        return $this->belongsTo('App\User', 'created_by');
    }

    //Relation to Photos
    public function photos()
    {

        return $this->hasMany('App\Photo')->orderby('row_no', 'asc');
    }


    //Relation to Maps
    public function maps()
    {

        return $this->hasMany('App\Map')->orderby('row_no', 'asc');
    }


    //Relation to Comments
    public function comments()
    {

        return $this->hasMany('App\Comment')->orderby('row_no', 'asc');
    }

    //Relation to New Comments
    public function newComments()
    {

        return $this->hasMany('App\Comment')->where('status', '=', 0)->orderby('row_no', 'asc');
    }
}
