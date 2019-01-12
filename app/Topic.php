<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;

class Topic extends Model implements Feedable
{
    //Relation to webmasterSections
    public function webmasterSection()
    {

        return $this->belongsTo('App\WebmasterSection', 'webmaster_id');
    }

    // Relation to Sections
    public function section()
    {
        return $this->belongsTo('App\Section', 'section_id');
    }

    //Relation to TopicCategory
    public function categories()
    {
        return $this->hasMany('App\TopicCategory','topic_id');
    }

    //Relation to Users
    public function user()
    {
        return $this->belongsTo('App\User', 'created_by');
    }

    //Relation to Users
    public function edituser()
    {
        return $this->belongsTo('App\User', 'updated_by');
    }

    //Relation to Photos
    public function photos()
    {

        return $this->hasMany('App\Photo', 'topic_id')->orderby('row_no', 'asc');
    }

    //Relation to Attach Files
    public function attachFiles()
    {

        return $this->hasMany('App\AttachFile', 'topic_id')->orderby('row_no', 'asc');
    }

    //Relation to Related Topics
    public function relatedTopics()
    {
        return $this->hasMany('App\RelatedTopic', 'topic_id')->orderby('row_no', 'asc');
    }

    //Relation to Maps
    public function maps()
    {

        return $this->hasMany('App\Map', 'topic_id')->orderby('row_no', 'asc');
    }


    //Relation to Comments
    public function comments()
    {
        return $this->hasMany('App\Comment', 'topic_id')->orderby('row_no', 'asc');
    }

    //Relation to New Comments
    public function newComments()
    {

        return $this->hasMany('App\Comment', 'topic_id')->where('status', '=', 0)->orderby('row_no', 'asc');
    }

    //Relation to approved Comments
    public function approvedComments()
    {
        return $this->hasMany('App\Comment', 'topic_id')->where('status', '=', 1)->orderby('row_no', 'asc');
    }

    //Relation to Additional Fields
    public function fields()
    {

        return $this->hasMany('App\TopicField', 'topic_id')->orderby('id', 'asc');
    }

    public function toFeedItem()
    {
        return FeedItem::create()
            ->id($this->id)
            ->title($this->title_vi)
            ->summary($this->title_vi)
            ->updated($this->updated_at)
            ->link($this->seo_url_slug_vi)
            ->author($this->user->name);
    }

    public static function getFeedItems()
    {
        return Topic::where('status','1')->orderby('id','desc')->take(20)->get();
    }
    
    

}

