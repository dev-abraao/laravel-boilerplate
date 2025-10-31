<?php

namespace App\Traits;

use App\Models\Log;
use Illuminate\Support\Facades\Auth;

trait Logs
{
    public static function bootLogs()
    {
        
        static::created(function ($model) {

            Log::create([
                'table' => $model->getTable(),
                'register_id' => $model->getKey(),
                'user_id' => Auth::id() ?? null,
                'type' => 'create',
                'fields_changed' => json_encode($model->getRawOriginal()),
                'logged_at' => now(),
            ]);
        });

        static::updated(function ($model) {
            $changes = collect($model->getChanges())->except('updated_at', 'created_at')
                ->mapWithKeys(fn($new, $field) => [$field => $model->getOriginal($field)])
                ->all();

            if (empty($changes)){
                return;
            }

            Log::create([
                'table' => $model->getTable(),
                'register_id' => $model->getKey(),
                'user_id' => Auth::id(),
                'type' => 'update',
                'fields_changed' => json_encode($changes),
                'logged_at' => now(),
            ]);
        });

        static::deleted(function ($model) {
            Log::create([
                'table' => $model->getTable(),
                'register_id' => $model->getKey(),
                'user_id' => Auth::id() ?? null,
                'type' => 'delete',
                'fields_changed' => json_encode($model->getRawOriginal()),
                'logged_at' => now(),
            ]);
        });
    }
}
