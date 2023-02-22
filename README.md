# Laravel Octane Sample 

# Getting Started

```
$ cp .env.example .env
$ composer install
$ php artisan octane:start --workers=1 --task-workers=4 --host=0.0.0.0 # Launch server
```

http://localhost:3000 sleep 10 seconds.

http://localhost:3000/detail response quickly.

http://localhost:3000/api/status response swoole stats.

#### Stats response

```json
{
  "up": 1,
  "version": "OpenSwoole-22.0.0",
  "master_pid": 87270,
  "manager_pid": 87271,
  "worker_id": 2,
  "reactor_threads_num": 4,
  "workers_total": 4,
  "workers_idle": 3,
  "task_workers_total": 4,
  "task_workers_idle": 4,
  "tasking_num": 0,
  "user_workers_total": 0,
  "dispatch_total": 3,
  "requests_total": 2,
  "start_time": 1677077640,
  "start_seconds": 3,
  "max_conn": 100000,
  "connections_accepted": 2,
  "connections_active": 2,
  "connections_closed": 0,
  "reload_count": 0,
  "reload_last_time": 1677077640,
  "worker_memory_usage": 18874368,
  "worker_vm_object_num": 585,
  "worker_vm_resource_num": 5,
  "coroutine_num": 0,
  "event_workers": [
    {
      "worker_id": 0,
      "pid": 87276,
      "start_time": 1677077640,
      "start_seconds": 3,
      "request_count": 0,
      "dispatch_count": 0
    },
    {
      "worker_id": 1,
      "pid": 87277,
      "start_time": 1677077640,
      "start_seconds": 3,
      "request_count": 0,
      "dispatch_count": 0
    },
    {
      "worker_id": 2,
      "pid": 87278,
      "start_time": 1677077640,
      "start_seconds": 3,
      "request_count": 2,
      "dispatch_count": 3
    },
    {
      "worker_id": 3,
      "pid": 87279,
      "start_time": 1677077640,
      "start_seconds": 3,
      "request_count": 0,
      "dispatch_count": 0
    }
  ],
  "task_workers": [
    {
      "worker_id": 4,
      "pid": 87272,
      "start_time": 1677077640,
      "start_seconds": 3
    },
    {
      "worker_id": 5,
      "pid": 87273,
      "start_time": 1677077640,
      "start_seconds": 3
    },
    {
      "worker_id": 6,
      "pid": 87274,
      "start_time": 1677077640,
      "start_seconds": 3
    },
    {
      "worker_id": 7,
      "pid": 87275,
      "start_time": 1677077640,
      "start_seconds": 3
    }
  ],
  "user_workers": [
    
  ],
  "top_classes": {
    "Closure": 326,
    "Symfony\\Component\\Console\\Formatter\\OutputFormatterStyle": 10,
    "Symfony\\Component\\Console\\Color": 10,
    "Monolog\\Level": 8,
    "Illuminate\\Routing\\Route": 7,
    "Symfony\\Component\\HttpFoundation\\InputBag": 3,
    "Symfony\\Component\\Routing\\CompiledRoute": 3,
    "Laravel\\Octane\\Tables\\OpenSwooleTable": 3,
    "Illuminate\\Support\\Collection": 3,
    "OpenSwoole\\Connection\\Iterator": 2,
    "Spatie\\FlareClient\\Context\\BaseContextProviderDetector": 2,
    "Symfony\\Component\\Console\\Formatter\\OutputFormatter": 2
  }
}
```
