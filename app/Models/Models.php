<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model { protected $fillable = ['name', 'email', 'subject', 'message']; }

class AdminUser extends Model { protected $fillable = ['username', 'password', 'two_fa_secret', 'last_login']; protected $hidden = ['password']; }

class NewsletterSubscriber extends Model { protected $fillable = ['email']; }

class BlogPost extends Model { protected $fillable = ['title', 'slug', 'body', 'published_at']; }
