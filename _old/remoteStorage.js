// process.umask(077);

var reStore = require('restore'),
    store   = new reStore.FileTree({path: 'storage/test'}),

    server  = new reStore({
                store:  store,
                http:   {port: 6767},
                allow: {
                    signup: true
                  },
              });

server.boot();