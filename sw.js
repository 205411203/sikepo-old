const filesToCache = [
    ''
];

const staticCacheName = 'pages-cache-v3';

self.addEventListener('install', event => {
    event.waitUntil(
        caches.open(staticCacheName)
        // membuka cache dengan nama staticCacheName
        // jika belum ada maka dibuat cache dgn nama tsb
        // hasilnya akan return cache
              .then(cache => {
                    return cache.addAll(filesToCache);
                    // pada cache ditambah semua file yg telah didaftarkan
              })
    );
});

this.addEventListener('activate', function(event) {
  var cachesToKeep = ['v2'];

  event.waitUntil(
    caches.keys().then(function(keyList) {
      return Promise.all(keyList.map(function(key) {
        if (cachesToKeep.indexOf(key) === -1) {
          return caches.delete(key);
        }
      }));
    })
  );
});

self.addEventListener('activate', event => {
    //console.log('Activating service worker');
    var cacheWhitelist = [staticCacheName];
    // nama cache disimpan dalam bentuk array
    event.waitUntil(
        caches.keys().then(cacheNames => {
            return Promise.all(cacheNames.map(cacheName => {
                        	if (cacheWhitelist.indexOf(cacheName) === -1) {
                        	    return caches.delete(cacheName);
                        	}
                		})
            );
        })
    );
});

self.addEventListener('fetch', event => {

    //console.log('Fetch event for ', event.request.url);
    event.respondWith(
        caches.match(event.request)
        // menyesuaikan permintaan dari halaman client ke cache
              .then(response => {
                  if (response) {
                      console.log('Found ', event.request.url, ' in cache');
                      return response;
                      //jika data yg diminta ada berikan ke client
                  }
                  //console.log('Network request for ', event.request.url);
                  return fetch(event.request,{credentials: 'include'})
                            .then(response => {
                                if (response.status === 404) {
                                    return caches.match('404.html');
                                }  
                                return caches.open(staticCacheName)
                                              .then(cache => {
                                                  cache.put(event.request.url, response.clone());
                                                  return response;
                                              });
                            });
              })
              .catch(error => {
                  console.log('Error, ', error);
                  return caches.match('offline.html');
              })
    );
    
});