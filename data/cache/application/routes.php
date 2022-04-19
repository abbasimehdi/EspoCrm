<?php
return [
  0 => [
    'route' => '/Activities/{scope}/{id}/{name}',
    'method' => 'get',
    'params' => [
      'controller' => 'Activities',
      'action' => 'list',
      'scope' => ':scope',
      'id' => ':id',
      'name' => ':name'
    ]
  ],
  1 => [
    'route' => '/Activities',
    'method' => 'get',
    'params' => [
      'controller' => 'Activities',
      'action' => 'listCalendarEvents'
    ]
  ],
  2 => [
    'route' => '/Timeline',
    'method' => 'get',
    'params' => [
      'controller' => 'Activities',
      'action' => 'getTimeline'
    ]
  ],
  3 => [
    'route' => '/Activities/{scope}/{id}/{name}/list/{entityType}',
    'method' => 'get',
    'params' => [
      'controller' => 'Activities',
      'action' => 'entityTypeList',
      'scope' => ':scope',
      'id' => ':id',
      'name' => ':name',
      'entityType' => ':entityType'
    ]
  ],
  4 => [
    'route' => '/Hello/test/{id}',
    'method' => 'get',
    'params' => [
      'controller' => 'MyController',
      'action' => 'doSomething',
      'id' => ':id'
    ]
  ],
  5 => [
    'route' => '/HelloWorld/{name}',
    'method' => 'post',
    'params' => [
      'controller' => 'MyController',
      'action' => 'helloWorld',
      'name' => ':name'
    ]
  ],
  6 => [
    'route' => '/TestNoAuth',
    'method' => 'get',
    'params' => [
      'controller' => 'Test',
      'action' => ''
    ],
    'noAuth' => true
  ],
  7 => [
    'route' => '/',
    'method' => 'get',
    'params' => [
      'controller' => 'ApiIndex',
      'action' => 'index'
    ]
  ],
  8 => [
    'route' => '/App/user',
    'method' => 'get',
    'params' => [
      'controller' => 'App',
      'action' => 'user'
    ]
  ],
  9 => [
    'route' => '/Metadata',
    'method' => 'get',
    'params' => [
      'controller' => 'Metadata'
    ]
  ],
  10 => [
    'route' => '/I18n',
    'method' => 'get',
    'params' => [
      'controller' => 'I18n'
    ],
    'noAuth' => true
  ],
  11 => [
    'route' => '/Settings',
    'method' => 'get',
    'params' => [
      'controller' => 'Settings'
    ],
    'noAuth' => true
  ],
  12 => [
    'route' => '/Settings',
    'method' => 'patch',
    'params' => [
      'controller' => 'Settings'
    ]
  ],
  13 => [
    'route' => '/Settings',
    'method' => 'put',
    'params' => [
      'controller' => 'Settings'
    ]
  ],
  14 => [
    'route' => '/User/passwordChangeRequest',
    'method' => 'post',
    'params' => [
      'controller' => 'User',
      'action' => 'passwordChangeRequest'
    ],
    'noAuth' => true
  ],
  15 => [
    'route' => '/User/changePasswordByRequest',
    'method' => 'post',
    'params' => [
      'controller' => 'User',
      'action' => 'changePasswordByRequest'
    ],
    'noAuth' => true
  ],
  16 => [
    'route' => '/Stream',
    'method' => 'get',
    'params' => [
      'controller' => 'Stream',
      'action' => 'list',
      'scope' => 'User'
    ]
  ],
  17 => [
    'route' => '/GlobalSearch',
    'method' => 'get',
    'params' => [
      'controller' => 'GlobalSearch',
      'action' => 'search'
    ]
  ],
  18 => [
    'route' => '/LeadCapture/{apiKey}',
    'method' => 'post',
    'params' => [
      'controller' => 'LeadCapture',
      'action' => 'leadCapture',
      'apiKey' => ':apiKey'
    ],
    'noAuth' => true
  ],
  19 => [
    'route' => '/LeadCapture/{apiKey}',
    'method' => 'options',
    'params' => [
      'controller' => 'LeadCapture',
      'action' => 'leadCapture',
      'apiKey' => ':apiKey'
    ],
    'noAuth' => true
  ],
  20 => [
    'route' => '/{controller}/action/{action}',
    'method' => 'post',
    'params' => [
      'controller' => ':controller',
      'action' => ':action'
    ]
  ],
  21 => [
    'route' => '/{controller}/action/{action}',
    'method' => 'put',
    'params' => [
      'controller' => ':controller',
      'action' => ':action'
    ]
  ],
  22 => [
    'route' => '/{controller}/action/{action}',
    'method' => 'get',
    'params' => [
      'controller' => ':controller',
      'action' => ':action'
    ]
  ],
  23 => [
    'route' => '/{controller}/layout/{name}',
    'method' => 'get',
    'params' => [
      'controller' => 'Layout',
      'scope' => ':controller'
    ]
  ],
  24 => [
    'route' => '/{controller}/layout/{name}',
    'method' => 'put',
    'params' => [
      'controller' => 'Layout',
      'scope' => ':controller'
    ]
  ],
  25 => [
    'route' => '/{controller}/layout/{name}/{setId}',
    'method' => 'put',
    'params' => [
      'controller' => 'Layout',
      'scope' => ':controller'
    ]
  ],
  26 => [
    'route' => '/Admin/rebuild',
    'method' => 'post',
    'params' => [
      'controller' => 'Admin',
      'action' => 'rebuild'
    ]
  ],
  27 => [
    'route' => '/Admin/clearCache',
    'method' => 'post',
    'params' => [
      'controller' => 'Admin',
      'action' => 'clearCache'
    ]
  ],
  28 => [
    'route' => '/Admin/jobs',
    'method' => 'get',
    'params' => [
      'controller' => 'Admin',
      'action' => 'jobs'
    ]
  ],
  29 => [
    'route' => '/Admin/fieldManager/{scope}/{name}',
    'method' => 'get',
    'params' => [
      'controller' => 'FieldManager',
      'action' => 'read',
      'scope' => ':scope',
      'name' => ':name'
    ]
  ],
  30 => [
    'route' => '/Admin/fieldManager/{scope}',
    'method' => 'post',
    'params' => [
      'controller' => 'FieldManager',
      'action' => 'create',
      'scope' => ':scope'
    ]
  ],
  31 => [
    'route' => '/Admin/fieldManager/{scope}/{name}',
    'method' => 'put',
    'params' => [
      'controller' => 'FieldManager',
      'action' => 'update',
      'scope' => ':scope',
      'name' => ':name'
    ]
  ],
  32 => [
    'route' => '/Admin/fieldManager/{scope}/{name}',
    'method' => 'patch',
    'params' => [
      'controller' => 'FieldManager',
      'action' => 'update',
      'scope' => ':scope',
      'name' => ':name'
    ]
  ],
  33 => [
    'route' => '/Admin/fieldManager/{scope}/{name}',
    'method' => 'delete',
    'params' => [
      'controller' => 'FieldManager',
      'action' => 'delete',
      'scope' => ':scope',
      'name' => ':name'
    ]
  ],
  34 => [
    'route' => '/CurrencyRate',
    'method' => 'put',
    'params' => [
      'controller' => 'CurrencyRate',
      'action' => 'update'
    ]
  ],
  35 => [
    'route' => '/Action',
    'method' => 'post',
    'params' => [
      'controller' => 'Action',
      'action' => 'process'
    ]
  ],
  36 => [
    'route' => '/MassAction',
    'method' => 'post',
    'params' => [
      'controller' => 'MassAction',
      'action' => 'process'
    ]
  ],
  37 => [
    'route' => '/Export',
    'method' => 'post',
    'params' => [
      'controller' => 'Export',
      'action' => 'process'
    ]
  ],
  38 => [
    'route' => '/Kanban/{entityType}',
    'method' => 'get',
    'params' => [
      'controller' => 'Kanban',
      'action' => 'getData'
    ]
  ],
  39 => [
    'route' => '/Attachment/file/{id}',
    'method' => 'get',
    'params' => [
      'controller' => 'Attachment',
      'action' => 'file'
    ]
  ],
  40 => [
    'route' => '/{controller}/{id}',
    'method' => 'get',
    'params' => [
      'controller' => ':controller',
      'action' => 'read',
      'id' => ':id'
    ]
  ],
  41 => [
    'route' => '/{controller}',
    'method' => 'get',
    'params' => [
      'controller' => ':controller',
      'action' => 'index'
    ]
  ],
  42 => [
    'route' => '/{controller}',
    'method' => 'post',
    'params' => [
      'controller' => ':controller',
      'action' => 'create'
    ]
  ],
  43 => [
    'route' => '/{controller}/{id}',
    'method' => 'put',
    'params' => [
      'controller' => ':controller',
      'action' => 'update',
      'id' => ':id'
    ]
  ],
  44 => [
    'route' => '/{controller}/{id}',
    'method' => 'patch',
    'params' => [
      'controller' => ':controller',
      'action' => 'update',
      'id' => ':id'
    ]
  ],
  45 => [
    'route' => '/{controller}/{id}',
    'method' => 'delete',
    'params' => [
      'controller' => ':controller',
      'action' => 'delete',
      'id' => ':id'
    ]
  ],
  46 => [
    'route' => '/{controller}/{id}/stream',
    'method' => 'get',
    'params' => [
      'controller' => 'Stream',
      'action' => 'list',
      'id' => ':id',
      'scope' => ':controller'
    ]
  ],
  47 => [
    'route' => '/{controller}/{id}/posts',
    'method' => 'get',
    'params' => [
      'controller' => 'Stream',
      'action' => 'listPosts',
      'id' => ':id',
      'scope' => ':controller'
    ]
  ],
  48 => [
    'route' => '/{controller}/{id}/subscription',
    'method' => 'put',
    'params' => [
      'controller' => ':controller',
      'id' => ':id',
      'action' => 'follow'
    ]
  ],
  49 => [
    'route' => '/{controller}/{id}/subscription',
    'method' => 'delete',
    'params' => [
      'controller' => ':controller',
      'id' => ':id',
      'action' => 'unfollow'
    ]
  ],
  50 => [
    'route' => '/{controller}/{id}/{link}',
    'method' => 'get',
    'params' => [
      'controller' => ':controller',
      'action' => 'listLinked',
      'id' => ':id',
      'link' => ':link'
    ]
  ],
  51 => [
    'route' => '/{controller}/{id}/{link}',
    'method' => 'post',
    'params' => [
      'controller' => ':controller',
      'action' => 'createLink',
      'id' => ':id',
      'link' => ':link'
    ]
  ],
  52 => [
    'route' => '/{controller}/{id}/{link}',
    'method' => 'delete',
    'params' => [
      'controller' => ':controller',
      'action' => 'removeLink',
      'id' => ':id',
      'link' => ':link'
    ]
  ]
];
