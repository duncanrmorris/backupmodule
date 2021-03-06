<?php

namespace duncanrmorris\backupmodule\App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class backupcontrols extends Model
{
    //
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'backup_admin', 'backup_view', 'backup_add', 'backup_download', 'backup_del',
    ];
}
