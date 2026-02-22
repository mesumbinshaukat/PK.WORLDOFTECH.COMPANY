<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsletterSubscriber extends Model { protected $fillable = ['email']; }

class BlogPost extends Model { protected $fillable = ['title', 'slug', 'body', 'published_at']; }
